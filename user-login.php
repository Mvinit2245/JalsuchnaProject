<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from codervent.com/rocker/demo/authentication-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Dec 2020 10:35:26 GMT -->

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>Rocker - Bootstrap4 Admin Dashboard Template</title>
	<!--favicon-->
	<link rel="icon" href="assets/images/logo-icon.png" type="image/x-icon">
	<!-- Bootstrap core CSS-->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<!-- animate CSS-->
	<link href="assets/css/animate.css" rel="stylesheet" type="text/css" />
	<!-- Icons CSS-->
	<link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
	<!-- Custom Style-->
	<link href="assets/css/app-style.css" rel="stylesheet" />

</head>

<body>
	<!-- Start wrapper-->
	<div id="wrapper">
		<div class="height-100v d-flex align-items-center justify-content-center">
			<div
				class="card border-primary border-top-sm border-bottom-sm card-authentication1 mx-auto my-5 animated bounceInDown">
				<div class="card-body">
					<div class="card">
						<div class="card-body">
							<!-- <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
								<li class="nav-item">
									<a href="javascript:void();" data-target="#profile" data-toggle="pill"
										class="nav-link active"><i class="icon-user"></i> <span class="hidden-xs"> <a href="LOGIN.php">User
											Login</span></a>
								</li>
								
							</ul> -->
							<div class="tab-content p-3">
								<div class="tab-pane active" id="profile">
									<div class="card-content p-2">
										<div class="text-center">
											<img src="assets/images/logo-icon.png" height=" 100px" width="100px">
										</div>
										<div class="card-title text-uppercase text-center py-3"> User Login</div>
		    <form action="" method="post">
			  <div class="form-group">
			   <div class="position-relative has-icon-right">
				  <label for="exampleInputUsername" class="sr-only">Email</label>
				  <input type="email" name="email" required="" id="exampleInputUsername" class="form-control form-control-rounded" placeholder="Enter your Email">
				  <div class="form-control-position">
					  <i class="icon-user"></i>
				  </div>
			   </div>
			  </div>
			  <div class="form-group">
			   <div class="position-relative has-icon-right">
				  <label for="exampleInputPassword" class="sr-only">Password</label>
				  <input type="password" name="password" required="" id="exampleInputPassword" class="form-control form-control-rounded" placeholder="Enter your Password">
				  <div class="form-control-position">
					  <i class="icon-lock"></i>
				  </div>
			   </div>
			  </div>

              <a href="citizen_home.html"> <button type="submit" name="log_in"
												class="btn btn-primary shadow-primary btn-round btn-block waves-effect waves-light">Login</button>
											</a>
			  <div class="text-center pt-3">
				
				<p class="text-muted mb-0">Don't have an account? <a href="user-registration-form.php"> Register </a></p>
			  </div>
			 </form>
             <?php

include "join.php";
    if(isset($_POST['log_in']))
    {
        extract($_POST);

        $email=$_POST['email'];
        $password=$_POST['password'];
        
		$q = "select * from user_form where Email='$email' and Password='$password'"  ;

        $res=mysqli_query($x,$q);

		$user_data = mysqli_fetch_array($res);

        $_SESSION['user'] = $user_data;


        if(mysqli_num_rows($res)>0)
        {
            $fetch=mysqli_fetch_array($res);
            
            $_SESSION['id']=$fetch['id'];
            $_SESSION['email']=$fetch['Email'];
            
            
            echo "<script>";
            echo "alert('Login Successfull');";
            echo 'window.location.href="user-home.php";';
            echo "</script>";
        }
        else
        {
            echo "<script>";
            echo "alert('Login Failed');";
            echo "</script>";
            
        }
        
    }

?>
		   </div>


		<!--Start Back To Top Button-->
		<a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
		<!--End Back To Top Button-->
	</div>
	<!--wrapper-->

	<!-- Bootstrap core JavaScript-->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>

</body>

<!-- Mirrored from codervent.com/rocker/demo/authentication-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Dec 2020 10:35:26 GMT -->

</html>