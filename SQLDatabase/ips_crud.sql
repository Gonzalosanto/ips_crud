-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-01-2020 a las 23:55:03
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ips`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_01_08_002415_create_usuarios_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Apellido` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nacionalidad` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `Username`, `Nombre`, `Apellido`, `Email`, `Nacionalidad`, `created_at`, `updated_at`) VALUES
(2, 'Mapache', 'Gonzalo', 'Cruz', 'sancruzgon@gmail.com', 'Argentina', NULL, NULL),
(3, 'Gonzalito', 'Rodrigo', 'Cruz', 'roncru@gmail.com', 'Argentina', NULL, '2020-01-09 07:17:29'),
(5, 'Dreadnought9', 'Roberto', 'Sanchez', 'sandro@san.com', 'Bolivia', NULL, NULL),
(6, 'Antonionon', 'Antonio', 'Gonzalez', 'antogon@gmail.com', 'Argentina', NULL, NULL),
(7, 'AlejandroMagno', 'Alejandro', 'Magnate', 'magno@hotmail.com', 'Brasil', NULL, NULL),
(8, 'Nickname', 'Juan', 'Juarez', 'j@gmail.com', 'Paraguay', NULL, NULL),
(9, 'Username99', 'Fernando', 'Lopez', 'Fl@hotmail.com', 'Chile', NULL, NULL),
(10, 'PedroEscama', 'Pedro', 'Perez', 'pp@user.net', 'Uruguay', NULL, NULL),
(11, 'PAPA', 'Juan Pablo', 'Cuquez', 'jpc@gmail.com', 'Argentina', NULL, NULL),
(12, 'Unknown19', 'Pablo', 'Zarate', 'pz@usuario.net', 'Argentina', NULL, NULL),
(13, 'El Conquistador', 'Juana', 'Perez', 'perezj@gmail.com', 'Argentina', NULL, NULL),
(14, 'Perezozo', 'Leandro', 'Perez', 'asdasd@asdasd.com', 'Chile', NULL, NULL),
(15, 'LocoLope', 'Horacio', 'Lopez', 'asdqwert@qwerty.com', 'Bolivia', NULL, NULL),
(16, 'Raccoon', 'Carlos', 'Norber', 'norber@gmail.com', 'Paraguay', NULL, NULL),
(17, 'Gonzales', 'Santiago', 'Uriberto', 'santi@gmail.com', 'Uruguay', NULL, NULL),
(18, 'Nick', 'Karles', 'Karlos', 'asd@asd.com', 'Brasil', NULL, NULL),
(19, 'Pararrayos', 'Rayo', 'McQueen', 'McQ@gmail.com', 'Bolivia', NULL, NULL),
(20, 'Ferro', 'Federico', 'Fierro', 'fbff@fierro.com', 'Argentina', NULL, NULL),
(21, 'FakeName', 'Nombre', 'Apellido', 'email@email.com', 'Brasil', NULL, NULL),
(22, 'NombreFalso', 'Name', 'LastName', 'correo@correo.com', 'Brasil', NULL, NULL),
(23, 'Whoami', 'John', 'Doe', 'jd@doe.com', 'Uruguay', NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
