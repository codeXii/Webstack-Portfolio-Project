<?php

// require './myconfig/database.php';
require './partials/header.php';

// get all locations from database
$sql = "SELECT * FROM locations";
$query = mysqli_query($connect, $sql);

// get all properties from database
$property_sql = "SELECT * FROM properties";
$property_query = mysqli_query($connect,$property_sql);




?>











    <!-- Dashboard statistics -->
    <div class="main-panel bg-dark">
        <div class="content bg-dark">
            <div class="page-inner">
              <div class="row">
                <div class="col-md-4">


                <?php if(isset($_SESSION['add-property'])):?>
                        
                        <div class="alert alert-danger alert-dismissible fade show text-center text-danger" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                          </button>
                                <?=  $_SESSION['add-property'];
                                unset($_SESSION['add-property']); ?>
                      </div>
                      <?php elseif(isset($_SESSION['add-property-success'])): ?>
                        <div class="alert alert-success alert-dismissible fade show text-center text-success" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                          </button>
                                <?=  $_SESSION['add-property-success'];
                                unset($_SESSION['add-property-success']); ?>
                      </div>
                      <?php elseif(isset($_SESSION['delete-property'])): ?>
                        <div class="alert alert-danger alert-dismissible fade show text-center text-success" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                          </button>
                                <?=  $_SESSION['delete-property'];
                                unset($_SESSION['delete-property']); ?>
                      </div>
                      <?php elseif(isset($_SESSION['property-update'])): ?>
                        <div class="alert alert-success alert-dismissible fade show text-center text-success" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                          </button>
                                <?=  $_SESSION['property-update'];
                                unset($_SESSION['property-update']); ?>
                      </div>
            <?php endif; ?>










                    <p>Add a new property/House</p>
                    <form action="<?= ROOT_URL ?>properties-logic.php" method="POST">
                        <input type="text" class="form-control mb-3"  name="name"  id="" placeholder="Property/House Name">
                        <select class="form-select mb-3" aria-label="Default select example" name="location">
                            <option selected>Location</option>
                    <?php while($location = mysqli_fetch_assoc($query)):?>
                            <option value="<?= $location['name'] ?>"> <?= $location['name'] ?> </option>
                    <?php endwhile; ?>        
                            <!-- <option value="2">Opolo</option>
                            <option value="3">Biogbolo</option> -->
                          </select>
                          <div class="form-floating mb-3">
                            <textarea class="form-control" name="description" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                            <label for="floatingTextarea">Description/Address</label>
                          </div>          
                          <input type="submit" name="submit" id="" value="Save" class="btn btn-sm btn-primary mt-1">
                    </form>
                </div>

                <div class="col-md-8">

                      <!-- <div class="col-md-6">
                        <input type="text" class="form-control mb-3 bg-white text-dark"  name=""  id="" placeholder="Search Property/House Name">  
                      </div> -->

                      <h4 class="text-white">Property/Houses List</h4>
                      <div class="bs-example widget-shadow table-responsive" data-example-id="hoverable-table">    
                            <table class="table table-bordered table-dark table-striped">
                                <thead>
                                    <tr>
                                      <th scope="col">S/N</th>
                                      <th scope="col">Properties</th>
                                      <th scope="col">Action</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                <?php while($property = mysqli_fetch_assoc($property_query)):?>
                                    <tr>
                                      <th scope="row"><?= $property['id'] ?></th>
                                      <td>
                                        Name: <b><?=  $property['name'] ?></b> <br>
                                        Location: <b> <?= $property['location'] ?>  </b> <br>
                                        Description: <b> <?= $property['description'] ?> </b> <br>
                                      </td>
                                      <td>
                                        <!-- <a href="#" class="btn btn-sm btn-success mb-1">View</a> -->
                                        <a href="#" data-toggle="modal" data-target="#topupModal<?= $property['id'] ?>" class="btn btn-sm btn-primary mb-1">Edit</a>
                                        <a href="<?= ROOT_URL ?>delete-property.php?id=<?= $property['id'] ?>" class="btn btn-sm btn-danger">Delete</a>
                                      </td>


                                                                         <!-- Edit property modal -->
    <div id="topupModal<?= $property['id'] ?>" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-dark" style="text-align:center;">Edit Location.</strong></h4>
                    <button type="button" class="close text-{{$text}}" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                        <form style="padding:3px;" role="form" method="POST" action="<?= ROOT_URL ?>properties-logic.php">
                        <input type="hidden" name="id" value="<?= $property['id'] ?>">
                        <input type="text" class="form-control mb-3"  value="<?= $property['name'] ?>" name="name"  id="" placeholder="Property/House Name">
                        <select class="form-select mb-3" aria-label="Default select example" name="location">
                            <option value="<?= $property['location'] ?>"> <?= $property['location'] ?> </option>
                          </select>
                          <div class="form-floating mb-3">
                            <textarea class="form-control" name="description"  placeholder="Leave a comment here" id="floatingTextarea"><?= $property['description'] ?></textarea>
                            <label for="floatingTextarea">Description/Address</label>
                          </div>          
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

