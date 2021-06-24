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
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla db_mis_tareas.tareas: ~11 rows (aproximadamente)
/*!40000 ALTER TABLE `tareas` DISABLE KEYS */;
INSERT INTO `tareas` (`id`, `title`, `texto`, `date_created`) VALUES
	(2, 'Tarea 1', 'Tarea 1', '2021-06-23 23:36:37'),
	(8, 'Tarea 2', 'Tarea 2', '2021-06-23 23:36:50'),
	(10, 'Tarea 3', 'Tarea 3', '2021-06-23 23:37:00'),
	(11, 'Primer tarea', 'Esta es una primer tarea de prueba', '2021-06-23 22:23:48'),
	(12, 'Sacar impreciones', 'Ir a imprimir los documentos al centro', '2021-06-23 23:30:50'),
	(13, 'Pasear perro', 'Sacar a pasear al boby a las 17hs', '2021-06-23 23:31:13'),
	(14, 'Sacar basura', 'MaÃ±ana sacar la basura a las 20hs', '2021-06-23 23:31:35'),
	(15, 'Dentista', 'Turno con el dentista el miercoles 8am', '2021-06-23 23:32:04'),
	(16, 'Mecanico', 'Llevar el auto al mecanico a las 16hs', '2021-06-23 23:32:24'),
	(17, 'Pedido', 'Llevar el pedido a Amanda a las 20hs', '2021-06-23 23:33:40'),
	(19, 'Chapista', 'Llevar el auto al chapista el viernes 26 a las 18hs a la calle lezama', '2021-06-23 23:50:49');
/*!40000 ALTER TABLE `tareas` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
