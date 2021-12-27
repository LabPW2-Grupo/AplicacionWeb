-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-12-2021 a las 04:25:25
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pw2crud`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL COMMENT 'ID del Doctor',
  `nombre` varchar(255) NOT NULL COMMENT 'Nombre del Doctor',
  `edad` int(2) NOT NULL COMMENT 'Edad del Doctor',
  `sueldo` float NOT NULL COMMENT 'Sueldo que recibe el Doctor',
  `created` datetime DEFAULT NULL COMMENT 'Momento en el que se añadió al nuevo Doctor',
  `modified` datetime DEFAULT NULL COMMENT 'Momento en el que se modificó al nuevo Doctor'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='En esta tabla están los doctores de la clínica';

--
-- Volcado de datos para la tabla `doctor`
--

INSERT INTO `doctor` (`id`, `nombre`, `edad`, `sueldo`, `created`, `modified`) VALUES
(1, 'Ramiro Perez', 21, 1000, '2021-12-27 00:19:58', '2021-12-27 00:19:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL COMMENT 'ID del archivo',
  `name` varchar(255) NOT NULL COMMENT 'Nombre del archivo',
  `path` varchar(255) NOT NULL COMMENT 'Dirección del archivo',
  `created` datetime DEFAULT NULL COMMENT 'Momento en el que se añadió al nuevo Archivo',
  `modified` datetime DEFAULT NULL COMMENT 'Momento en el que se modificó al nuevo Archivo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='En esta tabla se suben los archivos de los pacientes';

--
-- Volcado de datos para la tabla `files`
--

INSERT INTO `files` (`id`, `name`, `path`, `created`, `modified`) VALUES
(1, 'databases.png', 'http://localhost/pw2/docs/databases.png', '2021-12-27 02:13:00', '2021-12-27 02:13:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `id_patient` int(11) NOT NULL COMMENT 'ID del paciente',
  `name` varchar(20) CHARACTER SET armscii8 NOT NULL COMMENT 'Nombre(s) del paciente',
  `last_name` varchar(25) CHARACTER SET armscii8 NOT NULL COMMENT 'Apellidos del paciente',
  `dni` varchar(8) CHARACTER SET armscii8 NOT NULL COMMENT 'DNI del paciente',
  `age` int(3) NOT NULL COMMENT 'Edad del paciente',
  `sex` char(1) CHARACTER SET armscii8 NOT NULL COMMENT 'Género del paciente hombres(M) y mujeres (F)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='En esta tabla se encuentran los pacientes registrados en la clínica';

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`id_patient`, `name`, `last_name`, `dni`, `age`, `sex`) VALUES
(34, 'Anthony J', 'Miyo', '72567141', 15, 'M'),
(35, 'Anthony', 'Perez', '12121221', 17, 'M'),
(36, 'Anthony', 'Miyo', '72567141', 19, 'M');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL COMMENT 'ID del rol',
  `name` varchar(255) NOT NULL COMMENT 'Nombre del rol',
  `description` varchar(255) NOT NULL COMMENT 'descripción de lo que hace el rol',
  `created` datetime DEFAULT NULL COMMENT 'Momento en el que se añadió al nuevo Rol',
  `modified` datetime DEFAULT NULL COMMENT 'Momento en el que se modificó al nuevo Rol'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='En esta tabla se encuentran los roles permitidos para las cuentas de usuarios';

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `created`, `modified`) VALUES
(1, 'Administrator', 'Autorized user', '2021-12-12 08:54:26', '2021-12-12 08:54:26'),
(2, 'User', 'Unauthorized user', '2021-12-12 08:54:46', '2021-12-12 08:54:46');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL COMMENT 'ID del usuario',
  `email` varchar(255) NOT NULL COMMENT 'Correo electrónico del usuario',
  `password` varchar(255) NOT NULL COMMENT 'Contraseña del usuario',
  `roles_id` int(11) NOT NULL COMMENT 'Rol que tiene el usuario',
  `created` datetime DEFAULT NULL COMMENT 'Momento en el que se creó el usuario',
  `modified` datetime DEFAULT NULL COMMENT 'Momento en el que se modificó el usuario'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='En esta tabla se registran todos los usuarios que se registren, luego se les envía un correo.';

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `roles_id`, `created`, `modified`) VALUES
(6, 'tonymiyo132@gmail.com', '$2y$10$Oif6mxUBN4C1v1Z/KM.57O2COo0rcYRU2sPd2yzsbLQYHoSWhNEdm', 2, '2021-12-26 22:55:17', '2021-12-26 22:55:17'),
(7, 'elguest08@gmail.com', '$2y$10$gUjsHllnYJ49Sogsa5W7z.tORAitOll3fCh0nNxqz2h3V4KIDro.K', 1, '2021-12-26 22:55:40', '2021-12-26 22:55:40');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id_patient`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `roles_key` (`roles_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID del Doctor', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID del archivo', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id_patient` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID del paciente', AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID del rol', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID del usuario', AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `roles_key` FOREIGN KEY (`roles_id`) REFERENCES `roles` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
