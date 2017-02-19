<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<title>Whisk Me Away - Confirmation</title>
<head>
<meta content="en-us" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<link rel="stylesheet" href="../css/mgmt.css">
</head>


<body>
<div id="wrapper">
<?php

require 'app_config.php';
require 'database_connection.php';

$insert_sql = "INSERT INTO Employees (FName, LName, Address, City, State, Zip, Phone, Email, Status) VALUES ('$_POST[firstName]', '$_POST[lastName]', '$_POST[Street]', '$_POST[City]','$_POST[State]', '$_POST[Zip]', '$_POST[Phone]', '$_POST[email]', 'Applicant')";

mysql_query($insert_sql);
echo "<p style=\"padding-top:20%\"></p>";
echo "Thanks $_POST[firstName] for applying at Whisk Me Away";
echo "<p style=\"padding-bottom:20%\"></p>";
?>
<br>
<a href="../default.html">Home</a>
</div>
</body>
</html>
