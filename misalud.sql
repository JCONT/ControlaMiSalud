-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: mi_salud
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

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
-- Table structure for table `estado_salud`
--

DROP TABLE IF EXISTS `estado_salud`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estado_salud` (
  `id_formulario` int(10) NOT NULL AUTO_INCREMENT,
  `peso` int(3) NOT NULL,
  `condicion_salud` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `frecuencia_cardiaca` int(3) NOT NULL,
  `vacunas` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `tension_arterial` varchar(6) COLLATE utf8_spanish_ci NOT NULL,
  `saturacion_oxigeno` int(3) NOT NULL,
  `actividad_fisica` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_control` date NOT NULL,
  `especialista` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `nom_especialista` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `causa_tratamiento` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `tratamiento` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `medicamentos` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `observaciones` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_registro` date NOT NULL DEFAULT current_timestamp(),
  `otra_condicion` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `distancia_recorrida` int(5) NOT NULL,
  `identificacion` int(10) NOT NULL,
  `nombre` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `genero` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `edad` int(2) NOT NULL,
  `correo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_formulario`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estado_salud`
--

LOCK TABLES `estado_salud` WRITE;
/*!40000 ALTER TABLE `estado_salud` DISABLE KEYS */;
INSERT INTO `estado_salud` VALUES (21,49,'hipertension',20,'Todas','75',54,'natacion','2022-03-28','General','Pedro','Accidente','Terapia','N/A','Reposo absoluto','2022-03-28','N/A',0,1234567890,'Juan Contreras','masculino',25,'Juan@gmail.com'),(24,80,'ninguna',80,'Todas','50',60,'futbol','2022-03-15','General','Pedro','Accidente','Terapia','N/A','Reposo absoluto','2022-03-28','N/A',20,1234567890,'Juan Contreras','masculino',25,'Juan@gmail.com');
/*!40000 ALTER TABLE `estado_salud` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `examenes`
--

DROP TABLE IF EXISTS `examenes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `examenes` (
  `id_examen` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_examen` date NOT NULL,
  `nombre_examen` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `archivo` blob NOT NULL,
  `observaciones` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_examen`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `examenes`
--

LOCK TABLES `examenes` WRITE;
/*!40000 ALTER TABLE `examenes` DISABLE KEYS */;
INSERT INTO `examenes` VALUES (9,'2022-03-09','Radiografia','Captura de pantalla 2022-02-15 183701.png','Radiografia de cadera'),(10,'2022-03-09','Radiografia','Captura de pantalla 2022-02-15 183701.png','Radiografia de cadera');
/*!40000 ALTER TABLE `examenes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `identificacion` int(10) NOT NULL,
  `nombre_completo` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `genero` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `edad` int(3) NOT NULL,
  `correo_electronico` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `contrasena` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_registro` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (18,1234567890,'Juan Contreras','masculino',25,'juan@gmail.com','12345','2022-03-28');
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

-- Dump completed on 2022-03-29 18:34:30
