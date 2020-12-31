-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-12-2020 a las 20:57:51
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `scp2`
--
CREATE DATABASE IF NOT EXISTS `scp2` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `scp2`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `id_paciente` int(11) NOT NULL,
  `cve_paciente` int(11) NOT NULL,
  `nombres` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellido1` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellido2` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `genero` char(1) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `fecha_registro` date NOT NULL,
  `hora_registro` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `id_apetito` int(11) NOT NULL,
  `id_horario_mas_hambre` int(11) NOT NULL,
  `activo` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`id_paciente`, `cve_paciente`, `nombres`, `apellido1`, `apellido2`, `genero`, `fecha_nacimiento`, `fecha_registro`, `hora_registro`, `id_apetito`, `id_horario_mas_hambre`, `activo`) VALUES
(1, 1, 'Luis Fernando', 'Monares', 'González', 'M', '2020-11-04', '2020-12-31', '', 0, 0, 1),
(2, 2, 'Jocelyn Alejandra', 'Mejía', 'Martínez', 'F', '1992-03-10', '2020-12-31', '', 0, 0, 1),
(3, 3, 'Omar Enrique', 'Monares', 'González', 'F', '1990-01-01', '2020-12-31', '', 0, 0, 0),
(4, 4, 'Jocelyn', 'Mejía', 'Martínez', 'F', '1990-01-01', '2020-12-31', '', 0, 0, 0),
(5, 5, 'Beatriz', 'González', 'Nuñez', 'F', '1990-01-01', '2020-12-31', '', 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pac_datos_clinicos_inicial`
--

CREATE TABLE `pac_datos_clinicos_inicial` (
  `id_paciente` int(11) NOT NULL,
  `peso` decimal(10,0) NOT NULL,
  `estatura` decimal(10,0) NOT NULL,
  `cintura` decimal(10,0) NOT NULL,
  `cadera` decimal(10,0) NOT NULL,
  `imc` decimal(10,0) NOT NULL,
  `musculo` decimal(10,0) NOT NULL,
  `grasa` decimal(10,0) NOT NULL,
  `mas_datos` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pac_datos_generales`
--

CREATE TABLE `pac_datos_generales` (
  `id_paciente` int(11) NOT NULL,
  `ocupacion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `calle` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `numero` int(11) NOT NULL,
  `colonia` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `municipio` int(50) NOT NULL,
  `telefono` int(10) NOT NULL,
  `correo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_registro` date NOT NULL,
  `fecha_actualizacion` date NOT NULL,
  `activo` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id_paciente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id_paciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
