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
-- Database: `pmi_bekasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_cabang_pmi`
--

CREATE TABLE `tb_cabang_pmi` (
  `cabang_pmi` int(11) NOT NULL,
  `nama_cabang` varchar(50) NOT NULL,
  `no_telp` varchar(25) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_cabang_pmi`
--

INSERT INTO `tb_cabang_pmi` (`cabang_pmi`, `nama_cabang`, `no_telp`, `alamat`) VALUES
(1, 'Bekasi', '(021) 88960247', 'Jl. Pramuka No.1, RT.006/RW.006, Marga Jaya, Kec. Bekasi Sel., Kota Bks, Jawa Barat 17141');

-- --------------------------------------------------------

--
-- Table structure for table `tb_dd_seq`
--

CREATE TABLE `tb_dd_seq` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_dd_seq`
--

INSERT INTO `tb_dd_seq` (`id`) VALUES
(1),
(2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_distribusi_darah`
--

CREATE TABLE `tb_distribusi_darah` (
  `nomor_distribusi` varchar(11) NOT NULL,
  `kd_rs` int(11) NOT NULL,
  `kd_cabang_pmi` int(11) NOT NULL,
  `kd_gol_darah` varchar(11) NOT NULL,
  `tgl_distribusi` date NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_distribusi_darah`
--

INSERT INTO `tb_distribusi_darah` (`nomor_distribusi`, `kd_rs`, `kd_cabang_pmi`, `kd_gol_darah`, `tgl_distribusi`, `qty`) VALUES
('PD-BKS001', 4, 1, 'O', '2023-02-08', 5),
('PD-BKS002', 4, 1, 'A', '2023-02-08', 2);

--
-- Triggers `tb_distribusi_darah`
--
DELIMITER $$
CREATE TRIGGER `kurangin_stok` AFTER INSERT ON `tb_distribusi_darah` FOR EACH ROW BEGIN

UPDATE tb_gol_darah SET stok = stok - NEW.qty WHERE gol_darah = NEW.kd_gol_darah;

END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tg_tb_dd_insert` BEFORE INSERT ON `tb_distribusi_darah` FOR EACH ROW BEGIN
  INSERT INTO tb_dd_seq VALUES (NULL);
  SET NEW.nomor_distribusi = CONCAT('PD-BKS', LPAD(LAST_INSERT_ID(), 3, '0'));
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_gol_darah`
--

CREATE TABLE `tb_gol_darah` (
  `gol_darah` varchar(11) NOT NULL,
  `kd_cabang_pmi` int(11) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_gol_darah`
--

INSERT INTO `tb_gol_darah` (`gol_darah`, `kd_cabang_pmi`, `stok`) VALUES
('A', 1, 3),
('AB', 1, 1),
('B', 1, 5),
('O', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendonor`
--

CREATE TABLE `tb_pendonor` (
  `id_pendonor` int(11) NOT NULL,
  `nama_pendonor` varchar(100) NOT NULL,
  `golongan_darah` enum('A','B','O','AB') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pendonor`
--

INSERT INTO `tb_pendonor` (`id_pendonor`, `nama_pendonor`, `golongan_darah`) VALUES
(4, 'maria faustina', 'AB'),
(6, 'adadad', 'O'),
(7, 'adkadnkada', 'A'),
(8, 'Et odit nesciunt is', 'AB'),
(9, 'Ut quod magnam quisq', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rekam_medis`
--

CREATE TABLE `tb_rekam_medis` (
  `nomor_rekam_medis` varchar(11) NOT NULL,
  `kd_cabang_pmi` int(11) NOT NULL,
  `kd_pendonor` int(11) NOT NULL,
  `kd_gol_darah` varchar(11) NOT NULL,
  `tgl_donor` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_rekam_medis`
--

INSERT INTO `tb_rekam_medis` (`nomor_rekam_medis`, `kd_cabang_pmi`, `kd_pendonor`, `kd_gol_darah`, `tgl_donor`) VALUES
('RM-BKS001', 1, 4, 'AB', '2023-02-07'),
('RM-BKS002', 1, 6, 'O', '2023-02-07');

--
-- Triggers `tb_rekam_medis`
--
DELIMITER $$
CREATE TRIGGER `tambah_stok` AFTER INSERT ON `tb_rekam_medis` FOR EACH ROW BEGIN

UPDATE tb_gol_darah SET stok = stok + 1 WHERE gol_darah = NEW.kd_gol_darah;

END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tg_tb_rm_insert` BEFORE INSERT ON `tb_rekam_medis` FOR EACH ROW BEGIN
  INSERT INTO tb_rm_seq VALUES (NULL);
  SET NEW.nomor_rekam_medis = CONCAT('RM-BKS', LPAD(LAST_INSERT_ID(), 3, '0'));
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_rm_seq`
--

CREATE TABLE `tb_rm_seq` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_rm_seq`
--

INSERT INTO `tb_rm_seq` (`id`) VALUES
(1),
(2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_rumah_sakit`
--

CREATE TABLE `tb_rumah_sakit` (
  `id_rs` int(11) NOT NULL,
  `nama_rs` varchar(100) NOT NULL,
  `no_telp` varchar(25) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_rumah_sakit`
--

INSERT INTO `tb_rumah_sakit` (`id_rs`, `nama_rs`, `no_telp`, `alamat`) VALUES
(3, 'RS Bekasi', '3144989', 'JL H.O.S COKROAMINOTO 31-33'),
(4, 'RS Jakasampurna', '082114735105', 'Citra Garden City Jakarta Jl. Boulevard G1 no 1 Citra 5 Jakarta Barat 11830');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_cabang_pmi`
--
ALTER TABLE `tb_cabang_pmi`
  ADD PRIMARY KEY (`cabang_pmi`);

--
-- Indexes for table `tb_dd_seq`
--
ALTER TABLE `tb_dd_seq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_distribusi_darah`
--
ALTER TABLE `tb_distribusi_darah`
  ADD PRIMARY KEY (`nomor_distribusi`),
  ADD KEY `kd_rs` (`kd_rs`),
  ADD KEY `kd_cabang_pmi` (`kd_cabang_pmi`),
  ADD KEY `kd_gol_darah` (`kd_gol_darah`);

--
-- Indexes for table `tb_gol_darah`
--
ALTER TABLE `tb_gol_darah`
  ADD PRIMARY KEY (`gol_darah`),
  ADD KEY `kd_cabang_pmi` (`kd_cabang_pmi`);

--
-- Indexes for table `tb_pendonor`
--
ALTER TABLE `tb_pendonor`
  ADD PRIMARY KEY (`id_pendonor`);

--
-- Indexes for table `tb_rekam_medis`
--
ALTER TABLE `tb_rekam_medis`
  ADD PRIMARY KEY (`nomor_rekam_medis`),
  ADD KEY `kd_pendonor` (`kd_pendonor`),
  ADD KEY `kd_cabang_pmi` (`kd_cabang_pmi`),
  ADD KEY `kd_gol_darah` (`kd_gol_darah`);

--
-- Indexes for table `tb_rm_seq`
--
ALTER TABLE `tb_rm_seq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_rumah_sakit`
--
ALTER TABLE `tb_rumah_sakit`
  ADD PRIMARY KEY (`id_rs`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_dd_seq`
--
ALTER TABLE `tb_dd_seq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_rm_seq`
--
ALTER TABLE `tb_rm_seq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_distribusi_darah`
--
ALTER TABLE `tb_distribusi_darah`
  ADD CONSTRAINT `fk_distribusi_darah_0` FOREIGN KEY (`kd_rs`) REFERENCES `tb_rumah_sakit` (`id_rs`),
  ADD CONSTRAINT `fk_distribusi_darah_1` FOREIGN KEY (`kd_cabang_pmi`) REFERENCES `tb_cabang_pmi` (`cabang_pmi`),
  ADD CONSTRAINT `fk_distribusi_darah_2` FOREIGN KEY (`kd_gol_darah`) REFERENCES `tb_gol_darah` (`gol_darah`);

--
-- Constraints for table `tb_gol_darah`
--
ALTER TABLE `tb_gol_darah`
  ADD CONSTRAINT `fk_gol_darah_0` FOREIGN KEY (`kd_cabang_pmi`) REFERENCES `tb_cabang_pmi` (`cabang_pmi`);

--
-- Constraints for table `tb_rekam_medis`
--
ALTER TABLE `tb_rekam_medis`
  ADD CONSTRAINT `fk_rekam_medis_0` FOREIGN KEY (`kd_cabang_pmi`) REFERENCES `tb_cabang_pmi` (`cabang_pmi`),
  ADD CONSTRAINT `fk_rekam_medis_1` FOREIGN KEY (`kd_pendonor`) REFERENCES `tb_pendonor` (`id_pendonor`),
  ADD CONSTRAINT `fk_rekam_medis_2` FOREIGN KEY (`kd_gol_darah`) REFERENCES `tb_gol_darah` (`gol_darah`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
