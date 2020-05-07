<?php
$host = "fdb22.awardspace.net";
$user = "3183666_sibooks";
$pass = "sibooks1";
$name = "3183666_sibooks";

$connect = mysqli_connect($host, $user, $pass) or die("Koneksi ke database Gagal!");
mysqli_select_db($connect, $name) or die("Tidak ada database yang dipilih");
?>