<?php
include './connection/dbconnection.php';
include './header.php';
?>
<style>

  .iframe-map iframe{
    width: 100%;
    height:50vh;
  }
  .container {
    max-width: 1170px;
    margin: auto;
    margin-bottom: 50px;
}
.img-underline{
  height:3vh;
  width:auto;
}


/* Media query */
@media (max-width: 480px) {
  .section-title p {
    margin-bottom: 0;
    padding-left: 25px;
    font-size: 15px;
    margin-bottom: 15px;
}
}
</style>
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-center" style="background-image: url('./assets/img/project-img/track-wc1.jpg');">
    <div class="container">
        <div class="row justify-content-center">
            <div class="pnf-title" style="margin-top: -361px;">
                <h1>
                 Initial Dream 
                </h1>
            </div>
        </div>
    </div>
</section>
<!-- End Hero -->
<!-- <div class="header-filler" style="background-color: #20232b;"></div> -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact" style="background-color: #ee244b;">
  <div class="container">

    <div class="section-title">
      <h2>Contact</h2>
      <p style="color: #791329;">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
    </div>
  </div>

  <div class="iframe-map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3927.459127885142!2d76.26638177450998!3d10.143284170553917!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b081a7de3c840b9%3A0xd50a6450e17f506e!2sSNGIST%20ARTS%20AND%20SCIENCE%20College%20Manakkapady!5e0!3m2!1sen!2sin!4v1723870561879!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

  <div class="container">
<div class="row mt-5">
 <div class="col-lg-4">
        <div class="info">
          <div class="address">
            <i class="ri-map-pin-line"></i>
            <h4>Location:</h4>
            <p>A007 Maxpa Street, New York, NY 535022</p>
          </div>

          <div class="email">
            <i class="ri-mail-line"></i>
            <h4>Email:</h4>
            <p>alwinea69@gmail.com</p>
          </div>

          <div class="phone">
            <i class="ri-phone-line"></i>
            <h4>Call:</h4>
            <p>+91 6238559780</p>
          </div>
        </div>
      </div>
      <div class="col-lg-8 mt-5 mt-lg-0">
        <form action=" " method="post" role="form" class="php-email-form" style="background:transparent">
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit" style="margin-bottom:30px; background-color:#fff;color:#20232b;">Send Message</button></div>
        </form>

      </div>

    </div>

  </div>
</section><!-- End Contact Section -->
<div class="img-underline">
  <a href="./assets/img/#20232b.jpg"></a>
</div>



<?php

include './footer.php';
?>
