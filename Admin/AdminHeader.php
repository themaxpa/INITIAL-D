<?php
include '../connection/dbconnection.php';
?>

<!DOCTYPE html>
<html lang="en">
<style>
    .Container {
        background-image: url(../assets/img/wp12661363-bike-racing-4k-wallpapers.jpg);
        display: grid;
        background-position: center;
        background-size: cover;
        width: auto;
        height: 100dvh;
        background-attachment: scroll;
        padding: 145px;
    }

    .trackD-th {
        font-size: 20px;
        text-transform: uppercase;
    }
</style>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Initial D</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../assets/img/favicon.png" rel="icon">
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">


    <!-- Font Awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="./assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="./assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="./assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="./assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="./assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="./assets/css/style.css" type="text/css" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-9 d-flex align-items-center justify-content-lg-between">
                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown">
                            <h1 class="h1-txt" style="color:gray">Admin</h1>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                                <h6>Filter</h6>
                            </li>

                            <li><a class="dropdown-item" href="./Profile.php">Profile</a></li>
                            <li><a class="dropdown-item" href="#">This Month</a></li>
                            <li><a class="dropdown-item" href="../Logout.php">Log Out</a></li>
                        </ul>
                    </div>
                    <a href="./AdminHomePage.php" class="logo me-auto me-lg-0"><img src="../assets/img/D LOGO.png" alt="" class="img-fluid"></a>

                    <nav id="navbar" class="navbar order-last order-lg-0">
                        <ul>
                            <!-- <li><a class="nav-link scrollto active" href="./ViewUser.php">View User</a></li> -->
                            <!-- <li><a class="nav-link scrollto" href="./about.php">About</a></li>
                            <li><a class="nav-link scrollto" href="#services">Services</a></li>
                            <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
                            <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li> -->
                            <li class="dropdown"><a href="#"><span>View</span> <i class="bi bi-chevron-down"></i></a>
                                <ul>
                                    <li><a href="./ViewUser.php">User</a></li>
                                    <li class="dropdown"><a href="./ViewOrganizer.php"><span>Organizer</span> <i class="bi bi-chevron-right"></i></a>
                                        <ul>
                                            <!-- <li><a href="./ViewTracks.php">Race Tracks</a></li>
                                            <li><a href="#">Deep Drop Down 2</a></li>
                                            <li><a href="#">Deep Drop Down 3</a></li>
                                            <li><a href="#">Deep Drop Down 4</a></li>
                                            <li><a href="#">Deep Drop Down 5</a></li> -->
                                        </ul>
                                    </li>
                                    <li><a href="./ViewTracks.php">Race Tracks</a></li>
                                    <!-- <li><a href="#">Drop Down 3</a></li>
                                    <li><a href="#">Drop Down 4</a></li> -->
                                </ul>
                            </li>
                            <!-- <li><a class="nav-link scrollto" href="#contact">Contact</a></li> -->
                            <li><i class="bi bi-list mobile-nav-toggle"></i></li>
                        </ul>

                    </nav><!-- .navbar -->
                </div>
            </div>
        </div>
    </header><!-- End Header -->