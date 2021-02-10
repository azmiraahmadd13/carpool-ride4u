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

  </head>
  <body>
    
   
    

    <!-- END slider -->
    


    <section class="section element-animate">
      <div class="container">
	 <div class="register-form">
        <div class="row align-items-center mb-5">
          <div class="col-md-5 pr-md-5 mb-5">
            <div class="block-41">
             
              
			
			<h2>Edit Profile</h2>
			<?php 
				  include ('connection.php');
					$sql = "SELECT * FROM user WHERE email ='".$_GET['email']."'";
					$result = mysqli_query($conn,$sql);
					$row = mysqli_fetch_array($result);
					
				?>
					
				<form action="updateUser1.php?email=<?php echo $row['email']; ?>"  method="post">
				
				
					<tr> 
						<td align="center" width="30%">Username: </td>
						<tr><input class="Minput" type="text" name="username" value="<?php echo $row['username']; ?> "></tr>
					</tr>					
					<tr> 
						<td align="center" width="30%">First Name: </td>
						<td><input class="Minput" type="text" name="fname" value="<?php echo $row['fname']; ?> "  ></td>
					</tr>
					<tr> 
						<td align="center" width="30%">Last Name: </td>
						<td><input class="Minput" type="text" name="lname" value="<?php echo $row['lname']; ?> " ></td>
					</tr>
					<tr> 
						<td align="center" width="30%"> Email: </td>
						<td><input class="Minput" type="text" name="email" value="<?php echo $row['email']; ?> " ></td>
					</tr>
					<tr> 
						<td align="center" width="30%"> Address: </td>
						<td><input class="Minput" type="text" name="address" value="<?php echo $row['address']; ?> "  ></td>
					</tr>
					<tr> 
						<td align="center" width="30%"> Phone No: </td>
						<td><input class="Minput" type="text" name="phoneNum" value="<?php echo $row['phoneNum']; ?> " ></td>
					</tr>
					
					
					
					<tr> 
						<td> </td>
						<td><input class="Lbtn" type="submit" name="submit" value="Save"></td>
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