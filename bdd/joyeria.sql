-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-05-2018 a las 00:57:33
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `joyeria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `idcliente` int(11) NOT NULL,
  `nombre` varchar(70) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `telefono` int(8) DEFAULT NULL,
  `dui` int(15) DEFAULT NULL,
  `idsucursal` int(11) DEFAULT NULL,
  `clicorreo` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`idcliente`, `nombre`, `direccion`, `telefono`, `dui`, `idsucursal`, `clicorreo`) VALUES
(2, 'elizabeth', 'Local #5, Plaza Comercial Libertad, 4 Calle Ote, S', 0, NULL, 2, NULL),
(6, 'Melissa Estefany Viana', 'Local #5, Plaza Comercial Libertad, 4 Calle Ote, S', 0, NULL, 1, NULL),
(20, 'prueba1', 'sssssssss\r\n						', 2206219, 5555555, 2, NULL),
(31, 'prueba correo', 'el salvador\r\n						', 22906219, 55555555, 2, 'melissa@gmail.com'),
(32, 'Marcela', 'el salvador saln salvador\r\n						', 22906219, 2555555, 2, 'marcela@gmail.com'),
(33, 'prueba 1000', 'ansklansakn\r\n						', 22906219, 5555555, 2, 'aknakn@gmial.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente_cuota`
--

