<?php 
session_start();
        require '../db.php';

        $id = $_GET['id'];
       
        $select_service_status_one = "SELECT * FROM servire WHERE id=$id";
        $select_service_status_result_one =mysqli_query($db_connection, $select_service_status_one);
        $after_assoc_status_one = mysqli_fetch_assoc($select_service_status_result_one);

      if($after_assoc_status_one['status']==1){
        // for count
        $select_service_status = "SELECT COUNT(*) as total_servire FROM servire WHERE status=1";
        $select_service_status_result =mysqli_query($db_connection, $select_service_status);
        $after_assoc_status = mysqli_fetch_assoc($select_service_status_result);
        // for count
         if ($after_assoc_status['total_servire'] == 1) {
                $_SESSION['limite'] = 'min 1 servire can active!';
                header('location:view_service.php');
         }else{

                 $update_status = "UPDATE servire SET status=0 WHERE id=$id" ;
                 $update_status_result = mysqli_query($db_connection, $update_status);
                 header('location:view_service.php');
         }
      }else{

        $select_service_status = "SELECT COUNT(*) as total_servire FROM servire WHERE status=1";
        $select_service_status_result =mysqli_query($db_connection, $select_service_status);
        $after_assoc_status = mysqli_fetch_assoc($select_service_status_result);

       if ($after_assoc_status['total_servire'] == 6) {
               $_SESSION['limite'] = 'maximam 4 servire can active!';
               header('location:view_service.php');
       }else{
               
               $update_status = "UPDATE servire SET status=1 WHERE id=$id" ;
               $update_status_result = mysqli_query($db_connection, $update_status);
               header('location:view_service.php');
       }
      }

      



      



?>