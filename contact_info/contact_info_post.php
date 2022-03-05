<?php

require '../db.php';

$address = $_POST['address'];
$number = $_POST['number'];
$email = $_POST['email'];



$insert = "INSERT INTO contact_info(address, number,email)VALUES('$address','$number','$email')";

$insert_result = mysqli_query($db_connection, $insert);

header('location:add_contact_info.php');


?>