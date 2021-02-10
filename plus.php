
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

    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
	<link rel="stylesheet" type="text/css" href="css/style1.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
	
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <script language="javascript">
        $(document).ready(function () {
            $("#datepicker").datepicker({
                minDate: 0
            });
        });
    </script>
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
	  <div class="contact-form">
        <div class="row align-items-center mb-5">
          <div class="col-md-5 pr-md-5 mb-5">
            <div class="block-41">
             
              
			<h2>Carpool</h2>
			<form action="requestRide5.php" method="POST">
			
				
	
				<input type="text" placeholder="Location" id="location" name="location" autofocus required />
			
				<input type="text" placeholder="Destination" id="destination" name="destination" required/>
				<input type="time" placeholder="Time" id="time" name="time" required/>
				<input type="date" placeholder="Date" id="date" name="date" required/>
				
				
				<h2>Vehicle Details</h2>
				
				<input type="text" placeholder="Model" id="model" name="model" autofocus required />
			
				<input type="text" placeholder="Color" id="color" name="color" required/>
				<input type="text" placeholder="Plate No." id="plate_no" name="plate_no" required/>
				<input type="number" placeholder="No. of Passenger" id="noPassenger" name="noPassenger" required/>
				
				<input type="submit" id="btn" value="Submit"/>
	
       
		</form>
            </div>
          </div>
          
        </div>
      </div>
	  </div>
    </section>

   
   
	
    
    <!-- END footer -->


    <!-- END section -->

   
   
    



    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>
 <script src="js/scriptDate.js"></script>
 <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <script language="javascript">
        $(document).ready(function () {
            $("#datepicker").datepicker({
                minDate: 0
            });
        });
    </script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>