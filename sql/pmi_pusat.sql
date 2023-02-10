-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2023 at 05:50 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pmi_pusat`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_distribusi_darah`
--

CREATE TABLE `data_distribusi_darah` (
  `nomor_distribusi` varchar(11) NOT NULL,
  `kd_rs` int(11) NOT NULL,
  `kd_gol_darah` varchar(11) NOT NULL,
  `tgl_distribusi` date NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_distribusi_darah`
--

INSERT INTO `data_distribusi_darah` (`nomor_distribusi`, `kd_rs`, `kd_gol_darah`, `tgl_distribusi`, `qty`) VALUES
('PD-BKS001', 4, 'O', '2023-02-08', 5),
('PD-BKS002', 4, 'A', '2023-02-08', 2),
('PD-JKT001', 1, 'AB', '2023-02-07', 2),
('PD-JKT002', 1, 'O', '2023-02-08', 3),
('PD-JKT003', 2, 'AB', '2023-02-08', 2),
('PD-SBY001', 6, 'AB', '2023-02-08', 2),
('PD-SBY002', 5, 'AB', '2023-02-08', 3),
('PD-SBY003', 5, 'AB', '2023-02-08', 2);

-- --------------------------------------------------------

--
-- Table structure for table `data_pendonor`
--

CREATE TABLE `data_pendonor` (
  `id_pendonor` int(11) NOT NULL,
  `nama_pendonor` varchar(100) NOT NULL,
  `golongan_darah` enum('A','B','O','AB') NOT NULL,
  `jenis_kelamin` enum('Male','Female') NOT NULL,
  `umur` int(11) NOT NULL,
  `berat_badan` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  `cabang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_pendonor`
--

INSERT INTO `data_pendonor` (`id_pendonor`, `nama_pendonor`, `golongan_darah`, `jenis_kelamin`, `umur`, `berat_badan`, `alamat`, `cabang`) VALUES
(1, 'Galuh', 'B', 'Male', 20, '70', 'dfadada', 'Jakarta'),
(2, 'Bradley', 'B', 'Male', 21, '22', 'adad', 'Jakarta'),
(3, 'Alif', 'O', 'Male', 22, '45', 'adadad', 'Jakarta'),
(4, 'maria faustina', 'AB', 'Male', 19, '25', 'sadada', 'Bekasi'),
(5, 'Testing 9', 'A', 'Male', 122, '212', 'adad', 'Jakarta'),
(6, 'adadad', 'O', 'Female', 1, '52', 'Quos qui et culpa v', 'Bekasi'),
(7, 'adkadnkada', 'A', 'Male', 35, '82', 'Cupidatat occaecat n', 'Bekasi'),
(8, 'Et odit nesciunt is', 'AB', 'Female', 11, '46', 'Commodo quia eos non', 'Bekasi'),
(9, 'Ut quod magnam quisq', 'A', 'Male', 39, '64', 'Voluptatum ut facili', 'Bekasi'),
(10, 'Consequatur laborum', 'AB', 'Female', 41, '55', 'Vel cillum deserunt ', 'Jakarta'),
(11, 'Ea eiusmod non volup', 'A', 'Female', 39, '17', 'Voluptas nesciunt b', 'Jakarta'),
(12, 'Quis in consectetur', 'B', 'Female', 84, '34', 'Culpa atque qui exe', 'Jakarta'),
(13, 'Leo Uisetiawan', 'AB', 'Male', 50, '75', 'Surabaya', 'Surabaya'),
(14, 'Bagas Farenheit', 'B', 'Male', 30, '60', 'Jatibening 10', 'Surabaya'),
(15, 'Bradley Testing Sinkron', 'O', 'Male', 22, '80', 'RR10', 'Jakarta'),
(16, 'Brandon M E', 'O', 'Male', 22, '75', 'RR 20', 'Jakarta');

-- --------------------------------------------------------

--
-- Table structure for table `data_rekam_medis`
--

CREATE TABLE `data_rekam_medis` (
  `nomor_rekam_medis` varchar(11) NOT NULL,
  `kd_pendonor` int(11) NOT NULL,
  `kd_gol_darah` varchar(11) NOT NULL,
  `tgl_donor` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_rekam_medis`
--

INSERT INTO `data_rekam_medis` (`nomor_rekam_medis`, `kd_pendonor`, `kd_gol_darah`, `tgl_donor`) VALUES
('RM-BKS001', 4, 'AB', '2023-02-07'),
('RM-BKS002', 6, 'O', '2023-02-07'),
('RM-JKT001', 12, 'B', '2023-02-07'),
('RM-JKT002', 1, 'B', '2023-02-07'),
('RM-JKT003', 15, 'O', '2023-02-07'),
('RM-JKT004', 15, 'O', '2023-02-07'),
('RM-SBY001', 13, 'AB', '2023-02-07'),
('RM-SBY002', 14, 'B', '2023-02-07'),
('RM-SBY003', 13, 'AB', '2023-02-07');

-- --------------------------------------------------------

--
-- Table structure for table `user_pmi`
--

CREATE TABLE `user_pmi` (
  `id` int(11) NOT NULL,
  `nama_cabang` varchar(100) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `role` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_pmi`
--

INSERT INTO `user_pmi` (`id`, `nama_cabang`, `username`, `password`, `role`) VALUES
(1, 'Jakarta', 'user_jkt', 'user_jkt', 'user'),
(2, 'Bekasi', 'user_bks', 'user_bks', 'user'),
(3, 'Surabaya', 'user_sby', 'user_sby', 'user'),
(4, 'Jakarta', 'admin_jkt', 'admin_jkt', 'admin'),
(5, 'Bekasi', 'admin_bks', 'admin_bks', 'admin'),
(6, 'Surabaya', 'admin_sby', 'admin_sby', 'admin'),
(7, 'Pusat', 'super_admin', 'super_admin', 'superadmin');

-- --------------------------------------------------------

--
-- Table structure for table `user_rs`
--

CREATE TABLE `user_rs` (
  `id` int(11) NOT NULL,
  `nama_rs` varchar(100) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `lokasi` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_rs`
--

INSERT INTO `user_rs` (`id`, `nama_rs`, `username`, `password`, `lokasi`) VALUES
(1, 'RS Siloam M', 'admin_siloam', 'admin', 'Jakarta'),
(2, 'RS Kramat Pulo', 'admin_kramat', 'admin', 'Jakarta'),
(3, 'RS Bekasi', 'admin_bekasi', 'admin', 'Bekasi'),
(4, 'RS Jakasampurna', 'admin_jaka', 'admin', 'Bekasi'),
(5, 'RS Al-Irsyad', 'admin_alirsyad', 'admin', 'Surabaya'),
(6, 'RS Adi Husada Kapasari', 'admin_adihusada', 'admin', 'Surabaya');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_distribusi_darah`
--
ALTER TABLE `data_distribusi_darah`
  ADD PRIMARY KEY (`nomor_distribusi`);

--
-- Indexes for table `data_pendonor`
--
ALTER TABLE `data_pendonor`
  ADD PRIMARY KEY (`id_pendonor`);

--
-- Indexes for table `data_rekam_medis`
--
ALTER TABLE `data_rekam_medis`
  ADD PRIMARY KEY (`nomor_rekam_medis`);

--
-- Indexes for table `user_pmi`
--
ALTER TABLE `user_pmi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_rs`
--
ALTER TABLE `user_rs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_pendonor`
--
ALTER TABLE `data_pendonor`
  MODIFY `id_pendonor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user_pmi`
--
ALTER TABLE `user_pmi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_rs`
--
ALTER TABLE `user_rs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
