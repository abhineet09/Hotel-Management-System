<html>
<head>
<title>Home</title>
<link rel="icon" href="./images/icon.ico">
<link href='./CSS/navBar.css' rel='stylesheet' type='text/css'></link>
<link href='./CSS/menu.css' rel='stylesheet' type='text/css'></link>
<link href='./CSS/restaurant.css' rel='stylesheet' type='text/css'></link>
<body style="overflow: hidden;">
<?php
  include('session.php');
  $myUs=$_SESSION['login_user'];
  $sql="SELECT c.name from customer c where c.phone_no =(select b.phone_no from booking b where b.book_id=$myUs);";
  $user=mysqli_fetch_row(mysqli_query($con,$sql));
  $gen="male";
  if(isset($_POST["submit"])){
    $sql="SELECT inlock from auth where book_id='$myUs';";
    $ch=mysqli_fetch_row(mysqli_query($con,$sql));
    if($ch[0]==1){
    $car=$_POST["car_type"];
    $dst=$_POST["dest"];
    $frm=$_POST["from"];
    $to=$_POST["to"];
    $pk=$_POST["pickup"];
    $sql="INSERT into transport values('transport','$myUs','$car','$dst','$frm','$to','$pk',NULL);";
    if(mysqli_query($con,$sql)){
      myAlert("Reception will contact you 30 minutes prior to pickup time for confirmation.");
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
          <img src="hotel/book_car.jpg" alt="Company's Logo" style="width:100%;height:100%;opacity: 0.5">
          <form method="post" action="./transport.php" style="position: relative;top:-150px">
            <a style="position: relative;top: -600px;left: 250px;">CAR TYPE</a>
            <a style="position: relative;top:-570px;left: 80px">
            <select name="car_type"> 
              <option value="sedan">SEDAN</option><br>
              <option value="SUV">SUV</option>
            </select>
          </a>
          <a style="position: relative;top: -600px;left: 300px">DESTINATION</a>
          <a style="position: relative;top:-570px;left: 100px">
            <select name="dest"> 
              <option value="city">CITY ERRANDS</option>
              <option value="outstation">OUTSTATION</option>
              <option value="airport">AIRPORT DROP</option><br>
            </select>
          </a>
          <a style="position: relative;top:-500px;left:-440px">FROM </a><a style="position: relative;top:-470px;left:-575px"> <input type="date" name="from" value="<?php echo date('Y-m-d');?>" min="<?php echo date('Y-m-d'); ?>"></a>
          <a style="position: relative;top:-500px;left:-260px">TO</a> 
          <a style="position: relative;top:-470px;left:-340px"><input type="date" name="to" value="<?php echo date('Y-m-d');?>" min="<?php echo date('Y-m-d'); ?>"></a>
          <a style="position: relative;top:-450px;left:220px">PICK-UP TIME</a>
          <a style="position: relative;top:-420px;left:30px"><input type="time" name="pickup" value="01:00:00"> </a>
          <input type="submit" name="submit" value="" style="background-image: url('./hotel/submit.jpg');background-size:100% 100%;position: relative;top: -430px;left:240px;height: 60px;width: 250px">
        </form>
    </div>

<div style="position: relative;top: -400px;left: 100px;">
  <?php
      $sql="SELECT type,destination,from_dt,to_dt,pickup from transport where book_id=$myUs;";
      $qw=mysqli_query($con,$sql);
    if(mysqli_affected_rows($con)>0){
      echo "<h1>YOUR CURRENT BOOKINGS:<br><br>";
      echo "<table border=1><tr><th style:'padding-right:10px'>CAR TYPE</th><th style:'padding-right:10px'>DESTINATION</th><th style:'padding-right:10px'>FROM</th><th style:'padding-right:10px'>TO</th><th>PICK-UP TIME</th></tr>";
      while($r=mysqli_fetch_row($qw)){
        echo "<tr><th>".strtoupper($r[0])."</th><th>".strtoupper($r[1])."</th><th>$r[2]</th><th>$r[3]</th><th>$r[4]</th></tr>";
      }
    }
    echo "</table></h1><br><br><br>";
    echo "<h1 style='color:red;font-size:20;position:relative;top:-30px'>**If cancellation is required; You can deny during confirmation.</h1>";
  ?>
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