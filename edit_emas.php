<?php
include 'koneksi.php';

$kode_produk = $_GET['kode_produk'];

$data = mysqli_query($conn,
"SELECT * FROM emas WHERE kode_produk='$kode_produk'");

$d = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Emas</title>
    <link rel="stylesheet" href="stylee.css">
</head>
<body>

<div class="content">
    <h1>MELAYANI PEMBELI DENGAN SEPENUH HATI</h1>
</div>

<div class="navbar">
    <a href="index.php">Home</a>
    <a href="lihat_emas.php">Data Emas</a>
    <a href="lihat_transaksi.php">Data Transaksi</a>
</div>

<div class="container">

    <h2>Edit Data Emas</h2>

    <form action="update_emas.php" method="POST">

        <input type="hidden" name="kode_produk"
        value="<?php echo $d['kode_produk']; ?>">

        <table>

            <tr>
                <td>Nama Emas</td>
                <td>:</td>
                <td>
                    <input type="text" name="nama_emas"
                    value="<?php echo $d['nama_emas']; ?>" required>
                </td>
            </tr>

            <tr>
                <td>Deskripsi</td>
                <td>:</td>
                <td>
                    <textarea name="deskripsi" required><?php echo $d['deskripsi']; ?></textarea>
                </td>
            </tr>

            <tr>
                <td>Berat (Gram)</td>
                <td>:</td>
                <td>
                    <input type="number" step="0.01" name="berat"
                    value="<?php echo $d['berat']; ?>" required>
                </td>
            </tr>

            <tr>
                <td>Stok</td>
                <td>:</td>
                <td>
                    <input type="number" name="stok"
                    value="<?php echo $d['stok']; ?>" required>
                </td>
            </tr>

            <tr>
                <td>Harga Jual</td>
                <td>:</td>
                <td>
                    <input type="number" name="harga_jual"
                    value="<?php echo $d['harga_jual']; ?>" required>
                </td>
            </tr>

            <tr>
                <td colspan="3" align="center">
                    <button type="submit">Update</button>
                    <a href="lihat_emas.php" class="btn-kembali">Batal</a>
                </td>
            </tr>

        </table>

    </form>

</div>

</body>
</html>