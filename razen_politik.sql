-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 15 Sep 2023 pada 12.46
-- Versi server: 5.7.33
-- Versi PHP: 8.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `razen_politik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun_koordinators`
--

CREATE TABLE `akun_koordinators` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color_layout` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nav_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `placement` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `behaviour` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `layout` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `radius` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `koordinator_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `password_default` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `akun_koordinators`
--

INSERT INTO `akun_koordinators` (`id`, `name`, `email`, `email_verified_at`, `password`, `color_layout`, `nav_color`, `placement`, `behaviour`, `layout`, `radius`, `koordinator_id`, `created_at`, `updated_at`, `password_default`) VALUES
(1, 'Budi Budiman', 'budi_budiman@email.com', NULL, '$2y$10$4D.FnYWVRvXRUkrjwCCQyuH8yIkCnUcuEdWg7fGbo9Ocy.ZHbUy7W', NULL, NULL, NULL, NULL, NULL, NULL, 4, '2023-08-29 21:52:28', '2023-08-29 21:52:28', 'XWJkbbXw');

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun_penggunas`
--

CREATE TABLE `akun_penggunas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color_layout` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nav_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `placement` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `behaviour` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `layout` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `radius` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pengguna_id` bigint(20) UNSIGNED DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `password_default` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `akun_penggunas`
--

