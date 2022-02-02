<html>
<head>
<title>The Beverely Hills Hotel</title>
<link rel="icon" href="./images/icon.ico">
<link href='./CSS/showRest.css' rel='stylesheet' type='text/css'></link>
<link href='./CSS/footer.css' rel='stylesheet' type='text/css'></link>
</head>
<body background="./hotel/back2.jpg">
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
          <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">SERVICES</a>
            <div class="dropdown-content">
                <a href="./meeting.php">MEETING & EVENTS</a>
                <a href="./wedding.php">WEDDINGS</a>
                <a href="./show_spa.php">SPA</a>
                <a href="./show_transport.php">TRANSPORTATION</a>
                <a href="./show_beauty.php">HAIR & BEAUTY SALOON</a>
            </div>
          </li>
          <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">CUISINE</a>
            <div class="dropdown-content">
                <a href="./show_restaurant.php">KINGSMEN RESTAURANT</a>
                <a href="./show_bar.php">BAR NINETEEN 12</a>
                <a href="./show_pool">POOL LOUNGE</a>
                <a href="./show_cafe">CABANA COFFEE</a>
            </div>
         </li>
         <li><a href="offers.php">OFFERS</a></li>
         <li><a href="show_rooms.php">SUITES & ROOMS</a></li>
         <li><a href="home.php">HOME</a></li>
      </ul>
    </div>
</header>
<div style="height: 1700px;overflow: hidden;width: 100%">
<div id="container">
    <div class="slideshow-container">
      <div class="mySlides fade">
            <img src="./hotel/pic22.jpg" style="max-width:1430px;max-height: 1000px">
              <div style="position: relative;top:150px">
             <div class="para" style="background-color: #000000;opacity: 0.4;height: 150px;width:500px;position: relative;top:-500px;left: 5px;"></div> 
             <h1 style="font-family: courier;font-size: 23;color:white;font-style: bold;position:relative;top:-650px;left:10px">SEE WHAT DIFFERENCE A STAY CAN MAKE!</h1>
            <p1 style="font-size:20;font-style:italic;color:white;position:relative;top:-650px;left:10px">Come stay with us to have a lifetime experience.</p1>
            </div>
      </div>
      <div class="mySlides fade">
            <img src="./hotel/pic29.jpg" style="max-width:1430px;max-height: 1000px">
            <div class="para" style="background-color: #000000;opacity: 0.4;height: 150px;width:500px;position: relative;top:-500px;left: 5px;"></div>  
             <h1 style="font-family: courier;font-size: 23;color:white;font-style: bold;position:relative;top:-650px;left:10px">HOSPITALITY AT IT'S BEST...</h1>
            <p1 style="font-size:20;font-style:italic;color:white;position:relative;top:-650px;left:10px">We try to care for you just like your mother.</p1>
            <li><a href="book.php" style="position: relative;top:-600px;left:-1140px;font-size: 15">BOOK NOW @750 USD ONWARDS</a></li>
      </div>
      <div class="mySlides fade">
          <img src="./hotel/pic27.jpg" style="max-width:1430px;max-height: 1000px">
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
<div id="menu_link" style="position: relative;top:-135px;left: 1100px">
  <a href="./" style="text-decoration:none;"><img src="hotel/menu_icon.jpg" alt="Company's Logo" style="height: 100px;width: 100px">
  <h1 ><left><p style='font-size:20;position:relative;top:-80px;left: 120px;color:orange;font-family: arial'><?php echo"VIEW MENU"; ?></p></left></h1></a>
