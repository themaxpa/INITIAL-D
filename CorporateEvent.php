<?php
include './connection/dbconnection.php';
include './header.php';
?>
<style>
  .ce-container {
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #ee244e;
    width: 100%;
    height: 200dvh;
    padding-top: 30px;
  }

  .form-control-ce {
    width: 100%;
    height: 40px;
    border-radius: 5px;
    font-size: 20px;
    padding: 0 17px;
    /* border: 1px solid #ee244e; */
    margin-bottom: 5px;
    border-radius: 20px;
    background-color: #2e2e2e;
  }

  .ce-title {
    width: 100%;
    height: 35vh;
    background-color: #20232b;
    padding-top: 20px;
    border: 1px solid #fff;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .ce-base {
    width: 100%;
    height: 100%;
    border: 1px solid #fff;
  }

  .containerCE {
    width: 100%;
    height: 100dvh;
    border: 1px solid #fff;
    display: flex;
  }
  .ce-p{
    border: 1px solid #ee244e;
width:100%;
height:10vh;
display: flex;
flex-wrap: wrap;
  }
  .row3-ce{
    margin-top: 40px;
    border: 1px solid #ee244e;

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

<section>
  <!-- Carousel Silde -->
  <div id="carouselExampleAutoplaying" class="carousel carousel-dark slide">
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center" style="background-image: url('./assets/img/track-wc.jpg'); background-size: cover;">
      <div class="header-app" style="margin-top: 70px; position:relative">
        <div class="app-title">
          <p class="p-txt" style="margin-top: 15px;">World's Best Track day app - Start your booking right!</p>
        </div>
        <div class="carousel-bx3">
          <a href="./assets/img/bike-slide(1).jpg"><i class="bi bi-apple"></i> Download app store</a>
        </div>
        <div class="carousel-bx31">
          <a href="https://play.google.com/store/apps?hl=en_IN"><i class="bi bi-google-play"></i> Download Google Play</a>
        </div>
      </div>

      <div class="container">
        <div class="row justify-content-center">
          <div class="title">
            <h1 class="title-h1" style="    margin: 60px 0 10px 0; font-size: 50px; font-weight: 700;line-height: 86px; color: #fff;">
              Central booking of corporate driving events
            </h1>
          </div>
        </div>
      </div>
    </section><!-- End Hero -->
    <div class="ce-title">
      <h3 class="h1-txt">Your one-stop-shop solution for racetrack incentives</h3>
    </div>

    <div class="containerCE">
      <div class="ce-base">
        <div class="row3-ce">
          <div class="stb-row3">
            <i class="bi bi-calculator-fill" class="rounded-circle" style="font-size: 40px; color:#ee2442"></i>
            <h5 class="h1-txt" style="color:#ee244e">Event overview</h5>
          </div>
          <div class="ce-p">
          <p class="p-txt">You can choose from a comprehensive overview of possible event dates, organisers and race tracks to quickly find suitable event options. Nothing suitable found? We can quickly search our network for alternatives that are not on the "menu".</p>
          </div>
        </div>

        <div class="ce-base">
          <div class="stb-row3">
            <i class="bi bi-calculator-fill" class="rounded-circle" style="font-size: 40px; color:#ee2442"></i>
            <h5 class="h1-txt" style="color:#ee244e">Event overview</h5>
          </div>
          <div class="ce-p">
          <p class="p-txt">You can choose from a comprehensive overview of possible event dates, organisers and race tracks to quickly find suitable event options. Nothing suitable found? We can quickly search our network for alternatives that are not on the "menu".</p>
          </div>
        </div>
      </div>

      <div class="ce-base">
        <!--== Track===-->
        <div class="card-D" style="width: 350px;height: 550px;background-color:#ee244e;">
          <div class="id-card--top-image-container">
            <img style="border-radius: 15px 15px 0px 0px; width: 350px; height: 200px;" loading="lazy" class="card-img-top" src="./assets/img/org.jpg" alt="Preview Image" />
          </div>
          <div class="id-card-body" style="padding: 30px;">
            <div class="id-body-header">

              <h5 class="h1-txt" style="font-size: 20px;"><br>
                Pre-event consulting
              </h5><br>
              <p class="p-txt">
                You are looking for some inspiration or recommendations for your client's event based on their group size, availability, preferred location or budget? Let's simply talk!
              </p>

              <div class="row mt-4">
                <div class="flex__columns">
                  <div class="col-6 flex-column p-0 pr-2" style="margin:0px 0px 0px 65px;">

                    <div class="price" style="margin-top: -25px;">
                      <a rel="alternate" class="track-price" href="./ContactUs.php" hreflang="en">
                        <button style=" width: 100px; height: 40px;font-weight: 600;font-size: 10px;margin: -40px 0px 0px -63px; border:solid 1px #fff;">
                          Contact US
                        </button>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>


  <section>
    <div class="ce-container">
      <div class="stb-reg-container">
        <form method="post">
          <h2 class="h1-txt" style="font-size: 29px; margin-top:20px;margin-bottom:15px;">Start registering your<br>Carbon Offset Project</h2>
          <label for="name" style="color: #fff;">Name</label><br>
          <input class="form-control-ce" type="text" name="name" required><br>

          <label for="email" style="color: #fff;">Email</label><br>
          <input class="form-control-ce" type="email" name="email" required><br>

          <label for="CompanyName" style="color: #fff;">Company Name</label><br>
          <input class="form-control-ce" type="text" name="CompanyName" required><br>

          <label for="phone" style="color: #fff;">Earliest event date</label><br>
          <input class="form-control-ce" type="text" name="earliest-edate" placeholder="mm/dd/yyyy"><br>

          <label for="phone" style="color: #fff;">Latest event date</label><br>
          <input class="form-control-ce" type="text" name="latest-edate" placeholder="mm/dd/yyyy"><br>

          <label for="phone" style="color: #fff;">Number of event dates</label><br>
          <input class="form-control-ce" type="text" name="earliest-edate"><br>

          <label for="phone" style="color: #fff;">Number of participants</label><br>
          <input class="form-control-ce" type="text" name="earliest-edate"><br>

          <label for="phone" style="color: #fff;">Preferred event region / location</label><br>
          <textarea class="form-control-ce" name="message" rows="5" placeholder="Message" required style="border-radius: 20px; background-color:#2e2e2e; padding:12px"></textarea>
          <br>
          <input type="submit" class="form-control-ce" name="submit" style="border-radius: 20px; background-color:#20232b; color:#fff;font-weight:800"><br>
          <br>
          <br>

          <div class="sustain-container5">
            <div class="stb-sub" style="margin-top: -24px;
                                margin-left: -199px;
                                width: 166%;">
              <sub class="ul-txt">Never share sensitive information (credit card numbers, social security<br>numbers, passwords) through this form.</sub><br>
              <sub class="ul-txt">This site is protected by reCAPTCHA and the Google <a href="https://policies.google.com/privacy?hl=en" style="color:#4f6cff;">Privacy Policy</a><a href="https://policies.google.com/terms?hl=en" style="color:#4f6cff;">of<br>Service</a> apply.</sub>
            </div>
          </div>
      </div>
      </form>
    </div>
  </section>

  <!-- Carousel Silde -->
  <div id="carouselExampleAutoplaying" class="carousel carousel-dark slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="./assets/img/carousel.jpg" class="d-block w-100" alt="..." style="height: 600px;opacity:0.3;">
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
        <img src="./assets/img/carousel-bike.jpg" class="d-block w-100" alt="..." style="height: 600px;opacity:0.3;">
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
        <img src="./assets/img/carousel-car.jpg" class="d-block w-100" alt="..." style="height:600px;opacity:0.3;">
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

  <?php
  include './footer.php';
  ?>