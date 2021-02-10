<?php
session_start();
    include('functions.php');
    $rideId = $_GET['rideId'];
	//$_SESSION['fname'] = $_POST['fname'];
	//$fname = $_GET['fname'];
    //$lname = $_GET['lname'];
	//$driverId = $_GET['driverId'];
	$passengerId = $_SESSION['userId'];
    $query = "SELECT * FROM ride INNER JOIN user WHERE userId = '".$_SESSION['userId']."' AND rideId ='".$_GET['rideId']."'";
	//$query = "SELECT * FROM ride INNER JOIN user  WHERE rideId ='".$_GET['rideId']."'";
	//$query = "SELECT * FROM ride INNER JOIN user WHERE passengerId = '".$_SESSION['userId']."'";
	//$query = "SELECT * FROM ride INNER JOIN user ON ride.driverId=user.userId  WHERE userId ='".$_SESSION['userId']."'";
    if(count(fetchAll($query)) > 0){
        foreach(fetchAll($query) as $row){
			//$userId = $row['userId'];
			//$fname = $_SESSION['fname'];
			//$lname = $_SESSION['lname'];
			$rideId = $_GET['rideId'];
			
			$passengerId = $_SESSION['userId'];
			//$_SESSION['fname'] = $_POST['fname'];
			$driverId = $row['driverId']; 
            $fname = $row['fname'];
			 $lname = $row['lname']; 
			 $message = "$fname $lname would like to join carpool.";

            //$password = $row['password'];
            $query = "INSERT INTO `request`(`id`, `passengerId`, `fname`, `rideId`, `message`, `date`, `lname`, `driverId`) VALUES (NULL,'$passengerId', '$fname','$rideId', '$message',CURRENT_TIMESTAMP, '$lname',   '$driverId');";
        //mysql_query($query);
		}
        if(performQuery($query)){
			
           echo '<script language="javascript">';
					echo 'alert("Request Sent");';
					echo 'window.location.href="home3.php";';
					echo'</script>';
			
			
        }else{
            echo "Unknown error occured. Please try again.";
			echo "Error : ". $query . "<br>" ;
        }
		
    }else{
        echo "Error occured.";
		echo "Error : ". $query . "<br>" ;
    }
    
?>