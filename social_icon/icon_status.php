<?php 
session_start();
        require '../db.php';

        $id = $_GET['id'];
       
        $select_icon_status_one = "SELECT * FROM social WHERE id=$id";
        $select_icon_status_result_one =mysqli_query($db_connection, $select_icon_status_one);
        $after_assoc_status_one = mysqli_fetch_assoc($select_icon_status_result_one);

      if($after_assoc_status_one['status']==1){
        // for count
        $select_icon_status = "SELECT COUNT(*) as total_icon FROM social WHERE status=1";
        $select_icon_status_result =mysqli_query($db_connection, $select_icon_status);
        $after_assoc_status = mysqli_fetch_assoc($select_icon_status_result);
        // for count
         if ($after_assoc_status['total_icon'] == 1) {
                $_SESSION['limite'] = 'min 1 icon can active!';
                header('location:view_icon.php');
         }else{

                 $update_status = "UPDATE social SET status=0 WHERE id=$id" ;
                 $update_status_result = mysqli_query($db_connection, $update_status);
                 header('location:view_icon.php');
         }
      }else{

        $select_icon_status = "SELECT COUNT(*) as total_icon FROM social WHERE status=1";
        $select_icon_status_result =mysqli_query($db_connection, $select_icon_status);
        $after_assoc_status = mysqli_fetch_assoc($select_icon_status_result);

       if ($after_assoc_status['total_icon'] == 4) {
               $_SESSION['limite'] = 'maximam 4 icon can active!';
               header('location:view_icon.php');
       }else{
               
               $update_status = "UPDATE social SET status=1 WHERE id=$id" ;
               $update_status_result = mysqli_query($db_connection, $update_status);
               header('location:view_icon.php');
       }
      }

      




//       session_start();
//         require '../db.php';

//         $id = $_GET['id'];
       
//         $select_icon_status_one = "SELECT * FROM social WHERE id=$id";
//         $select_icon_status_result_one =mysqli_query($db_connection, $select_icon_status_one);
//         $after_assoc_status_one = mysqli_fetch_assoc($select_icon_status_result_one);

//       if($after_assoc_status_one['status']==1){
//         // for count
//         $select_icon_status = "SELECT COUNT(*) as total_icon FROM social WHERE status=1";
//         $select_icon_status_result =mysqli_query($db_connection, $select_icon_status);
//         $after_assoc_status = mysqli_fetch_assoc($select_icon_status_result);
//         // for count
//       
//         $update_status = "UPDATE social SET status=0 WHERE id=$id" ;
//         $update_status_result = mysqli_query($db_connection, $update_status);
//         header('location:view_icon.php');
//       }else{

//         $select_icon_status = "SELECT COUNT(*) as total_icon FROM social WHERE status=1";
//         $select_icon_status_result =mysqli_query($db_connection, $select_icon_status);
//         $after_assoc_status = mysqli_fetch_assoc($select_icon_status_result);

//        if ($after_assoc_status['total_icon'] == 4) {
//                $_SESSION['limite'] = 'maximam 4 icon can active!';
//                header('location:view_icon.php');
//        }else{
               
//                $update_status = "UPDATE social SET status=1 WHERE id=$id" ;
//                $update_status_result = mysqli_query($db_connection, $update_status);
//                header('location:view_icon.php');
//        }
//       }

      



?>