<?php



$link = mysqli_connect("localhost", "root", "", "recepcijsko poslovanje");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
mysqli_set_charset($link,"utf8");



if (isset($_GET['search']) && $_GET['search'] != "") 

{

$search = $_GET['search']; 


$sql = "SELECT * FROM student WHERE  (ime LIKE '%$search%' OR prezime LIKE '%$search%' OR oib LIKE '%$search%' OR grad LIKE '%$search%') ORDER BY prezime ASC "; } // pretražuje ime, prezime, oib, grad

else {$sql = "SELECT * FROM student ORDER BY prezime ASC";}


if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
       
                
            
        while($row = mysqli_fetch_array($result)){

            echo "<tr>";

            echo "<td><input type='checkbox'></td>";
                echo "<td>" . $row['ime'] . "</td>";
                echo "<td>" . $row['prezime'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['oib'] . "</td>";
                echo "<td>" . $row['datum_rod'] . "</td>";
                echo "<td>" . $row['adresa'] . "</td>";
                echo "<td>" . $row['grad'] . "</td>";
                echo "<td>" . $row['postanski_br'] . "</td>";
                echo "<td>" . $row['zemlja'] . "</td>";
                echo "<td>" . $row['telefon'] . "</td>";
                echo "<td>" . $row['studij'] . "</td>";
                echo "<td>" . $row['soba_br'] . "</td>";
                echo "<td>" . $row['br_kartice'] . "</td>";
                

                
            echo "</tr>";
        }
        
        // Close result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>