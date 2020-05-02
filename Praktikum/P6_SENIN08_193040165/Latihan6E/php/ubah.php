<?php
    require 'functions.php';
    $ID = $_GET["ID"];
    $pkn = query("SELECT * FROM pakaian WHERE ID = $ID")[0];

    if(isset($_POST["submit"])) {
        if(ubah($_POST) > 0 ) {
            echo "
                <script>
                    alert('Data Berhasil Diubah');
                    document.location.href = 'admin.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Data Gagal Diubah');
                    document.location.href = 'admin.php';
                </script>
            ";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 6 D</title>
</head>
<body>
    <h1>Form Ubah Data Mahasiswa</h1>
    <form action="" method="POST">
        <input type="hidder" name="ID" value="<?= $pkn["ID"]; ?>">
        <ul>
            <li>
                <label for="JENIS_PAKAIAN">JENIS_PAKAIAN :</label>
                <input type="text" name="JENIS_PAKAIAN" required
                value="<?= $pkn["JENIS_PAKAIAN"]; ?>">
                <br><br>
            </li>
            
            <li>
                <label for="UKURAN">UKURAN :</label>
                <input type="text" name="UKURAN" required
                value="<?= $pkn["UKURAN"]; ?>">
                <br><br>
            </li>
      
            <li>
                <label for="HARGA">HARGA :</label>
                <input type="text" name="HARGA" required
                value="<?= $pkn["HARGA"]; ?>">
                <br><br>
            </li>
      
            <li>
                <label for="STOK">STOK :</label>
                <input type="text" name="STOK" required
                value="<?= $pkn["STOK"]; ?>">
                <br><br>
            </li>

            <li>
                <label for="KETERANGAN">KETERANGAN :</label>
                <input type="text" name="KETERANGAN"  required
                value="<?= $pkn["KETERANGAN"]; ?>">
                <br><br>
            </li>
      
            <li>
                <label for="GAMBAR">GAMBAR :</label>
                <input type="text" name="GAMBAR" required
                value="<?= $pkn["GAMBAR"]; ?>">
                <br><br>
            </li>
      
            <li>
                <button type="submit" name="submit">Ubah Data</button>
                <button type="submit">
                    <a href="admin.php" style="text-decoration: none; color: black;">Kembali</a>
                </button>   
            </li>
        </ul>
    </form>
</body>
</html>