<?php
session_start();
include '../connection/dbconnection.php';
include './AdminHeader.php';
?>
<!-- Reports -->
<div class="col-12" style="margin-top: 100px;">
    <div class="card">
        <div class="card-body" style="background-color: #ee244b;">
            <h4 class="h1-txt">Organizers Details</h4>
        </div>
    </div>
</div><!-- End Reports -->

<!-- <div class="container"> -->
    <section>
    <div class="table-responsive-sm">
        <table class="table table-dark table-hover" style="margin-top: 0px;">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Company Name</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $qry = "SELECT * FROM `user_login` JOIN `vendor_registration` ON `user_login`.`vendor_id`= `vendor_registration`.`vendor_id` WHERE `user_login`.`type` = 'vendor' ";
                // echo $qry;
                $result = mysqli_query($con, $qry);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $id = $row['vendor_id'];

                        echo "<tr>";

                        echo "<td>" . $row["name"] . "</td>";
                        echo "<td>" . $row["email"] . "</td>";
                        echo "<td>" . $row["phone"] . "</td>";
                        echo "<td>" . $row["address"] . "</td>";
                        echo "<td>" . $row["company_name"] . "</td>";
                       
                   
                        echo "<td> <a class='btn btn-outline-primary' href='./DeleteOrganizer.php?id={$id}'> Remove </a> </td>";
                        echo "</tr>";
                    }}
                ?>
            </tbody>
        </table>
    </div>
<!-- </div> -->

<?php
include './AdminFooter.php';
?>