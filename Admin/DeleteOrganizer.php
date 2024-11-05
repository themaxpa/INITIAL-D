<?php 
include '../connection/dbconnection.php';
$id=$_REQUEST['id'];
?>



<?php
$qry="DELETE FROM  `vendor_registration` WHERE `vendor_id` ='$id'";
//echo $qry;
$qry1="DELETE FROM  `user_login` WHERE `reg_id` ='$id'";
//echo $qry1;

if($con->query($qry)==TRUE && $con->query($qry1)==TRUE){
        // echo '<script type=\"text/javascript\"> alert(\"deleted successfully\");
        // window.location=(/ViewUser.php");
        // </script>';
        echo "<script>window.location='./ViewOrganizer.php'</script>";
    
}
else{
    echo "<script>window.location='./ViewOrganizer.php'</script>";

}
?> 


