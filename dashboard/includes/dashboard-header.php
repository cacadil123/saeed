<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Good Meeting AdminPanel</title>
    <!-- Bootstrap Core CSS -->
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Footable CSS -->
    <link href="../assets/plugins/footable/css/footable.core.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="css/colors/blue.css" id="theme" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../fonts/fonts.css">
    <link href="css/dashboard.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    
</head>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="./">
                        <!-- Logo icon -->
                        <b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="../images/logo.png" alt="logo" class="dark-logo" />
                           <img src="../images/mobile-logo.png" alt="logo" class="mobile-logo" />
                        </b>
                        <!--End Logo icon -->
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto my-toggle mt-md-0 ">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="icon-arrow-left-circle"></i></a> </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="mysearch">
                        <li class="nav-item">
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search"> <a class="srh-btn"><img src="../images/search.png"></a> </form>
                        </li>
                    </ul>
                    <ul class="navbar-nav my-lg-0">
                        <li class="nav-item page-titles">
                            <span class="noti right-side-toggle" >0</span>
                        </li>
                        <li class="nav-item dropdown blur-ondrop">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/users/1.jpg" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right animated flipInY">
                                <ul class="dropdown-user">
                                    
                                    <li><a href="#"><i class="mdi mdi-account-box"></i> Your Account</a></li>
                                    <li><a href="#"><i class="mdi mdi-wrench"></i> Setting</a></li>
                                    <li><a href="#"><i class="mdi mdi-file-document-box"></i> Billing</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li class="logout"><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                        
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
               
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li>
                            <a href="./" aria-expanded="false">
                                <img src="../assets/images/dashboard.png">
                                <img src="../assets/images/dashboard-b.png" class="d-none">
                                <span class="hide-menu">Dashboard</span></a>
                        </li>
                        <li>
                            <a href="meeting.php" aria-expanded="false">
                                <img src="../assets/images/man.png">
                                <img src="../assets/images/man-b.png" class="d-none">
                                <span class="hide-menu">Meeting</span></a>
                        </li>
                        <li>
                            <a href="stats.php" aria-expanded="false">
                                <img src="../assets/images/bar-graph.png">
                                <img src="../assets/images/bar-graph-b.png" class="d-none">
                                <span class="hide-menu">Stats</span></a>
                        </li>
                        <li>
                            <a href="feedback-form.php" aria-expanded="false">
                                <img src="../assets/images/financial.png">
                                <img src="../assets/images/financial-b.png" class="d-none">
                                <span class="hide-menu">Feedback Form</span></a>
                        </li>
                        <li>
                            <a href="user-admin.php" aria-expanded="false">
                                <img src="../assets/images/user.png">
                                <img src="../assets/images/user-b.png" class="d-none">
                                <span class="hide-menu">User Admin</span></a>
                        </li>
                        <li>
                            <a href="setting.php" aria-expanded="false">
                                <img src="../assets/images/cogwheel.png">
                                <img src="../assets/images/cogwheel-b.png" class="d-none">
                                <span class="hide-menu">Settings</a>
                        </li>

                    </ul>
                    <ul id="sidebarnav" class="miscc">
                        <li class="nav-small-cap"></li>
                        <li class="nav-small-cap"></li>
                        <li class="nav-small-cap"></li>
                        <li>
                            <a href="#" aria-expanded="false">
                                <img src="../assets/images/loop.png">
                                <span class="hide-menu">Upgrade</span></a>
                        </li>
                        <li>
                            <a href="../login-dashboard.php" aria-expanded="false">
                                <img src="../assets/images/logout.png">
                                <span class="hide-menu">Logout</span></a>
                        </li>
                        

                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
           
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Notifications <span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                            <ul class="m-t-20 chatonline">
                                <li>
                                    <a href="javascript:void(0)">
                                        <img src="../assets/images/assignment.png" alt="" class=""> 
                                        <span><p>Johanna submitted her feedback form</p> <img src="../assets/images/red-c.png" alt="" class="red-c">  <small class="text-muted">4 mins ago</small>

                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <img src="../assets/images/assignment.png" alt="" class=""> 
                                        <span><p>Dennis submitted his feedback form</p> <img src="../assets/images/red-c.png" alt="" class="red-c"> <small class="text-muted">27 mins ago</small></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <img src="../assets/images/calender.png" alt="" class=""> 
                                        <span><p>Daily Standup Today with Carter</p> <img src="../assets/images/red-c.png" alt="" class="red-c"> <small class="text-muted">2 hours ago</small></span>
                                    </a>
                                </li>
                                <li class="unread-noti">
                                    <a href="javascript:void(0)">
                                        <img src="../assets/images/assignment.png" alt="" class=""> 
                                        <span><p>Johanna submitted her feedback form</p> <small class="text-muted">4 mins ago</small></span>
                                    </a>
                                </li>
                                <li  class="unread-noti">
                                    <a href="javascript:void(0)">
                                        <img src="../assets/images/assignment.png" alt="" class=""> 
                                        <span><p>Dennis submitted his feedback form</p> <small class="text-muted">27 mins ago</small></span>
                                    </a>
                                </li>
                                <li class="unread-noti">
                                    <a href="javascript:void(0)">
                                        <img src="../assets/images/calender.png" alt="" class=""> 
                                        <span><p>Daily Standup Today with Carter</p> <small class="text-muted">2 hours ago</small></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->