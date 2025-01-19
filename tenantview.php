<?php

// require './myconfig/database.php';
require './partials/header.php';

if(isset($_GET['id'])){
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

    $sql = "SELECT * FROM tenants WHERE id = $id";
    $sql_query = mysqli_query($connect, $sql);
    $tenant = mysqli_fetch_assoc($sql_query);
    
}


?>













    <!-- Dashboard statistics -->
    <div class="main-panel bg-dark">
        <div class="content bg-dark">
            <div class="page-inner">
                <div class="mt-2 mb-4">
                    <h3 class="pb-2">TENANTS REVALIDATION/ELECTRONICS DOCUMENTATION</h3>
                </div>
                <button class="btn btn-primary mb-2" onclick="goBack()"><i class="fa-solid fa-angle-left"></i>  Back</button>
                <a href="<?= ROOT_URL ?>edittenant.php?id=<?= $tenant['id'] ?>" class="btn btn-warning mb-2"><i class="fa-regular fa-pen-to-square"></i> Edit</a>
                <a href="<?= ROOT_URL ?>delete-tenant.php?id=<?= $tenant['id'] ?>" class="btn btn-danger mb-2"><i class="fa-solid fa-trash"></i> Delete</a>
                <!-- Beginning of  tenants Stats  -->
                <div class="row row-card-no-pd  shadow-lg rounded-1">
                    <div class="col-md-12">
                        <img src="./images/<?= $tenant['thumbnail'] ?>" alt="" class="img-fluid rounded-5 d-block m-auto" width="200px">
                    </div>
                    
                </div>

                <div class="row">
                    <div class="col-md-12 col-sm-12">
                    <div class="bs-example widget-shadow table-responsive" data-example-id="hoverable-table">
                        <table  id="" class="table table-bordered table-dark table-striped">
                            <thead>
                                <th>S/N</th>
                                <th>FIELDS</th>
                                <th>VALUES</th>
                            </thead>
                            <tr>
                                <td>1</td>
                                <td>Name Of Tenant</td>
                                <td><strong><?= $tenant['fullname'] ?></strong></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Phone No.</td>
                                <td><strong><?= $tenant['phone'] ?></strong></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Email</td>
                                <td><strong><?= $tenant['email'] ?></strong></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Next Of Kin</td>
                                <td><strong><?= $tenant['n_o_k'] ?></strong></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Next Of Kin Phone No:</td>
                                <td><strong><?= $tenant['n_o_k_p'] ?></strong></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Community Of Origin</td>
                                <td><strong><?= $tenant['community'] ?></strong></td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>LGA Of Origin</td>
                                <td><strong><?= $tenant['lga'] ?></strong></td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>State Of Origin</td>
                                <td><strong><?= $tenant['soo'] ?></strong></td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Name Of Property Occupied</td>
                                <td><strong><?= $tenant['property'] ?></strong></td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Type Of Apartment</td>
                                <td><strong><?= $tenant['apartment'] ?></strong></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>Block</td>
                                <td><strong><?= $tenant['block'] ?></strong></td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>House/Flat/Store No:</td>
                                <td><strong><?= $tenant['hn'] ?></strong></td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td>Expiration Month</td>
                                <?php
                                $date = new DateTime($tenant['expire']);
                                $date_in_words = $date->format('F j, Y');
                                $parts = explode(" ", $date_in_words);
                                ?>
                                <td><strong><?= $first_part = $parts[0];; ?></strong></td>
                            </tr>
                            <tr>
                                <td>14</td>
                                <td>Rent Amount</td>
                                <td><strong>N<?= number_format($tenant['rent'], 2) ?></strong></td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td>Type Of Work</td>
                                <td><strong><?= $tenant['tow'] ?></strong></td>
                            </tr>
                            <tr>
                                <td>16</td>
                                <td>Employer</td>
                                <td><strong><?= $tenant['employer'] ?></strong></td>
                            </tr>

                        </table>
                    </div>
                    </div>
                </div>






                <!-- End of tenants statistics -->

    </div>
    </div>
    </div>

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

