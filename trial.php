<?php
	session_start();
	include("config.php");
	$con=myConnection();
	$in="2017-02-15";
	$c="beverely";
	$_SESSION[$c]=2;
$sql="SELECT room_no from rooms where type='$c' and next_book_id is null and (curr_dt>'2017-02-15' || curr_dt is NULL) limit $_SESSION[$c];";
	if($pq=mysqli_query($con,$sql)){
		while($r=mysqli_fetch_array($pq)){
			print_r($r);
		}
	}
	else{
		echo mysqli_error($con);
	}	

?>