<<<<<<< HEAD
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2019 at 07:30 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
=======
# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.1.38-MariaDB)
# Database: kunir
# Generation Time: 2019-07-15 17:29:43 +0000
# ************************************************************
>>>>>>> b76fee38d643363c6b7c89b445a67c2e527b9e22


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

-- --------------------------------------------------------

--
-- Table structure for table `tabel_bobot`
--

CREATE TABLE IF NOT EXISTS `tabel_bobot` (
  `id_bobot` int(3) NOT NULL AUTO_INCREMENT,
  `nilai_bobot` float NOT NULL,
  PRIMARY KEY (`id_bobot`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_bobot_kriteria`
--

CREATE TABLE IF NOT EXISTS `tabel_bobot_kriteria` (
  `id_bobot_kriteria` int(3) NOT NULL AUTO_INCREMENT,
  `id_kriteria` int(3) DEFAULT NULL,
  `id_bobot` int(3) DEFAULT NULL,
  PRIMARY KEY (`id_bobot_kriteria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_kriteria`
--

CREATE TABLE IF NOT EXISTS `tabel_kriteria` (
  `id_kriteria` int(3) NOT NULL AUTO_INCREMENT,
  `nama_kriteria` varchar(30) NOT NULL,
  PRIMARY KEY (`id_kriteria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_kunir`
--

<<<<<<< HEAD
CREATE TABLE IF NOT EXISTS `tabel_kunir` (
  `id_kunir` int(3) NOT NULL,
=======
# Dump of table tabel_kunir
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tabel_kunir`;

CREATE TABLE `tabel_kunir` (
  `id_kunir` int(3) NOT NULL AUTO_INCREMENT,
>>>>>>> b76fee38d643363c6b7c89b445a67c2e527b9e22
  `kode_kunir` varchar(5) NOT NULL,
  PRIMARY KEY (`id_kunir`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_nilai`
--

CREATE TABLE IF NOT EXISTS `tabel_nilai` (
  `id_nilai` int(3) NOT NULL AUTO_INCREMENT,
  `c1` int(10) NOT NULL,
  `c2` int(10) NOT NULL,
  `c3` int(10) NOT NULL,
  `c4` int(10) NOT NULL,
  `c5` int(10) NOT NULL,
  `id_kunir` int(3) NOT NULL,
  PRIMARY KEY (`id_nilai`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
