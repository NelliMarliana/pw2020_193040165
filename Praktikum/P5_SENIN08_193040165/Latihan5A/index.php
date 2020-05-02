<?php 
    $conn = mysqli_connect("localhost", "root", "") or die("Koneksi ke DB Gagal");
    mysqli_select_db($conn, "pw2020_193040165") or die("Database Salah");
    $result = mysqli_query($conn, "SELECT *FROM pakaian");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan 5 A</title>
</head>
<body>
    <div class="container">
        <table cellpadding="10" cellspacing="0" border="1">
            <tr>
                <h1>NELSEU</h1>
                <th>NO</th>
                <th>GAMBAR</th>
                <th>JENIS_PAKAIAN</th>
                <th>UKURAN</th>
                <th>HARGA</th>
                <th>STOK</th>
                <th>KETERANGAN</th>
            </tr>

            <?php $i = 1; ?>
            <?php while($row = mysqli_fetch_assoc($result)): ?>
                    
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
            <?php endwhile ?>
        </table>
    </div>
</body>
</html>