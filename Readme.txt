How To run
1. Extract file zip / clone dari git
2. Migrasi database. Buka file database.sql dan copy query tersebut
3. Copy folder yang telah di Extract / clone ke htdocs xampp/wampp 
4. Default link untuk membuka applikasi http://localhost/test_flip/ atau bisa di ganti sesuai keinginan, hanya tinggal atur di config/config.php di bagian base_url nya
5. Default halaman adalah tampilan list all data dari database
6. Klik Post Data dan akan muncul pop up form, untuk Post request ke https://nextar.flip.id/disburse dan insert data ke database
7. Klik button check untuk Get request ke ke https://nextar.flip.id/disburse/{transaction_id} untuk check status, reciept, time_served dan akan mengupdate data ke database sesuai response yang di dapatkan 