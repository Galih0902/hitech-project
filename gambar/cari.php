<?php
session_start();
include "../config/koneksi.php";
include "../user/menuadmin.php";
?>
<link rel="stylesheet" href="../css/style.css">
<div id="border">
<h2> Keyword "<?php echo $_GET['q'];?>"<h2>
    
    <!-- menampilkan hasil pencarian -->
    <?php
    if(isset($_GET['q']) && $_GET['q']){
    	$conn = mysql_connect("localhost", "root", "");
    	mysql_select_db("dbhitech");
    	$q = $_GET['q'];
    	$sql = "select * from upload where id like '%$q%'or judul like '%$q%'";
        $no=1;
    	$result = mysql_query($sql);
    	if(mysql_num_rows($result) > 0){
  		?>
<td><a href='add_gambar.php'> Add Data |</a></td>
    <td></td><td ><a href='data_gambar.php'> Gallery </a></td>
<table align="center" border="0" cellpadding="15">
        <tr>
<?php
            // Connect to Database
    mysql_connect("localhost", "root", "");
     mysql_select_db("dbhitech");

           $kolom = 5;
               $i = 0;
    $sql = mysql_query ("select * from upload");
    while($data = mysql_fetch_array($sql)){
        if ($i >= $kolom){
            echo "<tr></tr>";
            $i= 0;
        }
        $i++;
        ?>
    <td align="center"><?php echo $data[judul]; ?><br><br><img src="gallery/<?php echo $data[path]; ?>" width="168"><br><br>
    <a href='delete.php?id=<?php echo $data['id'];?>' title="Klik Disini Untuk Hapus" Onclick="return confirm('Apakah Anda Yakin Hapus Record dengan ID=<?php echo $data[id]?>')"> Delete </a> </td>
    <?php
    }
    ?>
    </tr>
</table>
    <?php
    	}else{
    		echo 'Sorry, Data Not Found!';
    	}
    }
    ?>
</div>