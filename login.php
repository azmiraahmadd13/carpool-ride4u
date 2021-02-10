<?php	
		session_start();
		
		$_SESSION['email']= $_POST['email'];
		$_SESSION['password'] = $_POST['password'];
		//$_SESSION['usertype']= $_POST['usertype'];
		//$_SESSION['userId'] = $row['userId'];
		
		include ('connection.php');
		
		$sql = "SELECT userId FROM user WHERE email = '".$_SESSION['email']."' AND password='".$_SESSION['password']."'";
		$result=mysqli_query($conn,$sql);
		$row=mysqli_fetch_array($result);
	
			if ($row==TRUE) 
			{
					$_SESSION['userId'] = $row['userId'];
					echo '<script language="javascript">';
					echo 'alert("Login Sucess");';
					echo 'window.location.href="home3.php";';
					echo'</script>';
			}
			else 
			{
		
					echo'<script language="javascript">';
					echo 'alert("Login Error");';
					echo 'window.location.href="index.php";';
					echo '</script>';
					echo "Error : ". $sql . "<br>" . $conn -> error;
			}
		
		$conn -> close();
		
?>		
				
		