<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <title>Login</title>
</head>
<body class="container mt-5">
    
    <h2>Masuk kedalam sistem</h2>

    <?php if (isset($_GET['messege'])): ?>
        <div class="alert alert-info"><?php echo htmlspecialchars($_GET['messege']); ?>
    </div>

    <?php endif; ?>

    <form method="POST" action="proses_login.php">

        <div class="mb-3">
            <label for="username">Username:</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>

        <div class="mb-3">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Login</button>

    </form>
    
</body>
</html>