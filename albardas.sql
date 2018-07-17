-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-05-2018 a las 07:07:00
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `albardas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `assistance`
--

CREATE TABLE `assistance` (
  `id_work` varchar(100) COLLATE utf8_bin NOT NULL,
  `date` varchar(15) COLLATE utf8_bin NOT NULL,
  `jueves` varchar(2) COLLATE utf8_bin NOT NULL,
  `viernes` varchar(2) COLLATE utf8_bin NOT NULL,
  `sabado` varchar(2) COLLATE utf8_bin NOT NULL,
  `domingo` varchar(2) COLLATE utf8_bin NOT NULL,
  `lunes` varchar(2) COLLATE utf8_bin NOT NULL,
  `martes` varchar(2) COLLATE utf8_bin NOT NULL,
  `miercoles` varchar(2) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `costumers`
--

CREATE TABLE `costumers` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_bin NOT NULL,
  `adress` varchar(200) COLLATE utf8_bin NOT NULL,
  `phone` varchar(20) COLLATE utf8_bin NOT NULL,
  `rfc` varchar(20) COLLATE utf8_bin NOT NULL,
  `embark` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `costumers`
--

INSERT INTO `costumers` (`id`, `name`, `adress`, `phone`, `rfc`, `embark`) VALUES
(1, 'AGROINDUSTRIAS DEANDAR DE DELICIAS S.A. DE C.V.\r\n', 'Abasolo norte #2993 col cumbres, Saltillo Coahuila.', '6394736350', 'AID891221HT4', '0'),
(2, 'Agroprocesos Naturales SPR de RL de CV\r\n', 'Abasolo norte #2993 col cumbres, Saltillo Coahuila.', '01 444 961 1118', 'ANA0703308N9', '0'),
(3, 'MATERIA PRIMA ANTUNEZ', 'CALLE MAIZ, BODEGA 2011, ABASTOS TORREON', '12344678', 'ASDFDDHTRYW', '0'),
(4, 'INTERNATIONAL BOX CEOS SPR DE RL DE CV\r\n\r\n', 'Abasolo norte #2993 col cumbres, Saltillo Coahuila', '844 122 85 00', 'IBC170412VC6', '0'),
(5, 'LA TOMATERA', 'LA TOMATERA PRASS SA DE CV', '8421012369', 'ouboub66ss', '0'),
(6, 'SWEET SUPERIOR FRUIT LTD CO', '2101 W MILIARY UNIT K6', '9566876732', 'OVUO566S6SS', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuadrillas`
--

CREATE TABLE `cuadrillas` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `nPeople` int(11) DEFAULT NULL,
  `coments` text,
  `liable` varchar(30) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cuadrillas`
--

INSERT INTO `cuadrillas` (`id`, `name`, `nPeople`, `coments`, `liable`, `phone`) VALUES
(1, 'cuadrilla ', 50, 'asdosdifyvasdlfui', 'don fifwel', '848048480'),
(2, 'asdasdasd', 50, 'asdasdas', 'asasdasd', '50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `employes`
--

CREATE TABLE `employes` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_bin NOT NULL,
  `rfc` varchar(15) COLLATE utf8_bin NOT NULL,
  `addres` varchar(240) COLLATE utf8_bin NOT NULL,
  `city` varchar(200) COLLATE utf8_bin NOT NULL,
  `cp` varchar(10) COLLATE utf8_bin NOT NULL,
  `tel` varchar(15) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `employes`
--

INSERT INTO `employes` (`id`, `name`, `rfc`, `addres`, `city`, `cp`, `tel`) VALUES
(1, 'El Calabacillal SPR de RL de CV\r\n', 'CAL121103A17', 'Calle Guerrero,Numero 14 Col. Centro', 'Parras ,Coahuila,', '27980', ' (842)4220105'),
(2, 'Las Albardas SPR de RL de CV', 'ALB141027VC7', 'Calle Orilla de Agua Num. 927 Col. Centro', 'Parras, Coahuila Mexico', '27980', '(842)4220105'),
(3, 'El Cegador SPR de RL de CV', 'CEG130413AZ7', 'Calle Vicente Guerrero Num. 14 Col. Centro ', 'Parras, Coahuila Mexico', '27980', '(842) 4220105');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `second_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `second_last_name` varchar(20) DEFAULT NULL,
  `date_bird` varchar(15) DEFAULT NULL,
  `origin_place` varchar(30) DEFAULT NULL,
  `diaseases` text,
  `status` int(11) DEFAULT NULL,
  `curp` varchar(20) DEFAULT NULL,
  `salary_day` varchar(10) DEFAULT NULL,
  `contract_time` varchar(10) DEFAULT NULL,
  `advance` varchar(10) NOT NULL,
  `cuadrilla` int(11) DEFAULT NULL,
  `start_date` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`id`, `name`, `second_name`, `last_name`, `second_last_name`, `date_bird`, `origin_place`, `diaseases`, `status`, `curp`, `salary_day`, `contract_time`, `advance`, `cuadrilla`, `start_date`) VALUES
(1, 'asdasdasd', 'aasasd', 'asdasdasd', 'asdasdasdsda', '2018-05-11', 'asddasd', 'asdfasdasd', 1, 'sdasdasdasdasd', '150', '30', '30', 1, '2018-05-20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `pass` varchar(150) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL,
  `img_profile` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `pass`, `phone`, `address`, `img_profile`) VALUES
(1, 'jose carlos morin', 'carlos@mail.com', '1345', '8421169920', 'parras de la funte', 'photo.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `assistance`
--
ALTER TABLE `assistance`
  ADD PRIMARY KEY (`id_work`);

--
-- Indices de la tabla `costumers`
--
ALTER TABLE `costumers`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cuadrillas`
--
ALTER TABLE `cuadrillas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `employes`
--
ALTER TABLE `employes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`cuadrilla`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cuadrillas`
--
ALTER TABLE `cuadrillas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `employes`
--
ALTER TABLE `employes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `personal`
--
ALTER TABLE `personal`
  ADD CONSTRAINT `id` FOREIGN KEY (`cuadrilla`) REFERENCES `cuadrillas` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
