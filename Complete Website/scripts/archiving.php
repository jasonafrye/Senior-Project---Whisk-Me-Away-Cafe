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
<title>Confirm Archive</title>
<link rel="stylesheet" href="../css/mgmt.css"/>
</head>

<body>
<div id="wrapper">
<?php
require 'database_connection.php';


$result = mysql_query('SELECT * FROM Employees WHERE empID= ' .$SSN);

$values =mysql_fetch_assoc($result);
echo "<form name=\"Archive\"  action=\"archive.php\" method=\"POST\">"; //action=\"update.php\"
echo "<table style=width:\"60%\";align=\"center\";>";
echo "<tr><td>Employee ID</td><td><input type=\"text\" value=\"$values[empID]\" name=\"ssn\" readonly></td></tr>";
echo "<tr><td>First Name</td><td><input type=\"text\" value=\"$values[FName]\" name=\"fname\" readonly></td></tr>";
echo "<tr><td>Last Name</td><td><input type=\"text\" value=\"$values[LName]\" name=\"lname\" readonly></td></tr>";
echo "<tr><td>Address</td><td><input type=\"text\" value=\"$values[Address]\" name=\"address\" readonly></td></tr>";
echo "<tr><td>City</td><td><input type=\"text\" value=\"$values[City]\" name=\"city\" readonly></td></tr>";

echo "<tr><td>State</td><td><input type=\"text\" value=\"$values[State]\" name=\"state\" readonly></td></tr>";
echo "<tr><td>Zip</td><td><input type=\"text\" value=\"$values[Zip]\" name=\"zip\" readonly></td></tr>";
echo "<tr><td>Phone</td><td><input type=\"text\" value=\"$values[Phone]\" name=\"phone\" readonly></td></tr>";
echo "<tr><td>Email</td><td><input type=\"text\" value=\"$values[Email]\" name=\"email\" readonly></td></tr>";
echo "<tr><td>Status</td><td><input type=\"text\" value=\"$values[Status]\" name=\"status\" readonly></td></tr>";
echo "</table>";

echo "<input type=\"submit\" value=\"Confirm Archive\" onclick=\"window.location.href='archive.php?SSN={$values[SSN]}'\">";
//echo "&nbsp;<input type=\"submit\" value=\"Archive\" onlcick=\"window.location.href='archive.php?SSN={$values[SSN]}'\">";
echo "&nbsp;<input type=\"button\" value=\"Cancel\"onclick=\"window.location.href='login.php'\">";
echo "</form>";
?>

</div>
</body>
</html>