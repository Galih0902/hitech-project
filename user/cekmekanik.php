<?php
session_start();

//cek apakah user sudah login
if(!isset($_SESSION['username'])){
    die("Anda belum Login");
}

//cek level user
if($_SESSION['level']!="Mekanik"){
    die("Anda BUKAN Mekanik");
}
?>