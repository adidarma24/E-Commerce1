# ADISHOP E-Commerce

ADISHOP adalah aplikasi e-commerce berbasis Laravel + Livewire + Filament untuk penjualan produk elektronik seperti smartphone, laptop, smartwatch, televisi, dan lainnya.

## Fitur Utama

-   Manajemen produk, kategori, dan brand
-   Keranjang belanja dan checkout
-   Manajemen pesanan (order) dan alamat pengiriman
-   Pembayaran Cash on Delivery & Stripe (dummy)
-   Dashboard admin dengan Filament
-   Review pelanggan

## 🖼️ Screenshot

![Tampilan ADISHOP](/Screenshot/img1.png)
![Tampilan ADISHOP](/Screenshot/img2.png)
![Tampilan ADISHOP](/Screenshot/img3.png)
![Tampilan ADISHOP](/Screenshot/img4.png)
![Tampilan ADISHOP](/Screenshot/img5.png)
![Tampilan ADISHOP](/Screenshot/img6.png)
![Tampilan ADISHOP](/Screenshot/img7.png)

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
-   🛍️ **Keranjang Belanja & Checkout**
-   📦 **Manajemen Pesanan & Alamat Pengiriman**
-   💳 **Pembayaran Cash on Delivery & Stripe (Dummy)**
-   📊 **Dashboard Admin (Filament 3)**
-   ⭐ **Review Pelanggan**


---

## 🗂️ Struktur Database

| Tabel         | Deskripsi                                  |
| ------------- | ------------------------------------------ |
| `users`       | Data pengguna termasuk pelanggan dan admin |
| `categories`  | Kategori dari produk yang dijual           |
| `brands`      | Brand atau merek dari produk               |
| `products`    | Informasi produk seperti nama, harga, stok |
| `orders`      | Data pesanan pelanggan                     |
| `order_items` | Detail setiap produk dalam pesanan         |
| `addresses`   | Alamat pengiriman yang digunakan           |

---

## ⚙️ Instalasi & Setup

### Prasyarat

-   PHP >= 8.2
-   Composer
-   Node.js & npm
-   MySQL / MariaDB

### Langkah Instalasi

1. **Clone repository**

    ```bash
    git clone https://github.com/adidarma24/E-Commerce1.git
    cd E-Commerce1
    ```

2. **Install dependency backend & frontend**

    ```bash
    composer install
    npm install && npm run dev
    ```

3. **Salin & konfigurasi file `.env`**

    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

4. **Konfigurasi Database di `.env`**

    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=ecommerce_db
    DB_USERNAME=root
    DB_PASSWORD=
    ```

5. **Migrasi & seeding database**

    ```bash
    php artisan migrate --seed
    ```

6. **Jalankan server lokal**

    ```bash
    php artisan serve
    ```

7. **Akses aplikasi**
   Buka `http://localhost:8000` di browser.

---

## 🔐 Akses Admin

Setelah proses seeding, login ke dashboard admin:

-   URL: `http://localhost:8000/admin`
-   Email: `admin@example.com`
-   Password: `password`

---

## 🛠️ Teknologi yang Digunakan

-   Laravel 12
-   Livewire 3
-   Filament 3
-   Tailwind CSS
-   Vite
-   MySQL / PostgreSQL
-   Stripe (Dummy)
-   Alpine.js

---

## ✅ To-Do (Pengembangan Lanjutan)

-   Integrasi pembayaran real (Stripe / Midtrans)
-   Wishlist & notifikasi
-   Manajemen pengiriman & resi
-   Multi-role user (Admin, Customer)
-   Email notifikasi & invoice PDF

---

## 📄 Lisensi

Proyek ini dirilis dengan lisensi [MIT](LICENSE). Bebas digunakan untuk keperluan pribadi maupun komersial.

---

> Dibuat oleh **Adi Dharma Putra** – [adidarma24](https://github.com/adidarma24)
