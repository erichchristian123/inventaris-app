# Sistem Inventaris Barang

## Deskripsi
Sistem Inventaris Barang adalah aplikasi berbasis web yang dibuat menggunakan Framework CodeIgniter 4. Aplikasi ini digunakan untuk mengelola data inventaris barang dengan menerapkan konsep CRUD (Create, Read, Update, Delete).

## Fitur
- Menampilkan data barang
- Menambahkan data barang
- Mengubah data barang
- Menghapus data barang
- Menampilkan tanggal masuk barang secara otomatis
- Konfirmasi sebelum menghapus data

## Teknologi yang Digunakan
- PHP
- CodeIgniter 4
- MySQL
- Bootstrap 5
- XAMPP
- Visual Studio Code

## Struktur Database

Nama Database:
```
inventaris_db
```

Nama Tabel:
```
barang
```

Field pada tabel:
- id
- nama_barang
- jumlah
- kondisi
- tanggal_masuk

## Cara Menjalankan Aplikasi

1. Clone atau download repository ini.
2. Simpan project ke dalam folder `htdocs`.
3. Jalankan Apache dan MySQL melalui XAMPP.
4. Import file `inventaris_db.sql` ke phpMyAdmin.
5. Buka browser dan akses:

```
http://localhost/inventaris-app/public/barang
```

## Login

Aplikasi ini menggunakan konsep **Single User**, sehingga **tidak memerlukan username maupun password**.

## Developer

Nama : Erich Christian
Mata Kuliah : Software Development
