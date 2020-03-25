<?php

include "../include/connect.php";
include "../include/session.php"; 

$id_infaq = $_GET['id_infaq'];

// mysqli_query($connect, "DELETE FROM zakat_fitrah WHERE id_infaq='$id_infaq'");

// header("Location: infaq.php");
if($delete = mysqli_query ($connect, "DELETE FROM infaq WHERE id_infaq='$id_infaq'")){
	header("Location: infaq.php");
	exit();
}
die ("Terdapat Kesalahan : ".mysqli_error($connect));

?>