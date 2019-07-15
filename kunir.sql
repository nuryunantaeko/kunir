-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2019 at 05:38 PM
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
  `id_bobot` int(3) NOT NULL,
  `nilai_bobot` float NOT NULL,
  PRIMARY KEY (`id_bobot`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_bobot`
--

INSERT INTO `tabel_bobot` (`id_bobot`, `nilai_bobot`) VALUES
(1, 0.5);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_bobot_kriteria`
--

CREATE TABLE IF NOT EXISTS `tabel_bobot_kriteria` (
  `id_bobot_kriteria` int(3) NOT NULL,
  `id_kriteria` int(3) NOT NULL,
  `id_bobot` int(3) NOT NULL,
  PRIMARY KEY (`id_bobot_kriteria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_bobot_kriteria`
--

INSERT INTO `tabel_bobot_kriteria` (`id_bobot_kriteria`, `id_kriteria`, `id_bobot`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_kriteria`
--

CREATE TABLE IF NOT EXISTS `tabel_kriteria` (
  `id_kriteria` int(3) NOT NULL,
  `nama_kriteria` varchar(30) NOT NULL,
  PRIMARY KEY (`id_kriteria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_kriteria`
--

INSERT INTO `tabel_kriteria` (`id_kriteria`, `nama_kriteria`) VALUES
(2, 'ukuran');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_kunir`
--

CREATE TABLE IF NOT EXISTS `tabel_kunir` (
  `id_kunir` int(3) NOT NULL,
  `kode_kunir` varchar(5) NOT NULL,
  PRIMARY KEY (`id_kunir`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
