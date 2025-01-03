<?php
session_start();
include '../connection/dbconnection.php';
// include './AdminHeader.php';
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
        <div class="card-body" style="background-color: #ee244b;">
            <h4 class="h1-txt">Organizers Details</h4>
        </div>
    </div>
</div><!-- End Reports -->

<!-- <div class="container"> -->
    <section>
    <div class="table-responsive-sm">
        <table class="table table-dark table-hover" style="margin-top: 0px;">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Company Name</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $qry = "SELECT * FROM `user_login` JOIN `vendor_registration` ON `user_login`.`vendor_id`= `vendor_registration`.`vendor_id` WHERE `user_login`.`type` = 'vendor' ";
                // echo $qry;
                $result = mysqli_query($con, $qry);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $id = $row['vendor_id'];

                        echo "<tr>";

                        echo "<td>" . $row["name"] . "</td>";
                        echo "<td>" . $row["email"] . "</td>";
                        echo "<td>" . $row["phone"] . "</td>";
                        echo "<td>" . $row["address"] . "</td>";
                        echo "<td>" . $row["company_name"] . "</td>";
                       
                   
                        echo "<td> <a class='btn btn-outline-primary' href='./DeleteOrganizer.php?id={$id}'> Remove </a> </td>";
                        echo "</tr>";
                    }}
                ?>
            </tbody>
        </table>
    </div>
<!-- </div> -->

<?php
include './AdminFooter.php';
?>