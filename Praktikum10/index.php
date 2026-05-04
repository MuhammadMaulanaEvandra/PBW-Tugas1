<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Pengelolaan Produk</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- CSS Custom -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container main-container">

    <!-- HEADER -->
    <div class="header">
        <h2>Data Produk</h2>

        <div class="d-flex gap-2">
            <a href="tambah.php" class="btn btn-primary">+ Tambah Produk</a>
            <a href="login.php" class="btn btn-danger">Logout</a>
        </div>
    </div>

    <!-- CARD -->
    <div class="custom-card">

        <!-- SEARCH -->
        <form method="GET" class="search-form">
            <input type="text" name="keyword" placeholder="Cari nama produk / kategori..." value="<?php echo isset($_GET['keyword']) ? $_GET['keyword'] : ''; ?>">
            <button type="submit" class="btn btn-success">Cari</button>
        </form>

        <!-- TABLE -->
        <div class="table-responsive">
            <table class="table custom-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Kategori</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>

                <?php
                $keyword = isset($_GET['keyword']) ? $conn->real_escape_string($_GET['keyword']) : '';

                if ($keyword != '') {
                    $sql = "SELECT * FROM produk WHERE nama_produk LIKE '%$keyword%' OR kategori LIKE '%$keyword%'";
                } else {
                    $sql = "SELECT * FROM produk";
                }

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()){
                ?>
                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo htmlspecialchars($row['nama_produk']) ?></td>
                        <td>Rp <?php echo number_format($row['harga'],0,',','.') ?></td>
                        <td><?php echo $row['stok'] ?></td>
                        <td><?php echo $row['kategori'] ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="hapus.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data?')"> Hapus</a>
                        </td>
                    </tr>
                <?php 
                    }
                } else {
                    echo "<tr><td colspan='6' class='text-center text-muted'>Data tidak ditemukan</td></tr>";
                }
                ?>

                </tbody>
            </table>
        </div>

    </div>
</div>

</body>
</html>