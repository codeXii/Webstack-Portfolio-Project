<?php

use Symfony\Component\VarDumper\VarDumper;

require './myconfig/database.php';

if(isset($_POST['submit'])){

    // filter inputs gotten from form
    $fullname = filter_var($_POST['fullname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $amount = filter_var($_POST['amount'], FILTER_SANITIZE_NUMBER_INT);
    $description = filter_var($_POST['description'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $date = filter_var($_POST['date'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    

    // fetch tenant id from database
    $sql = "SELECT * FROM tenants WHERE fullname LIKE '%$fullname%' ";
    $query = mysqli_query($connect, $sql);
    $tenant = mysqli_fetch_assoc($query);
    $tenant_id = $tenant['id'];

   

    // insert new payment details to databse
    $insert_sql = "INSERT INTO payments(t_id, t_fullname, amount, description, date ) VALUES('$tenant_id', '$fullname', '$amount', '$description', '$date')";

    $insert_query = mysqli_query($connect, $insert_sql);

    if (!mysqli_errno($connect)){
        // redirect to login page with success message
        $_SESSION['payment-register-success'] = 'New Payment added successfully.';
        header('location:' . ROOT_URL . 'payments.php');
        die();
    }

}