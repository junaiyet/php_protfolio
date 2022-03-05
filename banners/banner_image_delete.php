<?php 

require '../db.php';

$id = $_GET['id'];


$select_image = " SELECT * FROM banner_images WHERE id= $id ";
$select_image_result = mysqli_query($db_connection, $select_image);
$after_image_assoc =mysqli_fetch_assoc($select_image_result);
echo $after_image_assoc['banner_image'];


$delete_image ='../uplodeds/banners/'.$after_image_assoc['banner_image'];
unlink($delete_image);



$delete = " DELETE FROM banner_images WHERE id= $id ";
$delete_result = mysqli_query($db_connection, $delete);
header('location:view_banner.php');

?>