<?php
session_start();
include './connection/dbconnection.php';
include './header.php';
?>
<link href="assets/css/style.css" rel="stylesheet">

<head>
    <style>
        * {
            color: #fff;
        }
    </style>
</head>

<body style="  overflow-x: hidden;">
    <section class="d-flex flex-column justify-content-center" style="background-image: url('./assets/img/REG-img.jpg'); height:600px;  background-size: cover;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="registration-container">
                    <h1 style=" margin: 0 0 10px 0; font-size: 70px; font-weight: 700; line-height: 86px; color: #fff;">
                        REGISTRATION
                    </h1>
                    <h2>Your best car and bike track days, test days and driving experiences start with just a few clicks. Sign up now.</h2>

                </div>
            </div>
        </div>
    </section>

    <section>

        <div class="REG-container">

            <div class="info-box1">
                <h3>Track day Participant</h3>
                <h6>The registration as trackday participant is open to all individuals interested in driving trainings and trackdays. The registration and the use of our online booking service is free of charge.</h6>
            </div>
            <div class="info-box2">
                <h3>Track day Organizer</h3>
                <h6>The registration as a trackday provider/organizer is restricted to corporate clients or associations due to legal reasons. You can register as an individual as long as you are an employee or owner of a company or belong to the management board of your association. The registration of our online booking service is free of charge.</h6>
            </div>
            <div class="info-box3">
                <h3>Track Rental Clients</h3>
                <h6>The registration as a track rental client is restricted to corporate clients due to legal reasons. You can register as an idividual as long as you are an employee or owner of a company.

                    The registration and the use of our online booking service is free of charge.</h6>
            </div>
        </div>
    </section>

    <section class="add-container">
            <form method='post'>
                <div class="filler" style="display: flex;
    height: 20dvh;
    margin-top: 50px;
    justify-content: center;
    gap: 30px;
">
                    <div class="reg-input">
                        <!-- <label class="reg">Enter Your Email*</label> -->
                        <input type="email" name="email" id="" class="reg-form" id="reg-form" placeholder=" Enter Your Email*" required style="width: 350px;
    height: 50px;
    color: #ee244e;
    background-color: transparent;">
                    </div>

                    <div class="reg-input">
                        <!-- <label class="reg">Enter your password*</label> -->
                        <input type="password" name="password" class="reg-form" id="reg-form" placeholder="Enter your password*" required style="width: 350px;
    height: 50px;
    color: #ee244e;
    background-color: transparent;">
                    </div>


                    <div class="reg-input">
                        <!-- <label class="reg">Repeate password*</label> -->
                        <input type="password" name="password" class="reg-form" id="reg-form" placeholder="Repeate password*" required style="width: 350px;
    height: 50px;
    color: #ee244e;
    background-color: transparent;">
                    </div>

                </div>
                <button type="submit" name="submit" class="reg-btn" style="margin-left: 1085px;
    transform: skew(-20deg);
    width: 300px;"><b>COMPLETE REGISTRATION</b></button>
            </form>
    </section>

<?php
include './footer.php';
?>


<?php
if (isset($_REQUEST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $qry = "SELECT * FROM `user_login` WHERE `username`= '$email'";
    // echo $qry; 
    $result = mysqli_query($con, $qry);
    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();
        echo "<script>alert('Already added');</script>";
    } else {

        $sql = "INSERT INTO `user_registration` (`email`, `password`) 
                                         VALUES ('$email', '$password')";
        mysqli_query($con, $sql);
        echo $sql;

        $lqry = "insert into `user_login` (`reg_id`,`username`, `password`, `status`, `type`)
                             values((select max(reg_id) from user_registration),'$email', '$password', 'approved','user')";

        mysqli_query($con, $lqry);
        echo $lqry;

        echo "<script>window.location='./User/UserHomePage.php'</script>";
    }
}


?>