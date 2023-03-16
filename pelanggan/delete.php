<?php
session_start();
include "../config/koneksi.php";
?>
<?php
$id = $_GET['id_pelanggan'];
 
$hasil = mysql_query("delete from tb_pelanggan where id_pelanggan='$id'") or die(mysql_error());
 //see the result
 if ($hasil) {
    include "data_pelanggan.php";
	echo "<h4> Delete Data Success </h4>";
}
?>