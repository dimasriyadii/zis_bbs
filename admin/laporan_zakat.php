<?php
include "../include/connect.php";
include "../include/session.php"; 
?>
<!DOCTYPE html>
<html>
<head>
<title>Laporan | Babussalam</title>
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
<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:login.php?pesan=gagal");
	}
 
	?>
<div class="wrapper">

<header class="main-header">
  <!-- Logo -->
  <div class="logo">
<span class="logo-mini"><img src="../assets/images/logo.png" class="img-circle" alt="Logo" height="50" width="50"></span>
<span class="logo-lg"><b>ZIS Babussalam</b></span>
</div>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </a>
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">

        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">

	<img src="../assets/images/avatar0.jpg" class="user-image" alt="images">
  <span class="hidden-xs"><?php echo $_SESSION['username']; ?></span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
	              <img src="../assets/images/avatar0.jpg" class="img-circle" alt="images">
                <p style="text-transform:capitalize;">Hi <?php echo $_SESSION['username'];?></p>
                <p>Welcome To ZIS Babussalam</p>
             </li>
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <!-- <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div> -->
                <div class="pull-right">
                  <a href="../logout.php" class="btn btn-danger btn-danger">Log out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>  
    <!-- Left side column. contains the logo and sidebar -->
	<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../assets/images/avatar0.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
        <p><?php echo $_SESSION['username']; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
            <div class="pull-left image">
              <p></p>
            </div>
          </div><!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header"><h4><b><center>Menu Utama</center></b></h4></li>
            <li><a href="home.php"><i class="fa fa-home"></i><span>Beranda</span></a></li>
            <li><a href="zakats.php"><i class="fa fa-user"></i><span>Zakat</span></a></li>
			<li class="treeview">
              <a href="#"><i class="fa fa-book"></i> <span>Infaq / Sedekah</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
                <ul class="treeview-menu">
                  <li> <a href="infaq.php"><i class="fa fa-book active"></i><span>Data Infaq / Sedekah</span></a></li>
                  <li><a href="infaq_pengeluaran.php"><i class="fa fa-book"></i><span>Pengeluaran Infaq</span></a></li>
                </ul>
            </li>
            <!-- <li><a href="sedekah.php"><i class="fa fa-users"></i><span>Sedekah</span></a></li> -->
            <li><a href="penerima.php"><i class="fa fa-area-chart"></i><span>Penerima Zakat</span></a></li>
			<li class="treeview">
              <a href="#"><i class="fa fa-book"></i> <span>Laporan</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
                <ul class="treeview-menu">
                  <li><a href="laporan_zakat.php"><i class="fa fa-book"></i><span>Zakat</span></a></li>
                  <li> <a href="laporan_infaq.php"><i class="fa fa-book active"></i><span>Infaq / Sedekah</span></a></li>
                  <li> <a href="laporan_pengeluaran.php"><i class="fa fa-book active"></i><span>Pengeluaran</span></a></li>
                  <li> <a href="laporan_penerima.php"><i class="fa fa-book active"></i><span>Penerima</span></a></li>
                </ul>
            </li>
            <!-- <li><a href="users.php"><i class="fa fa-user"></i><span>User</span></a></li> -->


          </ul>
        </section>
    <!-- /.sidebar -->
  </aside>
 </div>  
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Data Laporan Zakat
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
				<!-- <a href="#"><button class="btn btn-success" type="button" data-target="#ModalAdd" data-toggle="modal"><i class="fa fa-plus"></i> Add</button></a> -->
			
				  <table id="data" class="table table-bordered table-striped table-scalable">
						<?php
							include "detail_laporan_zakat.php";
						?>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
		
