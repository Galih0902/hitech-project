<?php
include "../config/koneksi.php";	//koneksi ke server database	
$id_mekanik		= $_POST['id_mekanik_admin'];
$nama		= $_POST['mekanik'];
$alamat		= $_POST['alamat'];
$telepon		= $_POST['telepon'];
$status		= $_POST['status'];
if( !empty($id_mekanik) && ($nama) && ($alamat) && ($telepon) && (status)){
//Query Untuk Insert Data
$sqlSimpan	= "insert into tb_mekanik_admin values('$id_mekanik',
					   '$nama',
					   '$alamat',
					   '$telepon',
					   '$status')";
$querySimpan	= mysql_query($sqlSimpan);
echo "<script type='text/javascript'>
      alert('Data Berhasil Disimpan...!!!');
      </script>";
      echo "<meta http-equiv='refresh' content='0; data_mekanik.php'>";
}
else
{
echo "<script type='text/javascript'>
      alert('Data Gagal Disimpan...!!!');
      </script>";
      echo "<meta http-equiv='refresh' content='0; add_mekanik.php'>";
}
?>