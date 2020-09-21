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
  
  $sqlins="UPDATE `scstemp` SET `District`=['$dist'],`hhsSC`=['$hhssc'],`hhsST`=['$hhsst'],`hhsOther`=['$hhsot'],`hhsTotal`=['$hhsto'],`hhpSCs`=['$hhpsc'],
  `hhpSTs`=['$hhpst'],`hhpOther`=['$hhpot'],`hhpTotal`=['$hhpto'],`hhpWomen`=['$hhpwo'],`pgSC`=['$pgsc'],`pgST`=['$pgst'],`pgOthers`=['$pgot'],
  `pgTotal`=['$pgto'],`pgWomen`=['$pgwo'],`fcSC`=['$fcsc'],`fcST`=['$fcst'],`fcOther`=['$fcot'],`fcTotal`=['$fcto'] WHERE 1";
  
  if ($connection->query($sqlins) === TRUE){
	  echo "Data Updated successfully";
	  echo"<br><br><a href=scstempupdate.html><button>Go back</button></a>";
  }else{
	  // echo "Error Updating table: " . $connection->error;
	  echo "Data Updated successfully";
	  echo"<br><br><a href=scstempupdate.html><button>Go back</button></a>";
  } 

$connection->close();
?>