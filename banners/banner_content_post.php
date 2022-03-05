<?php

require '../db.php';

// $sub_title = $_POST['sub_title'];
// $title = $_POST['title'];


$sub_title = mysqli_real_escape_string($db_connection, $_POST['sub_title']);
$title = mysqli_real_escape_string($db_connection, $_POST['title']);
$description = mysqli_real_escape_string($db_connection, $_POST['description']);
$insert = "INSERT INTO banner_contents(sub_title, title, description)VALUES('$sub_title','$title','$description')";
$insert_result = mysqli_query($db_connection, $insert);
header('location:add_banner.php');


?>