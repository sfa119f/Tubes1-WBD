# Tugas 1 IF3110 Pengembangan Aplikasi Berbasis Web

## Deskripsi Aplikasi Web

<div align="center">
<img src="https://i.imgur.com/0NI6Mkf.png" alt=""/>
</div>

Anda mungkin sudah tahu mengenai pabrik coklat terbesar seantero dunia, Willy Wangky.
Akan tetapi, produsen terbaik tidak akan sukses tanpa konsumen dan distributor terbaik.
Sebab coklat dari Willy Wangky sangat disenangi konsumen, maka Willy Wangky membutuhkan distributor yang handal dalam menangani penjualan coklat.
Untungnya, Willy Wangky mengenal Jan.
Jan sudah sangat pengalaman dengan distribusi makanan dan minuman ringan.
Bahkan, Jan sudah memiliki usaha sendiri bernama Jan’s Cook.

Willy Wangky pun meminta Jan untuk memberikan saran bagaimana cara menjual coklat-coklat miliknya pada konsumen.
Apalagi di tengah pandemi seperti ini, beberapa toko penjualan sepi dikunjungi pengunjung.
Jan tanpa pikir panjang, memberikan saran mengenai penjualan daring menggunakan aplikasi berbasis web.
Willy Wangky sangat senang dengan hal ini, dan segera mengutus Jan untuk mencari programmer terbaik untuk pengembangannya.

Willy Wangky menginginkan web tersebut agar penggunanya dapat melakukan pendaftaran akun, login, logout, pencarian produk, mendapatkan penjelasan produk secara detail, pembelian produk dan dapat melihat riwayat pembelian produk, dan pekerjanya dapat dengan mudah menambahkan jenis coklat baru yang ingin dijual serta menambah ketersediaan coklat.

Jan telah membuat desain user interface dengan low fidelity.
Sekarang, dia merekrut kalian untuk membuat sebuah aplikasi web yang membantu penjualan coklat milik Willy Wangky.
Disebabkan Jan sangat percaya dengan kalian, maka web yang kalian kembangkan dapat kalian hias dengan sebaik mungkin.
Perlu diingat bahwa tata letak komponen harus mengikuti desain dari Jan.

## Petunjuk Pengerjaan

1. Buatlah grup pada Gitlab dengan format "IF3110-2020-01-KXX-YY", dengan XX adalah nomor kelas dan YY adalah nomor kelompok.
2. Tambahkan anggota kelompok pada grup anda.
3. Fork pada repository ini dengan grup yang telah dibuat.
4. Ubah hak akses repository hasil Fork anda menjadi private.
5. Silakan commit pada repository anda (hasil fork). Lakukan beberapa commit dengan pesan yang bermakna, contoh: `add login form`, `fix login bug`, jangan seperti `final`, `dikit lagi`, `benerin bug`.
6. Buatlah file README yang berisi:
    * Deskripsi aplikasi web
    * Daftar requirement
    * Cara instalasi
    * Cara menjalankan server
    * Screenshot tampilan aplikasi, dan
    * Penjelasan mengenai pembagian tugas masing-masing anggota (lihat formatnya pada bagian pembagian tugas).

## Daftar Requirement

Minimum Requirement:
1. Terinstall Apache
2. Terinstall MySQL
3. Terinstall web browser terbaru seperti Chrome dan Firefox

## Cara Instalasi 

### Install Apache dan MySQL
Untuk menginstall Apache dan MySQL dapat langsung menggunakan aplikasi XAMPP. Panduan instalasi sebagai berikut:
* Windows : dapat menggikuti cara instalasi di https://www.geeksforgeeks.org/how-to-install-xampp-on-windows
* Linux : 
    1. Buka terminal
    2. Jalankan `chmod 755 xampp-linux-*-installer.run`
    3. Jalnkan `sudo ./xampp-linux-*-installer.run`
    4. XAMPP berhasil terinstall
* Mac OSX : dapat mengikuti cara instalasi di https://www.webucator.com/how-to/how-install-start-test-xampp-on-mac-osx.cfm

