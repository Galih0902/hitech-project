<?php
session_start();
include "../config/koneksi.php";
include "../user/menuadmin.php";
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
    	$sql = "select * from tb_info where id_info like '%$q%'or kode_transaksi like '%$q%' or 
    	pelanggan like '%$q%' or motor like '%$q%' or pilihan_modif like '%$q%'";
        $no=1;
    	$result = mysql_query($sql);
    	if(mysql_num_rows($result) > 0){
  		?>
<td><a href='add_info.php'> Add Data |</a></td>
    <td></td><td ><a href='data_info.php'> Data Info Modifikasi </a></td>
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
            <td><img src="./foto/"<?php echo $data[gambar];?> width="65"></td>
            <td>  <a href='update.php?id=<?php echo $data['id_info'];?>' title="Klik Disini Untuk Ubah" > Update | </a>
            <a href='delete.php?id=<?php echo $data['id_info'];?>' title="Klik Disini Untuk Hapus" Onclick="return confirm('Apakah Anda Yakin Hapus Record dengan Kode=<?php echo $data[id_info]?>')"> Delete </a> </td>
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