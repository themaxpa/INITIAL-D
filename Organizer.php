<?php
include './connection/dbconnection.php';
include './header.php';
?>
<style>
    .id-card-body {
        padding-left: 15px;
        width: auto;
        height: 349px;
        color: #fff;
        background-color: #343a40;
        border-radius: 0px 0px 15px 15px;
    }

    .header-app {
        background-color: #ee244e;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 10vh;
    }

    .org-con,
    .org-con1 {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .org-title {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 70%;
        height: 10vh;

    }

    .container-org {
        width: 70%;
        height: 60vh;
        border: 1px solid #fff;

    }

    .org-filter {

        display: wordwrap;
        width: 534px;
        height: 30vh;

        padding-top: 10px;
    }

    .org-search {
        display: flex;
        align-items: center;
        justify-content: center;
        display: wordwrap;
        width: 534px;
        height: 23vh;


    }

    .O-title {
        margin: 60px 0 10px 0;
        font-size: 70px;
        font-weight: 700;
        line-height: 86px;
        color: #fff;
    }

    .O-title1 {
        color: #fff;
        font-family: myFont !important;
        margin: 0px;
        font-size: 22px;
        text-align: start;
    }

    .form-control-org {
        width: 73%;
        height: 44px;
        border-radius: 5px;
        font-size: 20px;
        padding: 0 13px;
        margin-bottom: 5px;
    }

    .org-search-fillter {
        display: flex;
        align-items: center;
        justify-content: center;

    }

    .search-pad {

        padding: 0px;
        width: 200px;
        display: flex;
        justify-content: end;
    }

    .select-pad {
        margin-left: 10px;
    }

    .wrapper-org {
        height: 50vh;
        width: 100%;
        padding-top: 40px;
    }

    .container-cards {
        background-color: #20232b;
        width: 100%;
        max-height: max-content;
    }

    .container-cards {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
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


    #hero {
        background-image: url('./assets/img/org.jpg');
        background-size: cover;
    }

    @media (max-width:480px) {
        .card-D {
            margin: 50px 0px 60px 0px;
            width: 300px;
            height: 530px;
            border-radius: 20px;
            background-color: #343a40;
        }

        .header-app {
            display: none;
        }

        #hero {
            background-image: url('./assets/img/phone393/ph7.jpg');
            background-size: cover;
        }

        .wrapper-org {
            height: 50vh;
            width: 100%;
            padding-top: 0px;
        }

        .org-con {
            display: flex;
            align-items: center;
            justify-content: center;
        }


        .org-title {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 85%;
            height: 10vh;
            text-align: end;
        }

        .org-con1 {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            margin: 5px 0px 5px -10px;
        }
    }

    .O-title1 {
        color: #fff;
        font-family: myFont !important;
        margin: 0px;
        font-size: 13px;
        text-align: start;
    }

    .form-control-org {
        width: 105%;
        height: 44px;
        border-radius: 5px;
        font-size: 15px;
        padding: 0 13px;
        margin-bottom: 5px;
    }

    .org-filter {
        display: none;
    }
</style>
<!-- Carousel Silde -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-center">
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
                <h1 class="O-title">
                    Event organizer on our platform
                </h1>
            </div>
            <!-- <h2 style=" font-family:myFont;">Search. Book. Drive. Repeat</h2> -->
        </div>
        <div class="container">
            <div class="carousel-bx1" style="border-radius:10px;">
                <a href="./VendorRegistration.php">Register Now</a>
            </div>
            <div class="carousel-bx2" style="border-radius:10px;">
                <a href="./PageNotFound.php">HOW WE WORK</a>
            </div>
        </div>
    </div>
</section><!-- End Hero -->
<section>
    <div class="wrapper-org" style="margin-top: 35px;">
        <div class="org-con1">
            <div class="org-title">
                <h3 class="O-title1">Looking for a specific organizer or want to get inspired?</h3>
            </div>
        </div>
        <div class="org-con">
            <div class="org-title">
                <h5 class="O-title1" style="color:gray">Simply search through our wide range of registered organizers</h5>
            </div>
        </div>
        <div class="org-con">
            <div class="org-filter">
                <sub class="p-txt">

                    All Netherlands Europe Deutsch English Nederlands Belgium Français Germany Czech Republic Česky Italiano United Kingdom Sweden Svenska Austria Español Switzerland Spain New Zealand Australia Русский Poland Polski France United Arab Emirates Asia & Middle East Portugal Italy India Português Argentina South America</sub>
            </div>
            <div class="org-search">
                <div class="org-search-fillter">
                    <div class="search-pad">

                        <input type="text" name="name" id="name" class="form-control-org" placeholder="Search" required>
                    </div>
                    <div class="select-pad">

                        <select name="gender" class="form-control-org">
                            <label>Date</label>
                            <option value="#">Default</option>
                            <option value="#">Title</option>
                            <option value="#">Date Created</option>

                        </select>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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
                    <div class="id-card-body" style="padding: 10px;">
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
                                            <a rel="alternate" class="track-price" href="./GoToRegistration.php" hreflang="en">
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


<?php
include './footer.php';
?>