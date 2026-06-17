-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 17, 2026 at 02:57 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_simulasi_pbo_ti1c_zakyathaa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_pendaftaran`
--

CREATE TABLE `tabel_pendaftaran` (
  `id_pendaftaran` int NOT NULL,
  `nama_calon` varchar(150) NOT NULL,
  `asal_sekolah` varchar(150) NOT NULL,
  `nilai_ujian` decimal(5,2) NOT NULL,
  `biaya_pendaftaran_dasar` decimal(10,2) NOT NULL,
  `jalur_pendaftaran` enum('Reguler','Prestasi','Kedinasan') NOT NULL,
  `pilihan_prodi` varchar(100) DEFAULT NULL,
  `lokasi_kampus` varchar(100) DEFAULT NULL,
  `jenis_prestasi` varchar(100) DEFAULT NULL,
  `tingkat_prestasi` varchar(50) DEFAULT NULL,
  `sk_ikatan_dinas` varchar(100) DEFAULT NULL,
  `instansi_sponsor` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tabel_pendaftaran`
--

INSERT INTO `tabel_pendaftaran` (`id_pendaftaran`, `nama_calon`, `asal_sekolah`, `nilai_ujian`, `biaya_pendaftaran_dasar`, `jalur_pendaftaran`, `pilihan_prodi`, `lokasi_kampus`, `jenis_prestasi`, `tingkat_prestasi`, `sk_ikatan_dinas`, `instansi_sponsor`) VALUES
(1, 'Budi Santoso', 'SMA N 1 Cilacap', '85.50', '200000.00', 'Reguler', 'Teknik Informatika', 'Kampus Utama', NULL, NULL, NULL, NULL),
(2, 'Siti Aminah', 'MAN 2 Banyumas', '88.00', '200000.00', 'Reguler', 'Sistem Informasi', 'Kampus Utama', NULL, NULL, NULL, NULL),
(3, 'Andi Wijaya', 'SMA N 3 Purwokerto', '82.25', '200000.00', 'Reguler', 'Teknik Elektro', 'Kampus 2', NULL, NULL, NULL, NULL),
(4, 'Rina Lestari', 'SMK N 1 Purbalingga', '91.00', '200000.00', 'Reguler', 'Akuntansi', 'Kampus Utama', NULL, NULL, NULL, NULL),
(5, 'Dewi Sartika', 'SMA N 1 Kebumen', '89.50', '200000.00', 'Reguler', 'Manajemen', 'Kampus 2', NULL, NULL, NULL, NULL),
(6, 'Fajar Nugraha', 'SMA N 2 Cilacap', '84.00', '200000.00', 'Reguler', 'Teknik Sipil', 'Kampus Utama', NULL, NULL, NULL, NULL),
(7, 'Taufik Hidayat', 'SMA N 1 Bandung', '85.00', '200000.00', 'Reguler', 'Ilmu Komunikasi', 'Kampus Utama', NULL, NULL, NULL, NULL),
(8, 'Gita Gutawa', 'SMA N 5 Semarang', '95.00', '200000.00', 'Prestasi', NULL, NULL, 'Olimpiade Matematika', 'Nasional', NULL, NULL),
(9, 'Hendra Setiawan', 'SMA N 1 Solo', '92.50', '200000.00', 'Prestasi', NULL, NULL, 'Bulutangkis', 'Provinsi', NULL, NULL),
(10, 'Indah Permata', 'SMA N 3 Yogyakarta', '94.00', '200000.00', 'Prestasi', NULL, NULL, 'Karya Ilmiah Remaja', 'Nasional', NULL, NULL),
(11, 'Joko Widodo', 'SMA N 6 Surakarta', '90.00', '200000.00', 'Prestasi', NULL, NULL, 'Pidato Bahasa Inggris', 'Kabupaten', NULL, NULL),
(12, 'Kevin Sanjaya', 'SMA N 1 Kudus', '89.00', '200000.00', 'Prestasi', NULL, NULL, 'Tenis Meja', 'Nasional', NULL, NULL),
(13, 'Lesti Kejora', 'SMA N 1 Bandung', '93.00', '200000.00', 'Prestasi', NULL, NULL, 'Menyanyi Solo', 'Nasional', NULL, NULL),
(14, 'Megawati', 'SMA N 1 Jakarta', '87.50', '250000.00', 'Kedinasan', NULL, NULL, NULL, NULL, 'SK-KIN-2026-001', 'Kementerian Perhubungan'),
(15, 'Nadiem Makarim', 'SMA Kanisius', '96.00', '250000.00', 'Kedinasan', NULL, NULL, NULL, NULL, 'SK-KIN-2026-002', 'Kemendikbudristek'),
(16, 'Onadio Leonardo', 'SMA N 8 Jakarta', '81.00', '250000.00', 'Kedinasan', NULL, NULL, NULL, NULL, 'SK-KIN-2026-003', 'Pemerintah Daerah'),
(17, 'Prabowo Subianto', 'SMA N 2 Jakarta', '88.50', '250000.00', 'Kedinasan', NULL, NULL, NULL, NULL, 'SK-KIN-2026-004', 'Kementerian Pertahanan'),
(18, 'Qori Sandioriva', 'SMA N 1 Aceh', '86.00', '250000.00', 'Kedinasan', NULL, NULL, NULL, NULL, 'SK-KIN-2026-005', 'Dinas Pariwisata'),
(19, 'Raffi Ahmad', 'SMA N 3 Bandung', '83.50', '250000.00', 'Kedinasan', NULL, NULL, NULL, NULL, 'SK-KIN-2026-006', 'BUMN Biofarma'),
(20, 'Sandiaga Uno', 'SMA N 1 Jakarta', '97.00', '250000.00', 'Kedinasan', NULL, NULL, NULL, NULL, 'SK-KIN-2026-007', 'Kemenparekraf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_pendaftaran`
--
ALTER TABLE `tabel_pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_pendaftaran`
--
ALTER TABLE `tabel_pendaftaran`
  MODIFY `id_pendaftaran` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
