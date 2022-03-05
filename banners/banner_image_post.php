<?php

require '../db.php';

// $sub_title = $_POST['sub_title'];
// $title = $_POST['title'];
$uploded_file = $_FILES['banner_image'];
$uploded_file_name = $uploded_file['name'];
$after_expolde =explode('.',$uploded_file_name);
$extension =end($after_expolde);
$allowed_extension=array('jpg','png','jpeg','gif');

if (in_array($extension,$allowed_extension)) {
    if ($uploded_file['size'] <= 1000000) {
        
        $inssert = "INSERT INTO  banner_images(banner_image) VALUES ('$uploded_file_name')";
        $inssert_result = mysqli_query($db_connection, $inssert);
        $last_id = mysqli_insert_id($db_connection);
        $file_name = $last_id.'.'.$extension;
        $new_location ='../uplodeds/banners/'.$file_name;
        move_uploaded_file($uploded_file['tmp_name'],$new_location);

        // 
        $update_users = "UPDATE banner_images SET banner_image = '$file_name' WHERE id=$last_id";
        $update_users_result = mysqli_query($db_connection, $update_users);
        $_SESSION['success'] = 'Banner Image Added Successful';
       
        header('location:add_banner.php');
        // 
    }else{
        $_SESSION['size'] = 'file size  to large, max 1 mb';
        header('location:add_banner.php');
    }
}else{
    $_SESSION['extension'] = 'ivalide extension';
    header('location:add_banner.php');
}



?>