<?php
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
    <link href="./assets//css/style.css" type="text/css" rel="stylesheet">

    <style>
            #show{
            display: none;
        }
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

        .ph-login {
            margin-left: 25px;
        }

        .title-h1 {
            margin: 60px 0 10px 0;
            font-size: 90px;
            font-weight: 700;
            line-height: 86px;
            color: gray;
        }

        .title-h2 {
            font-family: myFont;
            color: gray;
        }

        .trackD-th {
            font-size: 20px;
            text-transform: uppercase;
        }
        .Btn {
            display:none;
        }
        /* media Query 480 */
   
        @media (max-width: 480px) {
            .title .title-h1 {
                margin: 160px 0 10px 0;
                font-size: 38px;
                font-weight: 700;
                line-height: 35px;
                color: gray;
            }
            .Btn {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            width: 45px;
            height: 45px;
            border: none;
            border-radius: 50%;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            transition-duration: 0.3s;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.199);
            background-color: white;
        }
        /* plus sign */
        .sign {
            width: 100%;
            transition-duration: 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .sign svg {
            width: 17px;
        }

        .sign svg path {
            fill: black;
        }

        /* text */
        .text {
            position: absolute;
            right: 0%;
            width: 0%;
            opacity: 0;
            color: white;
            font-size: 1.2em;
            font-weight: 600;
            transition-duration: 0.3s;
        }

        /* hover effect on button width */
        .Btn:hover {
            background-color: black;
            width: 125px;
            border-radius: 40px;
            transition-duration: 0.3s;
        }

        .Btn:hover .sign {
            width: 30%;
            transition-duration: 0.3s;
            padding-left: 20px;
        }

        .Btn:hover .sign svg path {
            fill: white;
        }

        /* hover effect button's text */
        .Btn:hover .text {
            opacity: 1;
            width: 70%;
            transition-duration: 0.3s;
            padding-right: 10px;
        }

        /* button click effect*/
        .Btn:active {
            transform: translate(2px, 2px);
        }

        #show{
            display: flex;
        }
        }

        /* logout */
      /* End log out */

     


        /* End footer */
    </style>

</head>

<body>
    <header id="header" class="fixed-top">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-9 d-flex align-items-center justify-content-lg-between">
                    <a href="./AdminHomePage.php" class="logo me-auto me-lg-0"><img src="assets/img/D LOGO.png" alt="" class="img-fluid" style=" max-height: 70px;"></a>

                    <nav id="navbar" class="navbar order-last order-lg-0">
                        <ul>
                            <!-- <li><a class="nav-link scrollto active" href="./TrackDay.php">Track Days</a></li>
                            <li><a class="nav-link scrollto" href="./Organizer.php">Organizer</a></li>
                            <li><a class="nav-link scrollto" href="./RacingTeam.php">Racing Team</a></li> -->
                            <li><a id="show" class="nav-link scrollto" href="./AdminIndex.php">HOME</a></li>
                            <!-- <li><a  id="show" class="nav-link scrollto " href="../Logout.php">Logout</a></li> -->
                            <li id="show"  class="dropdown"><a href="#"><span>View<span> <i class="bi bi-chevron-down"></i></a>
                                <ul>
                                    <li><a href="./ViewOrganizer.php">Organizer</a></li>
                                    <li><a href="./ViewUser.php">User</a></li>
                                    <li><a href="./ViewTracks.php">Tracks</a></li>
                                    <!-- <li class="dropdown"><a href="./ViewTracks.php"><span>Tracks</span> <i class="bi bi-chevron-right"></i></a> -->
                                    <ul>
                                      
                                        <!-- <li><a href="#">Tamil Nadu</a></li>
                      <li><a href="#">Karnataka</a></li>
                      <li><a href="#">Track 9</a></li>
                      <li><a href="#">Track 10</a></li> -->
                                    </ul>
                            </li>
                            <!-- <li><a href="./registration.php">User</a></li> -->
                            <!-- <li><a href="#">Track 4</a></li>
                  <li><a href="#">Track 5</a></li> -->
                        </ul>
                        </li>
                        <div class="ph-login">
                            <li>
                                <button class="Btn">
                                    <div class="sign">
                                        <svg viewBox="0 0 512 512">
                                            <path
                                                d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"></path>
                                        </svg>
                                    </div>
                                    <div class="text">Logout</div>
                                    <a href="../Logout.php"></a>
                                </button>
                                </i>
                            </li>
                        </div>
                        </ul>
                        <i class="bi bi-list mobile-nav-toggle"></i>
                    </nav><!-- .navbar -->
                    <div class="filter">
                        <a class="account-btn" href="#" data-bs-toggle="dropdown"><i class="bi bi-person-circle" style=" font-size:30px"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                                <h6>Filter</h6>
                            </li>

                            <li><a class="dropdown-item" href="./Profile.php">Profile</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="../Logout.php">Sign Out</a></li>
                        </ul>
                    </div>




                    </a>
                </div>
            </div>
        </div>
    </header><!-- End Header col-xl-8 --> </header><!-- End Header -->
    <section id="hero" class="d-flex flex-column justify-content-center" style="background-image: url('../assets/img/workspace.jpg'); background-size: cover;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="title">
                    <h1 class="title-h1">
                        Administrative workspace
                    </h1>
                </div>
                <h2 class="title-h2">The only way to do great work is to love what you do</h2>
            </div>
            <div class="container">
            </div>
    </section><!-- End Hero -->
