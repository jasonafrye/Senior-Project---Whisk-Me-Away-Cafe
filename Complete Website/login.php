<?php 

ob_start(); 
//$user = $_REQUEST['$INPUT_ADMIN_NAME'];

//echo "$user";
//echo "$_REQUEST['$INPUT_ADMIN_NAME']";
//echo "$_REQUEST['INPUT_ADMIN_NAME']";
//echo "$_REQUEST['$user']";
//echo "$_REQUEST['userID']";
//$_COOKIE['userID'] = 0;
   session_start();
 // unset($_COOKIE['userID']);
  //var_dump(userID);
  setcookie("user","1",time()-1200,"/","grp4.istwebclass.org");
  setcookie("PHPSESSID","0",time()-72000,"/","grp4.istwebclass.org");
  session_destroy();
  
	?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<title>Whisk Me Away- Login</title>
<head>
<meta content="en-us" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<link rel="stylesheet" href="css/site.css">
<title>Login</title>
</head>
<body bgcolor="#FFFF99">
<div id="wrapper">
	<div id="content">
	<form action="scripts/login.php" method="POST">
 <fieldset style="width:50%; margin-left:auto; margin-right:auto">
  <legend>Login:</legend>
  <table align="center">
 <tr><td>User ID:</td><td> <input type="text" name="userID"></tr></td>
  <tr><td>Password:</td><td> <input type="PASSWORD" name="password"></tr></td>
  </table>
  <input type="submit" value="Login">
 </fieldset>
</form>
	<p>&nbsp;</p>
	<div id="nav">
		<p><a href="default.html">Home</a></p>
	</div>
	
	</div>
</div>
</body>

</html>
<? ob_flush(); ?>