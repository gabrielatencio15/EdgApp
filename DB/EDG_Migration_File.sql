-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation: 2023-03-17 20:50:00
-- Server version: 5.7.34
-- PHP Version: 8.0.8

--Creado por: Gabriel Atencio
--Contacto: gabriel_atencio@hotmail.com

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `EDG_App`
--
CREATE DATABASE IF NOT EXISTS `EDG_App` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `EDG_App`;

-- --------------------------------------------------------

--
-- Table structure for table `edgParams`
--

CREATE TABLE `edgParams` (
  `idParam` int(11) NOT NULL,
  `paramName` varchar(50) NOT NULL,
  `paramCategory` varchar(50) NOT NULL,
  `value` varchar(255) NOT NULL,
  `paramDetails` varchar(512) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabla que almacena los parámetros del APP EDG';

--
-- Dumping data for table `edgParams`
--

INSERT INTO `edgParams` (`idParam`, `paramName`, `paramCategory`, `value`, `paramDetails`, `active`) VALUES
(1, 'SMTP_Name', 'SMTP_Config', 'enterprisedanitygroup@hotmail.com', 'Correo que lleva la configuración del Servidor SMTP para el envío de correos por Contacto.', 1),
(2, 'SMTP_Password', 'SMTP_Config', 'EDG123456', 'Contraseña del correo que lleva la configuración del Servidor SMTP para el envío de correos por Contacto.', 1),
(3, 'Contact_Recipient_To', 'SMTP_Config', 'administracion@enterprisedanitygroup.com', 'Correo recipiente a donde llegarán las solicitudes de Contacto', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `edgParams`
--
ALTER TABLE `edgParams`
  ADD PRIMARY KEY (`idParam`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `edgParams`
--
ALTER TABLE `edgParams`
  MODIFY `idParam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
