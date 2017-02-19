<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<title>Whisk Me Away - Application</title>
<head>
<meta content="en-us" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<link rel="stylesheet" href="css/site.css">
</head>



<div id="wrapper">
<table class="tg">
  <tr>
    <th class="tg" colspan="2"></th>
    <th class="tg" rowspan="4"><img src="images/Whisk_Logo.png" width="100%" height="45%"></th>
    <th class="tg" colspan="2"></th>
  </tr>
  
  <tr>
  	<td colspan="4"></td>
  </tr>
  
   <tr>
    <td class="tg" colspan="2"><img src="images/stripe.png" width="100%" height="30%"></td>
    <td class="tg" colspan="2"><img src="images/stripe.png" width="100%" height="30%"></td>
  </tr>
  
  <tr>
       <td class="tg"><a href="default.html"><img src="images/HOME2.png" width="60%"></a></td>
			
    <td class="tg"><a href="about.html"><img src="images/ABOUTUS.png" width="60%"></a></td>
			
			<td class="tg"><a href="menu.html"><img src="images/MENU2.png" width="60%"></a></td>
			
    <td class="tg"><a href="careers.html"><img src="images/CONTACT2.png" width="60%"></a></td>
  </tr>


 
</table>

<div class="apply">
<form name="Employment Application" action="scripts/create_user.php" method="POST">

	<table width="800px">
		<tr><th colspan="2"><h3 align="center">Employment Application</h3></tr></th>


		<tr><td id="fr"><label for="firstName">First name:</label></td><td><input type="text" name="firstName" required></td></tr>

		<tr><td id="fr"><label for="lastName">Last name:</label></td><td><input type="text" name="lastName" required></td></tr>


		<tr><td id="fr"><label for="Street">Street:</label></td><td><input type="text" name="Street" required></td></tr>

		<tr><td id="fr"><label for="City">City:</label></td><td><input type="text" name="City" required></td></tr>

		<tr><td id="fr"><label for="State">State:</label></td><td>
<?php
require 'scripts/app_config.php';
require 'scripts/database_connection.php';
$result = mysql_query("SELECT * FROM `tbl_state`") or die(mysql_error()); 
echo "<select name='State'>"; 
while($row = mysql_fetch_assoc($result)) { 
 echo "<option value='$row[state_name]'"; 
 if (isset($_POST['tbl_state']) && $_POST['tbl_state'] == $row['state_name']) { 
 echo " selected='selected'"; 
 } 
 echo ">$row[state_name]"; 
} 
echo "</select>"; 
?></td></tr>
<!--<label for="State">State:</label></td><td><input type="text" name="State" value="Enter State"></td></tr>-->

		<tr><td id="fr"><label for="Zip">Zip Code:</label></td><td><input type="number" name="Zip" required maxlength="5"></td></tr>

		<tr><td id="fr"><label for="Phone">Phone:</label></td><td><input type="text" name="Phone" required></td></tr>

		<tr><td id="fr"><label for="Email">Email:</label></td><td><input type="email" name="email" required></td></tr>


		<tr><th colspan="2"><div align="left">	
		<p align="center"> 
			<input type="submit" value="Apply"></tr></th>
	</table>
</form>

</div>
	

	<hr>
	<a href="apply.php">Apply</a>&nbsp;&nbsp;&nbsp;
	<a href="login.php">Login</a>

</div>

</body>

</html>