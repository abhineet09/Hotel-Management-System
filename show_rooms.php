
<html>
<head>
<title>The Beverely Hills Hotel</title>
<link rel="icon" href="./images/icon.ico">
<link href='./CSS/showRoom.css' rel='stylesheet' type='text/css'></link>
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
<div style="height: 2600px;overflow: hidden;width: 100%">
<div id="container">
		<div class="slideshow-container" style="position: relative;left:-10px">
			<div class="mySlides fade">
  					<img src="./hotel/room1.jpg" style="width:1450px;height: 900px">
  					 <div class="para" style="background-color: #000000;opacity: 0.4;height: 150px;width:500px;position: relative;top:-500px;left: 5px;"></div>	
  					 <h1 style="font-family: courier;font-size: 23;color:white;font-style: bold;position:relative;top:-650px;left:10px">SEE WHAT DIFFERENCE A STAY CAN MAKE!</h1>
  					<p1 style="font-size:20;font-style:italic;color:white;position:relative;top:-650px;left:10px">Come stay with us to have a lifetime experience.</p1>
			</div>
			<div class="mySlides fade">
  					<img src="./hotel/room2.jpg" style="width:1450px;height: 900px">
  					<div class="para" style="background-color: #000000;opacity: 0.4;height: 150px;width:500px;position: relative;top:-500px;left: 5px;"></div>	
  					 <h1 style="font-family: courier;font-size: 23;color:white;font-style: bold;position:relative;top:-650px;left:10px">HOSPITALITY AT IT'S BEST...</h1>
  					<p1 style="font-size:20;font-style:italic;color:white;position:relative;top:-650px;left:10px">We try to care for you just like your mother.</p1>
			</div>
			<div class="mySlides fade">
  				<img src="./hotel/room3.jpg" style="width:1450px;height: 900px">
  				<div class="para" style="background-color: #000000;opacity: 0.4;height: 150px;width:575px;position: relative;top:-500px;left: 5px;"></div>	
  					 <h1 style="font-family: courier;font-size: 23;color:white;font-style: bold;position:relative;top:-650px;left:10px">REJUVANTAE WITH YOGA</h1>
  					<p1 style="font-size:20;font-style:italic;color:white;position:relative;top:-650px;left:10px">"The quality of our breath expresses our inner feelings."</p1>
			</div>
			<div style="text-align:center;position:absolute;top:800px;left:700px">
  				<span class="dot"></span> 
  				<span class="dot"></span> 
  				<span class="dot"></span> 
			</div>
		</div>
</div>

<h1 ><center><p style='font-size:80;position:relative;top:-150px;left: 50px;color:orange;font-family: arial'><?php echo"EXPLORE ROOMS!!"; ?></p></center></h1>
<div id="services" style="position: relative;top:-200px;height: 800px">
  <a style="font-family: helvetica;font-size:30px;text-decoration: none;padding-left:20px;position: relative;right:-80px">DELUXE ROOM</a>
  <div id="box" style="height: 510px;width: 400px;border: 5px solid black;position: relative;right:-10px">
      <a href="./book_rooms.php"><img src="./hotel/room5.jpg" alt="twitterLogo" style="height:300px;width:100%;"></a>
      <div id="box_text" style="height:200px;width: 100%;border-top:5px solid black;position: relative;">
          <img src="./hotel/dot.jpg"><p1 style="font-family: helvetica;font-size: 20px;position: relative;top:-12px;left:0px">RATE: $795</p1><a href="./book_rooms.php"><img src="./hotel/res.jpg" style="height: 40px;width: 120px;position: relative;top:-0px;left: 90px"></a><br>
          <img src="./hotel/dot.jpg"><p1 style="font-family: helvetica;font-size: 20px;position: relative;top:-12px;left:0px">City Views</p1><br>
          <img src="./hotel/dot.jpg"><p1 style="font-family: helvetica;font-size: 20px;position: relative;top:-12px;left:0px">King-Size Bed</p1><br>
          <img src="./hotel/dot.jpg"><p1 style="font-family: helvetica;font-size: 20px;position: relative;top:-12px;left:0px">Balcony</p1><br>
      </div>
