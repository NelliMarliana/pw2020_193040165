<?php
        require 'php/functions.php';

        $pakaian = query("SELECT *FROM pakaian");
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laatihan 5 B</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <table cellpadding="10" cellspacing="0" border="1">
        <tr>
            <h1>NELSEU</h1>
            <th>NO</th>
            <th>Foto</th>
            <th>Jenis Pakaian</th>
            <th>Ukuran</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Keterangan</th>
        </tr>
            
        <?php $n = 1; ?>
        <?php foreach($pakaian as $pkn): ?>
                
        <tr>
            <td><?= $n; ?></td>
            <td><img src="assets/img/<?= $pkn["FOTO"]; ?>"</td>
            <td><?= $pkn["JENIS PAKAIAN"]; ?></td>
            <td><?= $pkn["UKURAN"]; ?></td>
            <td><?= $pkn["HARGA"]; ?></td>
            <td><?= $pkn["STOK"]; ?></td>
            <td><?= $pkn["KETERANGAN"]; ?></td>
        </tr>
            
        <?php $n++; ?>
        <?php endforeach ?>
    </table>
</body>
</html>