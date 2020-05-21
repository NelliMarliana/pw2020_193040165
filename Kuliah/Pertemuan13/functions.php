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

    function hapus($ID ) {
        global $conn;
        mysqli_query($conn, "DELETE FROM mahasiswa WHERE ID = $ID");

        return mysqli_affected_rows($conn);
    }

    function ubah($data) {
        global $conn;
        $ID = $data["ID"];
        $NRP = htmlspecialchars($data["NRP"]);
        $NAMA = htmlspecialchars($data["NAMA"]);
        $EMAIL = htmlspecialchars($data["EMAIL"]);
        $JURUSAN = htmlspecialchars($data["JURUSAN"]);
        $GAMBAR = htmlspecialchars($data["GAMBAR"]);

        $query = "UPDATE mahasiswa SET
                    NRP = '$NRP', 
                    NAMA = '$NAMA',
                    EMAIL = '$EMAIL',
                    JURUSAN = '$JURUSAN',
                    GAMBAR = '$GAMBAR'
                    WHERE ID = $ID
                    ";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function cari($keyword) {
        global $conn;
        $query = "SELECT * FROM mahasiswa
                    WHERE 
                    NRP LIKE '%$keyword%' OR
                    NAMA LIKE '%$keyword%' OR
                    EMAIL LIKE '%$keyword%' OR
                    JURUSAN LIKE '%$keyword%'";

        $result = mysqli_query($conn, $query);
        $rows = [];

        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }

         return $rows;
    }

    function login($data) {
        global $conn;
        $username = htmlspecialchars($data['username']);
        $password = htmlspecialchars($data['password']);

        if ($user = query("SELECT * FROM user WHERE username = '$username'")) {
            if (password_verify($password, $user['password'])) {
                $_SESSION['login'] = true;
                header("Location: index.php");
                exit;
            }
        }   

        return [
            'error' => true,
            'pesan' => 'Username / Password Salah!' 
        ];
    }

    function registrasi($data) {
        global $conn;
        $username = htmlspecialchars(strtolower($data['username']));
        $password1 = mysqli_real_escape_string($conn, $data['password1']);
        $password2 = mysqli_real_escape_string($conn, $data['password2']);

        if (empty($username) || empty($password1) || empty($password2)) {
            echo "<script>
                    alert('username / password tidak boleh kosong!');
                    document.location.href = 'registrasi.php';
                </script>";

            return false;   
        }

        if (query("SELECT * FROM user WHERE username = '$username'")) {
            echo "<script>
                    alert('username sudah terdaftar!');
                    document.location.href = 'registrasi.php';
                </script>";

            return false;       
        }

        if ($password1 !== $password2) {
            echo "<script>
                    alert('konfirmasi password tidak sesuai!');
                    document.location.href = 'registrasi.php';
                </script>";

        return false;
        }

        if (strlen($password1) < 5) {
            echo "<script>
                    alert('password terlalu pendek!');
                    document.location.href = 'registrasi.php';
                </script>";

        return false;   
        }

        $password_baru = password_hash($password1, PASSWORD_DEFAULT);

        $query = "INSERT INTO user
                VALUES
                (null, '$username', '$password_baru')
                ";

        mysqli_query($conn, $query) or die(mysqli_error($conn));

        return mysqli_affected_rows($conn);
    }
?>