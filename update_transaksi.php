<?php
include 'koneksi.php';

$id_transaksi = $_POST['id_transaksi'];
$nama_pembeli = $_POST['nama_pembeli'];
$tanggal_beli = $_POST['tanggal_beli'];
$nama_emas = $_POST['nama_emas'];
$jumlah = $_POST['jumlah'];
$voucher = $_POST['voucher'];

if($nama_emas=="Antam"){
    $harga = 10000000;
}
else if($nama_emas=="UBS"){
    $harga = 5000000;
}
else{
    $harga = 1000000;
}

$subtotal = $jumlah * $harga;

if($voucher=="EMAS10"){
    $total = $subtotal - ($subtotal * 10 / 100);
}
else if($voucher=="EMAS20"){
    $total = $subtotal - ($subtotal * 20 / 100);
}
else{
    $total = $subtotal;
}

mysqli_query($conn,"UPDATE transaksi SET
nama_pembeli='$nama_pembeli',
tanggal_beli='$tanggal_beli',
nama_emas='$nama_emas',
jumlah='$jumlah',
harga='$harga',
voucher='$voucher',
total='$total'
WHERE id_transaksi='$id_transaksi'");

header("Location: lihat_transaksi.php");
?>