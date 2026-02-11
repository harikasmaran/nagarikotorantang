-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2025 at 08:11 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hari_k`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` varchar(5000) NOT NULL,
  `gambar` varchar(150) NOT NULL,
  `tanggal` datetime NOT NULL,
  `views` bigint(20) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `isi`, `gambar`, `tanggal`, `views`) VALUES
(1, 'Bupati Annisa Membuka Acara di Jorong Muaro Momong Nagari Sungai Kambut\r\n', 'Dharmasraya, majalahintrust.com – Pemerintah Kabupaten Dharmasraya bersama TNI resmi memulai pelaksanaan kegiatan TNI Manunggal Membangun Desa (TMMD) ke-125 Tahun 2025, Rabu (23/07). Kegiatan yang akan berlangsung hingga 2 Agustus 2025 ini dibuka secara langsung oleh Bupati Dharmasraya, Annisa Suci Ramadhani, di Jorong Muaro Momong, Nagari Sungai Kambut, Kecamatan Pulau Punjung.\r\n\r\nTurut hadir dalam pembukaan tersebut, Wabup Leli Arni, Kasiops Korem 032/Wirabraja Kolonel Inf. Yusuf Saud Tanjung mewakili Danrem 032/Wbr, serta Dandim 0310/SS Letkol Czi Joko Stradona selaku Dansatgas TMMD, Wakapolres Dharmasraya Kompol Armijon, bersama jajaran Forkopimda, OPD, tokoh adat, pemuka masyarakat, dan unsur nagari.\r\n\r\nDalam sambutannya, Bupati Annisa menyampaikan bahwa TMMD merupakan salah satu bentuk kolaborasi nyata antara TNI dan Pemerintah Daerah dalam mempercepat pembangunan desa dan nagari. Ia menekankan bahwa TMMD tidak hanya berbicara soal infrastruktur, tetapi juga menyentuh aspek sosial, pelayanan publik, dan pemberdayaan ekonomi lokal.\r\n\r\nSasaran utama dalam TMMD ke-125 di Dharmasraya adalah pembukaan dan peningkatan jalan sepanjang 4 kilometer dengan lebar 6 meter yang menghubungkan kawasan permukiman warga dengan wilayah perkebunan. Jalan ini diharapkan menjadi akses vital yang mampu menggerakkan perekonomian masyarakat nagari, khususnya dalam distribusi hasil tani dan kebun.\r\n\r\nSelain kegiatan fisik pembangunan jalan, program TMMD juga meliputi pembangunan fasilitas air bersih, rehabilitasi rumah tidak layak huni (RTLH) milik warga, perbaikan MCK, dan pembangunan kembali mushalla sebagai pusat ibadah masyarakat setempat. Sejak hari pertama kegiatan pra-TMMD, personel TNI dan masyarakat telah bekerja bersama, bahu-membahu melaksanakan pengerjaan di lapangan.\r\n\r\nSetelah upacara pembukaan, Bupati bersama rombongan meninjau langsung lokasi rehab rumah warga dan progres pembangunan jalan. Di sela peninjauan, Dandim 0310/SS Letkol Czi Joko Stradona menyampaikan bahwa atas permintaan langsung dari Bupati, kualitas rehab rumah warga yang semula direncanakan hanya semi permanen, kini ditingkatkan menjadi permanen, demi kenyamanan dan keberlanjutan hunian bagi masyarakat.', 'asset/gambar1.jpg', '2025-07-16 14:17:15', 12),
(2, 'Satgas TMMD 125 Kodim 0310/SSD Percepat Rehabilitasi Rumah Warga Kurang Mampu di Muaro Momong', ' Komitmen TNI dalam membangun desa kembali ditunjukkan melalui program TNI Manunggal Membangun Desa (TMMD) ke-125 yang dilaksanakan oleh Kodim 0310/SSD.\r\n\r\n\r\nSalah satu kegiatan fisik yang menjadi sasaran utama adalah rehabilitasi Rumah Tidak Layak Huni (RTLH) milik warga kurang mampu di Jorong Muaro Momong, Nagari Sungai Kambut, Kecamatan Pulau Punjung, Kabupaten Dharmasraya, Senin (28/07/2025).\r\n\r\nRumah milik Mintar Tarigan (45), seorang petani setempat, menjadi salah satu target bantuan. Saat ini, proses rehabilitasi sudah memasuki tahap pemasangan kusen pintu dan jendela, yang dikerjakan langsung oleh personel Satgas TMMD.\r\n\r\n\"Proses pemasangan kusen sedang berlangsung dan diharapkan hingga sore hari nanti bisa selesai minimal setengahnya,\" ujar Serma Masyudi, personel Satgas yang terlibat langsung dalam kegiatan tersebut.', 'asset/gambar2.jpg', '2025-07-18 19:16:07', 11),
(3, 'Satgas TMMD Kodim 0310/SSD Berikan Penyuluhan Agama di Masjid Al Muhajirin Muaro Momong', ' Dalam rangka mempererat ukhuwah islamiyah dan memperkuat nilai-nilai keagamaan di tengah masyarakat, Satgas TNI Manunggal Membangun Desa (TMMD) ke-110 memberikan penyuluhan agama Islam kepada kaum muslimat di Masjid Al Muhajirin, Jorong Muaro Momong, Nagari Sungai Kambut, Kecamatan Pulau Punjung, Minggu (27/07/2025).\r\n\r\nPenyuluhan disampaikan oleh Serma Isurman, salah satu anggota Satgas TMMD Kodim 0310/SSD. Ia menekankan bahwa kegiatan non fisik seperti ini merupakan bagian dari program TMMD yang bertujuan mempererat hubungan antara TNI dengan masyarakat melalui pendekatan keagamaan.\r\n“Penyuluhan agama ini untuk lebih mendekatkan diri kita kepada masyarakat, khususnya kaum ibu sebagai madrasah pertama dalam rumah tangga,” ujar Serma Isurman dalam ceramahnya.\r\n', 'asset/gambar3.jpg', '2025-07-21 19:18:53', 5),
(4, 'Warga Banyuwangi Rayakan Tour de Ijen dari Pinggir Jalan hingga Layar Kaca\r\n', 'Jakarta - Gelaran Tour de Banyuwangi Ijen (TdBI) kembali disambut antusias warga. Tak hanya berdiri di pinggir lintasan, warga juga ramai menggelar nonton bareng di warung hingga menonton melalui layar ponsel.\r\nBupati Banyuwangi Ipuk Fiestiandani menyebut bahwa TdBI telah menjadi bagian dari tradisi masyarakat.Memasuki tahun ke-10 penyelenggaraan, Tour de Banyuwangi Ijentelah menjelma menjadi bagian dari identitas. Para pembalap tak hanya disambut dengan tepuk tangan, tapi juga dengan rasa bangga dari masyarakat Banyuwangi yang menyaksikan dan merayakan dari mana pun mereka berada.\r\n\r\n\"TdBI bukan hanya sekadar ajang balap, tapi sudah menjadi peristiwa budaya. Masyarakat merayakannya dengan sukacita, dan itu menunjukkan bahwa mereka telah menyatu dengan semangatnya,\" ujarnya dalam keterangan tertulis, Kamis (31/7/2025)\r\n\r\nBaca artikel detiknews, \"Warga Banyuwangi Rayakan Tour de Ijen dari Pinggir Jalan hingga Layar Kaca\" selengkapnya https://news.detik.com/berita/d-8039125/warga-banyuwangi-rayakan-tour-de-ijen-dari-pinggir-jalan-hingga-layar-kaca.\r\n\r\nDownload Apps Detikcom Sekarang https://apps.detik.com/detik/', 'asset/gambar4.jpeg', '2025-07-06 19:22:44', 2);

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galery`
--

CREATE TABLE `galery` (
  `id_galery` int(50) NOT NULL,
  `gambar` varchar(150) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `galery`
--

INSERT INTO `galery` (`id_galery`, `gambar`, `deskripsi`, `tanggal`) VALUES
(14, 'asset/WD1IeynNiP2ez9DEkVDRG626B99Bg4E76kA1UBGw.jpg', 'gambar 1j', '2025-08-22 00:00:00'),
(15, 'asset/f2n9tB3QPqI37vp3xchCkBrZ60srcGe6jyPRlAKQ.jpg', 'gambar 2', '2025-08-21 00:00:00'),
(16, 'asset/tYKpVkjfgl6Ii5HCn0t5rLdIGPUsI2D1cIl9E2qK.jpg', 'gambar 3', '2025-08-21 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_08_02_100957_add_views_to_berita_table', 2),
(5, '2025_08_02_094640_add_views_to_berita_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `id_penduduk` int(50) NOT NULL,
  `laki_laki` int(200) NOT NULL,
  `perempuan` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`id_penduduk`, `laki_laki`, `perempuan`) VALUES
(1, 1000, 300);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('AN5qYDJuCZ0545aqy5T6gCHlKsiD0ltuoMem2Zqm', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:141.0) Gecko/20100101 Firefox/141.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZ0JvanZEQXQ4aVdKblNQUGpiYjhoeUltMzM5ZUhHZzR2c0xVOXZscSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1755882090);

-- --------------------------------------------------------

--
-- Table structure for table `struktur`
--

CREATE TABLE `struktur` (
  `id` int(50) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `struktur`
--

INSERT INTO `struktur` (`id`, `gambar`, `tanggal`) VALUES
(1, 'asset/OtjxuFGN5OmOyHM89muuPVFovwny4o8fFW7COWNy.jpg', '2025-08-21 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'admin1', 'admin@gmail.com', NULL, '$2y$12$Z0k/yJSaJWCs/LYNbu86DOgjHFkf/IP9jPE3pzO16.pyb9GzZGEo2', NULL, '2025-08-12 01:32:24', '2025-08-21 07:11:31'),
(5, 'hari', 'hari@gmail.com', NULL, '$2y$12$SSzcfsbQJRzU/8yl4gnCuex/QdZ8AGxxrCO8kDx7XJXAmYgVaXFjq', NULL, '2025-08-12 01:34:55', '2025-08-14 19:36:03'),
(6, 'admin1', 'admin1@gmail.com', NULL, '$2y$12$I91xbmteTKDI7sG5efJnD.mgH.QheIup2AxadSWEf09OLDyv5.3eW', NULL, '2025-08-14 21:06:22', '2025-08-14 21:06:22');

-- --------------------------------------------------------

--
-- Table structure for table `visimisi`
--

CREATE TABLE `visimisi` (
  `id_vm` int(50) NOT NULL,
  `visi` varchar(300) NOT NULL,
  `misi` varchar(800) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `visimisi`
--

INSERT INTO `visimisi` (`id_vm`, `visi`, `misi`, `tanggal`) VALUES
(1, 'Terwujudnya Nagari Koto Rantang yang Mandiri, Maju, Berbudaya, dan Berlandaskan Nilai Gotong Royong serta Kearifan Lokal.', 'Meningkatkan kualitas pelayanan publik yang cepat, transparan, dan akuntabel.;\r\n\r\nMendorong pembangunan infrastruktur desa yang merata dan berkelanjutan.;\r\n\r\nMengembangkan potensi pertanian, peternakan, dan UMKM sebagai pilar ekonomi desa.;\r\n\r\nMeningkatkan kualitas sumber daya manusia melalui pendidikan, pelatihan,dan pemberdayaan masyarakat.;\r\n\r\nMenjaga kelestarian budaya danlingkunganh idup dengan melibatkan peran aktif masyarakat.;\r\n\r\nMemperkuat semangat gotong royong dan kebersamaan dalam setiap aspek pembangunan desa.;', '2025-08-21 23:36:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galery`
--
ALTER TABLE `galery`
  ADD PRIMARY KEY (`id_galery`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`id_penduduk`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `struktur`
--
ALTER TABLE `struktur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visimisi`
--
ALTER TABLE `visimisi`
  ADD PRIMARY KEY (`id_vm`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galery`
--
ALTER TABLE `galery`
  MODIFY `id_galery` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id_penduduk` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `struktur`
--
ALTER TABLE `struktur`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `visimisi`
--
ALTER TABLE `visimisi`
  MODIFY `id_vm` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
