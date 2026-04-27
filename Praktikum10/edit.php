<?php
include 'koneksi.php';

$id = $_GET['id'];

$stmt = $conn->prepare("SELECT * FROM produk WHERE id=?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$data = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container main-container">

    <div class="form-card">

        <h3 class="mb-4">✏️ Edit Produk</h3>

        <form method="POST" action="proses_edit.php">

            <input type="hidden" name="id" value="<?= $data['id'] ?>">

            <div class="mb-3">
                <label class="form-label">Nama Produk</label>
                <input type="text" name="nama_produk" class="form-control"
                       value="<?= htmlspecialchars($data['nama_produk']) ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Harga</label>
                <input type="number" name="harga" class="form-control"
                       value="<?= $data['harga'] ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Stok</label>
                <input type="number" name="stok" class="form-control"
                       value="<?= $data['stok'] ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Kategori</label>
                <input type="text" name="kategori" class="form-control"
                       value="<?= $data['kategori'] ?>" required>
            </div>

            <div class="d-flex justify-content-between">
                <a href="index.php" class="btn btn-secondary">← Kembali</a>
                <button type="submit" class="btn btn-warning">Update</button>
            </div>

        </form>

    </div>

</div>

</body>
</html>