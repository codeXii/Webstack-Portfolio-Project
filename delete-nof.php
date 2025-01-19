<?php

require './myconfig/database.php';

if(isset($_GET['id'])){

    // use the ID gotten from the url to delete the selected notification
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

    $sql = "DELETE  FROM notifications WHERE id = $id";
    $sql_query = mysqli_query($connect, $sql);


    if(!mysqli_errno($connect)){
        // redirect to notification page with success message
        $_SESSION['notification-success'] = 'Notification deleted successfully';
        header('location:' . ROOT_URL . 'notifications.php');
        die(); 
    }else{
         // redirect to notification page with error message
         $_SESSION['notification-error'] = 'Notification not deleted';
         header('location:' . ROOT_URL . 'notifications.php');
         die();
    }
}