
<?php
include "../include/connect.php";
// include "../include/session.php";

$id_penerima	= $_POST["id_penerima"];
$nama	 		= $_POST["nama"];
$kelurahan		= $_POST["kelurahan"];
$rt				= $_POST["rt"];
$uang			= $_POST["uang"];
$beras			= $_POST["beras"];
$status			= $_POST["status"];

if ($edit = mysqli_query($connect, "UPDATE tbl_penerima SET id_penerima='$id_penerima', 
nama='$nama', kelurahan='$kelurahan', rt='$rt', uang='$uang', beras='$beras', status='$status'  WHERE id_penerima='$id_penerima'")){
		header("location: penerima.php");
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($connect));

?>
