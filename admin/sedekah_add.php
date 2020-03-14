<?php
include "../include/connect.php";
include "../include/session.php"; 

$id_sedekah 	= $_POST["id_sedekah"];
$tanggal 	    = date("Y-m-d");
$nama	   		= $_POST["nama"];
$alamat 		= $_POST["alamat"];
$jumlah         = $_POST["jumlah"];

if ($add = mysqli_query($connect, "INSERT INTO sedekah VALUES ('$id_sedekah', '$tanggal', '$nama', '$alamat', '$jumlah')")){
		header("Location: sedekah.php");
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($connect));

?>