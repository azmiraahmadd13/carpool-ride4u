<?php
session_start();
    include('functions.php');
    $id = $_GET['id'];
    
    $query = "DELETE FROM `request` WHERE `request`.`id` = '$id';";
        if(performQuery($query)){
			echo'<script language="javascript">';
					echo 'alert("Request has been rejected.");';
					echo 'window.location.href="notification2.php";';
					echo '</script>';
            //echo "Account has been rejected.";
			//echo header('location:notification2.php');
        }else{
            echo "Unknown error occured. Please try again.";
        }

?>
<br/><br/>
<a href="home3.php">Back</a>