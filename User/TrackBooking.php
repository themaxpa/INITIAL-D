<?php
session_start();
include '../connection/dbconnection.php';
include './UserHeader.php';
@$uid = $_SESSION['login_id'];
echo $uid;

$id = $_GET['id']; //Track ID
echo $id;
?>
<style>
  /*  description */
  .card {
    margin: 20px;
    padding-top: 15px;
    height: 70px;
    background: #353535;
    border-radius: 20px;
    display: flex;
    align-items: center;
    justify-content: left;
    backdrop-filter: blur(10px);
    transition: 0.5s ease-in-out;
  }

  .card:hover {
    cursor: pointer;
    transform: scale(1.05);
  }

  .textBox {
    width: calc(100% - 90px);
    margin-left: 10px;
    color: white;
    font-family: 'Poppins' sans-serif;
  }

  .textContent {
    display: flex;
    align-items: center;
    justify-content: space-between;
  }

  .span {
    font-size: 10px;
  }

  .h1 {
    font-size: 14px;
    font-weight: bold;
  }

  .p {
    font-size: 12px;
    font-weight: lighter;
  }



  /*  */
  .div-flex {
    display: flex;
  }

  .pgw {
    transform: skew(-20deg);
    background-color: #ee244e;
    border: 1px #fff solid;
    color: #fff;
    text-decoration: none;
    display: inline-block;
    font-size: 18px;
    font-weight: 900;
    height: 45px;
    width: 185px;
    text-transform: uppercase;
    padding: 13px 5px;
    border-radius: 20;
    margin-left: 26px;
  }

  @media screen and (max-width: 2560px) {
    .header-app {
      background-color: #ee244e;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 10vh;
    }

    .carousel-bx31 {
      transform: skew(-20deg);
      background-color: transparent;
      border: 1px #fff solid;
      color: #fff;
      text-decoration: none;
      display: inline-block;
      font-size: 13px;
      font-weight: 900;
      height: 45px;
      width: 185px;
      text-transform: uppercase;
      padding: 13px 0px;
      border-radius: 10px;
      margin-left: 26px;
    }
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
    margin-left: 26px;
  }

  .imprint-contentX {
    display: flex;
    height: 52vh;
  }

  .track-details-container {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 30px;
  }

  .track-details {
    display: flex;
  }


  .description {
    width: 45%;
    height: 80vh;
    padding-top: 145px;
  }

  iframe {
    width: 100%;
    height: 100%;
    border: 0;
    border-radius: 15px;
  }

  .flex {
    display: flex;
    width: 100%;
    gap: 6px;
  }

  .prt1 {
    width: 50%;
    height: 100%;
  }

  .prt2 {
    width: 50%;
    height: 100%;
  }

  .h1-txx {
    color: #fff;

    font-family: myFont !important;
    margin-left: 950px;
  }

  .imprint-content2 h3 {
    margin-left: 780px;
    margin-top: 145px;
  }

  .Bprint {
    width: 80%;
    height: 97%;
    margin-left: 75px;
    margin-top: 10px;
  }

  .Bprint img {
    width: 100%;
    height: 100%;
    background-size: cover;
  }

  .title-h1 {
    margin: 60px 0 10px 0;
    font-size: 70px;
    font-weight: 700;
    line-height: 86px;
    color: #fff;
  }

  .p-txt {
    font-size: 15px
  }

  .txtt {
    width: 50%;
  }

  .bluePrint {
    width: 50%
  }

  .container {
    /* margin-top: 360px; */
  }

  .imprint-contentX {
    padding-left: 55px;
  }

  .description {
    display: flex;
  }

  .iframe-Track {
    background-color: #20232b;
    width: 53%;
    height: 71vh;
    margin-top: 150px;
    margin-bottom: 46px;
    margin-left: 25px;
    border-radius: 15px;
  }

  @media (max-width:480px) {
    .iframe-Track {
      background-color: #20232b;
      width: 100%;
      height: 80vh;
      margin-top: 91px;
      margin-bottom: 0px;
      margin-left: 0px;
      border-radius: 15px;
    }

    .description {
      width: 100%;
      height: 80vh;
      padding-top: 30px;
    }

    .h1 {
      font-size: 10px;
    }

    .Bprint {
      width: 100%;
      height: 100%;
      margin-left: 10px;
      margin-top: 10px;
    }

    .title-h1 {
      margin: 60px 0 10px 0;
      font-size: 70px;
      font-weight: 700;
      line-height: 86px;
      color: #fff;
    }

    .txtt {
      width: 100%;
    }

    .imprint-contentX {
      display: block;
      height: 176vh;
      padding-left: 40px;
    }

    .h1-txx {
      color: #fff;
      font-family: myFont !important;
      margin-left: 0;
      margin-top: 350px;
    }

    .h1-txx {
      color: #fff;
      font-family: myFont !important;
      margin-left: 0px;
    }

    .bluePrint {
      margin-top: -360px;
      height: 40vh;
      width: 112%;
      margin-left: -50px;
    }

    .track-details {
      display: block;
    }

    .imprint-contentX {
      display: block;
      height: 130vh;
      /* padding-left: 40px; */
    }
  }
