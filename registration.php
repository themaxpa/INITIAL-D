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

        #herox {
            background-image: url('./assets/img/REG-img.jpg');
            height: 600px;
            background-size: cover;
        }

        .reg-container {
            margin-bottom: 30px;
        }

        .registration-container h1 {
            margin: 200px 0 10px 0;
            font-size: 70px;
            font-weight: 700;
            line-height: 86px;
            color: #fff;
        }
        .registration-container h2 {
    font-family: myFont;
    font-size: 25px;
    color: bisque;
    margin: 10px 312px 20px 5px;
}

.form {
    display: flex;
    flex-direction: column;
    gap: 10px;
    max-width: 100%;
    width: 100%;
    background-color: #fff;
    padding: 20px;
    border-radius: 20px;
    position: relative;
    margin-bottom: 50px;
}
        .title-ph {
            font-family: myFont;
            font-size: 28px;
            color: #ee244e;
            font-weight: 300;
            letter-spacing: -1px;
            position: relative;
            display: flex;
            align-items: center;
            padding-left: 30px;
        }

        .title-ph::before,
        .title-ph::after {
            position: absolute;
            content: "";
            height: 16px;
            width: 16px;
            border-radius: 50%;
            left: 0px;
            background-color: #20232b;
        }

        .title-ph::before {
            width: 18px;
            height: 18px;
            background-color: #ee244b;
        }

        .title-ph::after {
            width: 18px;
            height: 18px;
            animation: pulse 1s linear infinite;
        }

        .message,
        .signin {
            color: rgba(88, 87, 87, 0.822);
            font-size: 14px;
        }

        .signin {
            text-align: center;
        }

        .signin a {
            color: #ee244e;
        }

        .signin a:hover {
            text-decoration: underline #20232b;
        }

        .flex {
            display: flex;
            width: 100%;
            gap: 6px;
        }

        .form label {
            position: relative;
        }

        .form label .input {
            width: 100%;
            padding: 10px 10px 20px 10px;
            outline: 0;
            border: 1px solid rgba(105, 105, 105, 0.397);
            border-radius: 10px;
            color: #20232b;
        }

        .form label .input+span {
            position: absolute;
            left: 10px;
            top: 15px;
            color: grey;
            font-size: 0.9em;
            cursor: text;
            transition: 0.3s ease;
        }

        .form label .input:placeholder-shown+span {
            top: 15px;
            font-size: 0.9em;
        }

        .form label .input:focus+span,
        .form label .input:valid+span {
            top: 30px;
            font-size: 0.7em;
            font-weight: 600;
        }

        .form label .input:valid+span {
            color: green;
        }

        .submit {
            border: none;
            outline: none;
            background-color: #ee244e;
            padding: 10px;
            border-radius: 10px;
            color: #fff;
            font-size: 16px;
            transform: .3s ease;
        }

        .submit:hover {
            background-color: rgb(56, 90, 194);
        }

        @keyframes pulse {
            from {
                transform: scale(0.9);
                opacity: 1;
            }

            to {
                transform: scale(1.8);
                opacity: 0;
            }
        }

        /* End form */


        /* Media Query 393 */
        @media (max-width:393px) {


            /* form  */
            .form {
                margin-top: 50px;
            }


            .registration-container {
                margin-top: -90px;
                ;
            }

            .registration-container h1 {
                margin: 10px -30px;
                font-size: 33px;
                font-weight: 700;
                line-height: 86px;
                color: #fff;
            }

            .registration-container h2 {
                font-family: myFont;
                font-size: 9px;
                color: bisque;
                margin: -23px 110px 20px -30px;
            }

            .REG-container {

                display: block;
            }


            #herox {
                height: 800px;
                background-size: cover;
            }

            .info-h6 {
                font-size: 10px;
            }

            .reg-container {
                margin: 0px 0px 0px 0px;
            }


            /* footer */
            .bottom-nav-list li {
                display: none;
            }

            .news-letter1 {
                color: #fff;
                height: 5vh;
                border-radius: 5px 0px 0px 5px;
                background-color: #20232b;
                border: solid 1px #fff;
            }

            .news-letter2 {
                color: #fff;
                height: 5vh;
                width: 70px;
                border-radius: 0px 5px 5px 0px;
                background-color: #ee244e;
                border: solid 1px #fff;
                font-size: 10px;
                padding: 5px;
            }

            .social p {
                font-size: 5px;
                margin-right: 0px;
            }

            /* End footer*/

        }

        @media (max-width:1440px) {
            #herox {
                height: 600px;
                background-size: cover;
                background-image: url('./assets/img/phone393/ph6.jpg');
                opacity: 0.8;
            }

            .registration-container h1 {
                margin: 120px 0px 10px -25px;
                font-size: 33px;
                font-weight: 700;
                line-height: 86px;
                color: #fff;
            }

            .registration-container h2 {
                font-family: myFont;
                font-size: 12px;
                color: bisque;
                margin: -25px 88px 174px -25px;
            }

            #herox {
                height: 800px;
                background-size: cover;
            }

            .reg-contaniner {
                display: flex;
            }

            .REG-container {
                display: none;
            }

            /* footer */
            .news-letter1 {
                color: #fff;
                height: 8vh;
                width: 250px;
                border-radius: 5px 0px 0px 5px;
                background-color: #20232b;
                border: solid 1px #fff;
            }

            .news-letter2 {
                color: #fff;
                height: 8vh;
                border-radius: 0px 5px 5px 0px;
                background-color: #ee244e;
                border: solid 1px #fff;
            }

            .bottom-nav-list a {
                display: none;
            }

            /* End footer */
        }
    </style>
