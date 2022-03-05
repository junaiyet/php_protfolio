<?php 
session_start();
require '../db.php';

$id = $_GET['id'];

$select_brand_logos_status_one = "SELECT * FROM brand_logos WHERE id=$id";
$select_brand_logos_status_result_one =mysqli_query($db_connection, $select_brand_logos_status_one);
$after_assoc_status_one = mysqli_fetch_assoc($select_brand_logos_status_result_one);

if($after_assoc_status_one['status']==1){
// for count
$select_brand_logos_status = "SELECT COUNT(*) as total_brand_logos FROM brand_logos WHERE status=1";
$select_brand_logos_status_result =mysqli_query($db_connection, $select_brand_logos_status);
$after_assoc_status = mysqli_fetch_assoc($select_brand_logos_status_result);
// for count
 if ($after_assoc_status['total_brand_logos'] == 1) {
        $_SESSION['limite'] = 'min 1 brand_logos can active!';
        header('location:view_brand.php');
 }else{

         $update_status = "UPDATE brand_logos SET status=0 WHERE id=$id" ;
         $update_status_result = mysqli_query($db_connection, $update_status);
         header('location:view_brand.php');
 }
}else{

$select_brand_logos_status = "SELECT COUNT(*) as total_brand_logos FROM brand_logos WHERE status=1";
$select_brand_logos_status_result =mysqli_query($db_connection, $select_brand_logos_status);
$after_assoc_status = mysqli_fetch_assoc($select_brand_logos_status_result);

if ($after_assoc_status['total_brand_logos'] == 8) {
       $_SESSION['limite'] = 'maximam 5 brand_logos can active!';
       header('location:view_brand.php');
}else{
       
       $update_status = "UPDATE brand_logos SET status=1 WHERE id=$id" ;
       $update_status_result = mysqli_query($db_connection, $update_status);
       header('location:view_brand.php');
}
}




?>