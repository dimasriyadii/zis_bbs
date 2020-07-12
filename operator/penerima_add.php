<?php
include "../include/connect.php";
include "../include/session.php"; 

$id_penerima 	= $_POST["id_penerima"];
$nama	   		= $_POST["nama"];
$kelurahan		= $_POST["kelurahan"];
$rt			    = $_POST["rt"];
$uang		    = $_POST["uang"];
$beras		    = $_POST["beras"];
$status		    = $_POST["status"];


if ($add = mysqli_query($connect, "INSERT INTO tbl_penerima VALUES ('$id_penerima', '$nama', '$kelurahan', '$rt', '$uang', '$beras', '$status')")){
		header("Location: penerima.php");
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($connect));

?>