<!-- Modal Popup Zakat -->
<div id="ModalAdd" class="modal fade" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Bayar Zakat</h4>
					</div>
					<!-- onsubmit="return validate()" -->
					<div class="modal-body">
						<form action="zakats_add.php" name="validasi_form" enctype="multipart/form-data" onsubmit="return validate()"   method="POST">
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
										<input name="nama" type="text" class="form-control" placeholder="Nama" id="nama"/>
									</div>
							</div>

							<div class="form-group">
								<label>Alamat</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<select name="alamat" class="form-control">
										<option value='Bandar Lampung'>Bandar Lampung</option>
										<option value='Penengahan'>Penengahan</option>
										<option value='Penengahan Raya'>Penengahan Raya</option>
                  						<option value='Kedaton'>Kedaton</option>
										<option value='Rajabasa'>Rajabasa</option>
										<option value='Pahoman'>Pahoman</option>
                    					<option value='Sukarame'>Sukarame</option>
										</select>
									</div>
									</div>

             				 <!-- <div class="form-group">
								<label>Alamat</label>
									<div class="input-group">
										<div class="input-group-addon">
                   						 <i class="fa fa-user"></i>
										</div>
										<input name="alamat" type="text" class="form-control" placeholder="Alamat"id="alamat"/>
									</div>
							</div> -->

            				  <div class="form-group">
								<label>Uang</label>
									<div class="input-group">
										<div class="input-group-addon">
                    					<i class="fa fa-user"></i>
										</div>
										<input name="uang" type="text" class="form-control" placeholder="Uang Rp"id="uang"/>
									</div>
							</div>

              					<div class="form-group">
								<label>Beras</label>
									<div class="input-group">
										<div class="input-group-addon">
                   						 <i class="fa fa-user"></i>
										</div>
										<input name="beras" type="text" class="form-control" placeholder="Beras Kg"id="beras"/>
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
						<p id="error_para" ></p>
					</div>
				</div>
			</div>
		</div>


		<!-- kode error cuy -->

		<!-- <script type="text/javascript">
			function validate()
			{
			var error="";
			var nama = document.getElementById( "nama" );
			if( nama.value == "" )
			{
			error = " Kamu harus isi form nama. ";
			document.getElementById( "error_para" ).innerHTML = error;
			return false;
			}

			var alamat = document.getElementById( "alamat" );
			if( alamat.value == "" )
			{
			error = " Kamu harus isi form alamat ";
			document.getElementById( "error_para" ).innerHTML = error;
			return false;
			}

			var uang = document.getElementById( "uang" );
			if( uang.value == "" )
			{
			error = " Kamu harus isi form uang. ";
			document.getElementById( "error_para" ).innerHTML = error;
			return false;
			}

			var beras = document.getElementById( "beras" );
			if( beras.value == "" )
			{
			error = " Kamu harus isi form beras. ";
			document.getElementById( "error_para" ).innerHTML = error;
			return false;
			}
			
			else
			{
			return true;
			}
			}
		</script> -->

		<script type="text/javascript">
			function validate()
			{
			var error="";
			var nama = document.getElementById( "nama" );
			if( nama.value == "" )
			{
			error = " Kamu harus isi form nama. ";
			document.getElementById( "error_para" ).innerHTML = error;
			return false;
			}

			var alamat = document.getElementById( "alamat" );
			if( alamat.value == "" )
			{
			error = " Kamu harus isi form alamat ";
			document.getElementById( "error_para" ).innerHTML = error;
			return false;
			}

			var uang = document.getElementById( "uang" );
			var beras = document.getElementById( "beras" )
			if( uang.value == "" && beras.value == "" )
			{
			error = " Adayang terlewat ";
			document.getElementById( "error_para" ).innerHTML = error;
			return false;
			}
			// if (beras.value == "" || uang.value == "") { 
			// 	error = "Ada yang terlewat";
			// 	document.getElementById("error_para").innerHTML = error;
			// 	return false;
			//  }

			else
			{
			return true;
			}
			}
		</script>

		<!-- <script type="text/javascript">
 
			function validate() {
				var nama = document.getElementById("nama").value;
				var alamat = document.getElementById("alamat").value;
				var uang = document.getElementById("uang").value;
				var beras = document.getElementById("beras").value;
				if(nama=="" && alamat=="" && uang=="" && beras==""){
					alert('silahkan isi!Nama:..'+'\n'+'silahkan isi!Kota:..'+'\n'+'silahkan isi!alamat:..'+'\n'+'silahkan isi!Pesan:..');
				}
				else if(nama==""){
					alert('nama Harus diisi');
				}
				else if (alamat == "") {
					alert("alamat");
		
				}
				else if (uang == "") {
					alert("uang");
		
				}
				else if (beras == "") {
					alert("beras");
		
				}
		
				else{
				alert('Data berhasil ditambahkan');
					}
		
			}
		</script> -->

		
		<!-- Modal Popup zakat Edit -->
		<div id="ModalEditZakat" class="modal fade" tabindex="-1" role="dialog"></div>
		
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
			var m = $(this).attr("id_zakatf");
				$.ajax({
					url: "zakats_modal_edit.php",
					type: "GET",
					data : {id_zakatf: m,},
					success: function (ajaxData){
					$("#ModalEditZakat").html(ajaxData);
					$("#ModalEditZakat").modal('show',{backdrop: 'true'});
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
 