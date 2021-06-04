-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-11-2018 a las 08:46:52
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `trazabilidad`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agricultor`
--

CREATE TABLE `agricultor` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellidos` varchar(100) NOT NULL,
  `Apodo` varchar(25) NOT NULL,
  `Zona` int(11) NOT NULL,
  `Direccion` varchar(50) NOT NULL,
  `Localidad` varchar(50) NOT NULL,
  `Provincia` varchar(50) NOT NULL,
  `CodigoPostal` int(11) NOT NULL,
  `NIF` varchar(9) NOT NULL,
  `Observaciones` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `agricultor`
--

INSERT INTO `agricultor` (`Id`, `Nombre`, `Apellidos`, `Apodo`, `Zona`, `Direccion`, `Localidad`, `Provincia`, `CodigoPostal`, `NIF`, `Observaciones`) VALUES
(3, 'Pedro', 'Muñoz Lopez', 'Gavilan', 1, '', 'La Solana', 'Ciudad Real', 13240, '22454789G', NULL),
(4, 'Juan Ignacio', 'Romero', 'Juan Ignacio', 1, '', 'Membrilla', 'Ciudad Real', 13230, '33211458P', ''),
(5, 'Tomas ', 'Carrillo Garcia', 'Carrillo', 1, 'C/ Mayor', 'Tomelloso', 'Ciudad Real', 13700, '55314897H', ''),
(6, 'Francisco', 'Vazquez Godoy', 'Godoy', 4, 'La Mojonera', 'Roquetas de Mar', 'Almeria', 4740, '12457852E', ''),
(7, 'Jesus ', 'Olmedo', 'Olmedo', 3, '', 'Utrera', 'Sevilla', 41710, '64587521C', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
  `Id` int(11) NOT NULL,
  `Articulo` varchar(60) NOT NULL,
  `Observaciones` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`Id`, `Articulo`, `Observaciones`) VALUES
