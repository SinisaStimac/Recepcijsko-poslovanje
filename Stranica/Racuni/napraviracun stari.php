<?php
include('session.php'); //uključi provjeru sesije
?>


<!DOCTYPE html>
<!-- saved from url=(0056)http://sc-reception.fwd.hr/reception/studentinvoice/add/ -->
<html lang="en-us"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Recepcijsko poslovanje</title>

<link rel="stylesheet" type="text/css" href="base.css">
<link rel="stylesheet" type="text/css" href="forms.css">


</head>


<body class=" app-reception model-studentinvoice change-form" data-admin-utc-offset="0">

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
            
                             
                <strong><a href="http://localhost/stranica/login/logout.php">Odjava</a></strong>
            
        </div>
        
        
        
    </div>
        
        
        
    </div>


    <!-- END Header -->
    
<div class="breadcrumbs">
<a href="http://localhost/stranica/index/index.php">Home</a>
› <a href="http://localhost/stranica/racuni/napraviracun.php">Napravi račun</a>

</div>





    <!-- Content -->
    <div id="content" class="colM">
        
        <h1>Napravi račun</h1>
        <div id="content-main">

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






  <fieldset class="module aligned ">
    
    
    
        <div class="form-row field-date">
            
            
                <div>
                    
                    
                        <label for="id_date">Date:</label>
                        
                            <input class="vDateField" id="id_date" name="date" size="10" type="text"><span class="datetimeshortcuts">&nbsp;<a href="javascript:DateTimeShortcuts.handleCalendarQuickLink(0, 0);">Today</a>&nbsp;|&nbsp;<a href="javascript:DateTimeShortcuts.openCalendar(0);" id="calendarlink0"><span class="date-icon" title="Choose a Date"></span></a></span>
                        
                    
                    
                <br><span class="timezonewarning">Note: You are 1 hour ahead of server time.</span></div>
            
        </div>
    
        <div class="form-row field-is_paid">
            
            
                <div class="checkbox-row">
                    
                    
                        <input id="id_is_paid" name="is_paid" type="checkbox"><label class="vCheckboxLabel" for="id_is_paid">Is paid</label>
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-is_active">
            
            
                <div class="checkbox-row">
                    
                    
                        <input id="id_is_active" name="is_active" type="checkbox"><label class="vCheckboxLabel" for="id_is_active">Is active</label>
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-payment">
            
            
                <div>
                    
                    
                        <label for="id_payment">Payment:</label>
                        
                            <input class="vTextField" id="id_payment" maxlength="255" name="payment" type="text">
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-student">
            
            
                <div>
                    
                    
                        <label for="id_student">Student:</label>
                        
                            
<div class="related-widget-wrapper">
    <select id="id_student" name="student">
<option value="" selected="selected">---------</option>
<option value="1">Vladan Grubešić</option>
<option value="2">Ivica Ivić</option>
</select>
    
        
        <a class="related-widget-wrapper-link change-related" id="change_id_student" data-href-template="/reception/student/__fk__/change/?_to_field=id&amp;_popup=1" title="Change selected Student">
            <img src="./Add Student invoice _ Django site admin_files/icon-changelink.svg" alt="Change">
        </a>
        
        
        <a class="related-widget-wrapper-link add-related" id="add_id_student" href="http://sc-reception.fwd.hr/reception/student/add/?_to_field=id&amp;_popup=1" title="Add another Student">
            <img src="./Add Student invoice _ Django site admin_files/icon-addlink.svg" alt="Add">
        </a>
        
        
    
</div>

                        
                    
                    
                </div>
            
        </div>
    
</fieldset>








    
<div class="js-inline-admin-formset inline-group" id="servicecost_set-group" data-inline-type="tabular" data-inline-formset="{&quot;name&quot;: &quot;#servicecost_set&quot;, &quot;options&quot;: {&quot;prefix&quot;: &quot;servicecost_set&quot;, &quot;addText&quot;: &quot;Add another Service cost&quot;, &quot;deleteText&quot;: &quot;Remove&quot;}}">
  <div class="tabular inline-related last-related">
