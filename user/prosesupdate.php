<?php
session_start();
include "../config/koneksi.php";
?>
<?php
//get the value from form update
 $id_user = $_POST['id_user'];
 $username = $_POST['username'];
 $nama_akun = $_POST['nama_akun'];
 $password = $_POST['password'];
 $level = $_POST['level'];

//query for update data in database
 $query = "UPDATE tb_user SET username = '$username', nama_akun = '$nama_akun', password = '$password', level = '$level' WHERE id_user = '$id_user'" ;
 $hasil = mysql_query($query);
 echo"" .mysql_error();
 //see the result
 if ($hasil) {
    include "data_user.php";
	echo "<h4> Update Data Success </h4>";
}
?>