</div>

  <a style="font-family: helvetica;font-size:30px;text-decoration: none;position: relative;right:-100px;top:100px">FAMILY SUITE</a>
  <div id="box" style="height: 510px;width: 400px;border: 5px solid black;position: relative;right:-10px;top:100px">
      <a href="./book_rooms.php"><img src="./hotel/room6.jpg" alt="twitterLogo" style="height:300px;width:100%;"></a>
      <div id="box_text" style="height:200px;width: 100%;border-top:5px solid black;position: relative;">
          <img src="./hotel/dot.jpg"><p1 style="font-family: helvetica;font-size: 20px;position: relative;top:-12px;left:0px">RATE: $1095</p1><a href="./book_rooms.php"><img src="./hotel/res.jpg" style="height: 40px;width: 120px;position: relative;top:-0px;left: 90px"></a><br>
          <img src="./hotel/dot.jpg"><p1 style="font-family: helvetica;font-size: 20px;position: relative;top:-12px;left:0px">Natural Views</p1><br>
          <img src="./hotel/dot.jpg"><p1 style="font-family: helvetica;font-size: 20px;position: relative;top:-12px;left:0px">Minibar</p1><br>
          <img src="./hotel/dot.jpg"><p1 style="font-family: helvetica;font-size: 20px;position: relative;top:-12px;left:0px">Balcony</p1><br>
      </div>
  </div>

  <a style="font-family: helvetica;font-size:30px;text-decoration: none;position: relative;top:-1090px;right:-560px">SUPERIOR ROOM</a>
  <div id="box" style="height: 510px;width: 400px;border: 5px solid black;position: relative;top:-1090px;right:-485px">
      <a href="./book_rooms.php"><img src="./hotel/pic47.jpg" alt="twitterLogo" style="height:300px;width:100%;"></a>
      <div id="box_text" style="height:200px;width: 100%;border-top:5px solid black;position: relative;">
          <img src="./hotel/dot.jpg"><p1 style="font-family: helvetica;font-size: 20px;position: relative;top:-12px;left:0px">RATE: $795</p1><a href="./book_rooms.php"><img src="./hotel/res.jpg" style="height: 40px;width: 120px;position: relative;top:-0px;left: 90px"></a><br>
          <img src="./hotel/dot.jpg"><p1 style="font-family: helvetica;font-size: 20px;position: relative;top:-12px;left:0px">Natural Views</p1><br>
          <img src="./hotel/dot.jpg"><p1 style="font-family: helvetica;font-size: 20px;position: relative;top:-12px;left:0px">King-Size Bed</p1><br>
          <img src="./hotel/dot.jpg"><p1 style="font-family: helvetica;font-size: 20px;position: relative;top:-12px;left:0px">Balcony</p1><br>
      </div>
  </div>

  <a style="font-family: helvetica;font-size:30px;text-decoration: none;position: relative;top:-990px;right:-505px">BEVERELY HILLS SUITE</a>
  <div id="box" style="height: 510px;width: 400px;border: 5px solid black;position: relative;top:-990px;right:-485px">
      <a href="./book_rooms.php"><img src="./hotel/room1.jpg" alt="twitterLogo" style="height:300px;width:100%;"></a>
      <div id="box_text" style="height:200px;width: 100%;border-top:5px solid black;position: relative;">
          <img src="./hotel/dot.jpg"><p1 style="font-family: helvetica;font-size: 20px;position: relative;top:-12px;left:0px">RATE: $795</p1><a href="./book_rooms.php"><img src="./hotel/res.jpg" style="height: 40px;width: 120px;position: relative;top:-0px;left: 90px"></a><br>
          <img src="./hotel/dot.jpg"><p1 style="font-family: helvetica;font-size: 20px;position: relative;top:-12px;left:0px">City Views</p1><br>
          <img src="./hotel/dot.jpg"><p1 style="font-family: helvetica;font-size: 20px;position: relative;top:-12px;left:0px">King-Size Bed</p1><br>
          <img src="./hotel/dot.jpg"><p1 style="font-family: helvetica;font-size: 20px;position: relative;top:-12px;left:0px">Balcony</p1><br>
      </div>
  </div>

  <a style="font-family: helvetica;font-size:30px;text-decoration: none;position: relative;top:-2180px;right:-1050px">GARDEN SUITE</a>
  <div id="box" style="height: 510px;width: 400px;border: 5px solid black;position: relative;top:-2180px;right:-960px">
      <a href="./book_rooms.php"><img src="./hotel/room7.jpg" alt="twitterLogo" style="height:300px;width:100%;"></a>
      <div id="box_text" style="height:200px;width: 100%;border-top:5px solid black;position: relative;">
          <img src="./hotel/dot.jpg"><p1 style="font-family: helvetica;font-size: 20px;position: relative;top:-12px;left:0px">RATE: $795</p1><a href="./book_rooms.php"><img src="./hotel/res.jpg" style="height: 40px;width: 120px;position: relative;top:-0px;left: 90px"></a><br>
          <img src="./hotel/dot.jpg"><p1 style="font-family: helvetica;font-size: 20px;position: relative;top:-12px;left:0px">City Views</p1><br>
          <img src="./hotel/dot.jpg"><p1 style="font-family: helvetica;font-size: 20px;position: relative;top:-12px;left:0px">King-Size Bed</p1><br>
          <img src="./hotel/dot.jpg"><p1 style="font-family: helvetica;font-size: 20px;position: relative;top:-12px;left:0px">Balcony</p1><br>
      </div>
  </div>

  <a style="font-family: helvetica;font-size:30px;text-decoration: none;position: relative;top:-2080px;right:-990px">PRESIDENTIAL SUITE</a>
  <div id="box" style="height: 510px;width: 400px;border: 5px solid black;position: relative;top:-2080px;right:-960px">
      <a href="./book_rooms.php"><img src="./hotel/room2.jpg" alt="twitterLogo" style="height:300px;width:100%;"></a>
      <div id="box_text" style="height:200px;width: 100%;border-top:5px solid black;position: relative;">
          <img src="./hotel/dot.jpg"><p1 style="font-family: helvetica;font-size: 20px;position: relative;top:-12px;left:0px">RATE: $795</p1><a href="./book_rooms.php"><img src="./hotel/res.jpg" style="height: 40px;width: 120px;position: relative;top:-0px;left: 90px"></a><br>
          <img src="./hotel/dot.jpg"><p1 style="font-family: helvetica;font-size: 20px;position: relative;top:-12px;left:0px">City Views</p1><br>
          <img src="./hotel/dot.jpg"><p1 style="font-family: helvetica;font-size: 20px;position: relative;top:-12px;left:0px">King-Size Bed</p1><br>
          <img src="./hotel/dot.jpg"><p1 style="font-family: helvetica;font-size: 20px;position: relative;top:-12px;left:0px">Balcony</p1><br>
      </div>
  </div>
