-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-03-2024 a las 01:34:34
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registro_de_acciones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acciones_registradas`
--

CREATE TABLE `acciones_registradas` (
  `id_Registro_Accion` int(10) NOT NULL,
  `nombre_Accion` varchar(30) NOT NULL,
  `fecha_Compra` date NOT NULL,
  `precio_Compra` float NOT NULL,
  `cantidad_Acciones` int(10) NOT NULL,
  `costo_Total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `acciones_registradas`
--

INSERT INTO `acciones_registradas` (`id_Registro_Accion`, `nombre_Accion`, `fecha_Compra`, `precio_Compra`, `cantidad_Acciones`, `costo_Total`) VALUES
(1, 'AAPL', '2024-01-02', 125.54, 10, 1255.4),
(2, 'MSFT', '2024-02-29', 350, 6, 2100),
(3, 'AMZN', '2024-03-03', 25.6, 100, 2560),
(4, 'TSLA', '2024-03-03', 523.1, 6, 3138.6);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acciones_registradas`
--
ALTER TABLE `acciones_registradas`
  ADD PRIMARY KEY (`id_Registro_Accion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `acciones_registradas`
--
ALTER TABLE `acciones_registradas`
  MODIFY `id_Registro_Accion` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
