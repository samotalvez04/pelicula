-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-06-2021 a las 22:43:34
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pelicula`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE `peliculas` (
  `idPeliculas` int(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `img` varchar(200) DEFAULT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`idPeliculas`, `nombre`, `img`, `activo`) VALUES
(1, 'Tarzan', 'Tarzan', 1),
(2, 'Tom and Jerry', 'Tom and Jerry', 1),
(3, 'Harry Potter', 'https://www.google.com/imgres?imgurl=https%3A%2F%2Fwww.ecestaticos.com%2Fimagestatic%2Fclipping%2Fd71%2F170%2Fd7117075d24e347aea3fae9a3876bea3%2Fla-saga-de-peliculas-de-harry-potter-en-amazon-prime-vi', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`idPeliculas`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  MODIFY `idPeliculas` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
