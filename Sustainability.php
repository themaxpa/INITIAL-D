<?php
include './connection/dbconnection.php';
include './header.php';
?>
<style>
.stb-doc {
    width: 100%;
    height: 60dvh;
    padding: 0px 120px;
    margin-top: 60px;
    padding-top: 25px;
}
.stb-reg-container {
    width: 500px;
    height: 200dvh;
    padding-top: 240px;
}
.stb-or-title {
    padding-top: 205px;
    display: flex;
    justify-content: center;
    align-items: center;
}
.stb-lm-btn {
    border-radius: 10px;
    background: transparent;
    transform: skew(-20deg);
    color: #fff;
    width: 150px;
    height: 45px;
    border: solid 1px #fff;
    margin: 0px 0px 0px 215px;
    padding: 10px 20px;
    font-size: 17px;
    font-weight: 600;
    text-transform: uppercase;
}
.sustain-container {
    width: 100%;
    height: 120dvh;
}
</style>

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-center" style="background-image: url('./assets/img/sust-bg.jpg'); height:90dvh;">
<div class="header-app">
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
      <div class="sustain-title">
        <h1 style="    margin: 50px 0px 0px 0px;font-size: 58px;font-weight: 700;line-height: 64px;color: #fff;">
          Carbon offset of on-track events
        </h1>
      </div>
      <div class="sustain-title2">
        <h1 style="font-family:myFont; color:#fff; font-size:35px; margin-top:-185px">Compensate the carbon footprint directly where it has been created</h2>
      </div>
    </div>
  </div>
</section><!-- End Hero -->

<!-- ======= sustain-container Section ======= -->
<section>
  <div class="sustain-container">
    <div class="sustanability-con">
      <h2 style="font-family:myFont; color:#fff; font-size:30px;">We offer circuits and track day organizers an easy way to offset the carbon footprint of on-track activities</h2>
    </div>

    <div class="img-title">
      <div class="display-img"> </div>
      <div class="how-to-compensate-txt">
        <h4 class="h1-txt">How to compensate</h4>
        <p class="p-txt">We automatically calculate the expected CO2 emissions of a customer's track day participation or an entire on-track event during the booking process.</p>
        <p class="p-txt">Depending on the vehicle type and model, type of fuel, duration of the track day, expected distance to be driven and other parameters. </p>
        <p class="p-txt">Our booking software calculates the amount that would have to be raised to compensate the carbon footprint via so-called offset projects, such as reforestation plants, wind farms or photovoltaic parks.</p>
      </div>
    </div>
  </div>
  <div class="sustain-container2" style=" width:100%; height:105vh; background-color:#1a3629">
    <div class="point-3-box">
      <div class="stb-row3">

        <i class="bi bi-calculator-fill" class="rounded-circle" style="font-size: 80px; color:#ee2442"></i>
        <h5 class="h1-txt">Automatic calculation of carbon footprint</h5>
      </div>
      <li class="ulX-txt" style="margin-bottom: 80px; padding-left:100px; margin-top: -60px;">The CO2 emission of a track day participant is calculated based on the vehicle type and model, type of fuel, track day duration and driven distance.</li>
      <div class="stb-row3">

        <i class="bi bi-patch-check" class="rounded-circle" style="font-size: 80px; color:#ee2442"></i>
        <h5 class="h1-txt">Purchase of CO2 certificates during booking process</h5>

      </div>
      <li class="ulX-txt" style="margin-bottom: 80px; padding-left:100px; margin-top: -35px;">The average carbon offset compensation for a two-day track day with a high-performance road-legal gasoline engine only costs between $5 - 20.</li>
      <div class="stb-row3">

        <i class="bi bi-tree-fill" class="rounded-circle" style="font-size: 80px; color:#ee2442"></i>
        <h5 class="h1-txt">Match of compensation project with circuit location</h5>

      </div>
      <li class="ulX-txt" style="margin-bottom: 80px; padding-left:100px; margin-top: -35px;">We match the circuit’s location with the address of available offset projects to ideally offset the CO2 emission where it has been created.</li>
    </div>
  </div>
</section> <!-- End sustain-container Section-->

