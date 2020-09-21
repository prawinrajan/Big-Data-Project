<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "sih";
 
session_start();
 

$curPage = mysql_real_escape_string(htmlspecialchars($_SERVER['PHP_SELF']));
$clicks = 0;
 
if($_SESSION['page'] != $curPage) {
   $_SESSION['page'] = $curPage;
 

   if(!$link = mysql_connect($host, $user, $pass)) {
      echo "Could not connect to MySQL server. Check your login information; the MySQL server may also be offline or temporarily overloaded.";
   }

   elseif(!mysql_select_db($dbname)) {
      echo "Cannot select database.";
   }
   else {

      if(!$rs = mysql_query("SELECT * FROM click_count WHERE page_url = '$curPage'")) {
         echo "Could not parse click counting query.";
      }
     
      elseif(mysql_num_rows($rs) == 0) {

         if(!$rs = mysql_query("INSERT INTO click_count (page_url, page_count) VALUES ('$curPage', 1)")) {
            echo "Could not create new click counter for this page.";
         }
         else {
            $clicks = 1;
         }
      }
      else {
       
         $row = mysql_fetch_array($rs);
         $clicks = $row['page_count'] + 1;

         if(!$rs = mysql_query("UPDATE click_count SET page_count = $clicks WHERE page_url = '$curPage'")) {
            echo "Could not save new click count for this page.";
         }
      }
   }
}
?>