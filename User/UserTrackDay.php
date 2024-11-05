<?php
include '../connection/dbconnection.php';
include './UserHeader.php';
?>
<style>
  .title-td {
    width: 100%;
    height: 20vh;
    background-color: #ee244e;
    padding-top: 20px;
  }

  .td-flex {
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .td-search-date {
    width: 100%;
    height: 20vh;
    background-color: #20232b;
    padding-top: 20px;
    border: 1px solid #fff;
  }

  .container-cards {
    display: flex;
    flex-wrap: wrap;
    max-height: max-content;
    width: 100%;
    background-color: #20232b;
  }
</style>

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
<!-- title-d -->
<div class="title-td">
  <div class="td-flex">
    <h4 class="h1-txt">Wanna drive your car or ride your bike on a racetrack? </h4>
  </div>
  <div class="td-flex">
    <h4 class="h1-txt">-</h4>
  </div>
  <div class="td-flex">
    <h4 class="h1-txt">Centrally search and book from our wide range of track day dates.</h4>
  </div>
</div>
<!-- title- d end -->

<div class="td-search-date">
</div>

<section>
    <div class="container-cards">
      <?php
      $qry = "SELECT `vendor_id`,`image`,`track_name`,`event`,`date`,`vehicle_type`,`category`,`organizer`,`noise_level`,`price` FROM `tracks`";
      // echo $qry;
      $data = mysqli_query($con, $qry);

      if ($data->num_rows > 0) {
        while ($row = $data->fetch_assoc()) {
          $uid = $row['vendor_id'];
      ?>
          <!--== Track===-->
          <div class="card-D" style="width: 300px;height: 450px;">
            <div class="id-card--top-image-container">
              <img style="    border-radius: 15px 15px 0px 0px; width: 300px;height: 150px;" loading="lazy" class="card-img-top" src="Vendor\images\<?php echo $row['image']; ?>" alt="Preview Image" />
            </div>
            <div class="id-card-body"  style="padding: 10px;">
              <div class="id-body-header">

                <h5 class="portfolio-title header--title text-white">
                  <?php echo  $row["track_name"]; ?>
                </h5>
                <p>
                  <?php echo  $row["event"]; ?>
                </p>
              </div>
              <div class="body">
                <div class="row mt-4">
                  <div class="flex-columns">
                    <div class="col-12 flex-column p-0 pr-2">
                      <div class="value start-date">
                        <i class="bi bi-calendar2"></i>
                        <?php echo  $row["date"];  ?>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row mt-2">
                  <div class="flex__columns">
                    <div class="col-12 flex-column p-0 pr-2">
                      <div class="value">
                        <i class="fa-solid fa-car"></i>
                        <?php echo  $row["vehicle_type"];  ?>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row mt-2">
                  <div class="flex__columns">
                    <div class="col-12 flex-column p-0 pr-2">
                      <div class="value">
                        <i class="bi bi-flag-fill"></i>
                        <?php echo  $row["category"];  ?>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row mt-2">
                  <div class="flex__columns">
                    <div class="col-12 flex-column p-0 pr-2">
                      <div class="value">
                        <i class="bi bi-building-fill"></i>
                        <a rel="alternate" href="" hreflang="en">
                          <?php echo  $row["organizer"];  ?>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row mt-4">
                  <div class="flex__columns">

                    <div class="col-6 flex-column p-0 pl-2">
                      <div class="caption-text">

                      </div>
                      <div class="value"><?php echo  $row["noise_level"];  ?></div>
                    </div>
                  </div>
                </div>
                <div class="row mt-4">
                  <div class="flex__columns">
                    <div class="col-6 flex-column p-0 pr-2" style="margin:0px 0px 0px 65px;">

                      <div class="price">
                        <a rel="alternate" class="track-price" href="./TrackBooking.php" hreflang="en">
                          <button style=" width: 100px; height: 40px;font-weight: 600;font-size: 15px;margin: -40px 0px 0px 100px;">
                            <?php echo  $row["price"];  ?>
                          </button>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      <?php
        }
      } ?>
      <!--End item -->
    </div>
</section>
<div class="price">
                        <a rel="alternate" class="track-price" href=" " hreflang="en">
                          <button style="width: 140px;height: 50px;font-weight: 900;font-size: 19px; margin: 0px 0px 20px 15px;">
                          Load More
                          </button>
                        </a>
                      </div>

<?php
include './UserFooter.php';
?>