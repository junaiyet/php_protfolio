<?php

require '../db.php';

$topic = $_POST['topic'];
$description = $_POST['description'];
$percentage = $_POST['percentage'];



$insert = "INSERT INTO skills(topic, description,percentage)VALUES('$topic','$description','$percentage')";

$insert_result = mysqli_query($db_connection, $insert);

header('location:add_skills.php');


?>