  <?php
include "../include/connect.php";
include "../include/session.php"; 
?>
<!DOCTYPE html>
<html>
<head>
<title>Beranda | Babussalam</title>
<!-- <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"> -->
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">


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

<body class="hold-transition skin-blue sidebar-mini">
<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:login.php?pesan=gagal");
	}
 
	?>
<div class="wrapper">

<body class="hold-transition skin-blue sidebar-mini ">
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
            <li><a href="users.php"><i class="fa fa-user"></i><span>User</span></a></li>

          </ul>
        </section>
    <!-- /.sidebar -->
  </aside>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        <h5>
        Selamat Datang <?php echo $_SESSION['username']; ?> anda masuk sebagai <b> <?php echo $_SESSION['level']; ?> </b>
        
      </h5>
      <!-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
      </ol> -->
    </section>
          
        </section>

<!-- Main content -->
	<form action="" method="post">
		<input type="date" name="tgl1">
		<input type="date" name="tgl2">
		<input type="submit" name="tampilkan" value="TAMPILKAN">
	</form>
<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                  <?php
                        $queryberas = mysqli_query($connect,"SELECT SUM(beras) AS jumlah FROM zakat");
                        $databeras = mysqli_fetch_array($queryberas);
                        ?>
                        <?php
                                  $angka = $databeras['jumlah'];
                                  // $angka_format1 = number_format($angka,2,",",".");
                              echo "
                                    <h3>$angka<sup style='font-size: 20px'>Kilogram</sup></h3>
                                    ";
                  ?>
                <p>Zakat (Beras)</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="zakats.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <?php
                    $queryjumlah = mysqli_query($connect,"SELECT SUM(uang) AS jumlah FROM zakat");
                    $data1 = mysqli_fetch_array($queryjumlah);
                    ?>
                    <?php
                              $angka = $data1['jumlah'];
                              $angka_format1 = number_format($angka,2,",",".");
                          echo "
                                <h3>Rp. $angka_format1<sup style='font-size: 20px'></sup></h3>
                                ";
                ?>
                <p>Zakat (Uang)</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <?php
                    $queryjumlah = mysqli_query($connect,"SELECT SUM(jumlah) AS jumlah FROM infaq");
                    $data1 = mysqli_fetch_array($queryjumlah);
                    ?>
                    <?php
                              $angka = $data1['jumlah'];
                              $angka_format1 = number_format($angka,2,",",".");
                          echo "
                                <h3>Rp. $angka_format1<sup style='font-size: 20px'></sup></h3>
                                ";
                ?>

                <p>Pemasukan Infaq / Sedekah</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->

          <!-- ./col -->
            <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <?php
                    $queryjumlah = mysqli_query($connect,"SELECT SUM(jumlah) AS jumlah FROM infaq_pengeluaran");
                    $data1 = mysqli_fetch_array($queryjumlah);
                    ?>
                    <?php
                              $angka = $data1['jumlah'];
                              $angka_format1 = number_format($angka,2,",",".");
                          echo "
                                <h3>Rp. $angka_format1<sup style='font-size: 20px'></sup></h3>
                                ";
                ?>

                <p>Data Pengeluaran Infaq</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->

                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              <?php
                  $sqlinfaq = mysqli_query($connect,"SELECT SUM(jumlah) AS jumlah FROM infaq");
                  $sqlpengeluaran = mysqli_query($connect,"SELECT SUM(jumlah) AS pengeluaran FROM infaq_pengeluaran");
                  // $querypenerima = mysqli_query($connect,"SELECT SUM(uang) AS uangp FROM tbl_penerima");
                  // $queryberasp = mysqli_query($connect,"SELECT SUM(beras) AS berasp FROM tbl_penerima");
                  $queryinfaq = mysqli_fetch_array($sqlinfaq);
                  $querypengeluaran = mysqli_fetch_array($sqlpengeluaran);
                  // $data3 = mysqli_fetch_array($querypenerima);
                  // $data4 = mysqli_fetch_array($queryberasp);

                  $saldoinfaq = $queryinfaq['jumlah'] - $querypengeluaran['pengeluaran'];

                  //tungitung
                  $hasil_uang = $data1['jumlah'] - $data3['uangp'];
                  $hasil_beras = $data2['beras'] - $data4['berasp'];
                  ?>
                  <?php
                  $angka = $saldoinfaq;
                  $angka_format = number_format($angka,2,",",".");
                  
                        echo "
                        <h3>Rp. $angka_format</h3>";
					      ?>

                <p>Sisa Infaq</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <?php
                  $queryjumlah = mysqli_query($connect,"SELECT SUM(jumlah) AS jumlah FROM sedekah");
                  $data2 = mysqli_fetch_array($queryjumlah);

                  //tungitung
                  ?>
                  <?php
                        $angka = $data2['jumlah'];
                        $angka_format2 = number_format($angka,2,",",".");
                        echo "
                        <h3>Rp. $angka_format2</h3>";
                ?>

                <p>Sedekah</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
              <?php
                  $querypenerima = mysqli_query($connect,"SELECT COUNT(*) AS jumlah FROM penerima");
                  $dd = mysqli_fetch_array($querypenerima);

                  //tungitung
                  ?>
                  <?php
                        $angka = $dd['jumlah'];
                        echo "
                        <h3>$angka</h3>";
                ?>


                <p>Penerima</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
      </div>
</section>
        
		
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
 