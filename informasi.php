<?php
session_start();
include 'config.php';

$data = mysqli_query($koneksi,
    "SELECT * FROM informasi_pddikti WHERE is_active=1"
);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Informasi PDDIKTI</title>
</head>
<body>

<h2>Informasi PDDIKTI</h2>

<?php while ($row = mysqli_fetch_array($data)) { ?>
    <h4><?php echo $row['judul']; ?></h4>
    <p><?php echo $row['isi']; ?></p>
    <hr>
<?php } ?>

<a href="dashboard.php">Kembali</a>

</body>
</html>
