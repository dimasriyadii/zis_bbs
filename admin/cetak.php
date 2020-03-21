<?php
include "../include/connect.php";
include "../include/session.php"; 
// memanggil library FPDF
require('fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('p','mm','A4');
$id_zakat = $_GET["id_zakat"];
$queryzakat = mysqli_query($connect, "SELECT * FROM zakat_fitrah WHERE id_zakatf='$id_zakatf'");
if($queryzakat == false) {
    die("Terjadi Kesalahan : ".mysqli_error($connect));
}
while ($zakat = mysqli_fetch_array($queryzakat)){
    

    
}
   
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);

$pdf->Image('kop.jpg',10,10,189);
$pdf->Cell(35,32,'',25,26);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'BUKTI PEMBAYARAN ZAKAT MASJID BABUSSALAM',0,1,'C');
$pdf->ln(7);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(20,6,'Tanggal: ',0,L)['tanggal'];
$pdf->ln(10);
$pdf->Cell(40,6,'Atas Nama: ',0,L);
$pdf->ln(10);
$pdf->Cell(27,6,'Alamat: ',0,L);
$pdf->ln(10);
$pdf->Cell(25,6,'Uang: ',0,L);
$pdf->ln(10);
$pdf->Cell(30,6,'Beras: ',0,L);
$pdf->ln(20);
$pdf->Cell(190,6,'PANITIA AMIL ZAKAT',0,1,'R');
$pdf->ln(20);
$pdf->Cell(190,6,'___________________',0,1,'R');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);




$pdf->Output();
?>