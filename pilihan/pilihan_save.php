<?php
include "../config/koneksi.php";	//koneksi ke server database

$no	= $_POST['no'];
$pilihan	= $_POST['pilihan'];
$biaya		= $_POST['biaya'];
$lama       =$_POST ['lama'];
$keterangan	= $_POST['keterangan'];
if( !empty($pilihan)){
//Query Untuk Insert Data
$sqlSimpan	= "insert into tb_pilihan values('$no',
                        '$pilihan',
					   '$biaya',
                       '$lama',
					   '$keterangan')";
$querySimpan	= mysql_query($sqlSimpan);
echo "<script type='text/javascript'>
      alert('Data Berhasil Disimpan...!!!');
      </script>";
      echo "<meta http-equiv='refresh' content='0; data_pilihan.php'>";
}
else
{
echo "<script type='text/javascript'>
      alert('Data Gagal Disimpan...!!!');
      </script>";
      echo "<meta http-equiv='refresh' content='0; add_pilihan.php'>";
}
?>