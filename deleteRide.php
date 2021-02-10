<?php
session_start();
    include('functions.php');
    $rideId = $_GET['rideId'];
    
    $query = "DELETE FROM `ride` WHERE `ride`.`rideId` = '$rideId';";
        if(performQuery($query)){
            echo "Ride has been deleted.";
			echo header('location:myride22.php');
        }else{
            echo "Unknown error occured. Please try again.";
        }

?>
