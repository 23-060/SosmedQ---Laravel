# SosmedQ---Laravel

Website Sosial Media Abal-Abal

## Tentang Proyek

Proyek ini merupakan website sosial media yang dibangun menggunakan framework Laravel. Tujuan proyek ini adalah sebagai wadah eksperimen dan pembelajaran dalam pengembangan aplikasi web modern dengan fitur-fitur dasar sebuah platform sosial media. Perlu ditekankan bahwa proyek ini bersifat "abal-abal" dalam artian masih dalam tahap pengembangan dan mungkin belum memiliki fitur selengkap platform sosial media yang sudah mapan.

Fitur-fitur utama yang (direncanakan) ada:

*   Registrasi dan Login pengguna
*   Membuat postingan (teks, gambar, video - *masih dalam pengembangan*)
*   Menampilkan feed postingan
*   Fitur "Like" dan "Comment" pada postingan (*masih dalam pengembangan*)
*   Profil pengguna (*masih dalam pengembangan*)
*   Pencarian pengguna (*masih dalam pengembangan*)

Teknologi yang digunakan:

*   Laravel (PHP Framework)
*   MySQL (Database)
*   Bootstrap/Tailwind CSS (Frontend - *belum diputuskan secara final*)
*   JavaScript (untuk interaksi frontend)
*   Composer (Dependency Manager PHP)
*   Node.js dan npm/yarn (untuk manajemen aset frontend - *jika diperlukan*)

## Prasyarat

Pastikan Anda telah menginstall perangkat lunak berikut:

*   PHP >= 8.1
*   Composer
*   Node.js dan npm/yarn (opsional, tergantung penggunaan frontend framework)
*   Database server (MySQL)

## Instalasi

Ikuti langkah-langkah berikut untuk menginstall dan menjalankan proyek:

1.  **Clone repositori:**

    ```bash
    git clone [https://www.andarepository.com/](https://www.andarepository.com/)
    ```

2.  **Masuk ke direktori proyek:**

    ```bash
    cd SosmedQ---Laravel
    ```

3.  **Install dependencies Composer:**

    ```bash
    composer install
    ```

4.  **Copy file `.env.example` ke `.env`:**

    ```bash
    cp .env.example .env
    ```

5.  **Konfigurasi file `.env`:**

    Buka file `.env` dan sesuaikan pengaturan database Anda:

    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=nama_database_anda
    DB_USERNAME=username_database_anda
    DB_PASSWORD=password_database_anda
    ```

    Sesuaikan juga `APP_URL` dengan URL aplikasi Anda (misalnya `http://localhost:8000` untuk pengembangan lokal).

6.  **Generate key aplikasi:**

    ```bash
    php artisan key:generate
    ```

7.  **Migrasi database:**

    ```bash
    php artisan migrate
    ```

8.  **Jalankan server pengembangan:**

    ```bash
    php artisan serve
    ```

9.  **Buka aplikasi di browser:**

    Buka `http://127.0.0.1:8000` di browser Anda.

## Konfigurasi Tambahan (Opsional)

*   **Konfigurasi Email:** Jika Anda ingin mengaktifkan fitur email (misalnya untuk verifikasi akun), sesuaikan pengaturan `MAIL_*` di file `.env`.
*   **Pengaturan Frontend:** Jika Anda menggunakan framework frontend seperti Bootstrap atau Tailwind CSS, ikuti dokumentasi framework tersebut untuk konfigurasi lebih lanjut.

## Penggunaan

Setelah instalasi berhasil, Anda dapat mengakses halaman registrasi dan login untuk membuat akun atau masuk ke akun yang sudah ada. Fitur-fitur yang sudah diimplementasikan dapat dicoba langsung di website.

## Catatan Penting

Proyek ini masih dalam tahap pengembangan awal dan mungkin terdapat bug atau fitur yang belum lengkap. Kontribusi dan feedback sangat diharapkan untuk pengembangan proyek ini.

## Kontribusi

Jika Anda ingin berkontribusi pada proyek ini, silakan fork repositori ini dan buat pull request dengan perubahan yang Anda lakukan.

## Lisensi

[Lisensi yang Anda gunakan, misalnya MIT License]
