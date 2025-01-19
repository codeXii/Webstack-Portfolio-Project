<?php

use Symfony\Component\VarDumper\VarDumper;

require './myconfig/database.php';

if(isset($_POST['submit'])){

    $old_password = filter_var($_POST['old_password'], FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS);
    $cpassword = filter_var($_POST['cpassword'], FILTER_SANITIZE_SPECIAL_CHARS);

    $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);

    $admin_sql = "SELECT * FROM admin WHERE id = $id";
    $admin_query = mysqli_query($connect, $admin_sql);
    $admin = mysqli_fetch_assoc($admin_query);
    $admin_password = $admin['password'];
    

   if($password !== $cpassword){
    $_SESSION['update-password'] = 'New passwords do not match';
   }

  
   
   if(password_verify($old_password, $admin_password)){

     // hash password
     $new_password = password_hash($password, PASSWORD_DEFAULT );

   }else{
    $_SESSION['update-password'] = 'Incorrect old password';
   }


   if(isset($_SESSION['update-password'])){
    header('location:' . ROOT_URL . 'changepassword.php');
    die();
   }else{

    $p_sql = "UPDATE admin SET password = '$new_password' WHERE id = $id";
    $p_query = mysqli_query($connect, $p_sql);

    header('location:' . ROOT_URL . 'changepassword.php');
    $_SESSION['update-password-success'] = 'Password changed successfuly';
   }

   

   
}