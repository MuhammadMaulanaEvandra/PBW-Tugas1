<?php
include 'koneksi.php';

$id = $_GET['id'];

$stmt = $conn->prepare("SELECT * FROM buku WHERE id=?");
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
    <title>Edit Buku</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container main-container">
        <div class="form-card">
            <h3 class="mb-4">Edit Buku</h3>

            <form method="POST" action="proses_edit.php">

                <!-- ID -->
                <input type="hidden" name="id" value="<?= $data['id'] ?>">

                <!-- JUDUL -->
                <div class="mb-3">
                    <label class="form-label">Judul Buku</label>
                    <input type="text" name="judul" class="form-control" value="<?= htmlspecialchars($data['judul']) ?>" required >
                </div>

                <!-- PENULIS -->
                <div class="mb-3">
                    <label class="form-label">Penulis</label>
                    <input type="text" name="penulis" class="form-control" value="<?= htmlspecialchars($data['penulis']) ?>" required >
                </div>

                <!-- TAHUN -->
                <div class="mb-3">
                    <label class="form-label">Tahun Terbit</label>
                    <input type="number" name="tahun_terbit" class="form-control" value="<?= $data['tahun_terbit'] ?>" required >
                </div>

                <!-- HARGA -->
                <div class="mb-3">
                    <label class="form-label">Harga</label>
                    <input type="number" name="harga" class="form-control" value="<?= $data['harga'] ?>" required >
                </div>

                <!-- STOK -->
                <div class="mb-3">
                    <label class="form-label">Stok</label>
                    <input type="number" name="stok" class="form-control" value="<?= $data['stok'] ?>" required >
                </div>

                <!-- BUTTON -->
                <div class="d-flex justify-content-between">
                    <a href="index.php" class="btn btn-secondary">← Kembali</a>
                    <button type="submit" class="btn btn-warning">Update</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>