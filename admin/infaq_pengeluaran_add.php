<?php
include "../include/connect.php";
include "../include/session.php"; 

$id_pengeluaran = $_POST["id_pengeluaran"];
$tanggal 	    = date("Y-m-d");
$keperluan	   		= $_POST["keperluan"];
$jumlah 	    = $_POST["jumlah"];

if ($add = mysqli_query($connect, "INSERT INTO infaq_pengeluaran VALUES ('$id_pengeeluaran', '$tanggal', '$keperluan', '$jumlah')")){
		header("Location: infaq_pengeluaran.php");
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($connect));

?>