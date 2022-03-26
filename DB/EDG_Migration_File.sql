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

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- --------------------------------------------------------

--
-- Table structure for table `edgParams`
--

CREATE TABLE `edgParams` (
  `idParam` int(11) NOT NULL,
  `paramName` varchar(50) NOT NULL,
  `paramCategory` varchar(50) NOT NULL,
  `value` varchar(512) NOT NULL,
  `paramDetails` varchar(512) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabla que almacena los parámetros del APP EDG';

--
-- Dumping data for table `edgParams`
--

INSERT INTO `edgParams` (`idParam`, `paramName`, `paramCategory`, `value`, `paramDetails`, `active`) VALUES
(1, 'SMTP_Name', 'SMTP_Config', 'enterprisedanitygroup@hotmail.com', 'Correo que lleva la configuración del Servidor SMTP para el envío de correos por Contacto.', 1),
(2, 'SMTP_Password', 'SMTP_Config', 'EDG123456', 'Contraseña del correo que lleva la configuración del Servidor SMTP para el envío de correos por Contacto.', 1),
(3, 'Contact_Recipient_To', 'SMTP_Config', 'administracion@enterprisedanitygroup.com', 'Correo recipiente a donde llegarán las solicitudes de Contacto.', 1),
(4, 'Contact_Recipient_To', 'SMTP_Config', 'gabriel_atencio@hotmail.com', 'Correo recipiente a donde llegarán las solicitudes de Contacto.', 0),
(5, 'Business_Email', 'Business_Info', 'administracion@enterprisedanitygroup.com', 'Correo de contacto de la empresa, éste es independiente al utilizado para la recepción de solicitudes de contacto.', 1),
(6, 'Business_Phone', 'Business_Info', '+573025829588', 'Teléfono de la empresa.', 1),
(7, 'Business_Address', 'Business_Info', 'Calle 13 B sur 24 B 65 Este piso 3, Aguas Claras, Bogotá D.C., Colombia', 'Dirección física de la empresa.', 1),
(8, 'Business_Map_Location', 'Business_Info', 'https://www.google.com/maps/place/ENTERPRISE+DANITY+GROUP/@4.5631492,-74.0698084,17z/data=!3m1!4b1!4m5!3m4!1s0x8e3f997fe5f0163b:0x9b6d12d2386d1d66!8m2!3d4.5631439!4d-74.0676197', 'Localización de la empresa en Google Maps.', 1),
(9, 'Business_WhatsApp_Button', 'Business_Info', 'https://api.whatsapp.com/send?phone=573025829588&text=Hola%21%20Quisiera%20obtener%20información%20sobre%20sus%20servicios%20de%20asesoría%20migratoria.', 'URL de WhatsApp para el botón flotante.', 1),
(10, 'Business_Name', 'Business_Info', 'Enterprise Danity Group', 'Nombre de la empresa. NOTA: Si se inhabilita este registro, el APP entrará en modo de mantenimiento.', 1);
-- --------------------------------------------------------

--
-- Table structure for table `edgServices`
--

CREATE TABLE `edgServices` (
  `idService` int(11) NOT NULL,
  `serviceName` varchar(255) NOT NULL,
  `listOrder` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `edgServices`
--

INSERT INTO `edgServices` (`idService`, `serviceName`, `listOrder`, `active`) VALUES
(1, 'Asesoría Migratoria.', 1, 1),
(2, 'Aplicación a la Visa.', 2, 1),
(3, 'Atención de Requerimientos.', 3, 1),
(4, 'Estampado de la Visa.', 4, 1),
(5, 'Registro de la Visa.', 5, 1),
(6, 'Solicitud de Cédula de Extranjería.', 6, 1),
(7, 'Certificado de Movimientos Migratorios.', 7, 1),
(8, 'Solicitud de Prórroga de Permanencia.', 8, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `edgParams`
--
ALTER TABLE `edgParams`
  ADD PRIMARY KEY (`idParam`);

--
-- Indexes for table `edgServices`
--
ALTER TABLE `edgServices`
  ADD PRIMARY KEY (`idService`),
  ADD UNIQUE KEY `unique_order` (`listOrder`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `edgParams`
--
ALTER TABLE `edgParams`
  MODIFY `idParam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `edgServices`
--
ALTER TABLE `edgServices`
  MODIFY `idService` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
