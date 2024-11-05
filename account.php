
<?php
session_start();
include './connection/dbconnection.php';
include './header.php';
?>

<style>
            
            /*-------------------------------------------------------------------------------
    # GENERAL  
    ---------------------------------------------------------------------------------*/
     
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }
    
    .section-reg {
        margin-top: -100px;
        width: 100%;
        height: 100dvh;
        background-image: url('./assets/img/signup1.jpg');
        background-size: cover;
    }
    
    /*-------------------------------------------------------------------------------
    # LOGIN 
    ---------------------------------------------------------------------------------*/
    
    .login-container {
    background-color: #ee244b;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 300px;
    margin-top: -500px;
    margin-left: 750px;
    position: absolute;
    animation-name: log;
    animation-duration: 0.7s;
    animation-fill-mode: forwards;
    animation-delay: 0.2s;
    box-shadow: #20232b;
}
    
    @keyframes log {
      form {
        transform: translateX(-10px);
      }
    
      to {
        transform: translateX(10px);
      }
    }
    
    
    
    .login-txt{
        text-align: center;
        margin-bottom: 20px;
    }
    
    .input-group {
        margin-bottom: 15px;
    }
    
    .input-group label {
        display: block;
        margin-bottom: 5px;
    }
    
    .input-group input {
        width: 100%;
        padding: 8px;
        border: 1px solid #ee244b;
        border-radius: 3px;
    }
    
    button {
        width: 100%;
        padding: 10px;
        /* background-color: #007bff; */
        color: #fff;
        border: none;
        border-radius: 3px;
        cursor: pointer;
        transition: background-color 0.3s;
    }
    
    button:hover {
        background-color:transparent;
    
    }
    
    input .login-btn {
        width: 50px;
        height: 10px;
    }
    
    .login-btn {
        width: 100%;
        padding: 10px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 3px;
        cursor: pointer;
        transition: background-color 0.3s;
    }
    
    .login-btn:hover {
        background-color: #0056b3;
    
    }
    
    /*-------------------------------------------------------------------------------
    # INFORMATION
    ---------------------------------------------------------------------------------*/
    .info-d {
        width: 50%;
        height: 100vh;
        padding-top: 150px;
        padding-left: 20px;
        animation-name: info-d;
        animation-duration: 0.7s;
      animation-fill-mode: forwards;
      animation-delay: 0.2s;
      margin:95px 0px 20px 0px
    }
    
    @keyframes info-d{
      form {
        transform: translateX(-5px);
      }
    
      to {
        transform: translateX(5px);
      }
    }
    
    .advantage-txt {
        color: #fff;
    font-size: 37px;
    margin-top: -30px;
    font-weight: bolder;
    }
    
    .initiald-txt {
        color: #fff;
    }
    
    .ad-txt{
        color: #fff;
    }
    
    .ad-txt:hover{
       
        color: #fff;
    }
    
    @keyframes titleup {
      form {
        transform: translateX(-10px);
      }
    
      to {
        transform: translateX(50px);
      }
    }
    
    
    .btn-lm{
        border-color: #fff;
    background: transparent;
    transform: skew(-20deg);
    padding: 20px;
    margin-left: 46px;
    margin-top: 10px;
    color: #fff;
    text-transform: uppercase;
    border-radius: 8px;
    padding: 0px 0px;
    white-space: nowrap;
    transition: 0.3s;
    font-size: 17px;
    font-weight: 900;
    width: 100px;
    height: 45px;
    display: inline-block;
    border: 1px solid #fff;
    }
    
    .btn-lm:hover {
        background-color: #ee244b;
        color: #fff;
        box-shadow: 7px 7px 7px rgba(0, 0, 0, 0.9),
        -5px -5px 5px #fff;
        padding-right: 2px;
    } 


    /* Media Query 320 */
    @media (max-width: 480px){
        .section-reg {
        margin-top: -100px;
   height: 800px;
        background-image: url('./assets/img/phone393/ph4.jpg');
        background-size: cover;
    }
    
        .login-container {
        background-color: #ee244b;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 250px;
        position: absolute;
        animation-name: log;
        animation-duration: 0.7s;
        animation-fill-mode: forwards;
        animation-delay: 0.2s;
        box-shadow: #20232b;
    }

    }

    /* Media Query 480 */
    @media (max-width: 480px) {
        .login-container {
        background-color: #ee244b;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 300px;
        margin-top: 300px;
        margin-left: 45px;
        position: absolute;
        animation-name: log;
        animation-duration: 0.7s;
        animation-fill-mode: forwards;
        animation-delay: 0.2s;
        box-shadow: #20232b;
    }
.info-d {
    display: none;
}
    }
    </style>


