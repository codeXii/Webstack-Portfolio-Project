<?php

require './myconfig/database.php';


if(isset($_POST['submit'])){

    // get form data
        $username = filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $password = filter_var($_POST['password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    
    
        if(!$username){
            $_SESSION['admin-login'] = 'Username is required';
        }elseif(!$password){
            $_SESSION['admin-login'] = 'Password is required';
        }else{
    
            // Authenticate user by email
            $fetch_user = "SELECT * FROM admin WHERE username = '$username'";
            $fetch_user_result = mysqli_query($connect, $fetch_user);
    
            if(mysqli_num_rows($fetch_user_result) == 1){
            // convert the record into assoc array
                $admin_record = mysqli_fetch_assoc($fetch_user_result);
                $db_password = $admin_record['password'];
    
                // verify password with database password
                if(password_verify($password,$db_password)){
                    // set session for access control
                    $_SESSION['admin-id'] = $admin_record['id'];
                     // log user in if password match
                     header('location:' . ROOT_URL . 'dashboard.php');
        
                } else{
                    $_SESSION['admin-login'] = 'please check your password';
                }
    
            }else{
                $_SESSION['admin-login'] = 'Email not correct';
            }
        }
    
    
    
        // if any problem, redirect back to login page with login data
            if(isset($_SESSION['admin-login'])){
                $_SESSION['admin-login-data'] = $_POST;
                header('location:' . ROOT_URL . 'index.php');
                die();
            }
    
    
    }else{
        header('location:' . ROOT_URL . 'index.php');
    }