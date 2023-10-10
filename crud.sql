-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-08-2023 a las 17:25:02
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `crud`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idusuario` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `edad` int(3) NOT NULL,
  `direccion` varchar(75) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `correo` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `nombre`, `apellido`, `edad`, `direccion`, `telefono`, `correo`) VALUES
(1, 'Hector', 'Maya', 33, 'sena CTGI', '3160000', 'hdmaya@sena.edu.co'),
(2, 'Victor', 'Roldán', 17, 'sena CTGI', '3116277698', 'victormanuelroldan56@gmail.com'),
(3, 'Juan', 'Isaza', 20, 'sena CTGI', '321456', 'juan.isaza@gmail.com'),
(4, 'Jose', 'Isaza', 30, 'sena CTGI', '789456', 'senactgi@gmail.com'),
(5, 'Kevin', 'David', 23, 'sena CTGI', '86615515', 'ctgi@gmail.com'),
(6, 'Felipe', 'Vargas', 13, 'sena CTGI', '254887', 'ctgi@gmail.com'),
(7, 'Manolo', 'Cardona', 15, 'sena CTGI', '124515', 'ctgi@gmail.com'),
(8, 'Juan', 'Pardo', 58, 'ADSO 1', '455735825', 'ctgi@gmail.com'),
(9, 'Jhonatan', 'Usuga', 19, 'ADSO 1', '24575355', 'ctgi@gmail.com'),
(10, 'Freddy', 'Camacho', 33, 'sena CTGI', '3165892636', 'fcamacho4@misena.edu.co');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
