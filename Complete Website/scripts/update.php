<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
<title>Whisk Me Away - Confirmation</title>
<head>
<meta content="en-us" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<link rel="stylesheet" href="../css/mgmt.css">
</head>


<body>
<div id="wrapper">
<div id="confirm">
<?php

require 'app_config.php';
require 'database_connection.php';

$result = mysql_query('SELECT * FROM Employees WHERE SSN= ' .$SSN);

//$values =mysql_fetch_assoc($result);

$sql = "UPDATE Employees SET empID='$_POST[ssn]', FName='$_POST[fname]', LName='$_POST[lname]', Address='$_POST[address]', City='$_POST[city]', State='$_POST[state]', Zip='$_POST[zip]', Phone='$_POST[phone]', Email='$_POST[email]', Status='$_POST[status]' WHERE empID= '$_POST[ssn]'";

mysql_query($sql);
echo "<p style=\"padding-top:20%\">Record Updated</p>";
?>
<br>

<a href="login.php">Management</a>
<p style="padding-bottom:20%"></p>
</div>
</div>
</body>
</html>