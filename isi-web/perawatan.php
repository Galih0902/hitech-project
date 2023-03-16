<?php
// session_start();
include "../config/koneksi.php";
include "index.php";
?>
<link rel="stylesheet" href="../css/style.css">
<head><title>Hi-Tech Perawatan</title></head>
<body>
<h1 align="center"> Perawatan Motor Modifikasi</h1>
<div id="borderweb">
<?php


$query = "SELECT * FROM perawatan"; //the query for get all data in table
$result = mysqli_query($connection, $query);
?>
    
<table width='100%' cellpadding='20'>

<?php
while ($data = mysqli_fetch_array($result)){ //mysql_fetch_array = get the query data into array
?>
  <tr>
            <td><hr><?php echo $data['isi'];?></td>
 
       </tr>
<?php
    }
    ?>
</table>
</div>
</body>