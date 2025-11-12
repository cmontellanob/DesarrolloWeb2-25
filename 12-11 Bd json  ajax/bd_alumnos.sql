-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-11-2025 a las 00:16:11
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
-- Base de datos: `bd_alumnos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id` int(11) NOT NULL,
  `fotografia` varchar(100) DEFAULT NULL,
  `nombres` varchar(30) DEFAULT NULL,
  `apellidos` varchar(30) DEFAULT NULL,
  `cu` varchar(15) DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  `codigocarrera` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `fotografia`, `nombres`, `apellidos`, `cu`, `sexo`, `codigocarrera`) VALUES
(1, 'juan.jpg', 'Juan Carlos', 'Pérez', '35-2345', 'M', 1),
(2, 'cristian.jpg', 'Cristian', 'Benavides', '41-35', 'M', 2),
(3, 'amalia.jpg', 'Amalia', 'Ricladi', '44-234', 'F', 3),
(4, 'ana.jpg', 'Ana', 'Irigoyen', '45-215', 'F', 1),
(5, 'mario.jpg', 'Mario', 'Loza', '39-5421', 'M', 1),
(6, 'paola.jpg', 'Paola', 'Mamani', '50-1142', 'F', 2),
(7, 'lucas.jpg', 'Lucas', 'Fernández', '60-8892', 'M', 3),
(8, 'sofia.jpg', 'Sofía', 'Vargas', '51-3345', 'F', 1),
(9, 'diego.jpg', 'Diego', 'Suárez', '62-2245', 'M', 2),
(10, 'valeria.jpg', 'Valeria', 'Zapata', '63-7789', 'F', 3),
(11, 'imagenes/68520aa80b951_920a5f79-f4dc-44d8-97a4-bdfaf408341c.png', 'Juan', 'Perez', '35-2190', 'M', 1),
(12, 'imagenes/68520aa80ddbb_107481.jpg', 'MAria', 'asdasd', '35-1110', 'M', 2),
(13, 'img/deposito 12-06.jpg', 'Quod possimus irure', 'Modi ipsa amet fug', 'Eum p', 'F', 1),
(14, 'img/deposito 12-06.jpg', 'Laudantium ex aperi', 'Eos cillum quo at of', 'Magna', 'F', 2),
(15, '', 'Aut cumque vero fuga', 'Accusamus do adipisi', '71', 'M', 2),
(16, '', 'Dolor atque delectus', 'Consequuntur id iru', '58', 'F', 1),
(17, '', 'Ullam expedita occae', 'Quae sit ut aliquid ', '41', 'M', 1),
(18, '', 'Qui cupidatat et quo', 'Laboriosam distinct', '2', 'M', 1),
(19, 'deposito 12-06.jpg', 'Sequi odio sunt nis', 'Non maiores sed comm', 'Aperiam sunt nu', '', 2),
(20, 'deposito 12-06.jpg', 'Reprehenderit cumqu', 'Iure fugiat est volu', 'Mollit eos quod', 'M', 1),
(21, '', 'Commodo debitis aper', 'Cillum consectetur ', 'Nostrum obcaeca', 'F', 1),
(22, '', 'Dolor totam et et en', 'Sed nisi laudantium', 'Ut ullamco dolo', 'F', 2),
(23, '', 'Illum id nostrum mi', 'Repudiandae est magn', 'Labore rerum ve', 'M', 3),
(24, '68521c91e41fa.jpg', 'Cupiditate dicta hic', 'Voluptatem Unde eiu', 'Assumenda est e', 'M', 2),
(25, '68521c91e5acf.jpg', 'Corrupti qui cupidi', 'Magna aliquid non po', 'Non eligendi hi', 'M', 1),
(26, '', 'Architecto voluptate', 'Et tempore voluptat', 'Eligendi consec', 'M', 2),
(27, '', 'Natus sequi quo ab s', 'Ex voluptatibus moll', 'Ex molestiae vo', 'F', 3),
(28, '', 'Consequatur eiusmod ', 'Do veniam tempore ', 'Inventore ab ra', 'M', 3),
(29, '', 'Incidunt similique ', 'Quia ex ab rerum ill', 'Ut minus reicie', 'M', 1),
(30, '1750213089_1.jpg', 'Sit et temporibus f', 'Sit modi Nam vel in ', 'Sunt est esse n', 'F', 2),
(32, '', 'Expedita accusamus f', 'Nisi beatae Nam quid', 'Fugiat et ', 'M', 1),
(33, '', 'Repellendus Dolor o', 'Necessitatibus sed s', 'Quas amet ', 'F', 1),
(34, '', 'Sunt proident temp', 'Aut debitis ullamco ', 'Reiciendis', 'M', 2),
(35, '', 'In consequatur Cupi', 'Sunt ut ducimus re', 'Laudantium', 'M', 2),
(36, '', 'Inventore hic quasi ', 'Voluptas accusamus a', 'Numquam anim qu', 'M', 3),
(37, '', 'Voluptatem alias sin', 'Ex suscipit beatae d', 'Magnam qui aut ', 'M', 2),
(38, '', 'Exercitation delenit', 'Laboriosam aut sit ', 'Fugit molestias', 'M', 3),
(39, '', 'Laudantium qui simi', 'Debitis tempore aut', 'Itaque quaerat ', 'F', 2),
(40, '', 'Perferendis similiqu', 'Exercitationem nostr', 'Excepteur est e', 'F', 3),
(41, '', 'Soluta incididunt co', 'Nihil alias do ut ar', 'Et corrupti sed', 'M', 2),
(42, '', 'Nostrum quaerat est ', 'Dolore accusamus dol', 'Velit vel quod ', 'F', 2),
(43, '', 'Doloribus adipisicin', 'Non ut laboris volup', 'Magni consectet', 'M', 2),
(44, '', 'Rerum quo reprehende', 'Non distinctio Sit ', 'Eu sed perferen', 'F', 1),
(45, '', 'Minim eaque exceptur', 'Expedita non omnis t', 'Saepe sunt dele', 'F', 1),
(46, '', 'Sed mollit libero ci', 'At voluptatem error', '86', 'M', 2),
(47, '', 'Minima aliquip dolor', 'Elit tempor dolores', '6', 'F', 3),
(48, '', 'Ut eius culpa tempor', 'Atque laborum Beata', '19', 'M', 2),
(49, '', 'Omnis quis perferend', 'Modi voluptas ex ame', '5', 'M', 3),
(50, '', 'Irure omnis consecte', 'Magnam recusandae A', 'Suscipit cum eu', 'M', 1),
(51, '', 'Delectus et veniam', 'Est voluptates cons', 'Alias voluptas ', 'M', 2),
(52, '6852384c873e0.', 'Autem dignissimos do', 'Consequatur ut quis ', 'Volupt', 'F', 1),
(53, '6852384c896a7.', 'Dolores voluptatem ', 'Ut incididunt dolore', 'Placea', 'M', 1),
(54, '', 'Et mollit dolore qui', 'Labore ut mollitia r', 'Laboriosam amet', 'F', 3),
(55, '', 'Officia dolores dolo', 'Omnis neque officiis', 'Aut quis magna ', 'M', 2),
(56, '', 'Recusandae Voluptat', 'Possimus qui pariat', 'Quo molestiae v', 'M', 3),
(57, '', 'Necessitatibus elige', 'Minus et nobis aut l', 'Qui ut do est e', 'M', 3),
(58, '', 'Ut qui dolore et eve', 'Ipsa expedita place', 'Quasi molestiae', 'M', 2),
(59, '', 'Molestiae enim molli', 'Facere quaerat iure ', 'Voluptas ipsam ', 'M', 2),
(60, '', 'Ut qui blanditiis mo', 'Quis dolores beatae ', 'Eum exercitatio', 'F', 1),
(61, '', 'Adipisci est sed rer', 'Sit eius reprehender', 'Rem sint sint q', 'F', 3),
(62, '', 'Dolore ut id rem qu', 'Non veritatis amet ', 'Quis anim error', 'M', 3),
(63, '', 'Expedita minus irure', 'Cupidatat consequatu', 'Quia qui quia n', 'M', 3),
(64, '', 'Quasi qui nobis sit', 'Error deleniti offic', 'Voluptatem Eaqu', 'M', 1),
(65, '', 'Fugiat aut ipsam ad', 'Ut eligendi id repu', 'Quo nobis nisi ', 'M', 2),
(66, '', 'Iure aliquip qui lau', 'Aliquam qui totam un', 'Molestiae praes', 'M', 2),
(67, '', 'Tempore consectetur', 'Ea culpa exercitati', 'Sint magnam ips', 'F', 2),
(68, '', 'Tempor dolore ipsa ', 'Cupiditate qui quia ', 'Eius qui corrup', 'M', 2),
(69, '', 'Ut laborum et illo a', 'Et aspernatur volupt', 'Eligendi et nis', 'M', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreras`
--

CREATE TABLE `carreras` (
  `codigo` int(11) NOT NULL,
  `carrera` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `carreras`
--

INSERT INTO `carreras` (`codigo`, `carrera`) VALUES
(1, 'Ing. de Sistemas'),
(2, 'Ing. en Telecomunicaciones'),
(3, 'Ing. del Gas y Petróleo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `codigocarrera` (`codigocarrera`);

--
-- Indices de la tabla `carreras`
--
ALTER TABLE `carreras`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD CONSTRAINT `alumnos_ibfk_1` FOREIGN KEY (`codigocarrera`) REFERENCES `carreras` (`codigo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
