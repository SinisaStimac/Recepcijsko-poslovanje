
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

    

    
        
    

    <!-- Content -->
    <div id="content" class="flex">
        
        <h1>Odaberi račun</h1>
        
  <div id="content-main">
    
        <ul class="object-tools">
          
            
            <li>
              
              <a href="" class="addlink">
                Dodaj račun
              </a>
            </li>
            
          
        </ul>
    
    
    <div class="module" id="changelist">
      

      <form id="changelist-form" method="post" novalidate=""><input type="hidden" name="changelist" value="">
      

      
          
<div class="actions">
    <label>Akcija: <select name="action" required="">
<option value="" selected="selected">---------</option>
<option value="delete_selected">Izbriši račun</option>
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
<th scope="col" class="column-id">
   
     
   
   <div class="text">ID</div>
   <div class="clear"></div>
</th>
<th scope="col" class="sortable column-student">
   
     
   
   <div class="text"><a href="/php upit">Student</a></div>
   <div class="clear"></div>
</th>
</tr>
</thead>
<tbody>


<tr class="row1">
<td class="action-checkbox">
<input class="action-select" name="_selected_action" type="checkbox" value="2"></td>
<th class="field-id"><a href="">2</a></th>
<td class="field-student nowrap">Josip Auzina</td></tr>


<tr class="row2">
<td class="action-checkbox">
<input class="action-select" name="_selected_action" type="checkbox" value="1"></td>
<th class="field-id"><a href="">1</a>
</th>
<td class="field-student nowrap">Pat Mat</td></tr>

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