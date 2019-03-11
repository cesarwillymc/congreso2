-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 04-08-2016 a las 11:37:26
-- Versión del servidor: 5.0.51
-- Versión de PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `usuario`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `estudiante`
-- 

CREATE TABLE `estudiante` (
  `codigo` char(6) NOT NULL,
  `paterno` varchar(15) NOT NULL,
  `materno` varchar(15) NOT NULL,
  `nombres` varchar(15) NOT NULL,
  `fnacim` date NOT NULL,
  `dni` char(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `estudiante`
-- 

INSERT INTO `estudiante` VALUES ('12345', 'mamani', 'canaza', 'cesae', '3321-02-11', '70321701');
INSERT INTO `estudiante` VALUES ('160284', 'mamani', 'canaza', 'cesar', '1998-07-11', '70321701');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `user`
-- 

CREATE TABLE `user` (
  `id` int(2) NOT NULL auto_increment,
  `login` varchar(15) NOT NULL,
  `contrasena` char(15) NOT NULL,
  `estado` char(1) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `gmail` varchar(30) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- 
-- Volcar la base de datos para la tabla `user`
-- 

INSERT INTO `user` VALUES (1, 'willy', '1234', '1', 'willy mamani ca', 'rasec.dx@gmail.com');
INSERT INTO `user` VALUES (2, 'cesar', '1234', '1', 'cesar mamani ca', 'rasec.dx@gmail.com');
