<?php

require './myconfig/database.php';

// get all properties from database
$property_sql = "SELECT * FROM properties";
$property_query = mysqli_query($connect,$property_sql);


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<script type="text/javascript" src="https://js.stripe.com/v3/"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="">

    <title>Forex-System</title>
    <link rel="icon" href="" type="image/png"/>
	
			<!-- Fonts and icons -->
		<script src="./dash/js/plugin/webfont/webfont.min.js"></script>
	<!-- Sweet Alert -->
		<script src="./dash/js/plugin/sweetalert/sweetalert.min.js"></script>
		<!-- CSS Files -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
		<link rel="stylesheet" href="./dash/css/bootstrap.min.css">
		<link rel="stylesheet" href="./dash/css/fonts.min.css">
		<link rel="stylesheet" href="./dash/css/atlantis.min.css">
		<link rel="stylesheet" href="./dash/css/customs.css">
		<link rel="stylesheet" href="./dash/css/style.css">
		<link rel="stylesheet" href="./dash/css/atlantis.min.css">
		<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css">
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.21/af-2.3.5/b-1.6.3/b-flash-1.6.3/b-html5-1.6.3/b-print-1.6.3/r-2.2.5/datatables.min.css"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.1/dist/alpine.min.js" defer></script>
		<script src="https://cdn.jsdelivr.net/npm/chart.js@3.2.1/dist/chart.min.js"></script>
	
</head>
<body data-background-color="dark">



    <div class="main-header">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="purple">
            <a href="/" class="logo" style="font-size: 27px; color:#fff;">
            <small>GLATO HOUSING</small>
            </a>
            <button class="ml-auto navbar-toggler sidenav-toggler" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <i class="icon-menu"></i>
                </span>
            </button>
            <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="icon-menu"></i>
                </button>
            </div>
        </div>
        <!-- End Logo Header -->
    
        <!-- Navbar Header -->
        <nav class="navbar navbar-header navbar-expand-lg" data-background-color="dark">
            
            <div class="container-fluid">
                <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                    <li class="nav-item hidden-caret">
                        <form action="javascript:void(0)" method="post" id="styleform" class="form-inline">
                            <div class="form-group">
                            </div> 
                        </form>
                    </li>    
                    <li class="nav-item dropdown hidden-caret">
                        <a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell"></i>
                            
                        </a>
                        <ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
                            
                            
                            <li>
                                <a class="see-all" href="./notifications.html">See all notifications<i class="fa fa-angle-right"></i> </a>
                            </li>
                        </ul>
                    </li>
        
                    <li class="nav-item dropdown hidden-caret">
                        <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
                            <i class="fas fa-user"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user animated fadeIn">
                            <div class="dropdown-user-scroll scrollbar-outer">
                                <li>
                                    <a class="dropdown-item" href="./changepassword.html">Change Password</a>
                                    <a class="dropdown-item" href="./account-settings.html">Account Settings</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href=""
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        Logout
                                        </a>
                                    <form id="logout-form" action="" method="POST" style="display: none;">
                                    </form> 
                                </li>
                            </div>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- End Navbar -->
    </div>


    <!-- sidebar -->
    <div class="sidebar sidebar-style-2" data-background-color="purple">
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
            <div class="sidebar-content">
                <div class="user">
                    <div class="info">
                        <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                            <span>
                                
                                 <span class="user-level">Administrator</span> 
                                <span class="caret"></span>
                            </span>
                        </a>
                        <div class="clearfix"></div>
                        <div class="collapse in" id="collapseExample">
                            <ul class="nav">
                                <li>
                                    <a href="">
                                        <span class="link-collapse">Account Settings</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="nav nav-primary">
                    <li class="nav-item ">
                        <a href="./dashboard.php">
                            <i class="fas fa-home"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="./p.location.php">
                            <i class="fas fa-home"></i>
                            <p>Property Location</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="./properties.php">
                            <i class="fa fa-life-ring" aria-hidden="true"></i>
                            <p>Property/Houses</p>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a href="./tenants.php">
                            <i class="fa fa-signal " aria-hidden="true"></i>
                            <p>Tenants</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="./payments.php">
                            <i class="fa fa-briefcase " aria-hidden="true"></i>
                            <p>Payments</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="./payments-reports.php">
                            <i class="fa fa-th" aria-hidden="true"></i>
                            <p>Payment Reports</p>
                        </a>
                    </li> 
                    <li class="nav-item">
                        <a href="./notifications.php">
                            <i class="fa-regular fa-bell"></i>
                            <p>notifications</p>
                        </a>
                    </li> 
                    <li class="nav-item">
                        <a href="">
                            <i class="fa fa-recycle " aria-hidden="true"></i>
                            <p>Admin Users</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Sidebar -->






    <!-- Dashboard statistics -->
    <div class="main-panel bg-dark">
        <div class="content bg-dark">
            <div class="page-inner">
                <div class="mt-2 mb-4">
                    <h3 class="pb-2">Please Pick a property below to view its tenants</h3>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <form action="<?= ROOT_URL  ?>listings.php" method="POST">
                            <select class="form-select mb-2" name="property">
                                <option selected>Choose below</option>
                <?php while($property = mysqli_fetch_assoc($property_query)):?>
                                <option value="<?= $property['name'] ?>"><?= $property['name'] ?></option>
                <?php endwhile; ?>
                              </select>
                              <input type="submit" name="submit" id="" value="View" class="btn btn-sm btn-primary mt-1 mb-3">
                        </form>
                    </div>
    
                    <div class="col-md-8">
    
                          <!-- <div class="col-md-6">
                            <input type="text" class="form-control mb-3 bg-white text-dark"  name=""  id="" placeholder="Search Property/House Name">  
                          </div> -->
    
                          <h4 class="text-white">Tenants List</h4>
                        <form action="<?= ROOT_URL ?>s.tenants.php" method="POST">
                        <div class="form-row">
                              <div class="form-group col-md-6">
                                  <input type="search" class="" name="name" id="search" placeholder="Enter name">
                                  <button type="submit" class="btn btn-sm btn-primary" name="submit">Search</button>
                              </div>
                          </div>
                        </form>
                                     
                                <table class="table table-bordered table-dark table-striped">
                                    <thead>
                                        <tr>
                                          <th scope="col">S/N</th>
                                          <th scope="col">Tenant Name</th>
                                          <th scope="col">Action</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <th scope="row"></th>
                                          <td>
                                          
                                          </td>
                                          <td>
                                            
                                          </td>
                                        </tr>
                                        
                                      </tbody>
                                </table>
                    </div>
                  </div>  



                </div>
             




                   










    </div>
    </div>
    

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

