<?php

require './myconfig/database.php';
// require './partials/header.php';


// Get the current year, month, and date
$currentYear = date("Y");
$currentMonth = date("m");
$currentDay = date("d");

$month = $currentYear . "-" . $currentMonth;
$date = $currentYear . "-" . $currentMonth . "-" . $currentDay;

$sales_total_sql = "SELECT SUM(amount) AS sum FROM payments WHERE date LIKE '$currentYear%' ";
$sales_total_query = mysqli_query($connect, $sales_total_sql);
    
while($row = mysqli_fetch_assoc($sales_total_query)){
    $total = $row['sum'];
}

$month_total_sql = "SELECT SUM(amount) AS sum FROM payments WHERE date LIKE '$month%' ";
$month_total_query = mysqli_query($connect, $month_total_sql);
    
while($row = mysqli_fetch_assoc($month_total_query)){
    $month = $row['sum'];
}

// Fetch all payment for current year
$year_sql = "SELECT * FROM payments WHERE date LIKE '$currentYear%'";
$year_query = mysqli_query($connect, $year_sql);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Management System</title>

    <link rel="icon" href="{{ asset('storage/app/public/photos/'.$settings->favicon)}}" type="image/png"/>

   <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.1/dist/alpine.min.js" defer></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
		<link rel="stylesheet" href="./dash/css/bootstrap.min.css">

    <!-- Bootstrap CSS File -->
    <link rel="stylesheet" href="./temp/lib/bootstrap/css/bootstrap.min.css">

    <!-- Libraries CSS Files -->
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
              <div class="col-12 ">
                  <div class="mb-4 text-center">
                
            

            <?php if(isset($_SESSION['payment-register-success'])):?>
                        
                        <div class="alert alert-success alert-dismissible fade show text-center text-success" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                          </button>
                                <?=  $_SESSION['payment-register-success'];
                                unset($_SESSION['payment-register-success']); ?>
                      </div>
            <?php endif; ?>


                <div class="row">
                    <div class="col-md-12">
                    <div class="mb-1">
                    <h3 class="pb-2">TOTAL PAYMENTS FOR THE YEAR  <?=$currentYear ?></h3>
                </div>
                    <div class="bs-example widget-shadow table-responsive" data-example-id="hoverable-table">    
                                <table class="table table-bordered table-dark table-striped">
                                    <thead>
                                        <tr>
                                          <th scope="col">S/N</th>
                                          <th scope="col">Tenant Name</th>
                                          <th scope="col">Amount</th>
                                          <th scope="col">Date</th>
                                          <!-- <th scope="col">Action</th> -->
                                        </tr>
                                      </thead>
                                      <tbody>
                    <?php while($payment = mysqli_fetch_assoc($year_query)):?>
                                        <tr>
                                          <th scope="row"><?= $payment['id'] ?></th>
                                          <td>
                                            <?= $payment['t_fullname'] ?>
                                          </td>
                                          <td>&#8358;<?= number_format($payment['amount'], 2)  ?></td>
                                          <td><?= $payment['date'] ?></td>
                                          <!-- <td>
                                            <a href="#" class="btn btn-sm btn-primary mb-1"  data-toggle="modal" data-target="#view<?= $payment['t_id'] ?>" >View</a>
                                          </td> -->


                                                                            <!-- payment view  modal -->
    <div id="view<?= $payment['t_id'] ?>" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-dark" style="text-align:center;">PAYMENT DETAILS.</strong></h4>
                    <button type="button" class="close text-{{$text}}" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                <div class="col-md-12 text-dark">
        <?php
        $tenant_id = $payment['t_id'];
        $tsql = "SELECT * FROM tenants WHERE id = $tenant_id";
        $tsql_query = mysqli_query($connect, $tsql);
        $tresult = mysqli_fetch_assoc($tsql_query);

        ?>

            <p class="text-center">  <img src="./images/<?= $tresult['thumbnail'] ?>" alt="Tenant Avatar" width="100px" height="100px" class="img-fluid" > </p>
            <p>TENANT: <strong><?= $tresult['fullname'] ?></strong></p>
            <p>PROPERTY OCCUPIED: <strong><?= $tresult['property'] ?></strong></p>
            <p>APARTMENT TYPE: <strong><?= $tresult['apartment'] ?></strong></p>
            <p>BLOCK: <strong><?= $tresult['block'] ?></strong></p>
            <p>HOUSE/FLAT/STORE NO: <strong><?= $tresult['hn'] ?></strong></p>
            <p>AMOUNT PAID: <strong>&#8358;<?= number_format($payment['amount'], 2) ?></strong></p>
            <p>APARTMENT TYPE: <strong><?= $payment['description'] ?></strong></p>
            <p>DATE PAID: <strong><?= $payment['date'] ?></strong></p>     
                

                  </div>
                </div>
            </div>
        </div>
    </div>





                                        </tr>
                    <?php endwhile; ?>
                                      </tbody>
                                </table>

                               
                    </div>
                    </div>
                  </div>  
                        </div>

                    
            <button class="btn btn-primary mb-2" onclick="goBack()"><i class="fa-solid fa-angle-left"></i>  Back</button>
            <button type="button" class="btn btn-success mb-2 print" data-toggle="modal" data-target="#" > <i class="fas fa-print"></i>  Print This Report</button>

                </div>


    </div>
    </div>
    </div>



                                                                     <!-- Print view  modal -->
     <div id="print1" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-dark" style="text-align:center;">PAYMENT DETAILS.</strong></h4>
                    
                    <button type="button" class="close text-{{$text}}" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                <div class="col-12 text-dark">
                        
                
                    <div class="col-12">
                    <div class="mb-1">
                    <h3 class="pb-2">TOTAL PAYMENTS FOR THE YEAR  <?=$currentYear ?></h3>
                
        
        <?php

