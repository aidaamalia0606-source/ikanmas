<?php
include 'koneksi.php';

$kode_produk = $_POST['kode_produk'];
$nama_emas   = $_POST['nama_emas'];
$deskripsi   = $_POST['deskripsi'];
$berat       = $_POST['berat'];
$stok        = $_POST['stok'];
$harga_jual  = $_POST['harga_jual'];

mysqli_query($conn, "UPDATE emas SET
    nama_emas='$nama_emas',
    deskripsi='$deskripsi',
    berat='$berat',
    stok='$stok',
    harga_jual='$harga_jual'
WHERE kode_produk='$kode_produk'");

header("Location: lihat_emas.php");
?>