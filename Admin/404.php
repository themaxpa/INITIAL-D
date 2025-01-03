
<?php
include '../connection/dbconnection.php';
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

    
    @media (max-width:480px) {
      .mobile-nav-toggle {
        display: flex;
      }


      .mobile-nav-toggle {
        color: #fff;
        font-size: 28px;
        cursor: pointer;
        display: flex;
        line-height: 0;
        transition: 0.5s;
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
                <a class="icon" href="./AdminIndex.php"> <img src="../assets/img/icons/back-button64px.png"></a>
                    <!-- <a href="./AdminHomePage.php" class="logo me-auto me-lg-0"><img src="../assets/img/D LOGO.png" alt="" class="img-fluid"></a> -->

                    <nav id="navbar" class="navbar order-last order-lg-0">
                    </nav><!-- .navbar -->
                </div>
            </div>
        </div>
    </header><!-- End Header -->






<style>
 .pnf-error-box h1{
margin: 0 0 10px 0; font-size: 70px; font-weight: 700; line-height: 86px; color: #fff;
}
@media (max-width:393px) {
    .pnf-error-box h1{
  margin: 0 0px 10px 0;
    font-size: 22px;
    font-weight: 700;
    line-height: 86px;
    color: #fff;
}
.pnf-error-box {
    color: #fff;
    width: 100%;
    height: 45vh;
    padding: 0px 0px 0px 0px;
    margin-left: 18px;
}
    
}


    /* button  back to home */
    /* From Uiverse.io by doniaskima */ 
.btn-23,
.btn-23 *,
.btn-23 :after,
.btn-23 :before,
.btn-23:after,
.btn-23:before {
  border: 0 solid;
  box-sizing: border-box;
}

.btn-23 {
  -webkit-tap-highlight-color: transparent;
  -webkit-appearance: button;
  background-color: #20232b;
  transform: skew(-20);
  background-image: none;
  color: #fff;
  cursor: pointer;
  font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont,
    Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif,
    Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
  font-size: 100%;
  font-weight: 900;
  line-height: 1.5;
  margin: 0;
  -webkit-mask-image: -webkit-radial-gradient(#000, #fff);
  padding: 0;
  text-transform: uppercase;
}

.btn-23:disabled {
  cursor: default;
}

.btn-23:-moz-focusring {
  outline: auto;
}

.btn-23 svg {
  display: block;
  vertical-align: middle;
}

.btn-23 [hidden] {
  display: none;
}

.btn-23 {
  border-radius: 99rem;
  border-width: 2px;
  overflow: hidden;
  padding: 0.8rem 3rem;
  position: relative;
}

.btn-23 span {
  display: grid;
  inset: 0;
  place-items: center;
  position: absolute;
  transition: opacity 0.2s ease;
}

.btn-23 .marquee {
  --spacing: 5em;
  --start: 0em;
  --end: 5em;
  -webkit-animation: marquee 1s linear infinite;
  animation: marquee 1s linear infinite;
  -webkit-animation-play-state: paused;
  animation-play-state: paused;
  opacity: 0;
  position: relative;
  text-shadow: #fff var(--spacing) 0, #fff calc(var(--spacing) * -1) 0,
    #fff calc(var(--spacing) * -2) 0;
}

.btn-23:hover .marquee {
  -webkit-animation-play-state: running;
  animation-play-state: running;
  opacity: 1;
}

.btn-23:hover .text {
  opacity: 0;
}

@-webkit-keyframes marquee {
  0% {
    transform: translateX(var(--start));
  }

  to {
    transform: translateX(var(--end));
  }
}

@keyframes marquee {
  0% {
    transform: translateX(var(--start));
  }

  to {
    transform: translateX(var(--end));
  }
}

    /* End Button */
</style>



<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-center" style="background-image: url('../assets/img/pnf.jpg');">
    <div class="container">
        <div class="row justify-content-center">
            <div class="pnf-title">
                <h1>
                    PAGE NOT FOUND (404)
                </h1>
            </div>
        </div>
    </div>
</section>
<!-- End Hero -->

<section>
    <div class="pnf-box">
        <div class="pnf-error-box">
            <h3>404, page not found</h3>
            <p>Uh oh, we can't seem to find the page you're looking for. Try going back to the previous page or see our Help Center for more infromation.</p>
            <div class="pnf-home-btn">
            <a href="./index.php">
<button class="btn-23">
  <span class="text">Home</span>
  <span aria-hidden="" class="marquee">Home</span>
</button>
</a>

            </div>
        </div>

    </div>
</section>

<section>
    <div class="pnf-bottom">
<marquee> <h5>The page you are looking for does not exist or another error occurred.</h5></marquee>
    </div>
</section>









<?php
include './AdminFooter.php';
?>