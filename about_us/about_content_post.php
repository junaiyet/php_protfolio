<?php
session_start();
require '../db.php';

// $sub_title = $_POST['sub_title'];
// $title = $_POST['title'];
$description = mysqli_real_escape_string($db_connection, $_POST['description']);

$uploaded_file = $_FILES['image'];
$after_explode = explode('.',$uploaded_file['name']);
$extension = end($after_explode);
$allowed_extention =array('jpg','png','jpeg',);
if(in_array($extension,$allowed_extention)){
  if($uploaded_file['size'] = 10000000){

    $insert = "INSERT INTO about_us( description)VALUES('$description')";
    $insert_result = mysqli_query($db_connection, $insert);
    $last_id = mysqli_insert_id($db_connection);

    $file_name = $last_id.'.'.$extension;
    $new_location ='../uplodeds/about_images/'.$file_name;
    move_uploaded_file($uploaded_file['tmp_name'],    $new_location);
    
    $update_image = "UPDATE about_us SET image='$file_name' WHERE id=$last_id";
    $update_image_result=mysqli_query($db_connection,$update_image);
    header('location:add_about.php');

  }else{
    $_SESSION['size']='Maximum 10000000 bytes';
    header('location:add_about.php');
  }

}else{
   $_SESSION['extention']='Invalid Extension';
    header('location:add_about.php');
}




header('location:add_about.php');


?>