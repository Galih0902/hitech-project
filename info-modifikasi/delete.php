<?php
session_start();
include "../config/koneksi.php";
?>
<?php
$id = $_GET['id'];
 
$hasil = mysql_query("delete from tb_info where id_info='$id'") or die(mysql_error());
 //see the result
 if ($hasil) {
    include "data_info.php";
	echo "<h4> Delete Data Success </h4>";
}
?>