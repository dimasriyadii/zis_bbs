  <?php
include "../include/connect.php";
include "../include/session.php"; 
?>
<!DOCTYPE html>
<html>
<head>
<title>Sedekah | Babussalam</title>
<!-- <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"> -->


  <!-- jQuery 2.1.4 -->
  <script src="../assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="../assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../assets/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../assets/dist/js/app.min.js"></script>
    <!-- Icon -->
	<link rel="shortcut icon" type="image/icon" href="../GGP.ico">
    <!-- Tell the browser to be responsive to screen width -->

  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">  
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../assets/fa/css/font-awesome.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../assets/plugins/datatables/dataTables.bootstrap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../assets/dist/css/AdminLTE.min.css">

<!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
<link rel="stylesheet" href="../assets/dist/css/skins/_all-skins.min.css">
</head>

<body class="hold-transition skin-blue sidebar-mini ">
<div class="wrapper">

<header class="main-header">
    <div class="pull-right hidden-xs"></div>
    <strong><?php include "../include/header.php" ?></strong>
</sidebar>
 </div>  
 
<!-- Left side column. contains the logo and sidebar -->
<sidebar class="main-sidebar">
    <div class="pull-right hidden-xs"></div>
    <strong><?php include "../include/sidebar.php" ?></strong>
</sidebar>
 </div> 
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Data sedekah
          </h1>
          
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">

                </div><!-- /.box-header -->
                <div class="box-body">
				<a href="#"><button class="btn btn-success" type="button" data-target="#ModalAdd" data-toggle="modal"><i class="fa fa-plus"></i> Add</button></a>
                  <br></br>
				  <table id="data" class="table table-bordered table-striped table-scalable">
						<?php
							include "detail_sedekah.php";
						?>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
		
<!-- Modal Popup sedekah -->
<div id="ModalAdd" class="modal fade" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Bayar sedekah</h4>
					</div>
					<div class="modal-body">
						<form action="sedekah_add.php" name="modal_popup" enctype="multipart/form-data" method="POST">
							<!-- <div class="form-group">
								<label>Tanggal</label>
								
										<input name="tanggal" type="text" class="form-control" placeholder="YYYY/MM/DD"/>
								
							</div> -->

							<div class="form-group">
								<label>Nama</label>
									<div class="input-group">
										<div class="input-group-addon">
                   							 <i class="fa fa-user"></i>
										</div>
										<input name="nama" type="text" class="form-control" placeholder="Nama"/>
									</div>
							</div>

             				 <div class="form-group">
								<label>Alamat</label>
									<div class="input-group">
										<div class="input-group-addon">
                   						 <i class="fa fa-user"></i>
										</div>
										<input name="alamat" type="text" class="form-control" placeholder="Alamat"/>
									</div>
							</div>

            				  <div class="form-group">
								<label>Jumlah</label>
									<div class="input-group">
										<div class="input-group-addon">
                    					<i class="fa fa-user"></i>
										</div>
										<input name="jumlah" type="text" class="form-control" placeholder="Jumlah Rp"/>
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
		</div>
		
		<!-- Modal Popup sedekah Edit -->
		<div id="ModalEditSedekah" class="modal fade" tabindex="-1" role="dialog"></div>
		
		<!-- Modal Popup untuk delete--> 
		<div class="modal fade" id="modal_delete">
			<div class="modal-dialog">
				<div class="modal-content" style="margin-top:100px;">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" style="text-align:center;">Are you sure to delete this information ?</h4>
					</div>    
					<div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
						<a href="#" class="btn btn-danger" id="delete_link">Delete</a>
						<button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
					</div>
				</div>
			</div>
		</div>
	</div><!-- /.content-wrapper -->


		<footer class="main-footer">
    		<div class="pull-right hidden-xs"></div>
    		<strong><center><?php include "../include/footer.php";?></center></strong>
		</footer>

	</div><!-- ./wrapper -->

			<!-- Javascript Edit--> 
	<script type="text/javascript">
		$(document).ready(function () {
		
		// Users
		$(".open_modal").click(function(e) {
			var m = $(this).attr("id_sedekah");
				$.ajax({
					url: "sedekah_modal_edit.php",
					type: "GET",
					data : {id_sedekah: m,},
					success: function (ajaxData){
					$("#ModalEditSedekah").html(ajaxData);
					$("#ModalEditSedekah").modal('show',{backdrop: 'true'});
					}
				});
			});
		
	

		});
	</script>
	
	<!-- Javascript Delete -->
	<script>
		function confirm_delete(delete_url){
			$("#modal_delete").modal('show', {backdrop: 'static'});
			document.getElementById('delete_link').setAttribute('href', delete_url);
		}
	</script>
 