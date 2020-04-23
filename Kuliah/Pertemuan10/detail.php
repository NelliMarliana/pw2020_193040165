<?php
    require 'functions.php';
    $id = $_GET['id'];
    $m = query("SELECT * FROM mahasiwa WHERE id = $id");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>
    <h3>Detail Mahasiswa</h3>
    <ul>
        <li><img src="img/<?= $m['Gambar']; ?>" width="100px"></li>
        <li>NRP : <?= $m['Nrp']; ?></li>
        <li>Nama : <?= $m['Nama']; ?></li>
        <li>Email : <?= $m['Email']; ?></li>
        <li>Jurusan : <?= $m['Jurusan']; ?></li>
        <li><a href="">Ubah</a> | <a href="">Hapus</a></li>
        <li><a href="Latihan3.php">Kembali ke daftar mahasiswa</a></li>
    </ul>
</body>
</html>