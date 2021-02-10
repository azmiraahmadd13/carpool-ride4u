<?php 
	include ('connection.php');
	
	$sql = mysqli_query($conn,"DELETE FROM admin WHERE Id = '".$_GET['Id']."'");
	
	if($sql == TRUE){
		echo '<script language="javascript">';
		echo 'alert("Delete Successfully");';
		echo 'window.location.href="adminList.php"';
		echo'</script>';
	} else {
		echo "Error : ". $sql . "<br>" . $conn -> error;
	}
	$conn -> close();
	
?>