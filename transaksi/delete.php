<?php
session_start();
include "../config/koneksi.php";
?>
<?php
$id = $_GET['kode_transaksi'];
 
$hasil = mysql_query("delete from tb_transaksi where kode_transaksi='$id'") or die(mysql_error());
 //see the result
 if ($hasil) {
    include "data_transaksi.php";
	echo "<h4> Delete Data Success </h4>";
}
?>