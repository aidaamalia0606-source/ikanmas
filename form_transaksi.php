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
</div>
    <div class="home-box">
        <h2>TOKO EMAS "IKAN MAS"</h2>
        <p>MELAYANI PEMBELI DENGAN SEPENUH HATI</p>
    </div>


<div class="container">
    <h2>Tambah Data Nilai</h2>
    <form action="simpan_transaksi.php" method="POST">

        <label>ID Transaksi</label>
        <input type="text" name="id_transaksi" required>

        <label>Nama Pembeli</label>
        <input type="text" name="nama_pembeli" required>

        <label>Tanggal Beli</label>
        <input type="date" name="tanggal_beli" required>

        <label>Nama Emas</label>
        <input type="text" name="nama_emas" required>

        <label>Jumlah</label>
        <input type="number" name="jumlah" required>

        <label>Harga</label>
        <input type="number" name="harga" required>

        <label>Voucher</label>
        <input type="text" name="voucher" required>

        <label>Total Harga</label>
        <input type="number" name="total" required>

        <button type="submit" name="submit">Simpan</button>
    </form>
</div>
</body>
</html>