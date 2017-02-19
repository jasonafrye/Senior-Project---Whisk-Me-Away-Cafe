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
<title>Edit</title>
<link rel="stylesheet" href="../css/mgmt.css"/>
</head>

<body>
<div id="wrapper">
<?php
require 'database_connection.php';


$result = mysql_query('SELECT * FROM Employees WHERE empID= ' .$SSN);

$values =mysql_fetch_assoc($result);
echo "<form name=\"Update\"  action=\"update.php\" method=\"POST\">"; //action=\"update.php\"
echo "<table style=width:\"60%\";align=\"center\";>";
echo "<tr><td>Employee ID</td><td><input type=\"text\" value=\"$values[empID]\" name=\"ssn\" readonly></td></tr>";
echo "<tr><td>First Name</td><td><input type=\"text\" value=\"$values[FName]\" name=\"fname\"</td></tr>";
echo "<tr><td>Last Name</td><td><input type=\"text\" value=\"$values[LName]\" name=\"lname\"</td></tr>";
echo "<tr><td>Address</td><td><input type=\"text\" value=\"$values[Address]\" name=\"address\"</td></tr>";
echo "<tr><td>City</td><td><input type=\"text\" value=\"$values[City]\" name=\"city\"</td></tr>";

echo "<tr><td>State</td><td><input type=\"text\" value=\"$values[State]\" name=\"state\"</td></tr>";
echo "<tr><td>Zip</td><td><input type=\"text\" value=\"$values[Zip]\" name=\"zip\"</td></tr>";
echo "<tr><td>Phone</td><td><input type=\"text\" value=\"$values[Phone]\" name=\"phone\"</td></tr>";
echo "<tr><td>Email</td><td><input type=\"text\" value=\"$values[Email]\" name=\"email\"</td></tr>";
echo "<tr><td>Status</td><td><input type=\"text\" value=\"$values[Status]\" name=\"status\"</td></tr>";
echo "</table>";

echo "<input type=\"submit\" value=\"Save\" onclick=\"window.location.href='update.php?SSN={$values[SSN]}'\">";
//echo "&nbsp;<input type=\"submit\" value=\"Archive\" onlcick=\"window.location.href='archive.php?SSN={$values[SSN]}'\">";
echo "&nbsp;<input type=\"button\" value=\"Cancel\"onclick=\"window.location.href='login.php'\">";
echo "</form>";
?>
<script>
 $('#btnDelete').click(function(){
        var action = $(this).val() == '/course/delete/'+courses[0].courseId;
        $('#updateForm').attr('action', action);
        $('#updateForm').submit();
    });
    $('#btnSave').click(function(){
        var action = $(this).val() == '/course/update/' + courses[0].courseId;
        $('#updateForm').attr('action', action);
        $('#updateForm').submit();
    });
</script>
</div>
</body>
</html>