<?php
include '../connection/dbconnection.php';
include './VendorHeader.php';

?>

<div class="container" style="height: 100vh; padding:70px">

<?php
// Query to fetch the latest track details
$qry = "SELECT track_id,vendor_id,image,track_name,event,date,vehicle_type,category,organizer,noise_level,price 
        FROM tracks 
        WHERE vendor_id='2'
        ORDER BY track_id DESC 
        LIMIT 1;";

$data = mysqli_query($con, $qry);

if ($data->num_rows > 0) {
?>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>Track ID</th>
                <th>Vendor ID</th>
                <th>Image</th>
                <th>Track Name</th>
                <th>Event</th>
                <th>Date</th>
                <th>Vehicle Type</th>
                <th>Category</th>
                <th>Organizer</th>
                <th>Noise Level</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
<?php
    while ($row = $data->fetch_assoc()) {
        // Display table rows
?>
        <tr>
            <td><?php echo $row['track_id']; ?></td>
            <td><?php echo $row['vendor_id']; ?></td>
            <td><img src="<?php echo $row['image']; ?>" alt="Track Image" width="100"></td>
            <td><?php echo $row['track_name']; ?></td>
            <td><?php echo $row['event']; ?></td>
            <td><?php echo $row['date']; ?></td>
            <td><?php echo $row['vehicle_type']; ?></td>
            <td><?php echo $row['category']; ?></td>
            <td><?php echo $row['organizer']; ?></td>
            <td><?php echo $row['noise_level']; ?></td>
            <td><?php echo $row['price']; ?></td>
            <td>
                <!-- Remove and Delete buttons -->
                <form method="POST" action="">
                    <button type="submit" name="delete" value="<?php echo $row['track_id']; ?>">Delete</button>
                </form>
            </td>
        </tr>
<?php
    }
?>
        </tbody>
    </table>
<?php
} else {
    echo "<p>No tracks found.</p>";
}

// Handling the delete query
if (isset($_POST['delete'])) {
    $track_id = $_POST['delete'];
    $deleteQry = "DELETE FROM tracks WHERE track_id = '$track_id'";
    if (mysqli_query($con, $deleteQry)) {
        echo "<p>Track with ID $track_id has been deleted successfully.</p>";
    } else {
        echo "<p>Error deleting track: " . mysqli_error($con) . "</p>";
    }
}
?>
</div>


<?php
include './VendorFooter.php';


?>