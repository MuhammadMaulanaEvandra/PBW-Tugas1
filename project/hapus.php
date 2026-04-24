<?php
include 'koneksi.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {

    $id = $_GET['id'];

    $stmt = $conn->prepare("DELETE FROM buku WHERE id=?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "
            <div class='container'>
                <div class='card'>
                    <h3>Data berhasil dihapus!</h3>
                    <br>
                    <a href='index.php'>Kembali</a>
                </div>
            </div>
            ";
    } else {
        echo "Eror";
    }

} else {
    echo "ID tidak valid!";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Pengelolaan Buku</title>
    <link rel="stylesheet" href="style.css">
</head>
</html>