<?php
include "../include/connect.php";
include "../include/session.php"; 

$id_infaq 	    = $_POST["id_infaq"];
$tanggal 	    = date("Y-m-d");
$nama	   		= $_POST["nama"];
$alamat 		= $_POST["alamat"];
$jumlah 	    = $_POST["jumlah"];

if ($add = mysqli_query($connect, "INSERT INTO infaq VALUES ('$id_infaq', '$tanggal', '$nama', '$alamat', '$jumlah')")){
		header("Location: infaq.php");
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($connect));

?>