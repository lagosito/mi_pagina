-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 15-05-2017 a las 10:03:59
-- Versión del servidor: 5.5.52-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `mipagina`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dat_agencia`
--

CREATE TABLE IF NOT EXISTS `dat_agencia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_agencia` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `dat_agencia`
--

INSERT INTO `dat_agencia` (`id`, `nombre_agencia`, `id_user`) VALUES
(1, 'Copiloto', 30),
(2, 'Studio Tigres', 5),
(3, 'Sed', 56),
(4, 'Laborum', 57),
(5, 'Circus', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dat_cliente`
--

CREATE TABLE IF NOT EXISTS `dat_cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_agencia` int(11) NOT NULL,
  `nombres` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `apellidop` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `apellidom` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `telefono2` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `razon_social` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ruc` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `cliente` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `id_webmaster` int(11) NOT NULL,
  `url_cliente` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=30 ;

--
-- Volcado de datos para la tabla `dat_cliente`
--

INSERT INTO `dat_cliente` (`id`, `id_agencia`, `nombres`, `apellidop`, `apellidom`, `telefono`, `telefono2`, `id_usuario`, `razon_social`, `direccion`, `ruc`, `cliente`, `id_webmaster`, `url_cliente`) VALUES
(3, 0, 'Tom', 'Doron', '', '', '', 11, '', '', '', 'Mogador', 0, 'tom'),
(4, 2, 'Tester', '', '', '', '', 12, '', '', '', 'Apros', 0, 'tester'),
(5, 0, 'juan armando', 'vasquez', 'trujillo', '2587415', '2587429', 13, 'RSocial', 'Av Central 3877 San Juan de Luriganchoss', '21458758528', 'cliente de prueba a eliminarsd', 0, 'asas2'),
(6, 0, 'test', 'test', 'test', 'test', '', 15, 'test', 'test', 'test', 'test', 0, 'asas3'),
(7, 0, 'Test', 'Test', 'Test', '', '', 17, 'Test', 'Test', '123456', 'Test', 0, 'as34'),
(8, 2, 'Martin', 'Kann', 'Kann', '1775628830', '1775628830', 18, 'Martin Kann', 'Maybachufer 1', '', 'MK', 0, 'asas5'),
(9, 0, 'NombreContacto', '', '', '', '', 25, '', '', '', '', 0, 'asas6'),
(10, 0, '', '', '', '15121236390', '', 26, '', '', '', '', 0, 'asas7'),
(11, 0, 'Lea', 'Nunez', 'Lagos', 'test', '', 27, 'test', 'test', 'test', 'Lea', 0, 'saas8'),
(12, 0, '', '', '', '', '', 28, '', '', '', 'Lea', 0, 'sasas9'),
(13, 1, 'Jesuitas', '', '', '', '', 31, '', '', '', 'Jesuitas', 0, 'jesuitas'),
(14, 2, '', '', '', '', '', 33, '', '', '', '', 0, ''),
(15, 2, 'Julio', 'Medina', '', '', '', 38, '', '', '', 'Inyogo', 0, 'inyogo'),
(16, 2, 'Gabriel', 'Lagos', 'Lagos', '15121236390', '15121236390', 39, 'Gabriel Lagos', 'gartnerstr 80', '', 'Gabriel Lagos', 0, ''),
(17, 2, 'Sandra', 'Goicochea', '', '', '', 40, 'Circomunicaciones SAC', 'Avenida Reducto 1518, Miraflores', '20600958501', 'Dinamo SAC', 0, 'circomunicaciones'),
(18, 2, 'Gabriel', 'Lagos', 'Lagos', '17620190529', '17620190529', 2, 'Gabriel Lagos', 'gärtnerstr. 80', '', 'Gabriel Lagos', 0, 'stgabriel'),
(19, 2, 'Gabriel', 'Lagos', 'Lagos', '17620190529', '17620190529', 42, 'Gabriel Lagos', 'gärtnerstr. 80', '', 'Gabriel Lagos', 0, ''),
(20, 2, '', '', '', '', '', 16, '', '', '', '', 0, ''),
(21, 2, 'Gabriel', 'Lagos', 'Lagos', '17620190529', '17620190529', 45, 'Gabriel Lagos', 'gärtnerstr. 80', '', 'Gabriel Lagos', 0, ''),
(22, 2, 'Gabriel', 'Lagos', 'Lagos', '17620190529', '17620190529', 48, 'Gabriel Lagos', 'gärtnerstr. 80', '', 'Gabriel Lagos', 0, ''),
(23, 2, 'Vicens', 'bbb', 'aaaa', '123456789', '123456789', 50, 'Razón', 'BBB', '1212', 'Test Vicens', 0, ''),
(24, 2, 'san fernando', '', '', '', '', 54, '', '', '', 'san fernando', 0, 'sanfernando'),
(25, 2, 'Gabriel', 'Lagos', '', '15121236390', '', 3, '', '', '', 'Gabriel Lagos', 0, 'comercial'),
(26, 2, '', '', '', '', '', 55, '', '', '', '1kg', 0, '1kgadmin'),
(27, 3, '', '', '', '', '', 56, '', '', '', '', 0, 'Curiosidad'),
(28, 4, '', '', '', '', '', 57, '', '', '', '', 0, 'Laborum'),
(29, 2, '', '', '', '', '', 58, '', '', '', 'Seminarium', 0, 'seminarium');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dat_cliente_modulo`
--

CREATE TABLE IF NOT EXISTS `dat_cliente_modulo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_md_modulo` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_agencia` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=635 ;

--
-- Volcado de datos para la tabla `dat_cliente_modulo`
--

INSERT INTO `dat_cliente_modulo` (`id`, `id_md_modulo`, `id_cliente`, `id_agencia`) VALUES
(1, 38, 13, 1),
(2, 42, 13, 1),
(4, 44, 8, 2),
(5, 3, 8, 2),
(6, 3, 14, 2),
(7, 3, 15, 2),
(8, 3, 16, 2),
(9, 3, 17, 2),
(10, 3, 18, 2),
(11, 3, 19, 2),
(12, 3, 20, 2),
(13, 3, 21, 2),
(14, 3, 22, 2),
(15, 3, 23, 2),
(16, 3, 24, 2),
(17, 3, 25, 2),
(18, 3, 26, 2),
(19, 3, 29, 2),
(20, 4, 8, 2),
(21, 4, 14, 2),
(22, 4, 15, 2),
(23, 4, 16, 2),
(24, 4, 17, 2),
(25, 4, 18, 2),
(26, 4, 19, 2),
(27, 4, 20, 2),
(28, 4, 21, 2),
(29, 4, 22, 2),
(30, 4, 23, 2),
(31, 4, 24, 2),
(32, 4, 25, 2),
(33, 4, 26, 2),
(34, 4, 29, 2),
(50, 7, 8, 2),
(51, 7, 14, 2),
(52, 7, 15, 2),
(53, 7, 16, 2),
(54, 7, 17, 2),
(55, 7, 18, 2),
(56, 7, 19, 2),
(57, 7, 20, 2),
(58, 7, 21, 2),
(59, 7, 22, 2),
(60, 7, 23, 2),
(61, 7, 24, 2),
(62, 7, 25, 2),
(63, 7, 26, 2),
(64, 7, 29, 2),
(65, 8, 8, 2),
(66, 8, 14, 2),
(67, 8, 15, 2),
(68, 8, 16, 2),
(69, 8, 17, 2),
(70, 8, 18, 2),
(71, 8, 19, 2),
(72, 8, 20, 2),
(73, 8, 21, 2),
(74, 8, 22, 2),
(75, 8, 23, 2),
(76, 8, 24, 2),
(77, 8, 25, 2),
(78, 8, 26, 2),
(79, 8, 29, 2),
(80, 9, 8, 2),
(81, 9, 14, 2),
(82, 9, 15, 2),
(83, 9, 16, 2),
(84, 9, 17, 2),
(85, 9, 18, 2),
(86, 9, 19, 2),
(87, 9, 20, 2),
(88, 9, 21, 2),
(89, 9, 22, 2),
(90, 9, 23, 2),
(91, 9, 24, 2),
(92, 9, 25, 2),
(93, 9, 26, 2),
(94, 9, 29, 2),
(95, 10, 8, 2),
(96, 10, 14, 2),
(97, 10, 15, 2),
(98, 10, 16, 2),
(99, 10, 17, 2),
(100, 10, 18, 2),
(101, 10, 19, 2),
(102, 10, 20, 2),
(103, 10, 21, 2),
(104, 10, 22, 2),
(105, 10, 23, 2),
(106, 10, 24, 2),
(107, 10, 25, 2),
(108, 10, 26, 2),
(109, 10, 29, 2),
(110, 16, 8, 2),
(111, 16, 14, 2),
(112, 16, 15, 2),
(113, 16, 16, 2),
(114, 16, 17, 2),
(115, 16, 18, 2),
(116, 16, 19, 2),
(117, 16, 20, 2),
(118, 16, 21, 2),
(119, 16, 22, 2),
(120, 16, 23, 2),
(121, 16, 24, 2),
(122, 16, 25, 2),
(123, 16, 26, 2),
(124, 16, 29, 2),
(125, 17, 8, 2),
(126, 17, 14, 2),
(127, 17, 15, 2),
(128, 17, 16, 2),
(129, 17, 17, 2),
(130, 17, 18, 2),
(131, 17, 19, 2),
(132, 17, 20, 2),
(133, 17, 21, 2),
(134, 17, 22, 2),
(135, 17, 23, 2),
(136, 17, 24, 2),
(137, 17, 25, 2),
(138, 17, 26, 2),
(139, 17, 29, 2),
(140, 20, 8, 2),
(141, 20, 14, 2),
(142, 20, 15, 2),
(143, 20, 16, 2),
(144, 20, 17, 2),
(145, 20, 18, 2),
(146, 20, 19, 2),
(147, 20, 20, 2),
(148, 20, 21, 2),
(149, 20, 22, 2),
(150, 20, 23, 2),
(151, 20, 24, 2),
(152, 20, 25, 2),
(153, 20, 26, 2),
(154, 20, 29, 2),
(155, 21, 8, 2),
(156, 21, 14, 2),
(157, 21, 15, 2),
(158, 21, 16, 2),
(159, 21, 17, 2),
(160, 21, 18, 2),
(161, 21, 19, 2),
(162, 21, 20, 2),
(163, 21, 21, 2),
(164, 21, 22, 2),
(165, 21, 23, 2),
(166, 21, 24, 2),
(167, 21, 25, 2),
(168, 21, 26, 2),
(169, 21, 29, 2),
(170, 25, 8, 2),
(171, 25, 14, 2),
(172, 25, 15, 2),
(173, 25, 16, 2),
(174, 25, 17, 2),
(175, 25, 18, 2),
(176, 25, 19, 2),
(177, 25, 20, 2),
(178, 25, 21, 2),
(179, 25, 22, 2),
(180, 25, 23, 2),
(181, 25, 24, 2),
(182, 25, 25, 2),
(183, 25, 26, 2),
(184, 25, 29, 2),
(185, 27, 8, 2),
(186, 27, 14, 2),
(187, 27, 15, 2),
(188, 27, 16, 2),
(189, 27, 17, 2),
(190, 27, 18, 2),
(191, 27, 19, 2),
(192, 27, 20, 2),
(193, 27, 21, 2),
(194, 27, 22, 2),
(195, 27, 23, 2),
(196, 27, 24, 2),
(197, 27, 25, 2),
(198, 27, 26, 2),
(199, 27, 29, 2),
(200, 28, 8, 2),
(201, 28, 14, 2),
(202, 28, 15, 2),
(203, 28, 16, 2),
(204, 28, 17, 2),
(205, 28, 18, 2),
(206, 28, 19, 2),
(207, 28, 20, 2),
(208, 28, 21, 2),
(209, 28, 22, 2),
(210, 28, 23, 2),
(211, 28, 24, 2),
(212, 28, 25, 2),
(213, 28, 26, 2),
(214, 28, 29, 2),
(215, 30, 8, 2),
(216, 30, 14, 2),
(217, 30, 15, 2),
(218, 30, 16, 2),
(219, 30, 17, 2),
(220, 30, 18, 2),
(221, 30, 19, 2),
(222, 30, 20, 2),
(223, 30, 21, 2),
(224, 30, 22, 2),
(225, 30, 23, 2),
(226, 30, 24, 2),
(227, 30, 25, 2),
(228, 30, 26, 2),
(229, 30, 29, 2),
(230, 31, 8, 2),
(231, 31, 14, 2),
(232, 31, 15, 2),
(233, 31, 16, 2),
(234, 31, 17, 2),
(235, 31, 18, 2),
(236, 31, 19, 2),
(237, 31, 20, 2),
(238, 31, 21, 2),
(239, 31, 22, 2),
(240, 31, 23, 2),
(241, 31, 24, 2),
(242, 31, 25, 2),
(243, 31, 26, 2),
(244, 31, 29, 2),
(245, 32, 8, 2),
(246, 32, 14, 2),
(247, 32, 15, 2),
(248, 32, 16, 2),
(249, 32, 17, 2),
(250, 32, 18, 2),
(251, 32, 19, 2),
(252, 32, 20, 2),
(253, 32, 21, 2),
(254, 32, 22, 2),
(255, 32, 23, 2),
(256, 32, 24, 2),
(257, 32, 25, 2),
(258, 32, 26, 2),
(259, 32, 29, 2),
(260, 33, 8, 2),
(261, 33, 14, 2),
(262, 33, 15, 2),
(263, 33, 16, 2),
(264, 33, 17, 2),
(265, 33, 18, 2),
(266, 33, 19, 2),
(267, 33, 20, 2),
(268, 33, 21, 2),
(269, 33, 22, 2),
(270, 33, 23, 2),
(271, 33, 24, 2),
(272, 33, 25, 2),
(273, 33, 26, 2),
(274, 33, 29, 2),
(275, 34, 8, 2),
(276, 34, 14, 2),
(277, 34, 15, 2),
(278, 34, 16, 2),
(279, 34, 17, 2),
(280, 34, 18, 2),
(281, 34, 19, 2),
(282, 34, 20, 2),
(283, 34, 21, 2),
(284, 34, 22, 2),
(285, 34, 23, 2),
(286, 34, 24, 2),
(287, 34, 25, 2),
(288, 34, 26, 2),
(289, 34, 29, 2),
(290, 35, 8, 2),
(291, 35, 14, 2),
(292, 35, 15, 2),
(293, 35, 16, 2),
(294, 35, 17, 2),
(295, 35, 18, 2),
(296, 35, 19, 2),
(297, 35, 20, 2),
(298, 35, 21, 2),
(299, 35, 22, 2),
(300, 35, 23, 2),
(301, 35, 24, 2),
(302, 35, 25, 2),
(303, 35, 26, 2),
(304, 35, 29, 2),
(305, 36, 8, 2),
(306, 36, 14, 2),
(307, 36, 15, 2),
(308, 36, 16, 2),
(309, 36, 17, 2),
(310, 36, 18, 2),
(311, 36, 19, 2),
(312, 36, 20, 2),
(313, 36, 21, 2),
(314, 36, 22, 2),
(315, 36, 23, 2),
(316, 36, 24, 2),
(317, 36, 25, 2),
(318, 36, 26, 2),
(319, 36, 29, 2),
(320, 37, 8, 2),
(321, 37, 14, 2),
(322, 37, 15, 2),
(323, 37, 16, 2),
(324, 37, 17, 2),
(325, 37, 18, 2),
(326, 37, 19, 2),
(327, 37, 20, 2),
(328, 37, 21, 2),
(329, 37, 22, 2),
(330, 37, 23, 2),
(331, 37, 24, 2),
(332, 37, 25, 2),
(333, 37, 26, 2),
(334, 37, 29, 2),
(335, 39, 8, 2),
(336, 39, 14, 2),
(337, 39, 15, 2),
(338, 39, 16, 2),
(339, 39, 17, 2),
(340, 39, 18, 2),
(341, 39, 19, 2),
(342, 39, 20, 2),
(343, 39, 21, 2),
(344, 39, 22, 2),
(345, 39, 23, 2),
(346, 39, 24, 2),
(347, 39, 25, 2),
(348, 39, 26, 2),
(349, 39, 29, 2),
(350, 40, 8, 2),
(351, 40, 14, 2),
(352, 40, 15, 2),
(353, 40, 16, 2),
(354, 40, 17, 2),
(355, 40, 18, 2),
(356, 40, 19, 2),
(357, 40, 20, 2),
(358, 40, 21, 2),
(359, 40, 22, 2),
(360, 40, 23, 2),
(361, 40, 24, 2),
(362, 40, 25, 2),
(363, 40, 26, 2),
(364, 40, 29, 2),
(365, 41, 8, 2),
(366, 41, 14, 2),
(367, 41, 15, 2),
(368, 41, 16, 2),
(369, 41, 17, 2),
(370, 41, 18, 2),
(371, 41, 19, 2),
(372, 41, 20, 2),
(373, 41, 21, 2),
(374, 41, 22, 2),
(375, 41, 23, 2),
(376, 41, 24, 2),
(377, 41, 25, 2),
(378, 41, 26, 2),
(379, 41, 29, 2),
(380, 43, 8, 2),
(381, 43, 14, 2),
(382, 43, 15, 2),
(383, 43, 16, 2),
(384, 43, 17, 2),
(385, 43, 18, 2),
(386, 43, 19, 2),
(387, 43, 20, 2),
(388, 43, 21, 2),
(389, 43, 22, 2),
(390, 43, 23, 2),
(391, 43, 24, 2),
(392, 43, 25, 2),
(393, 43, 26, 2),
(394, 43, 29, 2),
(395, 45, 8, 2),
(396, 45, 14, 2),
(397, 45, 15, 2),
(398, 45, 16, 2),
(399, 45, 17, 2),
(400, 45, 18, 2),
(401, 45, 19, 2),
(402, 45, 20, 2),
(403, 45, 21, 2),
(404, 45, 22, 2),
(405, 45, 23, 2),
(406, 45, 24, 2),
(407, 45, 25, 2),
(408, 45, 26, 2),
(409, 45, 29, 2),
(410, 46, 8, 2),
(411, 46, 14, 2),
(412, 46, 15, 2),
(413, 46, 16, 2),
(414, 46, 17, 2),
(415, 46, 18, 2),
(416, 46, 19, 2),
(417, 46, 20, 2),
(418, 46, 21, 2),
(419, 46, 22, 2),
(420, 46, 23, 2),
(421, 46, 24, 2),
(422, 46, 25, 2),
(423, 46, 26, 2),
(424, 46, 29, 2),
(425, 47, 8, 2),
(426, 47, 14, 2),
(427, 47, 15, 2),
(428, 47, 16, 2),
(429, 47, 17, 2),
(430, 47, 18, 2),
(431, 47, 19, 2),
(432, 47, 20, 2),
(433, 47, 21, 2),
(434, 47, 22, 2),
(435, 47, 23, 2),
(436, 47, 24, 2),
(437, 47, 25, 2),
(438, 47, 26, 2),
(439, 47, 29, 2),
(440, 48, 8, 2),
(441, 48, 14, 2),
(442, 48, 15, 2),
(443, 48, 16, 2),
(444, 48, 17, 2),
(445, 48, 18, 2),
(446, 48, 19, 2),
(447, 48, 20, 2),
(448, 48, 21, 2),
(449, 48, 22, 2),
(450, 48, 23, 2),
(451, 48, 24, 2),
(452, 48, 25, 2),
(453, 48, 26, 2),
(454, 48, 29, 2),
(455, 50, 8, 2),
(456, 50, 14, 2),
(457, 50, 15, 2),
(458, 50, 16, 2),
(459, 50, 17, 2),
(460, 50, 18, 2),
(461, 50, 19, 2),
(462, 50, 20, 2),
(463, 50, 21, 2),
(464, 50, 22, 2),
(465, 50, 23, 2),
(466, 50, 24, 2),
(467, 50, 25, 2),
(468, 50, 26, 2),
(469, 50, 29, 2),
(470, 51, 8, 2),
(471, 51, 14, 2),
(472, 51, 15, 2),
(473, 51, 16, 2),
(474, 51, 17, 2),
(475, 51, 18, 2),
(476, 51, 19, 2),
(477, 51, 20, 2),
(478, 51, 21, 2),
(479, 51, 22, 2),
(480, 51, 23, 2),
(481, 51, 24, 2),
(482, 51, 25, 2),
(483, 51, 26, 2),
(484, 51, 29, 2),
(485, 52, 8, 2),
(486, 52, 14, 2),
(487, 52, 15, 2),
(488, 52, 16, 2),
(489, 52, 17, 2),
(490, 52, 18, 2),
(491, 52, 19, 2),
(492, 52, 20, 2),
(493, 52, 21, 2),
(494, 52, 22, 2),
(495, 52, 23, 2),
(496, 52, 24, 2),
(497, 52, 25, 2),
(498, 52, 26, 2),
(499, 52, 29, 2),
(500, 53, 8, 2),
(501, 53, 14, 2),
(502, 53, 15, 2),
(503, 53, 16, 2),
(504, 53, 17, 2),
(505, 53, 18, 2),
(506, 53, 19, 2),
(507, 53, 20, 2),
(508, 53, 21, 2),
(509, 53, 22, 2),
(510, 53, 23, 2),
(511, 53, 24, 2),
(512, 53, 25, 2),
(513, 53, 26, 2),
(514, 53, 29, 2),
(515, 54, 8, 2),
(516, 54, 14, 2),
(517, 54, 15, 2),
(518, 54, 16, 2),
(519, 54, 17, 2),
(520, 54, 18, 2),
(521, 54, 19, 2),
(522, 54, 20, 2),
(523, 54, 21, 2),
(524, 54, 22, 2),
(525, 54, 23, 2),
(526, 54, 24, 2),
(527, 54, 25, 2),
(528, 54, 26, 2),
(529, 54, 29, 2),
(530, 57, 8, 2),
(531, 57, 14, 2),
(532, 57, 15, 2),
(533, 57, 16, 2),
(534, 57, 17, 2),
(535, 57, 18, 2),
(536, 57, 19, 2),
(537, 57, 20, 2),
(538, 57, 21, 2),
(539, 57, 22, 2),
(540, 57, 23, 2),
(541, 57, 24, 2),
(542, 57, 25, 2),
(543, 57, 26, 2),
(544, 57, 29, 2),
(560, 58, 8, 2),
(561, 58, 14, 2),
(562, 58, 15, 2),
(563, 58, 16, 2),
(564, 58, 17, 2),
(565, 58, 18, 2),
(566, 58, 19, 2),
(567, 58, 20, 2),
(568, 58, 21, 2),
(569, 58, 22, 2),
(570, 58, 23, 2),
(571, 58, 24, 2),
(572, 58, 25, 2),
(573, 58, 26, 2),
(574, 58, 29, 2),
(575, 59, 8, 2),
(576, 59, 14, 2),
(577, 59, 15, 2),
(578, 59, 16, 2),
(579, 59, 17, 2),
(580, 59, 18, 2),
(581, 59, 19, 2),
(582, 59, 20, 2),
(583, 59, 21, 2),
(584, 59, 22, 2),
(585, 59, 23, 2),
(586, 59, 24, 2),
(587, 59, 25, 2),
(588, 59, 26, 2),
(589, 59, 29, 2),
(590, 60, 8, 2),
(591, 60, 14, 2),
(592, 60, 15, 2),
(593, 60, 16, 2),
(594, 60, 17, 2),
(595, 60, 18, 2),
(596, 60, 19, 2),
(597, 60, 20, 2),
(598, 60, 21, 2),
(599, 60, 22, 2),
(600, 60, 23, 2),
(601, 60, 24, 2),
(602, 60, 25, 2),
(603, 60, 26, 2),
(604, 60, 29, 2),
(605, 62, 8, 2),
(606, 62, 14, 2),
(607, 62, 15, 2),
(608, 62, 16, 2),
(609, 62, 17, 2),
(610, 62, 18, 2),
(611, 62, 19, 2),
(612, 62, 20, 2),
(613, 62, 21, 2),
(614, 62, 22, 2),
(615, 62, 23, 2),
(616, 62, 24, 2),
(617, 62, 25, 2),
(618, 62, 26, 2),
(619, 62, 29, 2),
(620, 64, 8, 2),
(621, 64, 14, 2),
(622, 64, 15, 2),
(623, 64, 16, 2),
(624, 64, 17, 2),
(625, 64, 18, 2),
(626, 64, 19, 2),
(627, 64, 20, 2),
(628, 64, 21, 2),
(629, 64, 22, 2),
(630, 64, 23, 2),
(631, 64, 24, 2),
(632, 64, 25, 2),
(633, 64, 26, 2),
(634, 64, 29, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dat_complementos`
--

CREATE TABLE IF NOT EXISTS `dat_complementos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `dat_complementos`
--

INSERT INTO `dat_complementos` (`id`, `nombre`) VALUES
(1, 'red social'),
(2, 'galeria'),
(3, 'slider'),
(4, 'google-map'),
(5, 'slider texto'),
(6, 'noticias'),
(7, 'slider img-texto'),
(8, 'sectores');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dat_idiomas`
--

CREATE TABLE IF NOT EXISTS `dat_idiomas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idioma` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `siglas` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `icono` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `dat_idiomas`
--

