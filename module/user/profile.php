<?php
// Wajib login
if (!isset($_SESSION['is_login'])) {
    header('Location: /lab11_php_oop/user/login');
    exit;
}

$message = "";

// Proses ubah password
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $password = $_POST['password'] ?? '';

    if ($password !== '') {
        $password_baru = password_hash($password, PASSWORD_DEFAULT);

        $db = new Database();
        $username = $_SESSION['username'];

        $sql = "UPDATE users 
                SET password='{$password_baru}' 
                WHERE username='{$username}'";

        $db->query($sql);
        $message = "Password berhasil diubah";
    }
}
?>

<h3>Profil User</h3>

<p><strong>Nama:</strong> <?= $_SESSION['nama']; ?></p>
<p><strong>Username:</strong> <?= $_SESSION['username']; ?></p>

<?php if ($message): ?>
    <div class="alert alert-success">
        <?= $message; ?>
    </div>
<?php endif; ?>

<form method="post">
    <div class="mb-3">
        <label>Password Baru</label>
        <input type="password" name="password" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">
        Ubah Password
    </button>
</form>
