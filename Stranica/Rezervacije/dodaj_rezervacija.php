<?php
include('session.php'); //uključi provjeru sesije
?>


<!DOCTYPE html>

<title>Recepcijsko poslovanje</title>

<link rel="stylesheet" type="text/css" href="base.css">
<link rel="stylesheet" type="text/css" href="forms.css">


</head>


<body class=" app-reception model-reservation change-form" >

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
› Dodaj rezervaciju

</div>

    

    
        
    

    <!-- Content -->
    <div id="content" class="colM">
        
        <h1>Add Reservation</h1>
        <div id="content-main">



<form enctype="multipart/form-data" action="http://sc-reception.fwd.hr/reception/reservation/add/" method="post" id="reservation_form" novalidate=""><input type="hidden" name="" value="">
<div>







  <fieldset class="module aligned ">
    
    
    
        <div class="form-row field-guest field-reservation_status">
            
            
                <div class="field-box field-guest">
                    
                    
                        <label for="id_guest">Gost:</label>
                        
                            
<div class="related-widget-wrapper">
    <select id="id_guest" name="guest">
<option value="" selected="selected">---------</option>
<option value="1">Jobs Steve</option>
<option value="2">John Doe</option>
</select>
    
        
        <a class="related-widget-wrapper-link change-related" id="change_id_guest"  title="Change selected Profile">
            <img src="icon-changelink.svg" alt="Change">
        </a>
        
        
        <a class="related-widget-wrapper-link add-related" id="add_id_guest"  title="Add another Profile">
            <img src="icon-addlink.svg" alt="Add">
        </a>
        
        
    
</div>

                        
                    
                    
                </div>
            
                <div class="field-box field-reservation_status">
                    
                    
                        <label class="inline" for="id_reservation_status">Status rezervacije:</label>
                        
                            
<div class="related-widget-wrapper">
    <select id="id_reservation_status" name="reservation_status">
<option value="" selected="selected">---------</option>
<option value="1">Rezervacija OK</option>
</select>
    
        
        <a class="related-widget-wrapper-link change-related" id="change_id_reservation_status"  title="Change selected Reservation status">
            <img src="icon-changelink.svg" alt="Change">
        </a>
        
        
        <a class="related-widget-wrapper-link add-related" id="add_id_reservation_status"  title="Add another Reservation status">
            <img src="icon-addlink.svg" alt="Add">
        </a>
        
        
    
</div>

                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-room field-note">
            
            
                <div class="field-box field-room">
                    
                    
                        <label for="id_room">Soba:</label>
                        
                            
<div class="related-widget-wrapper">
    <select id="id_room" name="room">
<option value="" selected="selected">---------</option>
<option value="1">12</option>
</select>
    
        
        <a class="related-widget-wrapper-link change-related" id="change_id_room"  title="Change selected Room">
            <img src="icon-changelink.svg" alt="Change">
        </a>
        
        
        <a class="related-widget-wrapper-link add-related" id="add_id_room"  title="Add another Room">
            <img src="icon-addlink.svg" alt="Add">
        </a>
        
        
    
</div>

                        
                    
                    
                </div>
            
                <div class="field-box field-note">
                    
                    
                        <label class="inline" for="id_note">Bilješka:</label>
                        
                            <textarea class="vLargeTextField" cols="40" id="id_note" name="note" rows="10"></textarea>
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-guest_status field-arrival_organisation">
            
            
                <div class="field-box field-guest_status">
                    
                    
                        <label for="id_guest_status">Status gosta:</label>
                        
                            
<div class="related-widget-wrapper">
    <select id="id_guest_status" name="guest_status">
<option value="" selected="selected">---------</option>
</select>
    
        
        <a class="related-widget-wrapper-link change-related" id="change_id_guest_status"  title="Change selected Guest status">
            <img src="icon-changelink.svg" alt="Change">
        </a>
        
        
        <a class="related-widget-wrapper-link add-related" id="add_id_guest_status"  title="Add another Guest status">
            <img src="icon-addlink.svg" alt="Add">
        </a>
        
        
    
</div>
 
         
    
        
    
</fieldset>


  <fieldset class="module aligned ">
    <h2>Dolazak &amp; Odlazak</h2>
    
    
        <div class="form-row field-date_of_arrival field-date_of_departure">
            
            
                <div class="field-box field-date_of_arrival">
                    
                    
                        <label for="id_date_of_arrival">Datum dolaska:</label>
                        
                            <input class="vDateField" id="id_date_of_arrival" name="date_of_arrival" size="10" type="text"><span class="datetimeshortcuts">&nbsp;<a href="javascript:DateTimeShortcuts.handleCalendarQuickLink(0, 0);">Danas</a>&nbsp;|&nbsp;<a href="javascript:DateTimeShortcuts.openCalendar(0);" id="calendarlink0"><span class="date-icon" title="Choose a Date"></span></a></span>
                        
                    
             
            
                <div class="field-box field-date_of_departure">
                    
                    
                        <label class="inline" for="id_date_of_departure">Datum odlaska:</label>
                        
                            <input class="vDateField" id="id_date_of_departure" name="date_of_departure" size="10" type="text"><span class="datetimeshortcuts">&nbsp;<a href="javascript:DateTimeShortcuts.handleCalendarQuickLink(1, 0);">Today</a>&nbsp;|&nbsp;<a href="javascript:DateTimeShortcuts.openCalendar(1);" id="calendarlink1"><span class="date-icon" title="Choose a Date"></span></a></span>
               
            
        </div>
    
        <div class="form-row field-time_of_arrival field-time_of_departure">
            
            
                <div class="field-box field-time_of_arrival">
                    
                    
                        <label for="id_time_of_arrival">Datum dolaska:</label>
                        
                            <input class="vTimeField" id="id_time_of_arrival" name="time_of_arrival" size="8" type="text"><span class="datetimeshortcuts">&nbsp;<a href="javascript:DateTimeShortcuts.handleClockQuicklink(0, -1);">Now</a>&nbsp;|&nbsp;<a href="javascript:DateTimeShortcuts.openClock(0);" id="clocklink0"><span class="clock-icon" title="Choose a Time"></span></a></span>
                
            
                <div class="field-box field-time_of_departure">
                    
                    
                        <label class="inline" for="id_time_of_departure">Datum odlaska:</label>
                        
                            <input class="vTimeField" id="id_time_of_departure" name="time_of_departure" size="8" type="text"><span class="datetimeshortcuts">&nbsp;<a href="javascript:DateTimeShortcuts.handleClockQuicklink(1, -1);">Now</a>&nbsp;|&nbsp;<a href="javascript:DateTimeShortcuts.openClock(1);" id="clocklink1"><span class="clock-icon" title="Choose a Time"></span></a></span>
                        
                    
        
            
        </div>
    
</fieldset>













<div class="submit-row">
<input type="submit" value="Save" class="default" name="_save">


<input type="submit" value="Save and add another" name="_addanother">
<input type="submit" value="Save and continue editing" name="_continue">
</div>





</div>
</form></div>

        
        <br class="clear">
    </div>
    <!-- END Content -->

    <div id="footer"></div>
</div>
<!-- END Container -->



