<?php
session_start();
include "../config/koneksi.php";

?>
<body onload='javascript:window:print()'>
<?php
$kode_transaksi = $_GET['kode_transaksi']; //get the no which will updated
$query = "SELECT * FROM tb_transaksi WHERE kode_transaksi = $kode_transaksi"; //get the data that will be updated
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);
?>

<header>

                
            </header>
<form method="post" action="" target='_blank'>
    
<table align="center">
    <hr>
    <h3 align="center"> Bukti Transaksi <sub><img src="../images/hitech.png"  width="60" ></sub></h3>

    <tr>
  	<td > Kode Transaksi </td>
    <td>:</td>
    <td> <input value="<?php echo $data['kode_transaksi']; ?>" readonly> </td>
  	<td > Tanggal </td>
    <td >:</td>
    <td > <input type="text"  name="tanggal" id="tanggal" value="<?php echo $data['tanggal']; ?>" readonly> </td>
  </tr>
    <hr></hr>
  <tr>
  	<td>Pelanggan</td>
    <td>:</td>
    <td> <input type="text" name="pelanggan" value="<?php echo $data['pelanggan']; ?>" readonly> </td>
  	<td>Motor</td>
    <td>:</td>
    <td> <input type="text" name="motor" value="<?php echo $data['motor']; ?>" readonly> </td>
  </tr>
    <hr></hr>
    <tr>
  	<td> Pilihan Modifikasi </td>
    <td>:</td>
    <td> <input type="text" name="pilihan_modif"  value="<?php echo $data['pilihan_modif']; ?>" readonly> </td>
  	<td> Biaya </td>
    <td>:</td>
    <td > <input type="int" name="biaya" id="biaya" onkeyup="plus()" value="Rp. <?php echo number_format($data['biaya'],2,",",".") ?>" readonly> </td>
  </tr>

  <tr>
  	<td>Lama Pengerjaan</td>
    <td>:</td>
    <td> <input type="text" name="lama_pengerjaan" value="<?php echo $data['lama_pengerjaan']; ?>" readonly> </td>
  	<td>Keterangan</td>
    <td>:</td>
    <td> <textarea name="keterangan" cols="40" rows="4" readonly><?php echo $data['keterangan']; ?></textarea> </td>
  </tr>
    
     <tr>
  	<td> Tambahan Biaya </td>
    <td>:</td>
    <td> <input type="int" id="tambah" name="tambahan_biaya" onkeyup="plus()" value="Rp. <?php echo number_format($data['tambahan_biaya'],2,",",".") ?>" readonly> </td>
    <td><b>TOTAL</b></td>
    <td>:</td>
    <td><b>Rp. <?php echo number_format($data['total_biaya'],2,",",".") ?></b></td>
  </tr>
</table>
<hr>
</form>
</form>