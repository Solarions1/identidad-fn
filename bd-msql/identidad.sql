-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-10-2022 a las 22:33:13
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `identidad`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agenciastrans`
--

CREATE TABLE `agenciastrans` (
  `activo` tinyint(1) NOT NULL DEFAULT '1',
  `codtrans` varchar(8) COLLATE utf8_bin NOT NULL,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL,
  `telefono` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `web` varchar(100) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `agenciastrans`
--

INSERT INTO `agenciastrans` (`activo`, `codtrans`, `nombre`, `telefono`, `web`) VALUES
(1, 'ASM', 'ASM', NULL, 'http://es.asmred.com/'),
(1, 'DHL', 'DHL', NULL, 'https://www.logistics.dhl/'),
(1, 'MRW', 'MRW', NULL, 'https://www.mrw.es/'),
(1, 'SEUR', 'SEUR', NULL, 'http://www.seur.com'),
(1, 'TIPSA', 'TIPSA', NULL, 'http://www.tip-sa.com/');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agentes`
--

CREATE TABLE `agentes` (
  `cargo` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `cifnif` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `codagente` varchar(10) COLLATE utf8_bin NOT NULL,
  `debaja` tinyint(1) DEFAULT '0',
  `email` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `fechabaja` date DEFAULT NULL,
  `fechaalta` date DEFAULT NULL,
  `idcontacto` int(11) DEFAULT NULL,
  `idproducto` int(11) DEFAULT NULL,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL,
  `observaciones` text COLLATE utf8_bin,
  `telefono1` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `telefono2` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `tipoidfiscal` varchar(25) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `albaranescli`
--

CREATE TABLE `albaranescli` (
  `apartado` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `cifnif` varchar(30) COLLATE utf8_bin NOT NULL,
  `ciudad` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `codagente` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `codalmacen` varchar(4) COLLATE utf8_bin DEFAULT NULL,
  `codcliente` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `coddivisa` varchar(3) COLLATE utf8_bin NOT NULL,
  `codejercicio` varchar(4) COLLATE utf8_bin NOT NULL,
  `codigo` varchar(20) COLLATE utf8_bin NOT NULL,
  `codigoenv` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `codpago` varchar(10) COLLATE utf8_bin NOT NULL,
  `codpais` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `codpostal` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `codserie` varchar(4) COLLATE utf8_bin NOT NULL,
  `codtrans` varchar(8) COLLATE utf8_bin DEFAULT NULL,
  `direccion` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `dtopor1` double DEFAULT NULL,
  `dtopor2` double DEFAULT NULL,
  `editable` tinyint(1) DEFAULT NULL,
  `fecha` date NOT NULL,
  `femail` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `idalbaran` int(11) NOT NULL,
  `idcontactoenv` int(11) DEFAULT NULL,
  `idcontactofact` int(11) DEFAULT NULL,
  `idempresa` int(11) DEFAULT NULL,
  `idestado` int(11) DEFAULT NULL,
  `irpf` double DEFAULT NULL,
  `neto` double DEFAULT NULL,
  `netosindto` double DEFAULT '0',
  `nick` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `nombrecliente` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `numero` varchar(12) COLLATE utf8_bin NOT NULL,
  `numero2` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `observaciones` text COLLATE utf8_bin,
  `provincia` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `tasaconv` double DEFAULT NULL,
  `total` double DEFAULT NULL,
  `totalcoste` double DEFAULT NULL,
  `totaleuros` double DEFAULT NULL,
  `totalirpf` double DEFAULT NULL,
  `totaliva` double DEFAULT NULL,
  `totalrecargo` double DEFAULT NULL,
  `totalsuplidos` double DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `albaranesprov`
--

CREATE TABLE `albaranesprov` (
  `cifnif` varchar(30) COLLATE utf8_bin NOT NULL,
  `codalmacen` varchar(4) COLLATE utf8_bin DEFAULT NULL,
  `coddivisa` varchar(3) COLLATE utf8_bin NOT NULL,
  `codejercicio` varchar(4) COLLATE utf8_bin NOT NULL,
  `codigo` varchar(20) COLLATE utf8_bin NOT NULL,
  `codpago` varchar(10) COLLATE utf8_bin NOT NULL,
  `codproveedor` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `codserie` varchar(4) COLLATE utf8_bin NOT NULL,
  `editable` tinyint(1) DEFAULT NULL,
  `dtopor1` double DEFAULT NULL,
  `dtopor2` double DEFAULT NULL,
  `fecha` date NOT NULL,
  `femail` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `idalbaran` int(11) NOT NULL,
  `idempresa` int(11) DEFAULT NULL,
  `idestado` int(11) DEFAULT NULL,
  `irpf` double DEFAULT NULL,
  `neto` double DEFAULT NULL,
  `netosindto` double DEFAULT '0',
  `nick` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL,
  `numero` varchar(12) COLLATE utf8_bin NOT NULL,
  `numproveedor` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `observaciones` text COLLATE utf8_bin,
  `tasaconv` double DEFAULT NULL,
  `total` double DEFAULT NULL,
  `totaleuros` double DEFAULT NULL,
  `totalirpf` double DEFAULT NULL,
  `totaliva` double DEFAULT NULL,
  `totalrecargo` double DEFAULT NULL,
  `totalsuplidos` double DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `almacenes`
--

CREATE TABLE `almacenes` (
  `apartado` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `ciudad` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `codpais` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `codalmacen` varchar(4) COLLATE utf8_bin NOT NULL,
  `codpostal` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `direccion` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `idempresa` int(11) DEFAULT NULL,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL,
  `provincia` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `telefono` varchar(30) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `almacenes`
--

INSERT INTO `almacenes` (`apartado`, `ciudad`, `codpais`, `codalmacen`, `codpostal`, `direccion`, `idempresa`, `nombre`, `provincia`, `telefono`) VALUES
(NULL, 'Panamá', 'PAN', 'ALG', 'PE27', 'Villa Cumbrera #2 PE27 #27', 1, 'Identidad', 'Coclé', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `api_access`
--

CREATE TABLE `api_access` (
  `allowdelete` tinyint(1) DEFAULT NULL,
  `allowget` tinyint(1) DEFAULT NULL,
  `allowpost` tinyint(1) DEFAULT NULL,
  `allowput` tinyint(1) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `idapikey` int(11) NOT NULL,
  `resource` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `api_keys`
--

CREATE TABLE `api_keys` (
  `apikey` varchar(99) COLLATE utf8_bin NOT NULL,
  `creationdate` date NOT NULL,
  `description` varchar(150) COLLATE utf8_bin NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `fullaccess` tinyint(1) DEFAULT '0',
  `id` int(11) NOT NULL,
  `nick` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `api_keys`
--

INSERT INTO `api_keys` (`apikey`, `creationdate`, `description`, `enabled`, `fullaccess`, `id`, `nick`) VALUES
('aDrXSoR8yfAsNwYLqvdF', '2022-10-05', 'GET', 1, 1, 1, 'admin'),
('CtZ8hFBr7fiR9TYS5yg6', '2022-10-08', 'apiget', 1, 1, 2, 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asientos`
--

CREATE TABLE `asientos` (
  `canal` int(11) DEFAULT NULL,
  `codejercicio` varchar(4) COLLATE utf8_bin NOT NULL,
  `concepto` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `documento` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `editable` tinyint(1) NOT NULL,
  `fecha` date NOT NULL,
  `idasiento` int(11) NOT NULL,
  `iddiario` int(11) DEFAULT NULL,
  `idempresa` int(11) DEFAULT NULL,
  `importe` double NOT NULL DEFAULT '0',
  `numero` int(11) NOT NULL,
  `operacion` varchar(1) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `atributos`
--

CREATE TABLE `atributos` (
  `codatributo` varchar(20) COLLATE utf8_bin NOT NULL,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `atributos_valores`
--

CREATE TABLE `atributos_valores` (
  `codatributo` varchar(20) COLLATE utf8_bin NOT NULL,
  `descripcion` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `id` int(11) NOT NULL,
  `valor` varchar(100) COLLATE utf8_bin NOT NULL,
  `orden` int(11) DEFAULT '100'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `attached_files`
--

CREATE TABLE `attached_files` (
  `date` date NOT NULL,
  `filename` varchar(100) COLLATE utf8_bin NOT NULL,
  `hour` time DEFAULT NULL,
  `idfile` int(11) NOT NULL,
  `mimetype` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `path` varchar(200) COLLATE utf8_bin NOT NULL,
  `size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `attached_files_rel`
--

CREATE TABLE `attached_files_rel` (
  `creationdate` timestamp NULL DEFAULT NULL,
  `id` int(11) NOT NULL,
  `idfile` int(11) NOT NULL,
  `model` varchar(30) COLLATE utf8_bin NOT NULL,
  `modelid` int(11) NOT NULL,
  `modelcode` varchar(40) COLLATE utf8_bin DEFAULT NULL,
  `nick` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `observations` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `balances`
--

CREATE TABLE `balances` (
  `codbalance` varchar(15) COLLATE utf8_bin NOT NULL,
  `descripcion1` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `descripcion2` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `descripcion3` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `descripcion4` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `descripcion4ba` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `naturaleza` varchar(15) COLLATE utf8_bin NOT NULL,
  `nivel1` varchar(5) COLLATE utf8_bin DEFAULT NULL,
  `nivel2` int(11) DEFAULT NULL,
  `nivel3` varchar(5) COLLATE utf8_bin DEFAULT NULL,
  `nivel4` varchar(5) COLLATE utf8_bin DEFAULT NULL,
  `orden3` varchar(5) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `balancescuentas`
--

CREATE TABLE `balancescuentas` (
  `codbalance` varchar(15) COLLATE utf8_bin NOT NULL,
  `codcuenta` varchar(10) COLLATE utf8_bin NOT NULL,
  `desccuenta` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `balancescuentasabreviadas`
--

CREATE TABLE `balancescuentasabreviadas` (
  `codbalance` varchar(15) COLLATE utf8_bin NOT NULL,
  `codcuenta` varchar(10) COLLATE utf8_bin NOT NULL,
  `desccuenta` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudades`
--

CREATE TABLE `ciudades` (
  `ciudad` varchar(100) COLLATE utf8_bin NOT NULL,
  `codeid` varchar(5) COLLATE utf8_bin DEFAULT NULL,
  `idciudad` int(11) NOT NULL,
  `idprovincia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `cifnif` varchar(30) COLLATE utf8_bin NOT NULL,
  `codagente` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `codcliente` varchar(10) COLLATE utf8_bin NOT NULL,
  `codgrupo` varchar(6) COLLATE utf8_bin DEFAULT NULL,
  `codpago` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `codproveedor` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `codretencion` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `codserie` varchar(4) COLLATE utf8_bin DEFAULT NULL,
  `codsubcuenta` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `codtarifa` varchar(6) COLLATE utf8_bin DEFAULT NULL,
  `debaja` tinyint(1) DEFAULT '0',
  `diaspago` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `fax` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `fechabaja` date DEFAULT NULL,
  `fechaalta` date DEFAULT NULL,
  `idcontactofact` int(11) DEFAULT NULL,
  `idcontactoenv` int(11) DEFAULT NULL,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL,
  `observaciones` text COLLATE utf8_bin,
  `personafisica` tinyint(1) DEFAULT '1',
  `razonsocial` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `regimeniva` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `riesgoalcanzado` double DEFAULT NULL,
  `riesgomax` double DEFAULT NULL,
  `telefono1` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `telefono2` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `tipoidfiscal` varchar(25) COLLATE utf8_bin DEFAULT NULL,
  `web` varchar(100) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`cifnif`, `codagente`, `codcliente`, `codgrupo`, `codpago`, `codproveedor`, `codretencion`, `codserie`, `codsubcuenta`, `codtarifa`, `debaja`, `diaspago`, `email`, `fax`, `fechabaja`, `fechaalta`, `idcontactofact`, `idcontactoenv`, `nombre`, `observaciones`, `personafisica`, `razonsocial`, `regimeniva`, `riesgoalcanzado`, `riesgomax`, `telefono1`, `telefono2`, `tipoidfiscal`, `web`) VALUES
('', NULL, '1', NULL, NULL, NULL, NULL, NULL, '', NULL, 0, NULL, '', '', NULL, '2022-10-03', 1, NULL, 'Mayra Peñaloza', '', 1, 'Mayra Peñaloza', 'General', 0, 0, '', '', 'RUC', ''),
('0000000000000000', NULL, '2', NULL, NULL, NULL, NULL, NULL, '', NULL, 0, NULL, 'manu.herrerap01@gmail.com', '', NULL, '2022-10-04', 2, NULL, 'Gloria Camargo', '', 1, 'Gloria Camargo', 'General', 0, 0, '', '', 'RUC', ''),
('00000-xxxx', NULL, '3', NULL, NULL, NULL, NULL, NULL, '', NULL, 0, NULL, 'manu.herrerap01@gmail.com', '', NULL, '2022-10-10', 3, NULL, 'Militza Moran', 'Cliente frecuente', 1, '000000-xxxx', 'General', 280, 0, '', '', 'RUC', ''),
('xxxx-0000', NULL, '4', NULL, NULL, NULL, NULL, NULL, '', NULL, 0, NULL, 'mayrapenaloza26@gmail.com', '', NULL, '2022-10-10', 4, NULL, 'Yuri Núñez', '', 1, '0000-xxxx', 'General', 42.8, 0, '', '', 'RUC', ''),
('0000-xxxx', NULL, '5', NULL, NULL, NULL, NULL, NULL, '', NULL, 0, NULL, 'mayrapenaloza26@gmail.com', '', NULL, '2022-10-10', 5, NULL, 'Doris Martinez', '', 1, '0000-xxxx', 'General', 0, 0, '', '', 'RUC', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conceptos_partidas`
--

CREATE TABLE `conceptos_partidas` (
  `codconcepto` varchar(6) COLLATE utf8_bin NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE `contactos` (
  `aceptaprivacidad` tinyint(1) DEFAULT '0',
  `admitemarketing` tinyint(1) DEFAULT '0',
  `apellidos` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `apartado` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `cargo` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `cifnif` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `ciudad` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `codagente` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `codcliente` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `codpais` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `codpostal` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `codproveedor` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `descripcion` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `direccion` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `empresa` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `fechaalta` date DEFAULT NULL,
  `habilitado` tinyint(1) DEFAULT '1',
  `idcontacto` int(11) NOT NULL,
  `lastactivity` timestamp NULL DEFAULT NULL,
  `lastip` varchar(40) COLLATE utf8_bin DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `logkey` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `nombre` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `observaciones` text COLLATE utf8_bin,
  `password` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `personafisica` tinyint(1) DEFAULT '1',
  `provincia` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `puntos` int(11) DEFAULT NULL,
  `telefono1` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `telefono2` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `tipoidfiscal` varchar(25) COLLATE utf8_bin DEFAULT NULL,
  `verificado` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`aceptaprivacidad`, `admitemarketing`, `apellidos`, `apartado`, `cargo`, `cifnif`, `ciudad`, `codagente`, `codcliente`, `codpais`, `codpostal`, `codproveedor`, `descripcion`, `direccion`, `email`, `empresa`, `fechaalta`, `habilitado`, `idcontacto`, `lastactivity`, `lastip`, `level`, `logkey`, `nombre`, `observaciones`, `password`, `personafisica`, `provincia`, `puntos`, `telefono1`, `telefono2`, `tipoidfiscal`, `verificado`) VALUES
(0, 0, 'Peñaloza', NULL, '', '', '', NULL, '1', 'PAN', NULL, NULL, 'Mayra Peñaloza', '', '', 'Mayra Peñaloza', '2022-10-03', 1, 1, NULL, NULL, 1, NULL, 'Mayra', '', NULL, 1, '', 0, '', '', 'RUC', 0),
(0, 0, 'Camargo', NULL, '', '0000000000000000', '', NULL, '2', 'PAN', NULL, NULL, 'Gloria Camargo', '', '', 'Gloria Camargo', '2022-10-04', 1, 2, NULL, NULL, 1, NULL, 'Gloria', '', NULL, 1, '', 0, '', '', 'RUC', 0),
(0, 0, 'Moran', NULL, '', '00000-xxxx', '', NULL, '3', 'PAN', NULL, NULL, 'Militza Moran', '', '', '000000-xxxx', '2022-10-10', 1, 3, NULL, NULL, 1, NULL, 'Militza', '', NULL, 1, '', 0, '', '', 'RUC', 0),
(0, 0, 'Núñez', NULL, '', 'xxxx-0000', '', NULL, '4', 'PAN', NULL, NULL, 'Yuri Núñez', '', '', '0000-xxxx', '2022-10-10', 1, 4, NULL, NULL, 1, NULL, 'Yuri', '', NULL, 1, '', 0, '', '', 'RUC', 0),
(0, 0, 'Martinez', NULL, '', '0000-xxxx', '', NULL, '5', 'PAN', NULL, NULL, 'Doris Martinez', '', '', '0000-xxxx', '2022-10-10', 1, 5, NULL, NULL, 1, NULL, 'Doris', '', NULL, 1, '', 0, '', '', 'RUC', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cronjobs`
--

CREATE TABLE `cronjobs` (
  `date` timestamp NULL DEFAULT NULL,
  `done` tinyint(1) DEFAULT '0',
  `duration` double DEFAULT NULL,
  `enabled` tinyint(1) DEFAULT '1',
  `id` int(11) NOT NULL,
  `jobname` varchar(50) COLLATE utf8_bin NOT NULL,
  `pluginname` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuentas`
--

CREATE TABLE `cuentas` (
  `codcuenta` varchar(10) COLLATE utf8_bin NOT NULL,
  `codcuentaesp` varchar(6) COLLATE utf8_bin DEFAULT NULL,
  `codejercicio` varchar(4) COLLATE utf8_bin NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `idcuenta` int(11) NOT NULL,
  `parent_codcuenta` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `parent_idcuenta` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuentasbanco`
--

CREATE TABLE `cuentasbanco` (
  `codcuenta` varchar(10) COLLATE utf8_bin NOT NULL,
  `codsubcuenta` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `codsubcuentagasto` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `descripcion` varchar(100) COLLATE utf8_bin NOT NULL,
  `iban` varchar(34) COLLATE utf8_bin DEFAULT NULL,
  `idempresa` int(11) DEFAULT NULL,
  `sufijosepa` varchar(3) COLLATE utf8_bin DEFAULT NULL,
  `swift` varchar(11) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuentasbcocli`
--

CREATE TABLE `cuentasbcocli` (
  `codcliente` varchar(10) COLLATE utf8_bin NOT NULL,
  `codcuenta` varchar(10) COLLATE utf8_bin NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `fmandato` date DEFAULT NULL,
  `iban` varchar(34) COLLATE utf8_bin DEFAULT NULL,
  `principal` tinyint(1) DEFAULT NULL,
  `swift` varchar(11) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuentasbcopro`
--

CREATE TABLE `cuentasbcopro` (
  `codcuenta` varchar(10) COLLATE utf8_bin NOT NULL,
  `codproveedor` varchar(10) COLLATE utf8_bin NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `iban` varchar(34) COLLATE utf8_bin DEFAULT NULL,
  `swift` varchar(11) COLLATE utf8_bin DEFAULT NULL,
  `principal` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuentasesp`
--

CREATE TABLE `cuentasesp` (
  `codcuentaesp` varchar(6) COLLATE utf8_bin NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `cuentasesp`
--

INSERT INTO `cuentasesp` (`codcuentaesp`, `descripcion`) VALUES
('ACREED', 'Cuentas de acreedores'),
('CAJA', 'Cuentas de caja'),
('CAMNEG', 'Cuentas de diferencias negativas de cambio'),
('CAMPOS', 'Cuentas de diferencias positivas de cambio'),
('CLIENT', 'Cuentas de clientes'),
('COMPRA', 'Cuentas de compras'),
('DEVCOM', 'Devoluciones de compras'),
('DEVVEN', 'Devoluciones de ventas'),
('DIVPOS', 'Cuentas por diferencias positivas en divisa extranjera'),
('EURNEG', 'Cuentas por diferencias negativas de conversión a la moneda local'),
('EURPOS', 'Cuentas por diferencias positivas de conversión a la moneda local'),
('GTOBAN', 'Gastos bancarios'),
('GTORF', 'Gastos por recargo financiero'),
('INGRF', 'Ingresos por recargo financiero'),
('IRPF', 'Cuentas de retenciones IRPF'),
('IRPFA', 'IRPF para alquileres'),
('IRPFPR', 'Cuentas de retenciones para proveedores IRPF'),
('IVAACR', 'Cuentas acreedoras de IVA en la regularización'),
('IVADEU', 'Cuentas deudoras de IVA en la regularización'),
('IVAEUE', 'IVA en entregas intracomunitarias U.E.'),
('IVAREP', 'Cuentas de IVA repercutido'),
('IVAREX', 'Cuentas de IVA repercutido para clientes exentos de IVA'),
('IVARUE', 'Cuentas de IVA repercutido UE'),
('IVARXP', 'Cuentas de IVA repercutido en exportaciones'),
('IVASIM', 'Cuentas de IVA soportado en importaciones'),
('IVASOP', 'Cuentas de IVA soportado'),
('IVASUE', 'Cuentas de IVA soportado UE'),
('PRENEG', 'Cuentas por diferencias negativas en ejercicio previo'),
('PREVIO', 'Cuentas por diferencias positivas en ejercicio previo'),
('PROVEE', 'Cuentas de proveedores'),
('PYG', 'Pérdidas y ganancias'),
('SUPLI', 'Suplidos'),
('VENTAS', 'Cuentas de ventas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diarios`
--

CREATE TABLE `diarios` (
  `descripcion` varchar(100) COLLATE utf8_bin NOT NULL,
  `iddiario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `diarios`
--

INSERT INTO `diarios` (`descripcion`, `iddiario`) VALUES
('Principal', 1),
('Diario de Facturas', 2),
('Cartera de pagos', 3),
('Cartera de cobros', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `divisas`
--

CREATE TABLE `divisas` (
  `coddivisa` varchar(3) COLLATE utf8_bin NOT NULL,
  `codiso` varchar(5) COLLATE utf8_bin DEFAULT NULL,
  `descripcion` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `simbolo` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `tasaconv` double NOT NULL,
  `tasaconvcompra` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `divisas`
--

INSERT INTO `divisas` (`coddivisa`, `codiso`, `descripcion`, `simbolo`, `tasaconv`, `tasaconvcompra`) VALUES
('ARS', '32', 'PESO ARGENTINO', 'AR$', 16.684, 16.684),
('BOB', '068', 'BOLIVIANO', 'Bs', 8.0465, 8.0465),
('BRL', '986', 'REAL BRASILEÑO', 'R$', 4.50553, 4.50553),
('CAD', '124', 'DÓLAR CANADIENSE', 'C$', 1.5385, 1.5385),
('CLP', '152', 'PESO CHILENO', 'CLP$', 704.0227, 704.0227),
('COP', '170', 'PESO COLOMBIANO', 'CO$', 3140.6803, 3140.6803),
('CRC', '188', 'COLÓN COSTARRICENSE', '₡', 659.39, 659.39),
('CUP', '192', 'PESO CUBANO', 'CU$', 1.16, 1.16),
('DOP', '214', 'PESO DOMINICANO', 'RD$', 49.7618, 49.7618),
('EUR', '978', 'EURO', '€', 1, 1),
('FKP', '238', 'LIBRA MALVINENSE', 'FK£', 1.13304, 1.13304),
('GBP', '826', 'LIBRA ESTERLINA', '£', 0.865, 0.865),
('GTQ', '320', 'QUETZAL GUATEMALTECO', 'Q', 8.774, 8.774),
('HNL', '340', 'LEMPIRA HONDUREÑO', 'L', 27.909, 27.909),
('HTG', '332', 'GOURDE HAITIANO', 'G', 72.0869, 72.0869),
('MXN', '484', 'PESO MEXICANO', 'MX$', 23.3678, 23.3678),
('PAB', '590', 'BALBOA PANAMEÑO', 'B', 1.128, 1.128),
('PEN', '604', 'SOL PERUANO', 'S/', 3.736, 3.736),
('PYG', '600', 'GUARANÍ PARAGUAYO', '₲', 6647.44318, 6647.44318),
('SVC', '222', 'COLON SALVADOREÑO', '₡', 10.17, 10.17),
('USD', '840', 'DÓLAR AMERICANO', '$', 1.129, 1.129),
('UYU', '858', 'PESO URUGUAYO', '$U', 30.7, 30.7),
('VEF', '937', 'BOLIVAR VENEZOLANO', 'Bs', 10.6492, 10.6492);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doctransformations`
--

CREATE TABLE `doctransformations` (
  `cantidad` double DEFAULT NULL,
  `id` int(11) NOT NULL,
  `iddoc1` int(11) NOT NULL,
  `iddoc2` int(11) NOT NULL,
  `idlinea1` int(11) NOT NULL,
  `idlinea2` int(11) NOT NULL,
  `model1` varchar(30) COLLATE utf8_bin NOT NULL,
  `model2` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ejercicios`
--

CREATE TABLE `ejercicios` (
  `codejercicio` varchar(4) COLLATE utf8_bin NOT NULL,
  `estado` varchar(15) COLLATE utf8_bin NOT NULL,
  `fechafin` date NOT NULL,
  `fechainicio` date NOT NULL,
  `idempresa` int(11) DEFAULT NULL,
  `longsubcuenta` int(11) DEFAULT NULL,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `ejercicios`
--

INSERT INTO `ejercicios` (`codejercicio`, `estado`, `fechafin`, `fechainicio`, `idempresa`, `longsubcuenta`, `nombre`) VALUES
('2022', 'ABIERTO', '2022-12-31', '2022-01-01', 1, 10, '2022');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `emails_notifications`
--

CREATE TABLE `emails_notifications` (
  `body` text COLLATE utf8_bin,
  `creationdate` date DEFAULT NULL,
  `enabled` tinyint(1) DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_bin NOT NULL,
  `subject` varchar(150) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `emails_sent`
--

CREATE TABLE `emails_sent` (
  `addressee` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `body` text COLLATE utf8_bin,
  `date` timestamp NULL DEFAULT NULL,
  `id` int(11) NOT NULL,
  `nick` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `opened` tinyint(1) DEFAULT '0',
  `subject` varchar(300) COLLATE utf8_bin DEFAULT NULL,
  `verificode` varchar(20) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `emails_sent`
--

INSERT INTO `emails_sent` (`addressee`, `body`, `date`, `id`, `nick`, `opened`, `subject`, `verificode`) VALUES
('manu.herrerap01@gmail.com', 'Buenos días, le adjunto su presupuesto PRE2022A2', '2022-10-09 20:35:15', 1, 'admin', 0, 'Su presupuesto PRE2022A2', 'trqgWmZ0v2bL7OyjSQVd'),
('manuh.apple.dev@gmail.com', 'Buenos días, le adjunto su presupuesto PRE2022A2', '2022-10-09 20:35:15', 2, 'admin', 0, 'Su presupuesto PRE2022A2', 'trqgWmZ0v2bL7OyjSQVd'),
('herrerapaola0514@gmail.com', 'Buenos días, le adjunto su presupuesto PRE2022A2', '2022-10-09 23:58:48', 3, 'admin', 0, 'Su presupuesto PRE2022A2', 'QoyMCc0m5FUtqrAeOlG8'),
('manuh.apple.dev@gmail.com', 'Buenos días, le adjunto su presupuesto PRE2022A2', '2022-10-09 23:58:48', 4, 'admin', 0, 'Su presupuesto PRE2022A2', 'QoyMCc0m5FUtqrAeOlG8'),
('manu.herrerap01@gmail.com', 'Hola, le adjunto su factura FAC2022A2', '2022-10-10 16:10:36', 5, 'admin', 0, 'Su factura FAC2022A2', 'Uj8teAETgLMX2HqvB0Cb'),
('manuh.apple.dev@gmail.com', 'Hola, le adjunto su factura FAC2022A2', '2022-10-10 16:10:36', 6, 'admin', 0, 'Su factura FAC2022A2', 'Uj8teAETgLMX2HqvB0Cb'),
('mayrapenaloza26@gmail.com', 'Factura de Yuri Núñez', '2022-10-10 19:16:52', 7, 'admin', 0, 'Su factura FAC2022A3', 'ACs5dh8aZq9JVMyoxTmw'),
('manuh.apple.dev@gmail.com', 'Factura de Yuri Núñez', '2022-10-10 19:16:52', 8, 'admin', 0, 'Su factura FAC2022A3', 'ACs5dh8aZq9JVMyoxTmw'),
('mayrapenaloza26@gmail.com', 'Factura de Doris Martinez', '2022-10-10 19:42:01', 9, 'admin', 0, 'Su factura FAC2022A4', 'nc2o8dJ1VBIv7bxYTAk3'),
('manuh.apple.dev@gmail.com', 'Factura de Doris Martinez', '2022-10-10 19:42:01', 10, 'admin', 0, 'Su factura FAC2022A4', 'nc2o8dJ1VBIv7bxYTAk3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `administrador` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `apartado` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `cifnif` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `ciudad` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `codpais` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `codpostal` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `direccion` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `exceptioniva` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `fax` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `fechaalta` date DEFAULT NULL,
  `idempresa` int(11) NOT NULL,
  `idlogo` int(11) DEFAULT NULL,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL,
  `nombrecorto` varchar(32) COLLATE utf8_bin DEFAULT NULL,
  `observaciones` text COLLATE utf8_bin,
  `personafisica` tinyint(1) DEFAULT '1',
  `provincia` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `regimeniva` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `telefono1` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `telefono2` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `tipoidfiscal` varchar(25) COLLATE utf8_bin DEFAULT NULL,
  `web` varchar(100) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`administrador`, `apartado`, `cifnif`, `ciudad`, `codpais`, `codpostal`, `direccion`, `exceptioniva`, `email`, `fax`, `fechaalta`, `idempresa`, `idlogo`, `nombre`, `nombrecorto`, `observaciones`, `personafisica`, `provincia`, `regimeniva`, `telefono1`, `telefono2`, `tipoidfiscal`, `web`) VALUES
('', '', '00000014Z', 'Panamá', 'PAN', 'PE27', 'Villa Cumbrera #2 PE27 #27', NULL, 'manuh0170g@icloud.com', '', NULL, 1, NULL, 'Identidad', 'Identidad', '', 1, 'Coclé', 'General', '62501017', '', 'RUC', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados_documentos`
--

CREATE TABLE `estados_documentos` (
  `actualizastock` int(11) DEFAULT NULL,
  `bloquear` tinyint(1) DEFAULT NULL,
  `editable` tinyint(1) DEFAULT NULL,
  `generadoc` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `icon` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `idestado` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_bin NOT NULL,
  `predeterminado` tinyint(1) DEFAULT NULL,
  `tipodoc` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `estados_documentos`
--

INSERT INTO `estados_documentos` (`actualizastock`, `bloquear`, `editable`, `generadoc`, `icon`, `idestado`, `nombre`, `predeterminado`, `tipodoc`) VALUES
(0, 1, 1, '', '', 1, 'Abierto', 1, 'PresupuestoCliente'),
(0, 1, 0, 'PedidoCliente', '', 2, 'Pedido', 0, 'PresupuestoCliente'),
(0, 1, 0, '', '', 3, 'Rechazado', 0, 'PresupuestoCliente'),
(-2, 1, 1, '', '', 4, 'Abierto', 1, 'PedidoCliente'),
(0, 1, 0, 'AlbaranCliente', '', 5, 'Albarán', 0, 'PedidoCliente'),
(0, 1, 0, '', '', 6, 'Cancelado', 0, 'PedidoCliente'),
(-1, 1, 1, '', '', 7, 'Abierto', 1, 'AlbaranCliente'),
(0, 1, 0, 'FacturaCliente', '', 8, 'Facturar', 0, 'AlbaranCliente'),
(0, 1, 0, '', '', 9, 'Devuelto', 0, 'AlbaranCliente'),
(-1, 1, 1, '', '', 10, 'Boceto', 1, 'FacturaCliente'),
(-1, 1, 0, '', '', 11, 'Emitida', 0, 'FacturaCliente'),
(0, 1, 1, '', '', 12, 'Abierto', 1, 'PresupuestoProveedor'),
(0, 1, 0, 'PedidoProveedor', '', 13, 'Pedido', 0, 'PresupuestoProveedor'),
(0, 1, 0, '', '', 14, 'Cancelado', 0, 'PresupuestoProveedor'),
(2, 1, 1, '', '', 15, 'Abierto', 1, 'PedidoProveedor'),
(0, 1, 0, 'AlbaranProveedor', '', 16, 'Albarán', 0, 'PedidoProveedor'),
(0, 1, 0, '', '', 17, 'Cancelado', 0, 'PedidoProveedor'),
(1, 1, 1, '', '', 18, 'Abierto', 1, 'AlbaranProveedor'),
(0, 1, 0, 'FacturaProveedor', '', 19, 'Facturar', 0, 'AlbaranProveedor'),
(0, 1, 0, '', '', 20, 'Devuelto', 0, 'AlbaranProveedor'),
(1, 1, 1, '', '', 21, 'Boceto', 1, 'FacturaProveedor'),
(1, 1, 0, '', '', 22, 'Recibida', 0, 'FacturaProveedor'),
(0, 1, 0, '', 'fas fa-hourglass-end', 23, 'Caducado', 0, 'PresupuestoCliente'),
(0, 1, 0, 'FacturaCliente', '', 24, 'Facturar', 0, 'PresupuestoCliente'),
(0, 1, 0, 'FacturaCliente', '', 25, 'Facturar', 0, 'PedidoCliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fabricantes`
--

CREATE TABLE `fabricantes` (
  `codfabricante` varchar(8) COLLATE utf8_bin NOT NULL,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL,
  `numproductos` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturascli`
--

CREATE TABLE `facturascli` (
  `apartado` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `cifnif` varchar(30) COLLATE utf8_bin NOT NULL,
  `ciudad` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `codagente` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `codalmacen` varchar(4) COLLATE utf8_bin DEFAULT NULL,
  `codcliente` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `coddivisa` varchar(3) COLLATE utf8_bin NOT NULL,
  `codejercicio` varchar(4) COLLATE utf8_bin NOT NULL,
  `codigo` varchar(20) COLLATE utf8_bin NOT NULL,
  `codigoenv` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `codigorect` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `codpago` varchar(10) COLLATE utf8_bin NOT NULL,
  `codpais` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `codpostal` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `codserie` varchar(4) COLLATE utf8_bin NOT NULL,
  `codtrans` varchar(8) COLLATE utf8_bin DEFAULT NULL,
  `direccion` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `dtopor1` double DEFAULT NULL,
  `dtopor2` double DEFAULT NULL,
  `editable` tinyint(1) DEFAULT NULL,
  `fecha` date NOT NULL,
  `femail` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `idasiento` int(11) DEFAULT NULL,
  `idcontactoenv` int(11) DEFAULT NULL,
  `idcontactofact` int(11) DEFAULT NULL,
  `idempresa` int(11) DEFAULT NULL,
  `idestado` int(11) DEFAULT NULL,
  `idfactura` int(11) NOT NULL,
  `idfacturarect` int(11) DEFAULT NULL,
  `irpf` double DEFAULT NULL,
  `neto` double DEFAULT NULL,
  `netosindto` double DEFAULT '0',
  `nick` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `nombrecliente` varchar(100) COLLATE utf8_bin NOT NULL,
  `numero` varchar(12) COLLATE utf8_bin NOT NULL,
  `numero2` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `observaciones` text COLLATE utf8_bin,
  `pagada` tinyint(1) DEFAULT '0',
  `provincia` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `tasaconv` double DEFAULT NULL,
  `total` double DEFAULT NULL,
  `totalcoste` double DEFAULT NULL,
  `totaleuros` double DEFAULT NULL,
  `totalirpf` double DEFAULT NULL,
  `totaliva` double DEFAULT NULL,
  `totalrecargo` double DEFAULT NULL,
  `totalsuplidos` double DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `facturascli`
--

INSERT INTO `facturascli` (`apartado`, `cifnif`, `ciudad`, `codagente`, `codalmacen`, `codcliente`, `coddivisa`, `codejercicio`, `codigo`, `codigoenv`, `codigorect`, `codpago`, `codpais`, `codpostal`, `codserie`, `codtrans`, `direccion`, `dtopor1`, `dtopor2`, `editable`, `fecha`, `femail`, `hora`, `idasiento`, `idcontactoenv`, `idcontactofact`, `idempresa`, `idestado`, `idfactura`, `idfacturarect`, `irpf`, `neto`, `netosindto`, `nick`, `nombrecliente`, `numero`, `numero2`, `observaciones`, `pagada`, `provincia`, `tasaconv`, `total`, `totalcoste`, `totaleuros`, `totalirpf`, `totaliva`, `totalrecargo`, `totalsuplidos`) VALUES
('', '', '', NULL, 'ALG', '1', 'PAB', '2022', 'FAC2022A1', '', NULL, 'CONT', 'PAN', '', 'A', NULL, '', 0, 0, 0, '2022-10-03', NULL, '18:33:29', NULL, NULL, 1, 1, 11, 1, NULL, 0, 14, 14, 'admin', 'Mayra Peñaloza', '1', '', '', 1, '', 1.128, 14, 0, 12.41135, 0, 0, 0, 0),
('', '00000-xxxx', '', NULL, 'ALG', '3', 'USD', '2022', 'FAC2022A2', '', NULL, 'CONT', 'PAN', '', 'A', NULL, '', 0, 0, 0, '2022-10-10', '2022-10-10', '11:05:28', NULL, NULL, 3, 1, 11, 2, NULL, 0, 280, 280, 'admin', '000000-xxxx', '2', '', 'Blusa estilizada hecha en punto de cruz y mundillo.', 0, '', 1.129, 280, 0, 248.00709, 0, 0, 0, 0),
('', 'xxxx-0000', '', NULL, 'ALG', '4', 'USD', '2022', 'FAC2022A3', '', NULL, 'CONT', 'PAN', '', 'A', NULL, '', 0, 0, 0, '2022-10-10', '2022-10-10', '14:12:57', NULL, NULL, 4, 1, 11, 3, NULL, 0, 40, 40, 'admin', '0000-xxxx', '3', '', 'Esta factura NO es una constancia de pago.\nLa factura de pago es emitida una vez se reciba el pago total del artículo.', 0, '', 1.129, 42.8, 0, 37.90965, 0, 2.8, 0, 0),
('', '0000-xxxx', '', NULL, 'ALG', '5', 'USD', '2022', 'FAC2022A4', '', NULL, 'CONT', 'PAN', '', 'A', NULL, '', 0, 0, 0, '2022-10-10', '2022-10-10', '14:39:43', NULL, NULL, 5, 1, 11, 4, NULL, 0, 10, 10, 'admin', '0000-xxxx', '4', '', 'Esta es una factura NO fiscal y representa el comprobante de pago.', 1, '', 1.129, 10, 0, 8.8574, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturasprov`
--

CREATE TABLE `facturasprov` (
  `cifnif` varchar(30) COLLATE utf8_bin NOT NULL,
  `codalmacen` varchar(4) COLLATE utf8_bin DEFAULT NULL,
  `coddivisa` varchar(3) COLLATE utf8_bin NOT NULL,
  `codejercicio` varchar(4) COLLATE utf8_bin NOT NULL,
  `codigo` varchar(20) COLLATE utf8_bin NOT NULL,
  `codigorect` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `codpago` varchar(10) COLLATE utf8_bin NOT NULL,
  `codproveedor` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `codserie` varchar(4) COLLATE utf8_bin NOT NULL,
  `dtopor1` double DEFAULT NULL,
  `dtopor2` double DEFAULT NULL,
  `editable` tinyint(1) DEFAULT NULL,
  `fecha` date NOT NULL,
  `femail` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `idasiento` int(11) DEFAULT NULL,
  `idempresa` int(11) DEFAULT NULL,
  `idestado` int(11) DEFAULT NULL,
  `idfactura` int(11) NOT NULL,
  `idfacturarect` int(11) DEFAULT NULL,
  `irpf` double DEFAULT NULL,
  `neto` double DEFAULT NULL,
  `netosindto` double DEFAULT '0',
  `nick` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL,
  `numero` varchar(12) COLLATE utf8_bin NOT NULL,
  `numproveedor` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `observaciones` text COLLATE utf8_bin,
  `pagada` tinyint(1) DEFAULT '0',
  `tasaconv` double DEFAULT NULL,
  `total` double DEFAULT NULL,
  `totaleuros` double DEFAULT NULL,
  `totalirpf` double DEFAULT NULL,
  `totaliva` double DEFAULT NULL,
  `totalrecargo` double DEFAULT NULL,
  `totalsuplidos` double DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `familias`
--

CREATE TABLE `familias` (
  `codfamilia` varchar(8) COLLATE utf8_bin NOT NULL,
  `codsubcuentacom` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `codsubcuentairpfcom` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `codsubcuentaven` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `descripcion` varchar(100) COLLATE utf8_bin NOT NULL,
  `madre` varchar(8) COLLATE utf8_bin DEFAULT NULL,
  `numproductos` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formaspago`
--

CREATE TABLE `formaspago` (
  `codcuentabanco` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `codpago` varchar(10) COLLATE utf8_bin NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_bin NOT NULL,
  `domiciliado` tinyint(1) DEFAULT NULL,
  `idempresa` int(11) DEFAULT NULL,
  `pagado` tinyint(1) DEFAULT '0',
  `plazovencimiento` int(11) DEFAULT NULL,
  `tipovencimiento` varchar(10) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `formaspago`
--

INSERT INTO `formaspago` (`codcuentabanco`, `codpago`, `descripcion`, `domiciliado`, `idempresa`, `pagado`, `plazovencimiento`, `tipovencimiento`) VALUES
(NULL, 'CONT', 'Al contado', 0, 1, 0, 0, 'days'),
(NULL, 'PAYPAL', 'PayPal', 0, 1, 0, 0, 'days'),
(NULL, 'TARJETA', 'Tarjeta de crédito', 0, 1, 0, 0, 'days'),
(NULL, 'TRANS', 'Transferencia bancaria', 0, 1, 0, 1, 'months');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formatos_documentos`
--

CREATE TABLE `formatos_documentos` (
  `autoaplicar` tinyint(1) DEFAULT '1',
  `codserie` varchar(4) COLLATE utf8_bin DEFAULT NULL,
  `id` int(11) NOT NULL,
  `idempresa` int(11) DEFAULT NULL,
  `idlogo` int(11) DEFAULT NULL,
  `nombre` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `texto` text COLLATE utf8_bin,
  `tipodoc` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `titulo` varchar(30) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `formatos_documentos`
--

INSERT INTO `formatos_documentos` (`autoaplicar`, `codserie`, `id`, `idempresa`, `idlogo`, `nombre`, `texto`, `tipodoc`, `titulo`) VALUES
(1, 'R', 1, 1, NULL, 'Rectificativa', NULL, 'FacturaCliente', 'Factura Rectificativa'),
(1, 'S', 2, 1, NULL, 'Simplificada', NULL, 'FacturaCliente', 'Factura Simplificada'),
(0, 'A', 3, 1, NULL, 'Proforma', NULL, 'PresupuestoCliente', 'Factura Proforma');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gruposclientes`
--

CREATE TABLE `gruposclientes` (
  `codgrupo` varchar(6) COLLATE utf8_bin NOT NULL,
  `codsubcuenta` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `codtarifa` varchar(6) COLLATE utf8_bin DEFAULT NULL,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `idsfiscales`
--

CREATE TABLE `idsfiscales` (
  `codeid` varchar(2) COLLATE utf8_bin DEFAULT NULL,
  `tipoidfiscal` varchar(25) COLLATE utf8_bin NOT NULL,
  `validar` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `idsfiscales`
--

INSERT INTO `idsfiscales` (`codeid`, `tipoidfiscal`, `validar`) VALUES
(NULL, 'CI', 0),
(NULL, 'CIF', 0),
(NULL, 'CUIL', 0),
(NULL, 'CUIT', 0),
(NULL, 'DNI', 0),
(NULL, 'DPI', 0),
(NULL, 'NIE', 0),
(NULL, 'NIF', 0),
(NULL, 'NIT', 0),
(NULL, 'Pasaporte', 0),
(NULL, 'RFC', 0),
(NULL, 'RIF', 0),
(NULL, 'RNC', 0),
(NULL, 'RUC', 0),
(NULL, 'RUN', 0),
(NULL, 'RUT', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `impuestos`
--

CREATE TABLE `impuestos` (
  `codimpuesto` varchar(10) COLLATE utf8_bin NOT NULL,
  `codsubcuentarep` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `codsubcuentasop` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `descripcion` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `tipo` int(11) DEFAULT '1',
  `iva` double NOT NULL,
  `recargo` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `impuestos`
--

INSERT INTO `impuestos` (`codimpuesto`, `codsubcuentarep`, `codsubcuentasop`, `descripcion`, `tipo`, `iva`, `recargo`) VALUES
('ITBI', NULL, NULL, 'ITBI 2%', 1, 2, 0),
('ITBMS', NULL, NULL, 'ITBMS 7%', 1, 7, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `impuestoszonas`
--

CREATE TABLE `impuestoszonas` (
  `codimpuesto` varchar(10) COLLATE utf8_bin NOT NULL,
  `codimpuestosel` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `codisopro` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `codpais` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `id` int(11) NOT NULL,
  `prioridad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lineasalbaranescli`
--

CREATE TABLE `lineasalbaranescli` (
  `actualizastock` int(11) NOT NULL DEFAULT '0',
  `cantidad` double NOT NULL,
  `codimpuesto` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `coste` double DEFAULT NULL,
  `descripcion` text COLLATE utf8_bin,
  `dtopor` double NOT NULL,
  `dtopor2` double NOT NULL DEFAULT '0',
  `idalbaran` int(11) NOT NULL,
  `idlinea` int(11) NOT NULL,
  `idproducto` int(11) DEFAULT NULL,
  `irpf` double DEFAULT NULL,
  `iva` double NOT NULL,
  `mostrar_cantidad` tinyint(1) DEFAULT '1',
  `mostrar_precio` tinyint(1) DEFAULT '1',
  `orden` int(11) DEFAULT '0',
  `pvpsindto` double NOT NULL,
  `pvptotal` double NOT NULL,
  `pvpunitario` double NOT NULL,
  `recargo` double NOT NULL,
  `referencia` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `salto_pagina` tinyint(1) DEFAULT '0',
  `servido` double NOT NULL DEFAULT '0',
  `suplido` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lineasalbaranesprov`
--

CREATE TABLE `lineasalbaranesprov` (
  `actualizastock` int(11) NOT NULL DEFAULT '0',
  `cantidad` double NOT NULL,
  `codimpuesto` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `descripcion` text COLLATE utf8_bin,
  `dtopor` double NOT NULL,
  `dtopor2` double NOT NULL DEFAULT '0',
  `idalbaran` int(11) NOT NULL,
  `idlinea` int(11) NOT NULL,
  `idproducto` int(11) DEFAULT NULL,
  `irpf` double DEFAULT NULL,
  `iva` double NOT NULL,
  `orden` int(11) DEFAULT '0',
  `pvpsindto` double NOT NULL,
  `pvptotal` double NOT NULL,
  `pvpunitario` double NOT NULL,
  `recargo` double NOT NULL,
  `referencia` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `servido` double NOT NULL DEFAULT '0',
  `suplido` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lineasfacturascli`
--

CREATE TABLE `lineasfacturascli` (
  `actualizastock` int(11) NOT NULL DEFAULT '-1',
  `cantidad` double NOT NULL,
  `codimpuesto` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `coste` double DEFAULT NULL,
  `descripcion` text COLLATE utf8_bin,
  `dtopor` double NOT NULL,
  `dtopor2` double NOT NULL DEFAULT '0',
  `idfactura` int(11) NOT NULL,
  `idlinea` int(11) NOT NULL,
  `idlinearect` int(11) DEFAULT NULL,
  `idproducto` int(11) DEFAULT NULL,
  `irpf` double DEFAULT NULL,
  `iva` double NOT NULL,
  `mostrar_cantidad` tinyint(1) DEFAULT '1',
  `mostrar_precio` tinyint(1) DEFAULT '1',
  `orden` int(11) DEFAULT '0',
  `pvpsindto` double NOT NULL,
  `pvptotal` double NOT NULL,
  `pvpunitario` double NOT NULL,
  `recargo` double NOT NULL,
  `referencia` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `salto_pagina` tinyint(1) DEFAULT '0',
  `servido` double NOT NULL DEFAULT '0',
  `suplido` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `lineasfacturascli`
--

INSERT INTO `lineasfacturascli` (`actualizastock`, `cantidad`, `codimpuesto`, `coste`, `descripcion`, `dtopor`, `dtopor2`, `idfactura`, `idlinea`, `idlinearect`, `idproducto`, `irpf`, `iva`, `mostrar_cantidad`, `mostrar_precio`, `orden`, `pvpsindto`, `pvptotal`, `pvpunitario`, `recargo`, `referencia`, `salto_pagina`, `servido`, `suplido`) VALUES
(-1, 1, NULL, 14, 'Brazalete Tornasol - Alambre Goldfield', 0, 0, 1, 1, NULL, NULL, 0, 0, 1, 1, 10, 14, 14, 14, 0, 'CA03', 0, 0, 0),
(-1, 1, NULL, 0, 'Blusa estilizada - Punto de cruz y mundillo', 0, 0, 2, 2, NULL, NULL, 0, 0, 1, 1, 10, 280, 280, 280, 0, NULL, 0, 0, 0),
(-1, 1, 'ITBMS', 0, 'Camisilla estilizada en punto de marca (punto de cruz)', 0, 0, 3, 3, NULL, NULL, 0, 7, 1, 1, 10, 40, 40, 40, 0, NULL, 0, 0, 0),
(-1, 1, NULL, 0, 'Pendientes Lagrima Invernal - Edición limitada', 0, 0, 4, 4, NULL, NULL, 0, 0, 1, 1, 10, 10, 10, 10, 0, NULL, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lineasfacturasprov`
--

CREATE TABLE `lineasfacturasprov` (
  `actualizastock` int(11) NOT NULL DEFAULT '1',
  `cantidad` double NOT NULL,
  `codimpuesto` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `descripcion` text COLLATE utf8_bin,
  `dtopor` double NOT NULL,
  `dtopor2` double NOT NULL DEFAULT '0',
  `idfactura` int(11) NOT NULL,
  `idlinea` int(11) NOT NULL,
  `idlinearect` int(11) DEFAULT NULL,
  `idproducto` int(11) DEFAULT NULL,
  `irpf` double DEFAULT NULL,
  `iva` double NOT NULL,
  `orden` int(11) DEFAULT '0',
  `pvpsindto` double NOT NULL,
  `pvptotal` double NOT NULL,
  `pvpunitario` double NOT NULL,
  `recargo` double NOT NULL,
  `referencia` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `servido` double NOT NULL DEFAULT '0',
  `suplido` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lineaspedidoscli`
--

CREATE TABLE `lineaspedidoscli` (
  `actualizastock` int(11) NOT NULL DEFAULT '0',
  `cantidad` double NOT NULL,
  `codimpuesto` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `coste` double DEFAULT NULL,
  `descripcion` text COLLATE utf8_bin,
  `dtopor` double NOT NULL,
  `dtopor2` double NOT NULL DEFAULT '0',
  `idlinea` int(11) NOT NULL,
  `idpedido` int(11) NOT NULL,
  `idproducto` int(11) DEFAULT NULL,
  `irpf` double DEFAULT NULL,
  `iva` double NOT NULL,
  `mostrar_cantidad` tinyint(1) DEFAULT '1',
  `mostrar_precio` tinyint(1) DEFAULT '1',
  `orden` int(11) DEFAULT '0',
  `pvpsindto` double NOT NULL,
  `pvptotal` double NOT NULL,
  `pvpunitario` double NOT NULL,
  `recargo` double NOT NULL,
  `referencia` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `salto_pagina` tinyint(1) DEFAULT '0',
  `servido` double NOT NULL DEFAULT '0',
  `suplido` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lineaspedidosprov`
--

CREATE TABLE `lineaspedidosprov` (
  `actualizastock` int(11) NOT NULL DEFAULT '0',
  `cantidad` double NOT NULL,
  `codimpuesto` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `descripcion` text COLLATE utf8_bin,
  `dtopor` double NOT NULL,
  `dtopor2` double NOT NULL DEFAULT '0',
  `idlinea` int(11) NOT NULL,
  `idpedido` int(11) NOT NULL,
  `idproducto` int(11) DEFAULT NULL,
  `irpf` double DEFAULT NULL,
  `iva` double NOT NULL,
  `orden` int(11) DEFAULT '0',
  `pvpsindto` double NOT NULL,
  `pvptotal` double NOT NULL,
  `pvpunitario` double NOT NULL,
  `recargo` double NOT NULL,
  `referencia` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `servido` double NOT NULL DEFAULT '0',
  `suplido` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lineaspresupuestoscli`
--

CREATE TABLE `lineaspresupuestoscli` (
  `actualizastock` int(11) NOT NULL DEFAULT '0',
  `cantidad` double NOT NULL,
  `codimpuesto` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `coste` double DEFAULT NULL,
  `descripcion` text COLLATE utf8_bin,
  `dtopor` double NOT NULL,
  `dtopor2` double NOT NULL DEFAULT '0',
  `idlinea` int(11) NOT NULL,
  `idpresupuesto` int(11) NOT NULL,
  `idproducto` int(11) DEFAULT NULL,
  `irpf` double DEFAULT NULL,
  `iva` double NOT NULL,
  `mostrar_cantidad` tinyint(1) DEFAULT '1',
  `mostrar_precio` tinyint(1) DEFAULT '1',
  `orden` int(11) DEFAULT '0',
  `pvpsindto` double NOT NULL,
  `pvptotal` double NOT NULL,
  `pvpunitario` double NOT NULL,
  `recargo` double NOT NULL,
  `referencia` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `salto_pagina` tinyint(1) DEFAULT '0',
  `servido` double NOT NULL DEFAULT '0',
  `suplido` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `lineaspresupuestoscli`
--

INSERT INTO `lineaspresupuestoscli` (`actualizastock`, `cantidad`, `codimpuesto`, `coste`, `descripcion`, `dtopor`, `dtopor2`, `idlinea`, `idpresupuesto`, `idproducto`, `irpf`, `iva`, `mostrar_cantidad`, `mostrar_precio`, `orden`, `pvpsindto`, `pvptotal`, `pvpunitario`, `recargo`, `referencia`, `salto_pagina`, `servido`, `suplido`) VALUES
(0, 1, NULL, 14, 'Brazalete Tornasol - Alambre Goldfield', 0, 0, 1, 1, NULL, 0, 0, 1, 1, 10, 14, 14, 14, 0, 'CA03', 0, 0, 0),
(0, 3, 'ITBMS', 0, 'Hilo DMC color amarillo', 0, 0, 2, 2, NULL, 0, 7, 1, 1, 60, 2.94, 2.94, 0.98, 0, NULL, 0, 0, 0),
(0, 3, 'ITBMS', 0, 'Hilo DMC color rojo', 0, 0, 3, 2, NULL, 0, 7, 1, 1, 50, 2.94, 2.94, 0.98, 0, NULL, 0, 0, 0),
(0, 3, 'ITBMS', 0, 'Hilo DMC color azul', 0, 0, 4, 2, NULL, 0, 7, 1, 1, 40, 2.94, 2.94, 0.98, 0, NULL, 0, 0, 0),
(0, 1, 'ITBMS', 0, 'Tela manta sucia 2 yardas', 0, 0, 5, 2, NULL, 0, 7, 1, 1, 30, 4.98, 4.98, 4.98, 0, NULL, 0, 0, 0),
(0, 1, 'ITBMS', 0, 'Angeo 1/4', 0, 0, 6, 2, NULL, 0, 7, 1, 1, 20, 3.25, 3.25, 3.25, 0, NULL, 0, 0, 0),
(0, 1, NULL, 0, 'Mano de obra + 30 % ley', 0, 0, 7, 2, NULL, 0, 0, 1, 1, 10, 50, 50, 50, 0, NULL, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lineaspresupuestosprov`
--

CREATE TABLE `lineaspresupuestosprov` (
  `actualizastock` int(11) NOT NULL DEFAULT '0',
  `cantidad` double NOT NULL,
  `codimpuesto` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `descripcion` text COLLATE utf8_bin,
  `dtopor` double NOT NULL,
  `dtopor2` double NOT NULL DEFAULT '0',
  `idlinea` int(11) NOT NULL,
  `idpresupuesto` int(11) NOT NULL,
  `idproducto` int(11) DEFAULT NULL,
  `irpf` double DEFAULT NULL,
  `iva` double NOT NULL,
  `orden` int(11) DEFAULT '0',
  `pvpsindto` double NOT NULL,
  `pvptotal` double NOT NULL,
  `pvpunitario` double NOT NULL,
  `recargo` double NOT NULL,
  `referencia` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `servido` double NOT NULL DEFAULT '0',
  `suplido` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logs`
--

CREATE TABLE `logs` (
  `channel` varchar(40) COLLATE utf8_bin DEFAULT NULL,
  `context` text COLLATE utf8_bin,
  `id` int(11) NOT NULL,
  `idcontacto` int(11) DEFAULT NULL,
  `ip` varchar(40) COLLATE utf8_bin DEFAULT NULL,
  `level` varchar(15) COLLATE utf8_bin NOT NULL,
  `message` text COLLATE utf8_bin NOT NULL,
  `model` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `modelcode` varchar(40) COLLATE utf8_bin DEFAULT NULL,
  `nick` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `uri` varchar(200) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `logs`
--

INSERT INTO `logs` (`channel`, `context`, `id`, `idcontacto`, `ip`, `level`, `message`, `model`, `modelcode`, `nick`, `time`, `uri`) VALUES
('audit', '{&quot;%model%&quot;:&quot;FacturaCliente&quot;,&quot;%key%&quot;:&quot;1&quot;,&quot;%desc%&quot;:&quot;FAC2022A1&quot;,&quot;model-class&quot;:&quot;FacturaCliente&quot;,&quot;model-code&quot;:&quot;1&quot;,&quot;model-data&quot;:{&quot;apartado&quot;:&quot;&quot;,&quot;cifnif&quot;:&quot;&quot;,&quot;ciudad&quot;:&quot;&quot;,&quot;codagente&quot;:null,&quot;codalmacen&quot;:&quot;ALG&quot;,&quot;codcliente&quot;:&quot;1&quot;,&quot;coddivisa&quot;:&quot;PAB&quot;,&quot;codejercicio&quot;:&quot;2022&quot;,&quot;codigo&quot;:&quot;FAC2022A1&quot;,&quot;codigoenv&quot;:&quot;&quot;,&quot;codigorect&quot;:null,&quot;codpago&quot;:&quot;CONT&quot;,&quot;codpais&quot;:&quot;PAN&quot;,&quot;codpostal&quot;:&quot;&quot;,&quot;codserie&quot;:&quot;A&quot;,&quot;codtrans&quot;:null,&quot;direccion&quot;:&quot;&quot;,&quot;dtopor1&quot;:0,&quot;dtopor2&quot;:0,&quot;editable&quot;:true,&quot;fecha&quot;:&quot;2022-10-03&quot;,&quot;femail&quot;:null,&quot;hora&quot;:&quot;18:33:29&quot;,&quot;idasiento&quot;:null,&quot;idcontactoenv&quot;:null,&quot;idcontactofact&quot;:1,&quot;idempresa&quot;:1,&quot;idestado&quot;:10,&quot;idfactura&quot;:&quot;1&quot;,&quot;idfacturarect&quot;:null,&quot;irpf&quot;:0,&quot;neto&quot;:14,&quot;netosindto&quot;:14,&quot;nick&quot;:&quot;admin&quot;,&quot;nombrecliente&quot;:&quot;Mayra Pe\\u00f1aloza&quot;,&quot;numero&quot;:&quot;1&quot;,&quot;numero2&quot;:&quot;&quot;,&quot;observaciones&quot;:&quot;&quot;,&quot;pagada&quot;:false,&quot;provincia&quot;:&quot;&quot;,&quot;tasaconv&quot;:1.128,&quot;total&quot;:14,&quot;totalcoste&quot;:0,&quot;totaleuros&quot;:12.41135,&quot;totalirpf&quot;:0,&quot;totaliva&quot;:0,&quot;totalrecargo&quot;:0,&quot;totalsuplidos&quot;:0},&quot;uri&quot;:&quot;\\/EditFacturaCliente&quot;,&quot;nick&quot;:&quot;admin&quot;}', 1, NULL, '201.227.218.109', 'info', 'Actualizado FacturaCliente (1) FAC2022A1', 'FacturaCliente', '1', 'admin', '2022-10-03 23:34:08', '/EditFacturaCliente'),
('audit', '{&quot;%model%&quot;:&quot;FacturaCliente&quot;,&quot;%key%&quot;:1,&quot;%desc%&quot;:&quot;FAC2022A1&quot;,&quot;model-class&quot;:&quot;FacturaCliente&quot;,&quot;model-code&quot;:1,&quot;model-data&quot;:{&quot;apartado&quot;:&quot;&quot;,&quot;cifnif&quot;:&quot;&quot;,&quot;ciudad&quot;:&quot;&quot;,&quot;codagente&quot;:null,&quot;codalmacen&quot;:&quot;ALG&quot;,&quot;codcliente&quot;:&quot;1&quot;,&quot;coddivisa&quot;:&quot;PAB&quot;,&quot;codejercicio&quot;:&quot;2022&quot;,&quot;codigo&quot;:&quot;FAC2022A1&quot;,&quot;codigoenv&quot;:&quot;&quot;,&quot;codigorect&quot;:null,&quot;codpago&quot;:&quot;CONT&quot;,&quot;codpais&quot;:&quot;PAN&quot;,&quot;codpostal&quot;:&quot;&quot;,&quot;codserie&quot;:&quot;A&quot;,&quot;codtrans&quot;:null,&quot;direccion&quot;:&quot;&quot;,&quot;dtopor1&quot;:0,&quot;dtopor2&quot;:0,&quot;editable&quot;:true,&quot;fecha&quot;:&quot;2022-10-03&quot;,&quot;femail&quot;:null,&quot;hora&quot;:&quot;18:33:29&quot;,&quot;idasiento&quot;:null,&quot;idcontactoenv&quot;:null,&quot;idcontactofact&quot;:1,&quot;idempresa&quot;:1,&quot;idestado&quot;:10,&quot;idfactura&quot;:1,&quot;idfacturarect&quot;:null,&quot;irpf&quot;:0,&quot;neto&quot;:14,&quot;netosindto&quot;:14,&quot;nick&quot;:&quot;admin&quot;,&quot;nombrecliente&quot;:&quot;Mayra Pe\\u00f1aloza&quot;,&quot;numero&quot;:&quot;1&quot;,&quot;numero2&quot;:&quot;&quot;,&quot;observaciones&quot;:&quot;&quot;,&quot;pagada&quot;:false,&quot;provincia&quot;:&quot;&quot;,&quot;tasaconv&quot;:1.128,&quot;total&quot;:14,&quot;totalcoste&quot;:0,&quot;totaleuros&quot;:12.41135,&quot;totalirpf&quot;:0,&quot;totaliva&quot;:0,&quot;totalrecargo&quot;:0,&quot;totalsuplidos&quot;:0},&quot;uri&quot;:&quot;\\/EditFacturaCliente&quot;,&quot;nick&quot;:&quot;admin&quot;}', 2, NULL, '201.227.218.109', 'info', 'Actualizado FacturaCliente (1) FAC2022A1', 'FacturaCliente', '1', 'admin', '2022-10-03 23:38:22', '/EditFacturaCliente'),
('audit', '{&quot;%model%&quot;:&quot;FacturaCliente&quot;,&quot;%key%&quot;:1,&quot;%desc%&quot;:&quot;FAC2022A1&quot;,&quot;model-class&quot;:&quot;FacturaCliente&quot;,&quot;model-code&quot;:1,&quot;model-data&quot;:{&quot;apartado&quot;:&quot;&quot;,&quot;cifnif&quot;:&quot;&quot;,&quot;ciudad&quot;:&quot;&quot;,&quot;codagente&quot;:null,&quot;codalmacen&quot;:&quot;ALG&quot;,&quot;codcliente&quot;:&quot;1&quot;,&quot;coddivisa&quot;:&quot;PAB&quot;,&quot;codejercicio&quot;:&quot;2022&quot;,&quot;codigo&quot;:&quot;FAC2022A1&quot;,&quot;codigoenv&quot;:&quot;&quot;,&quot;codigorect&quot;:null,&quot;codpago&quot;:&quot;CONT&quot;,&quot;codpais&quot;:&quot;PAN&quot;,&quot;codpostal&quot;:&quot;&quot;,&quot;codserie&quot;:&quot;A&quot;,&quot;codtrans&quot;:null,&quot;direccion&quot;:&quot;&quot;,&quot;dtopor1&quot;:0,&quot;dtopor2&quot;:0,&quot;editable&quot;:false,&quot;fecha&quot;:&quot;2022-10-03&quot;,&quot;femail&quot;:null,&quot;hora&quot;:&quot;18:33:29&quot;,&quot;idasiento&quot;:null,&quot;idcontactoenv&quot;:null,&quot;idcontactofact&quot;:1,&quot;idempresa&quot;:1,&quot;idestado&quot;:11,&quot;idfactura&quot;:1,&quot;idfacturarect&quot;:null,&quot;irpf&quot;:0,&quot;neto&quot;:14,&quot;netosindto&quot;:14,&quot;nick&quot;:&quot;admin&quot;,&quot;nombrecliente&quot;:&quot;Mayra Pe\\u00f1aloza&quot;,&quot;numero&quot;:&quot;1&quot;,&quot;numero2&quot;:&quot;&quot;,&quot;observaciones&quot;:&quot;&quot;,&quot;pagada&quot;:false,&quot;provincia&quot;:&quot;&quot;,&quot;tasaconv&quot;:1.128,&quot;total&quot;:14,&quot;totalcoste&quot;:0,&quot;totaleuros&quot;:12.41135,&quot;totalirpf&quot;:0,&quot;totaliva&quot;:0,&quot;totalrecargo&quot;:0,&quot;totalsuplidos&quot;:0},&quot;uri&quot;:&quot;\\/EditFacturaCliente&quot;,&quot;nick&quot;:&quot;admin&quot;}', 3, NULL, '201.227.218.109', 'info', 'Actualizado FacturaCliente (1) FAC2022A1', 'FacturaCliente', '1', 'admin', '2022-10-03 23:38:22', '/EditFacturaCliente'),
('audit', '{&quot;%model%&quot;:&quot;Asiento&quot;,&quot;%key%&quot;:&quot;1&quot;,&quot;%desc%&quot;:1,&quot;model-class&quot;:&quot;Asiento&quot;,&quot;model-code&quot;:&quot;1&quot;,&quot;model-data&quot;:{&quot;canal&quot;:null,&quot;codejercicio&quot;:&quot;2022&quot;,&quot;concepto&quot;:&quot;Cobro del recibo FAC2022A1-1 - Mayra Pe\\u00f1aloza&quot;,&quot;documento&quot;:&quot;FAC2022A1&quot;,&quot;editable&quot;:true,&quot;fecha&quot;:&quot;03-10-2022&quot;,&quot;idasiento&quot;:&quot;1&quot;,&quot;iddiario&quot;:null,&quot;idempresa&quot;:1,&quot;importe&quot;:14,&quot;numero&quot;:1,&quot;operacion&quot;:null},&quot;uri&quot;:&quot;\\/EditFacturaCliente&quot;,&quot;nick&quot;:&quot;admin&quot;}', 4, NULL, '201.227.218.109', 'info', 'Actualizado Asiento (1) 1', 'Asiento', '1', 'admin', '2022-10-03 23:38:30', '/EditFacturaCliente'),
('audit', '{&quot;%model%&quot;:&quot;Asiento&quot;,&quot;%key%&quot;:&quot;1&quot;,&quot;%desc%&quot;:1,&quot;model-class&quot;:&quot;Asiento&quot;,&quot;model-code&quot;:&quot;1&quot;,&quot;model-data&quot;:{&quot;canal&quot;:null,&quot;codejercicio&quot;:&quot;2022&quot;,&quot;concepto&quot;:&quot;Cobro del recibo FAC2022A1-1 - Mayra Pe\\u00f1aloza&quot;,&quot;documento&quot;:&quot;FAC2022A1&quot;,&quot;editable&quot;:true,&quot;fecha&quot;:&quot;03-10-2022&quot;,&quot;idasiento&quot;:&quot;1&quot;,&quot;iddiario&quot;:null,&quot;idempresa&quot;:1,&quot;importe&quot;:14,&quot;numero&quot;:1,&quot;operacion&quot;:null},&quot;uri&quot;:&quot;\\/EditFacturaCliente&quot;,&quot;nick&quot;:&quot;admin&quot;}', 5, NULL, '201.227.218.109', 'warning', 'Eliminado Asiento (1) 1', 'Asiento', '1', 'admin', '2022-10-03 23:38:30', '/EditFacturaCliente'),
('master', '{&quot;uri&quot;:&quot;\\/&quot;,&quot;nick&quot;:&quot;admin&quot;}', 6, NULL, '::1', 'critical', 'Macro &quot;sectionNews&quot; is not defined in template &quot;Dashboard.html.twig&quot;.', NULL, NULL, 'admin', '2022-10-04 00:07:54', '/'),
('master', '{&quot;uri&quot;:&quot;\\/&quot;,&quot;nick&quot;:&quot;admin&quot;}', 7, NULL, '::1', 'critical', 'Macro &quot;sectionStats&quot; is not defined in template &quot;Dashboard.html.twig&quot;.', NULL, NULL, 'admin', '2022-10-04 00:09:16', '/'),
('master', '{&quot;uri&quot;:&quot;\\/&quot;,&quot;nick&quot;:&quot;admin&quot;}', 8, NULL, '::1', 'critical', 'Macro &quot;sectionStats&quot; is not defined in template &quot;Dashboard.html.twig&quot;.', NULL, NULL, 'admin', '2022-10-04 00:09:20', '/'),
('master', '{&quot;uri&quot;:&quot;\\/&quot;,&quot;nick&quot;:&quot;admin&quot;}', 9, NULL, '::1', 'critical', 'Unknown &quot;endmacro&quot; tag.', NULL, NULL, 'admin', '2022-10-04 00:11:42', '/'),
('audit', '{&quot;%model%&quot;:&quot;PresupuestoCliente&quot;,&quot;%key%&quot;:&quot;1&quot;,&quot;%desc%&quot;:&quot;PRE2022A1&quot;,&quot;model-class&quot;:&quot;PresupuestoCliente&quot;,&quot;model-code&quot;:&quot;1&quot;,&quot;model-data&quot;:{&quot;apartado&quot;:&quot;&quot;,&quot;cifnif&quot;:&quot;&quot;,&quot;ciudad&quot;:&quot;&quot;,&quot;codagente&quot;:null,&quot;codalmacen&quot;:&quot;ALG&quot;,&quot;codcliente&quot;:&quot;1&quot;,&quot;coddivisa&quot;:&quot;PAB&quot;,&quot;codejercicio&quot;:&quot;2022&quot;,&quot;codigo&quot;:&quot;PRE2022A1&quot;,&quot;codigoenv&quot;:&quot;&quot;,&quot;codpago&quot;:&quot;CONT&quot;,&quot;codpais&quot;:&quot;PAN&quot;,&quot;codpostal&quot;:&quot;&quot;,&quot;codserie&quot;:&quot;A&quot;,&quot;codtrans&quot;:null,&quot;direccion&quot;:&quot;&quot;,&quot;dtopor1&quot;:0,&quot;dtopor2&quot;:0,&quot;editable&quot;:true,&quot;fecha&quot;:&quot;2022-10-03&quot;,&quot;femail&quot;:null,&quot;finoferta&quot;:null,&quot;hora&quot;:&quot;19:18:26&quot;,&quot;idcontactoenv&quot;:null,&quot;idcontactofact&quot;:1,&quot;idempresa&quot;:1,&quot;idestado&quot;:1,&quot;idpresupuesto&quot;:&quot;1&quot;,&quot;irpf&quot;:0,&quot;neto&quot;:0,&quot;netosindto&quot;:0,&quot;nick&quot;:&quot;admin&quot;,&quot;nombrecliente&quot;:&quot;Mayra Pe\\u00f1aloza&quot;,&quot;numero&quot;:&quot;1&quot;,&quot;numero2&quot;:&quot;&quot;,&quot;observaciones&quot;:&quot;&quot;,&quot;provincia&quot;:&quot;&quot;,&quot;tasaconv&quot;:1.128,&quot;total&quot;:0,&quot;totalcoste&quot;:0,&quot;totaleuros&quot;:0,&quot;totalirpf&quot;:0,&quot;totaliva&quot;:0,&quot;totalrecargo&quot;:0,&quot;totalsuplidos&quot;:0},&quot;uri&quot;:&quot;\\/EditPresupuestoCliente&quot;,&quot;nick&quot;:&quot;admin&quot;}', 10, NULL, '::1', 'info', 'Actualizado PresupuestoCliente (1) PRE2022A1', 'PresupuestoCliente', '1', 'admin', '2022-10-04 00:18:46', '/EditPresupuestoCliente'),
('audit', '{&quot;%model%&quot;:&quot;PresupuestoCliente&quot;,&quot;%key%&quot;:1,&quot;%desc%&quot;:&quot;PRE2022A1&quot;,&quot;model-class&quot;:&quot;PresupuestoCliente&quot;,&quot;model-code&quot;:1,&quot;model-data&quot;:{&quot;apartado&quot;:&quot;&quot;,&quot;cifnif&quot;:&quot;&quot;,&quot;ciudad&quot;:&quot;&quot;,&quot;codagente&quot;:null,&quot;codalmacen&quot;:&quot;ALG&quot;,&quot;codcliente&quot;:&quot;1&quot;,&quot;coddivisa&quot;:&quot;PAB&quot;,&quot;codejercicio&quot;:&quot;2022&quot;,&quot;codigo&quot;:&quot;PRE2022A1&quot;,&quot;codigoenv&quot;:&quot;&quot;,&quot;codpago&quot;:&quot;CONT&quot;,&quot;codpais&quot;:&quot;PAN&quot;,&quot;codpostal&quot;:&quot;&quot;,&quot;codserie&quot;:&quot;A&quot;,&quot;codtrans&quot;:null,&quot;direccion&quot;:&quot;&quot;,&quot;dtopor1&quot;:0,&quot;dtopor2&quot;:0,&quot;editable&quot;:true,&quot;fecha&quot;:&quot;2022-10-03&quot;,&quot;femail&quot;:null,&quot;finoferta&quot;:null,&quot;hora&quot;:&quot;19:18:26&quot;,&quot;idcontactoenv&quot;:null,&quot;idcontactofact&quot;:1,&quot;idempresa&quot;:1,&quot;idestado&quot;:1,&quot;idpresupuesto&quot;:1,&quot;irpf&quot;:0,&quot;neto&quot;:0,&quot;netosindto&quot;:0,&quot;nick&quot;:&quot;admin&quot;,&quot;nombrecliente&quot;:&quot;Mayra Pe\\u00f1aloza&quot;,&quot;numero&quot;:&quot;1&quot;,&quot;numero2&quot;:&quot;&quot;,&quot;observaciones&quot;:&quot;&quot;,&quot;provincia&quot;:&quot;&quot;,&quot;tasaconv&quot;:1.128,&quot;total&quot;:0,&quot;totalcoste&quot;:0,&quot;totaleuros&quot;:0,&quot;totalirpf&quot;:0,&quot;totaliva&quot;:0,&quot;totalrecargo&quot;:0,&quot;totalsuplidos&quot;:0},&quot;uri&quot;:&quot;\\/EditPresupuestoCliente&quot;,&quot;nick&quot;:&quot;admin&quot;}', 11, NULL, '201.227.218.109', 'info', 'Actualizado PresupuestoCliente (1) PRE2022A1', 'PresupuestoCliente', '1', 'admin', '2022-10-04 03:34:09', '/EditPresupuestoCliente'),
('audit', '{&quot;%model%&quot;:&quot;PresupuestoCliente&quot;,&quot;%key%&quot;:1,&quot;%desc%&quot;:&quot;PRE2022A1&quot;,&quot;model-class&quot;:&quot;PresupuestoCliente&quot;,&quot;model-code&quot;:1,&quot;model-data&quot;:{&quot;apartado&quot;:&quot;&quot;,&quot;cifnif&quot;:&quot;&quot;,&quot;ciudad&quot;:&quot;&quot;,&quot;codagente&quot;:null,&quot;codalmacen&quot;:&quot;ALG&quot;,&quot;codcliente&quot;:&quot;1&quot;,&quot;coddivisa&quot;:&quot;PAB&quot;,&quot;codejercicio&quot;:&quot;2022&quot;,&quot;codigo&quot;:&quot;PRE2022A1&quot;,&quot;codigoenv&quot;:&quot;&quot;,&quot;codpago&quot;:&quot;CONT&quot;,&quot;codpais&quot;:&quot;PAN&quot;,&quot;codpostal&quot;:&quot;&quot;,&quot;codserie&quot;:&quot;A&quot;,&quot;codtrans&quot;:null,&quot;direccion&quot;:&quot;&quot;,&quot;dtopor1&quot;:0,&quot;dtopor2&quot;:0,&quot;editable&quot;:true,&quot;fecha&quot;:&quot;2022-10-03&quot;,&quot;femail&quot;:null,&quot;finoferta&quot;:null,&quot;hora&quot;:&quot;19:18:26&quot;,&quot;idcontactoenv&quot;:null,&quot;idcontactofact&quot;:1,&quot;idempresa&quot;:1,&quot;idestado&quot;:1,&quot;idpresupuesto&quot;:1,&quot;irpf&quot;:0,&quot;neto&quot;:14,&quot;netosindto&quot;:14,&quot;nick&quot;:&quot;admin&quot;,&quot;nombrecliente&quot;:&quot;Mayra Pe\\u00f1aloza&quot;,&quot;numero&quot;:&quot;1&quot;,&quot;numero2&quot;:&quot;&quot;,&quot;observaciones&quot;:&quot;&quot;,&quot;provincia&quot;:&quot;&quot;,&quot;tasaconv&quot;:1.128,&quot;total&quot;:14,&quot;totalcoste&quot;:0,&quot;totaleuros&quot;:12.41135,&quot;totalirpf&quot;:0,&quot;totaliva&quot;:0,&quot;totalrecargo&quot;:0,&quot;totalsuplidos&quot;:0},&quot;uri&quot;:&quot;\\/EditPresupuestoCliente&quot;,&quot;nick&quot;:&quot;admin&quot;}', 12, NULL, '201.227.218.109', 'info', 'Actualizado PresupuestoCliente (1) PRE2022A1', 'PresupuestoCliente', '1', 'admin', '2022-10-04 03:34:09', '/EditPresupuestoCliente'),
('audit', '{&quot;%model%&quot;:&quot;PresupuestoCliente&quot;,&quot;%key%&quot;:&quot;2&quot;,&quot;%desc%&quot;:&quot;PRE2022A2&quot;,&quot;model-class&quot;:&quot;PresupuestoCliente&quot;,&quot;model-code&quot;:&quot;2&quot;,&quot;model-data&quot;:{&quot;apartado&quot;:&quot;&quot;,&quot;cifnif&quot;:&quot;xxxx-0000&quot;,&quot;ciudad&quot;:&quot;&quot;,&quot;codagente&quot;:null,&quot;codalmacen&quot;:&quot;ALG&quot;,&quot;codcliente&quot;:&quot;2&quot;,&quot;coddivisa&quot;:&quot;USD&quot;,&quot;codejercicio&quot;:&quot;2022&quot;,&quot;codigo&quot;:&quot;PRE2022A2&quot;,&quot;codigoenv&quot;:&quot;IDN-01&quot;,&quot;codpago&quot;:&quot;CONT&quot;,&quot;codpais&quot;:&quot;PAN&quot;,&quot;codpostal&quot;:&quot;&quot;,&quot;codserie&quot;:&quot;A&quot;,&quot;codtrans&quot;:null,&quot;direccion&quot;:&quot;&quot;,&quot;dtopor1&quot;:0,&quot;dtopor2&quot;:0,&quot;editable&quot;:true,&quot;fecha&quot;:&quot;2022-10-04&quot;,&quot;femail&quot;:null,&quot;finoferta&quot;:null,&quot;hora&quot;:&quot;10:02:40&quot;,&quot;idcontactoenv&quot;:&quot;2&quot;,&quot;idcontactofact&quot;:2,&quot;idempresa&quot;:1,&quot;idestado&quot;:1,&quot;idpresupuesto&quot;:&quot;2&quot;,&quot;irpf&quot;:0,&quot;neto&quot;:72.56,&quot;netosindto&quot;:72.56,&quot;nick&quot;:&quot;admin&quot;,&quot;nombrecliente&quot;:&quot;Gloria Camargo&quot;,&quot;numero&quot;:&quot;2&quot;,&quot;numero2&quot;:&quot;&quot;,&quot;observaciones&quot;:&quot;&quot;,&quot;provincia&quot;:&quot;&quot;,&quot;tasaconv&quot;:0,&quot;total&quot;:74.14,&quot;totalcoste&quot;:0,&quot;totaleuros&quot;:0,&quot;totalirpf&quot;:0,&quot;totaliva&quot;:1.58,&quot;totalrecargo&quot;:0,&quot;totalsuplidos&quot;:0},&quot;uri&quot;:&quot;\\/EditPresupuestoCliente&quot;,&quot;nick&quot;:&quot;admin&quot;}', 13, NULL, '201.227.218.109', 'info', 'Actualizado PresupuestoCliente (2) PRE2022A2', 'PresupuestoCliente', '2', 'admin', '2022-10-04 15:10:57', '/EditPresupuestoCliente'),
('audit', '{&quot;%model%&quot;:&quot;PresupuestoCliente&quot;,&quot;%key%&quot;:2,&quot;%desc%&quot;:&quot;PRE2022A2&quot;,&quot;model-class&quot;:&quot;PresupuestoCliente&quot;,&quot;model-code&quot;:2,&quot;model-data&quot;:{&quot;apartado&quot;:&quot;&quot;,&quot;cifnif&quot;:&quot;xxxx-0000&quot;,&quot;ciudad&quot;:&quot;&quot;,&quot;codagente&quot;:null,&quot;codalmacen&quot;:&quot;ALG&quot;,&quot;codcliente&quot;:&quot;2&quot;,&quot;coddivisa&quot;:&quot;USD&quot;,&quot;codejercicio&quot;:&quot;2022&quot;,&quot;codigo&quot;:&quot;PRE2022A2&quot;,&quot;codigoenv&quot;:&quot;IDN-01&quot;,&quot;codpago&quot;:&quot;CONT&quot;,&quot;codpais&quot;:&quot;PAN&quot;,&quot;codpostal&quot;:&quot;&quot;,&quot;codserie&quot;:&quot;A&quot;,&quot;codtrans&quot;:null,&quot;direccion&quot;:&quot;&quot;,&quot;dtopor1&quot;:0,&quot;dtopor2&quot;:0,&quot;editable&quot;:true,&quot;fecha&quot;:&quot;2022-10-04&quot;,&quot;femail&quot;:null,&quot;finoferta&quot;:null,&quot;hora&quot;:&quot;10:02:40&quot;,&quot;idcontactoenv&quot;:&quot;2&quot;,&quot;idcontactofact&quot;:2,&quot;idempresa&quot;:1,&quot;idestado&quot;:1,&quot;idpresupuesto&quot;:2,&quot;irpf&quot;:0,&quot;neto&quot;:72.56,&quot;netosindto&quot;:72.56,&quot;nick&quot;:&quot;admin&quot;,&quot;nombrecliente&quot;:&quot;Gloria Camargo&quot;,&quot;numero&quot;:&quot;2&quot;,&quot;numero2&quot;:&quot;&quot;,&quot;observaciones&quot;:&quot;&quot;,&quot;provincia&quot;:&quot;&quot;,&quot;tasaconv&quot;:0,&quot;total&quot;:74.14,&quot;totalcoste&quot;:0,&quot;totaleuros&quot;:0,&quot;totalirpf&quot;:0,&quot;totaliva&quot;:1.58,&quot;totalrecargo&quot;:0,&quot;totalsuplidos&quot;:0},&quot;uri&quot;:&quot;\\/EditPresupuestoCliente&quot;,&quot;nick&quot;:&quot;admin&quot;}', 14, NULL, '201.227.218.109', 'info', 'Actualizado PresupuestoCliente (2) PRE2022A2', 'PresupuestoCliente', '2', 'admin', '2022-10-04 15:12:23', '/EditPresupuestoCliente'),
('audit', '{&quot;%model%&quot;:&quot;PresupuestoCliente&quot;,&quot;%key%&quot;:2,&quot;%desc%&quot;:&quot;PRE2022A2&quot;,&quot;model-class&quot;:&quot;PresupuestoCliente&quot;,&quot;model-code&quot;:2,&quot;model-data&quot;:{&quot;apartado&quot;:&quot;&quot;,&quot;cifnif&quot;:&quot;xxxx-0000&quot;,&quot;ciudad&quot;:&quot;&quot;,&quot;codagente&quot;:null,&quot;codalmacen&quot;:&quot;ALG&quot;,&quot;codcliente&quot;:&quot;2&quot;,&quot;coddivisa&quot;:&quot;USD&quot;,&quot;codejercicio&quot;:&quot;2022&quot;,&quot;codigo&quot;:&quot;PRE2022A2&quot;,&quot;codigoenv&quot;:&quot;IDN-01&quot;,&quot;codpago&quot;:&quot;CONT&quot;,&quot;codpais&quot;:&quot;PAN&quot;,&quot;codpostal&quot;:&quot;&quot;,&quot;codserie&quot;:&quot;A&quot;,&quot;codtrans&quot;:null,&quot;direccion&quot;:&quot;&quot;,&quot;dtopor1&quot;:0,&quot;dtopor2&quot;:0,&quot;editable&quot;:true,&quot;fecha&quot;:&quot;2022-10-04&quot;,&quot;femail&quot;:null,&quot;finoferta&quot;:null,&quot;hora&quot;:&quot;10:02:40&quot;,&quot;idcontactoenv&quot;:&quot;2&quot;,&quot;idcontactofact&quot;:2,&quot;idempresa&quot;:1,&quot;idestado&quot;:1,&quot;idpresupuesto&quot;:2,&quot;irpf&quot;:0,&quot;neto&quot;:72.56,&quot;netosindto&quot;:72.56,&quot;nick&quot;:&quot;admin&quot;,&quot;nombrecliente&quot;:&quot;Gloria Camargo&quot;,&quot;numero&quot;:&quot;2&quot;,&quot;numero2&quot;:&quot;&quot;,&quot;observaciones&quot;:&quot;&quot;,&quot;provincia&quot;:&quot;&quot;,&quot;tasaconv&quot;:0,&quot;total&quot;:74.14,&quot;totalcoste&quot;:0,&quot;totaleuros&quot;:0,&quot;totalirpf&quot;:0,&quot;totaliva&quot;:1.58,&quot;totalrecargo&quot;:0,&quot;totalsuplidos&quot;:0},&quot;uri&quot;:&quot;\\/EditPresupuestoCliente&quot;,&quot;nick&quot;:&quot;admin&quot;}', 15, NULL, '201.227.218.109', 'info', 'Actualizado PresupuestoCliente (2) PRE2022A2', 'PresupuestoCliente', '2', 'admin', '2022-10-04 16:03:52', '/EditPresupuestoCliente'),
('audit', '{&quot;%model%&quot;:&quot;PresupuestoCliente&quot;,&quot;%key%&quot;:2,&quot;%desc%&quot;:&quot;PRE2022A2&quot;,&quot;model-class&quot;:&quot;PresupuestoCliente&quot;,&quot;model-code&quot;:2,&quot;model-data&quot;:{&quot;apartado&quot;:&quot;&quot;,&quot;cifnif&quot;:&quot;xxxx-0000&quot;,&quot;ciudad&quot;:&quot;&quot;,&quot;codagente&quot;:null,&quot;codalmacen&quot;:&quot;ALG&quot;,&quot;codcliente&quot;:&quot;2&quot;,&quot;coddivisa&quot;:&quot;USD&quot;,&quot;codejercicio&quot;:&quot;2022&quot;,&quot;codigo&quot;:&quot;PRE2022A2&quot;,&quot;codigoenv&quot;:&quot;IDN-01&quot;,&quot;codpago&quot;:&quot;CONT&quot;,&quot;codpais&quot;:&quot;PAN&quot;,&quot;codpostal&quot;:&quot;&quot;,&quot;codserie&quot;:&quot;A&quot;,&quot;codtrans&quot;:null,&quot;direccion&quot;:&quot;&quot;,&quot;dtopor1&quot;:0,&quot;dtopor2&quot;:0,&quot;editable&quot;:true,&quot;fecha&quot;:&quot;2022-10-04&quot;,&quot;femail&quot;:null,&quot;finoferta&quot;:null,&quot;hora&quot;:&quot;10:02:40&quot;,&quot;idcontactoenv&quot;:&quot;2&quot;,&quot;idcontactofact&quot;:2,&quot;idempresa&quot;:1,&quot;idestado&quot;:1,&quot;idpresupuesto&quot;:2,&quot;irpf&quot;:0,&quot;neto&quot;:67.82,&quot;netosindto&quot;:67.82,&quot;nick&quot;:&quot;admin&quot;,&quot;nombrecliente&quot;:&quot;Gloria Camargo&quot;,&quot;numero&quot;:&quot;2&quot;,&quot;numero2&quot;:&quot;&quot;,&quot;observaciones&quot;:&quot;&quot;,&quot;provincia&quot;:&quot;&quot;,&quot;tasaconv&quot;:0,&quot;total&quot;:69.07,&quot;totalcoste&quot;:0,&quot;totaleuros&quot;:0,&quot;totalirpf&quot;:0,&quot;totaliva&quot;:1.25,&quot;totalrecargo&quot;:0,&quot;totalsuplidos&quot;:0},&quot;uri&quot;:&quot;\\/EditPresupuestoCliente&quot;,&quot;nick&quot;:&quot;admin&quot;}', 16, NULL, '201.227.218.109', 'info', 'Actualizado PresupuestoCliente (2) PRE2022A2', 'PresupuestoCliente', '2', 'admin', '2022-10-04 16:03:52', '/EditPresupuestoCliente'),
('audit', '{&quot;%model%&quot;:&quot;PresupuestoCliente&quot;,&quot;%key%&quot;:2,&quot;%desc%&quot;:&quot;PRE2022A2&quot;,&quot;model-class&quot;:&quot;PresupuestoCliente&quot;,&quot;model-code&quot;:2,&quot;model-data&quot;:{&quot;apartado&quot;:&quot;&quot;,&quot;cifnif&quot;:&quot;xxxx-0000&quot;,&quot;ciudad&quot;:&quot;&quot;,&quot;codagente&quot;:null,&quot;codalmacen&quot;:&quot;ALG&quot;,&quot;codcliente&quot;:&quot;2&quot;,&quot;coddivisa&quot;:&quot;USD&quot;,&quot;codejercicio&quot;:&quot;2022&quot;,&quot;codigo&quot;:&quot;PRE2022A2&quot;,&quot;codigoenv&quot;:&quot;IDN-01&quot;,&quot;codpago&quot;:&quot;CONT&quot;,&quot;codpais&quot;:&quot;PAN&quot;,&quot;codpostal&quot;:&quot;&quot;,&quot;codserie&quot;:&quot;A&quot;,&quot;codtrans&quot;:null,&quot;direccion&quot;:&quot;&quot;,&quot;dtopor1&quot;:0,&quot;dtopor2&quot;:0,&quot;editable&quot;:true,&quot;fecha&quot;:&quot;2022-10-04&quot;,&quot;femail&quot;:null,&quot;finoferta&quot;:null,&quot;hora&quot;:&quot;10:02:40&quot;,&quot;idcontactoenv&quot;:&quot;2&quot;,&quot;idcontactofact&quot;:2,&quot;idempresa&quot;:1,&quot;idestado&quot;:1,&quot;idpresupuesto&quot;:2,&quot;irpf&quot;:0,&quot;neto&quot;:67.82,&quot;netosindto&quot;:67.82,&quot;nick&quot;:&quot;admin&quot;,&quot;nombrecliente&quot;:&quot;Gloria Camargo&quot;,&quot;numero&quot;:&quot;2&quot;,&quot;numero2&quot;:&quot;&quot;,&quot;observaciones&quot;:&quot;&quot;,&quot;provincia&quot;:&quot;&quot;,&quot;tasaconv&quot;:0,&quot;total&quot;:69.07,&quot;totalcoste&quot;:0,&quot;totaleuros&quot;:0,&quot;totalirpf&quot;:0,&quot;totaliva&quot;:1.25,&quot;totalrecargo&quot;:0,&quot;totalsuplidos&quot;:0},&quot;uri&quot;:&quot;\\/EditPresupuestoCliente&quot;,&quot;nick&quot;:&quot;admin&quot;}', 17, NULL, '201.227.218.109', 'info', 'Actualizado PresupuestoCliente (2) PRE2022A2', 'PresupuestoCliente', '2', 'admin', '2022-10-04 16:04:39', '/EditPresupuestoCliente'),
('audit', '{&quot;%model%&quot;:&quot;PresupuestoCliente&quot;,&quot;%key%&quot;:2,&quot;%desc%&quot;:&quot;PRE2022A2&quot;,&quot;model-class&quot;:&quot;PresupuestoCliente&quot;,&quot;model-code&quot;:2,&quot;model-data&quot;:{&quot;apartado&quot;:&quot;&quot;,&quot;cifnif&quot;:&quot;xxxx-0000&quot;,&quot;ciudad&quot;:&quot;&quot;,&quot;codagente&quot;:null,&quot;codalmacen&quot;:&quot;ALG&quot;,&quot;codcliente&quot;:&quot;2&quot;,&quot;coddivisa&quot;:&quot;USD&quot;,&quot;codejercicio&quot;:&quot;2022&quot;,&quot;codigo&quot;:&quot;PRE2022A2&quot;,&quot;codigoenv&quot;:&quot;IDN-01&quot;,&quot;codpago&quot;:&quot;CONT&quot;,&quot;codpais&quot;:&quot;PAN&quot;,&quot;codpostal&quot;:&quot;&quot;,&quot;codserie&quot;:&quot;A&quot;,&quot;codtrans&quot;:null,&quot;direccion&quot;:&quot;&quot;,&quot;dtopor1&quot;:0,&quot;dtopor2&quot;:0,&quot;editable&quot;:true,&quot;fecha&quot;:&quot;2022-10-04&quot;,&quot;femail&quot;:null,&quot;finoferta&quot;:null,&quot;hora&quot;:&quot;10:02:40&quot;,&quot;idcontactoenv&quot;:&quot;2&quot;,&quot;idcontactofact&quot;:2,&quot;idempresa&quot;:1,&quot;idestado&quot;:1,&quot;idpresupuesto&quot;:2,&quot;irpf&quot;:0,&quot;neto&quot;:67.05,&quot;netosindto&quot;:67.05,&quot;nick&quot;:&quot;admin&quot;,&quot;nombrecliente&quot;:&quot;Gloria Camargo&quot;,&quot;numero&quot;:&quot;2&quot;,&quot;numero2&quot;:&quot;&quot;,&quot;observaciones&quot;:&quot;&quot;,&quot;provincia&quot;:&quot;&quot;,&quot;tasaconv&quot;:0,&quot;total&quot;:68.24,&quot;totalcoste&quot;:0,&quot;totaleuros&quot;:0,&quot;totalirpf&quot;:0,&quot;totaliva&quot;:1.19,&quot;totalrecargo&quot;:0,&quot;totalsuplidos&quot;:0},&quot;uri&quot;:&quot;\\/EditPresupuestoCliente&quot;,&quot;nick&quot;:&quot;admin&quot;}', 18, NULL, '201.227.218.109', 'info', 'Actualizado PresupuestoCliente (2) PRE2022A2', 'PresupuestoCliente', '2', 'admin', '2022-10-04 16:04:39', '/EditPresupuestoCliente'),
('audit', '{&quot;%model%&quot;:&quot;PresupuestoCliente&quot;,&quot;%key%&quot;:2,&quot;%desc%&quot;:&quot;PRE2022A2&quot;,&quot;model-class&quot;:&quot;PresupuestoCliente&quot;,&quot;model-code&quot;:2,&quot;model-data&quot;:{&quot;apartado&quot;:&quot;&quot;,&quot;cifnif&quot;:&quot;xxxx-0000&quot;,&quot;ciudad&quot;:&quot;&quot;,&quot;codagente&quot;:null,&quot;codalmacen&quot;:&quot;ALG&quot;,&quot;codcliente&quot;:&quot;2&quot;,&quot;coddivisa&quot;:&quot;USD&quot;,&quot;codejercicio&quot;:&quot;2022&quot;,&quot;codigo&quot;:&quot;PRE2022A2&quot;,&quot;codigoenv&quot;:&quot;IDN-01&quot;,&quot;codpago&quot;:&quot;CONT&quot;,&quot;codpais&quot;:&quot;PAN&quot;,&quot;codpostal&quot;:&quot;&quot;,&quot;codserie&quot;:&quot;A&quot;,&quot;codtrans&quot;:null,&quot;direccion&quot;:&quot;&quot;,&quot;dtopor1&quot;:0,&quot;dtopor2&quot;:0,&quot;editable&quot;:true,&quot;fecha&quot;:&quot;2022-10-04&quot;,&quot;femail&quot;:null,&quot;finoferta&quot;:null,&quot;hora&quot;:&quot;10:02:40&quot;,&quot;idcontactoenv&quot;:&quot;2&quot;,&quot;idcontactofact&quot;:2,&quot;idempresa&quot;:1,&quot;idestado&quot;:1,&quot;idpresupuesto&quot;:2,&quot;irpf&quot;:0,&quot;neto&quot;:67.05,&quot;netosindto&quot;:67.05,&quot;nick&quot;:&quot;admin&quot;,&quot;nombrecliente&quot;:&quot;Gloria Camargo&quot;,&quot;numero&quot;:&quot;2&quot;,&quot;numero2&quot;:&quot;&quot;,&quot;observaciones&quot;:&quot;&quot;,&quot;provincia&quot;:&quot;&quot;,&quot;tasaconv&quot;:0,&quot;total&quot;:68.24,&quot;totalcoste&quot;:0,&quot;totaleuros&quot;:0,&quot;totalirpf&quot;:0,&quot;totaliva&quot;:1.19,&quot;totalrecargo&quot;:0,&quot;totalsuplidos&quot;:0},&quot;uri&quot;:&quot;\\/EditPresupuestoCliente&quot;,&quot;nick&quot;:&quot;admin&quot;}', 19, NULL, '201.227.218.109', 'info', 'Actualizado PresupuestoCliente (2) PRE2022A2', 'PresupuestoCliente', '2', 'admin', '2022-10-04 16:05:13', '/EditPresupuestoCliente'),
('audit', '{&quot;%model%&quot;:&quot;PresupuestoCliente&quot;,&quot;%key%&quot;:2,&quot;%desc%&quot;:&quot;PRE2022A2&quot;,&quot;model-class&quot;:&quot;PresupuestoCliente&quot;,&quot;model-code&quot;:2,&quot;model-data&quot;:{&quot;apartado&quot;:&quot;&quot;,&quot;cifnif&quot;:&quot;xxxx-0000&quot;,&quot;ciudad&quot;:&quot;&quot;,&quot;codagente&quot;:null,&quot;codalmacen&quot;:&quot;ALG&quot;,&quot;codcliente&quot;:&quot;2&quot;,&quot;coddivisa&quot;:&quot;USD&quot;,&quot;codejercicio&quot;:&quot;2022&quot;,&quot;codigo&quot;:&quot;PRE2022A2&quot;,&quot;codigoenv&quot;:&quot;IDN-01&quot;,&quot;codpago&quot;:&quot;CONT&quot;,&quot;codpais&quot;:&quot;PAN&quot;,&quot;codpostal&quot;:&quot;&quot;,&quot;codserie&quot;:&quot;A&quot;,&quot;codtrans&quot;:null,&quot;direccion&quot;:&quot;&quot;,&quot;dtopor1&quot;:0,&quot;dtopor2&quot;:0,&quot;editable&quot;:true,&quot;fecha&quot;:&quot;2022-10-04&quot;,&quot;femail&quot;:null,&quot;finoferta&quot;:null,&quot;hora&quot;:&quot;10:02:40&quot;,&quot;idcontactoenv&quot;:&quot;2&quot;,&quot;idcontactofact&quot;:2,&quot;idempresa&quot;:1,&quot;idestado&quot;:1,&quot;idpresupuesto&quot;:2,&quot;irpf&quot;:0,&quot;neto&quot;:67.05,&quot;netosindto&quot;:67.05,&quot;nick&quot;:&quot;admin&quot;,&quot;nombrecliente&quot;:&quot;Gloria Camargo&quot;,&quot;numero&quot;:&quot;2&quot;,&quot;numero2&quot;:&quot;&quot;,&quot;observaciones&quot;:&quot;Esto no es una factura.&quot;,&quot;provincia&quot;:&quot;&quot;,&quot;tasaconv&quot;:0,&quot;total&quot;:68.24,&quot;totalcoste&quot;:0,&quot;totaleuros&quot;:0,&quot;totalirpf&quot;:0,&quot;totaliva&quot;:1.19,&quot;totalrecargo&quot;:0,&quot;totalsuplidos&quot;:0},&quot;uri&quot;:&quot;\\/EditPresupuestoCliente&quot;,&quot;nick&quot;:&quot;admin&quot;}', 20, NULL, '201.227.218.109', 'info', 'Actualizado PresupuestoCliente (2) PRE2022A2', 'PresupuestoCliente', '2', 'admin', '2022-10-04 16:08:48', '/EditPresupuestoCliente'),
('master', '{&quot;uri&quot;:&quot;\\/api\\/3&quot;}', 21, NULL, '::1', 'critical', 'Por motivos de seguridad se ha bloqueado temporalmente el acceso desde su IP.', NULL, NULL, NULL, '2022-10-06 05:17:17', '/api/3'),
('master', '{&quot;uri&quot;:&quot;\\/api\\/3&quot;}', 22, NULL, '::1', 'critical', 'Por motivos de seguridad se ha bloqueado temporalmente el acceso desde su IP.', NULL, NULL, NULL, '2022-10-06 05:18:02', '/api/3'),
('master', '{&quot;uri&quot;:&quot;\\/core\\/&quot;,&quot;nick&quot;:&quot;admin&quot;}', 23, NULL, '::1', 'critical', 'Controlador no encontrado', NULL, NULL, 'admin', '2022-10-08 23:09:09', '/core/'),
('master', '{&quot;uri&quot;:&quot;\\/3\\/api\\/&quot;}', 24, NULL, '::1', 'critical', 'Controlador no encontrado', NULL, NULL, NULL, '2022-10-09 06:31:54', '/3/api/'),
('master', '{&quot;uri&quot;:&quot;\\/3\\/api\\/&quot;,&quot;nick&quot;:&quot;admin&quot;}', 25, NULL, '::1', 'critical', 'Controlador no encontrado', NULL, NULL, 'admin', '2022-10-09 06:32:15', '/3/api/'),
('master', '{&quot;uri&quot;:&quot;\\/api\\/3&quot;}', 26, NULL, '::1', 'critical', 'Por motivos de seguridad se ha bloqueado temporalmente el acceso desde su IP.', NULL, NULL, NULL, '2022-10-09 06:32:36', '/api/3'),
('master', '{&quot;uri&quot;:&quot;\\/api\\/3\\/&quot;}', 27, NULL, '::1', 'critical', 'Por motivos de seguridad se ha bloqueado temporalmente el acceso desde su IP.', NULL, NULL, NULL, '2022-10-09 06:32:38', '/api/3/'),
('master', '{&quot;uri&quot;:&quot;\\/&quot;}', 28, NULL, '::1', 'critical', 'Por motivos de seguridad se ha bloqueado temporalmente el acceso desde su IP.', NULL, NULL, NULL, '2022-10-09 06:32:57', '/'),
('master', '{&quot;uri&quot;:&quot;\\/3\\/api\\/&quot;}', 29, NULL, '::1', 'critical', 'Por motivos de seguridad se ha bloqueado temporalmente el acceso desde su IP.', NULL, NULL, NULL, '2022-10-09 06:33:07', '/3/api/'),
('master', '{&quot;uri&quot;:&quot;\\/&quot;}', 30, NULL, '::1', 'critical', 'Por motivos de seguridad se ha bloqueado temporalmente el acceso desde su IP.', NULL, NULL, NULL, '2022-10-09 06:33:13', '/'),
('master', '{&quot;uri&quot;:&quot;\\/&quot;}', 31, NULL, '::1', 'critical', 'Por motivos de seguridad se ha bloqueado temporalmente el acceso desde su IP.', NULL, NULL, NULL, '2022-10-09 06:33:22', '/'),
('audit', '{&quot;%model%&quot;:&quot;PresupuestoCliente&quot;,&quot;%key%&quot;:2,&quot;%desc%&quot;:&quot;PRE2022A2&quot;,&quot;model-class&quot;:&quot;PresupuestoCliente&quot;,&quot;model-code&quot;:2,&quot;model-data&quot;:{&quot;apartado&quot;:&quot;&quot;,&quot;cifnif&quot;:&quot;xxxx-0000&quot;,&quot;ciudad&quot;:&quot;&quot;,&quot;codagente&quot;:null,&quot;codalmacen&quot;:&quot;ALG&quot;,&quot;codcliente&quot;:&quot;2&quot;,&quot;coddivisa&quot;:&quot;USD&quot;,&quot;codejercicio&quot;:&quot;2022&quot;,&quot;codigo&quot;:&quot;PRE2022A2&quot;,&quot;codigoenv&quot;:&quot;IDN-01&quot;,&quot;codpago&quot;:&quot;CONT&quot;,&quot;codpais&quot;:&quot;PAN&quot;,&quot;codpostal&quot;:&quot;&quot;,&quot;codserie&quot;:&quot;A&quot;,&quot;codtrans&quot;:null,&quot;direccion&quot;:&quot;&quot;,&quot;dtopor1&quot;:0,&quot;dtopor2&quot;:0,&quot;editable&quot;:true,&quot;fecha&quot;:&quot;04-10-2022&quot;,&quot;femail&quot;:&quot;09-10-2022&quot;,&quot;finoferta&quot;:null,&quot;hora&quot;:&quot;10:02:40&quot;,&quot;idcontactoenv&quot;:2,&quot;idcontactofact&quot;:2,&quot;idempresa&quot;:1,&quot;idestado&quot;:1,&quot;idpresupuesto&quot;:2,&quot;irpf&quot;:0,&quot;neto&quot;:67.05,&quot;netosindto&quot;:67.05,&quot;nick&quot;:&quot;admin&quot;,&quot;nombrecliente&quot;:&quot;Gloria Camargo&quot;,&quot;numero&quot;:&quot;2&quot;,&quot;numero2&quot;:&quot;&quot;,&quot;observaciones&quot;:&quot;Esto no es una factura.&quot;,&quot;provincia&quot;:&quot;&quot;,&quot;tasaconv&quot;:0,&quot;total&quot;:68.24,&quot;totalcoste&quot;:0,&quot;totaleuros&quot;:0,&quot;totalirpf&quot;:0,&quot;totaliva&quot;:1.19,&quot;totalrecargo&quot;:0,&quot;totalsuplidos&quot;:0},&quot;uri&quot;:&quot;\\/SendMail&quot;,&quot;nick&quot;:&quot;admin&quot;}', 32, NULL, '190.32.163.248', 'info', 'Actualizado PresupuestoCliente (2) PRE2022A2', 'PresupuestoCliente', '2', 'admin', '2022-10-09 20:35:16', '/SendMail'),
('audit', '{&quot;%model%&quot;:&quot;PresupuestoCliente&quot;,&quot;%key%&quot;:2,&quot;%desc%&quot;:&quot;PRE2022A2&quot;,&quot;model-class&quot;:&quot;PresupuestoCliente&quot;,&quot;model-code&quot;:2,&quot;model-data&quot;:{&quot;apartado&quot;:&quot;&quot;,&quot;cifnif&quot;:&quot;xxxx-0000&quot;,&quot;ciudad&quot;:&quot;&quot;,&quot;codagente&quot;:null,&quot;codalmacen&quot;:&quot;ALG&quot;,&quot;codcliente&quot;:&quot;2&quot;,&quot;coddivisa&quot;:&quot;USD&quot;,&quot;codejercicio&quot;:&quot;2022&quot;,&quot;codigo&quot;:&quot;PRE2022A2&quot;,&quot;codigoenv&quot;:&quot;IDN-01&quot;,&quot;codpago&quot;:&quot;CONT&quot;,&quot;codpais&quot;:&quot;PAN&quot;,&quot;codpostal&quot;:&quot;&quot;,&quot;codserie&quot;:&quot;A&quot;,&quot;codtrans&quot;:null,&quot;direccion&quot;:&quot;&quot;,&quot;dtopor1&quot;:0,&quot;dtopor2&quot;:0,&quot;editable&quot;:true,&quot;fecha&quot;:&quot;04-10-2022&quot;,&quot;femail&quot;:&quot;09-10-2022&quot;,&quot;finoferta&quot;:null,&quot;hora&quot;:&quot;10:02:40&quot;,&quot;idcontactoenv&quot;:2,&quot;idcontactofact&quot;:2,&quot;idempresa&quot;:1,&quot;idestado&quot;:1,&quot;idpresupuesto&quot;:2,&quot;irpf&quot;:0,&quot;neto&quot;:67.05,&quot;netosindto&quot;:67.05,&quot;nick&quot;:&quot;admin&quot;,&quot;nombrecliente&quot;:&quot;Gloria Camargo&quot;,&quot;numero&quot;:&quot;2&quot;,&quot;numero2&quot;:&quot;&quot;,&quot;observaciones&quot;:&quot;Esto no es una factura.&quot;,&quot;provincia&quot;:&quot;&quot;,&quot;tasaconv&quot;:0,&quot;total&quot;:68.24,&quot;totalcoste&quot;:0,&quot;totaleuros&quot;:0,&quot;totalirpf&quot;:0,&quot;totaliva&quot;:1.19,&quot;totalrecargo&quot;:0,&quot;totalsuplidos&quot;:0},&quot;uri&quot;:&quot;\\/SendMail&quot;,&quot;nick&quot;:&quot;admin&quot;}', 33, NULL, '190.32.163.248', 'info', 'Actualizado PresupuestoCliente (2) PRE2022A2', 'PresupuestoCliente', '2', 'admin', '2022-10-09 23:58:48', '/SendMail'),
('audit', '{&quot;%model%&quot;:&quot;FacturaCliente&quot;,&quot;%key%&quot;:&quot;2&quot;,&quot;%desc%&quot;:&quot;FAC2022A2&quot;,&quot;model-class&quot;:&quot;FacturaCliente&quot;,&quot;model-code&quot;:&quot;2&quot;,&quot;model-data&quot;:{&quot;apartado&quot;:&quot;&quot;,&quot;cifnif&quot;:&quot;00000-xxxx&quot;,&quot;ciudad&quot;:&quot;&quot;,&quot;codagente&quot;:null,&quot;codalmacen&quot;:&quot;ALG&quot;,&quot;codcliente&quot;:&quot;3&quot;,&quot;coddivisa&quot;:&quot;USD&quot;,&quot;codejercicio&quot;:&quot;2022&quot;,&quot;codigo&quot;:&quot;FAC2022A2&quot;,&quot;codigoenv&quot;:&quot;&quot;,&quot;codigorect&quot;:null,&quot;codpago&quot;:&quot;CONT&quot;,&quot;codpais&quot;:&quot;PAN&quot;,&quot;codpostal&quot;:&quot;&quot;,&quot;codserie&quot;:&quot;A&quot;,&quot;codtrans&quot;:null,&quot;direccion&quot;:&quot;&quot;,&quot;dtopor1&quot;:0,&quot;dtopor2&quot;:0,&quot;editable&quot;:true,&quot;fecha&quot;:&quot;2022-10-10&quot;,&quot;femail&quot;:null,&quot;hora&quot;:&quot;11:05:28&quot;,&quot;idasiento&quot;:null,&quot;idcontactoenv&quot;:null,&quot;idcontactofact&quot;:3,&quot;idempresa&quot;:1,&quot;idestado&quot;:10,&quot;idfactura&quot;:&quot;2&quot;,&quot;idfacturarect&quot;:null,&quot;irpf&quot;:0,&quot;neto&quot;:280,&quot;netosindto&quot;:280,&quot;nick&quot;:&quot;admin&quot;,&quot;nombrecliente&quot;:&quot;000000-xxxx&quot;,&quot;numero&quot;:&quot;2&quot;,&quot;numero2&quot;:&quot;&quot;,&quot;observaciones&quot;:&quot;Blusa estilizada hecha en punto de cruz y mundillo.&quot;,&quot;pagada&quot;:false,&quot;provincia&quot;:&quot;&quot;,&quot;tasaconv&quot;:1.129,&quot;total&quot;:280,&quot;totalcoste&quot;:0,&quot;totaleuros&quot;:248.00709,&quot;totalirpf&quot;:0,&quot;totaliva&quot;:0,&quot;totalrecargo&quot;:0,&quot;totalsuplidos&quot;:0},&quot;uri&quot;:&quot;\\/EditFacturaCliente&quot;,&quot;nick&quot;:&quot;admin&quot;}', 34, NULL, '::1', 'info', 'Actualizado FacturaCliente (2) FAC2022A2', 'FacturaCliente', '2', 'admin', '2022-10-10 16:09:46', '/EditFacturaCliente'),
('audit', '{&quot;%model%&quot;:&quot;FacturaCliente&quot;,&quot;%key%&quot;:2,&quot;%desc%&quot;:&quot;FAC2022A2&quot;,&quot;model-class&quot;:&quot;FacturaCliente&quot;,&quot;model-code&quot;:2,&quot;model-data&quot;:{&quot;apartado&quot;:&quot;&quot;,&quot;cifnif&quot;:&quot;00000-xxxx&quot;,&quot;ciudad&quot;:&quot;&quot;,&quot;codagente&quot;:null,&quot;codalmacen&quot;:&quot;ALG&quot;,&quot;codcliente&quot;:&quot;3&quot;,&quot;coddivisa&quot;:&quot;USD&quot;,&quot;codejercicio&quot;:&quot;2022&quot;,&quot;codigo&quot;:&quot;FAC2022A2&quot;,&quot;codigoenv&quot;:&quot;&quot;,&quot;codigorect&quot;:null,&quot;codpago&quot;:&quot;CONT&quot;,&quot;codpais&quot;:&quot;PAN&quot;,&quot;codpostal&quot;:&quot;&quot;,&quot;codserie&quot;:&quot;A&quot;,&quot;codtrans&quot;:null,&quot;direccion&quot;:&quot;&quot;,&quot;dtopor1&quot;:0,&quot;dtopor2&quot;:0,&quot;editable&quot;:true,&quot;fecha&quot;:&quot;2022-10-10&quot;,&quot;femail&quot;:null,&quot;hora&quot;:&quot;11:05:28&quot;,&quot;idasiento&quot;:null,&quot;idcontactoenv&quot;:null,&quot;idcontactofact&quot;:3,&quot;idempresa&quot;:1,&quot;idestado&quot;:10,&quot;idfactura&quot;:2,&quot;idfacturarect&quot;:null,&quot;irpf&quot;:0,&quot;neto&quot;:280,&quot;netosindto&quot;:280,&quot;nick&quot;:&quot;admin&quot;,&quot;nombrecliente&quot;:&quot;000000-xxxx&quot;,&quot;numero&quot;:&quot;2&quot;,&quot;numero2&quot;:&quot;&quot;,&quot;observaciones&quot;:&quot;Blusa estilizada hecha en punto de cruz y mundillo.&quot;,&quot;pagada&quot;:false,&quot;provincia&quot;:&quot;&quot;,&quot;tasaconv&quot;:1.129,&quot;total&quot;:280,&quot;totalcoste&quot;:0,&quot;totaleuros&quot;:248.00709,&quot;totalirpf&quot;:0,&quot;totaliva&quot;:0,&quot;totalrecargo&quot;:0,&quot;totalsuplidos&quot;:0},&quot;uri&quot;:&quot;\\/EditFacturaCliente&quot;,&quot;nick&quot;:&quot;admin&quot;}', 35, NULL, '::1', 'info', 'Actualizado FacturaCliente (2) FAC2022A2', 'FacturaCliente', '2', 'admin', '2022-10-10 16:10:02', '/EditFacturaCliente'),
('audit', '{&quot;%model%&quot;:&quot;FacturaCliente&quot;,&quot;%key%&quot;:2,&quot;%desc%&quot;:&quot;FAC2022A2&quot;,&quot;model-class&quot;:&quot;FacturaCliente&quot;,&quot;model-code&quot;:2,&quot;model-data&quot;:{&quot;apartado&quot;:&quot;&quot;,&quot;cifnif&quot;:&quot;00000-xxxx&quot;,&quot;ciudad&quot;:&quot;&quot;,&quot;codagente&quot;:null,&quot;codalmacen&quot;:&quot;ALG&quot;,&quot;codcliente&quot;:&quot;3&quot;,&quot;coddivisa&quot;:&quot;USD&quot;,&quot;codejercicio&quot;:&quot;2022&quot;,&quot;codigo&quot;:&quot;FAC2022A2&quot;,&quot;codigoenv&quot;:&quot;&quot;,&quot;codigorect&quot;:null,&quot;codpago&quot;:&quot;CONT&quot;,&quot;codpais&quot;:&quot;PAN&quot;,&quot;codpostal&quot;:&quot;&quot;,&quot;codserie&quot;:&quot;A&quot;,&quot;codtrans&quot;:null,&quot;direccion&quot;:&quot;&quot;,&quot;dtopor1&quot;:0,&quot;dtopor2&quot;:0,&quot;editable&quot;:false,&quot;fecha&quot;:&quot;2022-10-10&quot;,&quot;femail&quot;:null,&quot;hora&quot;:&quot;11:05:28&quot;,&quot;idasiento&quot;:null,&quot;idcontactoenv&quot;:null,&quot;idcontactofact&quot;:3,&quot;idempresa&quot;:1,&quot;idestado&quot;:11,&quot;idfactura&quot;:2,&quot;idfacturarect&quot;:null,&quot;irpf&quot;:0,&quot;neto&quot;:280,&quot;netosindto&quot;:280,&quot;nick&quot;:&quot;admin&quot;,&quot;nombrecliente&quot;:&quot;000000-xxxx&quot;,&quot;numero&quot;:&quot;2&quot;,&quot;numero2&quot;:&quot;&quot;,&quot;observaciones&quot;:&quot;Blusa estilizada hecha en punto de cruz y mundillo.&quot;,&quot;pagada&quot;:false,&quot;provincia&quot;:&quot;&quot;,&quot;tasaconv&quot;:1.129,&quot;total&quot;:280,&quot;totalcoste&quot;:0,&quot;totaleuros&quot;:248.00709,&quot;totalirpf&quot;:0,&quot;totaliva&quot;:0,&quot;totalrecargo&quot;:0,&quot;totalsuplidos&quot;:0},&quot;uri&quot;:&quot;\\/EditFacturaCliente&quot;,&quot;nick&quot;:&quot;admin&quot;}', 36, NULL, '::1', 'info', 'Actualizado FacturaCliente (2) FAC2022A2', 'FacturaCliente', '2', 'admin', '2022-10-10 16:10:02', '/EditFacturaCliente'),
('audit', '{&quot;%model%&quot;:&quot;FacturaCliente&quot;,&quot;%key%&quot;:2,&quot;%desc%&quot;:&quot;FAC2022A2&quot;,&quot;model-class&quot;:&quot;FacturaCliente&quot;,&quot;model-code&quot;:2,&quot;model-data&quot;:{&quot;apartado&quot;:&quot;&quot;,&quot;cifnif&quot;:&quot;00000-xxxx&quot;,&quot;ciudad&quot;:&quot;&quot;,&quot;codagente&quot;:null,&quot;codalmacen&quot;:&quot;ALG&quot;,&quot;codcliente&quot;:&quot;3&quot;,&quot;coddivisa&quot;:&quot;USD&quot;,&quot;codejercicio&quot;:&quot;2022&quot;,&quot;codigo&quot;:&quot;FAC2022A2&quot;,&quot;codigoenv&quot;:&quot;&quot;,&quot;codigorect&quot;:null,&quot;codpago&quot;:&quot;CONT&quot;,&quot;codpais&quot;:&quot;PAN&quot;,&quot;codpostal&quot;:&quot;&quot;,&quot;codserie&quot;:&quot;A&quot;,&quot;codtrans&quot;:null,&quot;direccion&quot;:&quot;&quot;,&quot;dtopor1&quot;:0,&quot;dtopor2&quot;:0,&quot;editable&quot;:false,&quot;fecha&quot;:&quot;10-10-2022&quot;,&quot;femail&quot;:&quot;10-10-2022&quot;,&quot;hora&quot;:&quot;11:05:28&quot;,&quot;idasiento&quot;:null,&quot;idcontactoenv&quot;:null,&quot;idcontactofact&quot;:3,&quot;idempresa&quot;:1,&quot;idestado&quot;:11,&quot;idfactura&quot;:2,&quot;idfacturarect&quot;:null,&quot;irpf&quot;:0,&quot;neto&quot;:280,&quot;netosindto&quot;:280,&quot;nick&quot;:&quot;admin&quot;,&quot;nombrecliente&quot;:&quot;000000-xxxx&quot;,&quot;numero&quot;:&quot;2&quot;,&quot;numero2&quot;:&quot;&quot;,&quot;observaciones&quot;:&quot;Blusa estilizada hecha en punto de cruz y mundillo.&quot;,&quot;pagada&quot;:false,&quot;provincia&quot;:&quot;&quot;,&quot;tasaconv&quot;:1.129,&quot;total&quot;:280,&quot;totalcoste&quot;:0,&quot;totaleuros&quot;:248.00709,&quot;totalirpf&quot;:0,&quot;totaliva&quot;:0,&quot;totalrecargo&quot;:0,&quot;totalsuplidos&quot;:0},&quot;uri&quot;:&quot;\\/SendMail&quot;,&quot;nick&quot;:&quot;admin&quot;}', 37, NULL, '::1', 'info', 'Actualizado FacturaCliente (2) FAC2022A2', 'FacturaCliente', '2', 'admin', '2022-10-10 16:10:36', '/SendMail'),
('audit', '{&quot;%model%&quot;:&quot;FacturaCliente&quot;,&quot;%key%&quot;:2,&quot;%desc%&quot;:&quot;FAC2022A2&quot;,&quot;model-class&quot;:&quot;FacturaCliente&quot;,&quot;model-code&quot;:2,&quot;model-data&quot;:{&quot;apartado&quot;:&quot;&quot;,&quot;cifnif&quot;:&quot;00000-xxxx&quot;,&quot;ciudad&quot;:&quot;&quot;,&quot;codagente&quot;:null,&quot;codalmacen&quot;:&quot;ALG&quot;,&quot;codcliente&quot;:&quot;3&quot;,&quot;coddivisa&quot;:&quot;USD&quot;,&quot;codejercicio&quot;:&quot;2022&quot;,&quot;codigo&quot;:&quot;FAC2022A2&quot;,&quot;codigoenv&quot;:&quot;&quot;,&quot;codigorect&quot;:null,&quot;codpago&quot;:&quot;CONT&quot;,&quot;codpais&quot;:&quot;PAN&quot;,&quot;codpostal&quot;:&quot;&quot;,&quot;codserie&quot;:&quot;A&quot;,&quot;codtrans&quot;:null,&quot;direccion&quot;:&quot;&quot;,&quot;dtopor1&quot;:0,&quot;dtopor2&quot;:0,&quot;editable&quot;:false,&quot;fecha&quot;:&quot;10-10-2022&quot;,&quot;femail&quot;:&quot;10-10-2022&quot;,&quot;hora&quot;:&quot;11:05:28&quot;,&quot;idasiento&quot;:null,&quot;idcontactoenv&quot;:null,&quot;idcontactofact&quot;:3,&quot;idempresa&quot;:1,&quot;idestado&quot;:11,&quot;idfactura&quot;:2,&quot;idfacturarect&quot;:null,&quot;irpf&quot;:0,&quot;neto&quot;:280,&quot;netosindto&quot;:280,&quot;nick&quot;:&quot;admin&quot;,&quot;nombrecliente&quot;:&quot;000000-xxxx&quot;,&quot;numero&quot;:&quot;2&quot;,&quot;numero2&quot;:&quot;&quot;,&quot;observaciones&quot;:&quot;Blusa estilizada hecha en punto de cruz y mundillo.&quot;,&quot;pagada&quot;:false,&quot;provincia&quot;:&quot;&quot;,&quot;tasaconv&quot;:1.129,&quot;total&quot;:280,&quot;totalcoste&quot;:0,&quot;totaleuros&quot;:248.00709,&quot;totalirpf&quot;:0,&quot;totaliva&quot;:0,&quot;totalrecargo&quot;:0,&quot;totalsuplidos&quot;:0},&quot;uri&quot;:&quot;\\/EditFacturaCliente&quot;,&quot;nick&quot;:&quot;admin&quot;}', 38, NULL, '::1', 'info', 'Actualizado FacturaCliente (2) FAC2022A2', 'FacturaCliente', '2', 'admin', '2022-10-10 16:13:41', '/EditFacturaCliente'),
('audit', '{&quot;%model%&quot;:&quot;FacturaCliente&quot;,&quot;%key%&quot;:&quot;3&quot;,&quot;%desc%&quot;:&quot;FAC2022A3&quot;,&quot;model-class&quot;:&quot;FacturaCliente&quot;,&quot;model-code&quot;:&quot;3&quot;,&quot;model-data&quot;:{&quot;apartado&quot;:&quot;&quot;,&quot;cifnif&quot;:&quot;xxxx-0000&quot;,&quot;ciudad&quot;:&quot;&quot;,&quot;codagente&quot;:null,&quot;codalmacen&quot;:&quot;ALG&quot;,&quot;codcliente&quot;:&quot;4&quot;,&quot;coddivisa&quot;:&quot;USD&quot;,&quot;codejercicio&quot;:&quot;2022&quot;,&quot;codigo&quot;:&quot;FAC2022A3&quot;,&quot;codigoenv&quot;:&quot;&quot;,&quot;codigorect&quot;:null,&quot;codpago&quot;:&quot;CONT&quot;,&quot;codpais&quot;:&quot;PAN&quot;,&quot;codpostal&quot;:&quot;&quot;,&quot;codserie&quot;:&quot;A&quot;,&quot;codtrans&quot;:null,&quot;direccion&quot;:&quot;&quot;,&quot;dtopor1&quot;:0,&quot;dtopor2&quot;:0,&quot;editable&quot;:true,&quot;fecha&quot;:&quot;2022-10-10&quot;,&quot;femail&quot;:null,&quot;hora&quot;:&quot;14:12:57&quot;,&quot;idasiento&quot;:null,&quot;idcontactoenv&quot;:null,&quot;idcontactofact&quot;:4,&quot;idempresa&quot;:1,&quot;idestado&quot;:10,&quot;idfactura&quot;:&quot;3&quot;,&quot;idfacturarect&quot;:null,&quot;irpf&quot;:0,&quot;neto&quot;:40,&quot;netosindto&quot;:40,&quot;nick&quot;:&quot;admin&quot;,&quot;nombrecliente&quot;:&quot;0000-xxxx&quot;,&quot;numero&quot;:&quot;3&quot;,&quot;numero2&quot;:&quot;&quot;,&quot;observaciones&quot;:&quot;Esta factura NO es una constancia de pago.\\nLa factura de pago es emitida una vez se reciba el pago total del art\\u00edculo.&quot;,&quot;pagada&quot;:false,&quot;provincia&quot;:&quot;&quot;,&quot;tasaconv&quot;:1.129,&quot;total&quot;:42.8,&quot;totalcoste&quot;:0,&quot;totaleuros&quot;:37.90965,&quot;totalirpf&quot;:0,&quot;totaliva&quot;:2.8,&quot;totalrecargo&quot;:0,&quot;totalsuplidos&quot;:0},&quot;uri&quot;:&quot;\\/EditFacturaCliente&quot;,&quot;nick&quot;:&quot;admin&quot;}', 39, NULL, '190.32.163.248', 'info', 'Actualizado FacturaCliente (3) FAC2022A3', 'FacturaCliente', '3', 'admin', '2022-10-10 19:15:35', '/EditFacturaCliente');
INSERT INTO `logs` (`channel`, `context`, `id`, `idcontacto`, `ip`, `level`, `message`, `model`, `modelcode`, `nick`, `time`, `uri`) VALUES
('audit', '{&quot;%model%&quot;:&quot;FacturaCliente&quot;,&quot;%key%&quot;:3,&quot;%desc%&quot;:&quot;FAC2022A3&quot;,&quot;model-class&quot;:&quot;FacturaCliente&quot;,&quot;model-code&quot;:3,&quot;model-data&quot;:{&quot;apartado&quot;:&quot;&quot;,&quot;cifnif&quot;:&quot;xxxx-0000&quot;,&quot;ciudad&quot;:&quot;&quot;,&quot;codagente&quot;:null,&quot;codalmacen&quot;:&quot;ALG&quot;,&quot;codcliente&quot;:&quot;4&quot;,&quot;coddivisa&quot;:&quot;USD&quot;,&quot;codejercicio&quot;:&quot;2022&quot;,&quot;codigo&quot;:&quot;FAC2022A3&quot;,&quot;codigoenv&quot;:&quot;&quot;,&quot;codigorect&quot;:null,&quot;codpago&quot;:&quot;CONT&quot;,&quot;codpais&quot;:&quot;PAN&quot;,&quot;codpostal&quot;:&quot;&quot;,&quot;codserie&quot;:&quot;A&quot;,&quot;codtrans&quot;:null,&quot;direccion&quot;:&quot;&quot;,&quot;dtopor1&quot;:0,&quot;dtopor2&quot;:0,&quot;editable&quot;:true,&quot;fecha&quot;:&quot;2022-10-10&quot;,&quot;femail&quot;:null,&quot;hora&quot;:&quot;14:12:57&quot;,&quot;idasiento&quot;:null,&quot;idcontactoenv&quot;:null,&quot;idcontactofact&quot;:4,&quot;idempresa&quot;:1,&quot;idestado&quot;:10,&quot;idfactura&quot;:3,&quot;idfacturarect&quot;:null,&quot;irpf&quot;:0,&quot;neto&quot;:40,&quot;netosindto&quot;:40,&quot;nick&quot;:&quot;admin&quot;,&quot;nombrecliente&quot;:&quot;0000-xxxx&quot;,&quot;numero&quot;:&quot;3&quot;,&quot;numero2&quot;:&quot;&quot;,&quot;observaciones&quot;:&quot;Esta factura NO es una constancia de pago.\\nLa factura de pago es emitida una vez se reciba el pago total del art\\u00edculo.&quot;,&quot;pagada&quot;:false,&quot;provincia&quot;:&quot;&quot;,&quot;tasaconv&quot;:1.129,&quot;total&quot;:42.8,&quot;totalcoste&quot;:0,&quot;totaleuros&quot;:37.90965,&quot;totalirpf&quot;:0,&quot;totaliva&quot;:2.8,&quot;totalrecargo&quot;:0,&quot;totalsuplidos&quot;:0},&quot;uri&quot;:&quot;\\/EditFacturaCliente&quot;,&quot;nick&quot;:&quot;admin&quot;}', 40, NULL, '190.32.163.248', 'info', 'Actualizado FacturaCliente (3) FAC2022A3', 'FacturaCliente', '3', 'admin', '2022-10-10 19:15:42', '/EditFacturaCliente'),
('audit', '{&quot;%model%&quot;:&quot;FacturaCliente&quot;,&quot;%key%&quot;:3,&quot;%desc%&quot;:&quot;FAC2022A3&quot;,&quot;model-class&quot;:&quot;FacturaCliente&quot;,&quot;model-code&quot;:3,&quot;model-data&quot;:{&quot;apartado&quot;:&quot;&quot;,&quot;cifnif&quot;:&quot;xxxx-0000&quot;,&quot;ciudad&quot;:&quot;&quot;,&quot;codagente&quot;:null,&quot;codalmacen&quot;:&quot;ALG&quot;,&quot;codcliente&quot;:&quot;4&quot;,&quot;coddivisa&quot;:&quot;USD&quot;,&quot;codejercicio&quot;:&quot;2022&quot;,&quot;codigo&quot;:&quot;FAC2022A3&quot;,&quot;codigoenv&quot;:&quot;&quot;,&quot;codigorect&quot;:null,&quot;codpago&quot;:&quot;CONT&quot;,&quot;codpais&quot;:&quot;PAN&quot;,&quot;codpostal&quot;:&quot;&quot;,&quot;codserie&quot;:&quot;A&quot;,&quot;codtrans&quot;:null,&quot;direccion&quot;:&quot;&quot;,&quot;dtopor1&quot;:0,&quot;dtopor2&quot;:0,&quot;editable&quot;:false,&quot;fecha&quot;:&quot;2022-10-10&quot;,&quot;femail&quot;:null,&quot;hora&quot;:&quot;14:12:57&quot;,&quot;idasiento&quot;:null,&quot;idcontactoenv&quot;:null,&quot;idcontactofact&quot;:4,&quot;idempresa&quot;:1,&quot;idestado&quot;:11,&quot;idfactura&quot;:3,&quot;idfacturarect&quot;:null,&quot;irpf&quot;:0,&quot;neto&quot;:40,&quot;netosindto&quot;:40,&quot;nick&quot;:&quot;admin&quot;,&quot;nombrecliente&quot;:&quot;0000-xxxx&quot;,&quot;numero&quot;:&quot;3&quot;,&quot;numero2&quot;:&quot;&quot;,&quot;observaciones&quot;:&quot;Esta factura NO es una constancia de pago.\\nLa factura de pago es emitida una vez se reciba el pago total del art\\u00edculo.&quot;,&quot;pagada&quot;:false,&quot;provincia&quot;:&quot;&quot;,&quot;tasaconv&quot;:1.129,&quot;total&quot;:42.8,&quot;totalcoste&quot;:0,&quot;totaleuros&quot;:37.90965,&quot;totalirpf&quot;:0,&quot;totaliva&quot;:2.8,&quot;totalrecargo&quot;:0,&quot;totalsuplidos&quot;:0},&quot;uri&quot;:&quot;\\/EditFacturaCliente&quot;,&quot;nick&quot;:&quot;admin&quot;}', 41, NULL, '190.32.163.248', 'info', 'Actualizado FacturaCliente (3) FAC2022A3', 'FacturaCliente', '3', 'admin', '2022-10-10 19:15:42', '/EditFacturaCliente'),
('audit', '{&quot;%model%&quot;:&quot;FacturaCliente&quot;,&quot;%key%&quot;:3,&quot;%desc%&quot;:&quot;FAC2022A3&quot;,&quot;model-class&quot;:&quot;FacturaCliente&quot;,&quot;model-code&quot;:3,&quot;model-data&quot;:{&quot;apartado&quot;:&quot;&quot;,&quot;cifnif&quot;:&quot;xxxx-0000&quot;,&quot;ciudad&quot;:&quot;&quot;,&quot;codagente&quot;:null,&quot;codalmacen&quot;:&quot;ALG&quot;,&quot;codcliente&quot;:&quot;4&quot;,&quot;coddivisa&quot;:&quot;USD&quot;,&quot;codejercicio&quot;:&quot;2022&quot;,&quot;codigo&quot;:&quot;FAC2022A3&quot;,&quot;codigoenv&quot;:&quot;&quot;,&quot;codigorect&quot;:null,&quot;codpago&quot;:&quot;CONT&quot;,&quot;codpais&quot;:&quot;PAN&quot;,&quot;codpostal&quot;:&quot;&quot;,&quot;codserie&quot;:&quot;A&quot;,&quot;codtrans&quot;:null,&quot;direccion&quot;:&quot;&quot;,&quot;dtopor1&quot;:0,&quot;dtopor2&quot;:0,&quot;editable&quot;:false,&quot;fecha&quot;:&quot;10-10-2022&quot;,&quot;femail&quot;:&quot;10-10-2022&quot;,&quot;hora&quot;:&quot;14:12:57&quot;,&quot;idasiento&quot;:null,&quot;idcontactoenv&quot;:null,&quot;idcontactofact&quot;:4,&quot;idempresa&quot;:1,&quot;idestado&quot;:11,&quot;idfactura&quot;:3,&quot;idfacturarect&quot;:null,&quot;irpf&quot;:0,&quot;neto&quot;:40,&quot;netosindto&quot;:40,&quot;nick&quot;:&quot;admin&quot;,&quot;nombrecliente&quot;:&quot;0000-xxxx&quot;,&quot;numero&quot;:&quot;3&quot;,&quot;numero2&quot;:&quot;&quot;,&quot;observaciones&quot;:&quot;Esta factura NO es una constancia de pago.\\nLa factura de pago es emitida una vez se reciba el pago total del art\\u00edculo.&quot;,&quot;pagada&quot;:false,&quot;provincia&quot;:&quot;&quot;,&quot;tasaconv&quot;:1.129,&quot;total&quot;:42.8,&quot;totalcoste&quot;:0,&quot;totaleuros&quot;:37.90965,&quot;totalirpf&quot;:0,&quot;totaliva&quot;:2.8,&quot;totalrecargo&quot;:0,&quot;totalsuplidos&quot;:0},&quot;uri&quot;:&quot;\\/SendMail&quot;,&quot;nick&quot;:&quot;admin&quot;}', 42, NULL, '190.32.163.248', 'info', 'Actualizado FacturaCliente (3) FAC2022A3', 'FacturaCliente', '3', 'admin', '2022-10-10 19:16:53', '/SendMail'),
('audit', '{&quot;%model%&quot;:&quot;FacturaCliente&quot;,&quot;%key%&quot;:&quot;4&quot;,&quot;%desc%&quot;:&quot;FAC2022A4&quot;,&quot;model-class&quot;:&quot;FacturaCliente&quot;,&quot;model-code&quot;:&quot;4&quot;,&quot;model-data&quot;:{&quot;apartado&quot;:&quot;&quot;,&quot;cifnif&quot;:&quot;0000-xxxx&quot;,&quot;ciudad&quot;:&quot;&quot;,&quot;codagente&quot;:null,&quot;codalmacen&quot;:&quot;ALG&quot;,&quot;codcliente&quot;:&quot;5&quot;,&quot;coddivisa&quot;:&quot;USD&quot;,&quot;codejercicio&quot;:&quot;2022&quot;,&quot;codigo&quot;:&quot;FAC2022A4&quot;,&quot;codigoenv&quot;:&quot;&quot;,&quot;codigorect&quot;:null,&quot;codpago&quot;:&quot;CONT&quot;,&quot;codpais&quot;:&quot;PAN&quot;,&quot;codpostal&quot;:&quot;&quot;,&quot;codserie&quot;:&quot;A&quot;,&quot;codtrans&quot;:null,&quot;direccion&quot;:&quot;&quot;,&quot;dtopor1&quot;:0,&quot;dtopor2&quot;:0,&quot;editable&quot;:true,&quot;fecha&quot;:&quot;2022-10-10&quot;,&quot;femail&quot;:null,&quot;hora&quot;:&quot;14:39:43&quot;,&quot;idasiento&quot;:null,&quot;idcontactoenv&quot;:null,&quot;idcontactofact&quot;:5,&quot;idempresa&quot;:1,&quot;idestado&quot;:10,&quot;idfactura&quot;:&quot;4&quot;,&quot;idfacturarect&quot;:null,&quot;irpf&quot;:0,&quot;neto&quot;:10,&quot;netosindto&quot;:10,&quot;nick&quot;:&quot;admin&quot;,&quot;nombrecliente&quot;:&quot;0000-xxxx&quot;,&quot;numero&quot;:&quot;4&quot;,&quot;numero2&quot;:&quot;&quot;,&quot;observaciones&quot;:&quot;Esta es una factura NO fiscal y representa el comprobante de pago.&quot;,&quot;pagada&quot;:false,&quot;provincia&quot;:&quot;&quot;,&quot;tasaconv&quot;:1.129,&quot;total&quot;:10,&quot;totalcoste&quot;:0,&quot;totaleuros&quot;:8.8574,&quot;totalirpf&quot;:0,&quot;totaliva&quot;:0,&quot;totalrecargo&quot;:0,&quot;totalsuplidos&quot;:0},&quot;uri&quot;:&quot;\\/EditFacturaCliente&quot;,&quot;nick&quot;:&quot;admin&quot;}', 43, NULL, '190.32.163.248', 'info', 'Actualizado FacturaCliente (4) FAC2022A4', 'FacturaCliente', '4', 'admin', '2022-10-10 19:41:04', '/EditFacturaCliente'),
('audit', '{&quot;%model%&quot;:&quot;FacturaCliente&quot;,&quot;%key%&quot;:4,&quot;%desc%&quot;:&quot;FAC2022A4&quot;,&quot;model-class&quot;:&quot;FacturaCliente&quot;,&quot;model-code&quot;:4,&quot;model-data&quot;:{&quot;apartado&quot;:&quot;&quot;,&quot;cifnif&quot;:&quot;0000-xxxx&quot;,&quot;ciudad&quot;:&quot;&quot;,&quot;codagente&quot;:null,&quot;codalmacen&quot;:&quot;ALG&quot;,&quot;codcliente&quot;:&quot;5&quot;,&quot;coddivisa&quot;:&quot;USD&quot;,&quot;codejercicio&quot;:&quot;2022&quot;,&quot;codigo&quot;:&quot;FAC2022A4&quot;,&quot;codigoenv&quot;:&quot;&quot;,&quot;codigorect&quot;:null,&quot;codpago&quot;:&quot;CONT&quot;,&quot;codpais&quot;:&quot;PAN&quot;,&quot;codpostal&quot;:&quot;&quot;,&quot;codserie&quot;:&quot;A&quot;,&quot;codtrans&quot;:null,&quot;direccion&quot;:&quot;&quot;,&quot;dtopor1&quot;:0,&quot;dtopor2&quot;:0,&quot;editable&quot;:true,&quot;fecha&quot;:&quot;2022-10-10&quot;,&quot;femail&quot;:null,&quot;hora&quot;:&quot;14:39:43&quot;,&quot;idasiento&quot;:null,&quot;idcontactoenv&quot;:null,&quot;idcontactofact&quot;:5,&quot;idempresa&quot;:1,&quot;idestado&quot;:10,&quot;idfactura&quot;:4,&quot;idfacturarect&quot;:null,&quot;irpf&quot;:0,&quot;neto&quot;:10,&quot;netosindto&quot;:10,&quot;nick&quot;:&quot;admin&quot;,&quot;nombrecliente&quot;:&quot;0000-xxxx&quot;,&quot;numero&quot;:&quot;4&quot;,&quot;numero2&quot;:&quot;&quot;,&quot;observaciones&quot;:&quot;Esta es una factura NO fiscal y representa el comprobante de pago.&quot;,&quot;pagada&quot;:false,&quot;provincia&quot;:&quot;&quot;,&quot;tasaconv&quot;:1.129,&quot;total&quot;:10,&quot;totalcoste&quot;:0,&quot;totaleuros&quot;:8.8574,&quot;totalirpf&quot;:0,&quot;totaliva&quot;:0,&quot;totalrecargo&quot;:0,&quot;totalsuplidos&quot;:0},&quot;uri&quot;:&quot;\\/EditFacturaCliente&quot;,&quot;nick&quot;:&quot;admin&quot;}', 44, NULL, '190.32.163.248', 'info', 'Actualizado FacturaCliente (4) FAC2022A4', 'FacturaCliente', '4', 'admin', '2022-10-10 19:41:15', '/EditFacturaCliente'),
('audit', '{&quot;%model%&quot;:&quot;FacturaCliente&quot;,&quot;%key%&quot;:4,&quot;%desc%&quot;:&quot;FAC2022A4&quot;,&quot;model-class&quot;:&quot;FacturaCliente&quot;,&quot;model-code&quot;:4,&quot;model-data&quot;:{&quot;apartado&quot;:&quot;&quot;,&quot;cifnif&quot;:&quot;0000-xxxx&quot;,&quot;ciudad&quot;:&quot;&quot;,&quot;codagente&quot;:null,&quot;codalmacen&quot;:&quot;ALG&quot;,&quot;codcliente&quot;:&quot;5&quot;,&quot;coddivisa&quot;:&quot;USD&quot;,&quot;codejercicio&quot;:&quot;2022&quot;,&quot;codigo&quot;:&quot;FAC2022A4&quot;,&quot;codigoenv&quot;:&quot;&quot;,&quot;codigorect&quot;:null,&quot;codpago&quot;:&quot;CONT&quot;,&quot;codpais&quot;:&quot;PAN&quot;,&quot;codpostal&quot;:&quot;&quot;,&quot;codserie&quot;:&quot;A&quot;,&quot;codtrans&quot;:null,&quot;direccion&quot;:&quot;&quot;,&quot;dtopor1&quot;:0,&quot;dtopor2&quot;:0,&quot;editable&quot;:false,&quot;fecha&quot;:&quot;2022-10-10&quot;,&quot;femail&quot;:null,&quot;hora&quot;:&quot;14:39:43&quot;,&quot;idasiento&quot;:null,&quot;idcontactoenv&quot;:null,&quot;idcontactofact&quot;:5,&quot;idempresa&quot;:1,&quot;idestado&quot;:11,&quot;idfactura&quot;:4,&quot;idfacturarect&quot;:null,&quot;irpf&quot;:0,&quot;neto&quot;:10,&quot;netosindto&quot;:10,&quot;nick&quot;:&quot;admin&quot;,&quot;nombrecliente&quot;:&quot;0000-xxxx&quot;,&quot;numero&quot;:&quot;4&quot;,&quot;numero2&quot;:&quot;&quot;,&quot;observaciones&quot;:&quot;Esta es una factura NO fiscal y representa el comprobante de pago.&quot;,&quot;pagada&quot;:false,&quot;provincia&quot;:&quot;&quot;,&quot;tasaconv&quot;:1.129,&quot;total&quot;:10,&quot;totalcoste&quot;:0,&quot;totaleuros&quot;:8.8574,&quot;totalirpf&quot;:0,&quot;totaliva&quot;:0,&quot;totalrecargo&quot;:0,&quot;totalsuplidos&quot;:0},&quot;uri&quot;:&quot;\\/EditFacturaCliente&quot;,&quot;nick&quot;:&quot;admin&quot;}', 45, NULL, '190.32.163.248', 'info', 'Actualizado FacturaCliente (4) FAC2022A4', 'FacturaCliente', '4', 'admin', '2022-10-10 19:41:15', '/EditFacturaCliente'),
('audit', '{&quot;%model%&quot;:&quot;Asiento&quot;,&quot;%key%&quot;:&quot;1&quot;,&quot;%desc%&quot;:1,&quot;model-class&quot;:&quot;Asiento&quot;,&quot;model-code&quot;:&quot;1&quot;,&quot;model-data&quot;:{&quot;canal&quot;:null,&quot;codejercicio&quot;:&quot;2022&quot;,&quot;concepto&quot;:&quot;Cobro del recibo FAC2022A4-1 - 0000-xxxx&quot;,&quot;documento&quot;:&quot;FAC2022A4&quot;,&quot;editable&quot;:true,&quot;fecha&quot;:&quot;10-10-2022&quot;,&quot;idasiento&quot;:&quot;1&quot;,&quot;iddiario&quot;:null,&quot;idempresa&quot;:1,&quot;importe&quot;:10,&quot;numero&quot;:1,&quot;operacion&quot;:null},&quot;uri&quot;:&quot;\\/EditFacturaCliente&quot;,&quot;nick&quot;:&quot;admin&quot;}', 46, NULL, '190.32.163.248', 'info', 'Actualizado Asiento (1) 1', 'Asiento', '1', 'admin', '2022-10-10 19:41:20', '/EditFacturaCliente'),
('audit', '{&quot;%model%&quot;:&quot;Asiento&quot;,&quot;%key%&quot;:&quot;1&quot;,&quot;%desc%&quot;:1,&quot;model-class&quot;:&quot;Asiento&quot;,&quot;model-code&quot;:&quot;1&quot;,&quot;model-data&quot;:{&quot;canal&quot;:null,&quot;codejercicio&quot;:&quot;2022&quot;,&quot;concepto&quot;:&quot;Cobro del recibo FAC2022A4-1 - 0000-xxxx&quot;,&quot;documento&quot;:&quot;FAC2022A4&quot;,&quot;editable&quot;:true,&quot;fecha&quot;:&quot;10-10-2022&quot;,&quot;idasiento&quot;:&quot;1&quot;,&quot;iddiario&quot;:null,&quot;idempresa&quot;:1,&quot;importe&quot;:10,&quot;numero&quot;:1,&quot;operacion&quot;:null},&quot;uri&quot;:&quot;\\/EditFacturaCliente&quot;,&quot;nick&quot;:&quot;admin&quot;}', 47, NULL, '190.32.163.248', 'warning', 'Eliminado Asiento (1) 1', 'Asiento', '1', 'admin', '2022-10-10 19:41:20', '/EditFacturaCliente'),
('audit', '{&quot;%model%&quot;:&quot;FacturaCliente&quot;,&quot;%key%&quot;:4,&quot;%desc%&quot;:&quot;FAC2022A4&quot;,&quot;model-class&quot;:&quot;FacturaCliente&quot;,&quot;model-code&quot;:4,&quot;model-data&quot;:{&quot;apartado&quot;:&quot;&quot;,&quot;cifnif&quot;:&quot;0000-xxxx&quot;,&quot;ciudad&quot;:&quot;&quot;,&quot;codagente&quot;:null,&quot;codalmacen&quot;:&quot;ALG&quot;,&quot;codcliente&quot;:&quot;5&quot;,&quot;coddivisa&quot;:&quot;USD&quot;,&quot;codejercicio&quot;:&quot;2022&quot;,&quot;codigo&quot;:&quot;FAC2022A4&quot;,&quot;codigoenv&quot;:&quot;&quot;,&quot;codigorect&quot;:null,&quot;codpago&quot;:&quot;CONT&quot;,&quot;codpais&quot;:&quot;PAN&quot;,&quot;codpostal&quot;:&quot;&quot;,&quot;codserie&quot;:&quot;A&quot;,&quot;codtrans&quot;:null,&quot;direccion&quot;:&quot;&quot;,&quot;dtopor1&quot;:0,&quot;dtopor2&quot;:0,&quot;editable&quot;:false,&quot;fecha&quot;:&quot;10-10-2022&quot;,&quot;femail&quot;:&quot;10-10-2022&quot;,&quot;hora&quot;:&quot;14:39:43&quot;,&quot;idasiento&quot;:null,&quot;idcontactoenv&quot;:null,&quot;idcontactofact&quot;:5,&quot;idempresa&quot;:1,&quot;idestado&quot;:11,&quot;idfactura&quot;:4,&quot;idfacturarect&quot;:null,&quot;irpf&quot;:0,&quot;neto&quot;:10,&quot;netosindto&quot;:10,&quot;nick&quot;:&quot;admin&quot;,&quot;nombrecliente&quot;:&quot;0000-xxxx&quot;,&quot;numero&quot;:&quot;4&quot;,&quot;numero2&quot;:&quot;&quot;,&quot;observaciones&quot;:&quot;Esta es una factura NO fiscal y representa el comprobante de pago.&quot;,&quot;pagada&quot;:true,&quot;provincia&quot;:&quot;&quot;,&quot;tasaconv&quot;:1.129,&quot;total&quot;:10,&quot;totalcoste&quot;:0,&quot;totaleuros&quot;:8.8574,&quot;totalirpf&quot;:0,&quot;totaliva&quot;:0,&quot;totalrecargo&quot;:0,&quot;totalsuplidos&quot;:0},&quot;uri&quot;:&quot;\\/SendMail&quot;,&quot;nick&quot;:&quot;admin&quot;}', 48, NULL, '190.32.163.248', 'info', 'Actualizado FacturaCliente (4) FAC2022A4', 'FacturaCliente', '4', 'admin', '2022-10-10 19:42:01', '/SendMail');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pages`
--

CREATE TABLE `pages` (
  `icon` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `menu` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `name` varchar(40) COLLATE utf8_bin NOT NULL,
  `ordernum` int(11) NOT NULL DEFAULT '100',
  `showonmenu` tinyint(1) NOT NULL DEFAULT '1',
  `submenu` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `title` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `pages`
--

INSERT INTO `pages` (`icon`, `menu`, `name`, `ordernum`, `showonmenu`, `submenu`, `title`) VALUES
('fas fa-plug', 'admin', 'AdminPlugins', 100, 1, NULL, 'plugins'),
('fas fa-envelope', 'admin', 'ConfigEmail', 100, 1, NULL, 'email'),
('fas fa-cut', 'sales', 'CopyModel', 100, 0, NULL, 'copy'),
('fas fa-chalkboard-teacher', 'reports', 'Dashboard', 100, 1, NULL, 'dashboard'),
('fas fa-magic', 'sales', 'DocumentStitcher', 100, 0, NULL, 'group-or-split'),
('fas fa-truck', 'warehouse', 'EditAgenciaTransporte', 100, 0, NULL, 'carrier'),
('fas fa-user-tie', 'admin', 'EditAgente', 100, 0, NULL, 'agent'),
('fas fa-dolly-flatbed', 'sales', 'EditAlbaranCliente', 100, 0, NULL, 'delivery-note'),
('fas fa-dolly-flatbed', 'purchases', 'EditAlbaranProveedor', 100, 0, NULL, 'delivery-note'),
('fas fa-warehouse', 'warehouse', 'EditAlmacen', 100, 0, NULL, 'warehouse'),
('fas fa-key', 'admin', 'EditApiKey', 100, 0, NULL, 'api-key'),
('fas fa-balance-scale', 'accounting', 'EditAsiento', 100, 0, NULL, 'accounting-entry'),
('fas fa-tshirt', 'warehouse', 'EditAtributo', 100, 0, NULL, 'attribute'),
('fas fa-paperclip', 'admin', 'EditAttachedFile', 100, 0, NULL, 'attached-file'),
('fas fa-clipboard', 'reports', 'EditBalance', 100, 0, NULL, 'accounting-balance'),
('fas fa-city', 'admin', 'EditCiudad', 100, 0, NULL, 'city'),
('fas fa-users', 'sales', 'EditCliente', 100, 0, NULL, 'customer'),
('fas fa-indent', 'accounting', 'EditConceptoPartida', 100, 0, NULL, 'predefined-concepts'),
('fas fa-address-book', 'sales', 'EditContacto', 100, 0, NULL, 'contact'),
('fas fa-cogs', 'admin', 'EditCronJob', 100, 0, NULL, 'cron-job'),
('fas fa-book', 'accounting', 'EditCuenta', 100, 0, NULL, 'account'),
('fas fa-piggy-bank', 'accounting', 'EditCuentaBanco', 100, 0, NULL, 'bank-account'),
('fas fa-newspaper', 'accounting', 'EditCuentaEspecial', 100, 0, NULL, 'special-account'),
('fas fa-book', 'accounting', 'EditDiario', 100, 0, NULL, 'journal'),
('fas fa-money-bill-alt', 'admin', 'EditDivisa', 100, 0, NULL, 'currency'),
('fas fa-calendar-alt', 'accounting', 'EditEjercicio', 100, 0, NULL, 'exercise'),
('fas fa-bell', 'admin', 'EditEmailNotification', 100, 0, NULL, 'email-notification'),
('fas fa-envelope', 'admin', 'EditEmailSent', 100, 0, NULL, 'email-sent'),
('fas fa-building', 'admin', 'EditEmpresa', 100, 0, NULL, 'company'),
('fas fa-tag', 'admin', 'EditEstadoDocumento', 100, 0, NULL, 'status-document'),
('fas fa-industry', 'warehouse', 'EditFabricante', 100, 0, NULL, 'manufacturer'),
('fas fa-file-invoice-dollar', 'sales', 'EditFacturaCliente', 100, 0, NULL, 'invoice'),
('fas fa-file-invoice-dollar', 'purchases', 'EditFacturaProveedor', 100, 0, NULL, 'invoice'),
('fas fa-sitemap', 'warehouse', 'EditFamilia', 100, 0, NULL, 'family'),
('fas fa-credit-card', 'accounting', 'EditFormaPago', 100, 0, NULL, 'payment-method'),
('fas fa-print', 'admin', 'EditFormatoDocumento', 100, 0, NULL, 'printing-format'),
('fas fa-users-cog', 'sales', 'EditGrupoClientes', 100, 0, NULL, 'customer-group'),
('fas fa-plus-square', 'accounting', 'EditImpuesto', 100, 0, NULL, 'tax'),
('fas fa-file-medical-alt', 'admin', 'EditLogMessage', 100, 0, NULL, 'log'),
('fas fa-wrench', 'admin', 'EditPageOption', 100, 0, NULL, 'options'),
('fas fa-globe-americas', 'admin', 'EditPais', 100, 0, NULL, 'country'),
('fas fa-file-powerpoint', 'sales', 'EditPedidoCliente', 100, 0, NULL, 'order'),
('fas fa-file-powerpoint', 'purchases', 'EditPedidoProveedor', 100, 0, NULL, 'order'),
('far fa-file-powerpoint', 'sales', 'EditPresupuestoCliente', 100, 0, NULL, 'estimation'),
('far fa-file-powerpoint', 'purchases', 'EditPresupuestoProveedor', 100, 0, NULL, 'estimation'),
('fas fa-cube', 'warehouse', 'EditProducto', 100, 0, NULL, 'product'),
('fas fa-users', 'purchases', 'EditProveedor', 100, 0, NULL, 'supplier'),
('fas fa-map-signs', 'admin', 'EditProvincia', 100, 0, NULL, 'province'),
('fas fa-piggy-bank', 'sales', 'EditReciboCliente', 100, 0, NULL, 'receipt'),
('fas fa-piggy-bank', 'purchases', 'EditReciboProveedor', 100, 0, NULL, 'receipt'),
('fas fa-calculator', 'reports', 'EditReportAmount', 100, 0, NULL, 'balance-amounts'),
('fas fa-book', 'reports', 'EditReportBalance', 100, 0, NULL, 'balances'),
('fas fa-file-alt', 'reports', 'EditReportLedger', 100, 0, NULL, 'ledger'),
('fas fa-plus-square', 'accounting', 'EditRetencion', 100, 0, NULL, 'retention'),
('fas fa-id-card', 'admin', 'EditRole', 100, 0, NULL, 'role'),
('fas fa-code', 'admin', 'EditSecuenciaDocumento', 100, 0, NULL, 'document-sequence'),
('fas fa-layer-group', 'accounting', 'EditSerie', 100, 0, NULL, 'serie'),
('fas fa-tools', 'admin', 'EditSettings', 100, 1, NULL, 'control-panel'),
('fas fa-th-list', 'accounting', 'EditSubcuenta', 100, 0, NULL, 'subaccount'),
('fas fa-percentage', 'sales', 'EditTarifa', 100, 0, NULL, 'rate'),
('fas fa-user-circle', 'admin', 'EditUser', 100, 0, NULL, 'user'),
('fas fa-truck', 'warehouse', 'ListAgenciaTransporte', 100, 1, NULL, 'carriers'),
('fas fa-user-tie', 'admin', 'ListAgente', 100, 1, NULL, 'agents'),
('fas fa-dolly-flatbed', 'sales', 'ListAlbaranCliente', 100, 1, NULL, 'delivery-notes'),
('fas fa-dolly-flatbed', 'purchases', 'ListAlbaranProveedor', 100, 1, NULL, 'delivery-notes'),
('fas fa-warehouse', 'warehouse', 'ListAlmacen', 100, 1, NULL, 'warehouses'),
('fas fa-balance-scale', 'accounting', 'ListAsiento', 100, 1, NULL, 'accounting-entries'),
('fas fa-tshirt', 'warehouse', 'ListAtributo', 100, 1, NULL, 'attributes'),
('fas fa-book-open', 'admin', 'ListAttachedFile', 100, 1, NULL, 'library'),
('fas fa-users', 'sales', 'ListCliente', 100, 1, NULL, 'customers'),
('fas fa-book', 'accounting', 'ListCuenta', 100, 1, NULL, 'accounting-accounts'),
('fas fa-calendar-alt', 'accounting', 'ListEjercicio', 100, 1, NULL, 'exercises'),
('fas fa-building', 'admin', 'ListEmpresa', 100, 1, NULL, 'companies'),
('fas fa-industry', 'warehouse', 'ListFabricante', 100, 1, NULL, 'manufacturers'),
('fas fa-file-invoice-dollar', 'sales', 'ListFacturaCliente', 100, 1, NULL, 'invoices'),
('fas fa-file-invoice-dollar', 'purchases', 'ListFacturaProveedor', 100, 1, NULL, 'invoices'),
('fas fa-sitemap', 'warehouse', 'ListFamilia', 100, 1, NULL, 'families'),
('fas fa-credit-card', 'accounting', 'ListFormaPago', 100, 1, NULL, 'payment-methods'),
('fas fa-plus-square', 'accounting', 'ListImpuesto', 100, 1, NULL, 'taxes'),
('fas fa-file-medical-alt', 'admin', 'ListLogMessage', 100, 1, NULL, 'logs'),
('fas fa-globe-americas', 'admin', 'ListPais', 100, 1, NULL, 'countries'),
('fas fa-file-powerpoint', 'sales', 'ListPedidoCliente', 100, 1, NULL, 'orders'),
('fas fa-file-powerpoint', 'purchases', 'ListPedidoProveedor', 100, 1, NULL, 'orders'),
('far fa-file-powerpoint', 'sales', 'ListPresupuestoCliente', 100, 1, NULL, 'estimations'),
('far fa-file-powerpoint', 'purchases', 'ListPresupuestoProveedor', 100, 1, NULL, 'estimations'),
('fas fa-cubes', 'warehouse', 'ListProducto', 100, 1, NULL, 'products'),
('fas fa-users', 'purchases', 'ListProveedor', 100, 1, NULL, 'suppliers'),
('fas fa-balance-scale', 'reports', 'ListReportAccounting', 100, 1, NULL, 'accounting-reports'),
('fas fa-layer-group', 'accounting', 'ListSerie', 100, 1, NULL, 'series'),
('fas fa-percentage', 'sales', 'ListTarifa', 100, 1, NULL, 'rates'),
('fas fa-users', 'admin', 'ListUser', 100, 1, NULL, 'users'),
('fas fa-circle', 'new', 'MegaSearch', 100, 0, NULL, 'MegaSearch'),
('fas fa-cubes', 'reports', 'ReportProducto', 100, 1, NULL, 'products'),
('fas fa-wallet', 'reports', 'ReportTaxes', 100, 1, NULL, 'taxes'),
('fas fa-envelope', 'sales', 'SendMail', 100, 0, NULL, 'send-mail'),
('fas fa-cloud-download-alt', 'admin', 'Updater', 100, 1, NULL, 'updater'),
('fas fa-magic', 'admin', 'Wizard', 100, 0, NULL, 'wizard');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pages_filters`
--

CREATE TABLE `pages_filters` (
  `description` varchar(50) COLLATE utf8_bin NOT NULL,
  `filters` text COLLATE utf8_bin,
  `id` int(11) NOT NULL,
  `name` varchar(40) COLLATE utf8_bin NOT NULL,
  `nick` varchar(50) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pages_options`
--

CREATE TABLE `pages_options` (
  `columns` text COLLATE utf8_bin,
  `id` int(11) NOT NULL,
  `modals` text COLLATE utf8_bin,
  `name` varchar(40) COLLATE utf8_bin NOT NULL,
  `nick` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `rows` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagoscli`
--

CREATE TABLE `pagoscli` (
  `codpago` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `customid` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `customstatus` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `fecha` date NOT NULL,
  `gastos` double DEFAULT '0',
  `hora` time DEFAULT NULL,
  `idasiento` int(11) DEFAULT NULL,
  `idpago` int(11) NOT NULL,
  `idrecibo` int(11) NOT NULL,
  `importe` double DEFAULT '0',
  `nick` varchar(50) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `pagoscli`
--

INSERT INTO `pagoscli` (`codpago`, `customid`, `customstatus`, `fecha`, `gastos`, `hora`, `idasiento`, `idpago`, `idrecibo`, `importe`, `nick`) VALUES
('CONT', NULL, NULL, '2022-10-03', 0, '18:38:29', NULL, 1, 1, 14, 'admin'),
('CONT', NULL, NULL, '2022-10-10', 0, '14:41:19', NULL, 2, 4, 10, 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagosprov`
--

CREATE TABLE `pagosprov` (
  `codpago` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `fecha` date NOT NULL,
  `hora` time DEFAULT NULL,
  `idasiento` int(11) DEFAULT NULL,
  `idpago` int(11) NOT NULL,
  `idrecibo` int(11) NOT NULL,
  `importe` double DEFAULT '0',
  `nick` varchar(50) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paises`
--

CREATE TABLE `paises` (
  `codiso` varchar(2) COLLATE utf8_bin DEFAULT NULL,
  `codpais` varchar(20) COLLATE utf8_bin NOT NULL,
  `nombre` varchar(100) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `paises`
--

INSERT INTO `paises` (`codiso`, `codpais`, `nombre`) VALUES
('AW', 'ABW', 'Aruba'),
('AF', 'AFG', 'Afganistán'),
('AO', 'AGO', 'Angola'),
('AI', 'AIA', 'Anguila'),
('AX', 'ALA', 'Islas Gland'),
('AL', 'ALB', 'Albania'),
('AD', 'AND', 'Andorra'),
('AN', 'ANT', 'Antillas Holandesas'),
('AE', 'ARE', 'Emiratos Árabes Unidos'),
('AR', 'ARG', 'Argentina'),
('AM', 'ARM', 'Armenia'),
('AS', 'ASM', 'Samoa Americana'),
('AQ', 'ATA', 'Antártida'),
('TF', 'ATF', 'Territorios Australes Franceses'),
('AG', 'ATG', 'Antigua y Barbuda'),
('AU', 'AUS', 'Australia'),
('AT', 'AUT', 'Austria'),
('AZ', 'AZE', 'Azerbaiyán'),
('BI', 'BDI', 'Burundi'),
('BE', 'BEL', 'Bélgica'),
('BJ', 'BEN', 'Benín'),
('BQ', 'BES', 'Bonaire, San Eustaquio y Saba'),
('BF', 'BFA', 'Burkina Faso'),
('BD', 'BGD', 'Bangladesh'),
('BG', 'BGR', 'Bulgaria'),
('BH', 'BHR', 'Bahréin'),
('BS', 'BHS', 'Bahamas'),
('BA', 'BIH', 'Bosnia y Herzegovina'),
('BL', 'BLM', 'San Bartolomé'),
('BY', 'BLR', 'Bielorrusia'),
('BZ', 'BLZ', 'Belice'),
('BM', 'BMU', 'Bermudas'),
('BO', 'BOL', 'Bolivia'),
('BR', 'BRA', 'Brasil'),
('BB', 'BRB', 'Barbados'),
('BN', 'BRN', 'Brunéi'),
('BT', 'BTN', 'Bhután'),
('BV', 'BVT', 'Isla Bouvet'),
('BW', 'BWA', 'Botsuana'),
('CF', 'CAF', 'República Centroafricana'),
('CA', 'CAN', 'Canadá'),
('CC', 'CCK', 'Islas Cocos'),
('CH', 'CHE', 'Suiza'),
('CL', 'CHL', 'Chile'),
('CN', 'CHN', 'China'),
('CI', 'CIV', 'Costa de Marfil'),
('CM', 'CMR', 'Camerún'),
('CD', 'COD', 'República Democrática del Congo'),
('CG', 'COG', 'Congo'),
('CK', 'COK', 'Islas Cook'),
('CO', 'COL', 'Colombia'),
('KM', 'COM', 'Comoras'),
('CV', 'CPV', 'Cabo Verde'),
('CR', 'CRI', 'Costa Rica'),
('CU', 'CUB', 'Cuba'),
('CW', 'CUW', 'Curazao'),
('CX', 'CXR', 'Isla de Navidad'),
('KY', 'CYM', 'Islas Caimán'),
('CY', 'CYP', 'Chipre'),
('CZ', 'CZE', 'República Checa'),
('DE', 'DEU', 'Alemania'),
('DJ', 'DJI', 'Yibuti'),
('DM', 'DMA', 'Dominica'),
('DK', 'DNK', 'Dinamarca'),
('DO', 'DOM', 'República Dominicana'),
('DZ', 'DZA', 'Argelia'),
('EC', 'ECU', 'Ecuador'),
('EG', 'EGY', 'Egipto'),
('ER', 'ERI', 'Eritrea'),
('EH', 'ESH', 'Sahara Occidental'),
('ES', 'ESP', 'España'),
('EE', 'EST', 'Estonia'),
('ET', 'ETH', 'Etiopía'),
('FI', 'FIN', 'Finlandia'),
('FJ', 'FJI', 'Fiyi'),
('FK', 'FLK', 'Islas Malvinas'),
('FR', 'FRA', 'Francia'),
('FO', 'FRO', 'Islas Feroe'),
('FM', 'FSM', 'Micronesia'),
('GA', 'GAB', 'Gabón'),
('GB', 'GBR', 'Reino Unido'),
('GE', 'GEO', 'Georgia'),
('GG', 'GGY', 'Guernsey'),
('GH', 'GHA', 'Ghana'),
('GI', 'GIB', 'Gibraltar'),
('GN', 'GIN', 'Guinea'),
('GP', 'GLP', 'Guadalupe'),
('GM', 'GMB', 'Gambia'),
('GW', 'GNB', 'Guinea-Bissau'),
('GQ', 'GNQ', 'Guinea Ecuatorial'),
('GR', 'GRC', 'Grecia'),
('GD', 'GRD', 'Granada'),
('GL', 'GRL', 'Groenlandia'),
('GT', 'GTM', 'Guatemala'),
('GF', 'GUF', 'Guayana Francesa'),
('GU', 'GUM', 'Guam'),
('GY', 'GUY', 'Guyana'),
('HK', 'HKG', 'Hong Kong'),
('HM', 'HMD', 'Islas Heard y McDonald'),
('HN', 'HND', 'Honduras'),
('HR', 'HRV', 'Croacia'),
('HT', 'HTI', 'Haití'),
('HU', 'HUN', 'Hungría'),
('ID', 'IDN', 'Indonesia'),
('IN', 'IND', 'India'),
('IM', 'INM', 'Isla de Man'),
('IO', 'IOT', 'Territorio Británico del Océano Índico'),
('IE', 'IRL', 'Irlanda'),
('IR', 'IRN', 'Irán'),
('IQ', 'IRQ', 'Iraq'),
('IS', 'ISL', 'Islandia'),
('IL', 'ISR', 'Israel'),
('IT', 'ITA', 'Italia'),
('JM', 'JAM', 'Jamaica'),
('JO', 'JOR', 'Jordania'),
('JP', 'JPN', 'Japón'),
('KZ', 'KAZ', 'Kazajstán'),
('KE', 'KEN', 'Kenia'),
('KG', 'KGZ', 'Kirguistán'),
('KH', 'KHM', 'Camboya'),
('KI', 'KIR', 'Kiribati'),
('KN', 'KNA', 'San Cristóbal y Nieves'),
('KR', 'KOR', 'Corea del Sur'),
('KW', 'KWT', 'Kuwait'),
('LA', 'LAO', 'Laos'),
('LB', 'LBN', 'Líbano'),
('LR', 'LBR', 'Liberia'),
('LY', 'LBY', 'Libia'),
('LC', 'LCA', 'Santa Lucía'),
('LI', 'LIE', 'Liechtenstein'),
('LK', 'LKA', 'Sri Lanka'),
('LS', 'LSO', 'Lesotho'),
('LT', 'LTU', 'Lituania'),
('LU', 'LUX', 'Luxemburgo'),
('LV', 'LVA', 'Letonia'),
('MO', 'MAC', 'Macao'),
('MA', 'MAR', 'Marruecos'),
('MC', 'MCO', 'Mónaco'),
('MD', 'MDA', 'Moldavia'),
('MG', 'MDG', 'Madagascar'),
('MV', 'MDV', 'Maldivas'),
('MX', 'MEX', 'México'),
('MH', 'MHL', 'Islas Marshall'),
('MK', 'MKD', 'Macedonia'),
('ML', 'MLI', 'Malí'),
('MT', 'MLT', 'Malta'),
('MM', 'MMR', 'Myanmar'),
('ME', 'MNE', 'Montenegro'),
('MN', 'MNG', 'Mongolia'),
('MP', 'MNP', 'Islas Marianas del Norte'),
('MZ', 'MOZ', 'Mozambique'),
('MR', 'MRT', 'Mauritania'),
('MS', 'MSR', 'Montserrat'),
('MQ', 'MTQ', 'Martinica'),
('MU', 'MUS', 'Mauricio'),
('MW', 'MWI', 'Malaui'),
('MY', 'MYS', 'Malasia'),
('YT', 'MYT', 'Mayotte'),
('NA', 'NAM', 'Namibia'),
('NC', 'NCL', 'Nueva Caledonia'),
('NE', 'NER', 'Níger'),
('NF', 'NFK', 'Isla Norfolk'),
('NG', 'NGA', 'Nigeria'),
('NI', 'NIC', 'Nicaragua'),
('NU', 'NIU', 'Niue'),
('NL', 'NLD', 'Países Bajos'),
('NO', 'NOR', 'Noruega'),
('NP', 'NPL', 'Nepal'),
('NR', 'NRU', 'Nauru'),
('NZ', 'NZL', 'Nueva Zelanda'),
('OM', 'OMN', 'Omán'),
('PK', 'PAK', 'Pakistán'),
('PA', 'PAN', 'Panamá'),
('PN', 'PCN', 'Islas Pitcairn'),
('PE', 'PER', 'Perú'),
('PH', 'PHL', 'Filipinas'),
('PW', 'PLW', 'Palaos'),
('PG', 'PNG', 'Papúa Nueva Guinea'),
('PL', 'POL', 'Polonia'),
('PR', 'PRI', 'Puerto Rico'),
('KP', 'PRK', 'Corea del Norte'),
('PT', 'PRT', 'Portugal'),
('PY', 'PRY', 'Paraguay'),
('PS', 'PSE', 'Palestina'),
('PF', 'PYF', 'Polinesia Francesa'),
('QA', 'QAT', 'Qatar'),
('RE', 'REU', 'Reunión'),
('RO', 'ROU', 'Rumania'),
('RU', 'RUS', 'Rusia'),
('RW', 'RWA', 'Ruanda'),
('SA', 'SAU', 'Arabia Saudí'),
('SD', 'SDN', 'Sudán'),
('SN', 'SEN', 'Senegal'),
('SG', 'SGP', 'Singapur'),
('GS', 'SGS', 'Islas Georgias del Sur y Sandwich del Sur'),
('SH', 'SHN', 'Santa Helena'),
('SJ', 'SJM', 'Svalbard y Jan Mayen'),
('SB', 'SLB', 'Islas Salomón'),
('SL', 'SLE', 'Sierra Leona'),
('SV', 'SLV', 'El Salvador'),
('SM', 'SMR', 'San Marino'),
('SO', 'SOM', 'Somalia'),
('PM', 'SPM', 'San Pedro y Miquelón'),
('RS', 'SRB', 'Serbia'),
('ST', 'STP', 'Santo Tomé y Príncipe'),
('SR', 'SUR', 'Surinam'),
('SK', 'SVK', 'Eslovaquia'),
('SI', 'SVN', 'Eslovenia'),
('SE', 'SWE', 'Suecia'),
('SZ', 'SWZ', 'Suazilandia'),
('SC', 'SYC', 'Seychelles'),
('SY', 'SYR', 'Siria'),
('TC', 'TCA', 'Islas Turcas y Caicos'),
('TD', 'TCD', 'Chad'),
('TG', 'TGO', 'Togo'),
('TH', 'THA', 'Tailandia'),
('TJ', 'TJK', 'Tayikistán'),
('TK', 'TKL', 'Tokelau'),
('TM', 'TKM', 'Turkmenistán'),
('TL', 'TLS', 'Timor Oriental'),
('TO', 'TON', 'Tonga'),
('TT', 'TTO', 'Trinidad y Tobago'),
('TN', 'TUN', 'Túnez'),
('TR', 'TUR', 'Turquía'),
('TV', 'TUV', 'Tuvalu'),
('TW', 'TWN', 'Taiwán'),
('TZ', 'TZA', 'Tanzania'),
('UG', 'UGA', 'Uganda'),
('UA', 'UKR', 'Ucrania'),
('UM', 'UMI', 'Islas Ultramarinas de Estados Unidos'),
('UY', 'URY', 'Uruguay'),
('US', 'USA', 'Estados Unidos'),
('UZ', 'UZB', 'Uzbekistán'),
('VA', 'VAT', 'Ciudad del Vaticano'),
('VC', 'VCT', 'San Vicente y las Granadinas'),
('VE', 'VEN', 'Venezuela'),
('VG', 'VGB', 'Islas Vírgenes Británicas'),
('VI', 'VIR', 'Islas Vírgenes de los Estados Unidos'),
('VN', 'VNM', 'Vietnam'),
('VU', 'VUT', 'Vanuatu'),
('WF', 'WLF', 'Wallis y Futuna'),
('WS', 'WSM', 'Samoa'),
('YE', 'YEM', 'Yemen'),
('ZA', 'ZAF', 'Sudáfrica'),
('ZM', 'ZMB', 'Zambia'),
('ZW', 'ZWE', 'Zimbabue');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partidas`
--

CREATE TABLE `partidas` (
  `baseimponible` double NOT NULL DEFAULT '0',
  `cifnif` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `codcontrapartida` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `coddivisa` varchar(3) COLLATE utf8_bin DEFAULT NULL,
  `codserie` varchar(4) COLLATE utf8_bin DEFAULT NULL,
  `codsubcuenta` varchar(15) COLLATE utf8_bin NOT NULL,
  `concepto` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `debe` double NOT NULL DEFAULT '0',
  `documento` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `factura` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `haber` double NOT NULL DEFAULT '0',
  `idasiento` int(11) NOT NULL,
  `idcontrapartida` int(11) DEFAULT NULL,
  `idpartida` int(11) NOT NULL,
  `idsubcuenta` int(11) NOT NULL,
  `iva` double DEFAULT NULL,
  `orden` int(11) NOT NULL DEFAULT '0',
  `punteada` tinyint(1) NOT NULL DEFAULT '0',
  `recargo` double NOT NULL DEFAULT '0',
  `saldo` double NOT NULL DEFAULT '0',
  `tasaconv` double NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidoscli`
--

CREATE TABLE `pedidoscli` (
  `apartado` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `cifnif` varchar(30) COLLATE utf8_bin NOT NULL,
  `ciudad` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `codagente` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `codalmacen` varchar(4) COLLATE utf8_bin DEFAULT NULL,
  `codcliente` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `coddivisa` varchar(3) COLLATE utf8_bin NOT NULL,
  `codejercicio` varchar(4) COLLATE utf8_bin NOT NULL,
  `codigo` varchar(20) COLLATE utf8_bin NOT NULL,
  `codigoenv` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `codpago` varchar(10) COLLATE utf8_bin NOT NULL,
  `codpais` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `codpostal` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `codserie` varchar(4) COLLATE utf8_bin NOT NULL,
  `codtrans` varchar(8) COLLATE utf8_bin DEFAULT NULL,
  `direccion` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `dtopor1` double DEFAULT NULL,
  `dtopor2` double DEFAULT NULL,
  `editable` tinyint(1) DEFAULT NULL,
  `fecha` date NOT NULL,
  `femail` date DEFAULT NULL,
  `finoferta` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `idcontactoenv` int(11) DEFAULT NULL,
  `idcontactofact` int(11) DEFAULT NULL,
  `idempresa` int(11) DEFAULT NULL,
  `idestado` int(11) DEFAULT NULL,
  `idpedido` int(11) NOT NULL,
  `irpf` double DEFAULT NULL,
  `neto` double DEFAULT NULL,
  `netosindto` double DEFAULT '0',
  `nick` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `nombrecliente` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `numero` varchar(12) COLLATE utf8_bin NOT NULL,
  `numero2` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `observaciones` text COLLATE utf8_bin,
  `provincia` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `tasaconv` double DEFAULT NULL,
  `total` double DEFAULT NULL,
  `totalcoste` double DEFAULT NULL,
  `totaleuros` double DEFAULT NULL,
  `totalirpf` double DEFAULT NULL,
  `totaliva` double DEFAULT NULL,
  `totalrecargo` double DEFAULT NULL,
  `totalsuplidos` double DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidosprov`
--

CREATE TABLE `pedidosprov` (
  `cifnif` varchar(30) COLLATE utf8_bin NOT NULL,
  `codalmacen` varchar(4) COLLATE utf8_bin DEFAULT NULL,
  `coddivisa` varchar(3) COLLATE utf8_bin NOT NULL,
  `codejercicio` varchar(4) COLLATE utf8_bin NOT NULL,
  `codigo` varchar(20) COLLATE utf8_bin NOT NULL,
  `codpago` varchar(10) COLLATE utf8_bin NOT NULL,
  `codproveedor` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `codserie` varchar(4) COLLATE utf8_bin NOT NULL,
  `dtopor1` double DEFAULT NULL,
  `dtopor2` double DEFAULT NULL,
  `editable` tinyint(1) DEFAULT NULL,
  `fecha` date NOT NULL,
  `femail` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `idempresa` int(11) DEFAULT NULL,
  `idestado` int(11) DEFAULT NULL,
  `idpedido` int(11) NOT NULL,
  `irpf` double DEFAULT NULL,
  `neto` double DEFAULT NULL,
  `netosindto` double DEFAULT '0',
  `nick` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `nombre` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `numero` varchar(12) COLLATE utf8_bin NOT NULL,
  `numproveedor` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `observaciones` text COLLATE utf8_bin,
  `tasaconv` double DEFAULT NULL,
  `total` double DEFAULT NULL,
  `totaleuros` double DEFAULT NULL,
  `totalirpf` double DEFAULT NULL,
  `totaliva` double DEFAULT NULL,
  `totalrecargo` double DEFAULT NULL,
  `totalsuplidos` double DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `presupuestoscli`
--

CREATE TABLE `presupuestoscli` (
  `apartado` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `cifnif` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `ciudad` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `codagente` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `codalmacen` varchar(4) COLLATE utf8_bin DEFAULT NULL,
  `codcliente` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `coddivisa` varchar(3) COLLATE utf8_bin NOT NULL,
  `codejercicio` varchar(4) COLLATE utf8_bin NOT NULL,
  `codigo` varchar(20) COLLATE utf8_bin NOT NULL,
  `codigoenv` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `codpago` varchar(10) COLLATE utf8_bin NOT NULL,
  `codpais` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `codpostal` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `codserie` varchar(4) COLLATE utf8_bin NOT NULL,
  `codtrans` varchar(8) COLLATE utf8_bin DEFAULT NULL,
  `direccion` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `dtopor1` double DEFAULT NULL,
  `dtopor2` double DEFAULT NULL,
  `editable` tinyint(1) DEFAULT NULL,
  `fecha` date NOT NULL,
  `femail` date DEFAULT NULL,
  `finoferta` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `idcontactoenv` int(11) DEFAULT NULL,
  `idcontactofact` int(11) DEFAULT NULL,
  `idempresa` int(11) DEFAULT NULL,
  `idestado` int(11) DEFAULT NULL,
  `idpresupuesto` int(11) NOT NULL,
  `irpf` double DEFAULT NULL,
  `neto` double DEFAULT NULL,
  `netosindto` double DEFAULT '0',
  `nick` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `nombrecliente` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `numero` varchar(12) COLLATE utf8_bin NOT NULL,
  `numero2` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `observaciones` text COLLATE utf8_bin,
  `provincia` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `tasaconv` double DEFAULT NULL,
  `total` double DEFAULT NULL,
  `totalcoste` double DEFAULT NULL,
  `totaleuros` double DEFAULT NULL,
  `totalirpf` double DEFAULT NULL,
  `totaliva` double DEFAULT NULL,
  `totalrecargo` double DEFAULT NULL,
  `totalsuplidos` double DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `presupuestoscli`
--

INSERT INTO `presupuestoscli` (`apartado`, `cifnif`, `ciudad`, `codagente`, `codalmacen`, `codcliente`, `coddivisa`, `codejercicio`, `codigo`, `codigoenv`, `codpago`, `codpais`, `codpostal`, `codserie`, `codtrans`, `direccion`, `dtopor1`, `dtopor2`, `editable`, `fecha`, `femail`, `finoferta`, `hora`, `idcontactoenv`, `idcontactofact`, `idempresa`, `idestado`, `idpresupuesto`, `irpf`, `neto`, `netosindto`, `nick`, `nombrecliente`, `numero`, `numero2`, `observaciones`, `provincia`, `tasaconv`, `total`, `totalcoste`, `totaleuros`, `totalirpf`, `totaliva`, `totalrecargo`, `totalsuplidos`) VALUES
('', '', '', NULL, 'ALG', '1', 'PAB', '2022', 'PRE2022A1', '', 'CONT', 'PAN', '', 'A', NULL, '', 0, 0, 1, '2022-10-03', NULL, NULL, '19:18:26', NULL, 1, 1, 1, 1, 0, 14, 14, 'admin', 'Mayra Peñaloza', '1', '', '', '', 1.128, 14, 0, 12.41135, 0, 0, 0, 0),
('', 'xxxx-0000', '', NULL, 'ALG', '2', 'USD', '2022', 'PRE2022A2', 'IDN-01', 'CONT', 'PAN', '', 'A', NULL, '', 0, 0, 1, '2022-10-04', '2022-10-09', NULL, '10:02:40', 2, 2, 1, 1, 2, 0, 67.05, 67.05, 'admin', 'Gloria Camargo', '2', '', 'Esto no es una factura.', '', 0, 68.24, 0, 0, 0, 1.19, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `presupuestosprov`
--

CREATE TABLE `presupuestosprov` (
  `cifnif` varchar(30) COLLATE utf8_bin NOT NULL,
  `codalmacen` varchar(4) COLLATE utf8_bin DEFAULT NULL,
  `codejercicio` varchar(4) COLLATE utf8_bin NOT NULL,
  `codigo` varchar(20) COLLATE utf8_bin NOT NULL,
  `coddivisa` varchar(3) COLLATE utf8_bin NOT NULL,
  `codpago` varchar(10) COLLATE utf8_bin NOT NULL,
  `codproveedor` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `codserie` varchar(4) COLLATE utf8_bin NOT NULL,
  `dtopor1` double DEFAULT NULL,
  `dtopor2` double DEFAULT NULL,
  `editable` tinyint(1) DEFAULT NULL,
  `fecha` date NOT NULL,
  `femail` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `idempresa` int(11) DEFAULT NULL,
  `idestado` int(11) DEFAULT NULL,
  `idpresupuesto` int(11) NOT NULL,
  `irpf` double DEFAULT NULL,
  `neto` double DEFAULT NULL,
  `netosindto` double DEFAULT '0',
  `nick` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `nombre` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `numero` varchar(12) COLLATE utf8_bin NOT NULL,
  `numproveedor` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `observaciones` text COLLATE utf8_bin,
  `tasaconv` double DEFAULT NULL,
  `total` double DEFAULT NULL,
  `totaleuros` double DEFAULT NULL,
  `totalirpf` double DEFAULT NULL,
  `totaliva` double DEFAULT NULL,
  `totalrecargo` double DEFAULT NULL,
  `totalsuplidos` double DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `actualizado` timestamp NULL DEFAULT NULL,
  `bloqueado` tinyint(1) DEFAULT '0',
  `codfabricante` varchar(8) COLLATE utf8_bin DEFAULT NULL,
  `codfamilia` varchar(8) COLLATE utf8_bin DEFAULT NULL,
  `codimpuesto` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `codsubcuentacom` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `codsubcuentairpfcom` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `codsubcuentaven` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `descripcion` text COLLATE utf8_bin,
  `fechaalta` date DEFAULT NULL,
  `idproducto` int(11) NOT NULL,
  `nostock` tinyint(1) DEFAULT '0',
  `observaciones` text COLLATE utf8_bin,
  `precio` double DEFAULT '0',
  `publico` tinyint(1) DEFAULT '0',
  `referencia` varchar(30) COLLATE utf8_bin NOT NULL,
  `secompra` tinyint(1) DEFAULT '1',
  `sevende` tinyint(1) DEFAULT '1',
  `stockfis` double DEFAULT '0',
  `ventasinstock` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productosprov`
--

CREATE TABLE `productosprov` (
  `actualizado` timestamp NULL DEFAULT NULL,
  `coddivisa` varchar(3) COLLATE utf8_bin DEFAULT NULL,
  `codproveedor` varchar(10) COLLATE utf8_bin NOT NULL,
  `dtopor` double DEFAULT NULL,
  `dtopor2` double DEFAULT NULL,
  `id` int(11) NOT NULL,
  `idproducto` int(11) DEFAULT NULL,
  `neto` double DEFAULT NULL,
  `precio` double DEFAULT NULL,
  `referencia` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `refproveedor` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `acreedor` tinyint(1) DEFAULT '0',
  `cifnif` varchar(30) COLLATE utf8_bin NOT NULL,
  `codcliente` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `codimpuestoportes` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `codpago` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `codproveedor` varchar(10) COLLATE utf8_bin NOT NULL,
  `codretencion` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `codserie` varchar(4) COLLATE utf8_bin DEFAULT NULL,
  `codsubcuenta` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `debaja` tinyint(1) DEFAULT '0',
  `email` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `fax` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `fechaalta` date DEFAULT NULL,
  `fechabaja` date DEFAULT NULL,
  `idcontacto` int(11) DEFAULT NULL,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL,
  `observaciones` text COLLATE utf8_bin,
  `personafisica` tinyint(1) DEFAULT '1',
  `razonsocial` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `regimeniva` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `telefono1` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `telefono2` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `tipoidfiscal` varchar(25) COLLATE utf8_bin DEFAULT NULL,
  `web` varchar(100) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincias`
--

CREATE TABLE `provincias` (
  `codeid` varchar(2) COLLATE utf8_bin DEFAULT NULL,
  `codisoprov` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `codpais` varchar(20) COLLATE utf8_bin NOT NULL,
  `idprovincia` int(11) NOT NULL,
  `provincia` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `provincias`
--

INSERT INTO `provincias` (`codeid`, `codisoprov`, `codpais`, `idprovincia`, `provincia`) VALUES
(NULL, 'PAN-1', 'PAN', 1, 'Bocas del Toro'),
(NULL, 'PAN-2', 'PAN', 2, 'Coclé'),
(NULL, 'PAN-3', 'PAN', 3, 'Colón'),
(NULL, 'PAN-4', 'PAN', 4, 'Chiriquí'),
(NULL, 'PAN-5', 'PAN', 5, 'Darién'),
(NULL, 'PAN-6', 'PAN', 6, 'Herrera'),
(NULL, 'PAN-7', 'PAN', 7, 'Los Santos'),
(NULL, 'PAN-8', 'PAN', 8, 'Panamá'),
(NULL, 'PAN-9', 'PAN', 9, 'Veraguas'),
(NULL, 'PAN-13', 'PAN', 10, 'Panamá Oeste'),
(NULL, 'PAN-EW', 'PAN', 11, 'Emberá-Wounaan'),
(NULL, 'PAN-KY', 'PAN', 12, 'Guna Yala'),
(NULL, 'PAN-NB', 'PAN', 13, 'Ngäbe-Buglé');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recibospagoscli`
--

CREATE TABLE `recibospagoscli` (
  `codcliente` varchar(10) COLLATE utf8_bin NOT NULL,
  `coddivisa` varchar(3) COLLATE utf8_bin DEFAULT NULL,
  `codigofactura` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `codpago` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `fecha` date NOT NULL,
  `fechapago` date DEFAULT NULL,
  `gastos` double DEFAULT '0',
  `idempresa` int(11) NOT NULL,
  `idfactura` int(11) DEFAULT NULL,
  `idrecibo` int(11) NOT NULL,
  `importe` double DEFAULT '0',
  `liquidado` double DEFAULT '0',
  `nick` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `observaciones` text COLLATE utf8_bin,
  `pagado` tinyint(1) DEFAULT '0',
  `vencimiento` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `recibospagoscli`
--

INSERT INTO `recibospagoscli` (`codcliente`, `coddivisa`, `codigofactura`, `codpago`, `fecha`, `fechapago`, `gastos`, `idempresa`, `idfactura`, `idrecibo`, `importe`, `liquidado`, `nick`, `numero`, `observaciones`, `pagado`, `vencimiento`) VALUES
('1', 'PAB', 'FAC2022A1', 'CONT', '2022-10-03', '2022-10-03', 0, 1, 1, 1, 14, 0, 'admin', 1, NULL, 1, '2022-10-03'),
('3', 'USD', 'FAC2022A2', 'CONT', '2022-10-10', NULL, 0, 1, 2, 2, 280, 0, 'admin', 1, NULL, 0, '2022-10-10'),
('4', 'USD', 'FAC2022A3', 'CONT', '2022-10-10', NULL, 0, 1, 3, 3, 42.8, 0, 'admin', 1, NULL, 0, '2022-10-10'),
('5', 'USD', 'FAC2022A4', 'CONT', '2022-10-10', '2022-10-10', 0, 1, 4, 4, 10, 0, 'admin', 1, NULL, 1, '2022-10-10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recibospagosprov`
--

CREATE TABLE `recibospagosprov` (
  `coddivisa` varchar(3) COLLATE utf8_bin DEFAULT NULL,
  `codigofactura` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `codpago` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `codproveedor` varchar(10) COLLATE utf8_bin NOT NULL,
  `fecha` date NOT NULL,
  `fechapago` date DEFAULT NULL,
  `idempresa` int(11) NOT NULL,
  `idfactura` int(11) DEFAULT NULL,
  `idrecibo` int(11) NOT NULL,
  `importe` double DEFAULT '0',
  `liquidado` double DEFAULT '0',
  `nick` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `observaciones` text COLLATE utf8_bin,
  `pagado` tinyint(1) DEFAULT '0',
  `vencimiento` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `regularizacionimpuestos`
--

CREATE TABLE `regularizacionimpuestos` (
  `bloquear` tinyint(1) DEFAULT '1',
  `codejercicio` varchar(4) COLLATE utf8_bin NOT NULL,
  `codsubcuentaacr` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `codsubcuentadeu` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `fechaasiento` date DEFAULT NULL,
  `fechafin` date NOT NULL,
  `fechainicio` date NOT NULL,
  `idasiento` int(11) DEFAULT NULL,
  `idempresa` int(11) DEFAULT NULL,
  `idregiva` int(11) NOT NULL,
  `idsubcuentaacr` int(11) DEFAULT NULL,
  `idsubcuentadeu` int(11) DEFAULT NULL,
  `periodo` varchar(8) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reportsamounts`
--

CREATE TABLE `reportsamounts` (
  `channel` int(11) DEFAULT NULL,
  `endcodsubaccount` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `enddate` date DEFAULT NULL,
  `id` int(11) NOT NULL,
  `idcompany` int(11) DEFAULT NULL,
  `level` int(11) NOT NULL DEFAULT '0',
  `name` varchar(100) COLLATE utf8_bin NOT NULL,
  `startcodsubaccount` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `startdate` date NOT NULL,
  `ignoreclosure` tinyint(1) NOT NULL DEFAULT '0',
  `ignoreregularization` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reportsbalance`
--

CREATE TABLE `reportsbalance` (
  `channel` int(11) DEFAULT NULL,
  `comparative` tinyint(1) NOT NULL DEFAULT '1',
  `enddate` date DEFAULT NULL,
  `id` int(11) NOT NULL,
  `idcompany` int(11) DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_bin NOT NULL,
  `type` varchar(20) COLLATE utf8_bin NOT NULL,
  `startdate` date NOT NULL,
  `subtype` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reportsledger`
--

CREATE TABLE `reportsledger` (
  `channel` int(11) DEFAULT NULL,
  `endcodsubaccount` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `enddate` date DEFAULT NULL,
  `endentry` int(11) DEFAULT NULL,
  `groupingtype` varchar(1) COLLATE utf8_bin DEFAULT NULL,
  `id` int(11) NOT NULL,
  `idcompany` int(11) DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_bin NOT NULL,
  `startcodsubaccount` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `startdate` date NOT NULL,
  `startentry` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `retenciones`
--

CREATE TABLE `retenciones` (
  `codretencion` varchar(10) COLLATE utf8_bin NOT NULL,
  `codsubcuentaret` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `codsubcuentaacr` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `descripcion` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `porcentaje` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `codrole` varchar(20) COLLATE utf8_bin NOT NULL,
  `descripcion` varchar(200) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`codrole`, `descripcion`) VALUES
('employee', 'employee');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles_access`
--

CREATE TABLE `roles_access` (
  `allowdelete` tinyint(1) NOT NULL DEFAULT '1',
  `allowupdate` tinyint(1) NOT NULL DEFAULT '1',
  `codrole` varchar(20) COLLATE utf8_bin NOT NULL,
  `id` int(11) NOT NULL,
  `onlyownerdata` tinyint(1) NOT NULL DEFAULT '0',
  `pagename` varchar(40) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `roles_access`
--

INSERT INTO `roles_access` (`allowdelete`, `allowupdate`, `codrole`, `id`, `onlyownerdata`, `pagename`) VALUES
(1, 1, 'employee', 1, 0, 'CopyModel'),
(1, 1, 'employee', 2, 0, 'Dashboard'),
(1, 1, 'employee', 3, 0, 'DocumentStitcher'),
(1, 1, 'employee', 4, 0, 'EditAgenciaTransporte'),
(1, 1, 'employee', 5, 0, 'EditAlbaranCliente'),
(1, 1, 'employee', 6, 0, 'EditAlbaranProveedor'),
(1, 1, 'employee', 7, 0, 'EditAlmacen'),
(1, 1, 'employee', 8, 0, 'EditAsiento'),
(1, 1, 'employee', 9, 0, 'EditAtributo'),
(1, 1, 'employee', 10, 0, 'EditBalance'),
(1, 1, 'employee', 11, 0, 'EditCliente'),
(1, 1, 'employee', 12, 0, 'EditConceptoPartida'),
(1, 1, 'employee', 13, 0, 'EditContacto'),
(1, 1, 'employee', 14, 0, 'EditCuenta'),
(1, 1, 'employee', 15, 0, 'EditCuentaBanco'),
(1, 1, 'employee', 16, 0, 'EditCuentaEspecial'),
(1, 1, 'employee', 17, 0, 'EditDiario'),
(1, 1, 'employee', 18, 0, 'EditEjercicio'),
(1, 1, 'employee', 19, 0, 'EditFabricante'),
(1, 1, 'employee', 20, 0, 'EditFacturaCliente'),
(1, 1, 'employee', 21, 0, 'EditFacturaProveedor'),
(1, 1, 'employee', 22, 0, 'EditFamilia'),
(1, 1, 'employee', 23, 0, 'EditFormaPago'),
(1, 1, 'employee', 24, 0, 'EditGrupoClientes'),
(1, 1, 'employee', 25, 0, 'EditImpuesto'),
(1, 1, 'employee', 26, 0, 'EditPedidoCliente'),
(1, 1, 'employee', 27, 0, 'EditPedidoProveedor'),
(1, 1, 'employee', 28, 0, 'EditPresupuestoCliente'),
(1, 1, 'employee', 29, 0, 'EditPresupuestoProveedor'),
(1, 1, 'employee', 30, 0, 'EditProducto'),
(1, 1, 'employee', 31, 0, 'EditProveedor'),
(1, 1, 'employee', 32, 0, 'EditReciboCliente'),
(1, 1, 'employee', 33, 0, 'EditReciboProveedor'),
(1, 1, 'employee', 34, 0, 'EditReportAmount'),
(1, 1, 'employee', 35, 0, 'EditReportBalance'),
(1, 1, 'employee', 36, 0, 'EditReportLedger'),
(1, 1, 'employee', 37, 0, 'EditRetencion'),
(1, 1, 'employee', 38, 0, 'EditSerie'),
(1, 1, 'employee', 39, 0, 'EditSubcuenta'),
(1, 1, 'employee', 40, 0, 'EditTarifa'),
(1, 1, 'employee', 41, 0, 'ListAgenciaTransporte'),
(1, 1, 'employee', 42, 0, 'ListAlbaranCliente'),
(1, 1, 'employee', 43, 0, 'ListAlbaranProveedor'),
(1, 1, 'employee', 44, 0, 'ListAlmacen'),
(1, 1, 'employee', 45, 0, 'ListAsiento'),
(1, 1, 'employee', 46, 0, 'ListAtributo'),
(1, 1, 'employee', 47, 0, 'ListCliente'),
(1, 1, 'employee', 48, 0, 'ListCuenta'),
(1, 1, 'employee', 49, 0, 'ListEjercicio'),
(1, 1, 'employee', 50, 0, 'ListFabricante'),
(1, 1, 'employee', 51, 0, 'ListFacturaCliente'),
(1, 1, 'employee', 52, 0, 'ListFacturaProveedor'),
(1, 1, 'employee', 53, 0, 'ListFamilia'),
(1, 1, 'employee', 54, 0, 'ListFormaPago'),
(1, 1, 'employee', 55, 0, 'ListImpuesto'),
(1, 1, 'employee', 56, 0, 'ListPedidoCliente'),
(1, 1, 'employee', 57, 0, 'ListPedidoProveedor'),
(1, 1, 'employee', 58, 0, 'ListPresupuestoCliente'),
(1, 1, 'employee', 59, 0, 'ListPresupuestoProveedor'),
(1, 1, 'employee', 60, 0, 'ListProducto'),
(1, 1, 'employee', 61, 0, 'ListProveedor'),
(1, 1, 'employee', 62, 0, 'ListReportAccounting'),
(1, 1, 'employee', 63, 0, 'ListSerie'),
(1, 1, 'employee', 64, 0, 'ListTarifa'),
(1, 1, 'employee', 65, 0, 'MegaSearch'),
(1, 1, 'employee', 66, 0, 'ReportProducto'),
(1, 1, 'employee', 67, 0, 'ReportTaxes'),
(1, 1, 'employee', 68, 0, 'SendMail'),
(1, 1, 'employee', 69, 0, 'EditUser');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles_users`
--

CREATE TABLE `roles_users` (
  `codrole` varchar(20) COLLATE utf8_bin NOT NULL,
  `id` int(11) NOT NULL,
  `nick` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secuencias_documentos`
--

CREATE TABLE `secuencias_documentos` (
  `codejercicio` varchar(4) COLLATE utf8_bin DEFAULT NULL,
  `codserie` varchar(4) COLLATE utf8_bin NOT NULL,
  `idempresa` int(11) NOT NULL,
  `idsecuencia` int(11) NOT NULL,
  `inicio` int(11) DEFAULT NULL,
  `longnumero` int(11) NOT NULL,
  `numero` int(11) NOT NULL,
  `patron` varchar(50) COLLATE utf8_bin NOT NULL,
  `tipodoc` varchar(30) COLLATE utf8_bin NOT NULL,
  `usarhuecos` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `secuencias_documentos`
--

INSERT INTO `secuencias_documentos` (`codejercicio`, `codserie`, `idempresa`, `idsecuencia`, `inicio`, `longnumero`, `numero`, `patron`, `tipodoc`, `usarhuecos`) VALUES
('2022', 'A', 1, 1, 1, 6, 5, 'FAC{EJE}{SERIE}{NUM}', 'FacturaCliente', 1),
('2022', 'A', 1, 2, 1, 6, 3, 'PRE{EJE}{SERIE}{NUM}', 'PresupuestoCliente', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `series`
--

CREATE TABLE `series` (
  `canal` int(11) DEFAULT NULL,
  `codserie` varchar(4) COLLATE utf8_bin NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `iddiario` int(11) DEFAULT NULL,
  `siniva` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `series`
--

INSERT INTO `series` (`canal`, `codserie`, `descripcion`, `iddiario`, `siniva`) VALUES
(0, 'A', 'Identidad', NULL, 0),
(NULL, 'R', 'Rectificativas', NULL, 0),
(NULL, 'S', 'Simplificadas', NULL, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `settings`
--

CREATE TABLE `settings` (
  `name` varchar(50) COLLATE utf8_bin NOT NULL,
  `properties` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `settings`
--

INSERT INTO `settings` (`name`, `properties`) VALUES
('default', '{\"codpais\":\"PAN\",\"decimals\":\"2\",\"decimal_separator\":\".\",\"thousands_separator\":\",\",\"currency_position\":\"left\",\"item_limit\":50,\"coddivisa\":\"USD\",\"homepage\":\"AdminPlugins\",\"updatesupplierprices\":true,\"ventasinstock\":false,\"codalmacen\":\"ALG\",\"idempresa\":\"1\",\"tipoidfiscal\":\"RUC\",\"codimpuesto\":\"ITBMS\",\"codserie\":\"A\",\"codpago\":\"CONT\",\"validate_iban\":false,\"costpricepolicy\":\"actual-price\",\"codretencion\":null,\"finofertadays\":0,\"codrole\":\"employee\",\"codserierec\":\"A\",\"tablesize\":\"big\",\"idloginimage\":null,\"enable_api\":true,\"enableupdatesbeta\":false}'),
('email', '{\"enc\":\"ssl\",\"host\":\"smtp.gmail.com\",\"mailer\":\"smtp\",\"port\":465,\"email\":\"manuh.apple.dev@gmail.com\",\"password\":\"sxperulszvxovfsg\",\"signature\":\"Este correo es enviado por: Identidad\\r\\nPor favor, no responda a este correo\\r\\n-- Si tiene dudas, por favor p\\u00f3ngase en contacto con su vendedor\",\"user\":\"manuh.apple.dev@gmail.com\",\"authtype\":\"LOGIN\",\"lowsecure\":false,\"emailcc\":\"manuh.apple.dev@gmail.com\",\"emailbcc\":\"\"}');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stocks`
--

CREATE TABLE `stocks` (
  `cantidad` double DEFAULT '0',
  `codalmacen` varchar(4) COLLATE utf8_bin NOT NULL,
  `disponible` double DEFAULT '0',
  `idproducto` int(11) NOT NULL,
  `idstock` int(11) NOT NULL,
  `pterecibir` double DEFAULT '0',
  `referencia` varchar(30) COLLATE utf8_bin NOT NULL,
  `reservada` double DEFAULT '0',
  `stockmax` double DEFAULT '0',
  `stockmin` double DEFAULT '0',
  `ubicacion` varchar(100) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcuentas`
--

CREATE TABLE `subcuentas` (
  `codcuenta` varchar(10) COLLATE utf8_bin NOT NULL,
  `codcuentaesp` varchar(6) COLLATE utf8_bin DEFAULT NULL,
  `codejercicio` varchar(4) COLLATE utf8_bin NOT NULL,
  `codsubcuenta` varchar(15) COLLATE utf8_bin NOT NULL,
  `debe` double NOT NULL DEFAULT '0',
  `descripcion` varchar(255) COLLATE utf8_bin NOT NULL,
  `haber` double NOT NULL DEFAULT '0',
  `idcuenta` int(11) NOT NULL,
  `idsubcuenta` int(11) NOT NULL,
  `saldo` double NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarifas`
--

CREATE TABLE `tarifas` (
  `aplicar` varchar(12) COLLATE utf8_bin DEFAULT NULL,
  `codtarifa` varchar(6) COLLATE utf8_bin NOT NULL,
  `maxpvp` tinyint(1) DEFAULT '0',
  `mincoste` tinyint(1) DEFAULT '0',
  `nombre` varchar(50) COLLATE utf8_bin NOT NULL,
  `valorx` double DEFAULT NULL,
  `valory` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `codagente` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `codalmacen` varchar(4) COLLATE utf8_bin DEFAULT NULL,
  `creationdate` date DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT '1',
  `homepage` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `idempresa` int(11) DEFAULT NULL,
  `langcode` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `lastactivity` timestamp NULL DEFAULT NULL,
  `lastip` varchar(40) COLLATE utf8_bin DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `logkey` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `nick` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`admin`, `codagente`, `codalmacen`, `creationdate`, `email`, `enabled`, `homepage`, `idempresa`, `langcode`, `lastactivity`, `lastip`, `level`, `logkey`, `nick`, `password`) VALUES
(1, NULL, 'ALG', '2022-10-03', 'manuh0170g@icloud.com', 1, 'Dashboard', 1, 'es_PA', '2022-10-10 20:30:17', '190.32.163.248', 99, 'rNW8hDgcViSuK93aJmCP1FwUd7fj2kxIGsTzQAXbB4Opqoy5RMe0Z6YvnELlHt', 'admin', '$2y$10$XfNcRKQUVJLcunxu9HlCfuMo3pHVVvbSH43ThMdelp7t.5RXzAg4S');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `variantes`
--

CREATE TABLE `variantes` (
  `codbarras` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `coste` double DEFAULT '0',
  `idatributovalor1` int(11) DEFAULT NULL,
  `idatributovalor2` int(11) DEFAULT NULL,
  `idatributovalor3` int(11) DEFAULT NULL,
  `idatributovalor4` int(11) DEFAULT NULL,
  `idproducto` int(11) NOT NULL,
  `idvariante` int(11) NOT NULL,
  `margen` double DEFAULT '0',
  `precio` double DEFAULT '0',
  `referencia` varchar(30) COLLATE utf8_bin NOT NULL,
  `stockfis` double DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agenciastrans`
--
ALTER TABLE `agenciastrans`
  ADD PRIMARY KEY (`codtrans`);

--
-- Indices de la tabla `agentes`
--
ALTER TABLE `agentes`
  ADD PRIMARY KEY (`codagente`),
  ADD KEY `ca_agentes_productos` (`idproducto`);

--
-- Indices de la tabla `albaranescli`
--
ALTER TABLE `albaranescli`
  ADD PRIMARY KEY (`idalbaran`),
  ADD UNIQUE KEY `uniq_codigo_albaranescli` (`codigo`,`idempresa`),
  ADD KEY `ca_albaranescli_agentes` (`codagente`),
  ADD KEY `ca_albaranescli_almacenes` (`codalmacen`),
  ADD KEY `ca_albaranescli_clientes` (`codcliente`),
  ADD KEY `ca_albaranescli_divisas` (`coddivisa`),
  ADD KEY `ca_albaranescli_ejercicios` (`codejercicio`),
  ADD KEY `ca_albaranescli_empresas` (`idempresa`),
  ADD KEY `ca_albaranescli_estados` (`idestado`),
  ADD KEY `ca_albaranescli_series` (`codserie`),
  ADD KEY `ca_albaranescli_users` (`nick`);

--
-- Indices de la tabla `albaranesprov`
--
ALTER TABLE `albaranesprov`
  ADD PRIMARY KEY (`idalbaran`),
  ADD UNIQUE KEY `uniq_codigo_albaranesprov` (`codigo`,`idempresa`),
  ADD KEY `ca_albaranesprov_almacenes` (`codalmacen`),
  ADD KEY `ca_albaranesprov_divisas` (`coddivisa`),
  ADD KEY `ca_albaranesprov_ejercicios` (`codejercicio`),
  ADD KEY `ca_albaranesprov_empresas` (`idempresa`),
  ADD KEY `ca_albaranesprov_estados` (`idestado`),
  ADD KEY `ca_albaranesprov_proveedores` (`codproveedor`),
  ADD KEY `ca_albaranesprov_series` (`codserie`),
  ADD KEY `ca_albaranesprov_users` (`nick`);

--
-- Indices de la tabla `almacenes`
--
ALTER TABLE `almacenes`
  ADD PRIMARY KEY (`codalmacen`),
  ADD KEY `ca_almacenes_empresas` (`idempresa`);

--
-- Indices de la tabla `api_access`
--
ALTER TABLE `api_access`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_api_access` (`idapikey`,`resource`);

--
-- Indices de la tabla `api_keys`
--
ALTER TABLE `api_keys`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `asientos`
--
ALTER TABLE `asientos`
  ADD PRIMARY KEY (`idasiento`),
  ADD KEY `ca_asientos_diarios` (`iddiario`),
  ADD KEY `ca_asientos_ejercicios` (`codejercicio`),
  ADD KEY `ca_asientos_empresas` (`idempresa`);

--
-- Indices de la tabla `atributos`
--
ALTER TABLE `atributos`
  ADD PRIMARY KEY (`codatributo`);

--
-- Indices de la tabla `atributos_valores`
--
ALTER TABLE `atributos_valores`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uniq_values_atributos_valores` (`codatributo`,`valor`);

--
-- Indices de la tabla `attached_files`
--
ALTER TABLE `attached_files`
  ADD PRIMARY KEY (`idfile`);

--
-- Indices de la tabla `attached_files_rel`
--
ALTER TABLE `attached_files_rel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ca_attached_files_rel_files` (`idfile`),
  ADD KEY `ca_attached_files_rel_users` (`nick`);

--
-- Indices de la tabla `balances`
--
ALTER TABLE `balances`
  ADD PRIMARY KEY (`codbalance`);

--
-- Indices de la tabla `balancescuentas`
--
ALTER TABLE `balancescuentas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ca_balances_cuentas` (`codbalance`);

--
-- Indices de la tabla `balancescuentasabreviadas`
--
ALTER TABLE `balancescuentasabreviadas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ca_balances_cuentasabreviadas` (`codbalance`);

--
-- Indices de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  ADD PRIMARY KEY (`idciudad`),
  ADD UNIQUE KEY `uniq_ciudad_idprovincia` (`ciudad`,`idprovincia`),
  ADD KEY `ca_ciudades_provincias` (`idprovincia`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`codcliente`),
  ADD KEY `ca_clientes_agentes` (`codagente`),
  ADD KEY `ca_clientes_formaspago` (`codpago`),
  ADD KEY `ca_clientes_grupos` (`codgrupo`),
  ADD KEY `ca_clientes_retenciones` (`codretencion`),
  ADD KEY `ca_clientes_series` (`codserie`),
  ADD KEY `ca_clientes_tarifas` (`codtarifa`);

--
-- Indices de la tabla `conceptos_partidas`
--
ALTER TABLE `conceptos_partidas`
  ADD PRIMARY KEY (`codconcepto`);

--
-- Indices de la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`idcontacto`),
  ADD KEY `ca_contactos_agentes` (`codagente`),
  ADD KEY `ca_contactos_clientes` (`codcliente`),
  ADD KEY `ca_contactos_proveedores` (`codproveedor`);

--
-- Indices de la tabla `cronjobs`
--
ALTER TABLE `cronjobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cuentas`
--
ALTER TABLE `cuentas`
  ADD PRIMARY KEY (`idcuenta`),
  ADD UNIQUE KEY `uniq_codcuenta` (`codcuenta`,`codejercicio`),
  ADD KEY `ca_cuentas_cuentasesp` (`codcuentaesp`),
  ADD KEY `ca_cuentas_ejercicios` (`codejercicio`),
  ADD KEY `ca_cuentas_parent` (`parent_idcuenta`);

--
-- Indices de la tabla `cuentasbanco`
--
ALTER TABLE `cuentasbanco`
  ADD PRIMARY KEY (`codcuenta`),
  ADD KEY `ca_cuentasbanco_empresas` (`idempresa`);

--
-- Indices de la tabla `cuentasbcocli`
--
ALTER TABLE `cuentasbcocli`
  ADD PRIMARY KEY (`codcuenta`),
  ADD KEY `ca_cuentasbcocli_clientes` (`codcliente`);

--
-- Indices de la tabla `cuentasbcopro`
--
ALTER TABLE `cuentasbcopro`
  ADD PRIMARY KEY (`codcuenta`),
  ADD KEY `ca_cuentasbcopro_proveedores` (`codproveedor`);

--
-- Indices de la tabla `cuentasesp`
--
ALTER TABLE `cuentasesp`
  ADD PRIMARY KEY (`codcuentaesp`);

--
-- Indices de la tabla `diarios`
--
ALTER TABLE `diarios`
  ADD PRIMARY KEY (`iddiario`);

--
-- Indices de la tabla `divisas`
--
ALTER TABLE `divisas`
  ADD PRIMARY KEY (`coddivisa`);

--
-- Indices de la tabla `doctransformations`
--
ALTER TABLE `doctransformations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ejercicios`
--
ALTER TABLE `ejercicios`
  ADD PRIMARY KEY (`codejercicio`),
  ADD KEY `ca_ejercicios_empresas` (`idempresa`);

--
-- Indices de la tabla `emails_notifications`
--
ALTER TABLE `emails_notifications`
  ADD PRIMARY KEY (`name`);

--
-- Indices de la tabla `emails_sent`
--
ALTER TABLE `emails_sent`
  ADD PRIMARY KEY (`id`),
  ADD KEY `emails_sent_user` (`nick`);

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`idempresa`),
  ADD KEY `ca_empresas_attached_files` (`idlogo`);

--
-- Indices de la tabla `estados_documentos`
--
ALTER TABLE `estados_documentos`
  ADD PRIMARY KEY (`idestado`);

--
-- Indices de la tabla `fabricantes`
--
ALTER TABLE `fabricantes`
  ADD PRIMARY KEY (`codfabricante`);

--
-- Indices de la tabla `facturascli`
--
ALTER TABLE `facturascli`
  ADD PRIMARY KEY (`idfactura`),
  ADD UNIQUE KEY `uniq_codigo_facturascli` (`codigo`,`idempresa`),
  ADD KEY `ca_facturascli_agentes` (`codagente`),
  ADD KEY `ca_facturascli_almacenes` (`codalmacen`),
  ADD KEY `ca_facturascli_asiento` (`idasiento`),
  ADD KEY `ca_facturascli_clientes` (`codcliente`),
  ADD KEY `ca_facturascli_divisas` (`coddivisa`),
  ADD KEY `ca_facturascli_ejercicios` (`codejercicio`),
  ADD KEY `ca_facturascli_empresas` (`idempresa`),
  ADD KEY `ca_facturascli_estados` (`idestado`),
  ADD KEY `ca_facturascli_series` (`codserie`),
  ADD KEY `ca_facturascli_users` (`nick`);

--
-- Indices de la tabla `facturasprov`
--
ALTER TABLE `facturasprov`
  ADD PRIMARY KEY (`idfactura`),
  ADD UNIQUE KEY `uniq_codigo_facturasprov` (`codigo`,`idempresa`),
  ADD KEY `ca_facturasprov_almacenes` (`codalmacen`),
  ADD KEY `ca_facturasprov_asiento` (`idasiento`),
  ADD KEY `ca_facturasprov_divisas` (`coddivisa`),
  ADD KEY `ca_facturasprov_ejercicios` (`codejercicio`),
  ADD KEY `ca_facturasprov_empresas` (`idempresa`),
  ADD KEY `ca_facturasprov_estados` (`idestado`),
  ADD KEY `ca_facturasprov_proveedores` (`codproveedor`),
  ADD KEY `ca_facturasprov_series` (`codserie`),
  ADD KEY `ca_facturasprov_users` (`nick`);

--
-- Indices de la tabla `familias`
--
ALTER TABLE `familias`
  ADD PRIMARY KEY (`codfamilia`),
  ADD KEY `ca_familia_madre` (`madre`);

--
-- Indices de la tabla `formaspago`
--
ALTER TABLE `formaspago`
  ADD PRIMARY KEY (`codpago`),
  ADD KEY `ca_formaspago_cuentasbanco` (`codcuentabanco`),
  ADD KEY `ca_formaspago_empresas` (`idempresa`);

--
-- Indices de la tabla `formatos_documentos`
--
ALTER TABLE `formatos_documentos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ca_formatos_documentos_series` (`codserie`),
  ADD KEY `ca_formatos_documentos_empresas` (`idempresa`),
  ADD KEY `ca_formatos_documentos_attached_files` (`idlogo`);

--
-- Indices de la tabla `gruposclientes`
--
ALTER TABLE `gruposclientes`
  ADD PRIMARY KEY (`codgrupo`),
  ADD KEY `ca_gruposclientes_tarifas` (`codtarifa`);

--
-- Indices de la tabla `idsfiscales`
--
ALTER TABLE `idsfiscales`
  ADD PRIMARY KEY (`tipoidfiscal`),
  ADD UNIQUE KEY `uniq_idsfiscales_tipoidfiscal_codeid` (`tipoidfiscal`,`codeid`);

--
-- Indices de la tabla `impuestos`
--
ALTER TABLE `impuestos`
  ADD PRIMARY KEY (`codimpuesto`);

--
-- Indices de la tabla `impuestoszonas`
--
ALTER TABLE `impuestoszonas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ca_impuestoszonas_impuestos` (`codimpuesto`),
  ADD KEY `ca_impuestoszonas_impuestos2` (`codimpuestosel`);

--
-- Indices de la tabla `lineasalbaranescli`
--
ALTER TABLE `lineasalbaranescli`
  ADD PRIMARY KEY (`idlinea`),
  ADD KEY `ca_lineasalbaranescli_albaranescli2` (`idalbaran`),
  ADD KEY `ca_lineasalbaranescli_impuestos` (`codimpuesto`),
  ADD KEY `ca_lineasalbaranescli_productos` (`idproducto`);

--
-- Indices de la tabla `lineasalbaranesprov`
--
ALTER TABLE `lineasalbaranesprov`
  ADD PRIMARY KEY (`idlinea`),
  ADD KEY `ca_lineasalbaranesprov_albaranesprov2` (`idalbaran`),
  ADD KEY `ca_lineasalbaranesprov_impuestos` (`codimpuesto`),
  ADD KEY `ca_lineasalbaranesprov_productos` (`idproducto`);

--
-- Indices de la tabla `lineasfacturascli`
--
ALTER TABLE `lineasfacturascli`
  ADD PRIMARY KEY (`idlinea`),
  ADD KEY `ca_lineasfacturascli_facturascli2` (`idfactura`),
  ADD KEY `ca_lineasfacturascli_linearect2` (`idlinearect`),
  ADD KEY `ca_lineasfacturascli_impuestos` (`codimpuesto`),
  ADD KEY `ca_lineasfacturascli_productos` (`idproducto`);

--
-- Indices de la tabla `lineasfacturasprov`
--
ALTER TABLE `lineasfacturasprov`
  ADD PRIMARY KEY (`idlinea`),
  ADD KEY `ca_lineasfacturasprov_facturasprov2` (`idfactura`),
  ADD KEY `ca_lineasfacturasprov_linearect2` (`idlinearect`),
  ADD KEY `ca_lineasfacturasprov_impuestos` (`codimpuesto`),
  ADD KEY `ca_lineasfacturasprov_productos` (`idproducto`);

--
-- Indices de la tabla `lineaspedidoscli`
--
ALTER TABLE `lineaspedidoscli`
  ADD PRIMARY KEY (`idlinea`),
  ADD KEY `ca_lineaspedidoscli_impuestos` (`codimpuesto`),
  ADD KEY `ca_lineaspedidoscli_productos` (`idproducto`),
  ADD KEY `ca_lineaspedidoscli_pedidoscli` (`idpedido`);

--
-- Indices de la tabla `lineaspedidosprov`
--
ALTER TABLE `lineaspedidosprov`
  ADD PRIMARY KEY (`idlinea`),
  ADD KEY `ca_lineaspedidosprov_impuestos` (`codimpuesto`),
  ADD KEY `ca_lineaspedidosprov_pedidosprov` (`idpedido`),
  ADD KEY `ca_lineaspedidosprov_productos` (`idproducto`);

--
-- Indices de la tabla `lineaspresupuestoscli`
--
ALTER TABLE `lineaspresupuestoscli`
  ADD PRIMARY KEY (`idlinea`),
  ADD KEY `ca_lineaspresupuestoscli_impuestos` (`codimpuesto`),
  ADD KEY `ca_lineaspresupuestoscli_presupuestoscli` (`idpresupuesto`),
  ADD KEY `ca_lineaspresupuestoscli_productos` (`idproducto`);

--
-- Indices de la tabla `lineaspresupuestosprov`
--
ALTER TABLE `lineaspresupuestosprov`
  ADD PRIMARY KEY (`idlinea`),
  ADD KEY `ca_lineaspresupuestosprov_impuestos` (`codimpuesto`),
  ADD KEY `ca_lineaspresupuestosprov_presupuestosprov` (`idpresupuesto`),
  ADD KEY `ca_lineaspresupuestosprov_productos` (`idproducto`);

--
-- Indices de la tabla `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`name`);

--
-- Indices de la tabla `pages_filters`
--
ALTER TABLE `pages_filters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ca_pagesfilters_users` (`nick`);

--
-- Indices de la tabla `pages_options`
--
ALTER TABLE `pages_options`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uniq_pages_options` (`name`,`nick`),
  ADD KEY `ca_pagesoptions_users` (`nick`);

--
-- Indices de la tabla `pagoscli`
--
ALTER TABLE `pagoscli`
  ADD PRIMARY KEY (`idpago`),
  ADD KEY `ca_pagoscli_asiento` (`idasiento`),
  ADD KEY `ca_pagoscli_recibo` (`idrecibo`);

--
-- Indices de la tabla `pagosprov`
--
ALTER TABLE `pagosprov`
  ADD PRIMARY KEY (`idpago`),
  ADD KEY `ca_pagosprov_asiento` (`idasiento`),
  ADD KEY `ca_pagosprov_recibo` (`idrecibo`);

--
-- Indices de la tabla `paises`
--
ALTER TABLE `paises`
  ADD PRIMARY KEY (`codpais`),
  ADD UNIQUE KEY `uniq_codiso_paises` (`codiso`);

--
-- Indices de la tabla `partidas`
--
ALTER TABLE `partidas`
  ADD PRIMARY KEY (`idpartida`),
  ADD KEY `ca_partidas_asientos` (`idasiento`),
  ADD KEY `ca_partidas_subcuentas` (`idsubcuenta`),
  ADD KEY `ca_partidas_subcuentas2` (`idcontrapartida`);

--
-- Indices de la tabla `pedidoscli`
--
ALTER TABLE `pedidoscli`
  ADD PRIMARY KEY (`idpedido`),
  ADD UNIQUE KEY `uniq_codigo_pedidoscli` (`codigo`,`idempresa`),
  ADD KEY `ca_pedidoscli_agentes` (`codagente`),
  ADD KEY `ca_pedidoscli_almacenes` (`codalmacen`),
  ADD KEY `ca_pedidoscli_clientes` (`codcliente`),
  ADD KEY `ca_pedidoscli_divisas` (`coddivisa`),
  ADD KEY `ca_pedidoscli_ejercicios` (`codejercicio`),
  ADD KEY `ca_pedidoscli_empresas` (`idempresa`),
  ADD KEY `ca_pedidoscli_estados` (`idestado`),
  ADD KEY `ca_pedidoscli_series` (`codserie`),
  ADD KEY `ca_pedidoscli_users` (`nick`);

--
-- Indices de la tabla `pedidosprov`
--
ALTER TABLE `pedidosprov`
  ADD PRIMARY KEY (`idpedido`),
  ADD UNIQUE KEY `uniq_codigo_pedidosprov` (`codigo`,`idempresa`),
  ADD KEY `ca_pedidosprov_almacenes` (`codalmacen`),
  ADD KEY `ca_pedidosprov_divisas` (`coddivisa`),
  ADD KEY `ca_pedidosprov_ejercicios` (`codejercicio`),
  ADD KEY `ca_pedidosprov_empresas` (`idempresa`),
  ADD KEY `ca_pedidosprov_estados` (`idestado`),
  ADD KEY `ca_pedidosprov_proveedores` (`codproveedor`),
  ADD KEY `ca_pedidosprov_series` (`codserie`),
  ADD KEY `ca_pedidosprov_users` (`nick`);

--
-- Indices de la tabla `presupuestoscli`
--
ALTER TABLE `presupuestoscli`
  ADD PRIMARY KEY (`idpresupuesto`),
  ADD UNIQUE KEY `uniq_codigo_presupuestoscli` (`codigo`,`idempresa`),
  ADD KEY `ca_presupuestoscli_agentes` (`codagente`),
  ADD KEY `ca_presupuestoscli_almacenes` (`codalmacen`),
  ADD KEY `ca_presupuestoscli_clientes` (`codcliente`),
  ADD KEY `ca_presupuestoscli_divisas` (`coddivisa`),
  ADD KEY `ca_presupuestoscli_ejercicios` (`codejercicio`),
  ADD KEY `ca_presupuestoscli_empresas` (`idempresa`),
  ADD KEY `ca_presupuestoscli_estados` (`idestado`),
  ADD KEY `ca_presupuestoscli_series` (`codserie`),
  ADD KEY `ca_presupuestoscli_users` (`nick`);

--
-- Indices de la tabla `presupuestosprov`
--
ALTER TABLE `presupuestosprov`
  ADD PRIMARY KEY (`idpresupuesto`),
  ADD UNIQUE KEY `uniq_codigo_presupuestosprov` (`codigo`,`idempresa`),
  ADD KEY `ca_presupuestosprov_almacenes` (`codalmacen`),
  ADD KEY `ca_presupuestosprov_divisas` (`coddivisa`),
  ADD KEY `ca_presupuestosprov_ejercicios` (`codejercicio`),
  ADD KEY `ca_presupuestosprov_empresas` (`idempresa`),
  ADD KEY `ca_presupuestosprov_estados` (`idestado`),
  ADD KEY `ca_presupuestosprov_proveedores` (`codproveedor`),
  ADD KEY `ca_presupuestosprov_series` (`codserie`),
  ADD KEY `ca_presupuestosprov_users` (`nick`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idproducto`),
  ADD UNIQUE KEY `uniq_productos_referencia` (`referencia`),
  ADD KEY `ca_productos_fabricantes` (`codfabricante`),
  ADD KEY `ca_productos_familias` (`codfamilia`),
  ADD KEY `ca_productos_impuestos` (`codimpuesto`);

--
-- Indices de la tabla `productosprov`
--
ALTER TABLE `productosprov`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uniq_productosprov_ref` (`codproveedor`,`refproveedor`,`referencia`),
  ADD KEY `ca_productosprov_divisas` (`coddivisa`),
  ADD KEY `ca_productosprov_productos` (`idproducto`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`codproveedor`),
  ADD KEY `ca_proveedores_formaspago` (`codpago`),
  ADD KEY `ca_proveedores_retenciones` (`codretencion`),
  ADD KEY `ca_proveedores_series` (`codserie`);

--
-- Indices de la tabla `provincias`
--
ALTER TABLE `provincias`
  ADD PRIMARY KEY (`idprovincia`),
  ADD UNIQUE KEY `uniq_codpais_provincia` (`codpais`,`provincia`);

--
-- Indices de la tabla `recibospagoscli`
--
ALTER TABLE `recibospagoscli`
  ADD PRIMARY KEY (`idrecibo`),
  ADD KEY `ca_recibospagoscli_clientes` (`codcliente`),
  ADD KEY `ca_recibospagoscli_divisas` (`coddivisa`),
  ADD KEY `ca_recibospagoscli_facturascli` (`idfactura`);

--
-- Indices de la tabla `recibospagosprov`
--
ALTER TABLE `recibospagosprov`
  ADD PRIMARY KEY (`idrecibo`),
  ADD KEY `ca_recibospagosprov_divisas` (`coddivisa`),
  ADD KEY `ca_recibospagosprov_proveedores` (`codproveedor`),
  ADD KEY `ca_recibospagosprov_facturasprov` (`idfactura`);

--
-- Indices de la tabla `regularizacionimpuestos`
--
ALTER TABLE `regularizacionimpuestos`
  ADD PRIMARY KEY (`idregiva`),
  ADD KEY `ca_regularizacionimpuestos_ejercicios` (`codejercicio`),
  ADD KEY `ca_regularizacionimpuestos_subcuentas1` (`idsubcuentaacr`),
  ADD KEY `ca_regularizacionimpuestos_subcuentas2` (`idsubcuentadeu`),
  ADD KEY `ca_regularizacionimpuestos_asientos` (`idasiento`),
  ADD KEY `ca_regularizacionimpuestos_empresas` (`idempresa`);

--
-- Indices de la tabla `reportsamounts`
--
ALTER TABLE `reportsamounts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ca_reportsamounts_empresas` (`idcompany`);

--
-- Indices de la tabla `reportsbalance`
--
ALTER TABLE `reportsbalance`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ca_reportsbalance_empresas` (`idcompany`);

--
-- Indices de la tabla `reportsledger`
--
ALTER TABLE `reportsledger`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ca_reportsledger_empresas` (`idcompany`);

--
-- Indices de la tabla `retenciones`
--
ALTER TABLE `retenciones`
  ADD PRIMARY KEY (`codretencion`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`codrole`);

--
-- Indices de la tabla `roles_access`
--
ALTER TABLE `roles_access`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_roles_access` (`codrole`,`pagename`),
  ADD KEY `roles_access_page` (`pagename`);

--
-- Indices de la tabla `roles_users`
--
ALTER TABLE `roles_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_roles_users` (`codrole`,`nick`),
  ADD KEY `roles_users_user` (`nick`);

--
-- Indices de la tabla `secuencias_documentos`
--
ALTER TABLE `secuencias_documentos`
  ADD PRIMARY KEY (`idsecuencia`),
  ADD KEY `ca_secuencias_documentos_ejercicio` (`codejercicio`),
  ADD KEY `ca_secuencias_documentos_serie` (`codserie`),
  ADD KEY `ca_secuencias_documentos_empresas` (`idempresa`);

--
-- Indices de la tabla `series`
--
ALTER TABLE `series`
  ADD PRIMARY KEY (`codserie`),
  ADD KEY `ca_series_diarios` (`iddiario`);

--
-- Indices de la tabla `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`name`);

--
-- Indices de la tabla `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`idstock`),
  ADD UNIQUE KEY `uniq_stocks_almacen_referencia` (`codalmacen`,`referencia`),
  ADD KEY `ca_stocks_productos` (`idproducto`),
  ADD KEY `ca_stocks_variantes` (`referencia`);

--
-- Indices de la tabla `subcuentas`
--
ALTER TABLE `subcuentas`
  ADD PRIMARY KEY (`idsubcuenta`),
  ADD UNIQUE KEY `uniq_codsubcuenta` (`codsubcuenta`,`codejercicio`),
  ADD KEY `ca_subcuentas_ejercicios` (`codejercicio`),
  ADD KEY `ca_subcuentas_cuentas` (`idcuenta`),
  ADD KEY `ca_subcuentas_cuentasesp` (`codcuentaesp`);

--
-- Indices de la tabla `tarifas`
--
ALTER TABLE `tarifas`
  ADD PRIMARY KEY (`codtarifa`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`nick`),
  ADD KEY `ca_users_pages` (`homepage`),
  ADD KEY `ca_users_company` (`idempresa`);

--
-- Indices de la tabla `variantes`
--
ALTER TABLE `variantes`
  ADD PRIMARY KEY (`idvariante`),
  ADD UNIQUE KEY `uniq_variantes_referencia` (`referencia`),
  ADD KEY `ca_variantes_atributo1` (`idatributovalor1`),
  ADD KEY `ca_variantes_atributo2` (`idatributovalor2`),
  ADD KEY `ca_variantes_atributo3` (`idatributovalor3`),
  ADD KEY `ca_variantes_atributo4` (`idatributovalor4`),
  ADD KEY `ca_variantes_productos` (`idproducto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `albaranescli`
--
ALTER TABLE `albaranescli`
  MODIFY `idalbaran` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `albaranesprov`
--
ALTER TABLE `albaranesprov`
  MODIFY `idalbaran` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `api_access`
--
ALTER TABLE `api_access`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `api_keys`
--
ALTER TABLE `api_keys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `asientos`
--
ALTER TABLE `asientos`
  MODIFY `idasiento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `atributos_valores`
--
ALTER TABLE `atributos_valores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `attached_files`
--
ALTER TABLE `attached_files`
  MODIFY `idfile` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `attached_files_rel`
--
ALTER TABLE `attached_files_rel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `balancescuentas`
--
ALTER TABLE `balancescuentas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `balancescuentasabreviadas`
--
ALTER TABLE `balancescuentasabreviadas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  MODIFY `idciudad` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `contactos`
--
ALTER TABLE `contactos`
  MODIFY `idcontacto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `cronjobs`
--
ALTER TABLE `cronjobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cuentas`
--
ALTER TABLE `cuentas`
  MODIFY `idcuenta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `doctransformations`
--
ALTER TABLE `doctransformations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `emails_sent`
--
ALTER TABLE `emails_sent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `empresas`
--
ALTER TABLE `empresas`
  MODIFY `idempresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `estados_documentos`
--
ALTER TABLE `estados_documentos`
  MODIFY `idestado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `facturascli`
--
ALTER TABLE `facturascli`
  MODIFY `idfactura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `facturasprov`
--
ALTER TABLE `facturasprov`
  MODIFY `idfactura` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `formatos_documentos`
--
ALTER TABLE `formatos_documentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `impuestoszonas`
--
ALTER TABLE `impuestoszonas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `lineasalbaranescli`
--
ALTER TABLE `lineasalbaranescli`
  MODIFY `idlinea` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `lineasalbaranesprov`
--
ALTER TABLE `lineasalbaranesprov`
  MODIFY `idlinea` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `lineasfacturascli`
--
ALTER TABLE `lineasfacturascli`
  MODIFY `idlinea` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `lineasfacturasprov`
--
ALTER TABLE `lineasfacturasprov`
  MODIFY `idlinea` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `lineaspedidoscli`
--
ALTER TABLE `lineaspedidoscli`
  MODIFY `idlinea` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `lineaspedidosprov`
--
ALTER TABLE `lineaspedidosprov`
  MODIFY `idlinea` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `lineaspresupuestoscli`
--
ALTER TABLE `lineaspresupuestoscli`
  MODIFY `idlinea` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `lineaspresupuestosprov`
--
ALTER TABLE `lineaspresupuestosprov`
  MODIFY `idlinea` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT de la tabla `pages_filters`
--
ALTER TABLE `pages_filters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pages_options`
--
ALTER TABLE `pages_options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pagoscli`
--
ALTER TABLE `pagoscli`
  MODIFY `idpago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `pagosprov`
--
ALTER TABLE `pagosprov`
  MODIFY `idpago` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `partidas`
--
ALTER TABLE `partidas`
  MODIFY `idpartida` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pedidoscli`
--
ALTER TABLE `pedidoscli`
  MODIFY `idpedido` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pedidosprov`
--
ALTER TABLE `pedidosprov`
  MODIFY `idpedido` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `presupuestoscli`
--
ALTER TABLE `presupuestoscli`
  MODIFY `idpresupuesto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `presupuestosprov`
--
ALTER TABLE `presupuestosprov`
  MODIFY `idpresupuesto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idproducto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productosprov`
--
ALTER TABLE `productosprov`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `provincias`
--
ALTER TABLE `provincias`
  MODIFY `idprovincia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `recibospagoscli`
--
ALTER TABLE `recibospagoscli`
  MODIFY `idrecibo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `recibospagosprov`
--
ALTER TABLE `recibospagosprov`
  MODIFY `idrecibo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `regularizacionimpuestos`
--
ALTER TABLE `regularizacionimpuestos`
  MODIFY `idregiva` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reportsamounts`
--
ALTER TABLE `reportsamounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reportsbalance`
--
ALTER TABLE `reportsbalance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reportsledger`
--
ALTER TABLE `reportsledger`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles_access`
--
ALTER TABLE `roles_access`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT de la tabla `roles_users`
--
ALTER TABLE `roles_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `secuencias_documentos`
--
ALTER TABLE `secuencias_documentos`
  MODIFY `idsecuencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `stocks`
--
ALTER TABLE `stocks`
  MODIFY `idstock` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `subcuentas`
--
ALTER TABLE `subcuentas`
  MODIFY `idsubcuenta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `variantes`
--
ALTER TABLE `variantes`
  MODIFY `idvariante` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `agentes`
--
ALTER TABLE `agentes`
  ADD CONSTRAINT `ca_agentes_productos` FOREIGN KEY (`idproducto`) REFERENCES `productos` (`idproducto`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `albaranescli`
--
ALTER TABLE `albaranescli`
  ADD CONSTRAINT `ca_albaranescli_agentes` FOREIGN KEY (`codagente`) REFERENCES `agentes` (`codagente`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_albaranescli_almacenes` FOREIGN KEY (`codalmacen`) REFERENCES `almacenes` (`codalmacen`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_albaranescli_clientes` FOREIGN KEY (`codcliente`) REFERENCES `clientes` (`codcliente`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_albaranescli_divisas` FOREIGN KEY (`coddivisa`) REFERENCES `divisas` (`coddivisa`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_albaranescli_ejercicios` FOREIGN KEY (`codejercicio`) REFERENCES `ejercicios` (`codejercicio`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_albaranescli_empresas` FOREIGN KEY (`idempresa`) REFERENCES `empresas` (`idempresa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_albaranescli_estados` FOREIGN KEY (`idestado`) REFERENCES `estados_documentos` (`idestado`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_albaranescli_series` FOREIGN KEY (`codserie`) REFERENCES `series` (`codserie`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_albaranescli_users` FOREIGN KEY (`nick`) REFERENCES `users` (`nick`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `albaranesprov`
--
ALTER TABLE `albaranesprov`
  ADD CONSTRAINT `ca_albaranesprov_almacenes` FOREIGN KEY (`codalmacen`) REFERENCES `almacenes` (`codalmacen`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_albaranesprov_divisas` FOREIGN KEY (`coddivisa`) REFERENCES `divisas` (`coddivisa`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_albaranesprov_ejercicios` FOREIGN KEY (`codejercicio`) REFERENCES `ejercicios` (`codejercicio`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_albaranesprov_empresas` FOREIGN KEY (`idempresa`) REFERENCES `empresas` (`idempresa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_albaranesprov_estados` FOREIGN KEY (`idestado`) REFERENCES `estados_documentos` (`idestado`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_albaranesprov_proveedores` FOREIGN KEY (`codproveedor`) REFERENCES `proveedores` (`codproveedor`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_albaranesprov_series` FOREIGN KEY (`codserie`) REFERENCES `series` (`codserie`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_albaranesprov_users` FOREIGN KEY (`nick`) REFERENCES `users` (`nick`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `almacenes`
--
ALTER TABLE `almacenes`
  ADD CONSTRAINT `ca_almacenes_empresas` FOREIGN KEY (`idempresa`) REFERENCES `empresas` (`idempresa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `api_access`
--
ALTER TABLE `api_access`
  ADD CONSTRAINT `api_access_api` FOREIGN KEY (`idapikey`) REFERENCES `api_keys` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `asientos`
--
ALTER TABLE `asientos`
  ADD CONSTRAINT `ca_asientos_diarios` FOREIGN KEY (`iddiario`) REFERENCES `diarios` (`iddiario`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_asientos_ejercicios` FOREIGN KEY (`codejercicio`) REFERENCES `ejercicios` (`codejercicio`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_asientos_empresas` FOREIGN KEY (`idempresa`) REFERENCES `empresas` (`idempresa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `atributos_valores`
--
ALTER TABLE `atributos_valores`
  ADD CONSTRAINT `ca_atributos_valores` FOREIGN KEY (`codatributo`) REFERENCES `atributos` (`codatributo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `attached_files_rel`
--
ALTER TABLE `attached_files_rel`
  ADD CONSTRAINT `ca_attached_files_rel_files` FOREIGN KEY (`idfile`) REFERENCES `attached_files` (`idfile`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_attached_files_rel_users` FOREIGN KEY (`nick`) REFERENCES `users` (`nick`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `balancescuentas`
--
ALTER TABLE `balancescuentas`
  ADD CONSTRAINT `ca_balances_cuentas` FOREIGN KEY (`codbalance`) REFERENCES `balances` (`codbalance`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `balancescuentasabreviadas`
--
ALTER TABLE `balancescuentasabreviadas`
  ADD CONSTRAINT `ca_balances_cuentasabreviadas` FOREIGN KEY (`codbalance`) REFERENCES `balances` (`codbalance`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ciudades`
--
ALTER TABLE `ciudades`
  ADD CONSTRAINT `ca_ciudades_provincias` FOREIGN KEY (`idprovincia`) REFERENCES `provincias` (`idprovincia`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `ca_clientes_agentes` FOREIGN KEY (`codagente`) REFERENCES `agentes` (`codagente`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_clientes_formaspago` FOREIGN KEY (`codpago`) REFERENCES `formaspago` (`codpago`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_clientes_grupos` FOREIGN KEY (`codgrupo`) REFERENCES `gruposclientes` (`codgrupo`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_clientes_retenciones` FOREIGN KEY (`codretencion`) REFERENCES `retenciones` (`codretencion`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_clientes_series` FOREIGN KEY (`codserie`) REFERENCES `series` (`codserie`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_clientes_tarifas` FOREIGN KEY (`codtarifa`) REFERENCES `tarifas` (`codtarifa`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD CONSTRAINT `ca_contactos_agentes` FOREIGN KEY (`codagente`) REFERENCES `agentes` (`codagente`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_contactos_clientes` FOREIGN KEY (`codcliente`) REFERENCES `clientes` (`codcliente`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_contactos_proveedores` FOREIGN KEY (`codproveedor`) REFERENCES `proveedores` (`codproveedor`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `cuentas`
--
ALTER TABLE `cuentas`
  ADD CONSTRAINT `ca_cuentas_cuentasesp` FOREIGN KEY (`codcuentaesp`) REFERENCES `cuentasesp` (`codcuentaesp`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_cuentas_ejercicios` FOREIGN KEY (`codejercicio`) REFERENCES `ejercicios` (`codejercicio`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_cuentas_parent` FOREIGN KEY (`parent_idcuenta`) REFERENCES `cuentas` (`idcuenta`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cuentasbanco`
--
ALTER TABLE `cuentasbanco`
  ADD CONSTRAINT `ca_cuentasbanco_empresas` FOREIGN KEY (`idempresa`) REFERENCES `empresas` (`idempresa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cuentasbcocli`
--
ALTER TABLE `cuentasbcocli`
  ADD CONSTRAINT `ca_cuentasbcocli_clientes` FOREIGN KEY (`codcliente`) REFERENCES `clientes` (`codcliente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cuentasbcopro`
--
ALTER TABLE `cuentasbcopro`
  ADD CONSTRAINT `ca_cuentasbcopro_proveedores` FOREIGN KEY (`codproveedor`) REFERENCES `proveedores` (`codproveedor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ejercicios`
--
ALTER TABLE `ejercicios`
  ADD CONSTRAINT `ca_ejercicios_empresas` FOREIGN KEY (`idempresa`) REFERENCES `empresas` (`idempresa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `emails_sent`
--
ALTER TABLE `emails_sent`
  ADD CONSTRAINT `emails_sent_user` FOREIGN KEY (`nick`) REFERENCES `users` (`nick`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD CONSTRAINT `ca_empresas_attached_files` FOREIGN KEY (`idlogo`) REFERENCES `attached_files` (`idfile`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `facturascli`
--
ALTER TABLE `facturascli`
  ADD CONSTRAINT `ca_facturascli_agentes` FOREIGN KEY (`codagente`) REFERENCES `agentes` (`codagente`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_facturascli_almacenes` FOREIGN KEY (`codalmacen`) REFERENCES `almacenes` (`codalmacen`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_facturascli_asiento` FOREIGN KEY (`idasiento`) REFERENCES `asientos` (`idasiento`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_facturascli_clientes` FOREIGN KEY (`codcliente`) REFERENCES `clientes` (`codcliente`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_facturascli_divisas` FOREIGN KEY (`coddivisa`) REFERENCES `divisas` (`coddivisa`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_facturascli_ejercicios` FOREIGN KEY (`codejercicio`) REFERENCES `ejercicios` (`codejercicio`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_facturascli_empresas` FOREIGN KEY (`idempresa`) REFERENCES `empresas` (`idempresa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_facturascli_estados` FOREIGN KEY (`idestado`) REFERENCES `estados_documentos` (`idestado`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_facturascli_series` FOREIGN KEY (`codserie`) REFERENCES `series` (`codserie`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_facturascli_users` FOREIGN KEY (`nick`) REFERENCES `users` (`nick`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `facturasprov`
--
ALTER TABLE `facturasprov`
  ADD CONSTRAINT `ca_facturasprov_almacenes` FOREIGN KEY (`codalmacen`) REFERENCES `almacenes` (`codalmacen`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_facturasprov_asiento` FOREIGN KEY (`idasiento`) REFERENCES `asientos` (`idasiento`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_facturasprov_divisas` FOREIGN KEY (`coddivisa`) REFERENCES `divisas` (`coddivisa`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_facturasprov_ejercicios` FOREIGN KEY (`codejercicio`) REFERENCES `ejercicios` (`codejercicio`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_facturasprov_empresas` FOREIGN KEY (`idempresa`) REFERENCES `empresas` (`idempresa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_facturasprov_estados` FOREIGN KEY (`idestado`) REFERENCES `estados_documentos` (`idestado`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_facturasprov_proveedores` FOREIGN KEY (`codproveedor`) REFERENCES `proveedores` (`codproveedor`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_facturasprov_series` FOREIGN KEY (`codserie`) REFERENCES `series` (`codserie`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_facturasprov_users` FOREIGN KEY (`nick`) REFERENCES `users` (`nick`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `familias`
--
ALTER TABLE `familias`
  ADD CONSTRAINT `ca_familia_madre` FOREIGN KEY (`madre`) REFERENCES `familias` (`codfamilia`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `formaspago`
--
ALTER TABLE `formaspago`
  ADD CONSTRAINT `ca_formaspago_cuentasbanco` FOREIGN KEY (`codcuentabanco`) REFERENCES `cuentasbanco` (`codcuenta`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_formaspago_empresas` FOREIGN KEY (`idempresa`) REFERENCES `empresas` (`idempresa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `formatos_documentos`
--
ALTER TABLE `formatos_documentos`
  ADD CONSTRAINT `ca_formatos_documentos_attached_files` FOREIGN KEY (`idlogo`) REFERENCES `attached_files` (`idfile`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_formatos_documentos_empresas` FOREIGN KEY (`idempresa`) REFERENCES `empresas` (`idempresa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_formatos_documentos_series` FOREIGN KEY (`codserie`) REFERENCES `series` (`codserie`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `gruposclientes`
--
ALTER TABLE `gruposclientes`
  ADD CONSTRAINT `ca_gruposclientes_tarifas` FOREIGN KEY (`codtarifa`) REFERENCES `tarifas` (`codtarifa`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `impuestoszonas`
--
ALTER TABLE `impuestoszonas`
  ADD CONSTRAINT `ca_impuestoszonas_impuestos` FOREIGN KEY (`codimpuesto`) REFERENCES `impuestos` (`codimpuesto`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_impuestoszonas_impuestos2` FOREIGN KEY (`codimpuestosel`) REFERENCES `impuestos` (`codimpuesto`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `lineasalbaranescli`
--
ALTER TABLE `lineasalbaranescli`
  ADD CONSTRAINT `ca_lineasalbaranescli_albaranescli2` FOREIGN KEY (`idalbaran`) REFERENCES `albaranescli` (`idalbaran`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_lineasalbaranescli_impuestos` FOREIGN KEY (`codimpuesto`) REFERENCES `impuestos` (`codimpuesto`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_lineasalbaranescli_productos` FOREIGN KEY (`idproducto`) REFERENCES `productos` (`idproducto`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `lineasalbaranesprov`
--
ALTER TABLE `lineasalbaranesprov`
  ADD CONSTRAINT `ca_lineasalbaranesprov_albaranesprov2` FOREIGN KEY (`idalbaran`) REFERENCES `albaranesprov` (`idalbaran`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_lineasalbaranesprov_impuestos` FOREIGN KEY (`codimpuesto`) REFERENCES `impuestos` (`codimpuesto`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_lineasalbaranesprov_productos` FOREIGN KEY (`idproducto`) REFERENCES `productos` (`idproducto`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `lineasfacturascli`
--
ALTER TABLE `lineasfacturascli`
  ADD CONSTRAINT `ca_lineasfacturascli_facturascli2` FOREIGN KEY (`idfactura`) REFERENCES `facturascli` (`idfactura`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_lineasfacturascli_impuestos` FOREIGN KEY (`codimpuesto`) REFERENCES `impuestos` (`codimpuesto`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_lineasfacturascli_linearect2` FOREIGN KEY (`idlinearect`) REFERENCES `lineasfacturascli` (`idlinea`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_lineasfacturascli_productos` FOREIGN KEY (`idproducto`) REFERENCES `productos` (`idproducto`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `lineasfacturasprov`
--
ALTER TABLE `lineasfacturasprov`
  ADD CONSTRAINT `ca_lineasfacturasprov_facturasprov2` FOREIGN KEY (`idfactura`) REFERENCES `facturasprov` (`idfactura`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_lineasfacturasprov_impuestos` FOREIGN KEY (`codimpuesto`) REFERENCES `impuestos` (`codimpuesto`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_lineasfacturasprov_linearect2` FOREIGN KEY (`idlinearect`) REFERENCES `lineasfacturasprov` (`idlinea`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_lineasfacturasprov_productos` FOREIGN KEY (`idproducto`) REFERENCES `productos` (`idproducto`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `lineaspedidoscli`
--
ALTER TABLE `lineaspedidoscli`
  ADD CONSTRAINT `ca_lineaspedidoscli_impuestos` FOREIGN KEY (`codimpuesto`) REFERENCES `impuestos` (`codimpuesto`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_lineaspedidoscli_pedidoscli` FOREIGN KEY (`idpedido`) REFERENCES `pedidoscli` (`idpedido`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_lineaspedidoscli_productos` FOREIGN KEY (`idproducto`) REFERENCES `productos` (`idproducto`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `lineaspedidosprov`
--
ALTER TABLE `lineaspedidosprov`
  ADD CONSTRAINT `ca_lineaspedidosprov_impuestos` FOREIGN KEY (`codimpuesto`) REFERENCES `impuestos` (`codimpuesto`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_lineaspedidosprov_pedidosprov` FOREIGN KEY (`idpedido`) REFERENCES `pedidosprov` (`idpedido`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_lineaspedidosprov_productos` FOREIGN KEY (`idproducto`) REFERENCES `productos` (`idproducto`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `lineaspresupuestoscli`
--
ALTER TABLE `lineaspresupuestoscli`
  ADD CONSTRAINT `ca_lineaspresupuestoscli_impuestos` FOREIGN KEY (`codimpuesto`) REFERENCES `impuestos` (`codimpuesto`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_lineaspresupuestoscli_presupuestoscli` FOREIGN KEY (`idpresupuesto`) REFERENCES `presupuestoscli` (`idpresupuesto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_lineaspresupuestoscli_productos` FOREIGN KEY (`idproducto`) REFERENCES `productos` (`idproducto`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `lineaspresupuestosprov`
--
ALTER TABLE `lineaspresupuestosprov`
  ADD CONSTRAINT `ca_lineaspresupuestosprov_impuestos` FOREIGN KEY (`codimpuesto`) REFERENCES `impuestos` (`codimpuesto`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_lineaspresupuestosprov_presupuestosprov` FOREIGN KEY (`idpresupuesto`) REFERENCES `presupuestosprov` (`idpresupuesto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_lineaspresupuestosprov_productos` FOREIGN KEY (`idproducto`) REFERENCES `productos` (`idproducto`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `pages_filters`
--
ALTER TABLE `pages_filters`
  ADD CONSTRAINT `ca_pagesfilters_users` FOREIGN KEY (`nick`) REFERENCES `users` (`nick`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pages_options`
--
ALTER TABLE `pages_options`
  ADD CONSTRAINT `ca_pagesoptions_users` FOREIGN KEY (`nick`) REFERENCES `users` (`nick`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pagoscli`
--
ALTER TABLE `pagoscli`
  ADD CONSTRAINT `ca_pagoscli_asiento` FOREIGN KEY (`idasiento`) REFERENCES `asientos` (`idasiento`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_pagoscli_recibo` FOREIGN KEY (`idrecibo`) REFERENCES `recibospagoscli` (`idrecibo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pagosprov`
--
ALTER TABLE `pagosprov`
  ADD CONSTRAINT `ca_pagosprov_asiento` FOREIGN KEY (`idasiento`) REFERENCES `asientos` (`idasiento`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_pagosprov_recibo` FOREIGN KEY (`idrecibo`) REFERENCES `recibospagosprov` (`idrecibo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `partidas`
--
ALTER TABLE `partidas`
  ADD CONSTRAINT `ca_partidas_asientos` FOREIGN KEY (`idasiento`) REFERENCES `asientos` (`idasiento`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_partidas_subcuentas` FOREIGN KEY (`idsubcuenta`) REFERENCES `subcuentas` (`idsubcuenta`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_partidas_subcuentas2` FOREIGN KEY (`idcontrapartida`) REFERENCES `subcuentas` (`idsubcuenta`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `pedidoscli`
--
ALTER TABLE `pedidoscli`
  ADD CONSTRAINT `ca_pedidoscli_agentes` FOREIGN KEY (`codagente`) REFERENCES `agentes` (`codagente`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_pedidoscli_almacenes` FOREIGN KEY (`codalmacen`) REFERENCES `almacenes` (`codalmacen`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_pedidoscli_clientes` FOREIGN KEY (`codcliente`) REFERENCES `clientes` (`codcliente`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_pedidoscli_divisas` FOREIGN KEY (`coddivisa`) REFERENCES `divisas` (`coddivisa`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_pedidoscli_ejercicios` FOREIGN KEY (`codejercicio`) REFERENCES `ejercicios` (`codejercicio`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_pedidoscli_empresas` FOREIGN KEY (`idempresa`) REFERENCES `empresas` (`idempresa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_pedidoscli_estados` FOREIGN KEY (`idestado`) REFERENCES `estados_documentos` (`idestado`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_pedidoscli_series` FOREIGN KEY (`codserie`) REFERENCES `series` (`codserie`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_pedidoscli_users` FOREIGN KEY (`nick`) REFERENCES `users` (`nick`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `pedidosprov`
--
ALTER TABLE `pedidosprov`
  ADD CONSTRAINT `ca_pedidosprov_almacenes` FOREIGN KEY (`codalmacen`) REFERENCES `almacenes` (`codalmacen`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_pedidosprov_divisas` FOREIGN KEY (`coddivisa`) REFERENCES `divisas` (`coddivisa`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_pedidosprov_ejercicios` FOREIGN KEY (`codejercicio`) REFERENCES `ejercicios` (`codejercicio`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_pedidosprov_empresas` FOREIGN KEY (`idempresa`) REFERENCES `empresas` (`idempresa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_pedidosprov_estados` FOREIGN KEY (`idestado`) REFERENCES `estados_documentos` (`idestado`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_pedidosprov_proveedores` FOREIGN KEY (`codproveedor`) REFERENCES `proveedores` (`codproveedor`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_pedidosprov_series` FOREIGN KEY (`codserie`) REFERENCES `series` (`codserie`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_pedidosprov_users` FOREIGN KEY (`nick`) REFERENCES `users` (`nick`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `presupuestoscli`
--
ALTER TABLE `presupuestoscli`
  ADD CONSTRAINT `ca_presupuestoscli_agentes` FOREIGN KEY (`codagente`) REFERENCES `agentes` (`codagente`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_presupuestoscli_almacenes` FOREIGN KEY (`codalmacen`) REFERENCES `almacenes` (`codalmacen`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_presupuestoscli_clientes` FOREIGN KEY (`codcliente`) REFERENCES `clientes` (`codcliente`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_presupuestoscli_divisas` FOREIGN KEY (`coddivisa`) REFERENCES `divisas` (`coddivisa`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_presupuestoscli_ejercicios` FOREIGN KEY (`codejercicio`) REFERENCES `ejercicios` (`codejercicio`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_presupuestoscli_empresas` FOREIGN KEY (`idempresa`) REFERENCES `empresas` (`idempresa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_presupuestoscli_estados` FOREIGN KEY (`idestado`) REFERENCES `estados_documentos` (`idestado`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_presupuestoscli_series` FOREIGN KEY (`codserie`) REFERENCES `series` (`codserie`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_presupuestoscli_users` FOREIGN KEY (`nick`) REFERENCES `users` (`nick`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `presupuestosprov`
--
ALTER TABLE `presupuestosprov`
  ADD CONSTRAINT `ca_presupuestosprov_almacenes` FOREIGN KEY (`codalmacen`) REFERENCES `almacenes` (`codalmacen`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_presupuestosprov_divisas` FOREIGN KEY (`coddivisa`) REFERENCES `divisas` (`coddivisa`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_presupuestosprov_ejercicios` FOREIGN KEY (`codejercicio`) REFERENCES `ejercicios` (`codejercicio`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_presupuestosprov_empresas` FOREIGN KEY (`idempresa`) REFERENCES `empresas` (`idempresa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_presupuestosprov_estados` FOREIGN KEY (`idestado`) REFERENCES `estados_documentos` (`idestado`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_presupuestosprov_proveedores` FOREIGN KEY (`codproveedor`) REFERENCES `proveedores` (`codproveedor`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_presupuestosprov_series` FOREIGN KEY (`codserie`) REFERENCES `series` (`codserie`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_presupuestosprov_users` FOREIGN KEY (`nick`) REFERENCES `users` (`nick`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `ca_productos_fabricantes` FOREIGN KEY (`codfabricante`) REFERENCES `fabricantes` (`codfabricante`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_productos_familias` FOREIGN KEY (`codfamilia`) REFERENCES `familias` (`codfamilia`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_productos_impuestos` FOREIGN KEY (`codimpuesto`) REFERENCES `impuestos` (`codimpuesto`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `productosprov`
--
ALTER TABLE `productosprov`
  ADD CONSTRAINT `ca_productosprov_divisas` FOREIGN KEY (`coddivisa`) REFERENCES `divisas` (`coddivisa`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_productosprov_productos` FOREIGN KEY (`idproducto`) REFERENCES `productos` (`idproducto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_productosprov_proveedores` FOREIGN KEY (`codproveedor`) REFERENCES `proveedores` (`codproveedor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD CONSTRAINT `ca_proveedores_formaspago` FOREIGN KEY (`codpago`) REFERENCES `formaspago` (`codpago`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_proveedores_retenciones` FOREIGN KEY (`codretencion`) REFERENCES `retenciones` (`codretencion`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_proveedores_series` FOREIGN KEY (`codserie`) REFERENCES `series` (`codserie`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `provincias`
--
ALTER TABLE `provincias`
  ADD CONSTRAINT `ca_provincias_paises` FOREIGN KEY (`codpais`) REFERENCES `paises` (`codpais`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `recibospagoscli`
--
ALTER TABLE `recibospagoscli`
  ADD CONSTRAINT `ca_recibospagoscli_clientes` FOREIGN KEY (`codcliente`) REFERENCES `clientes` (`codcliente`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_recibospagoscli_divisas` FOREIGN KEY (`coddivisa`) REFERENCES `divisas` (`coddivisa`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_recibospagoscli_facturascli` FOREIGN KEY (`idfactura`) REFERENCES `facturascli` (`idfactura`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `recibospagosprov`
--
ALTER TABLE `recibospagosprov`
  ADD CONSTRAINT `ca_recibospagosprov_divisas` FOREIGN KEY (`coddivisa`) REFERENCES `divisas` (`coddivisa`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_recibospagosprov_facturasprov` FOREIGN KEY (`idfactura`) REFERENCES `facturasprov` (`idfactura`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_recibospagosprov_proveedores` FOREIGN KEY (`codproveedor`) REFERENCES `proveedores` (`codproveedor`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `regularizacionimpuestos`
--
ALTER TABLE `regularizacionimpuestos`
  ADD CONSTRAINT `ca_regularizacionimpuestos_asientos` FOREIGN KEY (`idasiento`) REFERENCES `asientos` (`idasiento`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_regularizacionimpuestos_ejercicios` FOREIGN KEY (`codejercicio`) REFERENCES `ejercicios` (`codejercicio`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_regularizacionimpuestos_empresas` FOREIGN KEY (`idempresa`) REFERENCES `empresas` (`idempresa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_regularizacionimpuestos_subcuentas1` FOREIGN KEY (`idsubcuentaacr`) REFERENCES `subcuentas` (`idsubcuenta`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_regularizacionimpuestos_subcuentas2` FOREIGN KEY (`idsubcuentadeu`) REFERENCES `subcuentas` (`idsubcuenta`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `reportsamounts`
--
ALTER TABLE `reportsamounts`
  ADD CONSTRAINT `ca_reportsamounts_empresas` FOREIGN KEY (`idcompany`) REFERENCES `empresas` (`idempresa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `reportsbalance`
--
ALTER TABLE `reportsbalance`
  ADD CONSTRAINT `ca_reportsbalance_empresas` FOREIGN KEY (`idcompany`) REFERENCES `empresas` (`idempresa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `reportsledger`
--
ALTER TABLE `reportsledger`
  ADD CONSTRAINT `ca_reportsledger_empresas` FOREIGN KEY (`idcompany`) REFERENCES `empresas` (`idempresa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `roles_access`
--
ALTER TABLE `roles_access`
  ADD CONSTRAINT `roles_access_page` FOREIGN KEY (`pagename`) REFERENCES `pages` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `roles_access_roles` FOREIGN KEY (`codrole`) REFERENCES `roles` (`codrole`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `roles_users`
--
ALTER TABLE `roles_users`
  ADD CONSTRAINT `roles_users_roles` FOREIGN KEY (`codrole`) REFERENCES `roles` (`codrole`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `roles_users_user` FOREIGN KEY (`nick`) REFERENCES `users` (`nick`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `secuencias_documentos`
--
ALTER TABLE `secuencias_documentos`
  ADD CONSTRAINT `ca_secuencias_documentos_ejercicio` FOREIGN KEY (`codejercicio`) REFERENCES `ejercicios` (`codejercicio`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_secuencias_documentos_empresas` FOREIGN KEY (`idempresa`) REFERENCES `empresas` (`idempresa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_secuencias_documentos_serie` FOREIGN KEY (`codserie`) REFERENCES `series` (`codserie`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `series`
--
ALTER TABLE `series`
  ADD CONSTRAINT `ca_series_diarios` FOREIGN KEY (`iddiario`) REFERENCES `diarios` (`iddiario`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `stocks`
--
ALTER TABLE `stocks`
  ADD CONSTRAINT `ca_stocks_almacenes` FOREIGN KEY (`codalmacen`) REFERENCES `almacenes` (`codalmacen`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_stocks_productos` FOREIGN KEY (`idproducto`) REFERENCES `productos` (`idproducto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_stocks_variantes` FOREIGN KEY (`referencia`) REFERENCES `variantes` (`referencia`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `subcuentas`
--
ALTER TABLE `subcuentas`
  ADD CONSTRAINT `ca_subcuentas_cuentas` FOREIGN KEY (`idcuenta`) REFERENCES `cuentas` (`idcuenta`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_subcuentas_cuentasesp` FOREIGN KEY (`codcuentaesp`) REFERENCES `cuentasesp` (`codcuentaesp`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_subcuentas_ejercicios` FOREIGN KEY (`codejercicio`) REFERENCES `ejercicios` (`codejercicio`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `ca_users_company` FOREIGN KEY (`idempresa`) REFERENCES `empresas` (`idempresa`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_users_pages` FOREIGN KEY (`homepage`) REFERENCES `pages` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `variantes`
--
ALTER TABLE `variantes`
  ADD CONSTRAINT `ca_variantes_atributo1` FOREIGN KEY (`idatributovalor1`) REFERENCES `atributos_valores` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_variantes_atributo2` FOREIGN KEY (`idatributovalor2`) REFERENCES `atributos_valores` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_variantes_atributo3` FOREIGN KEY (`idatributovalor3`) REFERENCES `atributos_valores` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_variantes_atributo4` FOREIGN KEY (`idatributovalor4`) REFERENCES `atributos_valores` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `ca_variantes_productos` FOREIGN KEY (`idproducto`) REFERENCES `productos` (`idproducto`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
