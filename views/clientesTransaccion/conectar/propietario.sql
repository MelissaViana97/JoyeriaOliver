-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 10-05-2018 a las 22:11:52
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `propietario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propietario`
--

CREATE TABLE IF NOT EXISTS `propietario` (
  `doc` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `telefono` int(11) NOT NULL,
  `dui` int(11) NOT NULL,
  `correo` varchar(200) NOT NULL,
  `sucursal` varchar(200) NOT NULL,
  PRIMARY KEY (`doc`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9246 ;

--
-- Volcado de datos para la tabla `propietario`
--

INSERT INTO `propietario` (`doc`, `nombre`, `direccion`, `telefono`, `dui`, `correo`, `sucursal`) VALUES
(3, 'Arnoldo de la Paz', 'Amadeus solanos #11, Block E San Salvador ', 22112211, 223453, 'amaedus.solano@gmail.com', 'Central Soyapango'),
(4, 'Joaquin de las Nubes', 'Colonia San Patricio, Calle Amapolas Numero 34 Soyapango', 22551122, 223453, 'joaquin.nubes1244@gmail.com', 'Central Soyapango'),
(123, 'adadd', 'getgedg', 53535, 24244322, 'adaedaad', 'sdsdcs');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
