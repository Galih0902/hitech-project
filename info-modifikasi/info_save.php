<?php
include "../config/koneksi.php";	//koneksi ke server database
$id	= $_POST['id_info'];
$kode_transaksi	= $_POST['kode'];
$pelanggan	= $_POST['pelanggan'];
$motor		= $_POST['motor'];
$pilihan	= $_POST['pilihan'];
$status	= $_POST['status'];

if (isset($_POST['save']))
 $fileName = $_FILES['image']['name'];
if(! empty ($id)){

//Query Untuk Insert Data
$sqlSimpan	= "insert into tb_info values('$id',
                                '$kode_transaksi',
                                '$pelanggan',
                                '$motor',
                                '$pilihan',
                                '$status',
                                '$fileName')";
$querySimpan	= mysql_query($sqlSimpan);
    move_uploaded_file($_FILES['image']['tmp_name'], "foto/".$_FILES['image']['name']);
echo "<script type='text/javascript'>
      alert('Data Berhasil Disimpan...!!!');
      </script>";
      echo "<meta http-equiv='refresh' content='0; data_info.php'>";
}
else
{
echo "<script type='text/javascript'>
      alert('Data Gagal Disimpan...!!!');
      </script>";
      echo "<meta http-equiv='refresh' content='0; add_info.php'>";
}
?>