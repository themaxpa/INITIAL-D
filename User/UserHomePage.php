<?php
session_start();
include '../connection/dbconnection.php';
@$uid = $_SESSION['login_id'];
// echo $uid;
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Initial D</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">


  <!-- Font Awesome  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
  <link href="../assets/css/login.css4 " rel="stylesheet">
  <style>
    /* =========== */
    #hero {
      background-image: url('../assets/img/project-img/347842.jpg');
      margin-top: 0px;
    }

    body {
      cursor: url("./assets/img/Cursor/cursor.png"), auto;
    }

    .header-app {
      position: relative;
      margin-top: 70px;
      background-color: #ee244e;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 10vh;
    }

    .id-card-body {
      padding-left: 15px;
      width: auto;
      height: 349px;
      color: #fff;
      background-color: #20232b;
      border-radius: 0px 0px 15px 15px;
    }

    .wwa {
      display: none;
    }

    .social {
      width: 100%;
      display: flex;
      justify-content: end;
      margin-top: 50px
    }

    .carousel-control-pre .carousel-control-prev-icon span {
      background-color: transparent;
    }

    .items4 {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-right: 160px;
      gap: 20px;
    }

    .search-bar-items {
      color: #fff;
      font-weight: 500;
    }

    .carousel-bx3 {
      border-radius: 10px;
      height: 55px;
      width: 235px;
      padding-left: 20px;
      padding-top: 15px;
      font-size: 15px
    }

    .carousel-bx31 {
      padding-top: 15px;
      font-size: 12px;
    }

    .carousel-bx3 {
      transform: skew(-20deg);
      background-color: transparent;
      border: 1px #fff solid;
      color: #fff;
      text-decoration: none;
      display: inline-block;
      font-weight: 900;
      font-size: 12px;

      height: 45px;
      width: 185px;
      text-transform: uppercase;
      padding: 13px 5px;
      border-radius: 10;
      margin-left: 26px;
    }

    .carousel-bx31 {
      transform: skew(-20deg);
      background-color: transparent;
      border: 1px #fff solid;
      color: #fff;
      text-decoration: none;
      display: inline-block;
      font-size: 12px;
      font-weight: 900;
      height: 45px;
      width: 205px;
      text-transform: uppercase;
      padding: 13px 5px;
      border-radius: 10px;
      margin-left: 15px;
    }

    /* Search input */
    .input-container {
      position: relative;
      margin: 50px auto;
      width: 130px;
    }

    .input-container input[type="text"] {
      font-size: 20px;
      width: 100%;
      border: none;
      border-bottom: 2px solid #fff;
      padding: 5px 0;
      background-color: transparent;
      outline: none;
    }

    .input-container .label {
      position: absolute;
      top: 0;
      left: 0;
      color: #fff;
      transition: all 0.3s ease;
      pointer-events: none;
    }

    .input-container input[type="text"]:focus~.label,
    .input-container input[type="text"]:valid~.label {
      top: -20px;
      font-size: 16px;
      color: #ee244e;
    }

    .input-container .underline {
      position: absolute;
      bottom: 0;
      left: 0;
      height: 2px;
      width: 100%;
      background-color: #ee244e;
      transform: scaleX(0);
      transition: all 0.3s ease;
    }

    .input-container input[type="text"]:focus~.underline,
    .input-container input[type="text"]:valid~.underline {
      transform: scaleX(1);
    }

    /* End search */


    /* Carousel */
    .d-block w-100 {
      height: 600px;
      opacity: 0.3;
    }

    .phone-carousel {
      display: none;
    }

    .ph-login {
      display: none;
    }

    .pppT {
      padding-left: 70px;
      font-size: 20px;
    }

    /* Media Query =====================================================================================================================================
===================================================================================================================================================*/
    @media (max-width: 480px) {
      #hero {
        background-image: url('../assets/img/phone393/ph7.jpg');
        margin-top: 0px;
      }

      .card-D {
        margin: 50px 0px 60px 12px;
        width: 300px;
        height: 530px;
        border-radius: 20px;
        background-color: #343a40;
      }

      .stb-or-btn {
        width: 100%;
        height: 60px;
        display: flex;
        padding-left: 0px;
        padding-top: 15px;
      }

      .ph-login {
        display: flex;
        margin-left: 15px;
      }

      /* carousel */
      .desktop-carousel {
        display: none;
      }

      .phone-carousel {
        display: flex;

        margin-bottom: 23px;
      }


      /* end */
      .wwa {
        display: flex;
        position: absolute;
        z-index: 1;
        color: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: -60px;
        margin-left: 25px;
      }

      .wwa h5 {
        font-size: 10;
      }

      .counts .counters span {
        font-size: 50px;
        display: block;
        margin-top: 130px;
        font-weight: 700;
        color: #ee244e;
      }

      .counts .counters p {
        padding: 0;
        margin: 0 0 20px 0;
        font-family: "Raleway", sans-serif;
        font-size: 15px;
        color: #fff;
      }

      .account-btn {
        display: none;
      }

      .app-title .p-txt {
        color: #fff;
        font-weight: 600;
        font-size: 10px;
      }

      .carousel-bx3 {
        display: none;
      }

      .carousel-bx31 {
        display: none;
      }

      .title h1 {
        margin: 360px 0 10px 0px;
        font-weight: 700;
        line-height: 40px;
        color: #fff;
      }

      #hero h1 {
        font-size: 30px;
        line-height: 36px;
      }

      #hero h2 {
        font-size: 10px;
        line-height: 24px;
        margin-bottom: 40px;

        margin-top: 185px;
      }

      .search-bar {
        display: flex;
        align-items: center;
        width: 50%;
        height: 0vh;
        margin: 0 auto;
        font-size: 8px;
        max-width: 300px;
        padding: 0px 0px;
        position: relative;
        border-radius: 10px;
        transform: skew(-20deg);
        background-color: #20232b;
        margin: 60px 0px 0px 0px;
        /* border: 1px solid #fff; */
      }

      .search-bar-search {
        height: 20px;
        width: 50px;
        background-color: transparent;
        transform: skew(-20);
        border-radius: 10px;
        font-size: 10px;
        border-radius: 10px;
      }

      .search-bar-items {
        height: 30px;
        width: 50px;
        background-color: transparent;
        /* border: 1px solid #fff; */
        transform: skew(-20);
        border-radius: 10px;
        font-size: 8px;
        border-radius: 6px;
      }

      .search-bar-items sub {
        margin-left: 0px;
      }

      .search-icon {
        color: #fff;
        background-color: #ee244e;
        width: 39px;
        height: 35px;
        padding: 12px;
        margin-right: -145px;
        border-radius: 10px;
        font-size: 16px;
        font-size: 10px;
      }

      .items4 {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-right: 145px;
        gap: 10px;
      }

      .wrapper-title {
        display: flex;
        justify-content: center;
        align-items: center;
        color: #fff;
        font-size: 20px;
        padding-top: 40px;
        padding-left: 25px;
      }

      .all-track-title h3 {
        font-size: 20px;
      }

      .all-track-padding {
        padding-inline: 13px;
      }

      .pppT {
        padding-left: 25px;
      }

      .ppp {
        padding-left: 35px;
        /* border: 1px solid #fff; */
        width: 375px;
        margin-left: 90px;
        height: 20vh;
        font-size: 10px;
        padding: 20px;
      }

      .all-tracks-btn {
        border-radius: 10px;
        background: transparent;
        transform: skew(-20deg);
        color: #fff;
        border: 1px solid #fff;
        width: 180px;
        height: 45px;
        margin: 0px 0px 0px 185px;
        padding: 10px 18px;
        font-size: 17px;
        font-weight: 900;
        text-transform: uppercase;
      }

      .cta h3 {
        color: #fff;
        font-size: 12px;
        font-weight: 700;
        margin-bottom: -18px;
      }

      .cta .cta-btn {
        font-family: "Raleway", sans-serif;
        font-weight: 500;
        font-size: 7px;
        letter-spacing: 1px;
        display: inline-block;
        padding: 12px 15px;
        border-radius: 2px;
        transition: 0.5s;
        margin-top: -40px;
        margin-left: 285px;
        background: #ee244e;
        color: #fff;
        border-radius: 10px;
      }

      .filler {
        width: 100%;
        height: 20vh;
      }

      .f-title {
        display: flex;
        justify-content: center;
        color: #fff;
        font-size: 12px;
        margin-top: -60px;
        /* border: 1px solid #fff; */
        padding-inline: 0px;
        padding-left: 25px;
      }

      .f-sub-title {
        color: #fff;
        font-weight: 400;
        display: flex;
        justify-content: center;
        text-transform: uppercase;
        font-size: 12px;
        letter-spacing: 1px;
      }

      .achivement {
        display: none;
      }

      .achivement p {
        display: none;
      }

      .container {
        max-width: 100%;
        margin: auto;
        height: 70vh;
      }

      /* footer */
      .bottom-nav-list li {
        display: none;
      }

      .news-letter1 {
        color: #fff;
        height: 5vh;
        border-radius: 5px 0px 0px 5px;
        background-color: #20232b;
        border: solid 1px #fff;
      }

      .news-letter2 {
        color: #fff;
        height: 5vh;
        width: 70px;
        border-radius: 0px 5px 5px 0px;
        background-color: #ee244e;
        border: solid 1px #fff;
        font-size: 10px;
        padding: 5px;
      }

      .social p {
        font-size: 5px;
        margin-right: 0px;
      }

      /* End footer */

    }




    .both-div {
      background-color: rgba(0, 0, 0, 0.6);
      backdrop-filter: blur(100px);
      display: flex;
      justify-content: center;
      align-items: center;
      width: 80%;
      height: 80%;
      border-radius: 20px;
    }

    .div1 {
      justify-content: center;
      align-items: center;
    }

    .div1,
    .div2 {
      width: 50%;
      height: 50vh;
      /* border: 1px solid black; */
      padding: 20px;
    }

    .div2 img {
      width: 100%;
      height: 100%;
      background-size: cover;
      border-radius: 20px;
    }

    .video-div2 {
      width: 100%;
      height: 100%;
    }




    /* ========== */

    .id-card-body {
      padding-left: 15px;
      width: auto;
      height: 349px;
      color: #fff;
      background-color: #20232b;
      border-radius: 0px 0px 15px 15px;
    }

    .header-app {
      position: relative;
      margin-top: 70px;
      background-color: #ee244e;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 10vh;
    }

    .wwa {
      display: none;
    }

    .social {
      width: 100%;
      display: flex;
      justify-content: end;
      margin-top: 50px
    }

    .carousel-control-pre .carousel-control-prev-icon span {
      background-color: transparent;
    }

    .items4 {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-right: 160px;
      gap: 20px;
    }

    .search-bar-items {
      color: #fff;
      font-weight: 500;
    }

    .carousel-bx3 {
      border-radius: 10px;
      height: 55px;
      width: 235px;
      padding-left: 20px;
      padding-top: 15px;
      font-size: 15px
    }

    .carousel-bx31 {
      padding-top: 15px;
      font-size: 14px
    }

    .carousel-bx3 {
      transform: skew(-20deg);
      background-color: transparent;
      border: 1px #fff solid;
      color: #fff;
      text-decoration: none;
      display: inline-block;
      font-size: 13px;
      font-weight: 900;
      height: 45px;
      width: 185px;
      text-transform: uppercase;
      padding: 13px 5px;
      border-radius: 10;
      margin-left: 26px;
    }

    .carousel-bx31 {
      transform: skew(-20deg);
      background-color: transparent;
      border: 1px #fff solid;
      color: #fff;
      text-decoration: none;
      display: inline-block;
      font-size: 12px;
      font-weight: 900;
      height: 45px;
      width: 185px;
      text-transform: uppercase;
      padding: 13px 5px;
      border-radius: 10px;
      margin-left: 26px;
    }

    .title-h1 {
      margin: 60px 0 10px 0;
      font-size: 70px;
      font-weight: 700;
      line-height: 86px;
      color: #fff;
    }

    .all-tracks-btn {
      border-radius: 10px;
      background: transparent;
      transform: skew(-20deg);
      color: #fff;
      border: 1px solid #fff;
      width: 200px;
      height: 45px;
      margin: 20px 0px 0px 240px;
      padding: 10px 18px;
      font-size: 17px;
      font-weight: 900;
      text-transform: uppercase;
    }

    .ppp {
      padding-left: 50px;
    }

    .stb-or-btn {
      margin: 20px 0px 0px -70px;
    }

    .achivement {
      margin-left: 270px;
    }

    .social p {
      color: #fff;
      opacity: 0.4;
      margin-right: 250px;
      font-weight: 400
    }


    .cta .container {
      height: 25vh;
    }

    .cta {
      background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url("../assets/img/project-img/traffic-light.jpg") fixed center;
      background-size: cover;
      padding: 60px 0;
    }

    /* Carousel */
    .d-block w-100 {
      height: 600px;
      opacity: 0.3;
    }

    .phone-carousel {
      display: none;
    }


    @media (max-width: 480px) {
      .title-h1 {
        margin: 330px 0 10px 0;
        font-size: 30px;
        font-weight: 700;
        line-height: 36px;
        color: #fff;
      }

    }
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-9 d-flex align-items-center justify-content-lg-between">
          <a href="./UserHomePage.php" class="logo me-auto me-lg-0"><img src="../assets/img/D LOGO.png" alt="" class="img-fluid"></a>

          <!-- <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><h1  class="h1-txt">User</h1></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="./UserProfile.php">Profile</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="../Logout.php">Log Out</a></li>
              </ul>
            </div> -->
          <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
              <li><a class="nav-link scrollto active" href="./TrackDay.php">Track Days</a></li>
              <!-- <li><a class="nav-link scrollto" href="./Organizer.php">Organizer</a></li> -->
              <li><a class="nav-link scrollto" href="./RacingTeam.php">Racing Team</a></li>
              <li><a class="nav-link scrollto " href="./CorporateEvent.php">Corporate Event</a></li>
              <li><a class="nav-link scrollto " href="./ContactUs.php">Contact</a></li>
              <!-- <li class="dropdown"><a href="#"><span>Circuit</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="#">Cars</a></li>
                  <li class="dropdown"><a href="#"><span>Bikes</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                      <li><a href="#">Deep Drop Down 1</a></li>
                      <li><a href="#">Deep Drop Down 2</a></li>
                      <li><a href="#">Deep Drop Down 3</a></li>
                      <li><a href="#">Deep Drop Down 4</a></li>
                      <li><a href="#">Deep Drop Down 5</a></li>
                    </ul>
                  </li>
                  <li><a href="#">NASCAR</a></li>
                  <li><a href="#">Drop Down 3</a></li>
                  <li><a href="../AllTracks.php">All Tracks</a></li>
                </ul>
              </li> -->
              <li class="nav-item d-block d-lg-none">
              </li><!-- End Search Icon-->
              <?php

              $dqry = "SELECT * FROM `user_login` JOIN `user_registration` ON `user_login`.`reg_id`= `user_registration`.`reg_id` where login_id='$uid'";
              // echo $dqry;
              $result = mysqli_query($con, $dqry);
              if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                  $rid = $row['reg_id'];

              ?>

                  <li class="nav-item dropdown pe-3">
                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                      <img style="width:40px;height:40px" src="./images/<?php echo $row['image']; ?>" alt="Profile" class="rounded-circle">
                      <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo  $row["first_name"]; ?></span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                      <li class="dropdown-header">
                        <h6><?php echo  $row["first_name"]; ?> <?php echo  $row["last_name"]; ?></h6>
                        <span>Web Designer</span>
                      </li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>

                      <li>
                        <a class="dropdown-item d-flex align-items-center" href="./UserProfile.php?rid=<?php echo  $row["reg_id"]; ?>">
                          <i class="bi bi-person"></i>
                          <span>My Profile</span>
                        </a>
                      </li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>

                      <li>
                        <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                          <i class="bi bi-gear"></i>
                          <span>Account Settings</span>
                        </a>
                      </li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>

                      <li>
                        <a class="dropdown-item d-flex align-items-center" href="./Histroy.php">
                          <i class="bi bi-question-circle"></i>
                          <span>History</span>
                        </a>
                      </li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>

                      <li>
                        <a class="dropdown-item d-flex align-items-center" href="../Logout.php">
                          <i class="bi bi-box-arrow-right"></i>
                          <span>Sign Out</span>
                        </a>
                      </li>
                    </ul>
                <?php
                }
              }
                ?>
                <!-- End Profile Dropdown Items -->
                  </li><!-- End Profile Nav -->
            </ul>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
        </div>
      </div>
    </div>
  </header><!-- End Header -->
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center">

    <div class="container">
      <div class="row justify-content-center">
        <div class="title">
          <h1 class="title-h1">
            YOUR TRACKDAY MARKETPLACE
          </h1>
        </div>
        <h2 style=" font-family:myFont;">Search. Book. Drive. Repeat.</h2>
      </div>
      <div class="search-bar">
        <div class="search"></div>
        <div class="search-bar-items"></div>
        <div class="search-bar-items"></div>
        <div class="search-bar-items"></div>
        <div class="search-icon">
          <i class="fas fa-search"></i>
        </div>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">
    <!--===== Track Section ======--->
    <section class="track-card">
      <div class="wrapper" style="background-color:#ee244b;">
        <h1 class="wrapper-title">TRACK DAYS AND DRIVING EXPERIENCES 2024</h1>
        <div class="track-section" style=" display: flex;">

          <?php
          $qry = "SELECT `track_id`,`vendor_id`,`image`,`track_name`,`event`,`date`,`vehicle_type`,`category`,`organizer`,`noise_level`,`price` FROM `tracks`";
          // echo $qry;
          $data = mysqli_query($con, $qry);

          if ($data->num_rows > 0) {
            while ($row = $data->fetch_assoc()) {
              $uid = $row['vendor_id'];
          ?>
              <!--== Track===-->
              <div class="card-D" style=" width: 370px; height: 530px;" ;>
                <div class="id-card--top-image-container">
                  <img style="border-radius:15px 15px 0px 0px; width: 370px; height: 200px;" loading="lazy" class="card-img-top" src="../Vendor\images\<?php echo $row['image']; ?>" alt="Preview Image" />
                </div>
                <div class="id-card-body">
                  <div class="id-body-header">

                    <h5 class="portfolio-title header--title text-white">
                      <?php echo  $row["track_name"]; ?>
                    </h5>
                    <p>
                      <?php echo  $row["event"]; ?>
                    </p>
                  </div>
                  <div class="body">
                    <div class="row mt-4">
                      <div class="flex-columns">
                        <div class="col-12 flex-column p-0 pr-2">
                          <div class="value start-date">
                            <i class="bi bi-calendar2"></i>
                            <?php echo  $row["date"];  ?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row mt-2">
                      <div class="flex__columns">
                        <div class="col-12 flex-column p-0 pr-2">
                          <div class="value">
                            <i class="fa-solid fa-car"></i>
                            <?php echo  $row["vehicle_type"];  ?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row mt-2">
                      <div class="flex__columns">
                        <div class="col-12 flex-column p-0 pr-2">
                          <div class="value">
                            <i class="bi bi-flag-fill"></i>
                            <?php echo  $row["category"];  ?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row mt-2">
                      <div class="flex__columns">
                        <div class="col-12 flex-column p-0 pr-2">
                          <div class="value">
                            <i class="bi bi-building-fill"></i>
                            <a rel="alternate" href="" hreflang="en">
                              <?php echo  $row["organizer"];  ?>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row mt-4">
                      <div class="flex__columns">

                        <div class="col-6 flex-column p-0 pl-2">
                          <div class="caption-text">

                          </div>
                          <div class="value"><?php echo  $row["noise_level"];  ?></div>
                        </div>
                      </div>
                    </div>
                    <div class="row mt-4">
                      <div class="flex__columns">
                        <div class="col-6 flex-column p-0 pr-2" style="margin:0px 0px 0px 65px;">

                          <div class="price">
                            <a rel="alternate" class="track-price" href="./TrackBooking.php?id=<?php echo  $row["track_id"]; ?>" hreflang="en">
                              <button style="  width: 150px;height: 45px; font-weight: 900;font-size: 22px;     margin: -5px 0px 0px 120px;">
                                <?php echo  $row["price"];  ?>
                              </button>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          <?php
            }
          } ?>
          <!--End item -->

        </div>
      </div>
    </section><!--End Track Section --->

    <!-- ======= all tracks Section ======= -->
    <div class="all-tracks">
      <div class="all-track-padding">
        <div class="all-track-title">
          <h3 class="h1-txt" style=" font-size:30px;">Book your event dates with a few clicks</h3>
        </div>
        <p class="p-txt" style="padding-left: 50px;">We offer a wide range of track day dates for cars and bikes, driving and riding experience as well as test days for racing teams. Easily bookable, independently from the corresponding organizer.</p>
      </div>
      <div class="stb-or-btn">
        <a href="./UserAllTracks.php" class="all-tracks-btn">All track days</a>
      </div>
    </div><!--=== End all tracks Section ===== -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">

      <div class="container">
        <div class="col-lg-9 text-center text-lg-start">
          <h3 style="font-family:myFont; "> Start your track experience on Initial D</h3>
          <p>Your on-track experience starts with Initial D. Book your track day, your driving or riding experience or test days for your race team with us - with just a few clicks, secure online payment and independently from the event organizers.</p>
          <a class="cta-btn align-middle" href="#">Book Now</a>

        </div>
      </div>
    </section><!-- End Cta Section -->
  </main>


  <!-- ======= Clients Section========= -->
  <section>
    <!-- End filler -->
    <section>
      <div class="filler">
        <div class="index-sec-title">
          <h1 class="f-title">We aim to create new standards in the track day market</h1>
          <h4 class="f-sub-title">And keep them evolving</h4>






        </div>
    </section><!-- End filler -->
  </section> <!-- End Clients Section-->


  <!-- ======= Counts Section ======= -->
  <section id="counts" class="counts">
    <div class="container">

      <div class="achivement" style="margin-left: 270px;">
        <h3>What we have achieved so far</h3>
        <p>Iusto et labore modi qui sapiente xpedita tempora et aut non ipsum consequatur illo.</p>
      </div>

      <div class="row counters position-relative">

        <div class="col-lg-3 col-6 text-center">
          <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
          <p>Tracks</p>
        </div>

        <div class="col-lg-3 col-6 text-center">
          <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
          <p>Projects</p>
        </div>

        <div class="col-lg-3 col-6 text-center">
          <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
          <p>Hours Of Support</p>
        </div>

        <div class="col-lg-3 col-6 text-center">
          <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
          <p>Hard Workers</p>
        </div>

      </div>

    </div>
  </section><!-- End Counts Section -->




  <!-- ======= Faq Section ======= -->
  <section id="faq" class="faq">
    <div class="container-fluid">

      <div class="row">

        <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

          <div class="content">
            <h3 style="color: #fff; word-spacing:5px; font-family:myFont; "> <strong>Initial D</strong></h3>

          </div>

          <div class="accordion-list">
            <ul>
              <li>
                <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1" style="font-family:myFont; text-transform:uppercase; color:#ee244b"> Single platform <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                  <p style="font-family:myFont; ">

                    Book track days, driving experiences or test days independently from the organizer's website and your preferred device: Web or app - we support both!
                  </p>
                </div>
              </li>

              <li>
                <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed" style="font-family:myFont; text-transform:uppercase; color:#ee244b"> Simplified booking <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                  <p style="font-family:myFont; ">
                    Complete your booking with just a few clicks from your customer profile and make use of a virtual vehicle garage. Simply choose from >66,000 vehicles.
                  </p>
                </div>
              </li>

              <li>
                <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed" style="font-family:myFont; text-transform:uppercase; color:#ee244b"> Secure payment <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                  <p style="font-family:myFont; ">
                    You pay the organizer directly, not us. Our payment just connects you with the organizer's bank accounts and transfers the applicable fee directly.
                  </p>
                </div>
              </li>

              <li>
                <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed" style="font-family:myFont; text-transform:uppercase; color:#ee244b"> Customer-centric<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                  <p style="font-family:myFont; ">

                    Sick of completing PDF documents to book track days? So are we! We love good customer experience and want to share our passion with you.
                  </p>
                </div>
              </li>

            </ul>
            <button type="button" class="btn btn-danger"><a href="./information.php" style="font-family:myFont; ">More About Initial D</a></button>
          </div>

        </div>

        <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("../assets/img/D1.jpg");  margin-top: 40px;'>&nbsp;</div>
      </div>

    </div>
  </section><!-- End Faq Section -->

  <!-- Carousel Silde -->
  <div id="carouselExampleAutoplaying" class="carousel carousel-dark slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="../assets/img/carousel.jpg" class="d-block w-100" alt="..." style="opacity:0.3">
        <div class=" carousel-caption mb-5 d-md-block">
          <h1 style="margin: 0 0 40px 0; font-family:myFont; font-size: 62px; font-weight: 700;  line-height: 86px; color: #fff;"> YOUR BEST TRACK DAY EXPERIENCE START HERE </h1>
          <div class="content">
            <div class="carousel-bx1" style="border-radius:10px;">
              <a href="#">Book Now</a>
            </div>
            <div class="carousel-bx2" style="border-radius:10px;">
              <a href="#">Learn More</a>
            </div>
            <div class="carousel-bx3" style="border-radius:10px;">
              <a href="#">our team & investors</a>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="../assets/img/carousel-car.jpg" class="d-block w-100" alt="..." style="opacity:0.3">
        <div class=" carousel-caption d-none d-md-block">
          <h1 style="margin: -303px 0 40px 0; font-family:myFont;  font-size: 62px; font-weight: 700; line-height: 86px; color: #fff;">YOUR BEST MOTORSPORT TEST DAYS START HERE</h1>
          <div class="content">
            <div class="carousel-bx1" style="border-radius:10px;">
              <a href="#">Book Now</a>
            </div>
            <div class="carousel-bx2" style="border-radius:10px;">
              <a href="#">Learn More</a>
            </div>
            <div class="carousel-bx3" style="border-radius:10px;">
              <a href="#">our team & investors</a>
            </div>
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <img src="../assets/img/carousel-bike.jpg" class="d-block w-100" alt="..." style="opacity:0.3">
        <div class="carousel-caption d-none d-md-block">
          <h1 style="margin: -303px 0 0px 0; font-family:myFont; font-size: 60px; font-weight: 700; line-height: 86px; color: #fff; margin-bottom:11px">YOUR BEST MOTORBIKE TEST DAYS START HERE </h1>
          <div class="content">
            <div class="carousel-bx1" style="border-radius:10px;">
              <a href="#">Book Now</a>
            </div>
            <div class="carousel-bx2" style="border-radius:10px;">
              <a href="#">Learn More</a>
            </div>
            <div class="carousel-bx3" style="border-radius:10px;">
              <a href="#">our team & investors</a>
            </div>

          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- End Carousel Slide-->


  </main><!-- End #main -->

  <!--Subscribe Box-->
  <header>
    <nav id="navbar">
      <ul class="bottom-nav-list">
        <li><a href="#">How it<br>works</a></li>
        <li><a href="#about">advantages<br>Organizer</a></li>
        <li><a href="./UserAdvantagesCircuits.php">advantages<br>Circuits</a></li>
        <li><a href="#portfolio">Affiliate<br>Program</a></li>
        <li><a href="#portfolio">Our<br>partner</a></li>

        <form class="main-sub-email-box" action="./index.php" method="post">
          <div class="sub-email-box">
            <input type="email" class="news-letter1" placeholder="     newsletter@initial-D" style="padding-left: 10px;">
          </div>
          <div class="sub-email-box">
            <button type="submit" class="news-letter2">Subscribe</button>
          </div>
        </form>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav>
  </header> <!--End Subscribe Box-->

  <!-- ======= Footer ======= -->

  <footer class="footer" style="padding: 70px 10px 0px 10px;">
    <div class="container">
      <div class="row">
        <div class="footer-col">
          <h4>ABOUT US</h4>
          <ul>
            <li><a href="./HowWeWork.php">How we work</a></li>
            <li><a href="./OurResponsibility.php">Our responsibility</a></li>
            <li><a href="./PageNotFound.php">Our team & investors</a></li>
            <li><a href="./Career.php">Career</a></li>
            <li><a href="./News.php">News</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>SERVICES</h4>
          <ul>
            <li><a href="./Sustainability.php">Sustainability</a></li>
            <li><a href="./faq.php">FAQ/Help</a></li>
            <li><a href="./Terms&Conditions.php">Terms & conditions</a></li>
            <li><a href="./Privacy&Policy.php">Privacy & policy</a></li>
            <li><a href="./Imprint.php">Imprint</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>OUR OFFICES</h4>
          <ul>
            <li><a href="#">Rankestraße 6a, D-80796 Munich</a></li>
            <li><a href="#">Merkurring 82, D-22143 Hamburg</a></li>
            <li><a href="#">Pascalstraße 6, D-52076 Aachen</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>CONTACT US</h4>
          <ul>
            <li><a href="#">+91-11-2354-7279-0</a></li>
            <li><a href="#">+91-15449-239 18 23</a></li>
            <li><a href="#">@InitialDream.com</a></li>
          </ul>
        </div>
      </div>
      <div class="social" style="  width: 100%; display: flex; justify-content: end; margin-top:50px">
        <p style="color:#fff; opacity:0.4; margin-right:250px; font-weight:400">Initial D Booking &copy;2024. All rights reserved. Designed & Developed by <span class="designer">themaxpa</span>
        </p>
        <a href="https://x.com/?lang=en-in" style="margin: 0px 20px;"><i class="bi bi-twitter-x"></i></a>
        <a href="https://www.facebook.com/" style="margin: 0px 20px;"><i class=" bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/themaxpa?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" style="margin: 0px 20px;"><i class=" bi bi-instagram"></i></a>
        <a href="https://in.linkedin.com/" style="margin: 0px 20px;"><i class=" bi bi-linkedin"></i></a>
      </div>
    </div>
  </footer>

  <!-- End Footer -->
  <div id="preloader"> </div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center" style="background-color:#ee244b;"><i class="bi bi-arrow-up-short"></i></a>


  <!-- Vendor JS Files -->
  <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
  <script src="../assets/js/script.js"></script>

</body>

</html>