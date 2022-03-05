<?php 

require '../db.php';

$id = $_GET['id'];


$delete = " DELETE FROM counte WHERE id= $id ";
$delete_result = mysqli_query($db_connection, $delete);
header('location:view_contact_info.php');
