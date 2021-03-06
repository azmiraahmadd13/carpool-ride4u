<?php
    session_start(); //we need session for the log in thingy XD 
    include("functions.php");
    
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
	<link rel="stylesheet" type="text/css" href="css/notification.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
	<link rel="stylesheet" type="text/css" href="css/style1.css">
	<link rel="stylesheet" type="text/css" href="css/listgroup.css">

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
    
<div class="container profile-page">
    <div class="row">
        <div class="col-xl-6 col-lg-7 col-md-12">
		<h2>My Ride History</h2>
		<?php
            
		$userId= $_SESSION['userId'];
          //     $query = "select * from `pool' WHERE userId = '".$_SESSION['userId']."'";
			   //$query = "SELECT * FROM pool INNER JOIN user ON ride.userId=user.userId 
			   $query = "SELECT * FROM ride INNER JOIN user ON ride.driverId=user.userId  WHERE userId ='".$_SESSION['userId']."' ORDER BY date DESC";
                if(count(fetchAll($query))>0){
                    foreach(fetchAll($query) as $row){
                        ?>
                 
					
           <a href="updateRide.php?rideId=<?php echo $row['rideId']; ?>"class="card profile-header">
                <div class="body">
                    <div class="row">
					
                        
                        <div class="col-lg-8 col-md-8 col-12 ">
                           
                            <p>Location: <?php echo $row['location']; ?></p>
                            <p>Destination: <?php echo $row['destination']; ?></p>
							<p>Date: <?php echo $row['date']; ?></p>
							<p>Time: <?php echo $row['time']; ?></p>
							
							
                           
                        </div>  
						<?php
                  }
                }else{
                   echo "No Previous Carpool Requests.";
              }
          ?>
                    </div>
                </div>                    
            
			
</a>		  
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