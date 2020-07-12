<?php

include "../include/connect.php";

$id_penerima	= $_GET["id_penerima"];

$querypenerima = mysqli_query($connect, "SELECT * FROM penerima WHERE id_penerima='$id_penerima'");
if($querypenerima == false){
	die ("Terjadi Kesalahan : ". mysqli_error($connect));
}
while($penerima = mysqli_fetch_array($querypenerima)) {

?>
	<script src="../assets/plugins/daterangepicker/moment.min.js"></script>
	<script src="../assets/plugins/daterangepicker/daterangepicker.js"></script>
	
	<!-- page script
    <script>
      $(function () {	
		// Daterange Picker
		  $('#Tanggal_Lahir2').daterangepicker({
			  singleDatePicker: true,
			  showDropdowns: true,
			  format: 'YYYY-MM-DD'
		  });
      });
    </script> -->


	<!-- Modal Popup infaq Edit -->
		<div id="ModalEditPenerima" class="modal fade" tabindex="-1" role="dialog"></div>


<!-- Modal Popup infaq -->
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Edit Penerima</h4>
					</div>
					<div class="modal-body">
						<form action="penerima_edit.php" name="modal_popup" enctype="multipart/form-data" method="POST">
						<div class="form-group">
								<label>Tanggal</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<input name="id_penerima" type="hidden" class="form-control" value="<?php echo $penerima["id_penerima"]; ?>" readonly />
										<input name="tanggal" type="text" class="form-control" value="<?php echo $penerima["tanggal"]; ?>" readonly />
									</div>
							</div>
							<div class="form-group">
								<label>Nama</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-id-card"></i>
										</div>
										<input name="nama" type="text" class="form-control" value="<?php echo $penerima["nama"]; ?>"/>
									</div>
							</div>
							<div class="form-group">
								<label>Alamat</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-id-card"></i>
										</div>
										<input name="alamat" type="text" class="form-control" value="<?php echo $penerima["alamat"]; ?>"/>
									</div>
							</div>
							<div class="form-group">
								<label>Jumlah</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-id-card"></i>
										</div>
										<input name="jumlah" type="text" class="form-control" value="<?php echo $penerima["jumlah"]; ?>"/>
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