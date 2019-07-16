-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2019 at 06:06 PM
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
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_admin`
--

INSERT INTO `tabel_admin` (`id_admin`, `alamat`, `username`, `password`, `no_hp`) VALUES
(1, 'sedayu, bantu;', 'admin', '$2y$10$Znz9ZoRWOQeYE2hKqQdn/.1ofx0Fz5uP9kBjEfcb5DV.u25xa.sMe', '0897863547');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_bobot`
--

CREATE TABLE IF NOT EXISTS `tabel_bobot` (
  `id_bobot` int(3) NOT NULL AUTO_INCREMENT,
  `nilai_bobot` float NOT NULL,
  PRIMARY KEY (`id_bobot`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tabel_bobot`
--

INSERT INTO `tabel_bobot` (`id_bobot`, `nilai_bobot`) VALUES
(1, 0.5),
(2, 1),
(3, 0.1),
(4, 0.04),
(5, 0.1),
(6, 0.3),
(7, 0.2),
(8, 0.2),
(9, 0.1),
(10, 0.3);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_bobot_kriteria`
--

CREATE TABLE IF NOT EXISTS `tabel_bobot_kriteria` (
  `id_bobot_kriteria` int(3) NOT NULL AUTO_INCREMENT,
  `id_kriteria` int(3) DEFAULT NULL,
  `id_bobot` int(3) DEFAULT NULL,
  PRIMARY KEY (`id_bobot_kriteria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tabel_bobot_kriteria`
--

INSERT INTO `tabel_bobot_kriteria` (`id_bobot_kriteria`, `id_kriteria`, `id_bobot`) VALUES
(0, 5, 4),
(1, 1, 1),
(2, 7, 6),
(3, 8, 7),
(4, 9, 8),
(5, 10, 9),
(6, 11, 10);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_kriteria`
--

CREATE TABLE IF NOT EXISTS `tabel_kriteria` (
  `id_kriteria` int(3) NOT NULL AUTO_INCREMENT,
  `nama_kriteria` varchar(30) NOT NULL,
  PRIMARY KEY (`id_kriteria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tabel_kriteria`
--

INSERT INTO `tabel_kriteria` (`id_kriteria`, `nama_kriteria`) VALUES
(2, 'ukuran'),
(3, 'Cek cek'),
(4, 'saya isi'),
(6, 'contoh'),
(7, 'Aroma Rimpang'),
(8, 'Kondisi'),
(9, 'Warna'),
(10, 'Serangga Hidup'),
(11, 'Ukuran');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_kunir`
--

CREATE TABLE IF NOT EXISTS `tabel_kunir` (
  `id_kunir` int(3) NOT NULL AUTO_INCREMENT,
  `kode_kunir` varchar(5) NOT NULL,
  PRIMARY KEY (`id_kunir`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tabel_kunir`
--

INSERT INTO `tabel_kunir` (`id_kunir`, `kode_kunir`) VALUES
(1, 'A01');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tabel_nilai`
--

INSERT INTO `tabel_nilai` (`id_nilai`, `c1`, `c2`, `c3`, `c4`, `c5`, `id_kunir`) VALUES
(6, 0.2, 0.6, 0.8, 0.1, 0.2, 1);

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
