<?php
include 'koneksi.php'; 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
<link rel="stylesheet" href="stylee.css">
</head>
<body>

<div>
<div class="content">

<h1>DATA IKAN EMAS</h1>

</div>
<div class="navbar">
    <a href="index.php">Home</a>
    <a href="lihat_emas.php">Data Emas</a>
    <a href="lihat_transaksi.php">Data Transaksi</a>
</div>
</div>
</div>
    <div class="home-box">
        <h2>TOKO EMAS "IKAN MAS"</h2>
        <p>MELAYANI PEMBELI DENGAN SEPENUH HATI</p>
    </div>


<div class="container">
    <a href="tambah_emas.php">+ Tambah Emas</a>
    <br><br>

    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>Kode Produk</th>
            <th>Nama Emas</th>
            <th>Deskripsi</th>
            <th>Berat (gr)</th>
            <th>Stok</th>
            <th>Harga Jual</th>
            <th>Aksi</th>
        </tr>

        <?php
        $data = mysqli_query($conn, "SELECT * FROM emas");
        while ($d = mysqli_fetch_array($data)) {
        ?>
        <tr>
            <td><?= $d['kode_produk']; ?></td>
            <td><?= $d['nama_emas']; ?></td>
            <td><?= $d['deskripsi']; ?></td>
            <td><?= $d['berat']; ?> gr</td>
            <td><?= $d['stok']; ?></td>
            <td>Rp <?= number_format($d['harga_jual'], 0, ',', '.'); ?></td>
          <td>
    <a href="edit_emas.php?kode_produk=<?php echo $d['kode_produk']; ?>">Edit</a> |
    <a href="delete_emas.php?kode_produk=<?php echo $d['kode_produk']; ?>">Delete</a>
</td>
        </tr>
        <?php } ?>
    </table>
</div>

</body>
</html>