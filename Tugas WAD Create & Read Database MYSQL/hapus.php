<?php
require 'function.php';
$no = $_GET["no"];

if (hapus($no) > 0){
    echo "
    <script>
        alert('Data Dengan Berhasil Telah Dihapus');
        document.location.href = 'index.php';
    </script>
    ";
} else {
    echo "
    <script>
        alert('Data Tidak Terhapus');
        document.location.href = 'index.php';
    </script>
    ";
}
?>