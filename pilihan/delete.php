<?php
session_start();
include "../config/koneksi.php";
?>
<?php
$id = $_GET['no'];
 
$hasil = mysql_query("delete from tb_pilihan where no='$id'") or die(mysql_error());
 //see the result
 if ($hasil) {
    include "data_pilihan.php";
	echo "<h4> Delete Data Success </h4>";
}
?>