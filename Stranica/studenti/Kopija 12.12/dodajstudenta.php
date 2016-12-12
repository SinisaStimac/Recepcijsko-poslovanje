<?php
include('session.php'); //uključi provjeru sesije
?>

<!DOCTYPE html>


<title>Dodaj studenta</title>
<link rel="stylesheet" type="text/css" href="base.css">
<link rel="stylesheet" type="text/css" href="forms.css">

<head>
<meta charset="utf8mb4_croatian_ci">
<title>Add Record Form</title>
</head>



<body class=" app-reception model-student change-form">

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
› <a href="http://localhost/stranica/studenti/studenti.php">Studenti</a>
› Dodaj studenta
</div>

    
    <!-- Content -->
    <div id="content" class="colM">
        
        <h1>Dodaj studenta</h1>
        <div id="content-main">



    <form action="insertstudent.php" method="post" id="student_form" ><input type="hidden">
    <div>



     <fieldset class="module aligned">    
    
        <div class="form-row field-first_name field-last_name">
            
            
                <div class="field-box field-first_name">
                    
                    
                        <label class="required" for="id_first_name">Ime:</label>
                        
                            <input class="vTextField" id="id_first_name" maxlength="255" name="ime" type="text" required="">
                        
             
                </div>
            
                <div class="field-box field-last_name">
                    
                    
                        <label class="required inline" for="id_last_name">Prezime:</label>
                        
                            <input class="vTextField" id="id_last_name" maxlength="255" name="prezime" type="text" required="">
                        
                  
                </div>
            
        </div>
    
        <div class="form-row field-date_of_birth">
            
            
                <div>
                 
                        <label for="id_date_of_birth">Datum rođenja:</label>
                        
                            <input class="vDateField" id="id_date_of_birth" name="datum_rod" size="10" type="text">
                 
                    
                </div>
            
        </div>

    
        <div class="form-row field-oib_id field-email field-phone ">



                <div class="field-box field-oib_id">
                    
                    
                        <label class="required" for="id_oib_id">OIB:</label>
                        <input class="vTextField" id="id_oib_id" maxlength="11" name="oib" type="text" required="">
                        <!-- ograničili smo unos na 11 znakva-->
                 
                </div>
            
            
                <div class="field-box field-email">
                    
                    
                        <label for="id_email">E-mail:</label>
                        
                            <input class="vTextField" id="id_email" maxlength="254" name="email" type="email">
                   
                </div>

                <div class="field-box field-phone_home">
                    
                    
                        <label for="id_phone_home">Telefon:</label>
                        
                        <input class="vTextField" id="id_phone_home" maxlength="255" name="telefon" type="text">                 
                
                </div>
        </div>
    
        
        
    
        <div class="form-row field-address field-city field-zip_code">


                <div class="field-box field-address">

                    
                        <label for="id_address">Adresa:</label>
                        
                        <input class="vTextField" id="address" maxlength="255" name="adresa" type="text">
                        
                    
                    
                </div>
            
                <div class="field-box field-city">
                    
                    
                        <label class="inline" for="id_city">Grad:</label>
                        
                            <input class="vTextField" id="id_city" maxlength="255" name="grad" type="text">
                
                </div>

                <div class="field-box PB">
                    
                    
                        <label class="inline" for="field-zip_code">Poštanski broj:</label>
                        
                            <input class="vTextField" id="id_city" maxlength="255" name="postanski_br" type="text">
                
                </div>
            

        </div>
    
        <div class="form-row field-zip_code field-country">
            
                     
                <div class="field-box field-country">
                    
                    
                        <label class="inline" for="id_country">Država:</label>
                        
                            <input class="vTextField" id="id_country" maxlength="255" name="zemlja" type="text">
               
                </div>
            
        </div>

        <div class="form-row field-studij field-br_kartice field_brkartice">

         <div class="field-box field-studij">
                    
                    
                        <label for="id_studij">Studij:</label>
                        
                            <input class="vTextField" id="id_studij" maxlength="255" name="studij" type="text">
                
                </div>


        <div class="field-box field-br_sobe">
                    
                    
                        <label for="id_br_sobe">Broj sobe:</label>
                        
                        <input class="vTextField" id="id_br_sobe" maxlength="10" name="soba_br" type="text">
                        
                
                </div>


        <div class="field-box field-br_kartice">
                    
                    
                        <label for="id_br_kartice">Broj kartice:</label>
                        
                        <input class="vTextField" id="id_br_kartice" maxlength="10" name="br_kartice" type="text">
                        
                
                </div>
      

        </div>
    
