-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 06-05-2016 a las 17:40:25
-- Versión del servidor: 5.7.10-log
-- Versión de PHP: 5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mifotoconchanito`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotos`
--

CREATE TABLE `fotos` (
  `id_f` int(11) NOT NULL,
  `tituloImagen` varchar(45) DEFAULT NULL,
  `fecha_evento` date DEFAULT NULL,
  `localidadColonia` varchar(45) DEFAULT NULL,
  `descripcion_Evento` varchar(60) DEFAULT NULL,
  `img_Evento` varchar(150) DEFAULT NULL,
  `Usuarios_idUsuarios` int(11) NOT NULL,
  `municipios_id_m` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `fotos`
--

INSERT INTO `fotos` (`id_f`, `tituloImagen`, `fecha_evento`, `localidadColonia`, `descripcion_Evento`, `img_Evento`, `Usuarios_idUsuarios`, `municipios_id_m`) VALUES
(10, 'imagen 1', '2015-09-28', 'Solidaridad', 'imagen prueba 1', '1.jpg', 6, 8),
(11, 'imagen 2', '2015-09-28', 'Solidaridad', 'imagen prueba 2', '2.jpg', 6, 8),
(12, 'imagen 3', '2015-09-28', 'Solidaridad', 'imagen prueba 3', '3.jpg', 6, 8),
(13, 'imagen 4', '2015-09-28', 'Solidaridad', 'imagen prueba 4', '4.jpg', 6, 8),
(14, 'imagen 5', '2015-09-28', 'Solidaridad', 'imagen prueba 5', '5.jpg', 6, 8),
(15, 'imagen 6', '2015-09-28', 'Solidaridad', 'imagen prueba 6', '6.jpg', 6, 8),
(16, 'imagen 7', '2015-09-28', 'Solidaridad', 'imagen prueba 7', '7.jpg', 6, 8),
(17, 'imagen 8', '2015-09-28', 'Solidaridad', 'imagen prueba 8', '8.jpg', 6, 8),
(18, 'imagen 9', '2015-09-28', 'Solidaridad', 'imagen prueba 9', '9.jpg', 6, 8),
(19, 'imagen 10', '2015-09-28', 'Solidaridad', 'imagen prueba 10', '10.jpg', 6, 8),
(20, 'imagen 11', '2015-09-28', 'Solidaridad', 'imagen prueba 11', '11.jpg', 6, 8),
(21, 'imagen 12', '2015-09-28', 'Solidaridad', 'imagen prueba 12', '12.jpg', 6, 8),
(22, 'imagen 13', '2015-09-28', 'Solidaridad', 'imagen prueba 13', '13.jpg', 6, 8),
(23, 'imagen 14', '2015-09-28', 'Solidaridad', 'imagen prueba 14', '14.jpg', 6, 8),
(24, 'imagen 15', '2015-09-28', 'Solidaridad', 'imagen prueba 15', '15.jpg', 6, 8),
(25, 'imagen 16', '2015-09-28', 'Solidaridad', 'imagen prueba 16', '16.jpg', 6, 8),
(26, 'imagen 17', '2015-09-28', 'Solidaridad', 'imagen prueba 17', '17.jpg', 6, 8),
(27, 'imagen 18', '2015-09-28', 'Solidaridad', 'imagen prueba 18', '18.jpg', 6, 8),
(28, 'imagen 19', '2015-09-28', 'Solidaridad', 'imagen prueba 19', '19.jpg', 6, 8),
(29, 'imagen 20', '2015-09-28', 'Solidaridad', 'imagen prueba 20', '20.jpg', 6, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipios`
--

CREATE TABLE `municipios` (
  `id_m` int(11) NOT NULL,
  `nombre_Municipio` varchar(45) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `municipios`
--

INSERT INTO `municipios` (`id_m`, `nombre_Municipio`) VALUES
(1, 'Cozumel'),
(2, 'Felipe Carrillo Puerto'),
(3, 'Isla Mujeres'),
(4, 'Othon P. Blanco'),
(5, 'Benito Juárez'),
(6, 'José María Morelos'),
(7, 'Lázaro Cárdenaz'),
(8, 'Solidaridad'),
(9, 'Tulum'),
(10, 'Bacalar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuarios` int(11) NOT NULL,
  `imgperfil` varchar(150) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `a_Paterno` varchar(45) DEFAULT NULL,
  `a_Materno` varchar(45) DEFAULT NULL,
  `user` varchar(15) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `tipoUsuario` varchar(45) DEFAULT NULL,
  `activo` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuarios`, `imgperfil`, `nombre`, `a_Paterno`, `a_Materno`, `user`, `password`, `tipoUsuario`, `activo`) VALUES
(1, 'cenote.jpg', 'Rodibel', 'Morales', 'Morales', 'Ro', '827ccb0eea8a706c4c34a16891f84e7b', 'Usuario', 0),
(2, 'chanito.jpg', 'SuperAdmin', 'Admin', 'Admin', 'Admin', '827ccb0eea8a706c4c34a16891f84e7b', 'Administrador', 1),
(7, 'ando chido.jpg', 'usuarioPrueba1', 'prueba', 'prueba', 'prueba2', '96080775c113b0e5c3e32bdd26214aec', 'Usuario', 0),
(6, 'DSC_0155~2.jpg', 'Rodibel', 'Morales', 'Morales', 'rodibel123', '827ccb0eea8a706c4c34a16891f84e7b', 'Usuario', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`id_f`,`Usuarios_idUsuarios`,`municipios_id_m`),
  ADD KEY `fk_fotos_Usuarios_idx` (`Usuarios_idUsuarios`),
  ADD KEY `fk_fotos_municipios1_idx` (`municipios_id_m`);

--
-- Indices de la tabla `municipios`
--
ALTER TABLE `municipios`
  ADD PRIMARY KEY (`id_m`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuarios`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `fotos`
--
ALTER TABLE `fotos`
  MODIFY `id_f` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT de la tabla `municipios`
--
ALTER TABLE `municipios`
  MODIFY `id_m` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
