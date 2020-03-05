<?php
include "../include/connect.php";

$id_zakatf		= $_POST["id_zakatf"];
$tanggal	 	= $_POST["tanggal"];
$nama			= $_POST["nama"];
$alamat			= $_POST["alamat"];
$uang			= $_POST["uang"];
$beras			= $_POST["beras"];

if ($edit = mysqli_query($connect, "UPDATE zakat_fitrah SET id_zakatf='$id_zakatf', tanggal='$tanggal', nama='$nama', alamat='$alamat', uang='$uang', beras='$beras' WHERE id_zakatf='$id_zakatf'")){
		header("Location: zakats.php");
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($connect));

?>