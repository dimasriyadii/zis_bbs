<?php

include "../include/connect.php";

$id_zakatf	= $_GET["id_zakatf"];

$queryuser = mysqli_query($connect, "SELECT * FROM zakat_fitrah WHERE id_zakatf='$id_zakatf'");
if($queryuser == false){
	die ("Terjadi Kesalahan : ". mysqli_error($connect));
}
while($user = mysqli_fetch_array($queryuser)){

?>
	<script src="../assets/plugins/daterangepicker/moment.min.js"></script>
	<script src="../assets/plugins/daterangepicker/daterangepicker.js"></script>
	
	<!-- page script -->
    <script>
      $(function () {	
		// Daterange Picker
		  $('#Tanggal_Lahir2').daterangepicker({
			  singleDatePicker: true,
			  showDropdowns: true,
			  format: 'YYYY-MM-DD'
		  });
      });
    </script>


	<!-- Modal Popup Zakat Edit -->
		<div id="ModalEditZakat" class="modal fade" tabindex="-1" role="dialog"></div>


<!-- Modal Popup Zakat -->
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Edit Zakat</h4>
					</div>
					<div class="modal-body">
						<form action="zakats_edit.php" name="modal_popup" enctype="multipart/form-data" method="POST">
						<div class="form-group">
								<label>Tanggal</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<input name="tanggal" type="text" class="form-control" value="<?php echo $user["tanggal"]; ?>" readonly />
									</div>
							</div>
							<div class="form-group">
								<label>Password</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-id-card"></i>
										</div>
										<input name="password" type="password" class="form-control" value=""/>
									</div>
							</div>
							<div class="form-group">
								<label>Level</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-flag"></i>
										</div>
										<select name="level" class="form-control">
										<option value='admin'>admin</option>
                    <option value='dokter'>dokter</option>
                    <option value='operator'>operator</option>
										</select>
									</div>
									</div>
									
									<div class="modal-footer">
								<button class="btn btn-success" type="submit">
									Add
								</button>
								<button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
									Cancel
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			
			
<?php
			}

?>