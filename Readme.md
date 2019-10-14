## Tentang Project

Untuk project di test Flip ini saya menggunakan bahasa pemrograman PHP, dengan struktur yang saya buat sebagai berikut :

- Config -> Folder yang di gunakan untuk meletakan file configurasi.
	> Config.php -> pada file ini terdapat beberapa configurasi standar.
	> Database.php -> pada file ini terdapat configurasi yang berkaitan dengan database dan fungsi fungsi standar yang dapat di gunakan.
- Controller
- Service -> Folder yang di gunakan untuk meletakkan file service yang melakukan semua prosses seperti (validasi, rule, dll) menjadi jembatan untuk Controller ke Daos.
- Daos -> Folder yang di gunakan untuk meletakkan file dao yang melakukan semua prosses yang hanya berhubungan dengan sql /pengolahan data ke database.
- Model

## How To Run

Untuk menjalakannya ada beberapa langkah sebagai berikut :

- Extract file zip / clone dari git
- Migrasi database. Buka file database.sql dan copy query tersebut
- Copy folder yang telah di Extract / clone ke htdocs xampp/wampp 
- Rubah nama folder menjadi "test_flip" karna default link untuk membuka applikasi ***http://localhost/test_flip/*** atau bisa di ganti sesuai keinginan, hanya tinggal atur di config/config.php di bagian base_url nya
- Default halaman adalah tampilan list all data dari database
- Klik Post Data dan akan muncul pop up form, untuk Post request ke ***https://nextar.flip.id/disburse*** dan insert data ke database
- Klik button check untuk Get request ke ke ***https://nextar.flip.id/disburse/{transaction_id}*** untuk check status, reciept, time_served dan akan mengupdate data ke database sesuai response yang di dapatkan 