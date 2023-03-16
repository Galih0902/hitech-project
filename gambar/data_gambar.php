<?php
session_start();
include "../config/koneksi.php";
include "../user/menuadmin.php";
?>

<link rel="stylesheet" href="../css/style.css">
<h1 align="center"> Gallery Hi-Tech<h1>
<div id="border">
<h1>
     <form name="form1" method="get" action="cari.php">
        <pre<td> -----<td><input type="search" name="q" id="q" placeholder="Search"/>----- </td>
     </form>
    <a href='add_gambar.php'> Upload Gambar </a>
    <table align="center" border="1" cellpadding="15">
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
    <td hfg><?php echo $data[judul]; ?><br><br><img src="gallery/<?php echo $data[path]; ?>" width="200"><br><br>
    <a href='delete.php?id=<?php echo $data['id'];?>' title="Klik Disini Untuk Hapus" Onclick="return confirm('Apakah Anda Yakin Hapus Record dengan ID=<?php echo $data[id]?>')"> Delete </a> </td>
    <?php
    }
    ?>
    </tr>
</table>
        
</div>