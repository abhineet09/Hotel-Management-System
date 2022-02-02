<?php 
	$roomAv=array("deluxe"=>5,"superior"=>4,"garden"=>3,"family"=>8,"beverely"=>1,"presidential"=>3); $i=0;
	$del=array("A sense of urban interior with core of peace within.","All you require to remember.","Stay at nature's lap.","Family is all we have","Vintage beverely hills way!","Nothing better!");
	$del_am=array("stay.jpg","food.jpg","wiifi.jpg","phone.jpg","mock.jpg","jac.jpg");



?>
<form method="post">
<?php
if(array_key_exists("deluxe",$roomAv)){?>
<div id="roomT" style="background-color: #D5D7DA;height:300px;width:100%">
	<div id="pic" style="background-color: red;height:290px;width:350px;position: relative;left:5px;top:5px">
		<img src="./hotel/<?php echo 'room5'; ?>.jpg" style="height: 100%;width:100%">
	</div>
	<div id="about" style="height:285px;width:600px;border:2px solid black;position: relative;top:-285px;left:380px">
		<div id="para" style="position: relative;top:-15px;left:20px">
			<h1><?php echo "DELUXE ROOM"; ?></h1>
			<p1 style="font-family: helvetica;font-size: 25;position: relative;top:-10px"><?php echo $del[0];?>
		</div>
		<div id="im" style="position: relative;left: 30px">
			<?php foreach($del_am as $r){
				echo "<img src='hotel/icons/$r' style='padding:5px'>"; 
				}
			?>
		</div>
	</div>
	<div id="det" style="height:285px;width:400px;border:2px solid black;position: relative;top:-575px;left:1010px">
		<h1 style="font-family: helvetica;font-size: 25px;padding: 15px;">Select Room:</h1> 
		<select name="deluxeR" style="position: relative;top:-57px;left:200px;height: 25px;width:70px">
			<?php 	
				for($i=0;$i<=$roomAv["deluxe"];$i++){
					echo "<option value=$i>$i</option>";
				}
			?>
		</select>
		<h1 style="font-family: helvetica;font-size: 25px;padding: 15px;position: relative;top:-70px">Adults:</h1> 
		<select name="deluxeR" style="position: relative;top:-130px;left:200px;height: 25px;width:70px">
			<?php 	
				foreach(range(0,$roomAv["deluxe"]*2) as $i){
					echo "<option value=$i>$i</option>";
				}
			?>
		</select>
		<h1 style="font-family: helvetica;font-size: 25px;padding: 15px;position: relative;top:-135px">Children:</h1> 
		<select name="deluxeR" style="position: relative;top:-195px;left:200px;height: 25px;width:70px">
			<?php 	
				foreach(range(0,$roomAv["deluxe"]*2) as $i){
					echo "<option value=$i>$i</option>";
				}
			?>
		</select>
	</div>
</div>
<?php } ?>
<?php
if(array_key_exists("superior",$roomAv)){?>
<div id="roomT" style="background-color: #D5D7DA;height:300px;width:100%">
	<div id="pic" style="background-color: red;height:290px;width:350px;position: relative;left:5px;top:5px">
		<img src="./hotel/<?php echo 'room6'; ?>.jpg" style="height: 100%;width:100%">
	</div>
	<div id="about" style="height:285px;width:600px;border:2px solid black;position: relative;top:-285px;left:380px">
		<div id="para" style="position: relative;top:-15px;left:20px">
			<h1><?php echo "SUPERIOR ROOM"; ?></h1>
			<p1 style="font-family: helvetica;font-size: 25;position: relative;top:-10px"><?php echo $del[1];?>
		</div>
		<div id="im" style="position: relative;left: 30px">
			<?php foreach($del_am as $r){
				echo "<img src='hotel/icons/$r' style='padding:5px'>"; 
				}
			?>
		</div>
	</div>
	<div id="det" style="height:285px;width:400px;border:2px solid black;position: relative;top:-575px;left:1010px">
		<h1 style="font-family: helvetica;font-size: 25px;padding: 15px;">Select Room:</h1> 
		<select name="deluxeR" style="position: relative;top:-57px;left:200px;height: 25px;width:70px">
			<?php 	
				for($i=0;$i<=$roomAv["superior"];$i++){
					echo "<option value=$i>$i</option>";
				}
			?>
		</select>
		<h1 style="font-family: helvetica;font-size: 25px;padding: 15px;position: relative;top:-70px">Adults:</h1> 
		<select name="deluxeR" style="position: relative;top:-130px;left:200px;height: 25px;width:70px">
			<?php 	
				foreach(range(0,$roomAv["superior"]*2) as $i){
					echo "<option value=$i>$i</option>";
				}
			?>
		</select>
		<h1 style="font-family: helvetica;font-size: 25px;padding: 15px;position: relative;top:-135px">Children:</h1> 
		<select name="deluxeR" style="position: relative;top:-195px;left:200px;height: 25px;width:70px">
			<?php 	
				foreach(range(0,$roomAv["superior"]*2) as $i){
					echo "<option value=$i>$i</option>";
				}
			?>
		</select>
	</div>
</div>
<?php } ?>
<?php
if(array_key_exists("garden",$roomAv)){?>
<div id="roomT" style="background-color: #D5D7DA;height:300px;width:100%">
	<div id="pic" style="background-color: red;height:290px;width:350px;position: relative;left:5px;top:5px">
		<img src="./hotel/<?php echo 'pic47'; ?>.jpg" style="height: 100%;width:100%">
	</div>
	<div id="about" style="height:285px;width:600px;border:2px solid black;position: relative;top:-285px;left:380px">
		<div id="para" style="position: relative;top:-15px;left:20px">
			<h1><?php echo "GARDEN SUITE"; ?></h1>
			<p1 style="font-family: helvetica;font-size: 25;position: relative;top:-10px"><?php echo $del[2];?>
		</div>
		<div id="im" style="position: relative;left: 30px">
			<?php foreach($del_am as $r){
				echo "<img src='hotel/icons/$r' style='padding:5px'>"; 
				}
			?>
		</div>
	</div>
	<div id="det" style="height:285px;width:400px;border:2px solid black;position: relative;top:-575px;left:1010px">
		<h1 style="font-family: helvetica;font-size: 25px;padding: 15px;">Select Room:</h1> 
		<select name="deluxeR" style="position: relative;top:-57px;left:200px;height: 25px;width:70px">
			<?php 	
				for($i=0;$i<=$roomAv["garden"];$i++){
					echo "<option value=$i>$i</option>";
				}
			?>
		</select>
		<h1 style="font-family: helvetica;font-size: 25px;padding: 15px;position: relative;top:-70px">Adults:</h1> 
		<select name="deluxeR" style="position: relative;top:-130px;left:200px;height: 25px;width:70px">
			<?php 	
				foreach(range(0,$roomAv["garden"]*2) as $i){
					echo "<option value=$i>$i</option>";
				}
			?>
		</select>
		<h1 style="font-family: helvetica;font-size: 25px;padding: 15px;position: relative;top:-135px">Children:</h1> 
		<select name="deluxeR" style="position: relative;top:-195px;left:200px;height: 25px;width:70px">
			<?php 	
				foreach(range(0,$roomAv["garden"]*2) as $i){
					echo "<option value=$i>$i</option>";
				}
			?>
		</select>
	</div>
</div>
<?php } ?>
<?php
if(array_key_exists("family",$roomAv)){?>
<div id="roomT" style="background-color: #D5D7DA;height:300px;width:100%">
	<div id="pic" style="background-color: red;height:290px;width:350px;position: relative;left:5px;top:5px">
		<img src="./hotel/<?php echo 'room1'; ?>.jpg" style="height: 100%;width:100%">
	</div>
	<div id="about" style="height:285px;width:600px;border:2px solid black;position: relative;top:-285px;left:380px">
		<div id="para" style="position: relative;top:-15px;left:20px">
			<h1><?php echo "FAMILY SUITE"; ?></h1>
			<p1 style="font-family: helvetica;font-size: 25;position: relative;top:-10px"><?php echo $del[3];?>
		</div>
		<div id="im" style="position: relative;left: 30px">
			<?php foreach($del_am as $r){
				echo "<img src='hotel/icons/$r' style='padding:5px'>"; 
				}
			?>
		</div>
	</div>
	<div id="det" style="height:285px;width:400px;border:2px solid black;position: relative;top:-575px;left:1010px">
		<h1 style="font-family: helvetica;font-size: 25px;padding: 15px;">Select Room:</h1> 
		<select name="deluxeR" style="position: relative;top:-57px;left:200px;height: 25px;width:70px">
			<?php 	
				for($i=0;$i<=$roomAv["family"];$i++){
					echo "<option value=$i>$i</option>";
				}
			?>
		</select>
		<h1 style="font-family: helvetica;font-size: 25px;padding: 15px;position: relative;top:-70px">Adults:</h1> 
		<select name="deluxeR" style="position: relative;top:-130px;left:200px;height: 25px;width:70px">
			<?php 	
				foreach(range(0,$roomAv["family"]*2) as $i){
					echo "<option value=$i>$i</option>";
				}
			?>
		</select>
		<h1 style="font-family: helvetica;font-size: 25px;padding: 15px;position: relative;top:-135px">Children:</h1> 
		<select name="deluxeR" style="position: relative;top:-195px;left:200px;height: 25px;width:70px">
			<?php 	
				foreach(range(0,$roomAv["family"]*2) as $i){
					echo "<option value=$i>$i</option>";
				}
			?>
		</select>
	</div>
</div>
<?php } ?>
<?php
if(array_key_exists("beverely",$roomAv)){?>
<div id="roomT" style="background-color: #D5D7DA;height:300px;width:100%">
	<div id="pic" style="background-color: red;height:290px;width:350px;position: relative;left:5px;top:5px">
		<img src="./hotel/<?php echo 'room7'; ?>.jpg" style="height: 100%;width:100%">
	</div>
	<div id="about" style="height:285px;width:600px;border:2px solid black;position: relative;top:-285px;left:380px">
		<div id="para" style="position: relative;top:-15px;left:20px">
			<h1><?php echo "BEVERELY HILLS SUITE"; ?></h1>
			<p1 style="font-family: helvetica;font-size: 25;position: relative;top:-10px"><?php echo $del[4];?>
		</div>
		<div id="im" style="position: relative;left: 30px">
			<?php foreach($del_am as $r){
				echo "<img src='hotel/icons/$r' style='padding:5px'>"; 
				}
			?>
		</div>
	</div>
	<div id="det" style="height:285px;width:400px;border:2px solid black;position: relative;top:-575px;left:1010px">
		<h1 style="font-family: helvetica;font-size: 25px;padding: 15px;">Select Room:</h1> 
		<select name="deluxeR" style="position: relative;top:-57px;left:200px;height: 25px;width:70px">
			<?php 	
				for($i=0;$i<=$roomAv["beverely"];$i++){
					echo "<option value=$i>$i</option>";
				}
			?>
		</select>
		<h1 style="font-family: helvetica;font-size: 25px;padding: 15px;position: relative;top:-70px">Adults:</h1> 
		<select name="deluxeR" style="position: relative;top:-130px;left:200px;height: 25px;width:70px">
			<?php 	
				foreach(range(0,$roomAv["beverely"]*2) as $i){
					echo "<option value=$i>$i</option>";
				}
			?>
		</select>
		<h1 style="font-family: helvetica;font-size: 25px;padding: 15px;position: relative;top:-135px">Children:</h1> 
		<select name="deluxeR" style="position: relative;top:-195px;left:200px;height: 25px;width:70px">
			<?php 	
				foreach(range(0,$roomAv["beverely"]*2) as $i){
					echo "<option value=$i>$i</option>";
				}
			?>
		</select>
	</div>
</div>
<?php } ?>
<?php
if(array_key_exists("presidential",$roomAv)){?>
<div id="roomT" style="background-color: #D5D7DA;height:300px;width:100%">
	<div id="pic" style="background-color: red;height:290px;width:350px;position: relative;left:5px;top:5px">
		<img src="./hotel/<?php echo 'room2'; ?>.jpg" style="height: 100%;width:100%">
	</div>
	<div id="about" style="height:285px;width:600px;border:2px solid black;position: relative;top:-285px;left:380px">
		<div id="para" style="position: relative;top:-15px;left:20px">
			<h1><?php echo "PRESIDENTIAL SUITE"; ?></h1>
			<p1 style="font-family: helvetica;font-size: 25;position: relative;top:-10px"><?php echo $del[5];?>
		</div>
		<div id="im" style="position: relative;left: 30px">
			<?php foreach($del_am as $r){
				echo "<img src='hotel/icons/$r' style='padding:5px'>"; 
				}
			?>
		</div>
	</div>
	<div id="det" style="height:285px;width:400px;border:2px solid black;position: relative;top:-575px;left:1010px">
		<h1 style="font-family: helvetica;font-size: 25px;padding: 15px;">Select Room:</h1> 
		<select name="deluxeR" style="position: relative;top:-57px;left:200px;height: 25px;width:70px">
			<?php 	
				for($i=0;$i<=$roomAv["deluxe"];$i++){
					echo "<option value=$i>$i</option>";
				}
			?>
		</select>
		<h1 style="font-family: helvetica;font-size: 25px;padding: 15px;position: relative;top:-70px">Adults:</h1> 
		<select name="deluxeR" style="position: relative;top:-130px;left:200px;height: 25px;width:70px">
			<?php 	
				foreach(range(0,$roomAv["deluxe"]*2) as $i){
					echo "<option value=$i>$i</option>";
				}
			?>
		</select>
		<h1 style="font-family: helvetica;font-size: 25px;padding: 15px;position: relative;top:-135px">Children:</h1> 
		<select name="deluxeR" style="position: relative;top:-195px;left:200px;height: 25px;width:70px">
			<?php 	
				foreach(range(0,$roomAv["deluxe"]*2) as $i){
					echo "<option value=$i>$i</option>";
				}
			?>
		</select>
	</div>
</div>
<?php } ?>
<div id="overall" style="position: fixed;top:735px;z-index: 10;background-color: white;height: 90px;width: 100%;left:0px">
	<img src="./hotel/booknowbutton.png" style="position: relative;top:-30px;left:1200;height: 150px;width: 250px">
</div>
</form>




<td><p style='font-size:15;font-family:helvetica;position:relative;left:25px'>".$checkInDate."</p></td>
                        <td><p style='font-size:15;font-family:helvetica;position:relative;left:25px'>".$day."</p></td>
                        <td><p style='font-size:15;font-family:helvetica;position:relative;left:25px'>$".$rate[$i] * $day."</p></td>";



 <td><p style='font-size:15;font-family:helvetica;position:relative;left:25px'>".$in.</p></td>
                        <td><p style='font-size:15;font-family:helvetica;position:relative;left:25px'>".$stay->format("%R%a days")."</p></td>;








select c.name for customer c where c.phone_no in(select b.phone_no from booking b where b.book_id='$_SESSION['login_user'];);


select c.name from customer c where c.phone_no =(select b.phone_no from booking b where b.book_id='$_SESSION['login_user']');




