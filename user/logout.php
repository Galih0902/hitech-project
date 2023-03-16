<?php
session_start();
if(session_destroy()){ // kosongkan semua session
header("Location:index.php"); //Redirecting to file index.php
}
?>