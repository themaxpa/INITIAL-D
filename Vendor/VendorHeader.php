<?php
 include '../connection/dbconnection.php';
 @$uid = $_SESSION['login_id'];
 $qry = "SELECT * FROM user_login WHERE login_id='$uid'";
$result = mysqli_query($con, $qry);
$data = mysqli_fetch_assoc($result);
@$vendor_id = $data['vendor_id'];
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
  <link href="./assets/img/favicon.png" rel="icon">
  <link href="./assets/img/apple-touch-icon.png" rel="apple-touch-icon">


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
  <link href="./assets/css/VendorStyle.css" type="text/css" rel="stylesheet">
  <style>
    /*--------------------------------------------------------------
#  Custom Scrollbar
--------------------------------------------------------------*/
::-webkit-scrollbar {
  width: 10px;
}

::-webkit-scrollbar-track {
  background: #424242;
}

::-webkit-scrollbar-thumb {
  background: #fff;
  border-radius: 5px;
}
/* =========================================== */
.footer {
  background-color: black;
  padding: 70px 10px 0px 10px;
}
/* ========================================== */
    /*--------------------------------------------------------------
 card-D
--------------------------------------------------------------*/

    .preview-img-top img {
      width: 100%;
      height: 280px;
    }
    body{
      background-color: black;
    }

    .preview-card {
      margin: 130px 0px 60px 50px;
      width: 90%;
      height: 80%;
      border-radius: 20px;
      background-color: #20232b;
    }

    .preview-card-body {
      padding-left: 15px;
      margin-top: 5px;
      width: 100%;
      color: #fff;

    }

    .preview-caption-text {
      display: flex;
      justify-content: flex-start;
      color: #fff;
    }

    .preview-price a button {
      transform: skew(-20deg);
      width: 119px;
      height: 36px;
      border-radius: 10px;
      font-weight: 200;
      font-size: 15px;
      margin: 10px 0px 0px 60px;
      background-color: #ee244b;
      color: #fff;
      transition: 0.3s;
    }

    .preview-price a button:hover {
      background-color: #20232b;
      color: #ee244b;
      padding-left: 2px;
    }

    .preview-price {
      margin: 1px -396px 0px 345px;
      padding: 37px 49px -1px 0px;
    }

    .TheTrackDetails {
      display: flex;
      height: 100dvh;
    }
    .addTrack {
    width: 50%;
    padding-left: 100px;
    height: 100dvh;
    border-radius: 10px;
    background-color: black;
}
.addTrack h2 {
      margin-top: 20px;
    }

    .PreviewTrack {
    width: 35%;
    height: 100dvh;
    border-radius: 0px;
    background-color: #babcc5;
    border-radius: 50px 50px;
}
    .filler {
  background-color: black;
  max-width: auto;
  min-height:auto
}

.index-sec-title{
  padding-top: 80px;
  width: 100%;
  height: 100dvh;
 background-color: black;
}
#header.header-scrolled,
 #header.header-inner-pages {
  background: black;
}
.form-control-img{
width: 50%;
height: 5vh;
}
.form-control{
  width:50%;
  height: 5vh;
}
.add-container{
  height:100dvh;
}
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-xl-9 d-flex align-items-center justify-content-lg-between">
          <a href="./VendorHomePage.php" class="logo me-auto me-lg-0"><img src="./assets/img/D LOGO.png" alt="" class="img-fluid"></a>

          <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
              <li><a class="nav-link scrollto" href="#about">About</a></li>
              <li><a class="nav-link scrollto" href="#services">Services</a></li>
              <!-- <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
              <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li> -->

              <li class="dropdown"><a href="#"><span>Circuit</span> <i class="bi bi-chevron-down"></i></a>
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
              </li>
              <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          </nav><!-- .navbar -->
        </div>
      </div>
    </div>
  </header><!-- End Header -->

   

   

  