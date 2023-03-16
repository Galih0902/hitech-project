<?php
session_start();
include "../config/koneksi.php";
include "../user/menumekanik.php";
?>

<link rel="stylesheet" href="../css/style.css">
<div id="border">
<h2><pre> Data Info Modifikasi    </pre><h2>
<?php
$query = "SELECT * FROM tb_info"; //the query for get all data in table
$no=1;
$result = mysql_query($query);
?>

    <form name="form1" method="get" action="cariinfo.php" padding="15">
        <pre<td> -----<td><input type="search" name="q" id="q" placeholder="Search"/>----- </td>Klik kanan jika ingin memperbesar gambar. </td>
    </form>
    
<table width='100%' border='1' cellpadding='2' cellspacing='0'>
<tr bgcolor='grey'>
		<th>  No  </th>
        <th>  ID Info  </th>
        <th>  Kode Transaksi  </th>
        <th>  Pelanggan  </th>
        <th>  Motor  </th>
        <th>  Pilihan Modifikasi  </th>
        <th>  Status Modifikasi  </th>
        <th>  Gambar  </th>
     </tr>
<?php
while ($data = mysql_fetch_array($result)){ //mysql_fetch_array = get the query data into array
?>
  <tr align='center'>
  			<td ><?php echo$no;?></td>
            <td><?php echo $data['id_info'];?></td>
            <td><?php echo $data['kode_transaksi'];?></td>
            <td><?php echo $data['pelanggan'];?></td>
            <td><?php echo $data['motor'];?></td>
            <td><?php echo $data['pilihan_modif'];?></td>
            <td><?php echo $data['status_modifikasi'];?></td>
            <td><img src="../info-modifikasi/foto/<?php echo $data[gambar];?>" width="65"></td>
       </tr>
<?php
$no++;
}
?>
</table>
</div>