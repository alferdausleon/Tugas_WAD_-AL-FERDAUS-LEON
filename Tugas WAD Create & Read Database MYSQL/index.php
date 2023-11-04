<?php
require'functions.php';
$barang=query("SELECT*FROM daftar_barang");
?>

<!DOCTYPE html>
<html lang="en">
<head><tittle>HALAMAN ADMIN</title><head>
<body>
    <h1> Daftar Barang Toko Leon</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Nama Barang</th>
            <th>Kode Barang</th>
            <th>Harga Barang</th>
            <th>Stok Barang</th>
        </tr>
        <?php $i = 1;
        foreach ($barang as $row) : ?> 
            
        <tr>
            <td><?= $i ?></td>
            <td>
                <a href="">Ubah daftar</a>
                <a href="hapus.php?no= <?= $row["no"];?>" onclick="return confirm('Apakah anda yakin ingin menghapus data?');">Hapus daftar</a>
            </td>
            <td><img src="image/<?= $row['gambar']; ?>" width="50"></td>
                <td><?= $row["namabarang"]; ?></td>
                <td><?= $row["kodebarang"]; ?></td>
                <td><?= $row["hargajual"]; ?></td>
                <td><?= $row["stokbarang"]; ?></td>
            </tr>
            <?php 
            $i++; 
            endforeach;
            ?>
        </table>
    </body>
</html>