<!DOCTYPE html>
<html lang="en">
<?php
    session_start();

    $user = $_SESSION['user'];
            
?>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Edit Profile</title>
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
	
	 <!--Sweet Alerts सेंड आणि कॅन्सल बटन च्या इफेक्ट साथी या फिलेस use केल्या आहेत  -->
  <script src="sweetalert.min.js"></script>
  <script src="sweet-alert-script.js"></script>

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
            <div class="brand-logo">
                <a href="user-home.php">
                     <img src="assets/images/logo.png" class="logo-icon" alt="logo icon">
                    <h2 class="logo-text" style="letter-spacing: 1px;"> जलसूचना </h2>
                </a>
            </div>
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
						<a href="user-home.php"> <img src="assets/images/logowithname.png" height="50px" width="140px" style="margin-left:5px;" alt="logo icon"> </a>
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
                            You have 2 notifications
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
				
				
			<div class="card " >
                <div class="card-header border-1">
					<center>
						<img class="profile-user-img rounded img-fluid mx-auto d-block"
						src="assets/images/user_img.png" 
						alt="User profile picture" height="150px" width="150px">
						<h4 style="margin-top:5px">Edit Information</h4>
					</center>
				</div>


				<div id="edit" style="margin-left:25px;margin-right:25px;">
                <form action="" method="post">
                    <?php
   include 'join.php';
   if(isset($_GET['user_id']))
   {

   	$view=mysqli_query($x,"select * from user_form where UserID='".$_GET['user_id']."'") or die(mysqli_error($x));
	 	$fetch=mysqli_fetch_array($view);
	 	extract($fetch);
   }
   ?>
						<div class="form-group row">
							<label class="col-lg-3 col-form-label form-control-label" ><b>Name</b></label>
							<div class="col-lg-9">
								<input class="form-control" type="text" name="u_name" value="<?php echo $user['Name'];?>">
							</div>
						</div>
						<!-- <div class="form-group row">
							<label class="col-lg-3 col-form-label form-control-label"><b>Last name</b></label>
							<div class="col-lg-9">
								<input class="form-control" type="text" value="">
							</div>
						</div>
						 -->
						<div class="form-group row">
							<label class="col-lg-3 col-form-label form-control-label"><b>Mobile No.</b></label>
							<div class="col-lg-9">
								<input class="form-control" type="text" name="u_mob" value="<?php echo $user['Mobile'];?>" >
							</div>
						</div>
						
						<div class="form-group row">
							<label class="col-lg-3 col-form-label form-control-label"><b>Email</b></label>
							<div class="col-lg-9">
								<input class="form-control" name="u_mail" type="email" value="<?php echo $user['Email'];?>" >
							</div>
						</div>
						
						
						
						
						<!-- <div class="form-group row">
							<label class="col-lg-3 col-form-label form-control-label"><b>Address</b></label>
							<div class="col-lg-9">
								<input class="form-control" type="text" value="In front of Ashtbhuja Temple, Samarth Nagar, Jalgaon" >
							</div>
						</div> -->
						
						<div class="form-group row">
							<label class="col-lg-3 col-form-label form-control-label"><b>Area</b></label>
							<div class="col-lg-7">
                                <select name="u_res" class="form-control" id="basic-select" required="">
                                        

                                                <?php
                                                        include "join.php";
                                                        $view = mysqli_query($x,"SELECT * FROM `areas`") or die (mysqli_error($x));
                                                        
                                                        while($asd = mysqli_fetch_array($view))
                                                        {
                                                            extract($asd);
                                                        
                                                    ?>                
                                                        <option>
                                                            <?php echo $name;?>
                                                        </option>
                                        
                                                <?php
                                                    }
                                                ?>

                                        </select>							
                            </div>
								
						</div>
						   
					   
						<!-- <div class="form-group row">
							<label class="col-lg-3 col-form-label form-control-label"><b>Username</b></label>
							<div class="col-lg-9">
								<input class="form-control" type="text" value="Vaibhav123">
							</div>
						</div> -->
						
						<div class="form-group row">
                            <label class="col-lg-2 col-form-label form-control-label"></label>
                            <div class="col-lg-9">
								<center> 
									<input type="reset" class="btn btn-secondary" value="Cancel" style="font-size:14px">
									<input type="submit" name="update" class="btn btn-primary" style="font-size:15px"
                        value="update">
									
								</center>
							</div>
						</div>
						
						
			
						
						
					</form>

                    <?php 
if(isset($_POST['update']))
{
extract($_POST);

$update=mysqli_query($x,"update user_form set
Name='".$u_name."',
Email='".$u_mail."',
Mobile='".$u_mob."',
ResidentialArea='".$u_res."'
where UserID='".$_GET['user_id']."'") or die(mysqli_error($x));
if($update)
{
echo '<script type="text/javascript">';
echo "alert('Record  Updated');";
echo 'window.location.href = "user-home.php";';
echo "</script>";
}
else
{
echo '<script type="text/javascript">';
echo "alert('record Not Update');";
echo "</script>";             
}

}
?>
				</div>
			</div>
		</div>
	</div>
	
</body>

</html>							