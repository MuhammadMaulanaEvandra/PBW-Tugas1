<?php
    
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $email = $_POST['email'];
    $layanan = $_POST['layanan'];

    $harga = [
        "buku" => 5000,
        "pensil" => 3000,
        "pulpen" => 2000
    ];

    $barangDipilih = isset($_POST['barang']) ? $_POST['barang'] : [];
    
    $jumlah = [
        "buku" => $_POST['jumlah_buku'] ?? 0,
        "pulpen" => $_POST['jumlah_pulpen'] ?? 0,
        "pensil" => $_POST['jumlah_pensil'] ?? 0
    ];
    
    define("PAJAK", 0.15);

    $subtotal = 0;
    $detail = "";

    foreach ($barangDipilih as $item) {
    $qty = $jumlah[$item];
    $totalItem = $qty * $harga[$item];
    $subtotal += $totalItem;

    $detail .= "<tr>
                    <td>$item</td>
                    <td>$qty</td>
                    <td>$totalItem</td>
                </tr>";
    }

    $pajak = $subtotal * PAJAK;

    if ($layanan == "Reguler"){
        $biayaLayanan = 0;
    }else{
        $biayaLayanan = 1000;
    }
    
    $total = $subtotal + $pajak + $biayaLayanan;



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Transaksi</title>
</head>
<body>
    <h2>Hasil Pemesanan</h2>
    
    <table border="1" cellpadding="10">
        <tr>
            <td>Nama</td>
            <td><?= $nama ?></td>
        </tr>
        <tr>
            <td>NIM</td>
            <td><?= $nim ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?= $email ?></td>
        </tr>
        <tr>
            <td>Layanan</td>
            <td><?= $layanan ?></td>
        </tr>
    </table>

    <br>

    <table border="1" cellpadding="10">
        <tr>
            <th>Barang</th>
            <th>Jumlah</th>
            <th>Total Harga</th>
        </tr>

        <?= $detail ?>

        <tr>
            <td>Subtotal</td>
            <td><?= number_format($subtotal, 0, ",", ".") ?></td>
        </tr>
        <tr>
            <td>Pajak (15%)</td>
            <td><?= number_format($pajak, 0, ",", ".") ?></td>
        </tr>
        <tr>
            <td>Biaya Layanan</td>
            <td><?= number_format($biayaLayanan, 0, ",", ".") ?></td>
        </tr>
        <tr>
            <td>Total</td>
            <td><?= number_format($total, 0, ",", ".") ?></td>
        </tr>
    </table>

</body>
</html>