(1, 'Melon', ''),
(2, 'Sandia Negra', ''),
(3, 'Sandia Rayada', ''),
(4, 'Sandia Sin Pepitas', ''),
(5, 'Melon Extra', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comprador`
--

CREATE TABLE `comprador` (
  `Id` int(11) NOT NULL,
  `Empresa` varchar(50) CHARACTER SET latin1 NOT NULL,
  `Direccion` varchar(50) CHARACTER SET latin1 NOT NULL,
  `Localidad` varchar(50) CHARACTER SET latin1 NOT NULL,
  `Provincia` varchar(50) CHARACTER SET latin1 NOT NULL,
  `CodigoPostal` int(11) NOT NULL,
  `NIF` varchar(9) CHARACTER SET latin1 NOT NULL,
  `Pais` varchar(30) CHARACTER SET latin1 NOT NULL,
  `Almacen` varchar(1) CHARACTER SET latin1 NOT NULL,
  `Observaciones` varchar(255) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `comprador`
--

INSERT INTO `comprador` (`Id`, `Empresa`, `Direccion`, `Localidad`, `Provincia`, `CodigoPostal`, `NIF`, `Pais`, `Almacen`, `Observaciones`) VALUES
(1, 'Frutas Sebastian', 'MercaBarna', 'Barcelona', 'Barcelona', 8004, '33214578D', 'EspaÃ±a', '1', ''),
(2, 'Frutas Hnos Lara', 'Poligono La Estrella', 'Albacete', 'Albacete', 2002, '34785475W', 'EspaÃ±a', '1', ''),
(3, 'Casado e Hijos ', 'MercaMadrid', 'Madird', 'Madrid', 28001, '78954215A', 'EspaÃ±a', '1', ''),
(4, 'Ferreira Lira', ' Rua Vale da Murta', 'Lisboa', '', 0, '65421254B', 'Portugal', '1', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuaderno`
--

CREATE TABLE `cuaderno` (
  `Id` int(11) NOT NULL,
  `IdFinca` int(11) NOT NULL,
  `IdAgricultor` int(11) NOT NULL,
  `Observaciones` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cuaderno`
--

INSERT INTO `cuaderno` (`Id`, `IdFinca`, `IdAgricultor`, `Observaciones`) VALUES
(1, 1, 3, ''),
(2, 1, 6, ''),
(3, 1, 7, ''),
(4, 1, 4, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallesalida`
--

CREATE TABLE `detallesalida` (
  `Id` int(11) NOT NULL,
  `IdLoteEntrada` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `LineaEnvasado` int(11) NOT NULL,
  `HoraEntrada` time NOT NULL,
  `HoraSalida` time NOT NULL,
  `KgUtilizados` varchar(10) NOT NULL,
  `Observaciones` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `finca`
--

CREATE TABLE `finca` (
  `Id` int(11) NOT NULL,
  `Paraje` varchar(50) NOT NULL,
  `Ruta` varchar(50) NOT NULL,
  `Termino` varchar(50) NOT NULL,
  `Provincia` varchar(50) NOT NULL,
  `Poligono` varchar(50) DEFAULT NULL,
  `Parcela` varchar(50) NOT NULL,
  `CoordenadasGPS` varchar(100) NOT NULL,
  `Observaciones` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `finca`
--

INSERT INTO `finca` (`Id`, `Paraje`, `Ruta`, `Termino`, `Provincia`, `Poligono`, `Parcela`, `CoordenadasGPS`, `Observaciones`) VALUES
(1, 'Propia', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formato`
--

CREATE TABLE `formato` (
  `Id` int(11) NOT NULL,
  `Envase` varchar(45) NOT NULL,
  `Peso` int(11) NOT NULL,
  `Observaciones` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `formato`
--

INSERT INTO `formato` (`Id`, `Envase`, `Peso`, `Observaciones`) VALUES
(1, 'Caja Plastico', 0, ''),
(2, 'Caja Madera', 0, ''),
(3, 'Caja Carton', 0, ''),
(4, 'Box', 0, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `linea`
--

CREATE TABLE `linea` (
  `Id` int(11) NOT NULL,
  `Linea` varchar(25) NOT NULL,
  `Observaciones` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `linea`
--

INSERT INTO `linea` (`Id`, `Linea`, `Observaciones`) VALUES
(1, 'Dentro', NULL),
(2, 'Fuera', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `loteentrada`
--

CREATE TABLE `loteentrada` (
  `Id` int(11) NOT NULL,
  `FechaEntrada` date NOT NULL,
  `HoraEntrada` time NOT NULL,
  `PesoBruto` int(11) NOT NULL,
  `PesoTara` int(11) NOT NULL,
  `Bultos` int(11) NOT NULL,
  `IdArticulo` int(11) NOT NULL,
  `Descuento` int(11) NOT NULL,
  `IdCuaderno` int(11) NOT NULL,
  `Transportista` varchar(50) NOT NULL,
  `Matricula` varchar(10) NOT NULL,
  `Gastado` tinyint(1) NOT NULL,
  `FechaSalida` date NOT NULL,
  `HoraSalida` time NOT NULL,
  `Referencia` varchar(45) NOT NULL,
  `Observaciones` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `loteentrada`
--

INSERT INTO `loteentrada` (`Id`, `FechaEntrada`, `HoraEntrada`, `PesoBruto`, `PesoTara`, `Bultos`, `IdArticulo`, `Descuento`, `IdCuaderno`, `Transportista`, `Matricula`, `Gastado`, `FechaSalida`, `HoraSalida`, `Referencia`, `Observaciones`) VALUES
(2, '2018-11-02', '16:00:09', 300, 100, 0, 1, 0, 1, '', '', 0, '2018-11-09', '16:00:45', '', ''),
(3, '2018-11-03', '19:44:38', 2222, 100, 72, 2, 0, 1, '', '5545464jkj', 0, '0000-00-00', '00:00:00', '', ''),
(4, '2018-11-03', '19:44:38', 2222, 100, 72, 2, 0, 1, '', '5545464jkj', 0, '0000-00-00', '00:00:00', '', ''),
(5, '2018-11-03', '19:44:38', 2222, 100, 72, 2, 0, 1, '', '5545464jkj', 0, '0000-00-00', '00:00:00', '', ''),
(6, '2018-11-03', '19:44:38', 2222, 100, 72, 2, 0, 1, '', '5545464jkj', 0, '0000-00-00', '00:00:00', '', ''),
(7, '2018-11-03', '19:44:38', 2222, 100, 72, 2, 0, 1, '', '5545464jkj', 0, '0000-00-00', '00:00:00', '', ''),
(8, '2018-11-03', '19:50:40', 23232, 232, 72, 4, 0, 1, '', 'vdf5655664', 0, '0000-00-00', '00:00:00', '', ''),
(9, '2018-11-03', '19:50:40', 23232, 232, 72, 4, 0, 1, '', 'vdf5655664', 0, '0000-00-00', '00:00:00', '', ''),
(10, '2018-11-03', '19:50:40', 23232, 232, 72, 4, 0, 1, '', 'vdf5655664', 0, '0000-00-00', '00:00:00', '', ''),
(11, '2018-11-03', '19:50:40', 23232, 232, 72, 4, 0, 1, '', 'vdf5655664', 0, '0000-00-00', '00:00:00', '', ''),
(12, '2018-11-03', '19:50:40', 23232, 232, 72, 4, 0, 1, '', 'vdf5655664', 0, '0000-00-00', '00:00:00', '', ''),
(13, '2018-11-03', '19:50:40', 23232, 232, 72, 4, 0, 1, '', 'vdf5655664', 0, '0000-00-00', '00:00:00', '', ''),
(14, '2018-11-03', '19:50:40', 23232, 232, 72, 4, 0, 1, '', 'vdf5655664', 0, '0000-00-00', '00:00:00', '', ''),
(15, '2018-11-03', '19:50:40', 23232, 232, 72, 4, 0, 1, '', 'vdf5655664', 0, '0000-00-00', '00:00:00', '', ''),
(16, '0000-00-00', '16:00:00', 650, 110, 72, 1, 0, 1, '$transportista', '78976POK', 0, '0000-00-00', '00:00:00', '', ''),
(17, '2018-11-10', '07:41:32', 300, 110, 25, 2, 0, 1, '', '', 0, '2018-11-29', '00:00:00', '', ''),
(18, '2018-11-03', '06:24:34', 0, 0, 0, 4, 0, 1, '', '', 0, '0000-00-00', '00:00:00', '', ''),
(19, '2018-11-03', '06:24:34', 0, 0, 0, 4, 0, 1, '', '', 0, '0000-00-00', '00:00:00', '', ''),
(20, '2018-11-03', '06:24:34', 0, 0, 0, 4, 0, 1, '', '', 0, '0000-00-00', '00:00:00', '', ''),
(21, '2018-11-03', '06:24:34', 0, 0, 0, 4, 0, 1, '', '', 0, '0000-00-00', '00:00:00', '', ''),
(22, '2018-11-03', '06:24:34', 0, 0, 0, 4, 0, 1, '', '', 0, '0000-00-00', '00:00:00', '', ''),
(23, '2018-11-03', '06:24:34', 0, 0, 0, 4, 0, 1, '', '', 0, '0000-00-00', '00:00:00', '', ''),
(24, '2018-11-03', '06:24:34', 0, 0, 0, 4, 0, 1, '', '', 0, '0000-00-00', '00:00:00', '', ''),
(25, '2018-11-03', '06:24:34', 0, 0, 0, 4, 0, 1, '', '', 0, '0000-00-00', '00:00:00', '', ''),
(26, '2018-11-03', '06:57:59', 232323, 222, 76, 4, 0, 1, 'Paco', '2255456dfd', 0, '2018-11-30', '06:58:32', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lotesalida`
--

CREATE TABLE `lotesalida` (
  `Id` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `IdComprador` int(11) NOT NULL,
  `IdArticulo` int(11) NOT NULL,
  `Completado` tinyint(1) NOT NULL,
  `HoraCompletado` time NOT NULL,
  `Transportista` varchar(45) NOT NULL,
  `Cargado` tinyint(1) NOT NULL,
  `Observaciones` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `lotesalida`
--

INSERT INTO `lotesalida` (`Id`, `Fecha`, `IdComprador`, `IdArticulo`, `Completado`, `HoraCompletado`, `Transportista`, `Cargado`, `Observaciones`) VALUES
(1, '0000-00-00', 1, 5, 0, '00:00:00', '5', 0, ''),
(2, '2018-11-17', 1, 3, 0, '00:00:00', '1', 0, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pale`
--

CREATE TABLE `pale` (
  `Id` int(11) NOT NULL,
  `LoteSalida` int(11) NOT NULL,
  `Bruto` int(11) NOT NULL,
  `Tara` int(11) NOT NULL,
  `Bultos` int(11) NOT NULL,
  `Piezas` varchar(20) NOT NULL,
  `IdFormato` int(11) NOT NULL,
  `IdLinea` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `Observaciones` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parte`
--

CREATE TABLE `parte` (
  `Id` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `Incidencia` varchar(255) NOT NULL,
  `Solucion` varchar(255) NOT NULL,
  `Observacion` varchar(255) DEFAULT NULL,
  `IdLoteEntrada` int(11) NOT NULL,
  `IdLoteSalida` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transportista`
--

CREATE TABLE `transportista` (
  `Id` int(11) NOT NULL,
  `Empresa` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `Observaciones` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `transportista`
--

INSERT INTO `transportista` (`Id`, `Empresa`, `Observaciones`) VALUES
(1, 'Propio', ''),
(2, 'Transportes Moya', ''),
(3, 'Bulitrans', ''),
(4, 'MuÃ±oz y Cia', ''),
(5, 'Hnos Ruiz', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tratamiento`
--

CREATE TABLE `tratamiento` (
  `Id` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `IdCuaderno` int(11) NOT NULL,
  `Tratamiento` varchar(255) NOT NULL,
  `Observaciones` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Id` int(11) NOT NULL,
  `Usuario` varchar(25) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `Nivel` int(11) NOT NULL,
  `NombreCompleto` varchar(50) NOT NULL,
  `Observaciones` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id`, `Usuario`, `Password`, `Nivel`, `NombreCompleto`, `Observaciones`) VALUES
(1, 'Mario', '1234', 1, '', ''),
(2, 'Juan', '1234', 2, 'Juan Diaz', NULL),
(3, 'Luis', '1234', 2, 'Luis Garcia', 'Todo bien'),
(4, 'Laura', '1234', 3, '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zona`
--

CREATE TABLE `zona` (
  `Id` int(11) NOT NULL,
  `Zona` varchar(50) NOT NULL,
  `Observaciones` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `zona`
--

INSERT INTO `zona` (`Id`, `Zona`, `Observaciones`) VALUES
(1, 'La Mancha', NULL),
(2, 'Murcia', NULL),
(3, 'Sevilla', NULL),
(4, 'Almeria', ''),
(5, 'Brasil', ''),
(6, 'Marruecos', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agricultor`
--
ALTER TABLE `agricultor`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Zona` (`Zona`);

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `comprador`
--
ALTER TABLE `comprador`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `cuaderno`
--
ALTER TABLE `cuaderno`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Fk_IdFinca` (`IdFinca`),
  ADD KEY `Fk_IdAgricultor` (`IdAgricultor`);

--
-- Indices de la tabla `detallesalida`
--
ALTER TABLE `detallesalida`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IdLoteEntrada` (`IdLoteEntrada`),
  ADD KEY `LineaEnvasado` (`LineaEnvasado`);

--
-- Indices de la tabla `finca`
--
ALTER TABLE `finca`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `formato`
--
ALTER TABLE `formato`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `linea`
--
ALTER TABLE `linea`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `loteentrada`
--
ALTER TABLE `loteentrada`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IdCuaderno` (`IdCuaderno`),
  ADD KEY `IdArticulo` (`IdArticulo`);

--
-- Indices de la tabla `lotesalida`
--
ALTER TABLE `lotesalida`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IdArticulo` (`IdArticulo`),
  ADD KEY `IdComprador` (`IdComprador`);

--
-- Indices de la tabla `pale`
--
ALTER TABLE `pale`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `LoteSalida` (`LoteSalida`),
  ADD KEY `IdFormato` (`IdFormato`),
  ADD KEY `IdLinea` (`IdLinea`);

--
-- Indices de la tabla `parte`
--
ALTER TABLE `parte`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IdLoteEntrada` (`IdLoteEntrada`),
  ADD KEY `IdLoteSalida` (`IdLoteSalida`);

--
-- Indices de la tabla `transportista`
--
ALTER TABLE `transportista`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `tratamiento`
--
ALTER TABLE `tratamiento`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IdCuaderno` (`IdCuaderno`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `zona`
--
ALTER TABLE `zona`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `agricultor`
--
ALTER TABLE `agricultor`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `articulo`
--
ALTER TABLE `articulo`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `comprador`
--
ALTER TABLE `comprador`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `cuaderno`
--
ALTER TABLE `cuaderno`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `detallesalida`
--
ALTER TABLE `detallesalida`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `finca`
--
ALTER TABLE `finca`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `formato`
--
ALTER TABLE `formato`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `linea`
--
ALTER TABLE `linea`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `loteentrada`
--
ALTER TABLE `loteentrada`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `lotesalida`
--
ALTER TABLE `lotesalida`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `pale`
--
ALTER TABLE `pale`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `parte`
--
ALTER TABLE `parte`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `transportista`
--
ALTER TABLE `transportista`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tratamiento`
--
ALTER TABLE `tratamiento`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `zona`
--
ALTER TABLE `zona`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `agricultor`
--
ALTER TABLE `agricultor`
  ADD CONSTRAINT `agricultor_ibfk_1` FOREIGN KEY (`Zona`) REFERENCES `zona` (`Id`);

--
-- Filtros para la tabla `cuaderno`
--
ALTER TABLE `cuaderno`
  ADD CONSTRAINT `Fk_IdAgricultor` FOREIGN KEY (`IdAgricultor`) REFERENCES `agricultor` (`Id`),
  ADD CONSTRAINT `Fk_IdFinca` FOREIGN KEY (`IdFinca`) REFERENCES `finca` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `detallesalida`
--
ALTER TABLE `detallesalida`
  ADD CONSTRAINT `detallesalida_ibfk_1` FOREIGN KEY (`IdLoteEntrada`) REFERENCES `loteentrada` (`Id`),
  ADD CONSTRAINT `detallesalida_ibfk_2` FOREIGN KEY (`LineaEnvasado`) REFERENCES `linea` (`Id`);

--
-- Filtros para la tabla `loteentrada`
--
ALTER TABLE `loteentrada`
  ADD CONSTRAINT `loteentrada_ibfk_1` FOREIGN KEY (`IdCuaderno`) REFERENCES `cuaderno` (`Id`),
  ADD CONSTRAINT `loteentrada_ibfk_2` FOREIGN KEY (`IdArticulo`) REFERENCES `articulo` (`Id`);

--
-- Filtros para la tabla `lotesalida`
--
ALTER TABLE `lotesalida`
  ADD CONSTRAINT `lotesalida_ibfk_1` FOREIGN KEY (`IdArticulo`) REFERENCES `articulo` (`Id`),
  ADD CONSTRAINT `lotesalida_ibfk_2` FOREIGN KEY (`IdComprador`) REFERENCES `comprador` (`Id`);

--
-- Filtros para la tabla `pale`
--
ALTER TABLE `pale`
  ADD CONSTRAINT `pale_ibfk_1` FOREIGN KEY (`LoteSalida`) REFERENCES `lotesalida` (`Id`),
  ADD CONSTRAINT `pale_ibfk_2` FOREIGN KEY (`IdFormato`) REFERENCES `formato` (`Id`),
  ADD CONSTRAINT `pale_ibfk_3` FOREIGN KEY (`IdLinea`) REFERENCES `linea` (`Id`);

--
-- Filtros para la tabla `parte`
--
ALTER TABLE `parte`
  ADD CONSTRAINT `parte_ibfk_1` FOREIGN KEY (`IdLoteEntrada`) REFERENCES `loteentrada` (`Id`),
  ADD CONSTRAINT `parte_ibfk_2` FOREIGN KEY (`IdLoteSalida`) REFERENCES `lotesalida` (`Id`);

--
-- Filtros para la tabla `tratamiento`
--
ALTER TABLE `tratamiento`
  ADD CONSTRAINT `tratamiento_ibfk_1` FOREIGN KEY (`IdCuaderno`) REFERENCES `cuaderno` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
