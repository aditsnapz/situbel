-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Agu 2021 pada 16.45
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
-- Database: `situbel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `notifikasi`
--

CREATE TABLE `notifikasi` (
  `id` int(64) NOT NULL,
  `report_id` int(11) NOT NULL,
  `status` int(4) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `nominal` varchar(64) NOT NULL,
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
(1, 4, 1, 10, 'Pembayaran Living Cost Pertama', '2021-07-01', '2021-07-31', '1', '10000000', 0, 'Harap Segera', 'Baik', 0, '2021-07-07 08:03:26', '2021-07-07 08:03:26', 1, '0000-00-00 00:00:00', 1),
(2, 4, 1, 10, 'Pembayaran Tuition Fee Pertama', '2021-07-07', '2021-07-31', '1', '2000000', 0, 'urgent', 'baik', 0, '2021-07-07 08:06:58', '2021-07-07 08:06:58', 1, '0000-00-00 00:00:00', 2),
(3, 4, 1, 0, 'tes', '2021-07-11', '2021-07-11', '1', '1000000', 0, 'adwdwa', 'adwdwa\r\n', 0, '2021-07-11 23:32:47', '2021-07-11 23:32:47', 1, '0000-00-00 00:00:00', 1),
(4, 4, 1, 0, 'tes 2', '2021-07-11', '2021-07-11', '1', '2000000', 0, 'adwdwa', 'adwdwa\r\n', 0, '2021-07-11 23:33:13', '2021-07-11 23:33:13', 1, '0000-00-00 00:00:00', 1),
(5, 4, 1, 0, 'tes 4', '2021-07-11', '2021-07-13', '1', '1000000', 0, 'ddgdgd', 'hfhfh', 0, '2021-07-11 23:35:48', '2021-07-11 23:35:48', 1, '0000-00-00 00:00:00', 1),
(6, 8, 2, 15, 'Living Cost Bulan Mei-Juni 2021', '2021-07-28', '2021-07-31', '3', '44.80', 0, 'Asuransi Bulan Mei-Juni 2021', 'segera', 0, '2021-07-28 11:27:16', '2021-07-28 11:27:16', 1, '0000-00-00 00:00:00', 1),
(7, 8, 2, 15, 'Pembayaran Tuition Fee 1', '2021-07-28', '2021-07-31', '3', '369.92', 0, 'Segera', 'Segera', 0, '2021-07-28 11:28:01', '2021-07-28 11:28:01', 1, '2021-07-28 11:28:01', 2),
(8, 8, 2, 0, 'tes', '2021-08-23', '2021-08-23', '', '1000000', 0, 'tes2', 'tes2', 0, '2021-08-23 13:41:22', '2021-08-23 13:41:22', 0, '0000-00-00 00:00:00', 1),
(9, 8, 2, 0, 'tes', '2021-08-23', '2021-08-23', '', '1000000', 0, 'tes iki', 'iki yakin tes', 0, '2021-08-23 13:42:54', '2021-08-23 13:42:54', 0, '0000-00-00 00:00:00', 2),
(10, 8, 2, 0, 'tes2', '1111-11-11', '2021-08-29', '1', '100000', 0, 'oke', 'okeeoek', 0, '2021-08-29 12:04:32', '2021-08-29 12:04:32', 0, '0000-00-00 00:00:00', 2),
(11, 5, 3, 0, 'tes settlement', '2021-08-29', '2021-08-29', '3', '1000000', 0, 'adw', 'adw', 0, '2021-08-29 18:39:50', '2021-08-29 18:39:50', 0, '0000-00-00 00:00:00', 5),
(12, 8, 2, 0, 'tes', '2021-08-29', '2021-08-29', '1', '1000000', 0, 'gugugug', 'bjbj', 0, '2021-08-29 20:57:47', '2021-08-29 20:57:47', 1, '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `report_bayar`
--

CREATE TABLE `report_bayar` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `semester` varchar(16) NOT NULL,
  `nomor_sk` text NOT NULL,
  `kurs` varchar(64) NOT NULL,
  `tanggal_bayar` date NOT NULL,
  `biaya_admin` varchar(64) NOT NULL,
  `keterangan_biaya_admin` text NOT NULL,
  `nominal` int(64) NOT NULL,
  `admin` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `report_bayar`
--

INSERT INTO `report_bayar` (`id`, `users_id`, `semester`, `nomor_sk`, `kurs`, `tanggal_bayar`, `biaya_admin`, `keterangan_biaya_admin`, `nominal`, `admin`, `created_at`, `updated_at`) VALUES
(10, 4, '5', '', '13.309,73', '0000-00-00', '', '', 0, 1, '2021-07-27 10:30:05', '2021-07-27 10:30:05'),
(14, 8, 'IV', '\"SK Rektor Nomor 466/UN7.P/HK/2020 tanggal 19 Mei 2020\r\n\r\nSK Rektor Nomor 803/UN7.P/HK/2020 tanggal 03 Agustus 2020\"\r\n\r\n\r\n', '17462,20', '2021-08-16', '470000', ' Biaya admin untuk living cost dan tuition fee (35.000 rupiah + (30 USD x  14.500 rupiah)) \r\n', 7711924, 1, '2021-08-16 04:12:19', '2021-08-16 04:12:19'),
(15, 8, 'IV', '<p>SK</p>', '1', '2021-08-29', '470000', '<p>Pembayaran Admin</p>', 470415, 1, '2021-08-29 20:59:37', '2021-08-29 20:59:37');

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
(2, 'Tuition Fee', '[]', '2021-07-07 08:02:34', '2021-07-07 08:02:34'),
(3, 'Insurance', '[]', '2021-08-29 17:17:02', '2021-08-29 17:17:02'),
(4, 'Disemination', '[]', '2021-08-29 17:18:11', '2021-08-29 17:18:11'),
(5, 'Settlement Allowance', '[]', '2021-08-29 17:18:40', '2021-08-29 17:18:40'),
(6, 'Entrance Fee', '[]', '2021-08-29 17:19:04', '2021-08-29 17:19:04');

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
  `university` text NOT NULL,
  `country` varchar(64) NOT NULL,
  `province` varchar(64) NOT NULL,
  `city` varchar(64) NOT NULL,
  `mata_uang` varchar(64) NOT NULL,
  `postal_code` varchar(16) NOT NULL,
  `jenjang` varchar(32) NOT NULL,
  `program_studi` text NOT NULL,
  `status` int(2) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `study`
--

INSERT INTO `study` (`id`, `users_id`, `university`, `country`, `province`, `city`, `mata_uang`, `postal_code`, `jenjang`, `program_studi`, `status`, `created_at`, `updated_at`) VALUES
(1, 4, 'Universitas Diponegoro', 'Indonesia', 'Jawa Tengah', 'Semarang', 'IDR', '50264', 'Sarjana', 'Teknik Komunikasi', 0, '2021-07-07 08:03:56', '2021-07-07 08:03:56'),
(2, 8, 'Johann Wolfgang Goethe Universitat Frankfrut, Jerman\r\n\r\n\r\n', 'Jerman', 'Jerman', 'Jerman', 'EUR', '50264', 'Doctoral', 'Doctoral Programming Study Southeast Asia Studies, Faculty of Linguistics, Cultures and Arts\r\n\r\n\r\n', 1, '2021-07-28 11:19:27', '2021-07-28 11:19:27'),
(3, 5, 'Massachusetts Institute of Technology', 'Amerika', 'MA', 'Cambridge', 'USD', '422134', 'Sarjana', 'Teknik Informatiks', 1, '2020-09-07 15:08:48', '2020-09-07 15:08:48');

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
(5, 'Reza Indra Satrio S.Pd', 'reza', '', '0730a546749f9bb60d47b2b0fdeb3854', '', 10, 'reza.jpg', '2021-07-06 20:39:26', '2021-07-06 20:44:49', '2021-07-06 20:39:26'),
(8, 'Nuriyatul Lailiyah, S.Sos., M.I.Kom.\r\n\r\n\r\n', 'nuriyatul', 'nuriyatul@gmail.com', '0730a546749f9bb60d47b2b0fdeb3854', 'User', 10, 'lintangwulandari.jpg', '2021-07-28 11:13:18', '2021-07-28 11:13:18', '2021-07-28 11:14:25');

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
  `no_rekening` text NOT NULL,
  `status` int(4) NOT NULL COMMENT 'tubeldn, tubelln, ijin belajar',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users_detail`
