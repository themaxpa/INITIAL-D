<?php
session_start();
include '../connection/dbconnection.php';
@$uid = $_SESSION['login_id'];
@$rid = $_GET['rid'];
// echo $uid;
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link rel="stylesheet" as="style" onload="this.rel='stylesheet'" href="https://fonts.googleapis.com/css2?display=swap&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900&amp;family=Plus+Jakarta+Sans%3Awght%40400%3B500%3B700%3B800" />

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Race Track History</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">


    <!-- Font Awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/login.css4 " rel="stylesheet">
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>

    <style>
        /* Media Query =====================================================================================================================================
===================================================================================================================================================*/

        @media (max-width: 480px) {}
    </style>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container-fluid">

            <div class="row justify-content-center">
                <div class="col-xl-9 d-flex align-items-center justify-content-lg-between">
                    <a href="./UserHomePage.php" class="logo me-auto me-lg-0"><img src="../assets/img/D LOGO.png" alt="" class="img-fluid"></a>
                    <nav id="navbar" class="navbar order-last order-lg-0">
                        <ul>
                            <li><a class="nav-link scrollto active" href="./TrackDay.php">Track Days</a></li>
                            <!-- <li><a class="nav-link scrollto" href="./Organizer.php">Organizer</a></li> -->
                            <li><a class="nav-link scrollto" href="./RacingTeam.php">Racing Team</a></li>
                            <li><a class="nav-link scrollto " href="./CorporateEvent.php">Corporate Event</a></li>
                            <li><a class="nav-link scrollto " href="./ContactUs.php">Contact</a></li>
                            <li class="nav-item d-block d-lg-none">
                                <a class="nav-link nav-icon search-bar-toggle " href="#">
                                    <i class="bi bi-search"></i>
                                </a>
                            </li><!-- End Search Icon-->
                            <?php

                            $dqry = "SELECT * FROM `user_login` JOIN `user_registration` ON `user_login`.`reg_id`= `user_registration`.`reg_id` where login_id='$uid'";
                            // echo $dqry;
                            $result = mysqli_query($con, $dqry);
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    // $rid = $row['reg_id'];

                            ?>

                                    <li class="nav-item dropdown pe-3">
                                        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                                            <img style="width:40px;height:40px" src="./images/<?php echo $row['image']; ?>" alt="Profile" class="rounded-circle">
                                            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo  $row["first_name"]; ?></span>
                                        </a><!-- End Profile Iamge Icon -->

                                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                                            <li class="dropdown-header">
                                                <h6><?php echo  $row["first_name"]; ?> <?php echo  $row["last_name"]; ?></h6>
                                                <span>Web Designer</span>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>

                                            <li>
                                                <a class="dropdown-item d-flex align-items-center" href="./UserProfile.php?rid=<?php echo  $row["reg_id"]; ?>">
                                                    <i class="bi bi-person"></i>
                                                    <span>My Profile</span>
                                                </a>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>

                                            <li>
                                                <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                                    <i class="bi bi-gear"></i>
                                                    <span>Account Settings</span>
                                                </a>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>

                                            <li>
                                                <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                                                    <i class="bi bi-question-circle"></i>
                                                    <span>Need Help?</span>
                                                </a>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>

                                            <li>
                                                <a class="dropdown-item d-flex align-items-center" href="../Logout.php">
                                                    <i class="bi bi-box-arrow-right"></i>
                                                    <span>Sign Out</span>
                                                </a>
                                            </li>
                                        </ul>
                                <?php
                                }
                            }
                                ?>
                                <!-- End Profile Dropdown Items -->
                                    </li><!-- End Profile Nav -->
                        </ul>
                        </ul>
                        <i class="bi bi-list mobile-nav-toggle"></i>
                    </nav><!-- .navbar -->
                </div>
            </div>
        </div>
    </header><!-- End Header -->

    <div class="relative flex size-full min-h-screen flex-col bg-gray-700 group/design-root overflow-x-hidden" style='font-family: "Plus Jakarta Sans", "Noto Sans", sans-serif;'>
        <div class="flex flex-col gap-2 bg-gray-700 p-4 pb-2" style="margin-top: 100px;">
            <div class="flex items-center h-12 justify-between">
                <div class="text-[#111418] flex size-12 shrink-0 items-center" data-icon="ArrowLeft" data-size="24px" data-weight="regular">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                        <path d="M224,128a8,8,0,0,1-8,8H59.31l58.35,58.34a8,8,0,0,1-11.32,11.32l-72-72a8,8,0,0,1,0-11.32l72-72a8,8,0,0,1,11.32,11.32L59.31,120H216A8,8,0,0,1,224,128Z"></path>
                    </svg>
                </div>
            </div>
            <p class="h1-txt" style="color:black;font-size:25px">Booking history</p>
            <?php
            // $qry = "SELECT * FROM `booking` JOIN `tracks` WHERE `booking`.`reg_id`=$uid";
            $qry = "SELECT * FROM `booking` JOIN `tracks` WHERE `booking`.`reg_id`=$uid    AND `tracks`.`track_id`= `booking`.`track_id` ";
         
            // echo $qry;
            $data = mysqli_query($con, $qry);

            if ($data->num_rows > 0) {
                while ($row = $data->fetch_assoc()) {
                    // $uid = $row['login_id'];
            ?>

        </div>
        <h4 class="text-[#60758a] text-sm font-bold leading-normal tracking-[0.015em] px-4 py-2 text-center bg-gray-700">2023</h4>
        <div class="flex gap-4 bg-gray-700 px-4 py-3 justify-between">
            <div class="flex items-start gap-4">
                <div
                    class="bg-center bg-no-repeat aspect-square bg-cover rounded-lg size-[70px]"
                    style='background-image: url("../Vendor/images/<?php echo  $row["image"]; ?>");'></div>
                <div class="flex flex-1 flex-col justify-center">
                    <p class="text-[#111418] text-base font-medium leading-normal"> Booking ID: <?php echo  $row["booking_id"]; ?></p>
                    <p class="text-[#111418] text-base font-medium leading-normal"><?php echo  $row["track_name"]; ?></p>
                    <p class="text-[#60758a] text-sm font-normal leading-normal"><?php echo  $row["date"]; ?></p>
                    <p class="text-[#60758a] text-sm font-normal leading-normal">VISA ....9485</p>
                </div>
            </div>
            <div class="shrink-0 bg-gray-700">
                <p class="text-[#111418] text-base font-normal leading-normal"><?php echo  $row["price"]; ?></p>
            </div>
        </div>
        <?php
              }
            }
?>
    </div>

<?php
  include './UserFooter.php';
?>