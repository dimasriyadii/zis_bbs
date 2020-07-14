
<?php
include "../include/connect.php";
// include "../include/session.php";

$id_pengeluaran = $_POST["id_pengeluaran"];
$tanggal	 	= $_POST["tanggal"];
$keperluan	  `	= $_POST["keperluan"];
$jumlah 	    = $_POST["jumlah"];

if ($edit = mysqli_query($connect, "UPDATE infaq_pengeluaran SET id_pengeluaran='$id_pengeluaran', 
tanggal='$tanggal', keperluan='$keperluan', jumlah='$jumlah'  WHERE id_pengeluaran='$id_pengeluaran'")){
		header("location: infaq_pengeluaran.php");
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($connect));

?>
