<!DOCTYPE html>
<html>
<head>
    <title>Tambah Buku</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <div class="card">
            <h2>Tambah Buku</h2>

            <form method="POST" action="proses_tambah.php">
                
                <label>Judul</label>
                <input type="text" name="judul">

                <label>Penulis</label>
                <input type="text" name="penulis">

                <label>Tahun Terbit</label>
                <input type="number" name="tahun_terbit">

                <label>Harga</label>
                <input type="number" name="harga">

                <label>Stok</label>
                <input type="number" name="stok">

                <button type="submit">Save</button>
            </form>

            <a href="index.php" class="btn-back">← Kembali</a>
        </div>
    </div>

</body>
</html>