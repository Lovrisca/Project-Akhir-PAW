# Gvyc

## Instalasi

1. Buka terminal dan jalankan perintah `composer install` untuk menginstall dependensi

2. Copy file `.env.example` menjadi `.env` dan sesuaikan konfigurasi database

3. Jalankan perintah `php artisan key:generate` untuk membuat key baru

4. Buat database baru dengan nama yang sesuai dengan konfigurasi database pada file .env

5. Jalankan perintah `php artisan migrate:fresh --seed --seeder=UserSeeder` untuk membuat tabel-tabel database

6. Jalankan perintah `php artisan storage:link` agar foto yang diupload bisa diakses
