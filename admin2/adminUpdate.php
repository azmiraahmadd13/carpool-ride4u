<?php 
session_start();
	include ('connection.php');
	
	//$book_name = $_POST['book_name'];
	//$username = $_GET['username'];
	//$quantity = $_POST['quantity'];
	//$price = $_POST['price'];
	//$userId = $_SESSION['userId'];
	$Id = $_GET['Id'];
	
	//$_SESSION['Id']= $_POST['Id'];
	
	$sql = mysqli_query($conn, "UPDATE admin SET username= '".$_POST['username']."',password='".$_POST['password']."'
	WHERE Id ='".$_GET['Id']."'");
	if($sql == TRUE){
		echo '<script language="javascript">';
		echo 'alert("Update Successfully");';
		echo 'window.location.href="adminList.php";';
		//echo "Error : ". $sql . "<br>" . $conn -> error;
		echo'</script>';
	} else {
		echo "Error : ". $sql . "<br>" . $conn -> error;
	}
	$conn -> close();
	
?>