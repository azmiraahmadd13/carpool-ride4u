<?php 
	include ('connection.php');
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	//$received_date = $_POST['received_date'];
	$sql = mysqli_query($conn,"INSERT INTO admin (username,password)
	VALUES ('$username','$password')");
	
	if($sql == TRUE) {
		echo '<script language="javascript">';
		echo 'alert("New Admin Add Successfully");';
		echo 'window.location.href="adminList.php";';
		echo'</script>';
	}else {
			echo "Error : ". $sql . "<br>" . $conn -> error;
	}
	$conn -> close();
	
?>
	