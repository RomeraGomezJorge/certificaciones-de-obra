-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: database
-- Tiempo de generación: 22-02-2023 a las 13:00:10
-- Versión del servidor: 8.0.32
-- Versión de PHP: 8.1.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `database`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `certificacion`
--

CREATE TABLE `certificacion` (
  `id` varchar(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero_certificado` int DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `expediente_certificado` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `porcentaje_avance_obra` int DEFAULT NULL,
  `monto_pagado` decimal(12,2) DEFAULT NULL,
  `ubicacion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numero_sidif` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha_inicio_pago` date DEFAULT NULL,
  `fecha_fin_pago` date DEFAULT NULL,
  `create_at` datetime NOT NULL,
  `obra_id` varchar(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `certificacion`
--

INSERT INTO `certificacion` (`id`, `numero_certificado`, `fecha`, `expediente_certificado`, `porcentaje_avance_obra`, `monto_pagado`, `ubicacion`, `numero_sidif`, `fecha_inicio_pago`, `fecha_fin_pago`, `create_at`, `obra_id`) VALUES
('811fd328-f46a-48b5-ac6a-cdc4c63210b1', 0, '2023-02-20', '', 55, 0.00, NULL, '', '2023-02-20', '2023-02-20', '2023-02-20 16:54:43', NULL),
('a3813134-0761-40b7-9846-c5e6da7581b1', 0, '2023-02-21', 'F6-386-6-22', 0, 961366.76, 'PAGA', '21217/22', '2022-08-01', '2023-02-21', '2023-02-21 18:23:14', '1428ea8b-ee67-49a7-900b-2fe9564343e0'),
('bcfee940-6582-4771-a4b4-85f7f258e9b9', 1, '2022-07-01', 'F6-461-1-22', 100, 3845467.03, 'PAGA', '26577/22', '2020-09-14', '2023-02-21', '2023-02-21 19:56:12', '1428ea8b-ee67-49a7-900b-2fe9564343e0'),
('bed895e5-ee4b-4e7d-881d-6c253299d1a1', 1, '2023-02-22', 'F6-454-4-22', 100, 2956277.56, 'PAGA', '25275/22', '2023-02-22', '2023-02-22', '2023-02-21 18:14:19', '265c0c1f-dc96-4e0b-82fd-a2797985cece');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Volcado de datos para la tabla `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20230215112954', '2023-02-15 11:31:48', 120),
('DoctrineMigrations\\Version20230217212859', '2023-02-17 21:30:21', 110),
('DoctrineMigrations\\Version20230219012540', '2023-02-19 01:27:57', 96),
('DoctrineMigrations\\Version20230220210008', '2023-02-20 21:03:03', 221);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `obra`
--

CREATE TABLE `obra` (
  `id` varchar(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre_obra` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fuente_financiera` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `codigo_presupuestario` int DEFAULT NULL,
  `expediente_principal` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `monto_obra` decimal(12,1) DEFAULT NULL,
  `presupuesto_necesario` decimal(12,1) DEFAULT NULL,
  `presupuesto_disponible_regularizado` decimal(12,1) DEFAULT NULL,
  `estado_presupuestario` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado_obra` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado_tramite` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `obra`
--

INSERT INTO `obra` (`id`, `nombre_obra`, `fuente_financiera`, `codigo_presupuestario`, `expediente_principal`, `monto_obra`, `presupuesto_necesario`, `presupuesto_disponible_regularizado`, `estado_presupuestario`, `estado_obra`, `estado_tramite`, `create_at`) VALUES
('1428ea8b-ee67-49a7-900b-2fe9564343e0', 'CONSTRUCCION DE CORDONES Y ACONDICIONAMIENTIO EN LA CIUDAD DE CHAMICAL', 'PROV', 16, 'F6-842-2-21', 4806833.8, 4806833.8, 4806833.8, 'COCR', 'TERM', '', '2023-02-21 18:20:00'),
('265c0c1f-dc96-4e0b-82fd-a2797985cece', 'ACONDICIONMIENTO DE ACCESOS  SEGURIDAD ESC.  FRAY MAMERTO ESQUIU N° 338 - DPTO. CAPITAL - LA RIOJA', 'PROV', 0, 'F6-819-9-21', 2956277.6, 2956277.6, 0.0, 'MO45', 'EJEC', '', '2023-02-20 23:45:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reset_password_request`
--

CREATE TABLE `reset_password_request` (
  `id` int NOT NULL,
  `user_id` varchar(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `selector` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `hashed_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `requested_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `expires_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role`
--

CREATE TABLE `role` (
  `id` varchar(36) NOT NULL,
  `description` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `role`
--

INSERT INTO `role` (`id`, `description`) VALUES
('ROLE_ADMIN', 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` varchar(36) NOT NULL,
  `username` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `role_id` varchar(36) DEFAULT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `surname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `role_id`, `create_at`, `update_at`, `is_active`, `name`, `surname`) VALUES
('47392f60-b214-48de-b7b5-ba45c6c95913', 'user', 'cherza@gmail.com', '$2y$13$dG72X9bY0pdqbizIHA/8vOOkb9RlfNpCTLoxnmAp.qvWgm8AczOte', 'ROLE_ADMIN', '2021-09-29 18:07:23', '2023-02-22 12:04:05', 1, 'user', 'user'),
('b5c8fec1-cb9d-429a-8777-1328a470bedc', 'cherza', 'romera.gomez.jorge@gmail.com', '$2y$13$iBuA5sIT.Y9RTIaOjsSja.aRNV/APOuaJXlqnOmyoDHKHty1YrinG', 'ROLE_ADMIN', '2021-03-08 16:23:22', '2021-04-20 20:36:31', 1, 'Jorge', 'Romera');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `certificacion`
--
ALTER TABLE `certificacion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_A1F202533C2672C8` (`obra_id`);

--
-- Indices de la tabla `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Indices de la tabla `obra`
--
ALTER TABLE `obra`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reset_password_request`
--
ALTER TABLE `reset_password_request`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indices de la tabla `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `description` (`description`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`) USING BTREE,
  ADD UNIQUE KEY `userName` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `user_ibfk_1` (`role_id`) USING BTREE;

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `reset_password_request`
--
ALTER TABLE `reset_password_request`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `certificacion`
--
ALTER TABLE `certificacion`
  ADD CONSTRAINT `FK_A1F202533C2672C8` FOREIGN KEY (`obra_id`) REFERENCES `obra` (`id`);

--
-- Filtros para la tabla `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_8D93D649D60322AC` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
