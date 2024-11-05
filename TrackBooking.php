<?php
include './connection/dbconnection.php';
include './header.php';
?>
<style>
  .track-details-container{
   display: flex;
   justify-content: center;
   align-items: center;
   gap: 30px;
  }

  
</style>
<!-- <div class="header-filler" style="background-color: #20232b;"></div> -->
<!-- ======= Hero Section ======= -->
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
        <h1 class="title-h1" style=" margin: 60px 0 10px 0; font-size: 70px; font-weight: 700;line-height: 86px; color: #fff;">
          Circuit Meppen
        </h1>
        <h2 class="h1-txt">Meppen drifttraining</h2>
      </div>
      <div class="track-details-container">
        <p class="p-txt" style=" font-size:15px"><i class="bi bi-calendar2"></i> 23.08.2024 - 23.08.2024</p>
        <p class="p-txt" style=" font-size:15px"> <i class="fa-solid fa-car"></i> Street-legal Car</p>
        <p class="p-txt" style=" font-size:15px"><i class="bi bi-flag-fill"></i> Trackday (Open pitlane)</p>
      </div>
      <p class="p-txt" style=" font-size:15px"><i class="bi bi-building-fill"></i>Nomad Driving Event</p>
    </div>

  </div>
</section><!-- End Hero -->
<div class="imprint-content2">
        <h1 class="h1-txt">Complete your trackday booking in a few clicks</h1>
        <p class="p-txt">EA initial D Booking GmbH assumes no responsibility for the completeness and/or accuracy of the published offers/information or for<br>any disadvantage or damage of any kind arising from use or non-use of same. Likewise, no responsibility is assumed for defects to<br>software or hardware or any losses ensuing from Internet programs used as part of the online content or data offered for download.</p>
        <h4 class="h1-txt">Disclaimer</h4>
        <p class="p-txt">EThe users shall indemnify HTA Circuit Booking GmbH against all damage claims arising from personal damage, claims and<br>encumbrances of all kind that ensue or which could ensue from using these websites.</p>
    </div>


<?php
include './footer.php';
?>