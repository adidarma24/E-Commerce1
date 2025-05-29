# 🛒 E-Commerce Project with Laravel 12, Livewire 3, Filament 3 & Tailwind CSS

Proyek ini adalah aplikasi E-Commerce modern berbasis **Laravel 12** yang menggunakan **Livewire 3** untuk interaktivitas real-time, **Filament 3** sebagai dashboard admin yang powerful, dan **Tailwind CSS** untuk antarmuka yang responsif dan elegan.

## 🚀 Fitur Utama

- 🔧 **Manajemen Produk, Kategori, dan Brand**  
  Admin dapat membuat, mengedit, dan menghapus produk beserta kategorinya dan brand menggunakan Filament Panel.

- 🛍️ **Keranjang Belanja & Checkout**  
  Pengguna dapat menambahkan produk ke keranjang dan melakukan proses checkout dengan mudah.

- 📦 **Manajemen Pesanan & Alamat Pengiriman**  
  Setiap pesanan dicatat bersama detail item dan alamat pengiriman pengguna.

- 💳 **Pembayaran Cash on Delivery & Stripe (Dummy)**  
  Mendukung metode pembayaran Cash on Delivery dan simulasi pembayaran menggunakan Stripe.

- 📊 **Dashboard Admin (Filament 3)**  
  Admin dapat mengelola seluruh data aplikasi dari dashboard Filament yang intuitif.

- ⭐ **Review Pelanggan**  
  Pengguna dapat memberikan ulasan pada produk yang telah dibeli.

## 🗂️ Struktur Database

Berikut adalah tabel utama dalam aplikasi:

| Tabel         | Deskripsi                                 |
|---------------|--------------------------------------------|
| `users`       | Data pengguna termasuk pelanggan dan admin |
| `categories`  | Kategori dari produk yang dijual           |
| `brands`      | Brand atau merek dari produk               |
| `products`    | Informasi produk seperti nama, harga, stok |
| `orders`      | Data pesanan pelanggan                     |
| `order_items` | Detail setiap produk dalam pesanan         |
| `addresses`   | Alamat pengiriman yang digunakan           |

## ⚙️ Instalasi & Setup

Ikuti langkah-langkah di bawah ini untuk menjalankan proyek ini secara lokal:

### 1. Clone repository
```bash
git clone https://github.com/adidarma24/E-Commerce1.git
cd laravel-ecommerce
```

### 2. Install dependency PHP dan JavaScript
```bash
composer install
npm install && npm run dev
```

### 3. Konfigurasi file environment
```bash
cp .env.example .env
php artisan key:generate
```

### 4. Setup database
- Buat database baru di MySQL/PostgreSQL (nama bebas)
- Edit file `.env` sesuai konfigurasi database Anda

Contoh konfigurasi:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ecommerce_db
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Migrasi dan seeding database
```bash
php artisan migrate --seed
```

### 6. Jalankan server lokal
```bash
php artisan serve
```

Aplikasi dapat diakses melalui:  
`http://localhost:8000`

## 🔐 Akses Admin

Setelah seeding, Anda dapat login ke dashboard admin di:

**URL:** `/admin`

**Login Default (dari seeder):**
- Email: `admin@example.com`
- Password: `password`

## 📚 Teknologi yang Digunakan

- Laravel 12
- Livewire 3
- Filament 3
- Tailwind CSS
- Stripe (Dummy)
- MySQL / PostgreSQL
- Alpine.js (untuk komponen UI interaktif)

## ✅ To-Do (Pengembangan Lanjutan)

- Integrasi pembayaran real (Stripe / Midtrans)
- Fitur wishlist & notifikasi
- Manajemen pengiriman & resi
- Multi-role user (Admin, Customer)
- Email notifikasi & invoice PDF

## 📄 Lisensi

Proyek ini dirilis di bawah lisensi [MIT](LICENSE). Bebas digunakan untuk keperluan pribadi maupun komersial dengan mencantumkan atribusi.

---
