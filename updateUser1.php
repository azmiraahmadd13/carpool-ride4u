<?php
session_start();


include ("connection.php");

$username =$_POST['username'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$address = $_POST['address'];
$phoneNum = $_POST['phoneNum'];
//$userType = $_POST['userType'];

//$password = $_POST['password'];


$_SESSION['email']= $_POST['email'];
//$_SESSION['password'] = $_POST['password'];


	$sql = mysqli_query($conn, "UPDATE user SET username = '".$username."', fname = '".$fname."',lname = '".$lname."',email = '".$email."', address = '".$address."', phoneNum = '".$phoneNum."'
	WHERE email ='".$_GET['email']."'");
	if($sql == TRUE){
		echo '<script language="javascript">';
		echo 'alert("Update Successfully");';
		echo 'window.location.href="profile.php";';
		echo'</script>';
	} else {
		echo "Error : ". $sql . "<br>" . $conn -> error;
	}
	$conn -> close();
	
?>