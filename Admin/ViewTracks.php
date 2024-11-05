<?php
session_start();
include '../connection/dbconnection.php';
include './AdminHeader.php';
?>
<!-- Reports -->
<div class="col-12" style="margin-top: 100px;">
    <div class="card">
        <div class="card-body" style="background-color: #babcc5;">
            <h4 class="h1-txt" style="color: #ee244e;">Track Details</h4>
        </div>
    </div>
</div><!-- End Reports -->
<div class="TrackDetails">
    <div class="table-responsive-sm">
        <table class="table table-dark table-hover table-sm">
            <thead>
                <tr>
                    <th class="trackD-th">Organizer ID</th>
                    <th class="trackD-th">Track Name</th>
                    <th class="trackD-th">Event</th>
                    <th class="trackD-th">Date</th>
                    <th class="trackD-th">Vehicle Type</th>
                    <th class="trackD-th">Category</th>
                    <th class="trackD-th">Organizer</th>
                    <th class="trackD-th">Noise Level</th>
                    <th class="trackD-th">Price</th>
                    <th class="trackD-th">Status</th>
                </tr>
            </thead>
            <?php
            $qry = "SELECT tracks.*,user_login.* FROM `tracks`,`user_login` where `user_login`.vendor_id=`tracks`.vendor_id";
            // echo $qry;
            $data = mysqli_query($con, $qry);

            if ($data->num_rows > 0) {
                while ($row = $data->fetch_assoc()) {
                    $uid = $row['vendor_id'];

                    echo "<tr>";
                    echo "<td>" . $row["vendor_id"] . "</td>";
               ?> 
                 <a href="../TrackBooking.php" ><?php echo "<td>" . $row["track_name"] . "</td>"; ?></a> 
             <?php 
                    echo "<td>" . $row["event"] . "</td>";
                    echo "<td>" . $row["date"] . "</td>";
                    echo "<td>" . $row["vehicle_type"] . "</td>";
                    echo "<td>" . $row["category"] . "</td>";
                    echo "<td>" . $row["organizer"] . "</td>";
                    echo "<td>" . $row["noise_level"] . "</td>";
                    echo "<td>" . $row["price"] . "</td>";

                    if ($row["status"] == "Pending") {
                        echo "<td> <a class='btn btn-outline-danger' href='./ManageTracks.php?id={$uid}&status=rejected'> Approved</a> </td>";
                    } else if ($row["status"] == "Approved")
                        echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='7'> No Data Available</td> </tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</div>

<?php
include './AdminFooter.php';
?>