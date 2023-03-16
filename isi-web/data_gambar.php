<?php
session_start();
include "../config/koneksi.php";
include "index.php";
?>

<link rel="stylesheet" href="../css/style.css">
<h1 align="center"> Gallery Hi-Tech<h1>
<div id="border">
    
    <h1>
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
    <td align="center"><?php echo $data[judul]; ?><br><br><img src="../gambar/gallery/<?php echo $data[path]; ?>" width="200">
    
    <?php
    }
    ?>
    </tr>
</table>
    <h3><i>Klik kanan untuk memperbesar gambar </h3>    
</div>