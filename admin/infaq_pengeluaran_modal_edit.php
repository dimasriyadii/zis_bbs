<?php

include "../include/connect.php";

$id_pengeluaran	= $_GET["id_pengeluaran"];

$queryinfaq = mysqli_query($connect, "SELECT * FROM infaq_pengeluaran WHERE id_pengeluaran='$id_pengeluaran'");
if($queryinfaq == false){
	die ("Terjadi Kesalahan : ". mysqli_error($connect));
}
while($infaq = mysqli_fetch_array($queryinfaq)) {

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
		<div id="ModalEditinfaq" class="modal fade" tabindex="-1" role="dialog"></div>


<!-- Modal Popup infaq -->
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Edit infaq</h4>
					</div>
					<div class="modal-body">
						<form action="infaq_pengeluaran_edit.php" name="modal_popup" enctype="multipart/form-data" method="POST">
						<div class="form-group">
								<label>Tanggal</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<input name="id_pengeluaran" type="hidden" class="form-control" value="<?php echo $infaq["id_pengeluaran"]; ?>" readonly />
										<input name="tanggal" type="text" class="form-control" value="<?php echo $infaq["tanggal"]; ?>" readonly />
									</div>
							</div>

							<div class="form-group">
								<label>Keperluan</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<select name="keperluan" class="form-control">
										<option value='1'>Khatib</option>
										<option value='2'>Kajian Rabu</option>
										<option value='3'>Kajian Minggu</option>
                  						<option value='4'>Kebersihan</option>
										<option value='5'>Air</option>
										</select>
									</div>
									</div>

							<!-- <div class="form-group">
								<label>Keperluan</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-id-card"></i>
										</div>
										<input keperluan="keperluan" type="text" class="form-control" value="<?php echo $infaq["keperluan"]; ?>"/>
									</div>
							</div> -->
												
							<div class="form-group">
								<label>Jumlah</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<input name="jumlah" type="text" class="form-control" value="<?php echo $infaq["jumlah"]; ?>"/>
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