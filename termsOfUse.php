<html>
<head>
<title>The Beverely Hills Hotel</title>
<link rel="icon" href="./images/icon.ico">
<link href='./CSS/privacy.css' rel='stylesheet' type='text/css'></link>
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
<div id="container">
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
	
		<div id="content" style="font-family: helvetica;font-size: 20;color:black; background-color: white;position: relative;top:100px;text-align:left;height:1950px">
		Terms of website use:<br>
Information about us<br>

www.dorchestercollection.com is a site operated by Dorchester Services Limited, for itself and on behalf of its group of companies and/or affiliates (we or us).  We are registered in England and Wales under company number 03121664 and have our registered office at 3 Tilney Street, London W1K 1BJ.  We are a limited company.<br>

 

Accessing our site<br>

Access to our site is permitted on a temporary basis, and we reserve the right to withdraw or amend the service we provide on our site without notice (see below).  We will not be liable if for any reason our site is unavailable at any time or for any period. From time to time, we may restrict access to some parts of our site, or our entire site, to users who have registered with us.<br>

IF YOU CHOOSE, OR YOU ARE PROVIDED WITH, A USER IDENTIFICATION CODE, PASSWORD OR ANY OTHER PIECE OF INFORMATION AS PART OF OUR SECURITY PROCEDURES, YOU MUST TREAT SUCH INFORMATION AS CONFIDENTIAL, AND YOU MUST NOT DISCLOSE IT TO ANY THIRD PARTY.  WE HAVE THE RIGHT TO DISABLE ANY USER IDENTIFICATION CODE OR PASSWORD, WHETHER CHOSEN BY YOU OR ALLOCATED BY US,AT ANY TIME, IF IN OUR OPINION YOU HAVE FAILED TO COMPLY WITH ANY OF THE PROVISIONS OF THESE TERMS OF USE.<br>

 

When using our site, you must comply with the provisions of our acceptable use policy www.dorchestercollection.com/au. You are responsible for making all arrangements necessary for you to have access to our site.  You are also responsible for ensuring that all persons who access our site through your internet connection are aware of these terms, and that they comply with them.<br>

 

Intellectual property rights<br>

We are the owner or the licensee of all intellectual property rights in our site, and in the material published on it.  Those works are protected by copyright laws and treaties around the world.  All such rights are reserved. You may print off one copy, and may download extracts, of any page(s) from our site for your personal reference and you may draw the attention of others within your organisation to material posted on our site. You must not modify the paper or digital copies of any materials you have printed off or downloaded in any way, and you must not use any illustrations, photographs, video or audio sequences or any graphics separately from any accompanying text. Our status (and that of any identified contributors) as the authors of material on our site must always be acknowledged. You must not use any part of the materials on our site for commercial purposes without obtaining a licence to do so from us or our licensors. If you print off, copy or download any part of our site in breach of these terms of use, your right to use our site will cease immediately and you must, at our option, return or destroy any copies of the materials you have made.<br>

 

Reliance on information posted<br>

Commentary and other materials posted on our site are not intended to amount to advice on which reliance should be placed.  We therefore disclaim all liability and responsibility arising from any reliance placed on such materials by any visitor to our site, or by anyone who may be informed of any of its contents.<br>

 

Our site changes regularly<br>

We aim to update our site regularly, and may change the content at any time.  If the need arises, we may suspend access to our site, or close it indefinitely.  Any of the material on our site may be out of date at any given time, and we are under no obligation to update such material. Our liability<br>

 

THE MATERIAL DISPLAYED ON OUR SITE IS PROVIDED WITHOUT ANY GUARANTEES, CONDITIONS OR WARRANTIES AS TO ITS ACCURACY.  TO THE EXTENT PERMITTED BY LAW, WE, OTHER MEMBERS OF OUR GROUP OF COMPANIES AND THIRD PARTIES CONNECTED TO US HEREBY EXPRESSLY EXCLUDE:<br>