//         // Fetch all payment for current year
$year_sql = "SELECT * FROM payments WHERE date LIKE '$currentYear%'";
$year_query = mysqli_query($connect, $year_sql);


        ?>
                    <div class="bs-example widget-shadow table-responsive" data-example-id="hoverable-table">    
                                <table class="table table-bordered table-dark table-striped">
                                    <thead>
                                        <tr>
                                          <th scope="col">S/N</th>
                                          <th scope="col">Tenant Name</th>
                                          <th scope="col">Amount</th>
                                          <th scope="col">Date</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                    <?php while($payment = mysqli_fetch_assoc($year_query)):?>
                                        <tr>
                                          <th scope="row"><?= $payment['id'] ?></th>
                                          <td>
                                            <?= $payment['t_fullname'] ?>
                                          </td>
                                          <td>&#8358;<?= number_format($payment['amount'], 2)  ?></td>
                                          <td><?= $payment['date'] ?></td>
                                        </tr>
                    <?php endwhile; ?>
                                      </tbody>
                                </table>

    
                    </div>
                    </div>
                  </div>  
                
                  

                  </div>
                </div>
            </div>
        </div>
        <button type="button" class="btn btn-success mb-2 print" data-toggle="modal" data-target="#print1" > <i class="fas fa-print"></i>  Print </button>


    </div>

    <script type="text/javascript">

        var print2 = document.querySelector('.print');

        print2.addEventListener('click', function(){
        window.print();
        })

        </script>




    <script>
        function goBack() {
            window.history.go(-1);
        }
    </script>

        
    

    <!--   Core JS Files   -->
	<script src="./dash/js/core/jquery.3.2.1.min.js"></script>
	<script src="./dash/js/core/popper.min.js"></script>
	<script src="./dash/js/core/bootstrap.min.js"></script>
	<script src="./dash/js/customs.js"></script>
	
	<!-- jQuery UI -->
	<script src="./dash/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="./dash/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

	<!-- jQuery Scrollbar -->
	<script src="./dash/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

	<!-- jQuery Sparkline -->
	<script src="./dash/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

	<!-- Sweet Alert -->
	<script src="./dash/js/plugin/sweetalert/sweetalert.min.js"></script>
    
	<!-- Bootstrap Notify -->
	<script src="./dash/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
	
	<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.21/af-2.3.5/b-1.6.3/b-flash-1.6.3/b-html5-1.6.3/b-print-1.6.3/r-2.2.5/datatables.min.js"></script>
	
