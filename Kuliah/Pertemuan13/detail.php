<?php
    require 'functions.php';
    
    if(!isset($_GET['ID'])) {
        header("location: ../index.php");
        exit;
    }

    $ID = $_GET['ID'];
    $mahasiswa = query("SELECT * FROM mahasiswa WHERE ID = $ID");
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
        <img src="img/<?= $mahasiswa["GAMBAR"]; ?>" width="100px"><br><br>
        
        <li>NRP : <?= $mahasiswa["NRP"]; ?></li><br>
        <li>NAMA : <?= $mahasiswa["NAMA"]; ?></li><br>
        <li>EMAIL : <?= $mahasiswa["EMAIL"]; ?></li><br>
        <li>JURUSAN : <?= $mahasiswa["JURUSAN"]; ?></li><br><br>
        <li>
            <a href="ubah.php?ID=<?= $mahasiswa["ID"]; ?>">Ubah</a> | 
            <a href="hapus.php?ID=<?= $mahasiswa["ID"]; ?>" onclick="return confirm('Apakah Anda Yakin akan Menghapus Data?');">Hapus</a>
        </li><br><br>
        <li><a href="index.php">Kembali ke daftar mahasiswa</a></li>
    </ul>
</body>
</html>