<?php 
include("/Applications/XAMPP/xamppfiles/htdocs/Hotel/phpmailer.php"); 
include("/Applications/XAMPP/xamppfiles/htdocs/Hotel/smtp.php"); 
function test_gmail_smtp_basic() {
    // Uncomment as needed for debugging
    //error_reporting(E_ALL);
    //error_reporting(E_STRICT);
    // Set as needed
    date_default_timezone_set('America/New_York');
    $mail = new PHPMailer(); 
    // Optionally get email body from external file
    $body = file_get_contents('contents.html');
    $body = eregi_replace("[\]",'',$body);
    $mail->IsSMTP();                            // telling the class to use SMTP
    $mail->Host       = "smtp.gmail.com";       // SMTP server
    $mail->SMTPDebug  = 2;                      // enables SMTP debug information (for testing)
                                                    // 0 default no debugging messages
                                                    // 1 = errors and messages
                                                    // 2 = messages only
    $mail->SMTPAuth   = true;                   // enable SMTP authentication
    //$mail->SMTPSecure = 'ssl';                // Not supported
    $mail->SMTPSecure = 'tls';                  // Supported
    $mail->Host       = "smtp.gmail.com";       // sets the SMTP server
    $mail->Port       = 587;                    // set the SMTP port for the GMAIL server
    $mail->Username   = "abhineet.adm09@gmail.com@gmail.com";         // SMTP account username (how you login at gmail)
    $mail->Password   = "skyfall007";      // SMTP account password (how you login at gmail)
 
    $mail->setFrom('abhineet.adm09@gmail.com', 'Abhineet Chaudhary');
 
    $mail->addReplyTo('abhineet.adm09@gmail.com', 'Abhineet Chaudhary');
 
    $mail->Subject    = "PHPMailer Test Subject via smtp, basic with authentication";
 
    $mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

    $mail->msgHTML($body);
 
    $address = "abhineetnuts@gmail.com";
    $mail->addAddress($address, "Mr.Abhi");
    // if you have attachments
    $mail->addAttachment("phpmailer.gif");      // attachment 
    $mail->addAttachment("phpmailer_mini.gif"); // attachment
 
    if(!$mail->Send()) {
      echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
      echo "Message sent!";
    }
}
// Test the connection
test_gmail_smtp_basic();
?>
</pre>
<p>What you may find is an issue with many examples heretofore is that SMTPSecure shown on line 25 needs to be TLS (Transport Layer Security) instead of SSL (Secure Sockets Layer). The other item is the port number is 587 as you see on line 29. You can disable line 29 once you have this fully debugged. Use with care. </p>
<p>These images come with PHPMailer and are included here for your convenience. </p>
<p><img class="alignnone" alt="phpmailer.gif" src="http://www.lonhosford.com/images/xampp/phpmailer.gif" width="170" height="45" /> </p>
<p><img class="alignnone" alt="phpmailer.gif" src="http://www.lonhosford.com/images/xampp/phpmailer_mini.gif" width="79" height="59" /> </p>
<p>Optional external html file for the body content. See line 12 in the code above.</p>
<pre class="brush: xml; collapse: true; light: false; title: ; toolbar: true; notranslate" title=""><body style="margin: 10px;">
<div style="width: 640px; font-family: Arial, Helvetica, sans-serif; font-size: 11px;">
<div align="center"><img style="height: 90px; width: 340px;" alt="" src="phpmailer.gif" /></div><br>
<br>
 This is a test of PHPMailer.<br>
<br>
This particular example uses <strong>HTML</strong>, with a <div> tag and inline<br>
styles.<br>
<br>
Also note the use of the PHPMailer logo above with no specific code to handle
including it.<br />
Included are two attachments:<br />
phpmailer.gif is an attachment and used inline as a graphic (above)<br />
phpmailer_mini.gif is an attachment<br />
<br />
PHPMailer:<br />
Author: Lon Hosford (somebody@no.net)
</div>
</body>
</pre>
<p>[ad name="Google Adsense"]<br />
<g:plusone annotation="inline"></g:plusone></p>
<div id="fb-root"></div>
<p><script src="http://connect.facebook.net/en_US/all.js#appId=105467682877384&xfbml=1"></script><fb:like href="http://www.lonhosford.com/lonblog/2013/11/08/how-to-send-email-from-xampp-using-localhost-on-a-mac-and-your-gmail-account/" send="true" width="450" show_faces="true" font=""></fb:like></p>
<div id="fb-root"></div>

<p><script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script><fb:comments href="http://www.lonhosford.com/lonblog/2013/11/08/how-to-send-email-from-xampp-using-localhost-on-a-mac-and-your-gmail-account/" num_posts="3" width="500"></fb:comments></p>
<p><!-- Place this render call where appropriate --><br>
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script><p></p>










<div class="w3-container" >
<div class="w3-content w3-display-container" style="position: relative;top:100px">
<?php
  foreach(range(1,30) as $r){
    echo "<div class='w3-display-container mySlides'>
            <img src='./hotel/pic$r.jpg' style='width:1000px;height:630px'>
          </div>";
  }
?>
<button class="w3-button w3-display-left w3-black" onclick="plusDivs(-1)">&#10094;</button>
<button class="w3-button w3-display-right w3-black" onclick="plusDivs(1)">&#10095;</button>
</div>
</div>