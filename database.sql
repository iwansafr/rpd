-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 31 Des 2019 pada 05.02
-- Versi server: 10.4.10-MariaDB
-- Versi PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rpd`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku_besar`
--

CREATE TABLE `buku_besar` (
  `id` int(11) NOT NULL,
  `uraian` varchar(256) NOT NULL,
  `bukti` varchar(128) NOT NULL,
  `ref` varchar(64) NOT NULL,
  `debet` int(11) NOT NULL,
  `kredit` int(11) NOT NULL,
  `saldo` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `slug` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `file` varchar(256) DEFAULT NULL,
  `author` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `content`
--

INSERT INTO `content` (`id`, `title`, `slug`, `description`, `file`, `author`, `created_at`, `updated_at`) VALUES
(1, 'Money management', 'logo', 'Logo site', 'image_dinusa1.png', 1, '2019-12-10 05:17:28', '2019-12-20 15:23:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `title`, `created_at`, `updated_at`) VALUES
(2, 'Sembako', '2019-12-20 03:41:57', '2019-12-20 03:41:57'),
(3, 'Pakaian', '2019-12-23 06:34:11', '2019-12-23 06:34:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laba_rugi`
--

CREATE TABLE `laba_rugi` (
  `id` int(11) NOT NULL,
  `pendapatan` varchar(256) NOT NULL,
  `tanggal` datetime NOT NULL,
  `subtotal` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `neraca`
--

CREATE TABLE `neraca` (
  `id` int(11) NOT NULL,
  `kode` int(11) NOT NULL,
  `uraian` varchar(256) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemasukan`
--

CREATE TABLE `pemasukan` (
  `id` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `kategori` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `saldo` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `type` varchar(128) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemasukan`
--

INSERT INTO `pemasukan` (`id`, `title`, `description`, `kategori`, `jumlah`, `saldo`, `tanggal`, `type`, `created_at`, `updated_at`) VALUES
(4, 'Penjualan bibit cabai', '', 3, 5000000, 0, '1970-01-01 00:00:00', 'pemasukan', '2019-12-20 07:26:47', '2019-12-28 14:33:07'),
(5, 'Tabungan bulanan', '', 3, 16000000, 1, '1970-01-12 00:00:00', 'pengeluaran', '2019-12-20 16:01:34', '2019-12-28 14:34:37'),
(6, 'Tabungan bulanan', 'Hello, world!', 3, 6000000, 0, '1970-01-01 00:00:00', 'pemasukan', '2019-12-28 14:14:07', '2019-12-28 14:36:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `saldo`
--

CREATE TABLE `saldo` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `tanggal` datetime NOT NULL,
  `jumlah` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `saldo`
--

INSERT INTO `saldo` (`id`, `description`, `tanggal`, `jumlah`, `created_at`, `updated_at`) VALUES
(3, '	        				        				        				        				        				        				        				        				        				        				        				        				        				        				        			Saldo dari penjualan pepaya	        			        			        			        			        			        			        			        			        			        			        			        			        			        			        		', '2019-04-02 03:38:30', 12000000, '2019-12-30 02:05:38', '2019-12-30 02:38:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `fullname` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `kecamatan` int(11) NOT NULL,
  `desa` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `fullname`, `role_id`, `kecamatan`, `desa`, `created_at`, `updated_at`) VALUES
(1, 'root', '$2y$10$LvMxyGUcDB6IOLsU2noF9evHT78wh4uBrX5EHxtCTH/O0kWCK/K8i', '', 1, 0, 0, '2019-12-05 02:14:45', '2019-12-27 11:40:40'),
(4, 'dagang', '$2y$10$QPCWuPXU8BQB8R05bTBW/u6DAqdc5hnKKsSvval3ef0Yu1S/IU0v6', '', 2, 0, 0, '2019-12-30 05:04:39', '2019-12-30 05:04:39'),
(5, 'jasa', '$2y$10$PKhjB5jknc0.JtQsuMSawOkt.XcALHU/8hWrva2dg90tUSyo7aOsa', '', 2, 0, 0, '2019-12-30 05:05:21', '2019-12-30 05:05:21'),
(6, 'simpan', '$2y$10$qNRpB04uTi9uVqdzdpPVeuEWfFJCBLuOTEPqhTZ4IKqfgRlEcs2T.', '', 2, 0, 0, '2019-12-30 05:06:39', '2019-12-30 05:06:39');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku_besar`
--
ALTER TABLE `buku_besar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `laba_rugi`
--
ALTER TABLE `laba_rugi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `neraca`
--
ALTER TABLE `neraca`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pemasukan`
--
ALTER TABLE `pemasukan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `saldo`
--
ALTER TABLE `saldo`
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
-- AUTO_INCREMENT untuk tabel `buku_besar`
--
ALTER TABLE `buku_besar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `laba_rugi`
--
ALTER TABLE `laba_rugi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `neraca`
--
ALTER TABLE `neraca`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pemasukan`
--
ALTER TABLE `pemasukan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `saldo`
--
ALTER TABLE `saldo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
