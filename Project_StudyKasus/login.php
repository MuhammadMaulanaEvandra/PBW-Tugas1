<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Sistem</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">

</head>

<body class="login-body">

    <div class="login-container">

        <!-- CARD LOGIN -->
        <div class="login-card">

            <!-- TITLE -->
            <div class="text-center mb-4">
                <h2 class="login-title">Login Sistem</h2>
                <p class="login-subtitle">Silakan masuk untuk melanjutkan</p>
            </div>

            <!-- ALERT -->
            <?php if (isset($_GET['messege'])): ?>
                <div class="alert alert-info">
                    <?php echo htmlspecialchars($_GET['messege']); ?>
                </div>
            <?php endif; ?>

            <!-- FORM -->
            <form method="POST" action="proses_login.php">

                <!-- USERNAME -->
                <div class="mb-3">
                    <label for="username" class="form-label">Username:</label>
                    <input type="text" class="form-control custom-input" id="username" name="username" placeholder="Masukkan username" required >
                </div>

                <!-- PASSWORD -->
                <div class="mb-4">
                    <label for="password" class="form-label">Password:</label>
                    <input type="password" class="form-control custom-input" id="password" name="password" placeholder="Masukkan password" required>
                </div>

                <!-- BUTTON -->
                <button type="submit" class="btn btn-primary w-100 login-btn">Login</button>

            </form>
        </div>
    </div>

</body>
</html>