<?php
include 'koneksi.php';

$kode_produk = $_POST['kode_produk'];
$nama_emas   = $_POST['nama_emas'];
$deskripsi   = $_POST['deskripsi'];
$berat       = $_POST['berat'];
$stok        = $_POST['stok'];
$harga_jual  = $_POST['harga_jual'];

mysqli_query($conn, "INSERT INTO emas VALUES(
    '$kode_produk',
    '$nama_emas',
    '$deskripsi',
    '$berat',
    '$stok',
    '$harga_jual'
)");

header("Location: lihat_emas.php");
?>