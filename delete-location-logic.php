<?php

require './myconfig/database.php';

if(isset($_GET['id'])){

    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    
    // fetch location from database and delete
    $sql = "DELETE FROM locations WHERE ID = $id LIMIT 1";
    $sql_query = mysqli_query($connect, $sql);

    $_SESSION['delete-location'] = 'Location deleted successsfully';
   header('location:' . ROOT_URL . 'p.location.php');
}