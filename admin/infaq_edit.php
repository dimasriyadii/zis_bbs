
<?php
include "../include/connect.php";
// include "../include/session.php";

$id_infaq		= $_POST["id_infaq"];
$tanggal	 	= $_POST["tanggal"];
$nama			= $_POST["nama"];
$alamat			= $_POST["alamat"];
$jumlah			= $_POST["jumlah"];

if ($edit = mysqli_query($connect, "UPDATE infaq SET id_infaq='$id_infaq', 
tanggal='$tanggal', nama='$nama', alamat='$alamat', jumlah='$jumlah' WHERE id_infaq='$id_infaq'")){
		header("location: infaq.php");
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($connect));

?>
