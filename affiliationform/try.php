<?php

mysql_connect("localhost","root","root");//database connection

mysql_select_db("ecommerce");

if(isset($_POST['Submit']))
{

$order = "INSERT INTO Pro_Order


            VALUES

            ('','$_POST[cid]','$_POST[iid]','$_POST[quan]','$_POST[amo]')";


$result = mysql_query($order);  //order executes

}
if($result){
    echo("<br>Input data is succeed");
} else{
  die('Error: ' . mysql_error());

    echo("<br>Input data is fail");

}

$order_id="Select max(Order_ID) from Pro_Order";
$shit = mysql_query($order_id); 
$row=mysql_fetch_assoc($shit);
$o_id = $row['Order_ID'];
$fet="Select Item_Cost from Item where Item_ID='$_POST[iid]'";
$fet=mysql_fetch_array($fet);
$price=$fet['Item_Cost'];
$amount=$price*$post['Quantity'];
$hel="update Pro_Order
set Amount='$amount'
where Order_ID='$o_id";
$res = mysql_query($hel); 
?>
