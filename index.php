<?php
session_start();

require_once "config.php";
require_once "class/Database.php";
require_once "class/Form.php";

// Ambil PATH
$path = $_SERVER['PATH_INFO'] ?? '';
$path = trim($path, '/');

// Default module & page
if ($path === '') {
    $mod  = 'artikel';
    $page = 'index';
} else {
    $segments = explode('/', $path);
    $mod  = $segments[0] ?? 'artikel';
    $page = $segments[1] ?? 'index';
}

// Halaman publik
$public_pages = ['user'];

// Proteksi login
if (!in_array($mod, $public_pages)) {
    if (!isset($_SESSION['is_login'])) {
        header('Location: /lab11_php_oop/index.php/user/login');
        exit;
    }
}

// Tentukan file
$file = "module/$mod/$page.php";

// Load halaman
if (file_exists($file)) {
    if ($mod === 'user' && $page === 'login') {
        include $file;
    } else {
        include "template/header.php";
        include $file;
        include "template/footer.php";
    }
} else {
    echo "Halaman tidak ditemukan";
}
