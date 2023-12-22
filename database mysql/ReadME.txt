1. Buat database di phpmyadmin nama database (data_pelanggan_estehcimone)
2. Lalu klik pada data_pelanggan_estehcimone kemudian pilih SQL dan masukan query ini kedalam textbox :
   CREATE TABLE `database_pelanggan` (`id_pelanggan` int(10) NOT NULL, `username` varchar(50) NOT NULL,
   `password` varchar(255) NOT NULL, `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
   `nama_pelanggan` varchar(50) NOT NULL) lalu klik kirim.
3. Lakukan hal yang sama seperti pada point 2 dengan query ini :
   CREATE TABLE `dukung_kami` (`nama_lengkap` varchar(50) NOT NULL, `email` varchar(50) NOT NULL,
  `no_telepon` varchar(15) NOT NULL, `cerita_momen` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp())
4. Klik kembali pada data_pelanggan_estehcimone kemudian pilih privillage/hak akses lalu centrang 1 pada kotak pilihan
   user account.
5. Rubah skrip file database.php pada bagian
   $dbuser = '******'; <- isi dengan username pada phpmyadmin
   $dbpass = '******'; <- isi dengan password pada phpmyadmin
6. 
   
