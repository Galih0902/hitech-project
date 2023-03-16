<?php
session_start();
include"../config/koneksi.php";

function autoNumber($id, $table){
  $query = 'SELECT MAX(RIGHT(id_mekanik_admin, 5)) as max_id FROM tb_mekanik_admin ORDER BY id_mekanik_admin ASC';
  $result = mysql_query($query);
  $data = mysql_fetch_array($result);
  $id_max = $data['max_id'];
  $sort_num = (int) substr($id_max, 1, 5);
  $sort_num++;
  $new_code = sprintf("5%02s", $sort_num);
  return $new_code;
 }
?>

<!DOCTYPE HTML>

<head>
    <title>Mekanik/Admin Hi-Tech</title>
</head>
    <body>
        <center>
            <?php
            include "../user/menupimpinan.php";
            ?>
    </body>
<form name="addmekanik" method="post" action="mekanik_save.php" >
            <link rel="stylesheet" href="../css/style.css">
<div id="form">
    <h1 align="center">Form Data Mekanik/Admin</h1>
    <table>
    <tr>
      <td >ID Mekanik/Admin</td>
      <td ><label>
        <input name="id_mekanik_admin" type="text" id="id_mekanik_admin" size="40" maxlength="35" placeholder="Isikan ID Mekanik" value="<?php echo autoNumber('id_mekanik_admin','tb_mekanik_admin');?>" readonly/>
      </label></td>
    </tr>
    <tr>
      <td>Nama</td>
      <td><label>
        <input name="mekanik" type="text" id="mekanik" size="40" maxlength="35" placeholder="Isikan Nama Lengkap" />
      </label></td>
    </tr>
    <tr>
      <td>Alamat</td>
      <td><label>
        <textarea name="alamat" id="alamat" cols="23" rows="4" placeholder="Isikan Alamat"></textarea>
      </label></td>
    </tr>
    <tr>
      <td >Telepon</td>
      <td><label>
        <input name="telepon" type="text" id="telepon" size="40" maxlength="35" placeholder="Isikan Nomor Telepon"/>
      </label></td>
    </tr>
    <tr>
      <td >Status</td>
      <td ><label >
        <select  name="status" id="status">
          <option value="Admin" selected="selected">Admin</option>
          <option value="Mekanik">Mekanik</option>
        </select>
      </label></td>
    </tr>
      
<tr>
      <td colspan="2"><label>
        
        <div align="center">
          <input type="submit" name="save" id="save" value="Save" />
          <input type="reset" name="reset" id="reset" value="Reset" />
        </div>
      </label>
    </tr>
        
  </table>
</form>
    </div>
</body>
<ul>