<?php

include "../include/connect.php";
include "../include/session.php"; 

$id_users= $_GET['id_users'];

// mysqli_query($connect, "DELETE FROM zakat_fitrah WHERE id_zakatf='$id_zakatf'");

// header("Location: zakats.php");
if($delete = mysqli_query ($connect, "DELETE FROM user WHERE id_users='$id_users'")){
	header("Location: users.php");
	exit();
}
die ("Terdapat Kesalahan : ".mysqli_error($connect));

?>