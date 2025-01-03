<?php
include './VendorHeader.php';
?>
  <style>

    /* Form */
    .form {
      display: flex;
      width: 100%;
      flex-direction: column;
      gap: 10px;
      padding: 20px;
      border-radius: 20px;
      position: relative;
      background-color: #1a1a1a;
      color: #fff;
      border: 1px solid #333;
    }

    .titlexx {
      font-size: 28px;
      font-weight: 600;
      letter-spacing: -1px;
      position: relative;
      display: flex;
      align-items: center;
      padding-left: 30px;
      color: #00bfff;
    }

    .titlexx::before {
      width: 18px;
      height: 18px;
    }

    .titlexx::after {
      width: 18px;
      height: 18px;
      animation: pulse 1s linear infinite;
    }

    .titlexx::before,
    .titlexx::after {
      position: absolute;
      content: "";
      height: 16px;
      width: 16px;
      border-radius: 50%;
      left: 0px;
      background-color: #00bfff;
    }

    .message,
    .signin {
      font-size: 14.5px;
      color: rgba(255, 255, 255, 0.7);
    }

    .signin {
      text-align: center;
    }

    .signin a:hover {
      text-decoration: underline royalblue;
    }

    .signin a {
      color: #00bfff;
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
      background-color: #333;
      color: #fff;
      width: 100%;
      padding: 20px 05px 05px 10px;
      outline: 0;
      border: 1px solid rgba(105, 105, 105, 0.397);
      border-radius: 10px;
    }

    .form label .input+span {
      color: rgba(255, 255, 255, 0.5);
      position: absolute;
      left: 10px;
      top: 0px;
      font-size: 0.9em;
      cursor: text;
      transition: 0.3s ease;
    }

    .form label .input:placeholder-shown+span {
      top: 12.5px;
      font-size: 0.9em;
    }

    .form label .input:focus+span,
    .form label .input:valid+span {
      color: #00bfff;
      top: 0px;
      font-size: 0.7em;
      font-weight: 600;
    }

    .input {
      font-size: medium;
    }

    .submit {
      border: none;
      outline: none;
      padding: 10px;
      border-radius: 10px;
      color: #fff;
      font-size: 16px;
      transform: .3s ease;
      background-color: #00bfff;
    }

    .submit:hover {
      background-color: #00bfff96;
    }

.add{
    display: flex;
    justify-content: center;
    align-items: center;
    max-width: 1170px;
    margin: auto;
    padding-top: 100px;
}
  
  </style>


