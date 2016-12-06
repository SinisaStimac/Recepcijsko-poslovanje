<?php
include('session.php'); //uključi provjeru sesije
?>


<!DOCTYPE html>

<head>
  <title>Recpcijsko poslovanje</title>
  <link rel="stylesheet" type="text/css" href="base.css">
  <link rel="stylesheet" type="text/css" href="changelists.css">
</head>


<body class="app-reception model-student change-list"> 
<!-- Container -->
<div id="container">

    
  <!-- Header -->
  <div id="header">

    <div id="branding">
     <h1 id="site-name">Recepcijsko poslovanje</a></h1>
    </div>
               
    <div id="user-tools">
     <strong>Dobro došli</strong>
     &emsp;
     <strong><a href="http://localhost/stranica/login/logout.php">Odjava</a></strong>
    </div> 

  </div>

    <!-- END Header -->
    <div class="breadcrumbs">
     <a href="http://localhost/stranica/index/index.php">Početna</a>
     › Studenti
    </div>


    <!-- Content -->
  <div id="content" class="flex">
     <h1>Odabir studenta</h1>
    
     <div id="content-main">
       <ul class="object-tools">
        <li>
          <a href="http://localhost/stranica/studenti/dodajstudenta.php">
           Dodaj studenta
          </a>
        </li>
       </ul>
     </div>
    
    
    <div class="module filtered" id="changelist">
      

       <div id="toolbar">
       <form id="changelist-search" method="get">

         <div><!-- DIV potreban za ispravan HTML -->
          <label for="searchbar"><img src="http://localhost/stranica/studenti/search.svg" alt="Search"></label>
          <input type="text" size="40" name="q" value="" id="searchbar">
          <input type="submit" value="Search">
         </div>
       </form>
       </div>


          <div id="changelist-filter"> <!-- FILTER na desnoj strani -->
            <h2>Filter</h2>
            <h3> Po Gradu </h3>

             <ul>
              <li class="selected">
               <a href="link- php skripta za sve">Svi</a>
              </li>

              <li>
               <a href="link - php skripta za pulu">Pula</a>
              </li>
             </ul>

            <h3> Po državi </h3>
             <ul>
              <li class="selected">
               <a href="link- php skripta za sve">Svi</a>
              </li>

              <li>
               <a href="link- php skripta za Hrvatsku">Hrvatska</a>
              </li>
             </ul>
          </div>
        
       
          <div class="actions"> <!-- drop down Action -->

           <label>Akcija: 
           <select name="action" required="">
            <option value="" selected="selected">---------</option>
            <option value="delete_selected">Izbriši odabrane studente</option>

</select></label><input class="select-across" name="select_across" type="hidden" value="0">
    <button type="submit" class="button" title="Run the selected action" name="index" value="0">Go</button>
    
      
        
    
</div>

          


<div class="results">
<table id="result_list">

<thead>
<tr>

<th scope="col" class="action-checkbox-column">
<div class="text"></div>
<div class="clear"></div>
</th>


<th scope="col" class="sortable column-first_name"> 
   <div class="text"><a href=" link php poredaj po imenima">Ime</a></div>
   <div class="clear"></div>   
</th>


 <!-- makni sorting, možda ne treba, dodatna opcija -->
<th scope="col" class="sortable column-last_name sorted ascending">
   
       <div class="sortoptions"> 
         <a class="sortremove" href="link php sort remove" title="Remove from sorting"></a>
        
         <a href="link php poredaj rastući po abecedi" class="toggle ascending" title="Toggle sorting"></a>
       </div>
     
   
   <div class="text"><a href="link php prezime">Prezime</a></div>
   <div class="clear"></div>
</th>


<th scope="col" class="sortable column-email">
     <div class="text"><a href="link php email">E-mail</a></div>
   <div class="clear"></div>
</th>


<th scope="col" class="sortable column-oib_id">
    <div class="text"><a href="link php OIB">OIB</a></div>
   <div class="clear"></div>
</th>


<th scope="col" class="sortable column-date">
    <div class="text"><a href="link php ">Datum rođenja</a></div>
   <div class="clear"></div>
</th>


<th scope="col" class="sortable column-adresa">
    <div class="text"><a href="link php ">Adresa</a></div>
   <div class="clear"></div>
</th>

<th scope="col" class="sortable column-city">
   <div class="text"><a href="link php Grad">Grad</a></div>
   <div class="clear"></div>
</th>

<th scope="col" class="sortable column-PB">
    <div class="text"><a href="link php ">Poštanski broj</a></div>
   <div class="clear"></div>
</th>

<th scope="col" class="sortable column-country">
   <div class="text"><a href="link php Države">Država</a></div>
   <div class="clear"></div>
</th>

<th scope="col" class="sortable column-tel">
   <div class="text"><a href="link php tel">Telefon</a></div>
   <div class="clear"></div>
</th>

<th scope="col" class="sortable column-studij">
   <div class="text"><a href="link php studij">Studij</a></div>
   <div class="clear"></div>
</th>

<th scope="col" class="sortable column-soba_br">
   <div class="text"><a href="link php soba broj">Broj sobe</a></div>
   <div class="clear"></div>
</th>

<th scope="col" class="sortable column-br_kartice">
   <div class="text"><a href="link php broj kartice">Broj kartice</a></div>
   <div class="clear"></div>
</th>


</tr>
</thead>

<tbody>


<?php
include('readstudent.php'); //uključi provjeru sesije
?>


<!--
<tr class="row2"><td class="action-checkbox">
<input class="action-select" name="_selected_action" type="checkbox" value="2"></td>
<th class="field-first_name"><a href="link php za drugi ID unešen u bazu ">Ivica</a></th>

<td class="field-last_name">Ivić</td>
<td class="field-email">test@hr</td>
<td class="field-oib_id">12345678901</td>
<td class="field-rođenje">10.1.2015</td>
<td class="field-adresa">Fikus 2</td>
<td class="field-city">Pula</td>
<td class="field-pb">52100</td>
<td class="field-country">Hrvatska</td>
<td class="field-tel">052/555333</td>
<td class="field-studij">Turizam</td>
<td class="field-soba_br">102</td>
<td class="field-br_kartice">102</td>
-->

</tbody>
</table>
</div>



      </form>
    </div>
  </div>

        
        <br class="clear">
    </div>
    <!-- END Content -->

    <div id="footer"></div>
</div>
<!-- END Container -->



</body></html>