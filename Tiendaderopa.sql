-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 12-11-2021 a las 23:03:00
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `Tiendaderopa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Cliente`
--

CREATE TABLE `Cliente` (
  `idCliente` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `domicilio` varchar(45) NOT NULL,
  `telefono` varchar(45) NOT NULL,
  `mail` varchar(45) NOT NULL,
  `edad` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Ropadedama`
--

CREATE TABLE `Ropadedama` (
  `idropadedama` int(11) NOT NULL,
  `remeras` varchar(45) NOT NULL,
  `pantalones` varchar(45) NOT NULL,
  `camperas` varchar(45) NOT NULL,
  `shorts` varchar(45) NOT NULL,
  `vestidos` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Ropadehombre`
--

CREATE TABLE `Ropadehombre` (
  `idRopadehombre` int(11) NOT NULL,
  `remeras` varchar(45) NOT NULL,
  `pantalones` varchar(45) NOT NULL,
  `camperas` varchar(45) NOT NULL,
  `shorts` varchar(45) NOT NULL,
  `camisas` varchar(45) NOT NULL,
  `buzos` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Ropadeniño`
--

CREATE TABLE `Ropadeniño` (
  `idRopadeniño` int(11) NOT NULL,
  `remeras` varchar(45) NOT NULL,
  `pantalones` varchar(45) NOT NULL,
  `shorts` varchar(45) NOT NULL,
  `camperas` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Cliente`
--
ALTER TABLE `Cliente`
  ADD PRIMARY KEY (`idCliente`);

--
-- Indices de la tabla `Ropadedama`
--
ALTER TABLE `Ropadedama`
  ADD PRIMARY KEY (`idropadedama`);

--
-- Indices de la tabla `Ropadehombre`
--
ALTER TABLE `Ropadehombre`
  ADD PRIMARY KEY (`idRopadehombre`);

--
-- Indices de la tabla `Ropadeniño`
--
ALTER TABLE `Ropadeniño`
  ADD PRIMARY KEY (`idRopadeniño`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Cliente`
--
ALTER TABLE `Cliente`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Ropadedama`
--
ALTER TABLE `Ropadedama`
  MODIFY `idropadedama` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Ropadehombre`
--
ALTER TABLE `Ropadehombre`
  MODIFY `idRopadehombre` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Ropadeniño`
--
ALTER TABLE `Ropadeniño`
  MODIFY `idRopadeniño` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
