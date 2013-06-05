<?php

mysql_connect("localhost","root","root");//database connection

mysql_select_db("ecommerce");

if(isset($_POST['Submit']))
{
$test=$_POST['quan'];
$order = "INSERT INTO Pro_Order


            VALUES

            ('','$_POST[cid]','$_POST[iid]','$_POST[quan]','$_POST[amo]')";
$name=mysql_result($res,$i,"Company_Name");


$result = mysql_query($order);  //order executes
$i=0;
$order_id="Select max(Order_ID) from Pro_Order";
$shit = mysql_query($order_id);
$id=mysql_result($result,$i,"Order_ID");

echo "order_id: $id";
$fet="Select Item_Cost from Item where Item_ID='$_POST[iid]'";
$fet=mysql_fetch_array($fet);
echo "fet: $fet";

$price=$fet['Item_Cost'];
echo "Price: $price";
$amount=$price*$test;
$hel="update Pro_Order
set Amount='$amount'
where Order_ID='$order_id;";
$res = mysql_query($hel);
}
if($result){
    echo("<br>Input data is succeed");
} else{
  die('Error: ' . mysql_error());

    echo("<br>Input data is fail");

}


?>
