-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-11-2020 a las 05:15:12
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `andercursos`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_L_CURSO_01` (IN `xcur_id` INT)  NO SQL
SELECT 
                    tm_curso.cur_id,
                    tm_curso.cur_titulo,
                    tm_curso.cur_descripcion,
                    tm_curso.cur_descripcion_lar,
                    tm_curso.cur_img,
                    tm_curso.usu_id,
                    tm_usuario.usu_nom,
                    tm_usuario.usu_ape,
                    tm_usuario.usu_obs,
                    tm_usuario.usu_foto,
                    tm_curso.cat_id,
                    tm_categoria.cat_nom,
                    tm_nivel.niv_nom,
                    (SELECT SUM(curd_dura) FROM tm_curso_detalle WHERE cur_id = xcur_id) AS curd_dura,
                    (SELECT COUNT(curd_id) FROM tm_curso_detalle WHERE cur_id = xcur_id) AS curd_total
                FROM tm_curso INNER join 
                    tm_usuario on tm_curso.usu_id = tm_usuario.usu_id INNER JOIN
                    tm_categoria on tm_curso.cat_id = tm_categoria.cat_id INNER JOIN
                    tm_nivel on tm_curso.niv_id = tm_nivel.niv_id
                WHERE
                    tm_curso.est = 1
                    AND tm_curso.cur_id = xcur_id$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_categoria`
--

