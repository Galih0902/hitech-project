<?php
session_start();
include "../config/koneksi.php";
include "../user/menupimpinan.php";
?>

<?php
$id_mekanik = $_GET['id']; //get the no which will updated
$query = "SELECT * FROM tb_mekanik_admin WHERE id_mekanik_admin = $id_mekanik"; //get the data that will be updated
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);
echo"" .mysql_error();
?>
<link rel="stylesheet" href="../css/style.css">
<div id="form">
<form method="post" action="prosesupdate.php">
<table width="400" border="0" cellpadding="2" cellspacing="2">
     <h4 align="center"> Form Update</h4>

    <tr>
  	<td width="13%"> ID Mekanik </td>
    <td width="2%">:</td>
    <td width="75%"> <input type="text" name="id_mekanik_admin" disabled value="<?php echo $data['id_mekanik_admin']; ?>"> </td>
  </tr>
      
  <tr>
  	<td width="13%"> Nama Mekanik </td>
    <td width="2%">:</td>
    <td width="75%"> <input type="text" name="nama" value="<?php echo $data['nama']; ?>"> </td>
  </tr>

  <tr>
  	<td>Alamat</td>
    <td>:</td>
      <td> <textarea cols="29" rows="4" name="alamat" ><?php echo $data['alamat']; ?></textarea></td>
    </tr>

  <tr>
  	<td>Telepon</td>
    <td>:</td>
    <td> <input type="text" name="telepon" value="<?php echo $data['telepon']; ?>"> </td>
  </tr>
    
    <tr>
  	<td>Status</td>
    <td>:</td>
    <td > <input type='radio' value='Admin' name='status' > Admin
<input type='radio' value='Mekanik' name='status' > Mekanik </td>
  </tr>
    
    <tr>
<td></td><td></td><td><input type="hidden" name="id_mekanik_admin" value="<?php echo $data['id_mekanik_admin']; ?>">
<input type="SUBMIT" name="save" value="Save"></td>
  </tr>
</table>
</form>