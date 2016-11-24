<?php
session_start();

if(!isset($_SESSION["login_user"]))

{

header("refresh: 0.05 ; url=login.php"); 
echo "<script type='text/javascript'>alert('Niste ulogirani!')</script>";

//echo "Sesija je istekla";

}

else{

header("refresh; url=index.php");


}
?>