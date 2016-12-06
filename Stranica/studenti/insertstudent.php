<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "recepcijsko poslovanje");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$id_first_name = mysqli_real_escape_string($link, $_POST['id_first_name']);
$id_last_name = mysqli_real_escape_string($link, $_POST['id_last_name']);
$oib = mysqli_real_escape_string($link, $_POST['id_oib_id']);

 
// attempt insert query execution
$sql = "INSERT INTO student (ime, prezime, oib) VALUES ('$id_first_name', '$id_last_name', '$oib')";
if(mysqli_query($link, $sql)){

//    echo "Records added successfully.";
echo "<script type='text/javascript'>alert('Zapis spremljen')</script>";

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection, ide na praznu stranu
mysqli_close($link);
?>