CREATE TABLE `tm_categoria` (
  `cat_id` int(11) NOT NULL,
  `cat_nom` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `cat_obs` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fech_crea` datetime DEFAULT NULL,
  `fech_modi` datetime DEFAULT NULL,
  `fech_elim` datetime DEFAULT NULL,
  `est` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tm_categoria`
--

INSERT INTO `tm_categoria` (`cat_id`, `cat_nom`, `cat_obs`, `fech_crea`, `fech_modi`, `fech_elim`, `est`) VALUES
(1, 'Desarrollo', 'Ninguna', NULL, NULL, NULL, 1),
(2, 'Negocios', 'Ninguna', NULL, NULL, NULL, 1),
(3, 'Finanzas y Contabilidad', 'Ninguna', NULL, NULL, NULL, 1),
(4, 'Informatica y Software', 'Ninguna', NULL, NULL, NULL, 1),
(5, 'Productividad en la Oficina', 'Ninguna', NULL, NULL, NULL, 1),
(6, 'Desarrollo Personal', 'Ninguna', NULL, NULL, NULL, 1),
(7, 'Diseño', 'Ninguno', NULL, NULL, NULL, 1),
(8, 'Marketing', 'Ninguna', NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_curso`
--

CREATE TABLE `tm_curso` (
  `cur_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `niv_id` int(11) NOT NULL,
  `usu_id` int(11) NOT NULL,
  `cur_titulo` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `cur_descripcion` varchar(999) COLLATE utf8_spanish_ci NOT NULL,
  `cur_descripcion_lar` varchar(9000) COLLATE utf8_spanish_ci NOT NULL,
  `cur_img` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `fech_crea` datetime DEFAULT NULL,
  `fech_modi` datetime DEFAULT NULL,
  `fech_elim` datetime DEFAULT NULL,
  `est` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tm_curso`
--

INSERT INTO `tm_curso` (`cur_id`, `cat_id`, `niv_id`, `usu_id`, `cur_titulo`, `cur_descripcion`, `cur_descripcion_lar`, `cur_img`, `fech_crea`, `fech_modi`, `fech_elim`, `est`) VALUES
(1, 4, 3, 1, 'Curso Angular - Proyecto : CV Online', 'El currículum online es una excelente herramienta para que tu curriculum destaque y para que puedas hacerte ver de una forma más eficaz. Además, atendiendo a las nuevas tendencias , y como, cada vez más, las empresas buscan a sus candidatos de forma online, poder contar con un currículum web que cuente con tu información más actualizada es una excelente herramienta en la que invertir el tiempo.', 'Lorem ipsum dolor sit amet consectetur adipiscing elit nostra bibendum metus fermentum nunc feugiat porta, sodales quisque rutrum orci netus ac nec morbi nulla auctor senectus in. Id nunc quam nec euismod lacinia felis, pulvinar ligula netus leo turpis sollicitudin, vehicula sapien vitae curabitur morbi. Facilisi habitasse curae euismod vehicula phasellus luctus faucibus, tellus cubilia ad accumsan id mi habitant, vestibulum nisi ultricies praesent velit sapien.  A placerat ut mauris curae nascetur eget ante tempor vulputate, facilisi velit turpis maecenas curabitur rhoncus quis primis. Magnis massa risus at enim fames mollis nam platea cum facilisis, pretium tellus vitae taciti dictum natoque leo montes sociosqu iaculis, sollicitudin ornare dignissim condimentum primis eleifend bibendum duis non. Cubilia habitant urna iaculis commodo volutpat viverra faucibus odio, orci est litora fames felis ornare cum, taciti dictum nisl ac primis tempor pharetra.', '1.jpg', '2020-10-21 23:28:36', '2020-11-25 18:04:00', '0000-00-00 00:00:00', 1),
(2, 4, 3, 1, 'PHP Y SQLSERVER - Proyecto : Listado De APPs', 'PHP (acrónimo recursivo de PHP: Hypertext Preprocessor) es un lenguaje de código abierto muy popular especialmente adecuado para el desarrollo web y que puede ser incrustado en HTML.', 'Lorem ipsum dolor sit amet consectetur adipiscing elit nostra bibendum metus fermentum nunc feugiat porta, sodales quisque rutrum orci netus ac nec morbi nulla auctor senectus in. Id nunc quam nec euismod lacinia felis, pulvinar ligula netus leo turpis sollicitudin, vehicula sapien vitae curabitur morbi. Facilisi habitasse curae euismod vehicula phasellus luctus faucibus, tellus cubilia ad accumsan id mi habitant, vestibulum nisi ultricies praesent velit sapien.  A placerat ut mauris curae nascetur eget ante tempor vulputate, facilisi velit turpis maecenas curabitur rhoncus quis primis. Magnis massa risus at enim fames mollis nam platea cum facilisis, pretium tellus vitae taciti dictum natoque leo montes sociosqu iaculis, sollicitudin ornare dignissim condimentum primis eleifend bibendum duis non. Cubilia habitant urna iaculis commodo volutpat viverra faucibus odio, orci est litora fames felis ornare cum, taciti dictum nisl ac primis tempor pharetra.', '2.jpg', '2020-10-21 23:33:42', '2020-11-26 18:04:32', NULL, 1),
(3, 4, 2, 1, 'Curso Git Y GitHub', 'Los sistemas de control de versiones son programas que tienen como objetivo controlar los cambios en el desarrollo de cualquier tipo de software, permitiendo conocer el estado actual de un proyecto, los cambios que se le han realizado a cualquiera de sus piezas, las personas que intervinieron en ellos, etc.', 'Lorem ipsum dolor sit amet consectetur adipiscing elit nostra bibendum metus fermentum nunc feugiat porta, sodales quisque rutrum orci netus ac nec morbi nulla auctor senectus in. Id nunc quam nec euismod lacinia felis, pulvinar ligula netus leo turpis sollicitudin, vehicula sapien vitae curabitur morbi. Facilisi habitasse curae euismod vehicula phasellus luctus faucibus, tellus cubilia ad accumsan id mi habitant, vestibulum nisi ultricies praesent velit sapien.  A placerat ut mauris curae nascetur eget ante tempor vulputate, facilisi velit turpis maecenas curabitur rhoncus quis primis. Magnis massa risus at enim fames mollis nam platea cum facilisis, pretium tellus vitae taciti dictum natoque leo montes sociosqu iaculis, sollicitudin ornare dignissim condimentum primis eleifend bibendum duis non. Cubilia habitant urna iaculis commodo volutpat viverra faucibus odio, orci est litora fames felis ornare cum, taciti dictum nisl ac primis tempor pharetra.', '3.jpg', '2020-11-18 18:04:06', '2020-11-18 18:04:08', NULL, 1),
(4, 4, 2, 1, 'Curso PHP Y MySQL - Proyecto : Control Documentario', 'El control de documentos es como un sistema de gestión cuyo propósito es hacer cumplir los procesos y prácticas para la creación, revisión, modificación, emisión, distribución y accesibilidad de los documentos. Este rol asegura que la documentación disponible dentro de una organización sea de confianza para sus usuarios y contenga información actualizada, confiable, verificada y aprobada formalmente.', 'Lorem ipsum dolor sit amet consectetur adipiscing elit nostra bibendum metus fermentum nunc feugiat porta, sodales quisque rutrum orci netus ac nec morbi nulla auctor senectus in. Id nunc quam nec euismod lacinia felis, pulvinar ligula netus leo turpis sollicitudin, vehicula sapien vitae curabitur morbi. Facilisi habitasse curae euismod vehicula phasellus luctus faucibus, tellus cubilia ad accumsan id mi habitant, vestibulum nisi ultricies praesent velit sapien.  A placerat ut mauris curae nascetur eget ante tempor vulputate, facilisi velit turpis maecenas curabitur rhoncus quis primis. Magnis massa risus at enim fames mollis nam platea cum facilisis, pretium tellus vitae taciti dictum natoque leo montes sociosqu iaculis, sollicitudin ornare dignissim condimentum primis eleifend bibendum duis non. Cubilia habitant urna iaculis commodo volutpat viverra faucibus odio, orci est litora fames felis ornare cum, taciti dictum nisl ac primis tempor pharetra.', '4.jpg', '2020-11-04 18:04:10', '2020-11-26 18:04:23', NULL, 1),
(5, 4, 3, 1, 'HTML5 Dashboard - Proyecto : Templates', 'Cree su propio recurso en línea, incluso con poca o ninguna experiencia en el desarrollo web. Con la ayuda de Plantillas HTML5, configurar un sitio web que funcione perfectamente es tan fácil como el abecé.', 'Lorem ipsum dolor sit amet consectetur adipiscing elit nostra bibendum metus fermentum nunc feugiat porta, sodales quisque rutrum orci netus ac nec morbi nulla auctor senectus in. Id nunc quam nec euismod lacinia felis, pulvinar ligula netus leo turpis sollicitudin, vehicula sapien vitae curabitur morbi. Facilisi habitasse curae euismod vehicula phasellus luctus faucibus, tellus cubilia ad accumsan id mi habitant, vestibulum nisi ultricies praesent velit sapien.  A placerat ut mauris curae nascetur eget ante tempor vulputate, facilisi velit turpis maecenas curabitur rhoncus quis primis. Magnis massa risus at enim fames mollis nam platea cum facilisis, pretium tellus vitae taciti dictum natoque leo montes sociosqu iaculis, sollicitudin ornare dignissim condimentum primis eleifend bibendum duis non. Cubilia habitant urna iaculis commodo volutpat viverra faucibus odio, orci est litora fames felis ornare cum, taciti dictum nisl ac primis tempor pharetra.', '5.jpg', '2020-11-03 18:04:14', '2020-11-26 18:04:25', NULL, 1),
(6, 1, 3, 1, 'Titulo de Ejemplo Curso Ejemplo', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas \"Letraset\", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.', 'Lorem ipsum dolor sit amet consectetur adipiscing elit nostra bibendum metus fermentum nunc feugiat porta, sodales quisque rutrum orci netus ac nec morbi nulla auctor senectus in. Id nunc quam nec euismod lacinia felis, pulvinar ligula netus leo turpis sollicitudin, vehicula sapien vitae curabitur morbi. Facilisi habitasse curae euismod vehicula phasellus luctus faucibus, tellus cubilia ad accumsan id mi habitant, vestibulum nisi ultricies praesent velit sapien.  A placerat ut mauris curae nascetur eget ante tempor vulputate, facilisi velit turpis maecenas curabitur rhoncus quis primis. Magnis massa risus at enim fames mollis nam platea cum facilisis, pretium tellus vitae taciti dictum natoque leo montes sociosqu iaculis, sollicitudin ornare dignissim condimentum primis eleifend bibendum duis non. Cubilia habitant urna iaculis commodo volutpat viverra faucibus odio, orci est litora fames felis ornare cum, taciti dictum nisl ac primis tempor pharetra.', '7.jpg', '2020-11-24 18:04:16', '2020-11-26 18:04:28', NULL, 1),
(7, 2, 4, 1, 'Titulo de Ejemplo Curso Ejemplo 2', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas \"Letraset\", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.', 'Lorem ipsum dolor sit amet consectetur adipiscing elit nostra bibendum metus fermentum nunc feugiat porta, sodales quisque rutrum orci netus ac nec morbi nulla auctor senectus in. Id nunc quam nec euismod lacinia felis, pulvinar ligula netus leo turpis sollicitudin, vehicula sapien vitae curabitur morbi. Facilisi habitasse curae euismod vehicula phasellus luctus faucibus, tellus cubilia ad accumsan id mi habitant, vestibulum nisi ultricies praesent velit sapien.  A placerat ut mauris curae nascetur eget ante tempor vulputate, facilisi velit turpis maecenas curabitur rhoncus quis primis. Magnis massa risus at enim fames mollis nam platea cum facilisis, pretium tellus vitae taciti dictum natoque leo montes sociosqu iaculis, sollicitudin ornare dignissim condimentum primis eleifend bibendum duis non. Cubilia habitant urna iaculis commodo volutpat viverra faucibus odio, orci est litora fames felis ornare cum, taciti dictum nisl ac primis tempor pharetra.', '8.jpg', '2020-11-24 18:04:19', '2020-11-26 18:04:30', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_curso_aprender`
--

CREATE TABLE `tm_curso_aprender` (
  `cura_id` int(11) NOT NULL,
  `cur_id` int(11) NOT NULL,
  `cura_nom` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `est` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tm_curso_aprender`
--

INSERT INTO `tm_curso_aprender` (`cura_id`, `cur_id`, `cura_nom`, `est`) VALUES
(1, 1, 'Practicas Avanzadas de HTML', 1),
(2, 1, 'Diseño Responsivo', 1),
(3, 1, 'Lógica de Programación Avanzada', 1),
(4, 1, 'Base de Datos Creación de Tablas y Consultas', 1),
(5, 1, 'SQL Basico', 1),
(6, 1, 'SQL Intermedio', 1),
(7, 1, 'SQL AVanzado', 1),
(8, 1, 'Consumo y Creación de Servicios JSON', 1),
(9, 2, 'Practicas Avanzadas de HTML', 1),
(10, 2, 'Diseño Responsivo', 1),
(11, 2, 'Lógica de Programación Avanzada', 1),
(12, 2, 'Base de Datos Creación de Tablas y Consultas', 1),
(13, 2, 'SQL Basico', 1),
(14, 2, 'SQL Intermedio', 1),
(15, 2, 'SQL AVanzado', 1),
(16, 2, 'Consumo y Creación de Servicios JSON', 1),
(24, 3, 'Practicas Avanzadas de HTML', 1),
(25, 3, 'Diseño Responsivo', 1),
(26, 3, 'Lógica de Programación Avanzada', 1),
(27, 3, 'Base de Datos Creación de Tablas y Consultas', 1),
(28, 3, 'SQL Basico', 1),
(29, 3, 'SQL Intermedio', 1),
(30, 3, 'SQL AVanzado', 1),
(31, 3, 'Consumo y Creación de Servicios JSON', 1),
(39, 4, 'Practicas Avanzadas de HTML', 1),
(40, 4, 'Diseño Responsivo', 1),
(41, 4, 'Lógica de Programación Avanzada', 1),
(42, 4, 'Base de Datos Creación de Tablas y Consultas', 1),
(43, 4, 'SQL Basico', 1),
(44, 4, 'SQL Intermedio', 1),
(45, 4, 'SQL AVanzado', 1),
(46, 4, 'Consumo y Creación de Servicios JSON', 1),
(54, 5, 'Practicas Avanzadas de HTML', 1),
(55, 5, 'Diseño Responsivo', 1),
(56, 5, 'Lógica de Programación Avanzada', 1),
(57, 5, 'Base de Datos Creación de Tablas y Consultas', 1),
(58, 5, 'SQL Basico', 1),
(59, 5, 'SQL Intermedio', 1),
(60, 5, 'SQL AVanzado', 1),
(61, 5, 'Consumo y Creación de Servicios JSON', 1),
(69, 6, 'Practicas Avanzadas de HTML', 1),
(70, 6, 'Diseño Responsivo', 1),
(71, 6, 'Lógica de Programación Avanzada', 1),
(72, 6, 'Base de Datos Creación de Tablas y Consultas', 1),
(73, 6, 'SQL Basico', 1),
(74, 6, 'SQL Intermedio', 1),
(75, 6, 'SQL AVanzado', 1),
(76, 6, 'Consumo y Creación de Servicios JSON', 1),
(84, 7, 'Practicas Avanzadas de HTML', 1),
(85, 7, 'Diseño Responsivo', 1),
(86, 7, 'Lógica de Programación Avanzada', 1),
(87, 7, 'Base de Datos Creación de Tablas y Consultas', 1),
(88, 7, 'SQL Basico', 1),
(89, 7, 'SQL Intermedio', 1),
(90, 7, 'SQL AVanzado', 1),
(91, 7, 'Consumo y Creación de Servicios JSON', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_curso_detalle`
--

CREATE TABLE `tm_curso_detalle` (
  `curd_id` int(11) NOT NULL,
  `cur_id` int(11) NOT NULL,
  `curd_nom` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `curd_url` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `curd_dura` int(11) NOT NULL,
  `est` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tm_curso_detalle`
--

INSERT INTO `tm_curso_detalle` (`curd_id`, `cur_id`, `curd_nom`, `curd_url`, `curd_dura`, `est`) VALUES
(1, 1, 'Parte 1', 'nkc9VXDuOTg', 30, 1),
(2, 1, 'Parte 2', 'B3lPITFpLGw', 30, 1),
(3, 1, 'Parte 3', 'AooFWbOAKvw', 30, 1),
(4, 1, 'Parte 4', 'ZCbqlWXXiO0', 30, 1),
(5, 1, 'Parte 5', '3ppBYI-YVMw', 30, 1),
(6, 2, 'Parte 1', 'nkc9VXDuOTg', 30, 1),
(7, 2, 'Parte 2', 'B3lPITFpLGw', 30, 1),
(8, 2, 'Parte 3', 'AooFWbOAKvw', 30, 1),
(9, 2, 'Parte 4', 'ZCbqlWXXiO0', 30, 1),
(10, 2, 'Parte 5', '3ppBYI-YVMw', 30, 1),
(13, 3, 'Parte 1', 'nkc9VXDuOTg', 30, 1),
(14, 3, 'Parte 2', 'B3lPITFpLGw', 30, 1),
(15, 3, 'Parte 3', 'AooFWbOAKvw', 30, 1),
(16, 3, 'Parte 4', 'ZCbqlWXXiO0', 30, 1),
(17, 3, 'Parte 5', '3ppBYI-YVMw', 30, 1),
(20, 4, 'Parte 1', 'nkc9VXDuOTg', 30, 1),
(21, 4, 'Parte 2', 'B3lPITFpLGw', 30, 1),
(22, 4, 'Parte 3', 'AooFWbOAKvw', 30, 1),
(23, 4, 'Parte 4', 'ZCbqlWXXiO0', 30, 1),
(24, 4, 'Parte 5', '3ppBYI-YVMw', 30, 1),
(27, 5, 'Parte 1', 'nkc9VXDuOTg', 30, 1),
(28, 5, 'Parte 2', 'B3lPITFpLGw', 30, 1),
(29, 5, 'Parte 3', 'AooFWbOAKvw', 30, 1),
(30, 5, 'Parte 4', 'ZCbqlWXXiO0', 30, 1),
(31, 5, 'Parte 5', '3ppBYI-YVMw', 30, 1),
(34, 6, 'Parte 1', 'nkc9VXDuOTg', 30, 1),
(35, 6, 'Parte 2', 'B3lPITFpLGw', 30, 1),
(36, 6, 'Parte 3', 'AooFWbOAKvw', 30, 1),
(37, 6, 'Parte 4', 'ZCbqlWXXiO0', 30, 1),
(38, 6, 'Parte 5', '3ppBYI-YVMw', 30, 1),
(41, 7, 'Parte 1', 'nkc9VXDuOTg', 30, 1),
(42, 7, 'Parte 2', 'B3lPITFpLGw', 30, 1),
(43, 7, 'Parte 3', 'AooFWbOAKvw', 30, 1),
(44, 7, 'Parte 4', 'ZCbqlWXXiO0', 30, 1),
(45, 7, 'Parte 5', '3ppBYI-YVMw', 30, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_curso_requerimiento`
--

CREATE TABLE `tm_curso_requerimiento` (
  `curr_id` int(11) NOT NULL,
  `cur_id` int(11) NOT NULL,
  `curr_nom` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `est` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tm_curso_requerimiento`
--

INSERT INTO `tm_curso_requerimiento` (`curr_id`, `cur_id`, `curr_nom`, `est`) VALUES
(1, 1, 'Computadora con Windows o Linux ', 1),
(2, 1, 'Conocimiento Basico de HTML5', 1),
(3, 1, 'Ganas de Aprender', 1),
(4, 1, 'Computadora con Windows o Linux ', 1),
(5, 1, 'Conocimiento Basico de HTML5', 1),
(6, 1, 'Ganas de Aprender', 1),
(7, 2, 'Computadora con Windows o Linux ', 1),
(8, 2, 'Conocimiento Basico de HTML5', 1),
(9, 2, 'Ganas de Aprender', 1),
(10, 2, 'Computadora con Windows o Linux ', 1),
(11, 2, 'Conocimiento Basico de HTML5', 1),
(12, 2, 'Ganas de Aprender', 1),
(14, 3, 'Computadora con Windows o Linux ', 1),
(15, 3, 'Conocimiento Basico de HTML5', 1),
(16, 3, 'Ganas de Aprender', 1),
(17, 3, 'Computadora con Windows o Linux ', 1),
(18, 3, 'Conocimiento Basico de HTML5', 1),
(19, 3, 'Ganas de Aprender', 1),
(21, 4, 'Computadora con Windows o Linux ', 1),
(22, 4, 'Conocimiento Basico de HTML5', 1),
(23, 4, 'Ganas de Aprender', 1),
(24, 4, 'Computadora con Windows o Linux ', 1),
(25, 4, 'Conocimiento Basico de HTML5', 1),
(26, 4, 'Ganas de Aprender', 1),
(28, 5, 'Computadora con Windows o Linux ', 1),
(29, 5, 'Conocimiento Basico de HTML5', 1),
(30, 5, 'Ganas de Aprender', 1),
(31, 5, 'Computadora con Windows o Linux ', 1),
(32, 5, 'Conocimiento Basico de HTML5', 1),
(33, 5, 'Ganas de Aprender', 1),
(35, 6, 'Computadora con Windows o Linux ', 1),
(36, 6, 'Conocimiento Basico de HTML5', 1),
(37, 6, 'Ganas de Aprender', 1),
(38, 6, 'Computadora con Windows o Linux ', 1),
(39, 6, 'Conocimiento Basico de HTML5', 1),
(40, 6, 'Ganas de Aprender', 1),
(42, 7, 'Computadora con Windows o Linux ', 1),
(43, 7, 'Conocimiento Basico de HTML5', 1),
(44, 7, 'Ganas de Aprender', 1),
(45, 7, 'Computadora con Windows o Linux ', 1),
(46, 7, 'Conocimiento Basico de HTML5', 1),
(47, 7, 'Ganas de Aprender', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_libro`
--

CREATE TABLE `tm_libro` (
  `lib_id` int(11) NOT NULL,
  `lib_nom` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `lib_descripcion` varchar(900) COLLATE utf8_spanish_ci NOT NULL,
  `lib_img` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `lib_pag` int(11) NOT NULL,
  `lib_vistas` int(11) NOT NULL,
  `lib_dowload` int(11) NOT NULL,
  `lib_url` varchar(900) COLLATE utf8_spanish_ci NOT NULL,
  `fech_crea` datetime DEFAULT NULL,
  `fech_modi` int(11) DEFAULT NULL,
  `fech_elim` int(11) DEFAULT NULL,
  `est` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tm_libro`
--

INSERT INTO `tm_libro` (`lib_id`, `lib_nom`, `lib_descripcion`, `lib_img`, `lib_pag`, `lib_vistas`, `lib_dowload`, `lib_url`, `fech_crea`, `fech_modi`, `fech_elim`, `est`) VALUES
(1, 'Learn The Basic Of VUE JS', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic types', 'win8.jpeg', 232, 23, 2, 'http:\\\\', '2020-11-11 23:06:11', NULL, NULL, 1),
(2, 'PHP para Principiantes', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'php.jpeg', 234, 23, 2, 'http:\\\\', '2020-11-05 23:06:14', NULL, NULL, 1),
(3, ' HTML5 Brick Breaker', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'html5.jpeg', 234, 11, 2, 'http:\\\\', '2020-11-10 23:06:16', NULL, NULL, 1),
(4, 'CSS3 Web Development', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'php.jpeg', 234, 12, 2, 'http:\\\\', '2020-11-12 23:06:18', NULL, NULL, 1),
(5, 'Vue.js 2 Basics', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'book-description.jpeg', 234, 23, 2, 'http:\\\\', '2020-11-19 23:06:20', NULL, NULL, 1),
(6, 'WIN8 App Development', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'php.jpeg', 234, 234, 2, 'http:\\\\', '2020-11-19 23:06:27', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_nivel`
--

CREATE TABLE `tm_nivel` (
  `niv_id` int(11) NOT NULL,
  `niv_nom` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `niv_obs` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `fech_crea` datetime DEFAULT NULL,
  `fech_modi` datetime DEFAULT NULL,
  `fech_elim` datetime DEFAULT NULL,
  `est` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tm_nivel`
--

INSERT INTO `tm_nivel` (`niv_id`, `niv_nom`, `niv_obs`, `fech_crea`, `fech_modi`, `fech_elim`, `est`) VALUES
(2, 'Basico', 'Ninguna', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(3, 'Intermedio', 'Ninguno', NULL, NULL, NULL, 1),
(4, 'Avanzado', 'Ninguno', NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_pais`
--

CREATE TABLE `tm_pais` (
  `pai_id` int(11) NOT NULL,
  `pai_nom` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `fech_crea` datetime DEFAULT NULL,
  `fech_modi` datetime DEFAULT NULL,
  `fech_elim` datetime DEFAULT NULL,
  `est` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tm_pais`
--

INSERT INTO `tm_pais` (`pai_id`, `pai_nom`, `fech_crea`, `fech_modi`, `fech_elim`, `est`) VALUES
(1, 'Perú', NULL, NULL, NULL, 1),
(2, 'Argentina', NULL, NULL, NULL, 1),
(3, 'Bolivia', NULL, NULL, NULL, 1),
(4, 'Ecuador', NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_rol`
--

CREATE TABLE `tm_rol` (
  `rol_id` int(11) NOT NULL,
  `rol_nom` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `rol_obs` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fech_crea` datetime DEFAULT NULL,
  `fech_modi` datetime DEFAULT NULL,
  `fech_elim` datetime DEFAULT NULL,
  `est` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_usuario`
--

CREATE TABLE `tm_usuario` (
  `usu_id` int(11) NOT NULL,
  `usu_nom` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `usu_ape` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `usu_correo` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `usu_foto` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `usu_telf` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `usu_nacimiento` date DEFAULT NULL,
  `usu_sex` varchar(1) COLLATE utf8_spanish_ci DEFAULT NULL,
  `usu_obs` varchar(9000) COLLATE utf8_spanish_ci DEFAULT NULL,
  `pai_id` int(11) DEFAULT NULL,
  `usu_dire` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `usu_pass` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fech_crea` datetime DEFAULT NULL,
  `fech_modi` datetime DEFAULT NULL,
  `fech_elim` datetime DEFAULT NULL,
  `est` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tm_usuario`
--

INSERT INTO `tm_usuario` (`usu_id`, `usu_nom`, `usu_ape`, `usu_correo`, `usu_foto`, `usu_telf`, `usu_nacimiento`, `usu_sex`, `usu_obs`, `pai_id`, `usu_dire`, `usu_pass`, `fech_crea`, `fech_modi`, `fech_elim`, `est`) VALUES
(1, 'Davis Anderson', 'Bastidas', 'DAVIS_ANDERSON_87@HOTMAIL.COM', '1.jpg', '999999999', '2020-10-13', 'M', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', NULL, 'Lima', '123456', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(3, 'RANDALL', 'BASTIDAS', 'RBASTIDAS@TRANSTOTALPERU.COM', '2.jpg', '123', '2019-03-14', 'M', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', NULL, 'Carabayllo', '123456', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(4, 'FRANCIS', 'MEZA', 'FMEZA@GMAIL.COM', '3.jpg', '123', '2020-10-20', 'F', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', NULL, 'Callao', '123456', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(5, 'MARIA', 'ISABEL', 'ISABELVICENTE@GMAIL.COM', '4.jpg', '123', '2020-10-20', 'F', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', NULL, 'Comas', '123456', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(7, 'MARIAx', 'ISABELx', 'xISABELVICENTE@GMAIL.COM', '5.jpg', '1234', '2020-11-01', 'M', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', NULL, 'San Miguel', '123456', NULL, NULL, NULL, 1),
(8, 'test', 'test', 'aa@asd.com', '6.jpg', '121345', '2020-11-01', 'M', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', NULL, 'Lince', '123456', NULL, NULL, NULL, 1),
(9, 'Davis', 'Anderson', 'davis_anderson_87@hotmail.com123', '7.jpg', '12345', '2020-10-06', 'M', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', NULL, 'Chorrillos', '123456', '2020-11-02 22:48:08', NULL, NULL, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tm_categoria`
--
ALTER TABLE `tm_categoria`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indices de la tabla `tm_curso`
--
ALTER TABLE `tm_curso`
  ADD PRIMARY KEY (`cur_id`);

--
-- Indices de la tabla `tm_curso_aprender`
--
ALTER TABLE `tm_curso_aprender`
  ADD PRIMARY KEY (`cura_id`);

--
-- Indices de la tabla `tm_curso_detalle`
--
ALTER TABLE `tm_curso_detalle`
  ADD PRIMARY KEY (`curd_id`);

--
-- Indices de la tabla `tm_curso_requerimiento`
--
ALTER TABLE `tm_curso_requerimiento`
  ADD PRIMARY KEY (`curr_id`);

--
-- Indices de la tabla `tm_libro`
--
ALTER TABLE `tm_libro`
  ADD PRIMARY KEY (`lib_id`);

--
-- Indices de la tabla `tm_nivel`
--
ALTER TABLE `tm_nivel`
  ADD PRIMARY KEY (`niv_id`);

--
-- Indices de la tabla `tm_pais`
--
ALTER TABLE `tm_pais`
  ADD PRIMARY KEY (`pai_id`);

--
-- Indices de la tabla `tm_rol`
--
ALTER TABLE `tm_rol`
  ADD PRIMARY KEY (`rol_id`);

--
-- Indices de la tabla `tm_usuario`
--
ALTER TABLE `tm_usuario`
  ADD PRIMARY KEY (`usu_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tm_categoria`
--
ALTER TABLE `tm_categoria`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tm_curso`
--
ALTER TABLE `tm_curso`
  MODIFY `cur_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tm_curso_aprender`
--
ALTER TABLE `tm_curso_aprender`
  MODIFY `cura_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT de la tabla `tm_curso_detalle`
--
ALTER TABLE `tm_curso_detalle`
  MODIFY `curd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de la tabla `tm_curso_requerimiento`
--
ALTER TABLE `tm_curso_requerimiento`
  MODIFY `curr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de la tabla `tm_libro`
--
ALTER TABLE `tm_libro`
  MODIFY `lib_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tm_nivel`
--
ALTER TABLE `tm_nivel`
  MODIFY `niv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tm_pais`
--
ALTER TABLE `tm_pais`
  MODIFY `pai_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tm_rol`
--
ALTER TABLE `tm_rol`
  MODIFY `rol_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tm_usuario`
--
ALTER TABLE `tm_usuario`
  MODIFY `usu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
