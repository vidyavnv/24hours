<html>
<body>

<?php session_start(); echo $_SESSION['passed_data'] . "<br>"; $_SESSION['passed_data'] = "Data from second PHP file"; ?> <a href="session_demo_1.php">First part of demo</a>
</html>
</body>