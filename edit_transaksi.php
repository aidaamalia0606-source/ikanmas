<?php
include 'koneksi.php';

$id = $_GET['id'];
$data = mysqli_query($conn,
"SELECT * FROM transaksi WHERE id_transaksi='$id'");

$d = mysqli_fetch_array($data);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Transaksi</title>
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
<h2>Edit Data Transaksi</h2>
<form action="update_transaksi.php" method="POST">
<input type="hidden" name="id_transaksi"value="<?php echo $d['id_transaksi']; ?>">

<table>
<tr>
<td>Nama Pembeli</td>
<td>:</td>
<td><input type="text" name="nama_pembeli"value="<?php echo $d['nama_pembeli']; ?>"></td></tr>

<tr>
<td>Tanggal Beli</td>
<td>:</td>
<td><input type="date" name="tanggal_beli"value="<?php echo $d['tanggal_beli']; ?>"></td></tr>

<tr><td>Nama Emas</td>
<td>:</td>
<td><select name="nama_emas">
<option value="Antam"<?php if($d['nama_emas']=="Antam") echo "selected"; ?>>Antam</option>
<option value="UBS"<?php if($d['nama_emas']=="UBS") echo "selected"; ?>>UBS</option>
<option value="Archi"<?php if($d['nama_emas']=="Archi") echo "selected"; ?>>Archi</option></select></td></tr>

<tr><td>Jumlah</td>
<td>:</td>
<td><input type="number" name="jumlah"value="<?php echo $d['jumlah']; ?>"></td></tr>

<tr><td>Voucher</td>
<td>:</td>
<td><select name="voucher">
<option value="EMAS10"<?php if($d['voucher']=="EMAS10") echo "selected"; ?>>EMAS10</option>
<option value="EMAS20"<?php if($d['voucher']=="EMAS20") echo "selected"; ?>>EMAS20</option>
<option value="Tidak Ada Voucher"<?php if($d['voucher']=="Tidak Ada Voucher") echo "selected"; ?>>Tidak Ada Voucher</option></select></td></tr>

<tr>
<td colspan="3"><button type="submit">Update</button></td>
</tr>
</table>
</form>
</div>
</body>
</html>