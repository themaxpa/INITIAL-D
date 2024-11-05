<?php
include '../connection/dbconnection.php';
include './VendorHeader.php';
?>
<style>
    .h1-txt {
  color: #fff;
  font-family: myFont !important;
  margin: 0px;
  font-size: 150px;
}
.Abouthero{
    width:100%;
   height: max-content;
    position: relative;
}
.gradient{
    width:100%;
    height:100%;
 background-image: url('../assets/img/project-img/traffic-light.jpg'); 
 display: flex;
 justify-content: center;  
}
</style>

<div class="Abouthero">
<div class="gradient">
  <h1 class="h1-txt" style="margin-top: 250px;">Initial Dream</h1>
 
</div>
</div>

<?php
include './VendorFooter.php';
?>