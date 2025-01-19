<?php
require './myconfig/database.php';

if(isset($_GET['id'])){

    // var_dump($_GET['id']);
    // die();
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

    // Fetch tenant from database in order to delete thumbnail from folder
    $query = "SELECT * FROM tenants WHERE id = $id";
    $result = mysqli_query($connect, $query);

    // Making sure only 1 record is fetched from the database
    if(mysqli_num_rows($result) == 1){
        $tenant = mysqli_fetch_assoc($result);
        $thumbnail_name = $tenant['thumbnail'];
        $thumbnail_path = './images/' . $thumbnail_name;


        if($thumbnail_path){
            unlink($thumbnail_path);

              // Delete post from database
              $delete_query = "DELETE FROM tenants WHERE id = $id";
              $delete_result = mysqli_query($connect, $delete_query);

            if(!mysqli_errno($connect)){
                $_SESSION['delete-tenant-success'] = "Tenant was deleted successfully";

            

            }
        }
    }
}

header('location:' . ROOT_URL . 'tenants.php');
die();