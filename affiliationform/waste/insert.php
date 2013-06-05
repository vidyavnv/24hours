<?php
$username="root";
$password="root";
$database="ecommerce";

$Company_Name=$_POST['CompanyName'];
$Tenure=$_POST['Tenure Desired in (months)'];
$Remuneration=$_POST['Remuneration (thousands)'];
$Email=$_POST['E-mail address'];

mysql_connect(localhost,$username,$password);
@mysql_select_db($database) or die( "Unable to select database");

$query = "INSERT INTO Affiliation  VALUES
('$Company_Name','$Tenure','$Remuneration','$Email')";

mysql_query($query);

mysql_close();
?>