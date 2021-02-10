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

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">

  </head>
  <body>
    
   
    

    <!-- END slider -->
    


    <section class="section bg-light">
      <div class="container">
	 <div class="register-form">
        <div class="row align-items-center mb-5">
          <div class="col-md-5 pr-md-5 mb-5">
            <div class="block-41">
             
              
			
			<h2>Register</h2>
			<form action="register3.php" method="POST">
			
				
	
				<input type="text" placeholder="Username" id="username" name="username" autofocus required />
			
				<input type="text" placeholder="First Name" id="fname" name="fname" required/>
				<input type="text" placeholder="Last Name" id="lname" name="lname" required/>
				<input type="email" placeholder="Email" id="email" name="email" required/>
				<input type="text" placeholder="Phone No." id="phoneNum" name="phoneNum" required />
				<input type="Password" placeholder="Enter Password" id="password" name="password" required />
				<input type="Password" placeholder="Re-Type Password" id="password" name="password" required />
				
				<input type="submit" id="btn" value="Register"/>
	

		
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
  </body>
</html>