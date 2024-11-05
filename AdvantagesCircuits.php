<?php
include './connection/dbconnection.php';
include './header.php';
?>
<style>
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

<section id="hero" class="d-flex flex-column justify-content-center" style="background-image: url('./assets/img/track5.jpg'); height:90dvh;">
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
                Number #1 online booking platform for circuits
                </h1>
            </div>
        </div>
    </div>
</section><!-- End Hero -->

<?php
include './footer.php';
?>