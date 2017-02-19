<?php
require_once 'app_config.php'; 
//session_id = ['Logged'];
	//session_id($_COOKIE);
   session_start();
   
	if (($_COOKIE["userID"]) == 1) {
	

	} 

	else
	{
	require 'app_login.php'; 	
	
	$INPUT_ADMIN_NAME = trim($_REQUEST['userID']);
	$INPUT_ADMIN_PASS = trim($_REQUEST['password']);
	//setcookie("userID","1",0,"/","grp4.istwebclass.org");
		if ((ADMIN_NAME == $INPUT_ADMIN_NAME) && (ADMIN_PASS == $INPUT_ADMIN_PASS)) {
	
		setcookie("user","1",time()-1200,"/","grp4.istwebclass.org");
	
		}
	
		 else {
		
	
			die("Error! You have entered an incorrect username or password.");
			
		}
	

	}
	
	setcookie("userID","1",time()-72000,"/","grp4.istwebclass.org");
	session_destroy();
	//setcookie("PHPSESSID","0",time()-72000,"/","grp4.istwebclass.org");
?>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="en-us" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Management</title>
<link rel="stylesheet" href="../css/mgmt.css"/>
</head>

<body>
<div id="wrapper">
<?php
require 'database_connection.php';


$result = mysql_query('SELECT * FROM Employees WHERE Status = \'Applicant\'');
$fields=mysql_num_fields($result); //variable setup to count number of columns in SELECT statement


echo "<table>\n<tr colspan=12>Applicants</tr><tr>";

// We have rows to show from the query
//create 2 spots for the buttons to edit, and hire people
echo "<th></th><th></th><th></th>";
	for ($i=0; $i < mysql_num_fields($result); $i++) //Table Header
		{ print "<th>".mysql_field_name($result, $i)."</th>"; }
	echo "</tr>\n";
		while ($row = mysql_fetch_row($result)) { //loop through each row
//echo "<tr><td><input type='submit' value='Hire' action='../default.html'></td>";		
		echo "<tr>";
		for ($f=0; $f < 1; $f++){
				$SSN = $row[0];
				
															
			 	echo "<td><input type=\"submit\" value=\"Hire\" onclick=\"window.location.href='hire.php?SSN={$SSN}'\"></td>";
   		 		echo "<td><input type=\"submit\" value=\"Archive\" onclick=\"window.location.href='archiving.php?SSN={$SSN}'\"></td>";
   				echo "<td><input type=\"submit\" value=\"Edit\" onclick=\"window.location.href='edit.php?SSN={$SSN}'\"></td>";
   				}
   			 for ($f=0; $f < $fields; $f++) { //loop through each column $f=0 original value
   		 		 
   		 	echo "<td>$row[$f]</td>"; }
   		 	
		echo "</tr>\n";}
echo "</table><p>";

// ############################################## //
// THIS IS THE START OF THE NEXT TABLE BLOCK //
$result = mysql_query('SELECT * FROM Employees WHERE Status = \'Employee\'');
$fields=mysql_num_fields($result); //variable setup to count number of columns in SELECT statement

echo "<table>\n<tr  colspan=12>Employees</tr><tr>";

// We have rows to show from the query
//create 2 spots for the buttons to edit, and hire people
echo "<th></th><th></th>";
	for ($i=0; $i < mysql_num_fields($result); $i++) //Table Header
		{ print "<th>".mysql_field_name($result, $i)."</th>"; }
	echo "</tr>\n";
		while ($row = mysql_fetch_row($result)) { //loop through each row		
		echo "<tr>";
		for ($f=0; $f < 1; $f++){
				$SSN = $row[0];
				
				
   		 		 echo "<td><input type=\"submit\" value=\"Terminate\" onclick=\"window.location.href='terminate.php?SSN={$SSN}'\"></td>";
   		 		
   				echo "<td><input type=\"submit\" value=\"Edit\" onclick=\"window.location.href='edit.php?SSN={$SSN}'\"></td>";
   				}
   			 for ($f=0; $f < $fields; $f++) { //loop through each column $f=0 original value
   		 		 
   		 	echo "<td>$row[$f]</td>"; }
   		 	
		echo "</tr>\n";}
echo "</table><p>";


// ############################################## //
// THIS IS THE START OF THE NEXT TABLE BLOCK //
$result = mysql_query('SELECT * FROM Employees WHERE Status = \'Terminated\'');
$fields=mysql_num_fields($result); //variable setup to count number of columns in SELECT statement

echo "<table>\n<tr  colspan=12>Terminated Employees</tr><tr>";

// We have rows to show from the query
//create 2 spots for the buttons to edit, and hire people
echo "<th></th><th></th><th></th>";
	for ($i=0; $i < mysql_num_fields($result); $i++) //Table Header
		{ print "<th>".mysql_field_name($result, $i)."</th>"; }
	echo "</tr>\n";
		while ($row = mysql_fetch_row($result)) { //loop through each row		
		echo "<tr>";
		for ($f=0; $f < 1; $f++){
				$SSN = $row[0];
				
				
   		 		 echo "<td><input type=\"submit\" value=\"Hire\" onclick=\"window.location.href='hire.php?SSN={$SSN}'\"></td>";
   		 		 echo "<td><input type=\"submit\" value=\"Archive\" onclick=\"window.location.href='archiving.php?SSN={$SSN}'\"></td>";
   				echo "<td><input type=\"submit\" value=\"Edit\" onclick=\"window.location.href='edit.php?SSN={$SSN}'\"></td>";
   				}
   			 for ($f=0; $f < $fields; $f++) { //loop through each column $f=0 original value
   		 		 
   		 	echo "<td>$row[$f]</td>"; }
   		 	
		echo "</tr>\n";}
echo "</table><p>";

// ############################################## //
// THIS IS THE START OF THE NEXT TABLE BLOCK //
$result = mysql_query('SELECT * FROM Archives');
$fields=mysql_num_fields($result); //variable setup to count number of columns in SELECT statement

echo "<table>\n<tr  colspan=12>Archive</tr><tr>";

// We have rows to show from the query
//create 2 spots for the buttons to edit, and hire people
	for ($i=0; $i < mysql_num_fields($result); $i++) //Table Header
		{ print "<th>".mysql_field_name($result, $i)."</th>"; }
	echo "</tr>\n";
		while ($row = mysql_fetch_row($result)) { //loop through each row		
		echo "<tr>";
		
   				
   			 for ($f=0; $f < $fields; $f++) { //loop through each column $f=0 original value
   		 		 
   		 	echo "<td>$row[$f]</td>";}
   		 	
		echo "</tr>\n";}
echo "</table><p>";
echo "<td><input type=\"submit\" value=\"Logout\" onclick=\"window.location.href='../login.php?Session=[$_COOKIE[user]]'\"></td>";
?>

</div>
</body>

</html>