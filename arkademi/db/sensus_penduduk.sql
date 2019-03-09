-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Mar 2019 pada 14.51
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sensus_penduduk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `person`
--

CREATE TABLE `person` (
  `id` int(3) NOT NULL,
  `name` varchar(30) NOT NULL,
  `id_region` int(3) NOT NULL,
  `address` varchar(75) NOT NULL,
  `income` float NOT NULL,
  `create_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `person`
--

INSERT INTO `person` (`id`, `name`, `id_region`, `address`, `income`, `create_at`) VALUES
(2, 'Rois', 1, 'Jl Utama Sakti V, No.32', 4500000, '2019-03-09 17:14:00'),
(3, 'Rina Famella', 1, 'Kp. Cisampih', 3700000, '2019-03-02 13:01:00'),
(4, ' Marzuki', 5, 'Kp. Bandung', 7800000, '2019-03-09 13:00:00'),
(5, 'Yesi', 4, 'Kp. Z', 4300000, '2019-03-09 13:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `regions`
--

CREATE TABLE `regions` (
  `id_region` int(3) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `create_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `regions`
--

INSERT INTO `regions` (`id_region`, `nama`, `create_at`) VALUES
(1, 'Jakarta Barat', '2019-03-09 17:14:00'),
(3, 'Jakarta Selatan', '2019-03-09 04:00:00'),
(4, 'Jakarta Timur', '2019-03-16 16:59:00'),
(5, 'Jakarta Utara', '2019-03-09 16:01:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(30) NOT NULL,
  `create_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `create_at`) VALUES
(1, 'roisro35@gmail.com', '1234', '2019-03-09 10:59:29');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id`),
  ADD KEY `region_id` (`id_region`);

--
-- Indeks untuk tabel `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id_region`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `person`
--
ALTER TABLE `person`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `regions`
--
ALTER TABLE `regions`
  MODIFY `id_region` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
