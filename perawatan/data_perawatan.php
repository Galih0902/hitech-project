<?php
session_start();
include "../config/koneksi.php";
include "../user/menuadmin.php";
?>

<link rel="stylesheet" href="../css/style.css">
<div id="border">
<h2><pre> Data Perawatan    <a href='add_perawatan.php'> Add Data </a> </pre><h2>
<?php
$query = "SELECT * FROM perawatan"; //the query for get all data in table
$no=1;
$result = mysql_query($query);
?>

    <form name="form1" method="get" action="cari.php" padding="15">
        <pre<td> -----<td><input type="search" name="q" id="q" placeholder="Search"/>----- </td>
    </form>
    
<table width='100%' border='1' cellpadding='2' cellspacing='0'>
<tr bgcolor='grey'>
		<th>  No  </th>
        <th>  Id </th>
        <th>  Judul  </th>
        <th>  Isi  </th>
        <th>  Action  </th>
     </tr>
<?php
while ($data = mysql_fetch_array($result)){ //mysql_fetch_array = get the query data into array
?>
  <tr align='center'>
  			<td ><?php echo$no;?></td>
            <td><?php echo $data['id'];?></td>
            <td><?php echo $data['judul'];?></td>
            <td><?php echo $data['isi'];?></td>
            <td><a href='update.php?id=<?php echo $data['id'];?>' title="Klik Disini Untuk Ubah" > Update |</a> 
                <a href='delete.php?id=<?php echo $data['id'];?>' title="Klik Disini Untuk Hapus" Onclick="return confirm('Apakah Anda Yakin Hapus Record dengan id=<?php echo $data[id]?>')"> Delete </a> </td>
       </tr>
<?php
$no++;
}
?>
</table>
</div>