<?php
session_start();
include 'config.php';

$username = $_POST['username'];
$password = md5($_POST['password']); // sederhana dulu

$query = mysqli_query($koneksi,
    "SELECT * FROM users 
     WHERE username='$username' 
     AND password='$password'
     AND is_active=1"
);

$data = mysqli_fetch_array($query);
$cek  = mysqli_num_rows($query);

if ($cek > 0) {
    $_SESSION['username'] = $data['username'];
    $_SESSION['role']     = $data['role'];

    header("location:dashboard.php");
} else {
    echo "Login gagal. <a href='login.php'>Coba lagi</a>";
}
