<?php
    require 'php/functions.php';
    $pakaian = query("SELECT *FROM pakaian ");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 5 C</title>
</head>
<body>
    <h1 class="judul">NELSEU</h1>
    <?php foreach ($pakaian as $pkn): ?>
    <div class="kotak">
        <p class="nama">
            <a href="php/detail.php?id=<?= $pkn['id']; ?>">
                <?= $pkn["JENIS PAKAIAN"]; ?>
            </a>
        </p>    
    </div>
    <?php endforeach; ?>
</body>
</html>