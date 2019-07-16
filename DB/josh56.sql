-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jul 2019 pada 15.58
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `josh56`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `activations`
--

CREATE TABLE `activations` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `activations`
--

INSERT INTO `activations` (`id`, `user_id`, `code`, `completed`, `completed_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'FBMhdQXSSr1uKZjYYrPm0iuvceIPkP00', 1, '2019-06-23 03:29:43', '2019-06-23 03:29:43', '2019-06-23 03:29:43'),
(2, 2, '8SOCyUQlR4xz8Lx4zLFpcXAp68TCTFzE', 1, '2019-06-23 03:29:43', '2019-06-23 03:29:43', '2019-06-23 03:29:43'),
(4, 4, 'JfRaM3yvQFy44UIhhTGRsHd4mF0HrCSj', 1, '2019-06-23 09:56:56', '2019-06-23 09:56:56', '2019-06-23 09:56:56'),
(5, 5, 'gZ9lIC5BeIxjynE2Ty1QuiFrjyf8QAZf', 1, '2019-06-23 09:56:57', '2019-06-23 09:56:57', '2019-06-23 09:56:57'),
(8, 8, 'j05ay2TvefgWaTdJpCsMM3hREtZvQ76N', 1, '2019-06-27 22:50:10', '2019-06-27 22:50:10', '2019-06-27 22:50:10'),
(10, 10, 'pVR142b2GPXq1n8OV40X8mOSFEcwN5zI', 1, '2019-06-27 23:07:00', '2019-06-27 23:07:00', '2019-06-27 23:07:00'),
(11, 11, '2caLoDfc8QAO5wpZHnuzpi5bZyzXyeUU', 1, '2019-06-28 19:26:53', '2019-06-28 19:26:53', '2019-06-28 19:26:53'),
(12, 12, '6yfTcoTmBzMmGtyvY7hnRWKwYOM7Ki0B', 1, '2019-06-28 19:29:31', '2019-06-28 19:29:31', '2019-06-28 19:29:31'),
(13, 13, 'zb3Ue3CEggCl3rvDH1xj0nhEJgqsLSwH', 1, '2019-06-28 20:56:25', '2019-06-28 20:56:25', '2019-06-28 20:56:25'),
(14, 14, '3sXzq9hdMzmyIeEP835PeWRWoNf8FEw4', 1, '2019-06-28 20:59:59', '2019-06-28 20:59:59', '2019-06-28 20:59:59'),
(15, 15, 'AVmVYVt1tTdPg9YTf1OupDGqxVNboZdy', 1, '2019-06-28 21:06:27', '2019-06-28 21:06:27', '2019-06-28 21:06:27'),
(16, 16, 'ovEs0sJqSN13i85Q8iIY6zeHMtRztuj9', 1, '2019-06-28 21:07:21', '2019-06-28 21:07:21', '2019-06-28 21:07:21'),
(17, 17, 'tzFBptf7QtzIsCTdJfdcXQb50YvX1Nbt', 1, '2019-06-28 21:11:03', '2019-06-28 21:11:03', '2019-06-28 21:11:03'),
(20, 20, 'preWMkgv76ZlI22E5RHCbGsOmaGFSbFS', 1, '2019-06-28 21:54:18', '2019-06-28 21:54:18', '2019-06-28 21:54:18'),
(21, 21, '4YmuhXEdVrWomTwE5vgdMdc9VxOPRwsV', 1, '2019-06-28 21:54:50', '2019-06-28 21:54:50', '2019-06-28 21:54:50'),
(22, 22, 'BLgYbLT701joB3Wdly3fkR2g6mzMAT25', 1, '2019-06-28 22:11:24', '2019-06-28 22:11:24', '2019-06-28 22:11:24'),
(24, 5, 'CHAgplhmYlyf2f9syMf7TeXeqpnXJCRR', 1, '2019-07-13 08:48:44', '2019-07-13 08:48:44', '2019-07-13 08:48:44'),
(25, 6, 'aUmb9RNzFfWcAIKnqK0JKDa23w6ci2Fw', 1, '2019-07-13 10:29:18', '2019-07-13 10:29:18', '2019-07-13 10:29:18'),
(26, 7, 'e4Ujx2TtFyeLk6C8IttmJaycDlcmsX7T', 1, '2019-07-13 10:41:24', '2019-07-13 10:41:24', '2019-07-13 10:41:24'),
(27, 8, 'fdLXpL377W5NYy1M9olyvFTLf4PiJc9D', 1, '2019-07-13 10:44:19', '2019-07-13 10:44:19', '2019-07-13 10:44:19'),
(29, 10, 'yNVMjpBrD8erZttV1ZMXn4kQoOZSkiSl', 1, '2019-07-16 04:03:02', '2019-07-16 04:03:01', '2019-07-16 04:03:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `activity_log`
--

CREATE TABLE `activity_log` (
  `id` int(10) UNSIGNED NOT NULL,
  `log_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `subject_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `causer_id` int(11) DEFAULT NULL,
  `causer_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `properties` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `activity_log`
--

INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_id`, `subject_type`, `causer_id`, `causer_type`, `properties`, `created_at`, `updated_at`) VALUES
(1, 'Ilham', 'LoggedIn', 1, 'App\\User', 1, 'App\\User', '[]', '2019-07-13 07:40:20', '2019-07-13 07:40:20'),
(2, 'joko', 'User Updated by Ilham', 3, 'App\\User', 3, 'App\\User', '[]', '2019-07-13 08:33:07', '2019-07-13 08:33:07'),
(3, 'Ilham', 'LoggedOut', 1, 'App\\User', 1, 'App\\User', '[]', '2019-07-13 08:34:03', '2019-07-13 08:34:03'),
(4, 'joko', 'LoggedIn', 3, 'App\\User', 3, 'App\\User', '[]', '2019-07-13 08:34:12', '2019-07-13 08:34:12'),
(5, 'joko', 'LoggedOut', 3, 'App\\User', 3, 'App\\User', '[]', '2019-07-13 08:36:17', '2019-07-13 08:36:17'),
(6, 'Ilham', 'LoggedIn', 1, 'App\\User', 1, 'App\\User', '[]', '2019-07-13 08:36:27', '2019-07-13 08:36:27'),
(7, 'joko', 'User deleted by Ilham', 3, 'App\\User', 3, 'App\\User', '[]', '2019-07-13 08:38:08', '2019-07-13 08:38:08'),
(8, 'Ilham', 'LoggedOut', 1, 'App\\User', 1, 'App\\User', '[]', '2019-07-13 08:49:04', '2019-07-13 08:49:04'),
(9, 'joko', 'LoggedIn', 5, 'App\\User', 5, 'App\\User', '[]', '2019-07-13 08:49:13', '2019-07-13 08:49:13'),
(10, 'joko', 'LoggedOut', 5, 'App\\User', 5, 'App\\User', '[]', '2019-07-13 08:51:12', '2019-07-13 08:51:12'),
(11, 'Ilham', 'LoggedIn', 1, 'App\\User', 1, 'App\\User', '[]', '2019-07-13 08:51:19', '2019-07-13 08:51:19'),
(12, 'Ilham', 'LoggedOut', 1, 'App\\User', 1, 'App\\User', '[]', '2019-07-13 09:56:35', '2019-07-13 09:56:35'),
(13, 'joko', 'LoggedIn', 5, 'App\\User', 5, 'App\\User', '[]', '2019-07-13 09:56:53', '2019-07-13 09:56:53'),
(14, 'joko', 'LoggedOut', 5, 'App\\User', 5, 'App\\User', '[]', '2019-07-13 10:15:10', '2019-07-13 10:15:10'),
(15, 'Pengguna', 'LoggedIn', 2, 'App\\User', 2, 'App\\User', '[]', '2019-07-13 10:15:23', '2019-07-13 10:15:23'),
(16, 'Pengguna', 'LoggedOut', 2, 'App\\User', 2, 'App\\User', '[]', '2019-07-13 10:15:36', '2019-07-13 10:15:36'),
(17, 'Ilham', 'LoggedIn', 1, 'App\\User', 1, 'App\\User', '[]', '2019-07-13 10:15:42', '2019-07-13 10:15:42'),
(18, 'Ramdan', 'New User Created by Ilham', 6, 'App\\User', 6, 'App\\User', '[]', '2019-07-13 10:29:18', '2019-07-13 10:29:18'),
(19, 'Riawan', 'New User Created by Ilham', 7, 'App\\User', 7, 'App\\User', '[]', '2019-07-13 10:41:24', '2019-07-13 10:41:24'),
(20, 'Riawan', 'New User Created by Ilham', 8, 'App\\User', 8, 'App\\User', '[]', '2019-07-13 10:44:19', '2019-07-13 10:44:19'),
(21, 'Ilham', 'LoggedOut', 1, 'App\\User', 1, 'App\\User', '[]', '2019-07-13 11:14:38', '2019-07-13 11:14:38'),
(22, 'Pengguna', 'LoggedIn', 2, 'App\\User', 2, 'App\\User', '[]', '2019-07-13 11:14:54', '2019-07-13 11:14:54'),
(23, 'Pengguna', 'LoggedIn', 2, 'App\\User', 2, 'App\\User', '[]', '2019-07-15 01:14:49', '2019-07-15 01:14:49'),
(24, 'Ilham', 'LoggedIn', 1, 'App\\User', 1, 'App\\User', '[]', '2019-07-15 03:20:35', '2019-07-15 03:20:35'),
(25, 'Ilham', 'LoggedOut', 1, 'App\\User', 1, 'App\\User', '[]', '2019-07-15 03:20:43', '2019-07-15 03:20:43'),
(26, 'Pengguna', 'LoggedIn', 2, 'App\\User', 2, 'App\\User', '[]', '2019-07-15 03:20:47', '2019-07-15 03:20:47'),
(27, 'Pengguna', 'LoggedOut', 2, 'App\\User', 2, 'App\\User', '[]', '2019-07-15 03:24:52', '2019-07-15 03:24:52'),
(28, 'Pengguna', 'LoggedIn', 2, 'App\\User', 2, 'App\\User', '[]', '2019-07-15 03:25:56', '2019-07-15 03:25:56'),
(29, 'Pengguna', 'LoggedOut', 2, 'App\\User', 2, 'App\\User', '[]', '2019-07-15 03:48:05', '2019-07-15 03:48:05'),
(30, 'Riawan', 'LoggedIn', 8, 'App\\User', 8, 'App\\User', '[]', '2019-07-15 03:49:12', '2019-07-15 03:49:12'),
(31, 'Riawan', 'LoggedIn', 8, 'App\\User', 8, 'App\\User', '[]', '2019-07-15 07:08:05', '2019-07-15 07:08:05'),
(32, 'Riawan', 'LoggedOut', 8, 'App\\User', 8, 'App\\User', '[]', '2019-07-15 07:19:44', '2019-07-15 07:19:44'),
(33, 'Pengguna', 'LoggedIn', 2, 'App\\User', 2, 'App\\User', '[]', '2019-07-15 07:19:49', '2019-07-15 07:19:49'),
(34, 'Pengguna', 'LoggedOut', 2, 'App\\User', 2, 'App\\User', '[]', '2019-07-15 07:36:37', '2019-07-15 07:36:37'),
(35, 'Riawan', 'LoggedIn', 8, 'App\\User', 8, 'App\\User', '[]', '2019-07-15 07:36:45', '2019-07-15 07:36:45'),
(36, 'Pengguna', 'LoggedIn', 2, 'App\\User', 2, 'App\\User', '[]', '2019-07-15 11:57:12', '2019-07-15 11:57:12'),
(37, 'Pengguna', 'LoggedOut', 2, 'App\\User', 2, 'App\\User', '[]', '2019-07-15 11:57:45', '2019-07-15 11:57:45'),
(38, 'Riawan', 'LoggedIn', 8, 'App\\User', 8, 'App\\User', '[]', '2019-07-15 11:57:53', '2019-07-15 11:57:53'),
(39, 'Riawan', 'LoggedOut', 8, 'App\\User', 8, 'App\\User', '[]', '2019-07-15 12:32:44', '2019-07-15 12:32:44'),
(40, 'Ilham', 'LoggedIn', 1, 'App\\User', 1, 'App\\User', '[]', '2019-07-15 12:32:48', '2019-07-15 12:32:48'),
(41, 'Ilham', 'LoggedOut', 1, 'App\\User', 1, 'App\\User', '[]', '2019-07-15 12:33:16', '2019-07-15 12:33:16'),
(42, 'Riawan', 'LoggedIn', 8, 'App\\User', 8, 'App\\User', '[]', '2019-07-15 12:33:26', '2019-07-15 12:33:26'),
(43, 'Ilham', 'LoggedIn', 1, 'App\\User', 1, 'App\\User', '[]', '2019-07-16 01:32:51', '2019-07-16 01:32:51'),
(44, 'Ilham', 'LoggedOut', 1, 'App\\User', 1, 'App\\User', '[]', '2019-07-16 03:52:20', '2019-07-16 03:52:20'),
(45, 'admin2', 'LoggedIn', 9, 'App\\User', 9, 'App\\User', '[]', '2019-07-16 03:52:27', '2019-07-16 03:52:27'),
(46, 'admin2', 'LoggedOut', 9, 'App\\User', 9, 'App\\User', '[]', '2019-07-16 04:00:44', '2019-07-16 04:00:44'),
(47, 'Ilham', 'LoggedIn', 1, 'App\\User', 1, 'App\\User', '[]', '2019-07-16 04:00:47', '2019-07-16 04:00:47'),
(48, 'admin2', 'User deleted by Ilham', 9, 'App\\User', 9, 'App\\User', '[]', '2019-07-16 04:01:03', '2019-07-16 04:01:03'),
(49, 'Ilham', 'LoggedOut', 1, 'App\\User', 1, 'App\\User', '[]', '2019-07-16 04:03:32', '2019-07-16 04:03:32'),
(50, 'Admin Kedua', 'LoggedIn', 10, 'App\\User', 10, 'App\\User', '[]', '2019-07-16 04:03:38', '2019-07-16 04:03:38'),
(51, 'Admin Kedua', 'LoggedOut', 10, 'App\\User', 10, 'App\\User', '[]', '2019-07-16 04:06:20', '2019-07-16 04:06:20'),
(52, 'Ilham', 'LoggedIn', 1, 'App\\User', 1, 'App\\User', '[]', '2019-07-16 04:26:24', '2019-07-16 04:26:24'),
(53, 'Ilham', 'LoggedOut', 1, 'App\\User', 1, 'App\\User', '[]', '2019-07-16 04:27:21', '2019-07-16 04:27:21'),
(54, 'Ilham', 'LoggedIn', 1, 'App\\User', 1, 'App\\User', '[]', '2019-07-16 04:37:55', '2019-07-16 04:37:55'),
(55, 'Ilham', 'LoggedOut', 1, 'App\\User', 1, 'App\\User', '[]', '2019-07-16 04:39:42', '2019-07-16 04:39:42'),
(56, 'Riawan', 'LoggedIn', 8, 'App\\User', 8, 'App\\User', '[]', '2019-07-16 04:39:54', '2019-07-16 04:39:54'),
(57, 'Ilham', 'LoggedIn', 1, 'App\\User', 1, 'App\\User', '[]', '2019-07-16 08:02:53', '2019-07-16 08:02:53'),
(58, 'Ilham', 'LoggedOut', 1, 'App\\User', 1, 'App\\User', '[]', '2019-07-16 08:03:16', '2019-07-16 08:03:16'),
(59, 'Riawan', 'LoggedIn', 8, 'App\\User', 8, 'App\\User', '[]', '2019-07-16 08:03:26', '2019-07-16 08:03:26'),
(60, 'Riawan', 'LoggedIn', 8, 'App\\User', 8, 'App\\User', '[]', '2019-07-16 08:24:25', '2019-07-16 08:24:25'),
(61, 'Riawan', 'LoggedOut', 8, 'App\\User', 8, 'App\\User', '[]', '2019-07-16 09:39:53', '2019-07-16 09:39:53'),
(62, 'Pengguna', 'LoggedIn', 2, 'App\\User', 2, 'App\\User', '[]', '2019-07-16 09:40:00', '2019-07-16 09:40:00'),
(63, 'Pengguna', 'LoggedOut', 2, 'App\\User', 2, 'App\\User', '[]', '2019-07-16 09:47:38', '2019-07-16 09:47:38'),
(64, 'Riawan', 'LoggedIn', 8, 'App\\User', 8, 'App\\User', '[]', '2019-07-16 09:47:46', '2019-07-16 09:47:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datatables`
--

CREATE TABLE `datatables` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `points` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notes` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `job` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `datatables`
--

INSERT INTO `datatables` (`id`, `firstname`, `lastname`, `email`, `points`, `notes`, `created_at`, `updated_at`, `age`, `job`, `gender`) VALUES
(1, 'Ilham', 'Saputra', 'ilham22saputra@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `files`
--

CREATE TABLE `files` (
  `id` int(10) UNSIGNED NOT NULL,
  `filename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `is_guru`
--

CREATE TABLE `is_guru` (
  `id` int(10) UNSIGNED NOT NULL,
  `nip` varchar(18) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('L','P') COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hp` varchar(13) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `is_guru`
--

INSERT INTO `is_guru` (`id`, `nip`, `email`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `hp`, `foto`, `created_at`, `updated_at`) VALUES
(1, '198765452356987453', 'multi@gmail.com', 'Multimedia', '', '1929-09-11', 'L', 'Jambi', NULL, NULL, '2019-06-28 22:12:45', '2019-06-28 22:12:45'),
(15, '100958282164806572', 'simanjuntak.salimah@yahoo.co.id', 'Latika Farida', 'Administrasi Jakarta Utara', '2014-10-28', 'P', 'Kpg. Imam Bonjol No. 681, Bandar Lampung 86390, Gorontalo', '(+62)83338289', NULL, '2019-01-15 13:32:32', '2019-04-03 02:43:46'),
(18, '118677000847568283', 'rriyanti@kuswoyo.in', 'Dadap Sitompul S.IP', 'Tidore Kepulauan', '1955-02-14', 'P', 'Gg. Daan No. 72, Sungai Penuh 99714, JaTim', '(+62)82454502', NULL, '2019-03-10 00:32:09', '2019-02-28 17:50:39'),
(19, '122959108105881502', 'jutami@yahoo.com', 'Irsad Emong Gunawan S.Farm', 'Bandung', '1958-10-14', 'L', 'Gg. Cemara No. 376, Pekalongan 94585, MalUt', '(+62)87458191', NULL, '2019-02-17 00:57:23', '2019-04-30 04:21:34'),
(20, '105579532035900536', 'balapati82@yahoo.co.id', 'Cawisadi Yahya Utama M.Farm', 'Banjar', '2004-07-20', 'P', 'Jr. Lembong No. 274, Makassar 78179, KalBar', '(+62)81431088', NULL, '2019-05-18 10:39:33', '2019-03-03 17:52:38'),
(21, '120253957665899022', 'dsamosir@riyanti.co', 'Yuni Nasyiah S.Pt', 'Bandar Lampung', '1948-12-25', 'P', 'Kpg. Sam Ratulangi No. 908, Ambon 31365, KalUt', '(+62)84800192', NULL, '2019-01-16 15:48:25', '2019-02-05 13:15:54'),
(24, '102776139797069180', 'ellis45@yahoo.co.id', 'Umar Kusumo S.E.', 'Metro', '2007-12-31', 'L', 'Ds. Supono No. 344, Pekanbaru 67395, BaBel', '(+62)81626857', NULL, '2019-05-25 08:59:27', '2019-06-14 14:07:10'),
(25, '191676654316602108', 'latika25@yahoo.co.id', 'Ihsan Manullang', 'Bukittinggi', '1941-08-25', 'P', 'Ki. Achmad Yani No. 199, Padang 61766, SulUt', '(+62)89349940', NULL, '2019-05-23 08:37:27', '2019-03-15 19:47:41'),
(28, '166172290282872027', 'nuraini.yusuf@oktaviani.biz', 'Wulan Nasyiah', 'Blitar', '1921-07-24', 'L', 'Kpg. PHH. Mustofa No. 962, Bekasi 58564, JaTeng', '(+62)84022410', NULL, '2019-03-19 04:04:08', '2019-06-06 07:50:57'),
(29, '161663597478225219', 'hariyah.eluh@puspita.biz', 'Carla Kania Pertiwi', 'Dumai', '2008-06-03', 'P', 'Ds. Ronggowarsito No. 274, Manado 74352, DKI', '(+62)80391479', NULL, '2019-02-23 13:11:03', '2019-06-02 05:48:43'),
(31, '109100497483158286', 'budi.lazuardi@gmail.com', 'Ina Widiastuti S.Pt', 'Kupang', '1973-01-08', 'P', 'Gg. Bappenas No. 5, Ambon 88695, SulUt', '(+62)81618448', NULL, '2019-03-21 19:48:07', '2019-05-26 22:41:21'),
(32, '103408144908846292', 'isiregar@riyanti.or.id', 'Zamira Kuswandari', 'Padangpanjang', '1923-05-15', 'L', 'Ki. Baya Kali Bungur No. 485, Jambi 94585, SumUt', '(+62)86890111', '1.JPG', '2019-04-30 01:00:50', '2019-02-23 13:10:34'),
(37, '103408144908846298', 'riawan@gmail.com', 'Riawan', '', '1998-02-22', 'L', 'Jambi', '081377815153', NULL, '2019-07-13 10:44:18', '2019-07-13 10:44:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `is_jurusan`
--

CREATE TABLE `is_jurusan` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `singkatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `is_jurusan`
--

INSERT INTO `is_jurusan` (`id`, `nama`, `singkatan`) VALUES
(1, 'Teknik Komputer Jaringan', 'TKJ'),
(2, 'Akuntansi', 'AK'),
(3, 'Administrasi Perkantoran', 'AP'),
(4, 'Tata Niaga', 'TN'),
(5, 'Pariwisata', 'PW');

-- --------------------------------------------------------

--
-- Struktur dari tabel `is_kompetensi`
--

CREATE TABLE `is_kompetensi` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aspek` enum('K','P') COLLATE utf8mb4_unicode_ci NOT NULL,
  `mapel_id` int(10) NOT NULL,
  `tingkat` enum('10','11','12') COLLATE utf8mb4_unicode_ci NOT NULL,
  `kompetensi_dasar` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `is_kompetensi`
--

INSERT INTO `is_kompetensi` (`id`, `kode`, `aspek`, `mapel_id`, `tingkat`, `kompetensi_dasar`) VALUES
(1, '3.1', 'P', 1, '10', 'Menganalisis Q.S. Al-Anfal (8) : 72); Q.S. Al-Hujurat (49) : 12; dan QS Al-Hujurat (49) : 10; serta hadits tentang kontrol diri (mujahadah an-nafs), prasangka baik (husnuzzhan), dan persaudaraan (ukhuwah)'),
(2, '3.2', 'P', 1, '10', 'Memahami manfaat dan hikmah kontrol diri (mujahadah an-nafs), prasangka baik (husnuzzhan) dan persaudaraan (ukhuwah), dan menerapkannya dalam kehidupan'),
(3, '3.3', 'P', 1, '10', 'Menganalisis  Q.S. Al-Isra\' (17) : 32, dan Q.S. An-Nur (24) : 2, serta hadits tentang larangan pergaulan bebas dan perbuatan zina.'),
(5, '3.1', 'P', 1, '12', 'menganalisis dan mengevaluasi makna Q.S. Ali Imran/3: 190-191, dan Q.S. Ali Imran/3: 159, serta Hadis tentang berpikir kritis dan bersikap demokratis');

-- --------------------------------------------------------

--
-- Struktur dari tabel `is_mapel`
--

CREATE TABLE `is_mapel` (
  `id` int(10) UNSIGNED NOT NULL,
  `jurusan_id` int(10) NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `k1` int(10) NOT NULL,
  `k2` int(11) NOT NULL,
  `k3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `is_mapel`
--

INSERT INTO `is_mapel` (`id`, `jurusan_id`, `nama`, `k1`, `k2`, `k3`) VALUES
(1, 1, 'Pendidikan Agama & Budi Pekerti', 1, 1, 1),
(2, 1, 'Bahasa Indonesia', 1, 1, 1),
(3, 1, 'Matematika', 1, 1, 1),
(4, 2, 'Dasar Akuntansi', 1, 0, 0),
(5, 2, 'Pendidikan Agama & Budi Pekerti', 1, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `is_mapel_gurus`
--

CREATE TABLE `is_mapel_gurus` (
  `id` int(10) UNSIGNED NOT NULL,
  `rombel_id` int(11) DEFAULT NULL,
  `mapel_id` int(11) DEFAULT NULL,
  `guru_id` int(11) DEFAULT NULL,
  `jurusan_id` int(11) DEFAULT NULL,
  `periode_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `is_mapel_gurus`
--

INSERT INTO `is_mapel_gurus` (`id`, `rombel_id`, `mapel_id`, `guru_id`, `jurusan_id`, `periode_id`) VALUES
(3, 1, 1, 14, 1, 3),
(4, 2, 2, 17, 1, 3),
(5, 1, 3, 15, 1, 3),
(12, 8, 4, 37, 2, 3),
(13, 8, 5, 31, 2, 3),
(14, 2, 1, 37, 1, 3),
(15, 5, 1, 37, 1, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `is_periode`
--

CREATE TABLE `is_periode` (
  `id` int(10) UNSIGNED NOT NULL,
  `mulai` int(11) NOT NULL,
  `selesai` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `aktif` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `is_periode`
--

INSERT INTO `is_periode` (`id`, `mulai`, `selesai`, `semester`, `aktif`) VALUES
(1, 2018, 2019, 1, 0),
(2, 2018, 2019, 2, 0),
(3, 2019, 2020, 1, 1),
(4, 2019, 2020, 2, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `is_rombel`
--

CREATE TABLE `is_rombel` (
  `id` int(10) UNSIGNED NOT NULL,
  `namaRombel` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan_id` int(11) NOT NULL,
  `tingkat` enum('10','11','12') COLLATE utf8mb4_unicode_ci NOT NULL,
  `periode_id` int(11) NOT NULL,
  `guru_id` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `is_rombel`
--

INSERT INTO `is_rombel` (`id`, `namaRombel`, `jurusan_id`, `tingkat`, `periode_id`, `guru_id`) VALUES
(1, 'TKJ 1', 1, '10', 3, '24'),
(2, 'TKJ 2', 1, '10', 3, '15'),
(3, 'TKJ 1', 1, '11', 3, '25'),
(4, 'TKJ 2', 1, '11', 3, '32'),
(5, 'TKJ 1', 1, '12', 3, '18'),
(6, 'TKJ 2', 1, '12', 3, '19'),
(7, 'AK 1', 2, '10', 3, '20'),
(8, 'AK 2', 2, '10', 3, '21'),
(9, 'AK 3', 2, '10', 3, '31'),
(10, 'AK 1', 2, '11', 3, '28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `is_siswa`
--

CREATE TABLE `is_siswa` (
  `nis` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nisn` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rombel_id` int(11) NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('L','P') COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `is_siswa`
--

INSERT INTO `is_siswa` (`nis`, `nisn`, `rombel_id`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `alamat`, `created_at`, `updated_at`) VALUES
('10233', '9391546804', 8, 'Galar Irnanto Pranowo', 'Bima', '1932-05-13', 'L', 'Buddha', 'Jr. Gambang No. 11, Pematangsiantar 11739, KalTim', '2019-07-07 15:19:07', '2019-07-07 15:19:07'),
('12546', '9545358715', 2, 'Ilham Saputra', 'Jambi', '1998-09-22', 'L', 'Islam', 'Jambi', '2019-06-27 11:41:36', '2019-07-07 15:11:20'),
('14560', '9531638126', 3, 'Kasiyah Nabila Mayasari', 'Bitung', '1935-12-18', 'P', 'Hindu', 'Dk. Sadang Serang No. 136, Banda Aceh 74917, DKI', '2019-07-07 15:19:11', '2019-07-07 15:19:11'),
('14592', '9742538683', 3, 'Jumadi Saputra', 'Bitung', '1969-07-16', 'P', 'Kristen Katolik', 'Ki. Supomo No. 923, Banjarmasin 95690, SulSel', '2019-07-07 15:19:05', '2019-07-07 15:19:05'),
('15468', '9087420200', 3, 'Gilda Nabila Wahyuni', 'Semarang', '1961-07-20', 'P', 'Islam', 'Jr. Sumpah Pemuda No. 281, Bontang 64758, KalTim', '2019-07-07 15:19:08', '2019-07-07 15:19:08'),
('17147', '9509233253', 1, 'Mustika Firgantoro', 'Ternate', '1961-02-26', 'L', 'Kristen Protestan', 'Jln. Dipatiukur No. 599, Yogyakarta 26707, JaBar', '2019-07-07 15:19:07', '2019-07-07 15:19:07'),
('19864', '9973084387', 1, 'Tami Ella Wijayanti S.IP', 'Pasuruan', '1947-07-21', 'P', 'Islam', 'Kpg. Dipatiukur No. 764, Sibolga 66206, Aceh', '2019-07-07 15:19:07', '2019-07-07 15:19:07'),
('20721', '9221487445', 3, 'Gamanto Permadi', 'Pontianak', '2006-01-25', 'L', 'Buddha', 'Dk. Babadan No. 655, Cilegon 72526, NTB', '2019-07-07 15:19:07', '2019-07-07 15:19:07'),
('21141', '9750148307', 2, 'Patricia Rahayu', 'Padang', '1991-12-05', 'L', 'Buddha', 'Jln. Basmol Raya No. 285, Depok 62257, Lampung', '2019-07-07 15:19:07', '2019-07-07 15:19:07'),
('22049', '9685352078', 3, 'Respati Samosir', 'Lubuklinggau', '1984-03-01', 'L', 'Buddha', 'Dk. Bayan No. 151, Bogor 52257, SumSel', '2019-07-07 15:19:08', '2019-07-07 15:19:08'),
('22351', '9477486202', 2, 'Jaswadi Megantara', 'Pagar Alam', '1938-10-26', 'L', 'Buddha', 'Jln. Suryo No. 939, Madiun 28153, Banten', '2019-07-07 15:19:11', '2019-07-07 15:19:11'),
('24406', '9755570663', 2, 'Umaya Umaya Sihombing', 'Subulussalam', '1975-12-26', 'L', 'Islam', 'Jln. Samanhudi No. 202, Bima 90535, NTT', '2019-07-07 15:19:05', '2019-07-07 15:19:05'),
('32244', '9930360854', 2, 'Yunita Yolanda', 'Denpasar', '1980-03-05', 'L', 'Kristen Katolik', 'Kpg. Abdullah No. 838, Makassar 70757, KalTim', '2019-07-07 15:19:07', '2019-07-07 15:19:07'),
('40229', '9033569776', 2, 'Eva Rahayu Puspita', 'Padang', '2006-06-23', 'P', 'Kristen Protestan', 'Ds. Sukabumi No. 781, Lhokseumawe 24666, Bengkulu', '2019-07-07 15:19:10', '2019-07-07 15:19:10'),
('46612', '9090883185', 2, 'Jono Damanik S.Pt', 'Kendari', '1957-07-17', 'L', 'Hindu', 'Dk. Bakau Griya Utama No. 546, Bukittinggi 32454, Aceh', '2019-07-07 15:19:09', '2019-07-07 15:19:09'),
('47499', '9982617209', 2, 'Nova Dewi Suryatmi', 'Pagar Alam', '1965-03-21', 'L', 'Kristen Katolik', 'Ds. Karel S. Tubun No. 783, Bontang 21603, SulTeng', '2019-07-07 15:19:09', '2019-07-07 15:19:09'),
('47829', '9964444422', 4, 'Ulya Cici Usamah', 'Administrasi Jakarta Timur', '2013-11-10', 'L', 'Kristen Katolik', 'Jr. Tambun No. 143, Parepare 95930, MalUt', '2019-07-07 15:19:05', '2019-07-07 15:19:05'),
('47951', '9910577070', 2, 'Bancar Elon Samosir', 'Tarakan', '1970-12-24', 'L', 'Hindu', 'Jr. Pasirkoja No. 755, Tual 35908, Riau', '2019-07-07 15:19:07', '2019-07-07 15:19:07'),
('48867', '9484038524', 3, 'Gadang Saputra', 'Depok', '1997-09-28', 'P', 'Buddha', 'Psr. Gremet No. 29, Ternate 67058, SumUt', '2019-07-07 15:19:07', '2019-07-07 15:19:07'),
('49773', '9369796898', 2, 'Danu Putra', 'Gunungsitoli', '2009-11-19', 'P', 'Kristen Protestan', 'Jln. Villa No. 494, Cimahi 71666, JaBar', '2019-07-07 15:19:10', '2019-07-07 15:19:10'),
('51174', '9693609735', 3, 'Vanesa Almira Palastri M.Kom.', 'Bandung', '1951-01-15', 'P', 'Kristen Protestan', 'Jr. Bank Dagang Negara No. 715, Malang 25518, Papua', '2019-07-07 15:19:11', '2019-07-07 15:19:11'),
('52529', '9988399359', 2, 'Elisa Padma Farida', 'Pekalongan', '1999-02-26', 'L', 'Hindu', 'Gg. Suryo Pranoto No. 861, Makassar 20632, JaTim', '2019-07-07 15:19:09', '2019-07-07 15:19:09'),
('57572', '9069559054', 1, 'Adikara Putra', 'Bau-Bau', '1939-08-21', 'L', 'Buddha', 'Gg. Merdeka No. 970, Administrasi Jakarta Utara 24797, SulBar', '2019-07-07 15:19:07', '2019-07-07 15:19:07'),
('57946', '9848890122', 2, 'Daliman Iswahyudi S.E.', 'Surakarta', '2012-06-20', 'P', 'Kristen Protestan', 'Jr. Pelajar Pejuang 45 No. 510, Sungai Penuh 41994, Lampung', '2019-07-07 15:19:10', '2019-07-07 15:19:10'),
('60461', '9809814921', 1, 'Uda Dasa Wasita', 'Kediri', '1991-04-25', 'P', 'Islam', 'Dk. Tambak No. 100, Sabang 66472, Lampung', '2019-07-07 15:19:05', '2019-07-07 15:19:05'),
('61134', '9221300671', 2, 'Maya Safitri', 'Metro', '1967-12-02', 'L', 'Hindu', 'Psr. B.Agam 1 No. 224, Bekasi 87477, KalUt', '2019-07-07 15:19:11', '2019-07-07 15:19:11'),
('61135', '9095439069', 4, 'Queen Widya Yolanda S.Sos', 'Bukittinggi', '2006-09-13', 'L', 'Buddha', 'Kpg. Reksoninten No. 400, Dumai 95281, MalUt', '2019-07-07 15:19:07', '2019-07-07 15:19:07'),
('63785', '9522043020', 8, 'Budi Hairyanto Ardianto', 'Bandar Lampung', '1961-09-14', 'L', 'Kristen Protestan', 'Dk. Kebangkitan Nasional No. 661, Sukabumi 89955, KepR', '2019-07-07 15:19:11', '2019-07-07 15:19:11'),
('67132', '9031212766', 3, 'Sarah Puspita', 'Tebing Tinggi', '1991-10-04', 'P', 'Kristen Protestan', 'Jln. Baung No. 240, Banjarbaru 99597, NTB', '2019-07-07 15:19:08', '2019-07-07 15:19:08'),
('69124', '9101526640', 4, 'Salsabila Zalindra Hassanah', 'Bukittinggi', '1986-12-01', 'L', 'Hindu', 'Kpg. Labu No. 354, Pariaman 99764, SulTra', '2019-07-07 15:19:08', '2019-07-07 15:19:08'),
('69584', '9753816722', 2, 'Jati Emong Rajasa', 'Bogor', '1992-08-17', 'P', 'Hindu', 'Jr. Nakula No. 517, Binjai 36345, KalSel', '2019-07-07 15:19:09', '2019-07-07 15:19:09'),
('71089', '9396557533', 4, 'Dipa Lasmanto Marbun', 'Tanjungbalai', '1960-07-08', 'L', 'Islam', 'Jr. Sudiarto No. 772, Payakumbuh 91605, MalUt', '2019-07-07 15:19:05', '2019-07-07 15:19:05'),
('73717', '9498751106', 4, 'Mahesa Wahyu Latupono M.TI.', 'Payakumbuh', '1925-01-19', 'P', 'Islam', 'Dk. Banda No. 848, Binjai 78211, KalTeng', '2019-07-07 15:19:09', '2019-07-07 15:19:09'),
('74758', '9698786270', 4, 'Lurhur Lasmanto Prasasta M.Kom.', 'Gunungsitoli', '1958-03-04', 'L', 'Islam', 'Ds. Yosodipuro No. 333, Tegal 23795, KalUt', '2019-07-07 15:19:08', '2019-07-07 15:19:08'),
('74952', '9665466140', 3, 'Mujur Dagel Sinaga S.Gz', 'Surakarta', '2018-03-31', 'L', 'Islam', 'Ds. Basuki Rahmat  No. 467, Medan 24548, KalTim', '2019-07-07 15:19:05', '2019-07-07 15:19:05'),
('76659', '9333350530', 1, 'Septi Siti Permata S.Sos', 'Manado', '2003-03-31', 'P', 'Kristen Protestan', 'Jr. Honggowongso No. 576, Makassar 49331, SulTra', '2019-07-07 15:19:09', '2019-07-07 15:19:09'),
('83217', '9048422517', 2, 'Karen Nabila Lailasari M.Farm', 'Bitung', '1956-12-22', 'P', 'Buddha', 'Dk. Padma No. 609, Bukittinggi 82544, SumBar', '2019-07-07 15:19:05', '2019-07-07 15:19:05'),
('83860', '9972627904', 1, 'Farah Wijayanti S.H.', 'Cirebon', '1980-11-27', 'P', 'Kristen Protestan', 'Ds. Bahagia No. 985, Banda Aceh 97369, KalTeng', '2019-07-07 15:19:08', '2019-07-07 15:19:08'),
('89597', '9608039001', 3, 'Clara Iriana Wastuti', 'Sabang', '1951-11-11', 'L', 'Islam', 'Jln. Dahlia No. 809, Palembang 56386, KalSel', '2019-07-07 15:19:08', '2019-07-07 15:19:08'),
('89872', '9210945693', 3, 'Ajimin Rajata S.E.I', 'Solok', '1969-02-28', 'L', 'Hindu', 'Psr. Urip Sumoharjo No. 623, Sibolga 80874, PapBar', '2019-07-07 15:19:05', '2019-07-07 15:19:05'),
('89927', '9328010097', 4, 'Ilyas Gunawan', 'Tarakan', '1931-11-10', 'P', 'Islam', 'Kpg. Astana Anyar No. 313, Pangkal Pinang 48741, Jambi', '2019-07-07 15:19:11', '2019-07-07 15:19:11'),
('91280', '9748537842', 1, 'Lanjar Kemba Latupono M.M.', 'Padangsidempuan', '1946-11-16', 'L', 'Islam', 'Dk. Rajawali Timur No. 725, Pekanbaru 67391, KalBar', '2019-07-07 15:19:08', '2019-07-07 15:19:08'),
('91482', '9821753361', 1, 'Farhunnisa Ifa Suryatmi S.Gz', 'Pasuruan', '2016-04-18', 'P', 'Kristen Katolik', 'Gg. Peta No. 635, Binjai 40170, MalUt', '2019-07-07 15:19:11', '2019-07-07 15:19:11'),
('92415', '9545358711', 1, 'Joko Saputro', 'Jambi', '1998-02-25', 'L', 'Islam', 'Jambi', '2019-07-07 14:44:58', '2019-07-07 14:44:58'),
('93330', '9237948107', 2, 'Sari Laksmiwati', 'Gorontalo', '2007-05-06', 'L', 'Islam', 'Dk. Gajah Mada No. 91, Binjai 67661, Bengkulu', '2019-07-07 15:19:11', '2019-07-07 15:19:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0000_00_00_000000_create_taggable_table', 1),
(2, '2014_07_02_230147_migration_cartalyst_sentinel', 1),
(3, '2014_10_04_174350_soft_delete_users', 1),
(4, '2014_12_10_011106_add_fields_to_user_table', 1),
(5, '2015_08_09_200015_create_blog_module_table', 1),
(6, '2015_08_11_064636_add_slug_to_blogs_table', 1),
(36, '2015_11_10_140011_create_files_table', 2),
(37, '2016_01_02_062647_create_tasks_table', 2),
(38, '2016_04_26_054601_create_datatables_table', 2),
(39, '2016_10_04_103149_add_fields_datatables_table', 2),
(40, '2017_09_29_113930_create_activity_log_table', 2),
(41, '2017_10_07_070138_create_countries_table', 2),
(42, '2017_10_24_130059_add_country_field', 2),
(43, '2018_03_06_063201_rename_user_state', 2),
(44, '2019_06_23_104016_create_gurus_table', 2),
(45, '2019_06_24_112406_create_siswas_table', 3),
(50, '2019_06_24_114359_create_rombels_table', 4),
(51, '2019_06_24_114811_create_jurusans_table', 4),
(52, '2019_06_24_114912_create_periodes_table', 4),
(53, '2019_06_24_114942_create_mapels_table', 4),
(54, '2019_06_26_075506_create_mapel_gurus_table', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `persistences`
--

CREATE TABLE `persistences` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `persistences`
--

INSERT INTO `persistences` (`id`, `user_id`, `code`, `created_at`, `updated_at`) VALUES
(4, 1, 'IObck6NCFeo0qaW59SvebXyOP72SKSSz', '2019-06-23 03:30:14', '2019-06-23 03:30:14'),
(5, 5, '18ziLgPBeOUiFvk6zxlS4E35dNRZOd9u', '2019-06-23 10:27:39', '2019-06-23 10:27:39'),
(6, 1, '1qHuqkLchb0Pn2QbPmT5plXzUBUyZk3Q', '2019-06-23 10:28:16', '2019-06-23 10:28:16'),
(7, 1, 'znG433kMC0LA9cITdH5Sdz2I9J0Kf0hZ', '2019-06-23 12:30:53', '2019-06-23 12:30:53'),
(8, 1, 'Wo56EiRo8uib0kpWbG5BuRbNprxKrFs4', '2019-06-23 14:48:22', '2019-06-23 14:48:22'),
(9, 1, '1BzTA3wKzp6k91uREi8ydJJhKDq6AYIN', '2019-06-23 15:00:03', '2019-06-23 15:00:03'),
(10, 1, 'OIEmFIq1Yq1064OjRUUzNa90KyvISX5F', '2019-06-23 18:43:43', '2019-06-23 18:43:43'),
(12, 1, '1Z2HRsrUOkJIlQMZXWEjFHtwhOJKL6jv', '2019-06-23 19:54:54', '2019-06-23 19:54:54'),
(13, 1, 'Yq4GUT23uscRxBqbRFvtA2QOktJXhXR3', '2019-06-24 03:09:32', '2019-06-24 03:09:32'),
(14, 1, 'bStyJCrikvsoALRSGdiLs07hA4UWT1rc', '2019-06-24 03:25:10', '2019-06-24 03:25:10'),
(15, 1, 'pBs3uiMNfXBmLWPwuYu81l01YYm51gVJ', '2019-06-25 09:41:51', '2019-06-25 09:41:51'),
(16, 1, 'YvL5DIBTRzgJbdIAVNNiBfazzxw649Y1', '2019-06-25 09:50:56', '2019-06-25 09:50:56'),
(17, 1, '0Axlj4VpVug7zCKOhz55KNQSTwxs8EWA', '2019-06-25 09:57:25', '2019-06-25 09:57:25'),
(18, 1, 'SSPB7PAAQPuzjYxYJ0EU2iNCsBJhBjxW', '2019-06-25 12:22:25', '2019-06-25 12:22:25'),
(19, 1, 'C1iAmqsY6ClRlwU1stoSYdohUFX3XLSq', '2019-06-25 13:17:09', '2019-06-25 13:17:09'),
(20, 1, 'pgtU6bAzR9MdEK2pvqbjJ4wRkWElo9RY', '2019-06-25 16:58:20', '2019-06-25 16:58:20'),
(25, 1, 'JtFTeVLSYx32FJNsJJewxl11dHjA9RES', '2019-06-25 18:28:21', '2019-06-25 18:28:21'),
(31, 1, 'rTHRxQPFl4CJk5XFElvqbR4SLwECNV91', '2019-06-25 19:27:49', '2019-06-25 19:27:49'),
(32, 1, '5Kw1vxqc9pGr0fDGG1QkVQH1hUkNhRHC', '2019-06-25 22:58:18', '2019-06-25 22:58:18'),
(33, 1, 'TskCiNuKYb1LqcUkSRZVjfdFYQIzWYtS', '2019-06-26 19:38:57', '2019-06-26 19:38:57'),
(34, 1, 'GYF8u7rdj2ij8doA9aXg2teUkGcXXwr5', '2019-06-26 23:27:11', '2019-06-26 23:27:11'),
(37, 1, '2SdIVaU4hgPE4UrPi5yBupuXR6bj0EjQ', '2019-06-27 06:50:39', '2019-06-27 06:50:39'),
(38, 1, 'mAur8akzjbyk5RVefGk3X8AylJSzuREf', '2019-06-27 10:04:51', '2019-06-27 10:04:51'),
(41, 1, 'yjZChYq9Sf2cHxE0mPrepUTngbbBANKK', '2019-06-27 16:19:24', '2019-06-27 16:19:24'),
(42, 1, '8YNn8i0R7r7pdXLREmKUxUKHUF8a8Ful', '2019-06-27 20:04:00', '2019-06-27 20:04:00'),
(43, 1, 'stjfXBs71wwXe90JVp7uj7DOmsVMPLxC', '2019-06-27 22:20:11', '2019-06-27 22:20:11'),
(45, 1, 'Wbb5qWLUuoQBvsiq6zYQpSIcjeercih3', '2019-06-27 22:57:24', '2019-06-27 22:57:24'),
(49, 1, '7GX4mHOZBSJAOX33geLPyz7MVus2mG5q', '2019-06-27 23:19:19', '2019-06-27 23:19:19'),
(54, 1, 'hJ0UiF7jnAJkFg2JGP6G8p2Ng6v5tDyi', '2019-06-27 23:27:46', '2019-06-27 23:27:46'),
(55, 1, 'NLggw0a0DwjAv5ACbEuYvr2RkHxo9EFO', '2019-06-28 12:23:09', '2019-06-28 12:23:09'),
(59, 1, 'ccYgu38OsUqziCPVk57j4aEAtTrduyym', '2019-06-28 13:00:53', '2019-06-28 13:00:53'),
(60, 1, 'he66vl5TF6DhwJ141bwiNVivpCBUwjnA', '2019-06-28 17:50:57', '2019-06-28 17:50:57'),
(61, 1, 'X4fT1mwgpAdIuUoj8fGc89P4StFIzsEN', '2019-06-30 14:04:07', '2019-06-30 14:04:07'),
(62, 1, 'bygx0Oi3kWf9eH29HmYfGm6YfVPA3tNf', '2019-06-30 19:57:06', '2019-06-30 19:57:06'),
(63, 1, 'D8kEtoc5ZkdF631CfPrcOGzJ7IOIO242', '2019-06-30 19:57:08', '2019-06-30 19:57:08'),
(64, 1, 'bI1b2WEt5MlXcDwY46fRDaRjHkN7Eifj', '2019-07-01 05:17:32', '2019-07-01 05:17:32'),
(65, 1, 'YLUmf82Lce4RusaPYETJF4P91eQjMuUU', '2019-07-01 16:14:10', '2019-07-01 16:14:10'),
(66, 1, 'WxX24qEuUgfDACQCliwBjUieIsE7syYy', '2019-07-02 00:24:34', '2019-07-02 00:24:34'),
(67, 1, 'BdIJWhrh4FmYuRz10ARgbL3PS7hIXc9s', '2019-07-02 06:48:34', '2019-07-02 06:48:34'),
(68, 1, '75wOLKOda7jY2wbgnPrkWsPx1Hjlt9t0', '2019-07-03 02:44:30', '2019-07-03 02:44:30'),
(69, 1, 'ki3l5IFfoTIbWnsEiHYr8L0TF8EBCCbh', '2019-07-03 17:40:32', '2019-07-03 17:40:32'),
(70, 1, '8oCfVRCuit6mloJ6MWALGoL8a5OEcnqv', '2019-07-04 16:21:28', '2019-07-04 16:21:28'),
(71, 1, 'uPX9FUpSDR16LHHjbc0G2v6E9qui1m5n', '2019-07-04 16:25:49', '2019-07-04 16:25:49'),
(72, 1, 'Rc4GLIeChAbfZ7p4t6U66sAVxPTaiBVI', '2019-07-04 16:31:52', '2019-07-04 16:31:52'),
(74, 1, 'dmgKLbqnvV75obk5FiSWS6bffvZIxEXR', '2019-07-06 01:35:57', '2019-07-06 01:35:57'),
(75, 1, 'FdBpqTXRlnPz40Y1dPE9cEVMPlhRWeCg', '2019-07-06 01:38:20', '2019-07-06 01:38:20'),
(77, 1, 'HAfZZmopixkjzJ6zTnGBzTxq8IYXm8HZ', '2019-07-06 02:40:15', '2019-07-06 02:40:15'),
(80, 1, 'XVM24niNmGwWHSVYe1IAEnnxWC7BK6uv', '2019-07-06 03:34:31', '2019-07-06 03:34:31'),
(85, 1, 'cHFpsG5PISAKUnHbLeoPcmF1tdUzLnQp', '2019-07-06 07:51:55', '2019-07-06 07:51:55'),
(88, 2, '3Rie9wDmSPKySia6KjaYSmnmbZIaRPcw', '2019-07-06 23:04:01', '2019-07-06 23:04:01'),
(89, 2, '6GjOkZQeENt4XZ3AfJD5osVY4NapT62K', '2019-07-07 00:34:18', '2019-07-07 00:34:18'),
(93, 2, 'RGCxrLBGOYNA42f1eGB7iam45HVMFk7j', '2019-07-07 14:00:27', '2019-07-07 14:00:27'),
(97, 2, 'mcqdAXgqg6MkU6N0EGxrLexux4W5LXbR', '2019-07-07 18:05:21', '2019-07-07 18:05:21'),
(99, 1, '2UEmr2HAeVyKMGklVq53snIE3gowwHI2', '2019-07-08 01:54:12', '2019-07-08 01:54:12'),
(100, 1, 'X6d8Wa9u75sqjs0R5OXaQQ3SRFQPBvMS', '2019-07-08 02:25:37', '2019-07-08 02:25:37'),
(103, 24, 'VuXDmXjMp0JOwFVZrVPt3u8cX0kChw0S', '2019-07-08 04:18:55', '2019-07-08 04:18:55'),
(104, 2, '8dmR8CKSIR7JTICt70nlSODiw6JAM7Ui', '2019-07-08 07:28:59', '2019-07-08 07:28:59'),
(105, 1, 'qtZw3o2FcUWuu89ene8JIrCKNRu7TMBY', '2019-07-11 02:07:02', '2019-07-11 02:07:02'),
(108, 1, 'ioPc80aAFUP1Dy704fcOnGdmXuIHkgm8', '2019-07-11 07:37:10', '2019-07-11 07:37:10'),
(112, 1, 'QGNC0weTnjLY7fRg8DyZbCcUoFa1BZi8', '2019-07-12 09:22:51', '2019-07-12 09:22:51'),
(121, 2, 'tvxBiFNFPITWOupeVzFvXWOe1JNQCpv5', '2019-07-13 11:14:54', '2019-07-13 11:14:54'),
(122, 2, 'v5rhaX9QOIqT91OzN6sIpi32cxPDZvkb', '2019-07-15 01:14:48', '2019-07-15 01:14:48'),
(126, 8, 'g7JWbXrLBiGTwgFF6FXCuqhQig0BWfKs', '2019-07-15 03:49:12', '2019-07-15 03:49:12'),
(129, 8, 'qiUK7hVCJocvEv9KK2ZbRCLIkn3ww8X1', '2019-07-15 07:36:45', '2019-07-15 07:36:45'),
(133, 8, 'b7TqbQ4cDqA85GMbcaH7M5fWfmCgqxnD', '2019-07-15 12:33:26', '2019-07-15 12:33:26'),
(140, 8, 'h88VSHqeH8ck1TrL8aP2LXcLqr9EVPgJ', '2019-07-16 04:39:53', '2019-07-16 04:39:53'),
(142, 8, '9KwXVy5mv54RQFnIMKNo77kzVA3xZn4W', '2019-07-16 08:03:26', '2019-07-16 08:03:26'),
(145, 8, 'MB7v6B9wRh4TiPIFWYiidGqsqC79Y14R', '2019-07-16 09:47:46', '2019-07-16 09:47:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `reminders`
--

CREATE TABLE `reminders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `slug`, `name`, `permissions`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', '{\"admin\":1}', '2019-06-23 03:29:43', '2019-06-23 03:29:43'),
(2, 'guru', 'Guru', NULL, '2019-06-23 03:29:43', '2019-06-23 03:29:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_users`
--

CREATE TABLE `role_users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `role_users`
--

INSERT INTO `role_users` (`user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2019-06-23 03:29:43', '2019-06-23 03:29:43'),
(2, 2, '2019-06-23 03:29:44', '2019-06-23 03:29:44'),
(5, 2, '2019-07-13 08:48:44', '2019-07-13 08:48:44'),
(6, 2, '2019-07-13 10:29:18', '2019-07-13 10:29:18'),
(8, 2, '2019-07-13 10:44:19', '2019-07-13 10:44:19'),
(10, 1, '2019-07-16 04:03:02', '2019-07-16 04:03:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tasks`
--

CREATE TABLE `tasks` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `finished` tinyint(4) NOT NULL DEFAULT '0',
  `task_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `task_deadline` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tasks`
--

INSERT INTO `tasks` (`id`, `user_id`, `finished`, `task_description`, `task_deadline`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 'Belajar', '2019-06-30', '2019-06-25 18:39:13', '2019-06-25 19:32:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `throttle`
--

CREATE TABLE `throttle` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `throttle`
--

INSERT INTO `throttle` (`id`, `user_id`, `type`, `ip`, `created_at`, `updated_at`) VALUES
(1, NULL, 'global', NULL, '2019-06-22 19:03:58', '2019-06-22 19:03:58'),
(2, NULL, 'ip', '127.0.0.1', '2019-06-22 19:03:58', '2019-06-22 19:03:58'),
(3, NULL, 'global', NULL, '2019-06-23 03:27:23', '2019-06-23 03:27:23'),
(4, NULL, 'ip', '127.0.0.1', '2019-06-23 03:27:23', '2019-06-23 03:27:23'),
(5, NULL, 'global', NULL, '2019-06-23 03:27:27', '2019-06-23 03:27:27'),
(6, NULL, 'ip', '127.0.0.1', '2019-06-23 03:27:27', '2019-06-23 03:27:27'),
(7, NULL, 'global', NULL, '2019-06-23 19:47:36', '2019-06-23 19:47:36'),
(8, NULL, 'ip', '127.0.0.1', '2019-06-23 19:47:36', '2019-06-23 19:47:36'),
(9, 2, 'user', NULL, '2019-06-23 19:47:36', '2019-06-23 19:47:36'),
(10, NULL, 'global', NULL, '2019-06-25 17:19:32', '2019-06-25 17:19:32'),
(11, NULL, 'ip', '127.0.0.1', '2019-06-25 17:19:33', '2019-06-25 17:19:33'),
(12, 2, 'user', NULL, '2019-06-25 17:19:33', '2019-06-25 17:19:33'),
(13, NULL, 'global', NULL, '2019-06-27 06:45:50', '2019-06-27 06:45:50'),
(14, NULL, 'ip', '127.0.0.1', '2019-06-27 06:45:50', '2019-06-27 06:45:50'),
(15, NULL, 'global', NULL, '2019-06-27 06:45:58', '2019-06-27 06:45:58'),
(16, NULL, 'ip', '127.0.0.1', '2019-06-27 06:45:58', '2019-06-27 06:45:58'),
(17, NULL, 'global', NULL, '2019-06-27 06:46:12', '2019-06-27 06:46:12'),
(18, NULL, 'ip', '127.0.0.1', '2019-06-27 06:46:12', '2019-06-27 06:46:12'),
(19, NULL, 'global', NULL, '2019-06-27 06:46:17', '2019-06-27 06:46:17'),
(20, NULL, 'ip', '127.0.0.1', '2019-06-27 06:46:17', '2019-06-27 06:46:17'),
(21, NULL, 'global', NULL, '2019-07-06 03:36:04', '2019-07-06 03:36:04'),
(22, NULL, 'ip', '192.168.20.10', '2019-07-06 03:36:04', '2019-07-06 03:36:04'),
(23, NULL, 'global', NULL, '2019-07-06 03:36:12', '2019-07-06 03:36:12'),
(24, NULL, 'ip', '192.168.20.10', '2019-07-06 03:36:12', '2019-07-06 03:36:12'),
(25, NULL, 'global', NULL, '2019-07-06 03:36:27', '2019-07-06 03:36:27'),
(26, NULL, 'ip', '192.168.20.10', '2019-07-06 03:36:27', '2019-07-06 03:36:27'),
(27, NULL, 'global', NULL, '2019-07-07 14:00:11', '2019-07-07 14:00:11'),
(28, NULL, 'ip', '192.168.20.20', '2019-07-07 14:00:11', '2019-07-07 14:00:11'),
(29, NULL, 'global', NULL, '2019-07-12 08:51:16', '2019-07-12 08:51:16'),
(30, NULL, 'ip', '::1', '2019-07-12 08:51:17', '2019-07-12 08:51:17'),
(31, NULL, 'global', NULL, '2019-07-15 03:48:12', '2019-07-15 03:48:12'),
(32, NULL, 'ip', '::1', '2019-07-15 03:48:12', '2019-07-15 03:48:12'),
(33, 8, 'user', NULL, '2019-07-15 03:48:12', '2019-07-15 03:48:12'),
(34, NULL, 'global', NULL, '2019-07-15 03:48:23', '2019-07-15 03:48:23'),
(35, NULL, 'ip', '::1', '2019-07-15 03:48:23', '2019-07-15 03:48:23'),
(36, 8, 'user', NULL, '2019-07-15 03:48:23', '2019-07-15 03:48:23'),
(37, NULL, 'global', NULL, '2019-07-15 03:48:31', '2019-07-15 03:48:31'),
(38, NULL, 'ip', '::1', '2019-07-15 03:48:31', '2019-07-15 03:48:31'),
(39, 8, 'user', NULL, '2019-07-15 03:48:31', '2019-07-15 03:48:31'),
(40, NULL, 'global', NULL, '2019-07-15 03:48:53', '2019-07-15 03:48:53'),
(41, NULL, 'ip', '::1', '2019-07-15 03:48:53', '2019-07-15 03:48:53'),
(42, 8, 'user', NULL, '2019-07-15 03:48:53', '2019-07-15 03:48:53'),
(43, NULL, 'global', NULL, '2019-07-15 03:49:02', '2019-07-15 03:49:02'),
(44, NULL, 'ip', '::1', '2019-07-15 03:49:02', '2019-07-15 03:49:02'),
(45, 8, 'user', NULL, '2019-07-15 03:49:02', '2019-07-15 03:49:02'),
(46, NULL, 'global', NULL, '2019-07-16 04:36:35', '2019-07-16 04:36:35'),
(47, NULL, 'ip', '::1', '2019-07-16 04:36:35', '2019-07-16 04:36:35'),
(48, NULL, 'global', NULL, '2019-07-16 04:36:46', '2019-07-16 04:36:46'),
(49, NULL, 'ip', '::1', '2019-07-16 04:36:46', '2019-07-16 04:36:46'),
(50, 1, 'user', NULL, '2019-07-16 04:36:46', '2019-07-16 04:36:46'),
(51, NULL, 'global', NULL, '2019-07-16 04:37:04', '2019-07-16 04:37:04'),
(52, NULL, 'ip', '::1', '2019-07-16 04:37:04', '2019-07-16 04:37:04'),
(53, 1, 'user', NULL, '2019-07-16 04:37:04', '2019-07-16 04:37:04'),
(54, NULL, 'global', NULL, '2019-07-16 04:37:11', '2019-07-16 04:37:11'),
(55, NULL, 'ip', '::1', '2019-07-16 04:37:11', '2019-07-16 04:37:11'),
(56, 1, 'user', NULL, '2019-07-16 04:37:11', '2019-07-16 04:37:11'),
(57, NULL, 'global', NULL, '2019-07-16 04:37:19', '2019-07-16 04:37:19'),
(58, NULL, 'ip', '::1', '2019-07-16 04:37:19', '2019-07-16 04:37:19'),
(59, 1, 'user', NULL, '2019-07-16 04:37:20', '2019-07-16 04:37:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `guru_id` int(10) UNSIGNED DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci,
  `last_login` timestamp NULL DEFAULT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `gender` enum('L','P') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pic` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `guru_id`, `email`, `username`, `password`, `permissions`, `last_login`, `nama`, `created_at`, `updated_at`, `gender`, `pic`) VALUES
(1, NULL, 'admin@admin.com', 'admin', '$2y$10$m2BigNxcIST8CXeI7g8pCeZiBAFH1av0kcdTFrzSF45OyQHgQCiOO', NULL, '2019-07-16 08:02:52', 'Ilham', '2019-06-23 03:29:43', '2019-07-16 08:02:52', 'L', 'ebMfH2q1wO.jpeg'),
(2, NULL, 'user@user.com', 'user', '$2y$10$NnVrNKJQ0ahjpNRGF1zgfuQG4mdh6HoF1JqHcgwYy90OKqLodiYim', NULL, '2019-07-16 09:40:00', 'Pengguna', '2019-06-23 03:29:43', '2019-07-16 09:40:00', 'L', NULL),
(5, NULL, 'joko@gmail.com', 'joko', '$2y$10$LD2JGglSNDghzCs6jmS0LeS/A9pwA.3wTqW0XAwFJHYEUD0U.9Onu', NULL, '2019-07-13 09:56:53', 'joko', '2019-07-13 08:48:44', '2019-07-13 09:56:53', 'L', NULL),
(6, NULL, 'ramdan@yahoo.com', 'ramdan12', '$2y$10$bKDN9iLn0RqShs/0s7UAU.oq.c4llHpaeIQNQnCzs0ikWdfZyBtv.', NULL, NULL, 'Ramdan', '2019-07-13 10:29:18', '2019-07-13 10:29:18', 'P', NULL),
(8, 37, 'riawan@gmail.com', 'riawan', '$2y$10$3.P6GeDAJLM6LPe5GMuyq.uWdNENxpJ1Ty.U4RiJGzK7MvBCGV3pO', NULL, '2019-07-16 09:47:46', 'Riawan', '2019-07-13 10:44:19', '2019-07-16 09:47:46', 'P', NULL),
(10, NULL, 'admin2@admin.com', 'admin2', '$2y$10$yNhFbCjYyPRUCFEMiOoLPOiTW4vejDtfCaN8gGq1ojSragS8ybGl6', NULL, '2019-07-16 04:03:38', 'Admin Kedua', '2019-07-16 04:03:01', '2019-07-16 04:03:38', 'L', '4d1z3eoNfx.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `activations`
--
ALTER TABLE `activations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activity_log_log_name_index` (`log_name`);

--
-- Indeks untuk tabel `datatables`
--
ALTER TABLE `datatables`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `is_guru`
--
ALTER TABLE `is_guru`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `is_jurusan`
--
ALTER TABLE `is_jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `is_kompetensi`
--
ALTER TABLE `is_kompetensi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `is_mapel`
--
ALTER TABLE `is_mapel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `is_mapel_gurus`
--
ALTER TABLE `is_mapel_gurus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `periode_id` (`periode_id`);

--
-- Indeks untuk tabel `is_periode`
--
ALTER TABLE `is_periode`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `is_rombel`
--
ALTER TABLE `is_rombel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `is_siswa`
--
ALTER TABLE `is_siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `persistences`
--
ALTER TABLE `persistences`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `persistences_code_unique` (`code`);

--
-- Indeks untuk tabel `reminders`
--
ALTER TABLE `reminders`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Indeks untuk tabel `role_users`
--
ALTER TABLE `role_users`
  ADD PRIMARY KEY (`user_id`,`role_id`);

--
-- Indeks untuk tabel `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `throttle`
--
ALTER TABLE `throttle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `throttle_user_id_index` (`user_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `guru_id` (`guru_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `activations`
--
ALTER TABLE `activations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT untuk tabel `datatables`
--
ALTER TABLE `datatables`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `files`
--
ALTER TABLE `files`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `is_guru`
--
ALTER TABLE `is_guru`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `is_jurusan`
--
ALTER TABLE `is_jurusan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `is_kompetensi`
--
ALTER TABLE `is_kompetensi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `is_mapel`
--
ALTER TABLE `is_mapel`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `is_mapel_gurus`
--
ALTER TABLE `is_mapel_gurus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `is_periode`
--
ALTER TABLE `is_periode`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `is_rombel`
--
ALTER TABLE `is_rombel`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT untuk tabel `persistences`
--
ALTER TABLE `persistences`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT untuk tabel `reminders`
--
ALTER TABLE `reminders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `throttle`
--
ALTER TABLE `throttle`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `is_mapel_gurus`
--
ALTER TABLE `is_mapel_gurus`
  ADD CONSTRAINT `is_mapel_gurus_ibfk_1` FOREIGN KEY (`periode_id`) REFERENCES `is_periode` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `role_users`
--
ALTER TABLE `role_users`
  ADD CONSTRAINT `role_users_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`guru_id`) REFERENCES `is_guru` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
