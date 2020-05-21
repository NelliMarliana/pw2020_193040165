<?php
    session_start();

    if(!isset($_SESSION ['login'])) {
        header("Location: login.php");
        exit;  
    }
    
    require 'functions.php';

    if(!isset($_GET ['ID'])) {
        header("Location: index.php");
        exit;
      }

    $ID = $_GET ["ID"];
    $mhs = query("SELECT * FROM mahasiswa WHERE ID = $ID");

    if(isset($_POST ["submit"])) {
        if(ubah($_POST) > 0 ) {
            echo "<script>
                    alert('Data Berhasil Diubah');
                    document.location.href = 'index.php';
                </script>";
        } else {
            echo "<script>
                    alert('Data Gagal Diubah');
                    document.location.href = 'index.php';
                </script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Halaman Ubah</title>
    </head>
    
    <body>
        <h1>Form Ubah Data Mahasiswa</h1>
        
        <form action="" method="POST">
            <input type="hidden" name="ID" value="<?= $mhs ["ID"]; ?>">
            <br><br>
            
            <ul>
                <li>
                    <label for="NRP">NRP :</label>
                    <input type="text" name="NRP" id="NRP" required
                    value="<?= $mhs ["NRP"]; ?>">
                    <br><br>
                </li>
                
                <li>
                    <label for="NAMA">NAMA :</label>
                    <input type="text" name="NAMA" id="NAMA"
                    value="<?= $mhs["NAMA"]; ?>">
                    <br><br>
                </li>
        
                <li>
                    <label for="EMAIL">EMAIL :</label>
                    <input type="text" name="EMAIL" id="EMAIL"
                    value="<?= $mhs["EMAIL"]; ?>">
                    <br><br>
                </li>
        
                <li>
                    <label for="JURUSAN">JURUSAN :</label>
                    <input type="text" name="JURUSAN" id="JURUSAN"
                    value="<?= $mhs["JURUSAN"]; ?>">
                    <br><br>
                </li>
        
                <li>
                    <label for="GAMBAR">GAMBAR :</label>
                    <input type="text" name="GAMBAR" id="GAMBAR"
                    value="<?= $mhs["GAMBAR"]; ?>">
                    <br><br>
                </li>
        
                <li>
                    <button type="submit" name="submit">Ubah Data</button>
                    <button type="submit">
                        <a href="index.php">Kembali</a>
                    </button>
                </li>
            </ul>
        </form>
    </body>
</html>