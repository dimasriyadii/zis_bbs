<?php
include "../include/connect.php";
include "../include/session.php"; 

$id_zakatf 	    = $_POST["id_zakatf"];
$tanggal 	    = date("Y-m-d");
$nama	   		= $_POST["nama"];
$alamat 		= $_POST["alamat"];
$uang 	        = $_POST["uang"];
$beras			= $_POST["beras"];

if ($add = mysqli_query($connect, "INSERT INTO zakat_fitrah VALUES ('$id_zakatf', '$tanggal', '$nama', '$alamat', '$uang', '$beras')")){
		header("Location: zakats.php");
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($connect));

?>