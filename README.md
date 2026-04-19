# 📦 Aplikasi CRUD Data Produk (Laravel)

## 📌 Deskripsi

Aplikasi ini merupakan sistem berbasis web yang dibuat menggunakan **Laravel** untuk mengelola data produk.
Aplikasi ini menerapkan konsep **CRUD (Create, Read, Update, Delete)** sehingga pengguna dapat mengelola data produk dengan mudah.

Data yang dikelola meliputi:

* Nama produk
* Harga
* Stok
* Deskripsi

---

## 🚀 Fitur Utama

* ✅ Menampilkan daftar produk
* ✅ Menambah data produk
* ✅ Mengedit data produk
* ✅ Menghapus data produk
* ✅ Terintegrasi dengan database MySQL

---

## 🛠️ Teknologi yang Digunakan

* Laravel
* PHP
* MySQL (XAMPP)
* HTML & CSS

---

## ⚙️ Cara Instalasi

### 1. Clone Repository

```bash
git clone https://github.com/RagilAbimayu13/web_crud.git
cd web_crud
```

### 2. Install Dependency

```bash
composer install
```

### 3. Copy File Environment

```bash
cp .env.example .env
```

### 4. Konfigurasi Database

Buka file `.env` lalu sesuaikan:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=data_produk
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Generate Application Key

```bash
php artisan key:generate
```

### 6. Migrasi Database

```bash
php artisan migrate
```

### 7. Jalankan Server

```bash
php artisan serve
```

Akses di browser:

```
http://127.0.0.1:8000
```

---

## 📁 Struktur Project

* **Controller** : `ProdukController`
* **Model** : `Produk`
* **View** : `resources/views/produk`
* **Route** : `routes/web.php`

---

## 📝 Catatan

* Pastikan **XAMPP (Apache & MySQL)** sudah aktif
* Buat database terlebih dahulu di **phpMyAdmin**
* Nama database harus sesuai dengan konfigurasi `.env`

---

## 👨‍💻 Developer

* Nama      : Ragil Rifky Abimayu
* Jurusan   : Sistem Informasi

---

## 📌 Penutup

Aplikasi ini dibuat sebagai bagian dari pembelajaran Laravel untuk memahami konsep dasar CRUD dan integrasi database.
Diharapkan aplikasi ini dapat menjadi dasar untuk pengembangan sistem yang lebih kompleks di masa depan 🚀
