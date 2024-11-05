<?php
include './connection/dbconnection.php';
include './header.php';
?>
<style>
  * {
    box-sizing: border-box;
  }

  .div-flex {
    display: flex;
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
    font-size: 12px;
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


  .P-txt {
    color: #fff;
    font-family: myFont !important;
    text-transform: uppercase;
  }

  .column {
    /* float: left; */
    width: 25%;
    padding: 10px;
    height: 300px;
  }

  .row:after {
    content: "";
    display: table;
    clear: both;
  }

  /*--------------------------------------------------------------
# Counts
--------------------------------------------------------------*/

  .facts-figure {
    background-color: #ee244e;
    background-size: cover;
    padding: 80px 0 60px 0;
    position: relative;
  }

  .facts-figure::before {
    content: "";
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
  }

  .facts-figure .achivement {
    position: relative;
    margin-bottom: 40px;
    color: #fff !important;
  }

  .facts-figure .achivement h3 {
    font-size: 36px;
    font-weight: 700;
    color: #fff;
  }

  .facts-figure .counters span {
    font-size: 48px;
    display: block;
    font-weight: 700;
    color: #fff;
  }

  .facts-figure .counters p {
    padding: 0;
    margin: 0 0 20px 0;
    font-family: "Raleway", sans-serif;
    font-size: 14px;
    color: #fff;
  }

  .achivement {
    color: #fff;
    position: relative;
    text-align: center;
  }

  .achivement {
    position: absolute;
    animation-name: SlideRight;
    animation-duration: 0.7s;
    animation-fill-mode: forwards;
    /*animation-delay: 0.2s; */
  }

  .achivement h3 {
    margin-left: -296px;
  }

  @media screen and (max-width: 2560px) {
    .header-app {
      background-color: #ee244e;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 10vh;
    }

    .feature-rt {
      background-color: #ee244e;
      height: 95dvh;
    }

    .app-title {
      padding-top: 0px;
     
    }

  }

  @media screen and (max-width: 1189px) {
    .app-title {
      padding-top: 5px;
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
  }
</style>
<section>
  <!-- Carousel Silde -->
  <div id="carouselExampleAutoplaying" class="carousel carousel-dark slide">
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center" style="background-image: url('./assets/img/slide-x.jpg'); background-size: cover;">
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
              Booking suitable test days was never easier
            </h1>
          </div>
          <!-- <h2 style=" font-family:myFont;">Search. Book. Drive. Repeat</h2> -->
        </div>
        <div class="container">
          <div class="carousel-bx1" style="border-radius:10px;">
            <a href="#">Book Now</a>
          </div>
          <div class="carousel-bx2" style="border-radius:10px;">
            <a href="#">Register</a>
          </div>
        </div>
      </div>
    </section><!-- End Hero -->
</section>

<!-- ======= Section ======= -->
<section id="" class="feature-rt">
  <div class="container">
    <div class="section-title">
      <h2 class="h1-txt" style="font-size:40px;display:flex;justify-content:center;margin-top:75px">Test dates find you from now on!</h2>
      <p class="P-txt">No time consuming research anymore</p>
    </div>

    <div class="row" style="margin-top:20px">

      <div class="column">
        <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4 class="h1-txt">Time-Saving</h4><br>
          <p class="p-txt">Book test days in one platform and pay online with one user profile. No time-consuming completion of PDF booking forms or chasing for invoices.</p>
          <!-- <a href="assets/img/Cardbox-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->
        </div>
      </div>
      <div class="column">
        <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4 class="h1-txt">Efficient</h4><br>
          <p class="p-txt">Logged-in users see a pre-sorted and -filtered list of events based on their personal preferences and booking history.</p>
        </div>
      </div>

      <div class="column">
        <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4 class="h1-txt">Relevant</h4><br>
          <p class="p-txt">Our self-developed algorithms automatically match championship calendars incl. test bans with available track and test days.</p>
        </div>
      </div>
      <div class="column">
        <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4 class="h1-txt">Expedient</h4><br>
          <p class="p-txt">Stop grazing various websites once a week! Receive alerts when your preferences and test days match. Like Tinder w/o swipping!</p>
        </div>
      </div>
    </div>
  </div>
</section><!-- End Portfolio Section -->

<!-- ======= Faq Section ======= -->
<section id="faq" class="faq">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">
        <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/thumb_2877_380_250_0_0_crop.jpg");  margin-top: 40px;'>&nbsp;</div>

        <div class="content">
          <!-- <h3 style="color: #fff; word-spacing:5px; font-family:myFont; "> <strong>Initial D</strong></h3> -->
        </div>


      </div>

    </div>

  </div>
</section><!-- End Faq Section -->

<!-- ======= Counts Section ======= -->
<section id="counts" class="facts-figure">
  <div class="container">

    <div class="achivement" style="margin-left: 270px; width:1180px;">
      <h3>Facts & Figures for racing teams</h3>
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
        <h1 class="h1-txt">
          Book your test days on your phone</h1>
        <h3 class="h1-txt">World's first app for track & test days</h3>
        <div class="div-flex">
          <div class="carousel-bx3">
            <a href="https://www.apple.com/in/app-store/"><i class="bi bi-apple"></i> Download app store</a>
          </div>
          <div class="carousel-bx31">
            <a href="https://play.google.com/store/apps?hl=en_IN"><i class="bi bi-google-play"></i> Download Google Play</a>
          </div>
        </div>
      </div>

      <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='margin-top: 40px;'>&nbsp;
        <iframe width="560" height="315" src="https://www.youtube.com/embed/3oxZR8Ok87A?si=TjKnqqj9tKzirH2x" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      </div>
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
      <img src="./assets/img/kike.jpg" class="d-block w-100" alt="..." style="height: 600px;opacity:0.3;">
      <div class=" carousel-caption mb-5 d-md-block">
        <h1 style="margin: 0 0 40px 0; font-family:myFont; font-size: 62px; font-weight: 700;  line-height: 60px; color: #fff;"> book your motor sport test days now</h1>
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

<?php
include './footer.php';
?>