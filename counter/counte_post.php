<?php

require '../db.php';


$percentage = $_POST['percentage'];
$counter_icon = $_POST['counter_icon'];



$insert = "INSERT INTO counte(counter_icon,percentage)VALUES('$counter_icon','$percentage')";

$insert_result = mysqli_query($db_connection, $insert);

header('location:add_counte.php');


?>