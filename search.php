
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

   
	
	<link rel="stylesheet" href="css/style.css">
	<script src="js/sweetalert.min.js"></script> 
 <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOtk_B7F3Mgi_je0WGneOzYcWiGyTeiwA&callback=initMap&libraries=&v=weekly"
      defer
    ></script>
    <!-- Theme Style -->
    
  <style type="text/css">
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }

      /* Optional: Makes the sample page fill the window. */
      html,
      body {
        height: 100%;
        margin: 0;
        padding: 0;
      }

      #floating-panel {
        position: absolute;
        top: 10px;
        top: 80px;
        left: 0%;
		width:100px;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
        text-align: center;
        font-family: "Roboto", "sans-serif";
        line-height: 30px;
        padding-left: 0px;
      }
	  
	  #float {
		position: bottom;
        top: 150px;
        align: center;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
        text-align: center;
        font-family: "Roboto", "sans-serif";
        line-height: 20px;
        padding-left: 10px;
	  }
    </style>
    <script>
      "use strict";

      function initMap() {
        const directionsService = new google.maps.DirectionsService();
        const directionsRenderer = new google.maps.DirectionsRenderer();
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 7,
          center: {
               lat: 4.2105,
            lng: 101.9758
          }
        });
       directionsRenderer.setMap(map);
		 document.getElementById("submit").addEventListener("click", () => {
          calculateAndDisplayRoute(directionsService, directionsRenderer);
        });
		const onChangeHandler = function() {
          calculateAndDisplayRoute(directionsService, directionsRenderer);
        };

       /* document
          .getElementById("o")
          .addEventListener("change", onChangeHandler);
        document
          .getElementById("d")
          .addEventListener("change", onChangeHandler);*/
		  
		document.getElementById("submit").addEventListener("click", onChangeHandler);
      }
      function calculateAndDisplayRoute(directionsService, directionsRenderer) {
        directionsService.route(
          {
            origin: {
              query: document.getElementById("o").value
            },
            destination: {
              query: document.getElementById("d").value
            },
            travelMode: google.maps.TravelMode.DRIVING
          },
          (response, status) => {
            if (status === "OK") {
              directionsRenderer.setDirections(response);
            } else {
              window.alert("Directions request failed due to " + status);
            }
          }
        );
      }
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

<div class="container profile-page">
 <form  method="post" class="card profile-header">
		   <td align="center" width="30%"> Location:  </td>
						<td><input class="Minput" type="text" id="o" name="o" required></td>
		 <td align="center" width="30%"> Destination:  </td>
						<td><input class="Minput" type="text" id="d" name="d" required></td>
						
					
						<td align="center" width="30%"></td>
						<td><input class="Lbtn" type="submit" id="submit" name="submit" value="Search"></td>


        </form>
 <?php


            if(isset($_POST['submit'])){


            $origin = $_POST['o']; $destination = $_POST['d'];


           $api = file_get_contents("https://maps.googleapis.com/maps/api/distancematrix/json?units=imperial&origins=".$origin."&destinations=".$destination."&key=AIzaSyBOtk_B7F3Mgi_je0WGneOzYcWiGyTeiwA");


            $data = json_decode($api);


        ?>
		<div id="float">
		  <?php
		require 'connection.php';
		$query = mysqli_query($conn, "SELECT * FROM `ride` WHERE `location` LIKE '%$origin%' AND `destination` LIKE '%$destination%'") or die(mysqli_error());
		if($row = mysqli_fetch_array($query)){
			?>	
                        <a  href="moredetail.php?rideId=<?php echo $row['rideId']; ?>" class="col-lg-8 col-md-8 col-12 ">
						
                             <h4 class="m-t-0 m-b-0"><strong><?php echo $row['fname']; ?> <?php echo $row['lname']; ?></strong></h4>
                            <p>Location: <?php echo $row['location']; ?></p>
                            <p>Destination: <?php echo $row['destination']; ?></p>
							<p>Date: <?php echo $row['date']; ?></p>
							<p>Time: <?php echo $row['time']; ?></p>
							<p>Distance: <?php echo ((int)$data->rows[0]->elements[0]->distance->value / 1000).' Km'; ?></p>
							<p>Travel Time: <?php echo $data->rows[0]->elements[0]->duration->text; ?></p> 
							
			
							
                           </a>
		
						 


        
					
			<?php		
		}else {
			echo 'Sorry there is no available ride';
	
             
		}				
		$conn -> close();
		
	}
?>
		</div>
		
		</div>
		</section>

    <div id="map"></div>


   
   
	
    
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