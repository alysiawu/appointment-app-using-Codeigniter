-- MySQL dump 10.13  Distrib 5.6.22, for osx10.8 (x86_64)
--
-- Host: 127.0.0.1    Database: app
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
-- Table structure for table `apps`
--

DROP TABLE IF EXISTS `apps`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `apps` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tasks` text,
  `time` time DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_app_users_idx` (`user_id`),
  CONSTRAINT `fk_app_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `apps`
--

LOCK TABLES `apps` WRITE;
/*!40000 ALTER TABLE `apps` DISABLE KEYS */;
INSERT INTO `apps` VALUES (2,'have fun too','20:45:00','pending','2014-06-12',1,'2015-06-12 14:03:34','2015-06-12 14:03:34'),(4,'write','12:59:00','pending','2015-12-31',2,'2015-06-12 14:08:09','2015-06-12 14:08:09'),(5,'learn coding','20:42:00','pending','2015-11-30',2,'2015-06-12 14:08:38','2015-06-12 14:08:38'),(6,'coffee','12:59:00','pending','2015-12-31',2,'2015-06-12 14:32:10','2015-06-12 14:32:10'),(11,'buy tea','11:58:00','pending','2015-06-04',2,'2015-06-12 15:35:27','2015-06-12 15:35:27'),(13,'play with kiki','18:00:00','pending','2015-06-12',2,'2015-06-12 15:37:17','2015-06-12 15:37:17'),(14,'take the second nap','22:59:00','pending','2015-06-12',2,'2015-06-12 15:37:36','2015-06-12 15:37:36'),(16,'have lunch ','13:02:00','pending','2015-06-12',3,'2015-06-12 15:41:28','2015-06-12 15:41:28'),(17,'graduate','23:59:00','pending','2015-12-31',3,'2015-06-12 15:41:48','2015-06-12 15:41:48'),(18,'wake up','09:08:00','pending','2015-09-09',3,'2015-06-12 15:42:05','2015-06-12 15:42:05'),(19,'great','12:59:00','pending','2015-12-31',3,'2015-06-12 16:18:53','2015-06-12 16:18:53'),(20,'great','12:59:00','pending','2015-12-31',3,'2015-06-12 16:19:23','2015-06-12 16:19:23'),(21,'have fun','12:58:00','pending','2012-09-30',4,'2015-06-12 16:24:27','2015-06-12 16:24:27'),(22,'go to space','02:01:00','pending','2019-03-31',4,'2015-06-12 16:24:59','2015-06-12 16:24:59'),(23,'clean kiki','09:09:00','done','2015-06-12',4,'2015-06-12 16:25:23','2015-06-12 16:25:23'),(24,'cleaning','03:12:00','done','2015-06-02',4,'2015-06-12 16:33:36','2015-06-12 16:33:36'),(25,'hhh','12:59:00','pending','2012-12-31',4,'2015-06-12 16:47:22','2015-06-12 16:47:22'),(26,'great','00:59:00','pending','2014-12-31',4,'2015-06-12 16:55:43','2015-06-12 16:55:43'),(27,'jj','12:59:00','pending','2015-12-31',4,'2015-06-12 17:02:42','2015-06-12 17:02:42'),(28,'go out','12:59:00','pending','2015-12-31',5,'2015-06-12 17:05:17','2015-06-12 17:05:17'),(29,'staye ','18:12:00','pending','2015-06-12',5,'2015-06-12 17:06:42','2015-06-12 17:06:42'),(30,'hahah','13:59:00','pending','3015-06-13',5,'2015-06-12 17:07:07','2015-06-12 17:07:07'),(31,'hahah','13:59:00','pending','2015-06-13',5,'2015-06-12 17:07:24','2015-06-12 17:07:24'),(32,'brunch date ','10:56:00','pending','2016-03-02',6,'2015-06-12 17:13:45','2015-06-12 17:13:45'),(33,'dinner ','18:13:00','pending','2016-06-13',6,'2015-06-12 17:14:28','2015-06-12 17:14:28'),(34,'done done','18:13:00','done','2015-06-13',6,'2015-06-12 17:17:10','2015-06-12 17:17:10');
/*!40000 ALTER TABLE `apps` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'John','John@gmail.com','25d55ad283aa400af464c76d713c07ad','2015-06-12 13:44:51','2015-06-12 13:44:51',NULL),(2,'mike','mike@gmail.com','25d55ad283aa400af464c76d713c07ad','2015-06-12 13:47:58','2015-06-12 13:47:58',NULL),(3,'Jenny Wang','jenny@gmail.com','25d55ad283aa400af464c76d713c07ad','2015-06-12 15:39:42','2015-06-12 15:39:42',NULL),(4,'susan lee','susan@gmail.com','25d55ad283aa400af464c76d713c07ad','2015-06-12 16:24:08','2015-06-12 16:24:08',NULL),(5,'niki','niki@gmail.com','25d55ad283aa400af464c76d713c07ad','2015-06-12 17:05:02','2015-06-12 17:05:02',NULL),(6,'wendy Lee','wendy@gmail.com','25d55ad283aa400af464c76d713c07ad','2015-06-12 17:13:17','2015-06-12 17:13:17',NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-06-12 17:23:31
