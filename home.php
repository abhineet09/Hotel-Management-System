<html>
<head>
<title>The Beverely Hills Hotel</title>
<link rel="icon" href="./images/favicon.ico">
<link href='./CSS/home.css' rel='stylesheet' type='text/css'></link>
<link href='./CSS/footer.css' rel='stylesheet' type='text/css'></link>
</head>
<body>
<?php
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
<div id="container">
		<div class="slideshow-container">
			<div class="mySlides fade">
  					<img src="./hotel/pic16.jpg" style="max-width:1430px;max-height: 1000px">
  					 <div class="para" style="background-color: #000000;opacity: 0.4;height: 150px;width:500px;position: relative;top:-500px;left: 5px;"></div>	
  					 <h1 style="font-family: courier;font-size: 23;color:white;font-style: bold;position:relative;top:-650px;left:10px">SEE WHAT DIFFERENCE A STAY CAN MAKE!</h1>
  					<p1 style="font-size:20;font-style:italic;color:white;position:relative;top:-650px;left:10px">Come stay with us to have a lifetime experience.</p1>
  					<li><a href="book.php" style="position: relative;top:-600px;left:-1280px;font-size: 15">BIENVENIDO...</a></li>
			</div>
			<div class="mySlides fade">
  					<img src="./hotel/pic1.jpg" style="max-width:1430px;max-height: 1000px">
  					<div class="para" style="background-color: #000000;opacity: 0.4;height: 150px;width:500px;position: relative;top:-500px;left: 5px;"></div>	
  					 <h1 style="font-family: courier;font-size: 23;color:white;font-style: bold;position:relative;top:-650px;left:10px">HOSPITALITY AT IT'S BEST...</h1>
  					<p1 style="font-size:20;font-style:italic;color:white;position:relative;top:-650px;left:10px">We try to care for you just like your mother.</p1>
  					<li><a href="book.php" style="position: relative;top:-600px;left:-1140px;font-size: 15">BOOK NOW @750 USD ONWARDS</a></li>
			</div>
			<div class="mySlides fade">
  				<img src="./hotel/pic3.jpg" style="max-width:1430px;max-height: 1000px">
  				<div class="para" style="background-color: #000000;opacity: 0.4;height: 150px;width:575px;position: relative;top:-500px;left: 5px;"></div>	
  					 <h1 style="font-family: courier;font-size: 23;color:white;font-style: bold;position:relative;top:-650px;left:10px">REJUVANTAE WITH YOGA</h1>
  					<p1 style="font-size:20;font-style:italic;color:white;position:relative;top:-650px;left:10px">"The quality of our breath expresses our inner feelings."</p1>
  					<li><a href="book.php" style="position: relative;top:-600px;left:-1280px;font-size: 15">GET LISTED HERE...</a></li>
			</div>
			<div style="text-align:center;position:absolute;top:700px;left:650px">
  				<span class="dot"></span> 
  				<span class="dot"></span> 
  				<span class="dot"></span> 
			</div>
		</div>
</div>
<div id="book" style="position: relative;top:-100px">
  <form method="post" action="./book_rooms.php">
    <div id="box" style="border: solid 2px brown; height: 250px;width:100%;background-color: #DEDADA">
    <img src="./hotel/submit.png" alt="Submit Button" style="height:105px;width: 205px;">
      <span style="padding-left:2px;position: relative;top:50px;right: 200px;font-family: helvetica;font-size: 20;color:brown;">Check-in Date</span>
      <span style="padding-left:85px;position: relative;top:50px;right: 230px;font-family: helvetica;font-size: 20;color:brown;">Check Out Date</span>
      <span style="padding-left:95px;position: relative;top:50px;right: 290px;font-family: helvetica;font-size: 20;color:brown;">Rooms</span><br>
      <span style="padding-left:10px; margin: 2px;position: relative;top:45px">
        <input type="date" name="Check-in" value="<?php echo date('Y-m-d');?>" min="<?php echo date('Y-m-d'); ?>">
      </span>
      <span style="padding-left:45px; margin: 2px;position: relative;top:45px">
        <input type="date"  name="Check-out" value="<?php echo (new DateTime('tomorrow'))->format('Y-m-d');?>" min="<?php echo (new DateTime('tomorrow'))->format('Y-m-d');?>">
      </span>
      <span style="padding-left:40px;margin:2px;position: relative;top:45px">
        <select name="rooms">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option> 
          <option value="5">5</option>
        </select>
      </span>
<input type="submit" name="checkAv" value="" style="background:url(./hotel/check.jpg) no-repeat;position: relative;top:50px;right:-50px;width: 130px;height:30px;background-size:130px 30px " />
      <h1 style="font-family:courier;font-size: 15;color: red;position: relative;top:40px;padding-left: 5px">*Only 3 adults + 2 children allowed per room</h1>
    </div>
  </form>
