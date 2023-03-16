<?php
include "../config/koneksi.php";	//koneksi ke server database	
$iduser		= $_POST['iduser'];
$username		= $_POST['username'];
$password		= $_POST['password'];
$nama_akun		= $_POST['nama'];
$level		= $_POST['level'];
if( !empty($iduser) && ($username) && ($password) && ($nama_akun)){
//Query Untuk Insert Data
$sqlSimpan	= "insert into tb_user values('$iduser',
					   '$username',
					   '$password',
					   '$nama_akun',
					   '$level')";
$querySimpan	= mysql_query($sqlSimpan);
echo "<script type='text/javascript'>
      alert('Data Berhasil Disimpan...!!!');
      </script>";
      echo "<meta http-equiv='refresh' content='0; data_user.php'>";
}
else
{
echo "<script type='text/javascript'>
      alert('Data Gagal Disimpan...!!!');
      </script>";
      echo "<meta http-equiv='refresh' content='0; add_user.php'>";
}
?>