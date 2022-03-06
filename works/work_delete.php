<?php 

require '../db.php';

$id = $_GET['id'];


$delete = " DELETE FROM works_area WHERE id= $id ";
$delete_result = mysqli_query($db_connection, $delete);
header('location:view_work.php');

?>