<?php
include('session.php'); //uključi provjeru sesije
?>




<!DOCTYPE html>
<html lang="en-us"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Dodaj uslugu | Recepcijsko poslovanje admin</title>
<link rel="stylesheet" type="text/css" href="base.css" />
<link rel="stylesheet" type="text/css" href="dashboard.css" />


<meta name="robots" content="NONE,NOARCHIVE">
</head>


<body class=" app-reception model-service change-form" data-admin-utc-offset="0">

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
> Usluge
</div>

    


    <div id="content" class="colM">
        
        <h1>Dodaj uslugu</h1>
        <div id="content-main">



<form enctype="multipart/form-data" action="" method="post" id="service_form" novalidate=""><input type="hidden" name="" value="">
<div>


  <fieldset class="module aligned ">
    
    
    
        <div class="form-row field-service">
            
            
                <div>
                    
                    
                        <label for="id_service">Usluga:</label>
                        
                            <input class="vTextField" id="id_service" maxlength="255" name="service" type="text">
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-price">
            
            
                <div>
                    
                    
                        <label for="id_price">Cijena:</label>
                        
                            <input class="vTextField" id="id_price" maxlength="255" name="price" type="text">
                        
                    
                    
                </div>
            
        </div>
    
</fieldset>


<div class="submit-row">
<input type="submit" value="Spremi" class="default" name="_save">
<input type="submit" value="Spremi i dodati drugu" name="_addanother">
<input type="submit" value="Spremiti i nastaviti" name="_continue">

</form></div>

        
        <br class="clear">
    </div>

    <div id="footer"></div>
</div>

</body></html>