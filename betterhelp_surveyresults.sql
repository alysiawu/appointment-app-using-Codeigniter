-- MySQL dump 10.13  Distrib 5.6.22, for osx10.8 (x86_64)
--
-- Host: 127.0.0.1    Database: betterhelp
-- ------------------------------------------------------
-- Server version	5.5.42

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
-- Table structure for table `surveyresults`
--

DROP TABLE IF EXISTS `surveyresults`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `surveyresults` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gender` varchar(45) DEFAULT NULL,
  `relationship` varchar(45) DEFAULT NULL,
  `country` varchar(45) DEFAULT NULL,
  `sport` varchar(45) DEFAULT NULL,
  `language` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `surveyresults`
--

LOCK TABLES `surveyresults` WRITE;
/*!40000 ALTER TABLE `surveyresults` DISABLE KEYS */;
INSERT INTO `surveyresults` VALUES (1,'Female','Separated','Italy','Basketball','Ruby',NULL,NULL),(2,'Male','Single','Hongkong','Hockey','PHP','2015-09-02 12:03:53','2015-09-02 12:03:53'),(3,'Male','Single','Hongkong','Hockey','PHP','2015-09-02 12:07:15','2015-09-02 12:07:15'),(4,'Male','Married','Russia',NULL,'PHP','2015-09-02 12:09:01','2015-09-02 12:09:01'),(5,'Female','Divorced','Canada','Basketball','PHP','2015-09-02 12:09:26','2015-09-02 12:09:26'),(6,'Female','Divorced','Canada','Basketball','Python',NULL,NULL),(7,'Male','Single','Canada','Football','PHP','2015-09-02 13:53:26','2015-09-02 13:53:26'),(8,'Female','Married','Canada','Football','PHP','2015-09-02 13:56:57','2015-09-02 13:56:57'),(9,'Male','Single','Canada','Football','PHP','2015-09-02 14:08:36','2015-09-02 14:08:36'),(10,'Male','Single','Canada','Football','Ruby','2015-09-02 14:09:28','2015-09-02 14:09:28'),(11,'Female','Single','Italy','Hockey','Ruby','2015-09-02 14:10:05','2015-09-02 14:10:05'),(12,'Female','Divorced','Australia','Football','PHP','2015-09-02 14:11:01','2015-09-02 14:11:01'),(13,'Female','Single','Australia','Hockey','PHP','2015-09-02 14:11:36','2015-09-02 14:11:36'),(14,'Female','Widowed','Australia','Hockey','Ruby','2015-09-02 14:36:19','2015-09-02 14:36:19'),(15,'Male','Widowed','Australia','Hockey','Ruby','2015-09-02 15:58:30','2015-09-02 15:58:30');
/*!40000 ALTER TABLE `surveyresults` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-09-02 16:24:43
