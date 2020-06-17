<?php
session_start();
include'includes/connection.php';
if (!isset($_SESSION['admin_id'])) {
    header("location:login.php");
}

?>
<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Required meta tags-->
        <!--<meta charset="UTF-8">-->
        <meta http-equiv="Content-Type" content="text/html;" charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="au theme template">
        <meta name="author" content="Hau Nguyen">
        <meta name="keywords" content="au theme template">

        <!-- Title Page-->
        <title>Dashboard</title>

        <!-- Fontfaces CSS-->
        <link href="css/font-face.css" rel="stylesheet" media="all">
        <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
        <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
        <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

        <!-- Bootstrap CSS-->
        <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

        <!-- Vendor CSS-->
        <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
        <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
        <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
        <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
        <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
        <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
        <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

        <!-- Main CSS-->
        <link href="css/theme.css" rel="stylesheet" media="all">
        <link href="css/mystyles.css" rel="stylesheet" media="all">
        

    </head>

    <body class="animsition">
        <div class="page-wrapper">
            <!-- HEADER MOBILE-->
            <header class="header-mobile d-block d-lg-none">
                <div class="header-mobile__bar">
                    <div class="container-fluid">
                        <div class="header-mobile-inner">
                            <a class="logo" href="index.html">
                                <img src="images/logo.png" width="120" height="90"alt="CoolAdmin" style="margin-left: 20px;"/>
                            </a>
                            <button class="hamburger hamburger--slider" type="button">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <nav class="navbar-mobile">
                    <div class="container-fluid">
                        <ul class="navbar-mobile__list list-unstyled">
                           <li>
                                <a href="manage_admin.php">
                                    <i class="fas fa-chart-bar"></i>Manage Admin</a>
                            </li>
                            <li>
                                <a href="manage_category.php">
                                    <i class="fas fa-chart-bar"></i>Manage Category</a>
                            </li>
                            <li>
                                <a href="manage_product.php">
                                    <i class="fas fa-chart-bar"></i>Manage Product</a>
                            </li>
                            <li>
                                <a href="manage_jobs.php">
                                    <i class="fas fa-chart-bar"></i>Manage Jobs</a>
                            </li>
                            <li>
                                <a href="manage_partners.php">
                                    <i class="fas fa-chart-bar"></i>Manage Partners</a>
                            </li>
                            <li>
                                <a href="manage_news.php">
                                    <i class="fas fa-chart-bar"></i>Manage News</a>
                            </li>
                           
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- END HEADER MOBILE-->

            <!-- MENU SIDEBAR-->
            <aside class="menu-sidebar d-none d-lg-block">
                <div class="logo">
                    <a href="../index.php">
                        <img src="images/logo.png" width="120" height="90" alt="Cool Admin" style="margin-left: 20px;" />
                    </a>
                </div>
                <div class="menu-sidebar__content js-scrollbar1">
                    <nav class="navbar-sidebar">
                        <ul class="list-unstyled navbar__list">
                            
                            <li class="has-sub">
                                <a class="js-arrow" href="manage_admin.php">
                                    <i class="fas fa-chart-bar"></i>Manage Admin</a>
                            </li>
                            <li>
                                <a href="manage_category.php">
                                    <i class="fas fa-chart-bar"></i>Manage Category</a>
                            </li>
                            <li>
                                <a href="manage_product.php">
                                    <i class="fas fa-chart-bar"></i>Manage Product</a>
                            </li>
                            <li>
                                <a href="manage_jobs.php">
                                    <i class="fas fa-chart-bar"></i>Manage Jobs</a>
                            </li>
                            <li>
                                <a href="manage_partners.php">
                                    <i class="fas fa-chart-bar"></i>Manage Partners</a>
                            </li>
                            <li>
                                <a href="manage_news.php">
                                    <i class="fas fa-chart-bar"></i>Manage News</a>
                            </li>
                           
                        </ul>
                    </nav>
                </div>
            </aside>
            <!-- END MENU SIDEBAR-->

            <!-- PAGE CONTAINER-->
            <div class="page-container">
                <!-- HEADER DESKTOP-->
                <header class="header-desktop">
                    <div class="section__content section__content--p30">
                        <div class="container-fluid" >
                            <div class="header-wrap" >
                                
                                <div class="header-button" style="width:200px;position:    absolute; right: 20px; top:-25px; margin-top:0px; ">


<?php 
$query = "SELECT * from admin where admin_id ={$_SESSION['admin_id']}";
$res   = mysqli_query($conn,$query);
$adminSet = mysqli_fetch_assoc($res);
?>      
                              
                                    <div class="account-wrap">
                                        <div class="account-item clearfix js-item-menu pull-right">
                                            <div class="content pull-right">
                                                <a class="js-acc-btn" href="#"><?php echo $adminSet["admin_fullname"]?></a>
                                            </div>
                                            <div class="account-dropdown js-dropdown">
                                                <div class="info clearfix">
                                                    <div class="image">
                                                        <a href="index.php">
                                                            <img src="admin/images/icon/Picsart2016-23-4--13-50-29.jpeg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="content">
                                                        <h5 class="name">
                                                            <a href="index.php">
                                                                <?php echo $adminSet["admin_fullname"]?>
                                                            </a>
                                                        </h5>
                                                        <span class="email"><?php echo $adminSet["admin_email"]?></span>
                                                    </div>
                                                </div>
                                                <div class="account-dropdown__footer">
                                                    <a href="logout.php">
                                                        <i class="zmdi zmdi-power"></i>Logout</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- HEADER DESKTOP-->
