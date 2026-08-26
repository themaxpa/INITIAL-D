<?php
$filename = $_FILES["img-source"]["name"];
$tempname = $_FILES["img-source"]["tmp_name"];
$folder = "images/" .$filename;

echo $folder;
 move_uploaded_file($tempname, $folder);

 echo "<img src='$folder' height='100px' width='100px' ";
?>