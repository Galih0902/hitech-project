<?php
session_start();
include "../config/koneksi.php";
include "menupimpinan.php";
?>
<link rel="stylesheet" href="../css/style.css">
<div id="border">
<h2> Keyword User "<?php echo $_GET['q'];?>"<h2>
    
    <!-- menampilkan hasil pencarian -->
    <?php
    if(isset($_GET['q']) && $_GET['q']){
    	$conn = mysql_connect("localhost", "root", "");
    	mysql_select_db("dbhitech");
    	$q = $_GET['q'];
    	$sql = "select * from tb_user where id_user like '%$q%'or username like '%$q%' or password like '%$q%' or nama_akun like '%$q%' or level like '%$q%'";
        $no=1;
    	$result = mysql_query($sql);
    	if(mysql_num_rows($result) > 0){
  		?>
<td><a href='add_user.php'> Add Data |</a></td>
    <td></td><td ><a href='data_user.php'> Data User </a></td>
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
            <td>  <a href='update.php?id_user=<?php echo $data['id_user'];?>'> Update |</a> 
                <a href='delete.php?id_user=<?php echo $data['id_user'];?>'> Delete </a> </td>
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