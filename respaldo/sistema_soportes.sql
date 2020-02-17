-- MariaDB dump 10.17  Distrib 10.4.6-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: sistema_soportes
-- ------------------------------------------------------
-- Server version	10.4.6-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `equipo`
--

DROP TABLE IF EXISTS `equipo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `equipo` (
  `id_equipo` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(15) DEFAULT NULL CHECK (`tipo` regexp '[A-Za-z]{1,15}$'),
  `marca` varchar(15) DEFAULT NULL CHECK (`marca` regexp '[A-Za-z]{1,15}$'),
  `modelo` varchar(20) DEFAULT NULL CHECK (`modelo` <> ''),
  `no_serie` varchar(20) DEFAULT NULL CHECK (`no_serie` regexp '[0-9]{1,20}$'),
  `no_inventario` varchar(20) DEFAULT NULL CHECK (`no_inventario` regexp '[0-9]{1,20}$'),
  `host` varchar(10) DEFAULT NULL CHECK (`host` <> ''),
  `mac_address` varchar(17) DEFAULT NULL CHECK (`mac_address` regexp '([A-Z0-9]{2}[:-]){5}([A-Z0-9]{2})$'),
  PRIMARY KEY (`id_equipo`),
  UNIQUE KEY `no_inventario` (`no_inventario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `equipo`
--

