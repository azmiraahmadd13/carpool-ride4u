<?php
session_start();


include ("connection.php");

//$location =$_POST['location'];
//$destination = $_POST['destination'];
//$date = $_POST['date'];
//$time = $_POST['time'];
//$address = $_POST['address'];
//$phoneNum = $_POST['phoneNum'];
//$userType = $_POST['userType'];

//$password = $_POST['password'];


//$_SESSION['email']= $_POST['email'];
//$_SESSION['password'] = $_POST['password'];
//$driverId = $_SESSION['userId'];
	//$rideId = $_GET['rideId'];
$sql = mysqli_query($conn, "UPDATE ride SET location= '".$_POST['location']."',destination='".$_POST['destination']."',date='".$_POST['date']."', time='".$_POST['time']."'
	WHERE rideId ='".$_GET['rideId']."'");
	if($sql == TRUE){
			//echo "Error : ". $sql . "<br>" . $conn -> error;
		echo '<script language="javascript">';
		echo 'alert("Update Successfully");';
		echo 'window.location.href="myride22.php";';
		echo'</script>';
	} else {
		echo "Error : ". $sql . "<br>" . $conn -> error;
	}
	$conn -> close();
	
?>