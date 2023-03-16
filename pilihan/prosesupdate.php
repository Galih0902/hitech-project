<?php
session_start();
include "../config/koneksi.php";
?>
<?php
//get the value from form update
$no	= $_POST['no'];
$pilihan	= $_POST['pilihan'];
$biaya		= $_POST['biaya'];
$lama       = $_POST['lama'];
$keterangan	= $_POST['keterangan'];

//query for update data in database
 $query = "UPDATE tb_pilihan SET pilihan = '$pilihan', biaya = '$biaya', lama_pengerjaan = '$lama', keterangan = '$keterangan' WHERE no = '$no'" ;
 $hasil = mysql_query($query);
echo "" .mysql_error();
 //see the result
 if ($hasil) {
    include "data_pilihan.php";
	echo "<h4> Update Data Success </h4>";
}
?>