<section>
 <div class="section-reg">
        <div class="info-d">
            <h2 class="advantage-txt">Advantages for trackday &amp; event organizer</h2>
            <p class="initiald-txt ">Initial D Booking is the additional sales channel to your website or direct sales. As an event organizer, you can easily offer available slots of your events on our platform and receive the payment immediately after a customer&#039;s booking.</p>
            <ul class="">
                <li class="py-2"><i class="fa fa-check mr-2 text-primary"></i> <span class="ad-txt">Additional sales channel</span></li>
                <li class="py-2"><i class="fa fa-check mr-2 text-primary"></i> <span class="ad-txt">Full control over your availability</span></li>
                <li class="py-2"><i class="fa fa-check mr-2 text-primary"></i> <span class="ad-txt">Secure online payment</span></li>
                <li class="py-2"><i class="fa fa-check mr-2 text-primary"></i> <span class="ad-txt">No financial risk and upfront investment</span></li>
                <li class="py-2"><i class="fa fa-check mr-2 text-primary"></i> <span class="ad-txt">Bookable in less than 5 minutes</span></li>
            </ul>
            <a class="learnMore-btn" href=" ">
                <button class="btn-lm"> more<i class="fa fa-chevron-right"></i></button>
            </a>
        </div>


        <div class="login-container">
            <h2 class="login-txt">Login</h2>
            <form method="POST">
                <div class="input-group">
                    <label for="username"><i class='bx bxs-user-circle'></i>Email:</label>
                    <input type="text" id="username" name="username" required>
                </div>

                <div class="input-group">
                    <label for="password"><i class='bx bxs-lock-alt'></i>Password:</label>
                    <input type="password" id="password" name="password" required>
                    <a href="./ForgotPassword.php"><sub>forgot password?</sub></a>
                </div>

                <div>
                    <input class="login-btn" type="submit" name="login" value="LOGIN">
                </div>

            </form>
            <p><sub> Don't have an account?<a href="./registration.php">Signup</a></sub></p>
            

        </div>
    </div>
</section>


<?php
include './footer.php'; ?>



<?php

if (isset($_REQUEST['login'])) {

    $username = $_REQUEST['username'];

    $password = $_REQUEST['password'];

    $qry = "SELECT * FROM  `user_login` WHERE `username` = '$username' AND `password` ='$password'"; //AND `status`='Approved'

    echo $qry;

    $result = mysqli_query($con, $qry);

    if ($result->num_rows > 0) {

        $data = $result->fetch_assoc();

        $uid = $data['login_id'];

        $type = $data['type'];

        $_SESSION['login_id']=$uid;

        if ($type == "admin") {

            echo "<script>alert('Log in Successful')); </script>";


            echo "<script>window.location='./Admin/AdminHomePage.php'</script>";
        } elseif ($type == "user") {

            echo "<script>alert('Log in Successful');</script>";

            echo "<script>window.location='./User/UserHomePage.php'</script>";

        } elseif ($type == "vendor") {
            echo "<script>alert('Log in Successful');</script>";

            echo "<script>window.location='./Vendor/VendorHomePage.php'</script>";
        } else {



            echo "<script>alert('Invalid User ');</script>";

            // echo "<script>window.location='account.php'</script>";

        }
    }
} ?>