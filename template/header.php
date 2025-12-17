<!DOCTYPE html>
<html lang="en">
<head>
    <title>Praktikum OOP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="../artikel/index">Praktikum</a>

        <ul class="navbar-nav me-auto">
            <?php if (isset($_SESSION['is_login'])): ?>
                <li class="nav-item">
                    <a class="nav-link" href="../artikel/index">Artikel</a>
                </li>
            <?php endif; ?>
        </ul>

        <ul class="navbar-nav">
            <?php if (isset($_SESSION['is_login'])): ?>
                <li class="nav-item">
                    <a class="nav-link" href="../user/profile"><?= $_SESSION['nama'] ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../user/logout">Logout</a>
                </li>
            <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link" href="../user/login">Login</a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</nav>

<div class="container mt-4">
