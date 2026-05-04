<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- CSS Custom -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container main-container">

    <div class="form-card">

        <h3 class="mb-4">Tambah Buku</h3>

        <form method="POST" action="proses_tambah.php">

            <!-- JUDUL -->
            <div class="mb-3">

                <label class="form-label">
                    Judul Buku
                </label>

                <input 
                    type="text"
                    name="judul"
                    class="form-control"
                    required
                >

            </div>

            <!-- PENULIS -->
            <div class="mb-3">

                <label class="form-label">
                    Penulis
                </label>

                <input 
                    type="text"
                    name="penulis"
                    class="form-control"
                    required
                >

            </div>

            <!-- TAHUN TERBIT -->
            <div class="mb-3">

                <label class="form-label">
                    Tahun Terbit
                </label>

                <input 
                    type="number"
                    name="tahun_terbit"
                    class="form-control"
                    required
                >

            </div>

            <!-- HARGA -->
            <div class="mb-3">

                <label class="form-label">
                    Harga
                </label>

                <input 
                    type="number"
                    name="harga"
                    class="form-control"
                    required
                >

            </div>

            <!-- STOK -->
            <div class="mb-3">

                <label class="form-label">
                    Stok
                </label>

                <input 
                    type="number"
                    name="stok"
                    class="form-control"
                    required
                >

            </div>

            <!-- BUTTON -->
            <div class="d-flex justify-content-between">

                <a href="index.php" class="btn btn-secondary">
                    ← Kembali
                </a>

                <button type="submit" class="btn btn-primary">
                    Simpan
                </button>

            </div>

        </form>

    </div>

</div>

</body>
</html>