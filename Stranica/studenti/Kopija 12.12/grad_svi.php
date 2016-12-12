<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "recepcijsko poslovanje");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT DISTINCT grad FROM student WHERE grad IS NOT NULL";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) >0){
       
                
            
        while($row = mysqli_fetch_array($result)){


            


            echo  $row['grad'];

            echo "<br />\n";
               
            

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