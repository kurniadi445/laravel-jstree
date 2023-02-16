## Tentang *Repository* Ini
*Repository* ini berguna bagi kalian yang ingin mencari referensi bagaimana cara membuat direktori pohon pada **Laravel** dan memunculkan *popup* khusus untuk gambar saja. *Repository* ini memanfaatkan dua plugin dari pihak ketiga yaitu [jsTree](https://www.jstree.com/) dan [Magnific Popup](https://dimsemenov.com/plugins/magnific-popup/).

## Proses Pemasangan
1. Salin *repository* ini dengan perintah `git clone https://github.com/kurniadi445/laravel-jstree.git`.
2. Lalu, salin *file* **.env.example** dan ubah namanya menjadi **.env**.
3. Selanjutnya, jalankan perintah `php artisan key:generate` di terminal.
4. Kemudian, jalankan perintah `composer install` di terminal juga.
5. Buat folder **galeri/foto** di direktori **storage/app/public**.
6. Berikutnya, jalankan perintah `php artisan storage:link` untuk membuat *link* di direktori **public**.
7. Isi folder **storage/app/public** dengan direktori atau gambar.
8. Jalankan perintah `php artisan serve` di terminal.
9. Terakhir, buka http://127.0.0.1:8000 di *browser* kalian dan hasilnya akan muncul di sana.
