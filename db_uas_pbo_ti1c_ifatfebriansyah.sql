-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2026 at 08:12 AM
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
-- Database: `db_uas_pbo_ti1c_ifatfebriansyah`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_karyawan`
--

CREATE TABLE `tabel_karyawan` (
  `id_karyawan` varchar(10) NOT NULL,
  `nama_karyawan` varchar(100) NOT NULL,
  `departemen` varchar(50) NOT NULL,
  `hari_kerja_masuk` int(11) NOT NULL,
  `gaji_dasar_per_hari` decimal(12,2) NOT NULL,
  `jenis_karyawan` enum('kontrak','tetap','magang') NOT NULL,
  `durasi_kontrak_bulan` int(11) DEFAULT NULL,
  `agensi_penyalur` varchar(100) DEFAULT NULL,
  `tunjangan_kesehatan` decimal(12,2) DEFAULT NULL,
  `opsi_saham_id` varchar(20) DEFAULT NULL,
  `uang_saku_bulanan` decimal(12,2) DEFAULT NULL,
  `sertifikat_kampus_merdeka` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabel_karyawan`
--

INSERT INTO `tabel_karyawan` (`id_karyawan`, `nama_karyawan`, `departemen`, `hari_kerja_masuk`, `gaji_dasar_per_hari`, `jenis_karyawan`, `durasi_kontrak_bulan`, `agensi_penyalur`, `tunjangan_kesehatan`, `opsi_saham_id`, `uang_saku_bulanan`, `sertifikat_kampus_merdeka`) VALUES
('EMP-K01', 'Hendra Wijaya', 'Operation', 22, 180000.00, 'kontrak', 12, 'PT Mitra Utama', NULL, NULL, NULL, NULL),
('EMP-K02', 'Indah Permata', 'Marketing', 19, 175000.00, 'kontrak', 6, 'PT Mitra Utama', NULL, NULL, NULL, NULL),
('EMP-K03', 'Joko Susilo', 'Security', 24, 150000.00, 'kontrak', 24, 'PT Garda Nusantara', NULL, NULL, NULL, NULL),
('EMP-K04', 'Kurniawan Agus', 'Logistics', 22, 160000.00, 'kontrak', 12, 'PT Garda Nusantara', NULL, NULL, NULL, NULL),
('EMP-K05', 'Laras Ati', 'Customer Service', 21, 165000.00, 'kontrak', 6, 'PT Solusi Bakti', NULL, NULL, NULL, NULL),
('EMP-K06', 'Muammar Kadafi', 'IT Support', 22, 190000.00, 'kontrak', 12, 'PT Tech Solusindo', NULL, NULL, NULL, NULL),
('EMP-K07', 'Nadia Vega', 'Finance', 20, 180000.00, 'kontrak', 6, 'PT Solusi Bakti', NULL, NULL, NULL, NULL),
('EMP-M01', 'Oki Setiawan', 'IT Engine', 20, 90000.00, 'magang', NULL, NULL, NULL, NULL, 1500000.00, 'MSIB-00123-UI'),
('EMP-M02', 'Putri Ayu', 'HRD', 22, 85000.00, 'magang', NULL, NULL, NULL, NULL, 1500000.00, 'MSIB-00456-UGM'),
('EMP-M03', 'Qori Sandi', 'Marketing', 18, 85000.00, 'magang', NULL, NULL, NULL, NULL, 1500000.00, 'MSIB-00789-ITB'),
('EMP-M04', 'Rian Hidayat', 'IT Engine', 21, 90000.00, 'magang', NULL, NULL, NULL, NULL, 1500000.00, 'MSIB-01011-ITS'),
('EMP-M05', 'Siti Aminah', 'Finance', 22, 85000.00, 'magang', NULL, NULL, NULL, NULL, 1500000.00, 'MSIB-01213-UNDIP'),
('EMP-M06', 'Taufik Hidayat', 'Operation', 20, 80000.00, 'magang', NULL, NULL, NULL, NULL, 1200000.00, 'Mandiri-UNS'),
('EMP-T01', 'Andi Pratama', 'IT Engine', 22, 250000.00, 'tetap', NULL, NULL, 500000.00, 'ESOP-001', NULL, NULL),
('EMP-T02', 'Budi Santoso', 'Finance', 21, 230000.00, 'tetap', NULL, NULL, 450000.00, 'ESOP-002', NULL, NULL),
('EMP-T03', 'Citra Lestari', 'HRD', 23, 220000.00, 'tetap', NULL, NULL, 450000.00, 'ESOP-003', NULL, NULL),
('EMP-T04', 'Dewi Sartika', 'Marketing', 20, 240000.00, 'tetap', NULL, NULL, 500000.00, 'ESOP-004', NULL, NULL),
('EMP-T05', 'Eko Prasetyo', 'Operation', 22, 210000.00, 'tetap', NULL, NULL, 400000.00, 'ESOP-005', NULL, NULL),
('EMP-T06', 'Fany Indah', 'Legal', 21, 260000.00, 'tetap', NULL, NULL, 600000.00, 'ESOP-006', NULL, NULL),
('EMP-T07', 'Gilang Ramadhan', 'IT Engine', 22, 250000.00, 'tetap', NULL, NULL, 500000.00, 'ESOP-007', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_karyawan`
--
ALTER TABLE `tabel_karyawan`
  ADD PRIMARY KEY (`id_karyawan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
