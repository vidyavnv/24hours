<?php

mysql_connect("localhost","root","root");//database connection

mysql_select_db("ecommerce");

if(isset($_POST['Submit']))
{

$order = "INSERT INTO Customer


            VALUES

            ('','$_POST[f_name]','$_POST[l_name]','$_POST[add]','$_POST[state]','$_POST[zip]','$_POST[count]','$_POST[ph]','$_POST[mail]','$_POST[paymod]')";

 

$result = mysql_query($order);  //order executes
}
if($result){
    echo("<br>Input data is succeed");
} else{
  die('Error: ' . mysql_error());

    echo("<br>Input data is fail");

}


?>
<script>
window.location="displaycust.php";
</script>
