-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-09-2025 a las 23:49:38
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_elecciones2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ocupaciones`
--

CREATE TABLE `ocupaciones` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ocupaciones`
--

INSERT INTO `ocupaciones` (`id`, `nombre`) VALUES
(1, 'Estudiante'),
(2, 'Labores de Casa'),
(3, 'Agricultor'),
(4, 'Albañil'),
(5, 'Abogado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `padron`
--

CREATE TABLE `padron` (
  `id` int(11) NOT NULL,
  `fotografia` varchar(40) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(55) NOT NULL,
  `sexo` char(1) NOT NULL,
  `numero_documento` varchar(15) NOT NULL,
  `ocupacion_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `padron`
--

INSERT INTO `padron` (`id`, `fotografia`, `nombres`, `apellidos`, `sexo`, `numero_documento`, `ocupacion_id`) VALUES
(1, '68b8b67cbaac6.png', 'Juan', 'Perez Chacon', 'M', '123456', 1),
(2, '', 'jhonathan', 'suri villarpando', 'M', '7565708', NULL),
(4, '', 'Marcos', 'Diaz Duran', 'M', '15862648', 2),
(5, '', 'Maria', 'Decente', 'F', 'Incidunt sed vi', NULL),
(7, '', 'Adipisicing ab iste ', 'Dignissimos voluptat', 'F', 'Sit adipisicing', 4),
(8, '', 'Odio placeat ut mag', 'Similique molestias ', 'F', 'Qui ut quia sit', 4),
(9, '', 'Nulla sint qui asper', 'Quasi maiores qui te', 'M', 'Commodo do id a', 4),
(10, '', 'Quibusdam voluptates', 'Dolorem a non ut ame', 'F', 'Dolores autem n', 5),
(11, '', 'Rerum repellendus H', 'Perferendis inventor', 'M', 'Eu voluptatem o', 1),
(12, '', 'Distinctio Sed volu', 'Tempore iste volupt', 'M', 'Minim quod quis', 4),
(13, '', 'Id facere asperiores', 'Similique optio ita', 'M', 'Sint qui quia c', 3),
(14, '', 'Est deserunt vitae o', 'Enim pariatur Id su', 'M', 'Sed ut tenetur ', 4),
(15, '', 'Similique et blandit', 'Illo voluptatem Tem', 'M', 'Rerum consequat', 4),
(16, '', 'Laborum Earum dolor', 'Quasi laudantium in', 'F', 'Deserunt tempor', 5),
(17, '', 'Reprehenderit vel d', 'Exercitation atque v', 'M', 'Non est irure e', 4),
(18, '', 'Tenetur proident ex', 'Eum ipsum harum ea ', 'M', 'Error incididun', 1),
(19, '', 'Est anim tempora ma', 'Illum a rerum modi ', 'F', 'Et nisi non qui', 5),
(20, '68b8b1807ffa8.png', 'Mollit laboriosam v', 'Adipisci sunt quam i', 'F', 'Modi quia id qu', 3),
(21, '68b8b1bd1310e.jpg', 'Est recusandae Ea n', 'Nostrum ad tempore ', 'M', 'Magni illo ad e', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(40) NOT NULL,
  `rol` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `password`, `rol`) VALUES
(1, 'admin@sis256.com', '8cb2237d0679ca88db6464eac60da96345513964', 'admin'),
(2, 'usuario@sis.com', '8cb2237d0679ca88db6464eac60da96345513964', 'user');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ocupaciones`
--
ALTER TABLE `ocupaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `padron`
--
ALTER TABLE `padron`
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
-- AUTO_INCREMENT de la tabla `ocupaciones`
--
ALTER TABLE `ocupaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `padron`
--
ALTER TABLE `padron`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
