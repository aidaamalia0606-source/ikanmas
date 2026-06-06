<?php
include 'koneksi.php';

$id = $_GET['id_transaksi'];

$data = mysqli_query($conn,
"SELECT * FROM transaksi WHERE id_transaksi='$id'");

$d = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cetak Transaksi</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            margin:40px;
        }

        h2{
            text-align:center;
        }

        table{
            width:60%;
            margin:auto;
        }

        td{
            padding:8px;
        }

        hr{
            margin-bottom:20px;
        }
    </style>
</head>

<body onload="window.print()">

<h2>TOKO EMAS "IKAN MAS"</h2>
<hr>

<table>

<tr>
    <td>ID Transaksi</td>
    <td>:</td>
    <td><?php echo $d['id_transaksi']; ?></td>
</tr>

<tr>
    <td>Nama Pembeli</td>
    <td>:</td>
    <td><?php echo $d['nama_pembeli']; ?></td>
</tr>

<tr>
    <td>Tanggal Beli</td>
    <td>:</td>
    <td><?php echo $d['tanggal_beli']; ?></td>
</tr>

<tr>
    <td>Nama Emas</td>
    <td>:</td>
    <td><?php echo $d['nama_emas']; ?></td>
</tr>

<tr>
    <td>Jumlah</td>
    <td>:</td>
    <td><?php echo $d['jumlah']; ?></td>
</tr>

<tr>
    <td>Harga</td>
    <td>:</td>
    <td>Rp <?php echo number_format($d['harga']); ?></td>
</tr>

<tr>
    <td>Voucher</td>
    <td>:</td>
    <td><?php echo $d['voucher']; ?></td>
</tr>

<tr>
    <td>Total Harga</td>
    <td>:</td>
    <td>Rp <?php echo number_format($d['total']); ?></td>
</tr>

</table>


</body>
</html>