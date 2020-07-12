<?php

include "../include/connect.php";
include "../include/session.php"; 

$id_zakatf = $_GET['id_zakatf'];

// mysqli_query($connect, "DELETE FROM zakat_fitrah WHERE id_zakatf='$id_zakatf'");

// header("Location: zakats.php");
if($delete = mysqli_query ($connect, "DELETE FROM zakat WHERE id_zakatf='$id_zakatf'")){
	header("Location: zakats.php");
	exit();
}
die ("Terdapat Kesalahan : ".mysqli_error($connect));

?>