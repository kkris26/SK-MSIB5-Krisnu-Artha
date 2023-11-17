-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2023 at 09:33 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kelas_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(30) NOT NULL,
  `icon_kategori` varchar(255) NOT NULL,
  `bg_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `icon_kategori`, `bg_kategori`) VALUES
(9, 'Digital Marketing', '', 'DIGITAL-MARKETINGKELAS-DIGITAL-MARKETING.webp'),
(10, 'Web & App', '', 'WEB-AND-APPS-DEVELOPMENTWEBSITE-TANPA-CODING.webp'),
(11, 'Karir', '', 'Karir-path.webp'),
(12, 'Investasi', '', 'bandar.webp');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `total_pertemuan` int(11) NOT NULL,
  `id_level` int(11) NOT NULL,
  `harga_kelas` int(11) NOT NULL,
  `id_pengajar` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `featured_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `deskripsi`, `total_pertemuan`, `id_level`, `harga_kelas`, `id_pengajar`, `id_kategori`, `featured_image`) VALUES
(23, 'Kelas Belajar Digital Marketing Fundamental', 'Belajar cara menjadi profesional digital marketer dan paham strategi digital marketing di tahun 2022-2023', 6, 1, 99000, 19, 9, 'DIGITAL-MARKETINGKELAS-DIGITAL-MARKETING.webp'),
(24, 'Kelas Digital Marketing: Facebook & Instagram Ads​', 'Belajar meningkatkan penjualan menggunakan tools Facebook dan Instagram Ads (Strategi 2023)', 8, 2, 99000, 20, 9, 'DIGITAL-MARKETINGKELAS-FB-IG-ADS.webp'),
(25, 'Kelas Email Marketing Dengan Mailchimp', 'Kamu akan mengerti bagaimana email marketing bekerja dan tutorial menggunakan Mailchimp.', 10, 3, 179000, 19, 9, 'DIGITAL-MARKETINGKELAS-EMAIL-MARKETING.webp'),
(26, 'Kelas SEO Lanjutan: Perdalam Skill Technical SEO', 'Belajar dan kuasai technical SEO dibimbing langsung dari Consultant SEO Expert Top Startup Indonesia', 12, 4, 99000, 20, 9, 'DIGITAL-MARKETINGKELAS-SEO-ADVANCE.webp'),
(27, 'Kelas Membuat Website Profesional Tanpa Coding', 'Belajar membuat website dari nol hingga siap menghasilkan sebagai freelance web developer.', 6, 1, 99000, 21, 10, 'WEB-AND-APPS-DEVELOPMENTWEBSITE-TANPA-CODING.webp'),
(28, 'Kelas UI/UX Mastery: Web & Apps Design With Figma', 'Jadi UI/UX designer profesional! Belajar konsep hingga praktek redesign aplikasi PeduliLindungi.', 8, 2, 99000, 21, 10, 'WEB-AND-APPS-DEVELOPMENTUI-UX.webp'),
(29, 'Kelas Belajar Optimasi Kecepatan Website', 'Mempelajari keterampilan dan pengetahuan yang diperlukan untuk meningkatkan kinerja situs web Anda', 10, 3, 99000, 22, 10, 'WEB-AND-APPS-DEVELOPMENTWEBSITE-OPTIMIZATION.webp'),
(30, 'Kelas Website Lanjutan: Website Toko Online', 'Belajar membuat website toko online dengan sistem pembayaran dan manajemen order otomatis.', 12, 4, 198000, 22, 10, 'WEB-AND-APPS-DEVELOPMENTWEBSITE-LANJUTAN.webp'),
(31, 'Kelas English For Your Career Preparation', 'Siap membuat CV, cover letter dan interview berbahasa Inggris untuk meningkatkan performa karirmu.', 6, 1, 198000, 24, 11, 'english.webp'),
(32, 'Creative Writing: Persiapan Menjadi Freelance Writer', 'Belajar bagaimana cara untuk menjadi blogger, translator dan copywriter menggunakan bahasa inggris.', 8, 2, 99000, 24, 11, 'writer.webp'),
(33, 'Kelas Menentukan Career Path Di 2022', 'Kamu freshgraduate? pelajari strategi dan cara terbaik untuk menentukan career path kamu.', 6, 1, 99000, 23, 11, 'Karir path.webp'),
(34, 'Kelas Advanced Menjadi Seorang Virtual Assistant', 'Belajar menjadi virtual assistant yang dibutuhkan perusahaan. Berisi pengenalan profesi Virtual Assistant', 12, 4, 179000, 23, 11, 'KELAS-KARIERKELAS-VA-ADVANCE.webp'),
(35, 'Kelas Investasi Saham Amerika (US Stocks)', 'Praktekkan strategi terkini untuk berinvestasi di bursa saham Amerika (analisis teknikal dan fundamental) ', 10, 3, 249000, 25, 12, 'us-stock.webp'),
(36, 'Kelas Belajar Investasi Dengan Cryptocurrency', 'Belajar Cara Menguasai fundamental dan teknikal berbagai aset Cryptocurrency (BTC, ETH, XRP, dsb).', 8, 2, 177000, 25, 12, 'crypto.webp'),
(37, 'Kelas Menjadi Investasi Saham Untuk Pemula', 'Pahami strategi fundamental dalam berinvestasi di pasar saham Indonesia dan hasilkan profit.', 8, 2, 185000, 26, 12, 'investasi-pemula.jpg.webp'),
(38, 'Kelas Bandarmologi: Ikuti Pergerakan Bandar', 'Pelajari bagaimana strategi para bandar dalam melakukan investasi saham. Lalu contek dan praktekkan', 12, 4, 259000, 26, 12, 'bandar.webp');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id_level` int(11) NOT NULL,
  `jenis_level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id_level`, `jenis_level`) VALUES
(1, 'Beginner'),
(2, 'Intermediate'),
(3, 'Advanced'),
(4, 'Professional');

-- --------------------------------------------------------

--
-- Table structure for table `pengajar`
--

CREATE TABLE `pengajar` (
  `id_pengajar` int(11) NOT NULL,
  `nama_pengajar` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pengalaman` varchar(40) NOT NULL,
  `foto_profile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengajar`
