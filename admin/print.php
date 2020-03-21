<?php
include "../include/connect.php";
include "../include/session.php"; 
// memanggil library FPDF
require('fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('p','mm','A4');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);

$pdf->Image('kop.jpg',10,10,189);
$pdf->Cell(35,32,'',25,26);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'BUKTI PEMBAYARAN ZAKAT MASJID BABUSSALAM',0,1,'C');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(20,6,'Tanggal',1,0,C);
$pdf->Cell(40,6,'Atas Nama',1,0,C);
$pdf->Cell(27,6,'Alamat',1,0,C);
$pdf->Cell(25,6,'Uang',1,1,C);
$pdf->Cell(30,6,'Beras',1,1,C);

$pdf->SetFont('Arial','',10);

$zakat = mysqli_query($connect, "select * from zakat_fitrah");
while ($row = mysqli_fetch_array($zakat)){
    $pdf->Cell(20,6,$row['tanggal'],1,0,L);
    $pdf->Cell(40,6,$row['nama'],1,0,L);
    $pdf->Cell(27,6,$row['alamat'],1,0,L);
    $pdf->Cell(25,6,$row['uang'],1,1,L);
    $pdf->Cell(30,6,$row['beras'],1,1,L); 
}

$pdf->Output();
?>