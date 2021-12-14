-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-12-2021 a las 16:00:21
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
  `Bar` varchar(200) NOT NULL,
  `Direccion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `Nombre`, `Apellidos`, `Sexo`, `Telefono`, `Email`, `Bar`, `Direccion`) VALUES
(1, 'Las Marimbas de Saltillo', '', 'Hombre', '9932876445', 'marsaltillo@google.com', 'Salomon', 'Av. Col. Centro. Teapa Tabasco'),
(3, 'Augusto ', 'Martinez Diaz', 'Hombre', '9323222323', 'augusto@google.com', '', 'Conocida. SN'),
(4, 'sss', '', 'Hombre', '', '', '', ''),
(5, '', '', 'Empresa', '', '', 'Latext', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `color`
--

CREATE TABLE `color` (
  `id` int(11) NOT NULL,
  `Color` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `color`
--

INSERT INTO `color` (`id`, `Color`) VALUES
(1, 'Rojo'),
(2, 'Negro con Azul Plateado'),
(3, 'Azul'),
(4, 'Metalico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id` int(11) NOT NULL,
  `idequipo` int(11) NOT NULL,
  `Descripcion` varchar(100) NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `Costo` float NOT NULL,
  `Fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`id`, `idequipo`, `Descripcion`, `Cantidad`, `Costo`, `Fecha`) VALUES
(1, 3, 'Equipo en buen estado y calidad', 2, 602, '2021-11-14'),
(3, 5, 'En buen estado', 1, 20, '2021-11-15'),
(4, 3, 'Disco Duro de 500 Gb 5 años de uso', 5, 400, '2021-11-15'),
(5, 2, 'Seminueva, 6 puertos USB para procesor Core i3', 2, 1400, '2021-11-15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipotipo`
--

CREATE TABLE `equipotipo` (
  `id` int(11) NOT NULL,
  `Tipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `equipotipo`
--

INSERT INTO `equipotipo` (`id`, `Tipo`) VALUES
(1, 'Televisión'),
(2, 'Bocinas'),
(3, 'Tarjeta Madres'),
(4, 'Discos Duros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `id` int(11) NOT NULL,
  `Marca` varchar(50) NOT NULL,
  `Tipo` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`id`, `Marca`, `Tipo`) VALUES
(1, 'Bose', 'R'),
(2, 'Yamaha', 'R'),
(3, 'Kinston', 'H');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `renta`
--

CREATE TABLE `renta` (
  `id` int(11) NOT NULL,
  `idrockola` int(11) NOT NULL,
  `idcliente` int(11) NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `Costo` float NOT NULL,
  `Horas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `renta`
--

INSERT INTO `renta` (`id`, `idrockola`, `idcliente`, `Cantidad`, `Fecha`, `Costo`, `Horas`) VALUES
(2, 2, 1, 1, '2021-11-16', 200, 24),
(3, 3, 3, 1, '2021-11-18', 23, 2021),
(4, 3, 3, 1, '2021-11-18', 40, 2021),
(5, 2, 1, 1, '2021-11-18', 130, 20),
(6, 2, 4, 3, '2021-12-09', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rockola`
--

CREATE TABLE `rockola` (
  `id` int(11) NOT NULL,
  `idmarca` int(11) NOT NULL,
  `Modelo` varchar(50) NOT NULL,
  `Descripcion` varchar(250) NOT NULL,
  `Total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rockola`
--

INSERT INTO `rockola` (`id`, `idmarca`, `Modelo`, `Descripcion`, `Total`) VALUES
(2, 1, 'QWEQW32', 'Alta Fidelidad con 50 mil mp3 y disco duro de 500 GB', 2),
(3, 2, 'Lion Kind', 'Alta Fidelidad con 5000 Wats de potencia', 3);

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
(3, 'Almacenamiento'),
(5, 'Micrófono');

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

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `equipotipo`
--
ALTER TABLE `equipotipo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `renta`
--
ALTER TABLE `renta`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rockola`
--
ALTER TABLE `rockola`
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
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `color`
--
ALTER TABLE `color`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `equipotipo`
--
ALTER TABLE `equipotipo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `renta`
--
ALTER TABLE `renta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `rockola`
--
ALTER TABLE `rockola`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipohardware`
--
ALTER TABLE `tipohardware`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