</div>
<a href="./viewGallery.php"><img src="./hotel/gallery.png" alt="facebookLogo" style="position: relative;top:-65px"></a>
<div id="gallery" style="position: relative;background-color: white;overflow: hidden;top:-35px">
		<img src="./hotel/pic4.jpg"  style="height:400px;width:700px;position:relative;left:2px;">
		<img src="./hotel/pic5.jpg"  style="height:198px;width:350px;position:relative;top:-202px">
		<img src="./hotel/pic6.jpg" style="height:198px;width:350px;position:relative;top:-202px">
		<img src="./hotel/pic7.jpg"  style="height:198px;width:350px;position:relative;top:-202px;right:-706px">
		<div class="g1" style="height:198px;width:350px;position:relative;top:-400px;right:-1062px">
  			<img src="./hotel/pic8.jpg" alt="Avatar" class="image" style="width:100%;height: 100%">
  			<div class="middle">
    		<div class="text"><a href="./viewgallery.php">See More...</a></div>
  		</div>
</div>
</div>
<?php
$del=array("A sense of urban interior with core of peace within.","All you require to remember.","Stay at nature's lap.","Family is all we have","Vintage beverely hills way!","Nothing better!");
?>
<div id="services" style="position: relative;top:100px;height: 500px">
  <a style="font-family: helvetica;font-size:30px;text-decoration: none;padding-left:20px;position: relative;right:-10px">Deluxe Rooms</a>
  <div id="box" style="height: 400px;width: 400px;border: 5px solid black;position: relative;right:-10px">
      <a href="./show_rooms.php"><img src="./hotel/room5.jpg" alt="twitterLogo" style="height:300px;width:100%;"></a>
      <div id="box_text" style="height:100px;width: 100%;border-top:5px solid black;position: relative;bottom:0px;overflow: hidden;">
          <center><p1 style="font-family: helvetica;font-size: 20px;position: relative;top:10px"><?php echo $del[0];?></p1></center>
      </div>
  </div>

  <a style="font-family: helvetica;font-size:30px;text-decoration: none;position: relative;right:-10px">Superior Suites</a>
  <div id="box" style="height: 400px;width: 400px;border: 5px solid black;position: relative;right:-10px">
      <a href="./show_rooms.php"><img src="./hotel/room6.jpg" alt="twitterLogo" style="height:300px;width:100%;"></a>
      <div id="box_text" style="height:100px;width: 100%;border-top:5px solid black;position: relative;bottom:0px;overflow: hidden;">
          <center><p1 style="font-family: helvetica;font-size: 20px;position: relative;top:10px"><?php echo $del[1];?></p1></center>
      </div>
  </div>

  <a style="font-family: helvetica;font-size:30px;text-decoration: none;position: relative;top:-867px;right:-485px">Garden Suites</a>
  <div id="box" style="height: 400px;width: 400px;border: 5px solid black;position: relative;top:-869px;right:-485px">
      <a href="./show_rooms.php"><img src="./hotel/pic47.jpg" alt="twitterLogo" style="height:300px;width:100%;"></a>
      <div id="box_text" style="height:100px;width: 100%;border-top:5px solid black;position: relative;bottom:0px;overflow: hidden;">
          <center><p1 style="font-family: helvetica;font-size: 20px;position: relative;top:10px"><?php echo $del[2];?></p1></center>
      </div>
  </div>

  <a style="font-family: helvetica;font-size:30px;text-decoration: none;position: relative;top:-867px;right:-485px">Family Suites</a>
  <div id="box" style="height: 400px;width: 400px;border: 5px solid black;position: relative;top:-867px;right:-485px">
      <a href="./"><img src="./hotel/room1.jpg" alt="twitterLogo" style="height:300px;width:100%;"></a>
      <div id="box_text" style="height:100px;width: 100%;border-top:5px solid black;position: relative;bottom:0px;overflow: hidden;">
          <center><p1 style="font-family: helvetica;font-size: 20px;position: relative;top:10px"><?php echo $del[3];?></p1></center>
      </div>
  </div>

  <a style="font-family: helvetica;font-size:30px;text-decoration: none;position: relative;top:-1740px;right:-960px">Beverely Hills Suites</a>
  <div id="box" style="height: 400px;width: 400px;border: 5px solid black;position: relative;top:-1740px;right:-960px">
      <a href="./"><img src="./hotel/room7.jpg" alt="twitterLogo" style="height:300px;width:100%;"></a>
      <div id="box_text" style="height:100px;width: 100%;border-top:5px solid black;position: relative;bottom:0px;overflow: hidden;">
          <center><p1 style="font-family: helvetica;font-size: 20px;position: relative;top:10px"><?php echo $del[4];?></p1></center>
      </div>
  </div>

  <a style="font-family: helvetica;font-size:30px;text-decoration: none;position: relative;top:-1734px;right:-960px">Presidential Suites</a>
  <div id="box" style="height: 400px;width: 400px;border: 5px solid black;position: relative;top:-1734px;right:-960px">
      <a href="./"><img src="./hotel/room2.jpg" alt="twitterLogo" style="height:300px;width:100%;"></a>
      <div id="box_text" style="height:100px;width: 100%;border-top:5px solid black;position: relative;bottom:0px;overflow: hidden;">
          <center><p1 style="font-family: helvetica;font-size: 20px;position: relative;top:10px"><?php echo $del[5];?></p1></center>
      </div>
  </div>
