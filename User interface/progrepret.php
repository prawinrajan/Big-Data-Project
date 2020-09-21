<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;

}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 4px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
.header{
	background-image:linear-gradient(orange,white,green);
	padding:7px;
	width:100%;
}
</style>
</head>
<header class="header">
<h3 style="color:darkblue"><b>PROGRESS REPORT 2020-2021</b></h3>
</header><br>

<?php
$link = mysqli_connect("localhost", "root", "", "sih");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


  $state=$_POST['state'];
  $district=$_POST['district'];
  $block=$_POST['block'];

$sql = "SELECT * FROM `progressrep` WHERE StateName='$state'  OR DistrictName= '$district' OR BlockName= '$block'" ;
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table id='restable'>";
            echo "<tr>";
                echo "<th>State</th>";
                echo "<th>DistrictSC</th>";
				echo "<th>Block</th>";
				echo "<th>Total Jobcards Applied</th>";
				echo "<th>Total jobcards issued</th>";
				echo "<th>Total Jobcards SC</th>";
				echo "<th>Total Jobcards ST</th>";
				echo "<th>Total Jobcards non SC/ST</th>";
				echo "<th>Total HH demanded</th>";
				echo "<th>Total Persons Demanded</th>";
				
				echo "<th>Total HH job allocated</th>";
				echo "<th>Total person job Allocated</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['StateName'] . "</td>";
                echo "<td>" . $row['DistrictName'] . "</td>";
				echo "<td>" . $row['BlockName'] . "</td>";
				echo "<td>" . $row['Totalhouseholdsappliedforjobcard'] . "</td>";
				echo "<td>" . $row['Totaljobcardsissued'] . "</td>";
				
				echo "<td>" . $row['TotaljobcardsSC'] . "</td>";
				echo "<td>" . $row['TotaljobcardsST'] . "</td>";
				echo "<td>" . $row['Totaljobcardsnon_SC_ST'] . "</td>";
				echo "<td>" . $row['Totalhouseholdsdemandedwork'] . "</td>";
				echo "<td>" . $row['Totalpersonsdemandedwork'] . "</td>";
				
				echo "<td>" . $row['Totalhouseholdsallottedwork'] . "</td>";
				echo "<td>" . $row['Totalpersonsallottedwork'] . "</td>";
				
            echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);
?>
<script>
function exportTableToExcel(tableID, filename = ''){
    var downloadLink;
    var dataType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById(tableID);
    var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
    
    // Specify file name
    filename = filename?filename+'.xls':'excel_data.xls';
    
    // Create download link element
    downloadLink = document.createElement("a");
    
    document.body.appendChild(downloadLink);
    
    if(navigator.msSaveOrOpenBlob){
        var blob = new Blob(['\ufeff', tableHTML], {
            type: dataType
        });
        navigator.msSaveOrOpenBlob( blob, filename);
    }else{
        // Create a link to the file
        downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
    
        // Setting the file name
        downloadLink.download = filename;
        
        //triggering the function
        downloadLink.click();
    }
}
</script>
<br>
<center><button class="btn btn-success" onclick="exportTableToExcel('restable')">Export Table Data To Excel File</button></center>
<br>
<center><footer style="color:darkblue;background-image:linear-gradient(orange,white,green);width:100%;"><b>smart india hackothon  &copy 2020</b></footer></center>
</html>
 
 
 
  