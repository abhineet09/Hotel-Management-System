<html>
<head>
<title>The Beverely Hills Hotel</title>
<link rel="icon" href="./images/favicon.ico">
<link href='./CSS/home.css' rel='stylesheet' type='text/css'></link>
<link href='./CSS/footer.css' rel='stylesheet' type='text/css'></link>
</head>
<body>
  <?php
  include("config.php");
  $con=myConnection();
  if(isset($_POST['mail'])){
  $ml=$_POST['email'];
  if(!empty($ml)){
  $dt=date('Y-m-d');
  $sql="Insert into mailing values('$ml','$dt')";
  if(mysqli_query($con,$sql)){
    myAlert("Thank you for subscribing");
  }
  else{
    myAlert("Sorry It could not be done.");
  }
}
else{
  myAlert("Enter your mail.");
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
         <li><a href="home.php">HOME</a></li>
      </ul>
    </div>
</header>
<div id="container" style="height: 6050px;position: relative;top:100px;left:0px">
    <?php
      for($i=1;$i<=6;$i++){
            echo "<img src='./hotel/services/$i.jpg' style='width:80%'>";
      }
    ?>
</div>

<div id="footer">
  <div id="menu">
    <a href='./home.php'>HOME</a><br>
    <a href='./book_rooms.php'>BOOK ROOMS</a><br>
    <a href='./show_rooms.php'>SUITES & ROOMS</a><br>
    <a href='./book_rooms.php'>SERVICES</a><br>
    <a href='./about.php'>ABOUT US</a><br>
    <h3 style="font-style: italic;font-size:20;">Subscribe to mailing list:</h3>
    <form method="post">
      <img src="images/email.jpg" alt="Submit" style="height:40px;margin:10px;position: relative;top:-20px"><input type="text" name="email" style="width:200px;height:30px;box-sizing: border-box;border:2px solid black;position: relative;top:-45px">
      <input type="submit" name="mail" value="" style="background-image: url('./images/submit.jpg');background-size:100% 100%;height: 40px;width: 130px;position: relative;top:-30px;">
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