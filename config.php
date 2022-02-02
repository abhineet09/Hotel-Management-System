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

