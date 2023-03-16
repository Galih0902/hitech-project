<?php
session_start();
include "../config/koneksi.php";
?>
<?php
//get the value from form update
 $kode = $_POST['kode_transaksi'];
 $tgl = $_POST['tanggal'];
 $pelanggan = $_POST['pelanggan'];
 $motor = $_POST['motor'];
 $pilih = $_POST['pilihan_modif'];
 $biaya = $_POST['biaya'];
 $lama = $_POST['lama_pengerjaan'];
 $ket = $_POST['keterangan'];
 $tbiaya = $_POST['tambahan_biaya'];
 $total = $_POST['total'];

//query for update data in database
 $query = "UPDATE tb_transaksi SET tanggal = '$tgl', pelanggan = '$pelanggan', motor = '$motor', pilihan_modif = '$pilih', biaya = '$biaya', lama_pengerjaan = '$lama', keterangan = '$ket', tambahan_biaya = '$tbiaya', total_biaya = '$total' WHERE kode_transaksi = '$kode'" ;
 $hasil = mysql_query($query);
 //see the result
 if ($hasil) {
    include "data_transaksi.php";
	echo "<h4> Update Data Success </h4>";
}
?>