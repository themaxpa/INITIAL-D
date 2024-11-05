<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Initial D</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">


  <!-- Font Awesome  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" type="text/css" rel="stylesheet">
  <link href="assets/css/popup.css" type="text/css" rel="stylesheet">
  <link href="assets/css/login.css" type="text/css" rel="stylesheet">
  <style>
    .price a button {
      margin: 10px 0px 0px 60px;
    }

    .achivement {
      color: #fff;
      position: relative;
      text-align: center;
    }

    .header-filler {
      width: 100%;
      height: 8dvh;
      background-color: #202232;
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
    width: 205px;
    text-transform: uppercase;
    padding: 13px 5px;
    border-radius: 10px;
    margin-left: 15px;
}
    .title-h1 {
      margin: 60px 0 10px 0;
      font-size: 70px;
      font-weight: 700;
      line-height: 86px;
      color: #fff;
    }

    /* Media Query =====================================================================================================================================
===================================================================================================================================================*/

    @media (max-width: 480px) {
      .stb-or-btn {
        width: 100%;
        height: 60px;
        display: flex;
        padding-left: 0px;
        padding-top: 15px;
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
    
    /* footer */
.bottom-nav-list  li{
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
.social p{
  font-size: 5px;
  margin-right: 0px;
}

    }
  </style>
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-9 d-flex align-items-center justify-content-lg-between">
          <a href="index.php" class="logo me-auto me-lg-0"><img src="assets/img/D LOGO.png" alt="" class="img-fluid" style=" max-height: 70px;"></a>

          <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
              <li><a class="nav-link scrollto active" href="./TrackDay.php">Track Days</a></li>
              <li><a class="nav-link scrollto" href="./Organizer.php">Organizer</a></li>
              <li><a class="nav-link scrollto" href="./RacingTeam.php">Racing Team</a></li>
              <li><a class="nav-link scrollto " href="./CorporateEvent.php">Corporate Event</a></li>
              <li class="dropdown"><a href="#"><span>Registration</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="./registration.php">user</a></li>
                  <li><a href="./VendorRegistration.php">Organizer</a></li>
                  <!-- <li class="dropdown"><a href="#"><span>Track 2</span> <i class="bi bi-chevron-right"></i></a> -->
                    <ul>
                      <!-- <li><a href="#">Karnataka</a></li> -->
                      <!-- <li><a href="#">Track 9</a></li>
                      <li><a href="#">Track 10</a></li> -->
                    </ul>
                  </li>
                  <!-- <li><a href="#">Track 3</a></li>
                  <li><a href="#">Track 4</a></li>
                  <li><a href="#">Track 5</a></li> -->
                </ul>
              </li>
              <!-- <li><a class="nav-link scrollto" href="#contact">Contact</a></li> -->
            </ul>

            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
          <a href="./account.php" class="account-btn" style=" font-size:30px"> 
            <i class="bi bi-person-circle"></i>
          </a>  
        </div>
      </div>
    </div>
  </header><!-- End Header col-xl-8 -->