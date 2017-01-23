<?php

$link = mysqli_connect("localhost", "root", "", "recepcijsko poslovanje");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

mysqli_set_charset($link,"utf8");

$ime = mysqli_real_escape_string($link, $_POST['ime']);
$prezime = mysqli_real_escape_string($link, $_POST['prezime']);
$oib = mysqli_real_escape_string($link, $_POST['oib']);


$datum = mysqli_real_escape_string($link, $_POST['datum']);
$iznos_racuna = mysqli_real_escape_string($link, $_POST['iznos_racuna']);
$placeno = mysqli_real_escape_string($link, $_POST['placeno']);




$sql = "INSERT INTO racuni (ime, prezime, oib, datum, iznos_racuna, placeno ) VALUES ('$ime', '$prezime','$oib', '$datum', '$iznos_racuna', '$placeno') ";

if(mysqli_query($link, $sql)){

header("refresh: 1; url=http://localhost/stranica/racuni/napraviracun.php");
echo "<script type='text/javascript'>alert('Zapis spremljen')</script>";

} else{
    echo "<script type='text/javascript'>alert('Pogreška')</script>" . mysqli_error($link);
    
}
 
?>