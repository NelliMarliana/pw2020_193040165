<?php
    session_start();

    if (!isset($_SESSION['login'])) {
        header("Location: login.php");
        exit;  
    }

    require 'functions.php';
    $mahasiswa = query("SELECT * FROM mahasiswa");

    if(isset($_POST["cari"])) {
        $mahasiswa = cari($_POST["keyword"]);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <a href="logout.php">Logout</a>
    <h3>Daftar Mahasiswa</h3>
    <a href="tambah.php">Tambah Data Mahasiswa</a>
    <br><br>

    <form action="" method="POST">
        <input type="text" name="keyword" size="50" autofocus placeholder="Masukkan Keyword Pencarian" autocomplete="off"> 
        <button type="submit" name="cari">cari</button>
    </form>
    <br><br>

    <table border='1' cellpadding='10' cellspacing='0'>
        <tr>
            <th>#</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Aksi</th>
        </tr>

        <?php if (empty($mahasiswa)) : ?>
        
        <tr>
            <td>
                <p style="color: red; font-style:italic">data mahasiswa tidak ditemukan!</p>
            </td>
        </tr>

        <?php endif; ?>
    
        <?php $i = 1;
        foreach ($mahasiswa as $row) : ?>
        
        <tr>
            <td><?= $i++ ?></td>
            <td><img src="img/<?= $row["GAMBAR"]; ?>" width="100px"></td>
            <td><?= $row["NAMA"]; ?></td>
            <td>
                <a href="detail.php?ID=<?= $row['ID'] ?>"> lihat detail</a>
            </td>
        </tr> 
        
        <?php endforeach; ?>
    </table>
</body>
</html>