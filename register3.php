<?php 


session_start();

include ('connection.php');


$username = $_POST["username"];
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email= $_POST["email"];
$phoneNum = $_POST["phoneNum"];
$password = $_POST["password"];
//$userType = $_POST["userType"];




/*
$username = "aira";
$fname = "Azmira";
$lname ="Ahmad";
$email= "ara09@gmail.com";
$phoneNum = "0189854762";
$password = "123456";
$userType = "Passenger";

*/
$isValidEmail = filter_var($email, FILTER_VALIDATE_EMAIL);
if($conn){
if(strlen($password)>40 || strlen($password) < 6){
	
	//echo "Password must be at less than 40 and more than 6 characters";
	//echo "Password must be at less than 40 and more than 6 characters";
	echo'<script language="javascript">';
					echo 'alert("Password must be more than 6 characters");';
					echo 'window.location.href="register.php";';
					echo '</script>';
	
	
}else if($isValidEmail == false){
	
	echo'<script language="javascript">';
					echo 'alert("email is not valid");';
					echo 'window.location.href="register.php";';
					echo '</script>';
	
		//echo header('location:register.php');
	
	
}
else{


$sqlCheckEmail = "SELECT * FROM 'user' WHERE 'email' LIKE '$email'";
$usernameQuery = mysqli_query($conn,$sqlCheckEmail);

 if(mysqli_num_rows($usernameQuery) > 0){
	//echo "this email is already registered";
	echo'<script language="javascript">';
					echo 'alert("this email is already registered");';
					echo 'window.location.href="register.php";';
					echo '</script>';
	
}

else{
$sql_register = "INSERT INTO user (username,fname, lname, email, phoneNum, password) VALUES('$username','$fname','$lname','$email', '$phoneNum','$password')";

if(mysqli_query($conn,$sql_register)){
// echo "Successfully Registered";
//echo 'alert("Successfully Registered");';
		//echo 'window.location.href="index.php";';
		//echo header('location:index.php');
		echo'<script language="javascript">';
					echo 'alert("Successfully Registered");';
					echo 'window.location.href="index.php";';
					//echo "Error : ". $sql . "<br>" . $conn -> error;
					echo '</script>';
}
else{
//echo "Register Failed";
echo'<script language="javascript">';
					echo 'alert("Register Failed");';

					echo 'window.location.href="register.php";';
					echo '</script>';

//echo "Error : ". $sql . "<br>" . $conn -> error;
}
}

}


}

else{
	echo "connection error";
}
?>