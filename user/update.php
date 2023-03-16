<?php
session_start();
include "../config/koneksi.php";
include "menupimpinan.php";
?>

<?php
$id_user = $_GET['id_user']; //get the no which will updated
$query = "SELECT * FROM tb_user WHERE id_user = $id_user"; //get the data that will be updated
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil); 
echo"" .mysql_error();
?>
<link rel="stylesheet" href="../css/style.css">
<div id="form">
<form  method="post" action="prosesupdate.php">
<table width="400" border="0" cellpadding="2" cellspacing="2">
     <h4 align="center"> Form Update</h4>

    <tr>
  	<td width="13%"> ID User </td>
    <td width="2%">:</td>
    <td width="75%"> <input type="text" name="id_user" value="<?php echo $data['id_user']; ?>" disabled> </td>
  </tr>
      
  <tr>
  	<td width="13%"> Username </td>
    <td width="2%">:</td>
    <td width="75%"> <input type="text" name="username" value="<?php echo $data['username']; ?>"> </td>
  </tr>

    <tr>
  	<td>Password</td>
    <td>:</td>
    <td> <input type="text" name="password" value="<?php echo $data['password']; ?>"> </td>
  </tr>
    
  <tr>
  	<td>Nama Akun</td>
    <td>:</td>
    <td> <input type="text" name="nama_akun" value="<?php echo $data['nama_akun']; ?>"> </td>
  </tr>

  <tr>
  	<td>Level</td>
    <td>:</td>
      <td><input type='radio' value='Admin' name='level'><?php  if($data['Admin']){echo 'checked';}?> Admin
<input type='radio' value='Mekanik' name='level' <?php  if($data['Mekanik']){echo 'checked';}?>/> Mekanik
<input type='radio' value='Pimpinan' name='level' <?php  if($data['Pimpinan']){echo 'checked';}?>/> Pimpinan </td>
  </tr>
    <tr>
<td></td><td></td><td><input type="hidden" name="id_user" value="<?php echo $data['id_user']; ?>">
<input type="SUBMIT" name="save" value="Save"></td>
  </tr>
</table>
</form>