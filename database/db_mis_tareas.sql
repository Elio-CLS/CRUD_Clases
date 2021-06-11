-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         5.7.24 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para db_mis_tareas
CREATE DATABASE IF NOT EXISTS `db_mis_tareas` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `db_mis_tareas`;

-- Volcando estructura para tabla db_mis_tareas.tareas
CREATE TABLE IF NOT EXISTS `tareas` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(125) NOT NULL DEFAULT '0',
  `texto` varchar(550) NOT NULL DEFAULT '0',
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla db_mis_tareas.tareas: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tareas` DISABLE KEYS */;
INSERT INTO `tareas` (`id`, `title`, `texto`, `date_created`) VALUES
	(2, 'test', 'test', '2021-06-11 01:05:30'),
	(3, 'test2', 'test2', '2021-06-11 01:05:38'),
	(8, 'test4', 'test4', '2021-06-11 02:13:43'),
	(9, 'test6', 'test6', '2021-06-11 03:41:44');
/*!40000 ALTER TABLE `tareas` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
