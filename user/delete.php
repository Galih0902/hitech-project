<?php
session_start();
include "../config/koneksi.php";
?>
<?php
$id = $_GET['id_user'];
 
$hasil = mysql_query("delete from tb_user where id_user='$id'") or die(mysql_error());
 //see the result
 if ($hasil) {
    include "data_user.php";
	echo "<h4> Delete Data Success </h4>";
}
?>