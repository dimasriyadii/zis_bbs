<?php

include "../include/connect.php";
include "../include/session.php"; 

$id_pengeluaran = $_GET['id_pengeluaran'];

// mysqli_query($connect, "DELETE FROM zakat_fitrah WHERE id_infaq='$id_infaq'");
if($delete = mysqli_query ($connect, "DELETE FROM infaq_pengeluaran WHERE id_pengeluaran='$id_pengeluaran'")){
	header("Location: infaq_pengeluaran.php");
	exit();
}
die ("Terdapat Kesalahan : ".mysqli_error($connect));

?>