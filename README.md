# REQUIREMENT MODUL 3
Halo teman-teman, selamat datang di modul 3 dari praktikum Perancangan Perangkat Lunak EAD laboratory 2023, kali ini teman-teman akan melakukan automated testing pada aplikasi laravel yang sudah dibuat. Hal pertama yang perlu dilakukan ketika ingin menjalankan project ini, pastikan teman-teman memiliki requirement sebagai berikut :

- PHP 8.0
- Composer
- Node.js (https://nodejs.org/en)
- mysql

jika sudah memenuhi kriteria diatas teman-teman bisa melakukan clone pada project ini dan menjalankannya. caranya sebagai berikut :

1. Lakukan clone proyek pada device kalian masing masing   

2. `$ composer install`

3. `$ npm install`

4. `$ npm run dev`

5. copy isi file .env.example dan buat file baru .env, kemudian paste kedalam file .env.
6. generate key dengan perintah `$ php artisan key:generate`

7. `$ composer require laravel/dusk:*`

8. `$ php artisan dusk:install`
9. `$ php artisan dusk:chrome-driver`
10. siapkan database teman-teman (belum ada table), dan pastikan nama database tersebut sesuai dengan yang tertulis di .env

11. migrate database dengan perintah 
`$ php artisan migrate`

12. lakukan seed pada aplikasi dengan perintah 
`$ php artisan db:seed --class=PostSeeder`

13. jalankan aplikasi dengan perintah 
`$ php artisan serve`

Selamat mengerjakan ya :)
