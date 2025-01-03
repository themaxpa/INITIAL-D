<?php
// session_start();
include '../connection/dbconnection.php';
@$uid = $_SESSION['login_id'];
// echo $uid;
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
  <style>
  /* styles.css */
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background-color: #f4f4f4;
}

.chat-container {
  width: 400px;
  height: 500px;
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  display: flex;
  flex-direction: column;
}

.chat-box {
  flex: 1;
  padding: 10px;
  overflow-y: auto;
  border-bottom: 1px solid #ddd;
}

.chat-box .message {
  margin: 5px 0;
  padding: 8px 12px;
  border-radius: 5px;
}

.chat-box .user {
  background-color: #d1e7dd;
  align-self: flex-start;
}

.chat-box .bot {
  background-color: #f8d7da;
  align-self: flex-end;
}

.chat-input {
  display: flex;
  border-top: 1px solid #ddd;
}

#message-input {
  flex: 1;
  padding: 10px;
  border: none;
  outline: none;
}

#send-button {
  padding: 10px 20px;
  background-color: #007bff;
  color: #fff;
  border: none;
  cursor: pointer;
}

#send-button:hover {
  background-color: #0056b3;
}


  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-9 d-flex align-items-center justify-content-lg-between">
          <a href="./UserHomePage.php" class="logo me-auto me-lg-0"><img src="../assets/img/D LOGO.png" alt="" class="img-fluid"></a>

          <!-- <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><h1  class="h1-txt">User</h1></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="./UserProfile.php">Profile</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="../Logout.php">Log Out</a></li>
              </ul>
            </div> -->
          <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
              <li><a class="nav-link scrollto active" href="./TrackDay.php">Track Days</a></li>
              <!-- <li><a class="nav-link scrollto" href="./Organizer.php">Organizer</a></li> -->
              <li><a class="nav-link scrollto" href="./RacingTeam.php">Racing Team</a></li>
              <li><a class="nav-link scrollto " href="./CorporateEvent.php">Corporate Event</a></li>
              <li><a class="nav-link scrollto " href="./ContactUs.php">Contact</a></li>
              <!-- <li class="dropdown"><a href="#"><span>Circuit</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="#">Cars</a></li>
                  <li class="dropdown"><a href="#"><span>Bikes</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                      <li><a href="#">Deep Drop Down 1</a></li>
                      <li><a href="#">Deep Drop Down 2</a></li>
                      <li><a href="#">Deep Drop Down 3</a></li>
                      <li><a href="#">Deep Drop Down 4</a></li>
                      <li><a href="#">Deep Drop Down 5</a></li>
                    </ul>
                  </li>
                  <li><a href="#">NASCAR</a></li>
                  <li><a href="#">Drop Down 3</a></li>
                  <li><a href="../AllTracks.php">All Tracks</a></li>
                </ul>
              </li> -->
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
                  $rid = $row['reg_id'];

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
                        <a class="dropdown-item d-flex align-items-center" href="./Feedback.php">
                          <i class="bi bi-gear"></i>
                          <span>Feedback</span>
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
  
  <div class="chat-container">
    <div id="chat-box" class="chat-box">
      <!-- Messages will appear here -->
    </div>
    <div class="chat-input">
      <input type="text" id="message-input" placeholder="Type a message..." />
      <button id="send-button">Send</button>
    </div>
  </div>
<script>
    // script.js
document.addEventListener("DOMContentLoaded", () => {
  const chatBox = document.getElementById("chat-box");
  const messageInput = document.getElementById("message-input");
  const sendButton = document.getElementById("send-button");

  function addMessage(text, sender) {
    const messageDiv = document.createElement("div");
    messageDiv.textContent = text;
    messageDiv.className = `message ${sender}`;
    chatBox.appendChild(messageDiv);
    chatBox.scrollTop = chatBox.scrollHeight; // Scroll to the bottom
  }

  sendButton.addEventListener("click", () => {
    const userMessage = messageInput.value.trim();
    if (userMessage) {
      addMessage(userMessage, "user");
      messageInput.value = "";
      setTimeout(() => addMessage("This is a bot response!", "bot"), 500);
    }
  });

  messageInput.addEventListener("keypress", (event) => {
    if (event.key === "Enter") {
      sendButton.click();
    }
  });
});

</script>
</body>
</html>