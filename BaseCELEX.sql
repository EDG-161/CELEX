-- MySQL dump 10.13  Distrib 8.0.16, for Win64 (x86_64)
--
-- Host: localhost    Database: celex
-- ------------------------------------------------------
-- Server version	5.7.26-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `ccontacto`
--
CREATE Database celex;
use celex;

DROP TABLE IF EXISTS `ccontacto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `ccontacto` (
  `boleta` varchar(40) NOT NULL,
  `celular` varchar(40) NOT NULL,
  `telefonoCasa` varchar(40),
  `telefonoTrabajo` varchar(40),
  `extencion` varchar(40),
  PRIMARY KEY (`boleta`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ccontacto`
--

LOCK TABLES `ccontacto` WRITE;
/*!40000 ALTER TABLE `ccontacto` DISABLE KEYS */;
INSERT INTO `ccontacto` VALUES ('CLENCB19122019','5561578831','015561578831','015561578831','55'),('CLENCB19362019','5561578831','015561578831','015561578831','55'),('CLENCB41152019','5561578831','015561578831','015561578831','55');
/*!40000 ALTER TABLE `ccontacto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ccursos`
--
DROP TABLE IF EXISTS `mmaestros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `mmaestros` (
  `clave` int(11) AUTO_INCREMENT,
  `nombre` varchar(40) NOT NULL,
  `apep` varchar(40) NOT NULL,
  `apem` varchar(40) NOT NULL,
  `fec_nac` varchar(50) NOT NULL,
  `id_sex` int NOT NULL,
  `RFC` varchar(40) NOT NULL,
  `CURP` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `id_grupo` int(11) NOT NULL,
  PRIMARY KEY (`clave`),
  KEY `id_grupo` (`id_grupo`),
  KEY `id_sex` (`id_sex`),
  CONSTRAINT `mmaestros_ibfk_1` FOREIGN KEY (`id_grupo`) REFERENCES `mgrupos` (`id_grupo`),
  CONSTRAINT `malumno_ibfk_5` FOREIGN KEY (`id_sex`) REFERENCES `csexos` (`id_sex`)

) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mmaestros`
--

LOCK TABLES `mmaestros` WRITE;
/*!40000 ALTER TABLE `mmaestros` DISABLE KEYS */;
/*!40000 ALTER TABLE `mmaestros` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `ccursos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `ccursos` (
  `id_cur` int(11) NOT NULL AUTO_INCREMENT,
  `nom_cur` varchar(40) NOT NULL,
  PRIMARY KEY (`id_cur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ccursos`
--

LOCK TABLES `ccursos` WRITE;
/*!40000 ALTER TABLE `ccursos` DISABLE KEYS */;
/*!40000 ALTER TABLE `ccursos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ccursosmaestros`
--

DROP TABLE IF EXISTS `ccursosmaestros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `ccursosmaestros` (
  `id_cur` int(11) NOT NULL AUTO_INCREMENT,
  `clave` int(11) NOT NULL,
  PRIMARY KEY (`id_cur`),
  KEY `clave` (`clave`),
  CONSTRAINT `ccursosmaestros_ibfk_1` FOREIGN KEY (`id_cur`) REFERENCES `ccursos` (`id_cur`),
  CONSTRAINT `ccursosmaestros_ibfk_2` FOREIGN KEY (`clave`) REFERENCES `mmaestros` (`clave`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ccursosmaestros`
--

LOCK TABLES `ccursosmaestros` WRITE;
/*!40000 ALTER TABLE `ccursosmaestros` DISABLE KEYS */;
/*!40000 ALTER TABLE `ccursosmaestros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cdelegaciones`
--

DROP TABLE IF EXISTS `cdelegaciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `cdelegaciones` (
  `id_del` int(11) NOT NULL AUTO_INCREMENT,
  `des_del` varchar(50) NOT NULL,
  PRIMARY KEY (`id_del`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cdelegaciones`
--

LOCK TABLES `cdelegaciones` WRITE;
/*!40000 ALTER TABLE `cdelegaciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `cdelegaciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cgrados`
--

DROP TABLE IF EXISTS `cgrados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `cgrados` (
  `id_grado` int(11) NOT NULL AUTO_INCREMENT,
  `des_grado` varchar(30) NOT NULL,
  PRIMARY KEY (`id_grado`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cgrados`
--

LOCK TABLES `cgrados` WRITE;
/*!40000 ALTER TABLE `cgrados` DISABLE KEYS */;
/*!40000 ALTER TABLE `cgrados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cperiodos`
--

DROP TABLE IF EXISTS `cperiodos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `cperiodos` (
  `id_peri` int(11) NOT NULL AUTO_INCREMENT,
  `des_peri` varchar(40) NOT NULL,
  PRIMARY KEY (`id_peri`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cperiodos`
--

LOCK TABLES `cperiodos` WRITE;
/*!40000 ALTER TABLE `cperiodos` DISABLE KEYS */;
/*!40000 ALTER TABLE `cperiodos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `csexos`
--

DROP TABLE IF EXISTS `csexos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `csexos` (
  `id_sex` int(11) NOT NULL AUTO_INCREMENT,
  `des_sex` varchar(20) NOT NULL,
  PRIMARY KEY (`id_sex`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `csexos`
--

LOCK TABLES `csexos` WRITE;
/*!40000 ALTER TABLE `csexos` DISABLE KEYS */;
INSERT INTO `csexos` VALUES (1,'Masculino'),(2,'Femenino');
/*!40000 ALTER TABLE `csexos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ctipoalu`
--

DROP TABLE IF EXISTS `ctipoalu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `ctipoalu` (
  `tipo_alu` int(11) NOT NULL AUTO_INCREMENT,
  `des_tal` varchar(20) NOT NULL,
  PRIMARY KEY (`tipo_alu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ctipoalu`
--

LOCK TABLES `ctipoalu` WRITE;
/*!40000 ALTER TABLE `ctipoalu` DISABLE KEYS */;
/*!40000 ALTER TABLE `ctipoalu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ctipopago`
--

DROP TABLE IF EXISTS `ctipopago`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `ctipopago` (
  `tipo_pago` int(11) NOT NULL AUTO_INCREMENT,
  `nom_pago` varchar(60) NOT NULL,
  PRIMARY KEY (`tipo_pago`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ctipopago`
--

LOCK TABLES `ctipopago` WRITE;
/*!40000 ALTER TABLE `ctipopago` DISABLE KEYS */;
/*!40000 ALTER TABLE `ctipopago` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `malumno`
--

DROP TABLE IF EXISTS `malumno`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `malumno` (
  `boleta` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  `apep` varchar(50) NOT NULL,
  `apem` varchar(50) NOT NULL,
  `fech_na` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `id_grupo` int(11) NOT NULL,
  `tipo_alu` int(11) NOT NULL,
  `id_grado` int(11) NOT NULL,
  `id_sex` int(11) NOT NULL,
  `esc_pr` varchar(60) NOT NULL,
  `bol_alu` varchar(45) NOT NULL,
  PRIMARY KEY (`boleta`),
  KEY `id_grupo` (`id_grupo`),
  KEY `id_sex` (`id_sex`),
  CONSTRAINT `malumno_ibfk_1` FOREIGN KEY (`id_grupo`) REFERENCES `mgrupos` (`id_grupo`),
  CONSTRAINT `malumno_ibfk_5` FOREIGN KEY (`id_sex`) REFERENCES `csexos` (`id_sex`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `malumno`
--

LOCK TABLES `malumno` WRITE;
/*!40000 ALTER TABLE `malumno` DISABLE KEYS */;
INSERT INTO `malumno` VALUES (9,'Eduardo','Albino','Albino','-2005','eduag161@gmail.com',1,1,1,1,'asd','CLENCB19122019');
/*!40000 ALTER TABLE `malumno` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mcalificaciones`
--

DROP TABLE IF EXISTS `mcalificaciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `mcalificaciones` (
  `boleta` int(11) NOT NULL AUTO_INCREMENT,
  `id_grupo` int(11) NOT NULL,
  `calif` float NOT NULL,
  `id_peri` int(11) NOT NULL,
  PRIMARY KEY (`boleta`),
  KEY `id_grupo` (`id_grupo`),
  KEY `id_peri` (`id_peri`),
  CONSTRAINT `mcalificaciones_ibfk_1` FOREIGN KEY (`boleta`) REFERENCES `malumno` (`boleta`),
  CONSTRAINT `mcalificaciones_ibfk_2` FOREIGN KEY (`id_grupo`) REFERENCES `mgrupos` (`id_grupo`),
  CONSTRAINT `mcalificaciones_ibfk_3` FOREIGN KEY (`id_peri`) REFERENCES `cperiodos` (`id_peri`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mcalificaciones`
--

LOCK TABLES `mcalificaciones` WRITE;
/*!40000 ALTER TABLE `mcalificaciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `mcalificaciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mcontactoemergencia`
--

DROP TABLE IF EXISTS `mcontactoemergencia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `mcontactoemergencia` (
  `boleta` varchar(20) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `appat` varchar(45) DEFAULT NULL,
  `apmat` varchar(45) DEFAULT NULL,
  `paren` varchar(45) DEFAULT NULL,
  `celularemer` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`boleta`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mcontactoemergencia`
--

LOCK TABLES `mcontactoemergencia` WRITE;
/*!40000 ALTER TABLE `mcontactoemergencia` DISABLE KEYS */;
INSERT INTO `mcontactoemergencia` VALUES ('CLENCB19122019','Eduardo','Albino','hjk','Parentezco','123123123');
/*!40000 ALTER TABLE `mcontactoemergencia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mdirecciones`
--

DROP TABLE IF EXISTS `mdirecciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `mdirecciones` (
  `id_dir` int(11) NOT NULL AUTO_INCREMENT,
  `cod_pos` int(6) NOT NULL,
  `col` varchar(30) NOT NULL,
  `cal1` varchar(30) NOT NULL,
  `cal2` varchar(30),
  `numi` int(11),
  `nume` int(11) NOT NULL,
  `id_del` varchar(30) NOT NULL,
  `estate` varchar(45) NOT NULL,
  `boleta` varchar(45) NOT NULL,
  PRIMARY KEY (`id_dir`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mdirecciones`
--

LOCK TABLES `mdirecciones` WRITE;
/*!40000 ALTER TABLE `mdirecciones` DISABLE KEYS */;
INSERT INTO `mdirecciones` VALUES (8,53000,'Mancha 3','8','8',21,12,'Naucalpan De Juarez','Mexico','CLENCB19122019');
/*!40000 ALTER TABLE `mdirecciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mexamenes`
--

DROP TABLE IF EXISTS `mexamenes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `mexamenes` (
  `boleta` int(11) NOT NULL AUTO_INCREMENT,
  `id_niv` int(11) NOT NULL,
  `use_en` float NOT NULL,
  `rea` float NOT NULL,
  `final` float NOT NULL,
  `pmf` float NOT NULL,
  PRIMARY KEY (`boleta`),
  KEY `id_niv` (`id_niv`),
  CONSTRAINT `mexamenes_ibfk_1` FOREIGN KEY (`boleta`) REFERENCES `malumno` (`boleta`),
  CONSTRAINT `mexamenes_ibfk_2` FOREIGN KEY (`id_niv`) REFERENCES `niveles` (`id_niv`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mexamenes`
--

LOCK TABLES `mexamenes` WRITE;
/*!40000 ALTER TABLE `mexamenes` DISABLE KEYS */;
/*!40000 ALTER TABLE `mexamenes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mgrupos`
--

DROP TABLE IF EXISTS `mgrupos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `mgrupos` (
  `id_grupo` int(11) NOT NULL AUTO_INCREMENT,
  `nivel` varchar(40) NOT NULL,
  `plantel` varchar(60) NOT NULL,
  PRIMARY KEY (`id_grupo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mgrupos`
--

LOCK TABLES `mgrupos` WRITE;
/*!40000 ALTER TABLE `mgrupos` DISABLE KEYS */;
INSERT INTO `mgrupos` VALUES (1,'0','Sin asignar');
/*!40000 ALTER TABLE `mgrupos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mlista`
--

DROP TABLE IF EXISTS `mlista`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `mlista` (
  `id_grupo` int(11) NOT NULL AUTO_INCREMENT,
  `clave` int(11) NOT NULL,
  `id_peri` int(11) NOT NULL,
  PRIMARY KEY (`id_grupo`),
  KEY `id_peri` (`id_peri`),
  KEY `clave` (`clave`),
  CONSTRAINT `mlista_ibfk_1` FOREIGN KEY (`id_peri`) REFERENCES `cperiodos` (`id_peri`),
  CONSTRAINT `mlista_ibfk_2` FOREIGN KEY (`clave`) REFERENCES `mmaestros` (`clave`),
  CONSTRAINT `mlista_ibfk_3` FOREIGN KEY (`id_grupo`) REFERENCES `mgrupos` (`id_grupo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mlista`
--

LOCK TABLES `mlista` WRITE;
/*!40000 ALTER TABLE `mlista` DISABLE KEYS */;
/*!40000 ALTER TABLE `mlista` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mmaestros`
--



--
-- Table structure for table `mmovimientos`
--

DROP TABLE IF EXISTS `mmovimientos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `mmovimientos` (
  `boleta` int(11) NOT NULL AUTO_INCREMENT,
  `folio` int(11) NOT NULL,
  `autorizacion` int(11) NOT NULL,
  `id_pago` int(11) NOT NULL,
  `id_pal` int(11) NOT NULL,
  PRIMARY KEY (`boleta`),
  KEY `id_pago` (`id_pago`),
  KEY `id_pal` (`id_pal`),
  CONSTRAINT `mmovimientos_ibfk_1` FOREIGN KEY (`boleta`) REFERENCES `malumno` (`boleta`),
  CONSTRAINT `mmovimientos_ibfk_2` FOREIGN KEY (`id_pago`) REFERENCES `mpagos` (`id_pago`),
  CONSTRAINT `mmovimientos_ibfk_3` FOREIGN KEY (`id_pal`) REFERENCES `mpapeles` (`id_pal`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mmovimientos`
--

LOCK TABLES `mmovimientos` WRITE;
/*!40000 ALTER TABLE `mmovimientos` DISABLE KEYS */;
/*!40000 ALTER TABLE `mmovimientos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mpagos`
--

DROP TABLE IF EXISTS `mpagos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `mpagos` (
  `id_pago` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_pago` int(11) NOT NULL,
  `des_pago` int(11) NOT NULL,
  PRIMARY KEY (`id_pago`),
  KEY `tipo_pago` (`tipo_pago`),
  CONSTRAINT `mpagos_ibfk_1` FOREIGN KEY (`tipo_pago`) REFERENCES `ctipopago` (`tipo_pago`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mpagos`
--

LOCK TABLES `mpagos` WRITE;
/*!40000 ALTER TABLE `mpagos` DISABLE KEYS */;
/*!40000 ALTER TABLE `mpagos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mpapeles`
--

DROP TABLE IF EXISTS `mpapeles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `mpapeles` (
  `id_pal` int(11) NOT NULL AUTO_INCREMENT,
  `pago` int(11) NOT NULL,
  `ident` int(11) NOT NULL,
  `hojme` int(11) NOT NULL,
  `fotos` int(11) NOT NULL,
  PRIMARY KEY (`id_pal`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mpapeles`
--

LOCK TABLES `mpapeles` WRITE;
/*!40000 ALTER TABLE `mpapeles` DISABLE KEYS */;
/*!40000 ALTER TABLE `mpapeles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `niveles`
--

DROP TABLE IF EXISTS `niveles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `niveles` (
  `id_niv` int(11) NOT NULL AUTO_INCREMENT,
  `des_niv` varchar(20) NOT NULL,
  PRIMARY KEY (`id_niv`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `niveles`
--

LOCK TABLES `niveles` WRITE;
/*!40000 ALTER TABLE `niveles` DISABLE KEYS */;
INSERT INTO `niveles` VALUES (1,'Basico I'),(2,'Basico II'),(3,'Basico III'),(4,'Basico IV'),(5,'Basico V'),(6,'Intermedio I'),(7,'Intermedio II'),(8,'Intermedio III'),(9,'Intermedio IV'),(10,'Intermedio V'),(11,'Avanzado I'),(12,'Avanzado II'),(13,'Avanzado III'),(14,'Avanzado IV'),(15,'Avanzado V');
/*!40000 ALTER TABLE `niveles` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-08-03 23:12:34
