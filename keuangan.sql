-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Nov 2019 pada 12.36
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `keuangan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_kegiatan`
--

CREATE TABLE `detail_kegiatan` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `jenis_kegiatan_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_kegiatan`
--

INSERT INTO `detail_kegiatan` (`id`, `title`, `jenis_kegiatan_id`, `created_at`, `updated_at`) VALUES
(3, 'Hari 1', 3, '2019-11-15 02:43:22', '2019-11-15 02:43:22'),
(4, 'Hari 2', 3, '2019-11-15 02:43:37', '2019-11-15 02:43:37'),
(5, 'Belanja pegawai', 4, '2019-11-15 03:24:55', '2019-11-15 03:24:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_kegiatan`
--

CREATE TABLE `jenis_kegiatan` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis_kegiatan`
--

INSERT INTO `jenis_kegiatan` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(3, 'Pembangunan jembatan desa cluwak', '', '2019-11-15 02:43:13', '2019-11-15 02:43:13'),
(4, 'Pembangunan gedung it kecamatan', '', '2019-11-15 03:24:20', '2019-11-15 03:24:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `list_kegiatan`
--

CREATE TABLE `list_kegiatan` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `volume` int(11) NOT NULL,
  `satuan` varchar(128) NOT NULL,
  `harga_satuan` int(19) NOT NULL,
  `jumlah_biaya` int(19) NOT NULL,
  `jenis_kegiatan_id` int(11) NOT NULL,
  `detail_kegiatan_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `list_kegiatan`
--

INSERT INTO `list_kegiatan` (`id`, `title`, `volume`, `satuan`, `harga_satuan`, `jumlah_biaya`, `jenis_kegiatan_id`, `detail_kegiatan_id`, `created_at`, `updated_at`) VALUES
(7, 'Semen', 12, 'bln', 2500000, 30000000, 3, 4, '2019-11-15 03:06:33', '2019-11-15 03:06:33'),
(8, 'Semen', 5, 'sak', 400000, 2000000, 4, 5, '2019-11-15 03:26:07', '2019-11-15 03:26:07'),
(9, 'Pasir', 3, 'truk', 2000000, 6000000, 4, 5, '2019-11-15 03:26:42', '2019-11-15 03:26:42'),
(10, 'Gaji tukang', 6, 'bln', 3500000, 21000000, 3, 3, '2019-11-15 05:48:09', '2019-11-15 05:48:09'),
(11, 'Batu', 2, 'Truk', 2000000, 4000000, 3, 3, '2019-11-15 05:49:18', '2019-11-15 05:49:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `role_id` int(11) NOT NULL COMMENT 'admin=1;visitor=2',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 'root', '$2y$10$R3aZJCtiSes5RmPx/RGY1.U33L2F5NZYTOLL1PIpr9.eAED2CGZLW', 1, '2019-11-15 01:37:46', '2019-11-15 01:37:46');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detail_kegiatan`
--
ALTER TABLE `detail_kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jenis_kegiatan`
--
ALTER TABLE `jenis_kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `list_kegiatan`
--
ALTER TABLE `list_kegiatan`
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
-- AUTO_INCREMENT untuk tabel `detail_kegiatan`
--
ALTER TABLE `detail_kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `jenis_kegiatan`
--
ALTER TABLE `jenis_kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `list_kegiatan`
--
ALTER TABLE `list_kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
