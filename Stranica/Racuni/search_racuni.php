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


$sql = "SELECT * FROM racuni WHERE  (ime LIKE '%$search%' OR prezime LIKE '%$search%' OR oib LIKE '%$search%' OR br_racuna LIKE '%$search%') ORDER BY br_racuna ASC "; } 


else {$sql = "SELECT * FROM racuni ORDER BY br_racuna ASC";}


if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
       
                
            
        while($row = mysqli_fetch_array($result)){

            echo "<tr>";

                                              
                echo "<td>" . $row['br_racuna'] . "</td>";
                echo "<td>" . $row['ime'] . " &nbsp ". $row['prezime'] . "</td>";
                echo "<td>" . $row['oib'] . "</td>";
                echo "<td>" . $row['datum'] . "</td>";
                echo "<td>" . $row['iznos_racuna'] . "</td>";
                echo "<td>" . $row['placeno'] . "</td>";
                
                echo "<td><a href='izmijenistudenta.php?id=" . $row['br_racuna'] . "'> Izmjeni/Pregled </a>";
                //echo "<td><a href='izbrisistudenta.php?id=" . $row['id'] . "'> Izbriši </a>";
                
                
                
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