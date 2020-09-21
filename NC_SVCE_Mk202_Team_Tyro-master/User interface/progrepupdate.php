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
  
  
  $sqlins="UPDATE `progressrep` SET `StateName`='$state',`DistrictName`='$district',`BlockName`='$block',`Totalhouseholdsappliedforjobcard`='$totap',
  `Totaljobcardsissued`='$totis',`TotaljobcardsSC`='$totsc',`TotaljobcardsST`='$totst',`Totaljobcardsnon_SC_ST`='$totnscst',`Totalhouseholdsdemandedwork`='$thhdem',
  `Totalpersonsdemandedwork`='$tpd',`Totalhouseholdsallottedwork`='$thha',`Totalpersonsallottedwork`='$tpa' WHERE `BlockName`='$block'";
  
  if ($connection->query($sqlins) === TRUE){
	  echo "Data succesfully Upated";
	  echo"<br><br><a href=progrepupdate.html><button>Go to Previous page</button></a>";
  }else{
	   echo "Error inserting table: " . $connection->error;
  } 

$connection->close();
?>