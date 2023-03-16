<?php
session_start();
include"../config/koneksi.php";

function autoNumber ($id, $table){
  $query = 'SELECT MAX(RIGHT(id_info, 6)) as max_id FROM tb_info ORDER BY id_info ASC';
  $result = mysql_query($query);
  $data = mysql_fetch_array($result);
  $id_max = $data['max_id'];
  $sort_num = (int) substr($id_max, 1);
  $sort_num++;
  $new_code = sprintf("6%04s", $sort_num);
  return $new_code;
 }
?>

<!DOCTYPE HTML>

<head>
    <title>Info Modifikasi Hi-Tech</title>
    
</head>
    <body>
        <center>
            <?php
            include "../user/menuadmin.php";
            ?>
    </body>
<form name="addinfo" method="post" enctype="multipart/form-data" action="info_save.php" >
<link rel="stylesheet" href="../css/style.css">

<div id="forminfo">
    <h1 align="center">Form Data Info</h1>
      <table>
    <tr>
      <td >ID info</td>
      <td ><label>
        <input name="id_info" type="text" id="id_info" size="40" maxlength="35" value="<?php echo autoNumber('id_info','tb_info')?>" readonly/>
      </label></td>
    </tr>
          
<tr>
<td>Kode Transaksi</td>
<td><label>
<select name="kode" id="kode" onchange="changeValue(this.value)" >
<option value=0>-Pilih Kode Transaksi-</option>
<?php
$result = mysql_query("select * from tb_transaksi");   
$jsArray = "var dtPilih = new Array();\n";       
while ($row = mysql_fetch_array($result)) {   
echo '<option value="' . $row['kode_transaksi'] . '">' . $row['kode_transaksi'] . '</option>';  
$jsArray .= "dtPilih['" . $row['kode_transaksi'] . "'] = {pel:'" . addslashes($row['pelanggan']) . "',pil:'".addslashes($row['pilihan_modif'])."',motor:'".addslashes($row['motor'])."'};\n";   
}      
?>
</label></td>
</tr>
          
<tr>
<td>Pelanggan</td>
<td><label>
<input name="pelanggan" type="text" id="pelanggan"  size="40" maxlength="35" />
      </label></td>
      </tr>
<script type="text/javascript">   
<?php echo $jsArray; ?> 
function changeValue(kode_transaksi){ 
document.getElementById('pelanggan').value = dtPilih[kode_transaksi].pel;
document.getElementById('pilihan').value = dtPilih[kode_transaksi].pil;
document.getElementById('motor').value = dtPilih[kode_transaksi].motor;
}; 
</script> 
</label></td>
</tr>
    
    <tr>
      <td >Motor</td>
      <td><label>
        <input name="motor" type="text" id="motor" size="40" maxlength="35"/>
      </label></td>
    </tr>
          
<tr>
<td>Pilihan Modifikasi</td>
<td><label>
<input name="pilihan" type="text" id="pilihan"  size="40" maxlength="35" />
</label></td>
</tr>
     
        <tr>
      <td>Status Modifikasi</td>
      <td><label>
              <textarea name="status" type="text" id="status" cols="26" rows="4" /></textarea>
      </label></td>
    </tr>
        
    <tr>
      <td >Gambar</td>
      <td><label>
        <input type="file" name="image" id="foto">
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