<!-- =========================================================================================================================================== -->


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
<!-- =========================================================================================================================================== -->

<!-- =========================================================================================================================================== -->
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
<!-- =========================================================================================================================================== -->

<!-- =========================================================================================================================================== -->
<div class="col-12" style="margin-top: 100px;">
    <div class="card">
        <div class="card-body" style="background-color: #ee244b;">
            <h4 class="h1-txt">User Details</h4>
        </div>
    </div>
</div><!-- End Reports -->
<!-- <div class="container"> -->
    <section>
    <div class="table-responsive-sm">
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th>UserName</th>
                    <th>Status</th>
                    <th>Type</th>
                    <th> Name</th>
                    <!-- <th>Last Name</th> -->
                    <th>DOB</th>
                    <th>Gender</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $qry = "SELECT * FROM `user_login` JOIN `user_registration` ON `user_login`.`reg_id`= `user_registration`.`reg_id` WHERE `status` = 'approved' ";
                echo $qry;
                $result = mysqli_query($con, $qry);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $id = $row['reg_id'];

                        echo "<tr>";

                        echo "<td>" . $row["username"] . "</td>";
                        echo "<td>" . $row["status"] . "</td>";
                        echo "<td>" . $row["type"] . "</td>";
                        echo "<td>" . $row["first_name"] .$row["last_name"] . "</td>";
                        // echo "<td>" . $row["last_name"] . "</td>";
                        echo "<td>" . $row["dob"] . "</td>";
                        echo "<td>" . $row["gender"] . "</td>";
                        echo "<td>" . $row["ph"] . "</td>";
                        echo "<td>" . $row["email"] . "</td>";

                        echo "<td> <a class='btn btn-outline-danger' href='./DeleteUser.php? id={$id}&status=rejected'> Remove </a> </td>";

                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='7'> No Data Available</td> </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
