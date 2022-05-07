-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-05-2022 a las 05:55:00
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `test`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `name_user` varchar(20) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` char(1) NOT NULL,
  `password` varchar(50) NOT NULL,
  `dni` varchar(10) NOT NULL,
  `status` int(11) NOT NULL,
  `phone` varchar(1000) NOT NULL,
  `type_phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `name`, `name_user`, `age`, `gender`, `password`, `dni`, `status`, `phone`, `type_phone`) VALUES
(1, '33', 'ali', 1, 'F', '123456', '133', 1, 'celular,33,7655,111,344,99999', 'celular'),
(2, 'dsdsdsd', '', 5000, 'F', '', 'dsdsd', 1, '', ''),
(3, 'dsdsdsd', '', 223, 'F', '', 'dsdsd', 0, '', ''),
(4, 'dsdsdsd', '', 223, 'F', '', 'dsdsd', 0, '', ''),
(5, 'ali gonzalo', '', 44, 'M', '', '44486252', 0, '', ''),
(6, 'fdfdf', '', 333, 'F', '', 'fdfdf', 0, '', ''),
(7, 'dsds', '', 122, 'M', '', 'dsd', 0, '', ''),
(8, 'fdf', '', 22, 'F', '', 'ed', 1, '', ''),
(9, 'dsd', '', 34, 'M', '', 'dsd3', 1, '', ''),
(10, '', '', 0, 'M', '', '', 1, '', ''),
(11, '', '', 0, 'M', '', '', 1, '', ''),
(12, 'fdfdffd', '', 0, 'M', '', 'dsdsd', 1, '', ''),
(13, 'fdfdffd', '', 0, 'M', '', 'dsdsd', 1, '', ''),
(14, '', '', 0, 'M', '', '', 1, '', ''),
(15, '', '', 0, 'M', '', '', 1, '', ''),
(16, '', '', 0, 'M', '', '', 1, '', ''),
(17, '', '', 0, 'M', '', '', 1, '', ''),
(18, '', '', 0, 'M', '', '', 1, '', ''),
(19, '', '', 0, 'M', '', '', 1, '', ''),
(20, '', '', 0, 'M', '', '', 1, '', ''),
(21, '', '', 0, 'M', '', '', 1, '', ''),
(22, '', '', 0, 'M', '', '', 1, '', ''),
(23, '', '', 0, 'M', '', '', 1, '', ''),
(24, '', '', 0, 'M', '', '', 1, '', ''),
(25, 'sd', '', 0, 'M', '', 'sdsd', 1, '', ''),
(26, 'sdsd', '', 0, 'F', '', 'dsd', 1, '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_phone`
--

CREATE TABLE `user_phone` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user_phone`
--
ALTER TABLE `user_phone`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `user_phone`
--
ALTER TABLE `user_phone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
