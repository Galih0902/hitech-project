<?php
session_start();
include "../config/koneksi.php";
include "../user/menupimpinan.php";
?>
<link type="text/css" href="js/themes/base/ui.all.css" rel="stylesheet" /> 
<script type="text/javascript" src="js/jquery-1.3.2.js"></script>
<script type="text/javascript" src="js/ui.core.js"></script>
<script type="text/javascript" src="js/ui.datepicker.js"></script>


<script type="text/javascript"> 
      $(document).ready(function(){
        $("#tgl_awal").datepicker({
		dateFormat  : "yy-mm-dd", 
          changeMonth : true,
          changeYear  : true
        });
      });
</script>

<script type="text/javascript"> 
      $(document).ready(function(){
        $("#tgl_akhir").datepicker({
		dateFormat  : "yy-mm-dd", 
          changeMonth : true,
          changeYear  : true
        });
      });
</script>
<link rel="stylesheet" href="../css/style.css">
<div id="form">
<h2 align="center"> Laporan Transaksi <h5>Inputkan Tanggal Periode</h5>  <h2>
      
<body>
<form action="laptransaksi.php" method="post" target="_blank">
<table align="center">
<tr>
<td>Tanggal Awal</td>
<td><label>
    <input type="text" name="tgl_awal" id="tgl_awal"/></label></td>
    </tr>
<tr>
<td>Tanggal Akhir</td>
<td><label>
    <input type="text" name="tgl_akhir" id="tgl_akhir"/></label></td> 
    </tr>
<tr>
<td colspan="6"><label><input type="submit" name="submit" value="Submit" >
    <input type="reset" name="reset" id="reset" value="Reset" /></label></td>
</tr>
</table>
</form>
</body>