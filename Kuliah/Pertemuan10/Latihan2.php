<?php
    require 'functions.php';
    $mahasiswa = query("SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h3 >Daftar Mahasiswa</h3>
    <table border='1' cellpadding='10' cellspacing='0'>
    <tr>
            <th>#</th>
            <th>GAMBAR</th>
            <th>NRP</th>
            <th>NAMA</th>
            <th>EMAIL</th>
            <th>JURUSAN</th>
            <th>AKSI</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach($mahasiswa as $row): ?>
        
        <tr>
            <td><?= $i++; ?></td>
            <td><img src="img/<?= $row["GAMBAR"]; ?>" width="100"></td>
            <td><?= $row["NRP"]; ?></td>
            <td><?= $row["NAMA"]; ?></td>
            <td><?= $row["EMAIL"]; ?></td>
            <td><?= $row["JURUSAN"]; ?></td>
            <td>
                <a href="">Ubah</a> | 
                <a href="">Hapus</a>
            </td>
        </tr>


        <?php endforeach; ?>
    </table>
</body>
</html>