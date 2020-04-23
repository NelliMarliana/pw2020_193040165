<?php
    if(!isset($_GET['id'])) {
    header("location: ../index.php");
    exit;
        }
        require 'functions.php';

        $id = $_GET['id'];

        $pakaian = query("SELECT *FROM pakaian WHERE id = $id")[0];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="gambar">
            <img src=".../assets/img/<?= $pakaian["FOTO"]; ?>" alt="">
        </div>
        <div class="keterangan">
            <p><?= $pakaian["UKURAN"]; ?></p>
            <p><?= $pakaian["STOK"]; ?></p>
            <p><?= $pakaian["HARGA"]; ?></p>
            <p><?= $pakaian["KETERANGAN"]; ?></p>
        </div>
        <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
    </div>
</body>
</html>