# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.1.38-MariaDB)
# Database: kunir
# Generation Time: 2019-07-15 18:57:27 +0000
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

LOCK TABLES `tabel_admin` WRITE;
/*!40000 ALTER TABLE `tabel_admin` DISABLE KEYS */;

INSERT INTO `tabel_admin` (`id_admin`, `alamat`, `username`, `password`, `no_hp`)
VALUES
	(1,'sedayu, bantu;','admin','$2y$10$Znz9ZoRWOQeYE2hKqQdn/.1ofx0Fz5uP9kBjEfcb5DV.u25xa.sMe','0897863547');

/*!40000 ALTER TABLE `tabel_admin` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tabel_bobot
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tabel_bobot`;

LOCK TABLES `tabel_bobot` WRITE;
/*!40000 ALTER TABLE `tabel_bobot` DISABLE KEYS */;

INSERT INTO `tabel_bobot` (`id_bobot`, `nilai_bobot`)
VALUES
	(1,0.5),
	(2,1),
	(3,0.1),
	(4,0.04),
	(5,0.1);

/*!40000 ALTER TABLE `tabel_bobot` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tabel_bobot_kriteria
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tabel_bobot_kriteria`;

LOCK TABLES `tabel_bobot_kriteria` WRITE;
/*!40000 ALTER TABLE `tabel_bobot_kriteria` DISABLE KEYS */;

INSERT INTO `tabel_bobot_kriteria` (`id_bobot_kriteria`, `id_kriteria`, `id_bobot`)
VALUES
	(0,5,4),
	(1,1,1);

/*!40000 ALTER TABLE `tabel_bobot_kriteria` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tabel_kriteria
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tabel_kriteria`;

LOCK TABLES `tabel_kriteria` WRITE;
/*!40000 ALTER TABLE `tabel_kriteria` DISABLE KEYS */;

INSERT INTO `tabel_kriteria` (`id_kriteria`, `nama_kriteria`)
VALUES
	(2,'ukuran'),
	(3,'Cek cek'),
	(4,'saya isi'),
	(5,'222'),
	(6,'contoh');

/*!40000 ALTER TABLE `tabel_kriteria` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tabel_kunir
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tabel_kunir`;

LOCK TABLES `tabel_kunir` WRITE;
/*!40000 ALTER TABLE `tabel_kunir` DISABLE KEYS */;

INSERT INTO `tabel_kunir` (`id_kunir`, `kode_kunir`)
VALUES
	(1,'A01');

/*!40000 ALTER TABLE `tabel_kunir` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tabel_nilai
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tabel_nilai`;

LOCK TABLES `tabel_nilai` WRITE;
/*!40000 ALTER TABLE `tabel_nilai` DISABLE KEYS */;

INSERT INTO `tabel_nilai` (`id_nilai`, `c1`, `c2`, `c3`, `c4`, `c5`, `id_kunir`)
VALUES
	(6,0.2,0.6,0.8,0.1,0.2,1);

/*!40000 ALTER TABLE `tabel_nilai` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
