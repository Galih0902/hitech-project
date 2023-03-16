<?php
session_start();
include "../config/koneksi.php";
?>
<?php
$id = $_GET['id'];
 
$hasil = mysql_query("delete from event where id='$id'") or die(mysql_error());
 //see the result
 if ($hasil) {
    include "data_event.php";
	echo "<h4> Delete Data Success </h4>";
}
?>