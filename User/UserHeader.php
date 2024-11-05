<?php
// session_start();
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

    .search-bar {
      width: 100%;
      height: 15vh;
      display: flex;
      margin: 0 auto;
      font-size: 14px;
      max-width: 900px;
      padding: 16px 32px;
      position: relative;
      align-items: center;
      border-radius: 20px;
      transform: skew(-20deg);
      justify-content: center;
      background-color: #20232b;
      margin: 0px 150px -200px 150px;
    }

    .search-bar-search input {
      width: 100%;
      height: 100%;
      background-color: transparent;
      border: none;
      border-bottom: 1px solid #fff;
      margin-top: -140px;

    }

    .search-bar-search {
      height: 60px;
      width: 170px;
      background-color: transparent;
      transform: skew(-20);
      border-radius: 10px;
      font-size: 20px;
      border-radius: 10px;
    }

    .search-bar-items sub {
      margin-left: -50px;
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
                  <a class="nav-link nav-icon search-bar-toggle " href="#">
                    <i class="bi bi-search"></i>
                  </a>
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
                  <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo  $row["first_name"];?></span>
                  </a><!-- End Profile Iamge Icon -->

                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li class="dropdown-header">
                      <h6><?php echo  $row["first_name"];?> <?php echo  $row["last_name"];?></h6>
                      <span>Web Designer</span>
                    </li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>

                    <li>
                      <a class="dropdown-item d-flex align-items-center"  href="./UserProfile.php?rid=<?php echo  $row["reg_id"]; ?>">
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
                      <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                        <i class="bi bi-question-circle"></i>
                        <span>Need Help?</span>
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
            }}
?>
<!-- End Profile Dropdown Items -->
                 </li><!-- End Profile Nav -->
              </ul>
            </ul>
          </nav><!-- .navbar -->
        </div>
      </div>
    </div>
  </header><!-- End Header -->
