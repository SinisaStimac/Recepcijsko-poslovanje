<?php
include('session.php'); //uključi provjeru sesije
?>

<!DOCTYPE html>

<link rel="stylesheet" type="text/css" href="base.css">
<link rel="stylesheet" type="text/css" href="changelists.css">
  
</head>


<body class=" app-reception model-reservation change-list" >

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
            
                             
                <strong><a href="/stranica/login/logout.php">Odjava</a></strong>
            
        </div>
        
        
        
    </div>
    <!-- END Header -->
    
<div class="breadcrumbs">
<a href="http://localhost/stranica/index/index.php">Početna</a>
› Rezervacije
</div>

 

    <!-- Content -->
    <div id="content" class="flex">
        
        <h1>Lista rezervacija</h1>
        
  <div id="content-main">
    
        <ul class="object-tools">
          
            
            <li>
              
              <a href="" class="addlink">
                Dodaj rezervaciju
              </a>
            </li>
            
          
        </ul>
    
    
    <div class="module filtered" id="changelist" action="http://localhost/stranica/rezervacije/...">
      

<div id="toolbar">

<form id="changelist-search" method="get">

<div><!-- DIV needed for valid HTML -->
<label for="searchbar"><img src="search.svg" alt="Search"></label>
<input type="text" size="40" name="q" value="" id="searchbar" autofocus="">
<input type="submit" value="Search">


</div>
</form></div>


      

      <form id="changelist-form" method="post" novalidate=""><input type="hidden" name="" value="">
      

      
          
<div class="actions">
    <label>Action: <select name="action" required="">
<option value="" selected="selected">---------</option>
<option value="delete_selected">Izbriši rezervaciju</option>
</select></label><input class="select-across" name="select_across" type="hidden" value="0">
    <button type="submit" class="button" title="Run the selected action" name="index" value="0">Go</button>
    
            
</div>

          


<div class="results">
<table id="result_list">
<thead>
<tr>

<th scope="col" class="action-checkbox-column">
   
   <div class="text"><span><input type="checkbox" id="action-toggle"></span></div>
   <div class="clear"></div>
   
</th>





<th scope="col" class="sortable column-guest">
   
     
   
   <div class="text">Gost</div>
   <div class="clear"></div>
</th>
<th scope="col" class="sortable column-date_of_arrival">
   
     
   
   <div class="text">Datum dolaska</div>
   <div class="clear"></div>
</th>
<th scope="col" class="sortable column-date_of_departure">
   
     
   
   <div class="text">Datum odlaska</div>
   <div class="clear"></div>
</th>
<th scope="col" class="sortable column-reservation_status">
   
     
   
   <div class="text">Status rezervacije</div>
   <div class="clear"></div>
</th>
<th scope="col" class="sortable column-room">
   
     
   
   <div class="text">Soba</div>
   <div class="clear"></div>
</th>
</tr>
</thead>


<tbody>


<tr class="row1"><td class="action-checkbox"><input class="action-select" name="_selected_action" type="checkbox" value="1">
</td>
<th class="field-guest nowrap">Anja LaVanja</th><td class="field-date_of_arrival nowrap">Nov. 3, 2016</td><td class="field-date_of_departure nowrap">Nov. 3, 2016</td><td class="field-reservation_status nowrap">Rezervacija OK</td><td class="field-room nowrap">12</td></tr>

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