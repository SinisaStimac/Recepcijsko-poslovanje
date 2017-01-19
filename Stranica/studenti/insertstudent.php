<?php

$link = mysqli_connect("localhost", "root", "", "recepcijsko poslovanje");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

mysqli_set_charset($link,"utf8");

$ime = mysqli_real_escape_string($link, $_POST['ime']);
$prezime = mysqli_real_escape_string($link, $_POST['prezime']);
$email = mysqli_real_escape_string($link, $_POST['email']);
$oib = mysqli_real_escape_string($link, $_POST['oib']);
$datum_rod = mysqli_real_escape_string($link, $_POST['datum_rod']);
$adresa = mysqli_real_escape_string($link, $_POST['adresa']);
$grad = mysqli_real_escape_string($link, $_POST['grad']);
$postanski_br = mysqli_real_escape_string($link, $_POST['postanski_br']);
$zemlja = mysqli_real_escape_string($link, $_POST['zemlja']);
$telefon = mysqli_real_escape_string($link, $_POST['telefon']);
$studij = mysqli_real_escape_string($link, $_POST['studij']);
$soba_br = mysqli_real_escape_string($link, $_POST['soba_br']);
$br_kartice = mysqli_real_escape_string($link, $_POST['br_kartice']);



$sql = "INSERT INTO student (ime, prezime, email, oib, datum_rod, adresa, grad, postanski_br, zemlja, telefon, studij, soba_br, br_kartice) VALUES ('$ime', '$prezime', '$email', '$oib', '$datum_rod', '$adresa', '$grad', '$postanski_br', '$zemlja', '$telefon', '$studij', '$soba_br', '$br_kartice') ";

if(mysqli_query($link, $sql)){

header("refresh: 1; url=http://localhost/stranica/studenti/studenti.php");
echo "<script type='text/javascript'>alert('Zapis spremljen')</script>";

} else{
    echo "<script type='text/javascript'>alert('Pogreška')</script>" . mysqli_error($link);
    
}
 
?>