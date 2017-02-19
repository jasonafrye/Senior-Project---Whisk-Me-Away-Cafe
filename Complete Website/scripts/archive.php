<html xmlns="http://www.w3.org/1999/xhtml">
<?php

	if (($_COOKIE["userID"]) == 1) {
	

	} 

	else
	{
	require 'app_login.php'; 	
	
	$INPUT_ADMIN_NAME = trim($_REQUEST['userID']);
	$INPUT_ADMIN_PASS = trim($_REQUEST['password']);
	
		if ((ADMIN_NAME == $INPUT_ADMIN_NAME) && (ADMIN_PASS == $INPUT_ADMIN_PASS)) {
	
		setcookie("userID","1",0,"/","grp4.istwebclass.org");
	
		}
	
		 else {
		
	
			die("Error! You have entered an incorrect username or password.");
			
		}
	

	}
?>
<head>
<meta content="en-us" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Archive</title>
<link rel="stylesheet" href="../css/mgmt.css"/>
</head>

<body>
<div id="wrapper">

<?php
require 'app_config.php';
require 'database_connection.php';
//$value = $_REQUEST['selection'];
//echo "$value";

$result = mysql_query('SELECT * FROM Archives WHERE empID= ' .$SSN);
echo "<p style=\"padding-top:20%\"></p>";
echo "$_POST[fname]&nbsp$_POST[lname] &nbsp;has been archived.";
$insert_sql = "INSERT INTO `grp4istw_wmadb`.`Archives` (empID, FName, LName, Address, City, State, Zip, Phone, Email, Status) VALUES ('$_POST[ssn]', '$_POST[fname]', '$_POST[lname]', '$_POST[address]', '$_POST[city]','$_POST[state]', '$_POST[zip]', '$_POST[phone]', '$_POST[email]', '$_POST[status]')";
$sql_delete = "DELETE FROM Employees
WHERE empID='$_POST[ssn]'";

mysql_query($insert_sql);
mysql_query($sql_delete);
echo "<br><input type=\"button\" value=\"Management\" onclick=\"window.location.href='login.php'\">";
?>
<p style="padding-bottom:20%"></p>
</div>
</body>
</html>