🏪 Manajemen Toko



Aplikasi Manajemen Toko berbasis Laravel 10 dengan fitur multi-role (Admin & Kasir).
Didesain untuk memudahkan pengelolaan produk, kategori, dan transaksi penjualan secara efisien.

✨ Fitur Utama
🔑 Login & Register dengan role berbeda (Admin & Kasir)

📊 Dashboard dinamis berdasarkan role pengguna

📦 CRUD Produk & Kategori (khusus Admin)

🛒 Transaksi Penjualan (Kasir & Admin)

📈 Laporan Penjualan (Admin)

🎨 UI modern menggunakan Bootstrap 5

🛠️ Teknologi yang Digunakan
Laravel 10 – Framework PHP

Bootstrap 5 – Frontend UI

MySQL – Database

Blade Template Engine – View

🚀 Cara Instalasi
Clone repository:

bash
Copy
Edit
git clone https://github.com/username/manajemen-toko.git
cd manajemen-toko
Install dependency Laravel:

bash
Copy
Edit
composer install
npm install && npm run dev
Konfigurasi file .env (database, app name, dll)

Generate key aplikasi:

bash
Copy
Edit
php artisan key:generate
Migrasi database & seeder (buat admin & kasir otomatis):

bash
Copy
Edit
php artisan migrate --seed
Jalankan server:

bash
Copy
Edit
php artisan serve
👥 Role & Hak Akses
Role	Hak Akses
Admin	Kelola Produk, Kategori, Laporan Penjualan, Transaksi
Kasir	Hanya dapat melakukan Transaksi Penjualan

🔑 Akun Demo (Seeder)
Role	Email	Password
Admin	admin@toko.com	password
Kasir	kasir@toko.com	password

🖼 Screenshot UI
🔹 Halaman Login

🔹 Dashboard Admin

🔹 Transaksi Penjualan (Kasir)

📄 Lisensi
Proyek ini dirilis dengan lisensi MIT – bebas digunakan untuk pengembangan.
