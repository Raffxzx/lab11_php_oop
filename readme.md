# Praktikum Pemrograman Web OOP (PHP)

Nama    : M. Rafi Al Hakim

Kelas   : TI.24.A.3

Nim     :312410403

##  Deskripsi Proyek

Proyek ini merupakan aplikasi web sederhana berbasis **PHP Object Oriented Programming (OOP)** yang dibuat untuk memenuhi tugas **Praktikum Pemrograman Web**. Aplikasi ini memiliki fitur **login menggunakan session** dan **manajemen data artikel (CRUD)** yang terhubung dengan database MySQL.

Aplikasi dirancang menggunakan konsep modular dengan pemisahan folder **module**, **class**, dan **template** sehingga kode lebih rapi dan mudah dipahami.


##  Struktur Folder

```
lab11_php_oop/
│── index.php
│── config.php
│── .htaccess
│── readme.md
│
├── class/
│   ├── Database.php
│   └── Form.php
│
├── module/
│   ├── user/
│   │   ├── login.php
│   │   ├── logout.php
│   │   └── profile.php
│   │
│   └── artikel/
│       ├── index.php
│       ├── tambah.php
│       ├── simpan.php
│       ├── ubah.php
│       └── hapus.php
│
├── template/
│   ├── header.php
│   └── footer.php
```


##  Fitur Login

* Sistem login menggunakan **session PHP**

* Username dapat diisi bebas (contoh: Rafi, Aldo, Surya)

* Password bersifat umum untuk praktikum

**Password login:**

1234

Halaman yang dilindungi tidak dapat diakses jika user belum login.


##  Fitur Manajemen Artikel

* Menampilkan daftar artikel

* Menambahkan artikel

* Mengubah artikel

* Menghapus artikel

Data artikel disimpan dalam database MySQL dan dikelola menggunakan class Database.


##  Struktur Database

**Nama Database:** `db_praktikum11`

### Tabel `artikel`

```sql
CREATE TABLE artikel (
    id INT AUTO_INCREMENT PRIMARY KEY,
    judul VARCHAR(200) NOT NULL,
    isi TEXT NOT NULL
);
```


##  Cara Menjalankan Aplikasi

1. Pastikan **XAMPP** sudah terinstall

2. Jalankan **Apache** dan **MySQL**

3. Letakkan folder proyek di:

   C:\xampp\htdocs\lab11_php_oop

4. Buka browser dan akses:

   http://localhost/lab11_php_oop/index.php/user/login
   
5. Login dengan:

   Username: bebas
   Password: 1234

6. Setelah login, pengguna akan diarahkan ke halaman artikel

##  Konsep OOP yang Digunakan

* **Class Database**: Mengelola koneksi dan query database

* **Class Form**: Membantu pembuatan elemen form

* **Modular Programming**: Pemisahan logic aplikasi berdasarkan module

* **Session**: Mengatur autentikasi dan hak akses user


## 🎓 Kesimpulan

Aplikasi ini dibuat sebagai sarana pembelajaran penerapan konsep **Object Oriented Programming pada PHP**, penggunaan **session**, serta pengelolaan data menggunakan **MySQL**. Dengan struktur yang modular, aplikasi menjadi lebih terorganisir dan mudah dikembangkan.

