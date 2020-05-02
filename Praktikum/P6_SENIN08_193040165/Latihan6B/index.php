<?php 
    require 'php/functions.php';
    $pakaian = query("SELECT * FROM pakaian");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan 6 B</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <div class="container">
        <h1>NELSEU</h1>
        
        <?php foreach($pakaian as $row): ?>
        
        <p class="JENIS_PAKAIAN">
            <a href="php/detail.php?ID=<?= $row['ID'] ?>">
                <?= $row["JENIS_PAKAIAN"]; ?>
            </a>
        </p>            
               
        <?php endforeach ?>
    </div>
</body>
</html>