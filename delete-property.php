<?php

require './myconfig/database.php';

if(isset($_GET['id'])){

    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    
    // fetch property from database and delete
    $sql = "DELETE FROM properties WHERE id = $id LIMIT 1";
    $sql_query = mysqli_query($connect, $sql);

    $_SESSION['delete-property'] = 'property deleted successsfully';
   header('location:' . ROOT_URL . 'properties.php');
}