<?php

use Symfony\Component\VarDumper\VarDumper;

require './myconfig/database.php';

// check if signup button was clicked, sanitize an validate input fields

if(isset($_POST['submit'])){

    // var_dump($_FILES);
    // die();

    $fullname = filter_var($_POST['fullname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $phone = filter_var($_POST['phone'], FILTER_SANITIZE_NUMBER_INT);
    $property = filter_var($_POST['property'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $thumbnail = $_FILES['avatar'];
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $nok = filter_var($_POST['nok'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $nokp = filter_var($_POST['nokp'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $coo = filter_var($_POST['coo'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $lga = filter_var($_POST['lga'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $soo = filter_var($_POST['soo'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $apartment = filter_var($_POST['apartment'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $block = filter_var($_POST['block'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $hn = filter_var($_POST['hn'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $expire = filter_var($_POST['expire'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $rent = filter_var($_POST['rent'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $work = filter_var($_POST['work'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $employer = filter_var($_POST['employer'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    
    

    // validate inputs
    if(!$fullname){
        $_SESSION['tenant-register'] = 'Please enter tenant  full names';
    }elseif(!$phone){
        $_SESSION['tenant-register'] = 'Please enter phone number';
    }elseif(!$property){
        $_SESSION['tenant-register'] = 'Please choose a property';
    }elseif(!$thumbnail['name']){
        $_SESSION['tenant-register'] = "Please upload a photo";
    }else{
        // work on thumbnail
        $time = time();
        $thumbnail_name = $time . $thumbnail['name'];
        $thumbnail_tmp_name = $thumbnail['tmp_name'];
        $thumbnail_destination = './images/' . $thumbnail_name;
    
        // make sure the file is an image
        $allowed_files = ['png', 'jpeg', 'jpg', 'JPG', 'PNG'];
        $file = explode('.', $thumbnail_name);
        $file = end($file);
    
        if(in_array($file, $allowed_files)){
            // make sure file is not too large (3mb)
            if($thumbnail['size'] < 3000000){
                // upload file
                move_uploaded_file($thumbnail_tmp_name, $thumbnail_destination);
            } else{
                $_SESSION['tenant-register'] = 'File size too big. Should be less than 3Mb';
            }
    
        }else{
            $_SESSION['tenant-register'] = 'File should be png, jpeg or jpg';
        }
    }





    // Redirect back to register page if there was any error
     if(isset($_SESSION['tenant-register'])){
        // pass form data back to register page
        $_SESSION['tenant-register-data'] = $_POST;
        header('location:' . ROOT_URL . 'addtenant.php' );
        die();
    }else{

        // insert new tenant details into database

        $insert_user_query = "INSERT INTO tenants(fullname, phone, property, thumbnail, email, n_o_k, n_o_k_p, community, lga, soo, apartment, block, hn, expire, rent, tow, employer)
        VALUES('$fullname', '$phone', '$property', '$thumbnail_name', '$email', '$nok', '$nokp', '$coo', '$lga', '$soo', '$apartment',      '$block', '$hn', '$expire', '$rent', '$work', '$employer' )";

        $insert_users_result = mysqli_query($connect,$insert_user_query);

        if (!mysqli_errno($connect)){
            // redirect to login page with success message
            $_SESSION['tenant-register-success'] = 'Tenant Registration successful.';
            header('location:' . ROOT_URL . 'tenants.php');
            die();
        }


    }
    





}else{
    header('location:' . ROOT_URL . 'dashboard.php');
    die();
}