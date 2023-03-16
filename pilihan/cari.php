<?php
session_start();
include "../config/koneksi.php";
include "../user/menuadmin.php";
?>
<link rel="stylesheet" href="../css/style.css">
<div id="border">
<h2>Keyword Pilihan"<?php echo $_GET['q'];?>"<h2>
    
    <!-- menampilkan hasil pencarian -->
    <?php
    if(isset($_GET['q']) && $_GET['q']){
    	$conn = mysql_connect("localhost", "root", "");
    	mysql_select_db("dbhitech");
    	$q = $_GET['q'];
    	$sql = "select * from tb_pilihan where no like '%$q%' or pilihan like '%$q%' or biaya like '%$q%' or lama_pengerjaan like '%$q%' or keterangan like '%$q%'";
        $no=1;
    	$result = mysql_query($sql);
    	if(mysql_num_rows($result) > 0){
  		?>
<td><a href='add_pilihan.php'> Add Data |</a></td>
    <td></td><td ><a href='data_pilihan.php'> Data User </a></td>
<table width='100%' border='1' cellpadding='2' cellspacing='0'>
<tr bgcolor='grey'>
		<th>  No  </th>
        <th>  Pilihan Modifikasi </th>
        <th>  Biaya  </th>
        <th>  Lama Pengerjaan </th>
        <th>  Keterangan  </th>
        <th>  Action  </th>
     </tr>
<?php
while ($data = mysql_fetch_array($result)){ //mysql_fetch_array = get the query data into array
?>
  <tr align='center'>
  			<td ><?php echo $data['no'];?></td>
            <td><?php echo $data['pilihan'];?></td>
            <td><?php echo $data['biaya'];?></td>
            <td><?php echo $data['lama_pengerjaan'];?></td>
            <td><?php echo $data['keterangan'];?></td>
            <td>
            <a href='update.php?no=<?php echo $data['no'];?>'title="Klik Disini Untuk Ubah" > Update |</a>
            <a href='delete.php?no=<?php echo $data['no'];?>'title="Klik Disini Untuk Hapus" Onclick="return confirm('Apakah Anda Yakin Hapus Record dengan Kode=<?php echo $data[kode_transaksi]?>')"> Delete </a> </td>
       </tr>
    <?php }?>
    </table>
<?php
    	}else{
    		echo 'Sorry, data not found!';
    	}
    }
    ?>
</div>
    