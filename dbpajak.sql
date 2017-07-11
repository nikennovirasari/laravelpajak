-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2017 at 08:02 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbpajak`
--

-- --------------------------------------------------------

--
-- Table structure for table `bangunan`
--

CREATE TABLE IF NOT EXISTS `bangunan` (
`id` int(10) unsigned NOT NULL,
  `bg_luas` double(8,2) NOT NULL,
  `bg_kelas` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `bg_nilaiperm2` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2016_05_14_054552_buat_table_user', 1),
('2016_05_14_055203_buat_table_petugas', 1),
('2016_05_14_055430_buat_table_wajibpajak', 1),
('2016_05_14_055806_buat_table_bangunan', 1),
('2016_05_14_055816_buat_table_tanah', 1),
('2016_05_14_055958_buat_table_pajak', 1),
('2016_05_14_061825_buat_table_pembayaran', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pajak`
--

CREATE TABLE IF NOT EXISTS `pajak` (
`id` int(10) unsigned NOT NULL,
  `nop` varchar(18) COLLATE utf8_unicode_ci NOT NULL,
  `tgl_jthtempo` date NOT NULL,
  `total_bayar` double(8,2) NOT NULL,
  `ltk_prov` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ltk_kota` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ltk_kec` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ltk_kel` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ltk_rw` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `ltk_rt` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `ltk_jln` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `bangunan_id` int(10) unsigned NOT NULL,
  `tanah_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE IF NOT EXISTS `pembayaran` (
`id` int(10) unsigned NOT NULL,
  `tmp_bayar` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tgl_bayar` date NOT NULL,
  `status` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `petugas_id` int(10) unsigned NOT NULL,
  `wajibpajak_id` int(10) unsigned NOT NULL,
  `pajak_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE IF NOT EXISTS `petugas` (
`id` int(10) unsigned NOT NULL,
  `keterangan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tanah`
--

CREATE TABLE IF NOT EXISTS `tanah` (
`id` int(10) unsigned NOT NULL,
  `th_luas` double(8,2) NOT NULL,
  `th_kelas` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `th_nilaiperm2` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(10) unsigned NOT NULL,
  `username` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `level` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wajibpajak`
--

CREATE TABLE IF NOT EXISTS `wajibpajak` (
`id` int(10) unsigned NOT NULL,
  `nama` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `npwp` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `almt_prov` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `almt_kota` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `almt_kec` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `almt_kel` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `almt_rw` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `almt_rt` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `almt_jln` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bangunan`
--
ALTER TABLE `bangunan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pajak`
--
ALTER TABLE `pajak`
 ADD PRIMARY KEY (`id`), ADD KEY `pajak_bangunan_id_foreign` (`bangunan_id`), ADD KEY `pajak_tanah_id_foreign` (`tanah_id`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
 ADD PRIMARY KEY (`id`), ADD KEY `pembayaran_petugas_id_foreign` (`petugas_id`), ADD KEY `pembayaran_wajibpajak_id_foreign` (`wajibpajak_id`), ADD KEY `pembayaran_pajak_id_foreign` (`pajak_id`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
 ADD PRIMARY KEY (`id`), ADD KEY `petugas_user_id_foreign` (`user_id`);

--
-- Indexes for table `tanah`
--
ALTER TABLE `tanah`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wajibpajak`
--
ALTER TABLE `wajibpajak`
 ADD PRIMARY KEY (`id`), ADD KEY `wajibpajak_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bangunan`
--
ALTER TABLE `bangunan`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pajak`
--
ALTER TABLE `pajak`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tanah`
--
ALTER TABLE `tanah`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wajibpajak`
--
ALTER TABLE `wajibpajak`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `pajak`
--
ALTER TABLE `pajak`
ADD CONSTRAINT `pajak_bangunan_id_foreign` FOREIGN KEY (`bangunan_id`) REFERENCES `bangunan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `pajak_tanah_id_foreign` FOREIGN KEY (`tanah_id`) REFERENCES `tanah` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
ADD CONSTRAINT `pembayaran_pajak_id_foreign` FOREIGN KEY (`pajak_id`) REFERENCES `pajak` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `pembayaran_petugas_id_foreign` FOREIGN KEY (`petugas_id`) REFERENCES `petugas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `pembayaran_wajibpajak_id_foreign` FOREIGN KEY (`wajibpajak_id`) REFERENCES `wajibpajak` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `petugas`
--
ALTER TABLE `petugas`
ADD CONSTRAINT `petugas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `wajibpajak`
--
ALTER TABLE `wajibpajak`
ADD CONSTRAINT `wajibpajak_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
