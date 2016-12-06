<?php
include('session.php'); //uključi provjeru sesije
?>

<!DOCTYPE html>

<html lang="en-us"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title> Izabrati uslugu</title>

<link rel="stylesheet" type="text/css" href="base.css" />
<link rel="stylesheet" type="text/css" href="dashboard.css" />

</head>


<body class="app-reception model-service change-list" data-admin-utc-offset="0">

<div id="container">

    
    <div id="header">
        <div id="branding">
        
<h1 id="site-name"><a href="">Recepcijsko poslovanje</a></h1>

        </div>
        
        
        <div id="user-tools">
            
                Dobro došli
                <strong></strong>
            
                
                <a href="/stranica/login/logout.php">Odjava</a>
            
        </div>
        
        
        
    </div>
    
<div class="breadcrumbs">
<a href="/stranica/index/index.php">Početna</a>
> <a href="/Stranica/Usluge/usluge.php">Usluge</a>
> Izmjeni uslugu
</div>

    <div id="content" class="flex">
        
        <h1>Izaberite usluge za mjenjanje</h1>
        
  <div id="content-main">
    
        <ul class="object-tools">
          
            
            <li>
              
              <a href="" class="addlink">
                Dodaj uslugu
              </a>
            </li>
            
          
        </ul>
    
    
    <div class="module" id="changelist">


      <form id="changelist-form" method="post" novalidate=""><input type="hidden" name="" value="">
      

      
          
<div class="actions">
    <label>Action: <select name="action" required="">
<option value="" selected="selected"></option>
<option value="delete_selected">Izbrisati odabrane usluge</option>
</select></label><input class="select-across" name="select_across" type="hidden" value="0">
    <button type="submit" class="button" title="Run the selected action" name="index" value="0">Pokreni</button>
    
        <span class="action-counter" data-actions-icnt="2">0 of 2 izabrane</span>
        
    
</div>


<div class="results">
<table id="result_list">
<thead>
<tr>

<th scope="col" class="action-checkbox-column">
   
   <div class="text"><span><input type="checkbox" id="action-toggle"></span></div>
   <div class="clear"></div>
</th>
<th scope="col" class="column-__str__">
   
   <div class="text"><span>Usluge</span></div>
   <div class="clear"></div>
</th>
</tr>
</thead>
<tbody>


<tr class="row1"><td class="action-checkbox"><input class="action-select" name="_selected_action" type="checkbox" value="1"></td><th class="field-__str__"><a href="">Čišćenje sobe I</a></th></tr>


<tr class="row2"><td class="action-checkbox"><input class="action-select" name="_selected_action" type="checkbox" value="2"></td><th class="field-__str__"><a href="">Čišćenje sobe II</a></th></tr>

</tbody>
</table>
</div>




      </form>
    </div>
  </div>

        
        <br class="clear">
    </div>

    <div id="footer"></div>
</div>



</body></html>