<?php
session_start();
include "../config/koneksi.php";
?>
<?php
$id = $_GET['id'];
 
$hasil = mysql_query("delete from tb_mekanik_admin where id_mekanik_admin='$id'") or die(mysql_error());
 //see the result
 if ($hasil) {
    include "data_mekanik.php";
	echo "<h4> Delete Data Success </h4>";
}
?>