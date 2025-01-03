<?php
session_start();
include './connection/dbconnection.php';
include './header.php';
?>

<style>
    /*-------------------------------------------------------------------------------
    # GENERAL  
    ---------------------------------------------------------------------------------*/

    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    .section-reg {
        margin-top: -100px;
        width: 100%;
        height: 100dvh;
        background-image: url('./assets/img/signup1.jpg');
        background-size: cover;
    }

    /*-------------------------------------------------------------------------------
    # LOGIN 
    ---------------------------------------------------------------------------------*/

    .login-container-ph {
        display: none;
        background-image: url('./assets/img/project-img/herobugatti.jpg');
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 300px;
        margin-top: -1000px;
        margin-left: 963px;
        position: absolute;
        animation-name: log;
        animation-duration: 0.7s;
        animation-fill-mode: forwards;
        animation-delay: 0.2s;
        box-shadow: #20232b;
    }
    .login-container {
    background-color: #ee244e;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 300px;
    margin-top: -520px;
    margin-left: 963px;
}


    @keyframes log {
        form {
            transform: translateX(-10px);
        }

        to {
            transform: translateX(10px);
        }
    }



    .login-txt {
        text-align: center;
        margin-bottom: 20px;
    }

    .input-group {
        margin-bottom: 15px;
    }

    .input-group label {
        display: block;
        margin-bottom: 5px;
    }

    .input-group input {
        width: 100%;
        padding: 8px;
        border: 1px solid #ee244b;
        border-radius: 3px;
    }

    button {
        width: 100%;
        padding: 10px;
        /* background-color: #007bff; */
        color: #fff;
        border: none;
        border-radius: 3px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    button:hover {
        background-color: transparent;

    }

    input .login-btn {
        width: 50px;
        height: 10px;
    }

    .login-btn {
        width: 100%;
        padding: 10px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 3px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .login-btn:hover {
        background-color: #0056b3;

    }

    /*-------------------------------------------------------------------------------
    # INFORMATION
    ---------------------------------------------------------------------------------*/
    .info-d {
        width: 50%;
        height: 100vh;
        padding-top: 150px;
        padding-left: 20px;
        animation-name: info-d;
        animation-duration: 0.7s;
        animation-fill-mode: forwards;
        animation-delay: 0.2s;
        margin: 95px 0px 20px 0px
    }

    @keyframes info-d {
        form {
            transform: translateX(-5px);
        }

        to {
            transform: translateX(5px);
        }
    }

    .advantage-txt {
        color: #fff;
        font-size: 37px;
        margin-top: -30px;
        font-weight: bolder;
    }

    .initiald-txt {
        color: #fff;
    }

    .ad-txt {
        color: #fff;
    }

    .ad-txt:hover {

        color: #fff;
    }

    @keyframes titleup {
        form {
            transform: translateX(-10px);
        }

        to {
            transform: translateX(50px);
        }
    }


    .btn-lm {
        border-color: #fff;
        background: transparent;
        transform: skew(-20deg);
        padding: 20px;
        margin-left: 46px;
        margin-top: 10px;
        color: #fff;
        text-transform: uppercase;
        border-radius: 8px;
        padding: 0px 0px;
        white-space: nowrap;
        transition: 0.3s;
        font-size: 17px;
        font-weight: 900;
        width: 100px;
        height: 45px;
        display: inline-block;
        border: 1px solid #fff;
    }

    .btn-lm:hover {
        background-color: #ee244b;
        color: #fff;
        box-shadow: 7px 7px 7px rgba(0, 0, 0, 0.9),
            -5px -5px 5px #fff;
        padding-right: 2px;
    }


    .container-ph {
        max-width: 350px;
        background: #f8f9fd;
        background: linear-gradient(0deg,
                rgb(255, 255, 255) 0%,
                rgb(244, 247, 251) 100%);
        border-radius: 40px;
        padding: 25px 35px;
        border: 5px solid rgb(255, 255, 255);
        margin: 20px;
    }

    .heading {
        text-align: center;
        font-weight: 900;
        font-size: 30px;
        color: #ee244b;
    }

    .form {
        margin-top: 20px;
    }

    .form .input {
        width: 100%;
        background: transparent;
        border: none;
        padding: 15px 20px;
        border-radius: 20px;
        margin-top: 15px;
        box-shadow: black 0px 10px 10px -5px;
        border-inline: 2px solid transparent;
    }

    .form .input::-moz-placeholder {
        color: rgb(170, 170, 170);
    }

    .form .input::placeholder {
        color: rgb(170, 170, 170);
    }

    .form .input:focus {
        outline: none;
        border-inline: 2px solid #12b1d1;
    }

    .form .forgot-password {
        display: block;
        margin-top: 10px;
        margin-left: 10px;
    }

    .form .forgot-password a {
        font-size: 11px;
        color: #ee244b;
        text-decoration: none;
    }

    .form .login-button {
        display: block;
        width: 100%;
        font-weight: bold;
        background: #ee244b;
        color: white;
        padding-block: 15px;
        margin: 20px auto;
        border-radius: 20px;
        box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 20px 10px -15px;
        border: none;
        transition: all 0.2s ease-in-out;
    }

    .form .login-button:hover {
        transform: scale(1.03);
        background-image: url('./assets/img/bikefire.jpg');
        background-size: cover;
    }

    .form .login-button:active {
        transform: scale(0.95);
        box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 15px 10px -10px;
    }

    .agreement {
        display: block;
        text-align: center;
        margin-top: 15px;
        color: #fff;
        font-size: 9px;
    }

    .agreement a {
        text-decoration: none;
        font-size: 9px;
        color: #0056b3;
    }

    .footer {
        padding: 70px 10px 0px 10px;
    }

    .container-ph{
    display: none;
}
    /* Media Query 320 */
    @media (max-width: 480px) {
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url('./assets/img/phone393/ph13.jpg');
            height: 800px;
            background-size: cover;
            background-repeat: no-repeat;
            object-fit: cover;
            backdrop-filter: blur(5px);
        }

        .container-ph {
            display: block;
            background: transparent;
            border: 0.5px solid #fff;
        }

        .section-reg {
            margin-top: 0px;
            width: 100%;
            height: 100%;
            background: transparent
        }


    }

    /* Media Query 480 */
    @media (max-width: 480px) {
        input{
            color: #fff;
        }

        .info-d,
        .login-container-ph,
        .bottom-nav-list,
        .footer {
            display: none;
        }

    }
</style>



<section>



    <!-- phone 393 -->
     
    <div class="container-ph">
        <div class="heading">Sign In</div>
        <form class="form" method="post">

            <input placeholder="E-mail" id="email" name="username" type="email" class="input" required="" />

            <input placeholder="Password" id="password" name="password" type="password" class="input" required="" />

            <span class="forgot-password"><a href="./ForgotPassword.php">Forgot Password ?</a></span>
            <input type="submit" name="login" value="LOGIN" class="login-button" />
        </form>

        <span class="agreement">Don't have an account?<a href="./registration.php"> Sign Up</a></span>
    </div>
    <!--  -->


    <section>
        <div class="section-reg">
            <div class="info-d">
                <h2 class="advantage-txt">Advantages for trackday &amp; event organizer</h2>
                <p class="initiald-txt ">Initial D Booking is the additional sales channel to your website or direct sales. As an event organizer, you can easily offer available slots of your events on our platform and receive the payment immediately after a customer&#039;s booking.</p>
                <ul class="">
                    <li class="py-2"><i class="fa fa-check mr-2 text-primary"></i> <span class="ad-txt">Additional sales channel</span></li>
                    <li class="py-2"><i class="fa fa-check mr-2 text-primary"></i> <span class="ad-txt">Full control over your availability</span></li>
                    <li class="py-2"><i class="fa fa-check mr-2 text-primary"></i> <span class="ad-txt">Secure online payment</span></li>
                    <li class="py-2"><i class="fa fa-check mr-2 text-primary"></i> <span class="ad-txt">No financial risk and upfront investment</span></li>
                    <li class="py-2"><i class="fa fa-check mr-2 text-primary"></i> <span class="ad-txt">Bookable in less than 5 minutes</span></li>
                </ul>
                <a class="learnMore-btn" href=" ">
                    <button class="btn-lm"> more<i class="fa fa-chevron-right"></i></button>
                </a>
            </div>


            <div class="login-container">
                <h2 class="login-txt">Login</h2>
                <form method="POST">
                    <div class="input-group">
                        <label for="username"><i class='bx bxs-user-circle'></i>Email:</label>
                        <input type="text" id="username" name="username" required>
                    </div>

                    <div class="input-group">
                        <label for="password"><i class='bx bxs-lock-alt'></i>Password:</label>
                        <input type="password" id="password" name="password" required>
                        <a href="./ForgotPassword.php"><sub>forgot password?</sub></a>
                    </div>

                    <div>
                        <input class="login-btn" type="submit" name="login" value="LOGIN">
                    </div>

                </form>
                <p><sub> Don't have an account?<a href="./registration.php">Signup</a></sub></p>


            </div>
        </div>
    </section>


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

    if (isset($_REQUEST['login'])) {

        $username = $_REQUEST['username'];

        $password = $_REQUEST['password'];

        $qry = "SELECT * FROM  `user_login` WHERE `username` = '$username' AND `password` ='$password'"; //AND `status`='Approved'

        // echo $qry;

        $result = mysqli_query($con, $qry);

        if ($result->num_rows > 0) {

            $data = $result->fetch_assoc();

            $uid = $data['login_id'];

            $type = $data['type'];

            $_SESSION['login_id'] = $uid;

            if ($type == "admin") {

                echo "<script>alert('Log in Successful')); </script>";


                echo "<script>window.location='./Admin/AdminIndex.php'</script>";
            } elseif ($type == "user") {

                echo "<script>alert('Log in Successful');</script>";

                echo "<script>window.location='./User/UserHomePage.php'</script>";
            } elseif ($type == "vendor") {
                echo "<script>alert('Log in Successful');</script>";

                echo "<script>window.location='./Vendor/VendorHomePage.php'</script>";
            } else {



                echo "<script>alert('Invalid User ');</script>";

                // echo "<script>window.location='account.php'</script>";

            }
        }
    } ?>