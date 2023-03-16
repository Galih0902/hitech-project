<?php
session_start();
include "../config/koneksi.php";
include "../user/menuadmin.php";
?>

<?php
$no = $_GET['no']; //get the no which will updated
$query = "SELECT * FROM tb_pilihan WHERE no = $no"; //get the data that will be updated
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
  	<td width="13%"> No </td>
    <td width="2%">:</td>
    <td width="75%"> <input type="text" name="no" disabled value="<?php echo $data['no']; ?>"> </td>
  </tr>

    <tr>
  	<td width="13%"> Pilihan </td>
    <td width="2%">:</td>
    <td width="75%"> <input type="text" name="pilihan" value="<?php echo $data['pilihan']; ?>"> </td>
  </tr>
      
  <tr>
  	<td width="13%"> Biaya </td>
    <td width="2%">:</td>
    <td width="75%"> <input type="int" name="harga" value="<?php echo $data['biaya']; ?>"> </td>
  </tr>
    
    <tr>
  	<td width="13%"> Lama Pengerjaan </td>
    <td width="2%">:</td>
    <td width="75%"> <input type="text" name="lama" value="<?php echo $data['lama_pengerjaan']; ?>"> </td>
  </tr>

  <tr>
  	<td>Keterangan</td>
    <td>:</td>
      <td> <textarea name="keterangan" cols="29" rows="4" ><?php echo $data['keterangan']; ?></textarea> </td>
  </tr>
    
    <tr>
<td></td><td></td><td><input type="hidden"  name="no" value="<?php echo $data['no']; ?>">
<input type="SUBMIT" name="save" value="Save"></td>
  </tr>
</table>
</form>