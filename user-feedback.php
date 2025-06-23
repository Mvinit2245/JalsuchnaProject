<?php
	include 'join.php';
	if(isset($_POST["btn_submit"]))
	{
		extract($_POST);
		
		$insert = mysqli_query($x,"insert into feed_back(Category,Name,Description) values('$feed','$us_name','$desc')") or die(mysqli_error($x));
		
		if($insert)
			{
				echo '<script type="text/javascript">';
	            echo "alert('Feddback sent successfully');";
	            echo "</script>"; 
			}
		else
		{
			echo '<script type="text/javascript">';
	            echo "alert('Data not inserted successfully');";
	            echo "</script>"; 
		}
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title> user-feedback </title>
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
           
                <a href="user-home.php">
                    <a href="user-home.php"> <img src="assets/images/logowithname.png" class="m-3" height="50px" width="190px" style="margin-left:5px;" alt="logo icon"> </a>

                </a>
           
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
                <Center>
                    <h1 style="font-family: 'Times New Roman', Times, serif ;color:rgb(41, 53, 214) ;">Feedback</h1>
                </Center>
                <hr>
				
				<div class="card " >
				
                    <form action="" method="post" >
                        <div class="form-group row mt-3" style="margin-left:5%;" >
                            <label class="col-lg-3 col-form-label form-control-label"><b>Category</b></label>
                            <div class="col-lg-7" >
                                
                                    <select style="font-size:16px" name="feed">
                                        <option value=""> ---Select Feedback---</option>
                                        <option value="Water Cleanliness"> Water Cleanliness </option>
                                        <option value="Water Delay"> Water Delay </option>
                                        <option value="Bad Quality"> Bad Quality</option>
                                        <option value="Regular Problems"> Regular Problems </option>
                                        <option value="Water Service"> Water Service</option>
                                    </select>
                                    <br>
    
                            </div>		
                        </div>
                        
                        <div class="form-group row mt-3" style="margin-left:5%;">
                            <label class="col-lg-3 col-form-label form-control-label"><b>Name</b></label>
                            <div class="col-lg-7" >
                                
                                
                                    <input type="text" name="us_name" placeholder=" Enter Your Name " required=""> </input>
                                    
                                
                            </div>		
                        </div>
                        
                        
                        <div class="form-group row mt-3" style="margin-left:5%;">
                            <label class="col-lg-3 col-form-label form-control-label"><b>Description</b></label>
                            <div class="col-lg-7" >
                                
                                
                                    <textarea rows="4" class="form-control" name="desc" id="basic-textarea" placeholder="Please, Describe Your Feedback..." > </textarea>
                                    
                                
                            </div>		
                        </div>
                        
                        <center  style="margin-bottom:150px;">
                            
                            <button type="submit" class="btn btn-danger"><i class="fa fa-times"></i> CANCEL</button>
                            <button type="submit" name="btn_submit" class="btn btn-success" ><i class="fa fa-check-square-o"></i> SEND</button>						
                            
                            <!-- <button type="button" class="btn btn-primary btn-round waves-effect waves-light m-1">Submit</button> -->
    
                            
                            
                        </center>
                        </form>
                        
                    </div>
						
					</center>
					
				</div>
				
			</div>
		</div>