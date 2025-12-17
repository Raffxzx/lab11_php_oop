<?php
$db = new Database();

$judul = $_POST['judul'];
$isi   = $_POST['isi'];

$sql = "INSERT INTO artikel (judul, isi) VALUES ('$judul', '$isi')";
$db->query($sql);

// redirect ke halaman artikel
header('Location: /lab11_php_oop/artikel');
exit;
