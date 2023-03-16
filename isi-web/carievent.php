<?php
session_start();
include "../config/koneksi.php";
include "index.php";
?>
<link rel="stylesheet" href="../css/style.css">
<div id="border">
    <h2>Keyword "<?php echo $_GET['q']; ?>"<h2>

            <!-- menampilkan hasil pencarian -->
            <?php
            if (isset($_GET['q']) && $_GET['q']) {
                $conn = mysql_connect("localhost", "root", "");
                mysql_select_db("dbhitech");
                $q = $_GET['q'];
                $sql = "select * from tb_event where id_event like '%$q%'or tanggal like '%$q%' or lokasi like '%$q%' or keterangan like '%$q%'";
                $no = 1;
                $result = mysql_query($sql);
                if (mysql_num_rows($result) > 0) {
            ?>
                    <table width='100%' border='1' cellpadding='2' cellspacing='0'>
                        <tr bgcolor='grey'>
                            <th> No </th>
                            <th> Tanggal </th>
                            <th> Lokasi </th>
                            <th> Keterangan </th>
                        </tr>
                        <?php
                        while ($data = mysql_fetch_array($result)) { //mysql_fetch_array = get the query data into array
                        ?>
                            <tr align='center'>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $data['tanggal']; ?></td>
                                <td><?php echo $data['lokasi']; ?></td>
                                <td><?php echo $data['keterangan']; ?></td>

                            </tr>
                            <?php
                            $no++;
                            ?>
                        <?php } ?>
                    </table>
            <?php
                } else {
                    echo 'Sorry, data not found!';
                }
            }
            ?>
</div>