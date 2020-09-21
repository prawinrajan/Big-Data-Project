
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="sih";

$connection=new mysqli($servername, $username, $password, $dbname);
if($connection->connect_error){
	die("connection failed:".connect_error);
}
  $mail=$_POST['email'];
  $pass=$_POST['password'];
  
$result = mysqli_query("SELECT `email`, `name`, `password` FROM `sihregister` email = '$email' ");
$row = mysqli_fetch_array($result);

if($row["email"]==$email && $row["password"]==$pass){
    echo"You are a validated user.";
    echo"<a href='report_'.html>Click Here to Enter Data Portal</a>";
}
else
    echo"Sorry, your credentials are not valid, Please try again.";
?>