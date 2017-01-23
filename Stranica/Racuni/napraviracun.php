<?php
include('session.php'); //uključi provjeru sesije
?>

<!DOCTYPE html>



<link rel="stylesheet" type="text/css" href="base.css">
<link rel="stylesheet" type="text/css" href="forms.css">

<head>
<!-- <meta charset="utf8mb4_croatian_ci"> -->

<title>Dodaj račun</title>

</head>



<body class=" recepcijsko_poslovanje model-dodajracun change-form">

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



     <fieldset class="module aligned">  




    
        <div class="form-row first">
            
            
                <div class="field-box field-first_name">
                    
                    
                        <label class="required" for="id_first_name">Ime:</label>
                        
                            <input class="vTextField" id="id_first_name" maxlength="255" name="ime" type="text" required>
                        
             
                </div>
            
                <div class="field-box field-last_name">
                    
                    
                        <label class="required inline" for="id_last_name">Prezime:</label>
                        
                            <input class="vTextField" id="id_last_name" maxlength="255" name="prezime" type="text" required>
                        
                  
                </div>

                <div class="field-box field-oib_id">
                    
                    
                        <label class="required" for="id_oib_id">OIB:</label>
                        <input class="vTextField" id="id_oib_id" maxlength="11" name="oib" type="text" required>
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
</div>



<div class="submit-row">

<input type="submit" value="Spremi i napravi novi" name="_addanother">


</div>

</div>
</form></div>
<!-- END Content -->

<div id="footer"></div>

<!-- END Container -->

</body>
</html>