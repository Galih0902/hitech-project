<?php
include "../config/koneksi.php";	//koneksi ke server database

$id	= $_POST['kode_transaksi'];
$tanggal	= $_POST['tanggal'];
$pelanggan	= $_POST['pelanggan'];
$motor	= $_POST['motor'];
$pilihan	= $_POST['pilihan'];
$biaya	= $_POST['biaya'];
$keterangan	= $_POST['ket'];
$lama		= $_POST['lama'];
$tambah		= $_POST['tambah'];
$total	= $_POST['total'];
if( !empty ($id) && ($tanggal)  && ($pelanggan) && ($motor) && ($pilihan) && ($biaya) && ($keterangan) && ($lama) && ($total) ){
//Query Untuk Insert Data
$sqlSimpan	= "insert into tb_transaksi values('$id','$tanggal','$pelanggan','$motor','$pilihan','$biaya','$keterangan','$lama','$tambah','$total')";
$querySimpan	= mysql_query($sqlSimpan);
echo "" .mysql_error();
echo "<script type='text/javascript'>
      alert('Data Berhasil Disimpan...!!!');
      </script>";
      echo "<meta http-equiv='refresh' content='0; data_transaksi.php'>";
}
else
{
echo "<script type='text/javascript'>
      alert('Data Gagal Disimpan...!!!');
      </script>";
      echo "<meta http-equiv='refresh' content='0; add_transaksi.php'>";
}
?>