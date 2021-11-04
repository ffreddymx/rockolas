-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-11-2021 a las 03:03:44
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `rockolas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellidos` varchar(60) NOT NULL,
  `Sexo` varchar(10) NOT NULL,
  `Telefono` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Direccion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `Nombre`, `Apellidos`, `Sexo`, `Telefono`, `Email`, `Direccion`) VALUES
(1, 'Las Marimbas de Saltillo', '', 'Otro', '9932876445', 'marsaltillo@google.com', 'Av. Col. Centro. Teapa Tabasco'),
(3, 'Augusto ', 'Martinez Diaz', 'Hombre', '9323222323', 'augusto@google.com', 'Conocida. SN');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipohardware`
--

CREATE TABLE `tipohardware` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipohardware`
--

INSERT INTO `tipohardware` (`id`, `Nombre`) VALUES
(1, 'Bocinas'),
(2, 'Tarjeta Madre'),
(3, 'Almacenamiento');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `Id` int(11) NOT NULL,
  `usuario` varchar(10) COLLATE latin1_spanish_ci NOT NULL,
  `password` varchar(10) COLLATE latin1_spanish_ci NOT NULL,
  `Tipo` int(1) NOT NULL,
  `Nombre` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `Grado` int(5) NOT NULL,
  `Grupo` varchar(2) COLLATE latin1_spanish_ci NOT NULL,
  `Email` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `Direccion` varchar(250) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`Id`, `usuario`, `password`, `Tipo`, `Nombre`, `Grado`, `Grupo`, `Email`, `Direccion`) VALUES
(6, 'jordan', 'jordan', 1, 'Jordan Petersonxx', 0, '', 'jordan@gmail.com', 'conocida'),
(7, 'manrrique', 'manrrique', 1, 'Manrrique Ramoz', 0, '', 'manrrique@gmail.com', 'Conocida');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `password` varchar(255) NOT NULL,
  `rol` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipohardware`
--
ALTER TABLE `tipohardware`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipohardware`
--
ALTER TABLE `tipohardware`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
