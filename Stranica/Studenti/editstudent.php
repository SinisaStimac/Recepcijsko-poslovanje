<?php

$link = mysqli_connect("localhost", "root", "", "recepcijsko poslovanje");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

mysqli_set_charset($link,"utf8");
$id = mysqli_real_escape_string($link, $_POST['id']);
$ime = mysqli_real_escape_string($link, $_POST['ime']);
$prezime = mysqli_real_escape_string($link, $_POST['prezime']);
$datum_rod = mysqli_real_escape_string($link, $_POST['datum_rod']);
$oib = mysqli_real_escape_string($link, $_POST['oib']);
$email = mysqli_real_escape_string($link, $_POST['email']);
$adresa = mysqli_real_escape_string($link, $_POST['adresa']);
$grad = mysqli_real_escape_string($link, $_POST['grad']);
$postanski_br = mysqli_real_escape_string($link, $_POST['postanski_br']);
$zemlja = mysqli_real_escape_string($link, $_POST['zemlja']);
$telefon = mysqli_real_escape_string($link, $_POST['telefon']);
$studij = mysqli_real_escape_string($link, $_POST['studij']);
$soba_br = mysqli_real_escape_string($link, $_POST['soba_br']);
$br_kartice = mysqli_real_escape_string($link, $_POST['br_kartice']);



$sql = "UPDATE student SET ime = '$ime', prezime = '$prezime', datum_rod ='$datum_rod', oib = '$oib', email ='$email', telefon ='$telefon', adresa ='$adresa', grad ='$grad', postanski_br ='$postanski_br', zemlja ='$zemlja', studij ='$studij', soba_br ='$soba_br', br_kartice ='$br_kartice' WHERE id = $id;";

if(mysqli_query($link, $sql)){

	if(isset($_POST['vrati'])) header("refresh: 1; url=http://localhost/stranica/studenti/studenti.php");
	else header("refresh: 1; url=http://localhost/stranica/studenti/izmijenistudenta.php?id=$id");
	echo "<script type='text/javascript'>alert('Zapis spremljen')</script>";

} else{
    echo "<script type='text/javascript'>alert('Pogreška')</script>" . mysqli_error($link);
    
}
 
?>