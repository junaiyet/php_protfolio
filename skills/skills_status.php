<?php 
session_start();
require '../db.php';

$id = $_GET['id'];

$select_skills_status_one = "SELECT * FROM skills WHERE id=$id";
$select_skills_status_result_one =mysqli_query($db_connection, $select_skills_status_one);
$after_assoc_status_one = mysqli_fetch_assoc($select_skills_status_result_one);

if($after_assoc_status_one['status']==1){
// for count
$select_skills_status = "SELECT COUNT(*) as total_skills FROM skills WHERE status=1";
$select_skills_status_result =mysqli_query($db_connection, $select_skills_status);
$after_assoc_status = mysqli_fetch_assoc($select_skills_status_result);
// for count
 if ($after_assoc_status['total_skills'] == 1) {
        $_SESSION['limite'] = 'min 1 skills can active!';
        header('location:view_skills.php');
 }else{

         $update_status = "UPDATE skills SET status=0 WHERE id=$id" ;
         $update_status_result = mysqli_query($db_connection, $update_status);
         header('location:view_skills.php');
 }
}else{

$select_skills_status = "SELECT COUNT(*) as total_skills FROM skills WHERE status=1";
$select_skills_status_result =mysqli_query($db_connection, $select_skills_status);
$after_assoc_status = mysqli_fetch_assoc($select_skills_status_result);

if ($after_assoc_status['total_skills'] == 4) {
       $_SESSION['limite'] = 'maximam 4 skills can active!';
       header('location:view_skills.php');
}else{
       
       $update_status = "UPDATE skills SET status=1 WHERE id=$id" ;
       $update_status_result = mysqli_query($db_connection, $update_status);
       header('location:view_skills.php');
}
}




?>