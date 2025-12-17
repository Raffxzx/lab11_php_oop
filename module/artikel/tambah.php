<h3>Tambah Artikel</h3>

<form method="post" action="/lab11_php_oop/artikel/simpan">
    <div class="mb-3">
        <label>Judul</label>
        <input type="text" name="judul" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Isi</label>
        <textarea name="isi" class="form-control" rows="5" required></textarea>
    </div>

    <button class="btn btn-success">Simpan</button>
    <a href="/lab11_php_oop/artikel" class="btn btn-secondary">Kembali</a>
</form>
