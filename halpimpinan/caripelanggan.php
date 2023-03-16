<?php
session_start();
include "../config/koneksi.php";
include "../user/menupimpinan.php";
?>
<link rel="stylesheet" href="../css/style.css">
<div id="border">
<h2>Keyword Pelanggan"<?php echo $_GET['q'];?>"<h2>
    
    <!-- menampilkan hasil pencarian -->
    <?php
    if(isset($_GET['q']) && $_GET['q']){
    	$conn = mysql_connect("localhost", "root", "");
    	mysql_select_db("dbhitech");
    	$q = $_GET['q'];
    	$sql = "select * from tb_pelanggan where id_pelanggan like '%$q%' or nama_pelanggan like '%$q%' or alamat like '%$q%' or telepon like '%$q%'";
        $no=1;
    	$result = mysql_query($sql);
    	if(mysql_num_rows($result) > 0){
  		?>
<td></td><td ><a href='data_pelanggan.php'> Data Pelanggan </a></td>
<table width='100%' border='1' cellpadding='2' cellspacing='0'>
<tr bgcolor='grey'>
		<th>  No  </th>
        <th>  ID Pelanggan  </th>
        <th>  Nama Pelanggan  </th>
        <th>  Alamat  </th>
        <th>  Telepon  </th>
        </tr>
<?php
while ($data = mysql_fetch_array($result)){ //mysql_fetch_array = get the query data into array
?>
  <tr align='center'>
  			<td ><?php echo$no;?></td>
            <td><?php echo $data['id_pelanggan'];?></td>
            <td><?php echo $data['nama_pelanggan'];?></td>
            <td><?php echo $data['alamat'];?></td>
            <td><?php echo $data['telepon'];?></td>
       </tr>
<?php
$no++;
?>
    <?php }?>
    </table>
<?php
    	}else{
    		echo 'Sorry, data not found!';
    	}
    }
    ?>
</div>
    