<?php
session_start();
require '../db.php';

$user_id = $_SESSION['id'];
$title = $_POST['title'];
$catagory = $_POST['catagory'];
$description	 = mysqli_real_escape_string($db_connection, $_POST['description']);

$uploaded_file = $_FILES['image'];
$after_explode = explode('.',$uploaded_file['name']);
$extension = end($after_explode);
$allowed_extention =array('jpg','png','jpeg',);
if(in_array($extension,$allowed_extention)){
  if($uploaded_file['size'] = 10000000){

    $insert = "INSERT INTO  works_area( user_id, title,catagory, description)VALUES($user_id,'$title','$catagory','$description')";
    $insert_result = mysqli_query($db_connection, $insert);
    $last_id = mysqli_insert_id($db_connection);

    $file_name = $last_id.'.'.$extension;
    $new_location ='../uplodeds/works/'.$file_name;
    move_uploaded_file($uploaded_file['tmp_name'],    $new_location);
    
    $update_image = "UPDATE  works_area SET image='$file_name' WHERE id=$last_id";
    $update_image_result=mysqli_query($db_connection,$update_image);
    header('location:add_work.php');

  }else{
    $_SESSION['size']='Maximum 10000000 bytes';
    header('location:add_work.php');
  }

}else{
   $_SESSION['extention']='Invalid Extension';
    header('location:add_work.php');
}




header('location:add_work.php');


?>