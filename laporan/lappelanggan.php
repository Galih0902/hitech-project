<?php
include "./fpdf/fpdf.php";
include "../config/koneksi.php";
include "../user/cekpimpinan.php";
 class PDF extends FPDF{
// Load data = Pecah Array
function LoadData($tabel){
$data = array();
if (is_array($tabel)) {
foreach($tabel as $hasil)
 $data[] = explode('|',$hasil);
}
return $data;
}
// Fungsi Membuat Tabel
function FancyTable($header, $data){
// Colors, line width and bold font
$this->Image('hitech.png',10,12,30);
$this->Cell(0,4,'LAPORAN PELANGGAN','0',1,'C');
$this->Cell(0,4,'HI-TECH MODIFICATION','0',1,'C');
$this->Cell(0,6,'Jl. Gunung Pangilun Padang','0',1,'C');
$this->Ln(5);
$this->SetFillColor(139, 69, 19);
$this->SetTextColor(255);
$this->SetDrawColor(222, 184, 135);
$this->SetFont('','');
// Lebar Header Sesuaikan Jumlahnya dengan Jumlah Field Tabel Database
$w = array(8, 25, 45, 75, 33);
for($i=0;$i<count($header);$i++)
$this->Cell($w[$i],5,$header[$i],1,0,'C',true);
$this->Ln();
// Color and font restoration
$this->SetFillColor(24, 222, 179);
$this->SetTextColor(0);
$this->SetFont('');
// Data
$fill = false;
foreach($data as $row){
// Field Dari Database Yang Ingin ditampilkan
// $this->Cell($w[Ubah Ini],6,$row[Ubah Ini],'LR',0,'L',$fill);
$this->Cell($w[0],6,$row[0],'LR',0,'L',$fill);
$this->Cell($w[1],6,$row[1],'LR',0,'L',$fill);
$this->Cell($w[2],6,$row[2],'LR',0,'L',$fill);
$this->Cell($w[3],6,$row[3],'LR',0,'L',$fill);
$this->Cell($w[4],6,$row[4],'LR',0,'L',$fill);
$this->Ln();
$fill = !$fill;
}
// Closing line
$this->Cell(array_sum($w),0,'','T');
}
}

 $pdf = new PDF();
// Pendefinisian Header Tabel

 $header = array('No','ID Pelanggan','Nama Pelanggan','Alamat','Telepon');
// Load Data dari Database Memilih Data Berdasarkan Tanggal yang diinput
 $dataku = mysql_query("select * from tb_pelanggan order by id_pelanggan");
$i = 1;
 while ($tampil=mysql_fetch_array($dataku)){
     
// Simpan Kedalam Array dengan Batasan |
@$tabel[] .= $i++."|".$tampil['id_pelanggan']."|".$tampil['nama_pelanggan']."|".$tampil['alamat']."|".$tampil['telepon'];
}

	 // Cetak Laporan
$data = $pdf->LoadData($tabel);
$pdf->SetFont('Arial','B',10);
$pdf->AddPage();
$pdf->FancyTable($header,$data);

$pdf->Output();
?>