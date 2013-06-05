<html>
<body>
<?php session_start(); echo $_SESSION['passed_data'] . "<br>"; $_SESSION['passed_data'] = "Data from first PHP file"; ?> <a href="session_demo_2.php">Second part of demo</a>
</body>
</html>