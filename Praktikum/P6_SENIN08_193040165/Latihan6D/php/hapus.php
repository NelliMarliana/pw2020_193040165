<?php
    require 'functions.php';
    $ID = $_GET["ID"];

    if(hapus($ID) > 0) {
        echo "
                <script>
                    alert('Data Berhasil Dihapus');
                    document.location.href = 'admin.php';
                </script>
            ";
    } else {
        echo "
                <script>
                    alert('Data Gagal Dihapus');
                    document.location.href = 'admin.php';
                </script>
            ";
    }
?>