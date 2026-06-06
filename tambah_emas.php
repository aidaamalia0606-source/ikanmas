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




<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Emas</title>
</head>
<body>

<div class="container">

    <form action="simpan_emas.php" method="POST">
        <h2>Tambah Data Emas</h2>
        
        <label>Kode Produk</label><br>
        <input type="text" name="kode_produk" required>
        <br><br>

        <label>Nama Emas</label><br>
        <input type="text" name="nama_emas" required>
        <br><br>

        <label>Deskripsi</label><br>
        <textarea name="deskripsi" required></textarea> 
        <br><br>

        <label>Berat (Gram)</label><br>
        <input type="number" step="0.01" name="berat" required>
        <br><br>

        <label>Stok</label><br>
        <input type="number" name="stok" required>
        <br><br>

        <label>Harga Jual</label><br>
        <input type="number" name="harga_jual" required>
        <br><br>

        <button type="submit">Simpan</button>
        <a href="lihat_emas.php">
        <button type="submit">Batal</button></a>
        

    </form>
</div>

</body>
</html>