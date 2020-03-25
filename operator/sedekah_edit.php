
<?php
include "../include/connect.php";
// include "../include/session.php";

$id_sedekah		= $_POST["id_sedekah"];
$tanggal	 	= $_POST["tanggal"];
$nama			= $_POST["nama"];
$alamat			= $_POST["alamat"];
$jumlah			= $_POST["jumlah"];

if ($edit = mysqli_query($connect, "UPDATE sedekah SET id_sedekah='$id_sedekah', 
tanggal='$tanggal', nama='$nama', alamat='$alamat', jumlah='$jumlah' WHERE id_sedekah='$id_sedekah'")){
		header("Location: sedekah.php");
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($connect));

?>
