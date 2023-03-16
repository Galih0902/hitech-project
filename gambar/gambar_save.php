<?php
include "../config/koneksi.php";	//koneksi ke server database

$judul=$_POST['judul'];
//$tgl= date('d-M-Y H:i:s');
//echo $tgl.$judu;

if (isset($_POST['simpan']))
 $fileName = $_FILES['image']['name'];
if(! empty($fileName) && ($judul)){
    // Simpan ke Database
 $sql = "insert into upload Values (NULL, '$judul', '$fileName')";
 mysql_query($sql);
 // Simpan di Folder Gambar
 move_uploaded_file($_FILES['image']['tmp_name'], "gallery/".$_FILES['image']['name']);
 echo "<script type='text/javascript'>
      alert('Data Berhasil Disimpan...!!!');
      </script>";
      echo "<meta http-equiv='refresh' content='0; data_gambar.php'>";
}
else
{
echo "<script type='text/javascript'>
      alert('Data Gagal Disimpan...!!!');
      </script>";
      echo "<meta http-equiv='refresh' content='0; add_gambar.php'>";
}
?>