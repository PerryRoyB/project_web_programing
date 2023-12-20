-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Des 2023 pada 07.42
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_pelanggan_estehcimone`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `database_pelanggan`
--

CREATE TABLE `database_pelanggan` (
  `id_pelanggan` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `nama_pelanggan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `database_pelanggan`
--

INSERT INTO `database_pelanggan` (`id_pelanggan`, `username`, `password`, `created_at`, `nama_pelanggan`) VALUES
(1, 'perry.roy@gmail.com', '$2y$10$AIBtHxdpb1mVeMoWIm382.I8pLZKbEA4bGAM0IkhLKbNd7zlE9GVi', '2023-12-19 13:17:13', 'Perry'),
(2, 'perry.roy.bowo86@gmail.com', '$2y$10$QGEMlIGw/AFBdjLvrxbBX..RZMtwp3HL8dQtc4VN.R9fauBgXLw4G', '2023-12-19 08:05:13', 'Pery RoyBowo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dukung_kami`
--

CREATE TABLE `dukung_kami` (
  `nama_lengkap` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `cerita_momen` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `dukung_kami`
--

INSERT INTO `dukung_kami` (`nama_lengkap`, `email`, `no_telepon`, `cerita_momen`, `created_at`) VALUES
('Pery RoyBowo', 'perry@gmail.com', '08525859100', 'Terbaik', '2023-12-20 05:52:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(10) NOT NULL,
  `nama_produk` varchar(20) NOT NULL,
  `ukuran_produk` varchar(7) NOT NULL,
  `harga_produk` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `ukuran_produk`, `harga_produk`) VALUES
(101, 'Es Teh Cimone Origin', 'Small', 5000),
(102, 'Es Teh Cimone Origin', 'Reguler', 7500),
(103, 'Es Teh Cimone Origin', 'Large', 10000),
(201, 'Es Teh Cimone Lemon', 'Small', 6000),
(202, 'Es Teh Cimone Lemon', 'Reguler', 9000),
(203, 'Es Teh Cimone Lemon', 'Large', 12000),
(301, 'Es Teh Cimone Oolong', 'Small', 6000),
(302, 'Es Teh Cimone Oolong', 'Reguler', 9000),
(303, 'Es Teh Cimone Oolong', 'Large', 12000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `database_pelanggan`
--
ALTER TABLE `database_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`),
  ADD UNIQUE KEY `NOT NULL` (`username`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indeks untuk tabel `dukung_kami`
--
ALTER TABLE `dukung_kami`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `database_pelanggan`
--
ALTER TABLE `database_pelanggan`
  MODIFY `id_pelanggan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
