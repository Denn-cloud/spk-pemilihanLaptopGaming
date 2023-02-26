-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table dss_laptop.matrixkeputusan
CREATE TABLE IF NOT EXISTS `matrixkeputusan` (
  `id_penilaian` int NOT NULL AUTO_INCREMENT,
  `id_bobot` int DEFAULT NULL,
  `id_alternatif` int DEFAULT NULL,
  `valuematrix` float DEFAULT NULL,
  PRIMARY KEY (`id_penilaian`),
  KEY `FK_penilaian_bobot` (`id_bobot`),
  KEY `FK_penilaian_alternatif` (`id_alternatif`),
  CONSTRAINT `FK_penilaian_alternatif` FOREIGN KEY (`id_alternatif`) REFERENCES `tb_alternatif` (`id_alternatif`),
  CONSTRAINT `FK_penilaian_bobot` FOREIGN KEY (`id_bobot`) REFERENCES `tb_bobot` (`id_bobot`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Data exporting was unselected.

-- Dumping structure for view dss_laptop.nilaimax
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `nilaimax` (
	`id_kriteria` INT(10) NOT NULL,
	`nm_kriteria` VARCHAR(50) NULL COLLATE 'utf8mb4_0900_ai_ci',
	`maksimum` FLOAT NULL
) ENGINE=MyISAM;

-- Dumping structure for table dss_laptop.tb_alternatif
CREATE TABLE IF NOT EXISTS `tb_alternatif` (
  `id_alternatif` int NOT NULL AUTO_INCREMENT,
  `nm_alternatif` varchar(50) DEFAULT NULL,
  `merk` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_alternatif`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Data exporting was unselected.

-- Dumping structure for table dss_laptop.tb_bobot
CREATE TABLE IF NOT EXISTS `tb_bobot` (
  `id_bobot` int NOT NULL AUTO_INCREMENT,
  `id_kriteria` int DEFAULT NULL,
  `valuebobot` float DEFAULT NULL,
  PRIMARY KEY (`id_bobot`),
  KEY `FK_bobot_kriteria` (`id_kriteria`),
  CONSTRAINT `FK_bobot_kriteria` FOREIGN KEY (`id_kriteria`) REFERENCES `tb_kriteria` (`id_kriteria`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Data exporting was unselected.

-- Dumping structure for table dss_laptop.tb_kriteria
CREATE TABLE IF NOT EXISTS `tb_kriteria` (
  `id_kriteria` int NOT NULL AUTO_INCREMENT,
  `nm_kriteria` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_kriteria`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Data exporting was unselected.

-- Dumping structure for view dss_laptop.vmatrixkeputusan
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `vmatrixkeputusan` (
	`id_penilaian` INT(10) NOT NULL,
	`id_alternatif` INT(10) NOT NULL,
	`nm_alternatif` VARCHAR(50) NULL COLLATE 'utf8mb4_0900_ai_ci',
	`merk` VARCHAR(50) NULL COLLATE 'utf8mb4_0900_ai_ci',
	`id_kriteria` INT(10) NOT NULL,
	`nm_kriteria` VARCHAR(50) NULL COLLATE 'utf8mb4_0900_ai_ci',
	`id_bobot` INT(10) NOT NULL,
	`valuebobot` FLOAT NULL,
	`nilai` FLOAT NULL
) ENGINE=MyISAM;

-- Dumping structure for view dss_laptop.vnormalisasi
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `vnormalisasi` (
	`id_penilaian` INT(10) NOT NULL,
	`id_alternatif` INT(10) NOT NULL,
	`nm_alternatif` VARCHAR(50) NULL COLLATE 'utf8mb4_0900_ai_ci',
	`merk` VARCHAR(50) NULL COLLATE 'utf8mb4_0900_ai_ci',
	`id_kriteria` INT(10) NOT NULL,
	`nm_kriteria` VARCHAR(50) NULL COLLATE 'utf8mb4_0900_ai_ci',
	`id_bobot` INT(10) NOT NULL,
	`nilai` FLOAT NULL,
	`normalisasi` DOUBLE NULL
) ENGINE=MyISAM;

-- Dumping structure for view dss_laptop.vprarangking
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `vprarangking` (
	`id_penilaian` INT(10) NOT NULL,
	`id_alternatif` INT(10) NOT NULL,
	`nm_alternatif` VARCHAR(50) NULL COLLATE 'utf8mb4_0900_ai_ci',
	`merk` VARCHAR(50) NULL COLLATE 'utf8mb4_0900_ai_ci',
	`id_kriteria` INT(10) NOT NULL,
	`nm_kriteria` VARCHAR(50) NULL COLLATE 'utf8mb4_0900_ai_ci',
	`id_bobot` INT(10) NOT NULL,
	`nilai` FLOAT NULL,
	`normalisasi` DOUBLE NULL,
	`prarangking` DOUBLE NULL
) ENGINE=MyISAM;

-- Dumping structure for view dss_laptop.vrangking
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `vrangking` (
	`id_alternatif` INT(10) NOT NULL,
	`nm_alternatif` VARCHAR(50) NULL COLLATE 'utf8mb4_0900_ai_ci',
	`rangking` DOUBLE NULL
) ENGINE=MyISAM;

-- Dumping structure for view dss_laptop.nilaimax
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `nilaimax`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `nilaimax` AS select `vmatrixkeputusan`.`id_kriteria` AS `id_kriteria`,`vmatrixkeputusan`.`nm_kriteria` AS `nm_kriteria`,max(`vmatrixkeputusan`.`nilai`) AS `maksimum` from `vmatrixkeputusan` group by `vmatrixkeputusan`.`id_kriteria`;

-- Dumping structure for view dss_laptop.vmatrixkeputusan
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `vmatrixkeputusan`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `vmatrixkeputusan` AS select `matrixkeputusan`.`id_penilaian` AS `id_penilaian`,`tb_alternatif`.`id_alternatif` AS `id_alternatif`,`tb_alternatif`.`nm_alternatif` AS `nm_alternatif`,`tb_alternatif`.`merk` AS `merk`,`tb_kriteria`.`id_kriteria` AS `id_kriteria`,`tb_kriteria`.`nm_kriteria` AS `nm_kriteria`,`tb_bobot`.`id_bobot` AS `id_bobot`,`tb_bobot`.`valuebobot` AS `valuebobot`,`matrixkeputusan`.`valuematrix` AS `nilai` from (((`matrixkeputusan` join `tb_bobot`) join `tb_kriteria`) join `tb_alternatif`) where ((`matrixkeputusan`.`id_alternatif` = `tb_alternatif`.`id_alternatif`) and (`matrixkeputusan`.`id_bobot` = `tb_bobot`.`id_bobot`) and (`tb_kriteria`.`id_kriteria` = `tb_bobot`.`id_kriteria`));

-- Dumping structure for view dss_laptop.vnormalisasi
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `vnormalisasi`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `vnormalisasi` AS select `vmatrixkeputusan`.`id_penilaian` AS `id_penilaian`,`vmatrixkeputusan`.`id_alternatif` AS `id_alternatif`,`vmatrixkeputusan`.`nm_alternatif` AS `nm_alternatif`,`vmatrixkeputusan`.`merk` AS `merk`,`vmatrixkeputusan`.`id_kriteria` AS `id_kriteria`,`vmatrixkeputusan`.`nm_kriteria` AS `nm_kriteria`,`vmatrixkeputusan`.`id_bobot` AS `id_bobot`,`vmatrixkeputusan`.`nilai` AS `nilai`,(`vmatrixkeputusan`.`nilai` / `nilaimax`.`maksimum`) AS `normalisasi` from (`vmatrixkeputusan` join `nilaimax`) where (`nilaimax`.`id_kriteria` = `vmatrixkeputusan`.`id_kriteria`) group by `vmatrixkeputusan`.`id_penilaian`;

-- Dumping structure for view dss_laptop.vprarangking
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `vprarangking`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `vprarangking` AS select `vnormalisasi`.`id_penilaian` AS `id_penilaian`,`vnormalisasi`.`id_alternatif` AS `id_alternatif`,`vnormalisasi`.`nm_alternatif` AS `nm_alternatif`,`vnormalisasi`.`merk` AS `merk`,`vnormalisasi`.`id_kriteria` AS `id_kriteria`,`vnormalisasi`.`nm_kriteria` AS `nm_kriteria`,`vnormalisasi`.`id_bobot` AS `id_bobot`,`vnormalisasi`.`nilai` AS `nilai`,`vnormalisasi`.`normalisasi` AS `normalisasi`,(`vnormalisasi`.`nilai` * `vnormalisasi`.`normalisasi`) AS `prarangking` from `vnormalisasi` group by `vnormalisasi`.`id_penilaian`;

-- Dumping structure for view dss_laptop.vrangking
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `vrangking`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `vrangking` AS select `vprarangking`.`id_alternatif` AS `id_alternatif`,`vprarangking`.`nm_alternatif` AS `nm_alternatif`,sum(`vprarangking`.`prarangking`) AS `rangking` from `vprarangking` group by `vprarangking`.`id_alternatif`;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
