<html>
<head>
<title>The Beverely Hills Hotel</title>
<link rel="icon" href="./images/icon.ico">
<link href='./CSS/navBar.css' rel='stylesheet' type='text/css'></link>
<link href='./CSS/menu.css' rel='stylesheet' type='text/css'></link>

<body style="overflow: hidden">
<?php
  include('session.php');
  $myUs=$_SESSION['login_user'];
  $sql="SELECT c.name from customer c where c.phone_no =(select b.phone_no from booking b where b.book_id=$myUs);";
  $user=mysqli_fetch_row(mysqli_query($con,$sql));
  $gen="male";
  $room=[];
  $sql="SELECT room_no from rooms where current_book_id=$myUs;";
  $qr=mysqli_query($con,$sql);
  while($r=mysqli_fetch_row($qr)){
    array_push($room,$r[0]);
  }
  if(isset($_POST["submit"])){
    $sql="SELECT inlock from auth where book_id='$myUs';";
    $ch=mysqli_fetch_row(mysqli_query($con,$sql));
    if($ch[0]==1){
    $rm=$_POST["room"];
    $tm=$_POST["pickup"];
    $sql="INSERT into laundary values('laundary','$myUs','$rm','$tm',NULL);";
    if(mysqli_query($con,$sql)){
      myAlert("Our houskeeping staff will receive your laundry on time.");
    }
    else{
      myAlert("Sorry; Your request could not be made.");
    }
    }
    else{
      myAlert("Sorry, Only current guests are allowed to avail this service.");
    }
  }
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
<div id="container">
    <div id="book_taxi">
          <img src="hotel/laundary.jpg" alt="Company's Logo" style="width:100%;height:100%;opacity: 0.5">
          <form method="post" action="./laundary.php" style="position: relative;top:-150px">
            <a style="position: relative;top: -600px;left: 250px;">ROOM NO.</a>
            <a style="position: relative;top:-570px;left: 80px">
              <select name="room" id="room">
                <?php
                  foreach($room as $room_no) { ?>
                    <option value="<?php echo $room_no ?>"> <?php echo $room_no ?></option>
                <?php
                } ?>
              </select> 
          </a>
          
          <a style="position: relative;top:-600px;left:300px">PICK-UP TIME</a>
          <a style="position: relative;top:-570px;left:100px"><input type="time" name="pickup" value="01:00:00"> </a>
          <input type="submit" name="submit" value="" style="background-image: url('./hotel/submit.jpg');background-size:100% 100%;position: relative;top: -450px;left:60px;height: 60px;width: 250px">
        </form>
          
    </div>
</div>

<div style="position: relative;top: -400px;left: 300px;">
  <?php
      $sql="SELECT time_hrs,pickup_room from laundary where book_id=$myUs;";
      $qw=mysqli_query($con,$sql);
    if(mysqli_affected_rows($con)>0){
      echo "<h1>YOUR CURRENT LAUNDARY REQUEST:<br><br>";
      while($r=mysqli_fetch_row($qw)){
        echo $r[0]."  @ Room No. ".$r[1]."<br>";
      }
    }
    echo "</h1><br><br><br>";
    echo "<h1 style='color:red;font-size:20;'>**If cancellation is required; You can deny the staff when the service is offered.</h1>";
  ?>
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
    <h1 style="font-family: helvetica;font-size: 20;text-decoration:none;color:white;padding-left: 20px;position: relative;top:-70px;left:100px">HELLO<br> <?php echo $user[0]; ?></h1>
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
    <a href="./logout.php" style="position: relative;top:-30px;left: -10px"><img src="hotel/checkout.jpg" alt="Company's Logo" style="width:120px;height:100px;position: relative;top:40px">CHECK-OUT</a>
  </div>
</div>

</body>
</html>