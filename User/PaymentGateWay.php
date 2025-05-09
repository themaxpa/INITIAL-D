<?php
session_start();
include '../connection/dbconnection.php';
include './UserHeader.php';
@$uid = $_SESSION['login_id'];
// echo $uid;

$id = $_GET['id'];
// echo $id;

$qry = "SELECT * FROM `tracks`where `track_id`='$id'";
// echo $qry;
$data = mysqli_query($con, $qry);

if ($data->num_rows > 0) {
    while ($row = $data->fetch_assoc()) {
        $vendorId = $row['vendor_id'];

?>
        <style>
            .containerX {
                margin: 50px 50px;
                width: 80%;
                height: max-content;
                padding-top: 100px;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            /*  */
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: 'Poppins', sans-serif
            }

            .containerX {
                margin: 30px auto;
            }

            .containerX .card {
                width: 100%;
                box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
                background: #fff;
                border-radius: 0px;
            }

            body {
                background: #20232b;
            }



            .btn.btn-primary {
                background-color: #ddd;
                color: black;
                box-shadow: none;
                border: none;
                font-size: 20px;
                width: 100%;
                height: 100%;
            }

            .btn.btn-primary:focus {
                box-shadow: none;
            }

            .containerX .card .img-box {
                width: 80px;
                height: 50px;
            }

            .containerX .card img {
                width: 100%;
                object-fit: fill;
            }

            .containerX .card .number {
                font-size: 24px;
            }

            .containerX .card-body .btn.btn-primary .fab.fa-cc-paypal {
                font-size: 32px;
                color: #3333f7;
            }

            .fab.fa-cc-amex {
                color: #1c6acf;
                font-size: 32px;
            }

            .fab.fa-cc-mastercard {
                font-size: 32px;
                color: red;
            }

            .fab.fa-cc-discover {
                font-size: 32px;
                color: orange;
            }

            .c-green {
                color: green;
            }

            .box {
                height: 40px;
                width: 50px;
                display: flex;
                align-items: center;
                justify-content: center;
                background-color: #ddd;
            }

            .btn.btn-primary.payment {
                background-color: #1c6acf;
                color: white;
                border-radius: 0px;
                height: 50px;
                display: flex;
                align-items: center;
                justify-content: center;
                margin-top: 24px;
            }


            .form__div {
                height: 50px;
                position: relative;
                margin-bottom: 24px;
            }

            .form-control {
                width: 100%;
                height: 45px;
                font-size: 14px;
                border: 1px solid #DADCE0;
                border-radius: 0;
                outline: none;
                padding: 2px;
                background: none;
                z-index: 1;
                box-shadow: none;
            }

            .form__label {
                position: absolute;
                left: 16px;
                top: 10px;
                background-color: #fff;
                color: #80868B;
                font-size: 16px;
                transition: .3s;
                text-transform: uppercase;
            }

            .form-control:focus+.form__label {
                top: -8px;
                left: 12px;
                color: #1A73E8;
                font-size: 12px;
                font-weight: 500;
                z-index: 10;
            }

            .form-control:not(:placeholder-shown).form-control:not(:focus)+.form__label {
                top: -8px;
                left: 12px;
                font-size: 12px;
                font-weight: 500;
                z-index: 10;
            }

            .form-control:focus {
                border: 1.5px solid #1A73E8;
                box-shadow: none;
            }


            @media (max-width:480px) {
                #p3 {
                    display: none;
                }

                .containerX {
                    margin: 0px 0px;
                    width: 100%;
                    height: max-content;
                    padding-top: 50px;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }
            }
        </style>
        <div class="containerX">
            <div class="row">
                <!-- <div class="col-lg-4 mb-lg-0 mb-3">
                    <div id="p3" class="card p-3">
                        <div class="img-box">
                            <img src="https://www.freepnglogos.com/uploads/visa-logo-download-png-21.png" alt="">
                        </div>
                        <div class="number">
                            <label class="fw-bold" for="">**** **** **** 1060</label>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <small><span class="fw-bold">Expiry date:</span><span>10/16</span></small>
                            <small><span class="fw-bold">Name:</span><span>Kumar</span></small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-lg-0 mb-3">
                    <div id="p3" class="card p-3">
                        <div class="img-box">
                            <img src="https://www.freepnglogos.com/uploads/mastercard-png/file-mastercard-logo-svg-wikimedia-commons-4.png"
                                alt="">
                        </div>
                        <div class="number">
                            <label class="fw-bold">**** **** **** 1060</label>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <small><span class="fw-bold">Expiry date:</span><span>10/16</span></small>
                            <small><span class="fw-bold">Name:</span><span>Kumar</span></small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-lg-0 mb-3">
                    <div id="p3" class="card p-3">
                        <div class="img-box">
                            <img src="https://www.freepnglogos.com/uploads/discover-png-logo/credit-cards-discover-png-logo-4.png"
                                alt="">
                        </div>
                        <div class="number">
                            <label class="fw-bold">**** **** **** 1060</label>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <small><span class="fw-bold">Expiry date:</span><span>10/16</span></small>
                            <small><span class="fw-bold">Name:</span><span>Kumar</span></small>
                        </div>
                    </div>
                </div> -->
                <div class="col-12 mt-4">
                    <div class="card p-3">
                        <p class="mb-0 fw-bold h4">Payment Methods</p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card p-3">
                        <div class="card-body border p-0">
                            <p>
                                <a class="btn btn-primary w-100 h-100 d-flex align-items-center justify-content-between"
                                    data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="true"
                                    aria-controls="collapseExample">
                                    <span class="fw-bold">PayPal</span>
                                    <span class="fab fa-cc-paypal">
                                    </span>
                                </a>
                            </p>
                            <div class="collapse p-3 pt-0" id="collapseExample">
                                <div class="row">
                                    <div class="col-8">
                                        <p class="h4 mb-0">Summary</p>
                                        <p class="mb-0"><span class="fw-bold">Track Name:</span><span class="c-green">&nbsp; <?php echo  $row['track_name']; ?>
                                            </span></p>
                                        <p class="mb-0"><span class="fw-bold">Date</span><span class="c-green"> &nbsp;<?php echo  $row['date']; ?>
                                            </span></p>
                                        <p class="mb-0"><span class="fw-bold">Price:</span><span
                                                class="c-green">&nbsp;<?php echo  $row['price']; ?></span></p>
                                        <p class="mb-0">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque
                                            nihil neque
                                            quisquam aut
                                            repellendus, dicta vero? Animi dicta cupiditate, facilis provident quibusdam ab
                                            quis,
                                            iste harum ipsum hic, nemo qui!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body border p-0">
                            <p>
                                <a class="btn btn-primary p-2 w-100 h-100 d-flex align-items-center justify-content-between"
                                    data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="true"
                                    aria-controls="collapseExample">
                                    <span class="fw-bold">Credit Card</span>
                                    <span class="">
                                        <span class="fab fa-cc-amex"></span>
                                        <span class="fab fa-cc-mastercard"></span>
                                        <span class="fab fa-cc-discover"></span>
                                    </span>
                                </a>
                            </p>
                            <div class="collapse show p-3 pt-0" id="collapseExample">
                                <div class="row">
                                    <div class="col-lg-5 mb-lg-0 mb-3">
                                        <p class="h4 mb-0">Summary</p>
                                        <p class="mb-0"><span class="fw-bold">Track Name:</span><span class="c-green">&nbsp; <?php echo  $row['track_name']; ?></span>
                                        </p>
                                        <p class="mb-0"><span class="fw-bold">Date</span><span class="c-green">&nbsp; <?php echo  $row['date']; ?>
                                            </span></p>
                                        <p class="mb-0"><span class="fw-bold">Sending To</span><span class="c-green">&nbsp; <?php echo  $row['organizer']; ?>
                                            </span></p>
                                        <p class="mb-0">
                                            <span class="fw-bold">Price:</span>
                                            <span class="c-green" name="track_id"><?php echo  $row['price']; ?></span>
                                        </p>
                                        <p class="mb-0">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque
                                            nihil neque
                                            quisquam aut
                                            repellendus, dicta vero? Animi dicta cupiditate, facilis provident quibusdam ab
                                            quis,
                                            iste harum ipsum hic, nemo qui!</p>
                                    </div>
                                    <div class="col-lg-7">

                                <?php
                                $p =  $row['price'];
                                $trackName =  $row['track_name'];
                                $date =  $row['date'];
                            }
                        }
                                ?>
                                <form action="" class="form" method="post">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form__div">
                                                <input type="number" class="form-control" name="card_number"oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="16" placeholder="" required=""placeholder=" ">
                                                <label for="" class="form__label">Card Number</label>
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="form__div">
                                                <input type="text" class="form-control" name="exp" maxlength="5"  id="exp"  pattern="^(0[1-9]|1[0-2])\/\d{2}$" title="Enter a valid expiration date in MM/YY format" required>
                                                <label for="exp" class="form__label">MM / yy</label>
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="form__div">
                                                <input type="password" class="form-control" name="cvv" maxlength="3" placeholder=" ">
                                                <label for="" class="form__label">cvv code</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form__div">
                                                <input type="text" class="form-control" name="card_name" placeholder="" required="">
                                                <label for="" class="form__label">name on the card</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <input type="submit" class="btn btn-primary w-100" name="submit" value="submit">
                                        </div>
                                    </div>
                                </form>
                                <?php

                                if (isset($_REQUEST['submit'])) {
                                    $cardNumber = $_POST['card_number'];
                                    $exp = $_POST['exp'];
                                    $cvv = $_POST['cvv'];
                                    $cardName = $_POST['card_name'];
                                    // $trackId = $_POST['track_id'];

                                    $payment = "INSERT INTO `booking`(`reg_id`,`track_id`,`vendor_id`,`card_number`,`exp`,`cvv`,`card_name`,`status`,`price`,`track_name`,`date`)
                                                                 VALUES('$uid ','$id','$vendorId','$cardNumber','$exp','$cvv','$cardName','Paid','$p','$trackName','$date')";
                                    if ($con->query($payment) == TRUE) {
                                        echo "<script>alert('proceed Sucessfully');window.location='./UserHomePage.php'</script>";
                                    } else {
                                        echo "<script>alert('Sending has error! Try Again');</script>";
                                    }
                                }
                                ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <!-- <div class="btn btn-primary payment">
                    Make Payment
                </div> -->
                </div>
            </div>
        </div>







        <?php

        include './UserFooter.php';
        ?>