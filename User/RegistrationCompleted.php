<?php
include '../connection/dbconnection.php';
include './UserHeader.php';
?>
<style>
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
        font-size: 13px;
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
        width: 185px;
        text-transform: uppercase;
        padding: 13px 5px;
        border-radius: 10px;
        margin-left: 26px;
    }

    .P-txt {
        color: #fff;
        font-family: myFont !important;
        text-transform: uppercase;
    }

    @media screen and (max-width: 2560px) {
        .header-app {
            background-color: #ee244e;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 10vh;
        }

        .feature-rt {
            background-color: #ee244e;
            height: 95dvh;
        }

        .app-title {
            padding-top: 10px;
            font-size: 23px;
        }

    }

    @media screen and (max-width: 1189px) {
        .app-title {
            padding-top: 10px;
            font-size: 10px;
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

    .hero-down-section {
        width: auto;
        height: 85vh;
        background-color: #20232b;
        display: flex;
    }

    .heroDown-1-div {
        width: 60%;
        height: 100%;
        display: flex;
        justify-content: center;
    }

    .heroDown-2-div {
        width: 40%;
        height: 100%;

    }
   .btn2-con{
height: min-content;
   }
</style>
<section>
    <!-- Carousel Silde -->
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center" style="background-image: url('../assets/img/track5.jpg'); background-size: cover; height:80vh">
        <div class="header-app" style="margin-top: 70px; position:relative">
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
                <div class="title">
                    <h1 class="title-h1" style="    margin: 60px 0 10px 0; font-size: 70px; font-weight: 700;line-height: 86px; color: #fff;">
                        Your registration has been completed
                    </h1>
                </div>
            </div>
        </div>
    </section><!-- End Hero -->
    <div class="hero-down-section">
        <div class="heroDown-1-div">
            <div class="btn2-con" style="margin-top:50px;margin-left:143px">
                <img src="../assets/img/checkMark.png" style="width:40px;height:40px;">
                <h6 class="h1-txt" style="color:#ee244e">Thank you for the registration!</h6>
                <p class="p-txt">Your account has been created and a verification email has been sent to your registered email<br>address. Please click on the verification link included in the email to activate your account.</p>
                <div class="header-app" style="margin-top:0px;position:relative;background-color:transparent">
            <div class="carousel-bx3" style="width: 300px;">
                <a href="./UserHomePage.php">RETURN TO HOME PAGE</a>
            </div>
            <div class="carousel-bx31" style="width: 300px;background-color:#ee244e">
                <a href="../registration.php class=" style="background-color:#ee244e">RETURN TO SIGNUP PAGE</a>
            </div>
        </div>
            </div>
        </div>

        <div class="heroDown-2-div">
            <div class="card-D" style="width: 325px;height: 490px;background-color: #ee244e;">
                <div class="id-card-body" style="padding: 30px;">
                    <div class="id-body-header">
                        <h5 class="h1-txt" style="font-size: 30px;"><br>
                            The best place to start your track experience
                        </h5><br>
                        <div class="row mt-4">
                            <div class="flex__columns">
                                <div class="col-6 flex-column p-0 pr-2" style="margin:-50px 0px 0px 15px;">

                                    <div class="price" style="margin-top: 10px;">
                                        <a rel="alternate" class="track-price" href="./ContactUs.php" hreflang="en">
                                            <div class="carousel-bx3">
                                                <a href="https://www.apple.com/in/app-store/"><i class="bi bi-apple"></i> Download app store</a>
                                            </div>
                                            <div class="carousel-bx31" style="margin-top: 15px;">
                                                <a href="https://play.google.com/store/apps?hl=en_IN"><i class="bi bi-google-play"></i> Download Google Play</a>
                                            </div>
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

    <?php
    include './UserFooter.php';
    ?>