<?php
mysql_connect("localhost","root","root");


mysql_select_db("ecommerce");

if(isset($_POST['Submit']))
{

$order = "INSERT INTO Affiliation Values
            ('','$_POST[name]',

            '$_POST[ten]', '$_POST[remun]','$_POST[mail]')";
 

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
window.location="displayaff.php";
</script>
