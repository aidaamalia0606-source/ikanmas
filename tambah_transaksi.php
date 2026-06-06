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
<form action="simpan_transaksi.php" method="POST">
<table>

<tr>
<td>ID Transaksi</td>
<td>:</td>
<td><input type="text" name="id_transaksi"></td>
</tr>

<tr>
<td>Nama Pembeli</td>
<td>:</td>
<td><input type="text" name="nama_pembeli"></td>
</tr>

<tr>
<td>Tanggal Beli</td>
<td>:</td>
<td><input type="date" name="tanggal_beli"></td>
</tr>

<tr>
<td>Nama Emas</td>
<td>:</td>
<td>
<select name="nama_emas">
<option value="Antam">Antam</option>
<option value="UBS">UBS</option>
<option value="Archi">Archi</option>
</select>
</td>
</tr>

<tr>
<td>Jumlah</td>
<td>:</td>
<td><input type="number" name="jumlah"></td>
</tr>

<tr>
<td>Voucher</td>
<td>:</td>
<td>
<select name="voucher">
<option value="EMAS10">EMAS10</option>
<option value="EMAS20">EMAS20</option>
<option value="Tidak Ada Voucher">Tidak Ada Voucher</option>
</select>
</td>
</tr>

<tr>
<td colspan="3">
<button type="submit">Simpan</button>
</td>
</tr>

</table>

</form>