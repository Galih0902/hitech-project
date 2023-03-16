<?php
include "../config/koneksi.php";	//koneksi ke server database	
$idpelanggan		= $_POST['idpelanggan'];
$nama		= $_POST['pelanggan'];
$alamat		= $_POST['alamat'];
$telepon		= $_POST['telepon'];
if( !empty($idpelanggan) && ($nama) && ($alamat) && ($telepon)){
//Query Untuk Insert Data
$sqlSimpan	= "insert into tb_pelanggan values('$idpelanggan',
					   '$nama',
					   '$alamat',
					   '$telepon')";
$querySimpan	= mysql_query($sqlSimpan);
echo "<script type='text/javascript'>
      alert('Data Berhasil Disimpan...!!!');
      </script>";
      echo "<meta http-equiv='refresh' content='0; data_pelanggan.php'>";
}
else
{
echo "<script type='text/javascript'>
      alert('Data Gagal Disimpan...!!!');
      </script>";
      echo "<meta http-equiv='refresh' content='0; add_pelanggan.php'>";
}
?>