<?php

session_start();

?>
<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet">

    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
	<link rel="stylesheet" type="text/css" href="css/style1.css">
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" type="text/css" href="sweetalert2.css">

  </head>
  <body>
    
   
    

    <!-- END slider -->
    
<?php

//initialize a session
include ('connection.php');

if(isset($_SESSION['email']))
{
	$_SESSION = array();
	session_destroy();
}
?>


    <section class="section bg-light">
	
      <div class="container">
	  <div class="contact-form">
        <div class="row align-items-center mb-5">
		
          <div class="col-md-5 pr-md-5 mb-5">
            <div class="block-41">
            
             
			<img src="images/logo.jpg" alt="" class="avatar">
			<h2>Login</h2>
			<form action="login.php" method="POST">
			<div class="error-message"><?php if(isset($message)) { echo $message; } ?></div>
				<td><input type="email" value="<?php if(isset($_COOKIE["member_login"])) { echo $_COOKIE["member_login"]; } ?>" placeholder="Email" id="email" name="email" autofocus required/>
			
			
				<input type="Password" placeholder="Password" id="password" name="password" required/>

				<input type="submit" id="login" value="Login" />
				
		<p>	
			<span class="psw"><a href="forgotpass.php">Forgot Password?</a></span>
		</p>
<p>	
			<span class="register"><a href="register.php">Register Here</a></span>
		</p>
		
		
			</form>
		
            </div>
          </div>
          
        </div>
      </div>
	  </div>
    </section>

   
    


    <!-- END section -->

   

          
    


    <!-- END footer -->

    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/main.js"></script>
	<script src="js/sweetalert.js"></script>
	
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
	
	
	
  </body>
</html>