LOCK TABLES `equipo` WRITE;
/*!40000 ALTER TABLE `equipo` DISABLE KEYS */;
INSERT INTO `equipo` VALUES (1,'pc','hp','pavilion 14','1024568710','6025410','pc-alex','AA:BB:CC:DD:EE:FF');
/*!40000 ALTER TABLE `equipo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `historial`
--

DROP TABLE IF EXISTS `historial`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `historial` (
  `id_historial` int(11) NOT NULL AUTO_INCREMENT,
  `id_solicitud` int(11) NOT NULL,
  `numero_cuenta` varchar(9) DEFAULT NULL,
  `folio` varchar(16) DEFAULT NULL CHECK (`folio` regexp 'SP/UC/[0-9]{1,3}/20[0-9]{2}-[1-2]$'),
  `desc_actividad` text DEFAULT NULL CHECK (`desc_actividad` <> ''),
  `hora_inicio` time DEFAULT NULL,
  `hora_fin` time DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  PRIMARY KEY (`id_historial`)
) ENGINE=InnoDB AUTO_INCREMENT=86 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `historial`
--

LOCK TABLES `historial` WRITE;
/*!40000 ALTER TABLE `historial` DISABLE KEYS */;
INSERT INTO `historial` VALUES (7,1,'313140255','SP/UC/1/2020-2',NULL,NULL,NULL,NULL,NULL),(8,2,'313140255','SP/UC/2/2020-2',NULL,NULL,NULL,NULL,NULL),(9,3,'313140255','SP/UC/3/2020-2',NULL,NULL,NULL,NULL,NULL),(10,0,'313140255',NULL,NULL,NULL,NULL,NULL,NULL),(11,2,'313140255',NULL,NULL,NULL,NULL,NULL,NULL),(12,2,'313140255',NULL,NULL,NULL,NULL,NULL,NULL),(13,2,'313140255',NULL,NULL,NULL,NULL,NULL,NULL),(14,2,'313140255',NULL,NULL,NULL,NULL,NULL,NULL),(15,2,'313140255',NULL,NULL,NULL,NULL,NULL,NULL),(16,2,'313140255',NULL,NULL,NULL,NULL,NULL,NULL),(17,2,'',NULL,NULL,NULL,NULL,NULL,NULL),(18,2,'313140255',NULL,NULL,NULL,NULL,NULL,NULL),(19,2,'313140255',NULL,NULL,NULL,NULL,NULL,NULL),(20,2,'313140255',NULL,NULL,NULL,NULL,NULL,NULL),(21,2,'313140255',NULL,NULL,NULL,NULL,NULL,NULL),(22,2,'313140255',NULL,NULL,NULL,NULL,NULL,NULL),(23,2,'313140255',NULL,NULL,NULL,NULL,NULL,NULL),(24,2,'313140255',NULL,NULL,NULL,NULL,NULL,NULL),(25,2,'',NULL,NULL,NULL,NULL,NULL,NULL),(26,2,'',NULL,NULL,NULL,NULL,NULL,NULL),(27,2,'313140255',NULL,NULL,NULL,NULL,NULL,NULL),(28,2,'313140255',NULL,NULL,NULL,NULL,NULL,NULL),(29,2,'313140255',NULL,NULL,NULL,NULL,NULL,NULL),(30,2,'313140255',NULL,NULL,NULL,NULL,NULL,NULL),(31,2,'313140255',NULL,NULL,NULL,NULL,NULL,NULL),(32,2,'313140255',NULL,NULL,NULL,NULL,NULL,NULL),(33,2,'313140255',NULL,NULL,NULL,NULL,NULL,NULL),(34,2,'313140255',NULL,NULL,NULL,NULL,NULL,NULL),(35,2,'313140255',NULL,NULL,NULL,NULL,NULL,NULL),(36,2,'313140255',NULL,NULL,NULL,NULL,NULL,NULL),(37,2,'313140255',NULL,NULL,NULL,NULL,NULL,NULL),(38,2,'313140255',NULL,NULL,NULL,NULL,NULL,NULL),(39,2,'313140255',NULL,NULL,NULL,NULL,NULL,NULL),(40,2,'313140255',NULL,NULL,NULL,NULL,NULL,NULL),(41,2,'313140255',NULL,NULL,NULL,NULL,NULL,NULL),(42,2,'313140255',NULL,NULL,NULL,NULL,NULL,NULL),(43,2,'313140255',NULL,NULL,NULL,NULL,NULL,NULL),(44,2,'313140255',NULL,NULL,NULL,NULL,NULL,NULL),(45,2,'313140255',NULL,NULL,NULL,NULL,NULL,NULL),(46,2,'313140255',NULL,NULL,NULL,NULL,NULL,NULL),(47,2,'313140255',NULL,NULL,NULL,NULL,NULL,NULL),(48,2,'313140255',NULL,NULL,NULL,NULL,NULL,NULL),(49,2,'313140255',NULL,NULL,NULL,NULL,NULL,NULL),(50,2,'313140255',NULL,NULL,NULL,NULL,NULL,NULL),(51,2,'313140255',NULL,NULL,NULL,NULL,NULL,NULL),(52,2,'313140255',NULL,NULL,NULL,NULL,NULL,NULL),(53,2,'313140255',NULL,NULL,NULL,NULL,NULL,NULL),(54,2,'313140255',NULL,NULL,NULL,NULL,NULL,NULL),(55,2,'313140255',NULL,NULL,NULL,NULL,NULL,NULL),(56,2,'313140255',NULL,NULL,NULL,NULL,NULL,NULL),(57,2,'313140255',NULL,NULL,NULL,NULL,NULL,NULL),(58,2,'313140255',NULL,NULL,NULL,NULL,NULL,NULL),(59,2,'313140255',NULL,NULL,NULL,NULL,NULL,NULL),(60,2,'313140255',NULL,NULL,NULL,NULL,NULL,NULL),(61,2,'313140255',NULL,NULL,NULL,NULL,NULL,NULL),(62,2,'313140255',NULL,NULL,NULL,NULL,NULL,NULL),(63,2,'313140255',NULL,NULL,NULL,NULL,NULL,NULL),(64,2,'313140255',NULL,NULL,NULL,NULL,NULL,NULL),(65,2,'313140255',NULL,NULL,NULL,NULL,NULL,NULL),(66,2,'313140255',NULL,NULL,NULL,NULL,NULL,NULL),(67,2,'313140255',NULL,NULL,NULL,NULL,NULL,NULL),(68,2,'313140255',NULL,NULL,NULL,NULL,NULL,NULL),(69,2,'313140255',NULL,NULL,NULL,NULL,NULL,NULL),(70,2,'313140255',NULL,NULL,NULL,NULL,NULL,NULL),(71,2,'313140255',NULL,NULL,NULL,NULL,NULL,NULL),(72,2,'313140255',NULL,NULL,NULL,NULL,NULL,NULL),(73,2,'313140255',NULL,NULL,NULL,NULL,NULL,NULL),(74,2,'313140255',NULL,NULL,NULL,NULL,NULL,NULL),(75,2,'313140255',NULL,NULL,NULL,NULL,NULL,NULL),(76,2,'313140255',NULL,NULL,NULL,NULL,NULL,NULL),(77,2,'313140255',NULL,NULL,NULL,NULL,NULL,NULL),(78,2,'313140255',NULL,NULL,NULL,NULL,NULL,NULL),(79,2,'313140255',NULL,NULL,NULL,NULL,NULL,NULL),(80,2,'313140255',NULL,NULL,NULL,NULL,NULL,NULL),(81,2,'313140255',NULL,NULL,NULL,NULL,NULL,NULL),(82,2,'313140255',NULL,NULL,NULL,NULL,NULL,NULL),(83,2,'313140255',NULL,NULL,NULL,NULL,NULL,NULL),(84,2,'313140255',NULL,NULL,NULL,NULL,NULL,NULL),(85,3,'313140255',NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `historial` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `instalacion`
--

DROP TABLE IF EXISTS `instalacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `instalacion` (
  `id_software` int(11) NOT NULL,
  `id_solicitud` int(11) NOT NULL,
  PRIMARY KEY (`id_software`,`id_solicitud`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `instalacion`
--

LOCK TABLES `instalacion` WRITE;
/*!40000 ALTER TABLE `instalacion` DISABLE KEYS */;
/*!40000 ALTER TABLE `instalacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `integrante_uc`
--

DROP TABLE IF EXISTS `integrante_uc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `integrante_uc` (
  `numero_cuenta` varchar(9) NOT NULL CHECK (`numero_cuenta` regexp '^[0-9]{9}$'),
  `nombre_integrante` varchar(15) NOT NULL CHECK (`nombre_integrante` regexp '^[A-Za-z][a-z]*$'),
  `ap_pat_integrante` varchar(20) NOT NULL CHECK (`ap_pat_integrante` regexp '^[A-Za-z][a-z]*$'),
  `ap_mat_integrante` varchar(20) DEFAULT NULL CHECK (`ap_mat_integrante` regexp '^[A-Za-z][a-z]*$'),
  PRIMARY KEY (`numero_cuenta`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `integrante_uc`
--

LOCK TABLES `integrante_uc` WRITE;
/*!40000 ALTER TABLE `integrante_uc` DISABLE KEYS */;
INSERT INTO `integrante_uc` VALUES ('313140255','juan','orozco',NULL);
/*!40000 ALTER TABLE `integrante_uc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `resguardo`
--

DROP TABLE IF EXISTS `resguardo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `resguardo` (
  `id_resguardo` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `id_equipo` int(11) NOT NULL,
  `inicio_resguardo` date NOT NULL,
  `termino_resguardo` date DEFAULT NULL,
  PRIMARY KEY (`id_resguardo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resguardo`
--

LOCK TABLES `resguardo` WRITE;
/*!40000 ALTER TABLE `resguardo` DISABLE KEYS */;
INSERT INTO `resguardo` VALUES (1,1,1,'2019-08-10',NULL);
/*!40000 ALTER TABLE `resguardo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `semestre`
--

DROP TABLE IF EXISTS `semestre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `semestre` (
  `id_semestre` int(11) NOT NULL AUTO_INCREMENT,
  `anio_semestre` int(11) NOT NULL,
  `periodo` decimal(1,0) NOT NULL CHECK (`periodo` in (1,2)),
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  PRIMARY KEY (`id_semestre`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `semestre`
--

LOCK TABLES `semestre` WRITE;
/*!40000 ALTER TABLE `semestre` DISABLE KEYS */;
INSERT INTO `semestre` VALUES (1,2020,1,'2019-08-05','2020-01-31');
/*!40000 ALTER TABLE `semestre` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `software`
--

DROP TABLE IF EXISTS `software`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `software` (
  `id_software` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_sw` varchar(20) NOT NULL CHECK (`nombre_sw` regexp '[A-Za-z]{1,30}$'),
  PRIMARY KEY (`id_software`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `software`
--

LOCK TABLES `software` WRITE;
/*!40000 ALTER TABLE `software` DISABLE KEYS */;
/*!40000 ALTER TABLE `software` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `soportes`
--

DROP TABLE IF EXISTS `soportes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `soportes` (
  `id_solicitud` int(11) NOT NULL AUTO_INCREMENT,
  `id_semestre` int(11) NOT NULL,
  `id_equipo` int(11) NOT NULL,
  `problema` text NOT NULL CHECK (`problema` <> ''),
  `estatus` varchar(15) NOT NULL DEFAULT 'Pendiente' CHECK (`estatus` in ('Pendiente','En proceso','Terminado')),
  `fecha_solicitud` date NOT NULL,
  `instalacion_sw` tinyint(1) DEFAULT 0 CHECK (`instalacion_sw` in (0,1)),
  PRIMARY KEY (`id_solicitud`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `soportes`
--

LOCK TABLES `soportes` WRITE;
/*!40000 ALTER TABLE `soportes` DISABLE KEYS */;
INSERT INTO `soportes` VALUES (1,1,1,'No puedo abrir documentos pdf','Terminado','2020-02-07',0),(2,1,1,'No puedo ver videos del tutub xd','Terminado','2020-02-08',0),(3,1,1,'vamos a ver si jala xd','En proceso','2020-02-08',0);
/*!40000 ALTER TABLE `soportes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(15) NOT NULL CHECK (`nombre` regexp '^[A-Za-z][a-z]*$'),
  `apellido_paterno` varchar(20) NOT NULL CHECK (`apellido_paterno` regexp '^[A-Za-z][a-z]*$'),
  `apellido_materno` varchar(20) DEFAULT NULL CHECK (`apellido_materno` regexp '^[A-Za-z][a-z]*$'),
  `rfc` varchar(13) DEFAULT NULL CHECK (`rfc` regexp '[A-Za-z]{4}[0-9]{6}[A-Za-z0-9]{3}$'),
  `departamento` varchar(20) DEFAULT NULL CHECK (`departamento` <> ''),
  `cubiculo` varchar(5) DEFAULT NULL CHECK (`cubiculo` regexp '^[A-Z][0-9]-[0-9]{2}$'),
  `telefono` varchar(10) DEFAULT NULL CHECK (`telefono` regexp '[0-9]{1,10}$'),
  `ext` varchar(4) DEFAULT NULL CHECK (`ext` regexp '[0-9]{1,4}$'),
  `nombre_usuario` varchar(20) DEFAULT NULL CHECK (`nombre_usuario` <> ''),
  `contrasena` varchar(20) DEFAULT NULL CHECK (`contrasena` <> ''),
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `rfc` (`rfc`),
  UNIQUE KEY `nombre_usuario` (`nombre_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'alexis','orozco','hernandez',NULL,'hidraulica','R1-05',NULL,NULL,'alex','aaaa');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-02-16 22:44:41
