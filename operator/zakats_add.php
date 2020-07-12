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

// if ($nilai >= 9) {
// 	echo 'Sangat Baik';
// } else if ($nilai < 9 && $nilai >= 7) {
// 	echo 'Baik';
// } else if ($nilai < 7 && $nilai >= 5) {
// 	echo 'Sedang';
// } else {
// 	echo 'Kurang';
// }

// if (!empty($_POST["mail"])) {
//     echo "Yes, mail is set";    
// } else {  
//     echo "No, mail is not set";
// }

// if($_POST['submit']){

// }


// if (!empty($_POST["beras"])) {
//     echo "Masukin Beras";    
// } else {  
//     echo "No, mail is not set";
// }

// if (isset($_POST['uang']) || isset($_POST['beras']))
// {
//    $uang=$_GET['uang'];
//    $beras=$_GET['beras'];
// }
// else
// {
//    die("Maaf, anda harus mengakses halaman ini dari form.html");
// }
  
// if(empty($uang) O)
// {
//    die("Maaf, anda harus mengisi nama");
// }
// else
// {
//    if (is_numeric($nama))
//    {
//       die("Maaf, nama harus berupa huruf");
//    }
//    else
//    {
//       echo "Nama: $nama <br /> Email: $email";
//    }
// }

?>