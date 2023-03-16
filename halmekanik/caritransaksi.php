<?php
session_start();
include "../config/koneksi.php";
include "../user/menumekanik.php";
?>
<link rel="stylesheet" href="../css/style.css">
<div id="border">
<h2> Keyword "<?php echo $_GET['q'];?>"<h2>
    
    <!-- menampilkan hasil pencarian -->
    <?php
    if(isset($_GET['q']) && $_GET['q']){
    	$conn = mysql_connect("localhost", "root", "");
    	mysql_select_db("dbhitech");
    	$q = $_GET['q'];
    	$sql = "select * from tb_transaksi where kode_transaksi like '%$q%'or tanggal like '%$q%' or 
    	pelanggan like '%$q%' or motor like
        '%$q%' or pilihan_modif like '%$q%' or biaya like '%$q%' or keterangan like '%$q%' or lama_pengerjaan like '%$q%' or tambahan_biaya like '%$q%' or total_biaya like '%$q%' ";
        $no=1;
    	$result = mysql_query($sql);
    	if(mysql_num_rows($result) > 0){
  		?>
<td></td><td ><a href='data_transaksi.php'> Data Transaksi </a></td>
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
</table>
</div>
    <?php
    	}else{
    		echo 'Data Not Found!';
    	}
    }
    ?>