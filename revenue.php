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

$query=mysql_query('SELECT sum(Amount) FROM Pro_Order');
$res=mysql_fetch_row($query);


/*if($res){
    echo("<br>Input 1 data is succeed");
} else{
  die('Error: ' . mysql_error());

    echo("<br>Input 1 data is fail");

}*/


?>
<h3>
<?php
echo "<b><center>Revenue Generated</center></b><br><br>";



echo "<br>Revenue: $res[0]<br><br><br>";


?>
</h3>
</body>
</html>