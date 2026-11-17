# Aplikasi Kasir (Point of Sale)

Aplikasi kasir berbasis web yang dibangun menggunakan PHP Native dan database MySQL. Proyek ini dirancang dengan sistem pemisahan hak akses (*role-based access control*) yang tegas antara **Administrator** dan **Petugas Kasir**, serta dilengkapi fitur pengelolaan stok otomatis saat transaksi berlangsung.

## Fitur Utama

* **Autentikasi & Pemisahan Role**
  * Login terpisah yang mengarahkan pengguna secara otomatis sesuai hak akses (`Administrator` ke `home_admin.php` dan `Petugas` ke `home_petugas.php`).
* **Manajemen Pengguna (Khusus Admin)**
  * Menambahkan akun baru untuk Administrator maupun Petugas Kasir.
* **Manajemen Produk & Stok (CRUD)**
  * Menambah, melihat, mengubah, dan menghapus data barang beserta harga dan jumlah stok (`stock`).
* **Transaksi Penjualan**
  * Mencatat transaksi pembelian pelanggan ke dalam tabel `penjualan` dan `detailpenjualan`.
  * Pengurangan jumlah stok barang secara otomatis setelah transaksi berhasil diproses.
* **Antarmuka Modern**
  * Menggunakan stylesheet terpusat (`style.css`) dengan desain kartu (*card*), tabel yang rapi, dan indikator warna berbeda untuk masing-masing role.

## Struktur Folder & File

apk_kasir_for_ukk/
├── index.php               # Halaman awal (tombol menuju login)
├── login.php               # Form login pengguna
├── proses_login.php        # Validasi login & redirect berdasarkan role
├── logout.php              # Menghapus sesi pengguna
├── home_admin.php          # Dashboard khusus Administrator
├── home_petugas.php        # Dashboard khusus Petugas Kasir
├── regist.php              # Form tambah akun baru (Admin)
├── proses_regist.php       # Proses simpan akun baru
├── pendataan.php           # Tabel daftar produk & stok
├── tambah.php              # Form tambah produk baru
├── tambah_aksi.php         # Proses simpan produk baru
├── change.php              # Form edit produk
├── update.php              # Proses update data produk
├── delete.php              # Proses hapus produk
├── transaksi.php           # Form transaksi kasir
├── proses_transaksi.php    # Proses simpan transaksi & potong stok
├── koneksi.php             # Konfigurasi koneksi database MySQL
└── style.css               # File desain tampilan (CSS)
