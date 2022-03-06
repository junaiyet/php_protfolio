<?php 
        require '../db.php';

        $id = $_GET['id'];
       

        $update_status = "UPDATE works_area SET status=0" ;
        $update_status_result = mysqli_query($db_connection,$update_status);
        header('location:view_work.php');


        $update_status_two = "UPDATE works_area SET status=1 WHERE id=$id" ;
        $update_status_result_two = mysqli_query($db_connection,$update_status_two);
        header('location:view_work.php');



?>