
<!doctype html>
<?php	
		session_start();
		include ('connection.php');
		

		$userId = $_SESSION["userId"];
		$sql = "SELECT * FROM user WHERE userId ='$userId'" ;
		$result=mysqli_query($conn,$sql);
		$row=mysqli_fetch_assoc($result);
	
	
		
		$conn -> close();
		
?>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
	
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
	<link rel="stylesheet" type="text/css" href="css/style1.css">
	<link rel="stylesheet" type="text/css" href="css/listgroup.css">
	<link rel="stylesheet" type="text/css" href="css/moredetail.css">
	
	

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
    
 <div class="contact-form">
<div class="row bootstrap snippets">
   

    
    <div class="col-md-3">
	<?php 
				  include ('connection.php');
					//$sql = "SELECT * FROM ride WHERE rideId ='".$_GET['rideId']."'";
					$sql = "SELECT * FROM ride INNER JOIN user ON ride.driverId=user.userId  WHERE rideId ='".$_GET['rideId']."'";
					$result = mysqli_query($conn,$sql);
					$row = mysqli_fetch_array($result);
					
				?>
        <div class="panel text-center">
        <div class="panel-body">
          
          <h2 class="m-t-0 m-b-0"><strong><?php echo $row['fname']; ?></strong> <?php echo $row['lname']; ?> </h2>
        
        
        
            Location: <?php echo $row['location']; ?>
          
		   <br>
			Destination: <?php echo $row['destination']; ?>
         
		  <br>
			Date: <?php echo $row['date']; ?>
          
		  <br>
			Time: <?php echo $row['time']; ?>
			<br>
			Phone Number: <?php echo $row['phoneNum']; ?>
          </p>
		  
          <div class="pad-btm">
            
            <input type="submit" value="Request" onclick="window.location.href='request5.php?rideId=<?php echo $row['rideId']; ?>'" /></td> 
          </div>
		  
        </div>
      </div>
    </div>    
</div>
    </section>

   
   
	
    
    <!-- END footer -->


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