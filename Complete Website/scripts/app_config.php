<?php

// Set up debug mode
define("DEBUG_MODE", false);

// Site root
define("SITE_ROOT", "/your/site/root");

// Location of web files on host
define("HOST_WWW_ROOT", "/location/of/your/web/files/");

//$userID = $_REQUEST['userID'];
//$password = $_REQUEST['password'];

// Database connection constants
define("DATABASE_HOST", "localhost");
define("DATABASE_USERNAME", "grp4istw_admin");
define("DATABASE_PASSWORD", "wmaadmin");
define("DATABASE_NAME", "grp4istw_wmadb");

 /*
 if ($userID != grp4istw_admin) {
   die("<p>Incorrect Username" . $userID . "</p>");
  }
if ($password != wmaadmin) {
    die("<p>Incorrect Password" . $password . "</p>");
}
 */ 


function debug_print($message) {
  if (DEBUG_MODE) {
    echo $message;
  }
}

function handle_error($user_error_message, $system_error_message) {
  session_start();
  $_SESSION['error_message'] = $user_error_message;
  $_SESSION['system_error_message'] = $system_error_message;
  header("Location: " . SITE_ROOT . "scripts/show_error.php"); 
  exit();
}

function get_web_path($file_system_path) {
  return str_replace($_SERVER['DOCUMENT_ROOT'], '', $file_system_path);
}
?>