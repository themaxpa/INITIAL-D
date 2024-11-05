<?php
session_start();
include '../connection/dbconnection.php';
@$uid = $_SESSION['login_id'];
// echo $uid;
$qry = "SELECT * FROM user_login WHERE login_id='$uid'";
$result = mysqli_query($con, $qry);
$data = mysqli_fetch_assoc($result);
@$vendor_id = $data['vendor_id'];

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
  <link href="./assets/img/favicon.png" rel="icon">
  <link href="./assets/img/apple-touch-icon.png" rel="apple-touch-icon">


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
  <link href="./assets/css/VendorStyle.css" type="text/css" rel="stylesheet">

  <style>
    /*--------------------------------------------------------------
#  Custom Scrollbar
--------------------------------------------------------------*/
    ::-webkit-scrollbar {
      width: 10px;
    }

    ::-webkit-scrollbar-track {
      background: #424242;
    }

    ::-webkit-scrollbar-thumb {
      background: #fff;
      border-radius: 5px;
    }

    /* =========================================== */
    .footer {
      background-color: black;
      padding: 70px 10px 0px 10px;
    }

    /* ========================================== */
    /*--------------------------------------------------------------
 card-D
--------------------------------------------------------------*/
    #hero {
      background-image: url('../assets/img/herobg.png');
      background-size: cover;
    }

    .preview-img-top img {
      width: 100%;
      height: 280px;
    }

    body {
      background-color: black;
    }

    .preview-card {
      margin: 130px 0px 60px 50px;
      width: 90%;
      height: 80%;
      border-radius: 20px;
      background-color: #20232b;
    }

    .preview-card-body {
      padding-left: 15px;
      margin-top: 5px;
      width: 100%;
      color: #fff;

    }

    .preview-caption-text {
      display: flex;
      justify-content: flex-start;
      color: #fff;
    }

    .preview-price a button {
      transform: skew(-20deg);
      width: 119px;
      height: 36px;
      border-radius: 10px;
      font-weight: 200;
      font-size: 15px;
      margin: 10px 0px 0px 60px;
      background-color: #ee244b;
      color: #fff;
      transition: 0.3s;
    }

    .preview-price a button:hover {
      background-color: #20232b;
      color: #ee244b;
      padding-left: 2px;
    }

    .preview-price {
      margin: 1px -396px 0px 345px;
      padding: 37px 49px -1px 0px;
    }

    .addTrack {
    width: 100%;
    border-radius: 10px;
    background-color: black;
    /* border: 1px solid #fff; */
    margin:20px 40px;
}

    .addTrack h2 {
      margin-top: 20px;
    }

    .TrackPreview {
      width: 50%;
      height: 100dvh;
      border: 1px solid #fff;
      /* background-color: #babcc5; */
      /* border-radius: 50px 50px; */
    }

    .filler {
      background-color: black;
      max-width: auto;
      min-height: auto
    }

    .index-sec-title {
      padding-top: 80px;
      width: 100%;
      height: 100dvh;
      background-color: black;
    }

    #header.header-scrolled,
    #header.header-inner-pages {
      background: black;
    }

    .form-control-img {
      width: 50%;
      height: 5vh;
    }

    .form-control {
      width: 50%;
      height: 5vh;
    }

    .add-container {
    height:200vh;
    display: flex;
    width: 100%;
    padding-left: 0px;
}
    .title-h1 {
      margin: 135px 0 10px 0;
      font-size: 90px;
      font-weight: 700;
      line-height: 86px;
      color: #ee2;
    }

    #title2 {
      font-family: myFont;
      /* color:#babcc5; */
      color: #eee;
      margin-bottom: 40px;
      font-size: 24px;
    }

    .formflex {
      display: flex;
      border: #e8e8e8 solid 2px;
    }

    /* img upload */

    .custum-file-upload {
      height: 200px;
      width: 300px;
      display: flex;
      flex-direction: column;
      align-items: space-between;
      gap: 20px;
      cursor: pointer;
      align-items: center;
      justify-content: center;
      border: 2px dashed #e8e8e8;
      background-color: #212121;
      padding: 1.5rem;
      border-radius: 10px;
      box-shadow: 0px 48px 35px -48px #e8e8e8;
    }

    .custum-file-upload .icon {
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .custum-file-upload .icon svg {
      height: 80px;
      fill: #e8e8e8;
    }

    .custum-file-upload .text {
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .custum-file-upload .text span {
      font-weight: 400;
      color: #e8e8e8;
    }

    .custum-file-upload input {
      display: none;
    }

    /* end */

    /* Form */
    /* From Uiverse.io by ammarsaa */
    .form {
      display: flex;
      width:85%;
      flex-direction: column;
      gap: 10px;
      padding: 20px;
      border-radius: 20px;
      position: relative;
      background-color: #1a1a1a;
      color: #fff;
      border: 1px solid #333;
    }

    .titlexx {
      font-size: 28px;
      font-weight: 600;
      letter-spacing: -1px;
      position: relative;
      display: flex;
      align-items: center;
      padding-left: 30px;
      color: #00bfff;
    }

    .titlexx::before {
      width: 18px;
      height: 18px;
    }

    .titlexx::after {
      width: 18px;
      height: 18px;
      animation: pulse 1s linear infinite;
    }

    .titlexx::before,
    .titlexx::after {
      position: absolute;
      content: "";
      height: 16px;
      width: 16px;
      border-radius: 50%;
      left: 0px;
      background-color: #00bfff;
    }

    .message,
    .signin {
      font-size: 14.5px;
      color: rgba(255, 255, 255, 0.7);
    }

    .signin {
      text-align: center;
    }

    .signin a:hover {
      text-decoration: underline royalblue;
    }

    .signin a {
      color: #00bfff;
    }

    .flex {
      display: flex;
      width: 100%;
      gap: 6px;
    }

    .form label {
      position: relative;
    }

    .form label .input {
      background-color: #333;
      color: #fff;
      width: 100%;
      padding: 20px 05px 05px 10px;
      outline: 0;
      border: 1px solid rgba(105, 105, 105, 0.397);
      border-radius: 10px;
    }

    .form label .input+span {
      color: rgba(255, 255, 255, 0.5);
      position: absolute;
      left: 10px;
      top: 0px;
      font-size: 0.9em;
      cursor: text;
      transition: 0.3s ease;
    }

    .form label .input:placeholder-shown+span {
      top: 12.5px;
      font-size: 0.9em;
    }

    .form label .input:focus+span,
    .form label .input:valid+span {
      color: #00bfff;
      top: 0px;
      font-size: 0.7em;
      font-weight: 600;
    }

    .input {
      font-size: medium;
    }

    .submit {
      border: none;
      outline: none;
      padding: 10px;
      border-radius: 10px;
      color: #fff;
      font-size: 16px;
      transform: .3s ease;
      background-color: #00bfff;
    }

    .submit:hover {
      background-color: #00bfff96;
    }

    @keyframes pulse {
      from {
        transform: scale(0.9);
        opacity: 1;
      }

      to {
        transform: scale(1.8);
        opacity: 0;
      }
    }

    /* End Form */
    @media (max-width:480px) {
      #hero {
        background-image: url('../assets/img/phone393/ph7.jpg');
        background-size: cover;
      }


      .title-h1 {
        margin: 120px 0 10px 0;
        font-size: 41px;
        font-weight: 700;
        line-height: 33px;
        color: #ee2;
      }

      #title2 {
        font-size: 10px;
        line-height: 0px;
      }
    }


    .vendor-account {
      width: 50px;
      height: 50px;
      margin-left: 10px;
      margin-right: -73px;
      border-radius: 50%;
    }

    .opt {
      background-color: black;
      color: #ee2;
    }

    .opt:active {
      background-color: black;
      color: #ee2;
    }

  
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-xl-9 d-flex align-items-center justify-content-lg-between">
          <a href="./VendorHomePage.php" class="logo me-auto me-lg-0"><img src="./assets/img/D LOGO.png" alt="" class="img-fluid"></a>

          <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
              <li><a class="nav-link scrollto" href="./About.php">About</a></li>
              <li><a class="nav-link scrollto" href="./Service.php">Services</a></li>
              <!-- <li><a class="nav-link scrollto" href="./VendorAddTracks.php">Add Tracks</a></li>  -->

              <!-- <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
              
               <li class="dropdown"><a href="#"><span>Circuit</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="#">Cars</a></li>
                  <li class="dropdown"><a href="#"><span>Bikes</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                      <li><a href="#">Deep Drop Down 1</a></li>
                      <li><a href="#">Deep Drop Down 2</a></li>
                      <li><a href="#">Deep Drop Down 3</a></li>
                      <li><a href="#">Deep Drop Down 4</a></li>
                      <li><a href="#">Deep Drop Down 5</a></li>
                    </ul>
                  </li>
                  <li><a href="#">NASCAR</a></li>
                  <li><a href="#">Drop Down 3</a></li>
                  <li><a href="../AllTracks.php">All Tracks</a></li>
                </ul>
              </li> -->
              <li><a class="nav-link scrollto" href="./VendorContactUs.php">Contact</a></li>
              <?php

              $dqry = "SELECT * FROM `user_login` JOIN `vendor_registration` ON `user_login`.`vendor_id`= `vendor_registration`.`vendor_id` where login_id='$uid'";
              // echo $dqry;
              $result = mysqli_query($con, $dqry);
              if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                  $rid = $row['vendor_id'];
              ?>

                  <li class="nav-item dropdown pe-3">
                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                      <img class="vendor-account" src="./images/<?php echo $row['image']; ?>" alt="Profile" class="rounded-circle">
                      <span class="d-none d-md-block dropdown-toggle ps-2" style="color:transparent"><?php echo  $row["name"]; ?></span></span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile" id="dropdown-ul-li">
                      <li class="dropdown-header">
                        <h6><?php echo  $row["name"]; ?></h6>
                        <!-- <span>Web Designer</span> -->
                      </li>
                      <li>
                        <hr class="dropdown-divider">

                      <li>
                        <a class="dropdown-item d-flex align-items-center" href="./VendorProfile.php">
                          <i class="bi bi-person"></i>
                          <span>My Profile</span>
                        </a>
                      </li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>

                      <li>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                          <i class="bi bi-gear"></i>
                          <span>Account Settings</span>
                        </a>
                      </li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>

                      <li>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                          <i class="bi bi-question-circle"></i>
                          <span>Need Help?</span>
                        </a>
                      </li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>

                      <li>
                        <a class="dropdown-item d-flex align-items-center" href="../Logout.php">
                          <i class="bi bi-box-arrow-right"></i>
                          <span>Sign Out</span>
                        </a>
                      </li>
                    </ul>
                    <!-- End Profile Dropdown Items -->
                  </li><!-- End Profile Nav -->
            </ul>

          </nav><!-- .navbar -->

        </div>
      </div>
    </div>
  </header><!-- End Header -->
  <div class="heroContainer">
    <div class="gradient">
      <div id="hero" class="d-flex flex-column justify-content-center">
        <div class="container">
          <div class="row justify-content-center">
            <div class="title">
              <h1 class="title-h1">
            <?php echo  $row["company_name"];
                }
              } ?>


              </h1>
              <h2 id="title2">The only way to do great work is to love what you do</h2>
            </div>
          </div>
          <!-- <div class="container">
      </div> -->
        </div>
      </div>
    </div>
  </div><!-- End Hero -->
  <!-- === filler ===-->
  <section>
    <div class="filler" style="height:50dvh;">
      <div class="index-sec-title">
        <h1 class="f-title">We aim to create new standards in the track day market</h1>
        <h4 class="f-sub-title">And keep them evolving</h4>

      </div>
  </section><!-- End filler -->

    <div class="addTrack">
      <!-- <h2 class="h1-txt"></h2> -->
      <form action="#" method='POST' enctype="multipart/form-data" class="form">
        <p class="titlexx">ADD RACE TRACK </p>
        <p class="message"> </p>
        <div class="flex">
          <div class="reg-input">
            <!-- img upload -->
            <label>
          <input class="input" type="file" name="image" placeholder="" required="">
          <span>Track Name</span>
        </label>
          </div>
          <div class="form-instruction">
            <h3 calss="h1-txt"> Initial Dream</h3>
            <p></p>
          </div>
        </div>
   
        <label>
          <input class="input" type="text" name="track_name" placeholder="" required="">
          <span>Track Name</span>
        </label>

        <label>
          <input class="input" type="text" name="event" placeholder="" required="">
          <span>Event Name</span>
        </label>
           

        <label>
          <input class="input" type="date" name="date" placeholder="" required="">
          <span>Date</span>
        </label>

        <label>
          <input class="input" type="text" name="vehicle_type" placeholder="" required="">
          <span>Vehicle Type</span>
        </label>
       

   
          <label>
            <select id="opt" required placeholder="" class="input" name="category">
              <option class="opt" value="Touring car racing">Touring car racing</option>
              <option class="opt" value="Kart racing">Kart racing</option>
              <option class="opt" value="Production-car racing">Production-car racing</option>
              <option class="opt" value="Drag racing">Drag racing</option>
              <option class="opt" value="Stock car racing">Stock car racing</option>
              <option class="opt" value="Off-road racing">Off-road racing</option>
              <option class="opt" value="Rallycross">Rallycross</option>
              <option class="opt" value="Autocross">Autocross</option>
              <option class="opt" value="Pickup truck racing">Pickup truck racing</option>
              <option class="opt" value="Road racing">Road racing</option>
              <option class="opt" value="Autocross">Autocross</option>
              <option class="opt" value="Auto hillclimbing">Auto hillclimbing</option>
              <option class="opt" value="Other categories">Other categories</option>

            </select>
            <span>Category</span>
          </label>
      

        <label>
          <input class="input" type="text" name="organizer" placeholder="" required="">
          <span>Organizer Name</span>
        </label>

        <label>
          <input class="input" type="text" name="noise_level" placeholder="" required="">
          <span>Noise Level</span>
        </label>

     

        <label>
          <input class="input" type="text" name="price" placeholder="" required="">
          <span>Amound</span>
        </label>

        <label>
          <input class="input" type="text" name="location" placeholder="                                    paste iframe here" required="">
          <span>Location</span>
        </label>
        
        <label>
          <input class="input" type="text" name="track_length" placeholder="" required="">
          <span>Track Length</span>
        </label>

        <label>
          <input class="input" type="text" name="track_width" placeholder="" required="">
          <span>Track Width</span>
        </label>

        <label>
          <input class="input" type="text" name="total_area" placeholder="" required="">
          <span>Total Area</span>
        </label>

        <label>
          <input class="input" type="text" name="vehicle_capacity" placeholder="" required="">
          <span>Vehicle Capacity</span>
        </label>

        <label>
          <input class="input" type="text" name="lap_timing" placeholder="" required="">
          <span>Lap Timing</span>
        </label>

        <label>
          <input class="input" type="text" name="speed_sustainability" placeholder="" required="">
          <span>Speed Sustainability</span>
        </label>

        <label>
          <input class="input" type="text" name="max_grade" placeholder="" required="">
          <span>Max.Grade</span>
        </label>

        <label>
          <input class="input" type="text" name="total_race" placeholder="" required="">
          <span>Total Race</span>
        </label>

        <label>
          <input class="input" type="text" name="total_turn" placeholder="" required="">
          <span>Total Turn</span>
        </label>

        
        <label>
          <input class="input" type="file" name="bprint" placeholder="                                       Optional">
          <span>Track BluePrint</span>
        </label>

        <button class="submit" type="submit" name="submit">Submit</button>

      </form>
    </div>

    <?php
    if (isset($_REQUEST['submit'])) {


      $filename = $_FILES["image"]["name"];
      $tempname = $_FILES["image"]["tmp_name"];
      $folder = "images/" . $filename;
      move_uploaded_file($tempname, $folder);

      $bprint = $_FILES["bprint"]["name"];
      $tempname = $_FILES["bprint"]["tmp_name"];
      $folder = "images/" . $bprint;
      move_uploaded_file($tempname, $folder);

      $trackName = $_POST['track_name'];
      $event = $_POST['event'];
      $date = $_POST['date'];
      $vehicleType = $_POST['vehicle_type'];
      $category = $_POST['category'];
      $organizer = $_POST['organizer'];
      $noise_level = $_POST['noise_level'];
      $price = $_POST['price'];
      $location = $_POST['location'];
      $trackLength = $_POST['track_length'];
      $trackWidth = $_POST['track_width'];
      $totalArea = $_POST['total_area'];
      $vehicleCapacity = $_POST['vehicle_capacity'];
      $lapTiming = $_POST['lap_timing'];
      $speedSustainability = $_POST['speed_sustainability'];
      $maxGrade = $_POST['max_grade'];
      $totalRace = $_POST['total_race'];
      @$totalTurn = $_POST['total_turn'];
      

      $query = "INSERT INTO `tracks`(`vendor_id`,`image`,`track_name`,`event`,`date`,`vehicle_type`,`category`,`organizer`,`noise_level`,`price`,`location`,`track_length`,`track_width`,`total_area`,`vehicle_capacity`,`lap_timing`,`speed_sustainability`,`max_grade`,`total_race`,`total_turn`,`bprint`)
                             VALUES('$vendor_id','$filename','$trackName','$event','$date','$vehicleType','$category','$organizer','$noise_level','$price','$location','$trackLength','$trackWidth','$totalArea','$vehicleCapacity','$lapTiming','$speedSustainability','$maxGrade','$totalRace','$totalTurn','$bprint')";

      $data = mysqli_query($con, $query);

      if ($data) {
        echo "<script>alert('Done!');</script>";
      } else {
        echo "<script>alert('Failed!');</script>";
      }
    }
    ?>
    <?php
    $qry = "SELECT `track_id`,`vendor_id`,`image`,`track_name`,`event`,`date`,`vehicle_type`,`category`,`organizer`,`noise_level`,`price` 
      FROM `tracks` 
      WHERE `vendor_id`='2'
      ORDER BY `track_id` DESC 
      LIMIT 1;";
    // echo $qry;
    $data = mysqli_query($con, $qry);

    if ($data->num_rows > 0) {
      while ($row = $data->fetch_assoc()) {
        $uid = $row['vendor_id'];
    ?>
       
          <!--== Track===-->
          <div class="card-D" style=" width: 100%; height:100%;" ;>
            <div class="id-card--top-image-container">
              <img style="border-radius:15px 15px 0px 0px; width: 370px; height: 200px;" loading="lazy" class="card-img-top" src="Vendor\images\<?php echo $row['image']; ?>" alt="Preview Image" />
            </div>
            <div class="id-card-body">
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
                        <a rel="alternate" class="track-price" href=" " hreflang="en">
                          <button style="  width: 150px;height: 45px; font-weight: 900;font-size: 22px;     margin: -5px 0px 0px 120px;">
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
    }
      ?>
       
 
  
 



  <!-- === filler ===-->
  <section>
    <!-- <div class="filler" style="border:1px solid #fff"> -->
    <div class="index-sec-title">
      <h1 class="f-title">We aim to create new standards in the track day market</h1>
      <h4 class="f-sub-title">And keep them evolving</h4>
    </div>
  </section><!-- End filler -->










  <!-- ======= Footer ======= -->

  <footer class="footer" style="padding: 70px 10px 0px 10px;">
    <div class="container">
      <div class="row">
        <div class="footer-col">
          <h4>ABOUT US</h4>
          <ul>
            <li><a href="#">how we work</a></li>
            <li><a href="#">Our responsibility</a></li>
            <li><a href="#">Our team & investors</a></li>
            <li><a href="#">Career</a></li>
            <li><a href="#">News</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>SERVICES</h4>
          <ul>
            <li><a href="#">Sustainability</a></li>
            <li><a href="#">FAQ/Help</a></li>
            <li><a href="#">Terms & conditions</a></li>
            <li><a href="#">Privacy & policy</a></li>
            <li><a href="#">Imprint</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>OUR OFFICES</h4>
          <ul>
            <li><a href="#">Rankestraße 6a, D-80796 Munich</a></li>
            <li><a href="#">Merkurring 82, D-22143 Hamburg</a></li>
            <li><a href="#">Pascalstraße 6, D-52076 Aachen</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>CONTACT US</h4>
          <ul>
            <li><a href="#">+49-89-2154-7279-0</a></li>
            <li><a href="#">+49-1579-239 18 23</a></li>
            <li><a href="#">trackdays@circuit-booking.com</a></li>
          </ul>
        </div>
      </div>
      <div class="social" style="  width: 100%; display: flex; justify-content: end; margin-top:50px">
        <p style="color:gray; margin-right:250px">Initial D Booking &copy;2024. All rights reserved. Designed & Developed by <span class="designer">themaxpa</span>
        </p>
        <a href="https://x.com/?lang=en-in" style="margin: 0px 20px;"><i class="bi bi-twitter-x"></i></a>
        <a href="https://www.facebook.com/" style="margin: 0px 20px;"><i class=" bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/?hl=en" style="margin: 0px 20px;"><i class=" bi bi-instagram"></i></a>
        <a href="https://in.linkedin.com/" style="margin: 0px 20px;"><i class=" bi bi-linkedin"></i></a>
      </div>



    </div>
  </footer>

  <!-- End Footer -->
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="./assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="./assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="./assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="./assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="./assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="./assets/js/main.js"></script>

</body>

</html>