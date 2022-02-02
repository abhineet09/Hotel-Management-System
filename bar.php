<html>
<head>
<title>The Beverely Hills Hotel</title>
<link rel="icon" href="./images/icon.ico">
<link href='./CSS/navBar.css' rel='stylesheet' type='text/css'></link>
<link href='./CSS/menu.css' rel='stylesheet' type='text/css'></link>
<link href='./CSS/restaurant.css' rel='stylesheet' type='text/css'></link>
<body style="overflow: hidden">
<?php
  include('session.php');
  $con=myConnection();
  $myUs=$_SESSION['login_user'];
  $sql="SELECT c.name from customer c where c.phone_no =(select b.phone_no from booking b where b.book_id=$myUs);";
  $user=mysqli_fetch_row(mysqli_query($con,$sql));
  $gen="male";
  $sql="SELECT phone_no from booking where book_id=$myUs";
  $ph=mysqli_fetch_row(mysqli_query($con,$sql));
  if(isset($_POST["submit"])){
    $sql="SELECT inlock from auth where book_id='$myUs';";
    $ch[0]=mysqli_fetch_row(mysqli_query($con,$sql));
    if($ch==1){
    $np=$_POST["nop"];
    $dt=$_POST["date"];
    $tm=$_POST["time"];
    $sql="INSERT into bar values('bar','$myUs','$ph[0]','$dt','$tm','$np',NULL);";
    if(mysqli_query($con,$sql)){
      myAlert("Your Appointment has been made.");
    }
    else{
      myAlert("Sorry; Your Appointment could not be made.");
    }
    }
    else{
      myAlert("Sorry, Only current guests are allowed to avail this service.");
    }
  }
  $dt=array((new datetime('today'))->format('Y-m-d'),(new datetime('tomorrow'))->format('Y-m-d'));
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
          <img src="hotel/pic24.jpg" alt="Company's Logo" style="width:100%;height:100%;opacity: 0.3">
          
          <div id="book_table" style="width: 90%;height: 500px;position: relative;top: -785px;left:100px;">
              <img src="hotel/bar3.png" alt="Company's Logo" style="position: relative;top:-80px;left:250px">
              <img src="hotel/bar2.png" alt="Company's Logo" style="height: 200px;width:200px;position: relative;top:0px;left:-540px">
              <form method="post" action="./bar.php">
                <a>TABLE FOR:</a> <select name="nop">
                                <?php
                                  foreach(range(1,10) as $r ) { ?>
                                          <option value="<?php echo $r ?>"> <?php echo $r ?></option>
                                        <?php
                                } ?>
                           </select>
                <a style="position: relative;left: 30px">DATE:</a> <select name="date" style="position: relative;left: 30px">
                                <?php
                                  foreach($dt as $r ) { ?>
                                          <option value="<?php echo $r ?>"> <?php echo $r ?></option>
                                        <?php
                                } ?>
                        </select>
                <a style="position: relative;left: 70px">TIME:</a> <input type="time" name="time" value="08:00" min="08:00 AM" min="12:00 PM" style="position: relative;left: 70px">
                  <input type="submit" name="submit" value="" style="background-image: url('./hotel/booknow.jpg');background-size:100% 100%;position: relative;top: 100px;left:30px;height: 60px;width: 250px">
              </form>
              
          </div>
          <div id="current_booking" style="width: 80%;height: 100px;position: relative;top:-930px;left: 100px">
              <?php
                $sql="SELECT no_of_people,book_date,time_hrs from bar where book_id=$myUs;";
                $qw=mysqli_query($con,$sql);
              if(mysqli_affected_rows($con)>0){
                echo "<h1>YOUR CURRENT BOOKINGS:<br><br>";
                echo "<table border=1 style='width:700px'><tr><th><a>NUMBER OF PEOPLE</a></th><th>DATE</th><th>TIME</th></tr>";
                while($r=mysqli_fetch_row($qw)){
                    echo "<tr><th>".strtoupper($r[0])."</th><th>".strtoupper($r[1])."</th><th>$r[2]</th></tr>";
                }
                echo '</table></h1>';
                echo "<br><h1>**For any issue; please contact reception.</h1>";
              }
              ?>
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

<div id="rest_menu" style="background-color: black;height: 70px;width: 80.7%;position: fixed;top:60px;left:278px">
  <div id="rest_option" style="position: relative;top:30px;left:50px">
      <a href="restaurant.php" >KINGSMEN RESTAURANT</a>
      <a href="bar.php" style="color: yellow">BAR NINETEEN 12</a>
      <a href="pool.php">POOL LOUNGE</a>
      <a href="cafe.php">CABANA COFFEE</a>
  </div>
</div>

</body>
</html>