-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-10-2022 a las 22:29:19
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inventario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL,
  `nombre_categoria` varchar(255) NOT NULL,
  `descripcion_categoria` varchar(255) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `nombre_categoria`, `descripcion_categoria`, `date_added`) VALUES
(10, 'Coral Azul - Inv FL', 'Joyas y bisuterÃ­a Coral Azul Inventario fuera de linea', '2022-10-03 00:11:58'),
(11, 'Coral Azul  - Tienda', 'Productos en tienda Coral Azul', '2022-10-03 00:42:38'),
(12, 'Identidad', 'Inventario de Identidad', '2022-10-03 01:07:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--

CREATE TABLE `historial` (
  `id_historial` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `nota` varchar(255) NOT NULL,
  `referencia` varchar(100) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `historial`
--

INSERT INTO `historial` (`id_historial`, `id_producto`, `user_id`, `fecha`, `nota`, `referencia`, `cantidad`) VALUES
(18, 20, 1, '2022-10-03 01:59:46', 'Manuel agregÃ³ 1 producto(s) al inventario', 'CA03', 1),
(19, 21, 1, '2022-10-03 02:00:58', 'Manuel agregÃ³ 1 producto(s) al inventario', 'CA04', 1),
(20, 22, 1, '2022-10-03 02:01:45', 'Manuel agregÃ³ 1 producto(s) al inventario', 'CA05', 1),
(21, 23, 1, '2022-10-03 02:02:30', 'Manuel agregÃ³ 1 producto(s) al inventario', 'CA08', 1),
(22, 24, 1, '2022-10-03 02:03:23', 'Manuel agregÃ³ 1 producto(s) al inventario', 'CA11', 1),
(23, 25, 1, '2022-10-03 02:03:58', 'Manuel agregÃ³ 1 producto(s) al inventario', 'CA19', 1),
(24, 26, 1, '2022-10-03 02:04:56', 'Manuel agregÃ³ 1 producto(s) al inventario', 'CA06', 1),
(25, 27, 1, '2022-10-03 02:05:35', 'Manuel agregÃ³ 1 producto(s) al inventario', 'CA09', 1),
(26, 28, 1, '2022-10-03 02:06:08', 'Manuel agregÃ³ 1 producto(s) al inventario', 'CA12', 1),
(27, 29, 1, '2022-10-03 02:06:50', 'Manuel agregÃ³ 1 producto(s) al inventario', 'CA13', 1),
(28, 30, 1, '2022-10-03 02:07:27', 'Manuel agregÃ³ 1 producto(s) al inventario', 'CA14', 1),
(29, 31, 1, '2022-10-03 02:08:14', 'Manuel agregÃ³ 1 producto(s) al inventario', 'CA15', 1),
(30, 32, 1, '2022-10-03 02:10:15', 'Manuel agregÃ³ 1 producto(s) al inventario', 'CA16', 1),
(31, 33, 1, '2022-10-03 02:10:50', 'Manuel agregÃ³ 1 producto(s) al inventario', 'CA17', 1),
(32, 34, 1, '2022-10-03 02:11:25', 'Manuel agregÃ³ 1 producto(s) al inventario', 'CA18', 1),
(33, 35, 1, '2022-10-03 02:12:00', 'Manuel agregÃ³ 1 producto(s) al inventario', 'CA20', 1),
(34, 36, 1, '2022-10-05 01:54:09', 'Manuel agregÃ³ 1 producto(s) al inventario', 'CA21', 1),
(35, 37, 1, '2022-10-05 01:56:37', 'Manuel agregÃ³ 1 producto(s) al inventario', 'CA22', 1),
(36, 38, 1, '2022-10-05 02:01:13', 'Manuel agregÃ³ 1 producto(s) al inventario', 'CA23', 1),
(37, 39, 1, '2022-10-08 01:26:39', 'Manuel agregÃ³ 1 producto(s) al inventario', 'CA24', 1),
(38, 40, 1, '2022-10-08 01:33:13', 'Manuel agregÃ³ 2 producto(s) al inventario', 'CA25', 2),
(39, 41, 1, '2022-10-08 01:46:16', 'Manuel agregÃ³ 0 producto(s) al inventario', 'CA26', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id_producto` int(11) NOT NULL,
  `codigo_producto` char(20) NOT NULL,
  `nombre_producto` char(255) NOT NULL,
  `date_added` datetime NOT NULL,
  `precio_producto` double NOT NULL,
  `stock` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id_producto`, `codigo_producto`, `nombre_producto`, `date_added`, `precio_producto`, `stock`, `id_categoria`) VALUES
(20, 'CA03', 'Brazalete Tornasol - Alambre Goldfield', '2022-10-03 01:59:46', 14, 1, 11),
(21, 'CA04', 'Brazalete de Cristal Gris y rojo Multi color', '2022-10-03 02:00:58', 20, 1, 11),
(22, 'CA05', 'Pendientes Tornasol en forma de gota', '2022-10-03 02:01:45', 20, 1, 11),
(23, 'CA08', 'Pendiente de 3 corazones', '2022-10-03 02:02:30', 9, 1, 11),
(24, 'CA11', 'Pulsera de cristal y semillas de MarÃ­a', '2022-10-03 02:03:23', 5, 1, 11),
(25, 'CA19', 'Topitos en forma de triÃ¡ngulo', '2022-10-03 02:03:58', 5, 1, 11),
(26, 'CA06', 'Pendiente en forma de gota - Color Azul y rojo', '2022-10-03 02:04:56', 18, 1, 11),
(27, 'CA09', 'Pendiente en forma de Ã³valo color verde', '2022-10-03 02:05:35', 12, 1, 11),
(28, 'CA12', 'Juego de collar y topitos color rosa con corazÃ³n', '2022-10-03 02:06:08', 15, 1, 11),
(29, 'CA13', 'Collar de perlas de vidrio y alambre Goldfield con dije de corazÃ³n', '2022-10-03 02:06:50', 10, 1, 10),
(30, 'CA14', 'Shoker de shakiras y dije de cruz', '2022-10-03 02:07:27', 9, 1, 10),
(31, 'CA15', 'Collar de cadena de aluminio, cristales y dije de cruz', '2022-10-03 02:08:14', 15, 1, 11),
(32, 'CA16', 'Collar de hilo ajustable con dije de libÃ©lula', '2022-10-03 02:10:15', 9, 1, 10),
(33, 'CA17', 'Topito con cristales amarillos', '2022-10-03 02:10:50', 5, 1, 10),
(34, 'CA18', 'Topitos en forma de flor con shakiras', '2022-10-03 02:11:25', 5, 1, 11),
(35, 'CA20', 'Pulsera de aluminio y cristales', '2022-10-03 02:12:00', 6.5, 1, 11),
(36, 'CA21', 'Pendientes lluvia de amor - C. Invierno', '2022-10-05 01:54:09', 16.5, 1, 11),
(37, 'CA22', 'Pendientes lÃ¡grima de cristal', '2022-10-05 01:56:37', 10.5, 1, 10),
(38, 'CA23', 'Topito de corazÃ³n multicolor', '2022-10-05 02:01:13', 6.5, 1, 11),
(39, 'CA24', 'Pendiente en forma de ovalo y corazÃ³n', '2022-10-08 01:26:39', 15, 1, 11),
(40, 'CA25', 'Anillo en forma de corazÃ³n', '2022-10-08 01:33:13', 7.5, 2, 11),
(41, 'CA26', 'Pendiente lÃ¡grima invernal', '2022-10-08 01:46:16', 10, 0, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL COMMENT 'auto incrementing user_id of each user, unique index',
  `firstname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s name, unique',
  `user_password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s password in salted and hashed format',
  `user_email` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s email, unique',
  `date_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='user data';

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `lastname`, `user_name`, `user_password_hash`, `user_email`, `date_added`) VALUES
(1, 'Manuel', 'Herrera', 'Manuel', '$2y$10$FkhN4A2dkOqZHf5Lg9Awre/BTBNTf2SP71y.Y86ooBB8wN9SopI5e', 'manuh0170g@icloud.com', '2016-12-19 15:06:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `historial`
--
ALTER TABLE `historial`
  ADD PRIMARY KEY (`id_historial`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_producto`),
  ADD UNIQUE KEY `codigo_producto` (`codigo_producto`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `historial`
--
ALTER TABLE `historial`
  MODIFY `id_historial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'auto incrementing user_id of each user, unique index', AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `historial`
--
ALTER TABLE `historial`
  ADD CONSTRAINT `fk_id_producto` FOREIGN KEY (`id_producto`) REFERENCES `products` (`id_producto`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