CREATE TABLE `cliente_cuota` (
  `idCuota` int(11) NOT NULL,
  `idcliente` int(11) DEFAULT NULL,
  `id_enseres` int(11) DEFAULT NULL,
  `pago` decimal(10,0) NOT NULL,
  `fechaPago` text NOT NULL,
  `proceso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente_cuota`
--

INSERT INTO `cliente_cuota` (`idCuota`, `idcliente`, `id_enseres`, `pago`, `fechaPago`, `proceso`) VALUES
(2, 2, 2, '200', '0000-00-00', 2),
(3, 2, 2, '120', '05/07/2018', 2),
(4, 2, 2, '20', '05/08/2018', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `email`
--

CREATE TABLE `email` (
  `id_empleado` int(11) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id_empleado` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `genero` varchar(2) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `telefono` varchar(9) NOT NULL,
  `email` varchar(50) NOT NULL,
  `idsucursal` int(11) DEFAULT NULL,
  `usuario` varchar(15) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `tipo` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id_empleado`, `nombre`, `genero`, `direccion`, `telefono`, `email`, `idsucursal`, `usuario`, `pass`, `tipo`) VALUES
(12, 'Joe Martinez Santos', 'F', '			\r\nsan salvador el slavador , soyapango', '22906218', 'joeRV10@gmail.com', 2, 'JoeMS', '123', 'comun'),
(14, 'Jessica Reyes', 'F', '			\r\n		El salvador, San savador, iopango', '22906219', 'JesiRR@gmail.com', 2, 'JesiRR', '123', 'gerencia'),
(15, 'jessica', 'F', '			\r\n		', '22906219', 'jesica10@gmail.com', 1, 'jessica10', '123', 'gerencia'),
(16, 'Melissa Estefany Viana Rodiguez', 'F', '			Local #5, Plaza Comercial Libertad, 4 Calle Ote', '64317939', 'melissaviana@gmail.com', 1, 'vr150473', 'admin', 'admin'),
(17, 'Ana Elizabeth Ramos Santana', 'F', '			Local #5, Plaza Comercial Libertad, 4 Calle Ote', '64739612', 'ramos1012@gmail.com', 1, 'anaramos', '1018', 'comun'),
(18, 'marcela', 'F', '			\r\n		jbjkbkjbkjbjk', '22906219', 'marcela@gmail.com', 1, 'marcela10', '123456', 'comun'),
(19, 'Jenny Santos', 'M', '			\r\n		el salvador san salvador', '22906219', 'jessny@gmal.com', 1, 'jenny10', '123', 'comun');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enseres`
--

CREATE TABLE `enseres` (
  `id_enseres` int(11) NOT NULL,
  `idcliente` int(11) DEFAULT NULL,
  `nombre_ensere` varchar(20) DEFAULT NULL,
  `material` varchar(15) DEFAULT NULL,
  `peso` float DEFAULT NULL,
  `valor` float DEFAULT NULL,
  `tipoEnsere` int(11) NOT NULL,
  `estado` int(11) NOT NULL,
  `fechaRegistro` text NOT NULL,
  `cuota` int(11) NOT NULL,
  `fechaPago` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `enseres`
--

INSERT INTO `enseres` (`id_enseres`, `idcliente`, `nombre_ensere`, `material`, `peso`, `valor`, `tipoEnsere`, `estado`, `fechaRegistro`, `cuota`, `fechaPago`) VALUES
(2, 2, 'prueba enseres actua', 'fdgvsfgs', 12, 120, 1, 3, '0000-00-00', 2, '2018-05-31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `id_Estado` int(11) NOT NULL,
  `EstadoInterno` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id_Estado`, `EstadoInterno`) VALUES
(3, 'usado '),
(4, 'nuevo '),
(5, 'empeÃ±ado'),
(6, 'comprado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proceso`
--

CREATE TABLE `proceso` (
  `id_proceso` int(11) NOT NULL,
  `nombre_proceso` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proceso`
--

INSERT INTO `proceso` (`id_proceso`, `nombre_proceso`) VALUES
(2, 'comprar '),
(3, 'vender '),
(4, 'EmpeÃ±ar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id_proveedor` int(11) NOT NULL,
  `nombre_Prov` varchar(30) NOT NULL,
  `nombre_contacto` varchar(25) NOT NULL,
  `tel_contacto` int(11) DEFAULT NULL,
  `idsucursal` int(11) DEFAULT NULL,
  `correo` varchar(30) DEFAULT NULL,
  `pro_dui` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id_proveedor`, `nombre_Prov`, `nombre_contacto`, `tel_contacto`, `idsucursal`, `correo`, `pro_dui`) VALUES
(1, 'Cornocopia', 'Mercedez Venz', 22904770, 1, NULL, NULL),
(5, 'samsung', 'samuel gosalez', 22906290, 1, NULL, NULL),
(8, 'yo', 'yo', 1012, 1, 'uo@gmail.com', NULL),
(9, 'prueba de dui', 'dui', 22906219, 1, 'dui@gmail.com', 55555);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursal`
--

CREATE TABLE `sucursal` (
  `idsucursal` int(11) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sucursal`
--

INSERT INTO `sucursal` (`idsucursal`, `nombre`, `direccion`) VALUES
(1, 'Central', '		1 Calle Poniente y 11 Av. Norte No. 205, San Sal'),
(2, 'Sucursal del sur', '												Local #5, Plaza Comercial Libertad, 4 ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefono`
--

CREATE TABLE `telefono` (
  `id_empleado` int(11) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_ensere`
--

CREATE TABLE `tipo_ensere` (
  `idtipo` int(11) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_ensere`
--

INSERT INTO `tipo_ensere` (`idtipo`, `nombre`) VALUES
(1, 'Electodomesticos '),
(2, 'TelÃ©fonos - Celulares'),
(3, 'Computadoras - Laptops'),
(4, 'TV - Audio - Video'),
(5, 'CÃ¡maras y accesorios'),
(6, 'Relojes - Joyas - Accesorios'),
(7, 'Instrumentos Musicales'),
(8, 'Video Juegos - Consolas');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`idcliente`),
  ADD UNIQUE KEY `nombre` (`nombre`),
  ADD KEY `fk_idsuc` (`idsucursal`);

--
-- Indices de la tabla `cliente_cuota`
--
ALTER TABLE `cliente_cuota`
  ADD PRIMARY KEY (`idCuota`),
  ADD KEY `fk_idcuo` (`id_enseres`),
  ADD KEY `fk_idcuenta` (`idcliente`),
  ADD KEY `proceso` (`proceso`);

--
-- Indices de la tabla `email`
--
ALTER TABLE `email`
  ADD KEY `fk_email` (`id_empleado`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id_empleado`),
  ADD UNIQUE KEY `nombre` (`nombre`),
  ADD UNIQUE KEY `usuario` (`usuario`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `fk_idinfo` (`idsucursal`);

--
-- Indices de la tabla `enseres`
--
ALTER TABLE `enseres`
  ADD PRIMARY KEY (`id_enseres`),
  ADD KEY `fk_cliente` (`idcliente`),
  ADD KEY `tipoEnsere` (`tipoEnsere`),
  ADD KEY `estado` (`estado`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id_Estado`);

--
-- Indices de la tabla `proceso`
--
ALTER TABLE `proceso`
  ADD PRIMARY KEY (`id_proceso`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id_proveedor`),
  ADD UNIQUE KEY `nombre_Prov` (`nombre_Prov`),
  ADD UNIQUE KEY `nombre_contacto` (`nombre_contacto`),
  ADD KEY `fk_prov` (`idsucursal`);

--
-- Indices de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  ADD PRIMARY KEY (`idsucursal`);

--
-- Indices de la tabla `telefono`
--
ALTER TABLE `telefono`
  ADD KEY `fk_tel` (`id_empleado`);

--
-- Indices de la tabla `tipo_ensere`
--
ALTER TABLE `tipo_ensere`
  ADD PRIMARY KEY (`idtipo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `cliente_cuota`
--
ALTER TABLE `cliente_cuota`
  MODIFY `idCuota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `enseres`
--
ALTER TABLE `enseres`
  MODIFY `id_enseres` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `id_Estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `proceso`
--
ALTER TABLE `proceso`
  MODIFY `id_proceso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id_proveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  MODIFY `idsucursal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipo_ensere`
--
ALTER TABLE `tipo_ensere`
  MODIFY `idtipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `fk_idsuc` FOREIGN KEY (`idsucursal`) REFERENCES `sucursal` (`idsucursal`);

--
-- Filtros para la tabla `cliente_cuota`
--
ALTER TABLE `cliente_cuota`
  ADD CONSTRAINT `fk_idcuenta` FOREIGN KEY (`idcliente`) REFERENCES `clientes` (`idcliente`),
  ADD CONSTRAINT `fk_idcuo` FOREIGN KEY (`id_enseres`) REFERENCES `enseres` (`id_enseres`),
  ADD CONSTRAINT `fk_proceso` FOREIGN KEY (`proceso`) REFERENCES `proceso` (`id_proceso`);

--
-- Filtros para la tabla `email`
--
ALTER TABLE `email`
  ADD CONSTRAINT `fk_email` FOREIGN KEY (`id_empleado`) REFERENCES `empleados` (`id_empleado`);

--
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `fk_idinfo` FOREIGN KEY (`idsucursal`) REFERENCES `sucursal` (`idsucursal`);

--
-- Filtros para la tabla `enseres`
--
ALTER TABLE `enseres`
  ADD CONSTRAINT `fk_cliente` FOREIGN KEY (`idcliente`) REFERENCES `clientes` (`idcliente`),
  ADD CONSTRAINT `fk_estado` FOREIGN KEY (`estado`) REFERENCES `estado` (`id_Estado`),
  ADD CONSTRAINT `fk_tipoEnsere` FOREIGN KEY (`tipoEnsere`) REFERENCES `tipo_ensere` (`idtipo`);

--
-- Filtros para la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD CONSTRAINT `fk_prov` FOREIGN KEY (`idsucursal`) REFERENCES `sucursal` (`idsucursal`);

--
-- Filtros para la tabla `telefono`
--
ALTER TABLE `telefono`
  ADD CONSTRAINT `fk_tel` FOREIGN KEY (`id_empleado`) REFERENCES `empleados` (`id_empleado`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