### Install Web Browser
Cara instalasi yang diberikan hanya untuk Chrome dan Firefox. Silahkan telusuri sendiri untuk web browser lainnya
* Chrome : dapat mengikuti cara instalasi di https://support.google.com/chrome/answer/95346?co=GENIE.Platform%3DDesktop&hl=en
* Firefox :
    - Windows : dapat mengikuti cara instalasi di https://support.mozilla.org/en-US/kb/how-download-and-install-firefox-windows
    - Linux : dapat mengikuti cara instalasi di https://support.mozilla.org/en-US/kb/install-firefox-linux
    - Mac OSX : dapat mengikuti cara instalasi di https://support.mozilla.org/en-US/kb/how-download-and-install-firefox-mac


## Cara Menjalankan Server

1. Copy seluruh 1 folder web aplication ini ke `../xampp/htdocs` (biasanya folder xampp ada di direktori `C:/` )
2. Buka XAMPP
3. Ubah Port MySQL ke 3306
4. Start Apache dan MySQL
5. Buka url `localhost/phpmyadmin` di browser
6. Buat database baru dengan nama `choco_factory`
7. Import database yang berada di folder database ke database yang telah dibuat
8. Masukkan url `localhost/tugas-besar-1-2020` di browser dan akan diredirect ke halaman login
9. Aplikasi siap digunakan


## Screenshot Tampilan Aplikasi

### Halaman Login dan Register
#### Login Biasa
![](Screenshot/01.jpg)
#### Register dengan username telah terpakai
![](Screenshot/05.jpg)
#### Register dengan email telah terpakai
![](Screenshot/06.jpg)
#### Alert saat mencoba register dengan username/email yang telah terpakai
![](Screenshot/07.jpg)

### Halaman Dashboard
#### Dashboard setelah login dengan user putra
![](Screenshot/02.jpg)
#### Dashboard dengan tampilan 10 coklat dengan penjualan terbanyak
![](Screenshot/03.jpg)
#### Dashboard dengan tampilan seluruh coklat yang tersedia
![](Screenshot/04.jpg)

### Halaman Search
#### Search dengan query huruf "C"
![](Screenshot/20.jpg)
#### Search saat tidak ditemukan hasil
![](Screenshot/21.jpg)

### Halaman Transaction History, Detail, Do Detail, dan Contoh Pembelian
#### Halaman transaction history sebelum transaksi
![](Screenshot/11.jpg)
#### Halaman Detail Coklat Silverqueen
![](Screenshot/13.jpg)
#### Halaman Do Detail Coklat Silverqueen
![](Screenshot/15.jpg)
#### Halaman Transaction History setelah pembelian
![](Screenshot/16.jpg)
#### Halaman Do Detail saat stok coklat tidak cukup untuk dibeli
![](Screenshot/18.jpg)
![](Screenshot/19.jpg)

### Halaman Add Chocolate
#### Alert saat Image yang digunakan sama
![](Screenshot/23.jpg)
#### Menambahkan produk chacha
![](Screenshot/22.jpg)
#### Saat coklat berhasil ditambahkan
![](Screenshot/24.jpg)

## Pembagian Tugas

Pembagian tugas kelompok kami sebagai berikut:

### Frontend
1. Login : 13516080, 13518095
2. Register : 13516080, 13518095
3. Dashboard: 13518095
4. Search : 13518095
5. Transaction History: 13518095 
6. Detail : 13518095
7. Do Detail : 13518095
8. Add Chocolate : 13518095

### Backend
1. Login : 13518077
2. Register : 13518077
3. Dashboard: 13516080, 13518095
4. Search : 13518095
5. Transaction History: 13516080, 13518095 
6. Detail : 13518077
7. Do Detail : 13518095
8. Add Chocolate : 13518077

### Database
Choco_factory.db: 13516080

## About
Pembuatan aplikasi ini bertujuan untuk pemenuhan Tugas Besar 1 IF3110 WBD Teknik Informatika semester 5 tahun 2020.
Author :
1. Putra Hardi Ramadhan - 13516077
2. Filbert Wijaya - 13518077
3. Syarifuddin Fakhri Al Husaini - 13518095