<!-- =========================================================================================================================================== -->



    <!-- Revenue Card -->
    <div class="col-xxl-4 col-md-6">
        <div class="card info-card revenue-card">

            <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                        <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
            </div>

            <div class="card-body">
                <h5 class="card-title">Revenue <span>| This Month</span></h5>

                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                        <h6>$3,264</h6>
                        <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                    </div>
                </div>
            </div>

        </div>
    </div><!-- End Revenue Card -->

    <!-- Customers Card -->
    <div class="col-xxl-4 col-xl-12">

        <div class="card info-card customers-card">

            <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                        <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
            </div>

            <div class="card-body">
                <h5 class="card-title">Customers <span>| This Year</span></h5>

                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                        <h6>1244</h6>
                        <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>

                    </div>
                </div>

            </div>
        </div>

    </div><!-- End Customers Card -->

    </div>

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="">
                <div class="row">

                    <!-- Top Selling -->
                    <div class="col-12">
                        <div class="card top-selling overflow-auto">
                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>
                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>

                            <div class="card-body pb-0">
                                <h5 class="card-title"> Initial D <span>| Today</span></h5>


                                <tbody>
                                    <tr>
                                        <th scope="row"><a href="#"><img src="" alt=""></a></th>
                                        <td><a href="#" class="text-primary fw-bold">Ut inventore ipsa voluptas nulla</a></td>
                                        <td>1234</td>
                                        <td class="fw-bold">44444 </td>
                                        <td>$5,828</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="#"><img src="assets/img/product-2.jpg" alt=""></a></th>
                                        <td><a href="#" class="text-primary fw-bold">Exercitationem similique doloremque</a></td>
                                        <td>$46</td>
                                        <td class="fw-bold">98</td>
                                        <td>$4,508</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="#"><img src="assets/img/product-3.jpg" alt=""></a></th>
                                        <td><a href="#" class="text-primary fw-bold">Doloribus nisi exercitationem</a></td>
                                        <td>$59</td>
                                        <td class="fw-bold">74</td>
                                        <td>$4,366</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="#"><img src="assets/img/product-4.jpg" alt=""></a></th>
                                        <td><a href="#" class="text-primary fw-bold">Officiis quaerat sint rerum error</a></td>
                                        <td>$32</td>
                                        <td class="fw-bold">63</td>
                                        <td>$2,016</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="#"><img src="assets/img/product-5.jpg" alt=""></a></th>
                                        <td><a href="#" class="text-primary fw-bold">Sit unde debitis delectus repellendus</a></td>
                                        <td>$79</td>
                                        <td class="fw-bold">41</td>
                                        <td>$3,239</td>
                                    </tr>
                                </tbody>
                                </table>

                            </div>

                        </div>
                    </div><!-- End Top Selling -->

                </div>
            </div><!-- End Left side columns -->

            <!-- Right side columns -->
            <div class="">

                <!-- Recent Activity -->
                <div class="card">
                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                                <h6>Filter</h6>
                            </li>

                            <li><a class="dropdown-item" href="#">Today</a></li>
                            <li><a class="dropdown-item" href="#">This Month</a></li>
                            <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">Recent Activity <span>| Today</span></h5>

                        <div class="activity">

                            <div class="activity-item d-flex">
                                <div class="activite-label">32 min</div>
                                <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                                <div class="activity-content">
                                    Quia quae rerum <a href="#" class="fw-bold text-dark">explicabo officiis</a> beatae
                                </div>
                            </div><!-- End activity item-->

                            <div class="activity-item d-flex">
                                <div class="activite-label">56 min</div>
                                <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                                <div class="activity-content">
                                    Voluptatem blanditiis blanditiis eveniet
                                </div>
                            </div><!-- End activity item-->

                            <div class="activity-item d-flex">
                                <div class="activite-label">2 hrs</div>
                                <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                                <div class="activity-content">
                                    Voluptates corrupti molestias voluptatem
                                </div>
                            </div><!-- End activity item-->

                            <div class="activity-item d-flex">
                                <div class="activite-label">1 day</div>
                                <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                                <div class="activity-content">
                                    Tempore autem saepe <a href="#" class="fw-bold text-dark">occaecati voluptatem</a> tempore
                                </div>
                            </div><!-- End activity item-->

                            <div class="activity-item d-flex">
                                <div class="activite-label">2 days</div>
                                <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                                <div class="activity-content">
                                    Est sit eum reiciendis exercitationem
                                </div>
                            </div><!-- End activity item-->

                            <div class="activity-item d-flex">
                                <div class="activite-label">4 weeks</div>
                                <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                                <div class="activity-content">
                                    Dicta dolorem harum nulla eius. Ut quidem quidem sit quas
                                </div>
                            </div><!-- End activity item-->

                        </div>

                    </div>
                </div><!-- End Recent Activity -->

                <!-- Budget Report -->
                <div class="card">
                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                                <h6>Filter</h6>
                            </li>

                            <li><a class="dropdown-item" href="#">Today</a></li>
                            <li><a class="dropdown-item" href="#">This Month</a></li>
                            <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                    </div>

                    <div class="card-body pb-0">
                        <h5 class="card-title">Budget Report <span>| This Month</span></h5>

                        <div id="budgetChart" style="min-height: 400px;" class="echart"></div>


                    </div>
                </div><!-- End Budget Report -->

                <!-- Website Traffic -->
                <div class="card">
                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                                <h6>Filter</h6>
                            </li>

                            <li><a class="dropdown-item" href="#">Today</a></li>
                            <li><a class="dropdown-item" href="#">This Month</a></li>
                            <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                    </div>

                    <div class="card-body pb-0">
                        <h5 class="card-title">Website Traffic <span>| Today</span></h5>

                        <div id="trafficChart" style="min-height: 400px;" class="echart"></div>


                    </div>
                </div><!-- End Website Traffic -->
                </main><!-- End #main -->
                <!-- ======= Footer ======= -->

                <footer class="footer" style="padding: 70px 10px 0px 10px;">
                    <div class="container">
                        <div class="row">
                            <div class="footer-col">
                                <h4>ABOUT US</h4>
                                <ul>
                                    <li><a href="../HowWeWork.php">how we work</a></li>
                                    <li><a href="../OurResponsibility.php">Our responsibility</a></li>
                                    <li><a href="../PageNotFound.php">Our team & investors</a></li>
                                    <li><a href="../Career.php">Career</a></li>
                                    <li><a href="../News.php">News</a></li>
                                </ul>
                            </div>
                            <div class="footer-col">
                                <h4>SERVICES</h4>
                                <ul>
                                    <li><a href="../Sustainability.php">Sustainability</a></li>
                                    <li><a href="#">FAQ/Help</a></li>
                                    <li><a href="../Terms&Conditions.php">Terms & conditions</a></li>
                                    <li><a href="../Privacy&Policy.php">Privacy & policy</a></li>
                                    <li><a href="../Imprint.php">Imprint</a></li>
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
                                    <li><a href="#">trackdays@circuit-booking.com</a></li>
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
                <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
                <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
                <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
                <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
                <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
                <script src="../assets/vendor/php-email-form/validate.js"></script>

                <!-- Template Main JS File -->
                <script src="../assets/js/main.js"></script>
                <script src="../assets/js/script.js"></script>

</body>

</html>