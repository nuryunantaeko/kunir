-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2019 at 03:37 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kunir`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_admin`
--

CREATE TABLE IF NOT EXISTS `tabel_admin` (
  `id_admin` int(3) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `role` enum('admin','operator') NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_admin`
--

INSERT INTO `tabel_admin` (`id_admin`, `alamat`, `username`, `password`, `no_hp`, `role`) VALUES
(1, 'sedayu, bantu;', 'admin', '$2y$10$Znz9ZoRWOQeYE2hKqQdn/.1ofx0Fz5uP9kBjEfcb5DV.u25xa.sMe', '0897863547', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_bobot`
--

CREATE TABLE IF NOT EXISTS `tabel_bobot` (
  `id_bobot` int(3) NOT NULL AUTO_INCREMENT,
  `nilai_bobot` float NOT NULL,
  PRIMARY KEY (`id_bobot`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `tabel_bobot`
--

INSERT INTO `tabel_bobot` (`id_bobot`, `nilai_bobot`) VALUES
(6, 0.8),
(7, 0.7),
(8, 0.5),
(9, 0.3),
(10, 0.8),
(11, 0.8),
(12, 0.8),
(13, 0.8);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_bobot_kriteria`
--

CREATE TABLE IF NOT EXISTS `tabel_bobot_kriteria` (
  `id_bobot_kriteria` int(3) NOT NULL AUTO_INCREMENT,
  `id_kriteria` int(3) DEFAULT NULL,
  `id_bobot` int(3) DEFAULT NULL,
  PRIMARY KEY (`id_bobot_kriteria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tabel_bobot_kriteria`
--

INSERT INTO `tabel_bobot_kriteria` (`id_bobot_kriteria`, `id_kriteria`, `id_bobot`) VALUES
(2, 7, 6),
(3, 8, 7),
(4, 9, 8),
(5, 10, 9),
(6, 11, 10),
(7, 12, 11),
(8, 13, 12),
(9, 14, 13);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_kriteria`
--

CREATE TABLE IF NOT EXISTS `tabel_kriteria` (
  `id_kriteria` int(3) NOT NULL AUTO_INCREMENT,
  `nama_kriteria` varchar(30) NOT NULL,
  PRIMARY KEY (`id_kriteria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tabel_kriteria`
--

INSERT INTO `tabel_kriteria` (`id_kriteria`, `nama_kriteria`) VALUES
(7, 'Aroma Rimpang'),
(8, 'Kondisi Rimpang'),
(9, 'Warna'),
(10, 'Serangga Hidup'),
(14, 'Ukuran');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_kunir`
--

CREATE TABLE IF NOT EXISTS `tabel_kunir` (
  `id_kunir` int(3) NOT NULL AUTO_INCREMENT,
  `kode_kunir` varchar(5) NOT NULL,
  PRIMARY KEY (`id_kunir`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `tabel_kunir`
--

INSERT INTO `tabel_kunir` (`id_kunir`, `kode_kunir`) VALUES
(1, 'A01'),
(2, 'A02'),
(14, 'A03'),
(15, 'A04'),
(16, 'A05'),
(17, 'A06'),
(18, 'A07'),
(19, 'A08'),
(20, 'A09'),
(21, 'A10'),
(22, 'A11'),
(23, 'A12');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_nilai`
--

CREATE TABLE IF NOT EXISTS `tabel_nilai` (
  `id_nilai` int(3) NOT NULL AUTO_INCREMENT,
  `c1` float NOT NULL DEFAULT '0',
  `c2` float NOT NULL DEFAULT '0',
  `c3` float NOT NULL DEFAULT '0',
  `c4` float NOT NULL DEFAULT '0',
  `c5` float NOT NULL DEFAULT '0',
  `id_kunir` int(3) NOT NULL,
  PRIMARY KEY (`id_nilai`),
  KEY `id_kunir` (`id_kunir`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `tabel_nilai`
--

INSERT INTO `tabel_nilai` (`id_nilai`, `c1`, `c2`, `c3`, `c4`, `c5`, `id_kunir`) VALUES
(6, 50, 80, 69, 30, 50, 1),
(7, 45, 80, 70, 30, 25, 2),
(8, 70, 55, 70, 35, 20, 14),
(9, 90, 80, 70, 40, 25, 15),
(10, 70, 20, 50, 60, 70, 16),
(11, 70, 85, 55, 40, 50, 17),
(12, 40, 70, 25, 60, 40, 18),
(13, 70, 50, 60, 40, 50, 19),
(14, 40, 80, 80, 60, 25, 20),
(15, 45, 50, 70, 30, 55, 21);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tabel_nilai`
--
ALTER TABLE `tabel_nilai`
  ADD CONSTRAINT `tabel_nilai_ibfk_1` FOREIGN KEY (`id_kunir`) REFERENCES `tabel_kunir` (`id_kunir`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
