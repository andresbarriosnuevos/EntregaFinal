-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-04-2024 a las 04:45:49
-- Versión del servidor: 8.0.31
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `clientes_consultoria`
--
CREATE DATABASE IF NOT EXISTS `clientes_consultoria` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `clientes_consultoria`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `ID` int NOT NULL,
  `usuario` varchar(15) NOT NULL,
  `contrasena` varchar(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `ano_nacimiento` int DEFAULT NULL,
  `celular` varchar(50) DEFAULT NULL,
  `correo` varchar(50) NOT NULL,
  `empresa` varchar(50) NOT NULL,
  `campo_accion` varchar(50) DEFAULT NULL,
  `ciudad` varchar(50) NOT NULL,
  `imagen` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`ID`, `usuario`, `contrasena`, `nombre`, `apellido`, `ano_nacimiento`, `celular`, `correo`, `empresa`, `campo_accion`, `ciudad`, `imagen`) VALUES
(1, 'admin', 'admin', 'Andrés', 'Barriosnuevos', 1992, '3109874567', 'abarriosnuevos@gmail.com', 'Industrializa Ingeniería', 'Consultorías', 'Bogotá', 'hombre1.png'),
(2, 'adriana_jurado', '1234', 'Adriana', 'Jurado', 1995, '3124567890', 'adriana_jurado@gmail.com', 'Construcciones Jurado', 'Construcción', 'Valledupar', 'mujer1.png'),
(3, 'adriana_jurado1', '1234', 'Adriana', 'Jurado', 1990, '3124567890', 'adriana_jurado@gmail.com', 'Construcciones Jurado', 'Construcción', 'Arauca', 'mujer1.png'),
(13, 'garcia_diana', '1234', 'Diana ', 'Garcia', 1999, '3106087654', 'garcia_diana@gmail.com', 'Metalicas Garcia', 'metalurgica', 'Arauca', 'hombre1.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultas`
--

CREATE TABLE `consultas` (
  `ID` int NOT NULL,
  `IdUsuario` int NOT NULL,
  `asunto` varchar(255) NOT NULL,
  `objetivos` text NOT NULL,
  `detalles` text NOT NULL,
  `revisada` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `consultas`
--

INSERT INTO `consultas` (`ID`, `IdUsuario`, `asunto`, `objetivos`, `detalles`, `revisada`) VALUES
(1, 2, 'Asesoria en montaje de un nuevo puesto de trabajo', 'Iniciar un nuevo puesto de trabajo en la empresa', 'Deseo que me ayuden a crear todo un nuevo puesto de trabajo en mi empresa, por favor contacteneme a mi correo o mi telefono. gracias', 0),
(2, 2, 'Asesoria en montaje de un nuevo proceso', 'Iniciar un nuevo proceso en una línea de producción.', 'Necesito que se encarguen de todo el proceso de montaje de una nueva linea de producción completa.', 1),
(3, 2, 'Asesoria en evaluación de métodos y tiempos', 'Evaluar un proceso', 'Necesito evaluar un proceso para ver como podemos ser más eficientes, dónde estamos perdiendo tiempo.', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- Indices de la tabla `consultas`
--
ALTER TABLE `consultas`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_usuario` (`IdUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `consultas`
--
ALTER TABLE `consultas`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `consultas`
--
ALTER TABLE `consultas`
  ADD CONSTRAINT `consultas_ibfk_1` FOREIGN KEY (`IdUsuario`) REFERENCES `clientes` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
