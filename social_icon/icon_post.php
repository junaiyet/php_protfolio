<?php

require '../db.php';

$icon_class = $_POST['icon_class'];
$social_link = $_POST['social_link'];



$insert = "INSERT INTO social(icon_class, social_link)VALUES('$icon_class','$social_link')";

$insert_result = mysqli_query($db_connection, $insert);

header('location:add_social_icon.php');


?>