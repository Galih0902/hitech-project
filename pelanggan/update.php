<?php
session_start();
include "../config/koneksi.php";
include "../user/menuadmin.php";
?>

<?php
$id_pelanggan = $_GET['id_pelanggan']; //get the no which will updated
$query = "SELECT * FROM tb_pelanggan WHERE id_pelanggan = $id_pelanggan"; //get the data that will be updated
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);
echo "" .mysql_error();
?>
<link rel="stylesheet" href="../css/style.css">
<div id="form">
<form method="post" action="prosesupdate.php">
<table width="400" border="0" cellpadding="2" cellspacing="2">
     <h4 align="center"> Form Update</h4>

    <tr>
  	<td width="7%"> ID Pelanggan </td>
    <td width="2%">:</td>
    <td width="55%"> <input type="text" name="id_pelanggan" disabled value="<?php echo $data['id_pelanggan']; ?>"> </td>
  </tr>
      
  <tr>
  	<td width="13%"> Nama Pelanggan </td>
    <td width="2%">:</td>
    <td width="75%"> <input type="text" name="nama_pelanggan" value="<?php echo $data['nama_pelanggan']; ?>"> </td>
  </tr>

  <tr>
  	<td>Alamat</td>
    <td>:</td>
      <td> <textarea name="alamat" cols="29" rows="4"><?php echo $data['alamat']; ?></textarea> </td>
  </tr>

  <tr>
  	<td>Telepon</td>
    <td>:</td>
    <td> <input type="text" name="telepon" value="<?php echo $data['telepon']; ?>"> </td>
  </tr>
    <tr>
<td></td><td></td><td><input type="hidden" name="id_pelanggan" value="<?php echo $data['id_pelanggan']; ?>">
<input type="SUBMIT" name="save" value="Save"></td>
  </tr>
</table>
</form>