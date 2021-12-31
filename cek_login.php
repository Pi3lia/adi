<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'config.php';

// menangkap data yang dikirim dari form
$email = $_POST['email'];
$password = $_POST['password'];

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"SELECT * FROM users WHERE email='$email' and password='$password'");
print_r($_POST);
var_dump($data);

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0){
	$_SESSION['username'] = $email;
	$_SESSION['status'] = "login";
	header("location:index.php");
}else{
	header("location:index.php?pesan=gagal");
}
?>