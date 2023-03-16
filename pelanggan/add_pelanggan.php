<?php
session_start();
include"../config/koneksi.php";

function autoNumber ($id, $table){
  $query = 'SELECT MAX(RIGHT(id_pelanggan, 5)) as max_id FROM tb_pelanggan ORDER BY id_pelanggan ASC';
  $result = mysql_query($query);
  $data = mysql_fetch_array($result);
  $id_max = $data['max_id'];
  $sort_num = (int) substr($id_max, 1, 5);
  $sort_num++;
  $new_code = sprintf("2%03s", $sort_num);
  return $new_code;
 }
?>

<!DOCTYPE HTML>

<head>
    <link rel="shotcut icon" href="../images/hitech.png">
    <title>Pelanggan Hi-Tech</title>
</head>
    <body>
        <center>
            <?php
            include "../user/menuadmin.php";
            ?>
    </body>
<form name="addpelanggan" method="post" action="pelanggan_save.php" >
            <link rel="stylesheet" href="../css/style.css">
<div id="form">
    <h1 align="center">Form Data Pelanggan</h1>
      <table>
    <tr>
      <td >ID Pelanggan</td>
      <td ><label>
        <input name="idpelanggan" type="text" id="idpelanggan" size="40" maxlength="35" value="<?php echo autoNumber('no','tb_pelanggan');?>" readonly/>
      </label></td>
    </tr>
    <tr>
      <td>NamaPelanggan</td>
      <td><label>
        <input name="pelanggan" type="text" id="pelanggan" size="40" maxlength="35" placeholder="Isikan Nama Pelanggan" />
      </label></td>
    </tr>
    <tr>
      <td>Alamat</td>
      <td><label>
              <textarea name="alamat" id="alamat" cols="23" rows="4" placeholder="Isikan Alamat Pelanggan"></textarea>
      </label></td>
    </tr>
    <tr>
      <td >Telepon</td>
      <td><label>
        <input name="telepon" type="text" id="telepon" size="40" maxlength="35" placeholder="Isikan Nomor Telepon"/>
      </label></td>
    </tr>
    <tr>
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