-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-11-2021 a las 04:26:01
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `guild`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_producto`
--

CREATE TABLE `categoria_producto` (
  `ID_Categoria` int(11) DEFAULT NULL,
  `Nombre` varchar(20) DEFAULT NULL,
  `Descripcion` varchar(120) DEFAULT NULL,
  `FK_ID_Producto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `Nombre` varchar(20) DEFAULT NULL,
  `Apellido` varchar(20) DEFAULT NULL,
  `Num_Identificacion` int(11) DEFAULT NULL,
  `Ciudad` varchar(30) DEFAULT NULL,
  `País` varchar(30) DEFAULT NULL,
  `Codigo_Postal` int(11) DEFAULT NULL,
  `Telefono` int(11) DEFAULT NULL,
  `Fecha_Registro` date DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Codigo_Cliente` int(11) NOT NULL,
  `FK_ID_Producto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `ID_Pedido` int(11) DEFAULT NULL,
  `Fecha_pedido` date DEFAULT NULL,
  `Pais_Entrega` varchar(30) DEFAULT NULL,
  `Total` double DEFAULT NULL,
  `FK_ID_Producto` int(11) DEFAULT NULL,
  `FK_Codigo_Cliente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona_de_contacto`
--

CREATE TABLE `persona_de_contacto` (
  `Nombre_Contacto` varchar(30) DEFAULT NULL,
  `Telefono` int(11) DEFAULT NULL,
  `Campo` varchar(20) DEFAULT NULL,
  `FK_Num_Identificacion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `ID_Producto` int(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Descripcion` varchar(120) DEFAULT NULL,
  `Precio_Unitario` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_precio`
--

CREATE TABLE `producto_precio` (
  `ID_Producto` int(11) DEFAULT NULL,
  `Precio_Unitario` double DEFAULT NULL,
  `Campo` varchar(20) DEFAULT NULL,
  `FK_ID_Producto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `USERNAME` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `PASSWORD` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `EMAIL` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`ID`, `USERNAME`, `PASSWORD`, `EMAIL`) VALUES
(2, 'soymiguel', '$2y$10$3l2Fetn7BrENkBThJtrm0uBcPY00/AnT3Y/A1AFhJNmdfo7W9PUta', 'emocareemo@gmail.com'),
(3, 'deivi', '$2y$10$Xfli.QfR7DOzLeEvZI9hZumqxscgVGNFNt0dzDIFkfERmsALdo4V6', 'aaa@gmail.com'),
(4, 'ddd', '$2y$10$ZnzeDPnOnoaoqqK/nOzJFOM7QNfzA1mDymwIbYGmGGXsEEDBMPec.', 'ddd@dd.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vendedor`
--

CREATE TABLE `vendedor` (
  `Nombre` varchar(20) DEFAULT NULL,
  `Apellido` varchar(20) DEFAULT NULL,
  `Num_Identificacion` int(11) NOT NULL,
  `Ciudad` varchar(30) DEFAULT NULL,
  `Direccion` varchar(30) DEFAULT NULL,
  `Codigo_Postal` int(11) DEFAULT NULL,
  `Telefono` int(11) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria_producto`
--
ALTER TABLE `categoria_producto`
  ADD KEY `FK_ID_Producto` (`FK_ID_Producto`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`Codigo_Cliente`),
  ADD KEY `FK_ID_Producto` (`FK_ID_Producto`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD KEY `FK_ID_Producto` (`FK_ID_Producto`),
  ADD KEY `FK_Codigo_Cliente` (`FK_Codigo_Cliente`);

--
-- Indices de la tabla `persona_de_contacto`
--
ALTER TABLE `persona_de_contacto`
  ADD KEY `FK_Num_Identificacion` (`FK_Num_Identificacion`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`ID_Producto`);

--
-- Indices de la tabla `producto_precio`
--
ALTER TABLE `producto_precio`
  ADD KEY `FK_ID_Producto` (`FK_ID_Producto`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `vendedor`
--
ALTER TABLE `vendedor`
  ADD PRIMARY KEY (`Num_Identificacion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `categoria_producto`
--
ALTER TABLE `categoria_producto`
  ADD CONSTRAINT `categoria_producto_ibfk_1` FOREIGN KEY (`FK_ID_Producto`) REFERENCES `producto` (`ID_Producto`);

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`FK_ID_Producto`) REFERENCES `producto` (`ID_Producto`);

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`FK_ID_Producto`) REFERENCES `producto` (`ID_Producto`),
  ADD CONSTRAINT `pedido_ibfk_2` FOREIGN KEY (`FK_Codigo_Cliente`) REFERENCES `cliente` (`Codigo_Cliente`);

--
-- Filtros para la tabla `persona_de_contacto`
--
ALTER TABLE `persona_de_contacto`
  ADD CONSTRAINT `persona_de_contacto_ibfk_1` FOREIGN KEY (`FK_Num_Identificacion`) REFERENCES `vendedor` (`Num_Identificacion`);

--
-- Filtros para la tabla `producto_precio`
--
ALTER TABLE `producto_precio`
  ADD CONSTRAINT `producto_precio_ibfk_1` FOREIGN KEY (`FK_ID_Producto`) REFERENCES `producto` (`ID_Producto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
