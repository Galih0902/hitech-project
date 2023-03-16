<?php
session_start();
include "../config/koneksi.php";
include "../user/menuadmin.php";

?>

<!DOCTYPE HTML>
<link rel="stylesheet" href="../css/style.css">
<div id="border">
<h2><pre> Data Pelanggan    <a href='add_pelanggan.php'> Add Data </a> </pre><h2>
<?php
$query = "SELECT * FROM tb_pelanggan"; //the query for get all data in table
$no=1;
$result = mysql_query($query);
?>

    <form name="form1" method="get" action="cari.php">
        <pre<td> -----<td><input type="search" name="q" id="q" placeholder="Search"/>----- </td>
    </form>
    
<table width='100%' border='1' cellpadding='2' cellspacing='0'>
<tr bgcolor='grey'>
		<th>  No  </th>
        <th>  ID Pelanggan  </th>
        <th>  Nama Pelanggan  </th>
        <th>  Alamat  </th>
        <th>  Telepon  </th>
        <th>  Action  </th>
     </tr>
<?php
while ($data = mysql_fetch_array($result)){ //mysql_fetch_array = get the query data into array
?>
  <tr align='center'>
  			<td ><?php echo $no;?></td>
            <td><?php echo $data['id_pelanggan'];?></td>
            <td><?php echo $data['nama_pelanggan'];?></td>
            <td><?php echo $data['alamat'];?></td>
            <td><?php echo $data['telepon'];?></td>
            <td><a href='update.php?id_pelanggan=<?php echo $data['id_pelanggan'];?>' title="Klik Disini Untuk Ubah" > Update |</a> 
                <a href='delete.php?id_pelanggan=<?php echo $data['id_pelanggan'];?>' title="Klik Disini Untuk Ubah" Onclick="return confirm('Apakah Anda Yakin Hapus Record dengan ID=<?php echo $data[id_pelanggan]?>')"> Delete </a> </td>
       </tr>
<?php
$no++;
}
?>
</table>
</div>