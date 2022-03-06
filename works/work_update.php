<?php
session_start();
require '../db.php';


$id = $_POST['id'];
$title = $_POST['title'];
$catagory = $_POST['catagory'];
$description = mysqli_real_escape_string($db_connection, $_POST['description']);


   if ($_FILES['image']['name'] != '') {
      // 
      $uploded_file = $_FILES['image'];

      $uploded_file_name = $uploded_file['name'];
      $after_expolde = explode('.', $uploded_file_name);
      $extension = end($after_expolde);
      $allowed_extension = array('jpg', 'png', 'jpeg', 'gif');

      if (in_array($extension, $allowed_extension)) {
         if ($uploded_file['size'] <= 1000000) {
            $select_img = "SELECT * FROM about_us WHERE  id=$id";
            $select_img_result = mysqli_query($db_connection, $select_img);
            $after_assos = mysqli_fetch_assoc($select_img_result);

            $delete_from = '../uplodeds/about_images/' . $after_assos['image'];
            unlink($delete_from);


            $file_name = $id . '.' . $extension;
            $new_location = '../uplodeds/about_images/' . $file_name;
            move_uploaded_file($uploded_file['tmp_name'], $new_location);

            // 
            $update_users = "UPDATE about_us SET image = '$file_name' WHERE id=$id";
            $update_users_result = mysqli_query($db_connection, $update_users);
            $_SESSION['success'] = 'Registration Successful';

            header('location:view_about.php');
            // 
         } else {
            $_SESSION['size'] = 'file size  to large, max 1 mb';
            header('location:about_edit.php?id=' . $id);
         }
      } else {
         $_SESSION['extension'] = 'ivalide extension';
         header('location:about_edit.php?id=' . $id);
      }
      // 


   } else {
      $ubdate_user = "UPDATE about_us SET title=$title, catagory= $catagory description='$description' WHERE id=$id ";
      $ubdate_user_result = mysqli_query($db_connection, $ubdate_user);

      $_SESSION['success'] = 'User Updated! ';
      header('location:view_work.php');
   }
