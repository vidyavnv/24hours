<html>
<head>
 <title>Customer</title>
 <link href="main.css" rel="stylesheet" type="text/css" />

</head>

<body background="web_image.jpg">
<img src="logo.jpg" width="100" height="100">
<br>

<div class="nav_container">
              
                          <ul>
                          
                                    <li><a href="home.htm">HOME</a></li>
                                    <li><a href="about.htm">ABOUT US</a></li>
                                    <li><a href="catalogue.htm">CATALOGUE</a></li>
                                    <li><a href="Aff_form.htm">AFFILIATIONS</a></li>
                                    <li><a href="contactus.htm">CONTACT US</a></li>
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

$query="SELECT * FROM Affiliation where A_ID=(Select max(A_ID) FROM Affiliation)";
$q="SELECT A_ID FROM Affiliation where A_ID=(Select max(A_ID) FROM Affiliation)";

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
<h3><font face="Gunplay-Regular" size="20">
<?php
echo "<b><center>Your Details</center></b><br><br>";

$i=0;
while ($i < $num and $i < $n) {
$id=mysql_result($res,$i,"A_ID");
$name=mysql_result($res,$i,"Company_Name");
$ten=mysql_result($res,$i,"Tenure");
$remun=mysql_result($res,$i,"Remuneration");
$mail=mysql_result($res,$i,"Email");
?>
<Font face="Origin-Bold" size="2">

<?php
echo "<b>Affiliation ID: $id<br>Company Name: $name<br>
Tenure: $ten</b><br>Remuneration: Rs$remun<br>Email: $mail<br>";

$i++;
}
?>
<img src="footer.jpg" width="1000">
</body>
</html>