<?php
session_start();
include "../config/koneksi.php";
?>
<?php
//get the value from form update
 $id = $_POST['id'];
 $judul = $_POST['judul'];
 $isi = $_POST['isi'];

//query for update data in database
 $query = "UPDATE perawatan SET judul = '$judul', isi = '$isi' WHERE id = '$id'" ;
 $hasil = mysql_query($query);
 //see the result
 if ($hasil) {
    include "data_perawatan.php";
	echo "<h4> Update Data Success </h4>";
}
?>