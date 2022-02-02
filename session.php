<?php
	include('config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   $con=myConnection();
   $ses_sql = mysqli_query($con,"select book_id from employee where book_id = '$user_check' ");
   if(!isset($_SESSION['login_user'])){
      header("location: checkin.php");
   }
?>