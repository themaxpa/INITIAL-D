<?php
include '../connection/dbconnection.php';
@$id=$_REQUEST['id'];
@$status=$_REQUEST['status'];
if($status=="Approved"){
    @$qry="UPDATE `user_login` SET `status`='$status'  WHERE `login_id`='$id' AND `type`='vendor'";
}elseif($status=="Rejected"){
    @$qry="UPDATE `user_login` SET `status`='$status'  WHERE `login_id`='$id' AND `type`='vendor'";
}
@$result = mysqli_query($con,$qry);
if($result){
    
    echo "<script>window.location='./ManageOrganizer.php'</script>";
}
?>