-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-12-2020 a las 22:28:22
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `blog`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `accion`
--

CREATE TABLE `accion` (
  `id_accion` int(2) NOT NULL,
  `titulo` varchar(30) NOT NULL,
  `contenido` mediumtext NOT NULL,
  `autor` varchar(30) NOT NULL,
  `fecha` date NOT NULL,
  `imagen` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `accion`
--

INSERT INTO `accion` (`id_accion`, `titulo`, `contenido`, `autor`, `fecha`, `imagen`) VALUES
(1, 'Prueba 1', 'weq fqret3 gr 3rq 5 rg 45gq4 g54 w45rg', 'Jezer Alfredo', '0000-00-00', 0x4170706c652d57617463682d456e7472656e6f2d312e706e67);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id_admin` int(2) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `contrasenia` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id_admin`, `usuario`, `contrasenia`) VALUES
(1, 'prueba1@gmail.com', '123456789'),
(2, 'aa@aa', '7kkPQvxga@'),
(3, 'aa@aa', '7kkPQvxga@'),
(4, 'aa@aa', '7kkPQvxga@'),
(5, 'aa@aa', '7kkPQvxga@'),
(6, 'aa@aa', '7kkPQvxga@'),
(7, 'aa@aa', '7kkPQvxga@'),
(8, 'aa@aa', '7kkPQvxga@'),
(9, 'aa@aa', '7kkPQvxga@'),
(10, 'aa@aa', '7kkPQvxga@'),
(11, 'aa@aa', '7kkPQvxga@'),
(12, 'aa@aa', '7kkPQvxga@'),
(13, 'aa@aa', '7kkPQvxga@'),
(14, 'aa@aa', '7kkPQvxga@'),
(15, 'aa@aa', '7kkPQvxga@'),
(16, 'aa@aa', '7kkPQvxga@'),
(17, 'aa@aa', '7kkPQvxga@'),
(18, 'aa@aa', '7kkPQvxga@');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comedia`
--

CREATE TABLE `comedia` (
  `id_comedia` int(2) NOT NULL,
  `titulo` varchar(30) NOT NULL,
  `contenido` mediumtext NOT NULL,
  `autor` varchar(30) NOT NULL,
  `fecha` date NOT NULL,
  `imagen` blob NOT NULL,
  `deleted_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comedia`
--

INSERT INTO `comedia` (`id_comedia`, `titulo`, `contenido`, `autor`, `fecha`, `imagen`, `deleted_at`) VALUES
(1, 'Prueba 1', 'dqwrweregvth  wryh rtrthrh h rth 45h54 thww rrth th ', 'Jezer Perez', '0000-00-00', 0x4170706c652d57617463682d456e7472656e6f2d312e706e67, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticia`
--

CREATE TABLE `noticia` (
  `id_noticia` int(2) NOT NULL,
  `id_terror` int(2) NOT NULL,
  `id_comedia` int(2) NOT NULL,
  `id_accion` int(2) NOT NULL,
  `id_romantica` int(2) NOT NULL,
  `destacados` mediumtext NOT NULL,
  `id_admin` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `romantica`
--

CREATE TABLE `romantica` (
  `id_romantica` int(2) NOT NULL,
  `titulo` varchar(30) NOT NULL,
  `contenido` mediumtext NOT NULL,
  `autor` varchar(30) NOT NULL,
  `fecha` date NOT NULL,
  `imagen` blob NOT NULL,
  `deleted_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `romantica`
--

INSERT INTO `romantica` (`id_romantica`, `titulo`, `contenido`, `autor`, `fecha`, `imagen`, `deleted_at`) VALUES
(1, 'Prueba 1', 'wdsqfwerf wrgf 3rg reg we f34 35g  4wrg re dbf dger ', 'Jezer Perez', '0000-00-00', 0x4170706c652d57617463682d456e7472656e6f2d312e706e67, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `terror`
--

CREATE TABLE `terror` (
  `id_terror` int(2) NOT NULL,
  `titulo` varchar(30) NOT NULL,
  `contenido` mediumtext NOT NULL,
  `autor` varchar(30) NOT NULL,
  `fecha` varchar(25) NOT NULL,
  `imagen` blob DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `terror`
--

INSERT INTO `terror` (`id_terror`, `titulo`, `contenido`, `autor`, `fecha`, `imagen`, `deleted_at`) VALUES
(1, 'Preuba', '13rew getybrtbhrty6 4y64ybhr t', 'Jezer Perez', '10712/2020', 0x4170706c652d57617463682d456e7472656e6f2d312e706e67, NULL),
(5, 'etgby btrh', 'htrbhbrthbrtbhtrbhbrttb', 'werwt5', '10701/2020', 0x4170706c652d57617463682d456e7472656e6f2d312e706e67, NULL),
(6, '123ere4wet', '4twvtvrterta re3er treg ', 'ertbterat ', '10/02/2012', 0x4170706c652d57617463682d456e7472656e6f2d312e706e67, NULL),
(7, 'Prueba 1', 'dqwrweregvth  wryh rtrthrh h rth 45h54 thww rrth th ', 'Jezer Perez', '11/02/20202', 0x4170706c652d57617463682d456e7472656e6f2d312e706e67, NULL),
(8, 'Prueba 1', 'dqwrweregvth  wryh rtrthrh h rth 45h54 thww rrth th ', 'Jezer Perez', '11/02/20202', 0x4170706c652d57617463682d456e7472656e6f2d312e706e67, NULL),
(9, 'Prueba 1', 'dqwrweregvth  wryh rtrthrh h rth 45h54 thww rrth th ', 'Jezer Perez', '11/02/20202', 0x4170706c652d57617463682d456e7472656e6f2d312e706e67, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `accion`
--
ALTER TABLE `accion`
  ADD PRIMARY KEY (`id_accion`);

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indices de la tabla `comedia`
--
ALTER TABLE `comedia`
  ADD PRIMARY KEY (`id_comedia`);

--
-- Indices de la tabla `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`id_noticia`);

--
-- Indices de la tabla `romantica`
--
ALTER TABLE `romantica`
  ADD PRIMARY KEY (`id_romantica`);

--
-- Indices de la tabla `terror`
--
ALTER TABLE `terror`
  ADD PRIMARY KEY (`id_terror`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `accion`
--
ALTER TABLE `accion`
  MODIFY `id_accion` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id_admin` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `comedia`
--
ALTER TABLE `comedia`
  MODIFY `id_comedia` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `noticia`
--
ALTER TABLE `noticia`
  MODIFY `id_noticia` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `romantica`
--
ALTER TABLE `romantica`
  MODIFY `id_romantica` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `terror`
--
ALTER TABLE `terror`
  MODIFY `id_terror` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
