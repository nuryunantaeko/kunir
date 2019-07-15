# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.1.38-MariaDB)
# Database: kunir
# Generation Time: 2019-07-15 16:38:40 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table tabel_admin
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tabel_admin`;

CREATE TABLE `tabel_admin` (
  `id_admin` int(3) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table tabel_bobot
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tabel_bobot`;

CREATE TABLE `tabel_bobot` (
  `id_bobot` int(3) NOT NULL AUTO_INCREMENT,
  `nilai_bobot` float NOT NULL,
  PRIMARY KEY (`id_bobot`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table tabel_bobot_kriteria
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tabel_bobot_kriteria`;

CREATE TABLE `tabel_bobot_kriteria` (
  `id_bobot_kriteria` int(3) NOT NULL AUTO_INCREMENT,
  `id_kriteria` int(3) DEFAULT NULL,
  `id_bobot` int(3) DEFAULT NULL,
  PRIMARY KEY (`id_bobot_kriteria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table tabel_kriteria
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tabel_kriteria`;

CREATE TABLE `tabel_kriteria` (
  `id_kriteria` int(3) NOT NULL AUTO_INCREMENT,
  `nama_kriteria` varchar(30) NOT NULL,
  PRIMARY KEY (`id_kriteria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table tabel_kunir
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tabel_kunir`;

CREATE TABLE `tabel_kunir` (
  `id_kunir` int(3) NOT NULL,
  `kode_kunir` varchar(5) NOT NULL,
  PRIMARY KEY (`id_kunir`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
