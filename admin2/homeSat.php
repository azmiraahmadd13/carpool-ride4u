<!DOCTYPE html>
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
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="assets/js/Lightweight-Chart/cssCharts.css"> 
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
						<ol class="breadcrumb">
					  <li><a href="#">Home</a></li>
					  <li><a href="#">Library</a></li>
					  <li class="active">Data</li>
					</ol> 
									
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
                             <strong>Total Passenger</strong>

                            </div>
                        </div>
                    </div>
                </div>
				
				<div class="row">
				<div class="col-md-5">
						<div class="panel panel-default">
						<div class="panel-heading">
							Line Chart
						</div>
						<div class="panel-body">
							<div id="morris-line-chart"></div>
						</div>						
					</div>   
					</div>		
					
						<div class="col-md-7">
					<div class="panel panel-default">
					<div class="panel-heading">
                                Bar Chart Example
                            </div>
                            <div class="panel-body">
                                <div id="morris-bar-chart"></div>
                            </div>
						
					</div>  
					</div>
					
				</div> 
			 
				
			
		<div class="row">
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Customers</h4>
						<div class="easypiechart" id="easypiechart-blue" data-percent="82" ><span class="percent">82%</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Sales</h4>
						<div class="easypiechart" id="easypiechart-orange" data-percent="55" ><span class="percent">55%</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Profits</h4>
						<div class="easypiechart" id="easypiechart-teal" data-percent="84" ><span class="percent">84%</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>No. of Visits</h4>
						<div class="easypiechart" id="easypiechart-red" data-percent="46" ><span class="percent">46%</span>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
			
				
                <div class="row">
                    <div class="col-md-9 col-sm-12 col-xs-12">
                        <div class="panel panel-default">                            
							<div class="panel-heading">
							Area Chart
						</div>
						<div class="panel-body">
							<div id="morris-area-chart"></div>
						</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Donut Chart Example
                            </div>
                            <div class="panel-body">
                                <div id="morris-donut-chart"></div>
                            </div>
                        </div>
                    </div>

                </div>
				<div class="row">
				<div class="col-md-12">
				
					</div>		
				</div> 	
                <!-- /. ROW  -->

	   
				
				
				
             
			
		
				<footer><p>All right reserved. Template by: <a href="http://webthemez.com">WebThemez</a></p>
				
        
				</footer>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
	 
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
	
	
	<script src="assets/js/easypiechart.js"></script>
	<script src="assets/js/easypiechart-data.js"></script>
	
	 <script src="assets/js/Lightweight-Chart/jquery.chart.js"></script>
	
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>

      <script>
    
      </script>

</body>

</html>