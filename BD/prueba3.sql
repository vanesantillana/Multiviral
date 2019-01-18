-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 17-01-2019 a las 23:38:48
-- Versión del servidor: 10.1.37-MariaDB-0+deb9u1
-- Versión de PHP: 7.0.33-0+deb9u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba3`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id` int(6) UNSIGNED NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `costo` varchar(30) NOT NULL,
  `descripcion` char(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id`, `nombre`, `costo`, `descripcion`) VALUES
(1, 'Diseño Web', '400', 'Creamos páginas web de máxima calidad, creativas y utilizando las técnicas más innovadoras para dar una imagen profesional.'),
(2, 'Responsivo o Adaptable', '100', 'Tu diseño de página web será adaptable y flexible a cualquier dispositivo móvil o tablet.'),
(3, 'Mejorar web ya existente', '350', 'Nos encargamos de mejorar el rendimiento de las partes más determinantes de tu web.'),
(4, 'Panel Administrador', '300', 'Te ayudamos a no ser dependientes de terceros para manejar el contenido de tu web.'),
(5, 'Posicionamiento Web', '100', 'Llevaremos tu página web a los primeros lugares de los buscadores como Google.'),
(6, 'Creación de Logos', '100', 'Nuestros especialistas en marketing se encargaran de manejar una mejor imagen para tu empresa.'),
(7, 'Multi idioma', '100', 'Ahora tienes la opción de que tu página sea conocida en el extranjero.'),
(8, 'Chat en linea', '250', 'De esta manera será más rápida la comunicación con los visitantes de tu web.'),
(9, 'APlicaciones Móviles', '600', 'Tienes una idea de una App, cuéntanos nosotros nos encargamos de hacerlo realidad.'),
(10, 'Software a Medida', '1000', 'Desarrollamos sistemas puntuales de acuerdo a las necesidades del cliente utilizando las ultimas tecnologías.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visitas`
--

CREATE TABLE `visitas` (
  `id` int(7) UNSIGNED NOT NULL,
  `url` varchar(300) NOT NULL,
  `visitas` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `visitas`
--

INSERT INTO `visitas` (`id`, `url`, `visitas`) VALUES
(1, '', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `visitas`
--
ALTER TABLE `visitas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `visitas`
--
ALTER TABLE `visitas`
  MODIFY `id` int(7) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
