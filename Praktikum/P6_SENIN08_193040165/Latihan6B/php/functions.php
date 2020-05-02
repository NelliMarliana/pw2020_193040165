<?php
    function koneksi() {
        $conn = mysqli_connect("localhost", "root", "") or die("Koneksi ke DB Gagal");
        mysqli_select_db($conn, "pw2020_193040165") or die("Database Salah");
        return $conn;
    }

    function query($query) {
        $conn = koneksi();
        $result = mysqli_query($conn, $query);
        $rows = [];
        
        while($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }

        return $rows;
    }

    function tambah($data) {
        $conn = koneksi();
        $JENIS_PAKAIAN = htmlspecialchars($data["JENIS_PAKAIAN"]);
        $UKURAN = htmlspecialchars($data["UKURAN"]);
        $STOK = htmlspecialchars($data["STOK"]);
        $HARGA = htmlspecialchars($data["HARGA"]);
        $KETERANGAN = htmlspecialchars($data["KETERANGAN"]);
        $GAMBAR = htmlspecialchars($data["GAMBAR"]);

        $query = "INSERT INTO pakaian
                    VALUES
                    ('', '$JENIS_PAKAIAN', '$UKURAN', '$STOK', '$HARGA', '$KETERANGAN', '$GAMBAR') 
                    ";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }
?>