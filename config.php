<?php 
 
$server = "localhost";
$user = "root";
$pass = "";
$database = "adii.register";
 
$koneksi = mysqli_connect($server, $user, $pass, $database);
 
if (!$konesi) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}
 
?>