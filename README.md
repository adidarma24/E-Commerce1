# ADISHOP E-Commerce

ADISHOP adalah aplikasi e-commerce berbasis Laravel + Livewire + Filament untuk penjualan produk elektronik seperti smartphone, laptop, smartwatch, televisi, dan lainnya.

## Fitur Utama
- Manajemen produk, kategori, dan brand
- Keranjang belanja dan checkout
- Manajemen pesanan (order) dan alamat pengiriman
- Pembayaran Cash on Delivery & Stripe (dummy)
- Dashboard admin dengan Filament
- Review pelanggan

## Struktur Database
- **users**: data pengguna
- **categories**: kategori produk
- **brands**: brand produk
- **products**: data produk
- **orders**: data pesanan
- **order_items**: detail item pesanan
- **addresses**: alamat pengiriman

## Instalasi

### Prasyarat
- PHP >= 8.2
- Composer
- Node.js & npm
- MySQL/MariaDB

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

## Akun Default
- Email: test@example.com
- Password: password (ubah di database jika perlu)

## Catatan
- Untuk akses admin, buka `/admin` setelah login.
- Fitur pembayaran Stripe hanya simulasi.

---

> Dibuat dengan Laravel 12, Livewire 3, Filament 3, TailwindCSS, Vite.
