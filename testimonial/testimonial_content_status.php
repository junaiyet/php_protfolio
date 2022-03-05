<?php 
session_start();
require '../db.php';

$id = $_GET['id'];

$select_testimonials_status_one = "SELECT * FROM testimonials WHERE id=$id";
$select_testimonials_status_result_one =mysqli_query($db_connection, $select_testimonials_status_one);
$after_assoc_status_one = mysqli_fetch_assoc($select_testimonials_status_result_one);

if($after_assoc_status_one['status']==1){
// for count
$select_testimonials_status = "SELECT COUNT(*) as total_testimonials FROM testimonials WHERE status=1";
$select_testimonials_status_result =mysqli_query($db_connection, $select_testimonials_status);
$after_assoc_status = mysqli_fetch_assoc($select_testimonials_status_result);
// for count
 if ($after_assoc_status['total_testimonials'] == 1) {
        $_SESSION['limite'] = 'min 1 testimonials can active!';
        header('location:view_testimonial.php');
 }else{

         $update_status = "UPDATE testimonials SET status=0 WHERE id=$id" ;
         $update_status_result = mysqli_query($db_connection, $update_status);
         header('location:view_testimonial.php');
 }
}else{

$select_testimonials_status = "SELECT COUNT(*) as total_testimonials FROM testimonials WHERE status=1";
$select_testimonials_status_result =mysqli_query($db_connection, $select_testimonials_status);
$after_assoc_status = mysqli_fetch_assoc($select_testimonials_status_result);

if ($after_assoc_status['total_testimonials'] == 8) {
       $_SESSION['limite'] = 'maximam 5 testimonials can active!';
       header('location:view_testimonial.php');
}else{
       
       $update_status = "UPDATE testimonials SET status=1 WHERE id=$id" ;
       $update_status_result = mysqli_query($db_connection, $update_status);
       header('location:view_testimonial.php');
}
}




?>