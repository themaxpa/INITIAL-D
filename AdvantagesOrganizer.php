<?php
include './connection/dbconnection.php';
include './header.php';
?>
<style>
      .carousel-bx1{
        background-color:transparent;
        border-radius:10px;
        color:#fff;
    }
    .carousel-bx1:hover{
        background-color:#fff;
        color:#ee244e;
    }
    .carousel-bx3 {
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
    border-radius: 10;
    margin-left: 26px;
}

</style>

<section id="hero" class="d-flex flex-column justify-content-center" style="background-image: url('./assets/img/org.jpg'); background-size: cover;">
  <div class="header-app" style="margin-top: 70px; position:relative">
    <div class="app-title">
      <p class="p-txt" style="margin-top: 15px;">World's Best Track day app - Start your booking right!</p>
    </div>
    <div class="carousel-bx3">
      <a href="https://www.apple.com/in/app-store/"><i class="bi bi-apple"></i> Download app store</a>
    </div>
    <div class="carousel-bx31">
      <a href="https://play.google.com/store/apps?hl=en_IN"><i class="bi bi-google-play"></i> Download Google Play</a>
    </div>
  </div>

  <div class="container">
    <div class="row justify-content-center">
      <div class="title">
        <h1 class="title-h1" style="    margin: 60px 0 10px 0; font-size: 70px; font-weight: 700;line-height: 86px; color: #fff;">
        Event organizer on our platform
        </h1>
      </div>
      <!-- <h2 style=" font-family:myFont;">Search. Book. Drive. Repeat</h2> -->
    </div>
    <div class="container">
      <div class="carousel-bx1">
        <a href="./VendorRegistration.php">Register Now</a>
      </div>
      <div class="carousel-bx2" style="border-radius:10px;">
        <a href="./HowWeWork.php">Learn More</a>
      </div>
    </div>
  </div>
</section><!-- End Hero -->


<?php
include './footer.php';
?>