<?php
    session_start();

    if (!isset($_SESSION['login'])) {
        header("Location: login.php");
        exit;  
    }
    require 'functions.php';

    if(isset($_POST["submit"])) {
        if(tambah($_POST) > 0 ) {
            echo "
                <script>
                    alert('Data Berhasil Ditambahkan');
                    document.location.href = 'index.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Data Gagal Ditambahkan');
                    document.location.href = 'index.php';
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
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h1>Form Tambah Data Mahasiswa</h1>
    <form action="" method="POST">
        <ul>
            <li>
                <label for="NAMA">NRP :</label>
                <input type="text" name="NAMA" autofocus required>
                <br><br>
            </li>
            
            <li>
                <label for="NRP">NAMA :</label>
                <input type="text" name="NRP" autofocus required>
                <br><br>
            </li>
      
            <li>
                <label for="EMAIL">EMAIL :</label>
                <input type="text" name="EMAIL" autofocus required>
                <br><br>
            </li>
      
            <li>
                <label for="JURUSAN">JURUSAN :</label>
                <input type="text" name="JURUSAN" autofocus required>
                <br><br>
            </li>
      
            <li>
                <label for="GAMBAR">GAMBAR :</label>
                <input type="text" name="GAMBAR" autofocus required>
                <br><br>
            </li>
      
            <li>
                <button type="submit" name="submit">Tambah Data</button>
                <button type="submit">
                    <a href="index.php">Kembali</a>
                </button>
            </li>
        </ul>
    </form>
</body>
</html>