--

INSERT INTO `users_detail` (`id`, `users_id`, `gender`, `pob`, `dob`, `address`, `mobile_phone`, `passport`, `no_rekening`, `status`, `created_at`, `updated_at`) VALUES
(1, 4, 'P', 'Semarang', '2021-07-07', 'Semarang aja', '082812822812', '-', '', 1, '2021-07-07 06:58:26', '2021-07-07 06:58:26'),
(2, 8, 'P', 'Semarang', '2021-07-07', 'UNDIP', '1201921912', 'ABCDEF', 'Account: DE64500400000381887900\r\nBank : COMMERZBANK\r\nSwift Code : COBADEFFXXX', 1, '2021-07-28 11:18:12', '2021-07-28 11:18:12'),
(3, 5, 'L', 'Semarang', '2021-08-23', 'Jalan ict', '082812822812', '-', 'Account: DE6450040000038188XXX\r\nBank : COMMERZBANKXXXX\r\nSwift Code : COBADEFFXXX', 2, '2020-09-07 15:08:48', '2020-09-07 15:08:48');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `notifikasi`
--
ALTER TABLE `notifikasi`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT untuk tabel `notifikasi`
--
ALTER TABLE `notifikasi`
  MODIFY `id` int(64) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `report`
--
ALTER TABLE `report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `report_bayar`
--
ALTER TABLE `report_bayar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `report_document`
--
ALTER TABLE `report_document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `report_type`
--
ALTER TABLE `report_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `study`
--
ALTER TABLE `study`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `users_detail`
--
ALTER TABLE `users_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