</div>
<div style="position: relative;top:-250px">
<div id="footer">
  <div id="menu">
    <a href='./home.php'>HOME</a><br>
    <a href='./show_rooms.php'>SUITES & ROOMS</a><br>
    <a href='./offers.php'>SERVICES</a><br>
    <a href='./about.php'>ABOUT US</a><br>
    <h3 style="font-style: italic;font-size:20;">Subscribe to mailing list:</h3>
    <form method="post">
      <img src="images/email.jpg" alt="Submit" style="height:40px;margin:10px;position: relative;top:-20px"><input type="text" name="email" style="width:200px;height:30px;box-sizing: border-box;border:2px solid black;position: relative;top:-45px">
      <input type="submit" name="mail" value="" style="background-image: url('./images/submit.jpg');background-size:100% 100%;height: 40px;width: 130px;position: relative;top:-30px;">
      </form>
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
    
    <a href="./"><img src="./images/facebook.jpg" alt="facebookLogo" style="height:60px;width:60px;position:relative;top:-40px;left:170px"></a>
    <a href="./"><img src="./images/twitter.jpg" alt="twitterLogo" style="height:60px;width:60px;position:relative;top:-40px;left:170px"></a>
    <a href="./"><img src="./images/instagram.jpg" alt="instagramLogo" style="height:60px;width:60px;position:relative;top:-40px;left:170px"></a>
    <a href="./"><img src="./images/youtube.jpg" alt="youtubeLogo" style="height:60px;width:60px;position:relative;top:-40px;left:170px"></a>
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