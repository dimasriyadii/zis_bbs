<?php

include "../include/connect.php";

$id_zakatf	= $_GET["id_zakatf"];

$queryzakat = mysqli_query($connect, "SELECT * FROM zakat_fitrah WHERE id_zakatf='$id_zakatf'");
if($queryzakat == false){
	die ("Terjadi Kesalahan : ". mysqli_error($connect));
}
while($zakat = mysqli_fetch_array($queryzakat)) {

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
										<input name="id_zakatf" type="hidden" class="form-control" value="<?php echo $zakat["id_zakatf"]; ?>" readonly />
										<input name="tanggal" type="text" class="form-control" value="<?php echo $zakat["tanggal"]; ?>" readonly />
									</div>
							</div>
							<div class="form-group">
								<label>Nama</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-id-card"></i>
										</div>
										<input name="nama" type="text" class="form-control" value="<?php echo $zakat["nama"]; ?>"/>
									</div>
							</div>
							<div class="form-group">
								<label>Alamat</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-id-card"></i>
										</div>
										<input name="alamat" type="text" class="form-control" value="<?php echo $zakat["alamat"]; ?>"/>
									</div>
							</div>
							<div class="form-group">
								<label>Uang</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-id-card"></i>
										</div>
										<input name="uang" type="text" class="form-control" value="<?php echo $zakat["uang"]; ?>"/>
									</div>
							</div>
							<div class="form-group">
								<label>Beras</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-id-card"></i>
										</div>
										<input name="beras" type="text" class="form-control" value="<?php echo $zakat["beras"]; ?>"/>
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
									Save
								</button>
								<button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
									Cancel
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			
	<?php }