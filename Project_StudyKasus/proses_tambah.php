<?php
include 'koneksi.php';

$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$tahun_terbit = $_POST['tahun_terbit'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

$stmt = $conn->prepare( "INSERT INTO buku (judul, penulis, tahun_terbit, harga, stok) VALUES (?, ?, ?, ?, ?)");

$stmt->bind_param( "ssidi", $judul, $penulis, $tahun_terbit, $harga, $stok );
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
    <title>Proses Tambah Buku</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container main-container">
        <div class="form-card text-center">
            <?php if ($success) { ?>
                <div class="alert alert-success">Data berhasil ditambahkan!</div>
            <?php } else { ?>
                <div class="alert alert-danger">Gagal menambahkan data!</div>
            <?php } ?>
            <a href="index.php" class="btn btn-primary mt-3">Kembali ke Data Buku</a>
        </div>
    </div>

</body>
</html>
