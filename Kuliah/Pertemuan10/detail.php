<?php
    require 'functions.php';
    
    if(!isset($_GET['ID'])) {
        header("location: ../Latihan3.php");
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
            <a href="">Ubah</a> | 
            <a href="">Hapus</a>
        </li><br><br>
        <li><a href="Latihan3.php">Kembali ke daftar mahasiswa</a></li>
    </ul>
</body>
</html>