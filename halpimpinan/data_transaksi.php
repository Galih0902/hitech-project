<?php
session_start();
include "../config/koneksi.php";
include "../user/menupimpinan.php";
?>

<link rel="stylesheet" href="../css/style.css">
<div id="border">
<h2><pre> Data Transaksi    </pre><h2>
<?php
$query = "SELECT * FROM tb_transaksi"; //the query for get all data in table
$no=1;
$result = mysql_query($query);
?>
    
    <form name="form1" method="get" action="caritransaksi.php">
        <pre<td> -----<td><input type="search" name="q" id="q" placeholder="Search"/>----- </td>
    </form>
    
<table width='100%' border='1' cellpadding='2' cellspacing='0'>
<tr bgcolor='grey'>
		<th>  No  </th>
        <th>  Kode Transaksi  </th>
        <th>  Tanggal  </th>
        <th>  Pelanggan  </th>
        <th>  Motor  </th>
        <th>  Modifikasi  </th>
        <th>  Biaya  </th>
        <th>  Keterangan  </th>
        <th>  Lama Pengerjaan  </th>
        <th>  +Biaya  </th>
        <th>  Total  </th>
        </tr>
<?php
while ($data = mysql_fetch_array($result)){ //mysql_fetch_array = get the query data into array
?>
  <tr align='center'>
  			<td ><?php echo$no;?></td>
            <td><?php echo $data['kode_transaksi'];?></td>
            <td><?php echo $data['tanggal'];?></td>
            <td><?php echo $data['pelanggan'];?></td>
            <td><?php echo $data['motor'];?></td>
            <td><?php echo $data['pilihan_modif'];?></td>
            <td><?php echo number_format($data['biaya'],2,",",".")?></td>
            <td><?php echo $data['keterangan'];?></td>
            <td><?php echo $data['lama_pengerjaan'];?></td>
            <td><?php echo number_format($data['tambahan_biaya'],2,",",".")?></td>
            <td><?php echo number_format($data['total_biaya'],2,",",".")?></td>
            </tr>
<?php
$no++;
}
?>
     <?php 
    $query=mysql_query("select Sum(total_biaya) as jumlah from tb_transaksi");
    $row = mysql_fetch_assoc($query);
        ?>
    <tr align="center">
        <td colspan="8" >Jumlah</td>
        <td colspan="3">Rp. <?php echo number_format($row['jumlah'],2,",",".")?></td>
    </tr>
</table>
</div>