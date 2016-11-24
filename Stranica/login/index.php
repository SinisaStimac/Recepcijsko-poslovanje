
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
            
                
               <strong>Dobrodošli</strong>

                &emsp;
            
                             
                <strong><a href="/stranica/logout.php">Log out</a></strong>
            
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
            
                <th scope="row"><a href="/reception/student/">Students</a></th>
            

            
                <td><a href="/reception/student/add/" class="addlink">Add</a></td>
            

            
                <td><a href="/reception/student/" class="changelink">Change</a></td>
            
            </tr>


            <tr class="model-studentinvoice">
            
                <th scope="row"><a href="/reception/studentinvoice/">Student invoices</a></th>
            

            
                <td><a href="/reception/studentinvoice/add/" class="addlink">Add</a></td>
            

            
                <td><a href="/reception/studentinvoice/" class="changelink">Change</a></td>
            
            </tr>




             <tr class="model-service">
            
                <th scope="row"><a href="/reception/service/">Services</a></th>
            

            
                <td><a href="/reception/service/add/" class="addlink">Add</a></td>
            

            
                <td><a href="/reception/service/" class="changelink">Change</a></td>
            
            </tr>


            <tr class="model-room">
            
                <th scope="row"><a href="/reception/room/">Rooms</a></th>
            

            
                <td><a href="/reception/room/add/" class="addlink">Add</a></td>
            

            
                <td><a href="/reception/room/" class="changelink">Change</a></td>
            
            </tr>



        
            <tr class="model-gueststatus">
            
                <th scope="row"><a href="/reception/gueststatus/">Guest</a></th>
            

            
                <td><a href="/reception/gueststatus/add/" class="addlink">Add</a></td>
            

            
                <td><a href="/reception/gueststatus/" class="changelink">Change</a></td>
            
           
        
            <tr class="model-reservation">
            
                <th scope="row"><a href="/reception/reservation/">Reservations</a></th>
            

            
                <td><a href="/reception/reservation/add/" class="addlink">Add</a></td>
            

            
                <td><a href="/reception/reservation/" class="changelink">Change</a></td>
            
            </tr> 
        
            
        
        </table>
        </div>
    

</div>

        
<div id="content-related">
    <div class="module" id="recent-actions-module">
        <h2>Recent actions</h2>
        <h3>My actions</h3>
            
            
            
            <p>None available</p>
            
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
