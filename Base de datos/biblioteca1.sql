-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-06-2019 a las 16:29:58
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `biblioteca1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `CODIGO` int(11) NOT NULL,
  `NOMBRE` varchar(100) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`CODIGO`, `NOMBRE`) VALUES
(5, 'sociales'),
(6, 'sfsfdfsa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `CARNET` int(11) NOT NULL,
  `NOMBRES` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `APELLIDOS` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `DUI` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`CARNET`, `NOMBRES`, `APELLIDOS`, `DUI`) VALUES
(1111, 'Roberto', 'Orellana', 2342342),
(53434, 'carla', 'orellana', 2342342),
(54545, 'tryyyutut', 'gfgfhftytyy', 2342342),
(123456, 'luis', 'cortez', 2342342);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro`
--

CREATE TABLE `libro` (
  `ID_LIBRO` int(11) NOT NULL,
  `NOMBRE` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `CODIGO` int(11) NOT NULL,
  `ID_PROVEEDOR` int(11) NOT NULL,
  `N_EXISTENCIAS` int(11) NOT NULL,
  `DUI` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `libro`
--

INSERT INTO `libro` (`ID_LIBRO`, `NOMBRE`, `CODIGO`, `ID_PROVEEDOR`, `N_EXISTENCIAS`, `DUI`) VALUES
(3, 'Historia', 5, 1, 10, 2342342);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamo`
--

CREATE TABLE `prestamo` (
  `ID_PRESTAMO` int(11) NOT NULL,
  `CARNET` int(11) NOT NULL,
  `ID_LIBRO` int(11) NOT NULL,
  `FECHA_INICIO` varchar(11) COLLATE utf8_spanish2_ci NOT NULL,
  `FECHA_FINAL` varchar(11) COLLATE utf8_spanish2_ci NOT NULL,
  `DUI` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `prestamo`
--

INSERT INTO `prestamo` (`ID_PRESTAMO`, `CARNET`, `ID_LIBRO`, `FECHA_INICIO`, `FECHA_FINAL`, `DUI`) VALUES
(14, 54545, 3, '2019-06-07', '2019-06-07', 2342342),
(15, 123456, 3, '2019-06-07', '2019-06-07', 2342342);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `ID_PROVEEDOR` int(11) NOT NULL,
  `NOMBRE` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `TELEFONO` int(11) NOT NULL,
  `CORREO` varchar(100) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`ID_PROVEEDOR`, `NOMBRE`, `TELEFONO`, `CORREO`) VALUES
(1, 'SANTILLANA', 214, 'werewr@gmiql.com'),
(2, 'salvadorena', 75753970, 'salvadorena@gmail.com'),
(3, 'guatemala', 7580800, 'guatemala@gmail.com'),
(4, 'Prueba', 324234234, 'erwerw@mga.com'),
(5, 'William', 23343553, 'werewr@gmiql.com'),
(9, 'FFFFFF', 3343, 'WRW@gmail.com'),
(10, 'eeeee', 4444, 'sdfsd@gmail.com'),
(11, 'FFSDFASD', 234234, 'ERQWER@GAIL.COM');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `DUI` int(11) NOT NULL,
  `NOMBRES` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `APELLIDOS` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `TELEFONO` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `DIRECCION` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `USUARIO` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `CONTRASEÑA` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `EMAIL` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `GENERO` varchar(15) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`DUI`, `NOMBRES`, `APELLIDOS`, `TELEFONO`, `DIRECCION`, `USUARIO`, `CONTRASEÑA`, `EMAIL`, `GENERO`) VALUES
(123456, 'jonathannnn', 'errrerr', '23343553', 'sensunte', 'jonathan', '1234', 'werewr@gmiql.com', 'Maculino'),
(334324, 'erwerr', 'ererwer', 'erwerw', 'dfsdfsdf', 'eerer', 'sdfsdf', 'sdfsdfds', 'Maculino'),
(2342342, 'luis', 'dfasdf', '4324234', 'sdfdsfdsf', 'luis', '123456', 'dsdfsdfsd', 'Maculino');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`CODIGO`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`CARNET`),
  ADD KEY `DUI` (`DUI`);

--
-- Indices de la tabla `libro`
--
ALTER TABLE `libro`
  ADD PRIMARY KEY (`ID_LIBRO`),
  ADD KEY `CODIGO` (`CODIGO`),
  ADD KEY `ID_PROVEEDOR` (`ID_PROVEEDOR`),
  ADD KEY `DUI` (`DUI`);

--
-- Indices de la tabla `prestamo`
--
ALTER TABLE `prestamo`
  ADD PRIMARY KEY (`ID_PRESTAMO`),
  ADD KEY `CARNET` (`CARNET`),
  ADD KEY `ID_LIBRO` (`ID_LIBRO`),
  ADD KEY `DUI` (`DUI`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`ID_PROVEEDOR`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`DUI`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `CODIGO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `libro`
--
ALTER TABLE `libro`
  MODIFY `ID_LIBRO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `prestamo`
--
ALTER TABLE `prestamo`
  MODIFY `ID_PRESTAMO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `ID_PROVEEDOR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD CONSTRAINT `estudiante_ibfk_1` FOREIGN KEY (`DUI`) REFERENCES `registro` (`DUI`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `libro`
--
ALTER TABLE `libro`
  ADD CONSTRAINT `libro_ibfk_1` FOREIGN KEY (`DUI`) REFERENCES `registro` (`DUI`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `libro_ibfk_2` FOREIGN KEY (`CODIGO`) REFERENCES `categoria` (`CODIGO`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `libro_ibfk_3` FOREIGN KEY (`ID_PROVEEDOR`) REFERENCES `proveedor` (`ID_PROVEEDOR`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `prestamo`
--
ALTER TABLE `prestamo`
  ADD CONSTRAINT `prestamo_ibfk_1` FOREIGN KEY (`CARNET`) REFERENCES `estudiante` (`CARNET`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `prestamo_ibfk_2` FOREIGN KEY (`DUI`) REFERENCES `registro` (`DUI`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `prestamo_ibfk_3` FOREIGN KEY (`ID_LIBRO`) REFERENCES `libro` (`ID_LIBRO`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
