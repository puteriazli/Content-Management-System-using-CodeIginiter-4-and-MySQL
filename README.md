# Content Management System (CMS) – Simulasi Pembelian Produk

Aplikasi **Content Management System (CMS)** sederhana berbasis web yang dikembangkan menggunakan **CodeIgniter 4** dan **MySQL** untuk mensimulasikan pengelolaan data pengguna, produk, dan transaksi pembelian pada lingkungan localhost.

## Repository

GitHub Repository:

https://github.com/puteriazli/Content-Management-System-using-CodeIginiter-4-and-MySQL

---

## 1. Fitur Sistem

### Dashboard
- Menampilkan jumlah total user.
- Menampilkan jumlah total produk.
- Menampilkan jumlah total transaksi.
- Navigasi menuju masing-masing modul.

### User Management
- Menampilkan data user.
- Menambahkan user.
- Mengubah data user.
- Menghapus user.

### Product Management
- Menampilkan data produk.
- Menambahkan produk.
- Mengubah data produk.
- Menghapus produk.
- Menyimpan informasi jumlah stok dan harga produk.

### Transaction Management
- Menampilkan data transaksi.
- Membuat transaksi pembelian.
- Mengubah data transaksi.
- Menghapus data transaksi.
- Menampilkan informasi user, produk, jumlah pembelian, metode pembayaran, total harga, dan tanggal transaksi.

---

## 2. Teknologi yang Digunakan

| Komponen | Teknologi |
|---|---|
| Programming Language | PHP |
| PHP Framework | CodeIgniter 4 |
| Database | MySQL |
| Database Driver | MySQLi |
| Frontend | HTML, CSS, Bootstrap 5 |
| Web Server | CodeIgniter Development Server |
| Package Manager | Composer |
| Development Environment | XAMPP |
| Code Editor | Visual Studio Code |
| Version Control | Git & GitHub |

---

## 3. Sistem Operasi

Sistem operasi yang digunakan selama proses pengerjaan dan pengujian:

**Windows 11 64-bit**

---

## 4. Spesifikasi Komputer

| Komponen | Spesifikasi |
|---|---|
| Device | Lenovo IdeaPad Slim 14 |
| Processor | Intel Core i5 Generasi ke-11 |
| RAM | 16 GB |
| Operating System | Windows 11 64-bit |
| Development Environment | XAMPP |
| Code Editor | Visual Studio Code |

---

## 5. Struktur Project

```text
cms-pembelian/
│
├── app/
│   ├── Config/
│   ├── Controllers/
│   │   ├── Dashboard.php
│   │   ├── Products.php
│   │   ├── Transactions.php
│   │   └── Users.php
│   │
│   ├── Models/
│   │   ├── ProductModel.php
│   │   ├── TransactionModel.php
│   │   └── UserModel.php
│   │
│   └── Views/
│       ├── dashboard/
│       ├── products/
│       ├── transactions/
│       ├── users/
│       └── templates/
│
├── public/
├── tests/
├── writable/
├── .env
├── .gitignore
├── composer.json
├── composer.lock
├── README.md
└── spark
```

> File `.env` digunakan untuk konfigurasi lokal dan tidak disertakan dalam repository publik.

---

## 6. Database

Database yang digunakan bernama:

```text
cms
```

Tabel utama:

```text
user
product
transaction
```

Tabel transaksi menghubungkan data user dan produk untuk menyimpan informasi pembelian.

---

## 7. Persyaratan Sistem

Pastikan komputer telah memiliki:

- PHP
- Composer
- MySQL
- XAMPP atau MySQL Server
- Git
- Visual Studio Code (opsional)

Ekstensi PHP yang digunakan antara lain:

```text
intl
mysqli
mbstring
json
```

---

## 8. Konfigurasi Database

Buat atau salin file `.env` pada root project, kemudian sesuaikan konfigurasi database:

```env
CI_ENVIRONMENT = development

app.baseURL = 'http://localhost:8080/'

database.default.hostname = localhost
database.default.database = cms
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi
database.default.DBPrefix =
database.default.port = 3306
```

Sesuaikan username dan password MySQL apabila konfigurasi pada komputer berbeda.

---

## 9. Menjalankan Project

### Langkah 1 – Aktifkan MySQL

Jika menggunakan XAMPP, jalankan **MySQL**.

Apache tidak diperlukan apabila aplikasi dijalankan menggunakan CodeIgniter Development Server.

### Langkah 2 – Masuk ke folder project

```bash
cd cms-pembelian
```

### Langkah 3 – Install dependency

Jika folder `vendor` belum tersedia:

```bash
composer install
```

### Langkah 4 – Jalankan CodeIgniter

```bash
php spark serve
```

Kemudian buka:

```text
http://localhost:8080/
```

---

## 10. Alur Sistem

```text
Dashboard
   │
   ├── User Management
   │      ├── Create
   │      ├── Read
   │      ├── Update
   │      └── Delete
   │
   ├── Product Management
   │      ├── Create
   │      ├── Read
   │      ├── Update
   │      └── Delete
   │
   └── Transaction Management
          ├── Create
          ├── Read
          ├── Update
          └── Delete
```

---

## 11. Tujuan Pengembangan

Project ini merupakan implementasi sistem CMS sederhana dengan konsep **CRUD (Create, Read, Update, Delete)** dan pengelolaan transaksi pembelian menggunakan CodeIgniter 4 serta MySQL.

Project mencakup praktik perancangan struktur aplikasi, pengelolaan database, pengembangan backend dan frontend, serta version control menggunakan Git dan GitHub.

---

## 12. Author

**Puteri Azli**

GitHub:

https://github.com/puteriazli

Repository:

https://github.com/puteriazli/Content-Management-System-using-CodeIginiter-4-and-MySQL
