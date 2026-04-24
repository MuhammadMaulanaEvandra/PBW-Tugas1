<?php
include 'koneksi.php';

$id = $_POST['id'];
$judul = $_POST['judul'];
$harga = $_POST['harga'];

$stmt = $conn->prepare(
    "UPDATE buku SET judul=?, harga=? WHERE id=?"
);

$stmt->bind_param("sdi", $judul, $harga, $id);

if ($stmt->execute()) {
    echo "
        <div class='container'>
            <div class='card'>
                <h3>Data berhasil diupdate!</h3>
                <br>
                <a href='index.php'>Kembali</a>
            </div>
        </div>";
} else {
    echo "Eror";
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