</style>
<!-- <div class="header-filler" style="background-color: #20232b;"></div> -->
<?php
$qry = "SELECT * FROM `tracks`where `track_id`='$id'";
// echo $qry;
$data = mysqli_query($con, $qry);

if ($data->num_rows > 0) {
  while ($row = $data->fetch_assoc()) {
    $uid = $row['vendor_id'];
?>
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center" style="background-image:url('../Vendor/images/<?php echo $row["image"]; ?>'); background-size: cover;">


      <div class="container">
        <div class="row justify-content-center">
          <div class="title">
            <h1 class="title-h1">
              <?php echo  $row["track_name"]; ?>
            </h1>

          </div>
          <div class="track-details-container">
            <p class="p-txt"><i class="bi bi-calendar2"></i> <?php echo  $row["date"];  ?></p>
            <p class="p-txt"> <i class="fa-solid fa-car"></i> <?php echo  $row["vehicle_type"];  ?></p>
            <p class="p-txt"><i class="bi bi-flag-fill"></i> <?php echo  $row["category"];  ?></p>
          </div>
          <h2 class="h1-txt"><?php echo  $row["event"]; ?></h2>
          <p class="p-txt"><i class="bi bi-building-fill"></i> <?php echo  $row["organizer"];  ?></p>
        </div>
      </div>
    </section><!-- End Hero -->
    <div class="imprint-contentX">
      <div class="txtt">
        <h1 class="h1-txt">Complete your trackday booking in a few clicks</h1>
        <p class="p-txt"> Initial D Booking GmbH assumes no responsibility for the completeness and/or accuracy of the published offers/information or for<br>any disadvantage or damage of any kind arising from use or non-use of same. Likewise, no responsibility is assumed for defects to<br>software or hardware or any losses ensuing from Internet programs used as part of the online content or data offered for download.</p>
        <h4 class="h1-txt">Disclaimer</h4>
        <p class="p-txt">The users shall indentify HTA Circuit Booking GmbH against all damage claims arising from personal damage, claims and<br>encumbrances of all kind that ensue or which could ensue from using these websites.</p>
        <h3 class="h1-txx">Track Description</h3>
      </div>

      <div class="bluePrint">

        <div class="Bprint">
          <img style="width:100%;height:100%" src="../Vendor/images/<?php echo $row["bprint"]; ?>">
        </div>

      </div>
    </div>

    <div class="track-details">
      <div class="iframe-Track">
        <?php echo  $row['location']; ?>
      </div>

      <div class="description">

        <div class="prt1">
          <div class="card">
            <div class="textBox">
              <div class="textContent">
                <p class="h1">Track Length</p>
                <span class="span"> </span>
              </div>
              <p class="p"><?php echo  $row['track_length']; ?></p>
              <div>
              </div>
            </div>
          </div>


          <div class="card">

            <div class="textBox">
              <div class="textContent">
                <p class="h1">Track Width</p>
                <span class="span"> </span>
              </div>
              <p class="p"><?php echo  $row['track_width']; ?></p>
              <div>
              </div>
            </div>
          </div>


          <div class="card">

            <div class="textBox">
              <div class="textContent">
                <p class="h1">Total Area</p>
                <span class="span"></span>
              </div>
              <p class="p"><?php echo  $row['total_area']; ?> </p>
              <div>
              </div>
            </div>
          </div>


          <div class="card">

            <div class="textBox">
              <div class="textContent">
                <p class="h1">Vehicle Capacity</p>
                <span class="span"></span>
              </div>
              <p class="p"><?php echo  $row['vehicle_capacity']; ?></p>
              <div>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="textBox">
              <div class="textContent">
                <p class="h1">Total Turn</p>
                <span class="span"></span>
              </div>
              <p class="p"><?php echo  $row['total_turn']; ?></p>
              <div>
              </div>
            </div>
          </div>

        </div>

        <div class="prt2">

          <div class="card">
            <div class="textBox">
              <div class="textContent">
                <p class="h1">Lap Timing</p>
                <span class="span"></span>
              </div>
              <p class="p"><?php echo  $row['lap_timing']; ?></p>
              <div>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="textBox">
              <div class="textContent">
                <p class="h1">Speed Sustainability</p>
                <span class="span"></span>
              </div>
              <p class="p"><?php echo  $row['speed_sustainability']; ?></p>
              <div>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="textBox">
              <div class="textContent">
                <p class="h1">Max.Grade</p>
                <span class="span"></span>
              </div>
              <p class="p"><?php echo  $row['max_grade']; ?></p>
              <div>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="textBox">
              <div class="textContent">
                <p class="h1">Total Race</p>
                <span class="span"></span>
              </div>
              <p class="p"><?php echo  $row['total_race']; ?></p>
              <div>
              </div>
            </div>
          </div>

          <div class="card" style="background-color: #ee244e;color:#fff">
            <div class="textBox">
              <div class="textContent">
                <a href="./PaymentGateWay.php?id=<?php echo  $row["track_id"]; ?>"><button class="h1-txt" style="background-color: transparent; font-size:13px">BOOK Now!</button></a>

              </div>
            </div>
          </div>
        </div>


      </div>


    </div>

    </div>
<?php
  }
}
include './UserFooter.php';
?>