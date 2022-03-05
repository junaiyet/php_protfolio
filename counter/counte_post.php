<?php

require '../db.php';


$percentage = $_POST['percentage'];



$insert = "INSERT INTO counte(percentage)VALUES('$percentage')";

$insert_result = mysqli_query($db_connection, $insert);

header('location:add_counte.php');


?>