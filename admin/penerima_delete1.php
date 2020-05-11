<?php

include "../include/connect.php";
include "../include/session.php"; 

$id_penerima = $_GET['id_penerima'];

// mysqli_query($connect, "DELETE FROM zakat_fitrah WHERE id_infaq='$id_infaq'");

// header("Location: infaq.php");
if($delete = mysqli_query ($connect, "DELETE FROM tbl_penerima WHERE id_penerima='$id_penerima'")){
	header("Location: penerima.php");
	exit();
}
die ("Terdapat Kesalahan : ".mysqli_error($connect));


?>