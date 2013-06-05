<html>
<head>
<title>HOME PAGE</title>
<link href="main.css" rel="stylesheet" type="text/css" />
</head>

<body background="web_image.jpg">
	<center>
<div class="wrapper">
    
              <div class="top_header">

                       <div style="float:left; margin-left:17px; margin-top:20px;"> <img src="logo.jpg" border="0" width="200" height="100" alt="24hours" /></div>
		</div>		
		
		

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

$query="SELECT * FROM Affiliation";
$q="SELECT A_ID FROM Affiliation";

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
echo "<b><center>Affiliation Details</center></b><br><br>";

$i=0;
while ($i < $num and $i < $n) {
$id=mysql_result($res,$i,"A_ID");
$name=mysql_result($res,$i,"Company_Name");
$ten=mysql_result($res,$i,"Tenure");
$remun=mysql_result($res,$i,"Remuneration");
$mail=mysql_result($res,$i,"Email");
echo "<br>Company ID: $id<br>Company Name: $name<br>
Tenure (in months): $ten<br>Remuneration: $remun<br>Mail ID: $mail<br><br>";

$i++;
}
?>
</body>
</html>