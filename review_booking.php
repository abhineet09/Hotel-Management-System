<?php
  session_start();
  $m=1;
  $in=date_create($_SESSION["in"]);$out=date_create($_SESSION["out"]);$diff=date_diff($in,$out)->format("%a");$total=0;
  include("config.php");
  $con=myConnection();
  $sql="select distinct type,rate from rooms;";
  $r=mysqli_query($con,$sql);
  while($rt=mysqli_fetch_array($r,MYSQLI_ASSOC)){
      $rate[$rt['type']]=$rt['rate'];
  }
  $ct=array("deluxe","superior","garden","family","beverely","presidential");
  $rt=array(750,1050,1500,1750,2000);
  if(isset($_POST["submit1"])){
    $ph=$_POST['phone'];
    $nm=$_POST['name'];
    $cty=$_POST['city'];
    $type=$_POST['type'];
    $id1=$_POST['no'];
    if(empty($ph) || empty($nm) || empty($cty) || empty($type) || empty($id1)){
      myAlert("All fields are required");
    }
    else{
    $sql="SELECT max(book_id) from booking";
    $id=mysqli_fetch_row(mysqli_query($con,$sql));
    $id[0]++;
    foreach($ct as $c){
      $ra=[];
      $p1=0;
      if($_SESSION[$c]!=0){
        $sql="SELECT room_no from rooms where type='$c' and next_book_id is null and (curr_dt>'2017-02-15' || curr_dt is NULL);";
        if($pq=mysqli_query($con,$sql)){
          while($r=mysqli_fetch_array($pq)){
            array_push($ra,$r[0]);
          }
          for($i=0;$i<$_SESSION[$c];$i++){
            $sql="SELECT current_book_id from rooms where room_no=$ra[$i];";
            $ch=mysqli_fetch_row(mysqli_query($con,$sql));
            if(empty($ch[0])){
              $p=$_SESSION['out'];
              $q=$_SESSION['in'];
              $sql="UPDATE rooms set current_book_id='$id[0]',curr_dt='$p' where room_no='$ra[$i]';";
              if(mysqli_query($con,$sql)){
                if($m==1){
                  $sql="INSERT into booking values('$id[0]','$ph','$q');";
                  if(!mysqli_query($con,$sql)){ }
                  $sql="INSERT into booking_details values('$id[0]','$q','$p',NULL);";
                  if(!mysqli_query($con,$sql)){} 
                  $sql="INSERT into auth values('$id[0]',0);";
                  if(!mysqli_query($con,$sql)){ } 
                  $sql="select count(name) from customer where phone_no='$ph';"; 
                  $cnt=mysqli_fetch_row(mysqli_query($con,$sql));
                  if($cnt==1){
                    $sql="UPDATE customer set name='$nm',address='$cty',id_no='$id1',id_proof_type='$type';";
                    if(!mysqli_query($con,$sql)){ }
                  }
                  else{
                    $sql="INSERT into customer values('$ph','$nm','$cty','$id1','$type');";
                    if(!mysqli_query($con,$sql)){ } 
                  }
                }
                myAlert("Thank You; Your reservation id is $id[0]. Please check-in to view details.");
              }
              else{
                echo mysqli_error($con);die;
                myAlert("Sorry; Your reservation could not be made.");
              }
            }
            else{
                $p=$_SESSION['in'];
                $q=$_SESSION['out'];
                $sql="UPDATE rooms set next_book_id='$id[0]',nxt_dt='$p' where room_no='$ra[$i]';";
                if(mysqli_query($con,$sql)){
                  $sql="INSERT into booking values('$id[0]','$ph','$q');";
                  if(!mysqli_query($con,$sql)){ die(mysqli_error($con)); } 
                  $sql="INSERT into booking_details values('$id[0]','$p','$q',NULL);";
                  if(!mysqli_query($con,$sql)){ die(mysqli_error($con)); } 
                  $sql="INSERT into auth values('$id[0]',0);";
                  if(!mysqli_query($con,$sql)){ die(mysqli_error($con)); } 
                  $sql="select count(name) from customer where phone_no='$ph';"; 
                $cnt=mysqli_fetch_row(mysqli_query($con,$sql));
                if($cnt==1){
                  $sql="UPDATE customer set name='$nm',address='$cty',id_no='$id1',id_proof_type='$type';";
                  if(!mysqli_query($con,$sql)){  }
                }
                else{
                  $sql="INSERT into customer values('$ph','$nm','$cty','$id1','$type');";
                  if(!mysqli_query($con,$sql)){} 
                }
                  myAlert("Thank You; Your reservation id is $id[0]. Please check-in to view details.");
                }
                else{
                  echo mysqli_error($con);
                  myAlert("Sorry; Your reservation could not be made.");
                }
            }
            
          }
        }
        else{
          header("location:home.php");
        }
      }
      $p1=1;
    }
  }
  }
  if(isset($_POST["review_book"])){
    $arr["deluxe"]=$_POST["deluxeR"];$arr["superior"]=$_POST["superiorR"];$arr["garden"]=$_POST["gardenR"];$arr["family"]=$_POST["familyR"];$arr["beverely"]=$_POST["beverelyR"];$arr["presidential"]=$_POST["presidentR"];
    $_SESSION["deluxe"]=$_POST["deluxeR"];$_SESSION["superior"]=$_POST["superiorR"];$_SESSION["garden"]=$_POST["gardenR"];$_SESSION["family"]=$_POST["familyR"];$_SESSION["beverely"]=$_POST["beverelyR"];$_SESSION["presidential"]=$_POST["presidentR"];

  
?>
    <div id="review" style="height: 800px;width:100%;background-color: grey;position: relative;top:100px;">
      <h1 style="position: relative;left:20px">Rooms Selected</h1>
      <table style="position: relative;left:20px;top:-150px">
        <tr>
          <th>ROOMS TYPE</th>
          <th style="padding: 25px">NUMBER OF ROOMS</th>
          <th>RATE</th>
          <th style="padding-left: 55px">TOTAL</th>
        </tr>
      <?php
      $sum=0;
        foreach($arr as $key=>$val){
          if($val!=0){
            $total+=($val*$rate[$key]);
            echo "<tr style='font-size:15px'><td>".strtoupper($key)."</td><td style='padding-left:100px'>".$val."</td><td>".$rate[$key]."</td><td style='padding-left:70px'>".$val*$rate[$key]."</td></tr></h1>";
              $sum+=$val*$rate[$key];
          }
        }
        $gst=(0.075*$sum);
        $total=$sum+$gst;
      ?>
      <div style="position: relative;left:800px"><h1>TOTAL RENT:<?php echo $sum."<br>GST (7.5%): ".$gst."<br>PAYABLE AMOUNT: ".$total;?></h1></div>
    </table>
    <div style="position:relative;top:70px;left:350px">
    <form method="post" action="review_booking.php">
    <div style="position: relative;overflow: hidden;position: relative;top:-50px;left:-300px">
      <h1>Enter Details:</h1>
      Phone Number : <input type="text" name="phone">
      Name : <input type="text" name="name">
      City : <input type="text" name="city"><br><br>
      ID Proof Type : <input type="text" name="type">
      ID Proof Number : <input type="text" name="no">
    </div>
      <input type="submit" name="submit1" value="" style="background-image: url('./hotel/icons/confirm.png');background-size:100% 100%;height: 130px;width: 130px;position: relative;top:20px;left:300px">
      <input type="submit" name="submit2" value="" style="background-image: url('./hotel/icons/update.png');background-size:100% 100%;height: 130px;width: 130px;position: relative;top: 20px;left: 300px">
    </form>
    <div style="position: relative;top:10px;left: 320px"><h1 style="font-size: 15px">CONFIRM</h1><h1 style="position: relative;left: 150px;top:-25px;font-size: 15px">UPDATE</h1></div>
    </div> 
  </div>
    <?php
  }
  else{
    echo "<h1 position:relative;top:300px;color:black>PLEASE SELECT ROOMS</h1>";
  }
