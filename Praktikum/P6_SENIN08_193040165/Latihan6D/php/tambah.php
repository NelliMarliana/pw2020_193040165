<?php
    require 'functions.php';

    if(isset($_POST["submit"])) {
        if(tambah($_POST) > 0 ) {
            echo "
                <script>
                    alert('Data Berhasil Ditambahkan');
                    document.location.href = 'admin.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Data Gagal Ditambahkan');
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
    <h1>Form Tambah Data Pakaian</h1>
    <form action="" method="POST">
        <ul>
            <li>
                <label for="JENIS_PAKAIAN">JENIS_PAKAIAN :</label>
                <input type="text" name="JENIS_PAKAIAN" required>
                <br><br>
            </li>
            
            <li>
                <label for="UKURAN">UKURAN :</label>
                <input type="text" name="UKURAN" required>
                <br><br>
            </li>
      
            <li>
                <label for="HARGA">HARGA :</label>
                <input type="text" name="HARGA" required>
                <br><br>
            </li>
      
            <li>
                <label for="STOK">STOK :</label>
                <input type="text" name="STOK" required>
                <br><br>
            </li>

            <li>
                <label for="KETERANGAN">KETERANGAN :</label>
                <input type="text" name="KETERANGAN"  required>
                <br><br>
            </li>
      
            <li>
                <label for="GAMBAR">GAMBAR :</label>
                <input type="text" name="GAMBAR" required>
                <br><br>
            </li>
      
            <li>
                <button type="submit" name="submit">Tambah Data</button>
                <button type="submit">
                    <a href="admin.php" style="text-decoration: none; color: black;">Kembali</a>
                </button>   
            </li>
        </ul>
    </form>
</body>
</html>