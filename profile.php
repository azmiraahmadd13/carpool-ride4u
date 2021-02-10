
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
	<link rel="stylesheet" type="text/css" href="css/profile.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/listgroup.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">

  </head>
  <body>
    
   
    

    <!-- END slider -->
          <header role="banner">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-bottom">
        <div class="container">
          <a class="navbar-brand "></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav pl-md-5">
              <li class="nav-item">
                <a class="nav-link" href="home3.php">Home</i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="search.php">Search</i></a> 
              </li>
			  <li class="nav-item">
                <a class="nav-link" href="notification2.php">Notification</i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="plus.php">Request Carpool</i></a>
              </li>
			  
               <li class="nav-item">
                 <a class="nav-link" href="account.php">Account</i></a> 
              </li>
             
            </ul>

           
            
          </div>
        </div>
      </nav>
    </header>


    <section class="section bg-light">
      <div class="container">
	 <div class="register-form">
        <div class="row align-items-center mb-5">
          <div class="col-md-5 pr-md-5 mb-5">
            <div class="block-41">
             
              
			
			<h2>Profile</h2>
			<?php 
			
				session_start(); 


				  include ('connection.php');
				  
				  
					$email = $_SESSION['email'];
					$password = $_SESSION['password'];

					$sql = "SELECT * FROM user WHERE email = '".$_SESSION['email']."' AND password='".$_SESSION['password']."'";
					$result = mysqli_query($conn,$sql);
					$row = mysqli_fetch_array($result);
					
				?>
					
				<form action="editProfile.php?email=<?php echo $row['email']; ?>"  method="post">
				
				
					<tr> 
						<td align="center" width="30%">Username: </td>
						<tr><input class="Minput" type="text" name="username" value="<?php echo $row['username']; ?> "disabled ></tr>
					</tr>					
					<tr> 
						<td align="center" width="30%">First Name: </td>
						<td><input class="Minput" type="text" name="fname" value="<?php echo $row['fname']; ?> " disabled ></td>
					</tr>
					<tr> 
						<td align="center" width="30%">Last Name: </td>
						<td><input class="Minput" type="text" name="lname" value="<?php echo $row['lname']; ?> "disabled ></td>
					</tr>
					<tr> 
						<td align="center" width="30%"> Email: </td>
						<td><input class="Minput" type="text" name="email" value="<?php echo $row['email']; ?> " disabled></td>
					</tr>
					<tr> 
						<td align="center" width="30%"> Address: </td>
						<td><input class="Minput" type="text" name="address" value="<?php echo $row['address']; ?> " disabled ></td>
					</tr>
					<tr> 
						<td align="center" width="30%"> Phone No: </td>
						<td><input class="Minput" type="text" name="phoneNum" value="<?php echo $row['phoneNum']; ?> " disabled></td>
					</tr>
					
					
					
					<tr> 
						<td> </td>
						<td><input type="submit" value="Edit Profile" onclick="window.location.href='editProfile.php'" /></td>
					</tr>
				
				
			
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