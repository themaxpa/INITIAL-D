<?php
include './connection/dbconnection.php';
include './header.php';
?>
<style>
    .aff-con {
        width: 100%;
        height: 30vh;
        display: flex;
        justify-content: center;
        align-items: center;
      
    }

    .ap-conainer {
        width: 100%;
        height: 80vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .ap1 {
        width: 100%;
        height: 100%;
     
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .ap1 img {
        width: 80%;
        height: 80%;
        border-radius: 20px;
    }

    .ap-txt {
        width: 550px;
        height: 65vh;
    
        margin-right: 205px;
    }
    .list-ap{
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 25px;
    }
    .ap-partners{
        display: flex;
        flex-direction:column;
        justify-content: center;
        align-items: center;
        background-color: #ee244e;
        width: auto;
        height: 40vh;
    }
    .ap-become-ap{
        display: flex;
        flex-direction:column;
        justify-content: center;
        align-items: center;
        background-color: #20232b;
        width: auto;
        height: 40vh;
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

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-center" style="background-image: url('./assets/img/track-wc2.jpg'); height:90dvh;">
    <div class="header-app">
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
            <div class="sustain-title">
                <h1 style="    margin: 50px 0px 0px 0px;font-size: 58px;font-weight: 700;line-height: 64px;color: #fff;">
                    Affiliate Program for Circuits
                </h1>
            </div>
            <div class="sustain-title2">
                <h1 style="font-family:myFont; color:#fff; font-size:25px; margin-top:-185px">Track day organizers can access more customers via our multi-channel sales strategy</h2>
            </div>
        </div>
    </div>
</section><!-- End Hero -->
<div class="aff-con">
    <h3 class="h1-txt">Benefits for our Affiliate Partner</h3>
</div>
<div class="ap-conainer">
    <div class="ap1">
        <img src="./assets/img/herobg.png">
    </div>
    <div class="ap1">
        <div class="ap-txt">
            <p class="p-txt">As an affiliate partner, you can monetize the reach of your website. You financially participate from any gross turn-over generated through track day and driving experience bookings that were triggered via your website.</p>
            <div class="list-ap">
                <div class="ap-ul">
                    <ul>
                        <li class="p-txt">Benefits affiliate partner:</li><br>
                         <li class="p-txt">Monetarization of your website's reach</li><br>
                         <li class="p-txt">Customizable look & feel to your website's design</li><br>
                         <li class="p-txt">Easy integration via script tag. No coding required.</li><br>
                    </ul>
                </div>
                <div class="ap-ul">
                    <ul>
                         <li class="p-txt">Benefits track day organizers:</li><br>
                         <li class="p-txt">Additional point-of-sales for on-track events</li><br>
                         <li class="p-txt">Track days bookable at corresponding circuit</li><br>
                         <li class="p-txt">Automatic update of their offers on racetrack’s website</li><br>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="ap-partners">
    <h3 class="h1-txt">Our Affiliate Partners</h3>
    <p class="p-txt">All on-track events of Circuit Booking can directly be booked via the following affiliate channels</p>
</div>
<div class="ap-become-ap">
    <h3 class="h1-txt">Become an Affiliate Partner</h3>
    <p class="p-txt">All on-track events of Circuit Booking can directly be booked via the following affiliate channels</p>
</div>

<?php
include './footer.php';
?>