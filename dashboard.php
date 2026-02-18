<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard SIMDATIN</title>
</head>
<body>

<h2>Dashboard SIMDATIN</h2>

<p>Selamat datang, <b><?php echo $_SESSION['username']; ?></b></p>
<p>Role: <?php echo $_SESSION['role']; ?></p>

<hr>

<ul>
    <li><a href="informasi.php">Informasi PDDIKTI</a></li>
    <li><a href="logout.php">Logout</a></li>
</ul>

</body>
</html>
