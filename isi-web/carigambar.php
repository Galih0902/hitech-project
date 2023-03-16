<?php
session_start();
include "../config/koneksi.php";
include "index.php";
?>
<link rel="stylesheet" href="../css/style.css">
<div id="border">
    <h2> Keyword "<?php echo $_GET['q']; ?>"<h2>

            <!-- menampilkan hasil pencarian -->
            <?php
            if (isset($_GET['q'])) {
                $conn = mysql_connect("localhost", "root", "");
                mysql_select_db("dbhitech");
                $path = $_Get['path'];
                $judul = $_GET['judul'];
                $sql = "select * from upload where judul like '%$judul%' and path like '%$path%'";
                $no = 1;
                $result = mysql_query($sql);
                if (mysql_num_rows($result) > 0) {
            ?>
                    <td></td>
                    <td><a href='data_gambar.php'> Gallery </a></td>
                    <table align="center" border="0" cellpadding="15">
                        <tr>
                            <?php
                            // Connect to Database
                            mysql_connect("localhost", "root", "");
                            mysql_select_db("dbhitech");

                            $kolom = 5;
                            $i = 0;
                            $sql = mysql_query("select * from upload");
                            while ($data = mysql_fetch_array($sql)) {
                                if ($i >= $kolom) {
                                    echo "<tr></tr>";
                                    $i = 0;
                                }
                                $i++;
                            ?>
                                <td align="center"><?php echo $data[judul]; ?><br><br><img src="../gambar/gallery/<?php echo $data[path]; ?>" width="168">
                                <?php
                            }
                                ?>
                        </tr>
                    </table>
            <?php
                } else {
                    echo 'Sorry, Data Not Found!';
                }
            }
            ?>
</div>