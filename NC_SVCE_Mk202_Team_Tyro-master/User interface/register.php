<?php
$servername="localhost";
$username="root";
$password="";
$dbname="sih";

$connection=new mysqli($servername, $username, $password, $dbname);
if($connection->connect_error){
	die("connection failed:".connect_error);
}
  $name=$_POST['name'];
  $mail=$_POST['email'];
  $pass=$_POST['password'];
  
   $sqlins="INSERT INTO `sihregister`(`name`, `email`, `password`) VALUES ('$name','$mail','pass')";
  
  if ($connection->query($sqlins) === TRUE){
	  echo "Data succesfully Stored";
	  echo"<br><br><a href=register.html><button>Enter Another Record</button></a>";
  }else{
	   echo "Error inserting table: " . $connection->error;
  } 

$connection->close();
?>