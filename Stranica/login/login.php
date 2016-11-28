
<!DOCTYPE html>

<head>
<title>Recepcijsko poslovanje</title>

<link rel="stylesheet" type="text/css" href="base.css" /> 
<link rel="stylesheet" type="text/css" href="login.css" />


</head>


<body class="login"


<!-- Container -->
<div id="container">

    
    <!-- Header -->
    <div id="header_login">
        <div id="branding">
        
<h1 id="site-name"><a href="/stranica/login.php">Recepcijsko poslovanje</a></h1>

        </div>    
    </div>
    <!-- end Header -->

    <!-- Content -->
<div id="content" class="colM">
        
   
 <div id="content-main">


<form id="login-form" method="post" action="authen_login.php">


  <div class="form-row"> 
    
    <label  for="user_id">Username:</label> 
    <input  id="id_username" name="user_id" type="text" required /> 

  </div>

  <div class="form-row">
    
    <label for="user_pass">Password:</label> <input id="id_password" name="user_pass" type="password" required />
    
  </div>
  
  
  <div class="submit-row">
    <label>&nbsp;</label><input type="submit" value="Log in" />  <!-- Log in botun/> -->
    <label>&nbsp;</label><input type="reset" value="Reset"/>  <!-- Reset-->
  </div>
</form>

</div>

        
        <br class="clear" />
    </div>
    <!-- END Content -->

    <div id="footer"></div>
</div>
<!-- END Container -->

</body>
</html>
