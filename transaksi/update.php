<?php
session_start();
include "../config/koneksi.php";
include "../user/menuadmin.php";
?>

<?php
$kode_transaksi = $_GET['kode_transaksi']; //get the no which will updated
$query = "SELECT * FROM tb_transaksi WHERE kode_transaksi = $kode_transaksi"; //get the data that will be updated
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);
?>
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
<form method="post" action="prosesupdate.php">
<table width="400" border="0" cellpadding="2" cellspacing="2">
     <h4 align="center"> Form Update</h4>

    <tr>
  	<td width="7%"> Kode Transaksi </td>
    <td width="2%">:</td>
    <td width="55%"> <input type="text" name="kode_transaksi" disabled value="<?php echo $data['kode_transaksi']; ?>"> </td>
  </tr>
      
  <tr>
  	<td width="13%"> Tanggal </td>
    <td width="2%">:</td>
    <td width="75%"> <input type="text"  name="tanggal" id="tanggal" value="<?php echo $data['tanggal']; ?>"> </td>
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
  	<td width="13%"> Biaya </td>
    <td width="2%">:</td>
    <td width="75%"> <input type="int" name="biaya" id="biaya" onkeyup="plus()" value="<?php echo $data['biaya']; ?>"> </td>
  </tr>

  <tr>
  	<td>Lama Pengerjaan</td>
    <td>:</td>
    <td> <input type="text" name="lama_pengerjaan" value="<?php echo $data['lama_pengerjaan']; ?>"> </td>
  </tr>

  <tr>
  	<td>Keterangan</td>
    <td>:</td>
    <td> <textarea name="keterangan" cols="29" rows="4"><?php echo $data['keterangan']; ?></textarea> </td>
  </tr>
    
     <tr>
  	<td width="13%"> +Biaya </td>
    <td width="2%">:</td>
    <td width="75%"> <input type="int" id="tambah" name="tambahan_biaya" onkeyup="plus()" value="<?php echo $data['tambahan_biaya']; ?>"> </td>
  </tr>

  <tr>
  	<td>Total</td>
    <td>:</td>
    <td> <input type="int" name="total" id="total" value="<?php echo $data['total_biaya']; ?>" readonly> </td>
  </tr>
    
    <tr>
<td></td><td></td><td><input type="hidden" name="kode_transaksi" value="<?php echo $data['kode_transaksi']; ?>">
<input type="SUBMIT" name="save" value="Save"></td>
  </tr>
</table>
</form>