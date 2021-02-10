<?php 
	include ('connection.php');
	
	$sql = mysqli_query($conn,"DELETE FROM user WHERE userId = '".$_GET['userId']."'");
	
	if($sql == TRUE){
		echo '<script language="javascript">';
		echo 'alert("Delete Successfully");';
		echo 'window.location.href="updateUser.php"';
		echo'</script>';
	} else {
		echo "Error : ". $sql . "<br>" . $conn -> error;
	}
	$conn -> close();
	
?>