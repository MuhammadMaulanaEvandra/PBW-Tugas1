<?php include 'koneksi.php'; 

$id = $_GET['id'];

$stmt = $conn->prepare("SELECT * FROM buku WHERE id=?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$data = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Buku</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <div class="card">
            <h2>Edit Buku</h2>

            <form method="POST" action="proses_edit.php">
                <input type="hidden" name="id" value="<?= $data['id'] ?>">

                <label>Judul</label>
                <input type="text" name="judul" value="<?= $data['judul'] ?>">

                <label>Penulis</label>
                <input type="text" name="penulis" value="<?= $data['penulis'] ?>">

                <label>Tahun Terbit</label>
                <input type="number" name="tahun_terbit" value="<?= $data['tahun_terbit'] ?>">

                <label>Harga</label>
                <input type="number" name="harga" value="<?= $data['harga'] ?>">

                <label>Stok</label>
                <input type="number" name="stok" value="<?= $data['stok'] ?>">

                <button type="submit">Update</button>
            </form>

            <a href="index.php" class="btn-back">← Kembali</a>
        </div>
    </div>

</body>
</html>