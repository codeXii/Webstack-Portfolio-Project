<?php

require './myconfig/database.php';

// fetch all properties from database
$sql = "SELECT * FROM properties";
$sql_query = mysqli_query($connect, $sql);


if(isset($_GET['id'])){

    // var_dump($_GET['id']);
    // die();

    $id = filter_var($_GET['id'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    $tenant_sql = "SELECT * FROM tenants WHERE id = $id ";
    $tenant_query = mysqli_query($connect, $tenant_sql);
    $tenant = mysqli_fetch_assoc($tenant_query);
    // var_dump($tenant);
    // die();
}


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
    <link rel="stylesheet" href="./temp/lib/bootstrap/css/bootstrap.min.css">

    <!-- Libraries CSS Files -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
        <link rel="stylesheet" href="./temp/lib/font-awesome/css/font-awesome.min.css">
        <link href="./temp/lib/animate/animate.min.css" rel="stylesheet">
        <link href="./temp/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
        <link href="./temp/lib/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="./temp/lib/icofont/icofont.min.css" rel="stylesheet">
        <link href="./temp/lib/jquery/magnific-popup.css" rel="stylesheet">
        <link href="./temp/lib/aos/aos.css" rel="stylesheet">
        <link href="./temp/lib/venobox/venobox.css" rel="stylesheet">
        <link href="./temp/lib/icofont/icofont.min.css" rel="stylesheet">
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <link href="./temp/css/frontend_style_blue.css" rel="stylesheet">
        
        <!-- JavaScript Libraries -->
        
        <script src="./temp/lib/jquery/jquery.min.js"></script>
        <script src="./temp/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="./temp/lib/jquery.easing/jquery.easing.min.js"></script>
        <script src="./temp/lib/php-email-form/validate.js"></script>
        <script src="./temp/lib/waypoints/jquery.waypoints.min.js"></script>
        <script src="./temp/lib/counterup/counterup.min.js"></script>
        <script src="./temp/lib/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="./temp/lib/venobox/venobox.min.js"></script>
        <script src="./temp/lib/owl.carousel/owl.carousel.min.js"></script>
        <script src="./temp/lib/aos/aos.js"></script>

        <!-- Template Main Javascript File -->
        <script src="./temp/js/main.js"></script>

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
                     <h4></h4>
                     <button class="btn btn-primary mb-2" onclick="goBack()"><i class="fa-solid fa-angle-left"></i>  Back</button>

                     <?php if(isset($_SESSION['tenant-register'])):?>
                          <div class="alert alert-danger alert-dismissible fade show" role="alert">
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                                    <?=  $_SESSION['tenant-register'];
                                    unset($_SESSION['tenant-register']); ?>
                          </div>
                          <?php elseif(isset($_SESSION['tenant-register-success'])): ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                                    <?=  $_SESSION['tenant-register-success'];
                                    unset($_SESSION['tenant-register-success']); ?>
                          </div>
                          <?php endif; ?>

                  </div>
                  <div class="card">
                      <h1 class="mt-3 text-center">Add a new tenant</h1>

                      <form method="POST" action="<?=  ROOT_URL   ?>edittenant-logic.php" class="mt-5 card__form" enctype="multipart/form-data">
                        
                            <input type="hidden" value="<?= $tenant['id'] ?>" name="id">


                          <div class="form-row">
                              <div class="form-group col-md-12">
                                <label for="fullname">FullName</label>
                                <input type="text" class="mr-2 form-control" name="fullname" value="<?= $tenant['fullname'] ?>" id="fullname" placeholder="Enter tenant FullName">
                              </div>

                          </div>

                          <div class="form-group ">
                              <label for="phone">Phone</label>
                              <input type="number" class="form-control" name="phone" value="<?= $tenant['phone'] ?>" id="phone" placeholder="Enter phone number">
                          </div>

                           <div class="form-group">
                           <label for="property" name="country">Property</label>
                           <select class="form-select mb-2 form_control text-dark" id="property" name="property" required>
                           <option value="<?= $tenant['property'] ?>" ><?= $tenant['property'] ?></option>  
                        <?php while($property = mysqli_fetch_assoc($sql_query)):?>       
                                <option value="<?= $property['name'] ?>"><?= $property['name']  ?></option>
                        <?php endwhile; ?>
                            </select>
                           </div>

                           <div class="form-group">
                                <label for="picture">Picture</label>
                                <input type="file" class="mr-2 form-control" name="avatar" value="" id="picture" required >
                            </div>

                            <div class="form-group ">
                              <label for="email">Email</label>
                              <input type="email" class="form-control" name="email" value="<?= $tenant['email'] ?>" id="email" placeholder="Enter email " >
                          </div>

                          <div class="form-row">
                              <div class="form-group col-md-6">
                                  <label for="nok">Name Of Next Of Kin</label>
                                  <input type="text" class="form-control" name="nok" id="nok" placeholder="Enter name" value="<?= $tenant['n_o_k'] ?>">
                              </div>
                              <div class="form-group col-md-6">
                                  <label for="nokp"> Next Of Kin Phone No</label>
                                  <input type="text" class="form-control" name="nokp" value="<?= $tenant['n_o_k_p'] ?>" id="nokp" placeholder="Enter Phone">
                              </div>
                          </div>

                          <div class="form-group ">
                              <label for="coo">Community Of Origin</label>
                              <input type="text" class="form-control" name="coo" value="<?= $tenant['community'] ?>" id="coo" placeholder="Enter community">
                          </div>

                          <div class="form-row">
                              <div class="form-group col-md-6">
                                  <label for="lga">L.G.A Of Origin</label>
                                  <input type="text" class="form-control" name="lga" id="lga" placeholder="Enter L.G.A" value="<?= $tenant['lga'] ?>">
                              </div>
                              <div class="form-group col-md-6">
                                  <label for="soo"> State Of Origin</label>
                                  <input type="text" class="form-control" name="soo" value="<?= $tenant['soo'] ?>" id="soo" placeholder="Enter State Of Origin">
                              </div>
                          </div>

                          <div class="form-group">
                           <label for="apartment" name="apartment">Type Of Apartment</label>
                           <select class="form-select mb-2 form_control text-dark" id="property" name="apartment" required>
                                <option value="<?= $tenant['apartment'] ?>" ><?= $tenant['apartment'] ?></option>       
                                <option value="1 BEDROOM">1 BEDROOM</option>
                                <option value="SELF CONTAIN">SELF CONTAIN</option>
                                <option value="SHOP">SHOP</option>
                            </select>
                           </div>

                          <div class="form-row">
                              <div class="form-group col-md-6">
                              <label for="block" name="block">Block</label>
                           <select class="form-select mb-2 form_control text-dark" id="block" name="block" required>
                                 <option value="<?= $tenant['block'] ?>" ><?= $tenant['block'] ?></option>     
                                <option value="BLOCK A">BLOCK A</option>
                                <option value="BLOCK B">BLOCK B</option>
                                <option value="BLOCK C">BLOCK C</option>
                                <option value="BLOCK D">BLOCK D</option> 
                            </select>  
                              </div>
                              <div class="form-group col-md-6">
                              <label for="hn" name="block">House/Shop No</label>
                           <select class="form-select mb-2 form_control text-dark" id="hn" name="hn" required>
                           <option value="<?= $tenant['hn'] ?>" ><?= $tenant['hn'] ?></option>      
                                <option value="FLAT 1">FLAT 1</option>
                                <option value="FLAT 2">FLAT 2</option>
                                <option value="FLAT 3">FLAT 3</option>
                                <option value="FLAT 4">FLAT 4</option>
                                <option value="FLAT 5">FLAT 5</option>
                                <option value="FLAT 6">FLAT 6</option>
                                <option value="FLAT 7">FLAT 7</option>
                                <option value="FLAT">FLAT</option>
                                <option value="SELFCON 1">SELFCON 1</option>
                                <option value="SELFCON 2">SELFCON 2</option>
                                <option value="SELFCON 3">SELFCON 3</option>
                                <option value="SELFCON 4">SELFCON 4</option>
                                <option value="SELFCON 5">SELFCON 5</option>
                                <option value="SELFCON 6">SELFCON 6</option>
                                <option value="SELFCON">SELFCON</option>
                                <option value="SHOP 1">SHOP 1</option>
                                <option value="SHOP 2">SHOP 2</option>
                                <option value="SHOP 3">SHOP 3</option>
                                <option value="SHOP 4">SHOP 4</option>
                                <option value="SHOP 5">SHOP 5</option> 
                                <option value="SHOP 6">SHOP 6</option> 
                                <option value="SHOP">SHOP</option> 
                            </select> 
                              </div>
                          </div>

                          <div class="form-row">
                              <div class="form-group col-md-6">
                                  <label for="expire">Expiration Date</label>
                                  <input type="date" class="form-control" name="expire" id="expire" value="<?= $tenant['expire'] ?>" placeholder="Expiration date">
                              </div>
                              <div class="form-group col-md-6">
                                  <label for="rent">Rent Amount No</label>
                                  <input type="number" class="form-control" name="rent" value="<?= $tenant['rent'] ?>" id="rent" placeholder="Rent amount">
                              </div>
                          </div>
                          
                          <div class="form-row">
                              <div class="form-group col-md-6">
                                  <label for="tow">Type Of Work</label>
                                  <input type="text" class="form-control" name="work" id="tow" value="<?= $tenant['tow'] ?>" placeholder=" e.g civil service ">
                              </div>
                              <div class="form-group col-md-6">
                                  <label for="employer">Employer</label>
                                  <input type="text" class="form-control" name="employer" value="<?= $tenant['employer'] ?>" id="employer" placeholder="">
                              </div>
                          </div>
                          
                          <div class="form-group">
                              <button class="mt-4 btn btn-primary" name="submit" type="submit">Update</button>
                          </div>
  
                      </form>
                  </div>
              </div>
          </div>
      </div>
  
  </section>




  <script>
        function goBack() {
            window.history.go(-1);
        }
    </script>

  <!-- Wrapper Ends -->
</body>
</html>