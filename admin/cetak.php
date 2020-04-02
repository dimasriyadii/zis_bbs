<?php
include "../include/connect.php";
include "../include/session.php"; 

	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:login.php?pesan=gagal");
	}
 
$id_zakatf = $_GET['id_zakatf'];
// memanggil library FPDF
require('../assets/fpdf/fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('p','mm','A4');

// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);

//mencetak string
$pdf->Image('kop.jpg',10,10,189);


// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);

$queryzakat = mysqli_query($connect, "SELECT * FROM zakat_fitrah WHERE id_zakatf= '$id_zakatf'");
while ($zakat = mysqli_fetch_array($queryzakat)){

    $pdf->Image('kop.jpg',10,10,189);
    $pdf->Cell(35,32,'',25,26);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(190,7,'BUKTI PEMBAYARAN ZAKAT MASJID BABUSSALAM',0,1,'C');
// <<<<<<< HEAD
    $pdf->ln(13);

    
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(24,6,'Nama          :  ',0,0,'L');
    $pdf->Cell(0,6,$zakat['nama']);

    $pdf->ln(10);
    $pdf->Cell(27,6,'Alamat        :  ',0,0,'L');
    $pdf->Cell(0,6,$zakat['alamat']);
    
    $pdf->ln(10);
    $pdf->Cell(25,6,'Uang           :  ',0,0,'L');
    $pdf->Cell(0,6,$zakat['uang'],0,0);

    $pdf->ln(10);
    $pdf->Cell(30,6,'Beras          :  ',0,0,'L');
    $pdf->Cell(0,6, $zakat['beras'],0,0);
    $pdf->ln(15);

    $pdf->SetFont('Arial','B',10);
    $pdf->Cell(0,10,'Bandar Lampung, ',0,0,'L');
    $pdf->Cell(0,6,$zakat['tanggal'],0,L,'R');
    $pdf->ln(10);
    $pdf->SetFont('Arial','',10);

    $pdf->Cell(190,6,'PANITIA AMIL ZAKAT',0,1,'R');
    $pdf->ln(20);
    $pdf->Cell(190,6,'___________________',0,1,'R');


    
    // $pdf->ln(7);


    // $pdf->SetFont('Arial','B',10);
    // $pdf->Cell(20,6,'Tanggal      : ', 0,0);
    // $pdf->Cell(20,6,$zakat['tanggal']);

    // $pdf->ln(10);
    // $pdf->Cell(40,6,'Atas Nama :',0,0);
    // $pdf->Cell(40,6,$zakat['nama']);

    // $pdf->ln(10);
    // $pdf->Cell(27,6,'Alamat        :');
    // $pdf->Cell(27,6,$zakat['alamat'],0,0);
    
    // $pdf->ln(10);
    // $pdf->Cell(25,6,'Uang           : ');
    // $pdf->Cell(25,6,$zakat['uang'],0,0);

    // $pdf->ln(10);
    // $pdf->Cell(30,6,'Beras          : ');
    // $pdf->Cell(30,6, $zakat['beras']);
    // $pdf->ln(20);

    // $pdf->Cell(190,6,'PANITIA AMIL ZAKAT',0,1,'R');
    // $pdf->ln(20);
    // $pdf->Cell(190,6,'___________________',0,1,'R');
    }

$pdf->Output();
?>