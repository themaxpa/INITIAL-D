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
<div class="header-filler" style="background-color: #20232b;"></div>

<!-- ======= Services Section ======= -->
<section id="services" class="services">
  <div class="container">

    <div class="section-title">
      <h2 class="h1-txt">Services</h2>
      <p class="p-txt">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
    </div>

    <div class="row">
      <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
        <div class="icon-box">
          <div class="icon"><i class="bx bxl-dribbble"></i></div>
          <h4><a href="">Lorem Ipsum</a></h4>
          <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
        <div class="icon-box">
          <div class="icon"><i class="bx bx-file"></i></div>
          <h4><a href="">Sed ut perspiciatis</a></h4>
          <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
        <div class="icon-box">
          <div class="icon"><i class="bx bx-tachometer"></i></div>
          <h4><a href="">Magni Dolores</a></h4>
          <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
        <div class="icon-box">
          <div class="icon"><i class="bx bx-world"></i></div>
          <h4><a href="">Nemo Enim</a></h4>
          <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
        <div class="icon-box">
          <div class="icon"><i class="bx bx-slideshow"></i></div>
          <h4><a href="">Dele cardo</a></h4>
          <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
        <div class="icon-box">
          <div class="icon"><i class="bx bx-arch"></i></div>
          <h4><a href="">Divera don</a></h4>
          <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
        </div>
      </div>

    </div>
  </div>
</section><!-- End Services Section -->


<div class="form-control">
    <input type="value" required="">
    <label>
        <span style="transition-delay:0ms">U</span><span style="transition-delay:50ms">s</span><span style="transition-delay:100ms">e</span><span style="transition-delay:150ms">r</span><span style="transition-delay:200ms">n</span><span style="transition-delay:250ms">a</span><span style="transition-delay:300ms">m</span><span style="transition-delay:350ms">e</span>
    </label>
</div>

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