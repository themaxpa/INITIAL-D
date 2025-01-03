<?php
session_start();
include './connection/dbconnection.php';
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
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">


    <!-- Font Awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" type="text/css" rel="stylesheet">
    <link href="assets/css/popup.css" type="text/css" rel="stylesheet">
    <link href="assets/css/login.css" type="text/css" rel="stylesheet">

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container-fluid">

            <div class="row justify-content-center">
                <div class="col-xl-9 d-flex align-items-center justify-content-lg-between">
                    <a href="index.php" class="logo me-auto me-lg-0"><img src="assets/img/D LOGO.png" alt="" class="img-fluid" style=" max-height: 70px;"></a>

                    <nav id="navbar" class="navbar order-last order-lg-0">
                        <ul>
                            <li><a class="nav-link scrollto active" href="./TrackDay.php">Track Days</a></li>
                            <li><a class="nav-link scrollto" href="./Organizer.php">Organizer</a></li>
                            <li><a class="nav-link scrollto" href="./RacingTeam.php">Racing Team</a></li>
                            <li><a class="nav-link scrollto " href="./CorporateEvent.php">Corporate Event</a></li>
                            <li class="dropdown"><a href="#" ><span style="color: #fff;">Registration</span> <i class="bi bi-chevron-down" style="color: #fff;"></i></a>
                                <ul>
                                    <li><a href="./registration.php">user</a></li>
                                    <li><a href="./VendorRegistration.php">Organizer</a></li>
                                    <ul>
                                    </ul>
                            </li>
                        </ul>
                        </li>
                        <!-- <li><a class="nav-link scrollto" href="#contact">Contact</a></li> -->
                        </ul>

                        <i class="bi bi-list mobile-nav-toggle"></i>
                    </nav><!-- .navbar -->
                    <a href="./account.php" class="account-btn" style=" font-size:30px">
                        <i class="bi bi-person-circle" style="color: #fff;"></i>
                    </a>
                </div>
            </div>
        </div>
    </header><!-- End Header col-xl-8 -->

    <head>
        <style>
           *{
            color:#000;
           }


          
          /* The message box is shown when the user clicks on the password field */
#message {
  display:none;
  color: #000;
  position: relative;
  padding: 20px;
  margin-top: 10px;
}

#message h3{
    font-size: 10px;
    color: #ee244e;
}
#message p {
    padding: 10px 35px;
    font-size: 10px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;

}



