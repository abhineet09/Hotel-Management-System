<html>
<head>
<title>The Beverely Hills Hotel</title>
<link rel="icon" href="./images/icon.ico">
<link href='./CSS/navBar.css' rel='stylesheet' type='text/css'></link>
<link href='./CSS/menu.css' rel='stylesheet' type='text/css'></link>
<body style="overflow: hidden;">
<?php
  include('session.php');
  $con=myConnection();
  $myUs=$_SESSION['login_user'];
  $sql="SELECT c.name from customer c where c.phone_no =(select b.phone_no from booking b where b.book_id=$myUs);";
  $user=mysqli_fetch_row(mysqli_query($con,$sql));
  mysqli_close($con);
  $gen="male";
  $room=array(101,304);
  $guest=array("ABHINEET","SIMANT","HARSH");
  $avail=array("01:00 PM","02:00 PM","03:00 PM","04:00 PM","05:00 PM");
  $book_id=1102;
?>
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
         <li><a href="home.php">HOME</a>
      </ul>
    </div>
</header>
<div id="container" style="overflow: hidden;">
    <div id="book_taxi">
          <img src="hotel/staff.jpg" alt="Company's Logo" style="width:100%;height:100%;opacity: 0.3">
          <div id="booking_details" style="height:500px;width:1100px;position: relative;top:-700px;left:80px">
              <a>BOOKING ID: <?php echo $myUs; ?></a>
          <div id="rooms" style="width: 1000px;height: 100px;position: relative;top:20px;left: 100px">
              <?php
                $con=myConnection();

                $sql="SELECT t.type,t.rate from rooms t where t.current_book_id=$myUs;";
                $tp=mysqli_query($con,$sql);
                if(empty($tp)){
                  echo "No current booking";

                }
                else{  
                  echo "<table  style='width:700px;position:relative;top:70px;left:-120px'><tr ><th style='position:relative;left:-50px'>ROOM TYPE</th><th style='position:relative;left:-20px'>RATE</th><th style='position:relative;left:-80px'>PAYABLE AMOUNT</th></tr><tr>";
                  while($r=mysqli_fetch_row($tp)){
                    $in=mysqli_fetch_row(mysqli_query($con,"SELECT check_in_date from booking where book_id=$myUs"));
                    $in=(string) $in[0];
                    $dt=date_create($in);
                    $out=mysqli_fetch_row(mysqli_query($con,"SELECT check_out_date from booking_details where book_id=$myUs"));
                    $out=(string)$out[0];
                    $dt2=date_create($out);
                    $stay=date_diff($dt,$dt2);
                    $stay=(int)$stay->format("%a");
                    
                    echo "<tr><td><p style='font-size:15;font-family:helvetica;position:relative;left:25px'>".strtoupper($r[0])."</p></td>
                        <td><p style='font-size:15;font-family:helvetica;position:relative;left:15px'>".$r[1]."</p></td>
                        <td><p style='font-size:15;font-family:helvetica;position:relative;left:15px'>".$stay*$r[1].' $'."</p></td>";
                }
                echo '</table>';
              }
              ?>
              <h1 style="position: relative;top:-100px;left: -100px">Check-in Date: <?php echo $in;?></h1><h1 style="position: relative;top:-160px;left: 350px">Days of stay:  <?php echo $stay.' Days';?></h1>
          </div>
          <div id="rooms" style="width: 1000px;height: 100px;position: relative;top:200px;left: 100px">
              <?php
                $sql="SELECT  nm,bill  from restaurant where book_id=$myUs union select nm,bill from bar where book_id=$myUs union select nm,bill from lounge where book_id=$myUs union select nm,bill from cafe where book_id=$myUs union select nm,bill from spa where book_id=$myUs union select nm,bill from beauty where book_id=$myUs union select nm,bill from transport where book_id=$myUs select nm,bill from laundary where book_id=$myUs;";
                $tp=mysqli_query($con,$sql);
                if(empty($tp)){
                  echo "No current activity expense";

                }
                else{  
                  echo "<table  style='width:700px;position:relative;top:-100px;left:-120px'><tr ><th style='position:relative;left:-90px'>EXPENSE</th><th style='position:relative;left:-150px'>BILL AMOUNT</th></tr><tr>";
                  while($r=mysqli_fetch_row($tp)){
                    if(!empty($r[1])){
                    echo "<tr><td><p style='font-size:15;font-family:helvetica;position:relative;left:25px'>".strtoupper($r[0])."</p></td>
                        <td><p style='font-size:15;font-family:helvetica;position:relative;left:15px'>".$r[1]."</p></td>";
                    }
                }
                echo '</table>';
              }
              ?>
          </div>
          </div>
          <p1 style="position: relative;top:-800px;left: 700px;color: red">** For any query please contact the reception.</p1>
          <div id="checkout" style="position: relative;top:-780px;left: 700px">
    <a href="./req_out.php" style="position: relative;top:-30px;left: -10px;font-size: 30px"><img src="hotel/checkout.jpg" alt="Company's Logo" style="width:120px;height:100px;position: relative;top:40px">REQUEST CHECK-OUT</a>
  </div>
    </div>
</div>
<div id="menu" style="position: fixed">
  <div id="avatar">
    <?php
    if($gen=="male"){
      echo "<img src='hotel/avatar.jpg' alt='Company's Logo' style='width:80px;height:80px;position: relative;padding-left:20px;'>";
    }
    else{
      echo "<img src='hotel/avatar_girl.jpg' alt='Company's Logo' style='width:80px;height:80px;position: relative;padding-left:20px;'>";
    }
    ?>
    <h1 style="font-family: helvetica;font-size: 20;text-decoration:none;color:white;padding-left: 20px;position: relative;top:-70px;left:100px">HELLO<br> <?php echo $user[0] ?></h1>
  </div>
  <div id="menu_option">
    <a href="./booking.php" style="position: relative;top:10px;">YOUR BOOKINGS</a><br>
    <a href="./laundary.php" style="position: relative;top:30px;">LAUNDARY</a><br>
    <a href="./restaurant.php" style="position: relative;top:50px;">RESTRAUNTS</a><br>
    <a href="./spa.php" style="position: relative;top:70px;">SPA</a><br>
    <a href="./transport.php" style="position: relative;top:90px;">TRANSPORTATION</a><br>
    <a href="./beauty.php" style="position: relative;top:110px;">HAIR & BEAUTY SALOON</a><br>
  </div>
  <div id="checkout">
    <a href="./logout.php" style="position: relative;top:-30px;left: -10px"><img src="hotel/checkout.jpg" alt="Company's Logo" style="width:120px;height:100px;position: relative;top:40px">SIGN-OUT</a>
  </div>
</div>
</body>
</html>