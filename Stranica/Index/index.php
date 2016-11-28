
<?php
include('session.php'); //uključi provjeru sesije
?>

<!DOCTYPE html>


<head>
<title>Recepcijsko poslovanje</title>
<link rel="stylesheet" type="text/css" href="base.css" />
<link rel="stylesheet" type="text/css" href="dashboard.css" />



</head>


<body class=" dashboard"
  

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
    
     
        
    

    <!-- Content -->
    <div id="content" class="colMS">
        
        <h1>Administracija</h1>
        
<div id="content-main">


    
        <div class="app-reception module">
        <table>
        <caption>
            <a>Moduli</a>
        </caption>
        
           
           <tr class="model-student">
            
                <th scope="row"><a href="http://localhost/stranica/studenti/studenti.php">Studenti</a></th>
            

            
                <td><a href=" " class="addlink">Dodaj</a></td>
            

            
                <td><a href=" " class="changelink">Izmjeni</a></td>
            
            </tr>


            <tr class="model-studentinvoice">
            
                <th scope="row"><a href=" ">Računi studenta</a></th>
            

            
                <td><a href=" " class="addlink">Dodaj</a></td>
            

            
                <td><a href=" " class="changelink">Izmjeni</a></td>
            
            </tr>




             <tr class="model-service">
            
                <th scope="row"><a href=" ">Usluge</a></th>
            

            
                <td><a href=" " class="addlink">Dodaj</a></td>
            

            
                <td><a href=" " class="changelink">Izmjeni</a></td>
            
            </tr>


            <tr class="model-room">
            
                <th scope="row"><a href=" ">Sobe</a></th>
            

            
                <td><a href=" " class="addlink">Dodaj</a></td>
            

            
                <td><a href=" " class="changelink">Izmjeni</a></td>
            
            </tr>



        
            <tr class="model-gueststatus">
            
                <th scope="row"><a href=" ">Gosti</a></th>
            

            
                <td><a href=" " class="addlink">Dodaj</a></td>
            

            
                <td><a href=" " class="changelink">Izmjeni</a></td>
            
           
        
            <tr class="model-reservation">
            
                <th scope="row"><a href=" ">Rezervacije</a></th>
            

            
                <td><a href=" " class="addlink">Dodaj</a></td>
            

            
                <td><a href=" " class="changelink">Izmjeni</a></td>
            
            </tr> 
        
            
        
        </table>
        </div>
    

</div>

        
<div id="content-related">
    <div class="module" id="recent-actions-module">
        <h2>Nedavne akcije</h2>
        <h3>Moje akcije</h3>
            
            
            
            <p>-------</p>
            
    </div>
</div>

        <br class="clear" />
    </div>
    <!-- END Content -->

    <div id="footer"></div>
</div>
<!-- END Container -->

</body>
</html>
