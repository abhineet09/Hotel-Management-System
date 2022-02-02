<?php
	require("config.php");
   session_start();
   $con=myConnection();
   $error="Enter details.";
   if(isset($_POST["submit"])) {
      if(empty($_POST["book_id"]) || empty($_POST["phone"])){
         $error="Both fields are required";
      }
      else{
         $bookID = $_POST['book_id'];
         $phone = $_POST['phone']; 
         $sql = "SELECT book_id FROM booking WHERE  book_id= '$bookID' and phone_no = '$phone'";
         $result = mysqli_query($con,$sql);
         $row = mysqli_fetch_array($result);
         $count = mysqli_num_rows($result);
         if($count == 1) {

            $_SESSION['login_user'] = $bookID;
            header("location: booking.php");
         }
         else {
            $error = "Invalid Details";
         }
      }
   }
?>
<html>
   <head>
      <title>Login Page</title>
      <link href='./CSS/login.css' rel='stylesheet' type='text/css'></link>
   </head>
<body>
<img src="hotel/back_login.jpg" style="height: 100%;width: 100%;opacity: 0.7">
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
         <div id="login_box">
            <div style = "background-color:black; color:#FFFFFF; padding:3px;" align="center"><b>Login</b></div>
               <form  method = "post" style="position: relative;top:20px" align="center">
                  <a style="position: relative;left:-30px">Booking Id  :</a><input type = "text" name = "book_id" class = "box" style="position: relative;left:-10px;width:50px"><br /><br />
                  <a><label style="position: relative;left:-10px" >Phone Number  :</label></a><input type = "text" name = "phone" class = "box"  style="position: relative;left:3px"><br><br>
                  <input type = "submit" name = "submit" style="position: relative;left:-85px" /><br />
                  <span class="error" style="position: relative;top:-20px;left:65px"><p1 style="font-family: helvetica;font-size: 15;color:yellow;"><?php echo $error;?></p1></span>
               </form>
         </div>
         <div id="forget" style="position: fixed;top:240px;left:190px;zoom:250%">
         <a href="./home.php"><button id="frgt">Forgot Details</button></a>
         </div>
   </body>
</html>