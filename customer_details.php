<html>
<head>
<title>HOME PAGE</title>
<link href="main.css" rel="stylesheet" type="text/css" />
</head>

<body background="web_image.jpg">
	
		

<div class="nav_container">
              
                          <ul>
                          
                                    <li><a href="home.htm">HOME</a></li>
                                    <li><a href="about.htm">ABOUT US</a></li>
                                    <li><a href="catalogue.htm">CATALOGUE</a></li>
                                    <li><a href="Aff_form.htm">AFFILIATIONS</a></li>
                                    <li><a href="contactus.htm">CONTACT US</a></li>
                                    <li><a href="customer_form.htm">Registration</a></li>

                                    <li><a href="report.htm">REPORT</a></li>

                          
                          
                          
                         </ul>
              
              
              
              
              
                    </div>
              
<br>		
<?php
$username="root";
$password="root";
$database="ecommerce";

mysql_connect(localhost,$username,$password);
@mysql_select_db($database) or die('Error: ' . mysql_error());

$query="SELECT * FROM Customer";
$q="SELECT Cust_ID FROM Customer";

$res=mysql_query($query);
$r=mysql_query($q);

/*if($res){
    echo("<br>Input 1 data is succeed");
} else{
  die('Error: ' . mysql_error());

    echo("<br>Input 1 data is fail");

}*/

$num=mysql_numrows($res);
$n=mysql_numrows($r);
?>
<h3>
<?php
echo "<b><center>Customer Details</center></b><br><br>";

$i=0;
while ($i < $num and $i < $n) {
$id=mysql_result($res,$i,"Cust_ID");
$f_name=mysql_result($res,$i,"First_Name");
$l_name=mysql_result($res,$i,"Last_Name");
$add=mysql_result($res,$i,"Address");
$state=mysql_result($res,$i,"State");
$zip=mysql_result($res,$i,"Zip");
$count=mysql_result($res,$i,"Country");
$ph=mysql_result($res,$i,"phone");
$mail=mysql_result($res,$i,"Email");
$paymod=mysql_result($res,$i,"Payment_Mode");

echo "ID:  $id<br>First Name: $f_name<br>Last Name: $l_name<br>Address:  $add<br>State:  $state<br>Zip:  $zip<br>Country: $count<br>Phone: $ph<br>Email: $mail<br>Payment Mode: $paymod<br><br>";

$i++;
}
?>
</body>
</html>