.valid:before {
  position: relative;
  left: -35px;
  content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "✖";
}



            .containerX {
                background-image: url('./assets/img/REG-img.jpg');
                height: 600px;
                background-size: cover;
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
            }

            .form {
                display: flex;
                flex-direction: column;
                gap: 10px;
                max-width: 100%;
                background-color: #fff;
                padding: 20px;
                border-radius: 20px;
                position: relative;
                margin-bottom: 50px;
            }

            .title-ph {
                font-family: myFont;
                font-size: 28px;
                color: #ee244e;
                font-weight: 300;
                letter-spacing: -1px;
                position: relative;
                display: flex;
                align-items: center;
                padding-left: 30px;
            }

            .title-ph::before,
            .title-ph::after {
                position: absolute;
                content: "";
                height: 16px;
                width: 16px;
                border-radius: 50%;
                left: 0px;
                background-color: #20232b;
            }

            .title-ph::before {
                width: 18px;
                height: 18px;
                background-color: #ee244b;
            }

            .title-ph::after {
                width: 18px;
                height: 18px;
                animation: pulse 1s linear infinite;
            }

            .message,
            .signin {
                color: rgba(88, 87, 87, 0.822);
                font-size: 14px;
            }

            .signin {
                text-align: center;
            }

            .signin a {
                color: #ee244e;
            }

            .signin a:hover {
                text-decoration: underline #20232b;
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
                width: 100%;
                padding: 10px 10px 20px 10px;
                outline: 0;
                border: 1px solid rgba(105, 105, 105, 0.397);
                border-radius: 10px;
                color: #20232b;
            }

            .form label .input+span {
                position: absolute;
                left: 10px;
                top: 15px;
                color: grey;
                font-size: 0.9em;
                cursor: text;
                transition: 0.3s ease;
            }

            .form label .input:placeholder-shown+span {
                top: 15px;
                font-size: 0.9em;
            }

            .form label .input:focus+span,
            .form label .input:valid+span {
                top: 30px;
                font-size: 0.7em;
                font-weight: 600;
            }

            .form label .input:valid+span {
                color: green;
            }

            .submit {
                border: none;
                outline: none;
                background-color: #ee244e;
                padding: 10px;
                border-radius: 10px;
                color: #fff;
                font-size: 16px;
                transform: .3s ease;
            }

            .submit:hover {
                background-color: rgb(56, 90, 194);
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

            /* End form */

            @media (max-width:394px) {

                .message,
                .signin {
                    color: gray;
                    font-size: 14px;
                }

                .containerX,
                .REG-container,
                .bottom-nav-list {
                    display: none;
                }

                body {
                    background-image: url('./assets/img/phone393/ph8.jpg');
                    height: 100%;
                    background-size: cover;
                    background-repeat: no-repeat;
                    object-fit: cover;
                    backdrop-filter: blur(30px);
                }

                .form {
                    margin-top: 40px;
                    background: transparent;
                }

                .footer {
                    display: none;
                }

                .reg-contaniner {
                    width: 100%;
                    height: 100%;
                }
            }

            .info-box1,
            .info-h6{
color:#fff;
            }
        </style>
    </head>

<body style="overflow-x: hidden;">
    <section class="d-flex flex-column justify-content-center" id="herox">
        <div class="containerX">
            <div class="row justify-content-center">
                <div class="registration-container">
                    <h1>
                        REGISTRATION
                    </h1>
                    <h2>Your best car and bike track days, test days and driving experiences start with just a few clicks. Sign up now.</h2>

                </div>
            </div>
        </div>
    </section>

    <section>

        <div class="REG-container">

            <div class="info-box1">
                <h3>Track day Participant</h3>
                <h6 class="info-h6">The registration as trackday participant is open to all individuals interested in driving trainings and trackdays. The registration and the use of our online booking service is free of charge.</h6>
            </div>
            <div class="info-box1">
                <h3>Track day Organizer</h3>
                <h6 class="info-h6">The registration as a trackday provider/organizer is restricted to corporate clients or associations due to legal reasons. You can register as an individual as long as you are an employee or owner of a company or belong to the management board of your association. The registration of our online booking service is free of charge.</h6>
            </div>
            <div class="info-box1">
                <h3>Track Rental Clients</h3>
                <h6 class="info-h6">The registration as a track rental client is restricted to corporate clients due to legal reasons. You can register as an idividual as long as you are an employee or owner of a company.

                    The registration and the use of our online booking service is free of charge.</h6>
            </div>
        </div>
    </section>

    <!--======================================================== form ======================================================================= -->
    <div class="reg-contaniner">
        <div class="form">
            <form class="form" method="post">
                <p class="title-ph">Register </p>
                <p class="message">Signup now and get full access to our website. </p>
                <div class="flex">
                    <label>
                        <input required="" placeholder="" type="text" class="input" id="first_name" name="first_name">
                        <span>Firstname</span>
                    </label>

                    <label>
                        <input required="" placeholder="" type="text" class="input" id="last_name" name="last_name">
                        <span>Lastname</span>
                    </label>
                </div>
                <script>
                    //  Date of birth validation

                    document.addEventListener("DOMContentLoaded", () => {
                        const birthdayInput = document.getElementById("dob");
                        const today = new Date();
                        const minDate = new Date("1900-01-01");
                        const maxDate = new Date(today.getFullYear() - 18, today.getMonth(), today.getDate());

                        birthdayInput.min = minDate.toISOString().split("T")[0];
                        birthdayInput.max = maxDate.toISOString().split("T")[0];
                    });
                </script>
                <label for="date">
                    <input required="" type="date" id="dob" class="input" name="dob">
                    <!-- <span>Date of Birth</span> -->
                    <script>

                    </script>
                </label>

                <div class="flex">
                    <label>
                        <select required placeholder="" class="input" name="gender" required>
                            <option style="background-color: #ee244e; color:#20232b" value=""></option>
                            <option style="background-color: #ee244e; color:#20232b" value="male">Male</option>
                            <option style="background-color: #ee244e; color:#20232b" value="female">Female</option>
                            <option style="background-color: #ee244e; color:#20232b" value="Rather not say">Rather not say</option>

                        </select>
                        <span>Gender</span>
                    </label>
                </div>

                <label>
                    <input type="text" class="input" name="licens" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="16" placeholder="" required="">
                    <span>Licens Number</span>
                </label>

                <label>
                    <input type="number" class="input" name="ph" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10" placeholder="" required="">
                    <span>Phone</span>
                </label>

                <label>
                    <input required="" placeholder="" type="email" class="input" name="email">
                    <span>Email</span>
                </label>

                <div id="message">
                    <h3>Password must contain the following:</h3>
                    <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                    <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                    <p id="number" class="invalid">A <b>number</b></p>
                    <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                </div>


                <label for="password">
                    <input class="input" id="password" type="password" name="password" placeholder="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                    <span>Password</span>
                </label>

                <button class="submit" name="submit">Submit</button>
                <p class="signin">Already have an acount ? <a href="./account.php">LogIn</a> </p>
            </form>
        </div>
    </div>
    <!--======================================================== End Phone 393======================================================================= -->


    <!--Subscribe Box-->
    <header>
        <nav>
            <ul class="bottom-nav-list">
                <li><a href="#">How it<br>works</a></li>
                <li><a href="./AdvantagesOrganizer.php">advantages<br>Organizer</a></li>
                <li><a href="./AdvantagesCircuits.php">advantages<br>Circuits</a></li>
                <li><a href="./AffiliateProgram.php">Affiliate<br>Program</a></li>
                <li><a href="./OurPartner.php">Our<br>partner</a></li>

                <form class="main-sub-email-box" action="./index.php" method="post">
                    <div class="sub-email-box">
                        <input type="email" class="news-letter1" placeholder="     newsletter@initial-D" style="padding-left: 10px;" required>
                    </div>
                    <div class="sub-email-box">
                        <button type="submit" class="news-letter2">Subscribe</button>
                    </div>
                </form>
            </ul>
        </nav>
    </header> <!--End Subscribe Box-->

    <!-- ======= Footer ======= -->
    <footer class="footer" style="padding: 70px 10px 0px 10px;">
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
    <script src="./assets/js/Validation.js"></script>

    <!-- Date validation -->


</body>

</html>




<?php
if (isset($_REQUEST['submit'])) {

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $licens = $_POST['licens'];
    $ph = $_POST['ph'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $qry = "SELECT * FROM `user_login` WHERE `username`= '$email'";
    // echo $qry; 
    $result = mysqli_query($con, $qry);
    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();
        echo "<script>alert('Already added');</script>";
    } else {

        $sql = "INSERT INTO `user_registration` (`first_name`, `last_name`, `dob`,`licens`, `gender`, `ph`, `email`, `password`) 
                                         VALUES ('$first_name', '$last_name', '$dob','$licens', '$gender', '$ph', '$email', '$password')";
        mysqli_query($con, $sql);
        echo $sql;

        $lqry = "INSERT INTO `user_login` (`reg_id`,`username`, `password`, `status`, `type`)
VALUES((select max(reg_id) FROM user_registration),'$email', '$password', 'Approved','user')";

        mysqli_query($con, $lqry);
        echo $lqry;

        echo "<script>window.location='./account.php'</script>";
    }
}


?>