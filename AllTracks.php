<?php
include './connection/dbconnection.php';
include './header.php';
?>


<!-- Reports -->
 <section>
<div class="col-12" style="margin-top: 100px;">
    <div class="card">
        <div class="card-body" style="background-color: #ee244b; border:none">
            <h4 class="h1-txt">All Tracks</h4>
        </div>
    </div>
</div><!-- End Reports -->

<div class="grid-card" style="display:flex; flex-wrap:wrap">
<?php
$qry = "SELECT `vendor_id`,`image`,`track_name`,`event`,`date`,`vehicle_type`,`category`,`organizer`,`noise_level`,`price` FROM `tracks`";
// echo $qry;
$data = mysqli_query($con, $qry);

if ($data->num_rows > 0) {
    while ($row = $data->fetch_assoc()) {
        $uid = $row['vendor_id'];
?>

        <!--== Track===-->
        <div class="card-D" style=" width: 370px; height: 530px;";>
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
} ?>
</div>
<!--End item -->

</div>
</div>

</section><!--End Track Section --->

<?php
include './footer.php';
?>