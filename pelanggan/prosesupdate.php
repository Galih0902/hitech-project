<?php
session_start();
include "../config/koneksi.php";
?>
<?php
//get the value from form update
 $id_pelanggan = $_POST['id_pelanggan'];
 $nama_pelanggan = $_POST['nama_pelanggan'];
 $alamat = $_POST['alamat'];
 $telepon = $_POST['telepon'];

//query for update data in database
 $query = "UPDATE tb_pelanggan SET nama_pelanggan = '$nama_pelanggan', alamat = '$alamat', telepon = '$telepon' WHERE id_pelanggan = '$id_pelanggan'" ;
 $hasil = mysql_query($query);
 //see the result
 if ($hasil) {
    include "data_pelanggan.php";
	echo "<h4> Update Data Success </h4>";
}
?>