<?php
include "../include/connect.php";
// include "../include/session.php";

// session_start();
 
// // cek apakah yang mengakses halaman ini sudah login
// if($_SESSION['level']==""){
// 	header("location:login.php?pesan=gagal");
// }

$id_zakatf		= $_POST["id_zakatf"];
$tanggal	 	= $_POST["tanggal"];
$nama			= $_POST["nama"];
$alamat			= $_POST["alamat"];
$uang			= $_POST["uang"];
$beras			= $_POST["beras"];

if ($edit = mysqli_query($connect, "UPDATE zakat SET id_zakatf='$id_zakatf', 
tanggal='$tanggal', nama='$nama', alamat='$alamat', uang='$uang',
beras='$beras'  WHERE id_zakatf='$id_zakatf'")){
		header("location: zakats.php");
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($connect));

?>