ALL CONDITIONS, WARRANTIES AND OTHER TERMS WHICH MIGHT OTHERWISE BE IMPLIED BY STATUTE, COMMON LAW OR THE LAW OF EQUITY.<br>
ANY LIABILITY FOR ANY DIRECT, INDIRECT OR CONSEQUENTIAL LOSS OR DAMAGE INCURRED BY ANY USER IN CONNECTION WITH OUR SITE OR IN CONNECTION WITH THE USE, INABILITY TO USE, OR RESULTS OF THE USE OF OUR SITE, ANY WEBSITES LINKED TO IT AND ANY MATERIALS POSTED ON IT, INCLUDING, WITHOUT LIMITATION ANY LIABILITY FOR:<br>
LOSS OF INCOME OR REVENUE;<br>
LOSS OF BUSINESS;<br>
LOSS OF PROFITS OR CONTRACTS;<br>
LOSS OF ANTICIPATED SAVINGS;<br>
LOSS OF DATA;<br>
LOSS OF GOODWILL;<br>
WASTED MANAGEMENT OR OFFICE TIME; AND<br>
 

FOR ANY OTHER LOSS OR DAMAGE OF ANY KIND, HOWEVER ARISING AND WHETHER CAUSED BY TORT (INCLUDING NEGLIGENCE), BREACH OF CONTRACT OR OTHERWISE, EVEN IF FORESEEABLE, PROVIDED THAT THIS CONDITION SHALL NOT PREVENT CLAIMS FOR LOSS OF OR DAMAGE TO YOUR TANGIBLE PROPERTY OR ANY OTHER CLAIMS FOR DIRECT FINANCIAL LOSS THAT ARE NOT EXCLUDED BY ANY OF THE CATEGORIES SET OUT ABOVE.<br>

This does not affect our liability for death or personal injury arising from our negligence, nor our liability for fraudulent misrepresentation or misrepresentation as to a fundamental matter, nor any other liability which cannot be excluded or limited under applicable law.<br>

 

Information about you and your visits to our site<br>

We process information about you in accordance with our privacy policy www.dorchestercollection.com/privacy.  By using our site, you consent to such processing and you warrant that all data provided by you is accurate. [Transactions concluded through our site Contracts for the supply of good and services formed through our site or as a result of visits made by you are governed by our terms and conditions of supply www.dorchestercollection.com/terms.]<br>

 

Viruses, hacking and other offences<br>

You must not misuse our site by knowingly introducing viruses, trojans, worms, logic bombs or other material which is malicious or technologically harmful.  You must not attempt to gain unauthorised access to our site, the server on which our site is stored or any server, computer or database connected to our site.  You must not attack our site via a denial-of-service attack or a distributed denial-of service attack. By breaching this provision, you would commit a criminal offence under the Computer Misuse Act 1990.  We will report any such breach to the relevant law enforcement authorities and we will co-operate with those authorities by disclosing your identity to them. In the event of such a breach, your right to use our site will cease immediately. We will not be liable for any loss or damage caused by a distributed denial-of-service attack, viruses or other technologically harmful material that may infect your computer equipment, computer programs, data or other proprietary material due to your use of our site or to your downloading of any material posted on it, or on any website linked to it.<br>

 

Linking to our site<br>

Our site must not be framed on any other site, nor may you create a link to any part of our site. If you wish to make any use of material on our site,please address your request to Dorchester Collection, Sixth Floor East,Lansdowne House, Berkeley Square, London W1J 6ER.<br>

 

Links from our site<br>

Where our site contains links to other sites and resources provided by third parties, these links are provided for your information only.  We have no control over the contents of those sites or resources, and accept no responsibility for them or for any loss or damage that may arise from your use of them.<br>

 

Jurisdiction and applicable law<br>

The English courts will have exclusive jurisdiction over any claim arising from, or related to, a visit to our site. These terms of use and any dispute or claim arising out of or in connection with them or their subject matter or formation (including non-contractual disputes or claims) shall be governed by and construed in accordance with the law of England andWales.<br>

 

Trade marks<br>

[“The Dorchester”] and [“Dorchester Collection”] are [UK registered] trade marks of Dorchester Services Limited or members of our group of companies and/or affiliates.<br>

 

Variations<br>

We may revise these terms of use at any time by amending this page.  You are expected to check this page from time to time to take notice of any changes we made, as they are binding on you.  Some of the provisions contained in these terms of use may also be superseded by provisions or notices published elsewhere on our site.<br>

 

Your concerns<br>

If you have any concerns about material which appears on our site, please contact Dorchester Collection, Sixth Floor East, LansdowneHouse, Berkeley Square, London W1J 6ER. Thank you for visiting our site.<br>
	</div>

</div>
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
</body>
</html>


