-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-01-2024 a las 23:33:57
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `torneosbasket`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `idAdmin` int(11) NOT NULL,
  `nombreAdmin` varchar(30) NOT NULL,
  `apellidoAdmin` varchar(30) NOT NULL,
  `usuarioAdmin` varchar(50) NOT NULL,
  `passwordAdmin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`idAdmin`, `nombreAdmin`, `apellidoAdmin`, `usuarioAdmin`, `passwordAdmin`) VALUES
(1, 'prueba', 'pruebap', 'admin1', '$2y$10$Ao4zKycgIZypFaHGC/b/yOOipqdCQxMppSnBoKJted.hhuWzHHwVi');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calendariojuegos`
--

CREATE TABLE `calendariojuegos` (
  `idCalendarioJuegos` int(11) NOT NULL,
  `equipoLocal` varchar(30) NOT NULL,
  `equipoVisitante` varchar(30) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `sede` varchar(50) NOT NULL,
  `categoria` varchar(25) NOT NULL,
  `tipoDeJuego` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
  `idEquipo` int(11) NOT NULL,
  `nombreEquipo` varchar(30) NOT NULL,
  `logoEquipo` varchar(50) NOT NULL,
  `nombreResponsable` varchar(50) NOT NULL,
  `correoResponsable` varchar(50) NOT NULL,
  `celularResponsable` varchar(10) NOT NULL,
  `idGrupo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`idEquipo`, `nombreEquipo`, `logoEquipo`, `nombreResponsable`, `correoResponsable`, `celularResponsable`, `idGrupo`) VALUES
(1, 'test', 'test', 'test', 'test', 'test', 1),
(2, 'asdas', 'asdas', 'asdas', 'asdas', 'adas', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadisticasequipo`
--

CREATE TABLE `estadisticasequipo` (
  `idEstadisticaEquipo` int(11) NOT NULL,
  `idEquipo` int(11) NOT NULL,
  `partidosJugados` int(11) NOT NULL,
  `partidosGanados` int(11) NOT NULL,
  `partidosPerdidos` int(11) NOT NULL,
  `puntosFavor` int(11) NOT NULL,
  `puntosContra` int(11) NOT NULL,
  `diferenciaDePuntos` int(11) NOT NULL,
  `puntaje` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadisticasjugador`
--

CREATE TABLE `estadisticasjugador` (
  `idEstadisticaJugador` int(11) NOT NULL,
  `idJugador` int(11) NOT NULL,
  `puntosAnotados` int(11) NOT NULL,
  `tirosTresPuntos` int(11) NOT NULL,
  `faltasCometidas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

CREATE TABLE `grupos` (
  `idGrupo` int(11) NOT NULL,
  `nombreGrupo` varchar(30) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `idTorneo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `grupos`
--

INSERT INTO `grupos` (`idGrupo`, `nombreGrupo`, `categoria`, `idTorneo`) VALUES
(1, 'tes', 'test', 1),
(2, 'asdasda', 'asdasd', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugadores`
--

CREATE TABLE `jugadores` (
  `idJugador` int(11) NOT NULL,
  `nombreEquipo` varchar(30) NOT NULL,
  `nombreJugador` varchar(30) NOT NULL,
  `apellidosJugador` varchar(30) NOT NULL,
  `fechaNacJugador` date NOT NULL,
  `correoJugador` varchar(50) NOT NULL,
  `celularJugador` varchar(10) NOT NULL,
  `tipoSangreJugador` varchar(20) NOT NULL,
  `contactoEmergenciaJugador` varchar(10) NOT NULL,
  `fotoJugador` varchar(50) NOT NULL,
  `idTorneo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logos`
--

CREATE TABLE `logos` (
  `idLogo` int(11) NOT NULL,
  `idTorneo` int(11) NOT NULL,
  `nombreLogo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roldejuegos`
--

CREATE TABLE `roldejuegos` (
  `idRolDeJuego` int(11) NOT NULL,
  `idEquipo` int(11) NOT NULL,
  `idJugador` int(11) NOT NULL,
  `tirosTresPuntos` int(11) NOT NULL,
  `faltasCometidas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `torneos`
--

CREATE TABLE `torneos` (
  `idTorneo` int(11) NOT NULL,
  `nombreTorneo` varchar(50) NOT NULL,
  `patrocinadores` varchar(200) NOT NULL,
  `organizador` varchar(100) NOT NULL,
  `sede` varchar(50) NOT NULL,
  `premio1erLugar` varchar(50) NOT NULL,
  `premio2doLugar` varchar(50) NOT NULL,
  `premio3erLugar` varchar(50) NOT NULL,
  `otroPremio` varchar(50) NOT NULL,
  `usuarioOrganizador` varchar(50) NOT NULL,
  `contrasenaOrganizador` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `torneos`
--

INSERT INTO `torneos` (`idTorneo`, `nombreTorneo`, `patrocinadores`, `organizador`, `sede`, `premio1erLugar`, `premio2doLugar`, `premio3erLugar`, `otroPremio`, `usuarioOrganizador`, `contrasenaOrganizador`) VALUES
(1, 'Running', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test'),
(2, 'Devil', 'asdad', 'asdas', 'asdas', 'asdas', 'asdas', 'asdas', 'adsa', 'asdas', 'asda'),
(3, 'Bury', 'Nike', 'E.R.', 'RedGrave', '1233', '1222', '1111', '500', 'clasificado', '$2y$10$zi0Ml98bbNa2VhquPKg5DeX8G3U6EIG6vVYmuuhbXL6gPqNfivGjy'),
(4, 'torneo uas', 'a', 'uas', 'UAS', '10000', '5000', '3000', '1000', 'prueba', '$2y$10$c3Jw7sREQZTnofvCYoXQ7Om2EQ0KBaeFdQ.7F1PccMVf2kJv0w4xa');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indices de la tabla `calendariojuegos`
--
ALTER TABLE `calendariojuegos`
  ADD PRIMARY KEY (`idCalendarioJuegos`);

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`idEquipo`),
  ADD KEY `idGrupo` (`idGrupo`);

--
-- Indices de la tabla `estadisticasjugador`
--
ALTER TABLE `estadisticasjugador`
  ADD PRIMARY KEY (`idEstadisticaJugador`);

--
-- Indices de la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD PRIMARY KEY (`idGrupo`),
  ADD KEY `idTorneo` (`idTorneo`);

--
-- Indices de la tabla `jugadores`
--
ALTER TABLE `jugadores`
  ADD PRIMARY KEY (`idJugador`),
  ADD KEY `idTorneo` (`idTorneo`);

--
-- Indices de la tabla `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`idLogo`);

--
-- Indices de la tabla `roldejuegos`
--
ALTER TABLE `roldejuegos`
  ADD PRIMARY KEY (`idRolDeJuego`);

--
-- Indices de la tabla `torneos`
--
ALTER TABLE `torneos`
  ADD PRIMARY KEY (`idTorneo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `calendariojuegos`
--
ALTER TABLE `calendariojuegos`
  MODIFY `idCalendarioJuegos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `idEquipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `estadisticasjugador`
--
ALTER TABLE `estadisticasjugador`
  MODIFY `idEstadisticaJugador` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `grupos`
--
ALTER TABLE `grupos`
  MODIFY `idGrupo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `jugadores`
--
ALTER TABLE `jugadores`
  MODIFY `idJugador` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `logos`
--
ALTER TABLE `logos`
  MODIFY `idLogo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roldejuegos`
--
ALTER TABLE `roldejuegos`
  MODIFY `idRolDeJuego` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `torneos`
--
ALTER TABLE `torneos`
  MODIFY `idTorneo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD CONSTRAINT `equipos_ibfk_1` FOREIGN KEY (`idGrupo`) REFERENCES `grupos` (`idGrupo`);

--
-- Filtros para la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD CONSTRAINT `grupos_ibfk_1` FOREIGN KEY (`idTorneo`) REFERENCES `torneos` (`idTorneo`);

--
-- Filtros para la tabla `jugadores`
--
ALTER TABLE `jugadores`
  ADD CONSTRAINT `jugadores_ibfk_1` FOREIGN KEY (`idTorneo`) REFERENCES `torneos` (`idTorneo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
