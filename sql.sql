CREATE DATABASE  IF NOT EXISTS `heer_web` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `heer_web`;
-- MySQL dump 10.13  Distrib 5.6.13, for osx10.6 (i386)
--
-- Host: localhost    Database: heer_web
-- ------------------------------------------------------
-- Server version	5.6.15

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
-- Table structure for table `clubs`
--

DROP TABLE IF EXISTS `clubs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clubs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `naam` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clubs`
--

LOCK TABLES `clubs` WRITE;
/*!40000 ALTER TABLE `clubs` DISABLE KEYS */;
INSERT INTO `clubs` VALUES (1,'Heer7','assets/logo/heer.png'),(2,'RVU5','assets/logo/rvu.png');
/*!40000 ALTER TABLE `clubs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `events` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `lead` text COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `slug` text COLLATE utf8_unicode_ci NOT NULL,
  `img_url` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `date_start` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `events`
--

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
INSERT INTO `events` VALUES (1,'Shirt presentatie','op zondag 31 maart zullen de shirt worden getoont','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum cursus pretium. Etiam a purus turpis. Proin ullamcorper diam et quam dignissim tincidunt. Cras sit amet venenatis mi, ut cursus neque. Duis imperdiet tellus at semper malesuada. Nam ut risus vel dui ornare aliquet. Vivamus ut euismod lacus, sit amet laoreet lorem. Etiam nec turpis tempor, ullamcorper enim id, hendrerit nulla. Aliquam erat volutpat. Suspendisse varius iaculis turpis eget adipiscing. Cras orci nisi, convallis quis metus mollis, commodo congue turpis. Duis non lorem et sapien tincidunt gravida. Nunc vulputate, ipsum pulvinar vehicula ultrices, mauris dolor fermentum nisl, ac ultricies magna mauris ac velit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.\n\nSed sit amet lorem ut arcu pharetra semper. Integer egestas ipsum mi. Sed volutpat ultrices elit, sit amet varius erat luctus quis. Pellentesque sed libero eget lacus dictum viverra sit amet a massa. Praesent nisl augue, vehicula ut euismod in, commodo sed nunc. Vestibulum interdum mauris nec tempor aliquet. Sed adipiscing felis nec adipiscing ullamcorper. Nulla ut velit ac nibh molestie semper. Sed commodo, velit suscipit faucibus interdum, felis ligula imperdiet mi, non blandit dui leo et tortor. Aliquam pretium risus at nulla volutpat, at dictum sem venenatis','shirtpresentatie','assets/events/svme-heer.png','2014-12-12','2014-12-11 23:00:00','2014-12-11 23:00:00'),(2,'Nieuwe Sponsor','Cafe de Hoop zal Heer 7 vanaf komend zeizoen sponsoren','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum cursus pretium. Etiam a purus turpis. Proin ullamcorper diam et quam dignissim tincidunt. Cras sit amet venenatis mi, ut cursus neque. Duis imperdiet tellus at semper malesuada. Nam ut risus vel dui ornare aliquet. Vivamus ut euismod lacus, sit amet laoreet lorem. Etiam nec turpis tempor, ullamcorper enim id, hendrerit nulla. Aliquam erat volutpat. Suspendisse varius iaculis turpis eget adipiscing. Cras orci nisi, convallis quis metus mollis, commodo congue turpis. Duis non lorem et sapien tincidunt gravida. Nunc vulputate, ipsum pulvinar vehicula ultrices, mauris dolor fermentum nisl, ac ultricies magna mauris ac velit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.  Sed sit amet lorem ut arcu pharetra semper. Integer egestas ipsum mi. Sed volutpat ultrices elit, sit amet varius erat luctus quis. Pellentesque sed libero eget lacus dictum viverra sit amet a massa. Praesent nisl augue, vehicula ut euismod in, commodo sed nunc. Vestibulum interdum mauris nec tempor aliquet. Sed adipiscing felis nec adipiscing ullamcorper. Nulla ut velit ac nibh molestie semper. Sed commodo, velit suscipit faucibus interdum, felis ligula imperdiet mi, non blandit dui leo et tortor. Aliquam pretium risus at nulla volutpat, at dictum sem venenatis','nieuwe_ponsor','assets/events/svme-heer.png','2014-12-12','0000-00-00 00:00:00','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `matches`
--

DROP TABLE IF EXISTS `matches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `matches` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `home_id` int(11) NOT NULL,
  `away_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `matches`
--

LOCK TABLES `matches` WRITE;
/*!40000 ALTER TABLE `matches` DISABLE KEYS */;
INSERT INTO `matches` VALUES (1,1,2,'2014-06-13 11:30:00','0000-00-00 00:00:00','0000-00-00 00:00:00'),(2,2,1,'2014-06-13 11:30:00','0000-00-00 00:00:00','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `matches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES ('2014_05_21_114410_create_news_table',1),('2014_05_21_122008_create_event_table',2),('2014_05_21_131356_create_players_table',3),('2014_05_21_133758_create_matches_table',4),('2014_05_21_133958_create_clubs_table',5);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `slug` text COLLATE utf8_unicode_ci NOT NULL,
  `img_url` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (1,'Lorum ipsum','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eleifend felis et nunc porta, sed blandit mi rutrum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque id lacus sed ligula dapibus laoreet. Integer imperdiet iaculis condimentum. Nulla facilisi. Aliquam consequat lacus sem, id pellentesque metus blandit ac. Ut ante nulla, laoreet vel rhoncus eget, tristique sed enim.\n\nPraesent massa mi, volutpat at tellus nec, pretium mollis augue. Nulla facilisi. Vivamus tempus aliquam risus nec blandit. Aenean sollicitudin, nisi ac dictum suscipit, arcu tortor ullamcorper est, sed iaculis erat neque ac nibh. Donec elementum est felis, eu volutpat metus aliquam id. Etiam nec dolor ultricies, molestie leo non, sodales lectus. Ut vestibulum erat nec ipsum lacinia rhoncus. Suspendisse eleifend pharetra nunc, quis faucibus leo pellentesque id.','lorum-ipsum','assets/logo/heer.png','2014-12-11 23:00:00','0000-00-00 00:00:00'),(2,'Lorum ipsum','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eleifend felis et nunc porta, sed blandit mi rutrum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque id lacus sed ligula dapibus laoreet. Integer imperdiet iaculis condimentum. Nulla facilisi. Aliquam consequat lacus sem, id pellentesque metus blandit ac. Ut ante nulla, laoreet vel rhoncus eget, tristique sed enim.  Praesent massa mi, volutpat at tellus nec, pretium mollis augue. Nulla facilisi. Vivamus tempus aliquam risus nec blandit. Aenean sollicitudin, nisi ac dictum suscipit, arcu tortor ullamcorper est, sed iaculis erat neque ac nibh. Donec elementum est felis, eu volutpat metus aliquam id. Etiam nec dolor ultricies, molestie leo non, sodales lectus. Ut vestibulum erat nec ipsum lacinia rhoncus. Suspendisse eleifend pharetra nunc, quis faucibus leo pellentesque id.','asdsadsad',NULL,'2013-07-17 22:00:00','0000-00-00 00:00:00'),(3,'Lorum ipsum','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eleifend felis et nunc porta, sed blandit mi rutrum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque id lacus sed ligula dapibus laoreet. Integer imperdiet iaculis condimentum. Nulla facilisi. Aliquam consequat lacus sem, id pellentesque metus blandit ac. Ut ante nulla, laoreet vel rhoncus eget, tristique sed enim.  Praesent massa mi, volutpat at tellus nec, pretium mollis augue. Nulla facilisi. Vivamus tempus aliquam risus nec blandit. Aenean sollicitudin, nisi ac dictum suscipit, arcu tortor ullamcorper est, sed iaculis erat neque ac nibh. Donec elementum est felis, eu volutpat metus aliquam id. Etiam nec dolor ultricies, molestie leo non, sodales lectus. Ut vestibulum erat nec ipsum lacinia rhoncus. Suspendisse eleifend pharetra nunc, quis faucibus leo pellentesque id.','df',NULL,'2014-09-30 22:00:00','0000-00-00 00:00:00'),(4,'Lorum ipsum','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eleifend felis et nunc porta, sed blandit mi rutrum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque id lacus sed ligula dapibus laoreet. Integer imperdiet iaculis condimentum. Nulla facilisi. Aliquam consequat lacus sem, id pellentesque metus blandit ac. Ut ante nulla, laoreet vel rhoncus eget, tristique sed enim.  Praesent massa mi, volutpat at tellus nec, pretium mollis augue. Nulla facilisi. Vivamus tempus aliquam risus nec blandit. Aenean sollicitudin, nisi ac dictum suscipit, arcu tortor ullamcorper est, sed iaculis erat neque ac nibh. Donec elementum est felis, eu volutpat metus aliquam id. Etiam nec dolor ultricies, molestie leo non, sodales lectus. Ut vestibulum erat nec ipsum lacinia rhoncus. Suspendisse eleifend pharetra nunc, quis faucibus leo pellentesque id.','fddf',NULL,'2014-03-11 23:00:00','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `players`
--

DROP TABLE IF EXISTS `players`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `players` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` text COLLATE utf8_unicode_ci NOT NULL,
  `lastname` text COLLATE utf8_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `position` text COLLATE utf8_unicode_ci NOT NULL,
  `img_url` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `players`
--

LOCK TABLES `players` WRITE;
/*!40000 ALTER TABLE `players` DISABLE KEYS */;
INSERT INTO `players` VALUES (1,'Quincy','Collijn',21,'spits','assets/spelers/quincy-collijn.png','2014-12-11 23:00:00','2014-12-11 23:00:00');
/*!40000 ALTER TABLE `players` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-05-27 15:10:42
