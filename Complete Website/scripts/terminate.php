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
<title>Terminate</title>
<link rel="stylesheet" href="../css/mgmt.css"/>
</head>

<body>
<div id="wrapper">
<?php
require 'database_connection.php';
$sql = mysql_query('UPDATE Employees SET Status=\'Terminated\' WHERE empID=' .$SSN);
$result = mysql_query('SELECT * FROM Employees WHERE empID = ' .$SSN);
$fields=mysql_num_fields($result); 
echo "<p style=\"padding-top:20%\"></p>";
echo "<table>\n<tr>";

	for ($i=0; $i < mysql_num_fields($result); $i++) //Table Header
		{ print "<th>".mysql_field_name($result, $i)."</th>"; }
	echo "</tr>\n";
		while ($row = mysql_fetch_row($result)) { //loop through each row
	
		echo "<tr>";
		
   			 for ($f=0; $f < $fields; $f++) { //loop through each column $f=0 original value
   		 		 
   		 	echo "<td>$row[$f]</td>"; }
   		 	
		echo "</tr>\n";}
echo "</table><p>";

echo "Termination Completed<br>";
echo "<input type=\"submit\" value=\"Go Back\" onclick=\"window.location.href='login.php'\">";

echo "<p style=\"padding-bottom:20%\"></p>";
?>
</div>
</body>
</html>