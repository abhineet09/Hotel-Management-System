<html>
<head>
<title>The Beverely Hills Hotel</title>
<link rel="icon" href="./images/icon.ico">
<link href='./CSS/showRest.css' rel='stylesheet' type='text/css'></link>
<link href='./CSS/footer.css' rel='stylesheet' type='text/css'></link>
</head>
<body background="./hotel/back2.jpg">
  <?php
  include('config.php');
  $con=myConnection();
  $gen="male";
  $tm=array("BREAKFAST","LUNCH","DINNER");
  $dt=array((new datetime('today'))->format('Y-m-d'),(new datetime('tomorrow'))->format('Y-m-d'));
  if(isset($_POST["submit1"])){
    $ph=$_POST["phone"];
    $np=$_POST["nop"];
    $dt=$_POST["date"];
    $tm=$_POST["time"];
    $sql="INSERT into restaurant values('restaurant','10','$ph','$dt','$tm','$np',NULL);";
    if(mysqli_query($con,$sql)){
      myAlert("Your Appointment has been made.");
    }
    else{
      myAlert("Sorry; Your Appointment could not be made.");
    }
  }
  $tm=array("BREAKFAST","LUNCH","DINNER");
  $dt=array((new datetime('today'))->format('Y-m-d'),(new datetime('tomorrow'))->format('Y-m-d'));
?>
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
  <a href="./menu1.php" style="text-decoration:none;"><img src="hotel/menu_icon.jpg" alt="Company's Logo" style="height: 100px;width: 100px"></a>
  <h1 ><left><p style='font-size:20;position:relative;top:-80px;left: 120px;color:orange;font-family: arial'><?php echo"VIEW MENU"; ?></p></left></h1>
</div>
<div id="book_taxi" style="position: relative;top:290px;">
          <img src="hotel/dine1.png" alt="Company's Logo" style="position: relative;top:-750px;left:360px">
          <img src="hotel/res1.png" alt="Company's Logo" style="height: 100px;width:100px;position: relative;top:-735px;left:-540px">
          <div id="book_table" style="width: 80%;height: 400px;position: relative;top: -685px;left:100px;">
            <h1 ><left><p style='font-size:40;position:relative;top:0px;left: 20px;color:orange;font-family: arial'><?php echo"GET RESERVATION:"; ?></p></left></h1>
            <form method="post" action="./show_restaurant.php">
              <div style="position: relative;left: 30px;color: white">
                <a>PHONE NUMBER:</a>
                <input type="text" name="phone">
                  <div style="position: relative;top:-50px;left: 630px"><a>TABLE FOR:</a> <select name="nop"></div>
                                <?php
                                  foreach(range(1,10) as $r ) { ?>
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
                <div style="position: relative;top:-80px;left: 540px"><a style="position: relative;left: 70px;top:10px">TIME:</a> <select name="time" style="position: relative;left: 70px;top:10px"></div>
                                <?php
                                  foreach($tm as $r ) {
                                    if(strcmp($r,"BREAKFAST")==0)
                                            $a="(8 AM - 10 AM)";
                                    else if(strcmp($r,"LUNCH")==0)
                                            $a="(1 PM - 4 PM)";
                                    else
                                          $a="(6 PM - 10 PM)";
                                   ?>
                                          <option value="<?php echo $r ?>"> <?php echo $r.$a ?></option>
                                        <?php
                                } ?>
                        </select>
                  <input type="submit" name="submit1" value="" style="background-image: url('./hotel/booknow.jpg');background-size:100% 100%;position: relative;top: 150px;left:-70px;height: 60px;width: 250px">
              </form>
              
          </div></div>
          <div id="book_details" style="width: 100%;height: 200px;position: relative;top: 50px;left:-30px;">
              
              <h1 ><left><p style='font-size:40;position:relative;top:0px;left: 20px;color:orange;font-family: arial'><?php echo"CHECK RESERVATION:"; ?></p></left></h1>
              <form method="post" action="show_restaurant.php">
                <div style="position: relative;left: 30px">
                  <a>PHONE NUMBER:</a>
                  <input type="text" name="phone">
                  <input type="submit" name="chk_details" value="CHECK">
                </div>
              </form>
              <?php
                if(isset($_POST["chk_details"])){
                  $phn=$_POST["phone"];
                $sql="SELECT no_of_people,book_date,time_hrs from restaurant where phone_no=$phn;";
                $qw=mysqli_query($con,$sql);
              if(mysqli_affected_rows($con)>0){
                echo "<table border=1 style='width:700px'><tr><th>NUMBER OF PEOPLE</th><th>DATE</th><th>TIME</th></tr>";
                while($r=mysqli_fetch_row($qw)){
                    echo "<tr><th>".strtoupper($r[0])."</th><th>".strtoupper($r[1])."</th><th>$r[2]</th></tr>";
                }
                echo '</table></h1>';
                echo "<br><h1>**For any issue; please contact reception.</h1>";
              }
              else{
                myAlert("Sorry; we donot have any current reservation under this contact number.");
              }
            } 
              ?>
          </div>
      </div>
    </div>
    </div>
  </div>
<div id="services" style="position: relative;height: 110px;top:180px"></div>
<div style="position: relative;top:-370px">
<div id="footer">
  <div id="menu">
    <a href='./home.php'>HOME</a><br>
    <a href='./book_rooms.php'>BOOK ROOMS</a><br>
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