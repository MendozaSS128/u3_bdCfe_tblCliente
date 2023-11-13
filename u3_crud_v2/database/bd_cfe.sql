-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-11-2023 a las 21:43:27
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_cfe`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_cliente`
--

CREATE TABLE `tbl_cliente` (
  `idcliente` int(2) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `ApellidoM` varchar(50) NOT NULL,
  `Telefono` bigint(50) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `ApellidoP` varchar(50) NOT NULL,
  `FechaContra` date NOT NULL,
  `Direccion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_cliente`
--

INSERT INTO `tbl_cliente` (`idcliente`, `Nombre`, `ApellidoM`, `Telefono`, `Correo`, `ApellidoP`, `FechaContra`, `Direccion`) VALUES
(1, 'Maria', 'Mendez', 6561328324, 'maria@gmail.com', 'Lopez', '2020-02-15', 'Calle Manzana'),
(2, 'Paolo', 'Hernandez', 6567891320, 'juan@gmail.com', 'Fernandez', '2020-09-20', 'Calle Naranja'),
(3, 'Paolo', 'Mendoza', 6569870215, 'paolo@gmail.com', 'Gomez', '2020-09-30', 'Calle Manzana y Naranja');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_cliente`
--
ALTER TABLE `tbl_cliente`
  ADD PRIMARY KEY (`idcliente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
