<?php
session_start();

if(!isset($_SESSION["login_user"]))

{

header("refresh: 0.05 ; url=http://localhost/stranica/login/login.php"); 
echo "<script type='text/javascript'>alert('Niste ulogirani!')</script>";

//Sesija je istekla

}

else{

header("refresh; url=http://localhost/stranica/index/index.php");


}
?>