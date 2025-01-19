<?php

require '../myconfig/database.php';


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Management-System </title>

    <link rel="icon" href="" type="image/png"/>

   <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.1/dist/alpine.min.js" defer></script>

    <!-- Bootstrap CSS File -->
    <link rel="stylesheet" href="../temp/lib/bootstrap/css/bootstrap.min.css">

    <!-- Libraries CSS Files -->
        <link rel="stylesheet" href="../temp/lib/font-awesome/css/font-awesome.min.css">
        <link href="../temp/lib/animate/animate.min.css" rel="stylesheet">
        <link href="../temp/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
        <link href="../temp/lib/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="../temp/lib/icofont/icofont.min.css" rel="stylesheet">
        <link href="../temp/lib/jquery/magnific-popup.css" rel="stylesheet">
        <link href="../temp/lib/aos/aos.css" rel="stylesheet">
        <link href="../temp/lib/venobox/venobox.css" rel="stylesheet">
        <link href="../temp/lib/icofont/icofont.min.css" rel="stylesheet">
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <link href="../temp/css/frontend_style_blue.css" rel="stylesheet">
        
        <!-- JavaScript Libraries -->
        
        <script src="../temp/lib/jquery/jquery.min.js"></script>
        <script src="../temp/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../temp/lib/jquery.easing/jquery.easing.min.js"></script>
        <script src="../temp/lib/php-email-form/validate.js"></script>
        <script src="../temp/lib/waypoints/jquery.waypoints.min.js"></script>
        <script src="../temp/lib/counterup/counterup.min.js"></script>
        <script src="../temp/lib/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="../temp/lib/venobox/venobox.min.js"></script>
        <script src="../temp/lib/owl.carousel/owl.carousel.min.js"></script>
        <script src="../temp/lib/aos/aos.js"></script>

        <!-- Template Main Javascript File -->
        <script src="../temp/js/main.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<body class="d-flex flex-column h-100 auth-Page">
  <!-- ======= signup Section ======= -->
  <section class="auth ">
      <div class="container">
          <div class="row justify-content-center user-auth bg-purple">
              <div class="col-12 col-md-6 col-lg-6 col-sm-10 col-xl-6">
                  <div class="mb-4 text-center">
                     <h3 class="text-white">Property Management System</h3>


                     <?php if(isset($_SESSION['admin-register'])):?>
                          <div class="alert alert-danger alert-dismissible fade show" role="alert">
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                                    <?=  $_SESSION['admin-register'];
                                    unset($_SESSION['admin-register']); ?>
                          </div>
                          <?php elseif(isset($_SESSION['admin-register-success'])): ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                                    <?=  $_SESSION['admin-register-success'];
                                    unset($_SESSION['admin-register-success']); ?>
                          </div>
                          <?php endif; ?>

                  </div>
                  <div class="card">
                      <h1 class="mt-3 text-center"> Create an Admin Account</h1>

                      <form method="POST" action="<?=  ROOT_URL   ?>admin/register-logic.php" class="mt-5 card__form">
                        
                          <div class="form-row">
                              <div class="form-group col-md-12">
                                <label for="f_name">FullName</label>
                                <input type="text" class="mr-2 form-control" name="fullname" value="" id="f_name" placeholder="Enter FullName">
                              </div>

                          </div>

                          <div class="form-group ">
                              <label for="email">Username</label>
                              <input type="text" class="form-control" name="username" value="" id="email" placeholder="Enter username">
                          </div>

                          <div class="form-row">
                              <div class="form-group col-md-6">
                                  <label for="password">Password</label>
                                  <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password">
                              </div>
                              <div class="form-group col-md-6">
                                  <label for="confirm-password">Confirm Password</label>
                                  <input type="password" class="form-control" name="cpassword" value="" id="cpassword" placeholder="Confirm Password">
                              </div>
                          </div>
                          
                          
                          <div class="form-group">
                              <button class="mt-4 btn btn-primary" name="submit" type="submit">Register</button>
                          </div>
  
                          <div class="mb-3 text-center">
                              <small class="mb-2 text-center ">Already have an Account  <a href="<?= ROOT_URL ?>">Login.</a> </small>

                              <small class="text-center">&copy; Copyright  2024 &nbsp; Property Management System &nbsp;  <br> All Rights Reserved.</small>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  
  </section>

  <!-- Wrapper Ends -->
</body>
</html>