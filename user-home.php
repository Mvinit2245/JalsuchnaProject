<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title> user-home</title>
    <!--favicon-->
    <link rel="icon" href="assets/images/logo.png" type="image/x-icon">
    <!-- Vector CSS -->
    <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
    <!-- simplebar CSS-->
    <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
    <!-- Bootstrap core CSS-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
    <!-- animate CSS-->
    <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
    <!-- Icons CSS-->
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
    <!-- Sidebar CSS-->
    <link href="assets/css/sidebar-menu.css" rel="stylesheet"/>
    <!-- Custom Style-->
    <link href="assets/css/app-style.css" rel="stylesheet"/>
	
	
	
	
	<!-- Bootstrap core JavaScript-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- simplebar js -->
    <script src="assets/plugins/simplebar/js/simplebar.js"></script>
    <!-- waves effect js -->
    <script src="assets/js/waves.js"></script>
    <!-- sidebar-menu js -->
    <script src="assets/js/sidebar-menu.js"></script>
    <!-- Custom scripts -->
    <script src="assets/js/app-script.js"></script>

    <!-- Vector map JavaScript -->
    <script src="assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- Chart js -->
    <script src="assets/plugins/Chart.js/Chart.min.js"></script>
    <script src="assets/plugins/Chart.js/Chart.extension.js"></script>
    <!-- Index js -->
    <script src="assets/js/index.js"></script>


</head>

<body>

    <!-- Start wrapper-->
    <div id="wrapper">

        <!--Start sidebar-wrapper-->
        <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
            
                <a href="user-home.php">
                    <a href="user-home.php"> <img src="assets/images/logowithname.png" class="m-3" height="50px" width="190px" style="margin-left:5px;" alt="logo icon"> </a>
					
          
            <ul class="sidebar-menu do-nicescrol gradient-telegram" >
			
				<li>
					<li>
							<a href="user-home.php" class="waves-effect">
								<center><span><i class="icon-home"></i></span></center>
							</a>
					</li>
					
					<li>
						<a href="user-notification.php" class="waves-effect">
							<i class="fa fa-table"></i>
							<span>Notifications</span>
						</a>

					</li>

					

					<li>
						<a href="user-water-route.php" class="waves-effect">
							<i class="icon-map"></i>
							<span>Water Route</span>
						</a>
					</li>

					

					<li>
						<a href="javaScript:void();" class="waves-effect">
							<i class="fa fa-address-card-o "></i>
							<span>My Profile</span> <i class="fa fa-angle-left pull-right"></i>
						</a>
						<ul class="sidebar-submenu">
							<li><a href="user-view-profile.php"> <i class="fa "></i> View Profile</a></li>
							<li><a href="user-update-profile.php"> <i class="fa "></i> Update Profile </a></li>
						</ul>		
					</li>

					<li>
						<a href="user-feedback.php" class="waves-effect">
							<i class="icon-layers"></i>
							<span>Feedback</span>
						</a>
					</li>
				</li>
				
            </ul>
	

        </div>
        <!--End sidebar-wrapper-->

        <!--Start topbar header-->
        <header class="topbar-nav">
            <nav class="navbar navbar-expand gradient-winter">
                <ul class="navbar-nav mr-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link toggle-menu" href="javascript:void();">
                            <i class="icon-menu menu-icon"></i>
                        </a>
                    </li>
                    
					<li class="nav-item">
						
					</li>

                </ul>
				
				
				

                <ul class="navbar-nav align-items-center right-nav-link">
				<li class="nav-item dropdown-lg">
                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown"
                    href="javascript:void();">
                    <i class="icon-bell"></i><span class="badge badge-primary badge-up">2</span></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            You have 2 user-notification
                            <span class="badge badge-primary">2</span>
                        </li>
                         <!-- <li class="list-group-item">
                            <a href="javaScript:void();">
                                <div class="media">
                                    <i class="icon-people fa-2x mr-3 text-info"></i>
                                    <div class="media-body">
                                        <h6 class="mt-0 msg-title">New Registered Users</h6>
                                        <p class="msg-info">Lorem ipsum dolor sit amet...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="javaScript:void();">
                                <div class="media">
                                    <i class="icon-cup fa-2x mr-3 text-warning"></i>
                                    <div class="media-body">
                                        <h6 class="mt-0 msg-title">New Received Orders</h6>
                                        <p class="msg-info">Lorem ipsum dolor sit amet...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="javaScript:void();">
                                <div class="media">
                                    <i class="icon-bell fa-2x mr-3 text-danger"></i>
                                    <div class="media-body">
                                        <h6 class="mt-0 msg-title">New Updates</h6>
                                        <p class="msg-info">Lorem ipsum dolor sit amet...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
						-->
                        <li class="list-group-item"><a href="user-notification.php">See All notifications</a></li>
                    </ul>
                </div>
            </li>


            <li class="nav-item">
                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" href="user-view-profile.php" >
                    <span class="user-profile"><i class="icon-user icons" alt="user avatar"></i></span>
                </a>
            </li>
			
        </ul>
		
    </nav>
	
</header>
        <!--End topbar header-->

        <div class="clearfix"></div>

        <div class="content-wrapper">
            <div class="container-fluid">

                <!--Start Dashboard Content-->


                <!--End Row-->



                <!--End Row-->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header border-1">
                                <center><b> <div style="font-size:25px;font-family:algerian;margin-top:7px;margin-bottom:7px;">Water Timetable</div> </b> </center>  
                            </div>
							
							
                            <div class="table-responsive">
                                <table class="table align-items-center  table table-striped shadow-info table-bordered" >
                                    <thead >
                                        <tr >
                                            <th style="font-size:14px"><center>Day</center></th>
                                            <th style="font-size:14px"><center>Date</center></th>
                                            <th style="font-size:14px"><center>Time<center></th>    
                                        </tr>
                                    </thead>
                                    <?php
                        include "join.php";
                        $view = mysqli_query($x,"select * from time_table") or die (mysqli_error($x));
                        
                        while($asd = mysqli_fetch_array($view))
                        {
                            extract($asd);
                        
                    ?>
                    <tbody>
                            <tr>
                            <td><center><?php echo $Day; ?></center></td>
                            <td><center><?php echo $Date; ?></center></td>
                            <td><center><?php echo $Time; ?></center></td>
                               
                                
                                
                            </tr>
                    </tbody>
                    <?php } ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Row-->


                <!--End Row-->


                <!--End Row-->

                <!--End Dashboard Content-->
                <!--start overlay-->
                <div class="overlay toggle-menu"></div>
                <!--end overlay-->
            </div>
            <!-- End container-fluid-->

        </div>
        <!--End content-wrapper-->
        <!--Start Back To Top Button-->
        <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
        <!--End Back To Top Button-->

        <!--Start footer-->
        <footer class="footer">
            <div class="container">
                <div>
				<center>
                   <img src="assets/images/water-drop-animation.gif" class="logo-icon" alt="logo icon" height="50px" width="50px">
                   <img src="assets/images/water-drop-animation.gif" class="logo-icon" alt="logo icon" height="50px" width="50px">
                   <img src="assets/images/water-drop-animation.gif" class="logo-icon" alt="logo icon" height="50px" width="50px">
				</center>
				   
                </div>
				
				<center><h5 >SAVE WATER</h5></center>
            </div>
        </footer>
        <!--End footer-->

    </div>
    <!--End wrapper-->

    
</body>

<!-- Mirrored from codervent.com/rocker/demo/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Dec 2020 10:31:32 GMT -->

</html>