-- MySQL dump 10.13  Distrib 5.7.21, for osx10.13 (x86_64)
--
-- Host: localhost    Database: space_dust
-- ------------------------------------------------------
-- Server version	5.7.21

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
-- Table structure for table `devis`
--

DROP TABLE IF EXISTS `devis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `devis` (
  `devis_id` int(11) NOT NULL AUTO_INCREMENT,
  `structure` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `structure_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rayon` int(100) DEFAULT NULL,
  `recyclable` int(100) DEFAULT NULL,
  PRIMARY KEY (`devis_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `devis`
--

LOCK TABLES `devis` WRITE;
/*!40000 ALTER TABLE `devis` DISABLE KEYS */;
INSERT INTO `devis` VALUES (1,'station','dd',200,100),(2,'satellite','dd',20,10);
/*!40000 ALTER TABLE `devis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `join`
--

DROP TABLE IF EXISTS `join`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `join` (
  `join_id` int(11) NOT NULL AUTO_INCREMENT,
  `join_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `join_firstname` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `join_mail` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `join_job` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cv` tinyblob,
  `motivation` varchar(5000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `join_phone` int(20) DEFAULT NULL,
  `join_age` int(100) DEFAULT NULL,
  PRIMARY KEY (`join_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `join`
--

LOCK TABLES `join` WRITE;
/*!40000 ALTER TABLE `join` DISABLE KEYS */;
INSERT INTO `join` VALUES (6,'Taing','Dorian','lorick.travailleur@hetic.net','looor',NULL,NULL,618282928,20),(7,'Fry','MaBite','dorian.taing@hetic.net','Eboueur',NULL,NULL,2022020,200),(8,'Piiwwwii','Poowwooo','yash.patel@hetic.net','CACA',NULL,NULL,202202,20),(9,'Matuidi','Blaise','romain.metayer@hetic.net','Foot',NULL,NULL,292,6);
/*!40000 ALTER TABLE `join` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `user_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_firstname` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_mail` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_password` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_phone` int(20) DEFAULT NULL,
  `adress` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adress2` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ZIP` int(8) DEFAULT NULL,
  `city` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (47,'Uchiha','Itachi','Pute','lorick.travailleur@hetic.net','$2y$10$tX5iBc5slVyyZGwyhyX4MuQBkMsXadO2tsv.Y2vmyr0.KnSas/xfG',NULL,'20 rue du progrès',NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-28 21:13:17
