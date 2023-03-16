<?php
session_start();
include "../config/koneksi.php";
?>
<!DOCTYPE HTML>

<head>
    <link rel="shotcut icon" href="../images/hitech.png">
    <title>Info Modifikasi Hi-Tech</title>
</head>
    <body>
        <?php
            include "../user/menuadmin.php";
            ?>
    </body>
<link rel="stylesheet" href="../css/style.css">
<div id="border">
<h2><pre> Data Info Modifikasi    <a href='add_info.php'> Add Data </a> </pre><h2>
<?php
$query = "SELECT * FROM tb_info"; //the query for get all data in table
$no=1;
$result = mysql_query($query);
?>
    

    <form name="form1" method="get" action="cari.php" padding="15">
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
        <th>  Action  </th>
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
            <td><img src="foto/<?php echo $data[gambar];?>" width="65"></td>
            <td>  <a href='update.php?id=<?php echo $data['id_info'];?>' title="Klik Disini Untuk Ubah" > Update | </a>
            <a href='delete.php?id=<?php echo $data['id_info'];?>' title="Klik Disini Untuk Hapus" Onclick="return confirm('Apakah Anda Yakin Hapus Record dengan Kode=<?php echo $data[id_info]?>')"> Delete </a> </td>
       </tr>
<?php
$no++;
}
?>
</table>
</div>