<html>
<body>

<?php session_start(); echo $_SESSION['passed_data'] . "<br>";if(isset($_SESSION['passed_data']))
  unset($_SESSION['passed_data']);?> 

<?php 
 // Connects to your Database 
 mysql_connect("localhost", "root", "root") or die(mysql_error()); 
 mysql_select_db("ecommerce") or die(mysql_error()); 
 $data = mysql_query("SELECT * FROM Item Where Cat_ID='".$_SESSION['passed_data']."'") 
 or die(mysql_error()); 
 Print "<table border cellpadding=3>"; 
 while($info = mysql_fetch_array( $data )) 
 { 
 Print "<tr>"; 
 Print "<th>Name:</th> <td>".$info['Item_ID'] . "</td> "; 
 Print "<th>Pet:</th> <td>".$info['Item_Name'] . " </td></tr>"; 
 } 
 Print "</table>"; 
 ?> 
 </body>
 </html>