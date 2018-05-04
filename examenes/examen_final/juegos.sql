-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.1.26-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para juegos
CREATE DATABASE IF NOT EXISTS `juegos` /*!40100 DEFAULT CHARACTER SET latin1 COLLATE latin1_spanish_ci */;
USE `juegos`;

-- Volcando estructura para tabla juegos.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `apellidos` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `usuario` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `contrasenya` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `edad` year(4) DEFAULT '2018',
  `curso` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `puntuacion` float DEFAULT NULL,
  `correo` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `usuario` (`usuario`),
  KEY `nombre` (`nombre`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- Volcando datos para la tabla juegos.usuarios: ~12 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`, `nombre`, `apellidos`, `usuario`, `contrasenya`, `edad`, `curso`, `puntuacion`, `correo`) VALUES
	(1, 'Pablo', 'Jorda', 'pajoga', '2364n', '1996', '1daw', 10000000, NULL),
	(3, 'Julio', 'RamÃ­rez', 'jurapu', 'nepe', '1998', 'eso', 0.5, NULL),
	(4, 'Joan', 'Banyulls', 'jobasa', '', '1999', 'eso', -5, NULL),
	(9, 'Paco', 'Gomez', 'Paco', 'ponmeun10', '2018', '1daw', NULL, 'pacogomez@florida.com'),
	(12, 'probar', 'ninguno', 'probar', '', '2017', 'bachiller', NULL, NULL),
	(14, 'xxf', 'srfff', 'xxf', '', '0000', '2daw', NULL, NULL),
	(17, '$nombre', '$apellidos', 'usuario', '$contrasenya', '2001', '$curso', NULL, NULL),
	(21, 'borrar', '', 'borrar', '', '0000', 'primaria', NULL, NULL),
	(22, 'borrar', '', 'borrar', '', '0000', 'primaria', NULL, NULL),
	(24, 'corregir', 'aaaaa', 'xxxxxxx', '', '0000', '1daw', NULL, NULL),
	(25, 'hxkc', '', 'atj', 'f5210b502970f3c8b247966b042d5a188ab52d02', '0000', '', NULL, NULL),
	(26, 'admin', '', 'admin', 'f5210b502970f3c8b247966b042d5a188ab52d02', '0000', '', NULL, NULL),
	(27, 'j', '', 'njjjk', 'ed40c9b7c5352df561e0472e7635ff050efec262', '0000', '', NULL, NULL);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
