<?php  

// izrada sesije https://www.formget.com/login-form-in-php/

 require('db_connect.php');

if (isset($_POST['user_id']) and isset($_POST['user_pass'])){
	
// dodjeljivanje post vrijednosti varijablama
$username = $_POST['user_id'];
$password = $_POST['user_pass'];

// provjeri da li ima istovjetne username i password u bazi
$query = "SELECT * FROM `korisnici` WHERE username='$username' and password='$password'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

// if ($count == 1) znači ??
if ($count == 1){

//echo "Autorizacija uspješna";
	header("refresh: 1; url=index.php"); 
//	echo "<script type='text/javascript'>alert('Autorizacija uspješna!')</script>";

//    exit;

}

else{

header("refresh: 1; url=login.php"); 
echo "<script type='text/javascript'>alert('Autorizacija neuspješna!')</script>";
//echo "Neuspješna autorizacija";

}
}


?>

