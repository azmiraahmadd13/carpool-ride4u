<?php	
		session_start();
		
		$_SESSION['username']= $_POST['username'];
		$_SESSION['password'] = $_POST['password'];
		//$_SESSION['usertype']= $_POST['usertype'];
		//$_SESSION['userId'] = $row['userId'];
		
		include ('connection.php');
		
		$sql = "SELECT Id FROM admin WHERE username = '".$_SESSION['username']."' AND password='".$_SESSION['password']."'";
		$result=mysqli_query($conn,$sql);
		$row=mysqli_fetch_array($result);
	
			if ($row==TRUE) 
			{
					$_SESSION['Id'] = $row['Id'];
					echo '<script language="javascript">';
					echo 'alert("Login Sucess");';
					echo 'window.location.href="home.php";';
					echo'</script>';
			}
			else 
			{
		
					echo'<script language="javascript">';
					echo 'alert("Login Error");';
					echo 'window.location.href="index.php";';
					echo '</script>';
			}
		
		$conn -> close();
		
?>		
				
		