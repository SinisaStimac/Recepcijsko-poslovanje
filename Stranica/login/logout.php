<?php
// pokreni PHP session
session_start();

// makni sve PHP session varijable
session_unset();
// uništi PHP session
session_destroy();
header("refresh: 1 ; url=http://localhost/stranica/login/login.php");

?>