</div>
<div id="book_taxi" style="position: relative;top:290px;">
          <img src="hotel/dine1.png" alt="Company's Logo" style="position: relative;top:-750px;left:360px">
          <img src="hotel/res1.png" alt="Company's Logo" style="height: 100px;width:100px;position: relative;top:-735px;left:-540px">
          <div id="book_table" style="width: 80%;height: 400px;position: relative;top: -685px;left:100px;">
            <h1 ><left><p style='font-size:40;position:relative;top:0px;left: 20px;color:orange;font-family: arial'><?php echo"GET RESERVATION:"; ?></p></left></h1>
            <form>
              <div style="position: relative;left: 30px;color: white">
                <a>PHONE NUMBER:</a>
                <input type="text" name="phone">
                  <div style="position: relative;top:-50px;left: 630px"><a>TABLE FOR:</a> <select name="nop"></div>
                                <?php
                                  foreach(range(1,15) as $r ) { ?>
                                          <option value="<?php echo $r ?>"> <?php echo $r ?></option>
                                        <?php
                                } ?>
                           </select>
                  </div><br>
                <div style="position: relative;left: 30px">
                <a style="position: relative;left: 30px">DATE:</a> <select name="date" style="position: relative;left: 30px">
                                <?php
                                  foreach($dt as $r ) { ?>
                                          <option value="<?php echo $r ?>"> <?php echo $r ?></option>
                                        <?php
                                } ?>
                        </select>
                <div style="position: relative;top:-80px;left: 540px"><a style="position: relative;left: 70px">TIME:</a> <select name="time" style="position: relative;left: 70px"></div>
                                <?php
                                  foreach($tm as $r ) { ?>
                                          <option value="<?php echo $r ?>"> <?php echo $r ?></option>
                                        <?php
                                } ?>
                        </select>
                  <img src="hotel/booknow.jpg" alt="Company's Logo" style="height: 80px;width: 250px;position: relative;top:150px;left:-70px">
              </form>
              
          </div></div>
          <div id="book_details" style="width: 100%;height: 200px;position: relative;top: 50px;left:-30px;">
              
              <h1 ><left><p style='font-size:40;position:relative;top:0px;left: 20px;color:orange;font-family: arial'><?php echo"CHECK RESERVATION:"; ?></p></left></h1>
              <form method="post">
                <div style="position: relative;left: 30px">
                  <a>PHONE NUMBER:</a>
                  <input type="text" name="phone">
                  <input type="submit" name="chk_details" value="CHECK">
                </div>
              </form>
              
              <?php

                $book=0;
                if(isset($_POST["chk_details"])){
                echo "<div style='position: relative;top:50px;left:-30px;width: 100%;height: 200px;overflow:scroll'>";
                $arr=array(array(1,"9 Aug","LUNCH"),array(4,"8 AUG","BREAKFAST"));
                $booking=1;
                if($booking==1){
                echo "<table border=1 style='width:700px'><tr><th>NUMBER OF PEOPLE</th><th>DATE</th><th>TIME</th><th>DELETE RESERVATION</th></tr>";
                for($i=0;$i<sizeof($arr);$i++){
                  echo "<tr><td><p style='position:relative;left:90px;top:5px;font-size:15;font-family:helvetica'>".$arr[$i][0]."</p></td>";
                  echo "<a><td>".$arr[$i][1]."</td></a>";
                  echo "<td>".$arr[$i][2]."</td>";
                  $t="remove".$i;
                  echo "<td><form method='post' style='position:relative;left:80px;top:10px'><input type='submit' name='remove' value=$t></form></td>";
                }
                echo '</table></div>';
              }}
              ?>
          </div>
      </div>
    </div>
    </div>
  </div>
<div id="services" style="position: relative;height: 610px;top:180px">
    <div id="box" style="height: 410px;width: 400px;border: 5px solid black;position: relative;right:-10px">
      <a href="./"><img src="./hotel/pic24.jpg" alt="twitterLogo" style="height:300px;width:100%;"></a>
      <div id="box_text" style="height:100px;width: 100%;border-top:5px solid black;position: relative;">
          The Bar!
      </div>
    </div>
    <div id="box" style="height: 410px;width: 400px;border: 5px solid black;position: relative;right:-480px;top:-410px">
      <a href="./"><img src="./hotel/pic46.jpg" alt="twitterLogo" style="height:300px;width:100%;"></a>
      <div id="box_text" style="height:100px;width: 100%;border-top:5px solid black;position: relative;">
          The Bar!
      </div>
    </div>
    <div id="box" style="height: 410px;width: 400px;border: 5px solid black;position: relative;right:-980px;top:-820px">
      <a href="./"><img src="./hotel/cafe2.jpg" alt="twitterLogo" style="height:300px;width:100%;"></a>
      <div id="box_text" style="height:100px;width: 100%;border-top:5px solid black;position: relative;">
          The Bar!
      </div>
    </div>
</div>
<div style="position: relative;top:-370px">
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
      <a href='./' style="left: -70px;top:35px">Privacy</a>
      <a href='./' style="left: -70px;top:35px">Terms Of Use</a>
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