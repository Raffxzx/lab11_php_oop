<?php
// JANGAN session_start()
// JANGAN require config.php
// SEMUA sudah dari index.php

// Jika sudah login
if (isset($_SESSION['is_login'])) {
    header('Location: /lab11_php_oop/artikel');
    exit;
}

$message = "";

// Proses login
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($password === '1234') {
        $_SESSION['is_login'] = true;
        $_SESSION['username'] = $username;
        $_SESSION['nama'] = $username;

        header('Location: /lab11_php_oop/artikel');
        exit;
    } else {
        $message = "Password salah!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5" style="max-width:400px;">
    <h3 class="text-center mb-4">Login User</h3>

    <?php if ($message): ?>
        <div class="alert alert-danger">
            <?= $message ?>
        </div>
    <?php endif; ?>

    <form method="post">
        <div class="mb-3">
            <label>Username</label>
            <input type="text" name="username" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <button class="btn btn-primary w-100">Login</button>
    </form>
</div>

</body>
</html>
            