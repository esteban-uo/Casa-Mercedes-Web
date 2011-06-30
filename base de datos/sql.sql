-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 30-06-2011 a las 17:12:13
-- Versión del servidor: 5.1.41
-- Versión de PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Base de datos: `casa_mercedes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `albergados`
--

CREATE TABLE IF NOT EXISTS `albergados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `persona_id` int(11) DEFAULT NULL,
  `expediente` varchar(50) DEFAULT NULL,
  `casa_id` int(11) DEFAULT NULL,
  `fecha_ingreso` date DEFAULT NULL,
  `embarazo_actual` varchar(50) DEFAULT NULL,
  `cant_hijos` int(11) DEFAULT NULL,
  `remitida_por` varchar(50) DEFAULT NULL,
  `averiguacion_previa` varchar(25) DEFAULT NULL,
  `familiograma_imagen_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_albergados` (`persona_id`),
  KEY `FK_albergadosCasas` (`casa_id`),
  KEY `FK_albergadosImagen` (`familiograma_imagen_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `albergados`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `casas`
--

CREATE TABLE IF NOT EXISTS `casas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pais_id` int(11) DEFAULT NULL,
  `estado_id` int(11) DEFAULT NULL,
  `municipio_id` int(11) DEFAULT NULL,
  `direccion` varchar(200) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_casas` (`pais_id`),
  KEY `FK_casasEstados` (`estado_id`),
  KEY `FK_casasMunicipios` (`municipio_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `casas`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `construcciones`
--

CREATE TABLE IF NOT EXISTS `construcciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `construcciones`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_albergado`
--

CREATE TABLE IF NOT EXISTS `datos_albergado` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `albergado_id` int(11) DEFAULT NULL,
  `consumo_sustancias` varchar(150) DEFAULT NULL,
  `perforaciones` tinyint(1) DEFAULT '0',
  `tatuajes` tinyint(1) DEFAULT '0',
  `delitos` varchar(150) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_datos_albergado` (`albergado_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `datos_albergado`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dependientes`
--

CREATE TABLE IF NOT EXISTS `dependientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `persona_id` int(11) DEFAULT NULL,
  `albergado_id` int(11) DEFAULT NULL,
  `expediente` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_dependientes` (`persona_id`),
  KEY `FK_dependientesAlbergados` (`albergado_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `dependientes`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `distribucions`
--

CREATE TABLE IF NOT EXISTS `distribucions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `distribucions`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE IF NOT EXISTS `estados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `estados`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) DEFAULT NULL,
  `tipoimage_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_images` (`tipoimage_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `images`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instituciones`
--

CREATE TABLE IF NOT EXISTS `instituciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `albergado_id` int(11) DEFAULT NULL,
  `institucion` varchar(255) DEFAULT NULL,
  `fecha_ingreso` date DEFAULT NULL,
  `fecha_egreso` date DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_instituciones` (`albergado_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `instituciones`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipios`
--

CREATE TABLE IF NOT EXISTS `municipios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `municipios`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nacimientos`
--

CREATE TABLE IF NOT EXISTS `nacimientos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `persona_id` int(11) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `pais_id` int(11) DEFAULT NULL,
  `estado_id` int(11) DEFAULT NULL,
  `municipio_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_nacimientos` (`persona_id`),
  KEY `FK_nacimientosPaises` (`pais_id`),
  KEY `FK_nacimientosEstados` (`estado_id`),
  KEY `FK_nacimientosMunicipios` (`municipio_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `nacimientos`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paises`
--

CREATE TABLE IF NOT EXISTS `paises` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `paises`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE IF NOT EXISTS `personas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `primer_nombre` varchar(50) DEFAULT NULL,
  `segundo_nombre` varchar(50) DEFAULT NULL,
  `primer_apellido` varchar(50) DEFAULT NULL,
  `segundo_apellido` varchar(50) DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  `status` varchar(4) DEFAULT NULL,
  `fecha_ingreso` date DEFAULT NULL,
  `foto_imagen_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modiefied` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_personas` (`foto_imagen_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `personas`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `socio_economico`
--

CREATE TABLE IF NOT EXISTS `socio_economico` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `albergado_id` int(11) DEFAULT NULL,
  `poblacion_indigena` tinyint(1) DEFAULT '0',
  `ha_trabajado` tinyint(1) DEFAULT '0',
  `tiempo_de_trabajo` int(11) DEFAULT NULL,
  `ultimo_trabajo` varchar(25) DEFAULT NULL,
  `tiempo` varchar(25) DEFAULT NULL,
  `sueldo` float DEFAULT NULL,
  `nivel_economico` varchar(25) DEFAULT NULL,
  `zona_id` int(11) DEFAULT NULL,
  `vivienda_id` int(11) DEFAULT NULL,
  `construccion_id` int(11) DEFAULT NULL,
  `tenencia_id` int(11) DEFAULT NULL,
  `distribucion_id` int(11) DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_socio_economico` (`construccion_id`),
  KEY `FK_socio_economicoVivienda` (`vivienda_id`),
  KEY `FK_socio_economicoDistribucion` (`distribucion_id`),
  KEY `FK_socio_economicoTenencia` (`tenencia_id`),
  KEY `FK_socio_economicoZonas` (`zona_id`),
  KEY `FK_socio_economicoAlbergado` (`albergado_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `socio_economico`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tenencias`
--

CREATE TABLE IF NOT EXISTS `tenencias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `tenencias`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoimages`
--

CREATE TABLE IF NOT EXISTS `tipoimages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `tipoimages`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `casa_id` int(11) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `fecha_alta` date DEFAULT NULL,
  `fecha_baja` date DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_users` (`casa_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `users`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `viviendas`
--

CREATE TABLE IF NOT EXISTS `viviendas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `viviendas`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zonas`
--

CREATE TABLE IF NOT EXISTS `zonas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `zonas`
--


--
-- Filtros para las tablas descargadas (dump)
--

--
-- Filtros para la tabla `albergados`
--
ALTER TABLE `albergados`
  ADD CONSTRAINT `FK_albergadosImagen` FOREIGN KEY (`familiograma_imagen_id`) REFERENCES `images` (`id`),
  ADD CONSTRAINT `FK_albergados` FOREIGN KEY (`persona_id`) REFERENCES `personas` (`id`),
  ADD CONSTRAINT `FK_albergadosCasas` FOREIGN KEY (`casa_id`) REFERENCES `casas` (`id`);

--
-- Filtros para la tabla `casas`
--
ALTER TABLE `casas`
  ADD CONSTRAINT `FK_casasMunicipios` FOREIGN KEY (`municipio_id`) REFERENCES `municipios` (`id`),
  ADD CONSTRAINT `FK_casas` FOREIGN KEY (`pais_id`) REFERENCES `paises` (`id`),
  ADD CONSTRAINT `FK_casasEstados` FOREIGN KEY (`estado_id`) REFERENCES `estados` (`id`);

--
-- Filtros para la tabla `datos_albergado`
--
ALTER TABLE `datos_albergado`
  ADD CONSTRAINT `FK_datos_albergado` FOREIGN KEY (`albergado_id`) REFERENCES `albergados` (`id`);

--
-- Filtros para la tabla `dependientes`
--
ALTER TABLE `dependientes`
  ADD CONSTRAINT `FK_dependientesAlbergados` FOREIGN KEY (`albergado_id`) REFERENCES `albergados` (`id`),
  ADD CONSTRAINT `FK_dependientes` FOREIGN KEY (`persona_id`) REFERENCES `personas` (`id`);

--
-- Filtros para la tabla `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `FK_images` FOREIGN KEY (`tipoimage_id`) REFERENCES `tipoimages` (`id`);

--
-- Filtros para la tabla `instituciones`
--
ALTER TABLE `instituciones`
  ADD CONSTRAINT `FK_instituciones` FOREIGN KEY (`albergado_id`) REFERENCES `albergados` (`id`);

--
-- Filtros para la tabla `nacimientos`
--
ALTER TABLE `nacimientos`
  ADD CONSTRAINT `FK_nacimientosMunicipios` FOREIGN KEY (`municipio_id`) REFERENCES `municipios` (`id`),
  ADD CONSTRAINT `FK_nacimientos` FOREIGN KEY (`persona_id`) REFERENCES `personas` (`id`),
  ADD CONSTRAINT `FK_nacimientosEstados` FOREIGN KEY (`estado_id`) REFERENCES `estados` (`id`),
  ADD CONSTRAINT `FK_nacimientosPaises` FOREIGN KEY (`pais_id`) REFERENCES `paises` (`id`);

--
-- Filtros para la tabla `personas`
--
ALTER TABLE `personas`
  ADD CONSTRAINT `FK_personas` FOREIGN KEY (`foto_imagen_id`) REFERENCES `images` (`id`);

--
-- Filtros para la tabla `socio_economico`
--
ALTER TABLE `socio_economico`
  ADD CONSTRAINT `FK_socio_economicoAlbergado` FOREIGN KEY (`albergado_id`) REFERENCES `albergados` (`id`),
  ADD CONSTRAINT `FK_socio_economico` FOREIGN KEY (`construccion_id`) REFERENCES `construcciones` (`id`),
  ADD CONSTRAINT `FK_socio_economicoDistribucion` FOREIGN KEY (`distribucion_id`) REFERENCES `distribucions` (`id`),
  ADD CONSTRAINT `FK_socio_economicoTenencia` FOREIGN KEY (`tenencia_id`) REFERENCES `tenencias` (`id`),
  ADD CONSTRAINT `FK_socio_economicoVivienda` FOREIGN KEY (`vivienda_id`) REFERENCES `viviendas` (`id`),
  ADD CONSTRAINT `FK_socio_economicoZonas` FOREIGN KEY (`zona_id`) REFERENCES `zonas` (`id`);

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `FK_users` FOREIGN KEY (`casa_id`) REFERENCES `casas` (`id`);
