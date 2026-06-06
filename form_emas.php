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

<h2>TOKO EMAS "IKAN MAS"</h2>
</div>
    <div class="home-box">
        <h2>TOKO EMAS "IKAN MAS"</h2>
        <p>MELAYANI PEMBELI DENGAN SEPENUH HATI</p>
    </div>
    <div class="container">
    <h2>Tambah Data Emas</h2>

    <form action="simpan_emas.php" method="POST">
        <label>Kode Produk</label>
        <input type="text" name="kode_produk" required>

        <label>Nama Emas</label>
        <input type="text" name="nama_emas" required>

        <label>Deskripsi</label>
        <textarea name="deskripsi" required></textarea>

        <label>Berat</label>
        <input type="number" name="berat" required>

        <label>Stok</label>
        <input type="number" name="stok" required>

        <label>Harga Jual</label>
        <input type="number" name="harga_jual" required>

        <button type="submit" name="submit">Simpan</button>
    </form>
</div>

</body>
</html>