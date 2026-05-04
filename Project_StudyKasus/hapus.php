<?php
include 'koneksi.php';

$success = false;
$error = "";

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $conn->prepare("DELETE FROM buku WHERE id=?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        $success = true;
    } else {
        $error = "Gagal menghapus data!";
    }
} else {
    $error = "ID tidak valid!";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Buku</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container main-container">
        <div class="form-card text-center">
            <?php if ($success) { ?>
                <div class="alert alert-danger">Data buku berhasil dihapus!</div>

            <?php } else { ?>
                <div class="alert alert-warning">
                    <?php echo $error; ?>
                </div>
            <?php } ?>
            <a href="index.php" class="btn btn-primary mt-3">Kembali ke Data Buku</a>
        </div>
    </div>

</body>
</html>