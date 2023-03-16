<?php
session_start();
include "../config/koneksi.php";
include "menupimpinan.php";
?>

<link rel="stylesheet" href="../css/style.css">
<div id="border">
    <h2><pre> Data User    <a href='add_user.php'> Add Data </a> </pre><h2>
<?php
$query = "SELECT * FROM tb_user"; //the query for get all data in table
$no=1;
$result = mysql_query($query);
?>

    <form name="form1" method="get" action="cari.php">
        <pre<td> -----<td><input type="search" name="q" id="q" placeholder="Search"/>----- </td>
    </form>
   
    
<table width='100%' border='1' cellpadding='2' cellspacing='0'>
<tr bgcolor='grey'>
		<th>  No  </th>
        <th>  ID User  </th>
        <th>  Username  </th>
        <th>  Password  </th>
        <th>  Nama Akun  </th>
        <th>  Level  </th>
        <th>  Action  </th>
     </tr>
<?php
while ($data = mysql_fetch_array($result)){ //mysql_fetch_array = get the query data into array
?>
  <tr align='center'>
  			<td ><?php echo$no;?></td>
            <td><?php echo $data['id_user'];?></td>
            <td><?php echo $data['username'];?></td>
            <td><?php echo $data['password'];?></td>
            <td><?php echo $data['nama_akun'];?></td>
            <td><?php echo $data['level'];?></td>
            <td>  <a href='update.php?id_user=<?php echo $data['id_user'];?>' title="Klik Disini Untuk Ubah" > Update |</a> 
            <a href='delete.php?id_user=<?php echo $data['id_user'];?>' title="Klik Disini Untuk Hapus" Onclick="return confirm('Apakah Anda Yakin Hapus Record dengan ID=<?php echo $data[id_user]?>')"> Delete </a> </td>
       </tr>
<?php
$no++;
}
?>
</table>
</div>