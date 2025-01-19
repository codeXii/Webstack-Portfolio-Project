<?php

// require './myconfig/database.php';
require './partials/header.php';


// get all properties from database
$property_sql = "SELECT * FROM properties";
$property_query = mysqli_query($connect,$property_sql);




?>









    <!-- Dashboard statistics -->
    <div class="main-panel bg-dark">
        <div class="content bg-dark">
            <div class="page-inner">
                <div class="mt-2 mb-4">
                    <h3 class="pb-2">Please Pick a property below to view its tenants</h3>
                </div>
                
                <div class="row row-card-no-pd  shadow-lg">
                       
            <?php while($property = mysqli_fetch_assoc($property_query)):?>
                    <div class="col-sm-6 col-md-6 mb-2">
                        <div class="card card-stats card-round bg-primary">
                            <div class="card-body ">
                                 <div class="col-12">
                                        <div class="text-center icon-big">
                                            <i class="fa fa-home text-warning"></i>
                                        </div>
                                    </div>
                                <div class="row">
                                    
                                    <div class="col-12 col-stats">
                                        <div class="numbers">
                                            <h1 class="card-title text-center fs-4"><?= $property['name'] ?></h1> 
                                            <form action="<?= ROOT_URL  ?>listings.php" method="POST">
                                                <input type="hidden" name="property" value="<?= $property['name']  ?>">
                                                <input type="hidden" name="count" value="<?= $property['count']  ?>">
                                                <input type="submit" name="submit" id="" value="View tenants" class="btn  btn-warning mt-1 mb-3">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?> 
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

