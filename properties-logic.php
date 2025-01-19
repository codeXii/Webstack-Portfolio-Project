<?php

require './myconfig/database.php';

if(isset($_POST['submit'])){
    
    // filter data from form
    $name = filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $location = filter_var($_POST['location'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $description = filter_var($_POST['description'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);


    // validate inputs
    if(!$name){
        $_SESSION['add-property'] = 'Please input property name';
    }elseif(!$location){
        $_SESSION['add-property'] = 'Please input property location name'; 
    }elseif(!$description){
        $_SESSION['add-property'] = 'Please input property description/address';
    }


    if(isset($_SESSION['add-property'])){
        header('location:' . ROOT_URL . 'properties.php');
    }else{

        // insert new property into database
        $insert_sql = "INSERT INTO properties(name, location, description)  VALUES('$name', '$location', '$description')";

        $insert_query = mysqli_query($connect,$insert_sql);

        if (!mysqli_errno($connect)){
            // redirect to cashier page with success message
            $_SESSION['add-property-success'] = 'New property Added successfully';
            header('location:' . ROOT_URL . 'properties.php');
            die();
        }

    }


}elseif(isset($_POST['send'])){

    // get data for location to update
    $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $name = filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $location = filter_var($_POST['location'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $description = filter_var($_POST['description'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    
    // update the selected location
    $sql = "UPDATE properties SET name = '$name', location = '$location', description = '$description'  WHERE id = $id LIMIT 1";
    $sql_query = mysqli_query($connect, $sql);

    $_SESSION['property-update'] = 'property updated successfully';
    header('location:' . ROOT_URL . 'properties.php');
}