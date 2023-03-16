<?php
session_start();
include"../config/koneksi.php";

function autoNumber ($id, $table){
  $query = 'SELECT MAX(RIGHT(no, 5)) as max_id FROM tb_pilihan ORDER BY no ASC';
  $result = mysql_query($query);
  $data = mysql_fetch_array($result);
  $id_max = $data['max_id'];
  $sort_num = (int) substr($id_max, 1, 5);
  $sort_num++;
  $new_code = sprintf("0%1s", $sort_num);
  return $new_code;
 }
?>

<!DOCTYPE HTML>

<head>
    <title>Pilihan Modifikasi Hi-Tech</title>
</head>
    <body>
        <center>
            <?php
            include "../user/menuadmin.php";
            ?>
    </body>
<form name="addpilihan" method="post" action="pilihan_save.php" >
<link rel="stylesheet" href="../css/style.css">

<div id="form">
    <h1 align="center">Form Data Pilihan Modifikasi</h1>
      <table>
          
    <tr>
      <td >Nomor</td>
      <td ><label>
        <input name="no" type="text" id="no" size="40" maxlength="35" value="<?php echo autoNumber('no','tb_pilihan');?>" readonly/>
      </label></td>
    </tr>      
    <tr>
      <td>Pilihan</td>
      <td><label>
        <input name="pilihan" type="text" id="pilihan" size="40" maxlength="35" placeholder="Isikan Pilihan" />
      </label></td>
    </tr>
    <tr>
      <td >Biaya</td>
      <td><label>
        <input name="biaya" type="int" id="biaya" size="40" maxlength="35" placeholder="Isikan Biaya"/>
      </label></td>
    </tr>
    <tr>
      <td>Lama Pengerjaan</td>
      <td><label>
        <input name="lama" type="text" id="lama" size="40" maxlength="35" placeholder="Isikan Lama Pengerjaan" />
      </label></td>
    </tr>
    <tr>
      <td>Keterangan</td>
      <td><label>
    <textarea name="keterangan" id="keterangan" cols="28" rows="4" placeholder="Isikan Keterangan"></textarea>
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