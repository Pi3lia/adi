<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$gambar = $_POST['gambar'];
$caption = $_POST['caption'];
// menginput data ke database
 $result = mysqli_query($koneksi,"insert into upload(`gambar`,`caption`) values('$gambar','$caption')");
// mengalihkan halaman kembali ke index.php
print_r($result);
print_r($_POST);
echo $_POST['gambar'];
echo $_POST['caption'];
//print_r($tambah);
//print_r($stock);
header("location:navbarMedia.php")
?>
