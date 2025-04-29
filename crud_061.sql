-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Apr 2025 pada 17.36
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bioskop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `crud_061`
--

CREATE TABLE `crud_061` (
  `id` int(11) NOT NULL,
  `nama_pembeli` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `judul_film` varchar(100) DEFAULT NULL,
  `jumlah_tiket` int(11) DEFAULT NULL,
  `tanggal_nonton` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `crud_061`
--

INSERT INTO `crud_061` (`id`, `nama_pembeli`, `email`, `judul_film`, `jumlah_tiket`, `tanggal_nonton`) VALUES
(7, 'juan', 'juanjordan820@gmail.com', 'thunderbolts', 1, '2025-04-29');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `crud_061`
--
ALTER TABLE `crud_061`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `crud_061`
--
ALTER TABLE `crud_061`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
