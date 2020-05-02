<?php 
    require 'functions.php';
    $pakaian = query("SELECT * FROM pakaian");

    if(isset($_POST["cari"])) {
        $pakaian = cari($_POST["keyword"]);
    }
      
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laihant 6 E</title>
</head>
<body>
    <div class="container">
        <h1>NELSEU</h1>
        <a href="tambah.php">Tambah Data Pakaian</a>
        <br><br>

        <form action="" method="POST">
            <input type="text" name="keyword" size="50" autofocus placeholder="Masukkan Keyword Pencraian" autocomplete="off"> 
            <button type="submit" name="cari">cari</button>
        </form>
        <br><br>

        <table cellpadding="10" cellspacing="0" border="1">
            <tr>
                <th>#</th>
                <th>OPSI</th>
                <th>GAMBAR</th>
                <th>JENIS_PAKAIAN</th>
                <th>UKURAN</th>
                <th>HARGA</th>
                <th>STOK</th>
                <th>KETERANGAN</th>
            </tr>

            <?php $i = 1; ?>
            <?php foreach($pakaian as $row): ?>
                    
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="ubah.php?ID=<?= $row["ID"]; ?>">Ubah</a> | 
                    <a href="hapus.php?ID=<?= $row['ID']; ?>" onclick="return confirm('Apakah Anda Yakin akan Hapus Data ini?')">Hapus</a>
                </td>
                <td><img src="../assets/img/<?= $row["GAMBAR"]; ?>" width="100"></td>
                <td><?= $row["JENIS_PAKAIAN"]; ?></td>
                <td><?= $row["UKURAN"]; ?></td>
                <td><?= $row["HARGA"]; ?></td>
                <td><?= $row["STOK"]; ?></td>
                <td><?= $row["KETERANGAN"]; ?></td>
            </tr>
        
            <?php $i++; ?>
            <?php endforeach ?>
        </table>
    </div>
</body>
</html>