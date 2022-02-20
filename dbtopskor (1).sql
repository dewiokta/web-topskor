-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2022 at 08:22 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbtopskor`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kelompok_usias`
--

CREATE TABLE `kelompok_usias` (
  `id` int(10) UNSIGNED NOT NULL,
  `usia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelompok_usias`
--

INSERT INTO `kelompok_usias` (`id`, `usia`, `created_at`, `updated_at`) VALUES
(1, 'U-13', NULL, NULL),
(2, 'U-14', NULL, NULL),
(3, 'U-15', NULL, NULL),
(4, 'U-16', NULL, NULL),
(5, 'U-17', NULL, NULL),
(6, 'U-18', NULL, NULL),
(7, 'U-12', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `klubs`
--

CREATE TABLE `klubs` (
  `id` int(10) UNSIGNED NOT NULL,
  `zona_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `namaKlub` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo_klub` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_bersurat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_latihan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medsos_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penanggungjawab_klub` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_siswa` int(11) NOT NULL,
  `jumlah_pelatih` int(11) NOT NULL,
  `keanggotaan_askot_askab` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `akte_sbb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kompetisi_yangdiikuti` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `partisipasi_diligatopskor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prestasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `klubs`
--

INSERT INTO `klubs` (`id`, `zona_id`, `user_id`, `namaKlub`, `logo_klub`, `alamat_bersurat`, `alamat_latihan`, `no_hp`, `medsos_url`, `website`, `penanggungjawab_klub`, `jumlah_siswa`, `jumlah_pelatih`, `keanggotaan_askot_askab`, `akte_sbb`, `kompetisi_yangdiikuti`, `partisipasi_diligatopskor`, `prestasi`, `created_at`, `updated_at`) VALUES
(6, 5, 5, 'Tunas Bangsa', 'pupuk-padat.png', 'Surabaya', 'Surabaya', '081234567890', 'Tunas', 'tunasbangsa', 'nopen', 100, 6, 'Askot', 'Berbadan Hukum', 'Topskor', '2022', 'Juara 1 Nasional SSB', '2022-02-12 06:38:29', '2022-02-12 06:38:29'),
(7, 2, 4, 'Putra Malang', 'annie-spratt-QYcSeY7vuZM-unsplash.jpg', 'Malang', 'Malang', '081237890120', 'putra', 'putra', 'dewi', 200, 10, 'ASKAB', 'Berbadan Hukum', 'Malaysia Cup', '2022', 'Juara 2 Internatiol Malaysia Cup', '2022-02-15 00:40:16', '2022-02-15 00:40:16'),
(8, 7, 6, 'Putra Cirebon', 'pgpr.jpg', 'Cirebon', 'Cirebon', '082678120980', 'anakcirebon', 'cirebonanak', 'ita', 123, 8, 'ASKOT', 'Berbadan Hukum', 'Jawa Barat', '2022', 'Juara 1 Liga Jawa Barat', '2022-02-15 00:48:18', '2022-02-15 00:48:18');

-- --------------------------------------------------------

--
-- Table structure for table `klub_has_kelompok_usias`
--

CREATE TABLE `klub_has_kelompok_usias` (
  `id` int(10) UNSIGNED NOT NULL,
  `klub_id` int(10) UNSIGNED NOT NULL,
  `kelusia_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_01_19_152927_laratrust_setup_tables', 1),
(16, '2022_01_20_121949_create_zonas_table', 2),
(17, '2022_01_20_125212_create_kelompok_usias_table', 2),
(18, '2022_01_20_125629_create_klubs_table', 2),
(19, '2022_01_20_140153_create_officials_table', 2),
(20, '2022_01_20_141134_create_pemains_table', 2),
(21, '2022_01_20_141511_create_klub_has_kelompok_usias_table', 3),
(22, '2022_01_22_124613_create_zona_has__kelompok_usias_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `officials`
--

CREATE TABLE `officials` (
  `id` int(10) UNSIGNED NOT NULL,
  `klub_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `zona_id` int(10) UNSIGNED DEFAULT NULL,
  `zona` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `klub` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namaOfficial` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lisensi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ttl` date NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medsos_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Dalam Proses',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `officials`
--

INSERT INTO `officials` (`id`, `klub_id`, `user_id`, `zona_id`, `zona`, `klub`, `namaOfficial`, `jabatan`, `lisensi`, `ttl`, `email`, `no_hp`, `medsos_url`, `status`, `created_at`, `updated_at`) VALUES
(6, 6, 5, 5, 'Malang', 'Tunas Bangsa', 'Osy Kris', 'Official Utama', 'A', '2002-06-18', 'osy.krisdayanti@gmail.com', '081234567891', 'ocii27', 'Diterima', '2022-02-12 07:38:24', '2022-02-16 21:07:36'),
(8, 6, 5, 5, 'Malang', 'Tunas Bangsa', 'Yayang Nirmala Novend Syana', 'Official Kedua', 'B', '2022-06-21', 'novendosy@gmail.com', '08126389010', 'jdfj', 'Dalam Proses', '2022-02-12 08:46:57', '2022-02-12 08:46:57');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pemains`
--

CREATE TABLE `pemains` (
  `id` int(10) UNSIGNED NOT NULL,
  `klub_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `zona_id` int(10) UNSIGNED NOT NULL,
  `zona` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `klub` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namaPemain` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_punggung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `posisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sekolah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nisn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ttl` date NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Dalam Proses',
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pemains`
--

INSERT INTO `pemains` (`id`, `klub_id`, `user_id`, `zona_id`, `zona`, `klub`, `namaPemain`, `no_punggung`, `posisi`, `sekolah`, `nisn`, `ttl`, `status`, `foto`, `created_at`, `updated_at`) VALUES
(28, 6, 5, 5, 'Malang', 'Tunas Bangsa', 'Dewi Oktavia', '13', 'Back', 'SMAN 01 Magetan', '000237812', '2022-02-07', 'Dalam Proses', 'melissa-askew-1fBUD5Dcmys-unsplash.jpg', '2022-02-12 08:51:35', '2022-02-12 09:10:33'),
(30, 6, 5, 5, 'Malang', 'Tunas Bangsa', 'Ita Merliana', '8', 'Back', 'SMAN 01 Sutojayan', '000237820', '2022-02-07', 'Diterima', 'william-moreland-auijD19Byq8-unsplash.jpg', '2022-02-12 09:17:12', '2022-02-16 21:10:42');

-- --------------------------------------------------------

--
-- Table structure for table `pemain_has_kelompok_usias`
--

CREATE TABLE `pemain_has_kelompok_usias` (
  `id` int(10) NOT NULL,
  `pemain_id` int(10) UNSIGNED DEFAULT NULL,
  `kelusia_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemain_has_kelompok_usias`
--

INSERT INTO `pemain_has_kelompok_usias` (`id`, `pemain_id`, `kelusia_id`, `user_id`) VALUES
(35, 28, 3, 5),
(37, 28, 1, 5),
(39, 30, 3, 5);

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'users-create', 'Create Users', 'Create Users', '2022-01-21 22:30:52', '2022-01-21 22:30:52'),
(2, 'users-read', 'Read Users', 'Read Users', '2022-01-21 22:30:52', '2022-01-21 22:30:52'),
(3, 'users-update', 'Update Users', 'Update Users', '2022-01-21 22:30:52', '2022-01-21 22:30:52'),
(4, 'users-delete', 'Delete Users', 'Delete Users', '2022-01-21 22:30:52', '2022-01-21 22:30:52'),
(5, 'payments-create', 'Create Payments', 'Create Payments', '2022-01-21 22:30:52', '2022-01-21 22:30:52'),
(6, 'payments-read', 'Read Payments', 'Read Payments', '2022-01-21 22:30:52', '2022-01-21 22:30:52'),
(7, 'payments-update', 'Update Payments', 'Update Payments', '2022-01-21 22:30:52', '2022-01-21 22:30:52'),
(8, 'payments-delete', 'Delete Payments', 'Delete Payments', '2022-01-21 22:30:52', '2022-01-21 22:30:52'),
(9, 'profile-read', 'Read Profile', 'Read Profile', '2022-01-21 22:30:52', '2022-01-21 22:30:52'),
(10, 'profile-update', 'Update Profile', 'Update Profile', '2022-01-21 22:30:52', '2022-01-21 22:30:52');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 1),
(2, 2),
(2, 3),
(3, 1),
(3, 2),
(3, 3),
(4, 1),
(4, 2),
(4, 3),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(9, 2),
(9, 3),
(10, 1),
(10, 2),
(10, 3);

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'adminpusat', 'Adminpusat', 'Adminpusat', '2022-01-21 22:30:52', '2022-01-21 22:30:52'),
(2, 'adminzona', 'Adminzona', 'Adminzona', '2022-01-21 22:30:52', '2022-01-21 22:30:52'),
(3, 'manajertim', 'Manajertim', 'Manajertim', '2022-01-21 22:30:52', '2022-01-21 22:30:52');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`) VALUES
(3, 4, 'App\\Models\\User'),
(3, 5, 'App\\Models\\User'),
(3, 6, 'App\\Models\\User'),
(1, 7, 'App\\Models\\User');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) UNSIGNED NOT NULL,
  `zona_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `zona_id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 2, 'manajer tim 1', 'manajertim1@gmail.com', NULL, '$2y$10$spSNtC2loVT2f5ndHaBbIeCqNl1Rz8Jkq.MDOjRwXcIfiJDJHPuBO', NULL, '2022-02-01 23:25:35', '2022-02-12 09:24:41'),
(5, 5, 'manajer tim 2', 'manajertim2@gmail.com', NULL, '$2y$10$HRCWS/oHesljxueJEO3uk.2k3Vm7DdAa2DUT4vUtgSA1WZFbfYUta', NULL, '2022-02-09 01:27:30', '2022-02-10 08:03:57'),
(6, 7, 'manajer tim 3', 'manajertim3@gmail.com', NULL, '$2y$10$cqwwZZTRDdWZMC8sYre.tuZmL4uQyniYqBCGZ17yn8qQ77uubJyz6', NULL, '2022-02-12 09:25:21', '2022-02-12 09:25:31'),
(7, NULL, 'admin pusat', 'adminpusat@gmail.com', NULL, '$2y$10$4lzrnLE8NeJEgxjI7d0Rf.mIhPoGS5eBBoEqErufc3J3XYP68u.z6', NULL, '2022-02-12 21:30:23', '2022-02-12 21:30:23');

-- --------------------------------------------------------

--
-- Table structure for table `zonas`
--

CREATE TABLE `zonas` (
  `id` int(10) UNSIGNED NOT NULL,
  `namaKota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `zonas`
--

INSERT INTO `zonas` (`id`, `namaKota`, `created_at`, `updated_at`) VALUES
(1, 'Jakarta', NULL, NULL),
(2, 'Karawang', NULL, NULL),
(3, 'Madiun', NULL, NULL),
(5, 'Malang', NULL, NULL),
(6, 'Bandung', NULL, NULL),
(7, 'Cirebon', NULL, NULL),
(8, 'Pati', NULL, NULL),
(9, 'Sulawesi Tengah', NULL, NULL),
(10, 'Kepulauan Riau', NULL, NULL),
(11, 'Lampung', NULL, NULL),
(23, 'Papua', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `zona_has__kelompok_usias`
--

CREATE TABLE `zona_has__kelompok_usias` (
  `id` int(10) UNSIGNED NOT NULL,
  `zona_id` int(10) UNSIGNED NOT NULL,
  `kelusia_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `zona_has__kelompok_usias`
--

INSERT INTO `zona_has__kelompok_usias` (`id`, `zona_id`, `kelusia_id`, `created_at`, `updated_at`) VALUES
(48, 1, 1, NULL, NULL),
(49, 1, 2, NULL, NULL),
(50, 1, 3, NULL, NULL),
(51, 1, 4, NULL, NULL),
(52, 1, 5, NULL, NULL),
(53, 1, 7, NULL, NULL),
(54, 2, 1, NULL, NULL),
(55, 2, 5, NULL, NULL),
(56, 3, 1, NULL, NULL),
(57, 3, 3, NULL, NULL),
(58, 3, 7, NULL, NULL),
(59, 5, 1, NULL, NULL),
(60, 5, 3, NULL, NULL),
(61, 6, 1, NULL, NULL),
(62, 6, 3, NULL, NULL),
(63, 6, 7, NULL, NULL),
(64, 7, 1, NULL, NULL),
(65, 7, 3, NULL, NULL),
(66, 7, 5, NULL, NULL),
(67, 8, 2, NULL, NULL),
(68, 8, 4, NULL, NULL),
(69, 8, 6, NULL, NULL),
(70, 9, 1, NULL, NULL),
(71, 9, 3, NULL, NULL),
(72, 9, 5, NULL, NULL),
(73, 10, 2, NULL, NULL),
(74, 11, 1, NULL, NULL),
(75, 11, 2, NULL, NULL),
(76, 11, 4, NULL, NULL),
(77, 23, 1, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kelompok_usias`
--
ALTER TABLE `kelompok_usias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `klubs`
--
ALTER TABLE `klubs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `namaKlub` (`namaKlub`),
  ADD KEY `klubs_zona_id_foreign` (`zona_id`),
  ADD KEY `idx_user` (`user_id`);

--
-- Indexes for table `klub_has_kelompok_usias`
--
ALTER TABLE `klub_has_kelompok_usias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `klub_has_kelompok_usias_klub_id_foreign` (`klub_id`),
  ADD KEY `klub_has_kelompok_usias_kelusia_id_foreign` (`kelusia_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `officials`
--
ALTER TABLE `officials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `officials_klub_id_foreign` (`klub_id`),
  ADD KEY `officials_ibfk_1` (`user_id`),
  ADD KEY `officials_ibfk_2` (`zona_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pemains`
--
ALTER TABLE `pemains`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nisn` (`nisn`),
  ADD KEY `pemains_klub_id_foreign` (`klub_id`),
  ADD KEY `pemains_user_id_foreign` (`user_id`),
  ADD KEY `pemains_ibfk_1` (`zona_id`);

--
-- Indexes for table `pemain_has_kelompok_usias`
--
ALTER TABLE `pemain_has_kelompok_usias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pemain_has_kelompok_usias_ibfk_1` (`kelusia_id`),
  ADD KEY `pemain_has_kelompok_usias_ibfk_2` (`pemain_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `zona_id` (`zona_id`);

--
-- Indexes for table `zonas`
--
ALTER TABLE `zonas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zona_has__kelompok_usias`
--
ALTER TABLE `zona_has__kelompok_usias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `zona_has__kelompok_usias_zona_id_foreign` (`zona_id`),
  ADD KEY `zona_has__kelompok_usias_kelusia_id_foreign` (`kelusia_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kelompok_usias`
--
ALTER TABLE `kelompok_usias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `klubs`
--
ALTER TABLE `klubs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `klub_has_kelompok_usias`
--
ALTER TABLE `klub_has_kelompok_usias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `officials`
--
ALTER TABLE `officials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pemains`
--
ALTER TABLE `pemains`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `pemain_has_kelompok_usias`
--
ALTER TABLE `pemain_has_kelompok_usias`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `zonas`
--
ALTER TABLE `zonas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `zona_has__kelompok_usias`
--
ALTER TABLE `zona_has__kelompok_usias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `klubs`
--
ALTER TABLE `klubs`
  ADD CONSTRAINT `klubs_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `klubs_zona_id_foreign` FOREIGN KEY (`zona_id`) REFERENCES `zonas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `klub_has_kelompok_usias`
--
ALTER TABLE `klub_has_kelompok_usias`
  ADD CONSTRAINT `klub_has_kelompok_usias_kelusia_id_foreign` FOREIGN KEY (`kelusia_id`) REFERENCES `kelompok_usias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `klub_has_kelompok_usias_klub_id_foreign` FOREIGN KEY (`klub_id`) REFERENCES `klubs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `officials`
--
ALTER TABLE `officials`
  ADD CONSTRAINT `officials_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `officials_ibfk_2` FOREIGN KEY (`zona_id`) REFERENCES `zonas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `officials_klub_id_foreign` FOREIGN KEY (`klub_id`) REFERENCES `klubs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pemains`
--
ALTER TABLE `pemains`
  ADD CONSTRAINT `pemains_ibfk_1` FOREIGN KEY (`zona_id`) REFERENCES `zonas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pemains_klub_id_foreign` FOREIGN KEY (`klub_id`) REFERENCES `klubs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pemains_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pemain_has_kelompok_usias`
--
ALTER TABLE `pemain_has_kelompok_usias`
  ADD CONSTRAINT `pemain_has_kelompok_usias_ibfk_1` FOREIGN KEY (`kelusia_id`) REFERENCES `kelompok_usias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pemain_has_kelompok_usias_ibfk_2` FOREIGN KEY (`pemain_id`) REFERENCES `pemains` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pemain_has_kelompok_usias_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`zona_id`) REFERENCES `zonas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `zona_has__kelompok_usias`
--
ALTER TABLE `zona_has__kelompok_usias`
  ADD CONSTRAINT `zona_has__kelompok_usias_kelusia_id_foreign` FOREIGN KEY (`kelusia_id`) REFERENCES `kelompok_usias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `zona_has__kelompok_usias_zona_id_foreign` FOREIGN KEY (`zona_id`) REFERENCES `zonas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
