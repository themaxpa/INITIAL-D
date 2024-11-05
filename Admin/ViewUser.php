<?php
session_start();
include '../connection/dbconnection.php';
include './AdminHeader.php';
?>
<!-- Reports -->
<div class="col-12" style="margin-top: 100px;">
    <div class="card">
        <div class="card-body" style="background-color: #ee244b;">
            <h4 class="h1-txt">User Details</h4>
        </div>
    </div>
</div><!-- End Reports -->
<!-- <div class="container"> -->
    <section>
    <div class="table-responsive-sm">
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th>UserName</th>
                    <th>Status</th>
                    <th>Type</th>
                    <th> Name</th>
                    <!-- <th>Last Name</th> -->
                    <th>DOB</th>
                    <th>Gender</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $qry = "SELECT * FROM `user_login` JOIN `user_registration` ON `user_login`.`reg_id`= `user_registration`.`reg_id` WHERE `status` = 'approved' ";
                echo $qry;
                $result = mysqli_query($con, $qry);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $id = $row['reg_id'];

                        echo "<tr>";

                        echo "<td>" . $row["username"] . "</td>";
                        echo "<td>" . $row["status"] . "</td>";
                        echo "<td>" . $row["type"] . "</td>";
                        echo "<td>" . $row["first_name"] .$row["last_name"] . "</td>";
                        // echo "<td>" . $row["last_name"] . "</td>";
                        echo "<td>" . $row["dob"] . "</td>";
                        echo "<td>" . $row["gender"] . "</td>";
                        echo "<td>" . $row["ph"] . "</td>";
                        echo "<td>" . $row["email"] . "</td>";

                        echo "<td> <a class='btn btn-outline-danger' href='./DeleteUser.php? id={$id}&status=rejected'> Remove </a> </td>";

                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='7'> No Data Available</td> </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
<!-- </div> -->

<?php
include './AdminFooter.php';
?>