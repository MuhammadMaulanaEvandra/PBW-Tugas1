<?php
session_start();

include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, nama, kataSandi FROM  pengguna_buku WHERE nama=? AND kataSandi=?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows > 0) {

        $user = $result->fetch_assoc();

        $_SESSION['id'] = $user['id'];
        $_SESSION['nama'] = $user['nama'];
        $_SESSION['login_unsika'] = true;

        header("Location: index.php?messege=Login berhasil");
        exit();
    } else {
        header("Location: login.php?messege=Login gagal, periksa username dan password");
    }

    $stmt->close();
}
?>