-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2021 at 04:23 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rutadelsaber`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacto`
--

CREATE TABLE `contacto` (
  `id_contacto` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `correo` varchar(45) NOT NULL,
  `comentario` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `profesores`
--

CREATE TABLE `profesores` (
  `correo` varchar(50) NOT NULL,
  `nombreprofesor` varchar(50) NOT NULL,
  `seccion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profesores`
--

INSERT INTO `profesores` (`correo`, `nombreprofesor`, `seccion`) VALUES
('juanrestrepo@gmail.com', 'Juan', '08'),
('luis@gmail.com', 'Rodriguez', '13'),
('melany@inemjose.edu.co', 'Melany Julieth SuÃ¡rez Rivera ', '20');

-- --------------------------------------------------------

--
-- Table structure for table `secciones`
--

CREATE TABLE `secciones` (
  `idseccion` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nombreseccion` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `secciones`
--

INSERT INTO `secciones` (`idseccion`, `nombreseccion`, `descripcion`) VALUES
('01', 'Artes PlÃ¡sticas', 'Se basa en el estudio de la pintura y la escultura.'),
('02', 'Ciencias y MatemÃ¡ticas', 'Se basa en el estudio de la biologÃ­a, la quÃ­mica, la fÃ­sica y las matemÃ¡ticas.'),
('03', 'Ciencias y MatemÃ¡ticas', 'Se basa en el estudio de la biologÃ­a, la quÃ­mica, la fÃ­sica y las matemÃ¡ticas.'),
('04', 'Procesos MatemÃ¡ticos', 'Se profundiza en el cÃ¡lculo, la geometrÃ­a, la lÃ³gica y la estadÃ­stica.'),
('05', 'Sistemas', 'Se basa en el aprendizaje de la ingenierÃ­a de sistemas.'),
('06', 'ProgramaciÃ³n', 'Se basa en el aprendizaje de algoritmos y lenguajes de programaciÃ³n.'),
('07', 'ProgramaciÃ³n', 'Se basa en el aprendizaje de algoritmos y lenguajes de programaciÃ³n.'),
('08', 'QuÃ­mica Industrial', 'Se estudia las aplicaciones de la quÃ­mica.'),
('09 ', 'Deportes', 'Se basa en el estudio de la biologÃ­a y la educaciÃ³n fÃ­sica.'),
('10', 'Deportes', 'Se basa en el estudio de la biologÃ­a y la educaciÃ³n fÃ­sica.'),
('11', 'Humanidades - ComunicaciÃ³n y Medios', 'Se basa en el periodismo y la comunicaciÃ³n social.'),
('12', 'Humanidades - ComunicaciÃ³n y Medios', 'Se basa en el periodismo y la comunicaciÃ³n social.'),
('13', 'Humanidades - InglÃ©s', 'Se profundiza en el estudio del inglÃ©s.'),
('14', 'ElectrÃ³nica', 'Arreglo y mantenimiento de equipos electrÃ³nicos, con el diseÃ±o y montaje de circuitos de baja potencia.'),
('15', 'ElectrÃ³nica', 'Arreglo y mantenimiento de equipos electrÃ³nicos, con el diseÃ±o y montaje de circuitos de baja potencia.'),
('16', 'Modas', 'Enfocada en el diseÃ±o de prendas de vestir y accesorios.'),
('17', 'Construcciones', 'Basada en la arquitectura.'),
('20', 'Contabilidad', 'Se basa en las finanzas.'),
('21', 'Contabilidad', 'Se basa en las finanzas.'),
('22', 'AdministraciÃ³n', 'Se basa en el estudio de las organizaciones.'),
('23', 'AdministraciÃ³n', 'Se basa en el estudio de las organizaciones.'),
('24', 'GestiÃ³n Social', 'Se basa en el estudio de las sociedades.'),
('25', 'GestiÃ³n Social', ' Se basa en el estudio de las sociedades.'),
('27', 'GastronomÃ­a ', 'Es la industria dedicada a la preparaciÃ³n y servicio de alimentos y bebidas, ademÃ¡s de conocimientos en bar, mesa y catering.'),
('28', 'MÃºsica', 'Se profundiza en el aprendizaje de varios instrumentos.'),
('29', 'Recursos Humanos', 'Se profundiza en la atenciÃ³n al cliente.');

-- --------------------------------------------------------

--
-- Table structure for table `tipousuario`
--

CREATE TABLE `tipousuario` (
  `codigo` int(11) NOT NULL,
  `descripcion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipousuario`
--

INSERT INTO `tipousuario` (`codigo`, `descripcion`) VALUES
(1, 'Administrador'),
(2, 'Cliente');

-- --------------------------------------------------------

--
-- Table structure for table `universidades`
--

CREATE TABLE `universidades` (
  `id_universidad` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `universidades`
--

INSERT INTO `universidades` (`id_universidad`, `nombre`, `descripcion`) VALUES
(1, 'Universidad de Antioquia', 'Convenio con MÃºsica y ProgramaciÃ³n'),
(3, 'Universidad de MedellÃ­n', 'Convenio con administraciÃ³n');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `correo` varchar(90) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `apellido` varchar(40) NOT NULL,
  `codigo` varchar(45) NOT NULL,
  `clave` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`correo`, `nombre`, `apellido`, `codigo`, `clave`) VALUES
('Daniel@gmail.com', 'Daniel', 'Velez', '2', 'Daniel123456789'),
('daniela@gmail.com', 'Danielita', 'Restrepo', '1', '1234'),
('luis@gmail.com', 'Luis', 'vcsnzmks', '1', 'luisaC1234'),
('luisa@gmail.com', 'Luisa', 'Osorio', '2', '5678'),
('melany@gmail.com', 'Melany', 'Suarez', '1', '12345'),
('paulinapuerta@gmail.com', 'Paulina', 'Puerta', '2', 'Maria Pauilina 123'),
('vacs@qacmks', 'Val', 'Cardona', '2', 'Val12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id_contacto`);

--
-- Indexes for table `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`correo`);

--
-- Indexes for table `secciones`
--
ALTER TABLE `secciones`
  ADD PRIMARY KEY (`idseccion`);

--
-- Indexes for table `tipousuario`
--
ALTER TABLE `tipousuario`
  ADD PRIMARY KEY (`codigo`),
  ADD UNIQUE KEY `descripcion_2` (`descripcion`),
  ADD KEY `descripcion` (`descripcion`),
  ADD KEY `descripcion_3` (`descripcion`);

--
-- Indexes for table `universidades`
--
ALTER TABLE `universidades`
  ADD PRIMARY KEY (`id_universidad`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`correo`),
  ADD KEY `clave` (`clave`),
  ADD KEY `codigo` (`codigo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id_contacto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tipousuario`
--
ALTER TABLE `tipousuario`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `universidades`
--
ALTER TABLE `universidades`
  MODIFY `id_universidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
