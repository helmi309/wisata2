-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2020 at 08:52 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `destinasi_wisata`
--

CREATE TABLE `destinasi_wisata` (
  `id_destinasi_wisata` bigint(20) UNSIGNED NOT NULL,
  `nama_destinasi_wisata` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `destinasi_wisata`
--

INSERT INTO `destinasi_wisata` (`id_destinasi_wisata`, `nama_destinasi_wisata`, `deskripsi`, `kategori`, `created_at`, `updated_at`) VALUES
(1, 'Spot Sunrise ( Penanjakan 1/Bukit Kingkong/Bukit Cinta )', '<p>Spot Sunrise ( Penanjakan 1/Bukit Kingkong/Bukit Cinta )<br></p>', 'pemandangan', '2020-02-29 17:01:16', '2020-03-03 20:06:26'),
(2, 'Blok Widodaren / Widodaren Valley', '<p><span style=\"font-family: Roboto, sans-serif; font-size: 14px;\">Blok Widodaren / Widodaren Valley</span><br></p>', 'alam', '2020-03-03 20:06:45', '2020-03-03 20:06:45'),
(3, 'Kawah Bromo', '<p><span style=\"font-family: Roboto, sans-serif; font-size: 14px;\">Kawah Bromo</span><br></p>', 'laut', '2020-03-03 20:07:02', '2020-03-03 20:07:02'),
(4, 'Pura Luhur Poten', '<p><span style=\"font-family: Roboto, sans-serif; font-size: 14px;\">Pura Luhur Poten</span><br></p>', 'alam', '2020-03-03 20:07:18', '2020-03-03 20:07:18'),
(5, 'Pasir Berbisik', '<p><span style=\"font-family: Roboto, sans-serif; font-size: 14px;\">Pasir Berbisik</span><br></p>', 'laut', '2020-03-03 20:07:31', '2020-03-03 20:07:31'),
(6, 'Savana Bukit Teletubies', '<p><span style=\"font-family: Roboto, sans-serif; font-size: 14px;\">Savana Bukit Teletubies</span><br></p>', 'pemandangan', '2020-03-03 20:07:51', '2020-03-03 20:07:51'),
(7, 'Wisata Edukasi Petik Apel', '<p><span style=\"font-family: Roboto, sans-serif; font-size: 14px;\">Wisata Edukasi Petik Apel</span><br></p>', 'candi', '2020-03-03 21:43:13', '2020-03-03 21:43:13'),
(8, 'Taman Bunga Selecta', '<p><span style=\"font-family: Roboto, sans-serif; font-size: 14px;\">Taman Bunga Selecta</span><br></p>', 'candi', '2020-03-03 21:43:32', '2020-03-03 21:43:32'),
(9, 'Air Terjun Coban Rondo dan Taman Labirin', '<p><span style=\"font-family: Roboto, sans-serif; font-size: 14px;\">Air Terjun Coban Rondo dan Taman Labirin</span><br></p>', 'candi', '2020-03-03 21:43:45', '2020-03-03 21:43:45'),
(10, 'Museum Angkut Movie Star dan Pasar Apung', '<p><span style=\"font-family: Roboto, sans-serif; font-size: 14px;\">Museum Angkut Movie Star dan Pasar Apung</span><br></p>', 'candi', '2020-03-03 21:43:57', '2020-03-03 21:43:57'),
(11, 'Wisata Oleh - oleh khas Malang Batu', '<p><span style=\"font-family: Roboto, sans-serif; font-size: 14px;\">Wisata Oleh - oleh khas Malang Batu</span><br></p>', 'kuliner', '2020-03-03 21:44:17', '2020-03-03 21:44:17'),
(12, 'Kuliner Bakso President, makanan khas Malang', '<p><span style=\"font-family: Roboto, sans-serif; font-size: 14px;\">Kuliner Bakso President, makanan khas Malang</span><br></p>', 'kuliner', '2020-03-03 21:44:29', '2020-03-03 21:44:29'),
(13, 'Malang surabaya ddd', '<p>dxgx</p>', 'alam', '2020-04-29 17:54:21', '2020-04-29 17:54:21'),
(14, 'Kampung Kayu', '<p>Kampung Kayu<br></p>', 'Kampung Kayu', '2020-07-07 19:39:30', '2020-07-07 19:39:30'),
(15, 'Gasebu', '<p>Gasebu&nbsp;&nbsp;&nbsp;&nbsp;<br></p>', 'Gasebu', '2020-07-07 19:40:01', '2020-07-07 19:40:01');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas_trip`
--

CREATE TABLE `fasilitas_trip` (
  `id_fasilitas_trip` bigint(20) UNSIGNED NOT NULL,
  `id_tour` bigint(20) UNSIGNED NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `fasilitas_trip`
--

INSERT INTO `fasilitas_trip` (`id_fasilitas_trip`, `id_tour`, `deskripsi`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Transport dari Meeting Point – Bromo PP (Avanza / Luxio)', 'Harga Termasuk', '2020-03-03 20:12:51', '2020-03-03 20:12:51'),
(2, 1, 'Jeep 4x4 selama Explore di Bromo', 'Harga Termasuk', '2020-03-03 20:13:05', '2020-03-03 20:13:05'),
(3, 1, 'Driver, BBM & Parkir Tol', 'Harga Termasuk', '2020-03-03 20:13:26', '2020-03-03 20:13:26'),
(4, 1, 'Tiket entrance kawasan Bromo', 'Harga Termasuk', '2020-03-03 21:11:18', '2020-03-03 21:11:18'),
(5, 1, 'Makan Prasmanan setelah dari Bromo', 'Harga Termasuk', '2020-03-03 21:11:32', '2020-03-03 21:11:32'),
(6, 1, 'Air Mineral & Masker', 'Harga Termasuk', '2020-03-03 21:11:41', '2020-03-03 21:11:41'),
(7, 1, 'Driver Jeep as Guide', 'Harga Termasuk', '2020-03-03 21:11:53', '2020-03-03 21:11:53'),
(8, 1, 'P3K Ringan', 'Harga Termasuk', '2020-03-03 21:12:03', '2020-03-03 21:12:03'),
(9, 1, 'Asuransi Taman Nasional', 'Harga Termasuk', '2020-03-03 21:12:19', '2020-03-03 21:12:19'),
(10, 1, 'Sewa Jaket', 'Harga Tidak Termasuk', '2020-03-03 21:12:34', '2020-03-03 21:12:34'),
(11, 1, 'Coffee Morning', 'Harga Tidak Termasuk', '2020-03-03 21:12:48', '2020-03-03 21:12:48'),
(12, 1, 'Dokumentasi', 'Harga Tidak Termasuk', '2020-03-03 21:12:57', '2020-03-03 21:12:57'),
(22, 3, 'Transport Selama Perjalanan', 'Harga Termasuk', '2020-03-03 21:47:52', '2020-03-03 21:47:52'),
(23, 3, 'Tiket all entrance kawasan wisata', 'Harga Termasuk', '2020-03-03 21:48:05', '2020-03-03 21:48:05'),
(24, 3, 'Akomodasi 1 Malam', 'Harga Termasuk', '2020-03-03 21:48:14', '2020-03-03 21:48:14'),
(25, 3, 'Makan selama tour Sesuai Jadwal', 'Harga Termasuk', '2020-03-03 21:48:21', '2020-03-03 21:48:21'),
(26, 3, 'Welcome Snack, Air Mineral & Masker', 'Harga Termasuk', '2020-03-03 21:48:29', '2020-03-03 21:48:29'),
(27, 3, 'Driver as Guide', 'Harga Termasuk', '2020-03-03 21:48:35', '2020-03-03 21:48:35'),
(28, 3, 'BBM, Parkir & Tol', 'Harga Termasuk', '2020-03-03 21:48:40', '2020-03-03 21:48:40'),
(29, 3, 'P3K Ringan', 'Harga Termasuk', '2020-03-03 21:48:48', '2020-03-03 21:48:48'),
(30, 3, 'Asuransi Perjalanan Wisata', 'Harga Termasuk', '2020-03-03 21:48:55', '2020-03-03 21:48:55'),
(31, 3, 'Sewa Jaket dan Kuda saat di Bromo', 'Harga Tidak Termasuk', '2020-03-03 21:49:04', '2020-03-03 21:49:04'),
(32, 3, 'Tiket Pulang dan Pergi', 'Harga Tidak Termasuk', '2020-03-03 21:49:12', '2020-03-03 21:49:12');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `foto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_destinasi_wisata` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `foto`, `id_destinasi_wisata`, `created_at`, `updated_at`) VALUES
(2, '1588160170cc_.jpg', 1, '2020-04-29 04:36:10', '2020-04-29 04:36:10'),
(3, '1588160237cc_.jpg', 1, '2020-04-29 04:37:17', '2020-04-29 04:37:17'),
(4, '1594177633cc_.JPG', 14, '2020-07-07 20:07:13', '2020-07-07 20:07:13'),
(5, '1594177641cc_.JPG', 14, '2020-07-07 20:07:21', '2020-07-07 20:07:21'),
(6, '1594177649cc_.JPG', 14, '2020-07-07 20:07:29', '2020-07-07 20:07:29'),
(7, '1594177658cc_.JPG', 14, '2020-07-07 20:07:38', '2020-07-07 20:07:38'),
(8, '1594177665cc_.JPG', 14, '2020-07-07 20:07:45', '2020-07-07 20:07:45'),
(9, '1594177674cc_.jpg', 14, '2020-07-07 20:07:54', '2020-07-07 20:07:54'),
(10, '1594178213cc_.jpeg', 15, '2020-07-07 20:16:53', '2020-07-07 20:16:53'),
(11, '1594178218cc_.jpeg', 15, '2020-07-07 20:16:58', '2020-07-07 20:16:58'),
(12, '1594178224cc_.jpeg', 15, '2020-07-07 20:17:04', '2020-07-07 20:17:04'),
(13, '1594178229cc_.jpeg', 15, '2020-07-07 20:17:09', '2020-07-07 20:17:09'),
(14, '1594178236cc_.jpeg', 15, '2020-07-07 20:17:16', '2020-07-07 20:17:16');

-- --------------------------------------------------------

--
-- Table structure for table `harga_trip`
--

CREATE TABLE `harga_trip` (
  `id_harga_trip` bigint(20) UNSIGNED NOT NULL,
  `id_tour` bigint(20) UNSIGNED NOT NULL,
  `jumlah_peserta` int(11) NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `harga_trip`
--

INSERT INTO `harga_trip` (`id_harga_trip`, `id_tour`, `jumlah_peserta`, `harga`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '450000', '2020-03-03 20:11:44', '2020-03-03 20:11:44'),
(2, 1, 2, '350000', '2020-03-03 20:12:01', '2020-03-03 20:12:01'),
(3, 1, 3, '350000', '2020-03-03 20:12:25', '2020-03-03 20:12:25'),
(9, 3, 1, '4200000', '2020-03-03 21:46:14', '2020-03-03 21:46:14'),
(10, 3, 2, '2300000', '2020-03-03 21:46:28', '2020-03-03 21:46:28'),
(11, 3, 3, '1800000', '2020-03-03 21:46:48', '2020-03-03 21:46:48'),
(12, 3, 4, '1600000', '2020-03-03 21:47:07', '2020-03-03 21:47:07');

-- --------------------------------------------------------

--
-- Table structure for table `info_web`
--

CREATE TABLE `info_web` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_web` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deksripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slogan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ig` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fb` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twet` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `utube` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `info_web`
--

INSERT INTO `info_web` (`id`, `nama_web`, `logo`, `telepon`, `wa`, `email`, `alamat`, `deksripsi`, `remember_token`, `created_at`, `updated_at`, `slogan`, `ig`, `fb`, `twet`, `utube`) VALUES
(1, 'Wisata Kampung Seni', '1582794958_31_17803_1465445600_321164_f.png', '1', '1', 'admin@gmail.com', 'jl borobudur no 12', '-', NULL, '2020-05-11 14:04:36', '2020-08-02 16:10:14', 'Wisata Edukasi dan Budaya', 'https://www.instagram.com/', 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.youtube.com/');

-- --------------------------------------------------------

--
-- Table structure for table `info_wisata`
--

CREATE TABLE `info_wisata` (
  `id_info_wisata` bigint(20) UNSIGNED NOT NULL,
  `judul_info_wisata` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar_info_wisata` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `artikel_info_wisata` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_editor` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `info_wisata`
--

INSERT INTO `info_wisata` (`id_info_wisata`, `judul_info_wisata`, `gambar_info_wisata`, `artikel_info_wisata`, `id_editor`, `created_at`, `updated_at`) VALUES
(2, 'Wisata Kampung Seni', '1596410266_.jpeg', '<p>Kampung wisata merupakan bentuk integrasi antara atraksi, akomodasi, dan fasilitas pendukung yang disajikan dalam suatu struktur kehidupan masyarakat di mana terdapat sekelompok wisatawan yang dapat tinggal atau berdekatan dengan lingkungan tradisional tersebut untuk belajar mengenai kehidupan masyarakatnya. Berdasarkan ketiga bentuk integrasi tersebut, desa/kampung wisata dibagi menjadi 3 elemen desa/kampung wisata, yaitu elemen dasar (primary elements), elemen sekunder (secondary elements), dan elemen tambahan (additional elements) [1].</p><p>Perkembangan teknologi saat ini telah berkembang sangat pesat dan membawaperubahan yang sangat besar karena dengan teknologi tersebut informasi dapat didapat dengan cepat, akurat dan tidak terbatas oleh waktu dan tempat. Salah satu sektor yangberkembang dalam perkembangan teknologi adalah di bidang pariwisata yang memberikan andil untuk mendistribusikan informasi objek-objek wisata yang lebih interaktif khususnya melalui teknologi internet [2].</p><div><br></div>', 1, '2020-04-27 22:26:38', '2020-08-02 16:17:46'),
(4, 'Wista Gasebu', '1596410355_.jpeg', '<p>Wisata ini adalah daya tarik baru untuk warga sekitar maupun untuk warga luar kota, ini merupakan wisata yang beru dengan konsep yang berbeda dari wisata pada umumnya</p>', 1, '2020-04-28 18:32:53', '2020-08-02 16:19:15');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_02_18_062813_create_paket_wisatas_table', 1),
(5, '2020_02_21_023747_info_wisata', 1),
(6, '2020_02_21_033805_kategori', 1),
(7, '2020_02_21_053716_remove_id_kategori', 1),
(8, '2020_02_21_054046_delete_kategori_table', 1),
(9, '2020_02_21_054150_tag', 1),
(10, '2020_02_21_131810_relasi_tag_id_info_wisata', 1),
(11, '2020_02_21_133022_update_tag_relasi', 1),
(12, '2020_02_21_204503_tour_wisata', 1),
(13, '2020_02_21_205204_destinasi_wisata', 1),
(14, '2020_02_21_205604_harga_trip', 1),
(15, '2020_02_23_043613_remove_colomn_fasilitas_trip', 1),
(16, '2020_02_23_072339_paket_trip_destinasi_wisat', 1),
(17, '2020_02_23_095900_create_view_table_trip_paket', 1),
(18, '2020_02_24_104113_fasilitas_trip', 1),
(19, '2020_02_24_112559_jadwal_trip', 1),
(20, '2020_02_27_050748_tanggal_info_wisata', 2),
(21, '2020_02_29_234704_hapus__gambar', 3),
(24, '2020_03_04_024905_info', 4),
(26, '2020_03_22_103252_create_reservasi', 5),
(27, '2020_03_22_103755_create_reservasi_detail', 5),
(28, '2020_04_29_085855_create_galeri', 6);

-- --------------------------------------------------------

--
-- Table structure for table `paket_trip_destinasi_wisata`
--

CREATE TABLE `paket_trip_destinasi_wisata` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_tour` bigint(20) UNSIGNED NOT NULL,
  `id_destinasi_wisata` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `paket_trip_destinasi_wisata`
--

INSERT INTO `paket_trip_destinasi_wisata` (`id`, `id_tour`, `id_destinasi_wisata`, `created_at`, `updated_at`) VALUES
(55, 1, 14, '2020-07-07 20:37:02', '2020-07-07 20:37:02'),
(56, 3, 3, '2020-07-07 20:38:04', '2020-07-07 20:38:04'),
(57, 3, 7, '2020-07-07 20:38:04', '2020-07-07 20:38:04'),
(58, 3, 8, '2020-07-07 20:38:04', '2020-07-07 20:38:04'),
(59, 3, 9, '2020-07-07 20:38:04', '2020-07-07 20:38:04'),
(60, 3, 10, '2020-07-07 20:38:04', '2020-07-07 20:38:04'),
(61, 3, 11, '2020-07-07 20:38:04', '2020-07-07 20:38:04'),
(62, 3, 12, '2020-07-07 20:38:04', '2020-07-07 20:38:04');

-- --------------------------------------------------------

--
-- Table structure for table `paket_wisata`
--

CREATE TABLE `paket_wisata` (
  `id_paket_wisata` bigint(20) UNSIGNED NOT NULL,
  `judul_paket_wisata` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_paket_wisata` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `paket_wisata`
--

INSERT INTO `paket_wisata` (`id_paket_wisata`, `judul_paket_wisata`, `deskripsi_paket_wisata`, `created_at`, `updated_at`) VALUES
(1, 'Kampung Kayu', 'Kampung Kayu', '2020-03-02 17:54:11', '2020-07-07 19:35:10'),
(2, 'Gasebu', 'Gasebu', '2020-03-02 17:54:37', '2020-07-07 19:35:35');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `reservasi`
--

CREATE TABLE `reservasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_tour` bigint(20) UNSIGNED NOT NULL,
  `tgl_reservasi` date NOT NULL,
  `jml_peserta` int(11) NOT NULL,
  `total_harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_penjemputan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `reservasi`
--

INSERT INTO `reservasi` (`id`, `id_tour`, `tgl_reservasi`, `jml_peserta`, `total_harga`, `status`, `alamat_penjemputan`, `id_user`, `created_at`, `updated_at`) VALUES
(1, 1, '2020-03-31', 1, '450000', 'Proses Pembayaran', '', 2, '2020-03-31 08:19:30', '2020-03-31 08:19:30'),
(2, 1, '2020-04-12', 1, '450000', 'Proses Pembayaran', '', 1, '2020-04-09 05:38:14', '2020-04-09 05:38:14'),
(3, 1, '2020-04-18', 1, '450000', 'Proses Pembayaran', '', 2, '2020-04-14 17:29:25', '2020-04-14 17:29:25'),
(4, 1, '2020-04-18', 1, '450000', 'Proses Pembayaran', '', 2, '2020-04-14 17:29:29', '2020-04-14 17:29:29'),
(5, 1, '2020-04-18', 1, '450000', 'Proses Pembayaran', '', 2, '2020-04-14 17:41:10', '2020-04-14 17:41:10'),
(6, 1, '2020-04-18', 1, '450000', 'Proses Pembayaran', '', 2, '2020-04-14 17:41:13', '2020-04-14 17:41:13'),
(7, 1, '2020-04-18', 1, '450000', 'Proses Pembayaran', '', 2, '2020-04-14 17:51:26', '2020-04-14 17:51:26'),
(8, 1, '2020-04-18', 1, '450000', 'Proses Pembayaran', '', 2, '2020-04-14 17:51:38', '2020-04-14 17:51:38'),
(10, 1, '2020-04-18', 1, '450000', 'Proses Pembayaran', '', 2, '2020-04-14 17:59:25', '2020-04-14 17:59:25'),
(11, 1, '2020-04-18', 1, '450000', 'Proses Pembayaran', '', 2, '2020-04-14 18:01:22', '2020-04-14 18:01:22'),
(12, 3, '2020-04-18', 1, '4200000', 'Proses Pembayaran', '', 2, '2020-04-14 18:02:24', '2020-04-14 18:02:24'),
(13, 1, '2020-04-19', 2, '700000', 'Proses Pembayaran', '', 2, '2020-04-15 20:41:01', '2020-04-15 20:41:01'),
(14, 1, '2020-05-03', 1, '450000', 'Proses Pembayaran', '', 2, '2020-04-29 20:51:36', '2020-04-29 20:51:36'),
(15, 1, '2020-09-13', 1, '450000', 'Proses Pembayaran', '', 3, '2020-09-08 20:35:08', '2020-09-08 20:35:08');

-- --------------------------------------------------------

--
-- Table structure for table `reservasi_detail`
--

CREATE TABLE `reservasi_detail` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_reservasi` bigint(20) UNSIGNED NOT NULL,
  `noktp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nohp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `reservasi_detail`
--

INSERT INTO `reservasi_detail` (`id`, `id_reservasi`, `noktp`, `nama`, `alamat`, `nohp`, `created_at`, `updated_at`) VALUES
(1, 11, '214124', 'asfasfa', 'asfasf', '421412', '2020-04-14 18:01:22', '2020-04-14 18:01:22'),
(2, 12, '241414', 'safasfas', 'asfafas', '4112412', '2020-04-14 18:02:24', '2020-04-14 18:02:24'),
(3, 13, '212124', 'dasdasfa', 'asfasfasf', '525252', '2020-04-15 20:41:01', '2020-04-15 20:41:01'),
(4, 13, '52352523', 'fsafasfas', 'sfafasfasf', '3242342523', '2020-04-15 20:41:01', '2020-04-15 20:41:01'),
(5, 14, '121244243242', 'dsfsf', 'sdadas', '24212', '2020-04-29 20:51:36', '2020-04-29 20:51:36'),
(6, 15, '0986567767766776', 'Pratama Yudha', 'perum taman embong nyar 2', '08764562542642', '2020-09-08 20:35:08', '2020-09-08 20:35:08');

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE `tag` (
  `id_tag` bigint(20) UNSIGNED NOT NULL,
  `nama_tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idinfowisata` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `trip_paket`
--

CREATE TABLE `trip_paket` (
  `id_tour` bigint(20) UNSIGNED NOT NULL,
  `id_paket` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jadwal_trip` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sifat_trip` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meeting_point` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `termcondition` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `jadwal_perjalanan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `trip_paket`
--

INSERT INTO `trip_paket` (`id_tour`, `id_paket`, `judul`, `deskripsi`, `jadwal_trip`, `sifat_trip`, `meeting_point`, `termcondition`, `created_at`, `updated_at`, `jadwal_perjalanan`) VALUES
(1, 1, 'Paket Tour Wisata Kampung Kayu', '<p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-family: Roboto, sans-serif; font-size: 14px; text-align: justify;\">Wisata Kampung Kayu ini merupakan salah satu destinasi wisata fovorite di area Malang Raya yang menyuguhkan keindahan area perkampungan, yang menonjolkan kelebihan dari kampung lain. Wsata Kampung kayu ini banyak di kunjungi ketika akhir pekan kebanyakan pengunjungnya adalah muda-mudi dari kampung sekitar maupun luar kota. Wisata Kampung kayu ini banyak membuka lapangan pekerjaan pada warga asli kampung Kayu tersebut.</p>', 'Penentuan waktu bebas', 'Private dan tidak digabung dengan peserta lainnya', 'Malang', '<p><span style=\"font-family: Roboto, sans-serif; font-size: 14px;\">- Tanda jadi trip peserta&nbsp;</span><strong style=\"font-weight: bold; font-family: Roboto, sans-serif; font-size: 14px;\">Tour Wisata kayu</strong><span style=\"font-family: Roboto, sans-serif; font-size: 14px;\">&nbsp;diwajibkan&nbsp;melakukan transfer&nbsp;</span><strong style=\"font-weight: bold; font-family: Roboto, sans-serif; font-size: 14px;\">Down Payment</strong><span style=\"font-family: Roboto, sans-serif; font-size: 14px;\">&nbsp;minimal sebesar&nbsp;</span><strong style=\"font-weight: bold; font-family: Roboto, sans-serif; font-size: 14px;\">30%</strong><span style=\"font-family: Roboto, sans-serif; font-size: 14px;\">&nbsp;dari total keseluruhan dan sisa pembayaran dilakukan saat penjemputan peserta Tour&nbsp;</span><span style=\"font-family: Roboto, sans-serif; font-size: 14px;\">Wisata Kampung Kayu</span><br style=\"font-family: Roboto, sans-serif; font-size: 14px;\"><span style=\"font-family: Roboto, sans-serif; font-size: 14px;\">- Setelah melakukan trasnfer, peserta Tour&nbsp;</span><span style=\"font-family: Roboto, sans-serif; font-size: 14px;\">Wisata Kampung Kayu</span><span style=\"font-family: Roboto, sans-serif; font-size: 14px;\">&nbsp;diminta untuk mengirimkan bukti trasnfer, data peserta, alamat email dan alamat jemput sebagai konfirmasi kepada pihak kami atas tanda jadi trip</span><br style=\"font-family: Roboto, sans-serif; font-size: 14px;\"><span style=\"font-family: Roboto, sans-serif; font-size: 14px;\">- Apabila destinasi tujuan Tour&nbsp;</span><span style=\"font-family: Roboto, sans-serif; font-size: 14px;\">Wisata Kampung Kayu</span><span style=\"font-family: Roboto, sans-serif; font-size: 14px;\">&nbsp;tidak memungkinkan untuk dikunjungi karena bencana, cuaca yang tidak mendukung, penutupan tempat wisata, atau sebab lain di luar kendali kami, maka peserta tidak berhak meminta kompensasi atau pengembalian biaya yang telah dibayarkan dan diadakan musyawarah mufakat antara pihak Travel dan Peserta&nbsp;</span><a href=\"http://jendela-wisata.com/tour-bromo-sunrise/\" style=\"background-color: rgb(255, 255, 255); color: rgb(66, 139, 202); font-family: Roboto, sans-serif; font-size: 14px;\">Tour&nbsp;</a><span style=\"font-family: Roboto, sans-serif; font-size: 14px;\">Wisata Kampung Kayu</span><br style=\"font-family: Roboto, sans-serif; font-size: 14px;\"><span style=\"font-family: Roboto, sans-serif; font-size: 14px;\">- Jika terjadi force majeur oleh pihak kami, DP kami kembalikan sepenuhnya</span><br style=\"font-family: Roboto, sans-serif; font-size: 14px;\"><span style=\"font-family: Roboto, sans-serif; font-size: 14px;\">- Jika terjadi Force Majeur yang disebabkan peserta Tour&nbsp;</span><span style=\"font-family: Roboto, sans-serif; font-size: 14px;\">Wisata Kampung Kayu</span><span style=\"font-family: Roboto, sans-serif; font-size: 14px;\">&nbsp;(ketinggalan kereta, pesawat dan lainnya), peserta dianggap cancel trip dan pembayaran yang sudah dibayarkan hangus</span><br style=\"font-family: Roboto, sans-serif; font-size: 14px;\"><span style=\"font-family: Roboto, sans-serif; font-size: 14px;\">- Reschedule Tanggal Trip&nbsp;</span><span style=\"font-family: Roboto, sans-serif; font-size: 14px;\">Wisata Kampung Kayu</span><span style=\"font-family: Roboto, sans-serif; font-size: 14px;\">&nbsp;bisa dilakukan minimal&nbsp;</span><strong style=\"font-weight: bold; font-family: Roboto, sans-serif; font-size: 14px;\">H-10</strong><span style=\"font-family: Roboto, sans-serif; font-size: 14px;\">&nbsp;dari tanggal keberangakatan</span><br style=\"font-family: Roboto, sans-serif; font-size: 14px;\"><span style=\"font-family: Roboto, sans-serif; font-size: 14px;\">-&nbsp;</span><strong style=\"font-weight: bold; font-family: Roboto, sans-serif; font-size: 14px;\">Cancel trip</strong><span style=\"font-family: Roboto, sans-serif; font-size: 14px;\">&nbsp;oleh peserta sebelum&nbsp;</span><strong style=\"font-weight: bold; font-family: Roboto, sans-serif; font-size: 14px;\">H-5</strong><span style=\"font-family: Roboto, sans-serif; font-size: 14px;\">, kami melakukan refund sebesar&nbsp;</span><strong style=\"font-weight: bold; font-family: Roboto, sans-serif; font-size: 14px;\">60%</strong><span style=\"font-family: Roboto, sans-serif; font-size: 14px;\">&nbsp;dari semua yang telah dibayarkan</span><br style=\"font-family: Roboto, sans-serif; font-size: 14px;\"><span style=\"font-family: Roboto, sans-serif; font-size: 14px;\">-&nbsp;</span><strong style=\"font-weight: bold; font-family: Roboto, sans-serif; font-size: 14px;\">Cancel trip</strong><span style=\"font-family: Roboto, sans-serif; font-size: 14px;\">&nbsp;oleh peserta lebih dari&nbsp;</span><strong style=\"font-weight: bold; font-family: Roboto, sans-serif; font-size: 14px;\">H-5</strong><span style=\"font-family: Roboto, sans-serif; font-size: 14px;\">, semua yang sudah dibayarkan menjadi hak kami (semua DP hangus)</span><br style=\"font-family: Roboto, sans-serif; font-size: 14px;\"><span style=\"font-family: Roboto, sans-serif; font-size: 14px;\">-&nbsp;</span><strong style=\"font-weight: bold; font-family: Roboto, sans-serif; font-size: 14px;\">Anak usia 5 th</strong><span style=\"font-family: Roboto, sans-serif; font-size: 14px;\">&nbsp;keatas kami kenakan biaya penuh</span><br style=\"font-family: Roboto, sans-serif; font-size: 14px;\"><span style=\"font-family: Roboto, sans-serif; font-size: 14px;\">- Kami baru akan memasukkan sebagai list peserta Tour&nbsp;</span><span style=\"font-family: Roboto, sans-serif; font-size: 14px;\">Wisata Kampung Kayu&nbsp;</span><span style=\"font-family: Roboto, sans-serif; font-size: 14px;\">apabila sudah melakukan pembayaran DP</span><br style=\"font-family: Roboto, sans-serif; font-size: 14px;\"><span style=\"font-family: Roboto, sans-serif; font-size: 14px;\">- Untuk Down Payment dapat dibayarkan ke Rekening dibawah ini :</span><br></p>', '2020-03-03 20:08:54', '2020-07-07 20:36:50', '<p><span style=\"color: rgb(90, 101, 112); font-family: Roboto, sans-serif; font-size: 14px;\">Untuk Jadwal sendiri kami menawarkan sepanjang hari, selagi tempat wisata kampung kayu masih beroperasi, guna untuk penggunjung memanfaatkan waktu yang kosong dan tidak memberatkan penggunjung mengunjungi wisata kampung seni secara keseluruhan.</span><br></p>'),
(3, 2, 'Pake Tour Gasebu', '<p><span style=\"font-family: Roboto, sans-serif; font-size: 14px; text-align: justify;\">Wisata Gasebu ini merupakan salah satu destinasi wisata fovorite di area Malang Raya yang menyuguhkan keindahan area perkampungan, yang menonjolkan kelebihan dari kampung lain. Wisata&nbsp;</span><span style=\"font-family: Roboto, sans-serif; font-size: 14px; text-align: justify;\">Gasebu</span><span style=\"font-family: Roboto, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;ini banyak di kunjungi ketika akhir pekan kebanyakan pengunjungnya adalah muda-mudi dari kampung sekitar maupun luar kota. Wisata&nbsp;</span><span style=\"font-family: Roboto, sans-serif; font-size: 14px; text-align: justify;\">Gasebu</span><span style=\"font-family: Roboto, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;ini banyak membuka lapangan pekerjaan pada warga asli&nbsp;</span><span style=\"font-family: Roboto, sans-serif; font-size: 14px; text-align: justify;\">Gasebu</span><span style=\"font-family: Roboto, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;tersebut.</span><br></p>', 'Penentuan waktu bebas', 'Private dan tidak digabung dengan peserta lainnya', 'Malang', '<p><span style=\"font-family: Roboto, sans-serif; font-size: 14px;\">- Tanda jadi trip peserta diharapkan melakukan transfer&nbsp;</span><strong style=\"font-weight: bold; font-family: Roboto, sans-serif; font-size: 14px;\">Down Payment&nbsp;</strong><span style=\"font-family: Roboto, sans-serif; font-size: 14px;\">minimal sebesar&nbsp;</span><strong style=\"font-weight: bold; font-family: Roboto, sans-serif; font-size: 14px;\">30%</strong><span style=\"font-family: Roboto, sans-serif; font-size: 14px;\">&nbsp;dari total keseluruhan dan sisa pembayaran dilakukan saat penjemputan peserta</span><br style=\"font-family: Roboto, sans-serif; font-size: 14px;\"><span style=\"font-family: Roboto, sans-serif; font-size: 14px;\">- Setelah melakukan trasnfer, peserta trip diminta untuk mengirimkan bukti trasnfer, data peserta, alamat email dan alamat jemput sebagai konfirmasi kepada pihak kami atas tanda jadi trip</span><br style=\"font-family: Roboto, sans-serif; font-size: 14px;\"><span style=\"font-family: Roboto, sans-serif; font-size: 14px;\">- Apabila destinasi tujuan tidak memungkinkan untuk dikunjungi karena bencana, cuaca yang tidak mendukung, penutupan tempat wisata, atau sebab lain di luar kendali kami, maka peserta tidak berhak meminta kompensasi atau pengembalian biaya yang telah dibayarkan dan diadakan musyawarah mufakat</span><br style=\"font-family: Roboto, sans-serif; font-size: 14px;\"><span style=\"font-family: Roboto, sans-serif; font-size: 14px;\">- Jika terjadi force majeur oleh pihak kami, DP kami kembalikan sepenuhnya</span><br style=\"font-family: Roboto, sans-serif; font-size: 14px;\"><span style=\"font-family: Roboto, sans-serif; font-size: 14px;\">- Jika terjadi Force Majeur yang disebabkan peserta (ketinggalan kereta, pesawat dan lainnya), peserta dianggap cancel trip dan pembayaran yang sudah dibayarkan hangus</span><br style=\"font-family: Roboto, sans-serif; font-size: 14px;\"><span style=\"font-family: Roboto, sans-serif; font-size: 14px;\">- Kami tidak melayani Reschedule Tanggal Trip</span><br style=\"font-family: Roboto, sans-serif; font-size: 14px;\"><span style=\"font-family: Roboto, sans-serif; font-size: 14px;\">-&nbsp;</span><strong style=\"font-weight: bold; font-family: Roboto, sans-serif; font-size: 14px;\">Cancel trip</strong><span style=\"font-family: Roboto, sans-serif; font-size: 14px;\">&nbsp;oleh peserta sebelum&nbsp;</span><strong style=\"font-weight: bold; font-family: Roboto, sans-serif; font-size: 14px;\">H-5</strong><span style=\"font-family: Roboto, sans-serif; font-size: 14px;\">, kami melakukan refund sebesar&nbsp;</span><strong style=\"font-weight: bold; font-family: Roboto, sans-serif; font-size: 14px;\">20%</strong><span style=\"font-family: Roboto, sans-serif; font-size: 14px;\">&nbsp;dari semua yang telah dibayarkan</span><br style=\"font-family: Roboto, sans-serif; font-size: 14px;\"><span style=\"font-family: Roboto, sans-serif; font-size: 14px;\">-&nbsp;</span><strong style=\"font-weight: bold; font-family: Roboto, sans-serif; font-size: 14px;\">Cancel trip</strong><span style=\"font-family: Roboto, sans-serif; font-size: 14px;\">&nbsp;oleh peserta lebih dari&nbsp;</span><strong style=\"font-weight: bold; font-family: Roboto, sans-serif; font-size: 14px;\">H-5</strong><span style=\"font-family: Roboto, sans-serif; font-size: 14px;\">, semua yang sudah dibayarkan menjadi hak kami (semua DP hangus)</span><br style=\"font-family: Roboto, sans-serif; font-size: 14px;\"><span style=\"font-family: Roboto, sans-serif; font-size: 14px;\">- Anak&nbsp;</span><strong style=\"font-weight: bold; font-family: Roboto, sans-serif; font-size: 14px;\">usia 2 th</strong><span style=\"font-family: Roboto, sans-serif; font-size: 14px;\">&nbsp;keatas kami kenakan biaya penuh</span><br style=\"font-family: Roboto, sans-serif; font-size: 14px;\"><span style=\"font-family: Roboto, sans-serif; font-size: 14px;\">- Kami baru akan memasukkan sebagai list peserta apbila sudah melakukan pembayaran DP</span><br style=\"font-family: Roboto, sans-serif; font-size: 14px;\"><span style=\"font-family: Roboto, sans-serif; font-size: 14px;\">- Untuk Down Payment dapat dibayarkan ke Rekening dibawah ini :</span><br></p>', '2020-03-03 21:45:38', '2020-07-07 20:38:03', '<p><span style=\"color: rgb(90, 101, 112); font-family: Roboto, sans-serif; font-size: 14px;\">Untuk Jadwal sendiri kami menawarkan sepanjang hari, selagi tempat wisata Gasebu masih beroperasi, guna untuk penggunjung memanfaatkan waktu yang kosong dan tidak memberatkan penggunjung mengunjungi wisata kampung seni secara keseluruhan.</span><br></p>');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$rG3xTYTAKIvXoRqqaKcHauBifCMXUm513wa1Na54SUXNKjzuA3Fvy', NULL, '2020-02-26 20:58:15', '2020-02-26 20:58:15', 'admin'),
(2, 'cakpri', 'rizalffanani@gmail.com', NULL, '$2y$10$0BFFK6UjSF4aczJw.S/YuukRdos1cXib76S.QHIwXjIPAAoBCtET6', NULL, '2020-03-31 00:25:36', '2020-03-31 00:25:36', 'user'),
(3, 'kahfi', 'kahfipratama05@gmail.com', NULL, '$2y$10$0dHkIFU1B.WQ/0g3pelwx.xHhcmKrmF/694YzIRjkSI8NwI4LdPJ6', NULL, '2020-09-07 23:45:32', '2020-09-07 23:45:32', 'user');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_destinasi_wisata`
-- (See below for the actual view)
--
CREATE TABLE `view_destinasi_wisata` (
`id` bigint(20) unsigned
,`id_tour` bigint(20) unsigned
,`id_destinasi_wisata` bigint(20) unsigned
,`nama_destinasi_wisata` varchar(255)
,`deskripsi` text
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_galeri`
-- (See below for the actual view)
--
CREATE TABLE `view_galeri` (
`id` bigint(20) unsigned
,`foto` text
,`id_destinasi_wisata` int(11)
,`nama_destinasi_wisata` varchar(255)
,`kategori` varchar(100)
,`deskripsi` text
,`id_tour` bigint(20) unsigned
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_trip_paket`
-- (See below for the actual view)
--
CREATE TABLE `view_trip_paket` (
`id_tour` bigint(20) unsigned
,`judul` varchar(255)
,`id_paket` bigint(20) unsigned
,`judul_paket_wisata` varchar(255)
,`deskripsi_paket_wisata` text
,`deskripsi` text
,`jadwal_trip` text
,`sifat_trip` text
,`meeting_point` text
);

-- --------------------------------------------------------

--
-- Structure for view `view_destinasi_wisata`
--
DROP TABLE IF EXISTS `view_destinasi_wisata`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_destinasi_wisata`  AS  select `paket_trip_destinasi_wisata`.`id` AS `id`,`paket_trip_destinasi_wisata`.`id_tour` AS `id_tour`,`paket_trip_destinasi_wisata`.`id_destinasi_wisata` AS `id_destinasi_wisata`,`destinasi_wisata`.`nama_destinasi_wisata` AS `nama_destinasi_wisata`,`destinasi_wisata`.`deskripsi` AS `deskripsi` from (`destinasi_wisata` join `paket_trip_destinasi_wisata` on(`paket_trip_destinasi_wisata`.`id_destinasi_wisata` = `destinasi_wisata`.`id_destinasi_wisata`)) ;

-- --------------------------------------------------------

--
-- Structure for view `view_galeri`
--
DROP TABLE IF EXISTS `view_galeri`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_galeri`  AS  select `galeri`.`id` AS `id`,`galeri`.`foto` AS `foto`,`galeri`.`id_destinasi_wisata` AS `id_destinasi_wisata`,`destinasi_wisata`.`nama_destinasi_wisata` AS `nama_destinasi_wisata`,`destinasi_wisata`.`kategori` AS `kategori`,`destinasi_wisata`.`deskripsi` AS `deskripsi`,`paket_trip_destinasi_wisata`.`id_tour` AS `id_tour` from ((`galeri` join `destinasi_wisata` on(`galeri`.`id_destinasi_wisata` = `destinasi_wisata`.`id_destinasi_wisata`)) join `paket_trip_destinasi_wisata` on(`paket_trip_destinasi_wisata`.`id_destinasi_wisata` = `destinasi_wisata`.`id_destinasi_wisata`)) ;

-- --------------------------------------------------------

--
-- Structure for view `view_trip_paket`
--
DROP TABLE IF EXISTS `view_trip_paket`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_trip_paket`  AS  select `trip_paket`.`id_tour` AS `id_tour`,`trip_paket`.`judul` AS `judul`,`trip_paket`.`id_paket` AS `id_paket`,`paket_wisata`.`judul_paket_wisata` AS `judul_paket_wisata`,`paket_wisata`.`deskripsi_paket_wisata` AS `deskripsi_paket_wisata`,`trip_paket`.`deskripsi` AS `deskripsi`,`trip_paket`.`jadwal_trip` AS `jadwal_trip`,`trip_paket`.`sifat_trip` AS `sifat_trip`,`trip_paket`.`meeting_point` AS `meeting_point` from (`trip_paket` left join `paket_wisata` on(`trip_paket`.`id_paket` = `paket_wisata`.`id_paket_wisata`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `destinasi_wisata`
--
ALTER TABLE `destinasi_wisata`
  ADD PRIMARY KEY (`id_destinasi_wisata`) USING BTREE;

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `fasilitas_trip`
--
ALTER TABLE `fasilitas_trip`
  ADD PRIMARY KEY (`id_fasilitas_trip`) USING BTREE,
  ADD KEY `fasilitas_trip_id_tour_foreign` (`id_tour`) USING BTREE;

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `harga_trip`
--
ALTER TABLE `harga_trip`
  ADD PRIMARY KEY (`id_harga_trip`) USING BTREE,
  ADD KEY `harga_trip_id_tour_foreign` (`id_tour`) USING BTREE;

--
-- Indexes for table `info_web`
--
ALTER TABLE `info_web`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `info_web_email_unique` (`email`) USING BTREE;

--
-- Indexes for table `info_wisata`
--
ALTER TABLE `info_wisata`
  ADD PRIMARY KEY (`id_info_wisata`) USING BTREE;

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `paket_trip_destinasi_wisata`
--
ALTER TABLE `paket_trip_destinasi_wisata`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `paket_trip_destinasi_wisata_id_tour_foreign` (`id_tour`) USING BTREE,
  ADD KEY `paket_trip_destinasi_wisata_id_destinasi_wisata_foreign` (`id_destinasi_wisata`) USING BTREE;

--
-- Indexes for table `paket_wisata`
--
ALTER TABLE `paket_wisata`
  ADD PRIMARY KEY (`id_paket_wisata`) USING BTREE;

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`) USING BTREE;

--
-- Indexes for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `reservasi_id_tour_foreign` (`id_tour`) USING BTREE,
  ADD KEY `reservasi_id_user_foreign` (`id_user`) USING BTREE;

--
-- Indexes for table `reservasi_detail`
--
ALTER TABLE `reservasi_detail`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `reservasi_detail_id_reservasi_foreign` (`id_reservasi`) USING BTREE;

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id_tag`) USING BTREE,
  ADD KEY `tag_idinfowisata_foreign` (`idinfowisata`) USING BTREE;

--
-- Indexes for table `trip_paket`
--
ALTER TABLE `trip_paket`
  ADD PRIMARY KEY (`id_tour`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `users_email_unique` (`email`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `destinasi_wisata`
--
ALTER TABLE `destinasi_wisata`
  MODIFY `id_destinasi_wisata` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fasilitas_trip`
--
ALTER TABLE `fasilitas_trip`
  MODIFY `id_fasilitas_trip` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `harga_trip`
--
ALTER TABLE `harga_trip`
  MODIFY `id_harga_trip` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `info_web`
--
ALTER TABLE `info_web`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `info_wisata`
--
ALTER TABLE `info_wisata`
  MODIFY `id_info_wisata` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `paket_trip_destinasi_wisata`
--
ALTER TABLE `paket_trip_destinasi_wisata`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `paket_wisata`
--
ALTER TABLE `paket_wisata`
  MODIFY `id_paket_wisata` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reservasi`
--
ALTER TABLE `reservasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `reservasi_detail`
--
ALTER TABLE `reservasi_detail`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `id_tag` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trip_paket`
--
ALTER TABLE `trip_paket`
  MODIFY `id_tour` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fasilitas_trip`
--
ALTER TABLE `fasilitas_trip`
  ADD CONSTRAINT `fasilitas_trip_id_tour_foreign` FOREIGN KEY (`id_tour`) REFERENCES `trip_paket` (`id_tour`);

--
-- Constraints for table `harga_trip`
--
ALTER TABLE `harga_trip`
  ADD CONSTRAINT `harga_trip_id_tour_foreign` FOREIGN KEY (`id_tour`) REFERENCES `trip_paket` (`id_tour`);

--
-- Constraints for table `paket_trip_destinasi_wisata`
--
ALTER TABLE `paket_trip_destinasi_wisata`
  ADD CONSTRAINT `paket_trip_destinasi_wisata_id_destinasi_wisata_foreign` FOREIGN KEY (`id_destinasi_wisata`) REFERENCES `destinasi_wisata` (`id_destinasi_wisata`),
  ADD CONSTRAINT `paket_trip_destinasi_wisata_id_tour_foreign` FOREIGN KEY (`id_tour`) REFERENCES `trip_paket` (`id_tour`);

--
-- Constraints for table `reservasi_detail`
--
ALTER TABLE `reservasi_detail`
  ADD CONSTRAINT `reservasi_detail_id_reservasi_foreign` FOREIGN KEY (`id_reservasi`) REFERENCES `reservasi` (`id`);

--
-- Constraints for table `tag`
--
ALTER TABLE `tag`
  ADD CONSTRAINT `tag_idinfowisata_foreign` FOREIGN KEY (`idinfowisata`) REFERENCES `info_wisata` (`id_info_wisata`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
