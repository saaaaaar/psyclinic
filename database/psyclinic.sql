-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2017 at 07:18 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psyclinic`
--

-- --------------------------------------------------------

--
-- Table structure for table `hasil_pemeriksaan`
--

CREATE TABLE `hasil_pemeriksaan` (
  `id_hasil_periksa` int(4) NOT NULL,
  `tanggal_periksa` date DEFAULT NULL,
  `tekanan_darah` int(3) DEFAULT NULL,
  `berat_badan` int(3) DEFAULT NULL,
  `masalah` text,
  `diagnosa` text,
  `kode_pasien` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(4) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `tanggal_masuk` date DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` char(20) DEFAULT NULL,
  `alamat` text,
  `no_identitas` varchar(25) DEFAULT NULL,
  `nama_penanggung` varchar(100) DEFAULT NULL,
  `alamat_penanggung` text,
  `no_telp_penanggung` varchar(15) DEFAULT NULL,
  `hubungan` varchar(100) DEFAULT NULL,
  `jenis_kelamin_penanggung` varchar(20) DEFAULT NULL,
  `no_rm` varchar(20) DEFAULT NULL,
  `agama` char(10) DEFAULT NULL,
  `no_telp` varchar(15) DEFAULT NULL,
  `pernikahan` varchar(20) DEFAULT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `riwayat`
--

CREATE TABLE `riwayat` (
  `id_riwayat` int(4) NOT NULL,
  `kode_pasien` int(4) DEFAULT NULL,
  `penyakit_pasien` varchar(255) DEFAULT NULL,
  `pengobatan_pasien` text,
  `penyakit_keluarga` varchar(255) DEFAULT NULL,
  `pengobatan_keluarga` text,
  `hubungan` varchar(50) DEFAULT NULL,
  `pasien` enum('y','t') DEFAULT NULL,
  `keluarga` enum('y','t') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hasil_pemeriksaan`
--
ALTER TABLE `hasil_pemeriksaan`
  ADD PRIMARY KEY (`id_hasil_periksa`),
  ADD KEY `kode_pasien` (`kode_pasien`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`id_riwayat`),
  ADD KEY `kode_pasien` (`kode_pasien`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hasil_pemeriksaan`
--
ALTER TABLE `hasil_pemeriksaan`
  MODIFY `id_hasil_periksa` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `id_riwayat` int(4) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `hasil_pemeriksaan`
--
ALTER TABLE `hasil_pemeriksaan`
  ADD CONSTRAINT `hasil_pemeriksaan_ibfk_1` FOREIGN KEY (`kode_pasien`) REFERENCES `pasien` (`id_pasien`);

--
-- Constraints for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD CONSTRAINT `riwayat_ibfk_1` FOREIGN KEY (`kode_pasien`) REFERENCES `pasien` (`id_pasien`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
