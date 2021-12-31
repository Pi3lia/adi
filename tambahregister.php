<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'config.php';

// menangkap data yang dikirim dari form
$email = $_POST['email'];
$password = $_POST['password'];

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"INSERT INTO users(`email`,`password`) VALUES('$email','$password')");

// menghitung jumlah data yang ditemukan
header("location:index.php")

?>