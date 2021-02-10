﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php	
		session_start();
		include ('connection.php');

		$Id = $_SESSION["Id"];
		$sql = "SELECT * FROM admin WHERE Id ='$Id'" ;
		$result=mysqli_query($conn,$sql);
		$row=mysqli_fetch_assoc($result);
	
	
		
		$conn -> close();
		
?>		


<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ride4u Admin</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
   
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="assets/js/Lightweight-Chart/cssCharts.css"> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script src="bar_chart.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/chartJS/Chart.min.js"></script>
 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  

</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php"><strong>ride4u</strong></a>
            </div>

            <ul class="nav navbar-top-links navbar-right">

                <!-- /.dropdown -->
               
               
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> Hello, <?php echo $row['username'] ;?></a>
                        </li>
                       
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
		<div id="sideNav" href=""><i class="fa fa-caret-right"></i></div>
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a class="active-menu" href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="userList.php"><i class="fa fa-desktop"></i> User List</a>
                    </li>
					<li>
                        <a href="addAdmin.php"><i class="fa fa-edit"></i> Add Admin</a>
                    </li>
					<li>
                        <a href="updateUser.php"><i class="fa fa-bar-chart-o"></i> Delete User</a>
                    </li>
                    
					<li>
                        <a href="adminList.php"><i class="fa fa-bar-chart-o"></i> Admin List</a>
                    </li>

          
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
      
		<div id="page-wrapper">
		  <div class="header"> 
                        <h1 class="page-header">
                            Dashboard <small></small>
                        </h1>
						
									
		</div>
            <div id="page-inner">

                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder blue">
                            <div class="panel-left pull-left blue">
                                <i class="fa fa-eye fa-5x"></i>
                                
                            </div>
                            <div class="panel-right">
								<h1><?php
				require 'connection.php';
				
				$query ="SELECT userId From user ORDER BY userId";
				$query_run = mysqli_query($conn,$query);
				
				$row= mysqli_num_rows($query_run);
				
				echo '<h3>'.$row.'</h3`>';
				
				?></h1>
                               <strong> Total User</strong>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder blue">
                              <div class="panel-left pull-left blue">
                                <i class="fa fa-shopping-cart fa-5x"></i>
								</div>
                                
                            <div class="panel-right">
							<h1><?php
				require 'connection.php';
				
				$query ="SELECT rideId From ride ORDER BY rideId";
				$query_run = mysqli_query($conn,$query);
				
				$row= mysqli_num_rows($query_run);
				
				echo '<h3>'.$row.'</h3`>';
				
				?></h1>
                               <strong> Total ride</strong>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder blue">
                            <div class="panel-left pull-left blue">
                                <i class="fa fa fa-comments fa-5x"></i>
                               
                            </div>
                            <div class="panel-right">
							 <h1><?php
				require 'connection.php';
				
				$query ="SELECT driverId From ride ORDER BY driverId";
				$query_run = mysqli_query($conn,$query);
				
				$row= mysqli_num_rows($query_run);
				
				echo '<h3>'.$row.'</h3`>';
				
				?></h1>
                               <strong> Total driver </strong>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder blue">
                            <div class="panel-left pull-left blue">
                                <i class="fa fa-users fa-5x"></i>
                                
                            </div>
                            <div class="panel-right">
							<h1><?php
				require 'connection.php';
				
				$query ="SELECT passengerId From pool ORDER BY passengerId";
				$query_run = mysqli_query($conn,$query);
				
				$row= mysqli_num_rows($query_run);
				
				echo '<h3>'.$row.'</h3`>';
				
				?></h1>
                             <strong>Total <br> Passenger</strong>

                            </div>
                        </div>
                    </div>
                </div>
				
				<div class="row">
				
					
					 <div class="col-md-12">
					<div class="panel panel-default">
					<div class="panel-heading">
                                User Summary 
                            </div>
                            <div class="panel-body">
                               
							
						 <form>	<div style="width:100%;" class="resultados"><canvas id="mycanvass"></canvas></div></form>

     
                  
<?php
include 'connection.php' ;

$conn = mysqli_connect ('localhost','root','','carpool');
if(!$conn)
{
	trigger_error('Could not connect to MySql:'. mysqli_connect_error());
}

$query = "SELECT dateReg,sum(userId) FROM user
group by MONTH(dateReg) order by userId DESC limit 12 "; //query to get the 12 month in descending order.
$result = mysqli_query($conn, $query);
$cart = array();
while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
{
	$date = $row['sum(userId)']; //get dateandtime field 
	$month=strtotime($date); 
	$month=date("F",$month); // convert 5 to MAY as month  // Show year 
	
}
mysqli_close($conn);

?>  
                            </div>
						
					</div>  
					</div>
					
				</div> 
			 
				
			
	

	   
				
				
				
             
			
		
				<footer><p>All right reserved @ride4u Admin</p>
				
        
				</footer>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
	 <script >

       $(document).ready(statistic(2017));  
                function statistic(tarikh){
                   
                    $.ajax({
                        type:'POST',
                        url:'process.php',
                         data:'tarikh='+tarikh,
                        success:function(response){

                            var valores = eval(response);
                            
                            var e   = valores[0];
                            var f   = valores[1];
                            var m   = valores[2];
                            var a   = valores[3];
                            var ma  = valores[4];
                            var j   = valores[5];
                            var jl  = valores[6];
                            var ag  = valores[7];
                            var s   = valores[8];
                            var o   = valores[9];
                            var n   = valores[10];
                            var d   = valores[11];

                     
                           
                                
                            var Datos = {
                                    labels : ['Jan', 'Feb', 'March', 'April', 'May', 'June', 'July', 'August', 'Sept', 'Oct', 'Nov', 'Dec'],
                                    datasets : [

                                        {
                                            label: "Grit Sand",
                                              fillColor : "rgb(8, 102, 198)",
                                            strokeColor : "rgba(66, 134, 244,1)",
                                            pointColor : "rgba(66, 134, 244,1)",
                                            pointStrokeColor : "rgba(66, 134, 244,1)",
                                            pointHighlightFill : "rgba(66, 134, 244,1)",
                                            pointHighlightStroke : "rgba(66, 134, 244,1)",
                                           
                                            data : [e, f, m, a, ma, j, jl, ag, s, o, n, d],
                                        }
                                       

                                    ]
                                }
                                
                            var contexto = document.getElementById('mycanvass').getContext('2d');
                            window.Barra = new Chart(contexto).Bar(Datos, { responsive : true });
                        }
                    });

               
                    return false;
                }
                    
</script>
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
	 
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
  
	
	
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>

      <script>
    
      </script>

</body>

</html>