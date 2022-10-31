-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-05-2022 a las 05:03:51
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `alkomprar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
  `id_pro` int(12) NOT NULL,
  `nom_pro` varchar(22) NOT NULL,
  `id_tip_pro` int(12) NOT NULL,
  `precio` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`id_pro`, `nom_pro`, `id_tip_pro`, `precio`) VALUES
(123, 'Microondas', 2, 10000000),
(3444, 'Celulares', 2, 340000),
(7888, 'Licuadora', 2, 140000),
(23123, 'Televisor', 1, 150000),
(349339, 'cama', 2, 200000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nuevo`
--

CREATE TABLE `nuevo` (
  `nombre` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `nuevo`
--

INSERT INTO `nuevo` (`nombre`) VALUES
('Andres'),
('Natalia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE `tipo` (
  `id_tip_pro` int(12) NOT NULL,
  `tip_pro` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo`
--

INSERT INTO `tipo` (`id_tip_pro`, `tip_pro`) VALUES
(1, 'electrodomesticos'),
(2, 'hogar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_transa`
--

CREATE TABLE `tipo_transa` (
  `id_tip_trans` int(2) NOT NULL,
  `tip_transa` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_transa`
--

INSERT INTO `tipo_transa` (`id_tip_trans`, `tip_transa`) VALUES
(1, 'compra'),
(2, 'venta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuarios`
--

CREATE TABLE `tipo_usuarios` (
  `id_user` int(11) NOT NULL,
  `id_tip_user` int(2) NOT NULL,
  `pass_user` varchar(11) NOT NULL,
  `email` varchar(25) DEFAULT NULL,
  `nom_user` varchar(24) NOT NULL,
  `ap_user` varchar(24) NOT NULL,
  `cel_user` bigint(10) NOT NULL,
  `dir_user` varchar(40) NOT NULL,
  `pin` int(4) DEFAULT NULL,
  `foto` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_usuarios`
--

INSERT INTO `tipo_usuarios` (`id_user`, `id_tip_user`, `pass_user`, `email`, `nom_user`, `ap_user`, `cel_user`, `dir_user`, `pin`, `foto`) VALUES
(111, 3, '334', 'ruiz@hotmail', 'ana', 'gutierrez', 133, 'calle 00', 244, 0x30),
(4454, 2, '5657', 'simon@hotm', 'simon', 'ferrera', 3434, 'los  cerritos 5', 566, 0x70657266696c2e6a7067),
(4567, 2, '778', 'cdd@fg', 'natalia', 'suarez', 3455, 'calle 70', 456, 0x342e6a7067),
(9988, 3, '8712', 'tafur@hot', 'Luis', 'Tafur', 31233, 'calle 3 manzana', 224, ''),
(18293, 1, '233', 'hello@udbd', 'camilo', 'garzon', 37883, 'avenida 2', 288, 0x30),
(44400, 1, '566', 'Nancy@hot', 'Nancy', 'gutierrez', 45444, 'castilla', 566, 0x6d617269612e6a7067);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tip_user`
--

CREATE TABLE `tip_user` (
  `id_tip_user` int(2) NOT NULL,
  `tipo_user` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tip_user`
--

INSERT INTO `tip_user` (`id_tip_user`, `tipo_user`) VALUES
(1, 'administrador'),
(2, 'vendedor'),
(3, 'comprador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transaccion`
--

CREATE TABLE `transaccion` (
  `fact` int(12) NOT NULL,
  `id_pro` int(12) NOT NULL,
  `id_user` int(11) NOT NULL,
  `fech_hora_v` date DEFAULT NULL,
  `id_tip_trans` int(2) NOT NULL,
  `cant` int(2) NOT NULL,
  `valor_unit` int(5) NOT NULL,
  `valor_total` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `transaccion`
--

INSERT INTO `transaccion` (`fact`, `id_pro`, `id_user`, `fech_hora_v`, `id_tip_trans`, `cant`, `valor_unit`, `valor_total`) VALUES
(707, 23123, 4567, '2022-05-04', 2, 1, 150000, 150000),
(1233, 123, 111, '0000-00-00', 1, 1, 10000000, 10000000),
(1234, 23123, 111, '2022-02-01', 2, 1, 150000, 150000),
(4545, 7888, 9988, '2022-05-04', 1, 1, 140000, 1),
(6464, 3444, 18293, '2022-04-01', 1, 2, 400000, 800000),
(6600, 349339, 111, '2022-05-04', 2, 1, 200000, 200000),
(7777, 7888, 4567, '2022-05-04', 2, 1, 140000, 140000),
(8080, 23123, 44400, '2022-05-04', 1, 1, 150000, 1),
(12332, 123, 4454, '2022-05-02', 1, 1, 10000000, 10000000),
(45545, 123, 111, '2022-05-04', 2, 2, 10000000, 20000000);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`id_pro`),
  ADD KEY `id_tip_pro` (`id_tip_pro`);

--
-- Indices de la tabla `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`id_tip_pro`);

--
-- Indices de la tabla `tipo_transa`
--
ALTER TABLE `tipo_transa`
  ADD PRIMARY KEY (`id_tip_trans`);

--
-- Indices de la tabla `tipo_usuarios`
--
ALTER TABLE `tipo_usuarios`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_tip_user` (`id_tip_user`);

--
-- Indices de la tabla `tip_user`
--
ALTER TABLE `tip_user`
  ADD PRIMARY KEY (`id_tip_user`);

--
-- Indices de la tabla `transaccion`
--
ALTER TABLE `transaccion`
  ADD PRIMARY KEY (`fact`),
  ADD KEY `id_pro` (`id_pro`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_tip_trans` (`id_tip_trans`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD CONSTRAINT `articulo_ibfk_1` FOREIGN KEY (`id_tip_pro`) REFERENCES `tipo` (`id_tip_pro`);

--
-- Filtros para la tabla `tipo_usuarios`
--
ALTER TABLE `tipo_usuarios`
  ADD CONSTRAINT `tipo_usuarios_ibfk_1` FOREIGN KEY (`id_tip_user`) REFERENCES `tip_user` (`id_tip_user`);

--
-- Filtros para la tabla `transaccion`
--
ALTER TABLE `transaccion`
  ADD CONSTRAINT `transaccion_ibfk_1` FOREIGN KEY (`id_pro`) REFERENCES `articulo` (`id_pro`),
  ADD CONSTRAINT `transaccion_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `tipo_usuarios` (`id_user`),
  ADD CONSTRAINT `transaccion_ibfk_3` FOREIGN KEY (`id_tip_trans`) REFERENCES `tipo_transa` (`id_tip_trans`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
