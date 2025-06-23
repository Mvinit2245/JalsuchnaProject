<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from codervent.com/rocker/demo/home.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Dec 2020 10:31:05 GMT -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title> Admin Feedback Page </title>
    <!--favicon-->
    <link rel="icon" href="assets/images/logo-icon.png" type="image/x-icon">
    <!-- Vector CSS -->
    <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- simplebar CSS-->
    <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <!-- Bootstrap core CSS-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- animate CSS-->
    <link href="assets/css/animate.css" rel="stylesheet" type="text/css" />
    <!-- Icons CSS-->
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
    <!-- Sidebar CSS-->
    <link href="assets/css/sidebar-menu.css" rel="stylesheet" />
    <!-- Custom Style-->
    <link href="assets/css/app-style.css" rel="stylesheet" />

</head>

<body>

    <!-- Start wrapper-->
    <div id="wrapper">

        <!--Start sidebar-wrapper-->
        <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
            <div class="brand-logo">
                <a href="home.php">
                    <img src="assets/images/jalsuchna.png" class="m-3" alt="logo icon" height="40px" width="190px">

                </a>
            </div>

            <!-- yahi Dashboard wala content dalna hai  -->
            <ul class="sidebar-menu do-nicescrol gradient-telegram">

                <li>
                </li>
                <li id="bar">
                    <a href="home.php" class="waves-effect">
                        <center><span><i class="icon-home"></i></span> </center>

                    </a>
                </li>

                <li>
                    <a href="home.php" class="waves-effect">
                        <i class="fa fa-table"></i>
                        <span>Valvemen List</span>
                    </a>
                </li>

                <li>
                    <a href="users-list.php" class="waves-effect">
                        <i class="icon-map"></i>
                        <span>User List</span>
                    </a>
                </li>

                <li>
                    <a href="water-route.php" class="waves-effect">
                        <i class="icon-calendar"></i> <span>Water Route</span>
                    </a>
                </li>

                <li>
                    <a href="javaScript:void();" class="waves-effect">
                        <i class="fa fa-address-card-o"></i>
                        <span>My Profile</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="sidebar-submenu">
                        <li><a href="view-profile.php"> <i class="fa "></i>View Profile</a></li>
                        <li><a href="update-profile.php"> <i class="fa "></i> Update Profile </a></li>
                    </ul>

                </li>

                <li>
                    <a href="user-feedback.php" class="waves-effect">
                        <i class="icon-layers"></i>
                        <span>Feedback</span>
                    </a>
                </li>

                <li>
                    <a href="news.php" class="waves-effect">
                        <i aria-hidden="true" class="fa fa-newspaper-o"></i>
                        <span>Blogs</span>
                    </a>
                </li>



            </ul>

            <!-- yaha tak -->
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
                    <!-- <li class="nav-item">
                        <form class="search-bar">
                            <input type="text" class="form-control" placeholder="Enter keywords">
                            <a href="javascript:void();"><i class="icon-magnifier"></i></a>
                        </form>
                    </li> -->
                </ul>

                <ul class="navbar-nav align-items-center right-nav-link">
                    <li class="nav-item dropdown-lg">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown"
                            href="javascript:void();">
                            <i class="icon-envelope-open"></i><span class="badge badge-danger badge-up">24</span></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    You have 24 new messages
                                    <span class="badge badge-danger">24</span>
                                </li>
                                <li class="list-group-item">
                                    <a href="javaScript:void();">
                                        <div class="media">
                                            <div class="avatar"><img class="align-self-start mr-3"
                                                    src="assets/images/valvemen_img.jpeg" alt="user avatar"></div>
                                            <div class="media-body">
                                                <h6 class="mt-0 msg-title">Vaibhav</h6>
                                                <p class="msg-info">pipeline broken in ayodhya nagar</p>
                                                <small>Today, 4:10 PM</small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a href="javaScript:void();">
                                        <div class="media">
                                            <div class="avatar"><img class="align-self-start mr-3"
                                                    src="assets/images/valvemen_img.jpeg" alt="user avatar"></div>
                                            <div class="media-body">
                                                <h6 class="mt-0 msg-title">Vinit</h6>
                                                <p class="msg-info"> Can't supply water to shivaji nagar today.</p>
                                                <small>Yesterday, 8:30 AM</small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a href="javaScript:void();">
                                        <div class="media">
                                            <div class="avatar"><img class="align-self-start mr-3"
                                                    src="assets/images/valvemen_img.jpeg" alt="user avatar"></div>
                                            <div class="media-body">
                                                <h6 class="mt-0 msg-title">Durvankur</h6>
                                                <p class="msg-info">Opening valve of Dashrath nagar</p>
                                                <small>5/11/2018, 2:50 PM</small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a href="javaScript:void();">
                                        <div class="media">
                                            <div class="avatar"><img class="align-self-start mr-3"
                                                    src="assets/images/valvemen_img.jpeg" alt="user avatar"></div>
                                            <div class="media-body">
                                                <h6 class="mt-0 msg-title">Jayesh Wankhede</h6>
                                                <p class="msg-info">Closing Valve of shiv colony</p>
                                                <small>1/11/2018, 2:50 PM</small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-group-item"><a href="javaScript:void();">See All Messages</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
                            <span class="user-profile"><img src="assets/images/valvemen_img.jpeg" class="img-circle"
                                    alt="user avatar"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dropdown-item user-details">
                                <a href="javaScript:void();">
                                    <div class="media">
                                        <div class="avatar"><img class="align-self-start mr-3"
                                                src="assets/images/valvemen_img.jpeg" alt="user avatar"></div>
                                        <div class="media-body">
                                            <h6 class="mt-2 user-title">jay wan</h6>
                                            <p class="user-subtitle">jay@example.com</p>
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><i class="icon-wallet mr-2"></i> Account</li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><i class="icon-settings mr-2"></i> Setting</li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><i class="icon-power mr-2"></i> Logout</li>
                        </ul>
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
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header border-0">
                                
                                <div class="card-action">
                                    <div class="dropdown">
                                        <!-- <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret"
                                            data-toggle="dropdown">
                                            <i class="icon-options"></i>
                                        </a> -->
                                        <!-- <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="javascript:void();">Action</a>
                                            <a class="dropdown-item" href="javascript:void();">Another action</a>
                                            <a class="dropdown-item" href="javascript:void();">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="javascript:void();">Separated link</a>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <div class="table-responsive">
                                    <table class="table align-items-center table-flush">
                                        <thead>
                                            <tr>
                                                <!-- <th>FeedID</th> -->
                                                <th>Category</th>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>Action</th>
                                                
                                        </thead>
                                        
    
                                        <?php
                        include "join.php";
                        $view = mysqli_query($x,"select * from feed_back") or die (mysqli_error($x));
                        
                        while($asd = mysqli_fetch_array($view))
                        {
                            extract($asd);
                        
                    ?>
                    <tbody>
                            <tr>
                            <!-- <td> </td> -->
                                <td><?php echo $Category; ?></td>
                                <td><?php echo $Name; ?></td>
                                <td><?php echo $Description; ?></td> 
                                
                                
                                <td>
                                   
                                    <a href="user-feedback-delete-query.php?feed_id=<?php echo $FeedID;?>">Delete</a>
                                </td>
                            </tr>
                    </tbody>
                    <?php } ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


            </div>



        </div>

    </div>
    <!--End wrapper-->

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

</body>

<!-- Mirrored from codervent.com/rocker/demo/home.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Dec 2020 10:31:32 GMT -->

</html>