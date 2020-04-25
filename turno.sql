-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-09-2019 a las 22:54:04
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `turno`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tunos`
--

CREATE TABLE `tunos` (
  `id` int(11) NOT NULL,
  `modulo` varchar(15) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tunos`
--

INSERT INTO `tunos` (`id`, `modulo`) VALUES
(1, 'MODULO 1'),
(2, 'MODULO 2'),
(3, 'MODULO 2'),
(4, 'MODULO 1'),
(5, 'MODULO 1'),
(6, 'MODULO 1'),
(7, 'MODULO 4'),
(8, 'MODULO 1'),
(9, 'MODULO 1'),
(10, 'MODULO 1'),
(11, 'MODULO 1'),
(12, 'MODULO 1'),
(13, 'MODULO 1'),
(14, 'MODULO 1'),
(15, 'MODULO 1'),
(16, 'MODULO 1'),
(17, 'MODULO 1'),
(18, 'MODULO 1'),
(19, 'MODULO 1'),
(20, 'MODULO 1'),
(21, 'MODULO 1'),
(22, 'MODULO 1'),
(23, 'MODULO 1'),
(24, 'MODULO 1'),
(25, 'MODULO 1'),
(26, 'MODULO 1'),
(27, 'MODULO 1'),
(28, 'MODULO 2'),
(29, 'MODULO 2'),
(30, 'MODULO 2'),
(31, 'MODULO 2'),
(32, 'MODULO 2'),
(33, 'MODULO 2'),
(34, 'MODULO 2'),
(35, 'MODULO 2'),
(36, 'MODULO 2'),
(37, 'MODULO 2'),
(38, 'MODULO 2'),
(39, 'MODULO 2'),
(40, 'MODULO 1'),
(41, 'MODULO 3'),
(42, 'MODULO 2'),
(43, 'MODULO 1'),
(44, 'MODULO 1'),
(45, 'MODULO 1'),
(46, 'MODULO 1'),
(47, 'MODULO 1'),
(48, 'MODULO 1'),
(49, 'MODULO 1'),
(50, 'MODULO 2'),
(51, 'MODULO 1'),
(52, 'MODULO 3'),
(53, 'MODULO 3');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tunos`
--
ALTER TABLE `tunos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tunos`
--
ALTER TABLE `tunos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
