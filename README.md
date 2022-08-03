Ini adalah jawaban Test Keterampilan Arkatama

jawaban ini telah memenuhi

Things to consider
1) The program must be able to handle names and cities using multiple words (no
limit). You have to convert the name and city data into upper case before
inserting them into the table.
2) As for age data, the program must be able to handle Indonesian user's common
mistake, which is adding TAHUN, THN, Or TH string after the age data. For
example:
• 28 TAHUN, 28 THN, 28 TH
• 28TAHUN, 28THN, 28TH
3) Please make sure the program is able to handle TAHUN, THN, and TH strings
case-insensitively.

1. jalankan dengan
```
compose install
```

2. migrsi
```
php artisan migrate 
``` 

jika anda menggunakan docker 
```
./vendor/bin/sail  up -d
```
lalu aplikasi akan berjalan di localhost

jika anda menggunakan localserver  (xampp)
```
php artisan serve
```