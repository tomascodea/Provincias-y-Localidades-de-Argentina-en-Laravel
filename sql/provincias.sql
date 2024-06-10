-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 10-06-2024 a las 20:51:22
-- Versión del servidor: 5.7.24
-- Versión de PHP: 8.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ESCRIBE TU BASE DE DATOS AQUÍ`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincias`
--

CREATE TABLE `provincias` (
  `provID` bigint(20) UNSIGNED NOT NULL,
  `provNombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provCodigo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `provincias`
--

INSERT INTO `provincias` (`provID`, `provNombre`, `provCodigo`) VALUES
(1, 'Ciudad Autónoma de Buenos Aires (CABA)', 'AR-C'),
(2, 'Buenos Aires', 'AR-B'),
(3, 'Catamarca', 'AR-K'),
(4, 'Córdoba', 'AR-X'),
(5, 'Corrientes', 'AR-W'),
(6, 'Entre Ríos', 'AR-E'),
(7, 'Jujuy', 'AR-Y'),
(8, 'Mendoza', 'AR-M'),
(9, 'La Rioja', 'AR-F'),
(10, 'Salta', 'AR-A'),
(11, 'San Juan', 'AR-J'),
(12, 'San Luis', 'AR-D'),
(13, 'Santa Fe', 'AR-S'),
(14, 'Santiago del Estero', 'AR-G'),
(15, 'Tucumán', 'AR-T'),
(16, 'Chaco', 'AR-H'),
(17, 'Chubut', 'AR-U'),
(18, 'Formosa', 'AR-P'),
(19, 'Misiones', 'AR-N'),
(20, 'Neuquén', 'AR-Q'),
(21, 'La Pampa', 'AR-L'),
(22, 'Río Negro', 'AR-R'),
(23, 'Santa Cruz', 'AR-Z'),
(24, 'Tierra del Fuego', 'AR-V');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `provincias`
--
ALTER TABLE `provincias`
  ADD PRIMARY KEY (`provID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `provincias`
--
ALTER TABLE `provincias`
  MODIFY `provID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
