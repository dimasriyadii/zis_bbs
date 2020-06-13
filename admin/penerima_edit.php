
<?php
include "../include/connect.php";
// include "../include/session.php";

$id_infaq		= $_POST["id_infaq"];
$tanggal	 	= $_POST["tanggal"];
$nama			= $_POST["nama"];
$alamat			= $_POST["alamat"];
$jumlah			= $_POST["jumlah"];

if ($edit = mysqli_query($connect, "UPDATE tbl_penerima SET id_penerima='$id_penerima', 
nama='$nama', kelurahan='$kelurahan', rt='$rt', uang='$uang', beras='$beras' WHERE id_penerima='$id_penerima'")){
		header("location: penerima.php");
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($connect));

?>
