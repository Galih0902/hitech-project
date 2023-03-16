<?php
session_start();
include "../config/koneksi.php";
?>
<?php
$id = $_GET['id'];
 
$hasil = mysql_query("delete from perawatan where id='$id'") or die(mysql_error());
 //see the result
 if ($hasil) {
    include "data_perawatan.php";
	echo "<h4> Delete Data Success </h4>";
}
?>