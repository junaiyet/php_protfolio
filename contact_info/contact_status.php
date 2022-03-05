<?php 
session_start();
        require '../db.php';

        $id = $_GET['id'];
       
  
       
        $select_icon_status_one = "SELECT * FROM contact_info WHERE id=$id";
        $select_icon_status_result_one =mysqli_query($db_connection, $select_icon_status_one);
        $after_assoc_status_one = mysqli_fetch_assoc($select_icon_status_result_one);

      if($after_assoc_status_one['status']==1){

        //
        // for count
        // $select_icon_status = "SELECT COUNT(*) as total_icon FROM contact_info WHERE status=1";
        // $select_icon_status_result =mysqli_query($db_connection, $select_icon_status);
        // $after_assoc_status = mysqli_fetch_assoc($select_icon_status_result);
        // for count
      
        $update_status = "UPDATE contact_info SET status=0 WHERE id=$id" ;

        $update_status_result = mysqli_query($db_connection, $update_status);
        header('location:view_contact_info.php');

}else{

      
        $update_status = "UPDATE contact_info SET status=1 WHERE id=$id" ;

        $update_status_result = mysqli_query($db_connection, $update_status);
        header('location:view_contact_info.php');

        // $select_icon_status = "SELECT COUNT(*) as total_icon FROM contact_info WHERE status=1";
        // $select_icon_status_result =mysqli_query($db_connection, $select_icon_status);
        // $after_assoc_status = mysqli_fetch_assoc($select_icon_status_result);

      
      }

      



?>