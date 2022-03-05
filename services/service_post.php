<?php

require '../db.php';

$service_icon = $_POST['service_icon'];

$title =$_POST['title'];
$description = $_POST['description'];



$insert = "INSERT INTO servire(service_icon, title,description)VALUES('$service_icon','$title','$description')";

$insert_result = mysqli_query($db_connection, $insert);

header('location:add_service.php');

?>
