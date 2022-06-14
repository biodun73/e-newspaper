-- MySQL dump 10.13  Distrib 5.7.32, for Win64 (x86_64)
--
-- Host: v.je    Database: newspaper
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.37-MariaDB

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
-- Table structure for table `localnews`
--

DROP TABLE IF EXISTS `localnews`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `localnews` (
  `local_id` int(10) NOT NULL AUTO_INCREMENT,
  `imag` longblob NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(1255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `article` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `dat` date NOT NULL,
  `cat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`local_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `localnews`
--

LOCK TABLES `localnews` WRITE;
/*!40000 ALTER TABLE `localnews` DISABLE KEYS */;
INSERT INTO `localnews` (`local_id`, `imag`, `author`, `title`, `article`, `dat`, `cat`) VALUES (1,_binary '../IMAGES/localnews2.jpg','Lawrence Jay','The vaccination ','The vaccination of the general population against the coronavirus will begin on January 20, starting with those aged 85 or above, Prime Minister Kyriakos Mitsotakis said during a meeting he chaired at the headquarters of the Civil Protection Secretariat on Tuesday evening.\r\nThe online platform for the electronic booking of inoculation appointments will open on January 11','2021-01-14','Local news'),(3,_binary '../IMAGES/localnews1.jpg','Johnson Roland','The number of vaccination ','\r\nBy Tuesday evening some 16,365 people had been vaccinated, officials said at the meeting and the current reserve of coronavirus vaccinations numbers 150,850 doses.','2021-01-14','Local news');
/*!40000 ALTER TABLE `localnews` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-01-17 14:10:13
