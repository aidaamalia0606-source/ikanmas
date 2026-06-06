<?php include 'koneksi.php'; ?>
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
    <a href="tambah_transaksi.php">+ Tambah Transaksi</a> 
   
    <br><br>
    
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>ID Transaksi</th>
                <th>Nama Pembeli</th>
                <th>Tanggal Beli</th>
                <th>Nama Emas</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Voucher</th>
                <th>Total Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = mysqli_query($conn, "SELECT * FROM transaksi");
            while ($d = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td><?php echo $d['id_transaksi']; ?></td>
                <td><?php echo $d['nama_pembeli']; ?></td>
                <td><?php echo $d['tanggal_beli']; ?></td>
                <td><?php echo $d['nama_emas']; ?></td>
                <td><?php echo $d['jumlah']; ?></td>
                <td><?php echo $d['harga']; ?></td>
                <td><?php echo $d['voucher']; ?></td>
                <td><?php echo $d['total']; ?></td>
                <td>
                    <a href="edit_transaksi.php?id=<?php echo $d['id_transaksi']; ?>">Edit</a> | 
                    <a href="delete_transaksi.php?id=<?php echo $d['id_transaksi']; ?>">Hapus</a> |
                     <a href="cetak.php?id_transaksi=<?php echo $d['id_transaksi']; ?>">Cetak</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

</body>
</html>