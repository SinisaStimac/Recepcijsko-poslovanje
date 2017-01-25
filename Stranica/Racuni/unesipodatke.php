<?php
include('session.php'); //uključi provjeru sesije
include('odaberistudenta.php');
?>

<!DOCTYPE html>



<link rel="stylesheet" type="text/css" href="base.css">
<link rel="stylesheet" type="text/css" href="forms.css">
<link rel="stylesheet" type="text/css" href="changelists.css">

<head>
<!-- <meta charset="utf8mb4_croatian_ci"> -->

<title>Dodaj račun</title>

</head>



<body class="recepcijsko_poslovanje model-dodajracun change-form">

<!-- Container -->
<div id="container">

    
    <!-- Header -->
    <div id="header">
    <div id="branding">
        
<h1 id="site-name">Recepcijsko poslovanje</h1>

        </div>        
        
        <div id="user-tools">
            
                
                <strong>Dobro došli</strong>

                &emsp;            
            
                <a href="/stranica/login/logout.php"">Odjava</a>
            
        </div>        
        
        
    </div>
    <!-- END Header -->
    
<div class="breadcrumbs">
<a href="http://localhost/stranica/index/index.php">Početna</a>
›Dodaj račun
</div>

    
    <!-- Content -->
    <div id="content" class="colM">
        
        <h1>Dodaj račun</h1>
        <div id="content-main">



    <form action="insertracun.php" method="post" id="dodaj_racun" ><input type="hidden">
    <div>

    <input type="hidden" name="id" value="<?php echo $row['id'];?>">

     <fieldset class="module aligned">  

    
        <div class="form-row first">
            
            
                <div class="field-box field-first_name">
                    
                    
                     <label class="required" for="id_first_name">Ime:</label>
                        
                       <input class="vTextField" id="id_first_name" maxlength="255" name="ime" type="text" required value="<?php echo $row['ime'] ?>">
                        
             
                </div>
            
                <div class="field-box field-last_name">
                    
                    
                        <label class="required inline" for="id_last_name">Prezime:</label>
                        
                            <input class="vTextField" id="id_last_name" maxlength="255" name="prezime" type="text" required value="<?php echo $row['prezime'] ?>">
                        
                  
                </div>

                <div class="field-box field-oib_id">
                    
                    
                        <label class="required" for="id_oib_id">OIB:</label>
                        <input class="vTextField" id="id_oib_id" maxlength="11" name="oib" type="text" required value="<?php echo $row['oib'] ?>">
                        <!-- ograničili smo unos na 11 znakva-->
                 
                </div>
            
        </div>
    
        

    
        <div class="form-row second">



                
            
            
                <div class="field-box field-datum">
                    
                    
                        <label for="datum">Za mjesec</label>
                        
                            <input class="vTextField" id="id_email" maxlength="254" name="datum" type="text" required>
                   
                </div>

                <div class="field-box field-iznos_racuna">
                    
                    
                        <label for="iznos_racuna">Iznos računa</label>
                        
                        <input class="vTextField" id="iznos_racuna" maxlength="255" name="iznos_racuna" type="text" required>                 
                
                </div>

                <div class="field-box field-placeno">
                    
                    
                        <label for="placeno">Plaćeno</label>
                        
                        <input class="vTextField" id="placeno" maxlength="255" name="placeno" type="text" required>                 
                
                </div>
        </div>
    
  
    
</fieldset>

   
  </div>




<div class="submit-row">

<input type="submit" value="Spremi i napravi novi" name="_addanother">


</div>

</form>



<!-- Search forma-->


<div class="module filtered" id="changelist">


           <div id="toolbar">
          <!-- SEARCH BAR pretražuje ime, prezime, oib, grad-->
              <form method="GET" action="http://localhost/stranica/racuni/napraviracun.php">

               <div><!-- DIV potreban za ispravan HTML -->
                 <label for="searchbar"><img src="http://localhost/stranica/studenti/search.svg" alt="Search"></label>

                 <input type="text" size="40" name="search" >

                 <input type="submit" name='submit' value="Search">
               </div>
              </form>
           </div>
         


      <div class="results">

          <table id="result_list">

           <thead>
            <tr>

               


            <th scope="col" class="sortable column-first_name"> 
               <div class="text"><a href="">Ime</a></div>
               <div class="clear"></div>   
            </th>


           
            <th scope="col" class="sortable column-last_name sorted ascending">
              <div class="text"><a href="link php prezime">Prezime</a></div>
              <div class="clear"></div>
           </th>


          <th scope="col" class="sortable column-oib_id">
           <div class="text"><a href="link php OIB">OIB</a></div>
           <div class="clear"></div>
         </th>


        
         

         <th scope="col" class="brisanje">
            <div class="text">Unos</div>
            <div class="clear"></div>
         </th>          

         </tr></thead>
         
          

            <?php
         include('search.php'); //uključi provjeru sesije
         ?>
         

         </table> 

         </form>        
         
          <br class="clear">
         
 </div>




<!-- END Content -->

<div id="footer"></div>

<!-- END Container -->

</body>
</html>