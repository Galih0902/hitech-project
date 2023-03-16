<?php
session_start();
include "../config/koneksi.php";
include "index.php";
?>

<link rel="stylesheet" href="../css/style.css">
<head><title>Hi-Tech Profil</title></head>
<body>
<h1 align="center"> Profil</h1>
<div id="borderweb">
<?php
$query = "SELECT * FROM profil"; //the query for get all data in table
$no=1;
$result = mysql_query($query);
?>
    
<table width='100%' cellpadding='20'>

<?php
while ($data = mysql_fetch_array($result)){ //mysql_fetch_array = get the query data into array
?>
  <tr>
            <td><?php echo $data['profil'];?></td>
 
       </tr>
<?php
}
?>
</table>
</div>
</body>