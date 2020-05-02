<?php
    $conn = mysqli_connect("localhost", "root", "", "pw2020_193040165");
    
    function query($query) {
        global $conn;
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) == 1) {
            return mysqli_fetch_assoc($result);       
        }

        $rows = [];
        
        while($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }

        return $rows;
    }

    function tambah($data) {
        global $conn;
        $NRP = htmlspecialchars($data["NRP"]);
        $NAMA = htmlspecialchars($data["NAMA"]);
        $EMAIL = htmlspecialchars($data["EMAIL"]);
        $JURUSAN = htmlspecialchars($data["JURUSAN"]);
        $GAMBAR = htmlspecialchars($data["GAMBAR"]);

        $query = "INSERT INTO mahasiswa
                    VALUES
                    ('', '$NRP', '$NAMA', '$EMAIL', '$JURUSAN', '$GAMBAR') 
                    ";
        mysqli_query($conn, $query);

        echo mysqli_error($conn);

        return mysqli_affected_rows($conn);
    }
?>