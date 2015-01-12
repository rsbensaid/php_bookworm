CREATE DATABASE  IF NOT EXISTS `redbelt` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `redbelt`;
-- MySQL dump 10.13  Distrib 5.6.19, for osx10.7 (i386)
--
-- Host: 127.0.0.1    Database: redbelt
-- ------------------------------------------------------
-- Server version	5.5.38

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
-- Table structure for table `pokes`
--

DROP TABLE IF EXISTS `pokes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pokes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `poker` varchar(255) DEFAULT NULL,
  `pokee` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pokes`
--

LOCK TABLES `pokes` WRITE;
/*!40000 ALTER TABLE `pokes` DISABLE KEYS */;
INSERT INTO `pokes` VALUES (1,'?','?','2014-10-17 15:03:46','2014-10-17 15:03:46'),(2,'?','?','2014-10-17 15:03:56','2014-10-17 15:03:56'),(3,'Ramzi',NULL,'2014-10-17 15:07:21','2014-10-17 15:07:21'),(4,'Ramzi','Manny Ramirez','2014-10-17 15:09:27','2014-10-17 15:09:27'),(5,'Ramzi','Manny Ramirez','2014-10-17 15:10:35','2014-10-17 15:10:35'),(6,'Kanye','Ramzi','2014-10-17 15:22:14','2014-10-17 15:22:14'),(7,'Frank','Ramzi','2014-10-17 15:27:14','2014-10-17 15:27:14'),(8,'Frank','Ramzi','2014-10-17 15:27:16','2014-10-17 15:27:16'),(9,'Ramzi','Frank','2014-10-17 15:38:54','2014-10-17 15:38:54'),(10,'Ramzi','Kanye','2014-10-17 15:38:57','2014-10-17 15:38:57'),(11,'Ramzi','Ramzi','2014-10-17 15:38:58','2014-10-17 15:38:58'),(12,'Ramzi','Ramzi BenSaid','2014-10-17 15:38:59','2014-10-17 15:38:59'),(13,'Ramzi','Ramzi','2014-10-17 15:39:00','2014-10-17 15:39:00'),(14,'Ramzi','Kanye','2014-10-17 15:39:01','2014-10-17 15:39:01'),(15,'Ramzi','Frank','2014-10-17 15:39:01','2014-10-17 15:39:01'),(16,'Ramzi','Manny Ramirez','2014-10-17 15:39:01','2014-10-17 15:39:01'),(17,'Ramzi','Manny Ramirez','2014-10-17 15:39:07','2014-10-17 15:39:07'),(18,'Ramzi','Manny Ramirez','2014-10-17 15:39:07','2014-10-17 15:39:07'),(19,'Ramzi','Manny Ramirez','2014-10-17 15:39:07','2014-10-17 15:39:07'),(20,'Ramzi','Manny Ramirez','2014-10-17 15:39:07','2014-10-17 15:39:07'),(21,'Ramzi','Frank','2014-10-17 15:39:08','2014-10-17 15:39:08'),(22,'Ramzi','Frank','2014-10-17 15:39:08','2014-10-17 15:39:08'),(23,'Ramzi','Frank','2014-10-17 15:39:09','2014-10-17 15:39:09'),(24,'Ramzi','Frank','2014-10-17 15:39:09','2014-10-17 15:39:09'),(25,'Ramzi','Kanye','2014-10-17 15:39:09','2014-10-17 15:39:09'),(26,'Ramzi','Kanye','2014-10-17 15:39:10','2014-10-17 15:39:10'),(27,'Ramzi','Kanye','2014-10-17 15:39:10','2014-10-17 15:39:10'),(28,'Ramzi','Kanye','2014-10-17 15:39:10','2014-10-17 15:39:10'),(29,'Ramzi','Ramzi','2014-10-17 15:39:11','2014-10-17 15:39:11'),(30,'Ramzi','Ramzi','2014-10-17 15:39:11','2014-10-17 15:39:11'),(31,'Ramzi','Ramzi','2014-10-17 15:39:11','2014-10-17 15:39:11'),(32,'Ramzi','Ramzi BenSaid','2014-10-17 15:39:12','2014-10-17 15:39:12'),(33,'Ramzi','Ramzi BenSaid','2014-10-17 15:39:12','2014-10-17 15:39:12'),(34,'Ramzi','Ramzi BenSaid','2014-10-17 15:39:12','2014-10-17 15:39:12'),(35,'Ramzi','Ramzi BenSaid','2014-10-17 15:39:12','2014-10-17 15:39:12'),(36,'Frank','Ramzi BenSaid','2014-10-17 16:32:10','2014-10-17 16:32:10'),(37,'Frank','Ramzi','2014-10-17 16:32:11','2014-10-17 16:32:11'),(38,'Frank','Kanye','2014-10-17 16:32:11','2014-10-17 16:32:11'),(39,'Frank','Frank','2014-10-17 16:32:12','2014-10-17 16:32:12'),(40,'Frank','Manny Ramirez','2014-10-17 16:32:12','2014-10-17 16:32:12'),(41,'Frank','Frank','2014-10-17 16:32:13','2014-10-17 16:32:13'),(42,'Frank','Kanye','2014-10-17 16:32:14','2014-10-17 16:32:14'),(43,'Frank','Ramzi','2014-10-17 16:32:14','2014-10-17 16:32:14'),(44,'Frank','Ramzi BenSaid','2014-10-17 16:32:15','2014-10-17 16:32:15'),(45,'Kanye','Frank','2014-10-17 16:36:24','2014-10-17 16:36:24');
/*!40000 ALTER TABLE `pokes` ENABLE KEYS */;
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
  `alias` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `date_of_birth` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Ramzi BenSaid','rsb259','rsb259@cornell.edu','password','1991-06-16 00:00:00','2014-10-17 14:01:44','2014-10-17 14:01:44'),(2,'Ramzi','rsb259','ramzi@bensaid.com','password','1991-06-16 00:00:00','2014-10-17 14:03:32','2014-10-17 14:03:32'),(3,'Kanye','West','kanye@west.com','password','1980-03-04 00:00:00','2014-10-17 14:10:08','2014-10-17 14:10:08'),(4,'Frank','Vogel','fv@pacers.com','password','1980-12-12 00:00:00','2014-10-17 14:12:05','2014-10-17 14:12:05'),(5,'Manny Ramirez','ManRam','man@ram.com','password','1980-01-01 00:00:00','2014-10-17 14:13:30','2014-10-17 14:13:30');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_has_pokes`
--

DROP TABLE IF EXISTS `users_has_pokes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_has_pokes` (
  `users_id` int(11) NOT NULL,
  `pokes_id` int(11) NOT NULL,
  PRIMARY KEY (`users_id`,`pokes_id`),
  KEY `fk_users_has_pokes_pokes1_idx` (`pokes_id`),
  KEY `fk_users_has_pokes_users_idx` (`users_id`),
  CONSTRAINT `fk_users_has_pokes_pokes1` FOREIGN KEY (`pokes_id`) REFERENCES `mydb`.`pokes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_has_pokes_users` FOREIGN KEY (`users_id`) REFERENCES `mydb`.`users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_has_pokes`
--

LOCK TABLES `users_has_pokes` WRITE;
/*!40000 ALTER TABLE `users_has_pokes` DISABLE KEYS */;
/*!40000 ALTER TABLE `users_has_pokes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-10-17 17:37:37