?>

<html>
<head>
<title>The Beverely Hills Hotel</title>
<link rel="icon" href="./images/favicon.ico">
<link href='./CSS/home.css' rel='stylesheet' type='text/css'></link>
<link href='./CSS/footer.css' rel='stylesheet' type='text/css'></link>
</head>
<body>
<header>
    <div id='nav'>
      <ul>
        <img src="hotel/logo.jpg" alt="Company's Logo" style="width:300px;height:60px;">
        <li><a href="checkin.php" id="book_now"><img src="hotel/checkin.jpg" alt="Boking Option" style="height:40px;width:150px"></a></li>
        <li><a href="about.php">ABOUT US</a></li>
        <li><a href="services.php">SERVICES</a></li>
        <li><a href="book_rooms.php">BOOK ROOM</a></li>
          <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">CUISINE</a>
            <div class="dropdown-content">
                <a href="./show_restaurant.php">KINGSMEN RESTAURANT</a>
                <a href="./show_bar.php">BAR NINETEEN 12</a>
            </div>
         </li>
         <li><a href="show_rooms.php">SUITES & ROOMS</a></li>
         <li><a href="home.php">HOME</a></li>
      </ul>
    </div>
</header>

<div id="footer">
  <div id="menu">
    <a href='./home.php'>HOME</a><br>
    <a href='./show_rooms.php'>SUITES & ROOMS</a><br>
    <a href='./offers.php'>SERVICES</a><br>
    <a href='./about.php'>ABOUT US</a><br>
    <h3 style="font-style: italic;font-size:20;">Subscribe to mailing list:</h3>
    <form method="post">
      <img src="images/email.jpg" alt="Submit" style="height:40px;margin:10px;position: relative;top:-20px"><input type="text" name="email" style="width:200px;height:30px;box-sizing: border-box;border:2px solid black;position: relative;top:-45px">
      </form>
      <a href="./"><img src="images/submit.jpg" alt="Submit" style="height:40px;position:relative;right:-280px;top:-95px"></a>
  </div>
  <div id="contact">
    <h4 style="font-size: 25;color: black;position: relative;top:-30px;font-style: italic;">Contact Us:</h4>
    <h2 style="font-family:helevetica;font-size: 17;color: black;">The Beverly Hills Hotel in Beverly Hills 9641 Sunset Boulevard, 90210 USA<br>
        Email: tim_doug@gmail.com;<br>
        Phone: 9802342231 (10:00 am - 09:00 pm)
    </h2>
  </div>
  <div id="social">
    <div style="position: relative;left:-135px">
    <h3 style="font-style: italic;font-size:30;position: relative;text-align: left;top:-25;left:150px">The Social Club</h3>
    
    <a href="https://www.facebook.com/Beverlyhillshotel/"><img src="./images/facebook.jpg" alt="facebookLogo" style="height:60px;width:60px;position:relative;top:-40px;left:170px"></a>
    <a href="https://twitter.com/BevHillsZA"><img src="./images/twitter.jpg" alt="twitterLogo" style="height:60px;width:60px;position:relative;top:-40px;left:170px"></a>
    <a href="https://www.instagram.com/thebeverlyhills/"><img src="./images/instagram.jpg" alt="instagramLogo" style="height:60px;width:60px;position:relative;top:-40px;left:170px"></a>
    <a href="https://www.youtube.com/channel/UCyUqZfANZvWPcYyusCakGew"><img src="./images/youtube.jpg" alt="youtubeLogo" style="height:60px;width:60px;position:relative;top:-40px;left:170px"></a>
  </div>
  </div>
  <div id="quality">
    <h5 style="font-style: italic;font-size:20;position: relative;text-align: left;top:-50;left:0px">Quality First!</h5>
    <a href="./"><img src="./images/qt1.jpg" alt="facebookLogo" style="height:100px;width:100px;position:relative;top:-65px;left:0px"></a>
    <a href="./"><img src="./images/qt2.jpg" alt="twitterLogo" style="height:100px;width:100px;position:relative;top:-65px;left:0px"></a>
    <a href="./"><img src="./images/qt3.jpg" alt="instagramLogo" style="height:100px;width:100px;position:relative;top:-65px;left:0px"></a>
    <a href="./"><img src="./images/qt4.jpg" alt="youtubeLogo" style="height:100px;width:100px;position:relative;top:-65px;left:0px"></a>
  </div>


  <div id="terms">
      <img src="./hotel/5star.jpg" alt="youtubeLogo" style="height:70px;width:200px;position:relative;top:10px;left:210px">
      <a href='./privacy.php' style="left: -70px;top:35px">Privacy</a>
      <a href='./termsOfUse.php' style="left: -70px;top:35px">Terms Of Use</a>
  </div>

</div>
</body>