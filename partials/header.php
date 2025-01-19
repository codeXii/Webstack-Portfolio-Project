<?php
require './myconfig/database.php';


if(!isset($_SESSION['admin-id'])){
    header('location:' . ROOT_URL . 'index.php');
  }

?>




<!DOCTYPE html>
<html lang="en">
<head>
	<script type="text/javascript" src="https://js.stripe.com/v3/"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="">

    <title>Glato Properties</title>
    <link rel="icon" href="" type="image/png"/>
	
			<!-- Fonts and icons -->
		<script src="./dash/js/plugin/webfont/webfont.min.js"></script>
	<!-- Sweet Alert -->
		<script src="./dash/js/plugin/sweetalert/sweetalert.min.js"></script>
		<!-- CSS Files -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
		<link rel="stylesheet" href="./dash/css/bootstrap.min.css">
		<link rel="stylesheet" href="./dash/css/fonts.min.css">
		<link rel="stylesheet" href="./dash/css/atlantis.min.css">
		<link rel="stylesheet" href="./dash/css/customs.css">
		<link rel="stylesheet" href="./dash/css/style.css">
		<link rel="stylesheet" href="./dash/css/atlantis.min.css">
		<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css">
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.21/af-2.3.5/b-1.6.3/b-flash-1.6.3/b-html5-1.6.3/b-print-1.6.3/r-2.2.5/datatables.min.css"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.1/dist/alpine.min.js" defer></script>
		<script src="https://cdn.jsdelivr.net/npm/chart.js@3.2.1/dist/chart.min.js"></script>
	
</head>
<body data-background-color="dark">



    <div class="main-header">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="purple">
            <a href="/" class="logo" style="font-size: 27px; color:#fff;">
            <small>GLATO HOUSING</small>
            </a>
            <button class="ml-auto navbar-toggler sidenav-toggler" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <i class="icon-menu"></i>
                </span>
            </button>
            <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="icon-menu"></i>
                </button>
            </div>
        </div>
        <!-- End Logo Header -->
    
        <!-- Navbar Header -->
        <nav class="navbar navbar-header navbar-expand-lg" data-background-color="dark">
            
            <div class="container-fluid">
                <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                    <li class="nav-item hidden-caret">
                        <form action="javascript:void(0)" method="post" id="styleform" class="form-inline">
                            <div class="form-group">
                            </div> 
                        </form>
                    </li>    
                    <li class="nav-item dropdown hidden-caret">
                        <a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell"></i>
                            
                        </a>
                        <ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
                            
                            
                            <li>
                                <a class="see-all" href="<?= ROOT_URL ?>notifications.php">See all notifications<i class="fa fa-angle-right"></i> </a>
                            </li>
                        </ul>
                    </li>
        
                    <li class="nav-item dropdown hidden-caret">
                        <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
                            <i class="fas fa-user"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user animated fadeIn">
                            <div class="dropdown-user-scroll scrollbar-outer">
                                <li>
                                     <a class="dropdown-item" href="<?= ROOT_URL ?>changepassword.php">Change password</a>
                                     <div class="dropdown-divider mt-2"></div>
                                     <a class="dropdown-item" href="<?= ROOT_URL ?>logout.php">Logout</a>
                                     
                                    <!-- <a class="dropdown-item" href="./account-settings.html">Account Settings</a>  -->
                                    
                                    <!-- <a class="dropdown-item" href="<?= ROOT_URL ?>logout.php"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        Logout
                                        </a> -->
                                    <form id="logout-form" action="" method="POST" style="display: none;">
                                    </form> 
                                </li>
                            </div>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- End Navbar -->
    </div>


    <!-- sidebar -->
    <div class="sidebar sidebar-style-2" data-background-color="purple">
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
            <div class="sidebar-content">
                <!-- <div class="user">
                    <div class="info">
                        <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                            <span>
                                
                                 <span class="user-level">Administrator</span> 
                                <span class="caret"></span>
                            </span>
                        </a>
                        <div class="clearfix"></div>
                        <div class="collapse in" id="collapseExample">
                            <ul class="nav">
                                <li>
                                    <a href="">
                                        <span class="link-collapse">Account Settings</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> -->
                <ul class="nav nav-primary">
            
                    <li class="nav-item ">
                        <a href="./dashboard.php">
                            <i class="fas fa-home"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="./p.location.php">
                            <i class="fas fa-home"></i>
                            <p>Property Location</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="./properties.php">
                            <i class="fa fa-life-ring" aria-hidden="true"></i>
                            <p>Property/Houses</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="collapse" href="#dept">
                        <i class="fas fa-user"></i>
                            <p>Tenants</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="dept">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="<?= ROOT_URL ?>tenants.php">
                                        <span class="sub-item">View tenants</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= ROOT_URL ?>addtenant.php">
                                        <span class="sub-item">Add new tenant</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="collapse" href="#pay">
                        <i class="fa-solid fa-coins"></i>
                            <p>Payments</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="pay">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="<?= ROOT_URL ?>payments.php">
                                        <span class="sub-item">View payments</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= ROOT_URL ?>payments-reports.php">
                                        <span class="sub-item">Payments reports</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="./notifications.php">
                            <i class="fa-regular fa-bell"></i>
                            <p>notifications</p>
                        </a>
                    </li> 
                    <!-- <li class="nav-item">
                        <a href="">
                            <i class="fa fa-recycle " aria-hidden="true"></i>
                            <p>Admin Users</p>
                        </a>
                    </li> -->
                </ul>
            </div>
        </div>
    </div>
    <!-- End Sidebar -->