<?php

// require './myconfig/database.php';
require './partials/header.php';

$sql = "SELECT * FROM locations";
$sql_query = mysqli_query($connect, $sql);


if(isset($_GET['id'])){
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

    $location_sql = "SELECT * FROM locations WHEER id = $id";
    $location_sql_query = mysqli_query($connect, $sql);
    $location_sql_result = mysqli_fetch_assoc($sql_query);
    
   $locationName = $location_sql_result['name'] ?? null;
}



?>









    <!-- Property Location Dashnoard -->
    <div class="main-panel bg-dark">
        <div class="content bg-dark">
            <div class="page-inner">
                <div class="mt-2 mb-4">
                    <h2 class="text-{{$text}} pb-2">Property Location</h2>
                </div>

                               <!-- Button trigger modal -->



                <div class="row gap-2">
                    <div class="col-md-4  p-3 border border-white rounded-1">


                    <?php if(isset($_SESSION['location'])):?>
                        
                        <div class="alert alert-danger alert-dismissible fade show text-center text-danger" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                          </button>
                                <?=  $_SESSION['location'];
                                unset($_SESSION['location']); ?>
                      </div>
                      <?php elseif(isset($_SESSION['location-success'])): ?>
                        <div class="alert alert-success alert-dismissible fade show text-center text-success" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                          </button>
                                <?=  $_SESSION['location-success'];
                                unset($_SESSION['location-success']); ?>
                      </div>
                      <?php elseif(isset($_SESSION['delete-location'])): ?>
                        <div class="alert alert-success alert-dismissible fade show text-center text-success" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                          </button>
                                <?=  $_SESSION['delete-location'];
                                unset($_SESSION['delete-location']); ?>
                      </div>
                      <?php elseif(isset($_SESSION['location-update'])): ?>
                        <div class="alert alert-success alert-dismissible fade show text-center text-success" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                          </button>
                                <?=  $_SESSION['location-update'];
                                unset($_SESSION['location-update']); ?>
                      </div>
    
            <?php endif; ?>

                        <p class="text-white">Add a new property location below</p>
                        <form action="<?= ROOT_URL  ?>location-logic.php" method="POST" >
                            <input type="text" class="form-control mb-2"  name="location" value=""  id="" placeholder="Property Location">          
                              <input type="submit" name="submit" id="" value="Save" class="btn btn-sm btn-primary mt-1">
                        </form>
                    </div>




                    <div class="col-md-6 bg-white p-2 rounded-1 ">
                            <h4 class="text-dark">Property Location List</h4>
    
                            <table class="table table-bordered table-dark table-striped">
                                <thead>
                                    <tr>
                                      <th scope="col">S/N</th>
                                      <th scope="col">Location</th>
                                      <th scope="col">Action</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                        <?php while($location = mysqli_fetch_assoc($sql_query)):?>
                                    <tr>
                                      <th scope="row"><?= $location['id'] ?></th>
                                      <td><?= $location['name'] ?></td>
                                      <td>
                                        <a href="#"  data-toggle="modal" data-target="#topupModal<?= $location['id'] ?>" class="btn btn-sm btn-primary">Edit</a>
                                        <a href="<?= ROOT_URL ?>delete-location-logic.php?id=<?= $location['id'] ?>" class="btn btn-sm btn-danger">Delete</a>
                                      </td>


                                      <!-- Edit location modal -->
    <div id="topupModal<?= $location['id'] ?>" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-dark" style="text-align:center;">Edit Location.</strong></h4>
                    <button type="button" class="close text-{{$text}}" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                        <form style="padding:3px;" role="form" method="POST" action="<?= ROOT_URL ?>location-logic.php">
                        <input type="hidden" name="id" value="<?= $location['id'] ?>">
                        <input type="text" class="form-control mb-2"  name="location" value="<?= $location['name'] ?>"  id="" placeholder="Property Location">          
                        <input type="submit" name="send" id="" value="Save" class="btn btn-sm btn-primary mt-1">
                    </form>
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

