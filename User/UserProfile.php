<?php
session_start();
include '../connection/dbconnection.php';
include './UserHeader.php';
@$uid = $_SESSION['login_id'];
@$rid = $_GET['rid'];
// echo $uid;
?>

<style>
  .SectionProfile {
    background-image: url('../assets/img/bc1');
    background-size: cover;
    height: auto;
  }

  .profileImg {
    width: 64px;
    height: 64px;
    border-radius: 50px;
  }

  .card {
    margin-bottom: 25px;
    background: transparent;
    backdrop-filter: blur(80px);
    color: #fff;
}

  #social-links {
    color: black;
    padding-left: 71px;
  }

  #social-link {
    margin: 0px 15px;
    color: black;
    font-size: 24px;
  }
</style>

<?php

$dqry = "SELECT * FROM `user_login` JOIN `user_registration` ON `user_login`.`reg_id`= `user_registration`.`reg_id` WHERE `login_id` = '$uid' ";
$data = mysqli_query($con, $dqry);

if ($data->num_rows > 0) {
  while ($row = $data->fetch_assoc()) {
    $rid = $row['reg_id'];
?>
    <section class="SectionProfile">
      <div class="row" style="display: flex;margin: 0px 0px 0px 900px;flex-wrap: nowrap;flex-direction: column;align-content: flex-end;align-items: baseline;justify-content: flex-start;">
        <div class="card" style="margin-top: 140px; margin-bottom:10px; margin-left: -52px; width: 613px;">
          <div class="align-items-center card-body d-flex profile-card pt-4">
            <img style="width:40px;height:40px" src="./images/<?php echo $row['image']; ?>" alt="Profile" class="rounded-circle">
            <h2 style="margin-left: 10px;"><?php echo  $row["first_name"]; ?> <?php echo  $row["last_name"]; ?></h2>

            <div id="social-links" class="social-links mt-2">
              <a id="social-link" href="<?php echo  $row["x"]; ?>" id="social-links" class="twitter"><i class="bi bi-twitter"></i></a>
              <a id="social-link" href="<?php echo  $row["facebook"]; ?>" id="social-links" class="facebook"><i class="bi bi-facebook"></i></a>
              <a id="social-link" href="<?php echo  $row["instagram"]; ?>" id="social-links" class="instagram"><i class="bi bi-instagram"></i></a>
              <!-- <a  id="social-link" id="social-links" class="linkedin"><i class="bi bi-linkedin"></i></a> -->
            </div>
          </div>
        </div>

      </div>

      <div class="col-xl-8" style="margin-left: 849px;width: 613px;">

        <div class="card">
          <div class="card-body pt-3">
            <!-- Bordered Tabs -->
            <ul class="nav nav-tabs nav-tabs-bordered">

              <li class="nav-item">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
              </li>

              <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
              </li>

              <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">History</button>
              </li>

              <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
              </li>

            </ul>
            <div class="tab-content pt-2">

              <div class="tab-pane fade show active profile-overview" id="profile-overview">
                <!-- <h5 class="card-title">About</h5> -->
                <p class="small fst-italic"></p>

                <h5 class="card-title">Profile Details</h5>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label ">Full Name</div>
                  <div class="col-lg-9 col-md-8"><?php echo  $row["first_name"]; ?> <?php echo  $row["last_name"]; ?></div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">D.O.B</div>
                  <div class="col-lg-9 col-md-8"><?php echo  $row["dob"]; ?></div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">gender</div>
                  <div class="col-lg-9 col-md-8"><?php echo  $row["gender"]; ?></div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Licens</div>
                  <div class="col-lg-9 col-md-8"><?php echo  $row["licens"]; ?></div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Phone</div>
                  <div class="col-lg-9 col-md-8"><?php echo  $row["ph"]; ?></div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Email</div>
                  <div class="col-lg-9 col-md-8"><?php echo  $row["email"]; ?></div>
                </div>
              </div>




              <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                <!-- Profile Edit Form -->
                <form method='post' enctype="multipart/form-data">
                  <div class="row mb-3">
                    <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                    <div class="col-md-8 col-lg-9">
                      <img style="width:90px;height:90px" src="./images/<?php echo $row['image']; ?>" alt="Preview Image" />
                      <div class="pt-2">
                        <input type="file" class="btn btn-primary btn-sm" title="Upload new profile image" name="image"><i class="bi bi-upload"></i>
                        <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                      </div>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">First Name</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="first_name" type="text" class="form-control" id="fullName" value="<?php echo  $row["first_name"]; ?>">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="about" class="col-md-4 col-lg-3 col-form-label">Last Name</label>
                    <div class="col-md-8 col-lg-9">
                      <textarea name="last_name" class="form-control" id="about" style="height: 100px"><?php echo  $row["last_name"]; ?></textarea>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="Country" class="col-md-4 col-lg-3 col-form-label">Date Of Birth</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="dob" type="date" class="form-control" id="country" value="<?php echo  $row["dob"]; ?>">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="Address" class="col-md-4 col-lg-3 col-form-label">Gender</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="gender" type="text" class="form-control" id="Address" value="<?php echo  $row["gender"]; ?>">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Licens Number</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="licens" type="text" maxlength="13" class="form-control" id="phone" value="<?php echo  $row["licens"]; ?>">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="ph" type="text" maxlength="13" class="form-control" id="phone" value="<?php echo  $row["ph"]; ?>">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="email" type="email" class="form-control" id="Email" value="<?php echo  $row["email"]; ?>">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="Twitter" class="col-md-4 col-lg-3 col-form-label">Twitter Profile</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="x" type="text" class="form-control" id="Twitter" value="<?php echo  $row["x"]; ?>">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="Facebook" class="col-md-4 col-lg-3 col-form-label">Facebook Profile</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="facebook" type="text" class="form-control" id="facebook" value="<?php echo  $row["facebook"]; ?>">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="Instagram" class="col-md-4 col-lg-3 col-form-label">Instagram Profile</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="instagram" type="text" class="form-control" id="instagram" value="<?php echo  $row["instagram"]; ?>">
                    </div>
                  </div>


                  <div class="text-center">
                    <button type="submit" name="submit" class="btn btn-primary">Save Changes</button>
                  </div>
                </form><!-- End Profile Edit Form -->

              </div>



              <?php
              if (isset($_REQUEST['submit'])) {

                @$filename = $_FILES["image"]["name"];
                @$tempname = $_FILES["image"]["tmp_name"];
                $folder = "./images/" . $filename;
                move_uploaded_file($tempname, $folder);

                @$first_name = $_POST['first_name'];
                @$last_name = $_POST['last_name'];
                @$dob = $_POST['dob'];
                @$gender = $_POST['gender'];
                @$licens = $_POST['licens'];
                @$phone = $_POST['ph'];
                @$email = $_POST['email'];
                @$x = $_POST['x'];
                @$facebook = $_POST['facebook'];
                @$instagram = $_POST['instagram'];

                $up = "UPDATE `user_registration` SET `image`='$filename',`first_name`='$first_name',`last_name`='$last_name',`dob`='$dob',`gender`='$gender',`licens`='$licens',`ph`='$phone',`email`='$email',`x`='$x', `instagram`='$instagram',`facebook`='$facebook' WHERE `reg_id`='$rid'";
                // echo $up;
                $retreval = mysqli_query($con, $up);
                if (! $retreval) {
                  echo " <script>die Could Not Update Data</script>";
                } else {
                  echo " <script>Data Updated Successfully</script>";
                }
              ?>

          <?php
              }
            }
          }
          ?>



