<?php
include 'koneksi.php';

$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$tahun_terbit = $_POST['tahun_terbit'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

$stmt = $conn->prepare(
    "INSERT INTO buku (judul, penulis, tahun_terbit, harga, stok) 
     VALUES (?, ?, ?, ?, ?)");
    
$stmt->bind_param("ssidi", $judul, $penulis, $tahun_terbit, $harga, $stok);

if ($stmt->execute()) {
    echo ("
        <div class='container'>
            <div class='card'>
                <h3>Data berhasil ditambahkan!</h3>
                <br>
                <a href='index.php'>Kembali</a>
            </div>
        </div>");    
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