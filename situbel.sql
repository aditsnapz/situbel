-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jul 2021 pada 08.32
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `meds8688_situbel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `report`
--

CREATE TABLE `report` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `study_id` int(11) NOT NULL,
  `report_bayar_id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `semester` varchar(16) NOT NULL,
  `nominal` int(64) NOT NULL,
  `status` int(4) NOT NULL COMMENT '0 : waiting\r\n1 : done\r\n2 : onprocess\r\n3 : rejected',
  `keterangan` text NOT NULL,
  `komentar` text NOT NULL,
  `status_bayar` int(4) NOT NULL COMMENT '0 : unpaid\r\n1 : paid\r\n2 : onprocess',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `admin` int(11) NOT NULL,
  `approved_at` datetime NOT NULL,
  `report_type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `report`
--

INSERT INTO `report` (`id`, `users_id`, `study_id`, `report_bayar_id`, `nama`, `start_date`, `end_date`, `semester`, `nominal`, `status`, `keterangan`, `komentar`, `status_bayar`, `created_at`, `updated_at`, `admin`, `approved_at`, `report_type_id`) VALUES
(1, 4, 1, 0, 'Pembayaran Living Cost Pertama', '2021-07-01', '2021-07-31', '1', 10000000, 0, 'Harap Segera', 'Baik', 0, '2021-07-07 08:03:26', '2021-07-07 08:03:26', 1, '0000-00-00 00:00:00', 1),
(2, 4, 1, 0, 'Pembayaran Tuition Fee Pertama', '2021-07-07', '2021-07-31', '1', 2000000, 0, 'urgent', 'baik', 0, '2021-07-07 08:06:58', '2021-07-07 08:06:58', 1, '0000-00-00 00:00:00', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `report_bayar`
--

CREATE TABLE `report_bayar` (
  `id` int(11) NOT NULL,
  `semester` int(4) NOT NULL,
  `kurs` varchar(64) NOT NULL,
  `tanggal_bayar` date NOT NULL,
  `nominal` int(64) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `report_document`
--

CREATE TABLE `report_document` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `report_type`
--

CREATE TABLE `report_type` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `report_document_id` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `report_type`
--

INSERT INTO `report_type` (`id`, `nama`, `report_document_id`, `created_at`, `updated_at`) VALUES
(1, 'Living Cost', '[]', '2021-07-04 00:00:00', '2021-07-04 00:00:00'),
(2, 'Tuition Fee', '[]', '2021-07-07 08:02:34', '2021-07-07 08:02:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `keterangan` text NOT NULL,
  `status` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `nama`, `keterangan`, `status`) VALUES
(1, 'Super Admin', 'Semua sistem monitoring', 1),
(10, 'User', 'User Pendaftar Situbel', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `study`
--

CREATE TABLE `study` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `university` varchar(128) NOT NULL,
  `country` varchar(64) NOT NULL,
  `province` varchar(64) NOT NULL,
  `city` varchar(64) NOT NULL,
  `mata_uang` varchar(64) NOT NULL,
  `postal_code` varchar(16) NOT NULL,
  `jenjang` varchar(32) NOT NULL,
  `program_studi` varchar(64) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `study`
--

INSERT INTO `study` (`id`, `users_id`, `university`, `country`, `province`, `city`, `mata_uang`, `postal_code`, `jenjang`, `program_studi`, `created_at`, `updated_at`) VALUES
(1, 4, 'Universitas Diponegoro', 'Indonesia', 'Jawa Tengah', 'Semarang', 'IDR', '50264', 'Sarjana', 'Teknik Komunikasi', '2021-07-07 08:03:56', '2021-07-07 08:03:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `username` varchar(32) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `jabatan` varchar(32) NOT NULL,
  `role` int(4) NOT NULL,
  `foto` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `last_login` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `email`, `password`, `jabatan`, `role`, `foto`, `created_at`, `updated_at`, `last_login`) VALUES
(1, 'Aditya Dwi Pratama, S.Kom', 'adittama', 'aditsnapzcz@gmail.com', '0730a546749f9bb60d47b2b0fdeb3854', 'Super Admin', 1, 'adittama.png', '2021-05-23 17:17:11', '2021-05-23 17:17:11', '2021-05-23 21:08:01'),
(4, 'Lintang Wulandari, S.Hum', 'lintangwulandari', 'lintangwulandari@gmail.com', '3f0e00ce28433345533bebc64797bcdb', 'Sekretaris', 10, 'lintangwulandari.jpg', '2021-05-29 21:07:43', '2021-07-06 20:44:41', '0000-00-00 00:00:00'),
(5, 'Reza Indra Satrio S.Pd', 'reza', '', 'bb98b1d0b523d5e783f931550d7702b6', '', 10, 'reza.jpg', '2021-07-06 20:39:26', '2021-07-06 20:44:49', '2021-07-06 20:39:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_detail`
--

CREATE TABLE `users_detail` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `gender` varchar(16) NOT NULL,
  `pob` varchar(32) NOT NULL,
  `dob` date NOT NULL,
  `address` text NOT NULL,
  `mobile_phone` varchar(32) NOT NULL,
  `passport` varchar(32) NOT NULL,
  `status` int(4) NOT NULL COMMENT 'tubeldn, tubelln, ijin belajar',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users_detail`
--

INSERT INTO `users_detail` (`id`, `users_id`, `gender`, `pob`, `dob`, `address`, `mobile_phone`, `passport`, `status`, `created_at`, `updated_at`) VALUES
(1, 4, 'P', 'Semarang', '2021-07-07', 'Semarang aja', '082812822812', '-', 1, '2021-07-07 06:58:26', '2021-07-07 06:58:26');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `report_bayar`
--
ALTER TABLE `report_bayar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `report_document`
--
ALTER TABLE `report_document`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `report_type`
--
ALTER TABLE `report_type`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `study`
--
ALTER TABLE `study`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users_detail`
--
ALTER TABLE `users_detail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `report`
--
ALTER TABLE `report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `report_bayar`
--
ALTER TABLE `report_bayar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `report_document`
--
ALTER TABLE `report_document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `report_type`
--
ALTER TABLE `report_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `study`
--
ALTER TABLE `study`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `users_detail`
--
ALTER TABLE `users_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
