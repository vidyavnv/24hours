<?php

mysql_connect("localhost","root","root");//database connection

mysql_select_db("ecommerce");

if(isset($_POST['Submit']))
{

$order = "INSERT INTO Pro_Order
            (Cust_ID,Item_ID,Quantity)

            VALUES

            ('$_POST[cid]','$_POST[iid]','$_POST[quan]')";


$result = mysql_query($order);  //order executes

}



?>
<script>
window.location="thanks.php";
</script>