<section>
  <div class="stb-doc">
    <h5 class="h1-txt">Our motivation to enable carbon-neutral on-track events</h5>
    <p class="p-txt" style="color:gray; opacity:0.6">Racing circuits such as the<a class="link-color" href="#">Nürburgring</a> often embedded in fascinating natural landscapes. And that is precisely what makes<br>these tracks so appealing. We see it as part of our responsibility to actively contribute to climate protection and the preservation<br>of our environment. As long as most of the vehicles used at trackdays are powerful internal combustion engines, CO2 emissions<br>can and should be compensated for through appropriate programs. And this is exactly the service we are now offering our<br>trackday marketplace end customers - simple, voluntary and directly integrated into the booking process.</p>
    <p class="p-txt" style="color:gray; opacity:0.6">We all cannot yet prevent climate-relevant emissions everywhere, but we can help to ensure that nitrogen oxides are either<br>bound by various measures or do not occur elsewhere in the first place. It is important to us to make this decision as easy as<br>possible for our customers. That's why we have created an interface on our website to the<a class="link-color" href="#">Cloverly</a> platform, which we<br>then use to select the appropriate offset project tailored to the customer's needs. It is important that the CO2 emissions are<br>offset as close as possible to the race track where they were produced. In this way, we not only ensure a healthier climate in the<br>long term, but also keep the environment around the world's most fascinating race tracks intact.</p>
  </div>


  <div class="sustain-container3">
    <div class="display-img2"> </div>
    <div class="pointbox">
      <div class="stb-3">
        <h2 class="h1-txt">Register an offset project at your track</h2>
        <h5 class="h1-txt" style="opacity: 0.6;">Compensate the carbon offset directly where it has<br>been created</h5>
        <p class="p-txt" style="font-size: 17px;">You have your own windmill, photovoltaic panels on the roof of your buildings or a reforestation project nearby the circuit? Simply contact us to register your offset project and benefit from our clients' compensation during their track day booking process.</p><br>
        <div class="sbt-flex" style="display:flex; gap:20px">
          <div class="display-stb-flex">
            <li class="ulX-txt"><i class="bi bi-file-earmark-x" style="font-size: 20px; font-weight:600"></i> Request a registration form</li><br>
            <li class="ulX-txt"><i class="bi bi-file-earmark-fill" style="font-size: 20px; font-weight:600"></i> Return the signed registration</li><br>
            <li class="ulX-txt"><i class="bi bi-search" style="font-size: 20px; font-weight:600"></i> Match your circuit and offset project</li><br>
          </div>

          <div class="display-stb-flex">
            <li class="ulX-txt"><i class="bi bi-tree" style="font-size: 20px; font-weight:600"></i> Benefit from clients' carbon offsets</li><br>
            <li class="ulX-txt"><i class="bi bi-currency-rupee" style="font-size: 20px; font-weight:600"></i> Receive payouts via Cloverly</li><br>
            <li class="ulX-txt"><i class="bi bi-hand-thumbs-up" style="font-size: 20px; font-weight:600"></i> Carbon offset linked to your circuit</li>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="sustain-container4" style=" height:150dvh">
    <div class="stb-reg-container">
      <form method="post">
        <h2 class="h1-txt" style="font-size: 29px; margin-top:20px;margin-bottom:15px;">Start registering your<br>Carbon Offset Project</h2>
        <label for="name" style="color: #fff;">Name</label><br>
        <input class="form-control" type="text" name="name" required style="border-radius: 20px; background-color:#2e2e2e"><br>

        <label for="email" style="color: #fff;">Email</label><br>
        <input class="form-control" type="email" name="email" required style="border-radius: 20px; background-color:#2e2e2e"><br>

        <label for="CompanyName" style="color: #fff;">Company Name</label><br>
        <input class="form-control" type="text" name="CompanyName" required style="border-radius: 20px; background-color:#2e2e2e"><br>

        <label for="phone" style="color: #fff;">Phone (optional)</label><br>
        <input class="form-control" type="text" name="phone" style="border-radius: 20px; background-color:#2e2e2e"><br>

        <label for="phone" style="color: #fff;">Your Message</label><br>
        <textarea class="form-control" name="message" rows="5" placeholder="Message" required style="border-radius: 20px; background-color:#2e2e2e; padding:12px"></textarea>
        <br>
        <input type="submit" class="form-control" name="submit" style="border-radius: 20px; background-color:#20232b; color:#fff;font-weight:800"><br>

        <?php
        if (isset($_REQUEST['submit'])) {
          echo "<script>window.location='./account.php'</script>";
        }
?>

        <div class="sustain-container5">
          <div class="stb-sub" style="margin-top: -24px;
                                margin-left: -199px;
                                width: 166%;">
            <sub class="ul-txt" style="color:#b8c2c7;">Never share sensitive information (credit card numbers, social security<br>numbers, passwords) through this form.</sub><br>
            <sub class="ul-txt" style="color:#b8c2c7;">This site is protected by reCAPTCHA and the Google <a href="https://policies.google.com/privacy?hl=en" style="color:#4f6cff;">Privacy Policy</a><a href="https://policies.google.com/terms?hl=en" style="color:#4f6cff;">of<br>Service</a> apply.</sub>
          </div>
        </div>
    </div>
    </form>
  </div>
</section>
<section>
  <div class="OurResponsibility">
    <div class="stb-or-title">
      <h1 class="h1-txt" style=" font-size:57px;">Our Responsibility</h1>
    </div>
    <div class="stb-or-btn">
      <a href="./OurResponsibility.php" class="stb-lm-btn">Learn More</a>
    </div>
  </div>
</section>


<?php

include './footer.php';
?>