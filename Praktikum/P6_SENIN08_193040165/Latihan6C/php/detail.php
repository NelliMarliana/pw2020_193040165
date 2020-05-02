<?php
        if(!isset($_GET['ID'])) {
            header("location: ../index.php");
            exit;
        }
    
        require 'functions.php';
        $ID = $_GET['ID'];
        $pakaian = query("SELECT * FROM pakaian WHERE ID = $ID")[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan 6 C</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <div class="container">
        <div class="gambar">
            <img src="../assets/img/<?= $pakaian["GAMBAR"]; ?>" width="100">
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