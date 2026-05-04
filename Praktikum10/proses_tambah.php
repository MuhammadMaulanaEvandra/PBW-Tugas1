<?php
include 'koneksi.php';

$nama_produk = $_POST['nama_produk'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$kategori = $_POST['kategori'];

$stmt = $conn->prepare(
    "INSERT INTO produk (nama_produk, harga, stok, kategori) VALUES (?, ?, ?, ?)"
);

$stmt->bind_param("sdis", $nama_produk, $harga, $stok, $kategori);

$success = false;

if ($stmt->execute()) {
    $success = true;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proses Tambah Produk</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container main-container">

    <div class="form-card text-center">

        <?php if ($success) { ?>
            <div class="alert alert-success">
                Data berhasil ditambahkan!
            </div>
        <?php } else { ?>
            <div class="alert alert-danger">
                Gagal menambahkan data!
            </div>
        <?php } ?>

        <a href="index.php" class="btn btn-primary mt-3">Kembali ke Data Produk</a>

    </div>

</div>

</body>
</html>