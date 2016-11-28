<?php
// Start the PHP session
session_start();

// remove all PHP session variables
session_unset();
// destroy the PHP session
session_destroy();
header("refresh: 1 ; url=http://localhost/stranica/login/login.php");

?>