</div>

<div id="explore" style="position: relative;top:600px">
  <p1 style="font-family:times;font-size:20;text-align: center;padding-left:500px;">EXPLORE OUR DESTINATION</p1><br>
  <p2 style="font-family:helvetica;font-size:30;text-align:center;padding-left: 515px;position: relative;top:10px">BEVERLY HILLS</p2><br>
  <div id="exp_para" style="width: 600px;overflow: auto;position: relative;right:-350px;text-align: center;padding-top: 20px">
  <p3 style="font-family: times;font-size: 15;">Eclectic, dynamic and theatrical, Los Angeles is a sprawling metropolis where cultures and lifestyles blend only a short distance from breathtaking mountain ranges and sun-drenched beaches. Home to the stars, Beverly Hills is known worldwide for its grand mansions and the chic boutiques and fashion brands of Rodeo Drive.</p3></div>
  <h1 style="text-decoration:none;font-family: helvetica;font-size:20px;padding-left: 180px;">Autumn Guide to Los Angeles</h1>
  <h1 style="text-decoration:none;font-family: helvetica;font-size:20px;padding-left: 750px;position: relative;top:-30px;">Explore Los Angeles' Landmarks</h1>
  <div class="g2" style="height:198px;width:350px;position:relative;">
        <img src="./hotel/pic19.jpg" alt="Avatar" class="image2" style="width:100%;height: 100%">
        <div class="middle2">
        <div class="text2"><a href="home.php"></a></div></div>
    </div>
    <div class="g3" style="height:198px;width:350px;">
        <img src="./hotel/pic20.jpg" alt="Avatar" class="image3" style="width:100%;height: 100%">
        <div class="middle3">
        <div class="text3"><b href="home.php"></b></div>
    </div>
    <div id="exp_para2" style="width: 600px;overflow: auto;position: relative;right:700px;text-align: center;padding-top: 20px">
  <p3 style="font-family: times;font-size: 15;">Find out what’s happening in Los Angeles this autumn, with our hand-picked selection of the best food, fashion and culture events in the City of Angels.</p3></div>
  <div id="exp_para3" style="width: 600px;overflow: auto;position: relative;right:70px;top:-53px;text-align: center;padding-top: 20px">
  <p3 style="font-family: times;font-size: 15;">From shopping along Rodeo Drive to views of “La La land” from Griffith Park Observatory, Los Angeles provides the ultimate getaway to the sunshine state.</p3></div>
  <a href="./redirect.php"><img src="./hotel/discover_events.jpg" alt="twitterLogo" style="width:300px;position:relative;left:-580px;top:-10px"></a>
  <a href="redirect2.php"><img src="./hotel/discover_dest.jpg" alt="twitterLogo" style="width: 300px;position:relative;top:-40px;left:35px"></a>
</div>

<div id="map" style="height: 400px;width: 100%;background-color: white;position: absolute;">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3304.533586047657!2d-118.41609458490697!3d34.08146878059809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2bc075ee46a8d%3A0xa06600ecd59fad41!2sThe+Beverly+Hills+Hotel!5e0!3m2!1sen!2sin!4v1503921097795" width="1425" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

<div id="footer">
  <div id="menu">
    <a href='./home.php'>HOME</a><br>
    <a href='./book_rooms.php'>BOOK ROOMS</a><br>
    <a href='./show_rooms.php'>SUITES & ROOMS</a><br>
    <a href='./offers.php'>SERVICES</a><br>
    <a href='./about.php'>ABOUT US</a><br>
    <h3 style="font-style: italic;font-size:20;">Subscribe to mailing list:</h3>
    <form method="post" action="./home.php">
      <img src="images/email.jpg" alt="Submit" style="height:40px;margin:10px;position: relative;top:-20px">
      <input type="text" name="email" style="width:200px;height:30px;box-sizing: border-box;border:2px solid black;position: relative;top:-45px">
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
    setTimeout(showSlides, 10000); 
}
</script>
</html>

<?php 
function myAlert($msg){
    echo "<script type='text/javascript'>alert('$msg');</script>";
}
$db='hotel';

function myConnection(){
  $dbhost = 'localhost';
      $dbuser = 'root';
      $dbpass = 'dbms';
      $db='hotel';
      $con = mysqli_connect($dbhost,$dbuser,$dbpass,$db);
      if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
  return $con;
}
?>
