<?php
session_start();
include '../connection/dbconnection.php';
include './UserHeader.php';
@$uid = $_SESSION['login_id'];
// echo $uid;
?>
<style>
  @media (max-width:480px) {
    .form-box {
      background-color: #fff;
      box-shadow: 0 0 10px rgba(36, 67, 40, 0.8);
      padding: 15px;
      border-radius: 8px;
      width: 500px;
    }

  }

  /* ================= */
  .containerX {
    /* display: flex; */
    width: 100%;
    height: 100vh;
    margin-top: 50px;
    padding: 20px;
  }

  /* 
  .divX2{
    width:100%;
    border:1px solid red;
    height:100%;
  } */
  .divX1 {
    border-radius: 15px 0px 0px 15px;

  }

  /* .divX2 img{
    border-radius: 0px 15px 15px 0px;
    background-size: cover;
    width:100%;
    height: 100%;
  } */

  .textup {
    text-align: center;
    color: #ee244e;
    font-weight: 700;
  }

  i {
    margin-right: 3px;
  }

  .form-box {
    width: 100%;
    height: 100%;
    border-radius: 15px 0px 0px 15px;
    background-image: url('../assets/img/project-img/347777.jpg');
  opacity: 0.6;
    background-size: cover;
  }

  form {
    max-width: 400px;
    margin: 0 auto;
  }

  .radio-group {
    display: flex;
    margin-bottom: 16px;
  }

  input[type="radio"] {
    margin-right: 8px;
  }

  label {
    display: block;
    margin-bottom: 8px;
    font-size: 17px;
    color: green;
    font-weight: 600;
  }

  input,
  textarea {
    width: 100%;
    padding: 8px;
    margin-bottom: 12px;
    box-sizing: border-box;
    border-radius: 10px;

  }

  button {
    background-color: #368b44;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 25px;
    cursor: pointer;
    width: 100%;
    font-size: 15px;
    transition: .2s linear;
  }

  button:hover {
    background-color: #0a6808;
    border: none;
    transform: translateY(-10px);
  }

  h1 {
    color: #ee244e;
  }
</style>
</head>

<div class="containerX">

  <div class="divX1">
    <div class="form-box">
      <h3 class="h1-txt">Feedback </h3>
      <div class="textup">
        <i class="fa fa-solid fa-clock"></i>
        It only takes two minutes!!
      </div>
      <form method="post">
        <label class="h1-txt" for="uname">
          <i class="fa fa-solid fa-user"></i>
          Name
        </label class="h1-txt">
        <input type="text" id="uname" name="uname" required>

        <label class="h1-txt" for="email">
          <i class="fa fa-solid fa-envelope"></i>
          Email Address
        </label class="h1-txt">
        <input type="email" id="email" name="email" required>

        <label class="h1-txt" for="phone">
          <i class="fa-solid fa-phone"></i>
          Phone No
        </label class="h1-txt">
        <input type="tel" id="phone" name="phone" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10" placeholder="" required="">

        <label class="h1-txt">
          <i class="fa-solid fa-face-smile"></i>
          Do you satisfy with our service?
        </label class="h1-txt">
        <div class="radio-group">
          <input type="radio" id="yes" name="satisfy" value="yes" checked>
          <label for="yes">Yes</label>

          <input type="radio" id="no"
            name="satisfy" value="no">
          <label for="no">No</label>
        </div>

        <label class="h1-txt" for="msg">
          <i class="fa-solid fa-comments" style="margin-right: 3px;"></i>
          Write your Suggestions:
        </label class="h1-txt">
        <textarea id="msg" name="msg" rows="4" cols="10" required>
            </textarea>
        <input type="submit" name="ok">
        </input>
      </form>
    </div>
  </div>
</div>


<?php
// if (isset($_REQUEST['ok'])) {

//   $uname = $_POST['uname'];
//   $email = $_POST['email'];
//   $phone = $_POST['phone'];
//   $satisfy = $_POST['satisfy'];
//   $msg = $_POST['msg'];

//   if ($result->num_rows > 0) {
//     $data = $result->fetch_assoc();
//     echo "<script>alert('Already added');</script>";
// } else {

//     $sql = "INSERT INTO `feedback` (`reg_id`,`uname`,`email`,`satisfy`,`msg`,`phone`)
//     VALUES('$uid','$uname','$email','$satisfy','$msg','$phone')";
//     mysqli_query($con, $sql);

//     if ($sql) {
//       echo "<script> alert(feedback sent Successfully)</script>";
//     } else {
//       echo "<script>alert('Failed!');</script>";
//     }
//   }
// }


// Ensure this script is connected to the database via $con
if (isset($_POST['ok'])) {

    // Sanitize input data
    $uname = mysqli_real_escape_string($con, $_POST['uname']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $satisfy = mysqli_real_escape_string($con, $_POST['satisfy']);
    $msg = mysqli_real_escape_string($con, $_POST['msg']);
    
    // Assuming $uid is defined elsewhere
    $uid = mysqli_real_escape_string($con, $uid);

    // Check if feedback already exists for the given reg_id
    $check_query = "SELECT * FROM `feedback` WHERE `reg_id` = '$uid'";
    $result = mysqli_query($con, $check_query);

    if ($result && mysqli_num_rows($result) > 0) {
        echo "<script>alert('Feedback already added');</script>";
    } else {
        // Insert new feedback into the database
        $sql = "INSERT INTO `feedback` (`reg_id`, `uname`, `email`, `satisfy`, `msg`, `phone`)
                VALUES ('$uid', '$uname', '$email', '$satisfy', '$msg', '$phone')";

        if (mysqli_query($con, $sql)) {
            echo "<script>alert('Feedback sent successfully!');</script>";
        } else {
            echo "<script>alert('Failed to send feedback!');</script>";
        }
    }
}



include './UserFooter.php';
?>