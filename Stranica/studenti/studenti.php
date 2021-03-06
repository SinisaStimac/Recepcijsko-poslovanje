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

          </div>          <!-- END Header -->


          <div class="breadcrumbs">
             <a href="http://localhost/stranica/index/index.php">Početna</a>
             › Studenti
     </div>


          <!-- Content -->
    <div id="content" class="flex">
             <h1>Lista studenta u domu</h1>
             
            <div id="content-main">
             <meta charset="UTF-8">
              <ul class="object-tools">
                <li>
                 <a href="http://localhost/stranica/studenti/dodajstudenta.php">
                   Dodaj račun
                </a>          
              </li>                      

              </div>

              
                 


         <div class="module filtered" id="changelist">


           <div id="toolbar">
          <!-- SEARCH BAR pretražuje ime, prezime, oib, grad-->
              <form method="GET" action="http://localhost/stranica/studenti/studenti.php">

               <div><!-- DIV potreban za ispravan HTML -->
                 <label for="searchbar"><img src="http://localhost/stranica/studenti/search.svg" alt="Search"></label>

                 <input type="text" size="40" name="search" >

                 <input type="submit" name='submit' value="Search">
               </div>
              </form>
           </div>
         

<!--  <form id="changelist-form" method="post" novalidate>
<input type='hidden' name='' value='' />

         

          
          <div class="actions"> 
          <label>Akcija: 
            <select name="action" required="">
              <option value="" selected="selected">---------</option>
            </select>
          </label> 

         <input class="select-across" name="select_across" type="hidden" value="0">
         <button type="submit" class="button"  name="index" value="0">Go
         </button>

         </div> -->




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

          <th scope="col" class="izmjena">
            <div class="text">Izmjena/Pregled</div>
            <div class="clear"></div>
         </th> 
         

         <th scope="col" class="brisanje">
            <div class="text">Brisanje</div>
            <div class="clear"></div>
         </th>          

         </tr></thead>
         
          

            <?php
         include('search.php'); //uključi provjeru sesije
         ?>
         

         </table> 

         </form>        
         
          <br class="clear">
         
 </div> <!-- END Content -->

      <div id="footer"></div>
</div> <!-- END Container -->

         </body></html>