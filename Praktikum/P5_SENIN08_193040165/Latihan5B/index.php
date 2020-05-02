<?php 
    require 'php/functions.php';
    $pakaian = query("SELECT * FROM pakaian")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan 5 B</title>
</head>
<body>
    <div class="container">
        <h1>NELSEU</h1>
        <table cellpadding="10" cellspacing="0" border="1">
            <tr>
                <th>NO</th>
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
                <td><img src="assets/img/<?= $row["GAMBAR"]; ?>" width="100"></td>
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