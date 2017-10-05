-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-10-2017 a las 00:27:05
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `examen`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lineastelefonicas`
--

CREATE TABLE `lineastelefonicas` (
  `numero` int(11) NOT NULL,
  `operador` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `plan` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `marcacelular` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `modelocelular` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `fechafirmacontrato` date NOT NULL,
  `plazomeses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `lineastelefonicas`
--

INSERT INTO `lineastelefonicas` (`numero`, `operador`, `plan`, `marcacelular`, `modelocelular`, `fechafirmacontrato`, `plazomeses`) VALUES
(1, 'claro', 'claro1', 'iPhone', '8 plus', '2017-10-01', 24),
(2, 'kolbi', 'kolbi3', 'Samsung', 'note8', '2017-09-06', 12),
(3, 'movistar', 'movistar3', 'huawei', 'p9', '2017-09-29', 36),
(4, 'claro', 'claro6', 'nokia', 'nokia9', '2017-08-09', 0),
(5, 'kolbi', '24', 'iPhone ', 'x', '2017-10-05', 24);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `lineastelefonicas`
--
ALTER TABLE `lineastelefonicas`
  ADD PRIMARY KEY (`numero`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