</head>

<body style="overflow-x: hidden;">
    <section class="d-flex flex-column justify-content-center" id="herox">
        <div class="container">
            <div class="row justify-content-center">
                <div class="registration-container">
                    <h1>
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
                <h6 class="info-h6">The registration as trackday participant is open to all individuals interested in driving trainings and trackdays. The registration and the use of our online booking service is free of charge.</h6>
            </div>
            <div class="info-box2">
                <h3>Track day Organizer</h3>
                <h6 class="info-h6">The registration as a trackday provider/organizer is restricted to corporate clients or associations due to legal reasons. You can register as an individual as long as you are an employee or owner of a company or belong to the management board of your association. The registration of our online booking service is free of charge.</h6>
            </div>
            <div class="info-box3">
                <h3>Track Rental Clients</h3>
                <h6 class="info-h6">The registration as a track rental client is restricted to corporate clients due to legal reasons. You can register as an idividual as long as you are an employee or owner of a company.

                    The registration and the use of our online booking service is free of charge.</h6>
            </div>
        </div>
    </section>

    <!--======================================================== form ======================================================================= -->
    <div class="reg-contaniner">
        <div class="form">
            <form class="form" method="post">
                <p class="title-ph">Register </p>
                <p class="message">Signup now and get full access to our website. </p>
                <div class="flex">
                    <label>
                        <input required="" placeholder="" type="text" class="input" id="first_name" name="first_name">
                        <span>Firstname</span>
                    </label>

                    <label>
                        <input required="" placeholder="" type="text" class="input" id="last_name" name="last_name">
                        <span>Lastname</span>
                    </label>
                </div>

                <label>
                    <input required="" placeholder="" type="date" class="input" name="dob">
                    <span>Date of Birth</span>
                </label>

                <div class="flex">
                    <label>
                        <select  required placeholder="" class="input" name="gender">
                            <option  style="background-color: #ee244e; color:#20232b" value="male">Male</option>
                            <option  style="background-color: #ee244e; color:#20232b" value="female">Female</option>
                            <option  style="background-color: #ee244e; color:#20232b" value="Rather not say">Rather not say</option>

                        </select>
                        <span>Gender</span>
                    </label>
                </div>

                <label>
                    <input required="" placeholder="" type="text" class="input" name="licens">
                    <span>Licens Number</span>
                </label>

                <label>
                    <input required="maximum limit 13 digit" placeholder="" type="text" class="input" name="ph">
                    <span>Phone</span>
                </label>

                <label>
                    <input required="" placeholder="" type="email" class="input" name="email">
                    <span>Email</span>
                </label>

                <label>
                    <input required="" placeholder="" type="password" class="input" name="password">
                    <span>Password</span>
                </label>

                <button class="submit" name="submit">Submit</button>
                <p class="signin">Already have an acount ? <a href="./account.php">LogIn</a> </p>
            </form>
        </div>
    </div>
    <!--======================================================== End Phone 393======================================================================= -->

</body>

<?php
include './footer.php';
?>


<?php
if (isset($_REQUEST['submit'])) {

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $licens = $_POST['licens'];
    $ph = $_POST['ph'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $qry = "SELECT * FROM `user_login` WHERE `username`= '$email'";
    // echo $qry; 
    $result = mysqli_query($con, $qry);
    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();
        echo "<script>alert('Already added');</script>";
    } else {

        $sql = "INSERT INTO `user_registration` (`first_name`, `last_name`, `dob`,`licens`, `gender`, `ph`, `email`, `password`) 
                                         VALUES ('$first_name', '$last_name', '$dob','$licens', '$gender', '$ph', '$email', '$password')";
        mysqli_query($con, $sql);
        echo $sql;

        $lqry = "INSERT INTO `user_login` (`reg_id`,`username`, `password`, `status`, `type`)
VALUES((select max(reg_id) FROM user_registration),'$email', '$password', 'Approved','user')";

        mysqli_query($con, $lqry);
        echo $lqry;

        echo "<script>window.location='./account.php'</script>";
    }
}


?>