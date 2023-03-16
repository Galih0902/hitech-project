<?php
session_start();
include "../config/koneksi.php";
include "../user/menupimpinan.php";
?>
<link rel="stylesheet" href="../css/style.css">
<div id="border">
<h2>Keyword Mekanik "<?php echo $_GET['q'];?>"<h2>
    
    <!-- menampilkan hasil pencarian -->
    <?php
    if(isset($_GET['q']) && $_GET['q']){
    	$conn = mysql_connect("localhost", "root", "");
    	mysql_select_db("dbhitech");
    	$q = $_GET['q'];
    	$sql = "select * from tb_mekanik_admin where id_mekanik_admin like '%$q%'or nama like '%$q%' or alamat like '%$q%' or telepon like '%$q%' or status like '%$q%'";
        $no=1;
    	$result = mysql_query($sql);
    	if(mysql_num_rows($result) > 0){
  		?>
<td><a href='add_mekanik.php'> Add Data |</a></td>
    <td></td><td ><a href='data_mekanik.php'> Data User </a></td>
<table width='100%' border='1' cellpadding='2' cellspacing='0'>
<tr bgcolor='grey'>
		<th>  No  </th>
        <th>  ID Mekanik  </th>
        <th>  Nama Mekanik  </th>
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
            <td>  <a href='update.php?id=<?php echo $data['id_mekanik_admin'];?>'> Update |</a> <a href='delete.php?id=<?php echo $data['id_mekanik_admin'];?>'> Delete </a> </td>
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