INSERT INTO `akun_penggunas` (`id`, `name`, `email`, `email_verified_at`, `password`, `color_layout`, `nav_color`, `placement`, `behaviour`, `layout`, `radius`, `pengguna_id`, `remember_token`, `created_at`, `updated_at`, `password_default`) VALUES
(2, 'Agus Hariyanto', 'agus_hariyanto@gmail.com', NULL, '$2y$10$vUlaHLsUBySNV17OB4bA0OgYjwnU1ThdLwFcLlbghO900K8Jz.1f.', 'dark-blue', 'default', 'vertical', 'pinned', 'fluid', 'standard', 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun_relawans`
--

CREATE TABLE `akun_relawans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color_layout` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nav_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `placement` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `behaviour` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `layout` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `radius` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relawan_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `password_default` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `akun_relawans`
--

INSERT INTO `akun_relawans` (`id`, `name`, `email`, `email_verified_at`, `password`, `color_layout`, `nav_color`, `placement`, `behaviour`, `layout`, `radius`, `relawan_id`, `created_at`, `updated_at`, `password_default`) VALUES
(1, 'Andi', 'andi@gmail.com', NULL, '$2y$10$QpLHTcDkW2y/jylHDT8kxeXbzzJEno7RAOt6yd1IQVNFf3UX7vqCG', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2023-08-30 20:34:35', '2023-09-03 21:41:27', 'm8sL9JBZ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun_saksis`
--

CREATE TABLE `akun_saksis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color_layout` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nav_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `placement` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `behaviour` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `layout` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `radius` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `saksi_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `password_default` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `akun_saksis`
--

INSERT INTO `akun_saksis` (`id`, `name`, `email`, `email_verified_at`, `password`, `color_layout`, `nav_color`, `placement`, `behaviour`, `layout`, `radius`, `saksi_id`, `created_at`, `updated_at`, `password_default`) VALUES
(1, 'Anas', 'anas@email.com', NULL, '$2y$10$oVrZOyhZS8llGJlxEhgZp.6LBjAERU/TnL0xbjoy/OdffRHbhbqNS', NULL, NULL, NULL, NULL, NULL, NULL, 2, '2023-09-02 19:58:48', '2023-09-02 19:58:48', 'UWwMWKSs');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dpt_manuals`
--

CREATE TABLE `dpt_manuals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `provinsi_id` bigint(20) UNSIGNED DEFAULT NULL,
  `kabupaten_kota_id` bigint(20) UNSIGNED DEFAULT NULL,
  `kecamatan_id` bigint(20) UNSIGNED DEFAULT NULL,
  `kelurahan_id` bigint(20) UNSIGNED DEFAULT NULL,
  `pengguna_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_kelamin` enum('L','P') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` longtext COLLATE utf8mb4_unicode_ci,
  `rt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rw` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_pemilih` enum('0','1') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `dapil_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `dpt_manuals`
--

INSERT INTO `dpt_manuals` (`id`, `provinsi_id`, `kabupaten_kota_id`, `kecamatan_id`, `kelurahan_id`, `pengguna_id`, `nama`, `email`, `no_hp`, `jenis_kelamin`, `nik`, `alamat`, `rt`, `rw`, `status_pemilih`, `created_at`, `updated_at`, `dapil_id`) VALUES
(1, 13, 1, 1, 2, 1, 'Anji', 'anji@email.com', '1234567890123', 'L', '1234567890123450', 'Jln. Tani', '001', '002', '1', '2023-09-03 07:33:38', '2023-09-03 07:33:38', 1),
(2, 13, 1, 1, 2, 1, 'sarah', 'sarah@email.com', '1234567890123', 'L', '1234567890123450', 'Jln. Tani', '001', '002', '1', '2023-09-03 20:59:32', '2023-09-03 20:59:32', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `koordinators`
--

CREATE TABLE `koordinators` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `provinsi_id` bigint(20) UNSIGNED DEFAULT NULL,
  `kabupaten_kota_id` bigint(20) UNSIGNED DEFAULT NULL,
  `kecamatan_id` bigint(20) UNSIGNED DEFAULT NULL,
  `kelurahan_id` bigint(20) UNSIGNED DEFAULT NULL,
  `pengguna_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_kelamin` enum('L','P') COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` longtext COLLATE utf8mb4_unicode_ci,
  `rt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rw` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status_undangan` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `koordinators`
--

INSERT INTO `koordinators` (`id`, `provinsi_id`, `kabupaten_kota_id`, `kecamatan_id`, `kelurahan_id`, `pengguna_id`, `nama`, `email`, `no_hp`, `jenis_kelamin`, `alamat`, `rt`, `rw`, `created_at`, `updated_at`, `status_undangan`, `foto`) VALUES
(4, 13, 1, 1, 1, 1, 'Budi Budiman', 'budi_budiman@email.com', '123456789012', 'L', 'Jln. Budi Budiman', '001', '001', '2023-08-29 21:52:27', '2023-08-31 23:29:30', '0', '64eecb0bd8238-230830.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kunjungan_relawans`
--

CREATE TABLE `kunjungan_relawans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `relawan_id` bigint(20) UNSIGNED DEFAULT NULL,
  `jenis_survey_id` bigint(20) UNSIGNED DEFAULT NULL,
  `tgl` datetime DEFAULT NULL,
  `provinsi_id` bigint(20) UNSIGNED DEFAULT NULL,
  `kabupaten_kota_id` bigint(20) UNSIGNED DEFAULT NULL,
  `kecamatan_id` bigint(20) UNSIGNED DEFAULT NULL,
  `kelurahan_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kunjungan_relawans`
--

INSERT INTO `kunjungan_relawans` (`id`, `relawan_id`, `jenis_survey_id`, `tgl`, `provinsi_id`, `kabupaten_kota_id`, `kecamatan_id`, `kelurahan_id`, `created_at`, `updated_at`) VALUES
(2, 1, 1, '2023-08-31 00:00:00', 13, 1, 1, 1, '2023-08-31 01:48:00', '2023-08-31 01:48:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `landing_page_artikels`
--

CREATE TABLE `landing_page_artikels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section_1` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `landing_page_artikels`
--

INSERT INTO `landing_page_artikels` (`id`, `section_1`, `created_at`, `updated_at`) VALUES
(1, '{\"judul\": \"Artikel\", \"gambar\": \"64fc33b3863b3-230909.png\"}', '2023-09-09 01:58:27', '2023-09-09 01:58:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `landing_page_bantuans`
--

CREATE TABLE `landing_page_bantuans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section_1` json DEFAULT NULL,
  `section_2` json DEFAULT NULL,
  `section_3` json DEFAULT NULL,
  `section_4` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `landing_page_bantuans`
--

INSERT INTO `landing_page_bantuans` (`id`, `section_1`, `section_2`, `section_3`, `section_4`, `created_at`, `updated_at`) VALUES
(1, '{\"judul\": \"Bantuan\", \"gambar\": \"64fc38fa17e7c-230909.png\"}', '{\"judul\": \"Thanks for your interest in Senatory\", \"gambar_1\": \"64fc3b3b28bab-230909.png\", \"gambar_2\": \"64fc3b3b32ee1-230909.png\", \"deskripsi\": \"The circumstances get murkier with both sides trying every trick to ensure their victory in upcoming.\"}', '{\"judul\": \"Thanks for your interest in Senatory\", \"gambar\": \"64fc4a9748bd8-230909.png\", \"deskripsi\": \"The circumstances get murkier with both sides trying every trick to ensure their victory in upcoming.\", \"gambar_background_1\": \"64fc4a9725856-230909.png\", \"gambar_background_2\": \"64fc4a973e970-230909.png\"}', '{\"judul\": \"Find Us on Goggle Maps\", \"deskripsi\": \"Every pleasures is to welcomed pain avoided owing to the duty the obligations of business it will frequently.\"}', '2023-09-09 02:20:58', '2023-09-09 03:41:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `landing_page_berandas`
--

CREATE TABLE `landing_page_berandas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section_1` json DEFAULT NULL,
  `section_2` json DEFAULT NULL,
  `section_3` json DEFAULT NULL,
  `section_4` json DEFAULT NULL,
  `section_5` json DEFAULT NULL,
  `section_6` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `landing_page_berandas`
--

INSERT INTO `landing_page_berandas` (`id`, `section_1`, `section_2`, `section_3`, `section_4`, `section_5`, `section_6`, `created_at`, `updated_at`) VALUES
(1, '{\"judul\": \"Together we can make Better world\", \"gambar\": \"64f9b38dc8fcd-230907.png\", \"deskripsi\": \"President represented Delaware for 36 years in the U.S. Senate before becoming the 47th Vice President of the United States. As President, Harison will restore America’s leadership and build our communities back better.\"}', '{\"gambar\": \"64f9b51086885-230907.png\"}', '{\"judul\": \"Join The Fight for Our Freedom\", \"gambar\": \"64f9b95b202d8-230907.png\", \"deskripsi\": \"Every pleasures is to welcomed pain avoided owing to the duty the obligations of business it will frequently occur that pleasures have to.\\r\\n\\r\\nHow all this mistaken idea of denouncing pleasure and praising pain was born & we will give you a complete account of the system.\", \"sub_judul\": \"Tentang Perusahaan\"}', '{\"judul\": \"Make A Donation For Your Country\", \"gambar\": \"64f9ba1adf8de-230907.png\", \"deskripsi\": \"Every pleasures is to welcomed pain avoided owing to the duty the obligations of business it will frequently occur that pleasures have to be repudiated.\", \"sub_judul\": \"Koordinasi\"}', '{\"judul\": \"Meet Our Party Volunteer\", \"deskripsi\": \"Every pleasures is to welcomed pain avoided owing to the duty the obligations of business it will frequently.\", \"sub_judul\": \"Become A Volunteer\"}', '{\"judul\": \"Latest News & Articles\", \"sub_judul\": \"Our News\"}', '2023-09-07 04:27:09', '2023-09-07 05:00:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `landing_page_footers`
--

CREATE TABLE `landing_page_footers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `footer` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `landing_page_footers`
--

INSERT INTO `landing_page_footers` (`id`, `footer`, `created_at`, `updated_at`) VALUES
(1, '{\"gambar_background\": \"64fa8a0637534-230908.png\"}', '2023-09-07 19:42:14', '2023-09-07 19:42:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `landing_page_hargas`
--

CREATE TABLE `landing_page_hargas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section_1` json DEFAULT NULL,
  `section_2` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `landing_page_hargas`
--

INSERT INTO `landing_page_hargas` (`id`, `section_1`, `section_2`, `created_at`, `updated_at`) VALUES
(1, '{\"judul\": \"About Us\", \"gambar\": \"64fc2e7c5924f-230909.png\"}', '{\"judul\": \"Our Campaign Principles\", \"konten\": [{\"id\": \"64fc317383d63\", \"judul\": \"Democracy\", \"deskripsi\": \"A free society depends on a free media and organizes civic\", \"kode_ikon\": \"fas fa-plus\"}, {\"id\": \"64fc317383d66\", \"judul\": \"Equality\", \"deskripsi\": \"All people are welcomed as part of a free society. All people are equal.\", \"kode_ikon\": \"fas fa-plus\"}, {\"id\": \"64fc317383d67\", \"judul\": \"Diversity\", \"deskripsi\": \"All people in a free society are different, and space for their.\", \"kode_ikon\": \"fas fa-plus\"}, {\"id\": \"64fc317383d68\", \"judul\": \"Security\", \"deskripsi\": \"Every human in a free society has secure access to meet.\", \"kode_ikon\": \"fas fa-plus\"}, {\"id\": \"64fc317383d69\", \"judul\": \"Justice\", \"deskripsi\": \"All people have the right to be free from coercion, threat, and violence.\", \"kode_ikon\": \"fas fa-plus\"}, {\"id\": \"64fc318abe547\", \"judul\": \"Peace\", \"deskripsi\": \"A free society uses conflict as an opportunity to learn from.\", \"kode_ikon\": \"fas fa-plus\"}], \"deskripsi\": \"Every pleasures is to welcomed pain avoided owing to the duty the obligations of business it will frequently.\"}', '2023-09-09 01:36:12', '2023-09-09 01:49:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `landing_page_produk_lains`
--

CREATE TABLE `landing_page_produk_lains` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `produk_lain` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `landing_page_produk_lains`
--

INSERT INTO `landing_page_produk_lains` (`id`, `produk_lain`, `created_at`, `updated_at`) VALUES
(1, '{\"judul\": \"Meet Our Party Volunteer\", \"deskripsi\": \"Every pleasures is to welcomed pain avoided owing to the duty the obligations of business it will frequently.\", \"sub_judul\": \"Produk Lain\"}', '2023-09-13 20:23:50', '2023-09-13 20:23:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `landing_page_tentang_kamis`
--

CREATE TABLE `landing_page_tentang_kamis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section_1` json DEFAULT NULL,
  `section_2` json DEFAULT NULL,
  `section_3` json DEFAULT NULL,
  `section_4` json DEFAULT NULL,
  `section_5` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `landing_page_tentang_kamis`
--

INSERT INTO `landing_page_tentang_kamis` (`id`, `section_1`, `section_2`, `section_3`, `section_4`, `section_5`, `created_at`, `updated_at`) VALUES
(1, '{\"judul\": \"Tentang Kami\", \"gambar\": \"64fa937504a79-230908.png\"}', '{\"judul\": \"We Have Super Power Administration\", \"konten\": [{\"id\": \"64fbd6e46c51a\", \"deskripsi\": \"Politics is the set of activities that are associated\"}, {\"id\": \"64fbd6e46c51d\", \"deskripsi\": \"There are several ways in which approaching politics.\"}, {\"id\": \"64fbd6fd19d47\", \"deskripsi\": \"Some perspectives on politics view it empirically.\"}], \"gambar_1\": \"64fa99a32c232-230908.png\", \"gambar_2\": \"64fa99a32f152-230908.png\", \"gambar_3\": \"64fa99a337950-230908.png\", \"deskripsi\": \"Every pleasures is to welcomed pain avoided owing to the duty the obligations of business it will frequently.\", \"watermark\": \"Successfully Providing the Best Solution from 20 years\", \"link_youtube\": \"https://www.youtube.com/embed/-ZwQtICNbRc\"}', '{\"judul\": \"Why chose us\", \"gambar\": \"64fbd8e94a583-230909.png\", \"konten\": [{\"id\": \"64fbdd08da803\", \"judul\": \"Smart Thinking\", \"deskripsi\": \"Every pleasures is to welcomed pain avoided owing to the dutythe obligations of business\", \"kode_ikon\": \"fas fa-plus\"}, {\"id\": \"64fbdd08da806\", \"judul\": \"Smart Thinking\", \"deskripsi\": \"Every pleasures is to welcomed pain avoided owing to the dutythe obligations of business\", \"kode_ikon\": \"fas fa-plus\"}, {\"id\": \"64fbdd08da807\", \"judul\": \"Smart Thinking\", \"deskripsi\": \"Every pleasures is to welcomed pain avoided owing to the dutythe obligations of business\", \"kode_ikon\": \"fas fa-plus\"}], \"deskripsi\": \"A choice that makes the difference from others.\", \"gambar_background\": \"64fbd8e95ac6b-230909.png\"}', '{\"judul\": \"Meet Our Party Volunteer\", \"deskripsi\": \"Every pleasures is to welcomed pain avoided owing to the duty the obligations of business it will frequently.\", \"sub_judul\": \"Join Campaigns\"}', '{\"judul\": \"Inspiration, innovation and countless opportunities\", \"konten\": [{\"id\": \"64fbe1db14ccd\", \"judul\": \"Senatory Vision?\", \"deskripsi\": \"Every pleasures is to welcomed pain avoided owing to the duty the Every pleasures is to welcomed pain avoided owing to the duty the obligations of business.Every pleasures is to welcomed pain avoided owing to the duty the obligations of business.\"}, {\"id\": \"64fbe1db14ccf\", \"judul\": \"Senatory Mission?\", \"deskripsi\": \"Every pleasures is to welcomed pain avoided owing to the duty the Every pleasures is to welcomed pain avoided owing to the duty the obligations of business.Every pleasures is to welcomed pain avoided owing to the duty the obligations of business.\"}, {\"id\": \"64fbe1f393788\", \"judul\": \"Senatory Future Plan?\", \"deskripsi\": \"Every pleasures is to welcomed pain avoided owing to the duty the Every pleasures is to welcomed pain avoided owing to the duty the obligations of business.Every pleasures is to welcomed pain avoided owing to the duty the obligations of business.\"}], \"gambar_1\": \"64fbdffc46411-230909.png\", \"gambar_2\": \"64fbdffc48a4e-230909.png\", \"gambar_3\": \"64fbdffc4a5b6-230909.png\", \"deskripsi\": \"Every pleasures is to welcomed pain avoided owing to the duty the obligations of business it will frequently.\"}', '2023-09-07 20:22:29', '2023-09-08 20:09:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `landing_page_testimonis`
--

CREATE TABLE `landing_page_testimonis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `testimoni` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `landing_page_testimonis`
--

INSERT INTO `landing_page_testimonis` (`id`, `testimoni`, `created_at`, `updated_at`) VALUES
(1, '{\"gambar_kecil\": \"64fa86d8220ae-230908.png\", \"gambar_background\": \"64fa86d80a0a0-230908.png\"}', '2023-09-07 19:28:40', '2023-09-07 19:28:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_isus`
--

CREATE TABLE `laporan_isus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `provinsi_id` bigint(20) UNSIGNED DEFAULT NULL,
  `kabupaten_kota_id` bigint(20) UNSIGNED DEFAULT NULL,
  `kecamatan_id` bigint(20) UNSIGNED DEFAULT NULL,
  `kelurahan_id` bigint(20) UNSIGNED DEFAULT NULL,
  `pengguna_id` bigint(20) UNSIGNED DEFAULT NULL,
  `jenis_isu_id` bigint(20) UNSIGNED DEFAULT NULL,
  `alamat` longtext COLLATE utf8mb4_unicode_ci,
  `rt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rw` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pelapor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `judul_isu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dampak` longtext COLLATE utf8mb4_unicode_ci,
  `tgl` datetime DEFAULT NULL,
  `tgl_ditanggapi` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `laporan_isus`
--

INSERT INTO `laporan_isus` (`id`, `provinsi_id`, `kabupaten_kota_id`, `kecamatan_id`, `kelurahan_id`, `pengguna_id`, `jenis_isu_id`, `alamat`, `rt`, `rw`, `pelapor`, `judul_isu`, `dampak`, `tgl`, `tgl_ditanggapi`, `created_at`, `updated_at`) VALUES
(1, 13, 1, 1, 1, 1, 1, 'Jalan Rendi', '001', '002', 'Rendi', 'Ekonomi Belum Maju', 'Masyarakat Belum Makan', '2023-09-01 00:00:00', '2023-09-09 10:53:00', '2023-09-09 20:37:14', '2023-09-09 20:55:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `logistiks`
--

CREATE TABLE `logistiks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pengguna_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `satuan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `logistiks`
--

INSERT INTO `logistiks` (`id`, `pengguna_id`, `nama`, `satuan`, `harga`, `created_at`, `updated_at`, `foto`) VALUES
(1, 1, 'Banner', 'buah', '1000000', '2023-09-10 15:59:39', '2023-09-10 15:59:39', '64fe4a5bea499-230910.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_dapils`
--

CREATE TABLE `master_dapils` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jabatan_pilihan_id` bigint(20) UNSIGNED DEFAULT NULL,
  `provinsi_id` bigint(20) UNSIGNED DEFAULT NULL,
  `kabupaten_kota_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `master_dapils`
--

INSERT INTO `master_dapils` (`id`, `nama`, `jabatan_pilihan_id`, `provinsi_id`, `kabupaten_kota_id`, `created_at`, `updated_at`) VALUES
(1, 'Dapil 1 Madiun', 1, 13, 1, '2023-09-02 21:50:25', '2023-09-02 21:50:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_dpts`
--

CREATE TABLE `master_dpts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `provinsi_id` bigint(20) UNSIGNED DEFAULT NULL,
  `kabupaten_kota_id` bigint(20) UNSIGNED DEFAULT NULL,
  `kecamatan_id` bigint(20) UNSIGNED DEFAULT NULL,
  `kelurahan_id` bigint(20) UNSIGNED DEFAULT NULL,
  `rt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rw` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_lk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_p` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `master_dpts`
--

INSERT INTO `master_dpts` (`id`, `provinsi_id`, `kabupaten_kota_id`, `kecamatan_id`, `kelurahan_id`, `rt`, `rw`, `jumlah_lk`, `jumlah_p`, `created_at`, `updated_at`) VALUES
(2, 1, NULL, NULL, NULL, NULL, NULL, '1839412', '1902625', '2023-08-28 21:09:48', '2023-08-28 21:09:48'),
(3, 39, NULL, NULL, NULL, NULL, NULL, '5360844', '5493096', '2023-08-28 21:10:03', '2023-08-28 21:10:03'),
(4, 37, NULL, NULL, NULL, NULL, NULL, '2207360', '2061246', '2023-08-28 21:10:22', '2023-08-28 21:10:22'),
(5, 31, NULL, NULL, NULL, NULL, NULL, '2399163', '2333011', '2023-08-28 21:12:51', '2023-08-28 21:12:51'),
(6, 20, NULL, NULL, NULL, NULL, NULL, '753535', '747439', '2023-08-28 21:13:09', '2023-08-28 21:13:09'),
(7, 19, NULL, NULL, NULL, NULL, NULL, '543663', '523771', '2023-08-28 21:13:24', '2023-08-28 21:13:24'),
(8, 10, NULL, NULL, NULL, NULL, NULL, '1350151', '1325956', '2023-08-28 21:13:38', '2023-08-28 21:13:38'),
(9, 6, NULL, NULL, NULL, NULL, NULL, '754855', '739973', '2023-08-28 21:13:52', '2023-08-28 21:13:52'),
(10, 38, NULL, NULL, NULL, NULL, NULL, '3192292', '3134056', '2023-08-28 21:14:05', '2023-08-28 21:14:05'),
(11, 21, NULL, NULL, NULL, NULL, NULL, '3326334', '3212791', '2023-08-28 21:14:27', '2023-08-28 21:14:27'),
(12, 5, NULL, NULL, NULL, NULL, NULL, '4460176', '4382470', '2023-08-28 21:14:45', '2023-08-28 21:14:45'),
(13, 11, NULL, NULL, NULL, NULL, NULL, '17958814', '17756087', '2023-08-28 21:15:04', '2023-08-28 21:15:04'),
(14, 8, NULL, NULL, NULL, NULL, NULL, '4080601', '4172296', '2023-08-28 21:15:19', '2023-08-28 21:15:19'),
(15, 12, NULL, NULL, NULL, NULL, NULL, '14113893', '14175520', '2023-08-28 21:15:38', '2023-08-28 21:15:38'),
(16, 7, NULL, NULL, NULL, NULL, NULL, '1397099', '1473875', '2023-08-28 21:15:54', '2023-08-28 21:15:54'),
(17, 13, NULL, NULL, NULL, NULL, NULL, '15427242', '15873241', '2023-08-28 21:16:14', '2023-08-28 21:16:14'),
(18, 4, NULL, NULL, NULL, NULL, NULL, '1617276', '1652240', '2023-08-28 21:16:29', '2023-08-28 21:16:29'),
(19, 24, NULL, NULL, NULL, NULL, NULL, '1916798', '2001493', '2023-08-28 21:16:43', '2023-08-28 21:16:43'),
(20, 25, NULL, NULL, NULL, NULL, NULL, '1971831', '2036644', '2023-08-28 21:16:58', '2023-08-28 21:16:58'),
(21, 15, NULL, NULL, NULL, NULL, NULL, '1512186', '1513034', '2023-08-28 21:17:12', '2023-08-28 21:17:12'),
(22, 14, NULL, NULL, NULL, NULL, NULL, '2017565', '1940996', '2023-08-28 21:17:29', '2023-08-28 21:17:29'),
(23, 16, NULL, NULL, NULL, NULL, NULL, '995097', '950019', '2023-08-28 21:17:43', '2023-08-28 21:17:43'),
(24, 17, NULL, NULL, NULL, NULL, NULL, '1435916', '1342728', '2023-08-28 21:18:02', '2023-08-28 21:18:02'),
(25, 18, NULL, NULL, NULL, NULL, NULL, '263000', '241252', '2023-08-28 21:18:17', '2023-08-28 21:18:17'),
(26, 36, NULL, NULL, NULL, NULL, NULL, '993863', '975740', '2023-08-28 21:18:55', '2023-08-28 21:18:55'),
(27, 9, NULL, NULL, NULL, NULL, NULL, '438682', '442524', '2023-08-28 21:19:11', '2023-08-28 21:19:11'),
(28, 34, NULL, NULL, NULL, NULL, NULL, '1140466', '1096237', '2023-08-28 21:19:55', '2023-08-28 21:19:55'),
(29, 32, NULL, NULL, NULL, NULL, NULL, '494660', '491100', '2023-08-28 21:20:09', '2023-08-28 21:20:09'),
(30, 33, NULL, NULL, NULL, NULL, NULL, '3244626', '3425956', '2023-08-28 21:20:24', '2023-08-28 21:20:24'),
(31, 35, NULL, NULL, NULL, NULL, NULL, '931298', '936633', '2023-08-28 21:21:10', '2023-08-28 21:21:10'),
(32, 22, NULL, NULL, NULL, NULL, NULL, '658058', '682954', '2023-08-28 21:21:41', '2023-08-28 21:21:41'),
(33, 23, NULL, NULL, NULL, NULL, NULL, '490478', '463500', '2023-08-28 21:21:56', '2023-08-28 21:21:56'),
(34, 26, NULL, NULL, NULL, NULL, NULL, '370861', '356974', '2023-08-28 21:22:11', '2023-08-28 21:22:11'),
(35, 30, NULL, NULL, NULL, NULL, NULL, '604549', '524195', '2023-08-28 21:22:26', '2023-08-28 21:22:26'),
(36, 27, NULL, NULL, NULL, NULL, NULL, '196570', '188895', '2023-08-28 21:22:45', '2023-08-28 21:22:45'),
(37, 28, NULL, NULL, NULL, NULL, NULL, '701582', '604832', '2023-08-28 21:23:06', '2023-08-28 21:23:06'),
(38, 29, NULL, NULL, NULL, NULL, NULL, '190310', '176959', '2023-08-28 21:23:48', '2023-08-28 21:23:48'),
(39, 40, NULL, NULL, NULL, NULL, NULL, '227823', '213003', '2023-08-28 21:25:03', '2023-08-28 21:25:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_fiturs`
--

CREATE TABLE `master_fiturs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `master_fiturs`
--

INSERT INTO `master_fiturs` (`id`, `role_id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 1, 'Master Data -> Data TPS', '2023-09-14 05:07:46', '2023-09-14 05:07:46'),
(2, 1, 'Master Data -> Data Jumlah DPT', '2023-09-14 05:10:57', '2023-09-14 05:10:57'),
(3, 1, 'Koordinator -> List Koordinator', '2023-09-14 05:11:41', '2023-09-14 05:24:32'),
(4, 1, 'Koordinator -> Pembagian Rute Relawan', '2023-09-14 05:12:25', '2023-09-14 05:24:41'),
(5, 1, 'Relawan -> List Relawan', '2023-09-14 05:25:01', '2023-09-14 05:25:01'),
(6, 1, 'Relawan -> Riwayat Kunjungan', '2023-09-14 05:25:23', '2023-09-14 05:25:23'),
(7, 1, 'Relawan -> Rute Harian', '2023-09-14 05:25:34', '2023-09-14 05:25:43'),
(8, 1, 'Saksi', '2023-09-14 05:25:58', '2023-09-14 05:25:58'),
(9, 1, 'Data DPT', '2023-09-14 05:26:07', '2023-09-14 05:26:07'),
(10, 1, 'Data Pemilih', '2023-09-14 05:26:22', '2023-09-14 05:26:22'),
(11, 1, 'Monitoring Isu', '2023-09-14 05:26:37', '2023-09-14 05:26:37'),
(12, 1, 'Logistik -> Daftar Stok Barang', '2023-09-14 05:26:56', '2023-09-14 05:26:56'),
(13, 1, 'Logistik -> Pemesanan Barang', '2023-09-14 05:27:05', '2023-09-14 05:27:58'),
(14, 1, 'Logistik -> Penerimaan Barang', '2023-09-14 05:27:20', '2023-09-14 05:27:49'),
(15, 1, 'Logistik -> Pengeluaran Barang', '2023-09-14 05:27:41', '2023-09-14 05:27:41'),
(16, 1, 'Rekapitulasi -> Koordinator', '2023-09-14 05:28:22', '2023-09-14 05:28:22'),
(17, 1, 'Rekapitulasi -> Relawan', '2023-09-14 05:32:45', '2023-09-14 05:32:45'),
(18, 1, 'Rekapitulasi -> Saksi', '2023-09-14 05:32:50', '2023-09-14 05:32:50'),
(19, 1, 'Rekapitulasi -> Pemilih / Pendukung', '2023-09-14 05:32:57', '2023-09-14 05:32:57'),
(20, 1, 'Rekapitulasi -> DPT Manual', '2023-09-14 05:33:02', '2023-09-14 05:33:02'),
(21, 2, 'Jadwal Kunjungan Relawan', '2023-09-14 05:34:55', '2023-09-14 05:34:55'),
(22, 2, 'Data DPT', '2023-09-14 05:35:01', '2023-09-14 05:35:01'),
(23, 2, 'Data Pemilih', '2023-09-14 05:35:10', '2023-09-14 05:35:10'),
(24, 3, 'Jadwal Kunjungan Relawan', '2023-09-14 05:38:17', '2023-09-14 05:38:17'),
(25, 3, 'Data DPT', '2023-09-14 05:38:23', '2023-09-14 05:38:23'),
(26, 3, 'Data Pemilih', '2023-09-14 05:39:03', '2023-09-14 05:39:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_jabatan_pilihans`
--

CREATE TABLE `master_jabatan_pilihans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `master_jabatan_pilihans`
--

INSERT INTO `master_jabatan_pilihans` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'DPR', '2023-08-27 16:07:22', '2023-08-27 16:07:22'),
(2, 'DPR RI', '2023-08-27 16:07:31', '2023-08-27 16:07:31'),
(3, 'DPD', '2023-08-27 16:07:39', '2023-08-27 16:07:39'),
(4, 'DPD RI', '2023-08-27 16:07:44', '2023-08-27 16:07:44'),
(5, 'Bupati', '2023-08-27 16:07:49', '2023-08-27 16:07:49'),
(6, 'Gubernur', '2023-08-27 16:07:56', '2023-08-27 16:07:56'),
(7, 'Walikota', '2023-08-27 16:08:01', '2023-08-27 16:08:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_jenis_isus`
--

CREATE TABLE `master_jenis_isus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `master_jenis_isus`
--

INSERT INTO `master_jenis_isus` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Ekonomi', '2023-09-09 18:37:39', '2023-09-09 18:37:39'),
(2, 'Lingkungan', '2023-09-09 18:37:48', '2023-09-09 18:37:48'),
(3, 'Keamanan', '2023-09-09 18:37:56', '2023-09-09 18:37:56'),
(4, 'Kesehatan', '2023-09-09 18:48:35', '2023-09-09 18:48:35'),
(5, 'Migrasi', '2023-09-09 18:48:46', '2023-09-09 18:48:46'),
(6, 'Pendidikan', '2023-09-09 18:48:52', '2023-09-09 18:48:52'),
(7, 'Hak Asasi Manusia', '2023-09-09 18:49:02', '2023-09-09 18:49:02'),
(8, 'Hubungan Internasional', '2023-09-09 18:49:11', '2023-09-09 18:49:11'),
(9, 'Korupsi', '2023-09-09 18:49:23', '2023-09-09 18:49:23'),
(10, 'Identitas dan Budaya', '2023-09-09 18:49:30', '2023-09-09 18:49:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_jenis_surveys`
--

CREATE TABLE `master_jenis_surveys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `master_jenis_surveys`
--

INSERT INTO `master_jenis_surveys` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Survei sosial ekonomi', '2023-08-27 19:23:28', '2023-08-27 19:23:28'),
(2, 'Survei Opini Publik', '2023-08-27 19:23:37', '2023-08-27 19:23:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_kabupaten_kotas`
--

CREATE TABLE `master_kabupaten_kotas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `provinsi_id` bigint(20) UNSIGNED DEFAULT NULL,
  `kode` int(11) DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `master_kabupaten_kotas`
--

INSERT INTO `master_kabupaten_kotas` (`id`, `provinsi_id`, `kode`, `nama`, `created_at`, `updated_at`) VALUES
(1, 13, 19, 'Madiun', '2023-08-13 05:40:17', '2023-08-13 06:35:20'),
(2, 13, 26, 'Kabupaten Bangkalan', '2023-08-13 05:56:57', '2023-08-13 05:56:57'),
(3, 13, 10, 'Kabupaten Banyuwangi', '2023-08-13 05:56:57', '2023-08-13 05:56:57'),
(4, 13, 5, 'Kabupaten Blitar', '2023-08-13 05:56:57', '2023-08-13 05:56:57'),
(5, 13, 22, 'Kabupaten Bojonegoro', '2023-08-13 05:56:57', '2023-08-13 05:56:57'),
(6, 13, 11, 'Kabupaten Bondowoso', '2023-08-13 05:56:57', '2023-08-13 05:56:57'),
(7, 13, 25, 'Kabupaten Gresik', '2023-08-13 05:56:57', '2023-08-13 05:56:57'),
(8, 13, 9, 'Kabupaten Jember', '2023-08-13 05:56:57', '2023-08-13 05:56:57'),
(9, 13, 17, 'Kabupaten Jombang', '2023-08-13 05:56:57', '2023-08-13 05:56:57'),
(10, 13, 6, 'Kabupaten Kediri', '2023-08-13 05:56:57', '2023-08-13 05:56:57'),
(11, 13, 24, 'Kabupaten Lamongan', '2023-08-13 05:56:57', '2023-08-13 05:56:57'),
(12, 13, 8, 'Kabupaten Lumajang', '2023-08-13 05:56:57', '2023-08-13 05:56:57'),
(13, 13, 19, 'Kabupaten Madiun', '2023-08-13 05:56:57', '2023-08-13 05:56:57'),
(14, 13, 20, 'Kabupaten Magetan', '2023-08-13 05:56:57', '2023-08-13 05:56:57'),
(15, 13, 7, 'Kabupaten Malang', '2023-08-13 05:56:57', '2023-08-13 05:56:57'),
(16, 13, 16, 'Kabupaten Mojokerto', '2023-08-13 05:56:57', '2023-08-13 05:56:57'),
(17, 13, 18, 'Kabupaten Nganjuk', '2023-08-13 05:56:57', '2023-08-13 05:56:57'),
(18, 13, 21, 'Kabupaten Ngawi', '2023-08-13 05:56:57', '2023-08-13 05:56:57'),
(19, 13, 1, 'Kabupaten Pacitan', '2023-08-13 05:56:57', '2023-08-13 05:56:57'),
(20, 13, 28, 'Kabupaten Pamekasan', '2023-08-13 05:56:57', '2023-08-13 05:56:57'),
(21, 13, 14, 'Kabupaten Pasuruan', '2023-08-13 05:56:57', '2023-08-13 05:56:57'),
(22, 13, 2, 'Kabupaten Ponorogo', '2023-08-13 05:56:57', '2023-08-13 05:56:57'),
(23, 13, 13, 'Kabupaten Probolinggo', '2023-08-13 05:56:57', '2023-08-13 05:56:57'),
(24, 13, 27, 'Kabupaten Sampang', '2023-08-13 05:56:57', '2023-08-13 05:56:57'),
(25, 13, 15, 'Kabupaten Sidoarjo', '2023-08-13 05:56:57', '2023-08-13 05:56:57'),
(26, 13, 12, 'Kabupaten Situbondo', '2023-08-13 05:56:57', '2023-08-13 05:56:57'),
(27, 13, 29, 'Kabupaten Sumenep', '2023-08-13 05:56:57', '2023-08-13 05:56:57'),
(28, 13, 3, 'Kabupaten Trenggalek', '2023-08-13 05:56:57', '2023-08-13 05:56:57'),
(29, 13, 23, 'Kabupaten Tuban', '2023-08-13 05:56:57', '2023-08-13 05:56:57'),
(30, 13, 4, 'Kabupaten Tulungagung', '2023-08-13 05:56:57', '2023-08-13 05:56:57'),
(31, 13, 79, 'Kota Batu', '2023-08-13 05:56:57', '2023-08-13 05:56:57'),
(32, 13, 72, 'Kota Blitar', '2023-08-13 05:56:57', '2023-08-13 05:56:57'),
(33, 13, 71, 'Kota Kediri', '2023-08-13 05:56:57', '2023-08-13 05:56:57'),
(34, 13, 73, 'Kota Malang', '2023-08-13 05:56:57', '2023-08-13 05:56:57'),
(35, 13, 76, 'Kota Mojokerto', '2023-08-13 05:56:57', '2023-08-13 05:56:57'),
(36, 13, 75, 'Kota Pasuruan', '2023-08-13 05:56:57', '2023-08-13 05:56:57'),
(37, 13, 74, 'Kota Probolinggo', '2023-08-13 05:56:57', '2023-08-13 05:56:57'),
(38, 13, 78, 'Kota Surabaya', '2023-08-13 05:56:57', '2023-08-13 05:56:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_kecamatans`
--

CREATE TABLE `master_kecamatans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kabupaten_kota_id` bigint(20) UNSIGNED DEFAULT NULL,
  `kode` int(11) DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `master_kecamatans`
--

INSERT INTO `master_kecamatans` (`id`, `kabupaten_kota_id`, `kode`, `nama`, `created_at`, `updated_at`) VALUES
(1, 1, 10, 'Balerejo', '2023-08-13 06:33:05', '2023-08-13 06:33:05'),
(2, 1, 4, 'Dagangan', '2023-08-13 06:51:33', '2023-08-13 06:51:33'),
(3, 1, 2, 'Dolopo', '2023-08-13 06:51:33', '2023-08-13 06:51:33'),
(4, 1, 3, 'Geger', '2023-08-13 06:51:33', '2023-08-13 06:51:33'),
(5, 1, 6, 'Gemarang', '2023-08-13 06:51:33', '2023-08-13 06:51:33'),
(6, 1, 9, 'Jiwan', '2023-08-13 06:51:33', '2023-08-13 06:51:33'),
(7, 1, 5, 'Kare', '2023-08-13 06:51:33', '2023-08-13 06:51:33'),
(8, 1, 1, 'Kebon Sari', '2023-08-13 06:51:33', '2023-08-13 06:51:33'),
(9, 1, 8, 'Madiun', '2023-08-13 06:51:33', '2023-08-13 06:51:33'),
(10, 1, 11, 'Mejayan', '2023-08-13 06:51:33', '2023-08-13 06:51:33'),
(11, 1, 13, 'Pilangkenceng', '2023-08-13 06:51:33', '2023-08-13 06:51:33'),
(12, 1, 12, 'Saradan', '2023-08-13 06:51:33', '2023-08-13 06:51:33'),
(13, 1, 14, 'Sawahan', '2023-08-13 06:51:33', '2023-08-13 06:51:33'),
(14, 1, 15, 'Wonoasri', '2023-08-13 06:51:33', '2023-08-13 06:51:33'),
(15, 1, 7, 'Wungu', '2023-08-13 06:51:33', '2023-08-13 06:51:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_kelurahans`
--

CREATE TABLE `master_kelurahans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kecamatan_id` bigint(20) UNSIGNED DEFAULT NULL,
  `kode` int(11) DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `master_kelurahans`
--

INSERT INTO `master_kelurahans` (`id`, `kecamatan_id`, `kode`, `nama`, `created_at`, `updated_at`) VALUES
(1, 1, 2008, 'Babadan Lor', '2023-08-13 07:23:05', '2023-08-13 07:23:05'),
(2, 1, 2002, 'Balerejo', '2023-08-13 07:46:40', '2023-08-13 07:46:40'),
(3, 1, 2014, 'Banaran', '2023-08-13 07:46:40', '2023-08-13 07:46:40'),
(4, 1, 2006, 'Bulakrejo', '2023-08-13 07:46:40', '2023-08-13 07:46:40'),
(5, 1, 2004, 'Gading', '2023-08-13 07:46:40', '2023-08-13 07:46:40'),
(6, 1, 2001, 'Garon', '2023-08-13 07:46:40', '2023-08-13 07:46:40'),
(7, 1, 2012, 'Glonggong (Glonggong Lor)', '2023-08-13 07:46:40', '2023-08-13 07:46:40'),
(8, 1, 2010, 'Jerukgulung', '2023-08-13 07:46:40', '2023-08-13 07:46:40'),
(9, 1, 2003, 'Kebonagung', '2023-08-13 07:46:40', '2023-08-13 07:46:40'),
(10, 1, 2011, 'Kedungjati', '2023-08-13 07:46:40', '2023-08-13 07:46:40'),
(11, 1, 2016, 'Kedungrejo', '2023-08-13 07:46:40', '2023-08-13 07:46:40'),
(12, 1, 2017, 'Kuwu', '2023-08-13 07:46:40', '2023-08-13 07:46:40'),
(13, 1, 2015, 'Pacinan', '2023-08-13 07:46:40', '2023-08-13 07:46:40'),
(14, 1, 2018, 'Simo', '2023-08-13 07:46:40', '2023-08-13 07:46:40'),
(15, 1, 2013, 'Sogo', '2023-08-13 07:46:40', '2023-08-13 07:46:40'),
(16, 1, 2005, 'Sumberbening', '2023-08-13 07:46:40', '2023-08-13 07:46:40'),
(17, 1, 2007, 'Tapelan', '2023-08-13 07:46:40', '2023-08-13 07:46:40'),
(18, 1, 2009, 'Warurejo', '2023-08-13 07:46:40', '2023-08-13 07:46:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_media_sosials`
--

CREATE TABLE `master_media_sosials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_ikon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `master_media_sosials`
--

INSERT INTO `master_media_sosials` (`id`, `nama`, `kode_ikon`, `created_at`, `updated_at`) VALUES
(1, 'Facebook', 'fab fa-facebook-f', '2023-09-06 20:12:28', '2023-09-06 20:12:28'),
(2, 'LinkedIn', 'fab fa-linkedin-in', '2023-09-06 20:13:44', '2023-09-06 20:13:44'),
(3, 'Pinterest', 'fab fa-pinterest-p', '2023-09-06 20:14:02', '2023-09-06 20:14:02'),
(4, 'Dribbble', 'fab fa-dribbble', '2023-09-06 20:14:15', '2023-09-06 20:14:15'),
(5, 'Instagram', 'fab fa-instagram', '2023-09-06 20:14:31', '2023-09-06 20:14:31'),
(7, 'Twitter', 'fab fa-twitter', '2023-09-06 20:15:53', '2023-09-06 20:15:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_pakets`
--

CREATE TABLE `master_pakets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `master_pakets`
--

INSERT INTO `master_pakets` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Biasa', '2023-09-14 04:52:15', '2023-09-14 04:52:15'),
(2, 'Pro', '2023-09-14 04:52:17', '2023-09-14 04:52:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_provinsis`
--

CREATE TABLE `master_provinsis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` int(11) DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `master_provinsis`
--

INSERT INTO `master_provinsis` (`id`, `kode`, `nama`, `created_at`, `updated_at`) VALUES
(1, 11, 'Aceh (NAD)', '2023-08-13 04:24:51', '2023-08-13 04:24:51'),
(4, 51, 'Bali', '2023-08-13 04:29:17', '2023-08-13 04:29:17'),
(5, 36, 'Banten', '2023-08-13 04:30:46', '2023-08-13 04:31:04'),
(6, 17, 'Bengkulu', '2023-08-13 04:42:02', '2023-08-13 04:42:02'),
(7, 34, 'DI Yogyakarta', '2023-08-13 04:42:02', '2023-08-13 04:42:02'),
(8, 31, 'DKI Jakarta', '2023-08-13 04:42:02', '2023-08-13 04:42:02'),
(9, 75, 'Gorontalo', '2023-08-13 04:42:02', '2023-08-13 04:42:02'),
(10, 15, 'Jambi', '2023-08-13 04:42:02', '2023-08-13 04:42:02'),
(11, 32, 'Jawa Barat', '2023-08-13 04:42:02', '2023-08-13 04:42:02'),
(12, 33, 'Jawa Tengah', '2023-08-13 04:42:02', '2023-08-13 04:42:02'),
(13, 35, 'Jawa Timur', '2023-08-13 04:42:02', '2023-08-13 04:42:02'),
(14, 61, 'Kalimantan Barat', '2023-08-13 04:42:02', '2023-08-13 04:42:02'),
(15, 63, 'Kalimantan Selatan', '2023-08-13 04:42:02', '2023-08-13 04:42:02'),
(16, 62, 'Kalimantan Tengah', '2023-08-13 04:42:02', '2023-08-13 04:42:02'),
(17, 64, 'Kalimantan Timur', '2023-08-13 04:42:02', '2023-08-13 04:42:02'),
(18, 65, 'Kalimantan Utara', '2023-08-13 04:42:02', '2023-08-13 04:42:02'),
(19, 19, 'Kepulauan Bangka Belitung', '2023-08-13 04:42:02', '2023-08-13 04:42:02'),
(20, 21, 'Kepulauan Riau', '2023-08-13 04:42:02', '2023-08-13 04:42:02'),
(21, 18, 'Lampung', '2023-08-13 04:42:02', '2023-08-13 04:42:02'),
(22, 81, 'Maluku', '2023-08-13 04:42:02', '2023-08-13 04:42:02'),
(23, 82, 'Maluku Utara', '2023-08-13 04:42:02', '2023-08-13 04:42:02'),
(24, 52, 'Nusa Tenggara Barat (NTB)', '2023-08-13 04:42:02', '2023-08-13 04:42:02'),
(25, 53, 'Nusa Tenggara Timur (NTT)', '2023-08-13 04:42:02', '2023-08-13 04:42:02'),
(26, 91, 'Papua', '2023-08-13 04:42:02', '2023-08-13 04:42:02'),
(27, 92, 'Papua Barat', '2023-08-13 04:42:02', '2023-08-13 04:42:02'),
(28, 95, 'Papua Pegunungan', '2023-08-13 04:42:02', '2023-08-13 04:42:02'),
(29, 93, 'Papua Selatan', '2023-08-13 04:42:02', '2023-08-13 04:42:02'),
(30, 94, 'Papua Tengah', '2023-08-13 04:42:02', '2023-08-13 04:42:02'),
(31, 14, 'Riau', '2023-08-13 04:42:02', '2023-08-13 04:42:02'),
(32, 76, 'Sulawesi Barat', '2023-08-13 04:42:02', '2023-08-13 04:42:02'),
(33, 73, 'Sulawesi Selatan', '2023-08-13 04:42:02', '2023-08-13 04:42:02'),
(34, 72, 'Sulawesi Tengah', '2023-08-13 04:42:02', '2023-08-13 04:42:02'),
(35, 74, 'Sulawesi Tenggara', '2023-08-13 04:42:02', '2023-08-13 04:42:02'),
(36, 71, 'Sulawesi Utara', '2023-08-13 04:42:02', '2023-08-13 04:42:02'),
(37, 13, 'Sumatera Barat', '2023-08-13 04:42:02', '2023-08-13 04:42:02'),
(38, 16, 'Sumatera Selatan', '2023-08-13 04:42:02', '2023-08-13 04:42:02'),
(39, 12, 'Sumatera Utara', '2023-08-13 04:42:02', '2023-08-13 04:42:02'),
(40, 92, 'Papua Barat Daya', '2023-08-28 21:24:40', '2023-08-28 21:24:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_roles`
--

CREATE TABLE `master_roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `master_roles`
--

INSERT INTO `master_roles` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Pengguna', '2023-09-14 04:38:32', '2023-09-14 04:39:48'),
(2, 'Koordinator', '2023-09-14 04:39:54', '2023-09-14 04:39:54'),
(3, 'Relawan', '2023-09-14 04:39:57', '2023-09-14 04:39:57'),
(5, 'Saksi', '2023-09-14 04:40:12', '2023-09-14 04:40:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_tps`
--

CREATE TABLE `master_tps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `provinsi_id` bigint(20) UNSIGNED DEFAULT NULL,
  `kabupaten_kota_id` bigint(20) UNSIGNED DEFAULT NULL,
  `kecamatan_id` bigint(20) UNSIGNED DEFAULT NULL,
  `kelurahan_id` bigint(20) UNSIGNED DEFAULT NULL,
  `jumlah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `master_tps`
--

INSERT INTO `master_tps` (`id`, `provinsi_id`, `kabupaten_kota_id`, `kecamatan_id`, `kelurahan_id`, `jumlah`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL, NULL, '16046', '2023-08-29 00:27:30', '2023-08-29 00:27:30'),
(2, 39, NULL, NULL, NULL, '45875', '2023-08-29 00:37:06', '2023-08-29 00:37:06'),
(3, 37, NULL, NULL, NULL, '17569', '2023-08-29 00:37:19', '2023-08-29 00:37:19'),
(4, 31, NULL, NULL, NULL, '19366', '2023-08-29 00:37:34', '2023-08-29 00:37:34'),
(5, 10, NULL, NULL, NULL, '11160', '2023-08-29 00:37:46', '2023-08-29 00:37:46'),
(6, 38, NULL, NULL, NULL, '25985', '2023-08-29 00:37:58', '2023-08-29 00:37:58'),
(7, 6, NULL, NULL, NULL, '6210', '2023-08-29 00:38:10', '2023-08-29 00:38:10'),
(8, 21, NULL, NULL, NULL, '25825', '2023-08-29 00:38:23', '2023-08-29 00:38:23'),
(9, 19, NULL, NULL, NULL, '4116', '2023-08-29 00:38:40', '2023-08-29 00:38:40'),
(10, 20, NULL, NULL, NULL, '5914', '2023-08-29 00:41:22', '2023-08-29 00:41:22'),
(11, 8, NULL, NULL, NULL, '30766', '2023-08-29 00:41:34', '2023-08-29 00:41:34'),
(12, 11, NULL, NULL, NULL, '140457', '2023-08-29 00:41:50', '2023-08-29 00:41:50'),
(13, 12, NULL, NULL, NULL, '117299', '2023-08-29 00:42:05', '2023-08-29 00:42:05'),
(14, 7, NULL, NULL, NULL, '11932', '2023-08-29 00:42:30', '2023-08-29 00:42:30'),
(15, 13, NULL, NULL, NULL, '120666', '2023-08-29 00:42:43', '2023-08-29 00:42:43'),
(16, 5, NULL, NULL, NULL, '33324', '2023-08-29 00:42:58', '2023-08-29 00:42:58'),
(17, 4, NULL, NULL, NULL, '12809', '2023-08-29 00:43:09', '2023-08-29 00:43:09'),
(18, 24, NULL, NULL, NULL, '16243', '2023-08-29 00:43:21', '2023-08-29 00:43:21'),
(19, 25, NULL, NULL, NULL, '16746', '2023-08-29 00:43:33', '2023-08-29 00:43:33'),
(20, 14, NULL, NULL, NULL, '17626', '2023-08-29 00:43:47', '2023-08-29 00:43:47'),
(21, 16, NULL, NULL, NULL, '7830', '2023-08-29 00:44:03', '2023-08-29 00:44:03'),
(22, 15, NULL, NULL, NULL, '13584', '2023-08-29 00:44:17', '2023-08-29 00:44:17'),
(23, 17, NULL, NULL, NULL, '11441', '2023-08-29 00:44:31', '2023-08-29 00:44:31'),
(24, 18, NULL, NULL, NULL, '2295', '2023-08-29 00:44:44', '2023-08-29 00:44:44'),
(25, 36, NULL, NULL, NULL, '8240', '2023-08-29 00:44:58', '2023-08-29 00:44:58'),
(26, 34, NULL, NULL, NULL, '9462', '2023-08-29 00:45:57', '2023-08-29 00:45:57'),
(27, 33, NULL, NULL, NULL, '26357', '2023-08-29 00:46:10', '2023-08-29 00:46:10'),
(28, 35, NULL, NULL, NULL, '8154', '2023-08-29 00:46:23', '2023-08-29 00:46:23'),
(29, 9, NULL, NULL, NULL, '3539', '2023-08-29 00:46:35', '2023-08-29 00:46:35'),
(30, 32, NULL, NULL, NULL, '4219', '2023-08-29 00:49:49', '2023-08-29 00:49:49'),
(31, 22, NULL, NULL, NULL, '5622', '2023-08-29 00:50:02', '2023-08-29 00:50:02'),
(32, 23, NULL, NULL, NULL, '4192', '2023-08-29 00:50:15', '2023-08-29 00:50:15'),
(33, 26, NULL, NULL, NULL, '3109', '2023-08-29 00:50:31', '2023-08-29 00:50:31'),
(34, 27, NULL, NULL, NULL, '1923', '2023-08-29 00:50:48', '2023-08-29 00:50:48'),
(35, 29, NULL, NULL, NULL, '1770', '2023-08-29 00:51:03', '2023-08-29 00:51:03'),
(36, 30, NULL, NULL, NULL, '4484', '2023-08-29 00:51:16', '2023-08-29 00:51:16'),
(37, 28, NULL, NULL, NULL, '5850', '2023-08-29 00:51:31', '2023-08-29 00:51:31'),
(38, 40, NULL, NULL, NULL, '2156', '2023-08-29 00:51:44', '2023-08-29 00:51:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_07_28_001454_create_profils_table', 1),
(6, '2023_07_28_062924_create_penggunas_table', 2),
(7, '2023_07_28_063956_create_akun_penggunas_table', 3),
(8, '2023_08_13_034057_create_master_provinsis_table', 4),
(9, '2023_08_13_035238_create_master_kabupaten_kotas_table', 4),
(10, '2023_08_13_035257_create_master_kecamatans_table', 4),
(11, '2023_08_13_035445_create_master_kelurahans_table', 4),
(12, '2023_08_16_072409_create_master_jenis_isus_table', 5),
(13, '2023_08_16_072749_create_master_jenis_surveys_table', 5),
(14, '2023_08_16_072918_create_master_jabatan_pilihans_table', 5),
(15, '2023_08_16_073046_create_master_dpts_table', 5),
(16, '2023_08_16_073559_create_master_tps_table', 5),
(17, '2023_08_16_073649_create_pemilus_table', 5),
(18, '2023_08_16_073825_add_provinsi_id_to_penggunas', 5),
(19, '2023_08_16_074034_create_dpt_manuals_table', 6),
(20, '2023_08_16_074317_create_laporan_isus_table', 7),
(21, '2023_08_16_074546_create_logistiks_table', 8),
(22, '2023_08_16_074720_create_pemesanan_logistiks_table', 8),
(23, '2023_08_16_074939_create_penerimaan_logistiks_table', 8),
(24, '2023_08_16_075042_create_pengeluaran_logistiks_table', 8),
(25, '2023_08_16_083444_create_pivot_jabatan_pilihan_penggunas_table', 8),
(26, '2023_08_16_083616_create_koordinators_table', 8),
(27, '2023_08_16_083853_create_akun_koordinators_table', 9),
(28, '2023_08_16_084029_create_relawans_table', 9),
(29, '2023_08_16_084249_create_akun_relawans_table', 9),
(30, '2023_08_16_084344_create_kunjungan_relawans_table', 10),
(31, '2023_08_16_084519_create_responden_kunjungans_table', 10),
(32, '2023_08_16_084656_create_saksis_table', 11),
(33, '2023_08_16_084854_create_akun_saksis_table', 11),
(34, '2023_08_30_022134_add_status_undangan_to_koordinators', 12),
(35, '2023_08_30_044143_add_password_default_to_akun_relawans', 12),
(36, '2023_08_30_044218_add_password_default_to_akun_koordinators', 12),
(37, '2023_08_30_044239_add_password_default_to_akun_penggunas', 12),
(38, '2023_08_30_072055_add_foto_to_penggunas', 13),
(39, '2023_08_31_031000_add_status_undangan_to_relawans', 14),
(40, '2023_09_02_073627_add_foto_to_saksis', 15),
(41, '2023_09_03_025639_add_passwod_default_to_akun_saksis', 16),
(42, '2023_09_03_031047_create_master_dapils_table', 17),
(43, '2023_09_03_031108_create_pivot_kecamatan_master_dapils_table', 17),
(44, '2023_09_03_103235_add_dapil_id_to_dpt_manuals', 18),
(45, '2023_09_06_065240_create_master_media_sosials_table', 19),
(46, '2023_09_06_065524_create_pivot_profil_media_sosials_table', 19),
(47, '2023_09_07_032617_add_svg_ikon_to_profils', 20),
(48, '2023_09_07_111757_create_landing_page_berandas_table', 21),
(49, '2023_09_08_021223_create_landing_page_testimonis_table', 22),
(50, '2023_09_08_023841_create_landing_page_footers_table', 23),
(51, '2023_09_08_031350_drop_section_7_from_landing_page_berandas', 24),
(52, '2023_09_08_031936_create_landing_page_tentang_kamis_table', 24),
(53, '2023_09_09_031337_create_landing_page_hargas_table', 25),
(54, '2023_09_09_085609_create_landing_page_artikels_table', 26),
(55, '2023_09_09_091648_create_landing_page_bantuans_table', 27),
(56, '2023_09_09_111148_create_testimonis_table', 28),
(57, '2023_09_09_120009_create_tims_table', 29),
(58, '2023_09_10_220233_add_foto_to_logistiks', 30),
(59, '2023_09_11_070230_add_keterangan_to_pengeluaran_logistiks', 31),
(60, '2023_09_14_015125_create_produk_lains_table', 32),
(61, '2023_09_14_030929_create_landing_page_produk_lains_table', 33),
(62, '2023_09_14_091231_create_master_pakets_table', 34),
(63, '2023_09_14_091704_create_master_roles_table', 34),
(64, '2023_09_14_091730_create_master_fiturs_table', 34),
(65, '2023_09_14_091750_create_pivot_pakets_table', 34),
(66, '2023_09_14_091804_create_pivot_paket_fiturs_table', 34);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan_logistiks`
--

CREATE TABLE `pemesanan_logistiks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logistik_id` bigint(20) UNSIGNED DEFAULT NULL,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan` longtext COLLATE utf8mb4_unicode_ci,
  `status` enum('belum_diterima','sudah_diterima') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_pemesanan` datetime DEFAULT NULL,
  `tgl_terima` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pemesanan_logistiks`
--

INSERT INTO `pemesanan_logistiks` (`id`, `logistik_id`, `kode`, `jumlah`, `keterangan`, `status`, `tgl_pemesanan`, `tgl_terima`, `created_at`, `updated_at`) VALUES
(2, 1, 'PM-0000001', '1000', 'Banner Politik', 'sudah_diterima', '2023-09-11 10:42:00', '2023-09-21 10:42:00', '2023-09-10 20:42:44', '2023-09-10 20:43:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemilus`
--

CREATE TABLE `pemilus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_pemilihan` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pemilus`
--

INSERT INTO `pemilus` (`id`, `nama`, `tgl_pemilihan`, `created_at`, `updated_at`) VALUES
(1, 'Pemilu', '2024-02-14 00:00:00', '2023-08-28 00:18:41', '2023-08-28 00:18:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penerimaan_logistiks`
--

CREATE TABLE `penerimaan_logistiks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logistik_id` bigint(20) UNSIGNED DEFAULT NULL,
  `jumlah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_terima` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `penerimaan_logistiks`
--

INSERT INTO `penerimaan_logistiks` (`id`, `logistik_id`, `jumlah`, `tgl_terima`, `created_at`, `updated_at`) VALUES
(1, 1, '1000', '2023-09-21 10:42:00', '2023-09-10 20:43:04', '2023-09-10 20:43:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengeluaran_logistiks`
--

CREATE TABLE `pengeluaran_logistiks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logistik_id` bigint(20) UNSIGNED DEFAULT NULL,
  `jumlah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_keluar` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `keterangan` longtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pengeluaran_logistiks`
--

INSERT INTO `pengeluaran_logistiks` (`id`, `logistik_id`, `jumlah`, `tgl_keluar`, `created_at`, `updated_at`, `keterangan`) VALUES
(1, 1, '100', '2023-09-11 14:01:00', '2023-09-11 00:01:45', '2023-09-11 00:01:45', NULL),
(2, 1, '100', '2023-09-11 14:04:00', '2023-09-11 00:04:26', '2023-09-11 00:04:26', 'sasfdas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penggunas`
--

CREATE TABLE `penggunas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `provinsi_id` bigint(20) UNSIGNED DEFAULT NULL,
  `kabupaten_kota_id` bigint(20) UNSIGNED DEFAULT NULL,
  `kecamatan_id` bigint(20) UNSIGNED DEFAULT NULL,
  `kelurahan_id` bigint(20) UNSIGNED DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_kelamin` enum('L','P') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` longtext COLLATE utf8mb4_unicode_ci,
  `rt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rw` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `penggunas`
--

INSERT INTO `penggunas` (`id`, `nama`, `created_at`, `updated_at`, `provinsi_id`, `kabupaten_kota_id`, `kecamatan_id`, `kelurahan_id`, `email`, `no_hp`, `jenis_kelamin`, `alamat`, `rt`, `rw`, `foto`) VALUES
(1, 'Agus Hariyanto', NULL, '2023-08-30 01:42:46', 13, 1, 1, 1, NULL, '123456789012', 'L', 'Jln. Agus Hariyanto', '001', '002', '64ef010689981-230830.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pivot_jabatan_pilihan_penggunas`
--

CREATE TABLE `pivot_jabatan_pilihan_penggunas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pengguna_id` bigint(20) UNSIGNED DEFAULT NULL,
  `jabatan_pilihan_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pivot_kecamatan_master_dapils`
--

CREATE TABLE `pivot_kecamatan_master_dapils` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dapil_id` bigint(20) UNSIGNED DEFAULT NULL,
  `kecamatan_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pivot_kecamatan_master_dapils`
--

INSERT INTO `pivot_kecamatan_master_dapils` (`id`, `dapil_id`, `kecamatan_id`, `created_at`, `updated_at`) VALUES
(3, 1, 1, '2023-09-02 22:15:03', '2023-09-02 22:15:03'),
(4, 1, 2, '2023-09-02 22:15:03', '2023-09-02 22:15:03'),
(5, 1, 3, '2023-09-02 22:15:03', '2023-09-02 22:15:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pivot_pakets`
--

CREATE TABLE `pivot_pakets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `paket_id` bigint(20) UNSIGNED DEFAULT NULL,
  `jabatan_pilihan_id` bigint(20) UNSIGNED DEFAULT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipe_waktu` enum('hari','bulan','tahun') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lama_waktu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pivot_pakets`
--

INSERT INTO `pivot_pakets` (`id`, `paket_id`, `jabatan_pilihan_id`, `harga`, `tipe_waktu`, `lama_waktu`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '49000000', 'bulan', '6', '2023-09-14 06:16:45', '2023-09-14 06:28:04'),
(2, 2, 1, '69000000', 'bulan', '6', '2023-09-14 21:16:08', '2023-09-14 21:16:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pivot_paket_fiturs`
--

CREATE TABLE `pivot_paket_fiturs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pivot_paket_id` bigint(20) UNSIGNED DEFAULT NULL,
  `fitur_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pivot_paket_fiturs`
--

INSERT INTO `pivot_paket_fiturs` (`id`, `pivot_paket_id`, `fitur_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2023-09-14 21:03:45', '2023-09-14 21:03:45'),
(2, 1, 2, '2023-09-14 21:03:45', '2023-09-14 21:03:45'),
(3, 1, 5, '2023-09-14 21:03:45', '2023-09-14 21:03:45'),
(4, 1, 6, '2023-09-14 21:03:45', '2023-09-14 21:03:45'),
(5, 1, 12, '2023-09-14 21:03:45', '2023-09-14 21:03:45'),
(6, 1, 16, '2023-09-14 21:03:45', '2023-09-14 21:03:45'),
(7, 1, 21, '2023-09-14 21:03:45', '2023-09-14 21:03:45'),
(8, 1, 24, '2023-09-14 21:03:45', '2023-09-14 21:03:45'),
(9, 1, 1, '2023-09-14 21:04:37', '2023-09-14 21:04:37'),
(10, 1, 2, '2023-09-14 21:04:37', '2023-09-14 21:04:37'),
(11, 1, 5, '2023-09-14 21:04:37', '2023-09-14 21:04:37'),
(12, 1, 6, '2023-09-14 21:04:37', '2023-09-14 21:04:37'),
(13, 1, 12, '2023-09-14 21:04:37', '2023-09-14 21:04:37'),
(14, 1, 13, '2023-09-14 21:04:37', '2023-09-14 21:04:37'),
(15, 1, 16, '2023-09-14 21:04:37', '2023-09-14 21:04:37'),
(16, 1, 21, '2023-09-14 21:04:37', '2023-09-14 21:04:37'),
(17, 1, 24, '2023-09-14 21:04:37', '2023-09-14 21:04:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pivot_profil_media_sosials`
--

CREATE TABLE `pivot_profil_media_sosials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `media_sosial_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profil_id` bigint(20) UNSIGNED DEFAULT NULL,
  `tautan` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pivot_profil_media_sosials`
--

INSERT INTO `pivot_profil_media_sosials` (`id`, `media_sosial_id`, `profil_id`, `tautan`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'https://www.facebook.com/razenteknologiindonesia/?locale=ms_MY', '2023-09-06 20:23:27', '2023-09-06 20:23:27'),
(2, 2, 1, 'https://www.linkedin.com/company/razen/about/', '2023-09-06 20:23:27', '2023-09-06 20:23:27'),
(3, 5, 1, 'https://www.instagram.com/razen_teknologi/', '2023-09-06 20:23:27', '2023-09-06 20:23:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk_lains`
--

CREATE TABLE `produk_lains` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `produk_lains`
--

INSERT INTO `produk_lains` (`id`, `nama`, `deskripsi`, `harga`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Google Ads', 'Kembangkan bisnis Anda dengan Google Ads', '3000000', '65026d46cf7fd-230914.png', '2023-09-13 19:17:42', '2023-09-13 19:18:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profils`
--

CREATE TABLE `profils` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci,
  `logo_kecil` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `svg_ikon` longtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `profils`
--

INSERT INTO `profils` (`id`, `nama`, `pt`, `no_hp`, `email`, `logo`, `alamat`, `logo_kecil`, `deskripsi`, `created_at`, `updated_at`, `svg_ikon`) VALUES
(1, 'Razen Teknologi', 'PT Razen Teknologi Indonesia', '082299449494', 'hello@razen.co.id', '642b9aa063e73-230404.png', 'Yogyakarta', '6453110958d3f-230504.png', 'Razen Blog', NULL, '2023-09-06 20:31:25', '<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"158\" height=\"167\" xml:space=\"preserve\" version=\"1.1\" viewBox=\"0 0 158 167\">\r\n    <image width=\"158\" height=\"167\" xlink:href=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHkAAACACAYAAAAvZ8aYAAAAAXNSR0IArs4c6QAADSZJREFUeF7tnXmQFNUdxz+/ntlVQdDgzuwh4JHE0sRKtMpbkxBjKoqCpsxKNIiwuyACgUKiSTyJRwxGgxQBzLKzUkYtr6RiUiklajwjeFsKWlZUFDn2AFSIXLvTv9SbxQR0d6e7p2emZ/f1X1u17/d7730//Xvz7hbqW1Zin9JTQFCQd0i7E7mjur23Cgj1rVp6Nez3JVaEZ3GdiTQn3s6mhoWcTaFo/v8FkMmkkq96KZ6F7EWlKKUR1qJ6OqmqFV6LZSF7Var46UwT/SKONtBY9Yaf4ljIftQqXlpFZBnIdJoSL/sthoXsV7FipBc+QPUsP0307sW0kIsBzXueZuTzBumOi1gy9DXvZnumtJCDKpd/O/Mb/BykZ9BU47uJtpGcf0Bh5PA2rnMBzRWvIpLTXIaN5DBwhOojw/NdcGq9joOzZW8hZ1Oo4P/XF8DxPNHhpXgWsheVCpdmBaITaap8HnJrou1vcuGgec9JtY2YnsXi6he9G3lLaSPZm075TSW8gpu+mOaal/KRkYWcD1V9+ZRXcXUad1Q+58vMR2IL2YdYoSdV2ojFzmJxRehNtP1NDp1WEIe6gli8gcaK54NY+7GxkexHrdDS6su4Mj2fTbSN5NBgBXK0mrSOYUm4w6TeSmIjORCnwEarcNwJLK5+KrCHAIYWcgDRApq8hpj14OQzAe0Dm1nIgaXzYSi8i0odwxLPMltcH5ahJLWQQ5GxVyetqHs+zdVP5D+r7nOwkPOr/OuITCtGE2171/kFu8u7vIWkp9BU9VSYiw1Bim4jOYhqWW10ExI7l6bEk1mTFiCBhRy+yG8i7lSaqiMB2FTPQg4X8grUmU5zomidrO6qYyGHB3kjxMaQqng8PJfheLKQw9FxFY5MZXHy4XDchevFQs5VT2ElxGfSdMCjubrKl72FnIuy5vCZSx3Dk48VYybLa9EjAll3oLIaoeBTfl6F6ibdPqC3I/L3HHzkbroztpE7K9b25igqkN/E1Vpisi33WhfIg3I84iwsUG49Z6OaIlV5WQlA5lVi6VNorNladNG8FmBy+wg63OIPlYQFNFVOs5C9gvOTzkL2o1YmrY1k35LtMrCRHFQ5D3Y2kj2ItGcSG8m+JbORHFQy73Y2kr1rtSuljWTfktlIDiqZdzsbyd61spHsW6s9DWzvOkcBezO3kexb3NL6Tb6wZSDlch1wqe+ahm1gIzlkRQ3cveLHo+6vUD0ZQULOwb87C9m/Zt1a/PTfe7F1oFmQGIfKucD+IXnO3Y2FnLuGXPLxl+jYcSWq54EMC8FjuC4s5KB6qnBh6wDKY6PQ9AJEhgT1lHc7CzmAxDN1HzZvOBXcBtAzQPYK4KVwJhayD61nq8OH7d9EdBbKaUClD+viJbWQfWjfsH4WGrsGdLAPq+IntZCzMJiwPoET/x64vwS+UXxiAUpgIfcgmmma17WdhssUVEaA7hdA3miYWMjdcJi0bjhpZw44Z4LumzkqVMqPhbyLnonc1RuqEEaCeyVwcClz3aPsFjJQ1z4Icc9BGY8wAnD6DGBTkX4PeXLb0XTqHFSO29VrLu2mubu3s19CVhUa1g9HncmIzASiPZmRa7PS7yA3bByK7hwNUgdydJ9rmvt1JNdqjEFto3FkBuqeCFKea4CUjH2fj+Ta+2Pse3INEp+H8MOSARNmQfs05Pq2r6DueYhMBWrC1K2kfPVJyPWfDEG3m+HQGOAooP80zd2/fb8jVTmrtxczIkdXPZ6FmrjmKNLxhYgcC8RLKuLCLqzqTmKx29ievo4/Vn1a2pBrtZzBHx2GdNajOhnYO2y9SszfJ6BPojKH5uRyLxfBRTuSp7RVsV0vRmQM6OElP8+c09ukOxF5CpEmPt32KPcc9JFXd9GEfK2W82FbLcINqNYg/WhI1C05/QjVq4kPvI/GwRu8wv0sndDQcp9fo9DTq7zP0OTVbF4T4+O9j8DR2V1bb/r17665P2Ujjv6NDudKliRbguoejblcM94ddNKRSNk44EIgEbRCfcRuO6J/xXWWsKXtcR44cmcu9So+ZLOnedugWaiMR+QQVPtvr1lRRF8BvRYGLCO136Zc4P6/uQ7DSxAf43Vv4htPwnUXIJlOVX9+TNO8GWU+8bJbaRzySZhiFD6STeR+ut+xiDsBlR8hlNbGuTDVN77MB8DM764TW0hj4pWw3Rt/hYU8fv3BOHIpwmjgoEJnnw8BA/vsapofRmUefLSM5sO3BPaVxbBAkNUM1cYgMh+lIl+VKRm/ylpwL6W5+v5ClDm/kKe07cs2dwQxZqJyaiEqFOE8XFRXE3MeQt15NFWtKlRZ8wPZ7M6Y1HYirl4C8v2SOY2QN9VlC+i9qNzJ8JXLmf3dzrxl1Y3j8CFP2rQf6Q6zWb0BMAfFws+jkArlnJeuoEwms33ryyw5ZHvO7gI4CAmAChNaKog738bV60C+FqAsfdPEYSoHJm8v5lXJuUM2e5o/2DAScesQzrTru597V0U+IS1nc0eioN9n3L0UuUGe2H4YbvpmlFNAhkTieoVItgfyBDH5CY2J9cUoXgDIKkxuTdDp1OLqNQjJYhS8tPI0y4Rcy9DKW5gtBe10+Z8MGbfmAMrLzMHshq7o1VhpiV3M0qq5mX8MTVXLC10K75Fc33oyIr9A+VZJnwIstMJ75CcvZeYLmhN5m93qrnq9QzadqjVtCVy5AlFzO3rfOkdUDOAOczkw+bNC9rZ7hlzXXoPjno0yBfi6He+G9ka0gzOBYRUPFwr0FyFPWjeAtHMOyMWgx4H0941zodHNOMosTPBP1BlHc2JduM6797Yn5Ent1aTTfwA5HSgrRAH6ZR4GtKNX01R1YyHqL5itN0NGHEqa81AuL7mLUQqhUl7yULPF54xCfJ1VqGu9FNHzQcxphP679SYvILM4VX0D5ByaK9/LZ/Zmndd8cMv+7uZT5Z59p0EXMbjjcuYOy9uHz6Ky77o4EkchV7P9B3c8zdV5+2KrhRwF0LCM8r3OZNH+nk9F+Cm2hexHrXylNb1tuItU8iJEzN+hPv0DctfY9D+7ZuwGhqpgWM66yjiNYeGvPfcHyJuBpbikiEs1rv4eiCZodCWOM5bFydfCeneMnz4OWV/Akd9Qvs/TLBi8cdedXguAsRGdpjXLkCkGJGcwX3aEBbqvQt6Ew41Icj6N0rGHWA0tJ6ByD3BIWCKG60ddNP4DmiseC8tvX4JsOiwtiPwDZR6pxGvdHtCePdth7ZTLSOtN0d3Joh9mLnYNaZKkr0A2zdxDpN1mytc+SuMxe0bv50Oi6ypGs7HdzNFH9bmL7fGp3H2A6VPk9JQ+ZJUPibnT2LfjUeYO3e7leoWMYuYWgx3mBCHVOSmYL2Nlc6a3nUre5blOPZSlVCGbpnk18ACx9Bwaa3yfviezIaL9ElRvBgbki1WOfpdT5p7P7dXv5+KnBCHrBlQexJV7KF+9PGvT3Js6Zmm1M92IiNlK7H0rVC6K+7HtOhS3gFTl9FyiudQg/wvRa3Dc5TTWbPWjV48tWd3GE5COJ6L71RjdgcgFNFX+OWh9SwCyGQLpGmLOAmpWzMvLOaKGNnPR+ezI3nIgvAd6WtBDctGGLLIW9B6cdDON1W/n0mT1GgWTtIx0+59ARwWNljzbdSK6iHLnChYmzfSsryeakBWztvoAMZnLxzve5oH8rbX+Ty2z5dgsEkT30wUbcBjL4sqlvghHcFrTjHffx5HpHJhYWqjdjBnRzHXKg9uuAcyJzGjub1PeYEv7MX5vA4pGJAuduLyF6n3svWMhi7zfNuf3re41/bgNB1KWfhA4IVS/oTrTeQzY8nPmf9Xz3HY0IMM7uM4YVq14nScLe0D7C/pPWHsSTvwRYFCobMJyllkylQk0Jc3L6OmJCuRofQm9vmUGyG2eFCxKInmGWHwsjUPMhFDWx0LuTqLJW5J0bL0r82HOKHzt/PNl7Pp5u4Hhyeu99Fss5O4gZ75I0zISnFSE7ztpR3S0l1OSFnJPjd2kl8roHH4LotOztofFS/AeA+JHM7/3lSoLuTdAmUtuOpeBHlE8jllzvoUBm6/qrbdtIWfTcML67+DE7gWtypa0KP8X1qLSQCqxtKcZQQs5G5nMlGfbVcAVET1GZJZdlxIr+3FPF69ayNkgm/9Pav0yae4GjveSvChplFmkknO727dtIXslUr++FhwDOppTnrCFmIykMfnsF0dc9a2h79j3qttu6aI1GdJdBWpXlDMo+dto97blaVTO//zhdhvJvt5Ic9tv28uA+dhnFJ8OhOt5582bdp8etpD9oqpvGQViJkmi+Z0M4V00dgGpihc+q5qF7Bdy13beOaY7BkTzHjPhEfbZfM5nY2cL2S/kTG973XDc2PMo0Rw7g4vK1TQnf22KayEHgWxs6lrPRbgzutt5dROOjGJx5TILOShk1Ny3chsiUb3Eznyh5i8IU4T6lpWB6xmaobxFOjmWJVKUS78DV6Ou9VBEbwUOC+wjv4bbzFVS/wUDZpHG15PljgAAAABJRU5ErkJggg==\"/>\r\n  </svg>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `relawans`
--

CREATE TABLE `relawans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `provinsi_id` bigint(20) UNSIGNED DEFAULT NULL,
  `kabupaten_kota_id` bigint(20) UNSIGNED DEFAULT NULL,
  `kecamatan_id` bigint(20) UNSIGNED DEFAULT NULL,
  `kelurahan_id` bigint(20) UNSIGNED DEFAULT NULL,
  `koordinator_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_kelamin` enum('L','P') COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` longtext COLLATE utf8mb4_unicode_ci,
  `rt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rw` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status_undangan` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `relawans`
--

INSERT INTO `relawans` (`id`, `provinsi_id`, `kabupaten_kota_id`, `kecamatan_id`, `kelurahan_id`, `koordinator_id`, `nama`, `email`, `no_hp`, `jenis_kelamin`, `alamat`, `rt`, `rw`, `created_at`, `updated_at`, `status_undangan`, `foto`) VALUES
(1, 13, 1, 1, 1, 4, 'Andi', 'andi@gmail.com', '123456789012', 'L', 'Jln. Andi', '001', '001', '2023-08-30 20:34:35', '2023-08-31 23:55:35', '0', '64f00a4b5e9cd-230831.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `responden_kunjungans`
--

CREATE TABLE `responden_kunjungans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kunjungan_relawan_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `responden_kunjungans`
--

INSERT INTO `responden_kunjungans` (`id`, `kunjungan_relawan_id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 2, 'Andi', '2023-09-01 20:48:07', '2023-09-01 20:48:07'),
(2, 2, 'Brigita', '2023-09-01 20:48:07', '2023-09-01 20:48:07'),
(3, 2, 'Cika', '2023-09-01 20:48:07', '2023-09-01 20:48:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `saksis`
--

CREATE TABLE `saksis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `koordinator_id` bigint(20) UNSIGNED DEFAULT NULL,
  `jenis_survey_id` bigint(20) UNSIGNED DEFAULT NULL,
  `tgl` datetime DEFAULT NULL,
  `provinsi_id` bigint(20) UNSIGNED DEFAULT NULL,
  `kabupaten_kota_id` bigint(20) UNSIGNED DEFAULT NULL,
  `kecamatan_id` bigint(20) UNSIGNED DEFAULT NULL,
  `kelurahan_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_kelamin` enum('L','P') COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` longtext COLLATE utf8mb4_unicode_ci,
  `rt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rw` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `saksis`
--

INSERT INTO `saksis` (`id`, `koordinator_id`, `jenis_survey_id`, `tgl`, `provinsi_id`, `kabupaten_kota_id`, `kecamatan_id`, `kelurahan_id`, `nama`, `email`, `no_hp`, `jenis_kelamin`, `alamat`, `rt`, `rw`, `created_at`, `updated_at`, `foto`) VALUES
(2, 4, NULL, NULL, 13, 1, 1, 1, 'Anas', 'anas@email.com', '123456789012', 'L', 'Jln. Anas', '001', '002', '2023-09-02 19:58:47', '2023-09-02 20:00:06', '64f3f667db262-230903.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimonis`
--

CREATE TABLE `testimonis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `testimonis`
--

INSERT INTO `testimonis` (`id`, `nama`, `deskripsi`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'William Smith', 'The theories largely focus on the development of agriculture, and the population and organizational pressure that followed and resulted in state formation. One of the most prominent theories of early and primary state formation is the hydraulic hypothesis', '64fc54be35966-230909.png', '2023-09-09 04:19:26', '2023-09-09 04:19:42'),
(2, 'William Smith', 'The theories largely focus on the development of agriculture, and the population and organizational pressure that followed and resulted in state formation. One of the most prominent theories of early and primary state formation is the hydraulic hypothesis', '65044f9206753-230915.jpg', '2023-09-15 05:35:30', '2023-09-15 05:35:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tims`
--

CREATE TABLE `tims` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tims`
--

INSERT INTO `tims` (`id`, `nama`, `jabatan`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Pier Goodman', 'MANAGING DIRECTOR', '64fc61a7c27bc-230909.png', '2023-09-09 05:14:31', '2023-09-09 05:14:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color_layout` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nav_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `placement` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `behaviour` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `layout` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `radius` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `color_layout`, `nav_color`, `placement`, `behaviour`, `layout`, `radius`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Razen Teknologi', 'razen_politik@razen.co.id', NULL, '$2y$10$vUlaHLsUBySNV17OB4bA0OgYjwnU1ThdLwFcLlbghO900K8Jz.1f.', 'dark-blue', 'default', 'vertical', 'pinned', 'fluid', 'standard', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun_koordinators`
--
ALTER TABLE `akun_koordinators`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `akun_koordinators_email_unique` (`email`),
  ADD KEY `akun_koordinators_koordinator_id_foreign` (`koordinator_id`);

--
-- Indeks untuk tabel `akun_penggunas`
--
ALTER TABLE `akun_penggunas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `akun_penggunas_email_unique` (`email`),
  ADD KEY `akun_penggunas_pengguna_id_foreign` (`pengguna_id`);

--
-- Indeks untuk tabel `akun_relawans`
--
ALTER TABLE `akun_relawans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `akun_relawans_email_unique` (`email`),
  ADD KEY `akun_relawans_relawan_id_foreign` (`relawan_id`);

--
-- Indeks untuk tabel `akun_saksis`
--
ALTER TABLE `akun_saksis`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `akun_saksis_email_unique` (`email`),
  ADD KEY `akun_saksis_saksi_id_foreign` (`saksi_id`);

--
-- Indeks untuk tabel `dpt_manuals`
--
ALTER TABLE `dpt_manuals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dpt_manuals_provinsi_id_foreign` (`provinsi_id`),
  ADD KEY `dpt_manuals_kabupaten_kota_id_foreign` (`kabupaten_kota_id`),
  ADD KEY `dpt_manuals_kecamatan_id_foreign` (`kecamatan_id`),
  ADD KEY `dpt_manuals_kelurahan_id_foreign` (`kelurahan_id`),
  ADD KEY `dpt_manuals_pengguna_id_foreign` (`pengguna_id`),
  ADD KEY `dpt_manuals_dapil_id_foreign` (`dapil_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `koordinators`
--
ALTER TABLE `koordinators`
  ADD PRIMARY KEY (`id`),
  ADD KEY `koordinators_provinsi_id_foreign` (`provinsi_id`),
  ADD KEY `koordinators_kabupaten_kota_id_foreign` (`kabupaten_kota_id`),
  ADD KEY `koordinators_kecamatan_id_foreign` (`kecamatan_id`),
  ADD KEY `koordinators_kelurahan_id_foreign` (`kelurahan_id`),
  ADD KEY `koordinators_pengguna_id_foreign` (`pengguna_id`);

--
-- Indeks untuk tabel `kunjungan_relawans`
--
ALTER TABLE `kunjungan_relawans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kunjungan_relawans_relawan_id_foreign` (`relawan_id`),
  ADD KEY `kunjungan_relawans_jenis_survey_id_foreign` (`jenis_survey_id`),
  ADD KEY `kunjungan_relawans_provinsi_id_foreign` (`provinsi_id`),
  ADD KEY `kunjungan_relawans_kabupaten_kota_id_foreign` (`kabupaten_kota_id`),
  ADD KEY `kunjungan_relawans_kecamatan_id_foreign` (`kecamatan_id`),
  ADD KEY `kunjungan_relawans_kelurahan_id_foreign` (`kelurahan_id`);

--
-- Indeks untuk tabel `landing_page_artikels`
--
ALTER TABLE `landing_page_artikels`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `landing_page_bantuans`
--
ALTER TABLE `landing_page_bantuans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `landing_page_berandas`
--
ALTER TABLE `landing_page_berandas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `landing_page_footers`
--
ALTER TABLE `landing_page_footers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `landing_page_hargas`
--
ALTER TABLE `landing_page_hargas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `landing_page_produk_lains`
--
ALTER TABLE `landing_page_produk_lains`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `landing_page_tentang_kamis`
--
ALTER TABLE `landing_page_tentang_kamis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `landing_page_testimonis`
--
ALTER TABLE `landing_page_testimonis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `laporan_isus`
--
ALTER TABLE `laporan_isus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `laporan_isus_provinsi_id_foreign` (`provinsi_id`),
  ADD KEY `laporan_isus_kabupaten_kota_id_foreign` (`kabupaten_kota_id`),
  ADD KEY `laporan_isus_kecamatan_id_foreign` (`kecamatan_id`),
  ADD KEY `laporan_isus_kelurahan_id_foreign` (`kelurahan_id`),
  ADD KEY `laporan_isus_pengguna_id_foreign` (`pengguna_id`),
  ADD KEY `laporan_isus_jenis_isu_id_foreign` (`jenis_isu_id`);

--
-- Indeks untuk tabel `logistiks`
--
ALTER TABLE `logistiks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `logistiks_pengguna_id_foreign` (`pengguna_id`);

--
-- Indeks untuk tabel `master_dapils`
--
ALTER TABLE `master_dapils`
  ADD PRIMARY KEY (`id`),
  ADD KEY `master_dapils_jabatan_pilihan_id_foreign` (`jabatan_pilihan_id`),
  ADD KEY `master_dapils_provinsi_id_foreign` (`provinsi_id`),
  ADD KEY `master_dapils_kabupaten_kota_id_foreign` (`kabupaten_kota_id`);

--
-- Indeks untuk tabel `master_dpts`
--
ALTER TABLE `master_dpts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `master_dpts_provinsi_id_foreign` (`provinsi_id`),
  ADD KEY `master_dpts_kabupaten_kota_id_foreign` (`kabupaten_kota_id`),
  ADD KEY `master_dpts_kecamatan_id_foreign` (`kecamatan_id`),
  ADD KEY `master_dpts_kelurahan_id_foreign` (`kelurahan_id`);

--
-- Indeks untuk tabel `master_fiturs`
--
ALTER TABLE `master_fiturs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `master_fiturs_role_id_foreign` (`role_id`);

--
-- Indeks untuk tabel `master_jabatan_pilihans`
--
ALTER TABLE `master_jabatan_pilihans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `master_jenis_isus`
--
ALTER TABLE `master_jenis_isus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `master_jenis_surveys`
--
ALTER TABLE `master_jenis_surveys`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `master_kabupaten_kotas`
--
ALTER TABLE `master_kabupaten_kotas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `master_kabupaten_kotas_provinsi_id_foreign` (`provinsi_id`);

--
-- Indeks untuk tabel `master_kecamatans`
--
ALTER TABLE `master_kecamatans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `master_kecamatans_kabupaten_kota_id_foreign` (`kabupaten_kota_id`);

--
-- Indeks untuk tabel `master_kelurahans`
--
ALTER TABLE `master_kelurahans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `master_kelurahans_kecamatan_id_foreign` (`kecamatan_id`);

--
-- Indeks untuk tabel `master_media_sosials`
--
ALTER TABLE `master_media_sosials`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `master_pakets`
--
ALTER TABLE `master_pakets`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `master_provinsis`
--
ALTER TABLE `master_provinsis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `master_roles`
--
ALTER TABLE `master_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `master_tps`
--
ALTER TABLE `master_tps`
  ADD PRIMARY KEY (`id`),
  ADD KEY `master_tps_provinsi_id_foreign` (`provinsi_id`),
  ADD KEY `master_tps_kabupaten_kota_id_foreign` (`kabupaten_kota_id`),
  ADD KEY `master_tps_kecamatan_id_foreign` (`kecamatan_id`),
  ADD KEY `master_tps_kelurahan_id_foreign` (`kelurahan_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pemesanan_logistiks`
--
ALTER TABLE `pemesanan_logistiks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pemesanan_logistiks_logistik_id_foreign` (`logistik_id`);

--
-- Indeks untuk tabel `pemilus`
--
ALTER TABLE `pemilus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penerimaan_logistiks`
--
ALTER TABLE `penerimaan_logistiks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `penerimaan_logistiks_logistik_id_foreign` (`logistik_id`);

--
-- Indeks untuk tabel `pengeluaran_logistiks`
--
ALTER TABLE `pengeluaran_logistiks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pengeluaran_logistiks_logistik_id_foreign` (`logistik_id`);

--
-- Indeks untuk tabel `penggunas`
--
ALTER TABLE `penggunas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `penggunas_provinsi_id_foreign` (`provinsi_id`),
  ADD KEY `penggunas_kabupaten_kota_id_foreign` (`kabupaten_kota_id`),
  ADD KEY `penggunas_kecamatan_id_foreign` (`kecamatan_id`),
  ADD KEY `penggunas_kelurahan_id_foreign` (`kelurahan_id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `pivot_jabatan_pilihan_penggunas`
--
ALTER TABLE `pivot_jabatan_pilihan_penggunas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pivot_jabatan_pilihan_penggunas_pengguna_id_foreign` (`pengguna_id`),
  ADD KEY `pivot_jabatan_pilihan_penggunas_jabatan_pilihan_id_foreign` (`jabatan_pilihan_id`);

--
-- Indeks untuk tabel `pivot_kecamatan_master_dapils`
--
ALTER TABLE `pivot_kecamatan_master_dapils`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pivot_kecamatan_master_dapils_dapil_id_foreign` (`dapil_id`),
  ADD KEY `pivot_kecamatan_master_dapils_kecamatan_id_foreign` (`kecamatan_id`);

--
-- Indeks untuk tabel `pivot_pakets`
--
ALTER TABLE `pivot_pakets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pivot_pakets_paket_id_foreign` (`paket_id`),
  ADD KEY `pivot_pakets_jabatan_pilihan_id_foreign` (`jabatan_pilihan_id`);

--
-- Indeks untuk tabel `pivot_paket_fiturs`
--
ALTER TABLE `pivot_paket_fiturs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pivot_paket_fiturs_pivot_paket_id_foreign` (`pivot_paket_id`),
  ADD KEY `pivot_paket_fiturs_fitur_id_foreign` (`fitur_id`);

--
-- Indeks untuk tabel `pivot_profil_media_sosials`
--
ALTER TABLE `pivot_profil_media_sosials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pivot_profil_media_sosials_media_sosial_id_foreign` (`media_sosial_id`),
  ADD KEY `pivot_profil_media_sosials_profil_id_foreign` (`profil_id`);

--
-- Indeks untuk tabel `produk_lains`
--
ALTER TABLE `produk_lains`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `profils`
--
ALTER TABLE `profils`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `relawans`
--
ALTER TABLE `relawans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `relawans_provinsi_id_foreign` (`provinsi_id`),
  ADD KEY `relawans_kabupaten_kota_id_foreign` (`kabupaten_kota_id`),
  ADD KEY `relawans_kecamatan_id_foreign` (`kecamatan_id`),
  ADD KEY `relawans_kelurahan_id_foreign` (`kelurahan_id`),
  ADD KEY `relawans_koordinator_id_foreign` (`koordinator_id`);

--
-- Indeks untuk tabel `responden_kunjungans`
--
ALTER TABLE `responden_kunjungans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `responden_kunjungans_kunjungan_relawan_id_foreign` (`kunjungan_relawan_id`);

--
-- Indeks untuk tabel `saksis`
--
ALTER TABLE `saksis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `saksis_koordinator_id_foreign` (`koordinator_id`),
  ADD KEY `saksis_jenis_survey_id_foreign` (`jenis_survey_id`),
  ADD KEY `saksis_provinsi_id_foreign` (`provinsi_id`),
  ADD KEY `saksis_kabupaten_kota_id_foreign` (`kabupaten_kota_id`),
  ADD KEY `saksis_kecamatan_id_foreign` (`kecamatan_id`),
  ADD KEY `saksis_kelurahan_id_foreign` (`kelurahan_id`);

--
-- Indeks untuk tabel `testimonis`
--
ALTER TABLE `testimonis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tims`
--
ALTER TABLE `tims`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun_koordinators`
--
ALTER TABLE `akun_koordinators`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `akun_penggunas`
--
ALTER TABLE `akun_penggunas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `akun_relawans`
--
ALTER TABLE `akun_relawans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `akun_saksis`
--
ALTER TABLE `akun_saksis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `dpt_manuals`
--
ALTER TABLE `dpt_manuals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `koordinators`
--
ALTER TABLE `koordinators`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kunjungan_relawans`
--
ALTER TABLE `kunjungan_relawans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `landing_page_artikels`
--
ALTER TABLE `landing_page_artikels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `landing_page_bantuans`
--
ALTER TABLE `landing_page_bantuans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `landing_page_berandas`
--
ALTER TABLE `landing_page_berandas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `landing_page_footers`
--
ALTER TABLE `landing_page_footers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `landing_page_hargas`
--
ALTER TABLE `landing_page_hargas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `landing_page_produk_lains`
--
ALTER TABLE `landing_page_produk_lains`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `landing_page_tentang_kamis`
--
ALTER TABLE `landing_page_tentang_kamis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `landing_page_testimonis`
--
ALTER TABLE `landing_page_testimonis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `laporan_isus`
--
ALTER TABLE `laporan_isus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `logistiks`
--
ALTER TABLE `logistiks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `master_dapils`
--
ALTER TABLE `master_dapils`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `master_dpts`
--
ALTER TABLE `master_dpts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT untuk tabel `master_fiturs`
--
ALTER TABLE `master_fiturs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `master_jabatan_pilihans`
--
ALTER TABLE `master_jabatan_pilihans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `master_jenis_isus`
--
ALTER TABLE `master_jenis_isus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `master_jenis_surveys`
--
ALTER TABLE `master_jenis_surveys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `master_kabupaten_kotas`
--
ALTER TABLE `master_kabupaten_kotas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `master_kecamatans`
--
ALTER TABLE `master_kecamatans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `master_kelurahans`
--
ALTER TABLE `master_kelurahans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `master_media_sosials`
--
ALTER TABLE `master_media_sosials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `master_pakets`
--
ALTER TABLE `master_pakets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `master_provinsis`
--
ALTER TABLE `master_provinsis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `master_roles`
--
ALTER TABLE `master_roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `master_tps`
--
ALTER TABLE `master_tps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT untuk tabel `pemesanan_logistiks`
--
ALTER TABLE `pemesanan_logistiks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pemilus`
--
ALTER TABLE `pemilus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `penerimaan_logistiks`
--
ALTER TABLE `penerimaan_logistiks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pengeluaran_logistiks`
--
ALTER TABLE `pengeluaran_logistiks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `penggunas`
--
ALTER TABLE `penggunas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pivot_jabatan_pilihan_penggunas`
--
ALTER TABLE `pivot_jabatan_pilihan_penggunas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pivot_kecamatan_master_dapils`
--
ALTER TABLE `pivot_kecamatan_master_dapils`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pivot_pakets`
--
ALTER TABLE `pivot_pakets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pivot_paket_fiturs`
--
ALTER TABLE `pivot_paket_fiturs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `pivot_profil_media_sosials`
--
ALTER TABLE `pivot_profil_media_sosials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `produk_lains`
--
ALTER TABLE `produk_lains`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `profils`
--
ALTER TABLE `profils`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `relawans`
--
ALTER TABLE `relawans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `responden_kunjungans`
--
ALTER TABLE `responden_kunjungans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `saksis`
--
ALTER TABLE `saksis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `testimonis`
--
ALTER TABLE `testimonis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tims`
--
ALTER TABLE `tims`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `akun_koordinators`
--
ALTER TABLE `akun_koordinators`
  ADD CONSTRAINT `akun_koordinators_koordinator_id_foreign` FOREIGN KEY (`koordinator_id`) REFERENCES `koordinators` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `akun_penggunas`
--
ALTER TABLE `akun_penggunas`
  ADD CONSTRAINT `akun_penggunas_pengguna_id_foreign` FOREIGN KEY (`pengguna_id`) REFERENCES `penggunas` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `akun_relawans`
--
ALTER TABLE `akun_relawans`
  ADD CONSTRAINT `akun_relawans_relawan_id_foreign` FOREIGN KEY (`relawan_id`) REFERENCES `relawans` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `akun_saksis`
--
ALTER TABLE `akun_saksis`
  ADD CONSTRAINT `akun_saksis_saksi_id_foreign` FOREIGN KEY (`saksi_id`) REFERENCES `saksis` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `dpt_manuals`
--
ALTER TABLE `dpt_manuals`
  ADD CONSTRAINT `dpt_manuals_dapil_id_foreign` FOREIGN KEY (`dapil_id`) REFERENCES `master_dapils` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `dpt_manuals_kabupaten_kota_id_foreign` FOREIGN KEY (`kabupaten_kota_id`) REFERENCES `master_kabupaten_kotas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `dpt_manuals_kecamatan_id_foreign` FOREIGN KEY (`kecamatan_id`) REFERENCES `master_kecamatans` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `dpt_manuals_kelurahan_id_foreign` FOREIGN KEY (`kelurahan_id`) REFERENCES `master_kelurahans` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `dpt_manuals_pengguna_id_foreign` FOREIGN KEY (`pengguna_id`) REFERENCES `penggunas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `dpt_manuals_provinsi_id_foreign` FOREIGN KEY (`provinsi_id`) REFERENCES `master_provinsis` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `koordinators`
--
ALTER TABLE `koordinators`
  ADD CONSTRAINT `koordinators_kabupaten_kota_id_foreign` FOREIGN KEY (`kabupaten_kota_id`) REFERENCES `master_kabupaten_kotas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `koordinators_kecamatan_id_foreign` FOREIGN KEY (`kecamatan_id`) REFERENCES `master_kecamatans` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `koordinators_kelurahan_id_foreign` FOREIGN KEY (`kelurahan_id`) REFERENCES `master_kelurahans` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `koordinators_pengguna_id_foreign` FOREIGN KEY (`pengguna_id`) REFERENCES `penggunas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `koordinators_provinsi_id_foreign` FOREIGN KEY (`provinsi_id`) REFERENCES `master_provinsis` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kunjungan_relawans`
--
ALTER TABLE `kunjungan_relawans`
  ADD CONSTRAINT `kunjungan_relawans_jenis_survey_id_foreign` FOREIGN KEY (`jenis_survey_id`) REFERENCES `master_jenis_surveys` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `kunjungan_relawans_kabupaten_kota_id_foreign` FOREIGN KEY (`kabupaten_kota_id`) REFERENCES `master_kabupaten_kotas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `kunjungan_relawans_kecamatan_id_foreign` FOREIGN KEY (`kecamatan_id`) REFERENCES `master_kecamatans` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `kunjungan_relawans_kelurahan_id_foreign` FOREIGN KEY (`kelurahan_id`) REFERENCES `master_kelurahans` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `kunjungan_relawans_provinsi_id_foreign` FOREIGN KEY (`provinsi_id`) REFERENCES `master_provinsis` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `kunjungan_relawans_relawan_id_foreign` FOREIGN KEY (`relawan_id`) REFERENCES `relawans` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `laporan_isus`
--
ALTER TABLE `laporan_isus`
  ADD CONSTRAINT `laporan_isus_jenis_isu_id_foreign` FOREIGN KEY (`jenis_isu_id`) REFERENCES `master_jenis_isus` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `laporan_isus_kabupaten_kota_id_foreign` FOREIGN KEY (`kabupaten_kota_id`) REFERENCES `master_kabupaten_kotas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `laporan_isus_kecamatan_id_foreign` FOREIGN KEY (`kecamatan_id`) REFERENCES `master_kecamatans` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `laporan_isus_kelurahan_id_foreign` FOREIGN KEY (`kelurahan_id`) REFERENCES `master_kelurahans` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `laporan_isus_pengguna_id_foreign` FOREIGN KEY (`pengguna_id`) REFERENCES `penggunas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `laporan_isus_provinsi_id_foreign` FOREIGN KEY (`provinsi_id`) REFERENCES `master_provinsis` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `logistiks`
--
ALTER TABLE `logistiks`
  ADD CONSTRAINT `logistiks_pengguna_id_foreign` FOREIGN KEY (`pengguna_id`) REFERENCES `penggunas` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `master_dapils`
--
ALTER TABLE `master_dapils`
  ADD CONSTRAINT `master_dapils_jabatan_pilihan_id_foreign` FOREIGN KEY (`jabatan_pilihan_id`) REFERENCES `master_dapils` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `master_dapils_kabupaten_kota_id_foreign` FOREIGN KEY (`kabupaten_kota_id`) REFERENCES `master_kabupaten_kotas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `master_dapils_provinsi_id_foreign` FOREIGN KEY (`provinsi_id`) REFERENCES `master_provinsis` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `master_dpts`
--
ALTER TABLE `master_dpts`
  ADD CONSTRAINT `master_dpts_kabupaten_kota_id_foreign` FOREIGN KEY (`kabupaten_kota_id`) REFERENCES `master_kabupaten_kotas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `master_dpts_kecamatan_id_foreign` FOREIGN KEY (`kecamatan_id`) REFERENCES `master_kecamatans` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `master_dpts_kelurahan_id_foreign` FOREIGN KEY (`kelurahan_id`) REFERENCES `master_kelurahans` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `master_dpts_provinsi_id_foreign` FOREIGN KEY (`provinsi_id`) REFERENCES `master_provinsis` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `master_fiturs`
--
ALTER TABLE `master_fiturs`
  ADD CONSTRAINT `master_fiturs_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `master_roles` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `master_kabupaten_kotas`
--
ALTER TABLE `master_kabupaten_kotas`
  ADD CONSTRAINT `master_kabupaten_kotas_provinsi_id_foreign` FOREIGN KEY (`provinsi_id`) REFERENCES `master_provinsis` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `master_kecamatans`
--
ALTER TABLE `master_kecamatans`
  ADD CONSTRAINT `master_kecamatans_kabupaten_kota_id_foreign` FOREIGN KEY (`kabupaten_kota_id`) REFERENCES `master_kabupaten_kotas` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `master_kelurahans`
--
ALTER TABLE `master_kelurahans`
  ADD CONSTRAINT `master_kelurahans_kecamatan_id_foreign` FOREIGN KEY (`kecamatan_id`) REFERENCES `master_kecamatans` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `master_tps`
--
ALTER TABLE `master_tps`
  ADD CONSTRAINT `master_tps_kabupaten_kota_id_foreign` FOREIGN KEY (`kabupaten_kota_id`) REFERENCES `master_kabupaten_kotas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `master_tps_kecamatan_id_foreign` FOREIGN KEY (`kecamatan_id`) REFERENCES `master_kecamatans` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `master_tps_kelurahan_id_foreign` FOREIGN KEY (`kelurahan_id`) REFERENCES `master_kelurahans` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `master_tps_provinsi_id_foreign` FOREIGN KEY (`provinsi_id`) REFERENCES `master_provinsis` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pemesanan_logistiks`
--
ALTER TABLE `pemesanan_logistiks`
  ADD CONSTRAINT `pemesanan_logistiks_logistik_id_foreign` FOREIGN KEY (`logistik_id`) REFERENCES `logistiks` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `penerimaan_logistiks`
--
ALTER TABLE `penerimaan_logistiks`
  ADD CONSTRAINT `penerimaan_logistiks_logistik_id_foreign` FOREIGN KEY (`logistik_id`) REFERENCES `logistiks` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pengeluaran_logistiks`
--
ALTER TABLE `pengeluaran_logistiks`
  ADD CONSTRAINT `pengeluaran_logistiks_logistik_id_foreign` FOREIGN KEY (`logistik_id`) REFERENCES `logistiks` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `penggunas`
--
ALTER TABLE `penggunas`
  ADD CONSTRAINT `penggunas_kabupaten_kota_id_foreign` FOREIGN KEY (`kabupaten_kota_id`) REFERENCES `master_kabupaten_kotas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `penggunas_kecamatan_id_foreign` FOREIGN KEY (`kecamatan_id`) REFERENCES `master_kecamatans` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `penggunas_kelurahan_id_foreign` FOREIGN KEY (`kelurahan_id`) REFERENCES `master_kelurahans` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `penggunas_provinsi_id_foreign` FOREIGN KEY (`provinsi_id`) REFERENCES `master_provinsis` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pivot_jabatan_pilihan_penggunas`
--
ALTER TABLE `pivot_jabatan_pilihan_penggunas`
  ADD CONSTRAINT `pivot_jabatan_pilihan_penggunas_jabatan_pilihan_id_foreign` FOREIGN KEY (`jabatan_pilihan_id`) REFERENCES `master_jabatan_pilihans` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pivot_jabatan_pilihan_penggunas_pengguna_id_foreign` FOREIGN KEY (`pengguna_id`) REFERENCES `penggunas` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pivot_kecamatan_master_dapils`
--
ALTER TABLE `pivot_kecamatan_master_dapils`
  ADD CONSTRAINT `pivot_kecamatan_master_dapils_dapil_id_foreign` FOREIGN KEY (`dapil_id`) REFERENCES `master_dapils` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pivot_kecamatan_master_dapils_kecamatan_id_foreign` FOREIGN KEY (`kecamatan_id`) REFERENCES `master_kecamatans` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pivot_pakets`
--
ALTER TABLE `pivot_pakets`
  ADD CONSTRAINT `pivot_pakets_jabatan_pilihan_id_foreign` FOREIGN KEY (`jabatan_pilihan_id`) REFERENCES `master_jabatan_pilihans` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pivot_pakets_paket_id_foreign` FOREIGN KEY (`paket_id`) REFERENCES `master_pakets` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pivot_paket_fiturs`
--
ALTER TABLE `pivot_paket_fiturs`
  ADD CONSTRAINT `pivot_paket_fiturs_fitur_id_foreign` FOREIGN KEY (`fitur_id`) REFERENCES `master_fiturs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pivot_paket_fiturs_pivot_paket_id_foreign` FOREIGN KEY (`pivot_paket_id`) REFERENCES `pivot_pakets` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pivot_profil_media_sosials`
--
ALTER TABLE `pivot_profil_media_sosials`
  ADD CONSTRAINT `pivot_profil_media_sosials_media_sosial_id_foreign` FOREIGN KEY (`media_sosial_id`) REFERENCES `master_media_sosials` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pivot_profil_media_sosials_profil_id_foreign` FOREIGN KEY (`profil_id`) REFERENCES `profils` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `relawans`
--
ALTER TABLE `relawans`
  ADD CONSTRAINT `relawans_kabupaten_kota_id_foreign` FOREIGN KEY (`kabupaten_kota_id`) REFERENCES `master_kabupaten_kotas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `relawans_kecamatan_id_foreign` FOREIGN KEY (`kecamatan_id`) REFERENCES `master_kecamatans` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `relawans_kelurahan_id_foreign` FOREIGN KEY (`kelurahan_id`) REFERENCES `master_kelurahans` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `relawans_koordinator_id_foreign` FOREIGN KEY (`koordinator_id`) REFERENCES `koordinators` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `relawans_provinsi_id_foreign` FOREIGN KEY (`provinsi_id`) REFERENCES `master_provinsis` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `responden_kunjungans`
--
ALTER TABLE `responden_kunjungans`
  ADD CONSTRAINT `responden_kunjungans_kunjungan_relawan_id_foreign` FOREIGN KEY (`kunjungan_relawan_id`) REFERENCES `kunjungan_relawans` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `saksis`
--
ALTER TABLE `saksis`
  ADD CONSTRAINT `saksis_jenis_survey_id_foreign` FOREIGN KEY (`jenis_survey_id`) REFERENCES `master_jenis_surveys` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `saksis_kabupaten_kota_id_foreign` FOREIGN KEY (`kabupaten_kota_id`) REFERENCES `master_kabupaten_kotas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `saksis_kecamatan_id_foreign` FOREIGN KEY (`kecamatan_id`) REFERENCES `master_kecamatans` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `saksis_kelurahan_id_foreign` FOREIGN KEY (`kelurahan_id`) REFERENCES `master_kelurahans` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `saksis_koordinator_id_foreign` FOREIGN KEY (`koordinator_id`) REFERENCES `koordinators` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `saksis_provinsi_id_foreign` FOREIGN KEY (`provinsi_id`) REFERENCES `master_provinsis` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
