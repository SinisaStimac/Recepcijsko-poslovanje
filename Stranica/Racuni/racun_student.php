
<?php
include('session.php'); //uključi provjeru sesije
?>


<!DOCTYPE html>

<title>Računi studenata</title>


  <link rel="stylesheet" type="text/css" href="base.css">
  <link rel="stylesheet" type="text/css" href="changelists.css">
  
 
</head>


<body class="app-reception model-studentinvoice change-list">

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
                            
                <a href="/stranica/login/logout.php">Odjava</a>
            
        </div>
        
        
        
    </div>
    <!-- END Header -->
    
<div class="breadcrumbs">
<a href="http://localhost/stranica/index/index.php">Početna</a>
› Računi studenta
</div>

    
 <div id="content" class="flex">
             <h1>Lista napravljenih računa</h1>
             
             <div id="content-main">
             <meta charset="UTF-8">
              <ul class="object-tools">
                <li>
                 <a href="http://localhost/stranica/racuni/napraviracun.php">
                   Napravi račun
                </a>          
              </li>                      

              </div>

              
                 


         <div class="module filtered" id="changelist">


           <div id="toolbar">
          <!-- SEARCH BAR pretražuje ime, prezime, oib, grad-->
              <form method="GET" action="http://localhost/stranica/racuni/racun_student.php">

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

<th scope="col" class="sortable column-br_racuna"> 
               <div class="text"><a href="">Broj računa</a></div>
               <div class="clear"></div>   
            </th>

<th scope="col" class="sortable column-student">
     <div class="text"><a href="">Student</a></div>
   <div class="clear"></div>
</th>

<th scope="col" class="sortable column-oib">
     <div class="text"><a href="">OIB</a></div>
   <div class="clear"></div>
</th>

<th scope="col" class="sortable column-mjesec">
     <div class="text"><a href="">Za mjesec</a></div>
   <div class="clear"></div>
</th>

<th scope="col" class="sortable column-iznos">
     <div class="text"><a href="">Iznos računa</a></div>
   <div class="clear"></div>
</th>

<th scope="col" class="sortable column-placeno">
     <div class="text"><a href="">Plaćeno</a></div>
   <div class="clear"></div>
</th>

<th scope="col" class="izmjena">
            <div class="text">Izmjena/Pregled</div>
            <div class="clear"></div>
         </th> 
         

</tr>
</thead>

<?php
         include('search_racuni.php'); //uključi provjeru sesije
?>

</table>



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