<input id="id_servicecost_set-TOTAL_FORMS" name="servicecost_set-TOTAL_FORMS" type="hidden" value="1"><input id="id_servicecost_set-INITIAL_FORMS" name="servicecost_set-INITIAL_FORMS" type="hidden" value="0"><input id="id_servicecost_set-MIN_NUM_FORMS" name="servicecost_set-MIN_NUM_FORMS" type="hidden" value="0"><input id="id_servicecost_set-MAX_NUM_FORMS" name="servicecost_set-MAX_NUM_FORMS" type="hidden" value="1000">
<fieldset class="module ">
   <h2>Service costs</h2>
   
   <table>
     <thead><tr>
       <th class="original"></th>
     
       
         <th>Service
         
         </th>
       
     
       
         <th>Quantity
         
         </th>
       
     
       
         <th>Date
         
         </th>
       
     
       
         <th>Cancellation
         
         </th>
       
     
       
         <th>Date of cancellation
         
         </th>
       
     
     <th>Delete?</th>
     </tr></thead>

     <tbody>
     
        
        <tr class="form-row row1 " id="servicecost_set-0">
        <td class="original">
          
          <input id="id_servicecost_set-0-id" name="servicecost_set-0-id" type="hidden">
          <input id="id_servicecost_set-0-student_invoice" name="servicecost_set-0-student_invoice" type="hidden">
          
        </td>
        
          
            
              
              <td class="field-service">
              
                  
                  
<div class="related-widget-wrapper">
    <select id="id_servicecost_set-0-service" name="servicecost_set-0-service">
<option value="" selected="selected">---------</option>
<option value="1">Čišćenje sobe</option>
<option value="2">Čišćenje sobe II</option>
</select>
    
        
        <a class="related-widget-wrapper-link change-related" id="change_id_servicecost_set-0-service" data-href-template="/reception/service/__fk__/change/?_to_field=id&amp;_popup=1" title="Change selected Service">
            <img src="./Add Student invoice _ Django site admin_files/icon-changelink.svg" alt="Change">
        </a>
        
        
        <a class="related-widget-wrapper-link add-related" id="add_id_servicecost_set-0-service" href="http://sc-reception.fwd.hr/reception/service/add/?_to_field=id&amp;_popup=1" title="Add another Service">
            <img src="./Add Student invoice _ Django site admin_files/icon-addlink.svg" alt="Add">
        </a>
        
        
    
</div>

              
              </td>
              
            
          
            
              
              <td class="field-quantity">
              
                  
                  <input class="vTextField" id="id_servicecost_set-0-quantity" maxlength="255" name="servicecost_set-0-quantity" type="text">
              
              </td>
              
            
          
            
              
              <td class="field-date">
              
                  
                  <input class="vDateField" id="id_servicecost_set-0-date" name="servicecost_set-0-date" size="10" type="text"><span class="datetimeshortcuts">&nbsp;<a href="javascript:DateTimeShortcuts.handleCalendarQuickLink(1, 0);">Today</a>&nbsp;|&nbsp;<a href="javascript:DateTimeShortcuts.openCalendar(1);" id="calendarlink1"><span class="date-icon" title="Choose a Date"></span></a></span>
              
              <br><span class="timezonewarning">Note: You are 1 hour ahead of server time.</span></td>
              
            
          
            
              
              <td class="field-cancellation">
              
                  
                  <input id="id_servicecost_set-0-cancellation" name="servicecost_set-0-cancellation" type="checkbox">
              
              </td>
              
            
          
            
              
              <td class="field-date_of_cancellation">
              
                  
                  <input class="vDateField" id="id_servicecost_set-0-date_of_cancellation" name="servicecost_set-0-date_of_cancellation" size="10" type="text"><span class="datetimeshortcuts">&nbsp;<a href="javascript:DateTimeShortcuts.handleCalendarQuickLink(2, 0);">Today</a>&nbsp;|&nbsp;<a href="javascript:DateTimeShortcuts.openCalendar(2);" id="calendarlink2"><span class="date-icon" title="Choose a Date"></span></a></span>
              
              <br><span class="timezonewarning">Note: You are 1 hour ahead of server time.</span></td>
              
            
          
        
        
          <td class="delete"></td>
        
        </tr>
     
        
        <tr class="form-row row2  empty-form" id="servicecost_set-empty">
        <td class="original">
          
          <input id="id_servicecost_set-__prefix__-id" name="servicecost_set-__prefix__-id" type="hidden">
          <input id="id_servicecost_set-__prefix__-student_invoice" name="servicecost_set-__prefix__-student_invoice" type="hidden">
          
        </td>
        
          
            
              
              <td class="field-service">
              
                  
                  
