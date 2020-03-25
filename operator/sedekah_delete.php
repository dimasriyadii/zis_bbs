<?php

include "../include/connect.php";
include "../include/session.php"; 

$id_sedekah = $_GET['id_sedekah'];

// mysqli_query($connect, "DELETE FROM zakat_fitrah WHERE id_sedekah='$id_sedekah'");

// header("Location: sedekah.php");
if($delete = mysqli_query ($connect, "DELETE FROM sedekah WHERE id_sedekah='$id_sedekah'")){
	header("Location: sedekah.php");
	exit();
}
die ("Terdapat Kesalahan : ".mysqli_error($connect));

?>