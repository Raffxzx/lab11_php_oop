<?php
$db = new Database();
$result = $db->query("SELECT * FROM artikel ORDER BY id DESC");
?>

<h3>Data Artikel</h3>

<a href="/lab11_php_oop/artikel/tambah" class="btn btn-primary mb-3">
    + Tambah Artikel
</a>

<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th width="5%">ID</th>
            <th width="25%">Judul</th>
            <th>Isi</th>
            <th width="15%">Aksi</th>
        </tr>
    </thead>
    <tbody>
    <?php if ($result && $result->num_rows > 0): ?>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['id']; ?></td>
            <td><?= htmlspecialchars($row['judul']); ?></td>
            <td><?= nl2br(htmlspecialchars($row['isi'])); ?></td>
            <td>
                <a href="/lab11_php_oop/artikel/ubah?id=<?= $row['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
                <a href="/lab11_php_oop/artikel/hapus?id=<?= $row['id']; ?>" 
                   class="btn btn-sm btn-danger"
                   onclick="return confirm('Hapus artikel ini?')">
                   Hapus
                </a>
            </td>
        </tr>
        <?php endwhile; ?>
    <?php else: ?>
        <tr>
            <td colspan="4" class="text-center">Belum ada artikel</td>
        </tr>
    <?php endif; ?>
    </tbody>
</table>
