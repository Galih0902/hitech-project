<?php
session_start();
include"../config/koneksi.php";

function autoNumber ($id, $table){
  $query = 'SELECT MAX(RIGHT(kode_transaksi, 6)) as max_id FROM tb_transaksi ORDER BY kode_transaksi ASC';
  $result = mysql_query($query);
  $data = mysql_fetch_array($result);
  $id_max = $data['max_id'];
  $sort_num = (int) substr($id_max, 1);
  $sort_num++;
  $new_code = sprintf("5%04s", $sort_num);
  return $new_code;
 }
?>

<!DOCTYPE HTML>

<head>
    <title>Transaksi Hi-Tech</title>
    
</head>
    <body>
        <center>
            <?php
            include "../user/menuadmin.php";
            ?>
    </body>
<form name="addtransaksi" method="post" action="transaksi_save.php" >
<link rel="stylesheet" href="../css/style.css">
<link type="text/css" href="js/themes/base/ui.all.css" rel="stylesheet" /> 
<script type="text/javascript" src="js/jquery-1.3.2.js"></script>
<script type="text/javascript" src="js/ui.core.js"></script>
<script type="text/javascript" src="js/ui.datepicker.js"></script>
<script type="text/javascript"> 
      $(document).ready(function(){
        $("#tanggal").datepicker({
		dateFormat  : "yy-mm-dd", 
          changeMonth : true,
          changeYear  : true
		  
        });
      });
    </script>
    
    <script type="text/javascript">  
            function plus(){  
                //nilai pertamaa  
                var nilai1=document.getElementById("biaya").value;  
                //nilai kedua  
                var nilai2=document.getElementById("tambah").value;  
                //operasi tambah  
                var plus=parseInt(nilai1)+parseInt(nilai2);  
                //menampilkan hasil tambah  
                document.getElementById("total").value=parseInt(plus);  
            }  
        </script> 
<div id="form">
    <h1 align="center">Form Data Transaksi</h1>
      <table>
    <tr>
      <td >Kode Transaksi</td>
      <td ><label>
        <input name="kode_transaksi" type="text" id="kode_transaksi" size="40" maxlength="35" value="<?php echo autoNumber('kode_transaksi','tb_transaksi')?>" readonly/>
      </label></td>
    </tr>
<tr>
      <td >Tanggal</td>
      <td><label>
        <input type="text"  name="tanggal" id="tanggal"/>
      </label></td>
    </tr>
          
<tr>
<td>Pelanggan</td>
<td><label>
<?php
echo "<select name='pelanggan'>";
echo "<option value=0 selected>-Pilih Pelanggan-</option>";
$sql = "select * from tb_pelanggan order by id_pelanggan";
$result = mysql_query($sql);
while($data = mysql_fetch_array($result))
{echo "<option value=$data[nama_pelanggan]>$data[id_pelanggan]-$data[nama_pelanggan]</option>";}
echo "</select>";
?>
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
<select name="pilihan" id="pilihan" onchange="changeValue(this.value)" >
<option value=0>-Pilih-</option>
<?php
$result = mysql_query("select * from tb_pilihan");   
$jsArray = "var dtPilih = new Array();\n";       
while ($row = mysql_fetch_array($result)) {   
echo '<option value="' . $row['pilihan'] . '">' . $row['pilihan'] . '</option>';  
$jsArray .= "dtPilih['" . $row['pilihan'] . "'] = {biaya:'" . addslashes($row['biaya']) . "',ket:'".addslashes($row['keterangan'])."',lama:'".addslashes($row['lama_pengerjaan'])."'};\n";   
}      
?>
</select>
</label></td>
</tr>
      <tr>
      <td >Biaya</td>
      <td><label>
        <input name="biaya" type="int" id="biaya" onkeyup="plus()" size="40" maxlength="35" />
      </label></td>
      </tr>
<script type="text/javascript">   
<?php echo $jsArray; ?> 
function changeValue(pilihan){ 
document.getElementById('biaya').value = dtPilih[pilihan].biaya;
document.getElementById('ket').value = dtPilih[pilihan].ket;
document.getElementById('lama').value = dtPilih[pilihan].lama;
}; 
</script> 
    <tr>
      <td >Lama Pengerjaan</td>
      <td><label>
        <input name="lama" type="text" id="lama" size="40" maxlength="35"/>
      </label></td>
    </tr>
    <tr>
      <td>Keterangan</td>
      <td><label>
              <textarea name="ket" type="text" id="ket" cols="26" rows="4" /></textarea>
      </label></td>
    </tr>
    <tr>
      <td >Tambahan Biaya</td>
      <td><label>
        <input name="tambah" type="int" id="tambah" onkeyup="plus()" size="40" maxlength="35" placeholder="Isikan Tambahan biaya"/>
      </label></td>
    </tr>
     <tr>
      <td >Total Biaya</td>
      <td><label>
        <input name="total" type="int" id="total" size="40" maxlength="35" readonly />

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