<?php
session_start();
include "../config/koneksi.php";
?>
<?php
//get the value from form update
 $id = $_POST['id'];
 $profil = $_POST['profil'];
 $contact = $_POST['contact'];

//query for update data in database
 $query = "UPDATE profil SET profil = '$profil', contact = '$contact' WHERE id = '$id'" ;
 $hasil = mysql_query($query);
 //see the result
 if ($hasil) {
    include "data_profil.php";
	echo "<h4> Update Data Success </h4>";
}
?>