<?php

define('pagename','aviato');
define('DBServer','localhost');
define('DBUser','root');
define('DBPass','');


// Create connection
$conn = new mysqli(DBServer, DBUser, DBPass);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Welcome";

// define site path
define('DIR','localhost/');
// define admin site path
define('DIRADMIN','localhost/admin/');

//define include checker
define('included', 1);
require_once('function.php');
?>

