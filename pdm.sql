-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 03-05-2011 a las 02:03:45
-- Versión del servidor: 5.5.8
-- Versión de PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `pdm`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `ip_address` varchar(16) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcar la base de datos para la tabla `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('8342e9c06e0c96bd5dfad5debb3147ee', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:2.0.1) Gecko/20100', 1304364532, ''),
('b1dc6e5a28f4817870f5366636892288', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:2.0.1) Gecko/20100', 1304375835, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lnk`
--

CREATE TABLE IF NOT EXISTS `lnk` (
  `id` int(11) NOT NULL,
  `id_prf` int(11) NOT NULL,
  `l_typ` varchar(100) NOT NULL,
  `l_url` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_prf` (`id_prf`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `lnk`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prf`
--

CREATE TABLE IF NOT EXISTS `prf` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usr` int(11) NOT NULL,
  `p_pnm` varchar(100) NOT NULL,
  `p_aka` varchar(100) NOT NULL,
  `p_prf` varchar(100) NOT NULL,
  `p_dsc` varchar(100) NOT NULL,
  `p_pic` varchar(100) NOT NULL,
  `p_l_e` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `c_fs` varchar(6) DEFAULT 'medium',
  `c_fc` varchar(6) DEFAULT 'FFFFFF',
  `c_bg` varchar(6) DEFAULT NULL,
  `c_bc` varchar(6) DEFAULT 'FFFFFF',
  `c_bw` varchar(6) DEFAULT 'thin',
  PRIMARY KEY (`id`),
  KEY `id_usr` (`id_usr`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `prf`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usr`
--

CREATE TABLE IF NOT EXISTS `usr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nam` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `l_n` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `eml` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `usr` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `pwd` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `stt` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `crt` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `l_e` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `usr`
--


--
-- Filtros para las tablas descargadas (dump)
--

--
-- Filtros para la tabla `lnk`
--
ALTER TABLE `lnk`
  ADD CONSTRAINT `id_prf` FOREIGN KEY (`id_prf`) REFERENCES `prf` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `prf`
--
ALTER TABLE `prf`
  ADD CONSTRAINT `id_usr` FOREIGN KEY (`id_usr`) REFERENCES `usr` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
