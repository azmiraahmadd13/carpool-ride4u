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
                        <li><a href="#"><i class="fa fa-user fa-fw"></i>Hello, <?php echo $row['username'] ;?></a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
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
                        <a class="active-menu" href="home.php"><i class="fa fa-dashboard"></i> Dashboard</a>
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
                            User List <small></small>
                        </h1>
						
									
		</div>
            <div id="page-inner">

                <!-- /. ROW  -->


				

				
	
                <!-- /. ROW  -->

	   
				
				
				
                <div class="row">
    
                    <div class="col-md-8 col-sm-12 col-xs-12">

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                User List
                            </div> 
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Name</th>
                                                
                                                <th>Email</th>
												<th>Phone No.</th>
												<th>Action</th>
												
                                            </tr>
											
											<?php 
						include ('connection.php');
						if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 10;
        $offset = ($pageno-1) * $no_of_records_per_page;
		
		$total_pages_sql = "SELECT COUNT(*) FROM user";
        $result = mysqli_query($conn,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);
		
						$sql = "SELECT * FROM user LIMIT $offset, $no_of_records_per_page";
						$result = mysqli_query($conn,$sql);
						
						if ($result == TRUE) {
							$no = 0;
							while($row = mysqli_fetch_array($result)){
					?>
                                        </thead>
                                        <tbody>
                                           <tr>
                                                <th><?php echo ++$no; ?></th>
                                                <th><?php echo $row['fname']; ?> <?php echo $row['lname']; ?>   </th>

                                                <th><?php echo $row['email']; ?> </th>
                                                <th><?php echo $row['phoneNum']; ?> </th>
												 <th > <a href="deleteUser.php?userId=<?php echo $row['userId']; ?>" onClick="return confirm('Are You Sure?')">Delete</a></th>
												
                                            </tr>
                                           <?php 
							}
						} else {
								echo "0 Results";
							}
							$conn -> close ();
						?>	
                                        </tbody>
										
                                    </table>
									
									<ul class="pagination">
        <li><a href="?pageno=1">First</a></li>
        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
        </li>
        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
        </li>
        <li><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- /. ROW  -->
			
		
				<footer><p>All right reserved @ride4u Admin</p>
				
        
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