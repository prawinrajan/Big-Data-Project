<?php
$servername="localhost";
$username="root";
$password="";
$dbname="sih";

$connection=new mysqli($servername, $username, $password, $dbname);
if($connection->connect_error){
	die("connection failed:".connect_error);
}
  $state=$_POST['state'];
  $district=$_POST['district'];
  $block=$_POST['block'];
  
  $totap=$_POST['totap'];
  $totis=$_POST['totis'];
  $totsc=$_POST['totsc'];
  $totst=$_POST['totst'];
  $totnscst=$_POST['totnscst'];
  $thhdem=$_POST['thhdem'];
  $tpd=$_POST['tpd'];
  
  $thha=$_POST['thha'];
  $tpa=$_POST['tpa'];
  
  
  $sqlins="INSERT INTO `progressrep`(`StateName`, `DistrictName`, `BlockName`, `Totalhouseholdsappliedforjobcard`,
`Totaljobcardsissued`, `TotaljobcardsSC`, `TotaljobcardsST`, `Totaljobcardsnon_SC_ST`,
`Totalhouseholdsdemandedwork`, `Totalpersonsdemandedwork`, `Totalhouseholdsallottedwork`,
`Totalpersonsallottedwork`) VALUES ('$state','$district','$block','$totap','$totis','$totsc','$totst','$totnscst','$thhdem','$tpd','$thha','$tpa')";
  
  if ($connection->query($sqlins) === TRUE){
	  echo "Data succesfully Stored";
	  echo"<br><br><a href=signin.html><button>SignIn</button></a>";
  }else{
	   echo "Error inserting table: " . $connection->error;
  } 

$connection->close();
?>