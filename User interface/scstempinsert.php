<?php
$servername="localhost";
$username="root";
$password="";
$dbname="sih";

$connection=new mysqli($servername, $username, $password, $dbname);
if($connection->connect_error){
	die("connection failed:".connect_error);
}
  $dist=$_POST['district'];
  
  $hhssc=$_POST['hhssc'];
  $hhsst=$_POST['hhsst'];
  $hhsot=$_POST['hhsot'];
  $hhsto=$_POST['hhsto'];
  
  $hhpsc=$_POST['hhpsc'];
  $hhpst=$_POST['hhpst'];
  $hhpot=$_POST['hhpot'];
  $hhpto=$_POST['hhpto'];
  $hhpwo=$_POST['hhpwo'];
  
  $pgsc=$_POST['pgsc'];
  $pgst=$_POST['pgst'];
  $pgot=$_POST['pgot'];
  $pgto=$_POST['pgto'];
  $pgwo=$_POST['pgwo'];
  
  $fcsc=$_POST['fcsc'];
  $fcst=$_POST['fcst'];
  $fcot=$_POST['fcot'];
  $fcto=$_POST['fcto'];
  
  $sqlins="INSERT INTO `scstemp`(`District`, `hhsSC`, `hhsST`, `hhsOther`, `hhsTotal`, `hhpSCs`, `hhpSTs`, `hhpOther`, `hhpTotal`, `hhpWomen`, `pgSC`, 
  `pgST`, `pgOthers`, `pgTotal`, `pgWomen`, `fcSC`, `fcST`, `fcOther`, `fcTotal`)  
  VALUES ('$dist','$hhssc','$hhsst','$hhsot','$hhsto','$hhpsc','$hhpst','$hhpot','$hhpto','$hhpwo',
  '$pgsc','$pgst','$pgot','$pgto','$pgwo','$fcsc','$fcst','$fcot','$fcto')";
  
  if ($connection->query($sqlins) === TRUE){
	  echo "Data succesfully Stored";
	  echo"<br><br><a href=scstempinsert.html><button>Enter Another Record</button></a>";
  }else{
	   echo "Error inserting table: " . $connection->error;
  } 

$connection->close();
?>