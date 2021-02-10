<?php
session_start();
    include('functions.php');
   // $rideId = $_GET['rideId'];
	//$userId = $_GET['userId'];
    //$query = "SELECT * FROM ride INNER JOIN user WHERE userId = '".$_SESSION['userId']."'";
	 $query = "SELECT * FROM user WHERE userId = '".$_SESSION['userId']."'";
	 
    if(count(fetchAll($query)) > 0){
        foreach(fetchAll($query) as $row){
	$location = $_POST['location'];
	$destination = $_POST['destination'];
	$date= $_POST['date'];
	$time = $_POST['time'];
	$model =$_POST['model'];
	$color = $_POST['color'];
	$plate_no=$_POST['plate_no'];
	$noPassenger = $_POST['noPassenger'];
	$driverId = $_SESSION['userId'];
	//$userId = $row['userId'];
	 $fname = $row['fname'];
	// $driverId = $_SESSION['driverId'];
            $lname = $row['lname'];
	
	
			//$message = "$fname $lname like to join carpool.";
			
            //$email = $row['email'];
            //$password = $row['password'];
           
	
	//$query= "INSERT INTO vehicle (model,color,plate_no,noPassenger, userId, fname, lname)
	//VALUES ('$model','$color', '$plate_no', '$noPassenger', '$userId', '$fname' , '$lname')";
//	AND INSERT INTO ride (userId,location,destination,time, date, noPassenger,fname,lname)
	//VALUES ('$userId','$location','$destination','$time' ,'$date', '$noPassenger' , '$fname', '$lname')";
	//mysql_query($query);
	$query = "INSERT INTO ride (driverId,location,destination,time, date, noPassenger,fname,lname,model,color,plate_no)
	VALUES ('$driverId','$location','$destination','$time' ,'$date', '$noPassenger' , '$fname', '$lname','$model','$color', '$plate_no')";
	
	//mysql_query($query);
        }
	if(performQuery($query)){
			echo'<script language="javascript">';
					echo 'alert("Your request has been sent");';
					echo 'window.location.href="home3.php";';
					echo '</script>';
           // echo "Your request has been sent";
			//echo header('location:home3.php');
			
			
			
        }else{
            echo "Unknown error occured. Please try again.";
			echo "Error : ". $query . "<br>" ;
        }
    }else{
        echo "Error occured.";
		echo "Error : ". $query . "<br>" ;
    }
    
?>