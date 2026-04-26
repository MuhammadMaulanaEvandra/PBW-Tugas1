<?php
include 'koneksi.php';

$id = $_POST['id'];
$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$tahun_terbit = $_POST['tahun_terbit'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

$stmt = $conn->prepare(
    "UPDATE buku SET judul=?, penulis=?, tahun_terbit=?, harga=?, stok=? WHERE id=?"
);

$stmt->bind_param("ssidii", $judul, $penulis, $tahun_terbit, $harga, $stok, $id);

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