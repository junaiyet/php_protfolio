<?php

require '../db.php';

// $sub_title = $_POST['sub_title'];
// $title = $_POST['title'];
$uploded_file = $_FILES['dark_logo'];
$uploded_file_name = $uploded_file['name'];
$after_expolde =explode('.',$uploded_file_name);
$extension =end($after_expolde);
$allowed_extension=array('jpg','png','jpeg','gif');

if (in_array($extension,$allowed_extension)) {
    if ($uploded_file['size'] <= 1000000) {
        
        $inssert = "INSERT INTO  dark_logos(dark_logo) VALUES ('$uploded_file_name')";
        $inssert_result = mysqli_query($db_connection, $inssert);
        $last_id = mysqli_insert_id($db_connection);
        $file_name = $last_id.'.'.$extension;
        $new_location ='../uplodeds/logo/'.$file_name;
        move_uploaded_file($uploded_file['tmp_name'],$new_location);

        // 
        $update_users = "UPDATE dark_logos SET dark_logo = '$file_name' WHERE id=$last_id";
        $update_users_result = mysqli_query($db_connection, $update_users);
        $_SESSION['success'] = 'Dark logo Added Successful';
    
        header('location:add_logo.php');
        // 
    }else{
        $_SESSION['size'] = 'file size  to large, max 1 mb';
        header('location:add_logo.php');
    }
}else{
    $_SESSION['extension'] = 'ivalide extension';
    header('location:add_logo.php');
}



?>