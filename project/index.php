<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Pengelolaan Buku</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h2>Data Buku</h2>
    
    <a href="tambah.php">+ Tambah Buku</a>
    <br><br>
    
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Tahun</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
    
        <?php
        $result = $conn->query("SELECT * FROM buku");
        
        while ($row = $result->fetch_assoc()){
        ?>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo htmlspecialchars($row['judul']) ?></td>
                <td><?php echo $row['penulis'] ?></td>
                <td><?php echo $row['tahun_terbit'] ?></td>
                <td><?php echo $row['harga'] ?></td>
                <td><?php echo $row['stok'] ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a> |
                    <a href="hapus.php?id=<?php echo $row['id']; ?>">Hapus</a>
                </td>
            </tr>
        <?php } ?>
    </table>
    
</body>
</html>