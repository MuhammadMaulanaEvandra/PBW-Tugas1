<?php

define("PAJAK", 0.10);

$barang = [
    "Keyboard" => 150000,
    "Mouse" => 50000,
    "Flashdisk" => 80000
];

$namaBarang = "Keyboard";

$hargaSatuan = $barang[$namaBarang];

$jumlahBeli = 2;

$totalSebelumPajak = $hargaSatuan * $jumlahBeli;

$pajak = $totalSebelumPajak * PAJAK;

$totalBayar = $totalSebelumPajak + $pajak;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Perhitungan Total Pembelian</title>
    <style>
        body{
            font-family: Arial;
            background:#f5f5f5;
        }
        .box{
            width:400px;
            margin:100px auto;
            padding:20px;
            border:1px solid black;
            background:white;
        }
        h2{
            text-align:center;
        }
    </style>
</head>

<body>

<div class="box">
<h2>Perhitungan Total Pembelian (Dengan Array)</h2>

<p>Nama Barang: <?php echo $namaBarang; ?></p>

<p>Harga Satuan: Rp <?php echo number_format($hargaSatuan,0,",","."); ?></p>

<p>Jumlah Beli: <?php echo $jumlahBeli; ?></p>

<p>Total Harga Sebelum Pajak: Rp <?php echo number_format($totalSebelumPajak,0,",","."); ?></p>

<p>Pajak (10%): Rp <?php echo number_format($pajak,0,",","."); ?></p>

<p><b>Total Bayar: Rp <?php echo number_format($totalBayar,0,",","."); ?></b></p>

</div>

</body>
</html>