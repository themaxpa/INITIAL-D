<?php
session_start();
include '../connection/dbconnection.php';
include './AdminHeader.php';
?>
<style>
    /* REPLAY FEEDBACK */
    .containerFB {
        margin-top: 50px;
        width: auto;
        height: auto;
    }

    #hiddenIP {
        display: none;
    }

    .hiddenIP input {
        height: 35px;
        border-radius: 8px;
        margin: 10px -20px;
    }

    #hiddenIP .sub {
        margin-left: 30px;
        color: #ee244e;
        background-color: #20232b;
    }

    .text h5 {
        font-size: 15px;
        color: #20232b;
    }

    .table-container {
        margin: 100px auto;
        width: 80%;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    table, th, td {
        border: 1px solid #20232b;
    }

    th, td {
        color: white;
        padding: 10px;
        text-align: left;
    }

    th {
        background-color: #ee244e;
        color: #fff;
    }

    .btn {
        width: 100px;
        height: 40px;
        font-weight: 600;
        font-size: 15px;
        border: 1px solid #20232b;
        background-color: #ee244e;
        color: #fff;
        cursor: pointer;
    }

    .hiddenIP {
        margin-top: 10px;
    }
</style>

<section class="track-card">
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Satisfaction</th>
                    <th>Feedback</th>
                    <!-- <th>Action</th> -->
                </tr>
            </thead>
            <tbody>
                <?php
                // SQL query to select all records from the 'feedback' table
                $qry = "SELECT * FROM feedback";
                $data = mysqli_query($con, $qry); // Execute the query

                if ($data && $data->num_rows > 0) {
                    while ($row = $data->fetch_assoc()) {
                        ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['uname']); ?></td>
                            <td><?php echo htmlspecialchars($row['email']); ?></td>
                            <td><?php echo htmlspecialchars($row['satisfy']); ?></td>
                            <td><?php echo htmlspecialchars($row['msg']); ?></td>
                            <td>
                                <!-- <button class="btn" onclick="document.getElementById('hiddenIP-<?php echo $row['uname']; ?>').style.display='block'">Reply</button>
                                <form id="hiddenIP-<?php echo $row['uname']; ?>" class="hiddenIP" method="post" style="display: none;">
                                    <input type="hidden" name="feedback_id" value="<?php echo $row['uname']; ?>">
                                    <input type="text" name="replay" required placeholder="Enter your reply">
                                    <input class="sub" type="submit" name="submit" value="Send">
                                </form> -->
                            </td>
                        </tr>
                        <?php
                    }
                } else {
                    echo "<tr><td colspan='5'>No feedback available.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</section>

<?php
// Handle the reply submission
if (isset($_POST['submit'])) {
    $feedback_id = $_POST['feedback_id']; // Retrieve the feedback ID
    $replay = $_POST['replay'];

    // Insert the reply into the database
    $sqlr = "INSERT INTO replayfeed (feedback_id, replay) VALUES ('$feedback_id', '$replay')";
    $data = mysqli_query($con, $sqlr);

    if ($data) {
        echo "<script>alert('Feedback sent successfully!');</script>";
    } else {
        echo "<script>alert('Failed to send feedback!');</script>";
    }
}
?>

<?php include './AdminFooter.php'; ?>