<?php
          $qry = "SELECT * FROM `booking` JOIN `tracks` WHERE `booking`.`reg_id`=`tracks`.`vendor_id`";
          // echo $qry;
          $data = mysqli_query($con, $qry);

          if ($data->num_rows > 0) {
            while ($row = $data->fetch_assoc()) {
              // $uid = $row['login_id'];
          ?>

          <div class="tab-pane fade pt-3" id="profile-settings">

            <!-- History Section-->
            <form>
              <div class="row mb-3">
                <label for="fullName" class="col-md-4 col-lg-3 col-form-label"></label>
                <div class="col-md-8 col-lg-9">
                  <h5 class="card-title">Booking Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Booking ID</div>
                    <div class="col-lg-9 col-md-8"><?php echo  $row["booking_id"]; ?></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Track Name</div>
                    <div class="col-lg-9 col-md-8"><?php echo  $row["track_name"]; ?></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Date</div>
                    <div class="col-lg-9 col-md-8"><?php echo  $row["date"]; ?></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Amount</div>
                    <div class="col-lg-9 col-md-8"><?php echo  $row["price"]; ?></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Status</div>
                    <div class="col-lg-9 col-md-8"><?php echo  $row["status"]; ?></div>
                  </div>
                
                  <div class="form-check">
                    <!-- <input class="form-check-input" type="checkbox" id="newProducts" checked>
                    <label class="form-check-label" for="newProducts">
                      Information on new products and services -->
                      
                    </label>
                  </div>
                  <div class="form-check">
                    <!-- <input class="form-check-input" type="checkbox" id="proOffers">
                    <label class="form-check-label" for="proOffers">
                      Marketing and promo offers -->
                    </label>
                  </div>
                  <div class="form-check">
                    <!-- <input class="form-check-input" type="checkbox" id="securityNotify" checked disabled>
                    <label class="form-check-label" for="securityNotify">
                      Security alerts -->
                    </label>
                  </div>
                </div>
              </div>

              <div class="text-center">
                <!-- <button  class="btn btn-primary">view</button> -->
              </div>
              <?php }}?>
            </form><!-- End settings Form -->

          </div>

          <div class="tab-pane fade pt-3" id="profile-change-password">
            <!-- Change Password Form -->
            <form>

              <div class="row mb-3">
                <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                <div class="col-md-8 col-lg-9">
                  <input name="password" type="password" class="form-control" id="currentPassword">
                </div>
              </div>

              <div class="row mb-3">
                <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                <div class="col-md-8 col-lg-9">
                  <input name="newpassword" type="password" class="form-control" id="newPassword">
                </div>
              </div>

              <div class="row mb-3">
                <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                <div class="col-md-8 col-lg-9">
                  <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                </div>
              </div>

              <div class="text-center">
                <button type="submit" class="btn btn-primary">Change Password</button>
              </div>
            </form><!-- End Change Password Form -->

          </div>

            </div><!-- End Bordered Tabs -->


          </div>
        </div>

      </div>
      </div>
    </section>

    </main>


    <?php
    include 'UserFooter.php';
    ?>