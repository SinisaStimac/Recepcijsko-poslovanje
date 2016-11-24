<?php  


session_start(); // inicijalizacija sesije


require('db_connect.php');

if (isset($_POST['user_id']) and isset($_POST['user_pass']))
{
	
// dodjeljivanje post vrijednosti varijablama
$username = $_POST['user_id'];
$password = $_POST['user_pass'];

// zaštita mysql injekcija
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($connection, $username);
$password = mysqli_real_escape_string($connection, $password);

// provjeri da li ima istovjetne username i password u bazi
$query = "SELECT * FROM `korisnici` WHERE username='$username' and password='$password'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);


if ($count == 1)
{


	$_SESSION['login_user']= $username;  //spremanje sesije
	header("refresh: 1; url=index.php"); 
//	echo "<script type='text/javascript'>alert('Autorizacija uspješna!')</script>";


}

else{

header("refresh: 1 ; url=login.php"); 
echo "<script type='text/javascript'>alert('Autorizacija neuspješna!')</script>";
//echo "Neuspješna autorizacija";

}

}


?>

