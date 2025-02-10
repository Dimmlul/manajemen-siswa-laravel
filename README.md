# 📌 Manajemen Data Siswa Sederhana

Proyek ini adalah sistem **manajemen data siswa sederhana** berbasis web yang dikembangkan menggunakan **Laravel**. Sistem ini memungkinkan pengguna untuk **menambah, melihat, mengedit, dan menghapus data siswa** dengan antarmuka yang responsif.

---

## 🛠️ Fitur Utama

| ✅ **Fitur**             | 📌 **Deskripsi**                            |
| ------------------------ | ------------------------------------------- |
| **CRUD Data Siswa**      | Tambah, lihat, edit, dan hapus data siswa   |
| **Validasi Form**        | Pastikan input data sesuai sebelum disimpan |
| **Bootstrap UI**         | Tampilan responsif menggunakan Bootstrap    |
| **Manajemen Database**   | Menggunakan Laravel **Eloquent ORM**        |
| **Routing & Controller** | Menggunakan Laravel **Route & Controller**  |

---

## 🏷️ Struktur Proyek

| 💁 **Folder/File**          | 📌 **Deskripsi**                                 |
| --------------------------- | ------------------------------------------------ |
| `📺 app/Http/Controllers/`  | Berisi **SiswaController.php** untuk logika CRUD |
| `📺 app/Models/`            | Berisi **Siswa.php** sebagai model database      |
| `📺 database/migrations/`   | Berisi file migrasi database siswa               |
| `📺 resources/views/siswa/` | Berisi **index.blade.php** untuk tampilan siswa  |
| `📺 routes/`                | Berisi **web.php** untuk routing aplikasi        |
| `.env`                      | File konfigurasi database                        |
| `README.md`                 | Dokumentasi proyek                               |

---

## ⚡ Instalasi & Konfigurasi

### **1️⃣ Clone Repository**

```sh
git clone https://github.com/Dimmlul/manajemen-siswa.git
cd manajemen-siswa
```

### **2️⃣ Instal Dependensi**

```sh
composer install
```

### **3️⃣ Konfigurasi Database**

1. Buat database baru dengan nama data_siswa di MySQL
2. Edit file `.env` dan sesuaikan konfigurasi:
    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=data_siswa
    DB_USERNAME=root
    DB_PASSWORD=
    ```

### **4️⃣ Jalankan Migrasi**

```sh
php artisan migrate
```

### **5️⃣ Jalankan Server**

```sh
php artisan serve
```

Akses di browser: **[http://127.0.0.1:8000](http://127.0.0.1:8000)**

---

## 🚀 Endpoints API & Routes

| **Method** | **Endpoint**  | **Deskripsi**             |
| ---------- | ------------- | ------------------------- |
| **GET**    | `/siswa`      | Menampilkan semua siswa   |
| **POST**   | `/siswa`      | Menyimpan data siswa baru |
| **PUT**    | `/siswa/{id}` | Mengupdate data siswa     |
| **DELETE** | `/siswa/{id}` | Menghapus data siswa      |

---

## 🎨 Tampilan UI

| 📌 **Fitur UI**                 | 📌 **Deskripsi**                      |
| ------------------------------- | ------------------------------------- |
| **Form Tambah Siswa Sederhana** | Input data siswa dengan validasi      |
| **Tabel Data Siswa**            | Menampilkan daftar siswa dalam tabel  |
| **Button Hapus**                | Menghapus data siswa langsung dari UI |

---
