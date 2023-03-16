<?php
session_start();
include "../config/koneksi.php";
include "../user/menuadmin.php";
?>

<link rel="stylesheet" href="../css/style.css">
<div id="border">
<h2><pre> Data Pilihan Modifikasi    <a href='add_pilihan.php'> Add Data </a> </pre><h2>
<?php
$query = "SELECT * FROM tb_pilihan"; //the query for get all data in table
$no=1;
$result = mysql_query($query);
    echo "" .mysql_error();
?>

    <form name="form1" method="get" action="cari.php">
        <pre<td> -----<td><input type="search" name="q" id="q" placeholder="Search"/>----- </td>
    </form>
    
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
            <td>Rp. <?php echo number_format($data['biaya'],2,",",".")?></td>
            <td><?php echo $data['lama_pengerjaan'];?></td>
            <td><?php echo $data['keterangan'];?></td>
            <td><a href='update.php?no=<?php echo $data['no'];?>' title="Klik Disini Untuk Ubah" > Update |</a> 
                <a href='delete.php?no=<?php echo $data['no'];?>' title="Klik Disini Untuk Ubah" Onclick="return confirm('Apakah Anda Yakin Hapus Record dengan NOMOR=<?php echo $data[no]?>')"> Delete </a> </td>
       </tr>
<?php
$no++;
}
?>
</table>
</div>