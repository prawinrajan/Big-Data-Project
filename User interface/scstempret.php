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
<h3 style="color:darkblue"><b>ST/ST JobCard Report 2019-2020</b></h3>
</header><br>

<?php
$link = mysqli_connect("localhost", "root", "", "sih");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "SELECT * FROM `scstemp`";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table id='restable'>";
            echo "<tr>";
                echo "<th>District</th>";
                echo "<th>HH issued jobcards SC</th>";
				echo "<th>HH issued jobcards ST</th>";
				echo "<th>HH issued jobcards Others</th>";
				echo "<th>HH issued jobcards Total</th>";
				
				echo "<th>HH Provided Employment SC</th>";
				echo "<th>HH Provided Employment ST</th>";
				echo "<th>HH Provided Employment Others</th>";
				echo "<th>HH Provided Employment Total</th>";
				echo "<th>HH Provided Employment Women</th>";
				
				echo "<th>Persondays generated SC</th>";
				echo "<th>Persondays generated ST</th>";
				echo "<th>Persondays generated Total</th>";
				echo "<th>Persondays generated Others</th>";
				echo "<th>Persondays generated Women</th>";
				
				echo "<th>Families Completed 100 Days SC</th>";
				echo "<th>Families Completed 100 Days ST</th>";
				echo "<th>Families Completed 100 Days Total</th>";
				echo "<th>Families Completed 100 Days Others</th>";
				
				
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['District'] . "</td>";
                echo "<td>" . $row['hhsSC'] . "</td>";
				echo "<td>" . $row['hhsST'] . "</td>";
				echo "<td>" . $row['hhsOther'] . "</td>";
				echo "<td>" . $row['hhsTotal'] . "</td>";
				
				echo "<td>" . $row['hhpSCs'] . "</td>";
				echo "<td>" . $row['hhpSTs'] . "</td>";
				echo "<td>" . $row['hhpOther'] . "</td>";
				echo "<td>" . $row['hhpTotal'] . "</td>";
				echo "<td>" . $row['hhpWomen'] . "</td>";
				
				echo "<td>" . $row['pgSC'] . "</td>";
				echo "<td>" . $row['pgST'] . "</td>";
				echo "<td>" . $row['pgOthers'] . "</td>";
				echo "<td>" . $row['pgTotal'] . "</td>";
				echo "<td>" . $row['pgWomen'] . "</td>";
				
				echo "<td>" . $row['fcSC'] . "</td>";
				echo "<td>" . $row['fcST'] . "</td>";
				echo "<td>" . $row['fcOther'] . "</td>";
				echo "<td>" . $row['fcTotal'] . "</td>";
				
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