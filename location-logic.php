<?php

require './myconfig/database.php';


if(isset($_POST['submit'])){

    // get form data
        $location = filter_var($_POST['location'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        
    
    
        if(!$location){
            $_SESSION['location'] = 'location name  is required';
        }else{
    
            // Authenticate location by name
            $fetch_user = "SELECT * FROM locations WHERE name = '$location'";
            $fetch_user_result = mysqli_query($connect, $fetch_user);
    
            if(mysqli_num_rows($fetch_user_result) > 0){
                    $_SESSION['location'] = 'Location name already exists';    
            }
        }
    
    
    
        // if any problem, redirect back to login page with login data
            if(isset($_SESSION['location'])){
                $_SESSION['location-data'] = $_POST;
                header('location:' . ROOT_URL . 'p.location.php');
                die();
            }else{

                // insert new location into database

                $insert_user_query = "INSERT INTO locations(name)
                VALUES('$location')";

                $insert_users_result = mysqli_query($connect,$insert_user_query);
                
                if (!mysqli_errno($connect)){
                    // redirect to login page with success message
                    $_SESSION['location-success'] = 'Location added successfully';
                    header('location:' . ROOT_URL . 'p.location.php');
                    die();
                }

            }
    
    
    }elseif(isset($_POST['send'])){

        // get data for location to update
        $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
        $location = filter_var($_POST['location'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        
        // update the selected location
        $sql = "UPDATE locations SET name = '$location' WHERE id = $id LIMIT 1";
        $sql_query = mysqli_query($connect, $sql);

        $_SESSION['location-update'] = 'Location updated successfully';
        header('location:' . ROOT_URL . 'p.location.php');
    }


    

    