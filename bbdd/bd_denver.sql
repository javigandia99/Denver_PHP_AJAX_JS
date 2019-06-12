-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-06-2019 a las 23:36:43
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
-- Base de datos: `bd_denver`
--

DROP DATABASE IF EXISTS `bd_denver`;
CREATE DATABASE IF NOT EXISTS `bd_denver`;
USE `bd_denver`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL,
  `user` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `surname` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `address` text COLLATE utf8_spanish_ci NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `user`, `password`, `name`, `surname`, `email`, `phone`, `address`, `created`, `modified`) VALUES
(1, 'admin', 'admin', 'admin', '1234', 'admin1234@gmail.com', '123456789', 'Calle Admin 123, Falsa, Madrid', '2019-06-12 23:26:14', '2019-06-12 23:26:14'),
(2, '123', '123', 'Javier', 'Gandia Sanz', 'jgs@gmail.com', '123456789', 'javier@gmail.com', '2019-06-12 23:26:14', '2019-06-12 23:26:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mis_productos`
--

CREATE TABLE IF NOT EXISTS `mis_productos` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `description` text COLLATE utf8_spanish_ci NOT NULL,
  `price` float(10,2) NOT NULL,
  `photo` text COLLATE utf8_spanish_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `mis_productos`
--

INSERT INTO `mis_productos` (`id`, `name`, `description`, `price`, `photo`, `created`, `modified`) VALUES
(1, 'Camiseta ', 'camiseta ayax prok inspirada en los bebes recien nacidos', 35.00, '1.jpg', '2019-06-12 00:00:00', '2019-06-12 00:00:00'),
(2, 'Camiseta azul con rostro', 'camiseta azul con rostro', 100.00, '2.jpg', '2019-06-12 00:00:00', '0000-00-00 00:00:00'),
(3, 'Abrigo', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.', 80.00, '3.jpg', '2019-06-12 00:00:00', '0000-00-00 00:00:00'),
(4, 'Abrigo contra temperaturas bajo cero ', 'Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance.', 200.00, '4.jpg', '2019-06-12 00:00:00', '2019-06-12 00:00:00'),
(5, 'Camiseta', 'Camiseta marron licor de cafe', 140.00, '5.jpg', '2019-06-12 00:00:00', '2019-06-12 00:00:00'),
(6, 'Zapatillas adidas ultraboost', 'La reinvención del running. Esta zapatilla de running neutra garantiza una comodidad y un retorno de energía inigualables. Presenta un diseño ligero y elástico con una parte superior de punto sin costuras concebida con tecnología de captura de movimiento para aportarte una gran sujeción mientras corres. Su silueta ajustada se adapta al pie y reduce los puntos de presión.', 200.00, '6.jpg', '2019-06-12 00:00:00', '2019-06-12 00:00:00'),
(7, 'Sudadera Adidas Gris', 'Completa tu recorrido bajo par pese al frío con este jersey de golf. Presenta un tejido transpirable y un aislamiento ligero que expulsa el sudor de la piel y retiene el calor corporal. La cremallera hasta el pecho te permite regular la ventilación a tu gusto. Su diseño con un toque elástico te proporciona una total libertad de movimiento.', 60.00, '7.jpg', '2019-06-12 00:00:00', '2019-06-12 00:00:00'),
(8, 'Sudadera', 'nike gris ', 55.00, '8.jpg', '2019-06-12 00:00:00', '2019-06-12 00:00:00'),
(9, 'Zapatillas', 'converse azules ', 95.00, '9.jpg', '2019-06-12 00:00:00', '2019-06-12 00:00:00'),
(10, 'Camiseta', 'maravillosa orquesta de alcohol', 20.00, '10.jpg', '2019-06-12 00:00:00', '2019-06-12 00:00:00'),
(11, 'Camiseta', 'camista naranja casual', 27.00, '11.jpg', '2019-06-12 00:00:00', '2019-06-12 00:00:00'),
(12, 'Abrigo', ' Especial para montaña ', 135.00, '12.jpg', '2019-06-12 00:00:00', '2019-06-12 00:00:00'),
(13, 'Sudadera', 'kappa ', 38.00, '13.jpg', '2019-06-12 00:00:00', '2019-06-12 00:00:00'),
(14, 'Camiseta', 'camiseta azul papa te mereces un monumento', 80.00, '14.jpg', '2019-06-12 00:00:00', '2019-06-12 00:00:00'),
(15, 'Camiseta', ' camiseta roja de volkswagen escarabajo', 43.00, '15.jpg', '2019-06-12 00:00:00', '2019-06-12 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE IF NOT EXISTS `pedidos` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `total_price` float(10,2) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos_productos`
--

CREATE TABLE `pedidos_productos` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_user` int(11) NOT NULL,
  `usuario` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `contrasena` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `numerotelefono` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_user`, `usuario`, `contrasena`, `nombre`, `apellidos`, `email`, `numerotelefono`) VALUES
(1, 'w', 'w ', 'w', 'w', '112', 0),
(2, 'we', 'we ', 'we', 'we', 'we@gmail.com', 123),
(3, 'w', 'w ', 'w', 'w', '444rrr@tuntun.es', 43);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mis_productos`
--
ALTER TABLE `mis_productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pedidos_productos`
--
ALTER TABLE `pedidos_productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `mis_productos`
--
ALTER TABLE `mis_productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pedidos_productos`
--
ALTER TABLE `pedidos_productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
