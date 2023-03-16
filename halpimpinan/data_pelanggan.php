<?php
session_start();
include "../config/koneksi.php";
include "../user/menupimpinan.php";

?>

<!DOCTYPE HTML>
<link rel="stylesheet" href="../css/style.css">
<div id="border">
<h2><pre> Data Pelanggan    </pre><h2>
<?php
$query = "SELECT * FROM tb_pelanggan"; //the query for get all data in table
$no=1;
$result = mysql_query($query);
?>

    <form name="form1" method="get" action="caripelanggan.php">
        <pre<td> -----<td><input type="search" name="q" id="q" placeholder="Search"/>----- </td>
    </form>
    
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
}
?>
</table>
</div>