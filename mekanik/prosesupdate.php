<?php
session_start();
include "../config/koneksi.php";
?>
<?php
//get the value from form update
 $id_mekanik = $_POST['id_mekanik_admin'];
 $mekanik = $_POST['nama'];
 $alamat = $_POST['alamat'];
 $telepon = $_POST['telepon'];
 $status = $_POST['status'];

//query for update data in database
 $query = "UPDATE tb_mekanik_admin SET nama = '$mekanik', alamat = '$alamat', telepon = '$telepon' , status = '$status' WHERE id_mekanik_admin = '$id_mekanik'" ;
 $hasil = mysql_query($query);
 echo"" .mysql_error();
 //see the result
 if ($hasil) {
    include "data_mekanik.php";
	echo "<h4> Update Data Success </h4>";
}
?>