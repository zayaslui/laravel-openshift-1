-- MySQL dump 10.16  Distrib 10.1.26-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: default
-- ------------------------------------------------------
-- Server version	10.1.26-MariaDB-0+deb9u1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `obras`
--

DROP TABLE IF EXISTS `obras`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `obras` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` int(11) NOT NULL,
  `titulo_obra` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contenido_obra` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `introduccion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `obras`
--

LOCK TABLES `obras` WRITE;
/*!40000 ALTER TABLE `obras` DISABLE KEYS */;
INSERT INTO `obras` VALUES (1,NULL,NULL,'descripcion ',89,'Avda. Madame Lynch','<p>MINISTERIO DE OBRAS P&Uacute;BLICAS Y COMUNICACIONES.&nbsp;<br />\nRehabilitaci&oacute;n de la Circunvalaci&oacute;n de Asunci&oacute;n, Tramo 4 Mojones &ndash; Defensores del Chaco &ndash','<p>MINISTERIO DE OBRAS P&Uacute;BLICAS Y COMUNICACIONES.&nbsp;<br />\nRehabilitaci&oacute;n de la Circunvalaci&oacute;n de Asunci&oacute;n, Tramo 4 Mojones &ndash; Defensores del Chaco &ndash'),(2,NULL,NULL,'descripcion ',81,'Ruta Luque - San Bernardino','<p>MINISTERIO DE OBRAS P&Uacute;BLICAS Y COMUNICACIONES.<br />\nPavimentaci&oacute;n Asf&aacute;ltica del Tramo Luque &ndash; San Bernardino\n','<p>MINISTERIO DE OBRAS P&Uacute;BLICAS Y COMUNICACIONES.<br />\nPavimentaci&oacute;n Asf&aacute;ltica del Tramo Luque &ndash; San Bernardino'),(3,NULL,NULL,'descripcion ',82,'Avda. Acceso Este Laguna Grande','<p>MINISTERIO DE OBRAS P&Uacute;BLICAS Y COMUNICACIONES.&nbsp;<br />\nAccesos Viales a la Ciudad de Asunci&oacute;n.&nbsp;<br />\n&ndash;Paquete 1: Acceso Este a la Ciudad de Asunci&oacute;n<','<p>MINISTERIO DE OBRAS P&Uacute;BLICAS Y COMUNICACIONES.&nbsp;<br />\nAccesos Viales a la Ciudad de Asunci&oacute;n.&nbsp;<br />\n&ndash;Paquete 1: Acceso Este a la Ciudad de Asunci&oacute;n<'),(4,NULL,NULL,'descripcion ',84,'Franja Costera de Encarnación','<p>ENTIDAD BINACIONAL YACYRET&Aacute;.&nbsp;<br />\nTratamiento &nbsp;Costero de la Ciudad de Encarnaci&oacute;n - Departamento de Itap&uacute;a.&nbsp;<br />\n&ndash;Paquete A.</p>\n\n<p>Movi','<p>ENTIDAD BINACIONAL YACYRET&Aacute;.&nbsp;<br />\nTratamiento &nbsp;Costero de la Ciudad de Encarnaci&oacute;n - Departamento de Itap&uacute;a.&nbsp;'),(5,NULL,NULL,'descripcion ',86,'Aeropuerto Internacional Guaraní','<p>MINISTERIO DE OBRAS P&Uacute;BLICAS Y COMUNICACIONES.&nbsp;<br />\nConstrucci&oacute;n del Aeropuerto Internacional Guaran&iacute;.&nbsp;<br />\nContrato de Obras Civiles y Arquitect&oacut','<p>MINISTERIO DE OBRAS P&Uacute;BLICAS Y COMUNICACIONES.&nbsp;<br />\nConstrucci&oacute;n del Aeropuerto Internacional Guaran&iacute;.&nbsp;'),(6,NULL,NULL,'descripcion ',88,'Aeropuerto de Encarnación','<p>ENTIDAD BINACIONAL YACYRET&Aacute;.&nbsp;<br />\nConstrucci&oacute;n del Aeropuerto de Encarnaci&oacute;n - Dpto. de Itap&uacute;a.&nbsp;<br />\n-Pista de 2.000 mts de Longitud y 45 mts de','<p>ENTIDAD BINACIONAL YACYRET&Aacute;.&nbsp;<br />\nConstrucci&oacute;n del Aeropuerto de Encarnaci&oacute;n - Dpto. de Itap&uacute;a.&nbsp;'),(7,NULL,NULL,'descripcion ',80,'Ruta Santa Rosa - Capitán Bado','<p>MINISTERIO DE OBRAS P&Uacute;BLICAS Y COMUNICACIONES.&nbsp;<br />\nProyecto de Rehabilitaci&oacute;n y Pavimentaci&oacute;n del Tramo Santa Rosa del Aguaray &ndash; Capit&aacute;n Bado.&nb','<p>MINISTERIO DE OBRAS P&Uacute;BLICAS Y COMUNICACIONES.&nbsp;<br />\nProyecto de Rehabilitaci&oacute;n y Pavimentaci&oacute;n del Tramo Santa Rosa del Aguaray &ndash;'),(8,NULL,NULL,'descripcion ',90,'Trayectoria','<p>Para ver nuestra trayectoria, haga clic aqu&iacute;:&nbsp;<a href=\"https://goo.gl/l1e22D\">https://goo.gl/l1e22D</a></p>\n','<p>Para ver nuestra trayectoria, haga clic aqu&iacute;:&nbsp;<a href=\"https://goo.gl/l1e22D\">https://goo.gl/l1e22D</a></p>\n');
/*!40000 ALTER TABLE `obras` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-07-09 12:48:51
