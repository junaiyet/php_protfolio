<?php 

require '../db.php';

$id = $_GET['id'];


$select_image = " SELECT * FROM dark_logos WHERE id= $id ";
$select_image_result = mysqli_query($db_connection, $select_image);
$after_image_assoc =mysqli_fetch_assoc($select_image_result);
echo $after_image_assoc['dark_logo'];


$delete_image ='../uplodeds/logo/'.$after_image_assoc['dark_logo'];
unlink($delete_image);



$delete = " DELETE FROM dark_logos WHERE id= $id ";
$delete_result = mysqli_query($db_connection, $delete);
header('location:view_logo.php');
