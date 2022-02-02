<?php
  session_start();
  include("config.php");
  $i=0;$rate=array(750,1050,1500,1750,2000,5000);
  $del=array("A sense of urban interior with core of peace within.","All you require to remember.","Stay at nature's lap.","Family is all we have","Vintage beverely hills way!","Nothing better!");
  $del_am=array("stay.jpg","food.jpg","wiifi.jpg","phone.jpg","mock.jpg","jac.jpg");
  $chkIn=date('Y-m-d');$chkOut=(new DateTime('tomorrow'))->format('Y-m-d');$_SESSION["in"]=$chkIn;$_SESSION["out"]=$chkOut;
  if(isset($_POST["checkAv"])){
    $chkIn=$_POST["Check-in"];$chkOut=$_POST["Check-out"];$rmA=$_POST["rooms"];
    $_SESSION["in"]=$chkIn;$_SESSION["out"]=$chkOut;
    if(date($chkIn)>date($chkOut)){
      myAlert("Check-In date cannot be less than Check-Out");
    }
    else{
      $con=myConnection();
      $sql="SELECT type, numb from( Select type, count(type) as numb from rooms where current_book_id is null  GROUP BY type) as avail where numb > 0;";
      if(!$rst=mysqli_query($con,$sql)){
        echo mysqli_error($con);
        die('sry');
      }
      else{
       while($r=mysqli_fetch_array($rst,MYSQLI_ASSOC)){
          $roomAv[$r["type"]]=$r["numb"];
       }
      }
      $sql="SELECT type, numb from( Select type, count(type) as numb from rooms where next_book_id is  not null and nxt_dt<'$chkIn' GROUP BY type) as avail where numb > 0;";
      if(!$rst=mysqli_query($con,$sql)){
        echo mysqli_error($con);
        die('sry');
      }
      else{
       while($r=mysqli_fetch_array($rst,MYSQLI_ASSOC)){
          $roomAv[$r["type"]]=$r["numb"];
       }
    }
  }}
  else{
      $roomAv=array("deluxe"=>5,"superior"=>4,"garden"=>3,"family"=>8,"beverely"=>1,"presidential"=>3);
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

<div id="book" style="position: relative;top:100px">
  <form method="post" action="book_rooms.php">
    <div id="box" style="border: solid 2px brown; height: 250px;width:100%;background-color: #DEDADA">
    <img src="./hotel/submit.png" alt="Submit Button" style="height:105px;width: 205px;">
      <span style="padding-left:2px;position: relative;top:40px;right: 200px;font-family: helvetica;font-size: 20;color:brown;">Check-in Date</span>
      <span style="padding-left:85px;position: relative;top:40px;right: 230px;font-family: helvetica;font-size: 20;color:brown;">Check Out Date</span>
      <span style="padding-left:95px;position: relative;top:40px;right: 290px;font-family: helvetica;font-size: 20;color:brown;">Rooms</span><br>
      <span style="padding-left:10px; margin: 2px;position: relative;top:45px">
        <input type="date" name="Check-in" value="<?php echo date('Y-m-d');?>" min="<?php echo ('Y-m-d'); ?>">
      </span>
      <span style="padding-left:45px; margin: 2px;position: relative;top:45px">
        <input type="date"  name="Check-out" value="<?php echo (new DateTime('tomorrow'))->format('Y-m-d');?>" min="<?php echo (new DateTime('tomorrow'))->format('Y-m-d');?>">
      </span>
      <span style="padding-left:40px;margin:2px;position: relative;top:45px">
        <select name="rooms">
          <?php 
            foreach(range(1,5) as $r){
                echo "<option value=$r>$r</option>";
            }
          ?>
        </select>
      </span>
      <input type="submit" name="checkAv" value="" style="background:url(./hotel/check.jpg) no-repeat;position: relative;top:50px;right:-50px;width: 130px;height:30px;background-size:130px 30px " />
      <h1 style="font-family:courier;font-size: 15;color: red;position: relative;top:50px;padding-left: 5px">*Only 3 adults + 2 children allowed per room</h1>
    </div>
  </form>
</div>
<div id="rooms" style="background-color: #D5D7DA;width: 100%;position: relative;top:170px">
<form method="post" action="review_booking.php">
<?php
if(array_key_exists("deluxe",$roomAv)){?>
<div id="roomT" style="background-color: #D5D7DA;height:300px;width:100%">
  <div id="pic" style="background-color: red;height:290px;width:350px;position: relative;left:5px;top:5px">
    <img src="./hotel/<?php echo 'room5'; ?>.jpg" style="height: 100%;width:100%">
  </div>
  <div id="about" style="height:285px;width:600px;border:2px solid black;position: relative;top:-285px;left:380px">
    <div id="para" style="position: relative;top:-15px;left:20px">
      <h1><?php echo "DELUXE ROOM"; ?></h1>
      <p1 style="font-family: helvetica;font-size: 25;position: relative;top:-10px"><?php echo $del[0];?>
    </div>
    <div id="im" style="position: relative;left: 30px">
      <?php foreach($del_am as $r){
        echo "<img src='hotel/icons/$r' style='padding:5px'>"; 
        }
      ?>
    </div>
    <h1 style="font-family: helvetica;font-size: 25px;position: relative;left: 20px">RATE:<?php echo $rate[0].'$'; ?></h1>
  </div>
  <div id="det" style="height:285px;width:400px;border:2px solid black;position: relative;top:-575px;left:1010px">
    <h1 style="font-family: helvetica;font-size: 25px;padding: 15px;position: relative;top:80px">Select Room:</h1> 
    <select name="deluxeR" style="position: relative;top:27px;left:200px;height: 25px;width:70px">
      <?php   
        for($i=0;$i<=$roomAv["deluxe"];$i++){
          echo "<option value=$i>$i</option>";
        }
      ?>
    </select>
  </div>
</div>
<?php } ?>
<?php
if(array_key_exists("superior",$roomAv)){?>
<div id="roomT" style="background-color: #D5D7DA;height:300px;width:100%">
  <div id="pic" style="background-color: red;height:290px;width:350px;position: relative;left:5px;top:5px">
    <img src="./hotel/<?php echo 'room6'; ?>.jpg" style="height: 100%;width:100%">
  </div>
  <div id="about" style="height:285px;width:600px;border:2px solid black;position: relative;top:-285px;left:380px">
    <div id="para" style="position: relative;top:-15px;left:20px">
      <h1><?php echo "SUPERIOR ROOM"; ?></h1>
      <p1 style="font-family: helvetica;font-size: 25;position: relative;top:-10px"><?php echo $del[1];?>
    </div>
    <div id="im" style="position: relative;left: 30px">
      <?php foreach($del_am as $r){
        echo "<img src='hotel/icons/$r' style='padding:5px'>"; 
        }
      ?>
    </div>
    <h1 style="font-family: helvetica;font-size: 25px;position: relative;left: 20px">RATE:<?php echo $rate[1].'$'; ?></h1>
  </div>
  <div id="det" style="height:285px;width:400px;border:2px solid black;position: relative;top:-575px;left:1010px">
    <h1 style="font-family: helvetica;font-size: 25px;padding: 15px;position: relative;top:80px">Select Room:</h1> 
    <select name="superiorR" style="position: relative;top:27px;left:200px;height: 25px;width:70px">
      <?php   
        for($i=0;$i<=$roomAv["superior"];$i++){
          echo "<option value=$i>$i</option>";
        }
      ?>
    </select>
  </div>
</div>
<?php } ?>
<?php
if(array_key_exists("garden",$roomAv)){?>
<div id="roomT" style="background-color: #D5D7DA;height:300px;width:100%">
  <div id="pic" style="background-color: red;height:290px;width:350px;position: relative;left:5px;top:5px">
    <img src="./hotel/<?php echo 'pic47'; ?>.jpg" style="height: 100%;width:100%">
  </div>
  <div id="about" style="height:285px;width:600px;border:2px solid black;position: relative;top:-285px;left:380px">
    <div id="para" style="position: relative;top:-15px;left:20px">
      <h1><?php echo "GARDEN SUITE"; ?></h1>
      <p1 style="font-family: helvetica;font-size: 25;position: relative;top:-10px"><?php echo $del[2];?>
    </div>
    <div id="im" style="position: relative;left: 30px">
      <?php foreach($del_am as $r){
        echo "<img src='hotel/icons/$r' style='padding:5px'>"; 
        }
      ?>
    </div>
        <h1 style="font-family: helvetica;font-size: 25px;position: relative;left: 20px">RATE:<?php echo $rate[2].'$'; ?></h1>
  </div>
  <div id="det" style="height:285px;width:400px;border:2px solid black;position: relative;top:-575px;left:1010px">
    <h1 style="font-family: helvetica;font-size: 25px;padding: 15px;position: relative;top:80px">Select Room:</h1> 
    <select name="gardenR" style="position: relative;top:27px;left:200px;height: 25px;width:70px">
      <?php   
        for($i=0;$i<=$roomAv["garden"];$i++){
          echo "<option value=$i>$i</option>";
        }
      ?>
    </select>
  </div>
</div>
<?php } ?>
<?php
if(array_key_exists("family",$roomAv)){?>
<div id="roomT" style="background-color: #D5D7DA;height:300px;width:100%">
  <div id="pic" style="background-color: red;height:290px;width:350px;position: relative;left:5px;top:5px">
    <img src="./hotel/<?php echo 'room1'; ?>.jpg" style="height: 100%;width:100%">
  </div>
  <div id="about" style="height:285px;width:600px;border:2px solid black;position: relative;top:-285px;left:380px">
    <div id="para" style="position: relative;top:-15px;left:20px">
      <h1><?php echo "FAMILY SUITE"; ?></h1>
      <p1 style="font-family: helvetica;font-size: 25;position: relative;top:-10px"><?php echo $del[3];?>
    </div>
    <div id="im" style="position: relative;left: 30px">
      <?php foreach($del_am as $r){
        echo "<img src='hotel/icons/$r' style='padding:5px'>"; 
        }
      ?>
<h1 style="font-family: helvetica;font-size: 25px;position: relative;left: 20px">RATE:<?php echo $rate[3].'$'; ?></h1>
    </div>
  </div>
  <div id="det" style="height:285px;width:400px;border:2px solid black;position: relative;top:-575px;left:1010px">
    <h1 style="font-family: helvetica;font-size: 25px;padding: 15px;position: relative;top:80px">Select Room:</h1> 
    <select name="familyR" style="position: relative;top:27px;left:200px;height: 25px;width:70px">
      <?php   
        for($i=0;$i<=$roomAv["family"];$i++){
          echo "<option value=$i>$i</option>";
        }
      ?>
    </select>
  </div>
</div>
<?php } ?>
<?php
if(array_key_exists("beverely",$roomAv)){?>
<div id="roomT" style="background-color: #D5D7DA;height:300px;width:100%">
  <div id="pic" style="background-color: red;height:290px;width:350px;position: relative;left:5px;top:5px">
    <img src="./hotel/<?php echo 'room7'; ?>.jpg" style="height: 100%;width:100%">
  </div>
  <div id="about" style="height:285px;width:600px;border:2px solid black;position: relative;top:-285px;left:380px">
    <div id="para" style="position: relative;top:-15px;left:20px">
      <h1><?php echo "BEVERELY HILLS SUITE"; ?></h1>
      <p1 style="font-family: helvetica;font-size: 25;position: relative;top:-10px"><?php echo $del[4];?>
    </div>
    <div id="im" style="position: relative;left: 30px">
      <?php foreach($del_am as $r){
        echo "<img src='hotel/icons/$r' style='padding:5px'>"; 
        }
      ?>
    </div>
        <h1 style="font-family: helvetica;font-size: 25px;position: relative;left: 20px">RATE:<?php echo $rate[4].'$'; ?></h1>
  </div>
  <div id="det" style="height:285px;width:400px;border:2px solid black;position: relative;top:-575px;left:1010px">
    <h1 style="font-family: helvetica;font-size: 25px;padding: 15px;position: relative;top:80px">Select Room:</h1> 
    <select name="beverelyR" style="position: relative;top:27px;left:200px;height: 25px;width:70px">
      <?php   
        for($i=0;$i<=$roomAv["beverely"];$i++){
          echo "<option value=$i>$i</option>";
        }
      ?>
    </select>
  </div>
</div>
<?php } ?>
<?php
if(array_key_exists("presidential",$roomAv)){?>
<div id="roomT" style="background-color: #D5D7DA;height:300px;width:100%">
  <div id="pic" style="background-color: red;height:290px;width:350px;position: relative;left:5px;top:5px">
    <img src="./hotel/<?php echo 'room2'; ?>.jpg" style="height: 100%;width:100%">
  </div>
  <div id="about" style="height:285px;width:600px;border:2px solid black;position: relative;top:-285px;left:380px">
    <div id="para" style="position: relative;top:-15px;left:20px">
      <h1><?php echo "PRESIDENTIAL SUITE"; ?></h1>
      <p1 style="font-family: helvetica;font-size: 25;position: relative;top:-10px"><?php echo $del[5];?>
    </div>
    <div id="im" style="position: relative;left: 30px">
      <?php foreach($del_am as $r){
        echo "<img src='hotel/icons/$r' style='padding:5px'>"; 
        }
      ?>
    </div>
        <h1 style="font-family: helvetica;font-size: 25px;position: relative;left: 20px">RATE:<?php echo $rate[5].'$'; ?></h1>
  </div>
  <div id="det" style="height:285px;width:400px;border:2px solid black;position: relative;top:-575px;left:1010px">
    <h1 style="font-family: helvetica;font-size: 25px;padding: 15px;position: relative;top:80px">Select Room:</h1> 
    <select name="presidentR" style="position: relative;top:27px;left:200px;height: 25px;width:70px">
      <?php   
        for($i=0;$i<=$roomAv["presidential"];$i++){
          echo "<option value=$i>$i</option>";
        }
      ?>
    </select>
  </div>
</div>
<?php } ?>
<div style="min-height: 100px"></div>
<div id="overall" style="position: fixed;top:735px;z-index: 10;background-color: white;height: 90px;width: 100%;left:0px">
  <input type="submit" src="./hotel/booknowbutton.png" name="review_book"  value="" style="height:105px;width: 205px;position: relative;left:1220px;background-image:url('./hotel/booknowbutton.png');background-size: 110% 110%;background-color: white">
  <img src="./hotel/icons/checkin.png" style="position: relative;top:-30px;left:-180px;height: 50px;width: 50px">
  <h1 style="position: relative;top:-105px;left:110px"><?php echo $chkIn; ?></h1>
  <img src="./hotel/icons/checkout.png" style="position: relative;top:-170px;left:450px;height: 50px;width: 50px">
  <h1 style="position: relative;top:-235px;left:520px"><?php echo $chkOut; ?></h1>
</div>
</form>


</div>

</div>
</body>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 10000); // Change image every 2 seconds
}
</script>
</html>