--

INSERT INTO `pengajar` (`id_pengajar`, `nama_pengajar`, `email`, `pengalaman`, `foto_profile`) VALUES
(19, 'Amanda Johnson', 'amanda.johnson@example.com', 'S2 Marketing', 'Digital Marketing - Amanda Johnson.webp'),
(20, 'Angela Smith', 'angela.smith@example.com', 'Spesialis Iklan Online', 'Digital Marketing - Angela Smith.webp'),
(21, 'Daniel Rodriguez', 'daniel.rodriguez@example.com', 'S2 Ilmu Komputer', 'Web & App - Mr Daniel Rodriguez.webp'),
(22, 'Emily White', 'emily.white@example.com', 'Senior Web Developer', 'Web & App - Emily White.webp'),
(23, 'Christopher Lee', 'christopher.lee@example.com', 'S2 Psikologi', 'Karir - Christopher Lee.webp'),
(24, 'Sophia Kim', 'sophia.kim@example.com', 'Bisnis Konsultan', 'Karir - Sophia Kim.webp'),
(25, 'Michael Brown', 'michael.brown@example.com', 'S2 Ekonomi', 'Investasi - Michael Brown.webp'),
(26, 'Olivia Taylor', 'olivia.taylor@example.com', 'S2 Ekonomi', 'Iverstasi - Olivia Taylor.webp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD KEY `id_level` (`id_level`,`id_pengajar`,`id_kategori`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_pengajar` (`id_pengajar`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `pengajar`
--
ALTER TABLE `pengajar`
  ADD PRIMARY KEY (`id_pengajar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pengajar`
--
ALTER TABLE `pengajar`
  MODIFY `id_pengajar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `kelas_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kelas_ibfk_3` FOREIGN KEY (`id_level`) REFERENCES `level` (`id_level`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kelas_ibfk_4` FOREIGN KEY (`id_pengajar`) REFERENCES `pengajar` (`id_pengajar`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
