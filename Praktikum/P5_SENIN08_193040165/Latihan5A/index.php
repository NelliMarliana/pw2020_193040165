<?php 
    $conn = mysqli_connect("localhost", "root", "") or die("Koneksi ke DB gagal");

    mysqli_select_db($conn, "pw_193040165") or die("Database salah");

    $result = mysqli_query($conn, "SELECT *FROM pakaian");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 5 A</title>
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
        <?php while($row = mysqli_fetch_assoc($result)): ?>
                
            <tr>
                <td><?= $n; ?></td>
                <td><img src="assets/img/<?= $row["FOTO"]; ?>"></td>
                <td><?php echo $row["JENIS PAKAIAN"]; ?></td>
                <td><?php echo $row["UKURAN"]; ?></td>
                <td><?php echo $row["HARGA"]; ?></td>
                <td><?php echo $row["STOK"]; ?></td>
                <td><?php echo $row["KETERANGAN"]; ?></td>
            </tr>
    
        <?php $n++; ?>
        <?php endwhile ?>
    </table>
</body>
</html>