-- MySQL dump 10.12
--
-- Host: localhost    Database: mvc
-- ------------------------------------------------------
-- Server version	6.0.0-alpha-community-nt-debug

--
-- Table structure for table `tblproductos`
--

DROP TABLE IF EXISTS `tblproductos`;
CREATE TABLE `tblproductos` (
  `idproducto` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `precio` int(10) NOT NULL,
  `descripcion` varchar(250) DEFAULT NULL,
  `nitproveedor` int(10) NOT NULL,
  PRIMARY KEY (`idproducto`),
  KEY `nitproveedor` (`nitproveedor`),
  CONSTRAINT `tblproductos_ibfk_1` FOREIGN KEY (`nitproveedor`) REFERENCES `tblproveedores` (`nitproveedor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproductos`
--

LOCK TABLES `tblproductos` WRITE;
ALTER TABLE `tblproductos` DISABLE KEYS;
ALTER TABLE `tblproductos` ENABLE KEYS;
UNLOCK TABLES;

--
-- Table structure for table `tblproveedores`
--

DROP TABLE IF EXISTS `tblproveedores`;
CREATE TABLE `tblproveedores` (
  `nitproveedor` int(10) NOT NULL,
  `razonsocial` varchar(40) NOT NULL,
  `telefono` varchar(24) NOT NULL,
  `direccion` varchar(60) NOT NULL,
  `nombrecontacto` varchar(30) NOT NULL,
  `cargocontacto` varchar(30) DEFAULT NULL,
  `celular` varchar(24) NOT NULL,
  `pagweb` text,
  PRIMARY KEY (`nitproveedor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproveedores`
--

LOCK TABLES `tblproveedores` WRITE;
ALTER TABLE `tblproveedores` DISABLE KEYS; 
ALTER TABLE `tblproveedores` ENABLE KEYS ;
UNLOCK TABLES;

--
-- Table structure for table `tblventa`
--

DROP TABLE IF EXISTS `tblventa`;
CREATE TABLE `tblventa` (
  `idfactura` int(10) NOT NULL AUTO_INCREMENT,
  `fecha` varchar(50) NOT NULL,
  `cedula` int(10) NOT NULL,
  `totalfactura` int(10) NOT NULL,
  PRIMARY KEY (`idfactura`),
  KEY `cedula` (`cedula`),
  CONSTRAINT `tblventa_ibfk_1` FOREIGN KEY (`cedula`) REFERENCES `tblclientes` (`cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblventa`
--


-- Dump completed on 2019-07-18  1:43:12
