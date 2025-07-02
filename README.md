# 🛒 ADISHOP - E-Commerce dengan Laravel 12, Livewire 3, Filament 3 & Tailwind CSS

ADISHOP adalah aplikasi e-commerce modern berbasis **Laravel 12** yang dirancang untuk penjualan produk elektronik seperti smartphone, laptop, smartwatch, televisi, dan lainnya. Aplikasi ini menggunakan **Livewire 3** untuk interaktivitas real-time, **Filament 3** untuk dashboard admin, dan **Tailwind CSS** untuk antarmuka yang responsif dan elegan.

---

## 🚀 Fitur Utama

- 🔧 **Manajemen Produk, Kategori, dan Brand**
- 🛍️ **Keranjang Belanja & Checkout**
- 📦 **Manajemen Pesanan & Alamat Pengiriman**
- 💳 **Pembayaran Cash on Delivery & Stripe (Dummy)**
- 📊 **Dashboard Admin (Filament 3)**
- ⭐ **Review Pelanggan**

---

## 🖼️ Screenshot

> Letakkan gambar-gambar ini di direktori `public/storage/imgradme/`

![Tampilan ADISHOP 1](/storage/imgradme/img1.png)
![Tampilan ADISHOP 2](/storage/imgradme/img2.png)
![Tampilan ADISHOP 3](/storage/imgradme/img3.png)
![Tampilan ADISHOP 4](/storage/imgradme/img4.png)
![Tampilan ADISHOP 5](/storage/imgradme/img5.png)
![Tampilan ADISHOP 6](/storage/imgradme/img6.png)
![Tampilan ADISHOP 7](/storage/imgradme/img7.png)

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

- PHP >= 8.2
- Composer
- Node.js & npm
- MySQL / MariaDB

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

- URL: `http://localhost:8000/admin`
- Email: `admin@example.com`
- Password: `password`

---

## 🛠️ Teknologi yang Digunakan

- Laravel 12
- Livewire 3
- Filament 3
- Tailwind CSS
- Vite
- MySQL / PostgreSQL
- Stripe (Dummy)
- Alpine.js

---

## ✅ To-Do (Pengembangan Lanjutan)

- Integrasi pembayaran real (Stripe / Midtrans)
- Wishlist & notifikasi
- Manajemen pengiriman & resi
- Multi-role user (Admin, Customer)
- Email notifikasi & invoice PDF

---

## 📄 Lisensi

Proyek ini dirilis dengan lisensi [MIT](LICENSE). Bebas digunakan untuk keperluan pribadi maupun komersial.

---

> Dibuat oleh **Adi Dharma Putra** – [adidarma24](https://github.com/adidarma24)
