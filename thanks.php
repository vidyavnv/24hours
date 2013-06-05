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

$query="SELECT * FROM Pro_Order where Order_ID=(Select max(Order_ID) FROM Pro_Order)";
$q="SELECT Order_ID FROM Pro_Order where Order_ID=(Select max(Order_ID) FROM Pro_Order)";

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
echo "<b><center>Thank you for choosing 24Hours</center></b><br><br>";
?> </font></h3>
<Font face="Origin-Bold" size="2">
<?php
$i=0;
while ($i < $num and $i < $n) {
$id=mysql_result($res,$i,"Order_ID");
$amo=mysql_result($res,$i,"Amount");
$quan=mysql_result($res,$i,"Quantity");
$iid=mysql_result($res,$i,"Item_ID");
$sql_select="SELECT Item_Cost FROM Item where Item_ID='".$iid."'";
$result = mysql_query($sql_select);
$row = mysql_fetch_array($result);
echo "price:  $row[0]";
$mul=$quan*$row[0];
$amount = "UPDATE Pro_Order SET Amount='{$mul}' WHERE Item_ID='{$iid}'";
$yo = mysql_query($amount); 

echo "<br>Order ID:          $id<br>Amount: $mul<br><br>";




$i++;
}
?>

<img src="footer.jpg" width="1000">
</body>
</html>}