<div class="add">
      <!-- <h2 class="h1-txt"></h2> -->
      <form action="#" method='POST' enctype="multipart/form-data" class="form">
        <p class="titlexx">ADD RACE TRACK </p>
        <p class="message"> </p>
        <div class="flex">
          <div class="reg-input">
            <!-- img upload -->
            <label>
              <input class="input" type="file" name="image" placeholder="" required="">
              <span>Track Name</span>
            </label>
          </div>
          <div class="form-instruction">
            <h3 calss="h1-txt"> Initial Dream</h3>
            <p></p>
          </div>
        </div>

        <label>
          <input class="input" type="text" name="track_name" placeholder="" required="">
          <span>Track Name</span>
        </label>

        <label>
          <input class="input" type="text" name="event" placeholder="" required="">
          <span>Event Name</span>
        </label>


        <label>
          <input class="input" type="date" name="date" placeholder="" required="">
          <span>Date</span>
        </label>

        <label>
          <input class="input" type="text" name="vehicle_type" placeholder="" required="">
          <span>Vehicle Type</span>
        </label>



        <label>
          <select id="opt" required placeholder="" class="input" name="category">
            <option class="opt" value="Touring car racing">Touring car racing</option>
            <option class="opt" value="Kart racing">Kart racing</option>
            <option class="opt" value="Production-car racing">Production-car racing</option>
            <option class="opt" value="Drag racing">Drag racing</option>
            <option class="opt" value="Stock car racing">Stock car racing</option>
            <option class="opt" value="Off-road racing">Off-road racing</option>
            <option class="opt" value="Rallycross">Rallycross</option>
            <option class="opt" value="Autocross">Autocross</option>
            <option class="opt" value="Pickup truck racing">Pickup truck racing</option>
            <option class="opt" value="Road racing">Road racing</option>
            <option class="opt" value="Autocross">Autocross</option>
            <option class="opt" value="Auto hillclimbing">Auto hillclimbing</option>
            <option class="opt" value="Other categories">Other categories</option>

          </select>
          <span>Category</span>
        </label>


        <label>
          <input class="input" type="text" name="organizer" placeholder="" required="">
          <span>Organizer Name</span>
        </label>

        <label>
          <input class="input" type="text" name="noise_level" placeholder="" required="">
          <span>Noise Level</span>
        </label>



        <label>
          <input class="input" type="text" name="price" placeholder="" required="">
          <span>Amound</span>
        </label>

        <label>
          <input class="input" type="text" name="location" placeholder="                                    paste iframe here" required="">
          <span>Location</span>
        </label>

        <label>
          <input class="input" type="text" name="track_length" placeholder="" required="">
          <span>Track Length</span>
        </label>

        <label>
          <input class="input" type="text" name="track_width" placeholder="" required="">
          <span>Track Width</span>
        </label>

        <label>
          <input class="input" type="text" name="total_area" placeholder="" required="">
          <span>Total Area</span>
        </label>

        <label>
          <input class="input" type="text" name="vehicle_capacity" placeholder="" required="">
          <span>Vehicle Capacity</span>
        </label>

        <label>
          <input class="input" type="text" name="lap_timing" placeholder="" required="">
          <span>Lap Timing</span>
        </label>

        <label>
          <input class="input" type="text" name="speed_sustainability" placeholder="" required="">
          <span>Speed Sustainability</span>
        </label>

        <label>
          <input class="input" type="text" name="max_grade" placeholder="" required="">
          <span>Max.Grade</span>
        </label>

        <label>
          <input class="input" type="text" name="total_race" placeholder="" required="">
          <span>Total Race</span>
        </label>

        <label>
          <input class="input" type="text" name="total_turn" placeholder="" required="">
          <span>Total Turn</span>
        </label>


        <label>
          <input class="input" type="file" name="bprint" placeholder="                                       Optional">
          <span>Track BluePrint</span>
        </label>

        <button class="submit" type="submit" name="submit">Submit</button>

      </form>
    </div>


    <?php
    if (isset($_REQUEST['submit'])) {


      $filename = $_FILES["image"]["name"];
      $tempname = $_FILES["image"]["tmp_name"];
      $folder = "images/" . $filename;
      move_uploaded_file($tempname, $folder);

      $bprint = $_FILES["bprint"]["name"];
      $tempname = $_FILES["bprint"]["tmp_name"];
      $folder = "images/" . $bprint;
      move_uploaded_file($tempname, $folder);

      $trackName = $_POST['track_name'];
      $event = $_POST['event'];
      $date = $_POST['date'];
      $vehicleType = $_POST['vehicle_type'];
      $category = $_POST['category'];
      $organizer = $_POST['organizer'];
      $noise_level = $_POST['noise_level'];
      $price = $_POST['price'];
      $location = $_POST['location'];
      $trackLength = $_POST['track_length'];
      $trackWidth = $_POST['track_width'];
      $totalArea = $_POST['total_area'];
      $vehicleCapacity = $_POST['vehicle_capacity'];
      $lapTiming = $_POST['lap_timing'];
      $speedSustainability = $_POST['speed_sustainability'];
      $maxGrade = $_POST['max_grade'];
      $totalRace = $_POST['total_race'];
      @$totalTurn = $_POST['total_turn'];


      $query = "INSERT INTO `tracks`(`vendor_id`,`image`,`track_name`,`event`,`date`,`vehicle_type`,`category`,`organizer`,`noise_level`,`price`,`location`,`track_length`,`track_width`,`total_area`,`vehicle_capacity`,`lap_timing`,`speed_sustainability`,`max_grade`,`total_race`,`total_turn`,`bprint`)
                             VALUES('$vendor_id','$filename','$trackName','$event','$date','$vehicleType','$category','$organizer','$noise_level','$price','$location','$trackLength','$trackWidth','$totalArea','$vehicleCapacity','$lapTiming','$speedSustainability','$maxGrade','$totalRace','$totalTurn','$bprint')";

      $data = mysqli_query($con, $query);

      if ($data) {
        echo "<script>alert('Done!');</script>";
      } else {
        echo "<script>alert('Failed!');</script>";
      }
    }
    ?>

    <?php
    include './VendorFooter.php';
    ?>