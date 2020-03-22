<!-- <?php
// memanggil library FPDF
require('fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('p','mm','A4');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string 
$pdf->Cell(190,7,'SEKOLAH MENENGAH KEJURUSAN NEEGRI 2 LANGSA',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'DAFTAR SISWA KELAS IX JURUSAN REKAYASA PERANGKAT LUNAK',0,1,'C');

// Memberikan space kebawah agar tidak terlalu rapat
//mencetak string
$pdf->Image('kop.jpg',10,10,189);
$pdf->Cell(35,32,'',25,26);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'BUKTI PEMBAYARAN ZAKAT MASJID BABUSSALAM',0,1,'C');
$pdf->ln(7);
$pdf->SetFont('Arial','B',10);

$pdf->Cell(20,6,'Tanggal: ',0,L);
$pdf->ln(10);


$pdf->Cell(20,6,'Tanggal',1,0);
$pdf->Cell(85,6,'NAMA MAHASISWA',1,0);
$pdf->Cell(27,6,'NO HP',1,0);
$pdf->Cell(25,6,'TANGGAL LHR',1,1);

$pdf->SetFont('Arial','',10);

include "../include/connect.php";
include "../include/session.php"; 

$mahasiswa = mysqli_query($connect, "select * from zakat_fitrah");
while ($row = mysqli_fetch_array($mahasiswa)){
    $pdf->Cell(20,6,$zakat['tanggal'],0,L);
    $pdf->Cell(40,6,$zakat['nama'],0,L);
    $pdf->Cell(27,6,$zakat['alamat'],0,L);
    $pdf->Cell(25,6,$zakat['uang'],0,L);
    $pdf->Cell(30,6,$zakat['beras'],0,L);
//     $pdf->Cell(20,6,$row['tanggal'],1,0);
//     $pdf->Cell(85,6,$row['nama'],1,0);
//     $pdf->Cell(27,6,$row['alamat'],1,0);
//     $pdf->Cell(25,6,$row['uang'],1,1); 
//     $pdf->Cell(25,6,$row['beras'],1,1); 
 }

$pdf->Output();
?> -->



<?php
include "../include/connect.php";
include "../include/session.php"; 

$id_zakatf = $_GET['id_zakatf'];
// memanggil library FPDF
require('fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('p','mm','A4');

// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);

//mencetak string
$pdf->Image('kop.jpg',10,10,189);
$pdf->Cell(35,32,'',25,26);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'BUKTI PEMBAYARAN ZAKAT MASJID BABUSSALAM',0,1,'C');
$pdf->ln(7);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(20,6,'Tanggal      : ',0,0);
$pdf->ln(10);
$pdf->Cell(40,6,'Atas Nama : ',0,0);
$pdf->ln(10);
$pdf->Cell(27,6,'Alamat        : ',0,0);
$pdf->ln(10);
$pdf->Cell(25,6,'Uang           : ',0,0);
$pdf->ln(10);
$pdf->Cell(30,6,'Beras          : ',0,0);
$pdf->ln(20);
$pdf->Cell(190,6,'PANITIA AMIL ZAKAT',0,1,'R');
$pdf->ln(20);
$pdf->Cell(190,6,'___________________',0,1,'R');



// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);

$queryzakat = mysqli_query($connect, "SELECT * FROM zakat_fitrah WHERE id_zakatf= '$id_zakatf'");
while ($zakat = mysqli_fetch_array($queryzakat)){
    $pdf->Cell(20,6,$zakat['tanggal'],0,0);
    $pdf->Cell(40,6,$zakat['nama'],0,0);
    $pdf->Cell(27,6,$zakat['alamat'],0,0);
    $pdf->Cell(25,6,$zakat['uang'],0,0);
    $pdf->Cell(30,6,$zakat['beras'],0,0);
}

$pdf->Output();
?>