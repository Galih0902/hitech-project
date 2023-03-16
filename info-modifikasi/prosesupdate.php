<?php
session_start();
include "../config/koneksi.php";
?>
<?php
$filename=$_FILES['image']['name'];
$move=move_uploaded_file($_FILES['image']['tmp_name'],"foto/".$filename);
//get the value from form update
 $id	= $_POST['id_info'];
$kode_transaksi	= $_POST['kode'];
$pelanggan	= $_POST['pelanggan'];
$motor		= $_POST['motor'];
$pilihan	= $_POST['pilihan_modif'];
$status	= $_POST['status'];

//query for update data in database
 $query = "UPDATE tb_info SET kode_transaksi = '$kode_transaksi', pelanggan = '$pelanggan', motor = '$motor', pilihan_modif = '$pilihan', status_modifikasi = '$status', gambar = '$filename' WHERE id_info = '$id'" ;
 $hasil = mysql_query($query);
 echo"" .mysql_error();
 //see the result
 if ($hasil) {
    include "data_info.php";
	echo "<h4> Update Data Success </h4>";
}
?>