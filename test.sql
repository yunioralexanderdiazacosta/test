-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:3306
-- Tiempo de generación: 29-10-2019 a las 16:12:45
-- Versión del servidor: 10.0.38-MariaDB-0ubuntu0.16.04.1
-- Versión de PHP: 7.2.20-2+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `test`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargos`
--

CREATE TABLE `cargos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cargos`
--

INSERT INTO `cargos` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'Administrador', NULL, NULL),
(2, 'Supervisor', NULL, NULL),
(3, 'Desarrollador Web', NULL, NULL);

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
(1, '2019_10_29_102905_create_cargos_table', 1),
(2, '2019_10_29_103006_create_personas_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cedula` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cargo_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`id`, `cedula`, `nombre`, `correo`, `cargo_id`, `created_at`, `updated_at`) VALUES
(1, 868487, 'Luella Stroman', 'elvie55@hotmail.com', 1, '2019-10-29 15:51:11', '2019-10-29 15:51:11'),
(2, 283194, 'Daphnee Adams I', 'abigale88@crona.info', 1, '2019-10-29 15:51:12', '2019-10-29 15:51:12'),
(3, 240006, 'Mr. Ellis Murphy I', 'vdeckow@yahoo.com', 1, '2019-10-29 15:51:12', '2019-10-29 15:51:12'),
(4, 665869, 'Mr. Domingo Strosin', 'ethelyn57@yahoo.com', 2, '2019-10-29 15:51:12', '2019-10-29 15:51:12'),
(5, 19013, 'Prof. Carter Rippin', 'earnest73@yahoo.com', 2, '2019-10-29 15:51:12', '2019-10-29 15:51:12'),
(6, 506029, 'Mrs. Melyna Stanton', 'cauer@beahan.com', 1, '2019-10-29 15:51:12', '2019-10-29 15:51:12'),
(7, 175991, 'Dr. Grayce Hermann I', 'jake.rau@stroman.net', 3, '2019-10-29 15:51:12', '2019-10-29 15:51:12'),
(8, 554074, 'Marlon Waters', 'wolff.molly@yahoo.com', 3, '2019-10-29 15:51:13', '2019-10-29 15:51:13'),
(9, 774262, 'Loyal Sporer', 'ezra46@wuckert.com', 1, '2019-10-29 15:51:13', '2019-10-29 15:51:13'),
(10, 168638, 'Manuela Nikolaus', 'erath@douglas.com', 3, '2019-10-29 15:51:13', '2019-10-29 15:51:13'),
(11, 432359, 'Dr. Hillard Wunsch V', 'larson.breanna@hotmail.com', 3, '2019-10-29 15:51:13', '2019-10-29 15:51:13'),
(12, 991654, 'Myrtis Stamm', 'veum.estelle@wiegand.com', 3, '2019-10-29 15:51:13', '2019-10-29 15:51:13'),
(13, 527495, 'Kurtis Ratke', 'melvin.bayer@wisoky.com', 2, '2019-10-29 15:51:13', '2019-10-29 15:51:13'),
(14, 717513, 'Dr. Cathryn Barton', 'hferry@gmail.com', 1, '2019-10-29 15:51:13', '2019-10-29 15:51:13'),
(15, 576020, 'Tierra Wolf', 'marvin.deckow@gmail.com', 2, '2019-10-29 15:51:13', '2019-10-29 15:51:13'),
(16, 241405, 'Aida Sporer', 'kihn.muriel@yahoo.com', 3, '2019-10-29 15:51:13', '2019-10-29 15:51:13'),
(17, 621743, 'Serena Grady PhD', 'tbartoletti@turner.com', 1, '2019-10-29 15:51:13', '2019-10-29 15:51:13'),
(18, 326531, 'Deangelo D\'Amore', 'valentine01@rippin.com', 1, '2019-10-29 15:51:14', '2019-10-29 15:51:14'),
(19, 110944, 'Gerard Welch I', 'dennis21@legros.biz', 3, '2019-10-29 15:51:14', '2019-10-29 15:51:14'),
(20, 956765, 'Cecile Spencer', 'thartmann@ernser.com', 2, '2019-10-29 15:51:14', '2019-10-29 15:51:14'),
(21, 633419, 'Mr. King Nolan', 'ephraim.kozey@rice.net', 2, '2019-10-29 15:51:14', '2019-10-29 15:51:14'),
(22, 642834, 'Jaylin Schiller', 'dahlia.stoltenberg@von.biz', 2, '2019-10-29 15:51:14', '2019-10-29 15:51:14'),
(23, 687658, 'Prof. Myra Williamson', 'valentina.feest@conroy.com', 2, '2019-10-29 15:51:14', '2019-10-29 15:51:14'),
(24, 226968, 'Tyson Bashirian', 'roberto.weber@hane.com', 3, '2019-10-29 15:51:14', '2019-10-29 15:51:14'),
(25, 106513, 'Bettye Metz', 'ghammes@johnston.com', 1, '2019-10-29 15:51:14', '2019-10-29 15:51:14'),
(26, 922501, 'Prof. Jess Schulist', 'aliza90@yahoo.com', 1, '2019-10-29 15:51:14', '2019-10-29 15:51:14'),
(27, 18274, 'August Schumm', 'demarco.champlin@beatty.info', 3, '2019-10-29 15:51:14', '2019-10-29 15:51:14'),
(28, 549872, 'Dr. Manuel Kunde', 'cade.will@leannon.net', 3, '2019-10-29 15:51:14', '2019-10-29 15:51:14'),
(29, 515122, 'Dr. Tania Rau', 'wade21@blick.com', 3, '2019-10-29 15:51:14', '2019-10-29 15:51:14'),
(30, 701916, 'Miss Zora Langosh DDS', 'skling@kessler.com', 2, '2019-10-29 15:51:14', '2019-10-29 15:51:14'),
(31, 920303, 'Griffin Kling', 'liliana22@yahoo.com', 2, '2019-10-29 15:51:14', '2019-10-29 15:51:14'),
(32, 412404, 'Dr. Miller O\'Hara', 'hickle.jorge@hotmail.com', 3, '2019-10-29 15:51:15', '2019-10-29 15:51:15'),
(33, 555657, 'Mrs. Vincenza Bernier', 'evan.hirthe@tillman.info', 1, '2019-10-29 15:51:15', '2019-10-29 15:51:15'),
(34, 946379, 'Miss Luna Runte PhD', 'ythiel@marquardt.net', 2, '2019-10-29 15:51:15', '2019-10-29 15:51:15'),
(35, 820337, 'Dr. Amir Brown', 'koch.rosalee@koch.net', 3, '2019-10-29 15:51:15', '2019-10-29 15:51:15'),
(36, 900314, 'Janet Stracke', 'hilbert.wiegand@yahoo.com', 1, '2019-10-29 15:51:15', '2019-10-29 15:51:15'),
(37, 110794, 'Corbin Lakin', 'delia.rodriguez@bogisich.com', 3, '2019-10-29 15:51:15', '2019-10-29 15:51:15'),
(38, 544400, 'Axel Kuhic', 'murray.lexi@schmitt.com', 1, '2019-10-29 15:51:15', '2019-10-29 15:51:15'),
(39, 111966, 'Isobel Hane', 'lamont.damore@mante.org', 3, '2019-10-29 15:51:15', '2019-10-29 15:51:15'),
(40, 147202, 'Gia Durgan', 'orlo01@batz.com', 3, '2019-10-29 15:51:15', '2019-10-29 15:51:15'),
(41, 741680, 'Kayli Ernser', 'qgutmann@koss.com', 3, '2019-10-29 15:51:15', '2019-10-29 15:51:15'),
(42, 888813, 'Patrick Kuphal', 'thiel.bryon@aufderhar.biz', 1, '2019-10-29 15:51:16', '2019-10-29 15:51:16'),
(43, 88332, 'Zetta Armstrong MD', 'zschumm@hotmail.com', 1, '2019-10-29 15:51:16', '2019-10-29 15:51:16'),
(44, 587558, 'Stanley Daniel IV', 'steuber.yazmin@mertz.com', 3, '2019-10-29 15:51:16', '2019-10-29 15:51:16'),
(45, 731950, 'Kiarra Marquardt V', 'zlegros@boyle.com', 1, '2019-10-29 15:51:16', '2019-10-29 15:51:16'),
(46, 253852, 'Jessy Cummings', 'clementine55@nitzsche.com', 2, '2019-10-29 15:51:16', '2019-10-29 15:51:16'),
(47, 910089, 'Hardy Eichmann', 'leo11@renner.com', 2, '2019-10-29 15:51:16', '2019-10-29 15:51:16'),
(48, 301433, 'Oma Towne', 'mraz.kayden@gmail.com', 2, '2019-10-29 15:51:16', '2019-10-29 15:51:16'),
(49, 676763, 'Alysha Friesen', 'mitchell.zora@hotmail.com', 2, '2019-10-29 15:51:16', '2019-10-29 15:51:16'),
(50, 746269, 'Casimer Schulist', 'pmohr@yahoo.com', 3, '2019-10-29 15:51:16', '2019-10-29 15:51:16');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `personas_cargo_id_foreign` (`cargo_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cargos`
--
ALTER TABLE `cargos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `personas`
--
ALTER TABLE `personas`
  ADD CONSTRAINT `personas_cargo_id_foreign` FOREIGN KEY (`cargo_id`) REFERENCES `cargos` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
