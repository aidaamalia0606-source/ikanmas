<?php
include 'koneksi.php';

$kode_produk = $_GET['kode_produk'];

mysqli_query($conn,
"DELETE FROM emas WHERE kode_produk='$kode_produk'");

header("Location: lihat_emas.php");
?>