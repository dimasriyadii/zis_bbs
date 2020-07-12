<?php
include "../include/connect.php";
include "../include/session.php"; 
session_start();
 
// cek apakah yang mengakses halaman ini sudah login
if($_SESSION['level']==""){
    header("location:login.php?pesan=gagal");
}

$id_infaq = $_GET['id_infaq'];
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

$queryinfaq = mysqli_query($connect, "SELECT * FROM infaq WHERE id_infaq= '$id_infaq'");
while ($infaq = mysqli_fetch_array($queryinfaq)){

    $pdf->Image('kop.jpg',10,10,189);
    $pdf->Cell(35,32,'',25,26);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(190,7,'BUKTI PEMBAYARAN INFAQ MASJID BABUSSALAM',0,1,'C');
    $pdf->ln(13);

    
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(24,6,'Atas Nama  :  ',0,0,'R');
    $pdf->Cell(0,6,$infaq['nama']);

    $pdf->ln(10);
    $pdf->Cell(27,6,'Alamat        :  ',0,0,'L');
    $pdf->Cell(0,6,$infaq['alamat']);
    
    $pdf->ln(10);
    $pdf->Cell(25,6,'Uang           :  ');
    $pdf->Cell(0,6,$infaq['jumlah'],0,0,'L');

    $pdf->ln(15);

    $pdf->SetFont('Arial','B',10);
    $pdf->Cell(0,10,'Bandar Lampung, ',0,0,'L');
    $pdf->Cell(0,10,$infaq['tanggal'],0,0,'R');
    $pdf->ln(10);
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(190,6,'PANITIA AMIL ZAKAT',0,1,'R');
    $pdf->ln(20);
    $pdf->Cell(190,6,'___________________',0,1,'R');
    }

$pdf->Output();
?>