# 🎓 Aplikasi CRUD Data Mahasiswa (Laravel)

## 📌 Deskripsi

Aplikasi ini merupakan sistem berbasis web yang dibuat menggunakan **Laravel** untuk mengelola data mahasiswa.
Aplikasi ini menerapkan konsep **CRUD (Create, Read, Update, Delete)** sehingga pengguna dapat menambah, melihat, mengubah, dan menghapus data mahasiswa.

Data yang dikelola meliputi:

* NIM
* Nama Mahasiswa
* Tanggal Lahir
* Alamat

---

## 🚀 Fitur Utama

* ✅ Menampilkan data mahasiswa
* ✅ Menambah data mahasiswa
* ✅ Mengedit data mahasiswa
* ✅ Menghapus data mahasiswa
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
DB_DATABASE=data_mahasiswa
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Generate Key

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
http://127.0.0.1:8000

---

## 📁 Struktur Project

* Controller: `MahasiswaController`
* Model: `Mahasiswa`
* View: `resources/views/mahasiswa`
* Route: `routes/web.php`

---

## 📝 Catatan

* Pastikan XAMPP (Apache & MySQL) sudah berjalan
* Buat database terlebih dahulu di phpMyAdmin
* Sesuaikan nama database dengan file `.env`

---

## 👨‍💻 Developer

* Nama: **Ragil Rifky Abimayu**
* Jurusan: Sistem Informasi

---

## 📌 Penutup

Aplikasi ini dibuat untuk memahami konsep dasar CRUD menggunakan Laravel serta pengelolaan data mahasiswa berbasis web.
