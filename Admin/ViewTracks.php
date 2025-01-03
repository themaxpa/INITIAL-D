<?php
session_start();
include '../connection/dbconnection.php';
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
    <link href="../assets/img/favicon.png" rel="icon">
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">


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
    <link href="./assets/css/style.css" type="text/css" rel="stylesheet">

    <style>
    .Container {
        background-image: url(../assets/img/wp12661363-bike-racing-4k-wallpapers.jpg);
        display: grid;
        background-position: center;
        background-size: cover;
        width: auto;
        height: 100dvh;
        background-attachment: scroll;
        padding: 145px;
    }

    .trackD-th {
        font-size: 20px;
        text-transform: uppercase;
    }

    
    @media (max-width:480px) {
      .mobile-nav-toggle {
        display: flex;
      }


      .mobile-nav-toggle {
        color: #fff;
        font-size: 28px;
        cursor: pointer;
        display: flex;
        line-height: 0;
        transition: 0.5s;
      }
    }
</style>

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-9 d-flex align-items-center justify-content-lg-between">
                <a class="icon" href="./AdminIndex.php"> <img src="../assets/img/icons/back-button64px.png"></a>
                    <!-- <a href="./AdminHomePage.php" class="logo me-auto me-lg-0"><img src="../assets/img/D LOGO.png" alt="" class="img-fluid"></a> -->

                    <nav id="navbar" class="navbar order-last order-lg-0">
                    </nav><!-- .navbar -->
                </div>
            </div>
        </div>
    </header><!-- End Header -->



<!-- Reports -->
<div class="col-12" style="margin-top: 100px;">
    <div class="card">
        <div class="card-body" style="background-color: #babcc5;">
            <h4 class="h1-txt" style="color: #ee244e;">Track Details</h4>
        </div>
    </div>
</div><!-- End Reports -->
<div class="TrackDetails">
    <div class="table-responsive-sm">
        <table class="table table-dark table-hover table-sm">
            <thead>
                <tr>
                    <th class="trackD-th">Organizer ID</th>
                    <th class="trackD-th">Track Name</th>
                    <th class="trackD-th">Event</th>
                    <th class="trackD-th">Date</th>
                    <th class="trackD-th">Vehicle Type</th>
                    <th class="trackD-th">Category</th>
                    <th class="trackD-th">Organizer</th>
                    <th class="trackD-th">Noise Level</th>
                    <th class="trackD-th">Price</th>
                    <th class="trackD-th">Status</th>
                </tr>
            </thead>
            <?php
            $qry = "SELECT tracks.*,user_login.* FROM `tracks`,`user_login` where `user_login`.vendor_id=`tracks`.vendor_id";
            // echo $qry;
            $data = mysqli_query($con, $qry);

            if ($data->num_rows > 0) {
                while ($row = $data->fetch_assoc()) {
                    $uid = $row['vendor_id'];

                    echo "<tr>";
                    echo "<td>" . $row["vendor_id"] . "</td>";
               ?> 
                 <a href="../TrackBooking.php" ><?php echo "<td>" . $row["track_name"] . "</td>"; ?></a> 
             <?php 
                    echo "<td>" . $row["event"] . "</td>";
                    echo "<td>" . $row["date"] . "</td>";
                    echo "<td>" . $row["vehicle_type"] . "</td>";
                    echo "<td>" . $row["category"] . "</td>";
                    echo "<td>" . $row["organizer"] . "</td>";
                    echo "<td>" . $row["noise_level"] . "</td>";
                    echo "<td>" . $row["price"] . "</td>";

                    if ($row["status"] == "Pending") {
                        echo "<td> <a class='btn btn-outline-danger' href='./ManageTracks.php?id={$uid}&status=rejected'> Approved</a> </td>";
                    } else if ($row["status"] == "Approved")
                        echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='7'> No Data Available</td> </tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</div>

<?php
include './AdminFooter.php';
?>