<?php
session_start();
    include('functions.php');
    $id = $_GET['id'];
	$driverId = $_SESSION['userId'];
   // $query = "SELECT * FROM request WHERE id ='".$_GET['id']."'";
	$query = "SELECT * FROM request INNER JOIN user ON request.driverId=user.userId  WHERE userId ='".$_SESSION['userId']."' AND id ='".$_GET['id']."'";
    if(count(fetchAll($query)) > 0){
        foreach(fetchAll($query) as $row){
			$id = $_GET['id'];
			$driverId = $row['driverId'];
			$rideId = $row['rideId'];
           $passengerId = $row['passengerId'];
            $fname = $row['fname'];
            $lname = $row['lname'];
 			$messageAc = "$fname $lname has accepted your carpool request.";
			$location = $row['location'];
	$destination = $row['destination'];
	$date= $row['date'];
	$time = $row['time'];
			
            $query = "INSERT INTO `pool`(`driverId`, `rideId`, `passengerId`, `poolID`, `fname`, `lname`, `messageAc`, `location`, `destination`, `date`, `time`, `dateAc`) VALUES (`driverId`, `rideId`, `passengerId`, NULL, `fname`, `lname`, '$messageAc', `location`, `destination`, `date`, `time`, CURRENT_TIMESTAMP);";
        }
         $query .= "DELETE FROM `request` WHERE `request`.`id` = '$id';";
        if(performQuery($query)){
            //echo "Account has been accepted.";
			//echo header('location:notification2.php');
			echo '<script language="javascript">';
					echo 'alert("Request has been accepted.");';
					echo 'window.location.href="notification2.php";';
					echo'</script>';
			
        }else{
            echo "Unknown error occured. Please try again.";
			echo "Error : ". $query;
        }
    }else{
        echo "Error occured.";
    }
    
?>
