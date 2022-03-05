<?php 
session_start();
require '../db.php';

$id = $_GET['id'];

$select_counte_status_one = "SELECT * FROM counte WHERE id=$id";
$select_counte_status_result_one =mysqli_query($db_connection, $select_counte_status_one);
$after_assoc_status_one = mysqli_fetch_assoc($select_counte_status_result_one);

if($after_assoc_status_one['status']==1){
// for count
$select_counte_status = "SELECT COUNT(*) as total_counte FROM counte WHERE status=1";
$select_counte_status_result =mysqli_query($db_connection, $select_counte_status);
$after_assoc_status = mysqli_fetch_assoc($select_counte_status_result);
// for count
 if ($after_assoc_status['total_counte'] == 1) {
        $_SESSION['limite'] = 'min 1 counte can active!';
        header('location:view_counte.php');
 }else{

         $update_status = "UPDATE counte SET status=0 WHERE id=$id" ;
         $update_status_result = mysqli_query($db_connection, $update_status);
         header('location:view_counte.php');
 }
}else{

$select_counte_status = "SELECT COUNT(*) as total_counte FROM counte WHERE status=1";
$select_counte_status_result =mysqli_query($db_connection, $select_counte_status);
$after_assoc_status = mysqli_fetch_assoc($select_counte_status_result);

if ($after_assoc_status['total_counte'] == 4) {
       $_SESSION['limite'] = 'maximam 4 counte can active!';
       header('location:view_counte.php');
}else{
       
       $update_status = "UPDATE counte SET status=1 WHERE id=$id" ;
       $update_status_result = mysqli_query($db_connection, $update_status);
       header('location:view_counte.php');
}
}




?>