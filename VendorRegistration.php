<?php
session_start();
include './connection/dbconnection.php';
include './header.php';
?>
<link href="assets/css/style.css" rel="stylesheet">

<head>
    <style>
     .footer{
        padding: 70px 10px 0px 10px;
     }

        * {
            color: #fff;
        }

        #herox {
            background-image: url('./assets/img/REG-img.jpg');
            height: 600px;
            background-size: cover;
        }

        .registration-container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .reg-container {
            margin-bottom: 30px;
        }

        .registration-container h1 {
            margin: 200px 0 10px 0;
            font-size: 70px;
            font-weight: 700;
            line-height: 86px;
            color: #fff;
        }

        .registration-container h2 {
            font-family: myFont;
            font-size: 25px;
            color: bisque;
            margin: 10px 312px 20px 5px;
            padding-right: 375px;
        }

        /* Form */

        .form {
            display: flex;
            flex-direction: column;
            gap: 10px;
            padding: 20px;
            border-radius: 20px;
            position: relative;
            background-color: #20232b;
            color: #fff;
            border: 1px solid #333;
            margin: 40px 200px;
        }

        .titleREG {
            font-size: 28px;
            font-weight: 600;
            letter-spacing: -1px;
            position: relative;
            display: flex;
            align-items: center;
            padding-left: 30px;
            color: #ee244e;
        }

        .titleREG::before {
            width: 18px;
            height: 18px;
        }

        .titleREG::after {
            width: 18px;
            height: 18px;
            animation: pulse 1s linear infinite;
        }

        .titleREG::before,
        .titleREG::after {
            position: absolute;
            content: "";
            height: 16px;
            width: 16px;
            border-radius: 50%;
            left: 0px;
            background-color: #ee244e;
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
            text-decoration: underline #ee244e;
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
            background-color: transparent;
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
            color: #ee244e;
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
            background-color: #ee244e;
            opacity: 0.7;
        }

        .submit:hover {
            background-color: #ee244e;
            opacity: 0.9;
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
        .containerx {
            background-image: url('./assets/img/REG-img.jpg');
            height: 600px;
            background-size: cover;
        }

        @media (max-width:480px) {

            body {
                background-image: url('./assets/img/phone393/ph11.jpg');
                height: 950px;
                background-size: cover;
                object-fit:cover;
                backdrop-filter:blur(5px);
            }

            .registration-container {
                margin: 350px 0 10px 115px;
                font-size: 70px;
                font-weight: 700;
                line-height: 86px;
                color: #fff;
            }

            /* hero */

            .registration-container h1 {
                margin: 0 0px 10px -10px;
                font-size: 30px;
                font-weight: 700;
                line-height: 24px;
                color: #fff;
            }

            .registration-container h2 {
                font-family: myFont;
                font-size: 8px;
                color: bisque;
                margin: 10px 105px 20px -10px;
            }

         
            .form {
                margin: 90px 20px;
                background-color: transparent;
            }
            .REG-container,
            .containerx,
            .bottom-nav-list,
            footer {
                display: none;
            }
        }
    </style>
</head>

<body style=" overflow-x: hidden;">
    <section class="d-flex flex-column justify-content-center">
        <div class="containerx">
            <div class="row justify-content-center">
                <div class="registration-container">
                    <div class="hero-title">
                        <h1>
                            REGISTRATION
                        </h1>
                        <h2>Your best car and bike track days, test days and driving experiences start with just a few clicks. Sign up now.</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>

        <div class="REG-container">

            <div class="info-box1">
                <h3>Track day Participant</h3>
                <h6>The registration as trackday participant is open to all individuals interested in driving trainings and trackdays. The registration and the use of our online booking service is free of charge.</h6>
            </div>
            <div class="info-box2">
                <h3>Track day Organizer</h3>
                <h6>The registration as a trackday provider/organizer is restricted to corporate clients or associations due to legal reasons. You can register as an individual as long as you are an employee or owner of a company or belong to the management board of your association. The registration of our online booking service is free of charge.</h6>
            </div>
            <div class="info-box3">
                <h3>Track Rental Clients</h3>
                <h6>The registration as a track rental client is restricted to corporate clients due to legal reasons. You can register as an idividual as long as you are an employee or owner of a company.

                    The registration and the use of our online booking service is free of charge.</h6>
            </div>
        </div>
    </section>
    <!--  -->

    <form class="form" method='post' enctype="multipart/form-data">
        <p class="titleREG">Register </p>
        <p class="message">Signup now and get full access to our website. </p>

        <label>
            <input class="input" type="file" id="name" name="name" placeholder="" required="">
            <span>image</span>
        </label>

        <label>
            <input class="input" type="text" id="name" name="name" placeholder="" required="">
            <span>Name</span>
        </label>

        <label>
            <input class="input" type="email" name="email" placeholder="" required="">
            <span>Email</span>
        </label>
        <label>
            <input class="input" type="number" name="phone" maxlength="10" placeholder="" required="">
            <span>Phone Number</span>
        </label>

        <label>
            <input class="input" type="text" name="address" placeholder="" required="">
            <span>Address</span>
        </label>

        <label>
            <input class="input" type="text" name="country" placeholder="" required="">
            <span>Country</span>
        </label>

        <label>
            <input class="input" type="text" name="company_name" placeholder="" required="">
            <span>Company Name</span>
        </label>


        <label>
            <input class="input" type="text" name="about" placeholder="" required="">
            <span>About</span>
        </label>

        <label>
            <input class="input" type="password" name="password" placeholder="" required="">
            <span>Password</span>
        </label>

        <button class="submit" name="submit">Submit</button>
        <p class="signin">Already have an acount ? <a href="./account.php">Signin</a> </p>
    </form>





  <!--Subscribe Box-->
  <header>
      <nav> 
         <ul class="bottom-nav-list">
          <li><a  href="#">How it<br>works</a></li>
          <li><a  href="./AdvantagesOrganizer.php">advantages<br>Organizer</a></li>
          <li><a  href="./AdvantagesCircuits.php">advantages<br>Circuits</a></li>
          <li><a  href="./AffiliateProgram.php">Affiliate<br>Program</a></li>
          <li><a  href="./OurPartner.php">Our<br>partner</a></li>
        
          <form class="main-sub-email-box" action="./index.php" method="post">
            <div class="sub-email-box">
              <input  type="email" class="news-letter1" placeholder="     newsletter@initial-D" style="padding-left: 10px;" required>
            </div>
            <div class="sub-email-box">
              <button  type="submit" class="news-letter2" >Subscribe</button>
            </div>
          </form>
         </ul>
      </nav>
  </header> <!--End Subscribe Box-->

   <!-- ======= Footer ======= -->
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="footer-col">
          <h4>ABOUT US</h4>
          <ul>
            <li><a href="./HowWeWork.php">how we work</a></li>
            <li><a href="./OurResponsibility.php">Our responsibility</a></li>
            <li><a href="./PageNotFound.php">Our team & investors</a></li>
            <li><a href="./Career.php">Career</a></li>
            <li><a href="./News.php">News</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>SERVICES</h4>
          <ul>
            <li><a href="./Sustainability.php">Sustainability</a></li>
            <li><a href="#">FAQ/Help</a></li>
            <li><a href="./Terms&Conditions.php">Terms & conditions</a></li>
            <li><a href="./Privacy&Policy.php">Privacy & policy</a></li>
            <li><a href="./Imprint.php">Imprint</a></li>
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
            <li><a href="./ContactUs.php">InitialD.com</a></li>
          </ul>
        </div>
      </div>
      <div class="social" style="  width: 100%; display: flex; justify-content: end; margin-top:50px">
        <p style="color:gray; margin-right:250px;">Initial D Booking &copy;2024. All rights reserved. Designed & Developed by <span class="designer">themaxpa</span>
        </p>
        <a href="https://x.com/?lang=en-in" style="margin: 0px 20px;"><i class="bi bi-twitter-x"></i></a>
        <a href="https://www.facebook.com/" style="margin: 0px 20px;"><i class=" bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/themaxpa?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" style="margin: 0px 20px;"><i class=" bi bi-instagram"></i></a>
        <a href="https://in.linkedin.com/" style="margin: 0px 20px;"><i class=" bi bi-linkedin"></i></a>
      </div>
    </div>
  </footer>

  <!-- End Footer -->
  <div id="preloader"> </div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center" style="background-color:#ee244b;"><i class="bi bi-arrow-up-short"></i></a>


  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="./assets/js/script.js"></script>

</body>

</html>







<?php
if (isset($_REQUEST['submit'])) {

    @$filename = $_FILES["image"]["name"];
    @$tempname = $_FILES["image"]["tmp_name"];
    $folder = "./Vendor/images/" . $filename;
    move_uploaded_file($tempname, $folder);

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $country = $_POST['country'];
    $companyname = $_POST['company_name'];
    $about = $_POST['about'];
    $password = $_POST['password'];


    $qry = "SELECT * FROM `user_login` WHERE `username`= '$email'";
    // echo $qry; 
    $result = mysqli_query($con, $qry);
    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();
        echo "<script>alert('Already added');</script>";
    } else {

        $sql = "INSERT INTO `vendor_registration` (`image`,`name`, `email`, `phone`, `address`,`country`,`company_name`,`about`,`password`) 
                                         VALUES ('$filename','$name', '$email', '$phone', '$address','$country','$companyname','$about','$password');";
        echo $sql;
        mysqli_query($con, $sql);

        $lqry = "INSERT INTO `user_login` (`vendor_id`,`username`, `password`, `status`, `type`)
                             values((select max(vendor_id) FROM vendor_registration),'$email', '$password', 'Approved','vendor')";

        mysqli_query($con, $lqry);
        echo $lqry;

        echo "<script>window.location='./account.php'</script>";
    }
}
?>