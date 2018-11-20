-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-11-2018 a las 16:29:20
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Estructura de tabla para la tabla `accountant`
--

CREATE TABLE `accountant` (
  `id` int(11) NOT NULL,
  `f_embark` int(11) DEFAULT NULL,
  `f_freight` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `accountant`
--

INSERT INTO `accountant` (`id`, `f_embark`, `f_freight`) VALUES
(1, 108, 103);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `assistance`
--

CREATE TABLE `assistance` (
  `id` int(11) NOT NULL,
  `id_work` int(11) DEFAULT NULL,
  `datea` date DEFAULT NULL,
  `assis` double DEFAULT NULL,
  `time_e` varchar(5) DEFAULT NULL,
  `place` varchar(15) DEFAULT NULL,
  `price` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `boxes`
--

CREATE TABLE `boxes` (
  `id` int(11) NOT NULL,
  `id_transporters` int(11) NOT NULL,
  `type` varchar(50) DEFAULT NULL,
  `temperature` varchar(50) DEFAULT NULL,
  `grades` varchar(5) DEFAULT NULL,
  `placa` varchar(15) DEFAULT NULL,
  `num_econ` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `boxes`
--

INSERT INTO `boxes` (`id`, `id_transporters`, `type`, `temperature`, `grades`, `placa`, `num_econ`) VALUES
(11, 5, 'Estaca', 'NA', 'C Â°', 'EZ37877', 'NA'),
(12, 6, 'Refrigerado', '45', 'F Â°', '60UB7U', 'ST01'),
(13, 6, 'Refrigerado', '45', 'F Â°', '07-MB-BU', 'NA'),
(15, 6, 'Refrigerado', '45', 'F Â°', 'A01977A', '6902'),
(16, 6, 'Refrigerado', '45', 'C Â°', 'A9080N - TX', '8'),
(17, 11, 'Refrigerado', '45', 'F Â°', '20UC8P', '100'),
(20, 6, 'Refrigerado', '45', 'F Â°', 'A3160N', 'ST-02'),
(21, 10, 'Refrigerado', '45', 'F Â°', 'A-16-74N', '12'),
(22, 12, 'Refrigerado', '45', 'F Â°', '187-UP4', '09'),
(23, 6, 'Remolque', '45', 'F Â°', '07-UB-8U', 'ST03'),
(24, 13, 'Refrigerado', '45', 'F Â°', '840DJ9', '81'),
(25, 6, 'Refrigerado', '45', 'F Â°', '085C-524', 'ST04'),
(26, 5, 'Estaca', 'na', 'C Â°', 'FA13466', 'na'),
(27, 6, 'Refrigerado', '45', 'F Â°', '914-WP-4', '86496'),
(28, 14, 'Estaca', 'N/A', 'C Â°', 'HJ49077', '5503586366'),
(29, 11, 'Refrigerado', '45', 'C Â°', 'A90-80N', '8'),
(30, 15, 'Refrigerado', '45', 'F Â°', '852WBP6', 'TP6'),
(31, 16, 'Refrigerado', '45', 'F Â°', '914WP4', '86496'),
(32, 17, 'Estaca', 'N/A', 'C Â°', '04AJ5C', 'NA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `description` varchar(150) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`) VALUES
(1, 'abono ', ''),
(2, 'ACTIVO FIJO', ''),
(3, 'COMBUSTIBLE ', ''),
(4, 'FERTILIZANTES ', ''),
(5, 'FUNGICIDAS  ', ''),
(6, 'GASTOS DE OPERACIÃ“N', ''),
(7, 'GASTOS DE REPRESENTA', ''),
(8, 'GANADERÃA', ''),
(9, 'HERBICIDAS', ''),
(10, 'HERRAMIENTAS', ''),
(11, 'INOCUIDAD', ''),
(12, 'INSECTICIDAS', ''),
(13, 'INSUMOS PARA CULTIVO', ''),
(14, 'INSUMOS PARA EMPAQUE', ''),
(15, 'MAQUINARIA ', ''),
(16, 'MATERIAL DE LIMPIEZA', ''),
(17, 'MATERIAL ELÃ‰CTRICO ', ''),
(18, 'MATERIAL PARA OFICIN', ''),
(19, 'MATERIAL DE CONSTRUC', ''),
(20, 'MEJORADOR DE SUELO', ''),
(21, 'REFACCIONES', ''),
(22, 'SEMILLAS', ''),
(23, 'SERVICIOS', ''),
(26, 'Radio Portatil iCOM ', ''),
(27, 'SEMILLAS DE EXPORTAC', 'DE ALTA CALIDAD');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `costumers`
--

CREATE TABLE `costumers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `rfc` varchar(15) DEFAULT NULL,
  `embark` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `costumers`
--

INSERT INTO `costumers` (`id`, `name`, `address`, `phone`, `rfc`, `embark`) VALUES
(2, 'AGROINDUSTRIAS DEANDAR DE DELICIAS S.A. DE C.V.', 'Calle CARRETERA DELICIAS NAICA KM 6 No. S/N Num. Int. N/A Col. CAMPESINA DELICIAS, Chihuahua MÃ©xic', '6394736350', 'AID891221HT4', 3),
(4, 'Comercial Parras', 'son centro ', '1111111', 'TSO991022PB6', 0),
(7, 'Agroprocesos Naturales SPR de RL de CV', 'Calle CARR ANTIGUA SAN LUIS MATEHUALA KM 46.7 Localidad VILLA HIDALGO Municipio VILLA HIDALGO Estado', '01 444 961 1118', 'ANA0703308N9', 0),
(8, 'ALEJANDRA MARICELA FUENTES CRUZ', '\" Calle AVE. LOS ANGELES No. 1000 Col. GARZA CANTU SAN NICOLAS DE LOS GARZA, Nuevo LeÃ³n MÃ©xico, C.', '8118129027', 'FUCA800116QA5', 0),
(9, 'ANAVALE PRODUCE CORP', ' Calle W. MILITARY HWY No. 2501 Col . MCALLEN, Texas United States, C.P. 78503', '+5218718960452', 'XEXX010101000', 21),
(11, 'AGROINDUSTRIAS DEANDAR DE DELICIAS S.A. DE C.V.', '\"Calle CARRETERA DELICIAS NAICA KM 6 No. S/N Num. Int. N/A Col. CAMPESINA DELICIAS, Chihuahua MÃ©xic', '6394736350', 'AID891221HT4', 0),
(12, 'CESAR MARTINEZ RODRIGUEZ', 'Na', '1234', 'MARC8106045Y5', 0),
(13, 'CIA COMERCIAL CIMACO SA DE CV', ' Calle AV. HIDALGO PTE No. 399 Num. Int. N/A Col. CENTRO TORREON, Coahuila MÃ©xico, C.P. 27000', '0', 'CCI8111293TA', 0),
(14, 'Comercial Parras, S. A. de C. V.', 'Calle OCAMPO No. Exterior 7 Colonia CENTRO Localidad PARRAS Municipio PARRAS Estado Coahuila MÃ‰XICO', '01 842 422 06 2', 'CPA781221SM7', 0),
(15, 'David AdriÃ¡n GoznÃ¡lez Morales', 'Calle Versalles #123  , Col. Valle de San Angel, San Pedro Garza GarcÃ­a, N. L., Nuevo LeÃ³n, MÃ©xic', '8424226370', 'GOMD891119RJA', 0),
(16, 'Derivados Agroalimenticios del Campo de Zaragoza SPR de RL de CV', 'Calle EL CANGO No. Exterior S/N Colonia EL PEDREGAL Localidad ZARAGOZA Municipio ZARAGOZA Estado San', '0', 'DAC130405BG3', 0),
(17, 'Distribuidora Hortimex SA de CV', 'Calle Calle segunda modulo N Bodega 10 #S/N S/N , Col. Mercado de Abastos, Culiacan, Sinaloa, MÃ©xic', '+526677589500, ', 'DHO010804IX8', 0),
(18, 'ElÃ­as Gerardo GonzÃ¡lez ValdÃ©s', 'Calle AVE. LOS ANGELES No. Exterior 1000 OTE. No. Interior BODEGA #42 Colonia GARZA CANTU Localidad ', '0181 8331 2839', 'GOVE600410Q10', 0),
(19, 'Fidel Pedraza ObregÃ³n', 'Calle AVE. LOS ANGELES No. Exterior 1000 OTE. BOD. 89 Colonia GARZA CANTU Localidad SAN NICOLAS DE L', '01 81 8362 9380', 'PEOF791024I88', 0),
(20, 'GRUPO RANCHO EL NOPAL S.A. DE C.V.', 'Calle AV. CANAL DE TEZONTLE No. PASILLO QR CIRCUIRO 1 Num. Int. BOD Q29 Col. CENTRAL DE ABASTO IZT', '(+55) 56000837 ', 'GRN080917MSA', 0),
(21, 'HERDEZ, S.A. DE C.V.', 'Calle Carretera Panamericana #KM 292  , Col. VillagrÃ¡n, Guanajuato, MÃ©xico CP.38260', '+524111551107', 'HER8301121X4', 0),
(22, 'Honey Bee Produce, LLC', 'Calle 2112 S Shary Rd. #. Suite 24, 25 , Col.  Mission, Texas, United States CP.78572', '0019568970133, ', 'XEXX010101000', 0),
(23, 'IM GENTILONI SAPI DE CV', 'Calle AVENIDA SAN JERONIMO MULERO No. 1002 Col. COLONIA SAN JERONIMO Monterrey, Nuevo LeÃ³n MÃ©xic', '+52 (844) 454 7', 'IGE161020BC0', 0),
(24, 'Jaifar International LLC', 'Calle 85 NE Loop 410 #. STE-210 , Col. San Antonio, Texas, United States CP.78216 ', '+19562691653', 'XEXX010101000', 0),
(25, 'Juan Camacho RamÃ­rez', 'Calle CARRETERA FEDERAL SALIDA A DURANGO No. Exterior 1011 Colonia PLAN DE AYALA Localidad FRESNILLO', '01 493 932 55 4', 'CARJ502161L3', 0),
(26, 'Luis Cabranes Pruneda', 'Calle CARR. LIBRE TORREÃ“N - SALTILLO KM. 28 #S/N  , Col. SIN COLONIA MATAMOROS, Coahuila, MÃ©xico C', '01 871 722 22 9', 'CAPL630811AB9', 0),
(27, 'LUIS MENA LOPEZ', 'Calle DIAGONAL REFORMA No. 1800 Num. Int. 141 Col. SANTA MARIA TORREON, Coahuila MÃ©xico, C.P. 270', '0', 'MELL351226JL8', 1),
(28, 'MarÃ­a de Lourdes Morales Banuet', 'Calle Versalles #123  , Col. Valle de San Ãngel San Pedro Garza GarcÃ­a, N. L., Nuevo LeÃ³n, MÃ©xi', '8424220835', 'MOBL580721H43', 0),
(29, 'Nacional Proveedora de Hortalizas, SA de CV', 'Calle Segunda MÃ³dulo N Local 20 #S/N 101 , Col. Mercado de Abastos, CuliacÃ¡n, Sinaloa, MÃ©xico CP', '667 718 91 10 E', 'NPH021109MS6', 0),
(30, 'Productos jaifar SA de CV', 'Calle CALZADA DEL VALLE No. Exterior 409 No. Interior 245 Colonia DEL VALLE Localidad SAN PEDRO GARZ', '01 81 83 33 91 ', 'PJA010831DU9', 0),
(31, 'PRODUCTOS SELECTOS ANAVALE S.A. DE C.V.', ' Calle BOULEVARD DIAGONAL REFORMA No. 1800 Col. SANTA MARIA TORREON, Coahuila MÃ©xico, C.P. 27020', '8717228509', 'PSA090128HS0', 24),
(32, 'SUNSET HARVEST LLC', '\"Calle WEST MILITARY HWY  No. 2501 Num. Int. N/A Col. SUITE B1 MCALLEN, Texas United States, C.P. 78', '8447645421', 'XEXX010101000', 0),
(33, 'Sweet Superior Fruit LTD CO', '2101 W MILIARY HWY UNIT, K6-K7, MCALLEN TX, 78503', '+19566876732', 'XEXX010101000', 14),
(34, 'Tiendas Soriana, S.A. DE CV..', 'Alejandro de Rodas 3102-A Col. las Cumbres 8vo Sector Monterrey Nuevo LeÃ³n C.P. 64610', '+52 (81) 8329 9', 'TSO991022PB6', 8),
(35, 'TRIPLE H PRODUCE LLIC', 'TX EVERYGREEN COLD STORAGE 78577PHRR US', '95 68 21 23 82', 'XEXX010101000', 18),
(36, 'CASCO PRODUCE SA DE CV', 'BLVD LUIS DONALDO COLOSIO N.735, COL CAMPIRANO, HERMOSILLO SONORA', '+52 (662) 214 9', 'CPR-031223-HK6', 17),
(37, 'CARMELO GARCIA AVILA HERMANOS', 'ENTRONQUE CONGREGACION HIDALGO 25km DE TORREON', '00000000', 'XXXXXXXXXXX', 1),
(38, 'JULIO DE LA LUZ', 'XXXXXXXXXXX', '000000000', 'VENTA AL PUBLIC', 1);

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
(1, 'fddsf', 50, 'wqsdadsa', 'dsfdsf', '8421169920'),
(2, 'dsd', 50, 'oih', 'oboub', '8498414'),
(3, 'sssdsd', 0, '', '', ''),
(4, 'cuadrilla nmero 2', 85, 'en esta cuadrilla vienen 2 persons gay y 3 transexules', 'jose carlos morin', '8421169920'),
(5, '', 0, '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `delivery_addresses`
--

CREATE TABLE `delivery_addresses` (
  `id` int(11) NOT NULL,
  `id_costumer` int(11) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `city` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `delivery_addresses`
--

INSERT INTO `delivery_addresses` (`id`, `id_costumer`, `name`, `address`, `phone`, `city`) VALUES
(18, 9, 'BODEGA 213 ABASTOS', 'Bodega 213 Mercado de Abastos Torreon, Coahuila', '8717228509', 'Torreon Coahuila'),
(20, 33, 'SS - MCALLEN  TX', '2501 W MILIARY HWY UNIT, K6-K7, MCALLEN TX, 78503', '19566876732', 'MCALLEN TX'),
(21, 35, 'TH - DIRECCION', 'TX EVERYGREEN COLD STORAGE 78577PHRR US', '95 68 21 23 82', 'TEXAS'),
(23, 9, 'CEDIS  USA', ' Calle W. MILITARY HWY No. 2501 Col . MCALLEN, Texas United States, C.P. 78503', '+5218718960452', 'MCALLEN TX'),
(24, 36, 'bodega - Hermosillo sonora', 'Blv, Luis Ronaldo Colosio # 735,  Col campirano, Hermosillo sonora', '016622149464', 'HERMOSILLO'),
(25, 31, 'BODEGA 213', 'BODEGA #213 MERCADO DE ABASTOS TORREON COAHUILA. ', '8717228509', 'TORREON COAHUILA'),
(26, 31, 'BOEGA #3 ZACATECAS', 'CALLE FRESNILLO MÃ“DULO D BODEGA #3 COLONIA LINDA VISTA FRESNILLO ZACATECAS', '8717228509	', 'ZACATECAS'),
(27, 36, 'SUCURSAL - MC', 'McAllen, Texas', '+52 (662) 214 9', 'McAllen, Texas'),
(28, 27, 'bodega 141', 'Calle de los tamates bodega #141 mercado de abastos ', '0000000', 'Torreon coahuila'),
(29, 37, 'DIRECCION - CARMELO', 'ENTRONQUE CONGREGACION HIDALGOA 25KM DE TORREON', '000000', 'TORREON'),
(30, 2, 'BODEGA DELICIAS ', 'CARRETERA DELICIAS NAICA KM 6, DELICIAS CHIH. CP 33110', '6394736350', 'DELICIAS CHIH.'),
(31, 38, 'CD-MEXICO', 'Bodega p.98 Central de abastos iztapalapa', '00000000', 'CD MEXICO'),
(32, 34, ' CEDIS Soriana Salinas Victoria', 'Carretera Salinas-Victoria Km. 5.5, Satelite 65500 - Salinas Victoria', '(0181) 8122.956', 'Salinas Victoria, Nuevo LeÃ³n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departures`
--

CREATE TABLE `departures` (
  `id` int(11) NOT NULL,
  `folio` varchar(100) NOT NULL,
  `alm_salida` varchar(100) NOT NULL,
  `alm_entr` varchar(100) NOT NULL,
  `responsable` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `observaciones` varchar(100) NOT NULL,
  `productos` varchar(250) NOT NULL,
  `cantidades` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `drivers`
--

CREATE TABLE `drivers` (
  `id` int(11) NOT NULL,
  `id_transporters` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `num_lic` varchar(15) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `drivers`
--

INSERT INTO `drivers` (`id`, `id_transporters`, `name`, `last_name`, `num_lic`, `address`, `phone`) VALUES
(8, 5, 'JUAN CARLOS ', 'SAUCEDO CAMPA ', 'SACJ720707HCLCM', 'Naranjo 5-9 Zona Centro, Parras de la fuente coahuila', '8421011465'),
(9, 6, 'JOSE LUIS', 'FERNANDO AGUILAR', 'NA', 'NA', '8991480951'),
(10, 6, 'ANTONIO ', 'ORDUÃ‘A TORRES', 'NA', 'NA', '2321234300'),
(13, 6, 'Lorenzo ', 'Antonio OrduÃ±a', 'na', 'na', 'na'),
(15, 11, 'JULIO ', 'SALAZAR', 'NA', 'NA', '8333391665'),
(16, 11, 'JOSE ', 'BERNABED ALVAREZ', 'NA', 'NA', '8681699978'),
(17, 11, 'RICARDO', 'ROCHA CHAVARRIA', 'NA', 'NA', '8971000946'),
(18, 6, 'Acencion ', '  Rodriguez Andrade', 'na', 'na', '8992270854'),
(19, 6, 'Miguel Angel ', 'Ferretis ', 'TAMP405180', 'REYNOSA TAMAULIPAS', '8992465720'),
(20, 10, 'JOSE JESUS', ' CASTILLO RDZ', '00000', '00000', '8685000382'),
(22, 6, 'JOSE LUIS ', 'FAJARDO', 'NA', 'NA', 'NA'),
(23, 12, 'CRISTOBAL ', 'SANCHES', '000', '000', '8712928682'),
(24, 13, 'JESUS', 'SOTO OCHOA', '00', '00', '6673579685'),
(25, 5, 'Pedro ', ' Estala Mijares', '000000000', 'Parras de la fuente', '8721302862'),
(26, 6, 'Jorge Armando ', 'Tinajero ', 'TAMP - 404580', 'Reynosa Tamps', '8993190575'),
(27, 14, 'JUAN CARLOS ', 'RIOS GARCIA', 'N/A', 'N/A', '8341452979'),
(28, 11, 'Pedro Abel', 'Gloria Flores', 'TAMP.406723', 'COL.DOCTORES REYNOSA', '4192655260'),
(29, 15, 'VICENTE ', 'PEREZ ALEMAN', 'DF.001144881', 'SAN PEDRO COAHUILA', '8721177036'),
(30, 15, 'CRISTOBAL', 'PEREZ', 'COAH214884', 'CONCORDIA COAH.', '8721352527'),
(31, 16, 'JESUS MANUEL ', 'HERNANDEZ VILLELA', 'TAMP108360', 'MATAMOROS COAH.', '8999419527'),
(32, 17, 'RAFAEL ', 'SANCHEZ CHAVEZ', 'DF00131888', 'TULTITLAN', '5546068856');

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
(3, 'Las Albardas SPR de RL de CV', 'ALB141027VC7', 'Calle Orilla de Agua Num. 927 Col. Centro', 'Parras, Coahuila Mexico', '27980', '(842)4220105'),
(4, 'El Cegador SPR de RL de CV', 'CEG130413AZ7', 'Calle Vicente Guerrero Num. 14 Col. Centro ', 'Parras, Coahuila Mexico', '27980', '(842) 4220105');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrance`
--

CREATE TABLE `entrance` (
  `id` int(11) NOT NULL,
  `id_ordcomp` int(11) NOT NULL,
  `folio` varchar(250) NOT NULL,
  `almacen` varchar(100) NOT NULL,
  `recepciona` text NOT NULL,
  `fecha` date NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `productos` varchar(250) NOT NULL,
  `cantidades` varchar(200) NOT NULL,
  `precio` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `freights`
--

CREATE TABLE `freights` (
  `id` int(11) NOT NULL,
  `f_flete` varchar(10) NOT NULL,
  `f_embark` varchar(10) NOT NULL,
  `price` int(11) NOT NULL,
  `id_trasport` int(11) NOT NULL,
  `id_truck` int(11) NOT NULL,
  `id_driver` int(11) NOT NULL,
  `id_box` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `id_add` int(11) NOT NULL,
  `currency` varchar(10) NOT NULL,
  `total` varchar(50) NOT NULL,
  `date` varchar(20) NOT NULL,
  `bills` varchar(100) NOT NULL,
  `n_bills` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `freights`
--

INSERT INTO `freights` (`id`, `f_flete`, `f_embark`, `price`, `id_trasport`, `id_truck`, `id_driver`, `id_box`, `id_client`, `id_add`, `currency`, `total`, `date`, `bills`, `n_bills`) VALUES
(116, '180001', '180001', 0, 5, 11, 8, 11, 31, 25, 'MXN', '0', '2018-07-04', '', ''),
(120, '180002', '180002', 21500, 6, 12, 9, 12, 33, 20, 'MXN', '21500', '2018-07-04', '', ''),
(121, '180002', '180002', 0, 6, 12, 9, 12, 1, 20, 'MXN', '21500', '2018-07-04', '', ''),
(122, '180003', '180003', 0, 6, 13, 10, 13, 35, 21, 'MXN', '21500', '2018-07-04', '', ''),
(123, '180003', '180003', 21500, 6, 13, 10, 13, 1, 21, 'MXN', '21500', '2018-07-04', '', ''),
(124, '180004', '180004', 0, 5, 11, 8, 11, 31, 25, 'MXN', '0', '2018-07-05', '', ''),
(125, '180004', '180004', 0, 5, 11, 8, 11, 1, 25, 'MXN', '0', '2018-07-05', '', ''),
(126, '180005', '180005', 0, 11, 15, 17, 17, 9, 23, 'MXN', '21500', '2018-05-07', '', ''),
(127, '180005', '180005', 21500, 11, 15, 17, 17, 1, 23, 'MXN', '21500', '2018-05-07', '', ''),
(128, '180006', '180006', 0, 6, 16, 18, 15, 33, 20, 'MXN', '21500', '2018-07-07', '', ''),
(129, '180006', '180006', 21500, 6, 16, 18, 15, 1, 20, 'MXN', '21500', '2018-07-07', '', ''),
(130, '180007', '180007', 21500, 6, 13, 13, 13, 33, 20, 'MXN', '21500', '2018-07-07', '', ''),
(131, '180007', '180007', 0, 6, 13, 13, 13, 1, 20, 'MXN', '21500', '2018-07-07', '', ''),
(132, '180008', '180008', 0, 5, 11, 8, 11, 31, 25, 'MXN', '0', '2018-07-07', '', ''),
(133, '180008', '180008', 0, 5, 11, 8, 11, 1, 25, 'MXN', '0', '2018-07-07', '', ''),
(134, '180009', '180009', 0, 6, 12, 9, 13, 36, 24, 'MXN', '21500', '2018-07-09', '', ''),
(135, '180009', '180009', 21500, 6, 12, 9, 13, 1, 24, 'MXN', '21500', '2018-07-09', '', ''),
(136, '180010', '180010', 0, 5, 11, 8, 11, 31, 25, 'MXN', '0', '2018-07-10', '', ''),
(137, '180010', '180010', 0, 5, 11, 8, 11, 1, 25, 'MXN', '0', '2018-07-10', '', ''),
(138, '180011', '180011', 0, 6, 17, 0, 12, 35, 21, 'MXN', '21500', '2018-07-10', '', ''),
(139, '180011', '180011', 21500, 6, 17, 0, 12, 1, 21, 'MXN', '21500', '2018-07-10', '', ''),
(140, '180012', '180012', 0, 6, 13, 13, 13, 9, 23, 'MXN', '21500', '2018-07-11', '', ''),
(141, '180012', '180012', 21500, 6, 13, 13, 13, 1, 23, 'MXN', '21500', '2018-07-11', '', ''),
(142, '180013', '180013', 21500, 6, 12, 9, 12, 33, 20, 'MXN', '21500', '2018-07-12', '', ''),
(143, '180013', '180013', 0, 6, 12, 9, 12, 1, 20, 'MXN', '21500', '2018-07-12', '', ''),
(144, '180014', '180014', 0, 5, 11, 8, 11, 31, 25, 'MXN', '0', '2018-07-12', '', ''),
(145, '180014', '180014', 0, 5, 11, 8, 11, 1, 25, 'MXN', '0', '2018-07-12', '', ''),
(146, '180015', '180015', 0, 6, 17, 18, 19, 9, 23, 'MXN', '21500', '2018-07-14', '', ''),
(147, '180015', '180015', 21500, 6, 17, 18, 19, 1, 23, 'MXN', '21500', '2018-07-14', '', ''),
(148, '180016', '180016', 0, 5, 11, 8, 11, 31, 25, 'MXN', '0', '2018-07-14', '', ''),
(149, '180016', '180016', 0, 5, 11, 8, 11, 1, 25, 'MXN', '0', '2018-07-14', '', ''),
(150, '180017', '180017', 0, 5, 11, 8, 11, 31, 25, 'MXN', '0', '2018-07-16', '', ''),
(151, '180017', '180017', 0, 5, 11, 8, 11, 1, 25, 'MXN', '0', '2018-07-16', '', ''),
(152, '180018', '180018', 0, 5, 11, 8, 11, 31, 26, 'MXN', '0', '2018-07-18', '', ''),
(153, '180018', '180018', 0, 5, 11, 8, 11, 1, 26, 'MXN', '0', '2018-07-18', '', ''),
(154, '180019', '180019', 0, 6, 13, 13, 13, 36, 24, 'MXN', '21500', '2018-07-20', '', ''),
(155, '180019', '180019', 21500, 6, 13, 13, 13, 1, 24, 'MXN', '21500', '2018-07-20', '', ''),
(156, '180020', '180020', 21500, 6, 12, 9, 12, 33, 20, 'MXN', '21500', '2018-07-20', '', ''),
(157, '180020', '180020', 0, 6, 12, 9, 12, 1, 20, 'MXN', '21500', '2018-07-20', '', ''),
(158, '180021', '180021', 0, 6, 17, 18, 12, 9, 23, 'MXN', '21500', '2018-07-21', '', ''),
(159, '180021', '180021', 21500, 6, 17, 18, 12, 1, 23, 'MXN', '21500', '2018-07-21', '', ''),
(160, '180022', '180022', 0, 6, 16, 19, 16, 35, 21, 'MXN', '21500', '2018-07-22', '', ''),
(161, '180022', '180022', 21500, 6, 16, 19, 16, 1, 21, 'MXN', '21500', '2018-07-22', '', ''),
(162, '180023', '180023', 0, 5, 11, 8, 11, 31, 25, 'MXN', '0', '2018-07-22', '', ''),
(163, '180023', '180023', 0, 5, 11, 8, 11, 1, 25, 'MXN', '0', '2018-07-22', '', ''),
(164, '180024', '180024', 0, 6, 13, 13, 15, 36, 27, 'MXN', '21500', '2018-07-23', '', ''),
(165, '180024', '180024', 21500, 6, 13, 13, 15, 1, 27, 'MXN', '21500', '2018-07-23', '', ''),
(166, '180025', '180025', 0, 6, 12, 9, 12, 36, 27, 'MXN', '21500', '2018-07-24', '', ''),
(167, '180025', '180025', 21500, 6, 12, 9, 12, 1, 27, 'MXN', '21500', '2018-07-24', '', ''),
(168, '180026', '180026', 0, 6, 17, 18, 20, 36, 27, 'MXN', '21500', '2018-07-25', '', ''),
(169, '180026', '180026', 21500, 6, 17, 18, 20, 1, 27, 'MXN', '21500', '2018-07-25', '', ''),
(170, '180027', '180027', 0, 5, 11, 8, 11, 31, 25, 'MXN', '0', '2018-07-26', '', ''),
(171, '180027', '180027', 0, 5, 11, 8, 11, 1, 25, 'MXN', '0', '2018-07-26', '', ''),
(172, '180028', '180028', 0, 6, 16, 19, 19, 36, 27, 'MXN', '21500', '2018-07-26', '', ''),
(173, '180028', '180028', 21500, 6, 16, 19, 19, 1, 27, 'MXN', '21500', '2018-07-26', '', ''),
(174, '180029', '180029', 0, 6, 13, 13, 19, 36, 27, 'MXN', '21500', '2018-07-26', '', ''),
(175, '180029', '180029', 21500, 6, 13, 13, 19, 1, 27, 'MXN', '21500', '2018-07-26', '', ''),
(176, '180030', '180030', 21500, 6, 12, 9, 12, 33, 20, 'MXN', '21500', '2018-07-27', '', ''),
(177, '180030', '180030', 0, 6, 12, 9, 12, 1, 20, 'MXN', '21500', '2018-07-27', '', ''),
(178, '180031', '180031', 0, 5, 11, 8, 11, 31, 25, 'MXN', '0', '2018-07-27', '', ''),
(179, '180031', '180031', 0, 5, 11, 8, 11, 1, 25, 'MXN', '0', '2018-07-27', '', ''),
(180, '180032', '180032', 0, 6, 17, 18, 12, 9, 23, 'MXN', '21500', '2018-08-28', '', ''),
(181, '180032', '180032', 21500, 6, 17, 18, 12, 1, 23, 'MXN', '21500', '2018-08-28', '', ''),
(182, '180033', '180033', 0, 6, 13, 13, 12, 35, 21, 'MXN', '21500', '2018-08-29', '', ''),
(183, '180033', '180033', 21500, 6, 13, 13, 12, 1, 21, 'MXN', '21500', '2018-08-29', '', ''),
(184, '180034', '180034', 21500, 10, 18, 20, 21, 33, 20, 'MXN', '21500', '2018-08-30', '', ''),
(185, '180034', '180034', 0, 10, 18, 20, 21, 1, 20, 'MXN', '21500', '2018-08-30', '', ''),
(186, '180035', '180035', 0, 5, 11, 8, 11, 27, 28, 'MXN', '0', '2018-08-30', '', ''),
(187, '180035', '180035', 0, 5, 11, 8, 11, 1, 28, 'MXN', '0', '2018-08-30', '', ''),
(188, '180036', '180036', 0, 6, 12, 22, 20, 36, 27, 'MXN', '21500', '2018-07-31', '', ''),
(189, '180036', '180036', 21500, 6, 12, 22, 20, 1, 27, 'MXN', '21500', '2018-07-31', '', ''),
(190, '180037', '180037', 0, 12, 19, 23, 22, 9, 23, 'MXN', '21500', '2018-07-31', '', ''),
(191, '180037', '180037', 21500, 12, 19, 23, 22, 1, 23, 'MXN', '21500', '2018-07-31', '', ''),
(192, '180038', '180038', 0, 6, 13, 13, 12, 36, 24, 'MXN', '21500', '2018-08-01', '', ''),
(193, '180038', '180038', 21500, 6, 13, 13, 12, 1, 24, 'MXN', '21500', '2018-08-01', '', ''),
(210, '180039', '180039', 0, 5, 11, 8, 11, 31, 25, 'MXN', '0', '2018-08-01', '', ''),
(211, '180039', '180039', 0, 5, 11, 8, 11, 1, 25, 'MXN', '0', '2018-08-01', '', ''),
(212, '180040', '180040', 21500, 6, 12, 22, 20, 33, 20, 'MXN', '21500', '2018-08-02', '', ''),
(213, '180040', '180040', 0, 6, 12, 22, 20, 1, 20, 'MXN', '21500', '2018-08-02', '', ''),
(214, '180041', '180041', 0, 6, 17, 18, 12, 35, 21, 'MXN', '21500', '2018-08-03', '', ''),
(215, '180041', '180041', 21500, 6, 17, 18, 12, 1, 21, 'MXN', '21500', '2018-08-03', '', ''),
(216, '180042', '180042', 0, 5, 11, 8, 11, 31, 25, 'MXN', '21500', '2018-08-03', '', ''),
(217, '180042', '180042', 21500, 5, 11, 8, 11, 1, 25, 'MXN', '21500', '2018-08-03', '', ''),
(218, '180043', '180043', 0, 6, 20, 9, 20, 36, 27, 'MXN', '21500', '2018-08-04', '', ''),
(219, '180043', '180043', 21500, 6, 20, 9, 20, 1, 27, 'MXN', '21500', '2018-08-04', '', ''),
(220, '180044', '180044', 21500, 6, 17, 18, 12, 33, 20, 'MXN', '21500', '2018-08-05', '', ''),
(221, '180044', '180044', 0, 6, 17, 18, 12, 1, 20, 'MXN', '21500', '2018-08-05', '', ''),
(222, '180045', '180045', 0, 6, 13, 19, 23, 9, 23, 'MXN', '21500', '2018-08-06', '', ''),
(223, '180045', '180045', 21500, 6, 13, 19, 23, 1, 23, 'MXN', '21500', '2018-08-06', '', ''),
(224, '180046', '180046', 0, 6, 20, 9, 20, 36, 27, 'MXN', '21500', '2018-08-06', '', ''),
(225, '180046', '180046', 21500, 6, 20, 9, 20, 1, 27, 'MXN', '21500', '2018-08-06', '', ''),
(226, '180047', '180047', 0, 5, 11, 8, 11, 31, 25, 'MXN', '0', '2018-08-06', '', ''),
(227, '180047', '180047', 0, 5, 11, 8, 11, 1, 25, 'MXN', '0', '2018-08-06', '', ''),
(228, '180048', '180048', 21500, 6, 17, 19, 12, 33, 20, 'MXN', '21500', '2018-08-07', '', ''),
(229, '180048', '180048', 0, 6, 17, 19, 12, 1, 20, 'MXN', '21500', '2018-08-07', '', ''),
(230, '180049', '180049', 0, 6, 20, 22, 20, 36, 27, 'MXN', '21500', '2018-08-08', '', ''),
(231, '180049', '180049', 21500, 6, 20, 22, 20, 1, 27, 'MXN', '21500', '2018-08-08', '', ''),
(232, '180050', '180050', 0, 10, 18, 20, 21, 9, 23, 'MXN', '21500', '2018-08-08', '', ''),
(233, '180050', '180050', 21500, 10, 18, 20, 21, 1, 23, 'MXN', '21500', '2018-08-08', '', ''),
(236, '180051', '180051', 0, 5, 11, 8, 11, 31, 25, 'MXN', '0', '2018-08-08', '', ''),
(237, '180051', '180052', 0, 5, 11, 8, 11, 37, 25, 'MXN', '0', '2018-08-08', '', ''),
(238, '180051', '180052', 0, 5, 11, 8, 11, 1, 25, 'MXN', '0', '2018-08-08', '', ''),
(239, '180052', '180053', 0, 6, 17, 18, 12, 35, 21, 'MXN', '21500', '2018-08-08', '', ''),
(240, '180052', '180053', 21500, 6, 17, 18, 12, 1, 21, 'MXN', '21500', '2018-08-08', '', ''),
(241, '180053', '180054', 0, 6, 16, 19, 23, 36, 24, 'MXN', '21500', '2018-08-09', '', ''),
(242, '180053', '180054', 21500, 6, 16, 19, 23, 1, 24, 'MXN', '21500', '2018-08-09', '', ''),
(243, '180054', '180055', 21500, 6, 12, 22, 20, 9, 23, 'MXN', '21500', '2018-08-10', '', ''),
(244, '180054', '180055', 0, 6, 12, 22, 20, 1, 23, 'MXN', '21500', '2018-08-10', '', ''),
(257, '180055', '180056', 0, 6, 17, 18, 13, 35, 21, 'MXN', '21500', '2018-08-11', '', ''),
(258, '180055', '180056', 21500, 6, 17, 18, 13, 1, 21, 'MXN', '21500', '2018-08-11', '', ''),
(259, '180056', '180057', 0, 5, 11, 8, 11, 31, 25, 'MXN', '0', '2018-08-10', '', ''),
(260, '180056', '180057', 0, 5, 11, 8, 11, 1, 25, 'MXN', '0', '2018-08-10', '', ''),
(261, '180057', '180058', 0, 6, 16, 19, 20, 36, 27, 'MXN', '21500', '2018-08-11', '', ''),
(262, '180057', '180058', 21500, 6, 16, 19, 20, 1, 27, 'MXN', '21500', '2018-08-11', '', ''),
(263, '180058', '180059', 21500, 6, 13, 13, 12, 9, 23, 'MXN', '21500', '2018-08-12', '', ''),
(264, '180058', '180059', 0, 6, 13, 13, 12, 1, 23, 'MXN', '21500', '2018-08-12', '', ''),
(265, '180059', '180060', 0, 13, 21, 24, 24, 35, 21, 'MXN', '20000', '2018-08-13', '', ''),
(266, '180059', '180060', 20000, 13, 21, 24, 24, 1, 21, 'MXN', '20000', '2018-08-13', '', ''),
(267, '180060', '180061', 21500, 6, 12, 22, 20, 9, 23, 'MXN', '21500', '2018-08-14', '', ''),
(268, '180060', '180061', 0, 6, 12, 22, 20, 1, 23, 'MXN', '21500', '2018-08-14', '', ''),
(269, '180061', '180062', 0, 6, 17, 18, 12, 35, 21, 'MXN', '21500', '2018-08-15', '', ''),
(270, '180061', '180062', 21500, 6, 17, 18, 12, 1, 21, 'MXN', '21500', '2018-08-15', '', ''),
(271, '180062', '180063', 21500, 6, 13, 13, 23, 9, 23, 'MXN', '21500', '2018-08-16', '', ''),
(272, '180062', '180063', 0, 6, 13, 13, 23, 1, 23, 'MXN', '21500', '2018-08-16', '', ''),
(273, '180063', '180064', 0, 5, 11, 8, 11, 31, 25, 'MXN', '0', '2018-08-16', '', ''),
(274, '180063', '180064', 0, 5, 11, 8, 11, 1, 25, 'MXN', '0', '2018-08-16', '', ''),
(275, '180064', '180065', 21500, 6, 16, 19, 25, 33, 20, 'MXN', '21500', '2018-08-17', '', ''),
(276, '180064', '180065', 0, 6, 16, 19, 25, 1, 20, 'MXN', '21500', '2018-08-17', '', ''),
(277, '180065', '180066', 0, 6, 12, 9, 20, 35, 21, 'MXN', '21500', '2018-08-18', '', ''),
(278, '180065', '180066', 21500, 6, 12, 9, 20, 1, 21, 'MXN', '21500', '2018-08-18', '', ''),
(279, '180066', '180067', 0, 5, 22, 25, 26, 31, 25, 'MXN', '0', '2018-08-18', '', ''),
(280, '180066', '180067', 0, 5, 22, 25, 26, 1, 25, 'MXN', '0', '2018-08-18', '', ''),
(281, '180067', '180068', 21500, 6, 17, 18, 12, 9, 23, 'MXN', '21500', '2018-08-18', '', ''),
(282, '180067', '180068', 0, 6, 17, 18, 12, 1, 23, 'MXN', '21500', '2018-08-18', '', ''),
(283, '180068', '180069', 0, 5, 11, 8, 11, 2, 30, 'MXN', '0', '2018-08-19', '', ''),
(284, '180068', '180069', 0, 5, 11, 8, 11, 1, 30, 'MXN', '0', '2018-08-19', '', ''),
(285, '180069', '180070', 21500, 6, 13, 13, 23, 33, 20, 'MXN', '21500', '2018-08-19', '', ''),
(286, '180069', '180070', 0, 6, 13, 13, 23, 1, 20, 'MXN', '21500', '2018-08-19', '', ''),
(287, '180070', '180071', 0, 6, 16, 19, 27, 35, 21, 'MXN', '21500', '2018-08-20', '', ''),
(288, '180070', '180071', 21500, 6, 16, 19, 27, 1, 21, 'MXN', '21500', '2018-08-20', '', ''),
(289, '180071', '180072', 0, 6, 17, 18, 12, 35, 21, 'MXN', '21500', '2018-08-21', '', ''),
(290, '180071', '180072', 21500, 6, 17, 18, 12, 1, 21, 'MXN', '21500', '2018-08-21', '', ''),
(291, '180072', '180073', 0, 6, 13, 13, 23, 35, 21, 'MXN', '21500', '2018-08-21', '', ''),
(292, '180072', '180073', 21500, 6, 13, 13, 23, 1, 21, 'MXN', '21500', '2018-08-21', '', ''),
(293, '180073', '180074', 17000, 14, 23, 27, 28, 38, 31, 'MXN', '17000', '2018-08-21', '', ''),
(294, '180073', '180074', 0, 14, 23, 27, 28, 1, 31, 'MXN', '17000', '2018-08-21', '', ''),
(295, '180074', '180075', 0, 6, 12, 26, 20, 36, 27, 'MXN', '21500', '2018-08-21', '', ''),
(296, '180074', '180075', 21500, 6, 12, 26, 20, 1, 27, 'MXN', '21500', '2018-08-21', '', ''),
(297, '180075', '180076', 0, 5, 11, 8, 11, 31, 25, 'MXN', '0', '2018-08-22', '', ''),
(298, '180075', '180076', 0, 5, 11, 8, 11, 1, 25, 'MXN', '0', '2018-08-22', '', ''),
(299, '180076', '180077', 0, 6, 17, 18, 12, 35, 21, 'MXN', '21500', '2018-08-22', '', ''),
(300, '180076', '180077', 21500, 6, 17, 18, 12, 1, 21, 'MXN', '21500', '2018-08-22', '', ''),
(301, '180077', '180078', 21500, 11, 24, 28, 29, 33, 20, 'MXN', '21500', '2018-08-23', '', ''),
(302, '180077', '180078', 0, 11, 24, 28, 29, 1, 20, 'MXN', '21500', '2018-08-23', '', ''),
(303, '180078', '180079', 0, 6, 16, 19, 25, 35, 21, 'MXN', '21500', '2018-08-23', '', ''),
(304, '180078', '180079', 21500, 6, 16, 19, 25, 1, 21, 'MXN', '21500', '2018-08-23', '', ''),
(305, '180079', '180080', 0, 15, 25, 29, 30, 34, 32, 'MXN', '14000', '2018-08-24', '', ''),
(306, '180079', '180080', 14000, 15, 25, 29, 30, 1, 32, 'MXN', '14000', '2018-08-24', '', ''),
(307, '180080', '180081', 0, 5, 11, 8, 11, 31, 25, 'MXN', '0', '2018-08-24', '', ''),
(308, '180080', '180081', 0, 5, 11, 8, 11, 1, 25, 'MXN', '0', '2018-08-24', '', ''),
(309, '180081', '180082', 0, 6, 13, 13, 23, 36, 24, 'MXN', '21500', '2018-08-25', '', ''),
(310, '180081', '180082', 21500, 6, 13, 13, 23, 1, 24, 'MXN', '21500', '2018-08-25', '', ''),
(311, '180082', '180083', 0, 6, 12, 26, 20, 35, 21, 'MXN', '21500', '2018-08-25', '', ''),
(312, '180082', '180083', 21500, 6, 12, 26, 20, 1, 21, 'MXN', '21500', '2018-08-25', '', ''),
(313, '180083', '180084', 0, 15, 25, 29, 30, 34, 32, 'MXN', '14000', '2018-08-27', '', ''),
(314, '180083', '180084', 14000, 15, 25, 29, 30, 1, 32, 'MXN', '14000', '2018-08-27', '', ''),
(315, '180084', '180085', 21500, 12, 19, 23, 22, 9, 23, 'MXN', '21500', '2018-08-27', '', ''),
(316, '180084', '180085', 0, 12, 19, 23, 22, 1, 23, 'MXN', '21500', '2018-08-27', '', ''),
(317, '180085', '180086', 21500, 6, 17, 18, 12, 33, 20, 'MXN', '21500', '2018-08-28', '', ''),
(318, '180085', '180086', 0, 6, 17, 18, 12, 1, 20, 'MXN', '21500', '2018-08-28', '', ''),
(319, '180086', '180087', 0, 5, 11, 8, 11, 31, 25, 'MXN', '0', '2018-08-28', '', ''),
(320, '180086', '180087', 0, 5, 11, 8, 11, 1, 25, 'MXN', '0', '2018-08-28', '', ''),
(321, '180087', '180088', 0, 15, 25, 30, 30, 34, 32, 'MXN', '14000', '2018-08-29', '', ''),
(322, '180087', '180088', 14000, 15, 25, 30, 30, 1, 32, 'MXN', '14000', '2018-08-29', '', ''),
(323, '180088', '180089', 0, 6, 16, 19, 25, 36, 24, 'MXN', '21500', '2018-08-29', '', ''),
(324, '180088', '180089', 21500, 6, 16, 19, 25, 1, 24, 'MXN', '21500', '2018-08-29', '', ''),
(325, '180089', '180090', 21500, 16, 26, 31, 31, 9, 23, 'MXN', '21500', '2018-08-29', '', ''),
(326, '180089', '180090', 0, 16, 26, 31, 31, 1, 23, 'MXN', '21500', '2018-08-29', '', ''),
(327, '180090', '180091', 0, 5, 11, 8, 11, 2, 30, 'MXN', '0', '2018-08-29', '', ''),
(328, '180090', '180091', 0, 5, 11, 8, 11, 1, 30, 'MXN', '0', '2018-08-29', '', ''),
(329, '180091', '180092', 0, 6, 12, 26, 20, 35, 21, 'MXN', '21500', '2018-08-30', '', ''),
(330, '180091', '180092', 21500, 6, 12, 26, 20, 1, 21, 'MXN', '21500', '2018-08-30', '', ''),
(331, '180092', '180093', 5000, 17, 27, 32, 32, 31, 25, 'MXN', '5000', '2018-08-30', '', ''),
(332, '180092', '180093', 0, 17, 27, 32, 32, 1, 25, 'MXN', '5000', '2018-08-30', '', ''),
(333, '180093', '180094', 21500, 6, 13, 13, 23, 9, 23, 'MXN', '21500', '2018-08-31', '', ''),
(334, '180093', '180094', 0, 6, 13, 13, 23, 1, 23, 'MXN', '21500', '2018-08-31', '', ''),
(335, '180094', '180095', 0, 5, 11, 8, 11, 31, 25, 'MXN', '0', '2018-08-31', '', ''),
(336, '180094', '180095', 0, 5, 11, 8, 11, 1, 25, 'MXN', '0', '2018-08-31', '', ''),
(337, '180095', '180096', 0, 6, 17, 18, 12, 35, 21, 'MXN', '21500', '2018-09-01', '', ''),
(338, '180095', '180096', 21500, 6, 17, 18, 12, 1, 21, 'MXN', '21500', '2018-09-01', '', ''),
(339, '180096', '180097', 0, 15, 25, 29, 30, 34, 32, 'MXN', '14000', '2018-09-01', '', ''),
(340, '180096', '180098', 0, 15, 25, 29, 30, 34, 32, 'MXN', '0', '2018-09-01', '', ''),
(341, '180096', '180098', 0, 15, 25, 29, 30, 1, 32, 'MXN', '0', '2018-09-01', '', ''),
(342, '180097', '180099', 0, 15, 25, 29, 30, 34, 32, 'MXN', '14000', '2018-09-01', '', ''),
(343, '180097', '180100', 0, 15, 25, 29, 30, 34, 32, 'MXN', '14000', '2018-09-01', '', ''),
(344, '180097', '180101', 0, 15, 25, 29, 30, 34, 32, 'MXN', '14000', '2018-09-01', '', ''),
(345, '180097', '180101', 14000, 15, 25, 29, 30, 1, 32, 'MXN', '14000', '2018-09-01', '', ''),
(346, '180096', '180097', 0, 15, 25, 29, 30, 34, 32, 'MXN', '14000', '2018-09-01', '', ''),
(347, '180096', '180097', 14000, 15, 25, 29, 30, 1, 32, 'MXN', '14000', '2018-09-01', '', ''),
(348, '180096', '180098', 0, 15, 25, 29, 30, 34, 32, 'MXN', '14000', '2018-09-01', '', ''),
(349, '180096', '180098', 14000, 15, 25, 29, 30, 1, 32, 'MXN', '14000', '2018-09-01', '', ''),
(350, '180096', '180099', 0, 15, 25, 29, 30, 34, 32, 'MXN', '14000', '2018-09-01', '', ''),
(351, '180096', '180099', 14000, 15, 25, 29, 30, 1, 32, 'MXN', '14000', '2018-09-01', '', ''),
(352, '180097', '180100', 21500, 6, 12, 26, 20, 9, 23, 'MXN', '21500', '2018-09-02', '', ''),
(353, '180097', '180100', 0, 6, 12, 26, 20, 1, 23, 'MXN', '21500', '2018-09-02', '', ''),
(354, '180098', '180101', 0, 5, 11, 8, 11, 31, 25, 'MXN', '0', '2018-09-02', '', ''),
(355, '180098', '180101', 0, 5, 11, 8, 11, 1, 25, 'MXN', '0', '2018-09-02', '', ''),
(363, '180099', '180103', 14000, 15, 25, 29, 30, 1, 32, 'MXN', '14000', '2018-09-03', '', ''),
(364, '180099', '180102', 0, 15, 25, 29, 30, 34, 32, 'MXN', '14000', '2018-09-03', '', ''),
(365, '180099', '180102', 14000, 15, 25, 29, 30, 1, 32, 'MXN', '14000', '2018-09-03', '', ''),
(366, '180100', '180104', 0, 6, 12, 10, 12, 9, 18, 'MXN', '100', '2018-09-05', '', ''),
(367, '180100', '180105', 100, 6, 12, 10, 12, 9, 18, 'MXN', '100', '2018-09-05', '', ''),
(368, '180100', '180105', 0, 6, 12, 10, 12, 1, 18, 'MXN', '100', '2018-09-05', '', ''),
(369, '180101', '180106', 0, 5, 11, 8, 11, 2, 30, 'MXN', '21500', '2018-10-16', '', ''),
(370, '180101', '180106', 21500, 5, 11, 8, 11, 1, 30, 'MXN', '21500', '2018-10-16', '', ''),
(371, '180102', '180107', 21500, 17, 18, 20, 21, 9, 18, 'MXN', '21500', '2018-10-16', '', ''),
(372, '180102', '180107', 0, 17, 18, 20, 21, 1, 18, 'MXN', '21500', '2018-10-16', '', ''),
(373, '180103', '180108', 21500, 5, 11, 8, 11, 9, 18, 'MXN', '21500', '2018-10-18', '', ''),
(374, '180103', '180108', 0, 5, 11, 8, 11, 1, 18, 'MXN', '21500', '2018-10-18', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `freight_payment`
--

CREATE TABLE `freight_payment` (
  `id` int(11) NOT NULL,
  `f_freight` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `date` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `concept` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `amount` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `comments` text CHARACTER SET utf8 COLLATE utf8_spanish_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingredients`
--

CREATE TABLE `ingredients` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ingredients`
--

INSERT INTO `ingredients` (`id`, `nombre`) VALUES
(1, 'ÁCIDO NÍTRICO'),
(2, 'ÁCIDOS FÚLVICOS'),
(3, 'AZUFRE 2%'),
(4, 'BENOMILO'),
(5, 'CALCIO 26%');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventories`
--

CREATE TABLE `inventories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `description` varchar(150) DEFAULT NULL,
  `responsable` varchar(50) DEFAULT NULL,
  `utility` varchar(100) DEFAULT NULL,
  `superficie` varchar(200) NOT NULL,
  `uso` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `inventories`
--

INSERT INTO `inventories` (`id`, `name`, `description`, `responsable`, `utility`, `superficie`, `uso`) VALUES
(1, 'INVENTARIO DE PRODUCTO TERMINADO ALBARDAS', 'INVENTARIO DE PRODUCTO TERMINADO MAGDALENAS\r\n', '1', '1', '', ''),
(2, 'INVENTARIO DE PRODUCTO TERMINADO MAGDALENAS', 'INVENTARIO ALBARADS', 'Jose Carlos Morin Riojas', '1', '', ''),
(3, 'INVENTARIO DE AGROQUIMICOS', 'ESTE ES EL INVENTARIO DE AGROQUIMICOS', 'YAIR FACIO', '2', '', ''),
(4, 'INVENTARIO DE sistemas', 'erfref', 'David Gonzalez Morales', '2', '', ''),
(5, 'INVENTARIO DE SEMILLAS', 'FD', 'David Gonzalez Morales', '2', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventory`
--

CREATE TABLE `inventory` (
  `id` int(11) NOT NULL,
  `id_inventory` int(11) DEFAULT NULL,
  `id_product` int(11) DEFAULT NULL,
  `name_product` varchar(100) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `concept` varchar(50) DEFAULT NULL,
  `receiver` varchar(100) DEFAULT NULL,
  `comments` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `inventory`
--

INSERT INTO `inventory` (`id`, `id_inventory`, `id_product`, `name_product`, `quantity`, `concept`, `receiver`, `comments`) VALUES
(75, 2, 252, 'CHILE JALAPEÃ‘O HOSCO MAG 1 RA M  ARPILLA VERDE GENERICO 30 KG', 1586, 'entrada', 'Jorge  Estala', ''),
(76, 2, 260, 'CHILE JALAPEÃ‘O HOSCO 3/4 MAG 1 RA M  ARPILLA VERDE GENERICO 30 KG', 74, 'entrada', 'Jorge  Estala', ''),
(77, 2, 268, 'CHILE JALAPEÃ‘O ROJO MAG 1 RA M  ARPILLA VERDE GENERICO 30 KG', 339, 'entrada', 'Jose Carlos Morin Riojas', ''),
(78, 2, 244, 'CHILE JALAPEÃ‘O VERDE MAG 1 RA M  ARPILLA VERDE GENERICO 30 KG', 183, 'entrada', 'Jorge  Estala', ''),
(79, 1, 75, 'CHILE MORRON VERDE 1 RA XL  CARTON 1 1/9 ALEK 25 LBS', 248, 'entrada', 'Jose Carlos Morin Riojas', ''),
(80, 1, 76, 'CHILE MORRON VERDE 1 RA L  CARTON 1 1/9 ALEK 25 LBS', 1168, 'entrada', 'Jose Carlos Morin Riojas', ''),
(81, 1, 78, 'CHILE MORRON VERDE 1 RA CH  CARTON 1 1/9 ALEK 25 LBS', 280, 'entrada', 'Jose Carlos Morin Riojas', ''),
(82, 1, 77, 'CHILE MORRON VERDE 1 RA M  CARTON 1 1/9 ALEK 25 LBS', 168, 'entrada', 'Jose Carlos Morin Riojas', ''),
(83, 1, 67, 'CHILE JALAPEÃ‘O VERDE  1 RA XL  CARTON 1 1/9 ALEK 35 LBS', 620, 'entrada', 'Jose Carlos Morin Riojas', ''),
(84, 1, 35, 'CHILE JALAPEÃ‘O VERDE  1 RA XL  CARTON 1 1/9 TRIPLE H 35 LBS', 1393, 'entrada', 'Jose Carlos Morin Riojas', ''),
(85, 1, 43, 'CHILE MORRON VERDE 1 RA XL  CARTON 1 1/9 TRIPLE H 25 LBS', 531, 'entrada', 'Jose Carlos Morin Riojas', ''),
(86, 1, 44, 'CHILE MORRON VERDE 1 RA L  CARTON 1 1/9 TRIPLE H 25 LBS', 458, 'entrada', 'Jose Carlos Morin Riojas', ''),
(87, 1, 45, 'CHILE MORRON VERDE 1 RA M  CARTON 1 1/9 TRIPLE H 25 LBS', 19, 'entrada', 'Jose Carlos Morin Riojas', ''),
(88, 1, 46, 'CHILE MORRON VERDE 1 RA CH  CARTON 1 1/9 TRIPLE H 25 LBS', 700, 'entrada', 'Jose Carlos Morin Riojas', ''),
(89, 2, 248, 'CHILE JALAPEÃ‘O VERDE MAG 2 DA M  ARPILLA VERDE GENERICO 30 KG', 265, 'entrada', 'Jose Carlos Morin Riojas', ''),
(90, 2, 16, 'CHILE MORRON VERDE 2 DA M  CARTON 1 1/9 ANAVALE 25 LBS', 1912, 'entrada', 'Jose Carlos Morin Riojas', ''),
(93, 1, 12, 'CHILE MORRON VERDE 1 RA M  CARTON 1 1/9 ANAVALE 25 LBS', 160, 'entrada', 'Jose Carlos Morin Riojas', ''),
(94, 1, 13, 'CHILE MORRON VERDE 1 RA CH  CARTON 1 1/9 ANAVALE 25 LBS', 243, 'entrada', 'Jose Carlos Morin Riojas', ''),
(95, 1, 274, 'CHILE MORRON VERDE 1 RA L  CARTON 1 1/9 ANAVALE 25 LBS', 56, 'entrada', 'Jose Carlos Morin Riojas', ''),
(96, 1, 10, 'CHILE MORRON VERDE 1 RA XL  CARTON 1 1/9 ANAVALE 25 LBS', 272, 'entrada', 'Jose Carlos Morin Riojas', ''),
(97, 1, 2, 'CHILE JALAPEÃ‘O VERDE 1 RA XL CARTON 1 1/9 ANAVALE 35 LBS', 18955, 'entrada', 'Jose Carlos Morin Riojas', ''),
(98, 1, 110, 'CHILE MORRON VERDE 1 RA CH  CARTON 1 1/9 PICOSITO 25 LBS', 592, 'entrada', 'Jose Carlos Morin Riojas', ''),
(99, 1, 99, 'CHILE JALAPEÃ‘O VERDE  1 RA XL  CARTON 1 1/9 PICOSITO 35 LBS', 1850, 'entrada', 'Jose Carlos Morin Riojas', ''),
(100, 1, 107, 'CHILE MORRON VERDE 1 RA XL  CARTON 1 1/9 PICOSITO 25 LBS', 224, 'entrada', 'Jose Carlos Morin Riojas', ''),
(101, 1, 108, 'CHILE MORRON VERDE 1 RA L  CARTON 1 1/9 PICOSITO 25 LBS', 196, 'entrada', 'Jose Carlos Morin Riojas', ''),
(102, 1, 109, 'CHILE MORRON VERDE 1 RA M  CARTON 1 1/9 PICOSITO 25 LBS', 189, 'entrada', 'Jose Carlos Morin Riojas', ''),
(103, 1, 104, 'CHILE JALAPEÃ‘O VERDE  2 DA L  CARTON 1 1/9 PICOSITO 35 LBS', 88, 'entrada', 'Jose Carlos Morin Riojas', ''),
(104, 1, 123, 'CHILE ANAHEIM VERDE 1 RA XL  CARTON 1 1/9 PICOSITO 22 LBS', 155, 'entrada', 'Jose Carlos Morin Riojas', ''),
(105, 1, 127, 'CHILE ANAHEIM VERDE 2 DA XL  CARTON 1 1/9 PICOSITO 22 LBS', 120, 'entrada', 'Jose Carlos Morin Riojas', ''),
(106, 1, 103, 'CHILE JALAPEÃ‘O VERDE  2 DA XL  CARTON 1 1/9 PICOSITO 35 LBS', 261, 'entrada', 'Jose Carlos Morin Riojas', ''),
(107, 2, 243, 'CHILE JALAPEÃ‘O VERDE MAG 1 RA L  ARPILLA VERDE GENERICO 30 KG', 23, 'entrada', 'Jose Carlos Morin Riojas', ''),
(108, 2, 276, 'CHILE ANAHEIM MAG 1 RA XL  ARPILLA VERDE GENERICO 22 KG', 8, 'entrada', 'Jose Carlos Morin Riojas', ''),
(109, 2, 264, 'CHILE JALAPEÃ‘O HOSCO 3/4 MAG 2 DA M  ARPILLA VERDE GENERICO 30 KG', 34, 'entrada', 'Jose Carlos Morin Riojas', ''),
(110, 1, 163, 'CHILE JALAPEÃ‘O VERDE  1 RA XL  CARTON 1 1/9 CASCO 35 LBS', 3139, 'entrada', 'Jose Carlos Morin Riojas', ''),
(111, 1, 167, 'CHILE JALAPEÃ‘O VERDE  2 DA XL  CARTON 1 1/9 CASCO 35 LBS', 161, 'entrada', 'Jose Carlos Morin Riojas', ''),
(112, 2, 277, 'CHILE JALAPEÃ‘O VERDE  1 RA XL  ARPILLA VERDE GENERICO 30 KG', 56, 'entrada', 'Jose Carlos Morin Riojas', ''),
(113, 2, 278, 'CHILE JALAPEÃ‘O HOSCO 3/4  1 RA XL  ARPILLA VERDE GENERICO 30 KG', 20, 'entrada', 'Jose Carlos Morin Riojas', ''),
(114, 1, 6, 'CHILE JALAPEÃ‘O VERDE  2 DA XL  CARTON 1 1/9 ANAVALE 35 LBS', 74, 'entrada', 'Jose Carlos Morin Riojas', ''),
(115, 1, 196, 'CEBOLLA BLANCA 1 RA LM ARPILLA MEXICAN GENERICO 50 LBS', 104, 'entrada', 'Jose Carlos Morin Riojas', ''),
(116, 1, 203, 'CEBOLLA BLANCA 2 DA LG ARPILLA FRESA GENERICO 30 KG', 590, 'entrada', 'Jose Carlos Morin Riojas', ''),
(117, 1, 205, 'CEBOLLA BLANCA 2 DA PP ARPILLA FRESA GENERICO 30 KG', 103, 'entrada', 'Jose Carlos Morin Riojas', ''),
(118, 1, 206, 'CEBOLLA BLANCA 2 DA J ARPILLA FRESA GENERICO 30 KG', 52, 'entrada', 'Jose Carlos Morin Riojas', ''),
(119, 1, 204, 'CEBOLLA BLANCA 2 DA LM ARPILLA FRESA GENERICO 30 KG', 171, 'entrada', 'Jose Carlos Morin Riojas', ''),
(120, 1, 191, 'CHILE ANAHEIM VERDE 2 DA XL  CARTON 1 1/9 CASCO 22 LBS', 280, 'entrada', 'Jose Carlos Morin Riojas', ''),
(121, 1, 187, 'CHILE ANAHEIM VERDE 1 RA XL  CARTON 1 1/9 CASCO 22 LBS', 280, 'entrada', 'Jose Carlos Morin Riojas', ''),
(122, 1, 115, 'CHILE POBLANO VERDE 1 RA XL  CARTON 1 1/9 PICOSITO 22 LBS', 1351, 'entrada', 'Jose Carlos Morin Riojas', ''),
(123, 1, 116, 'CHILE POBLANO VERDE 1 RA L  CARTON 1 1/9 PICOSITO 22 LBS', 310, 'entrada', 'Jose Carlos Morin Riojas', ''),
(124, 1, 226, 'CEBOLLA MORADA 2 DA J ARPILLA MORADA GENERICO 30 KG', 9, 'entrada', 'Jose Carlos Morin Riojas', ''),
(125, 1, 223, 'CEBOLLA MORADA 2 DA LG ARPILLA MORADA GENERICO 30 KG', 148, 'entrada', 'Jose Carlos Morin Riojas', ''),
(126, 1, 18, 'CHILE POBLANO  1 RA XL  CARTON 1 1/9 ANAVALE 22 LBS', 938, 'entrada', 'Jose Carlos Morin Riojas', ''),
(127, 1, 19, 'CHILE POBLANO  1 RA L  CARTON 1 1/9 ANAVALE 22 LBS', 182, 'entrada', 'Jose Carlos Morin Riojas', ''),
(128, 1, 36, 'CHILE JALAPEÃ‘O VERDE  1 RA L  CARTON 1 1/9 TRIPLE H 35 LBS', 735, 'entrada', 'Jose Carlos Morin Riojas', ''),
(129, 1, 52, 'CHILE POBLANO VERDE 1 RA L  CARTON 1 1/9 TRIPLE H 22 LBS', 207, 'entrada', 'Jose Carlos Morin Riojas', ''),
(130, 1, 51, 'CHILE POBLANO VERDE 1 RA XL  CARTON 1 1/9 TRIPLE H 22 LBS', 409, 'entrada', 'Jose Carlos Morin Riojas', ''),
(131, 1, 279, 'CHILE JALAPEÃ‘O VERDE  2 DA L  ARPILLA VERDE GENERICO 30 KG', 261, 'entrada', 'Jose Carlos Morin Riojas', ''),
(132, 1, 280, 'CHILE JALAPEÃ‘O HOSCO 2 DA L  ARPILLA VERDE GENERICO 30 KG', 9, 'entrada', 'Jose Carlos Morin Riojas', ''),
(133, 1, 282, 'CHILE JALAPEÃ‘O ROJO MAG 2 DA L  ARPILLA VERDE GENERICO 30 KG', 122, 'entrada', 'Jose Carlos Morin Riojas', ''),
(134, 1, 283, 'CHILE ANAHEIM 1 RA L  ARPILLA VERDE GENERICO 18 KG', 41, 'entrada', 'Jose Carlos Morin Riojas', ''),
(135, 1, 284, 'CHILE POBLANO 2 DA L CAJA NAILEA GENERICO 20 KG', 618, 'entrada', 'Jose Carlos Morin Riojas', ''),
(136, 1, 281, 'CHILE JALAPEÃ‘O HOSCO 3/4 2 DA L  ARPILLA VERDE GENERICO 30 KG', 56, 'entrada', 'Jose Carlos Morin Riojas', ''),
(137, 1, 179, 'CHILE POBLANO VERDE 1 RA XL  CARTON 1 1/9 CASCO 22 LBS', 277, 'entrada', 'Jose Carlos Morin Riojas', ''),
(138, 1, 180, 'CHILE POBLANO VERDE 1 RA L  CARTON 1 1/9 CASCO 22 LBS', 70, 'entrada', 'Jose Carlos Morin Riojas', ''),
(139, 1, 171, 'CHILE MORRON VERDE 1 RA XL  CARTON 1 1/9 CASCO 25 LBS', 177, 'entrada', 'Jose Carlos Morin Riojas', ''),
(140, 1, 172, 'CHILE MORRON VERDE 1 RA L  CARTON 1 1/9 CASCO 25 LBS', 69, 'entrada', 'Jose Carlos Morin Riojas', ''),
(141, 1, 181, 'CHILE POBLANO VERDE 1 RA M  CARTON 1 1/9 CASCO 22 LBS', 40, 'entrada', 'Jose Carlos Morin Riojas', ''),
(142, 1, 174, 'CHILE MORRON VERDE 1 RA CH  CARTON 1 1/9 CASCO 25 LBS', 80, 'entrada', 'Jose Carlos Morin Riojas', ''),
(143, 1, 173, 'CHILE MORRON VERDE 1 RA M  CARTON 1 1/9 CASCO 25 LBS', 40, 'entrada', 'Jose Carlos Morin Riojas', ''),
(144, 1, 164, 'CHILE JALAPEÃ‘O VERDE  1 RA L  CARTON 1 1/9 CASCO 35 LBS', 33, 'entrada', 'Jose Carlos Morin Riojas', ''),
(145, 1, 68, 'CHILE JALAPEÃ‘O VERDE  1 RA L  CARTON 1 1/9 ALEK 35 LBS', 68, 'entrada', 'Jose Carlos Morin Riojas', ''),
(146, 1, 91, 'CHILE ANAHEIM VERDE 1 RA XL  CARTON 1 1/9 ALEK 22 LBS', 513, 'entrada', 'Jose Carlos Morin Riojas', ''),
(147, 1, 83, 'CHILE POBLANO VERDE 1 RA XL  CARTON 1 1/9 ALEK 22 LBS', 399, 'entrada', 'Jose Carlos Morin Riojas', ''),
(148, 1, 84, 'CHILE POBLANO VERDE 1 RA L  CARTON 1 1/9 ALEK 22 LBS', 233, 'entrada', 'Jose Carlos Morin Riojas', ''),
(149, 1, 85, 'CHILE POBLANO VERDE 1 RA M  CARTON 1 1/9 ALEK 22 LBS', 87, 'entrada', 'Jose Carlos Morin Riojas', ''),
(150, 1, 285, 'CHILE ANAHEIM VERDE 2 DA L CAJA NAILEA GENERICO 1 KG', 84, 'entrada', 'Jose Carlos Morin Riojas', ''),
(151, 2, 250, 'CHILE JALAPEÃ‘O HOSCO MAG 1 RA XL  ARPILLA VERDE GENERICO 30 KG', 100, 'entrada', 'Jose Carlos Morin Riojas', 'ddddd'),
(152, 2, 0, '', 310, 'transferencia', '', ''),
(153, 3, 14, 'CHILE MORRON VERDE 2 DA XL  CARTON 1 1/9 ANAVALE 25 LBS', 10, 'entrada', 'Jose Carlos Morin Riojas', 'hgfhfg'),
(154, 3, 3, 'CHILE JALAPEÃ‘O VERDE  1 RA L  CARTON 1 1/9 ANAVALE 35 LBS', 20, 'entrada', 'Jose Carlos Morin Riojas', 'fdgdf'),
(155, 3, 45, 'CHILE MORRON VERDE 1 RA M  CARTON 1 1/9 TRIPLE H 25 LBS', 210, 'transferencia', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `measurements_system`
--

CREATE TABLE `measurements_system` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `measurements_system`
--

INSERT INTO `measurements_system` (`id`, `nombre`) VALUES
(1, 'KG'),
(2, 'GARRAFA'),
(3, 'LT');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permits`
--

CREATE TABLE `permits` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `template` varchar(40) NOT NULL,
  `leer` varchar(2) NOT NULL,
  `escribir` varchar(2) NOT NULL,
  `editar` varchar(2) NOT NULL,
  `eliminar` varchar(2) NOT NULL,
  `status` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `permits`
--

INSERT INTO `permits` (`id`, `id_user`, `template`, `leer`, `escribir`, `editar`, `eliminar`, `status`) VALUES
(615, 24, '1', '0', '0', '0', '0', '0'),
(616, 24, '2', '0', '0', '0', '0', '0'),
(617, 24, '3', '0', '0', '0', '0', '0'),
(618, 24, '4', '0', '0', '0', '0', '0'),
(619, 24, '5', '0', '0', '0', '0', '0'),
(620, 24, '6', '1', '1', '1', '0', '1'),
(621, 24, '7', '0', '0', '0', '0', '0'),
(622, 24, '8', '0', '0', '0', '0', '0'),
(623, 23, '1', '1', '1', '1', '1', '1'),
(624, 23, '2', '1', '1', '1', '1', '1'),
(625, 23, '3', '1', '1', '1', '1', '1'),
(626, 23, '4', '1', '1', '1', '1', '1'),
(627, 23, '5', '1', '1', '1', '1', '1'),
(628, 23, '6', '1', '1', '1', '1', '1'),
(629, 23, '7', '1', '1', '1', '1', '1'),
(630, 23, '8', '1', '1', '1', '1', '1'),
(631, 25, '1', '1', '1', '1', '0', '1'),
(632, 25, '2', '0', '0', '0', '0', '0'),
(633, 25, '3', '0', '0', '0', '0', '0'),
(634, 25, '4', '1', '1', '1', '0', '1'),
(635, 25, '5', '0', '0', '0', '0', '0'),
(636, 25, '6', '0', '0', '0', '0', '0'),
(637, 25, '7', '1', '1', '1', '0', '1'),
(638, 25, '8', '1', '1', '1', '0', '1'),
(639, 26, '1', '1', '1', '1', '1', '1'),
(640, 26, '2', '1', '1', '1', '1', '1'),
(641, 26, '3', '1', '1', '1', '1', '1'),
(642, 26, '4', '1', '1', '1', '1', '1'),
(643, 26, '5', '1', '1', '1', '1', '1'),
(644, 26, '6', '1', '1', '1', '1', '1'),
(645, 26, '7', '1', '1', '1', '1', '1'),
(646, 26, '8', '1', '1', '1', '1', '1'),
(647, 27, '1', '1', '1', '1', '1', '1'),
(648, 27, '2', '1', '1', '1', '1', '1'),
(649, 27, '3', '1', '1', '1', '1', '1'),
(650, 27, '4', '1', '1', '1', '1', '1'),
(651, 27, '5', '1', '1', '1', '1', '1'),
(652, 27, '6', '1', '1', '1', '1', '1'),
(653, 27, '7', '1', '1', '1', '1', '1'),
(654, 27, '8', '1', '1', '1', '1', '1'),
(655, 28, '1', '1', '1', '1', '0', '1'),
(656, 28, '2', '1', '1', '1', '0', '1'),
(657, 28, '3', '1', '1', '1', '0', '1'),
(658, 28, '4', '0', '0', '0', '0', '0'),
(659, 28, '5', '0', '0', '0', '0', '0'),
(660, 28, '6', '0', '0', '0', '0', '0'),
(661, 28, '7', '0', '0', '0', '0', '0'),
(662, 28, '8', '0', '0', '0', '0', '0'),
(663, 30, '1', '1', '1', '1', '1', '1'),
(664, 30, '2', '1', '1', '1', '1', '1'),
(665, 30, '3', '1', '1', '1', '1', '1'),
(666, 30, '4', '1', '1', '1', '1', '1'),
(667, 30, '5', '1', '1', '1', '1', '1'),
(668, 30, '6', '1', '1', '1', '1', '1'),
(669, 30, '7', '1', '1', '1', '1', '1'),
(670, 30, '8', '1', '1', '1', '1', '1'),
(671, 25, '1', '1', '1', '1', '1', '1'),
(672, 25, '2', '0', '0', '0', '0', '0'),
(673, 25, '3', '0', '0', '0', '0', '0'),
(674, 25, '4', '1', '1', '1', '1', '1'),
(675, 25, '5', '0', '0', '0', '0', '0'),
(676, 25, '6', '0', '0', '0', '0', '0'),
(677, 25, '7', '1', '1', '1', '1', '1'),
(678, 25, '8', '1', '1', '1', '1', '1'),
(679, 25, '1', '1', '1', '1', '0', '1'),
(680, 25, '2', '0', '0', '0', '0', '0'),
(681, 25, '3', '0', '0', '0', '0', '0'),
(682, 25, '4', '1', '1', '1', '0', '1'),
(683, 25, '5', '1', '0', '0', '0', '1'),
(684, 25, '6', '0', '0', '0', '0', '0'),
(685, 25, '7', '1', '0', '0', '0', '1'),
(686, 25, '8', '1', '1', '1', '0', '1'),
(687, 25, '1', '1', '1', '1', '0', '1'),
(688, 25, '2', '0', '0', '0', '0', '0'),
(689, 25, '3', '0', '0', '0', '0', '0'),
(690, 25, '4', '1', '1', '1', '0', '1'),
(691, 25, '5', '1', '1', '1', '0', '1'),
(692, 25, '6', '0', '0', '0', '0', '0'),
(693, 25, '7', '1', '1', '0', '0', '1'),
(694, 25, '8', '1', '1', '1', '0', '1'),
(695, 31, '1', '1', '1', '1', '1', '1'),
(696, 31, '2', '1', '1', '1', '1', '1'),
(697, 31, '3', '1', '1', '1', '1', '1'),
(698, 31, '4', '1', '1', '1', '1', '1'),
(699, 31, '5', '1', '1', '1', '1', '1'),
(700, 31, '6', '0', '0', '0', '0', '0'),
(701, 31, '7', '1', '1', '1', '1', '1'),
(702, 31, '8', '1', '1', '1', '1', '1'),
(703, 32, '1', '1', '1', '1', '0', '1'),
(704, 32, '2', '0', '0', '0', '0', '0'),
(705, 32, '3', '0', '0', '0', '0', '0'),
(706, 32, '4', '1', '1', '1', '1', '1'),
(707, 32, '5', '0', '0', '0', '0', '0'),
(708, 32, '6', '0', '0', '0', '0', '0'),
(709, 32, '7', '0', '0', '0', '0', '0'),
(710, 32, '8', '1', '1', '1', '0', '1'),
(711, 33, '1', '1', '1', '1', '1', '1'),
(712, 33, '2', '1', '1', '1', '1', '1'),
(713, 33, '3', '1', '1', '1', '1', '1'),
(714, 33, '4', '1', '1', '1', '1', '1'),
(715, 33, '5', '1', '1', '1', '1', '1'),
(716, 33, '6', '1', '1', '1', '1', '1'),
(717, 33, '7', '1', '1', '1', '1', '1'),
(718, 33, '8', '1', '1', '1', '1', '1');

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
(53, 'afedo', 'camate', 'po', 'fa vo', '2018-05-29', '30', 'ssdas', 1, 'axssdaasdsasad ', '150', '30', '30', 2, '2018-06-2'),
(54, 'Jose ', 'caros', 'morin', 'riojas', '2018-06-07', 'onionoi', 'nin', 1, 'iubpbob', '180', '30', '50', 1, '2018-06-6'),
(55, 'Martin', 'Roberto', 'Rivera', 'Perez', '2018-06-08', 'PARRAS DE LA FUENTE7', 'weqwqweq', 1, 'oibobu', '160', '30', '890', 1, '2018-06-8'),
(56, 'Jose', 'Carlos', 'Morin', 'Riojas', '2018-06-08', 'buo', 'awqwwqeweewq', 1, 'morc96hclrjr18', '160', '30', '1500', 1, '2018-06-8'),
(57, 'giobana', 'martina', 'escobar ', 'perez', '2018-03-08', 'la direccion es esta ', 'asadsad', 1, 'giobanalaloka', '160', '30', '800', 2, '2018-06-14'),
(58, 'afedo', 'camate', 'po', 'favo 2', '2018-06-14', 'ew', 'ee', 1, 'este es afedo ', '150', '30', '50', 2, '2018-06-14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `presentations`
--

CREATE TABLE `presentations` (
  `id` int(11) NOT NULL,
  `id_prod` int(11) NOT NULL,
  `presentacion` varchar(100) NOT NULL,
  `precio` varchar(100) NOT NULL,
  `f_conversion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_refarrls`
--

CREATE TABLE `productos_refarrls` (
  `id` int(11) NOT NULL,
  `f_embarque` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `concept` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `supplie_id` int(10) UNSIGNED DEFAULT NULL COMMENT 'Id del insumo',
  `id_almacen` int(11) NOT NULL,
  `id_familia` int(11) NOT NULL,
  `id_proveedor` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `quality` varchar(20) NOT NULL,
  `size` varchar(20) NOT NULL,
  `pack` varchar(20) NOT NULL,
  `brand` varchar(30) NOT NULL,
  `weight` varchar(20) NOT NULL,
  `unit_measure` varchar(10) NOT NULL,
  `stock` int(11) NOT NULL COMMENT 'Stock de los productos'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `supplie_id`, `id_almacen`, `id_familia`, `id_proveedor`, `name`, `quality`, `size`, `pack`, `brand`, `weight`, `unit_measure`, `stock`) VALUES
(2, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O VERDE ', '1 RA', 'XL', ' CARTON 1 1/9', 'ANAVALE', '35', 'LBS', 0),
(3, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O VERDE ', '1 RA', 'L', ' CARTON 1 1/9', 'ANAVALE', '35', 'LBS', 0),
(4, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O VERDE ', '1 RA', 'M', ' CARTON 1 1/9', 'ANAVALE', '35', 'LBS', 0),
(5, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O VERDE ', '1 RA', 'CH', ' CARTON 1 1/9', 'ANAVALE', '35', 'LBS', 0),
(6, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O VERDE ', '2 DA', 'XL', ' CARTON 1 1/9', 'ANAVALE', '35', 'LBS', 0),
(7, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O VERDE ', '2 DA', 'L', ' CARTON 1 1/9', 'ANAVALE', '35', 'LBS', 0),
(8, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O VERDE ', '2 DA', 'M', ' CARTON 1 1/9', 'ANAVALE', '35', 'LBS', 0),
(9, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O VERDE ', '2 DA', 'CH', ' CARTON 1 1/9', 'ANAVALE', '25', 'LBS', 0),
(10, NULL, 0, 0, 0, 'CHILE MORRON VERDE', '1 RA', 'XL', ' CARTON 1 1/9', 'ANAVALE', '25', 'LBS', 0),
(12, NULL, 0, 0, 0, 'CHILE MORRON VERDE', '1 RA', 'M', ' CARTON 1 1/9', 'ANAVALE', '25', 'LBS', 0),
(13, NULL, 0, 0, 0, 'CHILE MORRON VERDE', '1 RA', 'CH', ' CARTON 1 1/9', 'ANAVALE', '25', 'LBS', 0),
(14, NULL, 0, 0, 0, 'CHILE MORRON VERDE', '2 DA', 'XL', ' CARTON 1 1/9', 'ANAVALE', '25', 'LBS', 0),
(15, NULL, 0, 0, 0, 'CHILE MORRON VERDE', '2 DA', 'L', ' CARTON 1 1/9', 'ANAVALE', '25', 'LBS', 0),
(16, NULL, 0, 0, 0, 'CHILE MORRON VERDE', '2 DA', 'M', ' CARTON 1 1/9', 'ANAVALE', '25', 'LBS', 0),
(17, NULL, 0, 0, 0, 'CHILE MORRON VERDE', '2 DA', 'CH', ' CARTON 1 1/9', 'ANAVALE', '25', 'LBS', 0),
(18, NULL, 0, 0, 0, 'CHILE POBLANO ', '1 RA', 'XL', ' CARTON 1 1/9', 'ANAVALE', '22', 'LBS', 0),
(19, NULL, 0, 0, 0, 'CHILE POBLANO ', '1 RA', 'L', ' CARTON 1 1/9', 'ANAVALE', '22', 'LBS', 0),
(20, NULL, 0, 0, 0, 'CHILE POBLANO ', '1 RA', 'M', ' CARTON 1 1/9', 'ANAVALE', '22', 'LBS', 0),
(21, NULL, 0, 0, 0, 'CHILE POBLANO ', '1 RA', 'CH', ' CARTON 1 1/9', 'ANAVALE', '22', 'LBS', 0),
(22, NULL, 0, 0, 0, 'CHILE POBLANO ', '2 DA', 'XL', ' CARTON 1 1/9', 'ANAVALE', '22', 'LBS', 0),
(23, NULL, 0, 0, 0, 'CHILE POBLANO ', '2 DA', 'L', ' CARTON 1 1/9', 'ANAVALE', '22', 'LBS', 0),
(24, NULL, 0, 0, 0, 'CHILE POBLANO ', '2 DA', 'M', ' CARTON 1 1/9', 'ANAVALE', '22', 'LBS', 0),
(25, NULL, 0, 0, 0, 'CHILE POBLANO ', '2 DA', 'CH', ' CARTON 1 1/9', 'ANAVALE', '22', 'LBS', 0),
(26, NULL, 0, 0, 0, 'CHILE ANAHEIM ', '1 RA', 'XL', ' CARTON 1 1/9', 'ANAVALE', '22', 'LBS', 0),
(27, NULL, 0, 0, 0, 'CHILE ANAHEIM ', '1 RA', 'L', ' CARTON 1 1/9', 'ANAVALE', '22', 'LBS', 0),
(28, NULL, 0, 0, 0, 'CHILE ANAHEIM ', '1 RA', 'M', ' CARTON 1 1/9', 'ANAVALE', '22', 'LBS', 0),
(30, NULL, 0, 0, 0, 'CHILE ANAHEIM ', '1 RA', 'CH', ' CARTON 1 1/9', 'ANAVALE', '22', 'LBS', 0),
(31, NULL, 0, 0, 0, 'CHILE ANAHEIM ', '2 DA', 'XL', ' CARTON 1 1/9', 'ANAVALE', '22', 'LBS', 0),
(32, NULL, 0, 0, 0, 'CHILE ANAHEIM ', '2 DA', 'L', ' CARTON 1 1/9', 'ANAVALE', '22', 'LBS', 0),
(33, NULL, 0, 0, 0, 'CHILE ANAHEIM ', '2 DA', 'M', ' CARTON 1 1/9', 'ANAVALE', '22', 'LBS', 0),
(34, NULL, 0, 0, 0, 'CHILE ANAHEIM ', '2 DA', 'CH', ' CARTON 1 1/9', 'ANAVALE', '22', 'LBS', 0),
(35, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O VERDE ', '1 RA', 'XL', ' CARTON 1 1/9', 'TRIPLE H', '35', 'LBS', 0),
(36, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O VERDE ', '1 RA', 'L', ' CARTON 1 1/9', 'TRIPLE H', '35', 'LBS', 0),
(37, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O VERDE ', '1 RA', 'M', ' CARTON 1 1/9', 'TRIPLE H', '35', 'LBS', 0),
(38, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O VERDE ', '1 RA', 'CH', ' CARTON 1 1/9', 'TRIPLE H', '35', 'LBS', 0),
(39, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O VERDE ', '2 DA', 'XL', ' CARTON 1 1/9', 'TRIPLE H', '35', 'LBS', 0),
(40, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O VERDE ', '2 DA', 'L', ' CARTON 1 1/9', 'TRIPLE H', '35', 'LBS', 0),
(41, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O VERDE ', '2 DA', 'M', ' CARTON 1 1/9', 'TRIPLE H', '35', 'LBS', 0),
(42, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O VERDE ', '2 DA', 'CH', ' CARTON 1 1/9', 'TRIPLE H', '35', 'LBS', 0),
(43, NULL, 0, 0, 0, 'CHILE MORRON VERDE', '1 RA', 'XL', ' CARTON 1 1/9', 'TRIPLE H', '25', 'LBS', 0),
(44, NULL, 0, 0, 0, 'CHILE MORRON VERDE', '1 RA', 'L', ' CARTON 1 1/9', 'TRIPLE H', '25', 'LBS', 0),
(45, NULL, 0, 0, 0, 'CHILE MORRON VERDE', '1 RA', 'M', ' CARTON 1 1/9', 'TRIPLE H', '25', 'LBS', 0),
(46, NULL, 0, 0, 0, 'CHILE MORRON VERDE', '1 RA', 'CH', ' CARTON 1 1/9', 'TRIPLE H', '25', 'LBS', 0),
(47, NULL, 0, 0, 0, 'CHILE MORRON VERDE', '2 DA', 'XL', ' CARTON 1 1/9', 'TRIPLE H', '25', 'LBS', 0),
(48, NULL, 0, 0, 0, 'CHILE MORRON VERDE', '2 DA', 'L', ' CARTON 1 1/9', 'TRIPLE H', '25', 'LBS', 0),
(49, NULL, 0, 0, 0, 'CHILE MORRON VERDE', '2 DA', 'M', ' CARTON 1 1/9', 'TRIPLE H', '25', 'LBS', 0),
(50, NULL, 0, 0, 0, 'CHILE MORRON VERDE', '2 DA', 'CH', ' CARTON 1 1/9', 'TRIPLE H', '25', 'LBS', 0),
(51, NULL, 0, 0, 0, 'CHILE POBLANO VERDE', '1 RA', 'XL', ' CARTON 1 1/9', 'TRIPLE H', '22', 'LBS', 0),
(52, NULL, 0, 0, 0, 'CHILE POBLANO VERDE', '1 RA', 'L', ' CARTON 1 1/9', 'TRIPLE H', '22', 'LBS', 0),
(53, NULL, 0, 0, 0, 'CHILE POBLANO VERDE', '1 RA', 'M', ' CARTON 1 1/9', 'TRIPLE H', '22', 'LBS', 0),
(54, NULL, 0, 0, 0, 'CHILE POBLANO VERDE', '1 RA', 'CH', ' CARTON 1 1/9', 'TRIPLE H', '22', 'LBS', 0),
(55, NULL, 0, 0, 0, 'CHILE POBLANO VERDE', '2 DA', 'XL', ' CARTON 1 1/9', 'TRIPLE H', '22', 'LBS', 0),
(56, NULL, 0, 0, 0, 'CHILE POBLANO VERDE', '2 DA', 'L', ' CARTON 1 1/9', 'TRIPLE H', '22', 'LBS', 0),
(57, NULL, 0, 0, 0, 'CHILE POBLANO VERDE', '2 DA', 'M', ' CARTON 1 1/9', 'TRIPLE H', '22', 'LBS', 0),
(58, NULL, 0, 0, 0, 'CHILE POBLANO VERDE', '2 DA', 'CH', ' CARTON 1 1/9', 'TRIPLE H', '22', 'LBS', 0),
(59, NULL, 0, 0, 0, 'CHILE ANAHEIM ', '1 RA', 'XL', ' CARTON 1 1/9', 'TRIPLE H', '22', 'LBS', 0),
(60, NULL, 0, 0, 0, 'CHILE ANAHEIM ', '1 RA', 'L', ' CARTON 1 1/9', 'TRIPLE H', '22', 'LBS', 0),
(61, NULL, 0, 0, 0, 'CHILE ANAHEIM ', '1 RA', 'M', ' CARTON 1 1/9', 'TRIPLE H', '22', 'LBS', 0),
(62, NULL, 0, 0, 0, 'CHILE ANAHEIM ', '1 RA', 'CH', ' CARTON 1 1/9', 'TRIPLE H', '22', 'LBS', 0),
(63, NULL, 0, 0, 0, 'CHILE ANAHEIM ', '2 DA', 'XL', ' CARTON 1 1/9', 'TRIPLE H', '22', 'LBS', 0),
(64, NULL, 0, 0, 0, 'CHILE ANAHEIM ', '2 DA', 'L', ' CARTON 1 1/9', 'TRIPLE H', '22', 'LBS', 0),
(65, NULL, 0, 0, 0, 'CHILE ANAHEIM ', '2 DA', 'M', ' CARTON 1 1/9', 'TRIPLE H', '22', 'LBS', 0),
(66, NULL, 0, 0, 0, 'CHILE ANAHEIM ', '2 DA', 'CH', ' CARTON 1 1/9', 'TRIPLE H', '22', 'LBS', 0),
(67, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O VERDE ', '1 RA', 'XL', ' CARTON 1 1/9', 'ALEK', '35', 'LBS', 0),
(68, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O VERDE ', '1 RA', 'L', ' CARTON 1 1/9', 'ALEK', '35', 'LBS', 0),
(69, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O VERDE ', '1 RA', 'M', ' CARTON 1 1/9', 'ALEK', '35', 'LBS', 0),
(70, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O VERDE ', '1 RA', 'CH', ' CARTON 1 1/9', 'ALEK', '35', 'LBS', 0),
(71, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O VERDE ', '2 DA', 'XL', ' CARTON 1 1/9', 'ALEK', '35', 'LBS', 0),
(72, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O VERDE ', '2 DA', 'L', ' CARTON 1 1/9', 'ALEK', '35', 'LBS', 0),
(73, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O VERDE ', '2 DA', 'M', ' CARTON 1 1/9', 'ALEK', '35', 'LBS', 0),
(74, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O VERDE ', '2 DA', 'CH', ' CARTON 1 1/9', 'ALEK', '35', 'LBS', 0),
(75, NULL, 0, 0, 0, 'CHILE MORRON VERDE', '1 RA', 'XL', ' CARTON 1 1/9', 'ALEK', '25', 'LBS', 0),
(76, NULL, 0, 0, 0, 'CHILE MORRON VERDE', '1 RA', 'L', ' CARTON 1 1/9', 'ALEK', '25', 'LBS', 0),
(77, NULL, 0, 0, 0, 'CHILE MORRON VERDE', '1 RA', 'M', ' CARTON 1 1/9', 'ALEK', '25', 'LBS', 0),
(78, NULL, 0, 0, 0, 'CHILE MORRON VERDE', '1 RA', 'CH', ' CARTON 1 1/9', 'ALEK', '25', 'LBS', 0),
(79, NULL, 0, 0, 0, 'CHILE MORRON VERDE', '2 DA', 'XL', ' CARTON 1 1/9', 'ALEK', '25', 'LBS', 0),
(80, NULL, 0, 0, 0, 'CHILE MORRON VERDE', '2 DA', 'L', ' CARTON 1 1/9', 'ALEK', '25', 'LBS', 0),
(81, NULL, 0, 0, 0, 'CHILE MORRON VERDE', '2 DA', 'M', ' CARTON 1 1/9', 'ALEK', '25', 'LBS', 0),
(82, NULL, 0, 0, 0, 'CHILE MORRON VERDE', '2 DA', 'CH', ' CARTON 1 1/9', 'ALEK', '25', 'LBS', 0),
(83, NULL, 0, 0, 0, 'CHILE POBLANO VERDE', '1 RA', 'XL', ' CARTON 1 1/9', 'ALEK', '22', 'LBS', 0),
(84, NULL, 0, 0, 0, 'CHILE POBLANO VERDE', '1 RA', 'L', ' CARTON 1 1/9', 'ALEK', '22', 'LBS', 0),
(85, NULL, 0, 0, 0, 'CHILE POBLANO VERDE', '1 RA', 'M', ' CARTON 1 1/9', 'ALEK', '22', 'LBS', 0),
(86, NULL, 0, 0, 0, 'CHILE POBLANO VERDE', '1 RA', 'CH', ' CARTON 1 1/9', 'ALEK', '22', 'LBS', 0),
(87, NULL, 0, 0, 0, 'CHILE POBLANO VERDE', '2 DA', 'XL', ' CARTON 1 1/9', 'ALEK', '22', 'LBS', 0),
(88, NULL, 0, 0, 0, 'CHILE POBLANO VERDE', '2 DA', 'L', ' CARTON 1 1/9', 'ALEK', '22', 'LBS', 0),
(89, NULL, 0, 0, 0, 'CHILE POBLANO VERDE', '2 DA', 'M', ' CARTON 1 1/9', 'ALEK', '22', 'LBS', 0),
(90, NULL, 0, 0, 0, 'CHILE POBLANO VERDE', '2 DA', 'CH', ' CARTON 1 1/9', 'ALEK', '22', 'LBS', 0),
(91, NULL, 0, 0, 0, 'CHILE ANAHEIM VERDE', '1 RA', 'XL', ' CARTON 1 1/9', 'ALEK', '22', 'LBS', 0),
(92, NULL, 0, 0, 0, 'CHILE ANAHEIM VERDE', '1 RA', 'L', ' CARTON 1 1/9', 'ALEK', '22', 'LBS', 0),
(93, NULL, 0, 0, 0, 'CHILE ANAHEIM VERDE', '1 RA', 'M', ' CARTON 1 1/9', 'ALEK', '22', 'LBS', 0),
(94, NULL, 0, 0, 0, 'CHILE ANAHEIM VERDE', '1 RA', 'CH', ' CARTON 1 1/9', 'ALEK', '22', 'LBS', 0),
(95, NULL, 0, 0, 0, 'CHILE ANAHEIM VERDE', '2 DA', 'XL', ' CARTON 1 1/9', 'ALEK', '22', 'LBS', 0),
(96, NULL, 0, 0, 0, 'CHILE ANAHEIM VERDE', '2 DA', 'L', ' CARTON 1 1/9', 'ALEK', '22', 'LBS', 0),
(97, NULL, 0, 0, 0, 'CHILE ANAHEIM VERDE', '2 DA', 'M', ' CARTON 1 1/9', 'ALEK', '22', 'LBS', 0),
(98, NULL, 0, 0, 0, 'CHILE ANAHEIM VERDE', '2 DA', 'CH', ' CARTON 1 1/9', 'ALEK', '22', 'LBS', 0),
(99, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O VERDE ', '1 RA', 'XL', ' CARTON 1 1/9', 'PICOSITO', '35', 'LBS', 0),
(100, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O VERDE ', '1 RA', 'L', ' CARTON 1 1/9', 'PICOSITO', '35', 'LBS', 0),
(101, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O VERDE ', '1 RA', 'M', ' CARTON 1 1/9', 'PICOSITO', '35', 'LBS', 0),
(102, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O VERDE ', '1 RA', 'CH', ' CARTON 1 1/9', 'PICOSITO', '35', 'LBS', 0),
(103, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O VERDE ', '2 DA', 'XL', ' CARTON 1 1/9', 'PICOSITO', '35', 'LBS', 0),
(104, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O VERDE ', '2 DA', 'L', ' CARTON 1 1/9', 'PICOSITO', '35', 'LBS', 0),
(105, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O VERDE ', '2 DA', 'M', ' CARTON 1 1/9', 'PICOSITO', '35', 'LBS', 0),
(106, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O VERDE ', '2 DA', 'CH', ' CARTON 1 1/9', 'PICOSITO', '35', 'LBS', 0),
(107, NULL, 0, 0, 0, 'CHILE MORRON VERDE', '1 RA', 'XL', ' CARTON 1 1/9', 'PICOSITO', '25', 'LBS', 0),
(108, NULL, 0, 0, 0, 'CHILE MORRON VERDE', '1 RA', 'L', ' CARTON 1 1/9', 'PICOSITO', '25', 'LBS', 0),
(109, NULL, 0, 0, 0, 'CHILE MORRON VERDE', '1 RA', 'M', ' CARTON 1 1/9', 'PICOSITO', '25', 'LBS', 0),
(110, NULL, 0, 0, 0, 'CHILE MORRON VERDE', '1 RA', 'CH', ' CARTON 1 1/9', 'PICOSITO', '25', 'LBS', 0),
(111, NULL, 0, 0, 0, 'CHILE MORRON VERDE', '2 DA', 'XL', ' CARTON 1 1/9', 'PICOSITO', '25', 'LBS', 0),
(112, NULL, 0, 0, 0, 'CHILE MORRON VERDE', '2 DA', 'L', ' CARTON 1 1/9', 'PICOSITO', '25', 'LBS', 0),
(113, NULL, 0, 0, 0, 'CHILE MORRON VERDE', '2 DA', 'M', ' CARTON 1 1/9', 'PICOSITO', '25', 'LBS', 0),
(114, NULL, 0, 0, 0, 'CHILE MORRON VERDE', '2 DA', 'CH', ' CARTON 1 1/9', 'PICOSITO', '25', 'LBS', 0),
(115, NULL, 0, 0, 0, 'CHILE POBLANO VERDE', '1 RA', 'XL', ' CARTON 1 1/9', 'PICOSITO', '22', 'LBS', 0),
(116, NULL, 0, 0, 0, 'CHILE POBLANO VERDE', '1 RA', 'L', ' CARTON 1 1/9', 'PICOSITO', '22', 'LBS', 0),
(117, NULL, 0, 0, 0, 'CHILE POBLANO VERDE', '1 RA', 'M', ' CARTON 1 1/9', 'PICOSITO', '22', 'LBS', 0),
(118, NULL, 0, 0, 0, 'CHILE POBLANO VERDE', '1 RA', 'CH', ' CARTON 1 1/9', 'PICOSITO', '22', 'LBS', 0),
(119, NULL, 0, 0, 0, 'CHILE POBLANO VERDE', '2 DA', 'XL', ' CARTON 1 1/9', 'PICOSITO', '22', 'LBS', 0),
(120, NULL, 0, 0, 0, 'CHILE POBLANO VERDE', '2 DA', 'L', ' CARTON 1 1/9', 'PICOSITO', '22', 'LBS', 0),
(121, NULL, 0, 0, 0, 'CHILE POBLANO VERDE', '2 DA', 'M', ' CARTON 1 1/9', 'PICOSITO', '22', 'LBS', 0),
(122, NULL, 0, 0, 0, 'CHILE POBLANO VERDE', '2 DA', 'CH', ' CARTON 1 1/9', 'PICOSITO', '22', 'LBS', 0),
(123, NULL, 0, 0, 0, 'CHILE ANAHEIM VERDE', '1 RA', 'XL', ' CARTON 1 1/9', 'PICOSITO', '22', 'LBS', 0),
(124, NULL, 0, 0, 0, 'CHILE ANAHEIM VERDE', '1 RA', 'L', ' CARTON 1 1/9', 'PICOSITO', '22', 'LBS', 0),
(125, NULL, 0, 0, 0, 'CHILE ANAHEIM VERDE', '1 RA', 'M', ' CARTON 1 1/9', 'PICOSITO', '22', 'LBS', 0),
(126, NULL, 0, 0, 0, 'CHILE ANAHEIM VERDE', '1 RA', 'CH', ' CARTON 1 1/9', 'PICOSITO', '22', 'LBS', 0),
(127, NULL, 0, 0, 0, 'CHILE ANAHEIM VERDE', '2 DA', 'XL', ' CARTON 1 1/9', 'PICOSITO', '22', 'LBS', 0),
(128, NULL, 0, 0, 0, 'CHILE ANAHEIM VERDE', '2 DA', 'L', ' CARTON 1 1/9', 'PICOSITO', '22', 'LBS', 0),
(129, NULL, 0, 0, 0, 'CHILE ANAHEIM VERDE', '2 DA', 'M', ' CARTON 1 1/9', 'PICOSITO', '22', 'LBS', 0),
(130, NULL, 0, 0, 0, 'CHILE ANAHEIM VERDE', '2 DA', 'CH', ' CARTON 1 1/9', 'PICOSITO', '22', 'LBS', 0),
(131, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O VERDE ', '1 RA', 'XL', ' CARTON 1 1/9', 'CHILOSO', '35', 'LBS', 0),
(132, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O VERDE ', '1 RA', 'L', ' CARTON 1 1/9', 'CHILOSO', '35', 'LBS', 0),
(133, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O VERDE ', '1 RA', 'M', ' CARTON 1 1/9', 'CHILOSO', '35', 'LBS', 0),
(134, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O VERDE ', '1 RA', 'CH', ' CARTON 1 1/9', 'CHILOSO', '35', 'LBS', 0),
(135, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O VERDE ', '2 DA', 'XL', ' CARTON 1 1/9', 'CHILOSO', '35', 'LBS', 0),
(136, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O VERDE ', '2 DA', 'L', ' CARTON 1 1/9', 'CHILOSO', '35', 'LBS', 0),
(137, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O VERDE ', '2 DA', 'M', ' CARTON 1 1/9', 'CHILOSO', '35', 'LBS', 0),
(138, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O VERDE ', '2 DA', 'CH', ' CARTON 1 1/9', 'CHILOSO', '35', 'LBS', 0),
(139, NULL, 0, 0, 0, 'CHILE MORRON VERDE', '1 RA', 'XL', ' CARTON 1 1/9', 'CHILOSO', '35', 'LBS', 0),
(140, NULL, 0, 0, 0, 'CHILE MORRON VERDE', '1 RA', 'L', ' CARTON 1 1/9', 'CHILOSO', '25', 'LBS', 0),
(141, NULL, 0, 0, 0, 'CHILE MORRON VERDE', '1 RA', 'M', ' CARTON 1 1/9', 'CHILOSO', '25', 'LBS', 0),
(142, NULL, 0, 0, 0, 'CHILE MORRON VERDE', '1 RA', 'CH', ' CARTON 1 1/9', 'CHILOSO', '25', 'LBS', 0),
(143, NULL, 0, 0, 0, 'CHILE MORRON VERDE', '2 DA', 'XL', ' CARTON 1 1/9', 'CHILOSO', '25', 'LBS', 0),
(144, NULL, 0, 0, 0, 'CHILE MORRON VERDE', '2 DA', 'L', ' CARTON 1 1/9', 'CHILOSO', '25', 'LBS', 0),
(145, NULL, 0, 0, 0, 'CHILE MORRON VERDE', '2 DA', 'M', ' CARTON 1 1/9', 'CHILOSO', '25', 'LBS', 0),
(146, NULL, 0, 0, 0, 'CHILE MORRON VERDE', '2 DA', 'CH', ' CARTON 1 1/9', 'CHILOSO', '25', 'LBS', 0),
(147, NULL, 0, 0, 0, 'CHILE POBLANO VERDE', '1 RA', 'XL', ' CARTON 1 1/9', 'CHILOSO', '22', 'LBS', 0),
(148, NULL, 0, 0, 0, 'CHILE POBLANO VERDE', '1 RA', 'L', ' CARTON 1 1/9', 'CHILOSO', '22', 'LBS', 0),
(149, NULL, 0, 0, 0, 'CHILE POBLANO VERDE', '1 RA', 'M', ' CARTON 1 1/9', 'CHILOSO', '22', 'LBS', 0),
(150, NULL, 0, 0, 0, 'CHILE POBLANO VERDE', '1 RA', 'CH', ' CARTON 1 1/9', 'CHILOSO', '22', 'LBS', 0),
(151, NULL, 0, 0, 0, 'CHILE POBLANO VERDE', '2 DA', 'XL', ' CARTON 1 1/9', 'CHILOSO', '22', 'LBS', 0),
(152, NULL, 0, 0, 0, 'CHILE POBLANO VERDE', '2 DA', 'L', ' CARTON 1 1/9', 'CHILOSO', '22', 'LBS', 0),
(153, NULL, 0, 0, 0, 'CHILE POBLANO VERDE', '2 DA', 'M', ' CARTON 1 1/9', 'CHILOSO', '22', 'LBS', 0),
(154, NULL, 0, 0, 0, 'CHILE POBLANO VERDE', '2 DA', 'CH', ' CARTON 1 1/9', 'CHILOSO', '22', 'LBS', 0),
(155, NULL, 0, 0, 0, 'CHILE ANAHEIM VERDE', '1 RA', 'XL', ' CARTON 1 1/9', 'CHILOSO', '22', 'LBS', 0),
(156, NULL, 0, 0, 0, 'CHILE ANAHEIM VERDE', '1 RA', 'L', ' CARTON 1 1/9', 'CHILOSO', '22', 'LBS', 0),
(157, NULL, 0, 0, 0, 'CHILE ANAHEIM VERDE', '1 RA', 'M', ' CARTON 1 1/9', 'CHILOSO', '22', 'LBS', 0),
(158, NULL, 0, 0, 0, 'CHILE ANAHEIM VERDE', '1 RA', 'CH', ' CARTON 1 1/9', 'CHILOSO', '22', 'LBS', 0),
(159, NULL, 0, 0, 0, 'CHILE ANAHEIM VERDE', '2 DA', 'XL', ' CARTON 1 1/9', 'CHILOSO', '22', 'LBS', 0),
(160, NULL, 0, 0, 0, 'CHILE ANAHEIM VERDE', '2 DA', 'L', ' CARTON 1 1/9', 'CHILOSO', '22', 'LBS', 0),
(161, NULL, 0, 0, 0, 'CHILE ANAHEIM VERDE', '2 DA', 'M', ' CARTON 1 1/9', 'CHILOSO', '22', 'LBS', 0),
(162, NULL, 0, 0, 0, 'CHILE ANAHEIM VERDE', '2 DA', 'CH', ' CARTON 1 1/9', 'CHILOSO', '22', 'LBS', 0),
(163, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O VERDE ', '1 RA', 'XL', ' CARTON 1 1/9', 'CASCO', '35', 'LBS', 0),
(164, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O VERDE ', '1 RA', 'L', ' CARTON 1 1/9', 'CASCO', '35', 'LBS', 0),
(165, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O VERDE ', '1 RA', 'M', ' CARTON 1 1/9', 'CASCO', '35', 'LBS', 0),
(166, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O VERDE ', '1 RA', 'CH', ' CARTON 1 1/9', 'CASCO', '35', 'LBS', 0),
(167, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O VERDE ', '2 DA', 'XL', ' CARTON 1 1/9', 'CASCO', '35', 'LBS', 0),
(168, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O VERDE ', '2 DA', 'L', ' CARTON 1 1/9', 'CASCO', '35', 'LBS', 0),
(169, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O VERDE ', '2 DA', 'M', ' CARTON 1 1/9', 'CASCO', '35', 'LBS', 0),
(170, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O VERDE ', '2 DA', 'CH', ' CARTON 1 1/9', 'CASCO', '35', 'LBS', 0),
(171, NULL, 0, 0, 0, 'CHILE MORRON VERDE', '1 RA', 'XL', ' CARTON 1 1/9', 'CASCO', '25', 'LBS', 0),
(172, NULL, 0, 0, 0, 'CHILE MORRON VERDE', '1 RA', 'L', ' CARTON 1 1/9', 'CASCO', '25', 'LBS', 0),
(173, NULL, 0, 0, 0, 'CHILE MORRON VERDE', '1 RA', 'M', ' CARTON 1 1/9', 'CASCO', '25', 'LBS', 0),
(174, NULL, 0, 0, 0, 'CHILE MORRON VERDE', '1 RA', 'CH', ' CARTON 1 1/9', 'CASCO', '25', 'LBS', 0),
(175, NULL, 0, 0, 0, 'CHILE MORRON VERDE', '2 DA', 'XL', ' CARTON 1 1/9', 'CASCO', '25', 'LBS', 0),
(176, NULL, 0, 0, 0, 'CHILE MORRON VERDE', '2 DA', 'L', ' CARTON 1 1/9', 'CASCO', '25', 'LBS', 0),
(177, NULL, 0, 0, 0, 'CHILE MORRON VERDE', '2 DA', 'M', ' CARTON 1 1/9', 'CASCO', '25', 'LBS', 0),
(178, NULL, 0, 0, 0, 'CHILE MORRON VERDE', '2 DA', 'CH', ' CARTON 1 1/9', 'CASCO', '25', 'LBS', 0),
(179, NULL, 0, 0, 0, 'CHILE POBLANO VERDE', '1 RA', 'XL', ' CARTON 1 1/9', 'CASCO', '22', 'LBS', 0),
(180, NULL, 0, 0, 0, 'CHILE POBLANO VERDE', '1 RA', 'L', ' CARTON 1 1/9', 'CASCO', '22', 'LBS', 0),
(181, NULL, 0, 0, 0, 'CHILE POBLANO VERDE', '1 RA', 'M', ' CARTON 1 1/9', 'CASCO', '22', 'LBS', 0),
(182, NULL, 0, 0, 0, 'CHILE POBLANO VERDE', '1 RA', 'CH', ' CARTON 1 1/9', 'CASCO', '22', 'LBS', 0),
(183, NULL, 0, 0, 0, 'CHILE POBLANO VERDE', '2 DA', 'XL', ' CARTON 1 1/9', 'CASCO', '22', 'LBS', 0),
(184, NULL, 0, 0, 0, 'CHILE POBLANO VERDE', '2 DA', 'L', ' CARTON 1 1/9', 'CASCO', '22', 'LBS', 0),
(185, NULL, 0, 0, 0, 'CHILE POBLANO VERDE', '2 DA', 'M', ' CARTON 1 1/9', 'CASCO', '22', 'LBS', 0),
(186, NULL, 0, 0, 0, 'CHILE POBLANO VERDE', '2 DA', 'CH', ' CARTON 1 1/9', 'CASCO', '22', 'LBS', 0),
(187, NULL, 0, 0, 0, 'CHILE ANAHEIM VERDE', '1 RA', 'XL', ' CARTON 1 1/9', 'CASCO', '22', 'LBS', 0),
(188, NULL, 0, 0, 0, 'CHILE ANAHEIM VERDE', '1 RA', 'L', ' CARTON 1 1/9', 'CASCO', '22', 'LBS', 0),
(189, NULL, 0, 0, 0, 'CHILE ANAHEIM VERDE', '1 RA', 'M', ' CARTON 1 1/9', 'CASCO', '22', 'LBS', 0),
(190, NULL, 0, 0, 0, 'CHILE ANAHEIM VERDE', '1 RA', 'CH', ' CARTON 1 1/9', 'CASCO', '22', 'LBS', 0),
(191, NULL, 0, 0, 0, 'CHILE ANAHEIM VERDE', '2 DA', 'XL', ' CARTON 1 1/9', 'CASCO', '22', 'LBS', 0),
(192, NULL, 0, 0, 0, 'CHILE ANAHEIM VERDE', '2 DA', 'L', ' CARTON 1 1/9', 'CASCO', '22', 'LBS', 0),
(193, NULL, 0, 0, 0, 'CHILE ANAHEIM VERDE', '2 DA', 'M', ' CARTON 1 1/9', 'CASCO', '22', 'LBS', 0),
(194, NULL, 0, 0, 0, 'CHILE ANAHEIM VERDE', '2 DA', 'CH', ' CARTON 1 1/9', 'CASCO', '22', 'LBS', 0),
(195, NULL, 0, 0, 0, 'CEBOLLA BLANCA', '1 RA', 'LG', 'ARPILLA MEXICAN', 'GENERICO', '50', 'LBS', 0),
(196, NULL, 0, 0, 0, 'CEBOLLA BLANCA', '1 RA', 'LM', 'ARPILLA MEXICAN', 'GENERICO', '50', 'LBS', 0),
(197, NULL, 0, 0, 0, 'CEBOLLA BLANCA', '1 RA', 'PP', 'ARPILLA MEXICAN', 'GENERICO', '50', 'LBS', 0),
(198, NULL, 0, 0, 0, 'CEBOLLA BLANCA', '1 RA', 'J', 'ARPILLA MEXICAN', 'GENERICO', '50', 'LBS', 0),
(203, NULL, 0, 0, 0, 'CEBOLLA BLANCA', '2 DA', 'LG', 'ARPILLA FRESA', 'GENERICO', '30', 'KG', 0),
(204, NULL, 0, 0, 0, 'CEBOLLA BLANCA', '2 DA', 'LM', 'ARPILLA FRESA', 'GENERICO', '30', 'KG', 0),
(205, NULL, 0, 0, 0, 'CEBOLLA BLANCA', '2 DA', 'PP', 'ARPILLA FRESA', 'GENERICO', '30', 'KG', 0),
(206, NULL, 0, 0, 0, 'CEBOLLA BLANCA', '2 DA', 'J', 'ARPILLA FRESA', 'GENERICO', '30', 'KG', 0),
(207, NULL, 0, 0, 0, 'CEBOLLA BLANCA', '1 RA', 'LG', 'ARPILLA SELECCIONADA', 'GENERICO', '23', 'KG', 0),
(208, NULL, 0, 0, 0, 'CEBOLLA BLANCA', '1 RA', 'LM', 'ARPILLA SELECCIONADA', 'GENERICO', '23', 'KG', 0),
(209, NULL, 0, 0, 0, 'CEBOLLA BLANCA', '1 RA', 'PP', 'ARPILLA SELECCIONADA', 'GENERICO', '23', 'KG', 0),
(210, NULL, 0, 0, 0, 'CEBOLLA BLANCA', '1 RA', 'J', 'ARPILLA SELECCIONADA', 'GENERICO', '23', 'KG', 0),
(211, NULL, 0, 0, 0, 'CEBOLLA MORADA', '1 RA', 'LG', 'ARPILLA FRESA', 'GENERICO', '30', 'KG', 0),
(212, NULL, 0, 0, 0, 'CEBOLLA MORADA', '1 RA', 'LM', 'ARPILLA FRESA', 'GENERICO', '30', 'KG', 0),
(213, NULL, 0, 0, 0, 'CEBOLLA MORADA', '1 RA', 'PP', 'ARPILLA FRESA', 'GENERICO', '30', 'KG', 0),
(214, NULL, 0, 0, 0, 'CEBOLLA MORADA', '1 RA', 'J', 'ARPILLA FRESA', 'GENERICO', '30', 'KG', 0),
(215, NULL, 0, 0, 0, 'CEBOLLA MORADA', '2 DA', 'LG', 'ARPILLA FRESA', 'GENERICO', '30', 'KG', 0),
(216, NULL, 0, 0, 0, 'CEBOLLA MORADA', '2 DA', 'LM', 'ARPILLA FRESA', 'GENERICO', '30', 'KG', 0),
(217, NULL, 0, 0, 0, 'CEBOLLA MORADA', '2 DA', 'PP', 'ARPILLA FRESA', 'GENERICO', '30', 'KG', 0),
(218, NULL, 0, 0, 0, 'CEBOLLA MORADA', '2 DA', 'J', 'ARPILLA FRESA', 'GENERICO', '30', 'KG', 0),
(219, NULL, 0, 0, 0, 'CEBOLLA MORADA', '1 RA', 'LG', 'ARPILLA MORADA', 'GENERICO', '30', 'KG', 0),
(220, NULL, 0, 0, 0, 'CEBOLLA MORADA', '1 RA', 'LM', 'ARPILLA MORADA', 'GENERICO', '30', 'KG', 0),
(221, NULL, 0, 0, 0, 'CEBOLLA MORADA', '1 RA', 'PP', 'ARPILLA MORADA', 'GENERICO', '30', 'KG', 0),
(222, NULL, 0, 0, 0, 'CEBOLLA MORADA', '1 RA', 'J', 'ARPILLA MORADA', 'GENERICO', '30', 'KG', 0),
(223, NULL, 0, 0, 0, 'CEBOLLA MORADA', '2 DA', 'LG', 'ARPILLA MORADA', 'GENERICO', '30', 'KG', 0),
(224, NULL, 0, 0, 0, 'CEBOLLA MORADA', '2 DA', 'LM', 'ARPILLA MORADA', 'GENERICO', '30', 'KG', 0),
(225, NULL, 0, 0, 0, 'CEBOLLA MORADA', '2 DA', 'PP', 'ARPILLA MORADA', 'GENERICO', '30', 'KG', 0),
(226, NULL, 0, 0, 0, 'CEBOLLA MORADA', '2 DA', 'J', 'ARPILLA MORADA', 'GENERICO', '30', 'KG', 0),
(242, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O VERDE MAG', '1 RA', 'XL', ' ARPILLA VERDE', 'GENERICO', '30', 'KG', 0),
(243, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O VERDE MAG', '1 RA', 'L', ' ARPILLA VERDE', 'GENERICO', '30', 'KG', 0),
(244, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O VERDE MAG', '1 RA', 'M', ' ARPILLA VERDE', 'GENERICO', '30', 'KG', 0),
(245, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O VERDE MAG', '1 RA', 'CH', ' ARPILLA VERDE', 'GENERICO', '30', 'KG', 0),
(246, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O VERDE MAG', '2 DA', 'XL', ' ARPILLA VERDE', 'GENERICO', '30', 'KG', 0),
(247, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O VERDE MAG', '2 DA', 'L', ' ARPILLA VERDE', 'GENERICO', '30', 'KG', 0),
(248, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O VERDE MAG', '2 DA', 'M', ' ARPILLA VERDE', 'GENERICO', '30', 'KG', 0),
(249, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O VERDE MAG', '2 DA', 'CH', ' ARPILLA VERDE', 'GENERICO', '30', 'KG', 0),
(250, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O HOSCO MAG', '1 RA', 'XL', ' ARPILLA VERDE', 'GENERICO', '30', 'KG', 0),
(251, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O HOSCO MAG', '1 RA', 'L', ' ARPILLA VERDE', 'GENERICO', '30', 'KG', 0),
(252, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O HOSCO MAG', '1 RA', 'M', ' ARPILLA VERDE', 'GENERICO', '30', 'KG', 0),
(253, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O HOSCO MAG', '1 RA', 'CH', ' ARPILLA VERDE', 'GENERICO', '30', 'KG', 0),
(254, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O HOSCO MAG', '2 DA', 'XL', ' ARPILLA VERDE', 'GENERICO', '30', 'KG', 0),
(255, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O HOSCO MAG', '2 DA', 'L', ' ARPILLA VERDE', 'GENERICO', '30', 'KG', 0),
(256, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O HOSCO MAG', '2 DA', 'M', ' ARPILLA VERDE', 'GENERICO', '30', 'KG', 0),
(257, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O HOSCO MAG', '2 DA', 'CH', ' ARPILLA VERDE', 'GENERICO', '30', 'KG', 0),
(258, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O HOSCO 3/4 MAG', '1 RA', 'XL', ' ARPILLA VERDE', 'GENERICO', '30', 'KG', 0),
(259, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O HOSCO 3/4 MAG', '1 RA', 'L', ' ARPILLA VERDE', 'GENERICO', '30', 'KG', 0),
(260, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O HOSCO 3/4 MAG', '1 RA', 'M', ' ARPILLA VERDE', 'GENERICO', '30', 'KG', 0),
(261, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O HOSCO 3/4 MAG', '1 RA', 'CH', ' ARPILLA VERDE', 'GENERICO', '30', 'KG', 0),
(262, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O HOSCO 3/4 MAG', '2 DA', 'XL', ' ARPILLA VERDE', 'GENERICO', '30', 'KG', 0),
(263, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O HOSCO 3/4 MAG', '2 DA', 'L', ' ARPILLA VERDE', 'GENERICO', '30', 'KG', 0),
(264, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O HOSCO 3/4 MAG', '2 DA', 'M', ' ARPILLA VERDE', 'GENERICO', '30', 'KG', 0),
(265, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O HOSCO 3/4 MAG', '2 DA', 'CH', ' ARPILLA VERDE', 'GENERICO', '30', 'KG', 0),
(266, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O ROJO MAG', '1 RA', 'XL', ' ARPILLA VERDE', 'GENERICO', '30', 'KG', 0),
(267, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O ROJO MAG', '1 RA', 'L', ' ARPILLA VERDE', 'GENERICO', '30', 'KG', 0),
(268, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O ROJO MAG', '1 RA', 'M', ' ARPILLA VERDE', 'GENERICO', '30', 'KG', 0),
(269, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O ROJO MAG', '1 RA', 'CH', ' ARPILLA VERDE', 'GENERICO', '30', 'KG', 0),
(270, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O ROJO MAG', '2 DA', 'XL', ' ARPILLA VERDE', 'GENERICO', '30', 'KG', 0),
(271, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O ROJO MAG', '2 DA', 'L', ' ARPILLA VERDE', 'GENERICO', '30', 'KG', 0),
(272, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O ROJO MAG', '2 DA', 'M', ' ARPILLA VERDE', 'GENERICO', '30', 'KG', 0),
(273, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O ROJO MAG', '2 DA', 'CH', ' ARPILLA VERDE', 'GENERICO', '30', 'KG', 0),
(274, NULL, 0, 0, 0, 'CHILE MORRON VERDE', '1 RA', 'L', ' CARTON 1 1/9', 'ANAVALE', '25', 'LBS', 0),
(275, NULL, 0, 0, 0, 'CHILE ANAHEIM  MAG', '1 RA', 'XL', ' ARPILLA VERDE', 'GENERICO', '18', 'KG', 0),
(276, NULL, 0, 0, 0, 'CHILE ANAHEIM MAG', '1 RA', 'XL', ' ARPILLA VERDE', 'GENERICO', '22', 'KG', 0),
(277, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O VERDE ', '1 RA', 'XL', ' ARPILLA VERDE', 'GENERICO', '30', 'KG', 0),
(278, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O HOSCO 3/4 ', '1 RA', 'XL', ' ARPILLA VERDE', 'GENERICO', '30', 'KG', 0),
(279, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O VERDE ', '2 DA', 'L', ' ARPILLA VERDE', 'GENERICO', '30', 'KG', 0),
(280, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O HOSCO', '2 DA', 'L', ' ARPILLA VERDE', 'GENERICO', '30', 'KG', 0),
(281, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O HOSCO 3/4', '2 DA', 'L', ' ARPILLA VERDE', 'GENERICO', '30', 'KG', 0),
(282, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O ROJO', '2 DA', 'L', ' ARPILLA VERDE', 'GENERICO', '30', 'KG', 0),
(283, NULL, 0, 0, 0, 'CHILE ANAHEIM', '1 RA', 'L', ' ARPILLA VERDE', 'GENERICO', '18', 'KG', 0),
(284, NULL, 0, 0, 0, 'CHILE POBLANO', '2 DA', 'L', 'CAJA NAILEA', 'GENERICO', '20', 'KG', 0),
(285, NULL, 0, 0, 0, 'CHILE ANAHEIM VERDE', '2 DA', 'L', 'CAJA NAILEA', 'GENERICO', '1', 'KG', 0),
(287, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O VERDE', '2 DA', 'L', ' ARPILLA ', 'GENERICO', '30', 'KG', 0),
(288, NULL, 0, 0, 0, 'CHILE POBLANO VERDE', '2 DA', 'XL', ' ARPILLA ', 'GENERICO', '30', 'KG', 0),
(290, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O PARA HORNO', '2 DA', 'M', ' ARPILLA ', 'GENERICO', '30', 'KG', 0),
(291, NULL, 0, 0, 0, 'CHILE ANAHEIM', '2 DA', 'L', ' ARPILLA ', 'GENERICO', '30', 'KG', 0),
(292, NULL, 0, 0, 0, 'CHILE MORRON', '1 RA', 'L', ' CARTON 1 1/9', 'ANAVALE', '25', 'LBS', 0),
(293, NULL, 0, 0, 0, 'CHILE MORRON VERDE', '1 RA', 'J', ' CARTON 1 1/9', 'TRIPLE H', '35', 'LBS', 0),
(295, NULL, 0, 0, 0, 'CHILE MORRON VERDE', '1 RA', 'J', ' CARTON 1 1/9', 'ALEK', '25', 'LBS', 0),
(297, NULL, 0, 0, 0, 'CHILE POBLANO', '1 RA', 'MIXTO', ' A GRANEL ', 'GENERICO', '1', 'KG', 0),
(298, NULL, 0, 0, 0, 'CHILE MORRON VERDE', '1 RA', 'J', ' CARTON 1 1/9', 'PICOSITO', '25', 'LBS', 0),
(299, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O', '1 RA', 'XL', ' CAJA NAILEA', 'GENERICO', '17', 'KG', 0),
(300, NULL, 0, 0, 0, 'CHILE ANAHEIM', '1 RA', 'XL', ' CAJA NAILEA', 'GENERICO', '17', 'KG', 0),
(301, NULL, 0, 0, 0, 'CHILE ANAHEIM', '1 RA', 'XL', ' CAJA NAILEA', 'GENERICO', '12', 'KG', 0),
(302, NULL, 0, 0, 0, 'CHILE POBLANO', '1 RA', 'XL', ' CAJA NAILEA', 'GENERICO', '10', 'KG', 0),
(303, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O VERDE', '1 RA', 'XL', 'ARPILLA VERDE', 'GENERICO', '30', 'KG', 0),
(304, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O VERDE', '1 RA', 'L', 'ARPILLA VERDE', 'GENERICO', '30', 'KG', 0),
(305, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O VERDE', '1 RA', 'M', 'ARPILLA VERDE', 'GENERICO', '30', 'KG', 0),
(306, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O VERDE', '1 RA', 'CH', 'ARPILLA VERDE', 'GENERICO', '30', 'KG', 0),
(307, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O VERDE', '2 DA', 'XL', 'ARPILLA VERDE', 'GENERICO', '30', 'KG', 0),
(308, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O VERDE', '2 DA', 'L', 'ARPILLA VERDE', 'GENERICO', '30', 'KG', 0),
(309, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O VERDE', '2 DA', 'M', 'ARPILLA VERDE', 'GENERICO', '30', 'KG', 0),
(310, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O VERDE', '2 DA', 'CH', 'ARPILLA VERDE', 'GENERICO', '30', 'KG', 0),
(311, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O HOSCO', '1 RA', 'XL', 'ARPILLA VERDE', 'GENERICO', '30', 'KG', 0),
(312, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O HOSCO', '1 RA', 'L', 'ARPILLA VERDE', 'GENERICO', '30', 'KG', 0),
(313, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O HOSCO', '1 RA', 'M', 'ARPILLA VERDE', 'GENERICO', '30', 'KG', 0),
(314, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O HOSCO', '1 RA', 'CH', 'ARPILLA VERDE', 'GENERICO', '30', 'KG', 0),
(315, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O HOSCO', '2 DA', 'XL', 'ARPILLA VERDE', 'GENERICO', '30', 'KG', 0),
(316, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O HOSCO', '2 DA', 'L', 'ARPILLA VERDE', 'GENERICO', '30', 'KG', 0),
(317, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O HOSCO', '2 DA', 'M', 'ARPILLA VERDE', 'GENERICO', '30', 'KG', 0),
(318, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O HOSCO', '2 DA', 'CH', 'ARPILLA VERDE', 'GENERICO', '30', 'KG', 0),
(319, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O ROJO', '1 RA', 'XL', ' CAJA NAILEA ', 'PICOSITO', '16', 'KG', 0),
(320, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O HOSCO 3/4', '1 RA', 'XL', 'ARPILLA VERDE', 'GENERICO', '30', 'KG', 0),
(321, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O HOSCO 3/4', '1 RA', 'L', 'ARPILLA VERDE', 'GENERICO', '30', 'KG', 0),
(322, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O HOSCO 3/4', '1 RA', 'M', 'ARPILLA VERDE', 'GENERICO', '30', 'KG', 0),
(323, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O HOSCO 3/4', '1 RA', 'CH', 'ARPILLA VERDE', 'GENERICO', '30', 'KG', 0),
(324, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O HOSCO 3/4', '2 DA', 'XL', 'ARPILLA VERDE', 'GENERICO', '30', 'KG', 0),
(325, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O HOSCO 3/4', '2 DA', 'L', 'ARPILLA VERDE', 'GENERICO', '30', 'KG', 0),
(326, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O HOSCO 3/4', '2 DA', 'M', 'ARPILLA VERDE', 'GENERICO', '30', 'KG', 0),
(327, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O HOSCO 3/4', '2 DA', 'CH', 'ARPILLA VERDE', 'GENERICO', '30', 'KG', 0),
(328, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O ROJO', '1 RA', 'XL', 'ARPILLA VERDE', 'GENERICO', '30', 'KG', 0),
(330, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O ROJO', '1 RA', 'L', 'ARPILLA VERDE', 'GENERICO', '30', 'KG', 0),
(331, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O ROJO', '1 RA', 'M', 'ARPILLA VERDE', 'GENERICO', '30', 'KG', 0),
(332, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O ROJO', '1 RA', 'CH', 'ARPILLA VERDE', 'GENERICO', '30', 'KG', 0),
(333, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O ROJO', '2 DA', 'XL', 'ARPILLA VERDE', 'GENERICO', '30', 'KG', 0),
(334, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O ROJO', '2 DA', 'L', 'ARPILLA VERDE', 'GENERICO', '30', 'KG', 0),
(335, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O ROJO', '2 DA', 'M', 'ARPILLA VERDE', 'GENERICO', '30', 'KG', 0),
(336, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O ROJO', '2 DA', 'CH', 'ARPILLA VERDE', 'GENERICO', '30', 'KG', 0),
(337, NULL, 0, 0, 0, 'CHILE ANAHEIM', '1 RA', 'XL', 'ARPILLA VERDE', 'GENERICO', '18', 'KG', 0),
(338, NULL, 0, 0, 0, 'CHILE ANAHEIM', '1 RA', 'XL', 'ARPILLA VERDE', 'GENERICO', '22', 'KG', 0),
(339, NULL, 0, 0, 0, 'CHILE MORRON VERDE', '1 RA', 'XL', ' CAJA NAILEA ', 'GENERICO', '12', 'KG', 0),
(340, NULL, 0, 0, 0, 'CHILE JALAPEÃ‘O VERDE', '1 RA', 'XL', ' CAJA NAILEA ', 'GENERICO', '17', 'KG', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programings`
--

CREATE TABLE `programings` (
  `id` int(11) NOT NULL,
  `id_prod` int(11) NOT NULL,
  `id_valvula` int(11) NOT NULL,
  `id_segmento` int(11) NOT NULL,
  `folio` varchar(200) NOT NULL,
  `aplicacion_tot` varchar(200) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `providers`
--

CREATE TABLE `providers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `address` text CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  `fixed_phone` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `mobile_phone` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `name_contact` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `contact_phone` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `comments` text CHARACTER SET utf8 COLLATE utf8_spanish_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `providers`
--

INSERT INTO `providers` (`id`, `name`, `address`, `fixed_phone`, `mobile_phone`, `email`, `name_contact`, `contact_phone`, `comments`) VALUES
(1, 'Agroquimicos 1', 'parris de la fuentis', '84211169980', '842105996', 'agro@mail.com', 'elmo rin', '84210694', 'no hya commments'),
(2, 'Agroquimicos 1', 'parris de la fuentis', '84211169980', '842105996', 'agro@mail.com', 'elmo rin', '84210694', 'no hya commments');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `purchase_orders`
--

CREATE TABLE `purchase_orders` (
  `id` int(11) NOT NULL,
  `id_req_comp` int(11) NOT NULL,
  `folio` varchar(100) NOT NULL,
  `proveedor` varchar(100) NOT NULL,
  `divisa` varchar(100) NOT NULL,
  `concepto` varchar(100) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `purchase_requisitions`
--

CREATE TABLE `purchase_requisitions` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `producto` varchar(100) NOT NULL,
  `marca` varchar(100) NOT NULL,
  `cantidad` varchar(100) NOT NULL,
  `fecha_captura` date NOT NULL,
  `fecha_entrega` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `record_inventory`
--

CREATE TABLE `record_inventory` (
  `id` int(11) NOT NULL,
  `id_inventory` int(11) DEFAULT NULL,
  `id_product` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `concept` varchar(50) DEFAULT NULL,
  `receiver` varchar(100) DEFAULT NULL,
  `comments` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `referrals`
--

CREATE TABLE `referrals` (
  `id` int(11) NOT NULL,
  `date` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `f_flete` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `f_embarque` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `f_carga` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `user` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `name_file` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `id_prod` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `cant` int(20) NOT NULL,
  `moneda` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `id_employe` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `id_costumer` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `file_report` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `referrals`
--

INSERT INTO `referrals` (`id`, `date`, `f_flete`, `f_embarque`, `f_carga`, `user`, `name_file`, `id_prod`, `cant`, `moneda`, `id_employe`, `id_costumer`, `file_report`) VALUES
(171, '2018-07-04', '180001', '180001', '18-PS-0001', 'Jorge ', '18-PS-0001.pdf', '', 0, '', '4', '31', ''),
(172, '2018-07-07', '180002', '180002', '18-SS-0001', 'Jose Carlos', '18-SS-0001.pdf', '', 0, '', '4', '33', ''),
(173, '2018-07-04', '180003', '180003', '18-TH-0001', 'Jose Carlos', '18-TH-0001.pdf', '', 0, '', '4', '35', ''),
(174, '2018-07-05', '180004', '180004', '18-PS-0002', 'Jorge ', '18-PS-0002.pdf', '', 0, '', '4', '31', ''),
(175, '2018-07-05', '180005', '180005', '18-AP-0001', 'Jose Carlos', '18-AP-0001.pdf', '', 0, '', '4', '9', ''),
(176, '2018-07-07', '180006', '180006', '18-SS-0002', 'Jose Carlos', '18-SS-0002.pdf', '', 0, '', '4', '33', ''),
(177, '2018-07-07', '180007', '180007', '18-SS-0003', 'Jose Carlos', '18-SS-0003.pdf', '', 0, '', '4', '33', ''),
(178, '2018-07-07', '180008', '180008', '18-PS-0003', 'Jorge ', '18-PS-0003.pdf', '', 0, '', '4', '31', ''),
(179, '2018-07-09', '180009', '180009', '18-CP-0001', 'Jose Carlos', '18-CP-0001.pdf', '', 0, '', '4', '36', ''),
(180, '2018-07-10', '180010', '180010', '18-PS-0004', 'Jorge ', '18-PS-0004.pdf', '', 0, '', '4', '31', ''),
(181, '2018-07-10', '180011', '180011', '18-TH-0002', 'Jose Carlos', '18-TH-0002.pdf', '', 0, '', '4', '35', ''),
(182, '2018-07-11', '180012', '180012', '18-AP-0002', 'Jose Carlos', '18-AP-0002.pdf', '', 0, '', '4', '9', ''),
(183, '2018-07-12', '180013', '180013', '18-SS-0004', 'Jose Carlos', '18-SS-0004.pdf', '', 0, '', '4', '33', ''),
(184, '2018-07-12', '180014', '180014', '18-PS-0005', 'Jorge ', '18-PS-0005.pdf', '', 0, '', '4', '31', ''),
(185, '2018-07-14', '180015', '180015', '18-AP-0003', 'Jose Carlos', '18-AP-0003.pdf', '', 0, '', '4', '9', ''),
(186, '2018-07-14', '180016', '180016', '18-PS-0006', 'Jorge ', '18-PS-0006.pdf', '', 0, '', '4', '31', ''),
(187, '2018-07-16', '180017', '180017', '18-PS-0007', 'Jose Carlos', '18-PS-0007.pdf', '', 0, '', '4', '31', ''),
(191, '2018-07-18', '180018', '180018', '18-PS-0008', 'Jose Carlos', '18-PS-0008.pdf', '', 0, '', '3', '31', ''),
(194, '2018-07-20', '180019', '180019', '18-CP-0002', 'Jose Carlos', '18-CP-0002.pdf', '', 0, '', '4', '36', ''),
(195, '2018-07-20', '180020', '180020', '18-SS-0005', 'Jose Carlos', '18-SS-0005.pdf', '', 0, '', '4', '33', ''),
(196, '2018-07-21', '180021', '180021', '18-AP-0004', 'Jose Carlos', '18-AP-0004.pdf', '', 0, '', '4', '9', ''),
(197, '2018-07-22', '180022', '180022', '18-TH-0003', 'Jose Carlos', '18-TH-0003.pdf', '', 0, '', '4', '35', ''),
(198, '2018-07-22', '180023', '180023', '18-PS-0009', 'Jose Carlos', '18-PS-0009.pdf', '', 0, '', '4', '31', ''),
(199, '2018-07-23', '180024', '180024', '18-CP-0003', 'Jose Carlos', '18-CP-0003.pdf', '', 0, '', '4', '36', ''),
(201, '2018-07-24', '180025', '180025', '18-CP-0004', 'Jose Carlos', '18-CP-0004.pdf', '', 0, '', '4', '36', ''),
(202, '2018-07-25', '180026', '180026', '18-CP-0005', 'Jose Carlos', '18-CP-0005.pdf', '', 0, '', '4', '36', ''),
(203, '2018-07-26', '180027', '180027', '18-PS-00010', 'Jose Carlos', '18-PS-00010.pdf', '', 0, '', '4', '31', ''),
(204, '2018-07-26', '180028', '180028', '18-CP-0006', 'Jose Carlos', '18-CP-0006.pdf', '', 0, '', '4', '36', ''),
(205, '2018-07-26', '180029', '180029', '18-CP-0007', 'Jose Carlos', '18-CP-0007.pdf', '', 0, '', '4', '36', ''),
(206, '2018-07-27', '180030', '180030', '18-SS-0006', 'Jose Carlos', '18-SS-0006.pdf', '', 0, '', '4', '33', ''),
(207, '2018-07-27', '180031', '180031', '18-PS-00011', 'Jose Carlos', '18-PS-00011.pdf', '', 0, '', '4', '31', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `remisions`
--

CREATE TABLE `remisions` (
  `id` int(11) NOT NULL,
  `date` varchar(80) NOT NULL,
  `time` varchar(20) NOT NULL,
  `f_freight` varchar(20) NOT NULL,
  `f_embark` varchar(20) NOT NULL,
  `f_charge` varchar(20) NOT NULL,
  `id_employe` int(11) NOT NULL,
  `id_costumer` int(11) NOT NULL,
  `id_trasport` int(11) NOT NULL,
  `id_truck` int(11) NOT NULL,
  `id_box` int(11) NOT NULL,
  `id_driver` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `file_remision` varchar(50) NOT NULL,
  `file_report` varchar(50) NOT NULL,
  `file_edited` varchar(50) NOT NULL,
  `file_responsive` varchar(50) NOT NULL,
  `id_add` int(11) NOT NULL,
  `total_unit` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `remisions`
--

INSERT INTO `remisions` (`id`, `date`, `time`, `f_freight`, `f_embark`, `f_charge`, `id_employe`, `id_costumer`, `id_trasport`, `id_truck`, `id_box`, `id_driver`, `id_user`, `file_remision`, `file_report`, `file_edited`, `file_responsive`, `id_add`, `total_unit`) VALUES
(0, '2018-09-03', '11:30', '180099', '180102', '18-TS-0007', 4, 34, 15, 25, 30, 29, 27, 'REM_18-TS-0007.pdf', '', '', 'RES_18-TS-0007.pdf', 32, ''),
(7, '2018-07-04', '16:00', '180001', '180001', '18-PS-0001', 4, 31, 5, 11, 11, 8, 23, 'REM_18-PS-0001.pdf', '', '18-PS-0001', 'RES_18-PS-0001.pdf', 25, ''),
(9, '2018-07-04', '', '180002', '180002', '18-SS-0001', 4, 33, 6, 12, 12, 9, 23, 'REM_18-SS-0001.pdf', '', '', 'RES_18-SS-0001.pdf', 20, ''),
(10, '2018-07-04', '', '180003', '180003', '18-TH-0001', 4, 35, 6, 13, 13, 10, 23, 'REM_18-TH-0001.pdf', '', '', 'RES_18-TH-0001.pdf', 21, ''),
(11, '2018-07-05', '', '180004', '180004', '18-PS-0002', 4, 31, 5, 11, 11, 8, 23, 'REM_18-PS-0002.pdf', '', '', 'RES_18-PS-0002.pdf', 25, ''),
(12, '2018-05-07', '18:02', '180005', '180005', '18-AP-0001', 4, 9, 11, 15, 17, 17, 26, 'REM_18-AP-0001.pdf', '', '18-AP-0001', 'RES_18-AP-0001.pdf', 23, ''),
(13, '2018-07-07', '', '180006', '180006', '18-SS-0002', 4, 33, 6, 16, 15, 18, 26, 'REM_18-SS-0002.pdf', '', '', 'RES_18-SS-0002.pdf', 20, ''),
(14, '2018-07-07', '', '180007', '180007', '18-SS-0003', 4, 33, 6, 13, 13, 13, 26, 'REM_18-SS-0003.pdf', '', '', 'RES_18-SS-0003.pdf', 20, ''),
(15, '2018-07-07', '', '180008', '180008', '18-PS-0003', 4, 31, 5, 11, 11, 8, 26, 'REM_18-PS-0003.pdf', '', '', 'RES_18-PS-0003.pdf', 25, ''),
(16, '2018-07-09', '', '180009', '180009', '18-CP-0001', 4, 36, 6, 12, 13, 9, 26, 'REM_18-CP-0001.pdf', '', '', 'RES_18-CP-0001.pdf', 24, ''),
(17, '2018-09-01', '17:00', '180010', '180010', '18-PS-0004', 4, 34, 15, 25, 30, 29, 32, 'REM_18-PS-0004.pdf', '', '18-PS-0004', 'RES_18-PS-0004.pdf', 25, ''),
(18, '2018-07-10', '17:00', '180011', '180011', '18-TH-0002', 4, 35, 6, 17, 12, 18, 26, 'REM_18-TH-0002.pdf', '', '18-TH-0002', 'RES_18-TH-0002.pdf', 21, ''),
(19, '2018-07-11', '', '180012', '180012', '18-AP-0002', 4, 9, 6, 13, 13, 13, 26, 'REM_18-AP-0002.pdf', '', '', 'RES_18-AP-0002.pdf', 23, ''),
(20, '2018-07-12', '', '180013', '180013', '18-SS-0004', 4, 33, 6, 12, 12, 9, 26, 'REM_18-SS-0004.pdf', '', '', 'RES_18-SS-0004.pdf', 20, ''),
(21, '2018-07-12', '', '180014', '180014', '18-PS-0005', 4, 31, 5, 11, 11, 8, 26, 'REM_18-PS-0005.pdf', '', '', 'RES_18-PS-0005.pdf', 25, ''),
(22, '2018-07-14', '', '180015', '180015', '18-AP-0003', 4, 9, 6, 17, 19, 18, 26, 'REM_18-AP-0003.pdf', '', '', 'RES_18-AP-0003.pdf', 23, ''),
(23, '2018-07-14', '', '180016', '180016', '18-PS-0006', 4, 31, 5, 11, 11, 8, 26, 'REM_18-PS-0006.pdf', '', '', 'RES_18-PS-0006.pdf', 25, ''),
(24, '2018-07-16', '', '180017', '180017', '18-PS-0007', 4, 31, 5, 11, 11, 8, 26, 'REM_18-PS-0007.pdf', '', '', 'RES_18-PS-0007.pdf', 25, ''),
(25, '2018-07-18', '', '180018', '180018', '18-PS-0008', 4, 31, 5, 11, 11, 8, 26, 'REM_18-PS-0008.pdf', '', '', 'RES_18-PS-0008.pdf', 26, ''),
(26, '2018-07-20', '', '180019', '180019', '18-CP-0002', 4, 36, 6, 13, 13, 13, 26, 'REM_18-CP-0002.pdf', '', '', 'RES_18-CP-0002.pdf', 24, ''),
(27, '2018-07-20', '', '180020', '180020', '18-SS-0005', 4, 33, 6, 12, 12, 9, 26, 'REM_18-SS-0005.pdf', '', '', 'RES_18-SS-0005.pdf', 20, ''),
(28, '2018-07-21', '', '180021', '180021', '18-AP-0004', 4, 9, 6, 17, 12, 18, 26, 'REM_18-AP-0004.pdf', '', '', 'RES_18-AP-0004.pdf', 23, ''),
(29, '2018-07-22', '', '180022', '180022', '18-TH-0003', 4, 35, 6, 16, 16, 19, 26, 'REM_18-TH-0003.pdf', '', '', 'RES_18-TH-0003.pdf', 21, ''),
(30, '2018-07-22', '', '180023', '180023', '18-PS-0009', 4, 31, 5, 11, 11, 8, 26, 'REM_18-PS-0009.pdf', '', '', 'RES_18-PS-0009.pdf', 25, ''),
(31, '2018-07-23', '', '180024', '180024', '18-CP-0003', 4, 36, 6, 13, 15, 13, 26, 'REM_18-CP-0003.pdf', '', '', 'RES_18-CP-0003.pdf', 27, ''),
(32, '2018-07-24', '', '180025', '180025', '18-CP-0004', 4, 36, 6, 12, 12, 9, 26, 'REM_18-CP-0004.pdf', '', '', 'RES_18-CP-0004.pdf', 27, ''),
(33, '2018-07-25', '', '180026', '180026', '18-CP-0005', 4, 36, 6, 17, 20, 18, 26, 'REM_18-CP-0005.pdf', '', '', 'RES_18-CP-0005.pdf', 27, ''),
(34, '2018-07-26', '', '180027', '180027', '18-PS-0010', 4, 31, 5, 11, 11, 8, 26, 'REM_18-PS-0010.pdf', '', '', 'RES_18-PS-0010.pdf', 25, ''),
(35, '2018-07-26', '', '180028', '180028', '18-CP-0006', 4, 36, 6, 16, 19, 19, 26, 'REM_18-CP-0006.pdf', '', '', 'RES_18-CP-0006.pdf', 27, ''),
(36, '2018-07-26', '', '180029', '180029', '18-CP-0007', 4, 36, 6, 13, 19, 13, 26, 'REM_18-CP-0007.pdf', '', '', 'RES_18-CP-0007.pdf', 27, ''),
(37, '2018-07-27', '', '180030', '180030', '18-SS-0006', 4, 33, 6, 12, 12, 9, 26, 'REM_18-SS-0006.pdf', '', '', 'RES_18-SS-0006.pdf', 20, ''),
(38, '2018-07-27', '', '180031', '180031', '18-PS-0011', 4, 31, 5, 11, 11, 8, 26, 'REM_18-PS-0011.pdf', '', '', 'RES_18-PS-0011.pdf', 25, ''),
(39, '2018-08-28', '', '180032', '180032', '18-AP-0005', 4, 9, 6, 17, 12, 18, 26, 'REM_18-AP-0005.pdf', '', '', 'RES_18-AP-0005.pdf', 23, ''),
(40, '2018-08-29', '10:00', '180033', '180033', '18-TH-0004', 4, 35, 6, 13, 12, 13, 26, 'REM_18-TH-0004.pdf', '', '18-TH-0004', 'RES_18-TH-0004.pdf', 21, ''),
(41, '2018-08-30', '', '180034', '180034', '18-SS-0007', 4, 33, 10, 18, 21, 20, 26, 'REM_18-SS-0007.pdf', '', '', 'RES_18-SS-0007.pdf', 20, ''),
(42, '2018-07-30', '12:00', '180035', '180035', '18-LM-0001', 4, 27, 5, 11, 11, 8, 26, 'REM_18-LM-0001.pdf', '', '18-LM-0001', 'RES_18-LM-0001.pdf', 28, ''),
(43, '2018-07-31', '', '180036', '180036', '18-CP-0008', 4, 36, 6, 12, 20, 22, 26, 'REM_18-CP-0008.pdf', '', '', 'RES_18-CP-0008.pdf', 27, ''),
(44, '2018-07-31', '', '180037', '180037', '18-AP-0006', 4, 9, 12, 19, 22, 23, 26, 'REM_18-AP-0006.pdf', '', '', 'RES_18-AP-0006.pdf', 23, ''),
(45, '2018-08-01', '', '180038', '180038', '18-CP-0009', 4, 36, 6, 13, 12, 13, 26, 'REM_18-CP-0009.pdf', '', '', 'RES_18-CP-0009.pdf', 24, ''),
(54, '2018-08-01', '', '180039', '180039', '18-PS-0012', 4, 31, 5, 11, 11, 8, 26, 'REM_18-PS-0012.pdf', '', '', 'RES_18-PS-0012.pdf', 25, ''),
(55, '2018-08-02', '', '180040', '180040', '18-SS-0008', 4, 33, 6, 12, 20, 22, 26, 'REM_18-SS-0008.pdf', '', '', 'RES_18-SS-0008.pdf', 20, ''),
(56, '2018-08-03', '', '180041', '180041', '18-TH-0005', 4, 35, 6, 17, 12, 18, 26, 'REM_18-TH-0005.pdf', '', '', 'RES_18-TH-0005.pdf', 21, ''),
(57, '2018-08-03', '', '180042', '180042', '18-PS-0013', 4, 31, 5, 11, 11, 8, 26, 'REM_18-PS-0013.pdf', '', '', 'RES_18-PS-0013.pdf', 25, ''),
(58, '2018-08-04', '', '180043', '180043', '18-CP-0010', 4, 36, 6, 20, 20, 9, 26, 'REM_18-CP-0010.pdf', '', '', 'RES_18-CP-0010.pdf', 27, ''),
(59, '2018-08-05', '', '180044', '180044', '18-SS-0009', 4, 33, 6, 17, 12, 18, 26, 'REM_18-SS-0009.pdf', '', '', 'RES_18-SS-0009.pdf', 20, ''),
(60, '2018-08-06', '', '180045', '180045', '18-AP-0007', 4, 9, 6, 13, 23, 19, 26, 'REM_18-AP-0007.pdf', '', '', 'RES_18-AP-0007.pdf', 23, ''),
(61, '2018-08-06', '', '180046', '180046', '18-CP-0011', 4, 36, 6, 20, 20, 9, 26, 'REM_18-CP-0011.pdf', '', '', 'RES_18-CP-0011.pdf', 27, ''),
(62, '2018-08-06', '', '180047', '180047', '18-PS-0014', 4, 31, 5, 11, 11, 8, 26, 'REM_18-PS-0014.pdf', '', '', 'RES_18-PS-0014.pdf', 25, ''),
(63, '2018-08-07', '', '180048', '180048', '18-SS-0010', 4, 33, 6, 17, 12, 19, 26, 'REM_18-SS-0010.pdf', '', '', 'RES_18-SS-0010.pdf', 20, ''),
(64, '2018-08-08', '', '180049', '180049', '18-CP-0012', 4, 36, 6, 20, 20, 22, 26, 'REM_18-CP-0012.pdf', '', '', 'RES_18-CP-0012.pdf', 27, ''),
(65, '2018-08-08', '', '180050', '180050', '18-AP-0008', 4, 9, 10, 18, 21, 20, 26, 'REM_18-AP-0008.pdf', '', '', 'RES_18-AP-0008.pdf', 23, ''),
(67, '2018-08-08', '', '180051', '180051', '18-PS-0015', 4, 31, 5, 11, 11, 8, 26, 'REM_18-PS-0015.pdf', '', '', 'RES_18-PS-0015.pdf', 25, ''),
(68, '2018-08-08', '', '180051', '180052', '18-CG-0001', 4, 37, 5, 11, 11, 8, 26, 'REM_18-CG-0001.pdf', '', '', 'RES_18-CG-0001.pdf', 25, ''),
(69, '2018-08-08', '', '180052', '180053', '18-TH-0006', 4, 35, 6, 17, 12, 18, 26, 'REM_18-TH-0006.pdf', '', '', 'RES_18-TH-0006.pdf', 21, ''),
(70, '2018-08-09', '', '180053', '180054', '18-CP-0013', 4, 36, 6, 16, 23, 19, 26, 'REM_18-CP-0013.pdf', '', '', 'RES_18-CP-0013.pdf', 24, ''),
(71, '2018-08-10', '', '180054', '180055', '18-AP-0009', 4, 9, 6, 12, 20, 22, 26, 'REM_18-AP-0009.pdf', '', '', 'RES_18-AP-0009.pdf', 23, ''),
(78, '2018-08-11', '', '180055', '180056', '18-TH-0007', 4, 35, 6, 17, 13, 18, 27, 'REM_18-TH-0007.pdf', '', '', 'RES_18-TH-0007.pdf', 21, ''),
(79, '2018-08-10', '', '180056', '180057', '18-PS-0016', 4, 31, 5, 11, 11, 8, 26, 'REM_18-PS-0016.pdf', '', '', 'RES_18-PS-0016.pdf', 25, ''),
(80, '2018-08-11', '', '180057', '180058', '18-CP-0014', 4, 36, 6, 16, 20, 19, 26, 'REM_18-CP-0014.pdf', '', '', 'RES_18-CP-0014.pdf', 27, ''),
(81, '2018-08-12', '', '180058', '180059', '18-AP-0010', 4, 9, 6, 13, 12, 13, 26, 'REM_18-AP-0010.pdf', '', '', 'RES_18-AP-0010.pdf', 23, ''),
(82, '2018-08-13', '', '180059', '180060', '18-TH-0008', 4, 35, 13, 21, 24, 24, 32, 'REM_18-TH-0008.pdf', '', '', 'RES_18-TH-0008.pdf', 21, ''),
(83, '2018-08-14', '', '180060', '180061', '18-AP-0011', 4, 9, 6, 12, 20, 22, 32, 'REM_18-AP-0011.pdf', '', '', 'RES_18-AP-0011.pdf', 23, ''),
(84, '2018-08-15', '', '180061', '180062', '18-TH-0009', 4, 35, 6, 17, 12, 18, 32, 'REM_18-TH-0009.pdf', '', '', 'RES_18-TH-0009.pdf', 21, ''),
(85, '2018-08-16', '', '180062', '180063', '18-AP-0012', 4, 9, 6, 13, 23, 13, 32, 'REM_18-AP-0012.pdf', '', '', 'RES_18-AP-0012.pdf', 23, ''),
(86, '2018-08-16', '', '180063', '180064', '18-PS-0017', 4, 31, 5, 11, 11, 8, 32, 'REM_18-PS-0017.pdf', '', '', 'RES_18-PS-0017.pdf', 25, ''),
(87, '2018-08-17', '', '180064', '180065', '18-SS-0011', 4, 33, 6, 16, 25, 19, 32, 'REM_18-SS-0011.pdf', '', '', 'RES_18-SS-0011.pdf', 20, ''),
(88, '2018-08-18', '', '180065', '180066', '18-TH-0010', 4, 35, 6, 12, 20, 9, 32, 'REM_18-TH-0010.pdf', '', '', 'RES_18-TH-0010.pdf', 21, ''),
(89, '2018-08-18', '', '180066', '180067', '18-PS-0018', 4, 31, 5, 22, 26, 25, 32, 'REM_18-PS-0018.pdf', '', '', 'RES_18-PS-0018.pdf', 25, ''),
(90, '2018-08-18', '', '180067', '180068', '18-AP-0013', 4, 9, 6, 17, 12, 18, 32, 'REM_18-AP-0013.pdf', '', '', 'RES_18-AP-0013.pdf', 23, ''),
(91, '2018-08-19', '', '180068', '180069', '18-AD-0001', 3, 2, 5, 11, 11, 8, 32, 'REM_18-AD-0001.pdf', '', '', 'RES_18-AD-0001.pdf', 30, ''),
(92, '2018-08-19', '14:00', '180069', '180070', '18-SS-0012', 4, 33, 6, 13, 23, 13, 32, 'REM_18-SS-0012.pdf', '', '18-SS-0012', 'RES_18-SS-0012.pdf', 20, ''),
(93, '2018-08-20', '', '180070', '180071', '18-TH-0011', 4, 35, 6, 16, 27, 19, 32, 'REM_18-TH-0011.pdf', '', '', 'RES_18-TH-0011.pdf', 21, ''),
(94, '2018-08-21', '', '180071', '180072', '18-TH-0012', 4, 35, 6, 17, 12, 18, 32, 'REM_18-TH-0012.pdf', '', '', 'RES_18-TH-0012.pdf', 21, ''),
(95, '2018-08-21', '', '180072', '180073', '18-TH-0013', 4, 35, 6, 13, 23, 13, 32, 'REM_18-TH-0013.pdf', '', '', 'RES_18-TH-0013.pdf', 21, ''),
(96, '2018-08-21', '', '180073', '180074', '18-JD-0001', 4, 38, 14, 23, 28, 27, 32, 'REM_18-JD-0001.pdf', '', '', 'RES_18-JD-0001.pdf', 31, ''),
(97, '2018-08-21', '', '180074', '180075', '18-CP-0015', 4, 36, 6, 12, 20, 26, 32, 'REM_18-CP-0015.pdf', '', '', 'RES_18-CP-0015.pdf', 27, ''),
(98, '2018-08-22', '', '180075', '180076', '18-PS-0019', 4, 31, 5, 11, 11, 8, 32, 'REM_18-PS-0019.pdf', '', '', 'RES_18-PS-0019.pdf', 25, ''),
(99, '2018-08-22', '', '180076', '180077', '18-TH-0014', 4, 35, 6, 17, 12, 18, 32, 'REM_18-TH-0014.pdf', '', '', 'RES_18-TH-0014.pdf', 21, ''),
(100, '2018-08-23', '', '180077', '180078', '18-SS-0013', 4, 33, 11, 24, 29, 28, 26, 'REM_18-SS-0013.pdf', '', '', 'RES_18-SS-0013.pdf', 20, ''),
(101, '2018-08-23', '', '180078', '180079', '18-TH-0015', 4, 35, 6, 16, 25, 19, 32, 'REM_18-TH-0015.pdf', '', '', 'RES_18-TH-0015.pdf', 21, ''),
(102, '2018-08-24', '18:30', '180079', '180080', '18-TS-0001', 4, 34, 15, 25, 30, 29, 32, 'REM_18-TS-0001.pdf', '', '18-TS-0001', 'RES_18-TS-0001.pdf', 32, ''),
(103, '2018-08-24', '', '180080', '180081', '18-PS-0020', 4, 31, 5, 11, 11, 8, 32, 'REM_18-PS-0020.pdf', '', '', 'RES_18-PS-0020.pdf', 25, ''),
(104, '2018-08-25', '', '180081', '180082', '18-CP-0016', 4, 36, 6, 13, 23, 13, 32, 'REM_18-CP-0016.pdf', '', '', 'RES_18-CP-0016.pdf', 24, ''),
(105, '2018-08-25', '', '180082', '180083', '18-TH-0016', 4, 35, 6, 12, 20, 26, 32, 'REM_18-TH-0016.pdf', '', '', 'RES_18-TH-0016.pdf', 21, ''),
(106, '2018-08-27', '', '180083', '180084', '18-TS-0002', 4, 34, 15, 25, 30, 29, 32, 'REM_18-TS-0002.pdf', '', '', 'RES_18-TS-0002.pdf', 32, ''),
(107, '2018-08-27', '', '180084', '180085', '18-AP-0014', 4, 9, 12, 19, 22, 23, 32, 'REM_18-AP-0014.pdf', '', '', 'RES_18-AP-0014.pdf', 23, ''),
(108, '2018-08-28', '', '180085', '180086', '18-SS-0014', 4, 33, 6, 17, 12, 18, 32, 'REM_18-SS-0014.pdf', '', '', 'RES_18-SS-0014.pdf', 20, ''),
(109, '2018-08-28', '', '180086', '180087', '18-PS-0021', 4, 31, 5, 11, 11, 8, 27, 'REM_18-PS-0021.pdf', '', '', 'RES_18-PS-0021.pdf', 25, ''),
(110, '2018-08-29', '15:00', '180087', '180088', '18-TS-0003', 4, 34, 15, 25, 30, 30, 32, 'REM_18-TS-0003.pdf', '', '', 'RES_18-TS-0003.pdf', 32, ''),
(111, '2018-08-29', '15:00', '180088', '180089', '18-CP-0017', 4, 36, 6, 16, 25, 19, 32, 'REM_18-CP-0017.pdf', '', '', 'RES_18-CP-0017.pdf', 24, ''),
(112, '2018-08-29', '22:00', '180089', '180090', '18-AP-0015', 4, 9, 16, 26, 31, 31, 32, 'REM_18-AP-0015.pdf', '', '18-AP-0015', 'RES_18-AP-0015.pdf', 23, ''),
(113, '2018-08-29', '22:00', '180090', '180091', '18-AD-0002', 4, 2, 5, 11, 11, 8, 32, 'REM_18-AD-0002.pdf', '', '', 'RES_18-AD-0002.pdf', 30, ''),
(114, '2018-08-30', '18:00', '180091', '180092', '18-TH-0017', 4, 35, 6, 12, 20, 26, 32, 'REM_18-TH-0017.pdf', '', '', 'RES_18-TH-0017.pdf', 21, ''),
(115, '2018-08-30', '23:00', '180092', '180093', '18-PS-0022', 4, 31, 17, 27, 32, 32, 32, 'REM_18-PS-0022.pdf', '', '18-PS-0022', 'RES_18-PS-0022.pdf', 25, ''),
(116, '2018-08-31', '18:30', '180093', '180094', '18-AP-0016', 4, 9, 6, 13, 23, 13, 32, 'REM_18-AP-0016.pdf', '', '', 'RES_18-AP-0016.pdf', 23, ''),
(117, '2018-08-31', '21:00', '180094', '180095', '18-PS-0023', 4, 31, 5, 11, 11, 8, 32, 'REM_18-PS-0023.pdf', '', '', 'RES_18-PS-0023.pdf', 25, ''),
(118, '2018-09-01', '14:00', '180095', '180096', '18-TH-0018', 4, 35, 6, 17, 12, 18, 32, 'REM_18-TH-0018.pdf', '', '', 'RES_18-TH-0018.pdf', 21, ''),
(124, '2018-09-01', '19:30', '180096', '180097', '18-TS-0004', 4, 34, 15, 25, 30, 29, 27, 'REM_18-TS-0004.pdf', '', '', 'RES_18-TS-0004.pdf', 32, ''),
(125, '2018-09-01', '19:30', '180096', '180098', '18-TS-0005', 4, 34, 15, 25, 30, 29, 27, 'REM_18-TS-0005.pdf', '', '', 'RES_18-TS-0005.pdf', 32, ''),
(126, '2018-09-01', '19:30', '180096', '180099', '18-TS-0006', 4, 34, 15, 25, 30, 29, 27, 'REM_18-TS-0006.pdf', '', '', 'RES_18-TS-0006.pdf', 32, ''),
(127, '2018-09-02', '23:00', '180097', '180100', '18-AP-0017', 4, 9, 6, 12, 20, 26, 27, 'REM_18-AP-0017.pdf', '', '', 'RES_18-AP-0017.pdf', 23, ''),
(128, '2018-09-02', '21:00', '180098', '180101', '18-PS-0024', 4, 31, 5, 11, 11, 8, 27, 'REM_18-PS-0024.pdf', '', '', 'RES_18-PS-0024.pdf', 25, ''),
(131, '2018-09-03', '11:30', '180099', '180102', '18-TS-0007', 4, 34, 15, 25, 30, 29, 27, 'REM_18-TS-0007.pdf', '', '', 'RES_18-TS-0007.pdf', 32, ''),
(132, '2018-09-03', '23:30', '180099', '180103', '18-TS-0008', 4, 34, 15, 25, 30, 29, 27, 'REM_18-TS-0008.pdf', '', '', 'RES_18-TS-0008.pdf', 32, ''),
(133, '2018-09-05', '17:00', '180100', '180104', '18-AP-0018', 4, 9, 6, 12, 12, 10, 27, 'REM_18-AP-0018.pdf', '', '', 'RES_18-AP-0018.pdf', 18, ''),
(134, '2018-09-05', '17:00', '180100', '180105', '18-AP-0019', 4, 9, 6, 12, 12, 10, 27, 'REM_18-AP-0019.pdf', '', '', 'RES_18-AP-0019.pdf', 18, ''),
(135, '2018-10-16', '15:55', '180101', '180106', '18-AD-0003', 4, 2, 5, 11, 11, 8, 33, 'REM_18-AD-0003.pdf', '', '', 'RES_18-AD-0003.pdf', 30, '3000'),
(136, '2018-10-16', '12:30', '180102', '180107', '18-AP-0020', 4, 9, 17, 18, 21, 20, 33, 'REM_18-AP-0020.pdf', '', '', 'RES_18-AP-0020.pdf', 18, '1115'),
(137, '2018-10-18', '14:30', '180103', '180108', '18-AP-0021', 3, 9, 5, 11, 11, 8, 33, 'REM_18-AP-0021.pdf', '', '', 'RES_18-AP-0021.pdf', 18, '3500');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `supplies`
--

CREATE TABLE `supplies` (
  `id` int(11) NOT NULL,
  `grupo_id` int(11) NOT NULL COMMENT 'Grupo al que pertenece',
  `unidad_id` int(11) NOT NULL COMMENT 'Unidad de Medida',
  `nombre` varchar(150) NOT NULL,
  `precio` int(11) NOT NULL,
  `divisa` enum('Peso Mexicano','Dolar') NOT NULL DEFAULT 'Peso Mexicano',
  `descripcion` varchar(255) NOT NULL,
  `ingredientes` varchar(220) NOT NULL COMMENT 'json',
  `factor` decimal(11,1) NOT NULL COMMENT 'Factor de Conversion',
  `uso_id` int(11) NOT NULL COMMENT 'Unidad de Uso',
  `marca` varchar(150) NOT NULL,
  `dh` decimal(11,1) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `supplies`
--

INSERT INTO `supplies` (`id`, `grupo_id`, `unidad_id`, `nombre`, `precio`, `divisa`, `descripcion`, `ingredientes`, `factor`, `uso_id`, `marca`, `dh`, `fecha`) VALUES
(3, 4, 3, 'malation', 100, 'Peso Mexicano', 'hgdfj', '[\"AZUFRE 2%\",\"BENOMILO\"]', '1000.0', 1, 'patito', '1.4', '2018-11-18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transporters`
--

CREATE TABLE `transporters` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `rfc` varchar(15) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `caat` varchar(15) DEFAULT NULL,
  `alpha` varchar(15) DEFAULT NULL,
  `iccmx` varchar(15) DEFAULT NULL,
  `us_dot` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `transporters`
--

INSERT INTO `transporters` (`id`, `name`, `rfc`, `address`, `phone`, `caat`, `alpha`, `iccmx`, `us_dot`) VALUES
(5, 'LAS ALBARDAS SPR DE RL DE CV', 'ALB141027VC7', 'CALLE ORILLA DE AGUA # 927 COL, CENTRO', '8424220105', 'NA', 'NA', 'NA', 'NA'),
(6, 'SERVICIOS ADUANALES RM S DE RL DE CV', 'SAR160415LVO', 'AVE. DEL NIÃ‘O #2120 ELECTRICISTAS SUR, HEROICA MATAMOROS 87455, TAMAULIPAS MEXICO.', '018992963737', '32EE', 'SVUR', '55355', '3050679'),
(10, 'JOSE ANGEL RODRIGUEZ ISLAS', 'ROIA610730FM7', 'ESTRELLA DE MAR # 179 ACUARIO 2001', '6660000000', '1563', 'RODJ', '380665', '8657522'),
(11, 'EIMY RODRIGEZ MENDOZA', 'ROME871207UE0', 'AVE. DEL NIÃ‘O #2120 ELECTRICISTAS SUR, HEROICA MATAMOROS 87455, TAMAULIPAS MEXICO.', '01 899 2963737', '1577', 'ASRH', '51744Z', '15547422'),
(12, 'SAN JUANITA RIVAS', '000000', '00000', '8712928682', '165Q', 'RVFS', '894-890', '25-63-4442'),
(13, 'TRASPORTES MONTERREY H', '000', '000', '000', '00', '00', '00', '00'),
(14, 'SERVICIO PARTICULAR C.L.A', 'N/A', 'CHAMAL, CD. VICTORIA, TAMAULIPAS', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A'),
(15, 'VICENTE PEREZ ALEMAN', 'PEAU-830430780', 'SAN PEDRO COAHUILA', '8721177036', 'N/A', 'N/A', 'N/A', 'N/A'),
(16, '3 HERMANOS', 'ROME 871 207VEO', 'NA', '9563092774', '1577', 'ASRH', '577442', '15547422'),
(17, 'TRANSPORTES SANCHEZ', 'N/A', 'TULTITLAN ,EDO DE MEXICO', '5546068856', 'N/A', 'N/A', 'N/A', 'N/A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trucks`
--

CREATE TABLE `trucks` (
  `id` int(11) NOT NULL,
  `id_transporters` int(11) NOT NULL,
  `brand` varchar(50) DEFAULT NULL,
  `model` varchar(10) DEFAULT NULL,
  `color` varchar(30) DEFAULT NULL,
  `num_econ` varchar(15) DEFAULT NULL,
  `placa` varchar(15) DEFAULT NULL,
  `placa_2` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `trucks`
--

INSERT INTO `trucks` (`id`, `id_transporters`, `brand`, `model`, `color`, `num_econ`, `placa`, `placa_2`) VALUES
(11, 5, 'Kenwort', '2003', 'Blanco', 'NA', 'EZ37877', 'EZ37877'),
(12, 6, 'Kenwort', '2007', 'BLANCO CON ROJO', 'S.T01', '70-AG-3L', '70-AG-3L'),
(13, 6, 'Kenwort', '2009', 'Amarillo', '03', '39-AG-7Y', ' '),
(15, 11, 'Frighliter', '2008', 'BLANCO', 'T128', '273DTS', '273DTS'),
(16, 6, 'freightliner', '2008', 'Amarillo', 'NA', '48AB7H', ' '),
(17, 6, 'Kenwort', '2013', 'Blanco', 'na', '08AJ1K', ' '),
(18, 10, 'Kenwort', '2009', 'BLANCO', '00000', '80-06-DT4', ' CASTILLO RDZ'),
(19, 12, 'freightliner', '2009', '--BLANCO', '04', '920-EV-7', 'N/A'),
(20, 6, 'Kenwort', '2004', 'BLANCO', 'NA', '20AG3L - ', ' 20AG3L'),
(21, 13, 'Kenwort', '1997', 'NARANJA', '00', '840DJ9', '840DJ9'),
(22, 5, 'Nissan', '2018', 'BLANCA', '00', 'FA13466', 'FA13466'),
(23, 14, 'Kenwort', '1998', 'BLANCO/VERDE', 'N/A', 'HJ49077', 'HJ49077'),
(24, 11, 'Kenwort', '2014', 'GUINDO', 'N/A', '155-AP-4', '155-AP-4'),
(25, 15, 'Dina', '1984', 'NEGRO', 'S/N', '450-AHM', '-'),
(26, 16, 'Kenwort', '2011', 'GUINDO', 'NA', '584HL1', 'N/A'),
(27, 17, 'International', '2008', 'ROJO', 'NA', '04AJ5C', 'N/A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(25) COLLATE utf8_bin NOT NULL,
  `last_name` varchar(25) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `pass` varchar(100) COLLATE utf8_bin NOT NULL,
  `phone` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `ranch` varchar(50) COLLATE utf8_bin NOT NULL,
  `department` varchar(50) COLLATE utf8_bin NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `last_name`, `email`, `pass`, `phone`, `ranch`, `department`, `status`) VALUES
(27, 'Jose Carlos', 'Morin Riojas', 'carlosmorin78@gmail.com', 'EZYJtpmaYMHs/cciZiIGJg==', '2147483647', '1', 'Administracion', 1),
(30, 'David', 'Gonzalez Morales', 'd.gonzalez@lasalbardas.com', 'nZ45EVLjaVT8PRjMIn4G2MXCWzDvclilVmGR8zpVD8s=', '2147483647', '1', 'Administracion', 1),
(31, 'Carolina', 'Rojas', 'administracion.2@lasalbardas.com', 'EZYJtpmaYMHs/cciZiIGJg==', '2147483647', '1', 'Administracion', 1),
(32, 'Monserat', 'Gonzalez', 'empaque.lasalbardas@gmail.com', 'EZYJtpmaYMHs/cciZiIGJg==', '12345', '1', 'Empaque', 1),
(33, 'YAIR', 'FACIO', 'yair.facio11@gmail.com', 'EZYJtpmaYMHs/cciZiIGJg==', '8421166826', '1', 'Administracion', 1),
(34, 'Valeria', 'Aleman', 'compras@lasalbardas.com', 's0S99XfrZab6btjy3cOfTQ==', '8424235070', '1', 'Administracion', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valves`
--

CREATE TABLE `valves` (
  `id` int(11) NOT NULL,
  `id_programacion` int(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `area` varchar(100) NOT NULL,
  `segmento` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `accountant`
--
ALTER TABLE `accountant`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `assistance`
--
ALTER TABLE `assistance`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_work` (`id_work`),
  ADD KEY `datea` (`datea`);

--
-- Indices de la tabla `boxes`
--
ALTER TABLE `boxes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_transporters` (`id_transporters`);

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

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
-- Indices de la tabla `delivery_addresses`
--
ALTER TABLE `delivery_addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_costumer` (`id_costumer`);

--
-- Indices de la tabla `departures`
--
ALTER TABLE `departures`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_transporters` (`id_transporters`);

--
-- Indices de la tabla `employes`
--
ALTER TABLE `employes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `entrance`
--
ALTER TABLE `entrance`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `freights`
--
ALTER TABLE `freights`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `freight_payment`
--
ALTER TABLE `freight_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ingredients`
--
ALTER TABLE `ingredients`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inventories`
--
ALTER TABLE `inventories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `measurements_system`
--
ALTER TABLE `measurements_system`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `permits`
--
ALTER TABLE `permits`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`cuadrilla`);

--
-- Indices de la tabla `presentations`
--
ALTER TABLE `presentations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `programings`
--
ALTER TABLE `programings`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `providers`
--
ALTER TABLE `providers`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `purchase_orders`
--
ALTER TABLE `purchase_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `purchase_requisitions`
--
ALTER TABLE `purchase_requisitions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `record_inventory`
--
ALTER TABLE `record_inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `referrals`
--
ALTER TABLE `referrals`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `remisions`
--
ALTER TABLE `remisions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `supplies`
--
ALTER TABLE `supplies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `grupo_id` (`grupo_id`),
  ADD KEY `unidad_id` (`unidad_id`),
  ADD KEY `uso_id` (`uso_id`);

--
-- Indices de la tabla `transporters`
--
ALTER TABLE `transporters`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `trucks`
--
ALTER TABLE `trucks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_transporters` (`id_transporters`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `valves`
--
ALTER TABLE `valves`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `accountant`
--
ALTER TABLE `accountant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `assistance`
--
ALTER TABLE `assistance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `boxes`
--
ALTER TABLE `boxes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `costumers`
--
ALTER TABLE `costumers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `cuadrillas`
--
ALTER TABLE `cuadrillas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `delivery_addresses`
--
ALTER TABLE `delivery_addresses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `departures`
--
ALTER TABLE `departures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `employes`
--
ALTER TABLE `employes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `entrance`
--
ALTER TABLE `entrance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `freights`
--
ALTER TABLE `freights`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=375;

--
-- AUTO_INCREMENT de la tabla `freight_payment`
--
ALTER TABLE `freight_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ingredients`
--
ALTER TABLE `ingredients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `inventories`
--
ALTER TABLE `inventories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;

--
-- AUTO_INCREMENT de la tabla `measurements_system`
--
ALTER TABLE `measurements_system`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `permits`
--
ALTER TABLE `permits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=719;

--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT de la tabla `presentations`
--
ALTER TABLE `presentations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=341;

--
-- AUTO_INCREMENT de la tabla `programings`
--
ALTER TABLE `programings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `providers`
--
ALTER TABLE `providers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `purchase_orders`
--
ALTER TABLE `purchase_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `purchase_requisitions`
--
ALTER TABLE `purchase_requisitions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `record_inventory`
--
ALTER TABLE `record_inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `referrals`
--
ALTER TABLE `referrals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=208;

--
-- AUTO_INCREMENT de la tabla `remisions`
--
ALTER TABLE `remisions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT de la tabla `supplies`
--
ALTER TABLE `supplies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `transporters`
--
ALTER TABLE `transporters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `trucks`
--
ALTER TABLE `trucks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `valves`
--
ALTER TABLE `valves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `assistance`
--
ALTER TABLE `assistance`
  ADD CONSTRAINT `assistance_ibfk_1` FOREIGN KEY (`id_work`) REFERENCES `personal` (`id`);

--
-- Filtros para la tabla `boxes`
--
ALTER TABLE `boxes`
  ADD CONSTRAINT `boxes_ibfk_1` FOREIGN KEY (`id_transporters`) REFERENCES `transporters` (`id`);

--
-- Filtros para la tabla `delivery_addresses`
--
ALTER TABLE `delivery_addresses`
  ADD CONSTRAINT `delivery_addresses_ibfk_1` FOREIGN KEY (`id_costumer`) REFERENCES `costumers` (`id`);

--
-- Filtros para la tabla `drivers`
--
ALTER TABLE `drivers`
  ADD CONSTRAINT `drivers_ibfk_1` FOREIGN KEY (`id_transporters`) REFERENCES `transporters` (`id`);

--
-- Filtros para la tabla `personal`
--
ALTER TABLE `personal`
  ADD CONSTRAINT `id` FOREIGN KEY (`cuadrilla`) REFERENCES `cuadrillas` (`id`);

--
-- Filtros para la tabla `supplies`
--
ALTER TABLE `supplies`
  ADD CONSTRAINT `fk_insumo_categoria` FOREIGN KEY (`grupo_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `fk_insumo_system_unidad` FOREIGN KEY (`unidad_id`) REFERENCES `measurements_system` (`id`),
  ADD CONSTRAINT `fk_insumo_system_uso` FOREIGN KEY (`uso_id`) REFERENCES `measurements_system` (`id`);

--
-- Filtros para la tabla `trucks`
--
ALTER TABLE `trucks`
  ADD CONSTRAINT `trucks_ibfk_1` FOREIGN KEY (`id_transporters`) REFERENCES `transporters` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