<div class="related-widget-wrapper">
    <select id="id_servicecost_set-__prefix__-service" name="servicecost_set-__prefix__-service">
<option value="" selected="selected">---------</option>
<option value="1">Čišćenje sobe</option>
<option value="2">Čišćenje sobe II</option>
</select>
    
        
        <a class="related-widget-wrapper-link change-related" id="change_id_servicecost_set-__prefix__-service" data-href-template="/reception/service/__fk__/change/?_to_field=id&amp;_popup=1" title="Change selected Service">
            <img src="./Add Student invoice _ Django site admin_files/icon-changelink.svg" alt="Change">
        </a>
        
        
        <a class="related-widget-wrapper-link add-related" id="add_id_servicecost_set-__prefix__-service" href="http://sc-reception.fwd.hr/reception/service/add/?_to_field=id&amp;_popup=1" title="Add another Service">
            <img src="./Add Student invoice _ Django site admin_files/icon-addlink.svg" alt="Add">
        </a>
        
        
    
</div>

              
              </td>
              
            
          
            
              
              <td class="field-quantity">
              
                  
                  <input class="vTextField" id="id_servicecost_set-__prefix__-quantity" maxlength="255" name="servicecost_set-__prefix__-quantity" type="text">
              
              </td>
              
            
          
            
              
              <td class="field-date">
              
                  
                  <input class="vDateField" id="id_servicecost_set-__prefix__-date" name="servicecost_set-__prefix__-date" size="10" type="text"><span class="datetimeshortcuts">&nbsp;<a href="javascript:DateTimeShortcuts.handleCalendarQuickLink(3, 0);">Today</a>&nbsp;|&nbsp;<a href="javascript:DateTimeShortcuts.openCalendar(3);" id="calendarlink3"><span class="date-icon" title="Choose a Date"></span></a></span>
              
              <br><span class="timezonewarning">Note: You are 1 hour ahead of server time.</span></td>
              
            
          
            
              
              <td class="field-cancellation">
              
                  
                  <input id="id_servicecost_set-__prefix__-cancellation" name="servicecost_set-__prefix__-cancellation" type="checkbox">
              
              </td>
              
            
          
            
              
              <td class="field-date_of_cancellation">
              
                  
                  <input class="vDateField" id="id_servicecost_set-__prefix__-date_of_cancellation" name="servicecost_set-__prefix__-date_of_cancellation" size="10" type="text"><span class="datetimeshortcuts">&nbsp;<a href="javascript:DateTimeShortcuts.handleCalendarQuickLink(4, 0);">Today</a>&nbsp;|&nbsp;<a href="javascript:DateTimeShortcuts.openCalendar(4);" id="calendarlink4"><span class="date-icon" title="Choose a Date"></span></a></span>
              
              <br><span class="timezonewarning">Note: You are 1 hour ahead of server time.</span></td>
              
            
          
        
        
          <td class="delete"></td>
        
        </tr>
     
     </tbody>
   </table>
</fieldset>
  </div>
</div>







<div class="submit-row">
<input type="submit" value="Save" class="default" name="_save">


<input type="submit" value="Save and add another" name="_addanother">
<input type="submit" value="Save and continue editing" name="_continue">
</div>



    <script type="text/javascript" id="django-admin-form-add-constants" src="./Add Student invoice _ Django site admin_files/change_form.js.download" data-model-name="studentinvoice">
    </script>




<script type="text/javascript" id="django-admin-prepopulated-fields-constants" src="./Add Student invoice _ Django site admin_files/prepopulate_init.js.download" data-prepopulated-fields="[]">
</script>


</div>
</form></div>

        
        <br class="clear">
    </div>
    <!-- END Content -->

    <div id="footer"></div>
</div>
<!-- END Container -->



