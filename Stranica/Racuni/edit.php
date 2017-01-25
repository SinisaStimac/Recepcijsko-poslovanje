<?php

$link = mysqli_connect("localhost", "root", "", "recepcijsko poslovanje");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

mysqli_set_charset($link,"utf8");

$br_racuna = mysqli_real_escape_string($link, $_POST['br_racuna']);

$ime = mysqli_real_escape_string($link, $_POST['ime']);
$prezime = mysqli_real_escape_string($link, $_POST['prezime']);

$oib = mysqli_real_escape_string($link, $_POST['oib']);

$datum = mysqli_real_escape_string($link, $_POST['datum']);
$iznos_racuna = mysqli_real_escape_string($link, $_POST['iznos_racuna']);
$placeno = mysqli_real_escape_string($link, $_POST['placeno']);



$sql = "UPDATE racuni SET ime = '$ime', prezime = '$prezime', oib = '$oib', datum ='$datum', iznos_racuna ='$iznos_racuna', placeno ='$placeno' WHERE br_racuna = $br_racuna;";

if(mysqli_query($link, $sql)){

	if(isset($_POST['vrati'])) 
	header("refresh: 1; url=http://localhost/stranica/racuni/racun_student.php");

	else header("refresh: 1; url=http://localhost/stranica/racuni/racun_student.php?br_racuna=$br_racuna");
	echo "<script type='text/javascript'>alert('Zapis spremljen')</script>";

} else{
    echo "<script type='text/javascript'>alert('Pogreška')</script>" . mysqli_error($link);
    
}
 
?>