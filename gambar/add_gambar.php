<?php
session_start();
include"../config/koneksi.php";


?>

<!DOCTYPE HTML>

<head>
    <title>Upload Gallery Hi-Tech</title>
    
</head>
    <body>
        <center>
            <?php
            include "../user/menuadmin.php";
            ?>
    </body>
<form name="addgambar" method="post" enctype="multipart/form-data" action="gambar_save.php" >
<link rel="stylesheet" href="../css/style.css">
    <script type="text/javascript">
function PreviewImage() {
var oFReader = new FileReader();
oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);
oFReader.onload = function (oFREvent)
 {
    document.getElementById("uploadPreview").src = oFREvent.target.result;
};
};
</script>
<div id="form">
Judul <input type="text" name="judul">
Gambar<br>
<img id="uploadPreview" style="width: 150px; height: 150px;" /><br>
<input id="uploadImage" type="file" name="image" onchange="PreviewImage();" />
<br><br>
<input type="submit" width="120" height="24" name="simpan" value="Submit" >
    <input type="reset" name="reset" id="reset" value="Reset" />
</form>
</form>
</div>