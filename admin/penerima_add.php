<?php
include "../include/connect.php";
include "../include/session.php"; 

$id_infaq 	    = $_POST["id_penerima"];
$nama	   		= $_POST["nama"];
$kelurahan		= $_POST["kelurahan"];
$rt			    = $_POST["rt"];
$uang		    = $_POST["uang"];
$beras		    = $_POST["beras"];
$status		    = $_POST["status"];

if(isset($_POST['simpan'])){
    if(empty($nama)){    //jika nama kosong maka muncul pesan
        $error="<p style='color:#F00;'>* Masukan Nama Produk</p>";
    }
    elseif(empty($kelurahan)){ //jika kategori kosong maka muncul pesan
        $error="<p style='color:#F00;'>* Pilih Kategori Produk</p>";
	}
	else{

		$save=mysqli_query($conect, "INSERT INTO tbl_penerima values ('$id_penerima', '$nama', '$kelurahan', '$rt', '$uang', '$beras', '$status')");
		if($save){ //jika simpan berhasil maka muncul pesan dan menuju ke halaman produk
			echo "<script>alert('Data Produk Berhasil disimpan ke database');document.location='penerima.php'</script>";
		}else{  //jika simpan gagal maka muncul pesan
			 echo "<script>alert('Proses simpan gagal, coba kembali');document.location='penerima.php'</script>";
		}
	}
	}
		

// if ($add = mysqli_query($connect, "INSERT INTO tbl_penerima VALUES ('$id_penerima', '$nama', '$kelurahan', '$rt', '$uang', '$beras', '$status')")){
// 		header("Location: penerima.php");
// 		exit();
// 	}
die ("Terdapat kesalahan : ". mysqli_error($connect));

?>