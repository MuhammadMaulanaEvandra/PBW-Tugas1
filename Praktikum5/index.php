<!DOCTYPE html>
<html>
<head>
    <title>Latihan Nilai Mahasiswa</title>
</head>
<body>

<h3>Form Input Nilai</h3>

<form method="post" action="">
    Nama : <input type="text" name="nama"><br><br>
    Nilai : <input type="number" name="nilai"><br><br>
    <input type="submit" name="submit" value="Proses">
</form>

<hr>

<?php

if (isset($_POST['submit'])) {

    $nama = $_POST['nama'];
    $nilai = $_POST['nilai'];

    if ($nilai >= 85 && $nilai <= 100) {
        $predikat = "A";
    } elseif ($nilai >= 75 && $nilai <= 84) {
        $predikat = "B";
    } elseif ($nilai >= 65 && $nilai <= 74) {
        $predikat = "C";
    } elseif ($nilai >= 50 && $nilai <= 64) {
        $predikat = "D";
    } elseif ($nilai >= 0 && $nilai <= 49) {
        $predikat = "E";
    } else {
        $predikat = "Tidak valid";
    }

    if ($nilai >= 75) {
        $status = "Lulus";
    } else {
        $status = "Tidak Lulus";
    }

    echo "<h3>Luaran yang diharapkan</h3>";
    echo "Nama : $nama <br>";
    echo "Nilai : $nilai <br>";
    echo "Predikat : $predikat <br>";
    echo "Status : $status";
}
?>

</body>
</html>