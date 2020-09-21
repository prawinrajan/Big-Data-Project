<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sih";


$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$dist = $_GET['district'];
$sql = "DELETE FROM `scstemp` WHERE District = 'dist' ";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>