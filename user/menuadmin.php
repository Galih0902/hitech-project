<?php
include('cekadmin.php');
?>
<!DOCTYPE html>
    <html>
<head >
<meta charset="utf=8">
            <meta http-equiv="X-UA-Compatible" content="IE-edge, chrome-1">
            <title>Hi-Tech</title>
            <link rel="shotcut icon" href="../images/hitech.png">
            <link rel="stylesheet" href="../css/menu.css">
        </head>
        
        <body>
            <div id="wrapper">
                
            <header>
                <img src="../images/hitech.png" width="400" >
                
            </header>
                 
<nav class="main_menu">
<ul>
<li><a href="../index.php">Website</a></li>
    <li><a href="#">Data Website</a>
        <ul>
        <li><a href="../gambar/data_gambar.php">Gallery</a></li>
        <li><a href="../event/data_event.php">Event</a></li>
        <li><a href="../perawatan/data_perawatan.php">Perawatan</a></li>
        <li><a href="../profil/data_profil.php">Profil</a></li>
        </ul></li>
<li><a href="../info-modifikasi/data_info.php">Info Modifikasi</a></li>
<li><a href="../pelanggan/data_pelanggan.php">Pelanggan</a></li>
<li><a href="../pilihan/data_pilihan.php">Modif</a></li>
<li><a href="../transaksi/data_transaksi.php">Transaksi</a></li>
<li><a href="../user/logout.php">Logout</a></li>
</ul>
</nav>
          <span >Halo <?php echo $_SESSION['level'];?>!</span>  
                             
            </body>
</html>