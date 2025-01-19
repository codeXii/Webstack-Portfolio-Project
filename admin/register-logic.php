<?php

use Symfony\Component\VarDumper\VarDumper;

require '../myconfig/database.php';

// check if signup button was clicked, sanitize an validate input fields

if(isset($_POST['submit'])){


    $fullname = filter_var($_POST['fullname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $username = filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    

    // validate inputs
    if(!$fullname){
        $_SESSION['admin-register'] = 'Please enter your full names';
    }elseif(!$username){
        $_SESSION['admin-register'] = 'Please enter your username';
    }elseif(!$password){
        $_SESSION['admin-register'] = 'Please enter a password';
    } else{


            // hash password
            $hashed_password = password_hash($password, PASSWORD_DEFAULT );

            // check if username already exists in database or is used
            $user_check_query = "SELECT * FROM admin WHERE username = '$username'";
            $user_check_result = mysqli_query($connect, $user_check_query);
            if(mysqli_num_rows($user_check_result) > 0){
                $_SESSION['admin-register'] = 'username already in use';
            }

        
    }


    // Redirect back to register page if there was any error
     if(isset($_SESSION['admin-register'])){
        // pass form data back to register page
        $_SESSION['admin-register-data'] = $_POST;
        header('location:' . ROOT_URL . 'admin/registeradmin.php' );
        die();
    }else{

        // insert new user into database

        $insert_user_query = "INSERT INTO admin(fullname, username, password)
        VALUES('$fullname', '$username', '$hashed_password')";

        $insert_users_result = mysqli_query($connect,$insert_user_query);

        if (!mysqli_errno($connect)){
            // redirect to login page with success message
            $_SESSION['admin-register-success'] = 'Registration successful. please log in';
            header('location:' . ROOT_URL . 'index.php');
            die();
        }


    }
    





}else{
    header('location:' . ROOT_URL . 'register.php');
    die();
}