-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Apr 2020 pada 08.00
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpbasic`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nis` char(16) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `jurusan` varchar(100) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nis`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Andi S', '0987867565', 'sanjaya@gmail.com', 'informatika', 'profile1.png'),
(2, 'Heirudin', '0099878765', 'heirudin@gmail.com', 'management', 'profile1.png'),
(3, 'Maulana', '9786565640', 'maulana@gmail.com', 'Sastra English', 'profile1.png'),
(7, 'Annisa', '0765787678', 'annisa@gmail.com', 'Akutansi', 'profile2.png'),
(8, 'Riana', '9877659758', 'riana@gmail.com', 'Akutansi', '5e836916e5a37.png'),
(9, 'Dayatulloh', '8657383628', 'dayatulloh@gmail.com', 'Matematika', '5e8369d6478f7.png'),
(10, 'Ridho', '3677778686', 'ridho@gmail.com', 'informatika', '5e8369648e97b.png'),
(11, 'Wahyuni', '0009786752', 'wahyuni@gmail.com', 'Akutansi', '5e83698cd53e0.png'),
(12, 'Yuni unyun', '0000001234', 'unyununyun@gmail.com', 'Akutansi', '5e8369ba68de2.png'),
(13, 'Ardiansyah', '9988773636', 'ardiannsyah@gmail.com', 'Ekonomi', '5e836a30d2e5e.png'),
(14, 'Deni', '9878667676', 'deni@gmail.com', 'Ekonomi', '5e836a67aef2c.png'),
(15, 'Rendi', '3764376563', 'rendi@gmail.com', 'Ekonomi', '5e836a941de2c.png'),
(16, 'Beni', '3978867753', 'beni@gmail.com', 'Matematika', '5e836aba2d480.png'),
(17, 'Shasa', '9786765563', 'shaha@gmail.com', 'Akutansi', '5e836aeb8485c.png'),
(18, 'Salmon', '0989767753', 'salmon@gmail.com', 'informatika', '5e836b0e0ae0a.png'),
(19, 'Lemon tea', '8767567563', 'lemeon@gmail.com', 'Akutansi', '5e836b2f6d475.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$vprby3piMB9uxgXTjodY2.2BuNp20rceJCAi0BajpMh2KD3Oai4PK');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