<script type="text/javascript">
		
function googleTranslateElementInit() {
new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}

(function(){var gtConstEvalStartTime = new Date();function d(b){var a=document.getElementsByTagName("head")[0];a||(a=document.body.parentNode.appendChild(document.createElement("head")));a.appendChild(b)}function _loadJs(b){var a=document.createElement("script");a.type="text/javascript";a.charset="UTF-8";a.src=b;d(a)}function _loadCss(b){var a=document.createElement("link");a.type="text/css";a.rel="stylesheet";a.charset="UTF-8";a.href=b;d(a)}function _isNS(b){b=b.split(".");for(var a=window,c=0;c<b.length;++c)if(!(a=a[b[c]]))return!1;return!0}
function _setupNS(b){b=b.split(".");for(var a=window,c=0;c<b.length;++c)a.hasOwnProperty?a.hasOwnProperty(b[c])?a=a[b[c]]:a=a[b[c]]={}:a=a[b[c]]||(a[b[c]]={});return a}window.addEventListener&&"undefined"==typeof document.readyState&&window.addEventListener("DOMContentLoaded",function(){document.readyState="complete"},!1);
if (_isNS('google.translate.Element')){return}(function(){var c=_setupNS('google.translate._const');c._cest = gtConstEvalStartTime;gtConstEvalStartTime = undefined;c._cl='en';c._cuc='googleTranslateElementInit';c._cac='';c._cam='';c._ctkk=eval('((function(){var a\x3d814543065;var b\x3d2873925779;return 414629+\x27.\x27+(a+b)})())');var h='translate.googleapis.com';var s=(true?'https':window.location.protocol=='https:'?'https':'http')+'://';var b=s+h;c._pah=h;c._pas=s;c._pbi=b+'/translate_static/img/te_bk.gif';c._pci=b+'/translate_static/img/te_ctrl3.gif';c._pli=b+'/translate_static/img/loading.gif';c._plla=h+'/translate_a/l';c._pmi=b+'/translate_static/img/mini_google.png';c._ps=b+'/translate_static/css/translateelement.css';c._puh='translate.google.com';_loadCss(c._ps);_loadJs(b+'/translate_static/js/element/main.js');})();})();

</script>
	<!-- Atlantis JS -->
	<script src="./dash/js/atlantis.min.js"></script>
	<script src="./dash/js/atlantis.js"></script>
	<script type="text/javascript">
		var badWords = [ 
			'<!--Start of Tawk.to Script-->',
			'<script type="text/javascript">', 
			'<!--End of Tawk.to Script-->'
					];
		$(':input').on('blur', function(){
			var value = $(this).val();
			$.each(badWords, function(idx, word){
			value = value.replace(word, '');
			});
			$(this).val( value);
		});
	</script>
	 <script>
		$(document).ready( function () {
			$('#ShipTable').DataTable({
				order: [ [0, 'desc'] ],
				dom: 'Bfrtip',
				buttons: [
				'copy', 'csv', 'print', 'excel','pdf'
        	] 
			});

			
			$(".dataTables_length select").addClass("bg-{{$bg}} text-{{$text}}");
			$(".dataTables_filter input").addClass("bg-{{$bg}} text-{{$text}}");
		} );
	</script>
	<script>
		$(document).ready( function () {
			$('.UserTable').DataTable({
				order: [ [0, 'desc'] ]
			});
			$(".dataTables_length select").addClass("bg-{{$bg}} text-{{$text}}");
			$(".dataTables_filter input").addClass("bg-{{$bg}} text-{{$text}}");
		} );
	</script>

    <script type="text/javascript">
        $("#styleform").on('change',function(){
        $.ajax({
            url: "{{url('/dashboard/changetheme')}}",
            type: 'POST',
            data:$("#styleform").serialize(),
            success: function (data) {
                location.reload(true);
            },
            error: function (data) {
                console.log('Something went wrong');
            },
    
        });
    });
    </script>
</body>
</html>

