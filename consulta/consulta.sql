-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 07-01-2014 a las 22:57:14
-- Versión del servidor: 5.0.51
-- Versión de PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `consulta`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `administrador`
-- 

CREATE TABLE `administrador` (
  `rut_admin` int(11) NOT NULL,
  `nombre_admin` varchar(200) NOT NULL,
  `apellido_admin` varchar(200) NOT NULL,
  `pass_admin` varchar(200) NOT NULL,
  PRIMARY KEY  (`rut_admin`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `administrador`
-- 

INSERT INTO `administrador` VALUES (3333, 'Euclides', 'Socrates', '3333');
INSERT INTO `administrador` VALUES (17170904, 'Marco', 'Fuster', 'fusterm');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `doctor`
-- 

CREATE TABLE `doctor` (
  `rut_doctor` int(11) NOT NULL,
  `nombre_doctor` varchar(20) NOT NULL,
  `apellido_doctor` varchar(200) NOT NULL,
  `direccion` varchar(30) NOT NULL,
  `telefono` int(11) NOT NULL,
  `pass` varchar(20) NOT NULL,
  PRIMARY KEY  (`rut_doctor`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `doctor`
-- 

INSERT INTO `doctor` VALUES (1111, 'ruyar', '', 'hola', 1111, '1111');
INSERT INTO `doctor` VALUES (0, '', '', '', 0, '');
INSERT INTO `doctor` VALUES (17757843, 'Rudyard ', 'Fuster', 'Manuel Rodriguez 35', 87751295, 'fust');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `fecha`
-- 

CREATE TABLE `fecha` (
  `rut_paciente` int(11) NOT NULL,
  `dia` varchar(20) NOT NULL,
  `hora_inicio` varchar(20) NOT NULL,
  `hora_termino` varchar(20) NOT NULL,
  `doctor` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `fecha`
-- 

INSERT INTO `fecha` VALUES (6666666, '10/23/2013', '13:00', '14:00', 'ruyar');
INSERT INTO `fecha` VALUES (6666666, '10/23/2013', '13:00', '14:00', 'ruyar');
INSERT INTO `fecha` VALUES (6666666, '10/23/2013', '13:00', '14:00', 'ruyar');
INSERT INTO `fecha` VALUES (0, '', '', '', 'null');
INSERT INTO `fecha` VALUES (0, '', '', '', 'null');
INSERT INTO `fecha` VALUES (0, '', '', '', 'null');
INSERT INTO `fecha` VALUES (0, '', '', '', 'null');
INSERT INTO `fecha` VALUES (0, '', '', '', 'null');
INSERT INTO `fecha` VALUES (0, '', '', '', 'null');
INSERT INTO `fecha` VALUES (0, '', '', '', 'null');
INSERT INTO `fecha` VALUES (0, '', '', '', 'null');
INSERT INTO `fecha` VALUES (0, '', '', '', 'null');
INSERT INTO `fecha` VALUES (0, '', '', '', 'null');
INSERT INTO `fecha` VALUES (0, '', '', '', 'null');
INSERT INTO `fecha` VALUES (0, '', '', '', 'null');
INSERT INTO `fecha` VALUES (0, '', '', '', 'null');
INSERT INTO `fecha` VALUES (0, '', '', '', 'null');
INSERT INTO `fecha` VALUES (0, '', '', '', 'null');
INSERT INTO `fecha` VALUES (0, '', '', '', 'null');
INSERT INTO `fecha` VALUES (0, '', '', '', 'null');
INSERT INTO `fecha` VALUES (0, '', '', '', 'null');
INSERT INTO `fecha` VALUES (0, '', '', '', 'null');
INSERT INTO `fecha` VALUES (0, '', '', '', 'null');
INSERT INTO `fecha` VALUES (0, '', '', '', 'null');
INSERT INTO `fecha` VALUES (0, '', '', '', 'null');
INSERT INTO `fecha` VALUES (0, '', '', '', 'null');
INSERT INTO `fecha` VALUES (0, '', '', '', 'null');
INSERT INTO `fecha` VALUES (0, '', '', '', 'null');
INSERT INTO `fecha` VALUES (0, '', '', '', 'null');
INSERT INTO `fecha` VALUES (0, '', '', '', 'null');
INSERT INTO `fecha` VALUES (0, '', '', '', 'null');
INSERT INTO `fecha` VALUES (0, '', '', '', 'null');
INSERT INTO `fecha` VALUES (0, '', '', '', 'null');
INSERT INTO `fecha` VALUES (0, '', '', '', 'null');
INSERT INTO `fecha` VALUES (0, '', '', '', 'null');
INSERT INTO `fecha` VALUES (0, '', '', '', 'null');
INSERT INTO `fecha` VALUES (0, '', '', '', 'null');
INSERT INTO `fecha` VALUES (0, '', '', '', 'null');
INSERT INTO `fecha` VALUES (0, '', '', '', 'null');
INSERT INTO `fecha` VALUES (0, '', '', '', 'null');
INSERT INTO `fecha` VALUES (0, '', '', '', 'null');
INSERT INTO `fecha` VALUES (0, '', '', '', 'null');
INSERT INTO `fecha` VALUES (0, '', '', '', 'null');
INSERT INTO `fecha` VALUES (0, '', '', '', 'null');
INSERT INTO `fecha` VALUES (0, '', '', '', 'null');
INSERT INTO `fecha` VALUES (0, '', '', '', 'null');
INSERT INTO `fecha` VALUES (0, '', '', '', 'null');
INSERT INTO `fecha` VALUES (0, '', '', '', 'null');
INSERT INTO `fecha` VALUES (0, '', '', '', 'null');
INSERT INTO `fecha` VALUES (0, '', '', '', 'null');
INSERT INTO `fecha` VALUES (0, '', '', '', 'null');
INSERT INTO `fecha` VALUES (0, '', '', '', 'null');
INSERT INTO `fecha` VALUES (0, '', '', '', 'null');
INSERT INTO `fecha` VALUES (0, '', '', '', 'null');
INSERT INTO `fecha` VALUES (0, '', '', '', 'null');
INSERT INTO `fecha` VALUES (0, '', '', '', 'null');
INSERT INTO `fecha` VALUES (0, '', '', '', 'null');
INSERT INTO `fecha` VALUES (0, '', '', '', 'null');
INSERT INTO `fecha` VALUES (0, '', '', '', 'null');
INSERT INTO `fecha` VALUES (0, '', '', '', 'null');
INSERT INTO `fecha` VALUES (0, '', '', '', 'null');
INSERT INTO `fecha` VALUES (0, '', '', '', 'null');
INSERT INTO `fecha` VALUES (0, '', '', '', 'null');
INSERT INTO `fecha` VALUES (0, '', '', '', 'null');
INSERT INTO `fecha` VALUES (0, '', '', '', 'null');
INSERT INTO `fecha` VALUES (0, '', '', '', 'null');
INSERT INTO `fecha` VALUES (0, '', '', '', 'null');
INSERT INTO `fecha` VALUES (0, '', '', '', 'null');
INSERT INTO `fecha` VALUES (0, '', '', '', 'null');
INSERT INTO `fecha` VALUES (0, '', '', '', 'null');
INSERT INTO `fecha` VALUES (0, '', '', '', 'null');
INSERT INTO `fecha` VALUES (0, '', '', '', 'null');
INSERT INTO `fecha` VALUES (0, '', '', '', 'null');
INSERT INTO `fecha` VALUES (0, '', '', '', 'null');
INSERT INTO `fecha` VALUES (0, '', '', '', 'null');
INSERT INTO `fecha` VALUES (0, '', '', '', 'null');
INSERT INTO `fecha` VALUES (14017353, '12/18/2013', '15:00', '16:00', 'Rudyard ');
INSERT INTO `fecha` VALUES (17757843, '11/21/2013', '13:00', '14:00', 'ruyar');
INSERT INTO `fecha` VALUES (17757843, '11/21/2013', '13:00', '14:00', 'ruyar');
INSERT INTO `fecha` VALUES (0, '', '', '', 'null');
INSERT INTO `fecha` VALUES (0, '', '', '', 'null');
INSERT INTO `fecha` VALUES (1241242, '', '', '', 'null');
INSERT INTO `fecha` VALUES (1454647, '11/15/2013', '13:00', '14:00', 'ruyar');
INSERT INTO `fecha` VALUES (0, '', '', '', 'null');
INSERT INTO `fecha` VALUES (6666666, '11/11/2013', '13:00', '14:00', 'ruyar');
INSERT INTO `fecha` VALUES (6666666, '11/11/2013', '13:00', '14:00', 'ruyar');
INSERT INTO `fecha` VALUES (6666666, '11/11/2013', '13:00', '14:00', 'ruyar');
INSERT INTO `fecha` VALUES (6666666, '11/11/2013', '13:00', '14:00', 'ruyar');
INSERT INTO `fecha` VALUES (6666666, '11/11/2013', '13:00', '14:00', 'ruyar');
INSERT INTO `fecha` VALUES (6666666, '11/11/2013', '13:00', '14:00', 'ruyar');
INSERT INTO `fecha` VALUES (6666666, '11/11/2013', '13:00', '14:00', 'ruyar');
INSERT INTO `fecha` VALUES (6666666, '11/11/2013', '13:00', '14:00', 'ruyar');
INSERT INTO `fecha` VALUES (6666666, '11/11/2013', '13:00', '14:00', 'ruyar');
INSERT INTO `fecha` VALUES (6666666, '11/11/2013', '13:00', '14:00', 'ruyar');
INSERT INTO `fecha` VALUES (6666666, '11/11/2013', '13:00', '14:00', 'ruyar');
INSERT INTO `fecha` VALUES (6666666, '11/11/2013', '13:00', '14:00', 'ruyar');
INSERT INTO `fecha` VALUES (1454647, '11/11/2013', '13:00', '14:00', 'ruyar');
INSERT INTO `fecha` VALUES (1454647, '11/13/2013', '15:00', '16:00', 'ruyar');
INSERT INTO `fecha` VALUES (16000, '11/23/2013', '15:00', '16:00', '');
INSERT INTO `fecha` VALUES (6666666, '10/24/2013', '15:00', '16:00', 'ruyar');
INSERT INTO `fecha` VALUES (156783232, '11/23/2013', '15:00', '16:00', 'ruyar');
INSERT INTO `fecha` VALUES (16730186, '', '', '', 'Rudyard ');
INSERT INTO `fecha` VALUES (17757843, '', '', '', 'null');
INSERT INTO `fecha` VALUES (17757843, '', '', '', 'null');
INSERT INTO `fecha` VALUES (17757843, '', '', '', 'null');
INSERT INTO `fecha` VALUES (16494111, '', '', '', '');
INSERT INTO `fecha` VALUES (17757843, '', '', '', 'null');
INSERT INTO `fecha` VALUES (17757843, '', '', '', '');
INSERT INTO `fecha` VALUES (16727053, '12/17/2013', '19:00', '20:00', 'Rudyard ');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `paciente`
-- 

CREATE TABLE `paciente` (
  `rut_paciente` int(11) NOT NULL,
  `nombre_paciente` varchar(100) NOT NULL,
  `apellido_paciente` varchar(100) NOT NULL,
  `sexo` varchar(2) default NULL,
  `edad` int(11) NOT NULL,
  `direccion` varchar(100) default NULL,
  `telefono` int(11) default NULL,
  `motivo_consulta` varchar(200) default NULL,
  `diagnostico` varchar(200) default NULL,
  `doctor` varchar(200) default NULL,
  `estado` varchar(20) default NULL,
  `seguro` varchar(200) NOT NULL,
  PRIMARY KEY  (`rut_paciente`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `paciente`
-- 

INSERT INTO `paciente` VALUES (14017353, 'Nelson', 'Mandela', 'm', 32, '2 sur 4 oriente', 75345221, 'Dolor de garganta', 'amigdalitis', 'Rudyard ', 'off', 'Fonasa');
INSERT INTO `paciente` VALUES (16727053, 'Fernanda', 'MuÃ±oz', 'f', 25, '1 sur 5 oriente', 5678234, 'Dolor Abdominal', 'null', 'Rudyard ', 'ok', 'Fonasa');
INSERT INTO `paciente` VALUES (17757843, '', '', 'm', 0, '', 0, '', 'null', 'null', 'ok', 'null');
INSERT INTO `paciente` VALUES (16494111, 'Mario', 'Kreutverger', 'm', 0, '', 0, '', 'null', '', 'ok', '');
INSERT INTO `paciente` VALUES (16730186, 'Juan', 'Perez', 'm', 26, '2 oriente 4 norte', 75463929, '', 'null', 'Rudyard ', 'ok', 'Isapre');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `receta`
-- 

CREATE TABLE `receta` (
  `rut_paciente` varchar(20) NOT NULL,
  `id_remedio` int(11) NOT NULL,
  `dias` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  PRIMARY KEY  (`rut_paciente`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `receta`
-- 

INSERT INTO `receta` VALUES ('17757843', 0, 12, 20);
INSERT INTO `receta` VALUES ('6666666', 0, 12, 4);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `remedios`
-- 

CREATE TABLE `remedios` (
  `id_remedio` int(11) NOT NULL auto_increment,
  `nombre` varchar(200) NOT NULL,
  `empresa` varchar(200) NOT NULL,
  `activo` varchar(100) NOT NULL,
  `enfermedad` varchar(200) NOT NULL,
  `doctor` varchar(200) NOT NULL,
  PRIMARY KEY  (`id_remedio`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

-- 
-- Volcar la base de datos para la tabla `remedios`
-- 

INSERT INTO `remedios` VALUES (2, 'asdsad', 'asdasasd', '', 'asdasdas', 'ruyar ');
INSERT INTO `remedios` VALUES (3, 'asdsad', 'asdsad', '', 'adasdasd', 'ruyar ');
INSERT INTO `remedios` VALUES (4, 'adsad', 'saffa', '', 'afsfa', 'ruyar ');
INSERT INTO `remedios` VALUES (5, 'Dolorgel', 'lab. Chile', '', '', 'Rudyard  Fuster');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `secretaria`
-- 

CREATE TABLE `secretaria` (
  `rut_secretaria` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `direccion` varchar(30) NOT NULL,
  `telefono` int(11) NOT NULL,
  `pass` varchar(20) NOT NULL,
  PRIMARY KEY  (`rut_secretaria`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `secretaria`
-- 

INSERT INTO `secretaria` VALUES (15876843, 'Monica', 'Gutierrez', 'San martin 103', 82340986, 'asdf');
INSERT INTO `secretaria` VALUES (412421, 'wena', 'naty', 'f3r4r43r', 1422155, '1234');
INSERT INTO `secretaria` VALUES (14567843, 'Luisa ', 'Lane', 'Kurt Moller 85', 78954342, 'asdf');
INSERT INTO `secretaria` VALUES (1234, 'asfsaf', 'asfsfaaf', 'asdasd445', 14241, '1234');
INSERT INTO `secretaria` VALUES (0, '', '', '', 0, '');
INSERT INTO `secretaria` VALUES (15789435, 'Monica', 'Perez', 'San martin', 8777777, '1234');
INSERT INTO `secretaria` VALUES (7297623, 'Ruth', 'Munoz', 'Manuel Rodriguez 35', 87451230, 'fusterm');