INSERT INTO `dat_idiomas` (`id`, `idioma`, `siglas`, `icono`) VALUES
(1, 'Español', 'es', ''),
(2, 'Inglés', 'en', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dat_red_social`
--

CREATE TABLE IF NOT EXISTS `dat_red_social` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `marca` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `icono` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `dat_red_social`
--

INSERT INTO `dat_red_social` (`id`, `marca`, `icono`) VALUES
(1, 'Facebook', 'fa fa-facebook'),
(2, 'Twitter', 'fa fa-twitter'),
(3, 'Instagram', 'fa fa-instagram'),
(4, 'Google +', 'fa fa-google-plus'),
(5, 'YouTube', 'fa fa-youtube'),
(6, 'Linkedin', 'fa fa-linkedin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dat_roles`
--

CREATE TABLE IF NOT EXISTS `dat_roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rol` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `dat_roles`
--

INSERT INTO `dat_roles` (`id`, `rol`) VALUES
(1, 'Cliente'),
(2, 'Agencia'),
(3, 'Comercial'),
(4, 'Super Administrador'),
(5, 'Tester'),
(6, 'E-commerce');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dat_tipografia`
--

CREATE TABLE IF NOT EXISTS `dat_tipografia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `estilo` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `titulo` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `parrafo` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `dat_tipografia`
--

INSERT INTO `dat_tipografia` (`id`, `estilo`, `titulo`, `parrafo`) VALUES
(1, 'Montserrat Bold - PT Serif Regular', 'montserrat-bold', 'pt-serif-regular'),
(2, 'Playfair Display Bold - Raleway Light', 'playfair-bold', 'raleway-light'),
(3, 'Londrina Outline Regular - Alegreya Regular', 'londrina-regular', 'alegreya-regular'),
(4, 'Sacramento Regular - Montserrat Regular', 'sacramento-regular', 'montserrat-regular'),
(5, 'Fjalla One Regular - Prata', 'fjallaone-regular', 'prata'),
(6, 'Circular std Bold - Montserrat Regular', 'circular-std-bold', 'montserrat-regular'),
(7, 'Amatic SC Regular - Playfair Display Regular', 'amatic-sc-regular', 'playfair-regular'),
(8, 'Leckerli One Regular - Lato Light', 'leckerli-one-regular', 'lato-light'),
(9, 'Quicksand Light - Garamond Italic', 'quicksand-light', 'garamond-italic'),
(10, 'Cambria Regular - Garamond Italic', 'cambria-regular', 'garamond-italic');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `md_categorias`
--

CREATE TABLE IF NOT EXISTS `md_categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `md_categorias`
--

INSERT INTO `md_categorias` (`id`, `categoria`) VALUES
(1, 'about us'),
(2, 'contacto'),
(3, 'categoria prueba');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `md_combinacion_colores`
--

CREATE TABLE IF NOT EXISTS `md_combinacion_colores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_md_modulo` int(11) NOT NULL,
  `fondo` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `titulo` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `subtitulo` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `comentario` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `color_boton` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `color_menu` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `color_menucat` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `color_menucatfondo` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=77 ;

--
-- Volcado de datos para la tabla `md_combinacion_colores`
--

INSERT INTO `md_combinacion_colores` (`id`, `id_md_modulo`, `fondo`, `titulo`, `subtitulo`, `comentario`, `color_boton`, `color_menu`, `color_menucat`, `color_menucatfondo`) VALUES
(1, 1, '#f7c80b', '#FFFFFF', '#FFFFFF', '#FFFFFF', NULL, '#FFFFFF', NULL, NULL),
(2, 2, '#FFFFFF', '#3c3d41', '#3c3d41', '#656b6f', NULL, NULL, NULL, NULL),
(3, 3, '#f7c80b', '#FFFFFF', NULL, '#FFFFFF', '#FFFFFF', '#000000', NULL, NULL),
(4, 4, '#FFFFFF', '#212121', '#00BFFF', '#777777', NULL, NULL, NULL, NULL),
(5, 5, '#EBE9E8', NULL, NULL, '#c0c0c0', NULL, '#000000', NULL, NULL),
(6, 6, '#372d36', '#FFFFFF', '#FFFFFF', '#FFFFFF', '', '#FFFFFF', NULL, NULL),
(7, 7, '#f3f2ee', '#3c3d41', '#3c3d41', '#656b6f', NULL, NULL, NULL, NULL),
(8, 8, '#282627', '#FFFFFF', '#FFFFFF', '#FFFFFF', '#fc7411', NULL, NULL, NULL),
(9, 9, '#4c4a4b', NULL, '#FFFFFF', '#a9a9a9', NULL, '#FFFFFF', NULL, NULL),
(10, 10, '#FFFFFF', '#3c3d41', '#3c3d41', '#656b6f', NULL, NULL, NULL, NULL),
(12, 12, '#372d36', '#FFFFFF', '#FFFFFF', '#c3c1c4', '#FFFFFF', '#FFFFFF', NULL, NULL),
(13, 13, '#f76162', '#FFFFFF', '#FFFFFF', '#FFFFFF', '', '#ffffff', NULL, NULL),
(14, 14, '#FFFFFF', '#3c3d41', '#3c3d41', '#656b6f', NULL, NULL, NULL, NULL),
(15, 15, '#000000', '#FFFFFF', NULL, '#FFFFFF', '#eccd11', NULL, NULL, NULL),
(16, 16, '#ffffff', '#000000', '#8f9496', '#ffffff', '#43cb83', NULL, NULL, NULL),
(17, 17, '#FFFFFF', '#000000', '#a8acb9', '#4f5362', NULL, NULL, NULL, NULL),
(18, 18, '#FFFFFF', '#3c3d41', '#3c3d41', '#656b6f', NULL, NULL, NULL, NULL),
(19, 19, '#FFFFFF', '#3c3d41', '#3c3d41', NULL, NULL, NULL, '#ffffff', ''),
(20, 20, '#ffffff', '#3c3d41', '#3c3d41', '#656b6f', NULL, NULL, NULL, NULL),
(21, 21, '#ffffff', NULL, NULL, '', NULL, NULL, NULL, NULL),
(22, 22, '#ffffff', '#3c3d41', '#3c3d41', '#656b6f', '#f3d42e', NULL, NULL, NULL),
(23, 23, '#ffffff', '#3c3d41', '#3c3d41', '#656b6f', '#f3d42e', NULL, NULL, NULL),
(24, 24, '#ffffff', '#3c3d41', NULL, '#656b6f', NULL, NULL, NULL, NULL),
(25, 25, '#6b6b6b', '#ffffff', NULL, '#ffffff', '#eccd11', NULL, NULL, NULL),
(26, 26, '#ffffff', '#3c3d41', NULL, '#656b6f', '#3c3d41', NULL, NULL, NULL),
(27, 27, '#ffffff', '#3c3d41', '#3c3d41', '#656b6f', '#f3d42e', NULL, NULL, NULL),
(28, 28, '#ffffff', '#3c3d41', NULL, '#656b6f', NULL, NULL, NULL, NULL),
(29, 29, '#ffffff', '#3c3d41', NULL, '', '#f3d42e', NULL, '#000000', ''),
(30, 30, '#ffffff', NULL, NULL, '', NULL, NULL, NULL, NULL),
(31, 31, '#ffffff', '#000000', '#ffffff', '#ffffff', '#1f5dea', NULL, NULL, NULL),
(32, 32, '#000000', '#ffffff', '#c2afaf', '#ffffff', '#eddd18', NULL, NULL, NULL),
(33, 33, '#000000', '#ffffff', NULL, '#ffffff', NULL, NULL, NULL, NULL),
(34, 34, '#575757', '#FFFFFF', NULL, '#FFFFFF', NULL, NULL, NULL, NULL),
(35, 35, '#FFFFFF', '#FFFFFF', '#a4a4a6', '#cfcfd1', '#205deb', '#FFFFFF', NULL, NULL),
(36, 36, '#222328', '#FFFFFF', '#FFFFFF', '#cccece', NULL, '#FFFFFF', NULL, NULL),
(37, 37, '#FFFFFF', '#000000', NULL, NULL, NULL, NULL, NULL, NULL),
(38, 38, '#FFFFFF', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(39, 39, '#FFFFFF', '#fdac02', NULL, NULL, NULL, NULL, NULL, NULL),
(40, 40, '#FFFFFF', '#ffffff', '#ffffff', '#000000', '#231f20', NULL, NULL, NULL),
(41, 41, '#FFFFFF', '#000000', NULL, NULL, NULL, NULL, NULL, NULL),
(42, 42, '#221d1f', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(43, 43, '#000000', '', NULL, '#FFFFFF', NULL, NULL, NULL, NULL),
(44, 44, '#FFFFFF', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(45, 45, '#FFFFFF', '#dce1ed', NULL, NULL, NULL, '#233f88', NULL, NULL),
(46, 46, '#233f88', '#FFFFFF', NULL, '#FFFFFF', '#FFFFFF', NULL, NULL, NULL),
(47, 47, '#000000', '#FFFFFF', NULL, '#FFFFFF', NULL, NULL, NULL, NULL),
(48, 48, '#dbdbdb', '#003377', '#FFFFFF', '#FFFFFF', NULL, NULL, NULL, NULL),
(49, 49, '#FFFFFF', '#003377', NULL, NULL, NULL, NULL, NULL, NULL),
(50, 50, '#606163', '#FFFFFF', '#FFFFFF', '#FFFFFF', NULL, NULL, NULL, NULL),
(51, 51, '#FFFFFF', '#233f88', NULL, '#233f88', NULL, NULL, NULL, NULL),
(52, 52, '#000000', '#FFFFFF', '#FFFFFF', '#FFFFFF', NULL, NULL, NULL, NULL),
(53, 53, '#003377', '#FFFFFF', NULL, '#FFFFFF', NULL, NULL, NULL, NULL),
(54, 54, '#e9eaeb', '#233f88', '#FFFFFF', '#FFFFFF', '#233f88', NULL, NULL, NULL),
(55, 55, '#FFFFFF', NULL, NULL, NULL, NULL, '#003377', NULL, NULL),
(56, 56, '#000000', '#FFFFFF', NULL, '#FFFFFF', NULL, NULL, NULL, NULL),
(57, 57, '#FFFFFF', '#1a1fef', '#1a1fef', '#1a1fef', '#1a1fef', NULL, NULL, NULL),
(58, 58, '#FFFFFF', '#FFFFFF', '#333333', NULL, '#eeeeee', '#333333', NULL, NULL),
(59, 59, '#333333', '#99a29e', '#FFFFFF', '#FFFFFF', '#99a29e', NULL, NULL, NULL),
(60, 60, '#333333', '#FFFFFF', '#FFFFFF', '#FFFFFF', NULL, NULL, NULL, NULL),
(61, 61, '#FFFFFF', '#333333', '#333333', '#333333', NULL, NULL, NULL, NULL),
(62, 62, '#FFFFFF', '#333333', '#333333', NULL, NULL, NULL, NULL, NULL),
(63, 63, '#FFFFFF', '#333333', '#333333', '#333333', '#333333', NULL, NULL, NULL),
(64, 64, '#FFFFFF', '#333333', NULL, '#333333', NULL, NULL, NULL, NULL),
(65, 65, '#FFFFFF', '#FFFFFF', NULL, '#FFFFFF', '#0067bf', NULL, NULL, NULL),
(66, 66, '#FFFFFF', '#246da0', NULL, '#6a6969 ', NULL, NULL, NULL, NULL),
(67, 67, '#FFFFFF', '#246da0', '#246da0 ', '#6a6969', NULL, NULL, NULL, NULL),
(68, 68, '#FFFFFF', '#ef9902', NULL, '#FFFFFF', NULL, NULL, NULL, NULL),
(69, 69, '#333', '#FFFFFF', NULL, '#FFFFFF', NULL, NULL, NULL, NULL),
(70, 70, '#FFFFFF', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(71, 71, '#FFFFFF', '#333333', NULL, '#000000', '#d2d0d0', NULL, NULL, NULL),
(72, 72, '#FFFFFF', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(73, 73, '#FFFFFF', '#333333', NULL, NULL, NULL, NULL, '#000000', '#FFFFFF'),
(74, 74, '#333333', '#eeeeee', NULL, NULL, NULL, NULL, NULL, NULL),
(75, 75, '#FFFFFF', '#333333', '#FFFFFF', '#FFFFFF', '#333333', NULL, NULL, NULL),
(76, 76, '#FFFFFF', '#333333', '#FFFFFF', '#FFFFFF', '#333333', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `md_modulo`
--

CREATE TABLE IF NOT EXISTS `md_modulo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_md_categoria` int(11) NOT NULL,
  `tipo_id` int(11) NOT NULL,
  `orden` int(11) NOT NULL,
  `titulo` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `comentario` text COLLATE utf8_spanish_ci NOT NULL,
  `logo` varchar(300) COLLATE utf8_spanish_ci DEFAULT NULL,
  `logo_texto` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `color_fondo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `imagen_fondo` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `modulo_blade` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `css_nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `imagen` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `custom_menu` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=77 ;

--
-- Volcado de datos para la tabla `md_modulo`
--

INSERT INTO `md_modulo` (`id`, `id_md_categoria`, `tipo_id`, `orden`, `titulo`, `comentario`, `logo`, `logo_texto`, `color_fondo`, `imagen_fondo`, `modulo_blade`, `css_nombre`, `imagen`, `custom_menu`) VALUES
(1, 0, 1, 0, 'mi pagina', 'Logotipo de x dimensiones, imagen detacada de x dimensiones, titulo de max 20 caracteres, intro de aprox 320 caracteres, dos columnas de texto con su respectivo subtitulo.\n', '', 'mi pagina', '', '', 'modulo1', 'modulo1.css', 'md_cabecera1.png', 0),
(2, 1, 2, 1, 'Crew', '', NULL, '', '', '', 'modulo3', 'modulo3.css', 'md_contenido1.png', 0),
(3, 0, 1, 0, 'mipagina', '', '', 'mi pagina', '', '', 'modulo2', 'modulo2.css', 'md_cabecera2.png', 0),
(4, 0, 2, 2, 'Expo', '', NULL, '', '', '', 'modulo4', 'modulo4.css', 'md_contenido2.png', 0),
(5, 0, 3, 0, 'Contacto', '', 'logomipagina.png', '', '', '', 'modulo_f1', 'modulo_f1.css', 'md_footer1.png', 0),
(6, 0, 1, 0, 'mipagina', '', '', 'mi pagina', '', '', 'modulo_h3', 'modulo_h3.css', 'md_cabecera3.png', 0),
(7, 0, 2, 3, 'Work', '', NULL, '', '', '', 'modulo_c3', 'modulo_c3.css', 'md_contenido3.png', 0),
(8, 0, 2, 50, 'Contacto', '', NULL, '', '', '', 'modulo_contact3', 'modulo_contact3.css', 'md_contact3.png', 0),
(9, 0, 3, 0, '', '', 'logomipaginawhite.png', '', '', '', 'modulo_f2', 'modulo_f2.css', 'md_footer2.png', 0),
(10, 0, 2, 4, 'About', '', NULL, '', '', '', 'modulo_c4', 'modulo_c4.css', 'md_contenido4.png', 0),
(12, 0, 1, 0, 'mi pagina', '', '', 'mi pagina', '', 'building_street.jpg', 'modulo_h4', 'modulo_h4.css', 'md_cabecera4.jpg', 0),
(13, 0, 1, 0, 'mi pagina', '', '', 'mi pagina', '', '', 'modulo_h51', 'modulo_h51.css', 'md_cabecera51.jpg', 0),
(14, 0, 2, 6, 'content7', '', NULL, '', '', '', 'modulo_c7', 'modulo_c7.css', 'md_contenido7.jpg', 0),
(15, 0, 2, 7, 'content12', '', NULL, '', '', '', 'modulo_c12', 'modulo_c12.css', 'md_contenido12.jpg', 0),
(16, 0, 2, 51, 'contact2', '', NULL, '', '', 'fondo_md_contact2.jpg', 'modulo_contact2', 'modulo_contact2.css', 'md_contact2.jpg', 0),
(17, 0, 2, 52, 'contact4a', '', NULL, '', '', '', 'modulo_contact4a', 'modulo_contact4a.css', 'md_contact4a.jpg', 0),
(18, 0, 2, 8, 'content22', '', NULL, '', '', '', 'modulo_c22_acordeon', 'modulo_c22_acordeon.css', 'md_contenido22_acordeon.jpg', 0),
(19, 0, 2, 16, 'Portafolio', '', NULL, '', '', '', 'modulo_c62_tabs', 'modulo_c62_tabs.css', 'md_contenido_tabs62.jpg', 0),
(20, 0, 2, 9, 'modulo17', '', NULL, '', '', '', 'modulo_c17', 'modulo_c17.css', 'md_contenido17.jpg', 0),
(21, 0, 2, 10, 'content122', '', NULL, '', '', '', 'modulo_c122', 'modulo_c122.css', 'md_contenido122.jpg', 0),
(22, 0, 2, 11, 'content131', '', NULL, '', '', '', 'modulo_c131', 'modulo_c131.css', 'md_contenido131.jpg', 0),
(23, 0, 2, 12, 'content14', '', NULL, '', '', '', 'modulo_c14', 'modulo_c14.css', 'md_contenido14.jpg', 0),
(24, 0, 2, 13, 'content71', '', NULL, '', '', '', 'modulo_c71', 'modulo_c71.css', 'md_contenido71.jpg', 0),
(25, 0, 2, 14, 'content8', '', NULL, '', '', '', 'modulo_c8', 'modulo_c8.css', 'md_contenido8.jpg', 0),
(26, 0, 2, 15, 'content16', '', NULL, '', '', '', 'modulo_c16', 'modulo_c16.css', 'md_contenido16.jpg', 0),
(27, 0, 2, 17, 'content18', '', NULL, '', '', '', 'modulo_c18', 'modulo_18.css', 'md_contenido18.jpg', 0),
(28, 0, 2, 18, 'text1', '', NULL, '', '', '', 'modulo_c_text1', 'modulo_c_text1.css', 'md_contenido_text1.jpg', 0),
(29, 0, 2, 20, 'tabs8', '', NULL, '', '', '', 'modulo_c8_tabs', 'modulo_c8_tabs.css', 'md_contenido8_tabs.jpg', 0),
(30, 0, 2, 23, 'content41', '', NULL, '', '', '', 'modulo_c41', 'modulo_c41.css', 'md_contenido41.jpg', 0),
(31, 0, 2, 54, 'contact1', '', NULL, '', '', 'fondo_md_contact1.jpg', 'modulo_contact1', 'modulo_contact1.css', 'md_contact1.jpg', 0),
(32, 0, 2, 55, 'contact5', '', NULL, '', '', 'fondo_md_contact5.jpg', 'modulo_contact5', 'modulo_contact5.css', 'md_contact5.jpg', 0),
(33, 0, 2, 100, 'map2', '', NULL, '', '', '', 'modulo_map2', 'modulo_map2.css', 'md_map2.jpg', 0),
(34, 0, 2, 101, 'map2a', '', NULL, '', '', '', 'modulo_map2a', 'modulo_map2a.css', 'md_map2a.jpg', 0),
(35, 0, 3, 0, 'footer3', '', 'logomipaginawhite.png', '', '', 'fondo_md_footer3.jpg', 'modulo_f3', 'modulo_f3.css', 'md_footer3.jpg', 0),
(36, 0, 3, 0, 'footer4', '', 'logomipaginawhite.png', '', '', '', 'modulo_f4', 'modulo_f4.css', 'md_footer4.jpg', 0),
(37, 0, 2, 24, 'slidertextos', '', NULL, '', '', '', 'modulo_c20', 'modulo_c20.css', 'md_contenido20.jpg', 0),
(38, 0, 1, 0, 'casitas', '', NULL, '', '', '', 'modulo_h_casita', 'modulo_h_casita.css', 'md_cabecera_casita.jpg', 1),
(39, 0, 2, 25, 'logros', '', NULL, '', '', '', 'modulo_c_logros', 'modulo_c_logros.css', 'md_contenido_logros.jpg', 0),
(40, 0, 3, 0, 'Como ayudar', '', NULL, '', '', '', 'modulo_f_casita', 'modulo_f_casita.css', 'md_footer_casita.jpg', 0),
(41, 0, 2, 30, 'promo', '', NULL, '', '', '', 'modulo_c_rayos', 'modulo_c_rayos.css', 'md_contenido_rayos.jpg', 0),
(42, 0, 2, 0, 'rayo jesuita', '', NULL, '', '', '', 'modulo_h_rayo', 'modulo_h_rayo.css', 'md_cabecera_rayo.jpg', 0),
(43, 0, 2, 15, 'intro', '', NULL, '', '', '', 'introrayojesuitas', 'introrayojesuitas.css', 'md_introrayojesuita.jpg', 0),
(44, 0, 2, 15, 'studiot', '', NULL, '', '', '', 'modulo_cst', 'modulo_cst.css', 'md_studiotigres.jpg', 0),
(45, 0, 1, 0, 'Inicio', '', 'logomipagina.png', '', '', '', 'modulo_h_sanfer', 'modulo_h_sanfer.css', 'md_header_sanfer.jpg', 0),
(46, 0, 2, 1, 'Nosotros', '', NULL, '', '', 'fondo-rayas-rojas2.png', 'modulo_sanfer_us', 'modulo_sanfer_us.css', 'md_sanfer_us.jpg', 0),
(47, 0, 2, 1, 'Cursos y Servicios', '', NULL, '', '', 'slide-soluciones-negocio.jpg', 'modulo_sanfer_solutions', 'modulo_sanfer_solutions.css', 'md_sanfer_solutions.jpg', 0),
(48, 0, 2, 1, 'Noticias', '', NULL, '', '', '', 'modulo_sanfer_news', 'modulo_sanfer_news.css', 'md_sanfer_news.jpg', 0),
(49, 0, 2, 1, 'Clientes', '', NULL, '', '', '', 'modulo_sanfer_alianza', 'modulo_sanfer_alianza.css', 'md_sanfer_alianzas.jpg', 0),
(50, 0, 3, 0, 'Contáctanos', '', NULL, '', '', '', 'modulo_sanfer_contact', 'modulo_sanfer_contact.css', 'md_sanfer_contact.jpg', 0),
(51, 0, 2, 1, '', '', NULL, '', '', 'slide-nosotros.jpg', 'modulo_c_nosotros', 'modulo_c_nosotros.css', 'md_c_nosotros.jpg', 0),
(52, 0, 2, 1, '', '', NULL, '', '', 'slide-servicios.jpg', 'modulo_c_solutions', 'modulo_c_solutions.css', 'md_c_cursos.jpg', 0),
(53, 0, 2, 1, '', '', NULL, '', '', '', 'modulo_c_alianzas', 'modulo_c_alianzas.css', 'md_c_clientes.jpg', 0),
(54, 0, 2, 1, '', '', NULL, '', '', 'fondo-rayas2.png', 'modulo_c_noticias', 'modulo_c_noticias.css', 'md_c_noticias.jpg', 0),
(55, 0, 1, 0, '', '', NULL, '', '', '', 'modulo_h_sanfer_interna', 'modulo_h_sanfer_interna.css', 'md_header_sanfer_interna.jpg', 0),
(56, 0, 2, 1, 'beneficios', '', NULL, '', '', 'slide-soluciones-negocio.jpg', 'modulo_c_nosotros_lista', 'modulo_c_nosotros_lista.css', 'md_c_nosotros_lista.jpg', 0),
(57, 0, 2, 25, '1kg', '', 'logo1kg.jpg', '', '', '', 'modulo_1kg', 'modulo_1kg.css', 'md_1kg.jpg', 0),
(58, 0, 1, 0, 'lorem', '', '', 'mi pagina', '', '', 'modulo_h_videoautoplay', 'modulo_h_videoautoplay.css', 'md_h_autoplay.jpg', 0),
(59, 0, 3, 26, 'contact', '', NULL, '', '', '', 'modulo_contact6', 'modulo_contact6.css', 'md_contact6.jpg', 0),
(60, 0, 2, 27, 'Staff', '', NULL, '', '', '', 'modulo_c_whoweare', 'modulo_c_whoweare.css', 'md_c_whoweare.jpg', 0),
(61, 0, 2, 28, 'Services', '', NULL, '', '', 'fondo-parallax1.jpg', 'modulo_c_services', 'modulo_c_services.css', 'md_c_services.jpg', 0),
(62, 0, 2, 29, 'Categories', '', NULL, '', '', '', 'modulo_c_categorias', 'modulo_c_categorias.css', 'md_c_categorias.jpg', 0),
(63, 0, 2, 29, 'Partners', '', NULL, '', '', 'fondo-parallax2.jpg', 'modulo_c_partners', 'modulo_c_partners.css', 'md_c_partners.jpg', 0),
(64, 0, 2, 30, 'Staff', '', NULL, '', '', '', 'modulo_c_clientes', 'modulo_c_clientes.css', 'md_c_clientes2.jpg', 0),
(65, 0, 2, 30, 'home', '', NULL, '', '', 'fondo-postula.jpg', 'modulo_c_postula', 'modulo_c_postula.css', 'md_c_postula.jpg', 0),
(66, 0, 2, 31, 'Us', '', NULL, '', '', 'fondo-quienes-somos.jpg', 'modulo_c_descripcion', 'modulo_c_descripcion.css', 'md_c_descripcion.jpg', 0),
(67, 0, 2, 32, 'Beneficios', '', NULL, '', '', '', 'modulo_c_beneficios', 'modulo_c_beneficios.css', 'md_c_beneficios.jpg', 0),
(68, 0, 2, 32, 'videos', '', NULL, '', '', 'fondo-videos.jpg', 'modulo_c_videoscarousel', 'modulo_c_videoscarousel.css', 'md_c_videoscarousel.jpg', 0),
(69, 0, 3, 0, 'footer', '', 'logomipaginawhite.png', '', '', '', 'modulo_f5', 'modulo_f5.css', 'md_f5.jpg', 0),
(70, 0, 2, 32, 'iframe', '', NULL, '', '', '', 'modulo_c_iframe', 'modulo_c_iframe.css', 'md_c_iframe.jpg', 0),
(71, 0, 2, 0, 'general', '', NULL, '', '', '', 'modulo_c_infogeneral', 'modulo_c_infogeneral.css', 'md_c_infogeneral.jpg', 0),
(72, 0, 2, 35, 'texto', '', NULL, '', '', '', 'modulo_c_textowysihtml', 'modulo_c_textowysihtml.css', 'md_c_textowysihtml.jpg', 0),
(73, 0, 2, 36, 'categorias', '', NULL, '', '', '', 'modulo_c8_tabs_sintodos', 'modulo_c8_tabs_sintodos.css', 'md_c8_tabs_sintodos.jpg', 0),
(74, 0, 2, 38, 'Categories', '', NULL, '', '', '', 'modulo_c_categorias2', 'modulo_c_categorias2.css', 'md_c_categorias2.jpg', 0),
(75, 0, 2, 40, 'news', '', NULL, '', '', '', 'modulo_c_news_url_abstract', 'modulo_c_news_url_abstract.css', 'md_c_news_url_abstract.jpg', 0),
(76, 0, 2, 41, 'Noticias', '', NULL, '', '', '', 'modulo_c_news_url', 'modulo_c_news_url.css', 'md_c_news_url.jpg', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `md_modulo_complemento`
--

CREATE TABLE IF NOT EXISTS `md_modulo_complemento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_md_modulo` int(11) NOT NULL,
  `id_complemento` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=40 ;

--
-- Volcado de datos para la tabla `md_modulo_complemento`
--

INSERT INTO `md_modulo_complemento` (`id`, `id_md_modulo`, `id_complemento`) VALUES
(1, 5, 1),
(2, 9, 1),
(3, 19, 2),
(4, 13, 3),
(5, 21, 3),
(6, 22, 3),
(7, 23, 3),
(8, 29, 2),
(9, 30, 2),
(10, 33, 1),
(11, 35, 1),
(12, 17, 4),
(13, 33, 4),
(14, 34, 1),
(15, 34, 4),
(16, 36, 1),
(17, 37, 5),
(18, 20, 3),
(19, 39, 3),
(20, 6, 1),
(21, 45, 7),
(22, 49, 7),
(23, 48, 6),
(24, 54, 6),
(25, 52, 8),
(26, 57, 2),
(27, 59, 1),
(28, 60, 2),
(29, 61, 2),
(30, 62, 2),
(31, 63, 7),
(32, 64, 3),
(33, 67, 2),
(34, 68, 2),
(35, 69, 1),
(36, 73, 2),
(37, 6, 7),
(38, 75, 6),
(39, 76, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `md_modulo_estructura`
--

CREATE TABLE IF NOT EXISTS `md_modulo_estructura` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_modulo` int(11) NOT NULL,
  `titulo` text COLLATE utf8_spanish_ci,
  `subtitulo` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `comentario` text COLLATE utf8_spanish_ci,
  `imagen` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `video` varchar(300) COLLATE utf8_spanish_ci DEFAULT NULL,
  `url` varchar(300) COLLATE utf8_spanish_ci DEFAULT NULL,
  `url_texto` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `imagen_movil` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=104 ;

--
-- Volcado de datos para la tabla `md_modulo_estructura`
--

INSERT INTO `md_modulo_estructura` (`id`, `id_modulo`, `titulo`, `subtitulo`, `comentario`, `imagen`, `video`, `url`, `url_texto`, `imagen_movil`) VALUES
(1, 1, 'Many Articles', NULL, 'This is not another do-it yourself website builder. The Grid harnesses the power of artificial intelligence to take everything you throw at it -videos, images, text, urls and more -and automatically shape them into a custom', 'imgcel1.png', NULL, NULL, '', ''),
(2, 1, NULL, 'SAVE YOUR TIME', 'This is not another do-it yourself website', NULL, NULL, NULL, '', ''),
(3, 1, NULL, 'SAVE YOUR MONEY', 'This is not another do-it yourself website', NULL, NULL, NULL, '', ''),
(4, 2, 'This is where it begins', 'LOREM / LAGOSITO', 'This is not another do-it yourself website builder. The Grid harnesses the power of artificial intelligence to take everything you throw at it -videos, images, text, urls and more -and automatically shape them into a custom website unique to you.', 'img3.png', NULL, NULL, '', ''),
(5, 2, 'This is where it begins', 'LOREM / LAGOSITO', 'This is not another do-it yourself website builder. The Grid harnesses the power of artificial intelligence to take everything you throw at it -videos, images, text, urls and more -and automatically shape them into a custom website unique to you.', 'img4.png', NULL, NULL, '', ''),
(6, 3, 'More power for your bussiness', '1 min 40 sec', 'This is not another do-it yourself website builder. The Grid harnesses the power of artificial intelligence to take everything you throw at it -videos, images, text, urls and more -and automatically shape them into a custom This is not another do-it yourself website builder. The Grid harnesses the power of artificial intelligence to take everything you throw at it -videos, images, text, urls and more -and automatically shape them into a custom', 'imgcel2.png', NULL, ' See mipagina in action ', '', ''),
(7, 4, 'BUT A LITTLE CHOCOLATE NOW AND THEN DOESN''T HURT.', '01', 'You better cut the pizza in four pieces because I''m not hungry enough to eat six.', 'dope1.png', NULL, 'About', '', ''),
(8, 4, 'THE STORY OF HOW WE MADE IT KEEP ON ROCKING.', '02', 'If more of us valued food and cheer and song above hoarded gold, it would be a merrier world.', 'dope2.png', NULL, 'History', '', ''),
(9, 4, 'LITTLE PIECES OF OUR PROUDNESS', '03', 'There are people in the world so hungry, that God cannot appear to them except in the form of bread.', 'dope3.png', NULL, 'Quality', '', ''),
(10, 6, 'studio tigres presents', 'New and best way to build your site.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.', NULL, NULL, 'http://www.studiotigres.com/es/', 'Registrate', ''),
(11, 7, 'Read Clearly', NULL, 'Beautiful websites for small business, powered by clever technology and you. Working with kwahoo is a pleasure.From now on updating your site is something you''ll want to do.\n                        ', 'revista.png', NULL, NULL, '', ''),
(12, 7, 'SAVE YOUR TIME', 'fa-clock-o', 'Baikal is a pleasure. From now on updating your site', NULL, NULL, NULL, '', ''),
(13, 7, 'SAVE YOUR MONEY', 'fa-dollar', 'Italian sports car fabrique Ferrari has applied to list', NULL, NULL, NULL, '', ''),
(14, 8, 'Contact us', 'SEND ME SOME LOVE', 'This sounded a very good reason and Alice was quite pleased to know it ''I never thought of that before!'' she said.\r\n', NULL, NULL, 'contact@mail.com', '', ''),
(15, 9, 'Call Us', NULL, '1-800-277-7766', 'celular.png', NULL, NULL, '', ''),
(16, 9, 'Location', NULL, 'Lima, Dahliastr. 120/A', 'localizacion.png', NULL, NULL, '', ''),
(17, 9, 'Mail', NULL, 'info@dahlia.com', 'mail.png', NULL, NULL, '', ''),
(18, 10, 'This is where it begins', 'LOREM / LAGOSITO', 'This is not another do-it yourself website builder. The Grid harnesses the power of artificial intelligence to take everything you throw at it -videos, images, text, urls and more -and automatically shape them into a custom website unique to you.', 'img4.png', NULL, NULL, '', ''),
(19, 10, 'This is where it begins', 'LOREM / LAGOSITO', 'This is not another do-it yourself website builder. The Grid harnesses the power of artificial intelligence to take everything you throw at it -videos, images, text, urls and more -and automatically shape them into a custom website unique to you.', 'img3.png', NULL, NULL, '', ''),
(25, 12, 'Place for your ideas here!', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolor.', NULL, 'd4bpg65VXD0', NULL, '', ''),
(26, 12, 'Lorem ipsum dolore', NULL, 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr', NULL, NULL, NULL, '', ''),
(27, 12, 'Lorem ipsum dolore', NULL, 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr', NULL, NULL, NULL, '', ''),
(28, 12, 'Lorem ipsum dolore', NULL, 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr', NULL, NULL, NULL, '', ''),
(29, 13, 'Five minutes are enough to make your page', 'STUDIO TIGRES & KWAHOO', 'MAKE YOUR SITE NOW', NULL, NULL, 'inicio', '', ''),
(30, 14, 'Few Steps can you change your business', 'LOREM / LAGOSITO', 'This is not another do-it-yourself website builder. The Grid harnesses the power of artificial intelligence to take everything you throw at it - videos, images, text, urls and more and automatically shape them into a custom website unique to you. As your needs grow, it evolves with you, effortlessly adapting to your needs. The kwahoo just takes care or it. This is not another do-it-yourself website builder. This is your personal web developer.\r\n\r\nThis is not another do-it-yourself website builder. This is your personal web developer.', NULL, NULL, NULL, '', ''),
(31, 14, NULL, NULL, 'This is not another do-it-yourself website builder. The Grid harnesses the power of artificial intelligence to take everything you throw at it - videos, images, text, urls and more and automatically shape them into a custom website unique to you. As your needs grow, it evolves with you, effortlessly adapting to your needs. The kwahoo just takes care or it. This is not another do-it-yourself website builder. This is your personal web developer.\r\n\r\nThis is not another do-it-yourself website builder. This is your personal web developer.', NULL, NULL, NULL, '', ''),
(32, 15, 'This is not another do-it-yourself website-builder.', NULL, 'Building a website with mi pagina is like building stuff with Lego &trade; Blocks', NULL, 'hedr8aTd7NI', NULL, '', ''),
(33, 16, 'Contact us', 'Address', 'Studio Tigres GmbH\r\nEifflerstrabe 43\r\n22769 Hamburg\r\nGermany\r\nmail@studiotigres.com\r\n(+49) 151 2123 6390\r\n', NULL, NULL, 'mail@studiotigres.com', '', ''),
(34, 16, NULL, 'Address', 'Studio Tigres GmbH\r\nEifflerstrabe 43\r\n22769 Hamburg\r\nGermany\r\nmail@studiotigres.com\r\n(+49) 151 2123 6390\r\n', NULL, NULL, NULL, '', ''),
(35, 16, 'Get in touch', 'Send', 'Yes, I want to recive the newsletter', NULL, NULL, NULL, '', ''),
(36, 17, 'Contact us', 'Address', 'Studio Tigres GmbH\r\nEifflerstrabe 43\r\n22769 Hamburg\r\nGermany\r\nmail@studiotigres.com\r\n(+49) 151 2123 6390\r\n', NULL, NULL, 'https://www.google.com/maps/embed/v1/place?q=Eifflerstraße+43,+22769,+Hamburg,+Germany&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU', '', ''),
(37, 17, NULL, 'Address', 'Studio Tigres GmbH\r\nEifflerstrabe 43\r\n22769 Hamburg\r\nGermany\r\nmail@studiotigres.com\r\n(+49) 151 2123 6390\r\n', NULL, NULL, NULL, '', ''),
(38, 18, 'Nuestra forma de trabajar', 'Meet the client', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec suscipit porta ex, at rutrum sapien porttitor non. Maecenas dignissim dignissim gravida. Integer ut varius odio. Suspendisse malesuada ultrices nulla a lacinia. Vestibulum bibendum, nulla faucibus molestie tempus, magna justo egestas est, vel ornare nisi odio laoreet turpis. Vivamus ex mi, lacinia ut viverra in, maximus a felis. Aenean a lectus ex. Donec ultrices sapien ut ex venenatis auctor. ', NULL, NULL, NULL, '', ''),
(39, 18, NULL, 'Pegale en la cara', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec suscipit porta ex, at rutrum sapien porttitor non. Maecenas dignissim dignissim gravida. Integer ut varius odio. Suspendisse malesuada ultrices nulla a lacinia. Vestibulum bibendum, nulla faucibus molestie tempus, magna justo egestas est, vel ornare nisi odio laoreet turpis. Vivamus ex mi, lacinia ut viverra in, maximus a felis. Aenean a lectus ex. Donec ultrices sapien ut ex venenatis auctor. ', NULL, NULL, NULL, '', ''),
(40, 18, NULL, 'Cobrale por haberle pegado', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec suscipit porta ex, at rutrum sapien porttitor non. Maecenas dignissim dignissim gravida. Integer ut varius odio. Suspendisse malesuada ultrices nulla a lacinia. Vestibulum bibendum, nulla faucibus molestie tempus, magna justo egestas est, vel ornare nisi odio laoreet turpis. Vivamus ex mi, lacinia ut viverra in, maximus a felis. Aenean a lectus ex. Donec ultrices sapien ut ex venenatis auctor. ', NULL, NULL, NULL, '', ''),
(41, 18, NULL, 'What is the status of my purpuche?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec suscipit porta ex, at rutrum sapien porttitor non. Maecenas dignissim dignissim gravida. Integer ut varius odio. Suspendisse malesuada ultrices nulla a lacinia. Vestibulum bibendum, nulla faucibus molestie tempus, magna justo egestas est, vel ornare nisi odio laoreet turpis. Vivamus ex mi, lacinia ut viverra in, maximus a felis. Aenean a lectus ex. Donec ultrices sapien ut ex venenatis auctor. ', NULL, NULL, NULL, '', ''),
(42, 20, 'Lorem Ipsumni', 'Nuestros Partners', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. ', 'img_contenido17.jpg', NULL, NULL, '', ''),
(43, 19, 'mi pagina Portfolio', 'LOREM / LAGOSITO', NULL, NULL, NULL, NULL, '', ''),
(44, 22, 'This is where it begins', 'lorem / lagosito', 'Where you start your online store,  tell your story and make your mark. Where you discovr and shop products you can''t find anywhere else - and help brands that are going places get going.\r\n\r\nWhere you start your online store,  tell your story and make your mark. Where you discovr and shop products you can''t find anywhere else - and help brands that are going places get going.', NULL, 'DOWNLOAD CATALOG', 'content131', 'DOWNLOAD CATALOG', ''),
(45, 23, 'This is where it begins', 'lorem / lagosito', 'Where you start your online store,  tell your story and make your mark. Where you discovr and shop products you can''t find anywhere else - and help brands that are going places get going.\r\n\r\nWhere you start your online store,  tell your story and make your mark. Where you discovr and shop products you can''t find anywhere else - and help brands that are going places get going.', NULL, 'DOWNLOAD CATALOG', 'content14', 'DOWNLOAD CATALOG', ''),
(46, 24, 'This is not a website builder.', NULL, 'This is not another do-it yourself website builder. The Grid harnesses the power of artificial intelligence to take everything you throw at it -videos, images, text, urls and more.', 'dope1.png', NULL, NULL, '', ''),
(47, 24, 'This is your web developer.', NULL, 'This is not another do-it yourself website builder. The Grid harnesses the power of artificial intelligence to take everything you throw at it -videos, images, text, urls and more.', 'dope3.png', NULL, NULL, '', ''),
(48, 25, 'Helping everyday small business to grow more', NULL, 'This is not another do-it yourself website builder. The Grid harnesses the power of artificial intelligence to take everything you throw at it -videos, images, text, urls and more -and automatically shape them into a custom website unique to you. As you needs to grow, it evolves with you, effortlessly adapting to your needs. The kwahoo just takes care of it. This is not a website builder. This is your personal web developer.', NULL, 'hedr8aTd7NI', NULL, '', ''),
(49, 26, 'Demo Version', 'view awesome project', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', NULL, 'bcpLItnzKmI', 'inicio', '', ''),
(50, 27, 'Lorem Ipsum O Dolore Lagosimu', 'LOREM IPSUM LAGOSITI', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed diam nonumy eirmod', NULL, 'Leer Articulo', 'inicio', '', ''),
(51, 27, 'Metodology:', 'Clients Base Research, User experience research, A-B-Tests', 'Lorem ipsum dolor sit amet, mea modo malis equidem ei, in eum apeirian sadipscing. Postea graecis pri at. At vis eripuit explicari, in pro nostrud appetere. Possit dolorem euripidis ex duo, duis iuvaret inciderint id nec. Ferri invidunt repudiandae nec et, eum te sale facilisi explicari, his eruditi pertinax dignissim an. Putent molestie cu qui, ea debitis omnesque abhorreant vel, cu mel dicit dolorem. Mea malorum aliquando omittantur ea. No summo accusata efficiendi vix, esse iriure meliore ut vix. Nec summo delenit adolescens ei, mei unum dicat maiestatis ex. His malis placerat hendrerit id, unum ludus maiorum eu eum.\r\n', NULL, NULL, NULL, '', ''),
(52, 28, 'Lorem Ipsum', NULL, 'Lorem ipsum dolor sit amet, mea modo malis equidem ei, in eum apeirian sadipscing. Postea graecis pri at. At vis eripuit explicari, in pro nostrud appetere. Possit dolorem euripidis ex duo, duis iuvaret inciderint id nec. Ferri invidunt repudiandae nec et, eum te sale facilisi explicari, his eruditi pertinax dignissim an. Putent molestie cu qui, ea debitis omnesque abhorreant vel, cu mel dicit dolorem.\r\n\r\nMea malorum aliquando omittantur ea. No summo accusata efficiendi vix, esse iriure meliore ut vix. Nec summo delenit adolescens ei, mei unum dicat maiestatis ex. His malis placerat hendrerit id, unum ludus maiorum eu eum.\r\n\r\nPri in inani possit suscipiantur. Brute etiam qui ex. At tritani disputationi est, no has idque iusto temporibus. Te nonumy graeci detracto mel, pro no tale phaedrum. Tation iisque salutatus pro ex, justo verterem insolens ut pri.\r\n\r\nMel ad summo sensibus vulputate. Et tota quidam sea, has in sonet laoreet maiorum. Cum dictas forensibus in, nam ad tale saperet. Eum ex illud eruditi, per sanctus concludaturque an. Te pro sonet legimus molestie.\r\n\r\nSea mutat commodo ne, his alterum recusabo te. At aeterno tacimates qui, congue noster comprehensam eam te. Ut repudiare consectetuer vix. Te eos prima viris, liber consulatu ut eam.', 'lady_text1.jpg', NULL, NULL, '', ''),
(53, 29, 'Our Crew', 'Join our team', NULL, NULL, NULL, NULL, '', ''),
(54, 31, NULL, 'address', 'Studio Tigres GmbH\r\nEifflerstrabe 43\r\n22769 Hamburg\r\nGermany\r\nmail@studiotigres.com\r\n(+49) 151 2123 6390', NULL, NULL, NULL, '', ''),
(55, 31, NULL, 'address', 'Studio Tigres GmbH\r\nEifflerstrabe 43\r\n22769 Hamburg\r\nGermany\r\nmail@studiotigres.com\r\n(+49) 151 2123 6390', NULL, NULL, NULL, '', ''),
(56, 31, 'Contact us', 'Send Message', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.', NULL, NULL, NULL, '', ''),
(57, 32, 'Contact Us', NULL, 'She was bouncing away, when a city from the two women, who has turned towards the bed causes her to look around.', NULL, NULL, NULL, '', ''),
(58, 32, 'Send a message', 'send', 'Yes, I want to recive the newspaper', NULL, NULL, NULL, '', ''),
(59, 32, 'Contact Information', 'address', 'Studio Tigres GmbH\r\nEifflerstrabe 43\r\n22769 Hamburg\r\nGermany', NULL, NULL, NULL, '', ''),
(60, 32, NULL, 'e-mail', 'mail', NULL, NULL, NULL, '', ''),
(61, 32, NULL, 'PHONE', '(+49) 151 2123 6390', NULL, NULL, NULL, '', ''),
(62, 33, 'Hola', NULL, 'Studio Tigres GmbH Eifflerstrabe 43\r\n22769 Hamburg Germany\r\n\r\n(+49) 151 2123 6390\r\n\r\n', NULL, NULL, 'https://www.google.com/maps/embed/v1/place?q=Eifflerstraße+43,+22769,+Hamburg,+Germany&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU', '', ''),
(63, 34, 'Hola', NULL, 'Studio Tigres GmbH Eifflerstrabe 43\r\n22769 Hamburg Germany\r\n\r\n(+49) 151 2123 6390', NULL, NULL, NULL, '', ''),
(65, 35, 'Subscribe Our Newsletter', 'Subscribe', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation', NULL, NULL, NULL, '', ''),
(66, 36, 'About us', 'Subscribe us', 'This sounded a very good reason, and Alice was quited pleased to know it. "I never thought of that before!" She said.', NULL, NULL, NULL, '', ''),
(67, 37, 'Lorem Ipsum O Dolore Lagosimu Hamburg Lorem', NULL, NULL, NULL, NULL, NULL, '', ''),
(69, 41, 'Promos y Rayos', NULL, NULL, '5rayos.png', NULL, NULL, '', ''),
(70, 40, 'Hazte Socio', 'Con tu apoyo, podemos seguir cambiando la vida y\nmejorando el futuro de muchos niños en todo el Perú.', 'Oficina de Desarrollo - Procura \r\nCalle General Pedro Silva 141 Miraflores \r\nT.(511)446 4465 anexo 102,111,103 \r\nservicioalsocio@casitas.pe', NULL, 'bRgj-Hz8dWQ', NULL, '', ''),
(71, 39, 'Logros en casitas', NULL, NULL, NULL, NULL, NULL, '', ''),
(72, 46, 'Nuestro Compromiso', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', NULL, NULL, NULL, 'ver más', ''),
(73, 51, 'Lorem ipsum', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'que-es-cite.png', NULL, NULL, '', ''),
(74, 56, 'Lorem Ipsum', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', NULL, NULL, NULL, '', ''),
(75, 49, 'Alianzas', NULL, NULL, NULL, NULL, NULL, '', ''),
(76, 48, 'Noticias', NULL, NULL, NULL, NULL, NULL, 'Ver más', ''),
(77, 47, 'Soluciones de Negocios', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', NULL, NULL, NULL, '', ''),
(78, 50, 'Contacto', 'Contáctenos', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna', NULL, NULL, NULL, '', ''),
(79, 54, 'Noticias', NULL, NULL, NULL, NULL, NULL, 'Volver', ''),
(80, 52, 'Linea de Servicio', 'Servicios', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit,', NULL, NULL, NULL, '', ''),
(81, 57, 'Creative consulting Collective Berlin Amsterdam New York', NULL, '1kg is a creative consulting collective with an active international reach. Merging\r\n                    boundaries between creativity, communication and activation… Delivering timeless,\r\n                    valued weight for a fast-paced interconnected social landscape. Always focusing on', NULL, NULL, NULL, 'ABOUT', ''),
(82, 57, NULL, 'SERVICES', 'Research Through Experience - Culture & Partnerships - Trend & Innovation Consulting Experience Product — New Market Strategy', NULL, NULL, NULL, '', ''),
(83, 57, NULL, 'SELECTED CLIENTS', 'Vans. Ikea. Muun, Vanmoof', NULL, NULL, NULL, '', ''),
(84, 57, NULL, 'WORKING WITH & FOR', 'lkonoTV, Aesop, Tiger Beer, Agora, Design Hotels, LAVA Laboratory tor Visionary Architecture, Studio Miessen, Marvis, D.sgnwerk, Haw—Iin, This Memento', NULL, NULL, NULL, '', ''),
(85, 58, 'Lorem Ipsum es simplemente el texto de', 'relleno de las imprentas ', NULL, NULL, '0BX9FDJp0iQ', NULL, 'lorem', ''),
(86, 59, 'Contact', 'Us', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.', NULL, NULL, NULL, '', ''),
(87, 60, 'Lorem sit amet', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'flotante5.png', NULL, NULL, '', ''),
(88, 61, 'Lorem sit amet', NULL, NULL, NULL, NULL, NULL, '', ''),
(89, 62, 'Lorem ipsum', NULL, NULL, NULL, NULL, NULL, '', ''),
(90, 63, 'Lorem ipsum', NULL, NULL, NULL, NULL, NULL, '', ''),
(91, 64, 'Lorem sit amet', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', NULL, NULL, NULL, '', ''),
(92, 65, 'ÚNETE  Y SE PARTE DE  NUESTRO \r\nGRAN EQUIPO!', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam odio nunc, tempor interdum auctor rutrum, accumsan ut urna.', 'equipo-450px.png', NULL, NULL, 'Postula  aquí', ''),
(93, 66, 'Quiénes somos', NULL, 'Sed dapibus sodales commodo. Suspendisse mauris risus, venenatis cursus convallis a, luctus eu ligula. Morbi at sapien vel purus aliquet finibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nam vel varius odio. Aliquam id euismod diam. Pellentesque commodo sem felis, a pulvinar magna volutpat nec.', NULL, NULL, NULL, '', ''),
(94, 67, 'Beneficios', NULL, NULL, NULL, NULL, NULL, '', ''),
(95, 70, NULL, NULL, NULL, NULL, NULL, 'http://www.studiotigres.com/es/', '', ''),
(96, 71, 'Lorem ipsum dolore', NULL, '<p><b>LOREM IPSUM</b></p><p><br></p><p>Nullam eget turpis vitae lacus maximus dictum et ac arcu. Fusce sit amet blandit ipsum. Proin sodales massa vitae nulla lobortis venenatis. Vestibulum finibus, justo sed tristique volutpat, dolor ante ultrices metus, eget tempor velit nisi at mi. In et augue aliquam, congue ex nec, rhoncus libero. Quisque cursus ipsum sed rhoncus bibendum. Duis eu mi urna. Integer hendrerit cursus mauris, in egestas sapien vestibulum sed. Nulla facilisi. Pellentesque eget enim quis elit varius efficitur. Fusce non dapibus tortor. Fusce mattis libero non diam maximus, ac eleifend felis malesuada.<br></p>', NULL, NULL, NULL, 'Descargar', ''),
(97, 71, NULL, NULL, '<p><b>Fusce sit amet</b></p><p><br></p><p>Nullam eget turpis vitae lacus maximus dictum et ac arcu. Fusce sit amet blandit ipsum. Proin sodales massa vitae nulla lobortis venenatis. Vestibulum finibus, justo sed tristique volutpat, dolor ante ultrices metus, eget tempor velit nisi at mi. In et augue aliquam, congue ex nec, rhoncus libero. Quisque cursus ipsum sed rhoncus bibendum. Duis eu mi urna.<br><b> Integer hendrerit cursus mauris</b>, in egestas sapien vestibulum sed. Nulla facilisi. Pellentesque eget enim quis elit varius efficitur. Fusce non dapibus tortor. Fusce mattis libero non diam maximus, ac eleifend felis malesuada.<br></p>', NULL, NULL, NULL, '', ''),
(98, 72, NULL, NULL, '<p><b>Fusce sit amet</b></p><p><br></p><p>Nullam eget turpis vitae lacus maximus dictum et ac arcu. Fusce sit amet blandit ipsum. Proin sodales massa vitae nulla lobortis venenatis. Vestibulum finibus, justo sed tristique volutpat, dolor ante ultrices metus, eget tempor velit nisi at mi. In et augue aliquam, congue ex nec, rhoncus libero. Quisque cursus ipsum sed rhoncus bibendum. Duis eu mi urna.<br><b> Integer hendrerit cursus mauris</b>, in egestas sapien vestibulum sed. Nulla facilisi. Pellentesque eget enim quis elit varius efficitur. Fusce non dapibus tortor. Fusce mattis libero non diam maximus, ac eleifend felis malesuada.<br></p>', NULL, NULL, NULL, '', ''),
(99, 73, 'Our Crew', NULL, NULL, NULL, NULL, NULL, '', ''),
(100, 74, 'Lorem ipsum dolore', NULL, NULL, NULL, NULL, NULL, '', ''),
(101, 75, 'Noticias', NULL, NULL, NULL, NULL, NULL, 'Ver más', ''),
(102, 76, 'Noticias', NULL, NULL, NULL, NULL, NULL, 'Cargar más', ''),
(103, 50, NULL, 'Quiero ser auspiciador', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at tellus maximus neque feugiat consectetur sed non mauris. Aenean ut rutrum leo. Donec lacinia aliquet magna sit amet mattis. Fusce non tortor vitae nunc facilisis aliquam. In et lectus sit amet erat iaculis accumsan tincidunt nec est. Vestibulum at lectus arcu. Nullam eleifend mollis sodales.\r\n\r\nPhasellus risus ex, efficitur vitae sapien quis, condimentum venenatis mauris. Donec dapibus quis odio a semper. Donec molestie ultricies ipsum, et venenatis tellus tristique eu. Fusce enim nibh, aliquet in eros ac, semper pulvinar felis. Suspendisse potenti. Sed sed orci at lacus vehicula lacinia. Curabitur sed velit tristique leo suscipit aliquam eu eu orci. Etiam ut neque ac tellus convallis lacinia in in sem. Aliquam risus metus, porttitor ac finibus in, vestibulum a enim. Sed mollis vulputate luctus.', NULL, NULL, NULL, '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('comercial@mipagina.com', '0a77f7bba03d57dc7e33099a92d269691797edee0b89d7dd0ae09dbac812298b', '2016-07-14 18:58:35'),
('vcosta@apros.pe', '54e395520d87d2163237c23ba7d5c621a1afbc1303a258e19af827270d72b9b2', '2016-07-20 16:59:36'),
('gabriel.lagos@studiotigres.com', '0d46fd5f01d3e95bc2a472707d02de4fb5feb340220a4369095244423557e113', '2016-11-03 02:37:20'),
('tdoron@gmail.com', 'e469405998c54d37f28b8dce1df597f437fc12386bddd37579f9d3cb4850d521', '2016-11-14 03:12:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pry_combinacion_colores`
--

CREATE TABLE IF NOT EXISTS `pry_combinacion_colores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pry_modulo` int(11) NOT NULL,
  `fondo` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `titulo` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `subtitulo` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `comentario` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `color_boton` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `color_menu` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `color_menucat` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `color_menucatfondo` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=488 ;

--
-- Volcado de datos para la tabla `pry_combinacion_colores`
--

INSERT INTO `pry_combinacion_colores` (`id`, `id_pry_modulo`, `fondo`, `titulo`, `subtitulo`, `comentario`, `color_boton`, `color_menu`, `color_menucat`, `color_menucatfondo`) VALUES
(63, 69, '#FFFFFF', '#3c3d41', '#3c3d41', '#656b6f', NULL, NULL, NULL, NULL),
(64, 70, '#FFFFFF', '#212121', '#00BFFF', '#777777', NULL, NULL, NULL, NULL),
(69, 75, '#EBE9E8', NULL, NULL, '#5f327c', NULL, '#000000', NULL, NULL),
(70, 76, '#282627', '#FFFFFF', '#FFFFFF', '#FFFFFF', '#fc7411', NULL, NULL, NULL),
(75, 81, '#FFFFFF', '#3c3d41', '#3c3d41', '#656b6f', NULL, NULL, NULL, NULL),
(77, 83, '#FFFFFF', '#3c3d41', '#3c3d41', '#656b6f', NULL, NULL, NULL, NULL),
(78, 84, '#f5d331', '#70bf41', '#773f9c', '#f39031', NULL, NULL, NULL, NULL),
(80, 86, '#000000', '#FFFFFF', NULL, '#FFFFFF', '#c93a26', NULL, NULL, NULL),
(81, 87, '#ffffff', '#000000', '#8f9496', '#ffffff', '#43cb83', NULL, NULL, NULL),
(82, 88, '#FFFFFF', '#000000', '#a8acb9', '#4f5362', NULL, NULL, NULL, NULL),
(84, 90, '#FFFFFF', '#3c3d41', '#3c3d41', '#656b6f', NULL, NULL, NULL, NULL),
(85, 91, '#FFFFFF', '#3c3d41', '#3c3d41', NULL, NULL, NULL, '#ffffff', '#70bf41'),
(88, 94, '#ffffff', NULL, NULL, '', NULL, NULL, NULL, NULL),
(91, 97, '#ffffff', '#3c3d41', '#3c3d41', '#656b6f', NULL, NULL, NULL, NULL),
(92, 98, '#ffffff', '#3c3d41', '#3c3d41', '#656b6f', '#f3d42e', NULL, NULL, NULL),
(93, 99, '#ffffff', '#3c3d41', '#3c3d41', '#656b6f', '#f3d42e', NULL, NULL, NULL),
(94, 100, '#ffffff', '#3c3d41', NULL, '#656b6f', NULL, NULL, NULL, NULL),
(95, 101, '#6b6b6b', '#ffffff', NULL, '#ffffff', '#eb5d57', NULL, NULL, NULL),
(96, 102, '#ffffff', '#3c3d41', NULL, '#656b6f', '#3f892d', NULL, NULL, NULL),
(97, 103, '#ffffff', '#3c3d41', '#3c3d41', '#656b6f', '#f3d42e', NULL, NULL, NULL),
(98, 104, '#ffffff', '#3c3d41', NULL, '#656b6f', NULL, NULL, NULL, NULL),
(99, 105, '#ffffff', '#3c3d41', NULL, '', NULL, NULL, '#ffffff', ''),
(103, 109, '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#1f5dea', NULL, NULL, NULL),
(104, 110, '#000000', '#ffffff', '#c2afaf', '#ffffff', '#eddd18', NULL, NULL, NULL),
(105, 111, '#000000', '#f39031', NULL, '#b36ae2', NULL, NULL, NULL, NULL),
(111, 117, '#575757', '#FFFFFF', NULL, '#FFFFFF', NULL, NULL, NULL, NULL),
(112, 118, '#FFFFFF', '#000000', NULL, NULL, NULL, NULL, NULL, NULL),
(114, 120, '#FFFFFF', '#000000', NULL, NULL, NULL, NULL, NULL, NULL),
(115, 121, '#221d1f', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(141, 147, '#f76162', '#FFFFFF', '#FFFFFF', '#FFFFFF', '', '#ffffff', NULL, NULL),
(143, 149, '#222328', '#FFFFFF', '#FFFFFF', '#cccece', NULL, '#FFFFFF', NULL, NULL),
(164, 170, '#ffffff', '#3c3d41', '#3c3d41', '#656b6f', NULL, NULL, NULL, NULL),
(165, 171, '#ffffff', '#3c3d41', '#3c3d41', '#656b6f', '#f3d42e', NULL, NULL, NULL),
(166, 172, '#ffffff', '#3c3d41', '#3c3d41', '#656b6f', '#f3d42e', NULL, NULL, NULL),
(167, 173, '#FFFFFF', '#3c3d41', '#3c3d41', '#656b6f', NULL, NULL, NULL, NULL),
(168, 174, '#FFFFFF', '#3c3d41', '#3c3d41', NULL, NULL, NULL, '#ffffff', ''),
(174, 180, '#372d36', '#FFFFFF', '#FFFFFF', '#c3c1c4', '#FFFFFF', '#FFFFFF', NULL, NULL),
(175, 181, '#ffffff', '#3c3d41', NULL, '#656b6f', NULL, NULL, NULL, NULL),
(176, 182, '#FFFFFF', '#3c3d41', '#3c3d41', NULL, NULL, NULL, '#ffffff', ''),
(177, 183, '#ffffff', '#3c3d41', NULL, '', NULL, NULL, '#ffffff', ''),
(178, 184, '#FFFFFF', '#000000', NULL, NULL, NULL, NULL, NULL, NULL),
(179, 185, '#575757', '#FFFFFF', NULL, '#FFFFFF', NULL, NULL, NULL, NULL),
(180, 186, '#FFFFFF', '#FFFFFF', '#a4a4a6', '#cfcfd1', '#205deb', '#FFFFFF', NULL, NULL),
(181, 187, '#ffffff', '#3c3d41', '#3c3d41', '#656b6f', '#f3d42e', NULL, NULL, NULL),
(182, 188, '#FFFFFF', '#000000', NULL, NULL, NULL, NULL, NULL, NULL),
(188, 194, '#ffffff', '#3c3d41', NULL, '', NULL, NULL, '#ffffff', ''),
(189, 195, '#FFFFFF', '#000000', NULL, NULL, NULL, NULL, NULL, NULL),
(190, 196, '#221d1f', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(197, 206, '#f76162', '#FFFFFF', '#FFFFFF', '#FFFFFF', '', '#ffffff', NULL, NULL),
(198, 207, '#f3f2ee', '#3c3d41', '#3c3d41', '#656b6f', NULL, NULL, NULL, NULL),
(199, 208, '#000000', '#FFFFFF', NULL, '#FFFFFF', '#eccd11', NULL, NULL, NULL),
(200, 209, '#FFFFFF', '#3c3d41', '#3c3d41', '#656b6f', NULL, NULL, NULL, NULL),
(201, 210, '#FFFFFF', '#FFFFFF', '#a4a4a6', '#cfcfd1', '#205deb', '#FFFFFF', NULL, NULL),
(203, 214, '#EBE9E8', NULL, NULL, '#c0c0c0', NULL, '#000000', NULL, NULL),
(204, 215, '#f7c80b', '#FFFFFF', '#FFFFFF', '#FFFFFF', NULL, '#FFFFFF', NULL, NULL),
(205, 216, '#FFFFFF', '#3c3d41', '#3c3d41', '#656b6f', NULL, NULL, NULL, NULL),
(206, 217, '#FFFFFF', '#FFFFFF', '#a4a4a6', '#cfcfd1', '#205deb', '#FFFFFF', NULL, NULL),
(207, 218, '#372d36', '#FFFFFF', NULL, '#FFFFFF', '#0e76bc', '#808080', NULL, NULL),
(208, 219, '#FFFFFF', '#3c3d41', '#3c3d41', '#656b6f', NULL, NULL, NULL, NULL),
(209, 220, '#FFFFFF', '#FFFFFF', '#a4a4a6', '#cfcfd1', '#205deb', '#FFFFFF', NULL, NULL),
(212, 223, '#372d36', '#FFFFFF', NULL, '#FFFFFF', '#0e76bc', '#808080', NULL, NULL),
(213, 224, '#FFFFFF', '#3c3d41', '#3c3d41', '#656b6f', NULL, NULL, NULL, NULL),
(214, 225, '#FFFFFF', '#3c3d41', '#3c3d41', NULL, NULL, NULL, '#ffffff', ''),
(215, 226, '#FFFFFF', '#FFFFFF', '#a4a4a6', '#cfcfd1', '#205deb', '#FFFFFF', NULL, NULL),
(218, 229, '#f76162', '#FFFFFF', '#FFFFFF', '#FFFFFF', '', '#ffffff', NULL, NULL),
(219, 230, '#FFFFFF', '#3c3d41', '#3c3d41', '#656b6f', NULL, NULL, NULL, NULL),
(220, 231, '#EBE9E8', NULL, NULL, '#c0c0c0', NULL, '#000000', NULL, NULL),
(221, 232, '#f7c80b', '#FFFFFF', '#FFFFFF', '#FFFFFF', NULL, '#FFFFFF', NULL, NULL),
(222, 233, '#FFFFFF', '#3c3d41', '#3c3d41', '#656b6f', NULL, NULL, NULL, NULL),
(223, 234, '#ffffff', '#3c3d41', NULL, '', NULL, NULL, '#ffffff', ''),
(224, 235, '#EBE9E8', NULL, NULL, '#c0c0c0', NULL, '#000000', NULL, NULL),
(279, 292, '#f76162', '#FFFFFF', '#FFFFFF', '#FFFFFF', '', '#ffffff', NULL, NULL),
(280, 293, '#FFFFFF', '#3c3d41', '#3c3d41', '#656b6f', NULL, NULL, NULL, NULL),
(281, 294, '#FFFFFF', '#3c3d41', '#3c3d41', NULL, NULL, NULL, '#ffffff', ''),
(282, 295, '#ffffff', '#000000', '#ffffff', '#ffffff', '#1f5dea', NULL, NULL, NULL),
(283, 296, '#FFFFFF', '#FFFFFF', '#a4a4a6', '#cfcfd1', '#205deb', '#FFFFFF', NULL, NULL),
(291, 304, '#f7c80b', '#FFFFFF', '#FFFFFF', '#FFFFFF', NULL, '#FFFFFF', NULL, NULL),
(292, 305, '#FFFFFF', '#3c3d41', '#3c3d41', '#656b6f', NULL, NULL, NULL, NULL),
(293, 306, '#FFFFFF', '#3c3d41', '#3c3d41', '#656b6f', NULL, NULL, NULL, NULL),
(294, 307, '#FFFFFF', '#FFFFFF', '#a4a4a6', '#cfcfd1', '#205deb', '#FFFFFF', NULL, NULL),
(297, 310, '#FFFFFF', '#3c3d41', '#3c3d41', NULL, NULL, NULL, '#ffffff', ''),
(300, 313, '#372d36', '#FFFFFF', '#FFFFFF', '#c3c1c4', '#FFFFFF', '#FFFFFF', NULL, NULL),
(301, 314, '#ffffff', '#000000', '#8f9496', '#ffffff', '#43cb83', NULL, NULL, NULL),
(303, 316, '#f7c80b', '#FFFFFF', '#FFFFFF', '#FFFFFF', NULL, '#FFFFFF', NULL, NULL),
(305, 319, '#FFFFFF', '#000000', '#000000', '#000000', '#000000', NULL, NULL, NULL),
(311, 326, '#372d36', '#FFFFFF', '#FFFFFF', '#FFFFFF', '', '#FFFFFF', NULL, NULL),
(312, 327, '#FFFFFF', '#3c3d41', '#3c3d41', '#656b6f', NULL, NULL, NULL, NULL),
(313, 328, '#FFFFFF', '#FFFFFF', '#a4a4a6', '#cfcfd1', '#205deb', '#FFFFFF', NULL, NULL),
(314, 329, '#f7c80b', '#FFFFFF', NULL, '#FFFFFF', '#FFFFFF', '#000000', NULL, NULL),
(336, 351, '#372d36', '#FFFFFF', '#FFFFFF', '#c3c1c4', '#FFFFFF', '#FFFFFF', NULL, NULL),
(462, 478, '#FFFFFF', '#3c3d41', '#3c3d41', '#656b6f', NULL, NULL, NULL, NULL),
(463, 479, '#333', '#FFFFFF', NULL, '#FFFFFF', NULL, NULL, NULL, NULL),
(468, 484, '#FFFFFF', '#3c3d41', '#3c3d41', NULL, NULL, NULL, '#ffffff', ''),
(469, 485, '#FFFFFF', '#FFFFFF', NULL, '#FFFFFF', '#0067bf', NULL, NULL, NULL),
(470, 486, '#FFFFFF', '#ef9902', NULL, '#FFFFFF', NULL, NULL, NULL, NULL),
(485, 501, '#FFFFFF', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(486, 502, '#FFFFFF', '#ef9902', NULL, '#FFFFFF', NULL, NULL, NULL, NULL),
(487, 503, '#372d36', '#FFFFFF', '#FFFFFF', '#c3c1c4', '#FFFFFF', '#FFFFFF', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pry_consultas`
--

CREATE TABLE IF NOT EXISTS `pry_consultas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_proyecto` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `empresa` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `mensaje` text COLLATE utf8_spanish_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `pry_consultas`
--

INSERT INTO `pry_consultas` (`id`, `id_proyecto`, `nombre`, `apellido`, `empresa`, `telefono`, `email`, `mensaje`, `created_at`, `updated_at`) VALUES
(1, 20, 'monica', 'chirinos', 'empresa', '465465', 'mk.chirinos@gmail.com', ' prueba almacenamiento', '2016-12-20 20:58:11', '2016-12-20 20:58:11'),
(2, 20, 'Jesús ', 'Ingar', 'San Fernando', '984253316', 'jingar@san-fernando.com.pe', 'Correo de prueba formulario de página web.', '2017-01-03 04:02:19', '2017-01-03 04:02:19'),
(3, 20, 'victor', 'costa', 'studio tigres', '8979283742', 'vcosta@mail.com', 'holaa ', '2017-01-04 21:11:45', '2017-01-04 21:11:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pry_cursos_categorias`
--

CREATE TABLE IF NOT EXISTS `pry_cursos_categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_sector` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `pry_cursos_categorias`
--

INSERT INTO `pry_cursos_categorias` (`id`, `id_sector`) VALUES
(1, 4),
(2, 6),
(3, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pry_cursos_categorias_txt`
--

CREATE TABLE IF NOT EXISTS `pry_cursos_categorias_txt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_cursos_categoria` int(11) NOT NULL,
  `id_idioma` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `pry_cursos_categorias_txt`
--

INSERT INTO `pry_cursos_categorias_txt` (`id`, `id_cursos_categoria`, `id_idioma`, `nombre`) VALUES
(1, 1, 1, 'Capacitación'),
(2, 1, 2, 'Capacitación'),
(3, 2, 1, 'Linea Alimentario'),
(4, 2, 2, 'Linea Alimentario'),
(5, 3, 1, 'Asistencia técnica'),
(6, 3, 2, 'Asistencia técnica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pry_cursos_cursos`
--

CREATE TABLE IF NOT EXISTS `pry_cursos_cursos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_categoria` int(11) NOT NULL,
  `imagen1` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `imagen2` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `imagen_fondo` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `pry_cursos_cursos`
--

INSERT INTO `pry_cursos_cursos` (`id`, `id_categoria`, `imagen1`, `imagen2`, `imagen_fondo`) VALUES
(1, 1, '1612_585477c1500de.jpg', '1612_585477c312ad8.jpg', ''),
(3, 1, '0102_5891f94d34c37.jpg', '0102_5891f950b0d1f.jpg', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pry_cursos_cursos_txt`
--

CREATE TABLE IF NOT EXISTS `pry_cursos_cursos_txt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_curso` int(11) NOT NULL,
  `id_idioma` int(11) NOT NULL,
  `titulo` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `texto1` text COLLATE utf8_spanish_ci NOT NULL,
  `texto2` text COLLATE utf8_spanish_ci NOT NULL,
  `pdf` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `pry_cursos_cursos_txt`
--

INSERT INTO `pry_cursos_cursos_txt` (`id`, `id_curso`, `id_idioma`, `titulo`, `texto1`, `texto2`, `pdf`) VALUES
(1, 1, 1, 'Bioseguridad en Granjas Avícolas', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur aadipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit,\r\n                    ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit,\r\n                    ', '1612_585477c4d91c5.pdf'),
(2, 1, 2, 'Bioseguridad en Granjas Avícolas', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur aadipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit,\r\n                    ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit,\r\n                    ', '1612_585477c4d91c5.pdf'),
(3, 3, 1, 'Patología Aviar: Principios de prevención y cuidado avícola', 'El crecimiento del sector, el cambio climático y la aparición de productores avícolas en áreas concentradas y compartidas son factores de riesgo para la rápida propagación de brotes infecciosos que representan pérdidas importantes para cada organización. ', 'En este contexto es necesario que el personal a cargo de granjas, capataces y/o personal operativo cuenten con los conocimientos básicos de sintomatología a nivel anatómico y fisiológico clave para tomar medidas que ayuden a evitar cualquier situación anómala que pueda desencadenar en un foco infeccioso.', '0102_5891f9543502c.pdf'),
(4, 3, 2, 'Patología Aviar: Principios de prevención y cuidado avícola', 'El crecimiento del sector, el cambio climático y la aparición de productores avícolas en áreas concentradas y compartidas son factores de riesgo para la rápida propagación de brotes infecciosos que representan pérdidas importantes para cada organización. ', 'En este contexto es necesario que el personal a cargo de granjas, capataces y/o personal operativo cuenten con los conocimientos básicos de sintomatología a nivel anatómico y fisiológico clave para tomar medidas que ayuden a evitar cualquier situación anómala que pueda desencadenar en un foco infeccioso.', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pry_cursos_sectores`
--

CREATE TABLE IF NOT EXISTS `pry_cursos_sectores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_proyecto` int(11) NOT NULL,
  `icono` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `icono_activo` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `link` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `pry_cursos_sectores`
--

INSERT INTO `pry_cursos_sectores` (`id`, `id_proyecto`, `icono`, `icono_activo`, `link`) VALUES
(1, 18, '', '', ''),
(2, 18, '', '', ''),
(3, 18, '', '', ''),
(4, 20, '1612_585474cec8c2f.png', '1612_585474d17637a.png', 'http://citeagroalimentario.pe/cursos-y-servicios?sector=4'),
(5, 20, '1612_585474e94f9fa.png', '1612_585474ea4aa13.png', 'http://citeagroalimentario.pe/cursos-y-servicios?sector=5'),
(6, 20, '1612_5854750151eab.png', '1612_585475023d52f.png', 'http://citeagroalimentario.pe/cursos-y-servicios?sector=6'),
(7, 34, 'modulo_c_solutionsicono-avion-blanco0.png', 'modulo_c_solutionsicono-avion-azul0.png', ''),
(8, 34, 'modulo_c_solutionsicono-avion-blanco1.png', 'modulo_c_solutionsicono-avion-azul1.png', ''),
(9, 34, 'modulo_c_solutionsicono-avion-blanco2.png', 'modulo_c_solutionsicono-avion-azul2.png', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pry_cursos_sectores_txt`
--

CREATE TABLE IF NOT EXISTS `pry_cursos_sectores_txt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_cursos_sector` int(11) NOT NULL,
  `id_idioma` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `pry_cursos_sectores_txt`
--

INSERT INTO `pry_cursos_sectores_txt` (`id`, `id_cursos_sector`, `id_idioma`, `nombre`) VALUES
(1, 1, 1, 'Pecuario'),
(2, 2, 1, 'Agrícola'),
(3, 3, 1, 'Alimentario'),
(4, 4, 1, 'Pecuario'),
(5, 5, 1, 'Agrícola'),
(6, 6, 1, 'Alimentario'),
(7, 4, 2, 'Pecuario'),
(8, 5, 2, 'Agrícola'),
(9, 6, 2, 'Alimentario'),
(10, 7, 1, 'Lorem'),
(11, 8, 1, 'Lorem'),
(12, 9, 1, 'Lorem');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pry_ecomerce_galeria_productos`
--

CREATE TABLE IF NOT EXISTS `pry_ecomerce_galeria_productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_prod_galeria` int(11) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pry_galeria_item`
--

CREATE TABLE IF NOT EXISTS `pry_galeria_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pry_galeria_tab` int(11) NOT NULL,
  `orden` int(11) NOT NULL,
  `width` int(11) NOT NULL,
  `imagen` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `align` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `url` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=308 ;

--
-- Volcado de datos para la tabla `pry_galeria_item`
--

INSERT INTO `pry_galeria_item` (`id`, `id_pry_galeria_tab`, `orden`, `width`, `imagen`, `align`, `url`) VALUES
(153, 15, 0, 0, '1409_57d94aeae5e15.jpg', '', ''),
(154, 15, 2, 0, '1409_57d94b0a641c5.jpg', '', ''),
(155, 17, 0, 0, '1409_57d9670246c1c.jpg', '', ''),
(156, 18, 0, 0, '1409_57d96810dbcc9.png', '', ''),
(157, 18, 0, 0, '1409_57d968262535b.jpg', '', ''),
(160, 18, 0, 0, '1409_57d96959e2d09.jpg', '', ''),
(161, 18, 0, 0, '1409_57d9696c6037f.png', '', ''),
(162, 17, 0, 0, '1609_57dbc0448c418.png', '', ''),
(186, 15, 1, 0, '2109_57e2af05aa7d6.png', '', ''),
(188, 17, 0, 0, '2109_57e3009bbc8c0.jpg', '', ''),
(201, 38, 0, 0, '0501_586e66032a03f.jpg', '', ''),
(202, 39, 0, 8, '1701_587e4b5b23d46.jpg', '', ''),
(203, 39, 1, 4, '1701_587e4b764b9ae.jpg', 'middle', ''),
(204, 39, 3, 4, '1701_587e4b9d0254b.jpg', 'bottom', ''),
(205, 39, 4, 8, '1701_587e4bc066a2a.jpg', '', ''),
(209, 39, 5, 12, '1701_587e4c8361aab.jpg', '', ''),
(210, 39, 6, 4, '1701_587e4ce1159b0.jpg', 'middle', ''),
(214, 39, 7, 6, '2001_588224266000d.jpg', '', ''),
(216, 39, 8, 12, '0802_589b4b07691c6.jpg', '', ''),
(259, 39, 9, 4, '1002_589dd2b2ee2c5.jpeg', '', ''),
(262, 39, 10, 6, '1002_589dd45523054.jpg', 'bottom', ''),
(263, 39, 12, 3, '1002_589dddac386d3.png', '', ''),
(264, 39, 11, 8, '1002_589dddda86f8d.jpg', '', ''),
(265, 39, 13, 3, '1002_589dde3487ab8.jpg', '', ''),
(266, 39, 15, 3, '1002_589dde6bd5f8c.png', '', ''),
(267, 39, 16, 3, '1002_589dde77daa7d.png', '', ''),
(269, 39, 17, 8, '1002_589de1e417c83.jpg', '', ''),
(270, 39, 14, 3, '1002_589de2ac25fd7.jpg', 'middle', ''),
(271, 39, 18, 4, '1002_589de310bd9df.jpg', '', ''),
(272, 39, 19, 8, '1002_589de44a483c5.jpg', '', ''),
(274, 39, 20, 12, '1002_589de5840d0f6.jpg', '', ''),
(275, 39, 22, 3, '1002_589de6603afa0.png', '', ''),
(276, 39, 2, 6, '1002_589de8459a3a7.jpg', '', ''),
(300, 69, 0, 0, '1702_58a71e8dc53fa.jpg', '', ''),
(303, 71, 0, 0, 'https://www.youtube.com/watch?v=c8shAx15SXM', '', ''),
(304, 71, 0, 0, 'https://www.youtube.com/watch?v=c8shAx15SXM', '', ''),
(305, 69, 0, 0, '0203_58b82ceeeb660.jpg', '', ''),
(306, 69, 0, 0, '0203_58b82d3c873bb.png', '', ''),
(307, 39, 0, 12, '2603_58d7afdba5ed4.jpg', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pry_galeria_item_detalle`
--

CREATE TABLE IF NOT EXISTS `pry_galeria_item_detalle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pry_galeria_item` int(11) NOT NULL,
  `label` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `id_idioma` int(11) NOT NULL DEFAULT '1',
  `valor` text COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=426 ;

--
-- Volcado de datos para la tabla `pry_galeria_item_detalle`
--

INSERT INTO `pry_galeria_item_detalle` (`id`, `id_pry_galeria_item`, `label`, `id_idioma`, `valor`) VALUES
(243, 153, 'test 1', 1, 'test 2'),
(244, 153, 'test 3', 1, 'test 4'),
(245, 154, 'test 5', 1, 'test 6'),
(246, 162, 'Marketing Manager', 1, '10 years of experience.'),
(247, 162, 'xxx', 1, 'xxx');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pry_galeria_item_slider`
--

CREATE TABLE IF NOT EXISTS `pry_galeria_item_slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pry_galeria_item` int(11) NOT NULL,
  `imagen` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=57 ;

--
-- Volcado de datos para la tabla `pry_galeria_item_slider`
--

INSERT INTO `pry_galeria_item_slider` (`id`, `id_pry_galeria_item`, `imagen`) VALUES
(1, 162, '1609_57dbc0447384c.png'),
(4, 186, '2109_57e2af0ac9495.png'),
(52, 300, '1702_58a71e93deb16.jpg'),
(53, 300, '1702_58a71e9786146.jpg'),
(54, 300, '1702_58a71e9b81bdd.jpg'),
(55, 300, '1702_58a71e9f64800.jpg'),
(56, 300, '1702_58a71ea2c1612.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pry_galeria_item_txt`
--

CREATE TABLE IF NOT EXISTS `pry_galeria_item_txt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_galeria_item` int(11) NOT NULL,
  `id_idioma` int(11) NOT NULL,
  `item` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `texto` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=182 ;

--
-- Volcado de datos para la tabla `pry_galeria_item_txt`
--

INSERT INTO `pry_galeria_item_txt` (`id`, `id_galeria_item`, `id_idioma`, `item`, `texto`) VALUES
(1, 96, 1, 'Palermo', ''),
(2, 98, 1, 'Bologna', ''),
(3, 101, 1, 'Terni', ''),
(4, 102, 1, 'Lecce', ''),
(5, 103, 1, 'Pavia', ''),
(6, 104, 1, 'Sassari', ''),
(7, 105, 1, 'Parma', ''),
(8, 106, 1, 'Vicenza', ''),
(9, 107, 1, 'Turin', ''),
(10, 108, 1, 'Taranto', ''),
(11, 109, 1, 'Rimini', ''),
(12, 110, 1, 'Modena', ''),
(13, 111, 1, 'Salerno', ''),
(14, 113, 1, 'Bolzano', ''),
(15, 114, 1, 'Ancona', ''),
(16, 116, 1, 'Amalfi', ''),
(17, 117, 1, 'Ferrara', ''),
(18, 118, 1, 'Messina', ''),
(19, 119, 1, 'Pescara', ''),
(20, 120, 1, 'Oro Rojo Tejido', ''),
(21, 121, 1, 'Oro Amarillo con Seda Azul', ''),
(22, 122, 1, 'Oro Amarillo con Seda Púrpura', ''),
(23, 123, 1, ' Oro Amarillo con Seda Azul', ''),
(24, 136, 1, 'Pisa', ''),
(25, 137, 1, 'Genoa', ''),
(26, 138, 1, 'Solitario Cúpula Baja', ''),
(27, 139, 1, 'Solitario Seis Puntas', ''),
(28, 140, 1, 'Solitario Este/Oeste', ''),
(29, 141, 1, 'Estilo Pavé Cuatro Puntos', ''),
(30, 142, 1, 'Estilo Pavé con Montura Catedral', ''),
(31, 143, 1, 'Estilo Marquise Milgrain', ''),
(32, 144, 1, 'Halo Clásico en Oro Amarillo ', ''),
(33, 145, 1, 'Halo Clásico en Oro Rosado', ''),
(34, 149, 1, 'Trieste', ''),
(35, 150, 1, 'Verona', ''),
(36, 151, 1, 'Bari', ''),
(37, 152, 1, 'Cagliari', ''),
(38, 153, 1, 'test', ''),
(39, 154, 1, 'Nuevo item', ''),
(40, 155, 1, 'Nuevo item', ''),
(41, 156, 1, 'Nuevo item', ''),
(42, 157, 1, 'Nuevo item', ''),
(43, 160, 1, 'Nuevo item', ''),
(44, 161, 1, 'Nuevo item', ''),
(45, 162, 1, 'Jane Dow', ''),
(46, 163, 1, 'Catania', ''),
(47, 164, 1, 'Siena', ''),
(48, 165, 1, 'Trento', ''),
(49, 166, 1, 'Perugia', ''),
(50, 167, 1, 'Padua', ''),
(51, 168, 1, 'Monza', ''),
(52, 173, 1, 'Ravenna', ''),
(53, 174, 1, 'Lucca', ''),
(54, 175, 1, 'Prato', ''),
(55, 176, 1, 'Viterbo', ''),
(56, 177, 1, 'Livorno', ''),
(57, 178, 1, 'Syracuse', ''),
(58, 179, 1, 'Oro tejido con seda púrpura 1cm', ''),
(59, 181, 1, 'Oro tejido con varias sedas 1cm ', ''),
(60, 182, 1, 'Oro tejido con seda negra 1cm', ''),
(61, 183, 1, 'Oro tejido 1cm', ''),
(62, 185, 1, 'Foggia', ''),
(63, 186, 1, 'Ipad', ''),
(64, 188, 1, 'Hola', ''),
(65, 189, 1, 'Nuevo item', ''),
(66, 191, 1, 'nuevo', ''),
(67, 192, 1, 'Nuevo item', ''),
(68, 193, 1, 'Nuevo item', ''),
(69, 195, 1, 'Halo Clásico Oro Blanco', ''),
(70, 196, 1, 'Halo Enroscado', ''),
(71, 197, 1, 'Torino', ''),
(72, 198, 1, 'Pompei', ''),
(73, 199, 1, 'Solitario Seis Puntas Amarillo', ''),
(74, 200, 1, 'Solitario Cúpula Baja Amarillo', ''),
(75, 201, 1, 'Nuevo item', ''),
(76, 202, 1, 'D.SGNWERK', ''),
(77, 203, 1, 'IKEA', ''),
(78, 204, 1, 'IKEA', ''),
(79, 205, 1, 'IKEA', ''),
(83, 209, 1, 'IKEA', ''),
(84, 210, 1, 'IKEA', ''),
(88, 214, 1, 'IKEA', ''),
(90, 216, 1, 'VANS', ''),
(94, 220, 1, 'Orion', ''),
(95, 221, 1, 'Aquarius', ''),
(96, 222, 1, 'Gemini', ''),
(97, 223, 1, 'Lyra', ''),
(98, 224, 1, 'Leo', ''),
(99, 225, 1, 'Vega', ''),
(100, 226, 1, 'Pegasus', ''),
(101, 227, 1, 'Taurus', ''),
(102, 228, 1, 'Nuevo item', ''),
(103, 229, 1, 'Nuevo item', ''),
(104, 230, 1, '', ''),
(105, 231, 1, 'Más Peruanos', 'Laborum y la Asociación Peruana de Recursos Humanos (APERHU) se han unido, junto a instituciones del Estado, Gremios y empresas líderes para organizar la campaña “Mas peruanos con empleo”'),
(106, 232, 1, '', ''),
(133, 259, 1, 'MUUN', ''),
(136, 262, 1, 'IKEA ', ''),
(137, 263, 1, '', ''),
(138, 264, 1, 'MUUN X THE LOFT ', ''),
(139, 265, 1, 'MUUN', ''),
(140, 266, 1, '', ''),
(141, 267, 1, '', ''),
(143, 269, 1, 'AGORA ', ''),
(144, 270, 1, 'IKONOTV X SOHO HOUSE', ''),
(145, 271, 1, 'IKONOTV', ''),
(146, 272, 1, 'MUUN', ''),
(148, 274, 1, 'VANS', ''),
(149, 275, 1, '', ''),
(150, 276, 1, 'VANS', ''),
(151, 277, 1, ' LLUIS MARTÍNEZ – RIBES', 'Profesor. Experto en Marketing y Retail Innovation'),
(152, 278, 1, 'PABLO FONCILLAS', 'Lecturer'),
(153, 279, 1, 'LUIS REYES', 'CEO'),
(154, 280, 1, 'VICTOR ALBURQUERQUE', 'Director de Análisis Sectorial'),
(155, 281, 1, 'FRANCESC RUFAS GREGORI', 'CEO'),
(156, 282, 1, 'PABLO VILLALBA', 'CEO Latam'),
(157, 283, 1, 'RAFAEL DASSO MONTERO', 'Gerente General'),
(158, 284, 1, 'MARIANA IBERO', 'Directora Capital Humano'),
(159, 285, 1, 'ALBERTO BETHKE', 'Socio fundador & CEO'),
(160, 286, 1, 'JAVIER ÁLVAREZ', 'Gerente de Estudios Multiclientes'),
(161, 287, 1, 'ANDRÉS FRYDMAN', 'Presidente'),
(162, 288, 1, 'RODOLFO J. CREMER', 'Socio Director'),
(163, 289, 1, 'PERCY VIGIL', 'Gerente General'),
(164, 290, 1, 'PEDRO SEVILLA', 'Gerente General'),
(165, 291, 1, 'DIEGO CASTRO', 'Country Manager'),
(166, 292, 1, 'POL SANTANDREU', 'Socio Director'),
(167, 293, 1, 'CARLOS FERNÁNDEZ GATES', 'Gerente Senior'),
(168, 294, 1, 'GENE K. ONTJES', 'Propietario y Operador de Franquicias'),
(169, 295, 1, 'Nuevo item', ''),
(171, 297, 1, 'Inyogo', 'Ssdfgsdg'),
(174, 300, 1, 'Nuevo item', ''),
(177, 303, 1, 'especial', 'comenzamos con lo bueno, con la descripción de este nuevo video, subido el dia de ayer a las 8pm. disfrutenlo'),
(178, 304, 1, 'especial', 'comenzamos con lo bueno, con la descripción de este nuevo video, subido el dia de ayer a las 8pm. disfrutenlo'),
(179, 305, 1, 'Nuevo item', ''),
(180, 306, 1, 'Nuevo item', ''),
(181, 307, 1, 'VANS', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pry_galeria_tabs`
--

CREATE TABLE IF NOT EXISTS `pry_galeria_tabs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pry_modulo` int(11) NOT NULL,
  `desactivar` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=72 ;

--
-- Volcado de datos para la tabla `pry_galeria_tabs`
--

INSERT INTO `pry_galeria_tabs` (`id`, `id_pry_modulo`, `desactivar`) VALUES
(15, 91, 0),
(17, 105, 0),
(18, 105, 0),
(25, 174, 0),
(27, 174, 0),
(28, 182, 0),
(29, 183, 0),
(30, 194, 0),
(31, 225, 0),
(32, 234, 0),
(37, 294, 0),
(38, 310, 0),
(39, 319, 0),
(41, 310, 0),
(69, 484, 0),
(70, 486, 0),
(71, 502, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pry_galeria_tabs_txt`
--

CREATE TABLE IF NOT EXISTS `pry_galeria_tabs_txt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_galeria_tab` int(11) NOT NULL,
  `id_idioma` int(11) NOT NULL,
  `tab` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=60 ;

--
-- Volcado de datos para la tabla `pry_galeria_tabs_txt`
--

INSERT INTO `pry_galeria_tabs_txt` (`id`, `id_galeria_tab`, `id_idioma`, `tab`) VALUES
(1, 1, 1, 'ANILLOS DE COMPROMISO'),
(2, 2, 1, 'ANILLOS'),
(3, 3, 1, 'ARETES'),
(4, 4, 1, 'PULSERAS'),
(5, 5, 1, 'sddsf'),
(6, 6, 1, 'COLLARES'),
(7, 7, 1, 'Lorem'),
(8, 8, 1, 'Lorem'),
(9, 13, 1, 'Lorem'),
(10, 15, 1, 'Lorem'),
(11, 17, 1, 'tab 1'),
(12, 18, 1, 'tab 2'),
(13, 23, 1, 'Lorem'),
(14, 25, 1, 'Lorem'),
(15, 27, 1, '25895'),
(16, 28, 1, 'Lorem'),
(17, 29, 1, 'Lorem'),
(18, 30, 1, 'Lorem'),
(19, 31, 1, 'Lorem'),
(20, 32, 1, 'Lorem'),
(21, 33, 1, 'Lorem'),
(22, 34, 1, 'Lorem'),
(23, 35, 1, 'Lorem'),
(24, 36, 1, 'Lorem'),
(25, 37, 1, 'Lorem'),
(26, 38, 1, 'Lorem'),
(27, 39, 1, 'Lorem'),
(29, 41, 1, 'jkhjhb'),
(30, 42, 1, 'Shelves'),
(31, 43, 1, 'Wardrobe'),
(32, 44, 1, 'Lorem'),
(33, 45, 1, 'Lorem'),
(34, 46, 1, 'Rings'),
(35, 47, 1, 'Lorem'),
(36, 48, 1, 'Lorem'),
(37, 49, 1, 'Lorem'),
(38, 50, 1, 'Lorem'),
(39, 51, 1, 'Lorem'),
(40, 52, 1, 'Lorem'),
(41, 53, 1, 'Lorem'),
(42, 54, 1, 'Lorem'),
(46, 58, 1, 'Keynote'),
(47, 59, 1, 'Expositores'),
(48, 60, 1, 'Panelistas'),
(49, 61, 1, 'Xsdf'),
(50, 62, 1, 'jknl''k'),
(51, 63, 1, 'Ring'),
(52, 64, 1, 'Lorem'),
(53, 65, 1, 'Lorem'),
(54, 66, 1, 'Lorem'),
(57, 69, 1, 'Lorem'),
(58, 70, 1, 'Lorem'),
(59, 71, 1, 'Lorem');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pry_google_maps`
--

CREATE TABLE IF NOT EXISTS `pry_google_maps` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pry_modulo` int(11) NOT NULL,
  `direccion` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `longitud` text COLLATE utf8_spanish_ci NOT NULL,
  `latitud` text COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `pry_google_maps`
--

INSERT INTO `pry_google_maps` (`id`, `id_pry_modulo`, `direccion`, `longitud`, `latitud`) VALUES
(7, 55, 'Gärtnerstraße 80, 20253 Hamburg, Deutschland', '9.964159999999993', '53.58065999999999'),
(8, 88, 'Eifflerstrabe 43 22769 Hamburg Germany', '9.960110799999939', '53.562561'),
(9, 111, 'Eifflerstrabe 43 22769 Hamburg Germany', '9.960110799999939', '53.562561'),
(10, 117, 'Eifflerstrabe 43 22769 Hamburg Germany', '9.960110799999939', '53.562561'),
(11, 185, 'Eifflerstrabe 43 22769 Hamburg Germany', '9.960110799999939', '53.562561');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pry_menu_urls`
--

CREATE TABLE IF NOT EXISTS `pry_menu_urls` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pry_proyecto` int(11) NOT NULL,
  `titulo` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `url` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=23 ;

--
-- Volcado de datos para la tabla `pry_menu_urls`
--

INSERT INTO `pry_menu_urls` (`id`, `id_pry_proyecto`, `titulo`, `url`) VALUES
(9, 6, 'gabicito2', ''),
(13, 5, 'Martin', 'martin'),
(18, 5, 'Bernardo', 'bernardo'),
(19, 6, '', ''),
(20, 5, '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pry_menu_urls_txt`
--

CREATE TABLE IF NOT EXISTS `pry_menu_urls_txt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_menu_url` int(11) NOT NULL,
  `id_idioma` int(11) NOT NULL,
  `titulo` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `url` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=25 ;

--
-- Volcado de datos para la tabla `pry_menu_urls_txt`
--

INSERT INTO `pry_menu_urls_txt` (`id`, `id_menu_url`, `id_idioma`, `titulo`, `url`) VALUES
(1, 3, 1, 'About Us', 'about'),
(2, 4, 1, 'Productos', 'productos'),
(3, 5, 1, 'ABOUT', 'about'),
(4, 6, 1, 'Jose', 'jose'),
(5, 7, 1, 'History', 'history'),
(6, 8, 1, 'Historia', 'historia'),
(7, 9, 1, 'gabicito2', ''),
(8, 10, 1, 'Utec', 'utrec'),
(9, 11, 1, 'Daniel', 'Daniel'),
(10, 12, 1, 'Michael', 'michael'),
(11, 13, 1, 'Martin', 'martin'),
(12, 14, 1, 'Nosotros', 'nosotros'),
(13, 15, 1, 'Cursos y Servicios', 'cursos-y-servicios'),
(14, 16, 1, 'Noticias', 'noticias'),
(15, 17, 1, 'Alianzas', 'alianzas'),
(16, 18, 1, 'Bernardo', 'bernardo'),
(17, 14, 2, 'Nosotros', 'nosotros'),
(18, 15, 2, 'Cursos y Servicios', 'cursos-y-servicios'),
(19, 16, 2, 'Noticias', 'noticias'),
(20, 17, 2, 'Alianzas', 'alianzas'),
(21, 19, 1, 'producto', 'producto'),
(22, 20, 1, 'Ken', 'ken'),
(23, 21, 1, 'Wili', 'wili'),
(24, 22, 1, '', 'noticias');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pry_modulo`
--

CREATE TABLE IF NOT EXISTS `pry_modulo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_id` int(11) NOT NULL,
  `id_proyecto` int(11) NOT NULL,
  `id_md_modulo` int(11) NOT NULL,
  `id_menu_url` int(11) NOT NULL,
  `custom_menu` tinyint(1) NOT NULL,
  `orden` int(11) NOT NULL,
  `comentario` text COLLATE utf8_spanish_ci NOT NULL,
  `logo` varchar(300) COLLATE utf8_spanish_ci DEFAULT NULL,
  `logo_texto` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `color_fondo` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `imagen_fondo` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `modulo_blade` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `css_nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `item_menu` tinyint(1) NOT NULL,
  `link` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=504 ;

--
-- Volcado de datos para la tabla `pry_modulo`
--

INSERT INTO `pry_modulo` (`id`, `tipo_id`, `id_proyecto`, `id_md_modulo`, `id_menu_url`, `custom_menu`, `orden`, `comentario`, `logo`, `logo_texto`, `color_fondo`, `imagen_fondo`, `modulo_blade`, `css_nombre`, `item_menu`, `link`) VALUES
(69, 2, 5, 2, 0, 0, 1, '- Look/structure of the module becomes destructed when longer texts are inserted.\r\n- Text ends too close to picture/module below.', NULL, '', '', '', 'modulo3', 'modulo3.css', 0, ''),
(70, 2, 5, 4, 0, 0, 4, '- Look/structure of the module becomes destructed when longer texts are inserted.\r\n- Text ends too close to picture/module below.', NULL, '', '', '', 'modulo4', 'modulo4.css', 0, ''),
(75, 3, 5, 5, 0, 0, 30, '- Overall looking good. \r\n- Text in "SEND"-box is not centered.\r\n- Changing of background image does not work.\r\n- Color of yellow checkbox and "SEND"-box cannot be changed.\r\n- Module cannot be removed.\r\n-  Module is shown two times.', '5logomipagina.png', '', '', '2109_57e3090e7c570.jpg', 'modulo_f1', 'modulo_f1.css', 0, ''),
(76, 2, 5, 8, 0, 0, 22, '- Overall looking good. \r\n- "SEND ME SOME LOVE"-button: Text is not centered.', NULL, '', '', '', 'modulo_contact3', 'modulo_contact3.css', 0, ''),
(81, 2, 5, 10, 0, 0, 3, '- Look/structure of the module becomes destructed when longer texts are inserted.\r\n- Text ends too close to picture/module below.', NULL, '', '', '', 'modulo_c4', 'modulo_c4.css', 0, ''),
(83, 2, 5, 14, 0, 0, 6, '- Looking good.\r\n', NULL, '', '', '', 'modulo_c7', 'modulo_c7.css', 0, ''),
(84, 2, 5, 7, 0, 0, 5, '- Look/structure of the module becomes destructed when longer texts are inserted.\r\n- Clock & dollar visuals cannot be removed/changed.\r\n- When the user selects this module, he/she probably does so because of the floating images on the right, including the shadows. When then going into the editor to insert personal pictures, he/she will likely expect that the look stays instead of becoming flat.\r\n- Adjusting the colors of the font/background does not work. Sometimes the colors don''t change and you cannot go back to the original color (e.g. the grey of the original background is in the color palette). Also, the color selection sometimes is not saved.\r\n- Too much space between title (Read Clearly) and text.', NULL, '', '', '', 'modulo_c3', 'modulo_c3.css', 0, ''),
(86, 2, 5, 15, 0, 0, 7, '- Overall looking good.\r\n- Color of Play-button does not change, when using the editor.', NULL, '', '', '', 'modulo_c12', 'modulo_c12.css', 0, ''),
(87, 2, 5, 16, 0, 0, 20, '- Backgroung image cannot be edited to make the text more visible. Possibility to add transperancy, soft-focus effect or reduction of color would be helpful.\r\n- ---- Position of lines not ideal.', NULL, '', '', '5fondo_md_contact2.jpg', 'modulo_contact2', 'modulo_contact2.css', 0, ''),
(88, 2, 5, 17, 0, 0, 24, '- Looking good.', NULL, '', '', '', 'modulo_contact4a', 'modulo_contact4a.css', 0, ''),
(90, 2, 5, 18, 0, 0, 8, '- When editing the texts, checkbox and x are missing.\r\n- Look/structure of the module is broken, when too much text is inserted.', NULL, '', '', '', 'modulo_c22_acordeon', 'modulo_c22_acordeon.css', 0, ''),
(91, 2, 5, 19, 0, 0, 16, '- You cannot change the contents of the grey box.\r\n- Images can only be inserted in their original look/shape, cannot be edited. \r\n- When adding an image, it''s not clear what the different text boxes are for.', NULL, '', '', '', 'modulo_c62_tabs', 'modulo_c62_tabs.css', 0, ''),
(94, 2, 5, 21, 0, 0, 10, '- Images are distorted if their original shape is not as needed.\r\n- The editor would be easier to find if it was attached directly to the picture. It is located within the top menu and might be missed that way.', NULL, '', '', '', 'modulo_c122', 'modulo_c122.css', 0, ''),
(97, 2, 5, 20, 0, 0, 9, '- Look/structure of the module becomes destructed when longer texts are inserted.\r\n- It doesn''t become clear that the module includes a slide option for image presentation.  The user only sees it when going into the picture editor. \r\n- The editor would be easier to find if it was attached directly to the picture. It is located within the top menu and might be missed that way.\r\n- Some images are not inserted, when selected for the slide show.\r\n- Images are distorted when their original size is not as needed.\r\n- Not clear that the logos on the right actually need to be edited beforehand in order to have their respective size, color, layout in the module. Would be great to have an editing tool within the site builder to get that look for any logo selection.', NULL, '', '', '', 'modulo_c17', 'modulo_c17.css', 0, ''),
(98, 2, 5, 22, 0, 0, 11, '- In this module, the structure/look persists/stays, so if there is too much text added, it disappears behind the next module.\r\n- Images are distorted if their original shape is not as needed.\r\n- The editor would be easier to find if it was attached directly to the picture. It is located within the top menu and might be missed that way.', NULL, '', '', '', 'modulo_c131', 'modulo_c131.css', 0, ''),
(99, 2, 5, 23, 0, 0, 12, '- In this module, the structure/look persists/stays, so if there is too much text added, it disappears behind the next module.\r\n- Images are distorted if their original shape is not as needed.\r\n- The editor would be easier to find if it was attached directly to the picture. It is located within the top menu and might be missed that way.', NULL, '', '', '', 'modulo_c14', 'modulo_c14.css', 0, ''),
(100, 2, 5, 24, 0, 0, 13, '- Looking good.', NULL, '', '', '', 'modulo_c71', 'modulo_c71.css', 0, ''),
(101, 2, 5, 25, 0, 0, 14, '- Overall looking good.\r\n- Color of Play-button does not change, when using the editor.', NULL, '', '', '', 'modulo_c8', 'modulo_c8.css', 0, ''),
(102, 2, 5, 26, 0, 0, 15, '- No possibility given to change the color of the Play-button.\r\n- "View Awesome..."-button: Part of the outline is gone.\r\n', NULL, '', '', '', 'modulo_c16', 'modulo_c16.css', 0, ''),
(103, 2, 5, 27, 0, 0, 17, '- In editar-mode, the module''s layout persists/stays, so if there is too much text added, it disappears behind the next module. --> Looks better in "Ver"-mode, but text/box is too close to next module.\r\n- Wordwraps are not shown correctly in ver-mode.', NULL, '', '', '', 'modulo_c18', 'modulo_18.css', 0, ''),
(104, 2, 5, 28, 0, 0, 18, '- Looking good.', NULL, '', '', '', 'modulo_c_text1', 'modulo_c_text1.css', 0, ''),
(105, 2, 5, 29, 0, 0, 19, '- Tabs should be moved down a bit.\r\n- Profile pictures cannot be adjusted in terms of size/section shown. Would be nice to have an editor here.\r\n- Profile pictures are inserted in several different shapes, circle, oval, square. This doesn''t seem to have to do with the file used, but the module seems to be inconsistent (see tab 1 & 2).\r\n--> Very different look in "Editar"- and "Ver"-mode. "Ver"-mode does not seem to show what has been added in "Editar"-mode (more profil pictures, etc.)', NULL, '', '', '', 'modulo_c8_tabs', 'modulo_c8_tabs.css', 0, ''),
(109, 2, 5, 31, 0, 0, 25, '- Overall looking good. \r\n- Text in "SEND MESSAGE"-box is not centered.', NULL, '', '', '5fondo_md_contact1.jpg', 'modulo_contact1', 'modulo_contact1.css', 0, ''),
(110, 2, 5, 32, 0, 0, 27, '', NULL, '', '', '5fondo_md_contact5.jpg', 'modulo_contact5', 'modulo_contact5.css', 0, ''),
(111, 2, 5, 33, 0, 0, 26, '- Looking good.\r\n-Only: When scrolling down the page and reaching this module, the function all of a sudden changes to zooming in on the map. Can this be avoided?', NULL, '', '', '', 'modulo_map2', 'modulo_map2.css', 0, ''),
(117, 2, 5, 34, 0, 0, 29, '- Looking good.', NULL, '', '', '', 'modulo_map2a', 'modulo_map2a.css', 0, ''),
(118, 2, 5, 37, 0, 0, 23, '- Top menu: Icon with mountain/sun is shown two times --> Confusing.\r\n- It does not become clear beforehand that this module includes a slide-function, can this be made more visible in the preview?', NULL, '', '', '2109_57e30fbc63518.png', 'modulo_c20', 'modulo_c20.css', 0, ''),
(120, 2, 5, 41, 0, 0, 28, '- Nothing can be changed here!', NULL, '', '', '', 'modulo_c_rayos', 'modulo_c_rayos.css', 0, ''),
(121, 2, 5, 42, 0, 0, 2, '- Nothing can be changed here!', NULL, '', '', '', 'modulo_h_rayo', 'modulo_h_rayo.css', 0, ''),
(147, 1, 6, 13, 0, 0, 2, '', NULL, 'mi pagina', '', '', 'modulo_h51', 'modulo_h51.css', 0, ''),
(149, 3, 6, 36, 0, 0, 13, '', '6logomipaginawhite.png', '', '', '', 'modulo_f4', 'modulo_f4.css', 0, ''),
(170, 2, 6, 20, 0, 0, 6, '', NULL, '', '', '', 'modulo_c17', 'modulo_c17.css', 0, ''),
(171, 2, 6, 22, 0, 0, 5, '', NULL, '', '', '', 'modulo_c131', 'modulo_c131.css', 0, ''),
(172, 2, 6, 23, 0, 0, 7, '', NULL, '', '', '', 'modulo_c14', 'modulo_c14.css', 0, ''),
(173, 2, 6, 18, 0, 0, 3, '', NULL, '', '', '', 'modulo_c22_acordeon', 'modulo_c22_acordeon.css', 0, ''),
(174, 2, 6, 19, 0, 0, 8, '', NULL, '', '', '', 'modulo_c62_tabs', 'modulo_c62_tabs.css', 0, ''),
(180, 1, 9, 12, 0, 0, 0, '', NULL, 'mi pagina', '', '9building_street.jpg', 'modulo_h4', 'modulo_h4.css', 0, ''),
(181, 2, 9, 24, 0, 0, 13, '', NULL, '', '', '', 'modulo_c71', 'modulo_c71.css', 0, ''),
(182, 2, 9, 19, 0, 0, 16, '', NULL, '', '', '', 'modulo_c62_tabs', 'modulo_c62_tabs.css', 0, ''),
(183, 2, 9, 29, 0, 0, 20, '', NULL, '', '', '', 'modulo_c8_tabs', 'modulo_c8_tabs.css', 0, ''),
(184, 2, 9, 37, 0, 0, 24, '', NULL, '', '', '', 'modulo_c20', 'modulo_c20.css', 0, ''),
(185, 2, 9, 34, 0, 0, 101, '', NULL, '', '', '', 'modulo_map2a', 'modulo_map2a.css', 0, ''),
(186, 3, 9, 35, 0, 0, 0, '', '9logomipaginawhite.png', '', '', '9fondo_md_footer3.jpg', 'modulo_f3', 'modulo_f3.css', 0, ''),
(187, 2, 6, 27, 0, 0, 9, '', NULL, '', '', '', 'modulo_c18', 'modulo_18.css', 0, ''),
(188, 2, 6, 37, 0, 0, 10, '', NULL, '', '', '', 'modulo_c20', 'modulo_c20.css', 0, ''),
(194, 2, 5, 29, 0, 0, 21, '', NULL, '', '', '', 'modulo_c8_tabs', 'modulo_c8_tabs.css', 0, ''),
(195, 2, 6, 41, 0, 0, 11, '', NULL, '', '', '', 'modulo_c_rayos', 'modulo_c_rayos.css', 0, ''),
(196, 2, 6, 42, 0, 0, 4, '', NULL, '', '', '1010_57fb5c62c1f13.png', 'modulo_h_rayo', 'modulo_h_rayo.css', 0, ''),
(206, 1, 11, 13, 0, 0, 0, '', NULL, 'mi pagina', '', '', 'modulo_h51', 'modulo_h51.css', 0, ''),
(207, 2, 11, 7, 0, 0, 3, '', NULL, '', '', '', 'modulo_c3', 'modulo_c3.css', 0, ''),
(208, 2, 11, 15, 0, 0, 7, '', NULL, '', '', '', 'modulo_c12', 'modulo_c12.css', 0, ''),
(209, 2, 11, 14, 0, 0, 6, '', NULL, '', '', '', 'modulo_c7', 'modulo_c7.css', 0, ''),
(210, 3, 11, 35, 0, 0, 0, '', '11logomipaginawhite.png', '', '', '11fondo_md_footer3.jpg', 'modulo_f3', 'modulo_f3.css', 0, ''),
(211, 1, 121, 0, 0, 0, 0, '', NULL, '', '', '2410_580e5d387622f.png', 'modulo_vacio', '', 0, ''),
(214, 3, 121, 5, 0, 0, 0, '', '12logomipagina.png', '', '', '', 'modulo_f1', 'modulo_f1.css', 0, ''),
(215, 1, 13, 1, 0, 0, 0, 'Logotipo de x dimensiones, imagen detacada de x dimensiones, titulo de max 20 caracteres, intro de aprox 320 caracteres, dos columnas de texto con su respectivo subtitulo.\r\n', NULL, 'mi pagina', '', '', 'modulo1', 'modulo1.css', 0, ''),
(216, 2, 13, 2, 0, 0, 1, '', NULL, '', '', '', 'modulo3', 'modulo3.css', 0, ''),
(217, 3, 13, 35, 0, 0, 0, '', '13logomipaginawhite.png', '', '', '13fondo_md_footer3.jpg', 'modulo_f3', 'modulo_f3.css', 0, ''),
(218, 1, 14, 6, 0, 0, 0, '', NULL, 'mi pagina', '', '14bg-home.jpg', 'modulo_h3', 'modulo_h3.css', 0, ''),
(219, 2, 14, 2, 0, 0, 1, '', NULL, '', '', '', 'modulo3', 'modulo3.css', 0, ''),
(220, 3, 14, 35, 0, 0, 0, '', '14logomipaginawhite.png', '', '', '14fondo_md_footer3.jpg', 'modulo_f3', 'modulo_f3.css', 0, ''),
(223, 1, 16, 6, 0, 0, 0, '', NULL, 'mi pagina', '', '16bg-home.jpg', 'modulo_h3', 'modulo_h3.css', 0, ''),
(224, 2, 16, 2, 0, 0, 1, '', NULL, '', '', '', 'modulo3', 'modulo3.css', 0, ''),
(225, 2, 16, 19, 0, 0, 16, '', NULL, '', '', '', 'modulo_c62_tabs', 'modulo_c62_tabs.css', 0, ''),
(226, 3, 16, 35, 0, 0, 0, '', '16logomipaginawhite.png', '', '', '16fondo_md_footer3.jpg', 'modulo_f3', 'modulo_f3.css', 0, ''),
(229, 1, 17, 13, 0, 0, 0, '', NULL, 'mi pagina', '', '', 'modulo_h51', 'modulo_h51.css', 0, ''),
(230, 2, 17, 2, 0, 0, 1, '', NULL, '', '', '', 'modulo3', 'modulo3.css', 0, ''),
(231, 3, 17, 5, 0, 0, 0, '', '17logomipagina.png', '', '', '', 'modulo_f1', 'modulo_f1.css', 0, ''),
(232, 1, 18, 1, 0, 0, 0, 'Logotipo de x dimensiones, imagen detacada de x dimensiones, titulo de max 20 caracteres, intro de aprox 320 caracteres, dos columnas de texto con su respectivo subtitulo.\r\n', NULL, 'mi pagina', '', '', 'modulo1', 'modulo1.css', 0, ''),
(233, 2, 18, 2, 0, 0, 1, '', NULL, '', '', '', 'modulo3', 'modulo3.css', 0, ''),
(234, 2, 18, 29, 0, 0, 20, '', NULL, '', '', '', 'modulo_c8_tabs', 'modulo_c8_tabs.css', 0, ''),
(235, 3, 18, 5, 0, 0, 0, '', '18logomipagina.png', '', '', '', 'modulo_f1', 'modulo_f1.css', 0, ''),
(292, 1, 21, 13, 0, 0, 0, '', NULL, 'mi pagina', '', '', 'modulo_h51', 'modulo_h51.css', 0, ''),
(293, 2, 21, 2, 0, 0, 1, '', NULL, '', '', '', 'modulo3', 'modulo3.css', 0, ''),
(294, 2, 21, 19, 0, 0, 16, '', NULL, '', '', '', 'modulo_c62_tabs', 'modulo_c62_tabs.css', 0, ''),
(295, 2, 21, 31, 0, 0, 54, '', NULL, '', '', '21fondo_md_contact1.jpg', 'modulo_contact1', 'modulo_contact1.css', 0, ''),
(296, 3, 21, 35, 0, 0, 0, '', '21logomipaginawhite.png', '', '', '21fondo_md_footer3.jpg', 'modulo_f3', 'modulo_f3.css', 0, ''),
(304, 1, 22, 1, 0, 0, 0, 'Logotipo de x dimensiones, imagen detacada de x dimensiones, titulo de max 20 caracteres, intro de aprox 320 caracteres, dos columnas de texto con su respectivo subtitulo.\r\n', NULL, 'mi pagina', '', '', 'modulo1', 'modulo1.css', 0, ''),
(305, 2, 22, 2, 0, 0, 1, '', NULL, '', '', '', 'modulo3', 'modulo3.css', 0, ''),
(306, 2, 22, 14, 0, 0, 6, '', NULL, '', '', '', 'modulo_c7', 'modulo_c7.css', 0, ''),
(307, 3, 22, 35, 0, 0, 0, '', '22logomipaginawhite.png', '', '', '22fondo_md_footer3.jpg', 'modulo_f3', 'modulo_f3.css', 0, ''),
(310, 2, 22, 19, 0, 0, 16, '', NULL, '', '', '', 'modulo_c62_tabs', 'modulo_c62_tabs.css', 0, ''),
(313, 1, 6, 12, 0, 0, 0, '', NULL, 'mi pagina', '', '6building_street.jpg', 'modulo_h4', 'modulo_h4.css', 0, ''),
(314, 2, 6, 16, 0, 0, 12, '', NULL, '', '', '0901_5873a3cc9d306.png', 'modulo_contact2', 'modulo_contact2.css', 0, ''),
(316, 1, 6, 1, 0, 0, 1, 'Logotipo de x dimensiones, imagen detacada de x dimensiones, titulo de max 20 caracteres, intro de aprox 320 caracteres, dos columnas de texto con su respectivo subtitulo.\r\n', NULL, 'mi pagina', '', '', 'modulo1', 'modulo1.css', 0, ''),
(318, 1, 23, 0, 0, 0, 0, '', NULL, '', '', '', 'modulo_vacio', '', 0, ''),
(319, 2, 23, 57, 0, 0, 25, '', '1602_58a5cc48603be.png', '', '', '', 'modulo_1kg', 'modulo_1kg.css', 0, ''),
(320, 3, 23, 0, 0, 0, 0, '', NULL, '', '', '', 'modulo_vacio', '', 0, ''),
(326, 1, 24, 6, 0, 0, 0, '', NULL, 'mi pagina', '', '', 'modulo_h3', 'modulo_h3.css', 0, ''),
(327, 2, 24, 2, 0, 0, 1, '', NULL, '', '', '', 'modulo3', 'modulo3.css', 0, ''),
(328, 3, 24, 35, 0, 0, 0, '', '24logomipaginawhite.png', '', '', '24fondo_md_footer3.jpg', 'modulo_f3', 'modulo_f3.css', 0, ''),
(329, 1, 6, 3, 9, 0, 0, '', NULL, 'mi pagina', '', '', 'modulo2', 'modulo2.css', 0, ''),
(351, 1, 5, 12, 0, 0, 0, '', NULL, 'mi pagina', '', '5building_street.jpg', 'modulo_h4', 'modulo_h4.css', 0, ''),
(478, 2, 39, 14, 0, 0, 2, '', NULL, '', '', '', 'modulo_c7', 'modulo_c7.css', 0, ''),
(479, 3, 39, 69, 0, 0, 5, '', '39logomipaginawhite.png', '', '', '', 'modulo_f5', 'modulo_f5.css', 1, ''),
(484, 2, 39, 19, 0, 0, 1, '', NULL, '', '', '', 'modulo_c62_tabs', 'modulo_c62_tabs.css', 0, ''),
(485, 2, 39, 65, 0, 0, 3, '', NULL, '', '', '', 'modulo_c_postula', 'modulo_c_postula.css', 1, ''),
(486, 2, 39, 68, 0, 0, 4, '', NULL, '', '', '39fondo-videos.jpg', 'modulo_c_videoscarousel', 'modulo_c_videoscarousel.css', 1, ''),
(501, 2, 39, 70, 0, 0, 32, '', NULL, '', '', '', 'modulo_c_iframe', 'modulo_c_iframe.css', 1, ''),
(502, 2, 39, 68, 0, 0, 32, '', NULL, '', '', '39fondo-videos.jpg', 'modulo_c_videoscarousel', 'modulo_c_videoscarousel.css', 1, ''),
(503, 1, 39, 12, 0, 0, 0, '', NULL, 'mi pagina', '', '', 'modulo_h4', 'modulo_h4.css', 1, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pry_modulo_estructura`
--

CREATE TABLE IF NOT EXISTS `pry_modulo_estructura` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_modulo` int(11) NOT NULL,
  `titulo` text COLLATE utf8_spanish_ci,
  `subtitulo` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `comentario` text COLLATE utf8_spanish_ci,
  `video` varchar(300) COLLATE utf8_spanish_ci DEFAULT NULL,
  `url` varchar(300) COLLATE utf8_spanish_ci DEFAULT NULL,
  `es_url_externo` int(2) NOT NULL,
  `url_texto` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `id_pry_modulo_estructura_img` int(11) NOT NULL,
  `id_idioma` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=774 ;

--
-- Volcado de datos para la tabla `pry_modulo_estructura`
--

INSERT INTO `pry_modulo_estructura` (`id`, `id_modulo`, `titulo`, `subtitulo`, `comentario`, `video`, `url`, `es_url_externo`, `url_texto`, `id_pry_modulo_estructura_img`, `id_idioma`) VALUES
(108, 69, 'This is where it begins', 'LOREM / LAGOSITO', 'This is not another do-it yourself website builder. The Grid harnesses the power of artificial intelligence to take everything you throw at it -videos, images, text, urls and more -and automatically shape them into a custom website unique to you.\nThis is not another do-it yourself website builder. The Grid harnesses the power of artificial intelligence to take everything you throw at it -videos, images, text, urls and more -and automatically shape them into a custom website unique to you.\n', NULL, NULL, 0, '', 22, 1),
(109, 69, 'This is where it begins', 'LOREM / LAGOSITO', 'This is not another do-it yourself website builder. The Grid harnesses the power of artificial intelligence to take everything you throw at it -videos, images, text, urls and more -and automatically shape them into a custom website unique to you.\nThis is not another do-it yourself website builder. The Grid harnesses the power of artificial intelligence to take everything you throw at it -videos, images, text, urls and more -and automatically shape them into a custom website unique to you.This is not another do-it yourself website builder. The Grid harnesses the power of artificial intelligence to take everything you throw at it -videos, images, text, urls and more -and automatically shape them into a custom website unique to you.\nThis is not another do-it yourself website builder. The Grid harnesses the power of artificial intelligence to take everything you throw at it -videos, images, text, urls and more -and automatically shape them into a custom website unique to you.', NULL, NULL, 0, '', 23, 1),
(110, 70, 'BUT A LITTLE CHOCOLATE NOW AND THEN DOESN''T HURT.', '01', 'You better cut the pizza in four pieces because I''m not hungry enough to eat six.\nYou better cut the pizza in four pieces because I''m not hungry enough to eat six.\nYou better cut the pizza in four pieces because I''m not hungry enough to eat six.\nYou better cut the pizza in four pieces because I''m not hungry enough to eat six.\nYou better cut the pizza in four pieces because I''m not hungry enough to eat six.\nYou better cut the pizza in four pieces because I''m not hungry enough to eat six.', NULL, 'About', 0, '', 24, 1),
(111, 70, 'THE STORY OF HOW WE MADE IT KEEP ON ROCKING.', '02', 'If more of us valued food and cheer and song above hoarded gold, it would be a merrier world.\nIf more of us valued food and cheer and song above hoarded gold, it would be a merrier world.\nIf more of us valued food and cheer and song above hoarded gold, it would be a merrier world.\nIf more of us valued food and cheer and song above hoarded gold, it would be a merrier world.\n', NULL, 'History', 0, '', 25, 1),
(112, 70, 'LITTLE PIECES OF OUR PROUDNESS', '03', 'There are people in the world so hungry, that God cannot appear to them except in the form of bread.\nThere are people in the world so hungry, that God cannot appear to them except in the form of bread.\nThere are people in the world so hungry, that God cannot appear to them except in the form of bread.\nThere are people in the world so hungry, that God cannot appear to them except in the form of bread.\nThere are people in the world so hungry, that God cannot appear to them except in the form of bread.', NULL, 'Quality', 0, '', 26, 1),
(124, 76, 'Contact us', 'SEND ME SOME LOVE send some love', 'This sounded a very good reason and Alice was quite pleased to know it ''I never thought of that before!'' she said. This sounded a very good reason and Alice was quite pleased to know it ''I never thought of that before!'' she said.This sounded a very good reason and Alice was quite pleased to know it ''I never thought of that before!'' she said.This sounded a very good reason and Alice was quite pleased to know it ''I never thought of that before!'' she said.This sounded a very good reason and Alice was quite pleased to know it ''I never thought of that before!'' she said.This sounded a very good reason and Alice was quite pleased to know it ''I never thought of that before!'' she said.This sounded a very good reason and Alice was quite pleased to know it ''I never thought of that before!'' she said.This sounded a very good reason and Alice was quite pleased to know it ''I never thought of that before!'' she said.', NULL, 'contact@mail.com', 0, '', 0, 1),
(135, 81, 'This is where it begins', 'LOREM / LAGOSITO', 'This is not another do-it yourself website builder. The Grid harnesses the power of artificial intelligence to take everything you throw at it -videos, images, text, urls and more -and automatically shape them into a custom website unique to you.\nThis is not another do-it yourself website builder. The Grid harnesses the power of artificial intelligence to take everything you throw at it -videos, images, text, urls and more -and automatically shape them into a custom website unique to you.\nThis is not another do-it yourself website builder. The Grid harnesses the power of artificial intelligence to take everything you throw at it -videos, images, text, urls and more -and automatically shape them into a custom website unique to you.', NULL, NULL, 0, '', 27, 1),
(136, 81, 'This is where it begins', 'LOREM / LAGOSITO', 'This is not another do-it yourself website builder. The Grid harnesses the power of artificial intelligence to take everything you throw at it -videos, images, text, urls and more -and automatically shape them into a custom website unique to you.\nThis is not another do-it yourself website builder. The Grid harnesses the power of artificial intelligence to take everything you throw at it -videos, images, text, urls and more -and automatically shape them into a custom website unique to you.\nThis is not another do-it yourself website builder. The Grid harnesses the power of artificial intelligence to take everything you throw at it -videos, images, text, urls and more -and automatically shape them into a custom website unique to you.\nThis is not another do-it yourself website builder. The Grid harnesses the power of artificial intelligence to take everything you throw at it -videos, images, text, urls and more -and automatically shape them into a custom website unique to you.', NULL, NULL, 0, '', 28, 1),
(142, 83, 'Few Steps can you change your business Few Steps can you change your business', 'LOREM / LAGOSITO', 'This is not another do-it-yourself website builder. The Grid harnesses the power of artificial intelligence to take everything you throw at it - videos, images, text, urls and more and automatically shape them into a custom website unique to you. As your needs grow, it evolves with you, effortlessly adapting to your needs. The kwahoo just takes care or it. This is not another do-it-yourself website builder. This is your personal web developer.\n\nThis is not another do-it-yourself website builder. This is your personal web developer.\n\nThis is not another do-it-yourself website builder. The Grid harnesses the power of artificial intelligence to take everything you throw at it - videos, images, text, urls and more and automatically shape them into a custom website unique to you. As your needs grow, it evolves with you, effortlessly adapting to your needs. The kwahoo just takes care or it. This is not another do-it-yourself website builder. This is your personal web developer.\n\nThis is not another do-it-yourself website builder. This is your personal web developer.', NULL, NULL, 0, '', 0, 1),
(143, 83, NULL, NULL, 'This is not another do-it-yourself website builder. The Grid harnesses the power of artificial intelligence to take everything you throw at it - videos, images, text, urls and more and automatically shape them into a custom website unique to you. As your needs grow, it evolves with you, effortlessly adapting to your needs. The kwahoo just takes care or it. This is not another do-it-yourself website builder. This is your personal web developer.\r\n\r\nThis is not another do-it-yourself website builder. This is your personal web developer.', NULL, NULL, 0, '', 0, 1),
(144, 84, 'Read Clearly Read Clearly', NULL, 'Beautiful websites for small business, powered by clever technology and you. Working with kwahoo is a pleasure.From now on updating your site is something you''ll want to do.', NULL, NULL, 0, '', 29, 1),
(145, 84, 'SAVE YOUR TIME', 'glyphicon glyphicon-time', 'Baikal is a pleasure. From now on updating your site', NULL, NULL, 0, '', 0, 1),
(146, 84, 'SAVE YOUR MONEY', 'glyphicon glyphicon-usd', 'Italian sports car fabrique Ferrari has applied to list', NULL, NULL, 0, '', 0, 1),
(152, 86, 'This is not another do-it-yourself website-builder.', NULL, 'Building a website with mi pagina is like building stuff with Lego ™ Blocks\nBuilding a website with mi pagina is like building stuff with Lego ™ Blocks\nBuilding a website with mi pagina is like building stuff with Lego ™ Blocks\nBuilding a website with mi pagina is like building stuff with Lego ™ Blocks\nBuilding a website with mi pagina is like building stuff with Lego ™ Blocks', 'hedr8aTd7NI', NULL, 0, '', 0, 1),
(153, 87, 'Contact us', 'Address', 'Studio Tigres GmbH\r\nEifflerstrabe 43\r\n22769 Hamburg\r\nGermany\r\nmail@studiotigres.com\r\n(+49) 151 2123 6390\r\n', NULL, 'mail@studiotigres.com', 0, '', 0, 1),
(154, 87, NULL, 'Address', 'Studio Tigres GmbH\r\nEifflerstrabe 43\r\n22769 Hamburg\r\nGermany\r\nmail@studiotigres.com\r\n(+49) 151 2123 6390\r\n', NULL, NULL, 0, '', 0, 1),
(155, 87, 'Get in touch', 'Send', 'Yes, I want to recive the newsletter', NULL, NULL, 0, '', 0, 1),
(156, 88, 'Contact us', 'Address', 'Studio Tigres GmbH\r\nEifflerstrabe 43\r\n22769 Hamburg\r\nGermany\r\nmail@studiotigres.com\r\n(+49) 151 2123 6390\r\n', NULL, 'https://www.google.com/maps/embed/v1/place?q=Eifflerstraße+43,+22769,+Hamburg,+Germany&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU', 0, '', 0, 1),
(157, 88, NULL, 'Address', 'Studio Tigres GmbH\r\nEifflerstrabe 43\r\n22769 Hamburg\r\nGermany\r\nmail@studiotigres.com\r\n(+49) 151 2123 6390\r\n', NULL, NULL, 0, '', 0, 1),
(161, 90, 'Nuestra forma de trabajar Nuestra forma de trabajar Nuestra forma de trabajar', 'ur adipiscing elit. Donec suscipit porta ex, at rutrum sapien porttitor non. Maecenas dignissim dignissim gravida. Integer ut varius odio. Suspendisse malesuad malesuad malesuada ultrices nu', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec suscipit porta ex, at rutrum sapien porttitor non. Maecenas dignissim dignissim gravida. Integer ut varius odio. Suspendisse malesuada ultrices nulla a lacinia. Vestibulum bibendum, nulla faucibus molestie tempus, magna justo egestas est, vel ornare nisi odio laoreet turpis. Vivamus ex mi, lacinia ut viverra in, maximus a felis. Aenean a lectus ex. Donec ultrices sapien ut ex venenatis auctor. ', NULL, NULL, 0, '', 0, 1),
(162, 90, NULL, 'Pegale en la cara', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec suscipit porta ex, at rutrum sapien porttitor non. Maecenas dignissim dignissim gravida. Integer ut varius odio. Suspendisse malesuada ultrices nulla a lacinia. Vestibulum bibendum, nulla faucibus molestie tempus, magna justo egestas est, vel ornare nisi odio laoreet turpis. Vivamus ex mi, lacinia ut viverra in, maximus a felis. Aenean a lectus ex. Donec ultrices sapien ut ex venenatis auctor.\n', NULL, NULL, 0, '', 0, 1),
(163, 90, NULL, 'Cobrale por haberle pegado', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec suscipit porta ex, at rutrum sapien porttitor non. Maecenas dignissim dignissim gravida. Integer ut varius odio. Suspendisse malesuada ultrices nulla a lacinia. Vestibulum bibendum, nulla faucibus molestie tempus, magna justo egestas est, vel ornare nisi odio laoreet turpis. Vivamus ex mi, lacinia ut viverra in, maximus a felis. Aenean a lectus ex. Donec ultrices sapien ut ex venenatis auctor. ', NULL, NULL, 0, '', 0, 1),
(164, 90, NULL, 'What is the status of my purpuche?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec suscipit porta ex, at rutrum sapien porttitor non. Maecenas dignissim dignissim gravida. Integer ut varius odio. Suspendisse malesuada ultrices nulla a lacinia. Vestibulum bibendum, nulla faucibus molestie tempus, magna justo egestas est, vel ornare nisi odio laoreet turpis. Vivamus ex mi, lacinia ut viverra in, maximus a felis. Aenean a lectus ex. Donec ultrices sapien ut ex venenatis auctor. ', NULL, NULL, 0, '', 0, 1),
(165, 91, 'mi pagina Portfolio', 'LOREM / LAGOSITO', NULL, NULL, NULL, 0, '', 0, 1),
(169, 97, 'Lorem Ipsumni', 'Nuestros Partners', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', NULL, NULL, 0, '', 30, 1),
(170, 98, 'This is where it begins', 'lorem / lagosito', 'Where you start your online store,  tell your story and make your mark. Where you discovr and shop products you can''t find anywhere else - and help brands that are going places get going.\n\nWhere you start your online store,  tell your story and make your mark. Where you discovr and shop products you can''t find anywhere else - and help brands that are going places get going.\n\nWhere you start your online store,  tell your story and make your mark. Where you discovr and shop products you can''t find anywhere else - and help brands that are going places get going.', 'DOWNLOAD CATALOG DOWNLOAD CATALOG ', 'content131', 0, '', 0, 1),
(171, 99, 'This is where it begins', 'lorem / lagosito', 'Where you start your online store,  tell your story and make your mark. Where you discovr and shop products you can''t find anywhere else - and help brands that are going places get going.\n\nWhere you start your online store,  tell your story and make your mark. Where you discovr and shop products you can''t find anywhere else - and help brands that are going places get going.\n\nWhere you start your online store,  tell your story and make your mark. Where you discovr and shop products you can''t find anywhere else - and help brands that are going places get going.\n\nWhere you start your online store,  tell your story and make your mark. Where you discovr and shop products you can''t find anywhere else - and help brands that are going places get going.', 'DOWNLOAD CATALOG', 'content14', 0, '', 0, 1),
(172, 100, 'This is not a website builder. This is not a website builder.', NULL, 'This is not another do-it yourself website builder. The Grid harnesses the power of artificial intelligence to take everything you throw at it -videos, images, text, urls and more.\nThis is not another do-it yourself website builder. The Grid harnesses the power of artificial intelligence to take everything you throw at it -videos, images, text, urls and more.\nThis is not another do-it yourself website builder. The Grid harnesses the power of artificial intelligence to take everything you throw at it -videos, images, text, urls and more.', NULL, NULL, 0, '', 31, 1),
(173, 100, 'This is your web developer.', NULL, 'This is not another do-it yourself website builder. The Grid harnesses the power of artificial intelligence to take everything you throw at it -videos, images, text, urls and more.', NULL, NULL, 0, '', 32, 1),
(174, 101, 'Helping everyday small business to grow more  Helping everyday small business to grow more', NULL, 'This is not another do-it yourself website builder. The Grid harnesses the power of artificial intelligence to take everything you throw at it -videos, images, text, urls and more -and automatically shape them into a custom website unique to you. As you needs to grow, it evolves with you, effortlessly adapting to your needs. The kwahoo just takes care of it. This is not a website builder. This is your personal web developer.\n\nThis is not another do-it yourself website builder. The Grid harnesses the power of artificial intelligence to take everything you throw at it -videos, images, text, urls and more -and automatically shape them into a custom website unique to you. As you needs to grow, it evolves with you, effortlessly adapting to your needs. The kwahoo just takes care of it. This is not a website builder. This is your personal web developer.', 'hedr8aTd7NI', NULL, 0, '', 0, 1),
(175, 102, 'Demo Version Demo Version Demo Version', 'view awesome project view awesome project', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\n\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\n\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\n\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'bcpLItnzKmI', 'inicio', 0, '', 0, 1),
(176, 103, 'Lorem Ipsum O Dolore Lagosimu Lorem Ipsum O Dolore Lagosimu', 'LOREM IPSUM LAGOSITI', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed diam nonumy eirmod\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed diam nonumy eirmod\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed diam nonumy eirmod\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed diam nonumy eirmod\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed diam nonumy eirmod\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed diam nonumy eirmod\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed diam nonumy eirmod\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed diam nonumy eirmod\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed diam nonumy eirmod\n', 'Leer Articulo Leer Articulo', 'inicio', 0, '', 0, 1),
(177, 103, 'Metodology:', 'Clients Base Research, User experience research, A-B-Tests', 'Lorem ipsum dolor sit amet, mea modo malis equidem ei, in eum apeirian sadipscing. Postea graecis pri at. At vis eripuit explicari, in pro nostrud appetere. Possit dolorem euripidis ex duo, duis iuvaret inciderint id nec. Ferri invidunt repudiandae nec et, eum te sale facilisi explicari, his eruditi pertinax dignissim an. Putent molestie cu qui, ea debitis omnesque abhorreant vel, cu mel dicit dolorem. Mea malorum aliquando omittantur ea. No summo accusata efficiendi vix, esse iriure meliore ut vix. Nec summo delenit adolescens ei, mei unum dicat maiestatis ex. His malis placerat hendrerit id, unum ludus maiorum eu eum.\nLorem ipsum dolor sit amet, mea modo malis equidem ei, in eum apeirian sadipscing. Postea graecis pri at. At vis eripuit explicari, in pro nostrud appetere. Possit dolorem euripidis ex duo, duis iuvaret inciderint id nec. Ferri invidunt repudiandae nec et, eum te sale facilisi explicari, his eruditi pertinax dignissim an. Putent molestie cu qui, ea debitis omnesque abhorreant vel, cu mel dicit dolorem. Mea malorum aliquando omittantur ea. No summo accusata efficiendi vix, esse iriure meliore ut vix. Nec summo delenit adolescens ei, mei unum dicat maiestatis ex. His malis placerat hendrerit id, unum ludus maiorum eu eum.', NULL, NULL, 0, '', 0, 1),
(178, 104, 'Lorem Ipsum', NULL, 'Lorem ipsum dolor sit amet, mea modo malis equidem ei, in eum apeirian sadipscing. Postea graecis pri at. At vis eripuit explicari, in pro nostrud appetere. Possit dolorem euripidis ex duo, duis iuvaret inciderint id nec. Ferri invidunt repudiandae nec et, eum te sale facilisi explicari, his eruditi pertinax dignissim an. Putent molestie cu qui, ea debitis omnesque abhorreant vel, cu mel dicit dolorem.\r\n\r\nMea malorum aliquando omittantur ea. No summo accusata efficiendi vix, esse iriure meliore ut vix. Nec summo delenit adolescens ei, mei unum dicat maiestatis ex. His malis placerat hendrerit id, unum ludus maiorum eu eum.\r\n\r\nPri in inani possit suscipiantur. Brute etiam qui ex. At tritani disputationi est, no has idque iusto temporibus. Te nonumy graeci detracto mel, pro no tale phaedrum. Tation iisque salutatus pro ex, justo verterem insolens ut pri.\r\n\r\nMel ad summo sensibus vulputate. Et tota quidam sea, has in sonet laoreet maiorum. Cum dictas forensibus in, nam ad tale saperet. Eum ex illud eruditi, per sanctus concludaturque an. Te pro sonet legimus molestie.\r\n\r\nSea mutat commodo ne, his alterum recusabo te. At aeterno tacimates qui, congue noster comprehensam eam te. Ut repudiare consectetuer vix. Te eos prima viris, liber consulatu ut eam.', NULL, NULL, 0, '', 33, 1),
(179, 105, 'Our Crew', 'Join our team', NULL, NULL, '', 0, '', 0, 1),
(182, 109, NULL, 'address', 'Studio Tigres GmbH\r\nEifflerstrabe 43\r\n22769 Hamburg\r\nGermany\r\nmail@studiotigres.com\r\n(+49) 151 2123 6390', NULL, NULL, 0, '', 0, 1),
(183, 109, NULL, 'address', 'Studio Tigres GmbH\r\nEifflerstrabe 43\r\n22769 Hamburg\r\nGermany\r\nmail@studiotigres.com\r\n(+49) 151 2123 6390', NULL, NULL, 0, '', 0, 1),
(184, 109, 'Contact us', 'Send Message', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.', NULL, NULL, 0, '', 0, 1),
(185, 110, 'Contact Us', NULL, 'She was bouncing away, when a city from the two women, who has turned towards the bed causes her to look around.', NULL, NULL, 0, '', 0, 1),
(186, 110, 'Send a message', 'send', 'Yes, I want to recive the newspaper', NULL, NULL, 0, '', 0, 1),
(187, 110, 'Contact Information', 'address', 'Studio Tigres GmbH\nEifflerstrabe 43\n22769 Hamburg\nGermany', NULL, NULL, 0, '', 0, 1),
(188, 110, NULL, 'e-mail', 'mail', NULL, NULL, 0, '', 0, 1),
(189, 110, NULL, 'PHONE', '', NULL, NULL, 0, '', 0, 1),
(190, 111, 'Hola', NULL, 'Studio Tigres GmbH Eifflerstrabe 43\r\n22769 Hamburg Germany\r\n\r\n(+49) 151 2123 6390\r\n\r\n', NULL, 'https://www.google.com/maps/embed/v1/place?q=Eifflerstraße+43,+22769,+Hamburg,+Germany&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU', 0, '', 0, 1),
(207, 117, 'Hola', NULL, 'Studio Tigres GmbH Eifflerstrabe 43\r\n22769 Hamburg Germany\r\n\r\n(+49) 151 2123 6390', NULL, NULL, 0, '', 0, 1),
(208, 118, 'Lorem Ipsum O Dolore Lagosimu Hamburg Lorem Lorem Ipsum O Dolore Lagosimu Hamburg Lorem', NULL, NULL, NULL, NULL, 0, '', 0, 1),
(209, 120, 'Promos y Rayos', NULL, NULL, NULL, NULL, 0, '', 34, 1),
(245, 147, 'Five minutes are enough to make your page', 'STUDIO TIGRES & KWAHOO', 'MAKE YOUR SITE NOW', NULL, 'inicio', 0, '', 0, 1),
(247, 149, 'About us', 'Subscribe us', 'This sounded a very good reason, and Alice was quited pleased to know it. "I never thought of that before!" She said.', NULL, NULL, 0, '', 0, 1),
(294, 170, 'Lorem Ipsumni', 'Nuestros Partners', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', NULL, NULL, 0, '', 36, 1),
(295, 171, 'This is where it begins', 'lorem / lagosito', 'Where you start your online store,  tell your story and make your mark. Where you discovr and shop products you can''t find anywhere else - and help brands that are going places get going.\n\nWhere you start your online store,  tell your story and make your mark. Where you discovr and shop products you can''t find anywhere else - and help brands that are going places get going.\n\nWhere you start your online store,  tell your story and make your mark. Where you discovr and shop products you can''t find anywhere else - and help brands that are going places get going.\n\nWhere you start your online store,  tell your story and make your mark. Where you discovr and shop products you can''t find anywhere else - and help brands that are going places get going.', 'DOWNLOAD CATALOG', 'content131', 0, '', 0, 1),
(296, 172, 'This is where it begins', 'lorem / lagosito', 'Where you start your online store,  tell your story and make your mark. Where you discovr and shop products you can''t find anywhere else - and help brands that are going places get going.\n\nWhere you start your online store,  tell your story and make your mark. Where you discovr and shop products you can''t find anywhere else - and help brands that are going places get going. Where you start your online store,  tell your story and make your mark. Where you discovr and shop products you can''t find anywhere else - and help brands that are going places get going.\n\nWhere you start your online store,  tell your story and make your mark. Where you discovr and shop products you can''t find anywhere else - and help brands that are going places get going.Where you start your online store,  tell your story and make your mark. Where you discovr and shop products you can''t find anywhere else - and help brands that are going places get going.\n\nWhere you start your online store,  tell your story and make your mark. Where you discovr and shop products you can''t find anywhere else - and help brands that are going places get going.', 'DOWNLOAD CATALOG', 'content14', 0, '', 0, 1),
(297, 173, 'Nuestra forma de trabajar', 'Meet the client', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec suscipit porta ex, at rutrum sapien porttitor non. Maecenas dignissim dignissim gravida. Integer ut varius odio. Suspendisse malesuada ultrices nulla a lacinia. Vestibulum bibendum, nulla faucibus molestie tempus, magna justo egestas est, vel ornare nisi odio laoreet turpis. Vivamus ex mi, lacinia ut viverra in, maximus a felis. Aenean a lectus ex. Donec ultrices sapien ut ex venenatis auctor. ', NULL, NULL, 0, '', 0, 1),
(298, 173, NULL, 'Pegale en la cara', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec suscipit porta ex, at rutrum sapien porttitor non. Maecenas dignissim dignissim gravida. Integer ut varius odio. Suspendisse malesuada ultrices nulla a lacinia. Vestibulum bibendum, nulla faucibus molestie tempus, magna justo egestas est, vel ornare nisi odio laoreet turpis. Vivamus ex mi, lacinia ut viverra in, maximus a felis. Aenean a lectus ex. Donec ultrices sapien ut ex venenatis auctor. ', NULL, NULL, 0, '', 0, 1),
(299, 173, NULL, 'Cobrale por haberle pegado', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec suscipit porta ex, at rutrum sapien porttitor non. Maecenas dignissim dignissim gravida. Integer ut varius odio. Suspendisse malesuada ultrices nulla a lacinia. Vestibulum bibendum, nulla faucibus molestie tempus, magna justo egestas est, vel ornare nisi odio laoreet turpis. Vivamus ex mi, lacinia ut viverra in, maximus a felis. Aenean a lectus ex. Donec ultrices sapien ut ex venenatis auctor. ', NULL, NULL, 0, '', 0, 1),
(300, 173, NULL, 'What is the status of my purpuche?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec suscipit porta ex, at rutrum sapien porttitor non. Maecenas dignissim dignissim gravida. Integer ut varius odio. Suspendisse malesuada ultrices nulla a lacinia. Vestibulum bibendum, nulla faucibus molestie tempus, magna justo egestas est, vel ornare nisi odio laoreet turpis. Vivamus ex mi, lacinia ut viverra in, maximus a felis. Aenean a lectus ex. Donec ultrices sapien ut ex venenatis auctor. ', NULL, NULL, 0, '', 0, 1),
(301, 174, 'mi pagina Portfolio', 'LOREM / LAGOSITO', NULL, NULL, NULL, 0, '', 0, 1),
(315, 180, 'Place for your ideas here!', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolor.', 'd4bpg65VXD0', NULL, 0, '', 0, 1),
(316, 180, 'Lorem ipsum dolore', NULL, 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr', NULL, NULL, 0, '', 0, 1),
(317, 180, 'Lorem ipsum dolore', NULL, 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr', NULL, NULL, 0, '', 0, 1),
(318, 180, 'Lorem ipsum dolore', NULL, 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr', NULL, NULL, 0, '', 0, 1),
(319, 181, 'This is not a website builder.', NULL, 'This is not another do-it yourself website builder. The Grid harnesses the power of artificial intelligence to take everything you throw at it -videos, images, text, urls and more.', NULL, NULL, 0, '', 37, 1),
(320, 181, 'This is your web developer.', NULL, 'This is not another do-it yourself website builder. The Grid harnesses the power of artificial intelligence to take everything you throw at it -videos, images, text, urls and more.', NULL, NULL, 0, '', 38, 1),
(321, 182, 'mi pagina Portfolio', 'LOREM / LAGOSITO', NULL, NULL, NULL, 0, '', 0, 1),
(322, 183, 'Our Crew', 'Join our team', NULL, NULL, NULL, 0, '', 0, 1),
(323, 184, 'Lorem Ipsum O Dolore Lagosimu Hamburg Lorem', NULL, NULL, NULL, NULL, 0, '', 0, 1),
(324, 185, 'Hola', NULL, 'Studio Tigres GmbH Eifflerstrabe 43\r\n22769 Hamburg Germany\r\n\r\n(+49) 151 2123 6390', NULL, NULL, 0, '', 0, 1),
(325, 186, 'Subscribe Our Newsletter', 'Subscribe', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation', NULL, NULL, 0, '', 0, 1),
(326, 187, 'Lorem Ipsum O Dolore Lagosimu', 'LOREM IPSUM LAGOSITI', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed diam nonumy eirmod', 'Leer Articulo', 'inicio', 0, '', 0, 1),
(327, 187, 'Metodology:', 'Clients Base Research, User experience research, A-B-Tests', 'Lorem ipsum dolor sit amet, mea modo malis equidem ei, in eum apeirian sadipscing. Postea graecis pri at. At vis eripuit explicari, in pro nostrud appetere. Possit dolorem euripidis ex duo, duis iuvaret inciderint id nec. Ferri invidunt repudiandae nec et, eum te sale facilisi explicari, his eruditi pertinax dignissim an. Putent molestie cu qui, ea debitis omnesque abhorreant vel, cu mel dicit dolorem. Mea malorum aliquando omittantur ea. No summo accusata efficiendi vix, esse iriure meliore ut vix. Nec summo delenit adolescens ei, mei unum dicat maiestatis ex. His malis placerat hendrerit id, unum ludus maiorum eu eum.\r\n', NULL, NULL, 0, '', 0, 1),
(328, 188, 'Lorem Ipsum O Dolore Lagosimu Hamburg Lorem', NULL, NULL, NULL, NULL, 0, '', 0, 1),
(335, 194, 'Our Crew', 'Join our team', NULL, NULL, NULL, 0, '', 0, 1),
(336, 195, 'Promos y Rayos', NULL, NULL, NULL, NULL, 0, '', 39, 1),
(351, 206, 'Five minutes are enough to make your page', 'STUDIO TIGRES & KWAHOO', 'MAKE YOUR SITE NOW', NULL, 'inicio', 0, '', 0, 1),
(352, 207, 'Read Clearly', NULL, 'Beautiful websites for small business, powered by clever technology and you. Working with kwahoo is a pleasure.From now on updating your site is something you''ll want to do.\n                        ', NULL, NULL, 0, '', 40, 1),
(353, 207, 'SAVE YOUR TIME', 'glyphicon glyphicon-time', 'Baikal is a pleasure. From now on updating your site', NULL, NULL, 0, '', 0, 1),
(354, 207, 'SAVE YOUR MONEY', 'glyphicon glyphicon-usd', 'Italian sports car fabrique Ferrari has applied to list', NULL, NULL, 0, '', 0, 1),
(355, 208, 'This is not another do-it-yourself website-builder.', NULL, 'Building a website with mi pagina is like building stuff with Lego &trade; Blocks', 'hedr8aTd7NI', NULL, 0, '', 0, 1),
(356, 209, 'Few Steps can you change your business', 'LOREM / LAGOSITO', 'This is not another do-it-yourself website builder. The Grid harnesses the power of artificial intelligence to take everything you throw at it - videos, images, text, urls and more and automatically shape them into a custom website unique to you. As your needs grow, it evolves with you, effortlessly adapting to your needs. The kwahoo just takes care or it. This is not another do-it-yourself website builder. This is your personal web developer.\r\n\r\nThis is not another do-it-yourself website builder. This is your personal web developer.', NULL, NULL, 0, '', 0, 1),
(357, 209, NULL, NULL, 'This is not another do-it-yourself website builder. The Grid harnesses the power of artificial intelligence to take everything you throw at it - videos, images, text, urls and more and automatically shape them into a custom website unique to you. As your needs grow, it evolves with you, effortlessly adapting to your needs. The kwahoo just takes care or it. This is not another do-it-yourself website builder. This is your personal web developer.\r\n\r\nThis is not another do-it-yourself website builder. This is your personal web developer.', NULL, NULL, 0, '', 0, 1),
(358, 210, 'Subscribe Our Newsletter', 'Subscribe', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation', NULL, NULL, 0, '', 0, 1),
(359, 215, 'Many Articles', NULL, 'This is not another do-it yourself website builder. The Grid harnesses the power of artificial intelligence to take everything you throw at it -videos, images, text, urls and more -and automatically shape them into a custom', NULL, NULL, 0, '', 41, 1),
(360, 215, NULL, 'SAVE YOUR TIME', 'This is not another do-it yourself website', NULL, NULL, 0, '', 0, 1),
(361, 215, NULL, 'SAVE YOUR MONEY', 'This is not another do-it yourself website', NULL, NULL, 0, '', 0, 1),
(362, 216, 'This is where it begins', 'LOREM / LAGOSITO', 'This is not another do-it yourself website builder. The Grid harnesses the power of artificial intelligence to take everything you throw at it -videos, images, text, urls and more -and automatically shape them into a custom website unique to you.', NULL, NULL, 0, '', 42, 1),
(363, 216, 'This is where it begins', 'LOREM / LAGOSITO', 'This is not another do-it yourself website builder. The Grid harnesses the power of artificial intelligence to take everything you throw at it -videos, images, text, urls and more -and automatically shape them into a custom website unique to you.', NULL, NULL, 0, '', 43, 1),
(364, 217, 'Subscribe Our Newsletter', 'Subscribe', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation', NULL, NULL, 0, '', 0, 1),
(365, 218, 'New and best way to build your site.', 'SOLICITAR DEMO', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.', NULL, 'Contacto', 0, '', 0, 1),
(366, 219, 'This is where it begins', 'LOREM / LAGOSITO', 'This is not another do-it yourself website builder. The Grid harnesses the power of artificial intelligence to take everything you throw at it -videos, images, text, urls and more -and automatically shape them into a custom website unique to you.', NULL, NULL, 0, '', 44, 1),
(367, 219, 'This is where it begins', 'LOREM / LAGOSITO', 'This is not another do-it yourself website builder. The Grid harnesses the power of artificial intelligence to take everything you throw at it -videos, images, text, urls and more -and automatically shape them into a custom website unique to you.', NULL, NULL, 0, '', 45, 1),
(368, 220, 'Subscribe Our Newsletter', 'Subscribe', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation', NULL, NULL, 0, '', 0, 1),
(371, 223, 'New and best way to build your site.', 'SOLICITAR DEMO', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.', NULL, 'Contacto', 0, '', 0, 1),
(372, 224, 'This is where it begins', 'LOREM / LAGOSITO', 'This is not another do-it yourself website builder. The Grid harnesses the power of artificial intelligence to take everything you throw at it -videos, images, text, urls and more -and automatically shape them into a custom website unique to you.', NULL, NULL, 0, '', 46, 1),
(373, 224, 'This is where it begins', 'LOREM / LAGOSITO', 'This is not another do-it yourself website builder. The Grid harnesses the power of artificial intelligence to take everything you throw at it -videos, images, text, urls and more -and automatically shape them into a custom website unique to you.', NULL, NULL, 0, '', 47, 1),
(374, 225, 'mi pagina Portfolio', 'LOREM / LAGOSITO', NULL, NULL, NULL, 0, '', 0, 1),
(375, 226, 'Subscribe Our Newsletter', 'Subscribe', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation', NULL, NULL, 0, '', 0, 1),
(380, 229, 'Five minutes are enough to make your page', 'STUDIO TIGRES & KWAHOO', 'MAKE YOUR SITE NOW', NULL, 'inicio', 0, '', 0, 1),
(381, 230, 'This is where it begins', 'LOREM / LAGOSITO', 'This is not another do-it yourself website builder. The Grid harnesses the power of artificial intelligence to take everything you throw at it -videos, images, text, urls and more -and automatically shape them into a custom website unique to you.', NULL, NULL, 0, '', 48, 1),
(382, 230, 'This is where it begins', 'LOREM / LAGOSITO', 'This is not another do-it yourself website builder. The Grid harnesses the power of artificial intelligence to take everything you throw at it -videos, images, text, urls and more -and automatically shape them into a custom website unique to you.', NULL, NULL, 0, '', 49, 1),
(383, 232, 'Many Articles', NULL, 'This is not another do-it yourself website builder. The Grid harnesses the power of artificial intelligence to take everything you throw at it -videos, images, text, urls and more -and automatically shape them into a custom', NULL, NULL, 0, '', 50, 1),
(384, 232, NULL, 'SAVE YOUR TIME', 'This is not another do-it yourself website', NULL, NULL, 0, '', 0, 1),
(385, 232, NULL, 'SAVE YOUR MONEY', 'This is not another do-it yourself website', NULL, NULL, 0, '', 0, 1),
(386, 233, 'This is where it begins', 'LOREM / LAGOSITO', 'This is not another do-it yourself website builder. The Grid harnesses the power of artificial intelligence to take everything you throw at it -videos, images, text, urls and more -and automatically shape them into a custom website unique to you.', NULL, NULL, 0, '', 51, 1),
(387, 233, 'This is where it begins', 'LOREM / LAGOSITO', 'This is not another do-it yourself website builder. The Grid harnesses the power of artificial intelligence to take everything you throw at it -videos, images, text, urls and more -and automatically shape them into a custom website unique to you.', NULL, NULL, 0, '', 52, 1),
(388, 234, 'Our Crew', 'Join our team', NULL, NULL, NULL, 0, '', 0, 1),
(462, 292, 'Five minutes are enough to make your page', 'STUDIO TIGRES & KWAHOO', 'MAKE YOUR SITE NOW', NULL, 'inicio', 0, '', 0, 1),
(463, 293, 'This is where it begins', 'LOREM / LAGOSITO', 'This is not another do-it yourself website builder. The Grid harnesses the power of artificial intelligence to take everything you throw at it -videos, images, text, urls and more -and automatically shape them into a custom website unique to you.', NULL, NULL, 0, '', 57, 1),
(464, 293, 'This is where it begins', 'LOREM / LAGOSITO', 'This is not another do-it yourself website builder. The Grid harnesses the power of artificial intelligence to take everything you throw at it -videos, images, text, urls and more -and automatically shape them into a custom website unique to you.', NULL, NULL, 0, '', 58, 1),
(465, 294, 'mi pagina Portfolio', 'LOREM / LAGOSITO', NULL, NULL, NULL, 0, '', 0, 1),
(466, 295, NULL, 'address', 'Studio Tigres GmbH\r\nEifflerstrabe 43\r\n22769 Hamburg\r\nGermany\r\nmail@studiotigres.com\r\n(+49) 151 2123 6390', NULL, NULL, 0, '', 0, 1),
(467, 295, NULL, 'address', 'Studio Tigres GmbH\r\nEifflerstrabe 43\r\n22769 Hamburg\r\nGermany\r\nmail@studiotigres.com\r\n(+49) 151 2123 6390', NULL, NULL, 0, '', 0, 1),
(468, 295, 'Contact us', 'Send Message', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.', NULL, NULL, 0, '', 0, 1),
(469, 296, 'Subscribe Our Newsletter', 'Subscribe', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation', NULL, NULL, 0, '', 0, 1),
(477, 304, 'Many Articles', NULL, 'This is not another -it yourself website builder. The Grid harnesses the power of artificial intelligence to take everything you throw at it -videos, images, text, urls and more -and automatically shape them into a custom', NULL, NULL, 0, '', 59, 1),
(478, 304, NULL, 'SAVE YOUR TIME', 'This is not another do-it yourself website', NULL, NULL, 0, '', 0, 1),
(479, 304, NULL, 'SAVE YOUR MONEY', 'This is not another do-it yourself website', NULL, NULL, 0, '', 0, 1),
(480, 305, 'This is where it begins', 'LOREM / LAGOSITO', 'This is not another do-it yourself website builder. The Grid harnesses the power of artificial intelligence to take everything you throw at it -videos, images, text, urls and more -and automatically shape them into a custom website unique to you.', NULL, NULL, 0, '', 60, 1),
(481, 305, 'This is where it begins', 'LOREM / LAGOSITO', 'This is not another do-it yourself website builder. The Grid harnesses the power of artificial intelligence to take everything you throw at it -videos, images, text, urls and more -and automatically shape them into a custom website unique to you.', NULL, NULL, 0, '', 61, 1),
(482, 306, 'Few Steps can you change your business', 'LOREM / LAGOSITO', 'This is not another do-it-yourself website builder. The Grid harnesses the power of artificial intelligence to take everything you throw at it - videos, images, text, urls and more and automatically shape them into a custom website unique to you. As your needs grow, it evolves with you, effortlessly adapting to your needs. The kwahoo just takes care or it. This is not another do-it-yourself website builder. This is your personal web developer.\r\n\r\nThis is not another do-it-yourself website builder. This is your personal web developer.', NULL, NULL, 0, '', 0, 1),
(483, 306, NULL, NULL, 'This is not another do-it-yourself website builder. The Grid harnesses the power of artificial intelligence to take everything you throw at it - videos, images, text, urls and more and automatically shape them into a custom website unique to you. As your needs grow, it evolves with you, effortlessly adapting to your needs. The kwahoo just takes care or it. This is not another do-it-yourself website builder. This is your personal web developer.\r\n\r\nThis is not another do-it-yourself website builder. This is your personal web developer.', NULL, NULL, 0, '', 0, 1),
(484, 307, 'Subscribe Our Newsletter', 'Subscribe', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation', NULL, NULL, 0, '', 0, 1),
(504, 310, 'mi pagina Portfolio', 'LOREM / LAGOSITO', NULL, NULL, NULL, 0, '', 0, 1),
(507, 313, 'Hola Que Tal', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolor.', 'd4bpg65VXD0', NULL, 0, '', 0, 1),
(508, 313, 'Lorem ipsum dolore', NULL, 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr', NULL, NULL, 0, '', 0, 1),
(509, 313, 'Lorem ipsum dolore', NULL, 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr', NULL, NULL, 0, '', 0, 1),
(510, 313, 'Lorem ipsum dolore', NULL, 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr', NULL, NULL, 0, '', 0, 1),
(511, 314, 'Contact us', 'Address', 'Studio Tigres GmbH\r\nEifflerstrabe 43\r\n22769 Hamburg\r\nGermany\r\nmail@studiotigres.com\r\n(+49) 151 2123 6390\r\n', NULL, 'mail@studiotigres.com', 0, '', 0, 1),
(512, 314, NULL, 'Address', 'Studio Tigres GmbH\r\nEifflerstrabe 43\r\n22769 Hamburg\r\nGermany\r\nmail@studiotigres.com\r\n(+49) 151 2123 6390\r\n', NULL, NULL, 0, '', 0, 1),
(513, 314, 'Get in touch', 'Send', 'Yes, I want to recive the newsletter', NULL, NULL, 0, '', 0, 1),
(515, 316, 'Many Articles', NULL, 'This is not another do-it yourself website builder. The Grid harnesses the power of artificial intelligence to take everything you throw at it -videos, images, text, urls and more -and automatically shape them into a custom', NULL, NULL, 0, '', 64, 1),
(516, 316, NULL, 'SAVE YOUR TIME', 'This is not another do-it yourself website', NULL, NULL, 0, '', 0, 1),
(517, 316, NULL, 'SAVE YOUR MONEY', 'This is not another do-it yourself website', NULL, NULL, 0, '', 0, 1);
INSERT INTO `pry_modulo_estructura` (`id`, `id_modulo`, `titulo`, `subtitulo`, `comentario`, `video`, `url`, `es_url_externo`, `url_texto`, `id_pry_modulo_estructura_img`, `id_idioma`) VALUES
(519, 319, 'CREATIVE CONSULTING COLLECTIVE\nBERLIN    AMSTERDAM    NEW YORK', NULL, '<br><br>1kg is a creative consulting collective with an active international reach. Merging boundaries between creativity, communication and activation… delivering timeless, valued weight for a fast-paced interconnected social landscape. Always focusing on the interaction between people and multidisciplinary brand.<br><br><div>SERVICES<br><br></div><div><div>research through experience - culture &amp; partnerships - trend &amp; innovation consulting -&nbsp;</div><div>content production - new market strategy</div></div><div><br></div><div>SELECTED CLIENTS<br><br></div><div>vans, ikea, muun, vanmoof<br><br></div><div>WORKING WITH &amp; FOR<br><br></div><div>ikonotv, aesop, tiger beer, agora, design hotels, lava laboratory visionary architecture, studio miessen, marvis, d.sgnwerk, haw-Iin services, thismemento<br><br>CONTACT<br><br></div>info@1-k-g.com<br><br>', NULL, NULL, 0, 'ABOUT', 0, 1),
(520, 319, NULL, 'SERVICES', 'research through experience - culture & partnerships - trend & innovation consulting - \ncontent production - new market strategy', NULL, NULL, 0, '', 0, 1),
(521, 319, NULL, 'SELECTED CLIENTS', 'vans, ikea, muun, vanmoof', NULL, NULL, 0, '', 0, 1),
(522, 319, NULL, 'WORKING WITH & FOR', 'ikonotv, aesop, tiger beer, agora, design hotels, lava laboratory visionary architecture, studio miessen, marvis, d.sgnwerk, haw-Iin services, thismemento', NULL, NULL, 0, '', 0, 1),
(533, 326, 'New and best way to build your site.', 'studio tigres presents', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.', NULL, NULL, 0, '', 0, 1),
(534, 327, 'This is where it begins', 'LOREM / LAGOSITO', 'This is not another do-it yourself website builder. The Grid harnesses the power of artificial intelligence to take everything you throw at it -videos, images, text, urls and more -and automatically shape them into a custom website unique to you.', NULL, NULL, 0, '', 67, 1),
(535, 327, 'This is where it begins', 'LOREM / LAGOSITO', 'This is not another do-it yourself website builder. The Grid harnesses the power of artificial intelligence to take everything you throw at it -videos, images, text, urls and more -and automatically shape them into a custom website unique to you.', NULL, NULL, 0, '', 68, 1),
(536, 328, 'Subscribe Our Newsletter', 'Subscribe', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation', NULL, NULL, 0, '', 0, 1),
(537, 329, 'More power for your bussiness', '1 min 40 sec', 'This is not another do-it yourself website builder. The Grid harnesses the power of artificial intelligence to take everything you throw at it -videos, images, text, urls and more -and automatically shape them into a custom This is not another do-it yourself website builder. The Grid harnesses the power of artificial intelligence to take everything you throw at it -videos, images, text, urls and more -and automatically shape them into a custom', NULL, ' See mipagina in action ', 0, '', 69, 1),
(572, 351, 'Place for your ideas here!', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolor.', 'd4bpg65VXD0', NULL, 0, '', 0, 1),
(573, 351, 'Lorem ipsum dolore', NULL, 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr', NULL, NULL, 0, '', 0, 1),
(574, 351, 'Lorem ipsum dolore', NULL, 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr', NULL, NULL, 0, '', 0, 1),
(575, 351, 'Lorem ipsum dolore', NULL, 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr', NULL, NULL, 0, '', 0, 1),
(734, 478, 'Few Steps can you change your business', 'LOREM / LAGOSITO', 'This is not another do-it-yourself website builder. The Grid harnesses the power of artificial intelligence to take everything you throw at it - videos, images, text, urls and more and automatically shape them into a custom website unique to you. As your needs grow, it evolves with you, effortlessly adapting to your needs. The kwahoo just takes care or it. This is not another do-it-yourself website builder. This is your personal web developer.\r\n\r\nThis is not another do-it-yourself website builder. This is your personal web developer.', NULL, NULL, 0, '', 0, 1),
(735, 478, NULL, NULL, 'This is not another do-it-yourself website builder. The Grid harnesses the power of artificial intelligence to take everything you throw at it - videos, images, text, urls and more and automatically shape them into a custom website unique to you. As your needs grow, it evolves with you, effortlessly adapting to your needs. The kwahoo just takes care or it. This is not another do-it-yourself website builder. This is your personal web developer.\r\n\r\nThis is not another do-it-yourself website builder. This is your personal web developer.', NULL, NULL, 0, '', 0, 1),
(741, 484, 'mi pagina Portfolio', 'LOREM / LAGOSITO', NULL, NULL, NULL, 0, '', 0, 1),
(742, 485, 'ÚNETE  Y SE PARTE DE  NUESTRO \r\nGRAN EQUIPO!', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam odio nunc, tempor interdum auctor rutrum, accumsan ut urna.', 'Postula  aquí', '', 0, 'Postula  aquí', 113, 1),
(769, 501, NULL, NULL, NULL, NULL, 'http://www.laborum.pe', 0, '', 0, 1),
(770, 503, 'Place for your ideas here!', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolor.', 'd4bpg65VXD0', NULL, 0, '', 0, 1),
(771, 503, 'Lorem ipsum dolore', NULL, 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr', NULL, NULL, 0, '', 0, 1),
(772, 503, 'Lorem ipsum dolore', NULL, 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr', NULL, NULL, 0, '', 0, 1),
(773, 503, 'Lorem ipsum dolore', NULL, 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr', NULL, NULL, 0, '', 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pry_modulo_estructura_img`
--

CREATE TABLE IF NOT EXISTS `pry_modulo_estructura_img` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imagen` varchar(300) COLLATE utf8_spanish_ci DEFAULT NULL,
  `imagen_movil` varchar(300) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=120 ;

--
-- Volcado de datos para la tabla `pry_modulo_estructura_img`
--

INSERT INTO `pry_modulo_estructura_img` (`id`, `imagen`, `imagen_movil`) VALUES
(1, '', ''),
(2, '2celular.png', ''),
(3, '2localizacion.png', ''),
(4, '2mail.png', ''),
(5, '3img3.png', ''),
(6, '3img4.png', ''),
(7, '3dope1.png', ''),
(8, '3dope3.png', ''),
(9, '3lady_text1.jpg', ''),
(10, '4revista.png', ''),
(11, '4img4.png', ''),
(12, '2508_57bf492d67583.png', ''),
(13, '0609_57cf539c4c437.png', ''),
(14, '4dope3.png', ''),
(15, '4celular.png', ''),
(16, '4localizacion.png', ''),
(17, '4mail.png', ''),
(18, '4imgcel2.png', ''),
(19, '', ''),
(20, '', ''),
(21, '0610_57f68e114dda4.svg', '0610_57f68e4397439.svg'),
(22, '1409_57d9234fe537d.png', ''),
(23, '1409_57d9241fbfe25.png', ''),
(24, '1409_57d924c05a8c7.png', ''),
(25, '5dope2.png', ''),
(26, '5dope3.png', ''),
(27, '5img4.png', ''),
(28, '5img3.png', ''),
(29, '5revista.png', ''),
(30, '5img_contenido17.jpg', ''),
(31, '1409_57d95e9301039.png', ''),
(32, '1409_57d95ea2715be.png', ''),
(33, '5lady_text1.jpg', ''),
(34, '55rayos.png', ''),
(35, '3revista.png', ''),
(36, '', ''),
(37, '9dope1.png', ''),
(38, '9dope3.png', ''),
(39, '65rayos.png', ''),
(40, '11revista.png', ''),
(41, '13imgcel1.png', ''),
(42, '13img3.png', ''),
(43, '13img4.png', ''),
(44, '14img3.png', ''),
(45, '14img4.png', ''),
(46, '16img3.png', ''),
(47, '16img4.png', ''),
(48, '17img3.png', ''),
(49, '17img4.png', ''),
(50, '18imgcel1.png', ''),
(51, '18img3.png', ''),
(52, '18img4.png', ''),
(53, '3imgcel1.png', ''),
(54, '15revista.png', ''),
(55, '0212_5841f80641865.png', ''),
(56, '', ''),
(57, '21img3.png', ''),
(58, '21img4.png', ''),
(59, '22imgcel1.png', ''),
(60, '22img3.png', ''),
(61, '22img4.png', ''),
(64, '6imgcel1.png', NULL),
(67, '24img3.png', NULL),
(68, '24img4.png', NULL),
(69, '6imgcel2.png', NULL),
(72, '25dope1.png', NULL),
(73, '25dope2.png', NULL),
(74, '25dope3.png', NULL),
(75, '25img_contenido17.jpg', NULL),
(76, '25imgcel1.png', NULL),
(77, '25imgcel1.png', NULL),
(78, '25img3.png', NULL),
(79, '25img4.png', NULL),
(80, '25revista.png', NULL),
(81, '26equipo-450px.png', NULL),
(83, '27img3.png', NULL),
(84, '27img4.png', NULL),
(85, '27dope1.png', NULL),
(86, '27dope2.png', NULL),
(87, '27dope3.png', NULL),
(88, '27revista.png', NULL),
(89, '27img4.png', NULL),
(90, '27img3.png', NULL),
(91, '28imgcel2.png', NULL),
(92, '28celular.png', NULL),
(93, '28localizacion.png', NULL),
(94, '28mail.png', NULL),
(95, '29img_contenido17.jpg', NULL),
(96, '30dope1.png', NULL),
(97, '30dope3.png', NULL),
(98, '30lady_text1.jpg', NULL),
(99, '1302_58a23fda43356.jpg', '1302_58a24007c7611.jpg'),
(100, '34que-es-cite.png', NULL),
(101, '34equipo-450px.png', NULL),
(102, '35imgcel1.png', NULL),
(103, '35que-es-cite.png', NULL),
(104, '35celular.png', NULL),
(105, '35localizacion.png', NULL),
(106, '35mail.png', NULL),
(108, '37img3.png', NULL),
(109, '37img4.png', NULL),
(110, '2002_58ab388ae83c0.png', NULL),
(113, '39equipo-450px.png', NULL),
(114, '40equipo-450px.png', NULL),
(115, '27imgcel1.png', NULL),
(116, '41dope1.png', NULL),
(117, '41dope2.png', NULL),
(118, '41dope3.png', NULL),
(119, '41img_contenido17.jpg', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pry_modulo_txt`
--

CREATE TABLE IF NOT EXISTS `pry_modulo_txt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pry_modulo` int(11) NOT NULL,
  `id_idioma` int(11) NOT NULL,
  `titulo` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=373 ;

--
-- Volcado de datos para la tabla `pry_modulo_txt`
--

INSERT INTO `pry_modulo_txt` (`id`, `id_pry_modulo`, `id_idioma`, `titulo`) VALUES
(1, 1, 1, 'INICIO'),
(2, 2, 1, 'Contacto'),
(3, 3, 1, 'COLECCIÓN'),
(4, 4, 1, 'EL CONCEPTO'),
(5, 5, 1, ''),
(6, 6, 1, 'home'),
(7, 7, 1, 'Portafolio'),
(8, 8, 1, ''),
(9, 14, 1, 'content22'),
(10, 15, 1, 'content122'),
(11, 16, 1, 'content16'),
(12, 17, 1, 'tabs8'),
(13, 20, 1, 'Crew'),
(14, 22, 1, 'contact2'),
(15, 23, 1, 'contact4a'),
(16, 24, 1, 'content131'),
(17, 25, 1, 'content14'),
(18, 26, 1, 'content71'),
(19, 28, 1, 'content18'),
(20, 29, 1, 'text1'),
(21, 30, 1, 'content41'),
(22, 31, 1, 'contact1'),
(23, 32, 1, 'contact5'),
(24, 34, 1, 'Work'),
(25, 35, 1, 'About'),
(26, 36, 1, 'content71'),
(27, 37, 1, ''),
(28, 45, 1, 'map2'),
(29, 46, 1, 'content41'),
(30, 47, 1, 'footer4'),
(31, 48, 1, 'mipagina'),
(32, 57, 1, 'casitas'),
(33, 61, 1, 'nuestrosobjetivos'),
(34, 62, 1, 'nuestrametodologia'),
(35, 63, 1, 'rayo jesuita'),
(36, 65, 1, 'promo'),
(37, 67, 1, 'mi pagina'),
(38, 69, 1, 'Crew'),
(39, 70, 1, 'Expo'),
(40, 75, 1, 'Contacto'),
(41, 76, 1, 'Contacto'),
(42, 81, 1, 'About'),
(43, 83, 1, 'content7'),
(44, 84, 1, 'Work'),
(45, 86, 1, 'content12'),
(46, 87, 1, 'contact2'),
(47, 88, 1, 'contact4a'),
(48, 90, 1, 'content22'),
(49, 91, 1, 'Portafolio'),
(50, 94, 1, 'content122'),
(51, 97, 1, 'modulo17'),
(52, 98, 1, 'content131'),
(53, 99, 1, 'content14'),
(54, 100, 1, 'content71'),
(55, 101, 1, 'content8'),
(56, 102, 1, 'content16'),
(57, 103, 1, 'content18'),
(58, 104, 1, 'text1'),
(59, 105, 1, 'tabs8'),
(60, 106, 1, 'quienessomos'),
(61, 107, 1, 'Como ayudar'),
(62, 109, 1, 'contact1'),
(63, 110, 1, 'contact5'),
(64, 111, 1, 'map2'),
(65, 117, 1, 'map2a'),
(66, 118, 1, 'slidertextos'),
(67, 120, 1, 'promo'),
(68, 121, 1, 'rayo jesuita'),
(69, 147, 1, 'mi pagina'),
(70, 149, 1, 'footer4'),
(71, 151, 1, 'Work'),
(72, 152, 1, 'content41'),
(73, 170, 1, 'modulo17'),
(74, 171, 1, 'content131'),
(75, 172, 1, 'content14'),
(76, 173, 1, 'content22'),
(77, 174, 1, 'Portafolio'),
(78, 180, 1, 'mi pagina'),
(79, 181, 1, 'content71'),
(80, 182, 1, 'Portafolio'),
(81, 183, 1, 'tabs8'),
(82, 184, 1, 'slidertextos'),
(83, 185, 1, 'map2a'),
(84, 186, 1, 'footer3'),
(85, 187, 1, 'content18'),
(86, 188, 1, 'slidertextos'),
(87, 192, 1, 'logros'),
(88, 193, 1, 'intro'),
(89, 194, 1, 'tabs8'),
(90, 195, 1, 'promo'),
(91, 196, 1, 'rayo jesuita'),
(92, 197, 1, 'Cabecera'),
(93, 198, 1, 'content122'),
(94, 199, 1, 'Pie'),
(95, 201, 1, 'Como ayudar'),
(96, 206, 1, 'mi pagina'),
(97, 207, 1, 'Work'),
(98, 208, 1, 'content12'),
(99, 209, 1, 'content7'),
(100, 210, 1, 'footer3'),
(101, 211, 1, 'Cabecera'),
(102, 212, 1, 'content122'),
(103, 214, 1, 'Contacto'),
(104, 215, 1, 'mi pagina'),
(105, 216, 1, 'Crew'),
(106, 217, 1, 'footer3'),
(107, 218, 1, 'mipagina'),
(108, 219, 1, 'Crew'),
(109, 220, 1, 'footer3'),
(110, 222, 1, 'Como ayudar'),
(111, 223, 1, 'mipagina'),
(112, 224, 1, 'Crew'),
(113, 225, 1, 'Portafolio'),
(114, 226, 1, 'footer3'),
(115, 229, 1, 'mi pagina'),
(116, 230, 1, 'Crew'),
(117, 231, 1, 'Contacto'),
(118, 232, 1, 'mi pagina'),
(119, 233, 1, 'Crew'),
(120, 234, 1, 'tabs8'),
(121, 235, 1, 'Contacto'),
(122, 236, 1, 'Cabecera'),
(123, 237, 1, 'studiot'),
(124, 238, 1, 'Pie'),
(125, 239, 1, 'Portafolio'),
(126, 240, 1, 'Portafolio'),
(127, 241, 1, 'content12'),
(128, 248, 1, 'mi pagina'),
(129, 256, 1, 'mi pagina'),
(130, 259, 1, 'mi pagina'),
(131, 261, 1, 'mi pagina'),
(132, 262, 1, 'Work'),
(133, 263, 1, 'Contacto'),
(134, 264, 1, 'content12'),
(135, 265, 1, 'content41'),
(136, 266, 1, 'content41'),
(137, 267, 1, 'mipagina'),
(138, 269, 1, 'Inicio'),
(139, 276, 1, ''),
(140, 282, 1, 'Nosotros'),
(141, 283, 1, 'Nosotros'),
(142, 284, 1, ''),
(143, 285, 1, 'beneficios'),
(144, 287, 1, ''),
(145, 288, 1, 'Noticias'),
(146, 289, 1, 'Clientes'),
(147, 292, 1, 'mi pagina'),
(148, 293, 1, 'Crew'),
(149, 294, 1, 'Portafolio'),
(150, 295, 1, 'contact1'),
(151, 296, 1, 'footer3'),
(152, 297, 1, 'contactanos'),
(153, 298, 1, 'Cursos y Servicios'),
(154, 299, 1, ''),
(155, 302, 1, 'Nosotros'),
(156, 303, 1, 'Clientes'),
(157, 304, 1, 'mi pagina'),
(158, 305, 1, 'Crew'),
(159, 306, 1, 'content7'),
(160, 307, 1, 'footer3'),
(161, 308, 1, ''),
(162, 309, 1, 'mi pagina'),
(163, 269, 2, 'Inicio'),
(164, 276, 2, ''),
(165, 282, 2, 'Nosotros'),
(166, 283, 2, 'Nosotros'),
(167, 284, 2, ''),
(168, 285, 2, 'beneficios'),
(169, 287, 2, ''),
(170, 288, 2, 'Noticias'),
(171, 289, 2, 'Clientes'),
(172, 297, 2, 'contactanos'),
(173, 298, 2, 'Cursos y Servicios'),
(174, 299, 2, ''),
(175, 302, 2, 'Nosotros'),
(176, 303, 2, 'Clientes'),
(177, 308, 2, ''),
(178, 310, 1, 'Portafolio'),
(179, 311, 1, 'mi pagina'),
(180, 312, 1, 'mipagina'),
(181, 313, 1, 'mi pagina'),
(182, 314, 1, 'contact2'),
(183, 315, 1, 'mipagina'),
(184, 316, 1, 'mi pagina'),
(185, 317, 1, 'mipagina'),
(186, 318, 1, 'Cabecera'),
(187, 319, 1, '1kg'),
(188, 320, 1, 'Pie'),
(189, 321, 1, 'mi pagina'),
(190, 322, 1, 'Nosotros'),
(191, 323, 1, 'Cursos y Servicios'),
(192, 324, 1, ''),
(193, 325, 1, '1kg'),
(194, 326, 1, 'mipagina'),
(195, 327, 1, 'Crew'),
(196, 328, 1, 'footer3'),
(197, 329, 1, 'mipagina'),
(198, 330, 1, 'mi pagina'),
(199, 331, 1, 'mi pagina'),
(200, 332, 1, 'Work'),
(201, 333, 1, 'map2a'),
(202, 334, 1, 'slidertextos'),
(203, 335, 1, 'logros'),
(204, 336, 1, 'promo'),
(205, 337, 1, 'rayo jesuita'),
(206, 338, 1, 'mi pagina'),
(207, 339, 1, 'Expo'),
(208, 340, 1, 'content7'),
(209, 341, 1, 'content122'),
(210, 342, 1, 'modulo17'),
(211, 343, 1, 'Contáctanos'),
(212, 344, 1, 'Portafolio'),
(213, 345, 1, 'content8'),
(214, 346, 1, 'mi pagina'),
(215, 347, 1, 'mi pagina'),
(216, 348, 1, 'Crew'),
(217, 349, 1, 'Work'),
(218, 350, 1, 'Contacto'),
(219, 351, 1, 'mi pagina'),
(220, 352, 1, 'Cabecera'),
(221, 353, 1, 'home'),
(222, 354, 1, 'Us'),
(223, 355, 1, 'Beneficios'),
(224, 356, 1, 'videos'),
(225, 357, 1, 'iframe'),
(226, 358, 1, 'footer'),
(227, 359, 1, 'mi pagina'),
(228, 360, 1, 'Crew'),
(229, 361, 1, 'Expo'),
(230, 362, 1, 'Work'),
(231, 363, 1, 'Contacto'),
(232, 364, 1, 'About'),
(233, 365, 1, 'Contacto'),
(234, 366, 1, 'mipagina'),
(235, 367, 1, 'content7'),
(236, 368, 1, 'content12'),
(237, 369, 1, 'contact2'),
(238, 370, 1, 'contact4a'),
(239, 371, 1, 'content22'),
(240, 372, 1, ''),
(241, 373, 1, 'mipagina'),
(242, 374, 1, 'Portafolio'),
(243, 375, 1, 'modulo17'),
(244, 376, 1, 'content122'),
(245, 377, 1, 'content131'),
(246, 378, 1, 'content14'),
(247, 379, 1, 'footer3'),
(248, 380, 1, 'mi pagina'),
(249, 381, 1, 'content71'),
(250, 382, 1, 'content8'),
(251, 383, 1, 'content16'),
(252, 384, 1, 'content18'),
(253, 385, 1, 'text1'),
(254, 386, 1, 'footer4'),
(255, 387, 1, 'mi pagina'),
(256, 388, 1, 'tabs8'),
(257, 389, 1, 'content41'),
(258, 390, 1, 'contact1'),
(259, 391, 1, 'contact5'),
(260, 392, 1, 'map2'),
(261, 393, 1, 'Como ayudar'),
(262, 394, 1, 'Inicio'),
(263, 395, 1, 'map2a'),
(264, 396, 1, 'slidertextos'),
(265, 397, 1, 'logros'),
(266, 398, 1, 'promo'),
(267, 399, 1, 'intro'),
(268, 400, 1, 'Contáctanos'),
(269, 401, 1, ''),
(270, 402, 1, 'studiot'),
(271, 403, 1, 'Nosotros'),
(272, 404, 1, 'Cursos y Servicios'),
(273, 405, 1, 'Noticias'),
(274, 406, 1, 'Clientes'),
(275, 407, 1, 'contact'),
(276, 408, 1, 'lorem'),
(277, 409, 1, ''),
(278, 410, 1, ''),
(279, 411, 1, ''),
(280, 412, 1, ''),
(281, 413, 1, 'beneficios'),
(282, 414, 1, '1kg'),
(283, 415, 1, 'Staff'),
(284, 416, 1, 'Services'),
(285, 417, 1, 'Categories'),
(286, 418, 1, 'Partners'),
(287, 419, 1, 'Staff'),
(288, 420, 1, 'home'),
(289, 421, 1, 'Us'),
(290, 422, 1, 'Beneficios'),
(291, 423, 1, 'videos'),
(292, 424, 1, 'iframe'),
(293, 425, 1, 'footer'),
(294, 426, 1, 'mi pagina'),
(295, 427, 1, ''),
(296, 428, 1, ''),
(297, 429, 1, 'Nosotros'),
(298, 430, 1, ''),
(299, 431, 1, 'mipagina'),
(300, 432, 1, 'Información'),
(301, 433, 1, 'Expositores'),
(302, 434, 1, 'Comité'),
(303, 435, 1, 'Noticias'),
(304, 436, 1, 'Auspicios'),
(305, 437, 1, 'Contacto'),
(306, 438, 1, ''),
(307, 439, 1, 'Inicio'),
(308, 440, 1, ''),
(309, 441, 1, 'Información'),
(310, 442, 1, 'Inicio'),
(311, 443, 1, 'mipagina'),
(312, 444, 1, 'mi pagina'),
(313, 445, 1, 'Información'),
(314, 446, 1, 'Inicio'),
(315, 447, 1, 'mi pagina'),
(316, 448, 1, 'mipagina'),
(317, 449, 1, 'Speakers'),
(318, 450, 1, 'Comité'),
(319, 451, 1, 'Inicio'),
(320, 452, 1, 'content14'),
(321, 453, 1, ''),
(322, 454, 1, 'Información'),
(323, 455, 1, 'Temas'),
(324, 456, 1, 'mi pagina'),
(325, 457, 1, 'Team'),
(326, 458, 1, 'content7'),
(327, 459, 1, 'content12'),
(328, 460, 1, 'content22'),
(329, 461, 1, 'Contacto'),
(330, 462, 1, 'mi pagina'),
(331, 463, 1, 'Noticias'),
(332, 464, 1, 'Noticias'),
(333, 465, 1, 'Comité'),
(334, 466, 1, 'Inicio'),
(335, 467, 1, 'Quiénes Somos'),
(336, 468, 1, 'Qué hacemos'),
(337, 469, 1, 'Deportistas Inyogo'),
(338, 470, 1, 'Partners'),
(339, 471, 1, 'Staff'),
(340, 472, 1, 'Contáctanos'),
(341, 473, 1, 'mipagina'),
(342, 474, 1, '1kg'),
(343, 475, 1, 'Staff'),
(344, 476, 1, 'Auspicios'),
(345, 477, 1, 'mi pagina'),
(346, 478, 1, 'beneficios'),
(347, 479, 1, 'footer'),
(348, 480, 1, 'mipagina'),
(349, 481, 1, ''),
(350, 482, 1, 'bienvenidos'),
(351, 483, 1, 'Services'),
(352, 484, 1, 'imagenes'),
(353, 485, 1, 'home'),
(354, 486, 1, 'videos'),
(355, 487, 1, 'mi pagina'),
(356, 488, 1, 'home'),
(357, 489, 1, 'footer'),
(358, 490, 1, 'content14'),
(359, 491, 1, 'content14'),
(360, 492, 1, 'Contacto'),
(361, 493, 1, 'Contáctanos'),
(362, 493, 2, 'Contáctanos'),
(363, 494, 1, 'mi pagina'),
(364, 495, 1, 'mi pagina'),
(365, 496, 1, 'mi pagina'),
(366, 497, 1, 'Expo'),
(367, 498, 1, 'modulo17'),
(368, 499, 1, 'content14'),
(369, 500, 1, 'Contacto'),
(370, 501, 1, 'iframe'),
(371, 502, 1, 'videos'),
(372, 503, 1, 'mi pagina');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pry_noticias`
--

CREATE TABLE IF NOT EXISTS `pry_noticias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pry_proyecto` int(11) NOT NULL,
  `imagen` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `destacado` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=34 ;

--
-- Volcado de datos para la tabla `pry_noticias`
--

INSERT INTO `pry_noticias` (`id`, `id_pry_proyecto`, `imagen`, `destacado`, `created_at`, `updated_at`) VALUES
(4, 20, 'modulo_sanfer_newsnoticia0.jpg', 1, '2016-12-07 03:46:54', '2016-12-07 03:46:54'),
(5, 20, 'modulo_sanfer_newsnoticia1.jpg', 1, '2016-12-07 03:46:54', '2016-12-07 03:46:54'),
(6, 20, 'modulo_sanfer_newsnoticia2.jpg', 1, '2016-12-07 03:46:54', '2016-12-07 03:46:54'),
(7, 20, '1301_5879043dbaf79.JPG', 1, '2017-01-13 16:45:52', '2017-01-13 21:45:52'),
(8, 20, '1301_587903f43e43a.JPG', 1, '2017-01-13 16:44:43', '2017-01-13 21:44:43'),
(9, 20, '1301_5878fd32cedd1.JPG', 1, '2017-01-13 16:15:55', '2017-01-13 21:15:55'),
(10, 33, 'modulo_sanfer_newsnoticia0.jpg', 1, '2017-02-07 20:29:09', '2017-02-07 20:29:09'),
(11, 33, 'modulo_sanfer_newsnoticia1.jpg', 1, '2017-02-07 20:29:09', '2017-02-07 20:29:09'),
(12, 33, 'modulo_sanfer_newsnoticia2.jpg', 1, '2017-02-07 20:29:09', '2017-02-07 20:29:09'),
(13, 34, 'modulo_c_noticiasnoticia0.jpg', 1, '2017-02-07 20:31:28', '2017-02-07 20:31:28'),
(14, 34, 'modulo_c_noticiasnoticia1.jpg', 1, '2017-02-07 20:31:28', '2017-02-07 20:31:28'),
(15, 34, 'modulo_c_noticiasnoticia2.jpg', 1, '2017-02-07 20:31:28', '2017-02-07 20:31:28'),
(16, 35, 'modulo_c_noticiasnoticia0.jpg', 1, '2017-02-07 20:48:37', '2017-02-07 20:48:37'),
(17, 35, 'modulo_c_noticiasnoticia1.jpg', 1, '2017-02-07 20:48:37', '2017-02-07 20:48:37'),
(18, 35, 'modulo_c_noticiasnoticia2.jpg', 1, '2017-02-07 20:48:37', '2017-02-07 20:48:37'),
(25, 36, '1602_58a5de85ef187.jpg', 1, '2017-02-16 17:16:56', '2017-02-16 22:16:56'),
(26, 36, '1602_58a5ddac7fa36.jpg', 1, '2017-02-16 17:13:18', '2017-02-16 22:13:18'),
(27, 36, '1602_58a5dd380b695.jpg', 1, '2017-02-16 17:15:55', '2017-02-16 22:15:55'),
(28, 36, '2102_58acab468334d.jpg', 0, '2017-02-22 02:04:08', '2017-02-22 02:04:08'),
(29, 36, '2102_58acabe12bc6f.jpg', 0, '2017-02-22 02:06:43', '2017-02-22 02:06:43'),
(30, 36, '2102_58acac5b96c54.jpg', 0, '2017-02-22 02:08:45', '2017-02-22 02:08:45'),
(31, 36, '2102_58acb5cd46b1e.jpg', 0, '2017-02-21 21:49:03', '2017-02-22 02:49:03'),
(32, 36, '2102_58acae45adbc4.jpg', 0, '2017-02-22 02:16:56', '2017-02-22 02:16:56'),
(33, 36, '2102_58acaeb749e47.jpg', 0, '2017-02-22 02:18:50', '2017-02-22 02:18:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pry_noticias_slider`
--

CREATE TABLE IF NOT EXISTS `pry_noticias_slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_noticia` int(11) NOT NULL,
  `imagen` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `pry_noticias_slider`
--

INSERT INTO `pry_noticias_slider` (`id`, `id_noticia`, `imagen`) VALUES
(1, 9, '1301_5878fd8de2271.JPG'),
(2, 8, '1301_587903fb9fe00.JPG'),
(3, 8, '1301_587904001ffbd.JPG'),
(4, 8, '1301_5879040483e94.JPG'),
(5, 7, '1301_58790440ed64a.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pry_noticias_txt`
--

CREATE TABLE IF NOT EXISTS `pry_noticias_txt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_noticia` int(11) NOT NULL,
  `id_idioma` int(11) NOT NULL,
  `titulo` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `introduccion` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `texto` text COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=37 ;

--
-- Volcado de datos para la tabla `pry_noticias_txt`
--

INSERT INTO `pry_noticias_txt` (`id`, `id_noticia`, `id_idioma`, `titulo`, `introduccion`, `texto`) VALUES
(1, 4, 1, 'Lorem ipsum dolore sit amet', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna'),
(2, 5, 1, 'Lorem ipsum dolore sit amet', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna'),
(3, 6, 1, 'Lorem ipsum dolore sit amet', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna'),
(4, 7, 1, 'Desarrollo de Productos y Servicios', '09 - 15 Noviembre | Facilitamos marcos de Innovación en Productos/Servicios agroalimentarios para el desarrollo de proyectos o ideas de negocio.', '09 - 15 Noviembre | Nuestro curso/taller facilitó marcos de Innovación y conocimientos prácticos en Productos/Servicios agroalimentarios que les permitirán a los participantes desarrollar modelos, proyectos o ideas a ser implementadas para potenciar los resultados de negocio en los sectores en que se desenvuelven. El programa estuvo a cargo de Rolando Cruzado, especialista de CIENCIACTIVA del CONCYTEC. '),
(5, 8, 1, 'Principios de Bioseguridad Avícola', '26 de Octubre | Desarrollamos el programa de Principios de Bioseguridad y  Manejo Sanitario en Granjas Avícolas en la Asociación Peruana de Avicultura', '26 de Octubre | Desarrollamos el programa de Principios de Bioseguridad y  Manejo Sanitario en Granjas Avícolas en la Asociación Peruana de Avicultura donde se desarrollaron los conceptos clave de sanidad que se encuentran implícitos en la operación de los planteles de crianza avícola garantizando la inocuidad sostenible, potenciando la productividad y buscando reducir pérdidas de las 10 empresas participantes. '),
(6, 9, 1, 'Manejo de Frutales: Huampán', 'El13 de Diciembre compartimos con la Asociación de Productores de Durazno Agroindustrial Huampan conocimientos sobre frutales de Durazno y Chirimoya.', 'El13 de Diciembre compartimos con la Asociación de Productores de Durazno Agroindustrial Huampan conocimientos aplicativos sobre el manejo de integrado de cultivo, abonamiento, manejo de plagas y estrategias de agrícultura orgánica sobre los frutales del Durazno y la Chirimoya.'),
(7, 4, 2, 'Lorem ipsum dolore sit amet', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna'),
(8, 5, 2, 'Lorem ipsum dolore sit amet', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna'),
(9, 6, 2, 'Lorem ipsum dolore sit amet', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna'),
(10, 7, 2, 'Lorem ipsum dolore sit amet', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna'),
(11, 8, 2, 'Lorem ipsum dolore sit amet', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna'),
(12, 9, 2, 'Manejo de Frutales: Huampán', 'El13 de Diciembre compartimos con la Asociación de Productores de Durazno Agroindustrial Huampan conocimientos sobre frutales de Durazno y Chirimoya.', 'El13 de Diciembre compartimos con la Asociación de Productores de Durazno Agroindustrial Huampan conocimientos aplicativos sobre el manejo de integrado de cultivo, abonamiento, manejo de plagas y estrategias de agrícultura orgánica sobre los frutales del Durazno y la Chirimoya.'),
(13, 10, 1, 'Lorem ipsum dolore sit amet', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna'),
(14, 11, 1, 'Lorem ipsum dolore sit amet', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna'),
(15, 12, 1, 'Lorem ipsum dolore sit amet', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna'),
(16, 13, 1, 'Lorem ipsum dolore sit amet', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna'),
(17, 14, 1, 'Lorem ipsum dolore sit amet', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna'),
(18, 15, 1, 'Lorem ipsum dolore sit amet', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna'),
(19, 16, 1, 'Lorem ipsum dolore sit amet', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna'),
(20, 17, 1, 'Lorem ipsum dolore sit amet', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna'),
(21, 18, 1, 'Lorem ipsum dolore sit amet', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna'),
(28, 25, 1, '¿Cómo podemos evitar errores que pongan en riesgo nuestra tienda online?', 'Las tiendas online son una buena herramienta para aumentar las ventas y conseguir nuevos clientes.', 'El e-commerce es una tendencia que crece a diario y se viene imponiendo en el retail. Varios retailers vienen implementando tiendas online para satisfacer las necesidades de sus clientes y mejorar la experiencia de compra con el fin de mejorar su rentabilidad y captar nuevos clientes. Sin embargo, ninguna tienda online es perfecta, más aún cuando la competencia en el e-commerce es enorme. ¿Cómo podemos evitar errores que pongan en riesgo nuestra tienda online? \r\n\r\nEscoger la plataforma correcta\r\nElegir una plataforma para la tienda online es el primer paso. Estas plataformas funcionan como un sitio web y permiten ofrecer productos, fijar los precios e incluir una pequeña descripción. Hay que considerar la plataforma que mejor se adapte a las necesidades específicas del negocio. Existen varias plataformas, entre las más usada podemos encontrar a: Magento, eCommerce , PrestaShop, OpenCart o ZenCart. \r\n\r\nCarga rápida \r\nLos usuarios en Internet no tienen paciencia. Las ventas dependen de lo útil que es el sitio para el usuario y el tiempo que le pueda ahorrar con respecto a la competencia. Si la tienda online no carga rápido, malogra la experiencia del usuario y hará a la tienda perder una venta. Es muy importante considerar este punto porque el usuario promedio solo espera 3 segundos para que cargue una web. Si el cliente no obtiene lo que busca en un determinado tiempo, puede salir frustrado y no volver más a visitar dicha tienda. Además, Google penaliza a los sitios que se demoran en cargar. \r\n\r\nResponsive Design\r\nLa tienda online debe contar con un diseño responsive. Esto significa que la plataforma pueda cargar correctamente en una desktop, un dispositivo móvil o una tablet. Cada vez son más los usuarios que acceden a contenidos web desde sus smartphones y buscan tener una experiencia más amigable e intuitiva. Además, el Responsive Design genera más tráfico, facilita la visibilidad de la tienda y ayuda al posicionamiento en motores de búsqueda. \r\n\r\nInvertir en publicidad \r\nUn punto clave en las tiendas online es la inversión publicitaria. Esta es la mejor manera de generar tráfico al sitio, dar a conocer productos y captar nuevos compradores. Es muy difícil que el público llegue a la tienda online de una forma orgánica o a través de motores de búsqueda. Por eso, es necesario implementar una estrategia publicitaria en canales virtuales y redes sociales para promocionarla y llamar la atención del cliente. \r\n\r\nOptimizar SEO\r\nToda plataforma que quiera darse a conocer debe contar con un buen Search Engine Optimization (SEO) que le permita ubicarse en los primeros lugares de los motores de búsqueda. Para esto es necesario contar con una estrategia online que identifique las palabras claves y categorías que identificarán a la tienda con sus usuarios. Es necesario contar con esto porque aumentará la visibilidad y el tráfico orgánico. \r\n\r\nComo en todos los negocios, hay que vender para sobrevivir. Las tiendas online son una buena herramienta para aumentar las ventas y conseguir nuevos clientes. Antes de implementar una plataforma online hay que tener clara la estrategia y los puntos claves para que la tienda online se convierta en un referente del comercio electrónico.'),
(29, 26, 1, 'La Martina, del retail tradicional a la la omnicanalidad', 'La Martina es un buen ejemplo de cómo el retail tradicional tiene que adaptarse a los nuevos hábitos del consumidor.', 'La Martina es una empresa familiar argentina con más de 30 años, en el mercado de prendas de vestir y ropa deportiva. Lando Simonetti, su creador, unió sus ganas de emprendimiento con su pasión por el polo y creó esta marca. Actualmente, es la proveedora oficial del equipo de polo de Argentina y cuenta con tiendas en las principales capitales de Europa. Es más, fue seleccionada como un caso de estudio por la Escuela de Negocios de Harvard Business School. ¿Cómo fue que logró todo esto? \r\n\r\nLa Martina se convirtió en un caso de estudio para la Escuela de Negocios de Harvard Business School. porque se transformó de un pequeño proyecto familiar a una marca global que está presente en más de 50 países y en más de 100 torneos de polo en el mundo.\r\n\r\nLa Martina empezó siendo un proyecto familiar de equipamiento para equipos de polo, a mediados de la década de los ochenta. Si bien el proyecto surge en Boston, es en Buenos Aires, en la esquina de Paraguay y Florida, donde comienza su historia de éxito. La visión de Simonetti fue crear una marca argentina con trascendencia internacional. Para conseguirlo, viajó por todo el mundo llevando su pasión por el polo y generando el desarrollo de este deporte en cada país que visitó. Con trabajo, sacrificio y destreza, Simonetti logró su objetivo. Actualmente, La Martina es proveedor oficial de los eventos más exclusivos de polo a nivel mundial. Su nuevo reto es iniciar operaciones en China. \r\n\r\nSi bien La Martina se creó bajo el concepto de un retail tradicional, esto no le impide adaptarse a los nuevos consumidores a través de la omnicanalidad. Para que una marca crezca y sea exitosa exige cuidado y evolución constante de sus estrategias. Por eso, desde el año pasado, La Martina se encuentra trabajando para estar a la vanguardia en el mundo digital. Para ellos, es necesario romper los límites físicos y entender que las tiendas ahora son 7x24. Apuestan por una estrategia que les permita interactuar personalizadamente con cada cliente desde el ingreso a la tienda. Esperan para el 2025,que su comercio electrónico supere el 30% de sus ventas totales. \r\n\r\nLa Martina es un buen ejemplo de cómo el retail tradicional tiene que adaptarse a los nuevos hábitos del consumidor, implementar estrategias de diferenciación competitiva y hacer esa transición del retail tradicional al omnichannel.'),
(30, 27, 1, 'El e-commerce del mañana está orientado al m-commerce', 'El m-commerce ha llegado para quedarse. La nueva generación del comercio electrónico es móvil y viene creciendo a gran velocidad.', 'Hasta hace un par de años, para comprar productos por internet el consumidor tenía que sentarse frente al ordenador, digitar la url de la tienda virtual, elegir el producto, agregarlo al carrito y digitar su tarjeta de crédito o débito para hacer efectiva la compra. Era un proceso muy tedioso y agotador. Eran los tiempos del ecommerce. Con la constante evolución de la tecnología, el ecommerce ha evolucionado al m-commerce, donde la venta se desarrolla desde un aplicativo móvil.\r\n \r\nEl M-commerce es la venta de productos y/o servicios desde una plataforma optimizada para dispositivos móviles. En la actualidad, el 34% de las transacciones comerciales por Internet se hacen desde un dispositivo móvil. En Perú, el porcentaje es mucho menor por el escaso desarrollo de infraestructura y la inseguridad; sin embargo, es una tendencia que va creciendo y los retailers deben tenerla en cuenta en nuestra estrategia. \r\n\r\nEl m-commerce permite acceder a productos en cualquier momento y lugar. Una de las principales ventajas del m-commerce es la comodidad. Con esto hace que el proceso de la compra sea más sencillo. Además, el cliente podrá observar o comprar productos cuando desee y desde cualquier lugar. El m-commerce permite competir durante todo el día con negocios similares; solo hay que preocuparse por tener una buena atención al cliente y la logística necesaria para el envío de los pedidos. \r\n\r\nEs clave entender el m-commerce. Se debe tener una estrategia de negocio previa que permita conocer el comportamiento del consumidor y sus necesidades. El m-commerce no solo mejora la comunicación de la empresa con el usuario, sino que además, aporta mayor visibilidad de los productos, mejora las acciones de compra y le da libertad de elegir al consumidor. En el plano de la producción reduce sus costos y el mantenimiento. Ya no es necesario contar con un sinnúmero de tiendas físicas para mostrar productos. Con el auge de las redes sociales, los consumidores valoran los comentarios que se hacen sobre los productos. Si uno comprueba que el producto tiene varios comentarios positivos, estará más animado a hacer la compra. \r\n\r\nLa seguridad es un motivo por el cual el m-commerce no se ha masificado en el país. Los peruanos son muy desconfiados con las compras onlines. Sin embargo, esta es una tendencia que se viene revirtiendo con el desarrollo de nuevas tecnologías que hacen más seguras las transacciones electrónicas. El futuro del m-commerce estará en el público joven, de entre 18 y 35 años. \r\n\r\nEl m-commerce ha llegado para quedarse. La nueva generación del comercio electrónico es móvil y viene creciendo a gran velocidad. Es una buena oportunidad para los retailers ya que tiene menos limitaciones que el e-commerce.'),
(31, 28, 1, 'La batalla de esta década: Ladrillos vs Clics.', 'El retail tradicional está en peligro latente de desaparecer sino se reinventa ¿Somos parte del cambio o su lastre?', '\r\n“Los ladrillos y ventanas podrán influenciar en mi consumidor, pero tus clics se los lleva el viento.” \r\n\r\nEsta es la visión de la mayoría de los líderes en retail que forman parte de los Baby Boomers y Seniors, de los cuales solo el 41% y el 28%, respectivamente, prefieren realizar compras online que en una tienda física. Por otra parte, los Millennials y la generación X son quienes tomarán el control del mercado en un futuro cercano; y prefieren en un 67% y 56%, respectivamente, realizar sus compras online.\r\n\r\nEn tiempos de incertidumbre como este, nos preguntamos: ¿los ladrillos y estantes están convirtiéndose en las nuevas páginas amarillas? \r\n\r\nEs importante mencionar que, aunque han pasado más de 20 años desde que el internet está disponible para el comercio, nos sorprende saber que entre el 2015 y principios del 2016, solo el 0.8% de las ventas retail pasaron del offline al online (United States Census Bureau).\r\n\r\nEntonces nos encontramos en un panorama difuso (especialmente en latinoamérica), en el cual algunos gritan que el futuro son los deliverys con drones y compras automatizadas a la puerta de tu casa; mientras que el otro grupo reclama la inmortalidad del retail físico y su indispensable fuerza de ventas. Entonces, ¿cuál es el paisaje real? \r\n\r\nEl retail se está reinventando al paso, tomando la forma de “destrucción creativa” que Schumpeter nos presenta en su obra Capitalismo, socialismo y democracia. Este término describe el proceso de innovación en una economía de mercado, en la cual los nuevos productos destruyen y sustituyen a los antiguos y obsoletos (“... es el hecho esencial del capitalismo”).\r\n\r\nMucho del retail tradicional está en peligro latente de desaparecer… pero ¿y qué hay de las tiendas disruptivas? Podemos encontrarnos en muchas ciudades del mundo, con castillos de vidrios y paredes blancas, con dispositivos sobre largas mesas de madera estilo carpintero y jóvenes con barba y tatuajes atendiéndonos: son las Apple Stores. Estas tiendas son las que actualmente tienen mayor ratio de ventas por metro cuadrado en el mercado (el indicador más importante en retail). \r\n\r\nEntonces comprendemos que esta batalla no es entre ladrillos y clics, sino que trata sobre aplicar las nuevas tecnologías del internet de las cosas, para cambiar la forma en la que nuestros consumidores buscan, eligen y compran. Los retails creativos están innovando en la experiencia del consumidor, el riesgo percibido en la compra, manipulación de inventario, métodos de pago… Estos son los factores que mantienen a la vieja escuela del retail sin poder dormir. Las posibilidades de mejora son infinitas, siempre apuntando a la simplificación del proceso y la satisfacción del cliente. \r\n\r\nLos ladrillos y estantes no desaparecerán en un futuro cercano, y en el Perú vemos cada vez más la tendencia de concept-stores, buscando la diferenciación y la experiencia única para el cliente dentro de las tiendas. Es momento de preguntarnos ahora: ¿Somos parte del cambio en retail o somos su lastre?'),
(32, 29, 1, 'La era de la hiperconectividad', 'Las marcas se encuentran ante un nuevo consumidor que navega en el mundo digital e hiperconectado a distintos dispositivos, que dificultan captar...', 'La hiperconectividad es el nuevo estado en el que vive el ser humano. Vive conectado mediante móviles, tablets y aplicaciones. Las marcas se encuentran ante un nuevo consumidor que navega en el mundo digital y recibe mucha información a la vez.Cada vez es más difícil de captar su atención. El marketing de la experiencia se impone como respuesta para enfrentar esta realidad saturada de información, productos y servicios. \r\n\r\nEs fundamental definir los objetivos estratégicos al inicio. La tecnología y los procesos deben generarnos esa experiencia que motive al cliente a comprar algo. Si las empresas logran llegar a este objetivo, harán que sus cliente se involucren más y se conviertan en defensores de la marca.\r\n\r\nEl marketing de la experiencia logra una conexión positiva entre marca y cliente. Utiliza estímulos sensoriales para generar bienestar y placer. El reto de las marcas está en pasar de la generación de contenido a la creación de una experiencia. Está comprobado que los consumidores valoran más a las empresas que los ponen en el centro y les ofrecen la oportunidad de vivir nuevos sentimientos mientras realizan la compra o durante el consumo del producto o servicio. Las marcas que consigan despertar estas emociones en sus cliente, son las que diferenciándose del resto, sobrevivirán.\r\n\r\nHay puntos claves a considerar en el marketing de la experiencia. Se deben ofrecer otras experiencias además de comprar. Utilizar los datos para segmentar al público y ofrecerles experiencias personalizadas. Incorporar todos los sentidos al momento de la creación de la experiencia. Lo principal, es demostrarle al cliente que realmente te importa. No vendes algo tangible, vendes una experiencia de calidad que tu cliente nunca olvidará y la recomendará a su entorno. \r\n\r\nTenemos claro que la experiencia del cliente es una necesidad en estos tiempos. La industria de retail debe adoptar las medidas necesarias para lograr este nivel de satisfacción. El futuro del retail pasa por ofrecer experiencias que aporten un valor añadido al producto o servicio.\r\n\r\nEste tipo de estrategia logra establecer relaciones más fuertes entre el cliente y la marca. Una conexión única que no ocurrirá si se persiste de manera tradicional. Es mejor vivirlo, que te lo cuenten.'),
(33, 30, 1, 'Las últimas tendencias en retail', 'El retail se enfrenta a una revolución tecnológica que lo obliga a replantearse cómo se hacen las cosas.', 'El retail, más que nunca, requiere una nueva visión para asegurarse la supervivencia en los próximos años. Dicho plan requiere identificar y revisar conceptos y procesos, que permita construir sobre ellos una estrategia integral de negocio para seguir siendo relevantes en la era digital. Los comercios tendrán que abandonar sus estrategias tradicionales y adaptar los modelos de negocio a los nuevos hábitos del consumidor. La industria se enfrenta a una revolución tecnológica que la obliga a replantear cómo hacer las cosas. El reto es innovar agregando valor al producto final. Ante este panorama incierto, se hace necesario considerar las tendencias que marcarán una nueva era en el retail.\r\n\r\nOmnicanalidad\r\nEl consumidor ha cambiado. Está más informado, es mucho más exigente, requiere interactuar, y comunicarse constantemente con las marcas. Las compañías deben mirar estas necesidades y ofrecer una experiencia homogénea y flexible. La omnicanalidad es el camino para llegar a este objetivo. Los retailers deben combinar ambos mundos, offiline y online, ofreciéndole al consumidor, una experiencia inolvidable. El desafío está en entender los diferentes canales y puntos de contacto como un todo. Esto demanda que todos sus canales tantos físicos como virtuales estén alineados y manejen una misma comunicación.\r\n\r\nSmart Retail\r\nUna tienda smart retail busca que los clientes tengan experiencias de compra especiales y diferenciadas. Lo que supone un cambio total en el punto de venta. Bajo este nuevo concepto, la tecnología gira alrededor del cliente y debe adaptarse a él. Utilizando las nuevas tecnologías, se personalizará cada detalle de la compra y se tendrá una tienda conectada que valore y le sea útil al cliente al momento de la compra.\r\n\r\nFlagship store\r\nFlagship store es un espacio innovador que aporta una experiencia de marca diferente y le da un valor añadido a la compañía. Son espacios muy grandes que están ubicados en las avenidas principales de la ciudad. El objetivo principal de estas tiendas no es que los clientes compren, sino ofrecerles una experiencia de marca, en un espacio único y creativo que esté alineado con los valores de la empresa.\r\n\r\nProbadores virtuales \r\nEl mundo virtual y físico cada vez conviven mejor. Los probadores virtuales son un ejemplo de cómo ambos se integran en beneficio al cliente. La implementación de esta tecnología facilitará el proceso de compra evitando que el cliente tenga que probarse todas las prendas. \r\n\r\nLa industria del retail debe adaptarse al mundo digital e implementar cambios en beneficio del cliente que lo hagan sentir parte del proceso de compra. En el futuro, los clientes premiarán a las compañías que les brinden una experiencia personalizada.'),
(34, 31, 1, 'La transformación digital en el retail', 'La experiencia del usuario cada vez es más importante y se debe entender al individuo para que tenga una correcta experiencia.', 'El 60% de los peruanos usan un smartphone como el principal medio para buscar ofertas de compras por Internet, informó la Cámara de Comercio de Lima días previos al Cyber Monday Perú, evento de comercio electrónico más importante del año.En su reporte de febrero de 2016, OSIPTEL, el organismo regulador de las telecomunicaciones, detalló que más de 15 millones líneas móviles navegan en Internet. La transformación digital continúa y cada vez es más rápida en el país. ¿Cómo puede aprovechar el sector retail esta transformación? \r\n\r\nImplementar una aplicación\r\nEl usuario de estos días está más inclinado a realizar sus compras desde un dispositivo móvil.Desarrollar una aplicación es muy sencillo. Sin embargo, a veces nos olvidamos de los fundamentos. Una aplicación debe formar parte del ecosistema digital de la empresa. Debe estar integrada con sus canales offline y online. Finalmente, los contenidos deben estar presentados de una forma atractiva y simple. El diseño de la estructura y las interfases es primordial al momento de planear un aplicativo.\r\n\r\nOptimizar la experiencia del usuario\r\nEn principio hay que entender a nuestro usuario.Debemos estudiar sus características y la información que nos brinda. El usuario premia a los que le faciliten la vida. Es muy probable que una persona termine comprando un producto en una tienda virtual de retail si no encuentra inconvenientes o baches en su recorrido. La experiencia del usuario cada vez es más importante y se debe entender al individuo para que tenga una correcta experiencia. Siempre debemos preguntarnos dos cosas: ¿Qué queremos que haga? y ¿A dónde queremos que vaya? \r\n\r\nAnalizar los flujos de compra \r\nLas empresas deben analizar, desde distintas perspectivas, los datos que nos proporcionan nuestros clientes. Los flujos de compra proporciona información valiosísima para entender si estamos operando correctamente y si nuestro retorno de inversión es el correcto. También nos permite, optimizar las estrategias y planear nuevas tácticas que nos permitan llegar al objetivo del negocio. \r\n\r\nLa transformación digital está delante de nosotros y cada vez más fuerte. El aprendizaje es continuo. Está en nosotros en implementar estrategias que nos permitan interactuar con el consumidor y generar una ventaja competitiva para nuestro negocio.'),
(35, 32, 1, 'Marketing verde ¿en el sector retail?', 'El consumidor demanda mayor conciencia sobre el cuidado en el medio ambiente. Las empresas debemos estar atentos a estos cambios.', 'La diferenciación es un factor clave en el plan de negocio de cualquier empresa a la hora de posicionar un producto o servicio. Hoy nuestros consumidores buscan conceptos innovadores y humanos. Además demandan mayor conciencia sobre el cuidado en el medio ambiente. Las empresas debemos estar atentos a estos cambios y apostar por nuevas estrategias. Una estrategia que vienen aplicado las empresas es el marketing verde.\r\n\r\n¿Por qué apostar por el marketing verde?\r\nEl marketing verde es una estrategia que busca conectar a la marca con sus consumidores de una manera emocional mediante la concientización ambiental. Las empresas buscan transmitirle a su entorno que sus interés van más allá de sus beneficios económicos. Quieren trascender del plano económico al bienestar del planeta. Está comprobado que los consumidores cada vez más prefieren a empresas que están comprometidas con el cuidado del ambiente. Esta es una buena oportunidad para promover nuestros productos y a la vez contribuir con la sociedad. \r\n\r\n¿Cómo podemos aplicar el marketing verde en el retail? \r\nConvertirse en una empresa ecológicamente amigable no tiene que ser un cambio radical, sino que puede realizarse de una manera gradual. Primero debemos examinarnos y ver qué acciones, como empresa, podemos realizar para reducir nuestra huella de carbono. Con el apoyo de las nuevas tecnologías, las empresas han encontrado un camino para reducir los daños que pudieran hacerle al planeta durante la cadena de producción. Segundo, debemos empezar a concientizar al consumidor sobre esta problemática que nos aqueja cada vez más \r\n\r\n¿Qué ejemplos hay de marketing verde ?\r\n\r\nH&M.  En 2013 la cadena sueca de tiendas de ropa, con presencia en más de 64 países del mundo, lanzó su campaña “Conscious Collection”. H&M empezó a utilizar algodón orgánico en sus prendas y crearon poliéster desde botellas PET recicladas. De esta forma, crearon una línea exclusiva enfocada al cuidado del ambiente.\r\n\r\nPatagonia. Patagonia es una empresa de ropa de surf que revolucionó la industria al fabricar el primer wetsuit de fibras vegetal. Mayormente, la ropa de surf está fabricada con neopreno, derivado del petróleo. Además, el tiempo de vida de estos productos eran cortos y se tenían que renovar constantemente. Con esta acción, Patagonia busca que sus productos reduzcan la huella de carbono y que duren el máximo tiempo posible.\r\n\r\nOriflame.  La compañía europea de productos para el cuidado de la piel lanzó al mercado Ecobeauty, una nueva línea de productos hechos con ingredientes naturales y cero impacto ambiental. De esta manera se convirtió en la primera marca de cosméticos con mínimo en el medio ambiente.\r\n\r\nEl cuidado del medio ambiente se convierte cada vez más en un valor muy apreciado por los consumidores. Aquellas empresas que logren incorporar este concepto dentro de su marketing mix, de una forma correcta e innovadora, lograrán adaptarse a las nuevas demandas del mercado y generar rentabilidad a largo plazo.'),
(36, 33, 1, '¡Atención! Los nuevos centros comerciales que abrirán este 2017', 'Nuevas opciones de entretenimiento entran al sector retail. Hagamos un repaso de los principales centros comerciales que abrirán este año.', 'El sector retail comienza el año con nuevos proyectos. Las principales cadenas de centros comerciales han comprometido una inversión superior al año que terminó. Nuevas opciones de entretenimiento entran al sector retail. Hagamos un repaso de los principales centros comerciales que abrirán este año.\r\n\r\nCorporación Wong \r\nLa Corporación Wong aumentará su presencia en la capital con un nuevo mall en Santa María. Actualmente la Corporación cuenta con tres mall en la ciudad. El proyecto en el sur de Lima abrirá a finales del año. Además, tendrá un “hub de discotecas”, que busca replicar el éxito de Plaza Norte. La inversión para este proyecto asciende a 18 millones de dólares.\r\n\r\nIntercop\r\nEl Grupo Intercop, a través de su subsidiaria InRetail, planea una nueva estrategia para este año. Apostará por desarrollar dos Power Center en la capital. Uno estará en Lima Sur y el otro será anunciado en los próximos meses. Con respecto a sus demás malls, este año inicia la construcción del Real Plaza Puruchuco y ampliará su mall en Cusco. \r\n\r\nParque Arauco \r\nEl año no terminó muy bien para esta empresa inmobiliaria de capitales chilenos. Sin embargo, para este año planea abrir el MegaPlaza Express en la capital de la eterna primavera, Trujillo. La inversión bordea los 16 millones de dólares. También ha recibido la aprobación del concejo municipal de Huaraz para realizar su proyecto en esta ciudad. En Lima espera abrir un centro comercial bajo el concepto de “Life Style” en La Molina. \r\n\r\nMall Aventura\r\nMall Aventura iniciará dos proyectos en el primer trimestre de este año. San Juan de Lurigancho e Iquitos han sido las plazas seleccionadas para el desarrollo de estos nuevos espacios que se sumarán a la cartera de Mall Aventura. \r\n\r\nGrupo BRECA\r\nUrbaNova el brazo inmobiliario del Grupo BRECA comenzará la construcción de un mall en la zona financiera de San Isidro. El inicio de obra está proyectado para mitad de año. Se espera que este ambicioso proyecto esté listo dentro de dos años.\r\n\r\nNuevos conceptos entrarán al sector retail para diversificar las opciones de entretenimiento del consumidor limeño y provinciano. Se estima que para este año lleguemos a la cifra de 70 complejos comerciales a nivel nacional.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pry_proyecto`
--

CREATE TABLE IF NOT EXISTS `pry_proyecto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `estado` tinyint(1) NOT NULL,
  `id_user_registrador` int(11) NOT NULL,
  `multiples_idiomas` tinyint(1) NOT NULL,
  `datos_servidores` text COLLATE utf8_spanish_ci NOT NULL,
  `nombre_proyecto` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `dominio` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `subpagina` tinyint(1) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `e_commerce` tinyint(1) NOT NULL,
  `tipo_menu` int(11) NOT NULL,
  `ubicacion_logo` int(11) NOT NULL,
  `ubicacion_menu` int(11) NOT NULL,
  `efecto_menu` int(11) NOT NULL,
  `tipografia` int(11) NOT NULL,
  `copyright` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `email_formulario` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `email_formulario2` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion_site` text COLLATE utf8_spanish_ci NOT NULL,
  `keywords` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `google_analytics` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `google_maps_key` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `font_size` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `instagram_user_id` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `instagram_token` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `twitter_timeline` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `custom_css` text COLLATE utf8_spanish_ci NOT NULL,
  `contador_formulario` int(11) NOT NULL,
  `listacontenidos` text COLLATE utf8_spanish_ci NOT NULL,
  `thumbnail` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `url_proyecto` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=42 ;

--
-- Volcado de datos para la tabla `pry_proyecto`
--

INSERT INTO `pry_proyecto` (`id`, `estado`, `id_user_registrador`, `multiples_idiomas`, `datos_servidores`, `nombre_proyecto`, `dominio`, `subpagina`, `id_cliente`, `e_commerce`, `tipo_menu`, `ubicacion_logo`, `ubicacion_menu`, `efecto_menu`, `tipografia`, `copyright`, `email_formulario`, `email_formulario2`, `descripcion_site`, `keywords`, `google_analytics`, `google_maps_key`, `font_size`, `instagram_user_id`, `instagram_token`, `twitter_timeline`, `custom_css`, `contador_formulario`, `listacontenidos`, `thumbnail`, `deleted_at`, `url_proyecto`) VALUES
(5, 0, 0, 0, '', 'Testsite 1', '', 1, 11, 0, 2, 2, 4, 0, 0, '2016. Pan Blanco Shop. All rights reserved.', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', NULL, 'asasa4'),
(6, 0, 0, 0, '', 'Testsite 2', '', 1, 12, 0, 0, 0, 0, 0, 0, '2016 STUDIO TIGRES. All rights reserved', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', NULL, 'asasa6'),
(9, 0, 0, 0, '', 'test_gabi', '', 0, 14, 0, 0, 0, 0, 0, 0, '2016 STUDIO TIGRES. All rights reserved', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', NULL, ''),
(11, 0, 0, 0, '', 'Gabriel Lagos', 'gabicito', 0, 16, 0, 0, 0, 0, 0, 0, '2016 STUDIO TIGRES. All rights reserved', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', NULL, ''),
(13, 0, 0, 0, '', 'Gabriel Lagos', '', 0, 18, 0, 0, 0, 0, 0, 0, '2016 STUDIO TIGRES. All rights reserved', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', NULL, ''),
(14, 0, 0, 0, '', 'Gabriel Lagos', '', 0, 19, 0, 0, 0, 0, 0, 0, '2016 STUDIO TIGRES. All rights reserved', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', NULL, ''),
(16, 0, 0, 0, '', 'Gabriel Lagos', '', 0, 21, 0, 0, 0, 0, 0, 0, '2016 STUDIO TIGRES. All rights reserved', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', NULL, ''),
(17, 0, 0, 0, '', 'Gabriel Lagos', '', 0, 22, 0, 0, 0, 0, 0, 0, '2016 STUDIO TIGRES. All rights reserved', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', NULL, ''),
(18, 0, 0, 0, '', 'test', 'www.example.com', 0, 23, 0, 0, 0, 0, 0, 0, '2016 STUDIO TIGRES. All rights reserved', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', NULL, ''),
(21, 0, 3, 0, '', 'Gabriel Lagos', '', 0, 25, 0, 0, 0, 4, 0, 0, '2016 STUDIO TIGRES. All rights reserved', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', NULL, 'Gabriel-Lagos'),
(22, 0, 3, 0, '', 'Gabriel Lagos', '', 0, 25, 0, 0, 0, 4, 0, 0, '2016 STUDIO TIGRES. All rights reserved', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', NULL, 'Gabriel-Lagos'),
(23, 0, 3, 0, '', '1kg', '', 0, 26, 0, 0, 0, 4, 0, 8, '2016 STUDIO TIGRES. All rights reserved', 'info@1-k-g.com', '', '', '', '', '', '+2', '', '', '', '', 0, '', '1901_5880d32dae957.png', '2017-02-28 00:11:07', '1kg'),
(24, 0, 2, 0, '', 'test2017', '', 0, 18, 0, 0, 0, 4, 0, 0, '2016 STUDIO TIGRES. All rights reserved', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', NULL, 'test2017'),
(39, 0, 57, 0, '', 'insite2', '', 0, 28, 0, 0, 0, 7, 0, 0, '2016 STUDIO TIGRES. All rights reserved', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', NULL, 'insite2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pry_proyecto_idiomas`
--

CREATE TABLE IF NOT EXISTS `pry_proyecto_idiomas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_proyecto` int(11) NOT NULL,
  `id_idioma` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=43 ;

--
-- Volcado de datos para la tabla `pry_proyecto_idiomas`
--

INSERT INTO `pry_proyecto_idiomas` (`id`, `id_proyecto`, `id_idioma`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 1),
(6, 6, 1),
(7, 7, 1),
(8, 8, 1),
(9, 9, 1),
(10, 10, 1),
(11, 11, 1),
(12, 12, 1),
(13, 13, 1),
(14, 14, 1),
(15, 15, 1),
(16, 16, 1),
(17, 17, 1),
(18, 18, 1),
(19, 19, 1),
(20, 20, 1),
(21, 21, 1),
(22, 22, 1),
(23, 20, 2),
(24, 23, 1),
(25, 24, 1),
(26, 25, 1),
(27, 26, 1),
(28, 27, 1),
(29, 28, 1),
(30, 29, 1),
(31, 30, 1),
(32, 31, 1),
(33, 32, 1),
(34, 33, 1),
(35, 34, 1),
(36, 35, 1),
(37, 36, 1),
(38, 37, 1),
(39, 38, 1),
(40, 39, 1),
(41, 40, 1),
(42, 41, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pry_redes_sociales`
--

CREATE TABLE IF NOT EXISTS `pry_redes_sociales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pry_modulo` int(11) NOT NULL,
  `id_red_social` int(11) NOT NULL,
  `icono` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `url` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=198 ;

--
-- Volcado de datos para la tabla `pry_redes_sociales`
--

INSERT INTO `pry_redes_sociales` (`id`, `id_pry_modulo`, `id_red_social`, `icono`, `url`) VALUES
(36, 75, 1, 'fa fa-facebook', ''),
(37, 75, 2, 'fa fa-twitter', ''),
(38, 75, 3, 'fa fa-instagram', ''),
(39, 111, 1, 'fa fa-facebook', ''),
(40, 111, 2, 'fa fa-twitter', ''),
(41, 111, 3, 'fa fa-instagram', ''),
(42, 117, 1, 'fa fa-facebook', ''),
(43, 117, 2, 'fa fa-twitter', ''),
(44, 117, 3, 'fa fa-instagram', ''),
(52, 149, 1, 'fa fa-facebook', ''),
(53, 149, 2, 'fa fa-twitter', ''),
(54, 149, 3, 'fa fa-instagram', ''),
(55, 149, 4, 'fa fa-google-plus', ''),
(56, 185, 1, 'fa fa-facebook', ''),
(57, 185, 2, 'fa fa-twitter', ''),
(58, 185, 3, 'fa fa-instagram', ''),
(59, 186, 1, 'fa fa-facebook', ''),
(60, 186, 2, 'fa fa-twitter', ''),
(61, 186, 3, 'fa fa-instagram', ''),
(62, 186, 4, 'fa fa-google-plus', ''),
(63, 210, 1, 'fa fa-facebook', ''),
(64, 210, 2, 'fa fa-twitter', ''),
(65, 210, 3, 'fa fa-instagram', ''),
(66, 210, 4, 'fa fa-google-plus', ''),
(67, 214, 1, 'fa fa-facebook', ''),
(68, 214, 2, 'fa fa-twitter', ''),
(69, 214, 3, 'fa fa-instagram', ''),
(70, 217, 1, 'fa fa-facebook', ''),
(71, 217, 2, 'fa fa-twitter', ''),
(72, 217, 3, 'fa fa-instagram', ''),
(73, 217, 4, 'fa fa-google-plus', ''),
(74, 220, 1, 'fa fa-facebook', ''),
(75, 220, 2, 'fa fa-twitter', ''),
(76, 220, 3, 'fa fa-instagram', ''),
(77, 220, 4, 'fa fa-google-plus', ''),
(78, 226, 1, 'fa fa-facebook', ''),
(79, 226, 2, 'fa fa-twitter', ''),
(80, 226, 3, 'fa fa-instagram', ''),
(81, 226, 4, 'fa fa-google-plus', ''),
(82, 231, 1, 'fa fa-facebook', ''),
(83, 231, 2, 'fa fa-twitter', ''),
(84, 231, 3, 'fa fa-instagram', ''),
(85, 235, 1, 'fa fa-facebook', ''),
(86, 235, 2, 'fa fa-twitter', ''),
(87, 235, 3, 'fa fa-instagram', ''),
(88, 296, 1, 'fa fa-facebook', ''),
(89, 296, 2, 'fa fa-twitter', ''),
(90, 296, 3, 'fa fa-instagram', ''),
(91, 296, 4, 'fa fa-google-plus', ''),
(92, 307, 1, 'fa fa-facebook', ''),
(93, 307, 2, 'fa fa-twitter', ''),
(94, 307, 3, 'fa fa-instagram', ''),
(95, 307, 4, 'fa fa-google-plus', ''),
(99, 326, 1, 'fa fa-facebook', ''),
(100, 326, 2, 'fa fa-twitter', ''),
(101, 326, 3, 'fa fa-instagram', 'https://www.instagram.com/lagosito/'),
(102, 328, 1, 'fa fa-facebook', ''),
(103, 328, 2, 'fa fa-twitter', ''),
(104, 328, 3, 'fa fa-instagram', ''),
(105, 328, 4, 'fa fa-google-plus', ''),
(181, 479, 1, 'fa fa-facebook', ''),
(182, 479, 2, 'fa fa-twitter', ''),
(183, 479, 3, 'fa fa-instagram', ''),
(184, 479, 4, 'fa fa-google-plus', ''),
(185, 479, 5, 'fa fa-youtube', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pry_slider`
--

CREATE TABLE IF NOT EXISTS `pry_slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pry_modulo` int(11) NOT NULL,
  `imagen` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `link` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=203 ;

--
-- Volcado de datos para la tabla `pry_slider`
--

INSERT INTO `pry_slider` (`id`, `id_pry_modulo`, `imagen`, `link`) VALUES
(34, 94, 'modulo_c122sliderdefault.jpg', ''),
(39, 97, 'modulo_c17sliderdefault.jpg', ''),
(41, 94, '1409_57d950e094099.png', ''),
(43, 98, 'modulo_c131sliderdefault.jpg', ''),
(44, 99, 'modulo_c14sliderdefault.jpg', ''),
(45, 98, '1409_57d95c4bcc5c7.png', ''),
(46, 99, '1409_57d95c766ba5b.png', ''),
(48, 118, '', ''),
(54, 97, '2109_57e2a3b786efb.png', ''),
(55, 94, '2109_57e2a477c40b3.jpg', ''),
(56, 118, '', ''),
(58, 170, 'modulo_c17sliderdefault.jpg', ''),
(59, 171, 'modulo_c131sliderdefault.jpg', ''),
(60, 172, 'modulo_c14sliderdefault.jpg', ''),
(61, 184, '', ''),
(62, 188, '', ''),
(80, 269, '0102_5891f6d9b7c00.jpg', 'http://www.citeagroalimentario.pe/cursos-y-servicios?sector=4&categ=1&curso=3'),
(81, 269, '3011_583f5659df02d.jpg', ''),
(82, 269, '3011_583f5694d15f2.jpg', ''),
(83, 269, '3011_583f56b75326f.jpg', ''),
(85, 289, '0612_584740a213263.png', ''),
(86, 289, '0612_584740a3189cc.png', ''),
(87, 289, '0612_584740a40690e.png', ''),
(88, 289, '0612_584740db49d11.png', ''),
(90, 289, '0612_584740dd6cd9b.png', ''),
(91, 289, '0612_584740de665db.png', ''),
(92, 289, '0612_584740df5f8c4.png', ''),
(93, 303, '0912_584b24858e178.png', ''),
(94, 303, '0912_584b248716bd4.png', ''),
(95, 303, '0912_584b248814c7b.png', ''),
(96, 303, '0912_584b24890b518.png', ''),
(97, 303, '0912_584b24c516a80.png', ''),
(98, 303, '0912_584b24c6131fb.png', ''),
(99, 303, '0912_584b24c714e48.png', ''),
(100, 303, '0912_584b24c801ac2.png', ''),
(101, 303, '0912_584b24c9b79b8.png', ''),
(114, 418, 'modulo_c_partnerssliderdefault.png', ''),
(145, 451, '1002_589dd5a585206.jpg', ''),
(146, 451, '1002_589dd5d5229ac.jpg', ''),
(147, 451, '1002_589dd7a9464d4.jpg', ''),
(150, 450, '1002_589df15d388db.jpeg', 'Urbanova'),
(151, 450, '1002_589df19fd8e5a.png', 'Open Plaza'),
(152, 450, '1002_589df20d54df6.png', 'Real Plaza'),
(153, 450, '1002_589df23c9e131.png', 'Presidente Ejecutivo'),
(154, 450, '1002_589df2bb3bdd6.jpeg', 'Seminarium Perú'),
(156, 289, '1302_58a1d5489cf70.png', ''),
(157, 289, '1302_58a1d54abf21e.png', ''),
(158, 289, '1302_58a1d551107f0.png', ''),
(159, 289, '1302_58a1d55230f43.png', ''),
(160, 289, '1302_58a1d5533fc6d.png', ''),
(161, 289, '1302_58a1d5565d123.png', ''),
(162, 289, '1302_58a1d557763b9.png', ''),
(163, 289, '1302_58a1d55865f26.png', ''),
(164, 289, '1302_58a1d559738b2.png', ''),
(165, 303, '1302_58a1d5c064140.png', ''),
(166, 303, '1302_58a1d5c473e4e.png', ''),
(167, 303, '1302_58a1d5c57a472.png', ''),
(168, 303, '1302_58a1d5c6645e6.png', ''),
(169, 303, '1302_58a1d5c75ecd0.png', ''),
(170, 303, '1302_58a1d5c855a85.png', ''),
(171, 303, '1302_58a1d5c94fec1.png', ''),
(172, 303, '1302_58a1d5ca4bc7e.png', ''),
(182, 406, '1302_58a2474b6f057.jpg', 'sadasf'),
(183, 470, '2002_58ab3bee53e46.png', ''),
(193, 470, '2002_58ab3bd633b02.png', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pry_slider_txt`
--

CREATE TABLE IF NOT EXISTS `pry_slider_txt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pry_slider` int(11) NOT NULL,
  `id_idioma` int(11) NOT NULL,
  `texto` text COLLATE utf8_spanish_ci NOT NULL,
  `texto2` text COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=65 ;

--
-- Volcado de datos para la tabla `pry_slider_txt`
--

INSERT INTO `pry_slider_txt` (`id`, `id_pry_slider`, `id_idioma`, `texto`, `texto2`) VALUES
(1, 48, 1, '<p><b>NUESTROS MENSAJES</b></p><p><br></p><p>Nullam eget turpis vitae lacus maximus dictum et ac arcu. Fusce sit amet blandit ipsum. Proin sodales massa vitae nulla lobortis venenatis. Vestibulum finibus, justo sed tristique volutpat, dolor ante ultrices metus, eget tempor velit nisi at mi. In et augue aliquam, congue ex nec, rhoncus libero. Quisque cursus ipsum sed rhoncus bibendum. Duis eu mi urna. Integer hendrerit cursus mauris, in egestas sapien vestibulum sed. Nulla facilisi. Pellentesque eget enim quis elit varius efficitur. Fusce non dapibus tortor. Fusce mattis libero non diam maximus, ac eleifend felis malesuada.<br></p>', ''),
(2, 56, 1, '<p><b>NUESTROS MENSAJES</b></p><p><br></p><p>Nullam eget turpis vitae lacus maximus dictum et ac arcu. Fusce sit amet blandit ipsum. Proin sodales massa vitae nulla lobortis venenatis. Vestibulum finibus, justo sed tristique volutpat, dolor ante ultrices metus, eget tempor velit nisi at mi. In et augue aliquam, congue ex nec, rhoncus libero. Quisque cursus ipsum sed rhoncus bibendum. Duis eu mi urna. Integer hendrerit cursus mauris, in egestas sapien vestibulum sed. Nulla facilisi. Pellentesque eget enim quis elit varius efficitur. Fusce non dapibus tortor. Fusce mattis libero non diam maximus, ac eleifend felis malesuada.</p>', ''),
(3, 61, 1, '<p><b>NUESTROS MENSAJES</b></p><p><br></p><p>Nullam eget turpis vitae lacus maximus dictum et ac arcu. Fusce sit amet blandit ipsum. Proin sodales massa vitae nulla lobortis venenatis. Vestibulum finibus, justo sed tristique volutpat, dolor ante ultrices metus, eget tempor velit nisi at mi. In et augue aliquam, congue ex nec, rhoncus libero. Quisque cursus ipsum sed rhoncus bibendum. Duis eu mi urna. Integer hendrerit cursus mauris, in egestas sapien vestibulum sed. Nulla facilisi. Pellentesque eget enim quis elit varius efficitur. Fusce non dapibus tortor. Fusce mattis libero non diam maximus, ac eleifend felis malesuada.<br></p>', ''),
(4, 62, 1, '<p><b>NUESTROS MENSAJES</b></p><p><br></p><p>Nullam eget turpis vitae lacus maximus dictum et ac arcu. Fusce sit amet blandit ipsum. Proin sodales massa vitae nulla lobortis venenatis. Vestibulum finibus, justo sed tristique volutpat, dolor ante ultrices metus, eget tempor velit nisi at mi. In et augue aliquam, congue ex nec, rhoncus libero. Quisque cursus ipsum sed rhoncus bibendum. Duis eu mi urna. Integer hendrerit cursus mauris, in egestas sapien vestibulum sed. Nulla facilisi. Pellentesque eget enim quis elit varius efficitur. Fusce non dapibus tortor. Fusce mattis libero non diam maximus, ac eleifend felis malesuada.<br></p>', ''),
(5, 80, 1, 'PATOLOGÍA AVIAR: Principios de prevención y cuidado avícola.', 'Curso Internacional - 15 de Febrero'),
(6, 81, 1, 'Systematic innovation thinking', ''),
(7, 82, 1, 'Conferencia Internacional: Nuevas tendencias y tecnologías agroalimentarias', ''),
(8, 83, 1, 'Desarrollo de Proyectos I+D+i', ''),
(9, 80, 2, 'Amazing', ''),
(10, 81, 2, 'Systematic innovation thinking', ''),
(11, 82, 2, 'Conferencia Internacional: Nuevas tendencias y tecnologías agroalimentarias', ''),
(12, 83, 2, 'Desarrollo de Proyectos I+D+i', ''),
(14, 113, 1, '<b>NUESTROS MENSAJES</b><br><br>', ''),
(15, 114, 1, 'Lorem ipsum', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500.'),
(16, 145, 1, '14º Congreso Internacional de Retail 2017', '15 - 16 marzo 2017'),
(17, 146, 1, 'Cambiar o Desaparecer: Hipercompetencia en el retail peruano', '14º Congreso Internacional de Retail 2017'),
(18, 147, 1, 'LLUIS MARTÍNEZ – RIBES', 'Profesor. Experto en Marketing y Retail Innovation'),
(19, 150, 1, 'RICARDO DELGADO', 'Gerente Central de Negocios '),
(20, 151, 1, 'JOSÉ ANTONIO CONTRERAS', 'Gerente General'),
(21, 152, 1, 'DANIEL DUHARTE', 'Gerente General '),
(22, 153, 1, 'ARNOLD WU', 'Wu Restaurantes '),
(23, 154, 1, 'KATIA RACHITOFF', 'Gerente general '),
(24, 156, 1, '', ''),
(25, 156, 2, '', ''),
(26, 157, 1, '', ''),
(27, 157, 2, '', ''),
(28, 158, 1, '', ''),
(29, 158, 2, '', ''),
(30, 159, 1, '', ''),
(31, 159, 2, '', ''),
(32, 160, 1, '', ''),
(33, 160, 2, '', ''),
(34, 161, 1, '', ''),
(35, 161, 2, '', ''),
(36, 162, 1, '', ''),
(37, 162, 2, '', ''),
(38, 163, 1, '', ''),
(39, 163, 2, '', ''),
(40, 164, 1, '', ''),
(41, 164, 2, '', ''),
(42, 165, 1, '', ''),
(43, 165, 2, '', ''),
(44, 166, 1, '', ''),
(45, 166, 2, '', ''),
(46, 167, 1, '', ''),
(47, 167, 2, '', ''),
(48, 168, 1, '', ''),
(49, 168, 2, '', ''),
(50, 169, 1, '', ''),
(51, 169, 2, '', ''),
(52, 170, 1, '', ''),
(53, 170, 2, '', ''),
(54, 171, 1, '', ''),
(55, 171, 2, '', ''),
(56, 172, 1, '', ''),
(57, 172, 2, '', ''),
(58, 175, 1, ';l;lm;lm;lm', ''),
(59, 182, 1, 'xscds', 'dssdaasd'),
(60, 183, 1, 'Partner 1', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500.'),
(64, 193, 1, 'Partner 2', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pry_tipografia_personalizada`
--

CREATE TABLE IF NOT EXISTS `pry_tipografia_personalizada` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_proyecto` int(11) NOT NULL,
  `estilo` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `titulo` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `parrafo` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `titulo_url` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `parrafo_url` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `seleccionada` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `pry_tipografia_personalizada`
--

INSERT INTO `pry_tipografia_personalizada` (`id`, `id_proyecto`, `estilo`, `titulo`, `parrafo`, `titulo_url`, `parrafo_url`, `seleccionada`) VALUES
(1, 20, '=Raleway:300 - =Playfair+Display:700', '=Raleway:300', '=Playfair+Display:700', 'https://fonts.googleapis.com/css?family=Raleway:300', 'https://fonts.googleapis.com/css?family=Playfair+Display:700', 0),
(2, 20, 'Raleway:300 - Playfair+Display:700', 'Raleway', 'Playfair+Display', 'https://fonts.googleapis.com/css?family=Raleway:300', 'https://fonts.googleapis.com/css?family=Playfair+Display:700', 0),
(3, 20, 'Londr - Playf', 'Londr', 'Playf', 'https://fonts.googleapis.com/css?family=Londrina+Outline', 'https://fonts.googleapis.com/css?family=Playfair+Display:700', 0),
(4, 20, 'Londrina+Outline - Playfair+Display', 'Londrina+Outline', 'Playfair+Display', 'https://fonts.googleapis.com/css?family=Londrina+Outline', 'https://fonts.googleapis.com/css?family=Playfair+Display:700', 1),
(5, 5, 'Londrina+Outline - Playfair+Display', 'Londrina+Outline', 'Playfair+Display', 'https://fonts.googleapis.com/css?family=Londrina+Outline', 'https://fonts.googleapis.com/css?family=Playfair+Display:700', 0),
(6, 5, 'Londrina+Outline - Playfair+Display', 'Londrina-Outline', 'Playfair-Display', 'https://fonts.googleapis.com/css?family=Londrina+Outline', 'https://fonts.googleapis.com/css?family=Playfair+Display:700', 1),
(7, 22, 'Raleway - Cormorant', 'Raleway', 'Cormorant', 'https://fonts.googleapis.com/css?family=Raleway', 'https://fonts.googleapis.com/css?family=Cormorant', 1),
(14, 36, 'Oxygen - Oxygen', 'Oxygen', 'Oxygen', 'https://fonts.googleapis.com/css?family=Oxygen', 'https://fonts.googleapis.com/css?family=Oxygen', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `shop_clientes`
--

CREATE TABLE IF NOT EXISTS `shop_clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_proyecto` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nombre` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `pais` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `localidad` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `region` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `codigo_postal` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `informacion` text COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `shop_pedidos`
--

CREATE TABLE IF NOT EXISTS `shop_pedidos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_shop_cliente` int(11) NOT NULL,
  `subtotal` decimal(10,2) NOT NULL,
  `costo_envio` decimal(5,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `shop_productos`
--

CREATE TABLE IF NOT EXISTS `shop_productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_shop_pedido` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `costo` decimal(10,2) NOT NULL,
  `cantidad` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nivel_id` int(11) NOT NULL DEFAULT '1',
  `username` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `imagen` varchar(300) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'generic-avatar.png',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=61 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nivel_id`, `username`, `name`, `email`, `password`, `imagen`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 4, 'mchirinos', 'Angel Gonzales', 'mchirinos@peruyoung.com', '$2y$10$eixPH2Cmm.KQWFizlr/UGOY6QbozI4fyyMwhO37SLwmsR8yeTk.4.', 'generic-avatar.png', 'Tq7nRk3hJvG7tT6vlMpAJZ8zpH7cIPzn4e5sr7QzPJoLPSCDDtws5ff0gjwY', '2017-01-04 14:13:34', '2017-01-04 19:13:34'),
(2, 3, 'stgabriel', 'Gabriel Lagos', 'gabriel.nlagos@gmail.com', '$2y$10$Ti0gAH8y.KGP3GfxT/wpyu1p03cdXrjugNMCE55X2I5hXug4m8zH6', 'generic-avatar.png', 'z9baIjmMm0YL8ZxTky9W9cqx3opEOlqHYfoxmJgZDHqjv0CM5CbSfqzR9FO3', '2017-05-04 18:43:27', '2017-05-04 22:43:27'),
(3, 3, 'comercial', 'comercial', 'comercial@mipagina.com', '$2y$10$GzEmU7mSgrI5bOcl2WN/IeGTgYK1o58Tvm1XhUXRy4ZqRJUS7tg/i', '2409_57e6e543e7a01.png', '0x1b77g04YhWE9ttrxg3SmYE8Z5rX6wdI9D2U2t1F8tw1oDJalnlLeWuHeoB', '2017-02-27 13:17:56', '2017-02-27 18:17:56'),
(5, 3, 'stmartin', 'Martin Kann', 'martin@studiotigres.com', '$2y$10$Rhd6q1deaQ2QjtA4/ncBBu6gg1B7ktbHfoVlfW6G7OvE80XfaCopq', '2409_57e6e57cad473.png', 'UehYrdFJCCIUfPQ3j0oyCXfLFbjBFWfX44bjrkCk6pjXiD6T4pEdYNOoTUUD', '2017-02-23 00:39:16', '2017-02-23 05:39:16'),
(11, 1, 'tdoron', 'tdoron', 'tdoron@gmail.com', '$2y$10$C6bqRy6ZWg81NLD6Qi4vgucZzGL.qxdGndf1jXbeoMXx7RNW43kne', 'generic-avatar.png', 'thj91cVXkGYPhzLNvsGDhvPUDTQOIb34EBMJ3ySwwwy39gUlB1mCigTQ8oSt', '2016-12-23 16:11:47', '2016-11-19 01:31:16'),
(12, 1, 'tester', 'Tester', 'tester@apros.pe', '$2y$10$jIvGN7NQSfYTaCiBql9BDep.HXeulCfHBBRAxk.uO9rxrCprIYlci', 'generic-avatar.png', 'RoEMEAtnugGniSf2JA4cquQZhrBeiwBWRGAM3l0Db6pNWd5VKjxSrdP14euU', '2017-02-21 18:43:15', '2017-02-21 23:43:15'),
(13, 1, '', 'juan', 'juanvasquez12@mail.com', '$2y$10$D7kAmp2FZEzNTHHq594dPuTyqOvp6T43xLqEhDTuO0pdKiBBewwoy', 'generic-avatar.png', 'BFSb6IkAnI2mwhFTvMkr5yND0mkdIKKPpRx4Tr93eqTirwz0XLwQOvWsVIga', '2016-12-23 16:11:51', '2016-07-14 18:57:06'),
(14, 1, '', 'cliente2', 'cliente2@mail.com', '$2y$10$n3/C2FOOYM9M74RgwTzNNOXyHNNs3a7NPhQrxbXl.QxP237UtMcbO', 'generic-avatar.png', NULL, '2016-12-23 16:11:53', '2016-07-14 18:58:15'),
(15, 1, '', 'test', 'mail@studiotigres.com', '', 'generic-avatar.png', NULL, '2016-12-23 16:11:54', '2016-07-18 23:54:45'),
(16, 3, 'vcosta', 'Victor Costa', 'vcosta@apros.pe', '$2y$10$eixPH2Cmm.KQWFizlr/UGOY6QbozI4fyyMwhO37SLwmsR8yeTk.4.', 'generic-avatar.png', 'S7q4F47RCEmJPuvviTdX8qYH5dOhTAsKcUqOoo29DpXYInZ0YMH1BQTwvqAp', '2017-01-03 21:48:21', '2016-12-15 17:21:00'),
(17, 1, '', 'Test', 'test@gmail.com', '', 'generic-avatar.png', NULL, '2016-12-23 16:11:59', '2016-07-23 10:00:34'),
(18, 1, 'st_martin', 'st_martin', 'tinola@gmail.com', '', 'generic-avatar.png', NULL, '2016-12-23 16:12:02', '2016-11-10 04:08:30'),
(25, 1, '', '', 'prueba@modulos.com', '', 'generic-avatar.png', NULL, '2016-12-23 16:12:06', '2016-12-01 00:47:01'),
(26, 1, '', '', 'mail@gabriellagos.com', '', 'generic-avatar.png', NULL, '2016-12-23 16:12:08', '2016-08-25 23:35:27'),
(27, 1, '', '', 'test@abc.de', '', 'generic-avatar.png', NULL, '2017-01-03 19:44:14', '2017-01-04 00:44:14'),
(28, 1, '', '', 'abc@def.gh', '', 'generic-avatar.png', NULL, '2016-12-23 16:12:12', '2016-09-01 14:53:30'),
(30, 2, '', 'Frida', 'frida@copiloto.pe', '$2y$10$pDcOSYbjuNapRynPOj3hqOQgJG5FhmGv5bjzQOkpzo5lrO/tyTfXy', 'generic-avatar.png', '2FN3fY1vExor9CopvqkAobBWreRcYA1QHX6GW8DVifMgIFg3V4FtauhQs7DI', '2016-12-23 16:12:14', '2016-10-07 23:28:55'),
(31, 1, '', 'Jesuitas', 'jesuitas@mail.com', '$2y$10$VFN3iRwuqtlznnsB/fPFMeyIVJDPXPp4qrCPqjaUEvlwdqLnZe/ae', 'generic-avatar.png', 'eJfePklwYmtKy1xPwsNz3hE2KqshwSGADAXxTK0O78TPSvGJesUXxdbnYwJX', '2016-12-23 16:12:16', '2016-10-11 01:53:43'),
(33, 1, '', '', 'test@test.com', '', 'generic-avatar.png', NULL, '2016-12-23 16:12:18', '2016-09-23 19:45:09'),
(38, 1, 'inyogo', 'Julio', 'jmedina@inyogo.com.pe', '$2y$10$64pkhbAhYS/N9iHX.B2//e19No48FeAWuAisNiX4z6Z84FvBG5RWm', 'generic-avatar.png', 'fHhkq1COEYN0hmOYoXdWEkOeSzPAhRjnlZ2TjE5F1PgD48BzHWkG2UcvmcM6', '2017-02-16 18:35:10', '2017-02-16 23:35:10'),
(39, 1, '', 'Gabriel', 'gabriel.lagos@studiotigres.com', '', 'generic-avatar.png', NULL, '2016-12-23 16:12:22', '2016-10-20 00:26:35'),
(40, 1, '', 'Sandra', 'martin.kann@dinamo.com.pe', '', 'generic-avatar.png', NULL, '2016-12-23 16:12:24', '2016-10-24 23:11:06'),
(42, 1, '', 'Gabriel', '123@gmail.com', '', 'generic-avatar.png', NULL, '2016-12-23 16:12:26', '2016-10-26 00:05:50'),
(45, 1, '', 'Gabriel', 'qwqwqw@test.com', '', 'generic-avatar.png', NULL, '2016-12-23 16:12:28', '2016-10-27 13:02:06'),
(48, 1, '', 'Gabriel', 'test@teste.com', '', 'generic-avatar.png', NULL, '2016-12-23 16:12:30', '2016-11-01 00:40:13'),
(50, 1, '', 'Vicens', 'contact@vicensfayos.com', '', 'generic-avatar.png', NULL, '2016-12-23 16:12:32', '2016-11-04 15:14:08'),
(54, 1, 'sanfernando', 'sanfernando', 'citeagroalimentario@san-fernando.com.pe', '$2y$10$SeMRvgO2Iaeyq5Y8wl1G8ulyeaNk9g.6RP2KdUjujo7uGH6ge.wIK', 'generic-avatar.png', 'akeEN1NzyUw8YxEIEh3sOGGtPyrxVSWWVT4k58uEt7TESz2DfpDJIC9Gw5LH', '2016-12-23 16:12:35', '2016-12-15 20:09:49'),
(55, 1, '1kgadmin', '1kgadmin', 'info@1-k-g.com', '$2y$10$PfhcrQBmFLUSqk8Vnzw.vuNg5RiMAiqZ31d8p66w5wnEEcarY2Ot.', 'generic-avatar.png', 'mbJk3b7y275totDlg3b0kJJEYXNiQoNG8T4ATxcUFnlze28891pDOSqXwSlm', '2017-03-03 11:55:00', '2017-03-03 16:55:00'),
(56, 2, 'Curiosidad', 'Wili', 'wili@sed.pe', '$2y$10$UoS2c0RKalqjiWCaziYmqe/syyaALNjJBAdTOT01Lobru8bSsbdAa', 'generic-avatar.png', 'vwmTyWRlPsStIObgFyxtsBUNFokijoDrl8UP0CijlkKMK8CKmKL7mKZcRMze', '2017-02-14 21:07:37', '2017-02-15 02:07:37'),
(57, 2, 'Laborum', 'Laborum', 'sergio.limo@laborum.pe', '$2y$10$QbVsV71ZOCURjSPRtOep0u3EkBXr.ikEYqekNqbzt7tVgssltZZOG', 'generic-avatar.png', 'jhfIzZu9N9STX6AAq1OPo0nBCe8yRZD4JKkMhqenk8FyAT5ybHYUSo6kJEUy', '2017-02-15 16:04:20', '2017-02-15 21:04:20'),
(58, 1, 'seminarium', 'seminarium', 'seminarium@seminarium.pe', '$2y$10$F8dfjHnkQolBhYDMLjgDouykMxZ0z6PrgPGJSaYyMKIo7BK4BTOf.', 'generic-avatar.png', '21lYp40UqeDEWR8OvnpD2vmM6bsO0qO8XS4iJwRTgnMVRJhedpYVycAqK9jz', '2017-02-24 16:40:18', '2017-02-24 21:40:18');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
