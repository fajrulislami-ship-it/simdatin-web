<?php
session_start();
include 'config.php';

if ($_SESSION['role'] != 'admin' && $_SESSION['role'] != 'operator') {
    die("Akses ditolak");
}

if (isset($_POST['simpan'])) {
    $judul = $_POST['judul'];
    $isi   = $_POST['isi'];

    mysqli_query($koneksi,
        "INSERT INTO informasi_pddikti (judul, isi, is_active)
         VALUES ('$judul','$isi',1)"
    );

    header("location:informasi.php");
}
?>

<form method="post">
    Judul <br>
    <input type="text" name="judul" required><br><br>

    Isi <br>
    <textarea name="isi" required></textarea><br><br>

    <button name="simpan">Simpan</button>
</form>
