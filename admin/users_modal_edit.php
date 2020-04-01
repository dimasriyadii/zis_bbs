<?php

include "../include/connect.php";

$id_users	= $_GET["id_users"];

$queryuser = mysqli_query($connect, "SELECT * FROM user WHERE id_users='$id_users'");
if($queryuser == false){
	die ("Terjadi Kesalahan : ". mysqli_error($connect));
}
while($user = mysqli_fetch_array($queryuser)) {

?>
	<script src="../assets/plugins/daterangepicker/moment.min.js"></script>
	<script src="../assets/plugins/daterangepicker/daterangepicker.js"></script>
	
	<!-- page script -->
    


	<!-- Modal Popup user Edit -->
		<div id="ModalEditUser" class="modal fade" tabindex="-1" role="dialog"></div>


<!-- Modal Popup user -->
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Edit User</h4>
					</div>
					<div class="modal-body">
						<form action="user_edit.php" name="modal_popup" enctype="multipart/form-data" method="POST">
						<div class="form-group">
								<label>Nama</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<input name="id_users" type="hidden" class="form-control" value="<?php echo $user["id_users"]; ?>" readonly />
										<input name="nama" type="text" class="form-control" value="<?php echo $user["nama"]; ?>" readonly />
									</div>
							</div>
							<div class="form-group">
								<label>Username</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-id-card"></i>
										</div>
										<input name="username" type="text" class="form-control" value="<?php echo $user["username"]; ?>"/>
									</div>
							</div>
							<div class="form-group">
								<label>Password</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-id-card"></i>
										</div>
										<input name="password" type="text" class="form-control" value="<?php echo $user["password"]; ?>"/>
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