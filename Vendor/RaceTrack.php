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
        <div class="reg-container">
            <h3>REGISTRATION</h3>
            <form method='post'>

                <div class="reg-input">
                    <label class="reg">Name</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>

                <div class="reg-input">
                        <label class="reg">Email</label>
                        <input type="email" name="email" id="" class="form-control" placeholder="                                                                                                                        example@gmail.com" required>
                    </div>
               
    
                    <div class="reg-input">
                        <label class="reg">Phone Number</label>
                        <input type="text" name="phone" class="form-control" required>
                    </div>

                    <div class="reg-input">
                        <label class="reg">Address</label>
                        <input type="text" name="address" class="form-control" required>
                    </div>

                    <div class="reg-input">
                        <label class="reg">CompanyName</label>
                        <input type="text" name="CompanyName" class="form-control" required>
                    </div>

                    <div class="reg-input">
                        <label class="reg">Category</label>
                        <input type="text" name="category" class="form-control" required>
                    </div>

                    <div class="reg-input">
                        <label class="reg">password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>


                    <button type="submit" name="submit" class="reg-btn">Sign in</button>
            </form>
        </div>
    </section>

</body>


<?php
include './footer.php';
?>


<?php
if (isset($_REQUEST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $CompanyName = $_POST['company_name'];
    $category = $_POST['category'];
    $password = $_POST['password'];

    $qry = "SELECT * FROM `user_login` WHERE `username`= '$email'";
    // echo $qry; 
    $result = mysqli_query($con, $qry);
    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();
        echo "<script>alert('Already added');</script>";
    } else {

        $sql = "INSERT INTO `vendor_registration` (`name`, `email`, `phone`, `address`, `company_name`, `category`,`password`) 
                                           VALUES ('$name', '$email', '$phone', '$address', '$company_name', '$category','$passsword')";
        mysqli_query($con, $sql); 
        echo $sql;

        $lqry = "INSERT INTO `user_login` (`vendor_id`,`username`, `password`, `status`, `type`)
                            VALUES((select max(vendor_id) FROM vendor_registration),'$email', '$password', 'approved','vendor')";

        mysqli_query($con, $lqry);
        echo $lqry;

        echo "<script>window.location='./Vendor/VendorHomePage.php'</script>";
    }
}


?>