<?php


$link = mysqli_connect("localhost", "root", "", "recepcijsko poslovanje");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
mysqli_set_charset($link,"utf8");



if (isset($_GET['id'])) 

{

$id = $_GET['id']; 


$sql = "SELECT * FROM student WHERE  id = " . $id;
}
else {$sql = "SELECT * FROM student ORDER BY prezime ASC LIMIT 1";}


if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) == 1){
       
                
            
        $row = mysqli_fetch_array($result);

        


        }
}
?>

