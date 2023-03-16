<?php
session_start();
include "../config/koneksi.php";
include "../user/menupimpinan.php";
?>

<link rel="stylesheet" href="../css/style.css">
<div id="border">
<h2><pre> Data Mekanik / Admin    <a href='add_mekanik.php'> Add Data </a> </pre><h2>
<?php
$query = "SELECT * FROM tb_mekanik_admin"; //the query for get all data in table
$no=1;
$result = mysql_query($query);
?>

    <form name="form1" method="get" action="cari.php" padding="15">
        <pre<td> -----<td><input type="search" name="q" id="q" placeholder="Search"/>----- </td>
    </form>
    
<table width='100%' border='1' cellpadding='2' cellspacing='0'>
<tr bgcolor='grey'>
		<th>  No  </th>
        <th>  ID Mekanik / Admin </th>
        <th>  Nama </th>
        <th>  Alamat  </th>
        <th>  Telepon  </th>
        <th>  Status  </th>
        <th>  Action  </th>
     </tr>
<?php
while ($data = mysql_fetch_array($result)){ //mysql_fetch_array = get the query data into array
?>
  <tr align='center'>
  			<td ><?php echo$no;?></td>
            <td><?php echo $data['id_mekanik_admin'];?></td>
            <td><?php echo $data['nama'];?></td>
            <td><?php echo $data['alamat'];?></td>
            <td><?php echo $data['telepon'];?></td>
            <td><?php echo $data['status'];?></td>
            <td><a href='update.php?id=<?php echo $data['id_mekanik_admin'];?>' title="Klik Disini Untuk Ubah" > Update |</a> 
                <a href='delete.php?id=<?php echo $data['id_mekanik_admin'];?>' title="Klik Disini Untuk Hapus" Onclick="return confirm('Apakah Anda Yakin Hapus Record dengan ID=<?php echo $data[id_mekanik_admin]?>')"> Delete </a> </td>
       </tr>
<?php
$no++;
}
?>
</table>
</div>