</fieldset>


  <fieldset class="module aligned">

    <h2>PODACI O SOBI</h2>
    
    
        <div class="form-row field-level field-room">
            
            
                <div class="field-box field-level">
                    
                    
                        <label for="id_level">Kat:</label>
                        
                            <input class="vTextField" id="id_level" maxlength="255" name="level" type="text">
                    
                    
                </div>
            
                <div class="field-box field-br_sobe">
                    
                    
                        <label class="inline" for="id_br_sobe">Soba:</label>
                        
                            <input class="vTextField" id="broj_sobe" maxlength="255" name="broj_sobe" type="text">
                
                    
                </div>
            
        </div>
    
        <div class="form-row field-note">
            
            
                <div>
             
                        <label for="id_note">Bilješke:</label>
                        
                            <textarea class="vLargeTextField" cols="40" id="id_note" name="note" rows="10"></textarea>
                
                </div>
            
        </div>
    
</fieldset>

    

  
  <div class="tabular inline-related"> 



<fieldset class="module ">

   <h2>Evidencijs posjeta</h2>
   
   <table>
     <thead><tr>
       <th class="original"></th>
     
       
         <th>Ime-prezime posjetitelja
         
         </th>
       
     
         <th>Vrijeme ulaza 
         
         </th>
       
     
       
         <th>Vrijeme izlaza
         
         </th>
       

     
     </tr>
     </thead>

     <tbody>
     
        
        <tr class="form-row row1 " id="student_visit_record">

        <td class="original">
          
          <input id="id_student_visit_records" name="student_visit_records" type="hidden">
          
        </td>
        
       
        <td class="field-info_visitor">
              
           <input class="vTextField" id="id_student_visit_records info_visitor" maxlength="255" name="student_visit_records info_visitor" type="text">
              
        </td>
              
                    
            
              
              <td class="field-time_of_entrance">
              
                  
                  <p class="datetime">Datum: <input class="vDateField" id="id_student_visit_records time_of_entrance" name="student_visit_records time_of_entrance" size="10" type="text">
                  <span class="datetimeshortcuts"
                  >&nbsp;
                  <a href="">Danas</a>
                  &nbsp;|&nbsp;
                  <a href="" id="calendarlink1">
                  <span class="date-icon" title="Choose a Date">
                  </span></a>
                  </span><br>
                  Vrijeme: 
                  <input class="vTimeField" id="id_student_visit_records time_of_entrance" name="student_visit_records time_of_entrance_1" size="8" type="text">
                  <span class="datetimeshortcuts">
                  &nbsp;
                  <a href="">
                  Sada
                  </a>&nbsp;|&nbsp;<a href="" id="clocklink"><span class="clock-icon" title="Choose a Time">                    
                  </span></a>
                  </span>
                  
              
              </td>
              
            
          
            
              
              <td class="field-time_of_exit">
              
               <p class="datetime">Datum: <input class="vDateField" id="id_student_visit_records time_of_exit" name="student_visit_records time_of_exit" size="10" type="text">
                  <span class="datetimeshortcuts"
                  >&nbsp;
                  <a href="">Danas</a>
                  &nbsp;|&nbsp;
                  <a href="" id="calendarlink1">
                  <span class="date-icon" title="Choose a Date">
                  </span></a>
                  </span><br>
                  Vrijeme: 
                  <input class="vTimeField" id="id_student_visit_records time_of_exit" name="student_visit_records time_of_exit" size="8" type="text">
                  <span class="datetimeshortcuts">
                  &nbsp;
                  <a href="">
                  Sada
                  </a>&nbsp;|&nbsp;<a href="" id="clocklink"><span class="clock-icon" title="Choose a Time">                    
                  </span></a>
                  </span>    
                  
              
              </td>
     
        </tr>
     
        
        <tr class="form-row row2  empty-form" id="student_visit_records-empty">
        <td class="original">
          
          <input id="id_student_visit_records-__prefix__-id" name="student_visit_records-__prefix__-id" type="hidden">
          <input id="id_student_visit_records-__prefix__-student" name="student_visit_records-__prefix__-student" type="hidden">
   
     
     </tbody>
    </table>

    </fieldset>
    
  </div>
</div>



<div class="submit-row">

<input type="submit" value="Spremi" class="default" name="_save">
<input type="submit" value="Spremi i napravi novi" name="_addanother">
<input type="submit" value="Spremi i nastavi editirati" name="_continue">

</div>

</div>
</form></div>
<!-- END Content -->

<div id="footer"></div>

<!-- END Container -->

</body>
</html>