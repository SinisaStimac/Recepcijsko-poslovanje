<?php

$link = mysqli_connect("localhost", "root", "", "recepcijsko poslovanje");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}



mysqli_set_charset($link,"utf8");
if(isset($_GET['id'])) {
	$id = $_GET['id'];



	$sql = "DELETE FROM student WHERE id = $id;";

	if(mysqli_query($link, $sql)){


		header("refresh: 1; url=http://localhost/stranica/studenti/studenti.php");
		
		echo "<script type='text/javascript'>alert('Zapis izbrisan')</script>";

	} else {
    echo "<script type='text/javascript'>alert('Pogreška')</script>" . mysqli_error($link);
    
}
}

 
?>