<?php
session_start();
include "../config/koneksi.php";
include "../user/menuadmin.php";
?>

<?php
$id_info = $_GET['id']; //get the no which will updated
$query = ("SELECT * FROM tb_info WHERE id_info = $id_info"); //get the data that will be updated
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);
echo"".mysql_error();

?>
<link rel="stylesheet" href="../css/style.css">
<link type="text/css" href="js/themes/base/ui.all.css" rel="stylesheet" /> 

<div id="form">
<form method="post" action="prosesupdate.php" enctype="multipart/form-data">
<table width="400" border="0" cellpadding="2" cellspacing="2">
     <h4 align="center"> Form Update</h4>

    <tr>
  	<td width="7%"> ID Info </td>
    <td width="2%">:</td>
    <td width="55%"> <input type="text" name="id_info" disabled value="<?php echo $data['id_info']; ?>"> </td>
  </tr>
      
  <tr>
  	<td width="13%"> Kode Transaksi </td>
    <td width="2%">:</td>
    <td width="75%"> <input type="text"  name="kode" id="kode" value="<?php echo $data['kode_transaksi']; ?>"> </td>
  </tr>

  <tr>
  	<td>Pelanggan</td>
    <td>:</td>
    <td> <input type="text" name="pelanggan" value="<?php echo $data['pelanggan']; ?>"> </td>
  </tr>

  <tr>
  	<td>Motor</td>
    <td>:</td>
    <td> <input type="text" name="motor" value="<?php echo $data['motor']; ?>"> </td>
  </tr>
    
    <tr>
  	<td width="7%"> Pilihan Modifikasi </td>
    <td width="2%">:</td>
    <td width="55%"> <input type="text" name="pilihan_modif"  value="<?php echo $data['pilihan_modif']; ?>"> </td>
  </tr>
      
  <tr>
  	<td width="13%"> Status Modifikasi </td>
    <td width="2%">:</td>
      <td width="75%"> <textarea type="text" name="status" cols="26" rows="4"><?php echo $data['status_modifikasi']; ?></textarea> </td>
  </tr>

  <tr>
  	<td>Gambar</td>
    <td>:</td>
    <td> <input type="file" name="image" id="foto" ><?php echo $data['gambar']; ?></td>
  </tr>

    <tr>
<td></td><td></td><td><input type="hidden" name="id_info" value="<?php echo $data['id_info']; ?>">
<input type="SUBMIT" name="save" value="Save"></td>
  </tr>
</table>
</form>