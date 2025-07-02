<<<<<<< HEAD

# ADISHOP E-Commerce

ADISHOP adalah aplikasi e-commerce berbasis Laravel + Livewire + Filament untuk penjualan produk elektronik seperti smartphone, laptop, smartwatch, televisi, dan lainnya.

## Fitur Utama

-   Manajemen produk, kategori, dan brand
-   Keranjang belanja dan checkout
-   Manajemen pesanan (order) dan alamat pengiriman
-   Pembayaran Cash on Delivery & Stripe (dummy)
-   Dashboard admin dengan Filament
-   Review pelanggan

## Screenshot

![Tampilan ADISHOP](/storage/imgradme/img1.png)
![Tampilan ADISHOP](/storage/imgradme/img2.png)
![Tampilan ADISHOP](/storage/imgradme/img3.png)
![Tampilan ADISHOP](/storage/imgradme/img4.png)
![Tampilan ADISHOP](/storage/imgradme/img5.png)
![Tampilan ADISHOP](/storage/imgradme/img6.png)
![Tampilan ADISHOP](/storage/imgradme/img7.png)

## Struktur Database

-   **users**: data pengguna
-   **categories**: kategori produk
-   **brands**: brand produk
-   **products**: data produk
-   **orders**: data pesanan
-   **order_items**: detail item pesanan
-   **addresses**: alamat pengiriman

## Instalasi

### Prasyarat

-   PHP >= 8.2
-   Composer
-   Node.js & npm
-   MySQL/MariaDB

### Langkah Instalasi

1. **Clone repository**
    ```powershell
    git clone <repo-url> && cd ECommerce1
    ```
2. **Install dependency PHP**
    ```powershell
    composer install
    ```
3. **Install dependency frontend**
    ```powershell
    npm install
    ```
4. **Copy file environment**
    ```powershell
    copy .env.example .env
    ```
5. **Generate app key**
    ```powershell
    php artisan key:generate
    ```
6. **Atur konfigurasi database**
   Edit `.env` dan sesuaikan DB_DATABASE, DB_USERNAME, DB_PASSWORD.
7. **Jalankan migrasi dan seeder**
    ```powershell
    php artisan migrate --seed
    ```
8. **Build asset frontend**
    ```powershell
    npm run build
    # atau untuk development
    npm run dev
    ```
9. **Jalankan server**
    ```powershell
    php artisan serve
    ```
10. **Akses aplikasi**
    Buka browser ke [http://localhost:8000](http://localhost:8000)

### Instalasi Filament

1. Jalankan perintah berikut untuk menginstal Filament (jika belum):
    ```powershell
    composer require filament/filament
    ```
2. Publish aset Filament:
    ```powershell
    php artisan filament:install
    ```
3. Jalankan migrasi jika diminta:
    ```powershell
    php artisan migrate
    ```
4. Akses dashboard admin di `/admin`.

## Akun Default

-   Email: test@example.com
-   Password: password (ubah di database jika perlu)

## Catatan

-   Untuk akses admin, buka `/admin` setelah login.
-   Fitur pembayaran Stripe hanya simulasi.

---

> # Dibuat dengan Laravel 12, Livewire 3, Filament 3, TailwindCSS, Vite.

# 🛒 E-Commerce Project with Laravel 12, Livewire 3, Filament 3 & Tailwind CSS

Proyek ini adalah aplikasi E-Commerce modern berbasis **Laravel 12** yang menggunakan **Livewire 3** untuk interaktivitas real-time, **Filament 3** sebagai dashboard admin yang powerful, dan **Tailwind CSS** untuk antarmuka yang responsif dan elegan.

## 🚀 Fitur Utama

-   🔧 **Manajemen Produk, Kategori, dan Brand**  
    Admin dapat membuat, mengedit, dan menghapus produk beserta kategorinya dan brand menggunakan Filament Panel.

-   🛍️ **Keranjang Belanja & Checkout**  
    Pengguna dapat menambahkan produk ke keranjang dan melakukan proses checkout dengan mudah.

-   📦 **Manajemen Pesanan & Alamat Pengiriman**  
    Setiap pesanan dicatat bersama detail item dan alamat pengiriman pengguna.

-   💳 **Pembayaran Cash on Delivery & Stripe (Dummy)**  
    Mendukung metode pembayaran Cash on Delivery dan simulasi pembayaran menggunakan Stripe.

-   📊 **Dashboard Admin (Filament 3)**  
    Admin dapat mengelola seluruh data aplikasi dari dashboard Filament yang intuitif.

-   ⭐ **Review Pelanggan**  
    Pengguna dapat memberikan ulasan pada produk yang telah dibeli.

## 🗂️ Struktur Database

Berikut adalah tabel utama dalam aplikasi:

| Tabel         | Deskripsi                                  |
| ------------- | ------------------------------------------ |
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

-   Buat database baru di MySQL/PostgreSQL (nama bebas)
-   Edit file `.env` sesuai konfigurasi database Anda

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

-   Email: `admin@example.com`
-   Password: `password`

## 📚 Teknologi yang Digunakan

-   Laravel 12
-   Livewire 3
-   Filament 3
-   Tailwind CSS
-   Stripe (Dummy)
-   MySQL / PostgreSQL
-   Alpine.js (untuk komponen UI interaktif)

## ✅ To-Do (Pengembangan Lanjutan)

-   Integrasi pembayaran real (Stripe / Midtrans)
-   Fitur wishlist & notifikasi
-   Manajemen pengiriman & resi
-   Multi-role user (Admin, Customer)
-   Email notifikasi & invoice PDF

## 📄 Lisensi

Proyek ini dirilis di bawah lisensi [MIT](LICENSE). Bebas digunakan untuk keperluan pribadi maupun komersial dengan mencantumkan atribusi.

---

> > > > > > > 1dbde3c19f9547f0059672086eb5635e4df6287b
