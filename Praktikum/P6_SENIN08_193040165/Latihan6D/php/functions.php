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

    function hapus($ID ) {
        $conn = koneksi();
        mysqli_query($conn, "DELETE FROM pakaian WHERE ID = $ID");

        return mysqli_affected_rows($conn);
    }

    function ubah($data) {
        $conn = koneksi();
        $ID = $data["ID"];
        $JENIS_PAKAIAN = htmlspecialchars($data["JENIS_PAKAIAN"]);
        $UKURAN = htmlspecialchars($data["UKURAN"]);
        $HARGA = htmlspecialchars($data["HARGA"]);
        $STOK = htmlspecialchars($data["STOK"]);
        $KETERANGAN = htmlspecialchars($data["KETERANGAN"]);
        $GAMBAR = htmlspecialchars($data["GAMBAR"]);

        $query = "UPDATE pakaian SET
                    JENIS_PAKAIAN = '$JENIS_PAKAIAN', 
                    UKURAN = '$UKURAN',
                    HARGA = '$HARGA',
                    STOK = '$STOK',
                    KETERANGAN = '$KETERANGAN',
                    GAMBAR = '$GAMBAR'
                    WHERE ID = $ID 
                    ";
        mysqli_query($conn, $query)or die(mysqli_error($conn));

        return mysqli_affected_rows($conn);
    }
?>