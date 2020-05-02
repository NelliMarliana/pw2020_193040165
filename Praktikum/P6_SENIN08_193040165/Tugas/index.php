<?php 
    require 'php/functions.php';
    $pakaian = query("SELECT * FROM pakaian");

    if(isset($_POST["cari"])) {
        $pakaian = cari($_POST["keyword"]);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan 6 D</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <div class="container">
        <h1>NELSEU</h1>

        <form action="" method="POST">
            <input type="text" name="keyword" size="50" autofocus placeholder="Masukkan Keyword Pencraian" autocomplete="off"> 
            <button type="submit" name="cari">cari</button>
        </form>
        <br><br>
        
        <?php foreach($pakaian as $row): ?>
        
        <p class="JENIS_PAKAIAN">
            <a href="php/detail.php?ID=<?= $row['ID'] ?>">
                <?= $row["JENIS_PAKAIAN"]; ?>
            </a>
        </p>            
      
        <?php endforeach ?>
    </div>

    <a href="php/admin.php"><button>Masuk ke Halaman Admin</button></a>
</body>
</html>