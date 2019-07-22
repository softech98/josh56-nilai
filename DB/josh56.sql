-- MySQL dump 10.16  Distrib 10.1.37-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: josh56
-- ------------------------------------------------------
-- Server version	10.1.37-MariaDB-3

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
-- Table structure for table `activations`
--

DROP TABLE IF EXISTS `activations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `activations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `activations`
--

LOCK TABLES `activations` WRITE;
/*!40000 ALTER TABLE `activations` DISABLE KEYS */;
INSERT INTO `activations` VALUES (1,1,'FBMhdQXSSr1uKZjYYrPm0iuvceIPkP00',1,'2019-06-23 03:29:43','2019-06-23 03:29:43','2019-06-23 03:29:43'),(2,2,'8SOCyUQlR4xz8Lx4zLFpcXAp68TCTFzE',1,'2019-06-23 03:29:43','2019-06-23 03:29:43','2019-06-23 03:29:43'),(4,4,'JfRaM3yvQFy44UIhhTGRsHd4mF0HrCSj',1,'2019-06-23 09:56:56','2019-06-23 09:56:56','2019-06-23 09:56:56'),(8,8,'j05ay2TvefgWaTdJpCsMM3hREtZvQ76N',1,'2019-06-27 22:50:10','2019-06-27 22:50:10','2019-06-27 22:50:10'),(10,10,'pVR142b2GPXq1n8OV40X8mOSFEcwN5zI',1,'2019-06-27 23:07:00','2019-06-27 23:07:00','2019-06-27 23:07:00'),(11,11,'2caLoDfc8QAO5wpZHnuzpi5bZyzXyeUU',1,'2019-06-28 19:26:53','2019-06-28 19:26:53','2019-06-28 19:26:53'),(12,12,'6yfTcoTmBzMmGtyvY7hnRWKwYOM7Ki0B',1,'2019-06-28 19:29:31','2019-06-28 19:29:31','2019-06-28 19:29:31'),(13,13,'zb3Ue3CEggCl3rvDH1xj0nhEJgqsLSwH',1,'2019-06-28 20:56:25','2019-06-28 20:56:25','2019-06-28 20:56:25'),(14,14,'3sXzq9hdMzmyIeEP835PeWRWoNf8FEw4',1,'2019-06-28 20:59:59','2019-06-28 20:59:59','2019-06-28 20:59:59'),(15,15,'AVmVYVt1tTdPg9YTf1OupDGqxVNboZdy',1,'2019-06-28 21:06:27','2019-06-28 21:06:27','2019-06-28 21:06:27'),(16,16,'ovEs0sJqSN13i85Q8iIY6zeHMtRztuj9',1,'2019-06-28 21:07:21','2019-06-28 21:07:21','2019-06-28 21:07:21'),(17,17,'tzFBptf7QtzIsCTdJfdcXQb50YvX1Nbt',1,'2019-06-28 21:11:03','2019-06-28 21:11:03','2019-06-28 21:11:03'),(20,20,'preWMkgv76ZlI22E5RHCbGsOmaGFSbFS',1,'2019-06-28 21:54:18','2019-06-28 21:54:18','2019-06-28 21:54:18'),(21,21,'4YmuhXEdVrWomTwE5vgdMdc9VxOPRwsV',1,'2019-06-28 21:54:50','2019-06-28 21:54:50','2019-06-28 21:54:50'),(22,22,'BLgYbLT701joB3Wdly3fkR2g6mzMAT25',1,'2019-06-28 22:11:24','2019-06-28 22:11:24','2019-06-28 22:11:24'),(24,5,'CHAgplhmYlyf2f9syMf7TeXeqpnXJCRR',1,'2019-07-13 08:48:44','2019-07-13 08:48:44','2019-07-13 08:48:44'),(25,6,'aUmb9RNzFfWcAIKnqK0JKDa23w6ci2Fw',1,'2019-07-13 10:29:18','2019-07-13 10:29:18','2019-07-13 10:29:18'),(26,7,'e4Ujx2TtFyeLk6C8IttmJaycDlcmsX7T',1,'2019-07-13 10:41:24','2019-07-13 10:41:24','2019-07-13 10:41:24'),(27,8,'fdLXpL377W5NYy1M9olyvFTLf4PiJc9D',1,'2019-07-13 10:44:19','2019-07-13 10:44:19','2019-07-13 10:44:19'),(29,10,'yNVMjpBrD8erZttV1ZMXn4kQoOZSkiSl',1,'2019-07-16 04:03:02','2019-07-16 04:03:01','2019-07-16 04:03:02'),(30,5,'775LLqYfRNlWXVrQ3igZHpj6scWM9cdD',1,'2019-07-20 15:25:10','2019-07-20 15:24:36','2019-07-20 15:25:10'),(31,11,'6qdsQe9Bax8BwbedZ2fX09IOGo4Ih6fb',1,'2019-07-21 05:48:43','2019-07-21 05:48:42','2019-07-21 05:48:43'),(32,12,'zZrZbu0VZfAO0034qHcQV8vgaKpZxhV0',1,'2019-07-21 05:54:36','2019-07-21 05:54:36','2019-07-21 05:54:36'),(33,13,'UbLWRyQ3q98VvNP29ui5HkzUYZ1dPLb0',1,'2019-07-21 05:56:19','2019-07-21 05:56:19','2019-07-21 05:56:19'),(34,14,'fKp9bfiEfman7IyUXb516UecsGE65u99',1,'2019-07-21 07:05:37','2019-07-21 07:05:37','2019-07-21 07:05:37');
/*!40000 ALTER TABLE `activations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `activity_log`
--

DROP TABLE IF EXISTS `activity_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `activity_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `log_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `subject_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `causer_id` int(11) DEFAULT NULL,
  `causer_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `properties` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `activity_log_log_name_index` (`log_name`)
) ENGINE=InnoDB AUTO_INCREMENT=116 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `activity_log`
--

LOCK TABLES `activity_log` WRITE;
/*!40000 ALTER TABLE `activity_log` DISABLE KEYS */;
INSERT INTO `activity_log` VALUES (1,'Ilham','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-07-13 07:40:20','2019-07-13 07:40:20'),(2,'joko','User Updated by Ilham',3,'App\\User',3,'App\\User','[]','2019-07-13 08:33:07','2019-07-13 08:33:07'),(3,'Ilham','LoggedOut',1,'App\\User',1,'App\\User','[]','2019-07-13 08:34:03','2019-07-13 08:34:03'),(4,'joko','LoggedIn',3,'App\\User',3,'App\\User','[]','2019-07-13 08:34:12','2019-07-13 08:34:12'),(5,'joko','LoggedOut',3,'App\\User',3,'App\\User','[]','2019-07-13 08:36:17','2019-07-13 08:36:17'),(6,'Ilham','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-07-13 08:36:27','2019-07-13 08:36:27'),(7,'joko','User deleted by Ilham',3,'App\\User',3,'App\\User','[]','2019-07-13 08:38:08','2019-07-13 08:38:08'),(8,'Ilham','LoggedOut',1,'App\\User',1,'App\\User','[]','2019-07-13 08:49:04','2019-07-13 08:49:04'),(9,'joko','LoggedIn',5,'App\\User',5,'App\\User','[]','2019-07-13 08:49:13','2019-07-13 08:49:13'),(10,'joko','LoggedOut',5,'App\\User',5,'App\\User','[]','2019-07-13 08:51:12','2019-07-13 08:51:12'),(11,'Ilham','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-07-13 08:51:19','2019-07-13 08:51:19'),(12,'Ilham','LoggedOut',1,'App\\User',1,'App\\User','[]','2019-07-13 09:56:35','2019-07-13 09:56:35'),(13,'joko','LoggedIn',5,'App\\User',5,'App\\User','[]','2019-07-13 09:56:53','2019-07-13 09:56:53'),(14,'joko','LoggedOut',5,'App\\User',5,'App\\User','[]','2019-07-13 10:15:10','2019-07-13 10:15:10'),(15,'Pengguna','LoggedIn',2,'App\\User',2,'App\\User','[]','2019-07-13 10:15:23','2019-07-13 10:15:23'),(16,'Pengguna','LoggedOut',2,'App\\User',2,'App\\User','[]','2019-07-13 10:15:36','2019-07-13 10:15:36'),(17,'Ilham','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-07-13 10:15:42','2019-07-13 10:15:42'),(18,'Ramdan','New User Created by Ilham',6,'App\\User',6,'App\\User','[]','2019-07-13 10:29:18','2019-07-13 10:29:18'),(19,'Riawan','New User Created by Ilham',7,'App\\User',7,'App\\User','[]','2019-07-13 10:41:24','2019-07-13 10:41:24'),(20,'Riawan','New User Created by Ilham',8,'App\\User',8,'App\\User','[]','2019-07-13 10:44:19','2019-07-13 10:44:19'),(21,'Ilham','LoggedOut',1,'App\\User',1,'App\\User','[]','2019-07-13 11:14:38','2019-07-13 11:14:38'),(22,'Pengguna','LoggedIn',2,'App\\User',2,'App\\User','[]','2019-07-13 11:14:54','2019-07-13 11:14:54'),(23,'Pengguna','LoggedIn',2,'App\\User',2,'App\\User','[]','2019-07-15 01:14:49','2019-07-15 01:14:49'),(24,'Ilham','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-07-15 03:20:35','2019-07-15 03:20:35'),(25,'Ilham','LoggedOut',1,'App\\User',1,'App\\User','[]','2019-07-15 03:20:43','2019-07-15 03:20:43'),(26,'Pengguna','LoggedIn',2,'App\\User',2,'App\\User','[]','2019-07-15 03:20:47','2019-07-15 03:20:47'),(27,'Pengguna','LoggedOut',2,'App\\User',2,'App\\User','[]','2019-07-15 03:24:52','2019-07-15 03:24:52'),(28,'Pengguna','LoggedIn',2,'App\\User',2,'App\\User','[]','2019-07-15 03:25:56','2019-07-15 03:25:56'),(29,'Pengguna','LoggedOut',2,'App\\User',2,'App\\User','[]','2019-07-15 03:48:05','2019-07-15 03:48:05'),(30,'Riawan','LoggedIn',8,'App\\User',8,'App\\User','[]','2019-07-15 03:49:12','2019-07-15 03:49:12'),(31,'Riawan','LoggedIn',8,'App\\User',8,'App\\User','[]','2019-07-15 07:08:05','2019-07-15 07:08:05'),(32,'Riawan','LoggedOut',8,'App\\User',8,'App\\User','[]','2019-07-15 07:19:44','2019-07-15 07:19:44'),(33,'Pengguna','LoggedIn',2,'App\\User',2,'App\\User','[]','2019-07-15 07:19:49','2019-07-15 07:19:49'),(34,'Pengguna','LoggedOut',2,'App\\User',2,'App\\User','[]','2019-07-15 07:36:37','2019-07-15 07:36:37'),(35,'Riawan','LoggedIn',8,'App\\User',8,'App\\User','[]','2019-07-15 07:36:45','2019-07-15 07:36:45'),(36,'Pengguna','LoggedIn',2,'App\\User',2,'App\\User','[]','2019-07-15 11:57:12','2019-07-15 11:57:12'),(37,'Pengguna','LoggedOut',2,'App\\User',2,'App\\User','[]','2019-07-15 11:57:45','2019-07-15 11:57:45'),(38,'Riawan','LoggedIn',8,'App\\User',8,'App\\User','[]','2019-07-15 11:57:53','2019-07-15 11:57:53'),(39,'Riawan','LoggedOut',8,'App\\User',8,'App\\User','[]','2019-07-15 12:32:44','2019-07-15 12:32:44'),(40,'Ilham','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-07-15 12:32:48','2019-07-15 12:32:48'),(41,'Ilham','LoggedOut',1,'App\\User',1,'App\\User','[]','2019-07-15 12:33:16','2019-07-15 12:33:16'),(42,'Riawan','LoggedIn',8,'App\\User',8,'App\\User','[]','2019-07-15 12:33:26','2019-07-15 12:33:26'),(43,'Ilham','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-07-16 01:32:51','2019-07-16 01:32:51'),(44,'Ilham','LoggedOut',1,'App\\User',1,'App\\User','[]','2019-07-16 03:52:20','2019-07-16 03:52:20'),(45,'admin2','LoggedIn',9,'App\\User',9,'App\\User','[]','2019-07-16 03:52:27','2019-07-16 03:52:27'),(46,'admin2','LoggedOut',9,'App\\User',9,'App\\User','[]','2019-07-16 04:00:44','2019-07-16 04:00:44'),(47,'Ilham','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-07-16 04:00:47','2019-07-16 04:00:47'),(48,'admin2','User deleted by Ilham',9,'App\\User',9,'App\\User','[]','2019-07-16 04:01:03','2019-07-16 04:01:03'),(49,'Ilham','LoggedOut',1,'App\\User',1,'App\\User','[]','2019-07-16 04:03:32','2019-07-16 04:03:32'),(50,'Admin Kedua','LoggedIn',10,'App\\User',10,'App\\User','[]','2019-07-16 04:03:38','2019-07-16 04:03:38'),(51,'Admin Kedua','LoggedOut',10,'App\\User',10,'App\\User','[]','2019-07-16 04:06:20','2019-07-16 04:06:20'),(52,'Ilham','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-07-16 04:26:24','2019-07-16 04:26:24'),(53,'Ilham','LoggedOut',1,'App\\User',1,'App\\User','[]','2019-07-16 04:27:21','2019-07-16 04:27:21'),(54,'Ilham','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-07-16 04:37:55','2019-07-16 04:37:55'),(55,'Ilham','LoggedOut',1,'App\\User',1,'App\\User','[]','2019-07-16 04:39:42','2019-07-16 04:39:42'),(56,'Riawan','LoggedIn',8,'App\\User',8,'App\\User','[]','2019-07-16 04:39:54','2019-07-16 04:39:54'),(57,'Ilham','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-07-16 08:02:53','2019-07-16 08:02:53'),(58,'Ilham','LoggedOut',1,'App\\User',1,'App\\User','[]','2019-07-16 08:03:16','2019-07-16 08:03:16'),(59,'Riawan','LoggedIn',8,'App\\User',8,'App\\User','[]','2019-07-16 08:03:26','2019-07-16 08:03:26'),(60,'Riawan','LoggedIn',8,'App\\User',8,'App\\User','[]','2019-07-16 08:24:25','2019-07-16 08:24:25'),(61,'Riawan','LoggedOut',8,'App\\User',8,'App\\User','[]','2019-07-16 09:39:53','2019-07-16 09:39:53'),(62,'Pengguna','LoggedIn',2,'App\\User',2,'App\\User','[]','2019-07-16 09:40:00','2019-07-16 09:40:00'),(63,'Pengguna','LoggedOut',2,'App\\User',2,'App\\User','[]','2019-07-16 09:47:38','2019-07-16 09:47:38'),(64,'Riawan','LoggedIn',8,'App\\User',8,'App\\User','[]','2019-07-16 09:47:46','2019-07-16 09:47:46'),(65,'Riawan','LoggedIn',8,'App\\User',8,'App\\User','[]','2019-07-18 13:59:55','2019-07-18 13:59:55'),(66,'Riawan','LoggedIn',8,'App\\User',8,'App\\User','[]','2019-07-18 15:19:32','2019-07-18 15:19:32'),(67,'Riawan','LoggedOut',8,'App\\User',8,'App\\User','[]','2019-07-18 15:27:09','2019-07-18 15:27:09'),(68,'Riawan','LoggedOut',8,'App\\User',8,'App\\User','[]','2019-07-18 16:17:39','2019-07-18 16:17:39'),(69,'Ilham','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-07-18 16:17:43','2019-07-18 16:17:43'),(70,'Ilham','LoggedOut',1,'App\\User',1,'App\\User','[]','2019-07-18 16:19:40','2019-07-18 16:19:40'),(71,'Riawan','LoggedIn',8,'App\\User',8,'App\\User','[]','2019-07-18 16:19:50','2019-07-18 16:19:50'),(72,'Riawan','LoggedIn',8,'App\\User',8,'App\\User','[]','2019-07-19 19:14:01','2019-07-19 19:14:01'),(73,'Riawan','LoggedIn',8,'App\\User',8,'App\\User','[]','2019-07-19 23:35:58','2019-07-19 23:35:58'),(74,'Riawan','LoggedIn',8,'App\\User',8,'App\\User','[]','2019-07-20 02:17:38','2019-07-20 02:17:38'),(75,'Riawan','LoggedIn',8,'App\\User',8,'App\\User','[]','2019-07-20 07:29:28','2019-07-20 07:29:28'),(76,'Riawan','LoggedIn',8,'App\\User',8,'App\\User','[]','2019-07-20 11:10:01','2019-07-20 11:10:01'),(77,'Riawan','LoggedIn',8,'App\\User',8,'App\\User','[]','2019-07-20 13:11:22','2019-07-20 13:11:22'),(78,'Riawan','LoggedIn',8,'App\\User',8,'App\\User','[]','2019-07-20 13:25:16','2019-07-20 13:25:16'),(79,'Riawan','LoggedIn',8,'App\\User',8,'App\\User','[]','2019-07-20 13:51:37','2019-07-20 13:51:37'),(80,'Riawan','LoggedOut',8,'App\\User',8,'App\\User','[]','2019-07-20 13:52:53','2019-07-20 13:52:53'),(81,'Ilham','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-07-20 13:52:57','2019-07-20 13:52:57'),(82,'Admin Kedua','User Updated by Ilham',10,'App\\User',10,'App\\User','[]','2019-07-20 14:56:24','2019-07-20 14:56:24'),(83,'Admin Kedua','User Updated by Ilham',10,'App\\User',10,'App\\User','[]','2019-07-20 15:08:29','2019-07-20 15:08:29'),(84,'Ilham','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-07-20 15:22:52','2019-07-20 15:22:52'),(85,'Ilham','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-07-20 15:24:18','2019-07-20 15:24:18'),(86,'joko','User Updated by Ilham',5,'App\\User',5,'App\\User','[]','2019-07-20 15:25:10','2019-07-20 15:25:10'),(87,'Ilham','User Updated by Ilham',1,'App\\User',1,'App\\User','[]','2019-07-20 15:35:41','2019-07-20 15:35:41'),(88,'Ilham','User Updated by Ilham',1,'App\\User',1,'App\\User','[]','2019-07-20 15:35:51','2019-07-20 15:35:51'),(89,'Ilham','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-07-20 15:36:28','2019-07-20 15:36:28'),(90,'Ilham','User Updated by Ilham',1,'App\\User',1,'App\\User','[]','2019-07-20 15:36:42','2019-07-20 15:36:42'),(91,'Ilham','User Updated by Ilham',1,'App\\User',1,'App\\User','[]','2019-07-20 15:36:50','2019-07-20 15:36:50'),(92,'Ilham','LoggedOut',1,'App\\User',1,'App\\User','[]','2019-07-20 15:38:14','2019-07-20 15:38:14'),(93,'Pengguna','LoggedIn',2,'App\\User',2,'App\\User','[]','2019-07-20 15:38:42','2019-07-20 15:38:42'),(94,'Pengguna','LoggedOut',2,'App\\User',2,'App\\User','[]','2019-07-20 15:42:09','2019-07-20 15:42:09'),(95,'Riawan','LoggedIn',8,'App\\User',8,'App\\User','[]','2019-07-20 15:46:58','2019-07-20 15:46:58'),(96,'Ilham','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-07-20 16:15:57','2019-07-20 16:15:57'),(97,'Riawan','LoggedIn',8,'App\\User',8,'App\\User','[]','2019-07-21 05:21:43','2019-07-21 05:21:43'),(98,'Ilham','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-07-21 05:43:06','2019-07-21 05:43:06'),(99,'Rifka Simamora','New User Created by Ilham',11,'App\\User',11,'App\\User','[]','2019-07-21 05:48:43','2019-07-21 05:48:43'),(100,'dfdf','New User Created by Ilham',12,'App\\User',12,'App\\User','[]','2019-07-21 05:54:37','2019-07-21 05:54:37'),(101,'ererer','New User Created by Ilham',13,'App\\User',13,'App\\User','[]','2019-07-21 05:56:19','2019-07-21 05:56:19'),(102,'Ilham','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-07-21 05:58:15','2019-07-21 05:58:15'),(103,'Ilham','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-07-21 06:10:16','2019-07-21 06:10:16'),(104,'Ilham','User Updated by Ilham',1,'App\\User',1,'App\\User','[]','2019-07-21 07:00:35','2019-07-21 07:00:35'),(105,'Pengguna','User Updated by Ilham',2,'App\\User',2,'App\\User','[]','2019-07-21 07:03:19','2019-07-21 07:03:19'),(106,'Dini','User Updated by Ilham',14,'App\\User',14,'App\\User','[]','2019-07-21 07:05:58','2019-07-21 07:05:58'),(107,'Riawan','LoggedIn',8,'App\\User',8,'App\\User','[]','2019-07-21 09:03:17','2019-07-21 09:03:17'),(108,'Riawan','LoggedIn',8,'App\\User',8,'App\\User','[]','2019-07-21 11:42:10','2019-07-21 11:42:10'),(109,'Riawan','LoggedOut',8,'App\\User',8,'App\\User','[]','2019-07-21 13:42:35','2019-07-21 13:42:35'),(110,'Ilham','LoggedIn',1,'App\\User',1,'App\\User','[]','2019-07-21 13:43:04','2019-07-21 13:43:04'),(111,'Riawan','LoggedIn',8,'App\\User',8,'App\\User','[]','2019-07-22 07:43:02','2019-07-22 07:43:02'),(112,'Riawan','LoggedIn',8,'App\\User',8,'App\\User','[]','2019-07-22 08:10:58','2019-07-22 08:10:58'),(113,'Riawan','LoggedIn',8,'App\\User',8,'App\\User','[]','2019-07-22 10:47:02','2019-07-22 10:47:02'),(114,'Riawan','LoggedIn',8,'App\\User',8,'App\\User','[]','2019-07-22 15:03:33','2019-07-22 15:03:33'),(115,'Riawan','LoggedIn',8,'App\\User',8,'App\\User','[]','2019-07-22 19:08:52','2019-07-22 19:08:52');
/*!40000 ALTER TABLE `activity_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `datatables`
--

DROP TABLE IF EXISTS `datatables`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `datatables` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `points` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notes` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `job` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `datatables`
--

LOCK TABLES `datatables` WRITE;
/*!40000 ALTER TABLE `datatables` DISABLE KEYS */;
INSERT INTO `datatables` VALUES (1,'Ilham','Saputra','ilham22saputra@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `datatables` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `files`
--

DROP TABLE IF EXISTS `files`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `files` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `filename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `files`
--

LOCK TABLES `files` WRITE;
/*!40000 ALTER TABLE `files` DISABLE KEYS */;
/*!40000 ALTER TABLE `files` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `is_guru`
--

DROP TABLE IF EXISTS `is_guru`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `is_guru` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nip` varchar(18) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('L','P') COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hp` varchar(13) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `is_guru`
--

LOCK TABLES `is_guru` WRITE;
/*!40000 ALTER TABLE `is_guru` DISABLE KEYS */;
INSERT INTO `is_guru` VALUES (1,'198765452356987453','multi@gmail.com','Multimedia','','1929-09-11','L','Jambi',NULL,NULL,'2019-06-28 22:12:45','2019-06-28 22:12:45'),(15,'100958282164806572','simanjuntak.salimah@yahoo.co.id','Latika Farida','Administrasi Jakarta Utara','2014-10-28','P','Kpg. Imam Bonjol No. 681, Bandar Lampung 86390, Gorontalo','(+62)83338289',NULL,'2019-01-15 13:32:32','2019-04-03 02:43:46'),(18,'118677000847568283','rriyanti@kuswoyo.in','Dadap Sitompul S.IP','Tidore Kepulauan','1955-02-14','P','Gg. Daan No. 72, Sungai Penuh 99714, JaTim','(+62)82454502',NULL,'2019-03-10 00:32:09','2019-02-28 17:50:39'),(19,'122959108105881502','jutami@yahoo.com','Irsad Emong Gunawan S.Farm','Bandung','1958-10-14','L','Gg. Cemara No. 376, Pekalongan 94585, MalUt','(+62)87458191',NULL,'2019-02-17 00:57:23','2019-04-30 04:21:34'),(20,'105579532035900536','balapati82@yahoo.co.id','Cawisadi Yahya Utama M.Farm','Banjar','2004-07-20','P','Jr. Lembong No. 274, Makassar 78179, KalBar','(+62)81431088',NULL,'2019-05-18 10:39:33','2019-03-03 17:52:38'),(21,'120253957665899022','dsamosir@riyanti.co','Yuni Nasyiah S.Pt','Bandar Lampung','1948-12-25','P','Kpg. Sam Ratulangi No. 908, Ambon 31365, KalUt','(+62)84800192',NULL,'2019-01-16 15:48:25','2019-02-05 13:15:54'),(24,'102776139797069180','ellis45@yahoo.co.id','Umar Kusumo S.E.','Metro','2007-12-31','L','Ds. Supono No. 344, Pekanbaru 67395, BaBel','(+62)81626857',NULL,'2019-05-25 08:59:27','2019-06-14 14:07:10'),(25,'191676654316602108','latika25@yahoo.co.id','Ihsan Manullang','Bukittinggi','1941-08-25','P','Ki. Achmad Yani No. 199, Padang 61766, SulUt','(+62)89349940',NULL,'2019-05-23 08:37:27','2019-03-15 19:47:41'),(28,'166172290282872027','nuraini.yusuf@oktaviani.biz','Wulan Nasyiah','Blitar','1921-07-24','L','Kpg. PHH. Mustofa No. 962, Bekasi 58564, JaTeng','(+62)84022410',NULL,'2019-03-19 04:04:08','2019-06-06 07:50:57'),(29,'161663597478225219','hariyah.eluh@puspita.biz','Carla Kania Pertiwi','Dumai','2008-06-03','P','Ds. Ronggowarsito No. 274, Manado 74352, DKI','(+62)80391479',NULL,'2019-02-23 13:11:03','2019-06-02 05:48:43'),(31,'109100497483158286','budi.lazuardi@gmail.com','Ina Widiastuti S.Pt','Kupang','1973-01-08','P','Gg. Bappenas No. 5, Ambon 88695, SulUt','(+62)81618448',NULL,'2019-03-21 19:48:07','2019-05-26 22:41:21'),(32,'103408144908846292','isiregar@riyanti.or.id','Zamira Kuswandari','Padangpanjang','1923-05-15','L','Ki. Baya Kali Bungur No. 485, Jambi 94585, SumUt','(+62)86890111','1.JPG','2019-04-30 01:00:50','2019-02-23 13:10:34'),(37,'103408144908846298','riawan@gmail.com','Riawan','','1998-02-22','L','Jambi','081377815153',NULL,'2019-07-13 10:44:18','2019-07-13 10:44:18');
/*!40000 ALTER TABLE `is_guru` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `is_jurusan`
--

DROP TABLE IF EXISTS `is_jurusan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `is_jurusan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `singkatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `is_jurusan`
--

LOCK TABLES `is_jurusan` WRITE;
/*!40000 ALTER TABLE `is_jurusan` DISABLE KEYS */;
INSERT INTO `is_jurusan` VALUES (1,'Teknik Komputer Jaringan','TKJ'),(2,'Akuntansi','AK'),(3,'Administrasi Perkantoran','AP'),(4,'Tata Niaga','TN'),(5,'Pariwisata','PW');
/*!40000 ALTER TABLE `is_jurusan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `is_kompetensi`
--

DROP TABLE IF EXISTS `is_kompetensi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `is_kompetensi` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kode` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aspek` enum('K','P') COLLATE utf8mb4_unicode_ci NOT NULL,
  `mapel_id` int(10) NOT NULL,
  `tingkat` enum('10','11','12') COLLATE utf8mb4_unicode_ci NOT NULL,
  `kompetensi_dasar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `is_kompetensi`
--

LOCK TABLES `is_kompetensi` WRITE;
/*!40000 ALTER TABLE `is_kompetensi` DISABLE KEYS */;
INSERT INTO `is_kompetensi` VALUES (1,'3.1','P',1,'10','Menganalisis Q.S. Al-Anfal (8) : 72); Q.S. Al-Hujurat (49) : 12; dan QS Al-Hujurat (49) : 10; serta hadits tentang kontrol diri (mujahadah an-nafs), prasangka baik (husnuzzhan), dan persaudaraan (ukhuwah)'),(2,'3.2','P',1,'10','Memahami manfaat dan hikmah kontrol diri (mujahadah an-nafs), prasangka baik (husnuzzhan) dan persaudaraan (ukhuwah), dan menerapkannya dalam kehidupan'),(3,'3.3','P',1,'10','Menganalisis  Q.S. Al-Isra\' (17) : 32, dan Q.S. An-Nur (24) : 2, serta hadits tentang larangan pergaulan bebas dan perbuatan zina.'),(5,'3.1','P',1,'12','menganalisis dan mengevaluasi makna Q.S. Ali Imran/3: 190-191, dan Q.S. Ali Imran/3: 159, serta Hadis tentang berpikir kritis dan bersikap demokratis'),(6,'3.1','P',4,'10','Dasar Pengetahuan Akuntansi'),(7,'3.4','P',1,'10','Ini KD 3.4'),(8,'3.5','P',1,'10','ini KD 3.5'),(9,'3.6','P',1,'10','Ini KD 3.6');
/*!40000 ALTER TABLE `is_kompetensi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `is_mapel`
--

DROP TABLE IF EXISTS `is_mapel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `is_mapel` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `jurusan_id` int(10) NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `k1` int(10) NOT NULL,
  `k2` int(11) NOT NULL,
  `k3` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `is_mapel`
--

LOCK TABLES `is_mapel` WRITE;
/*!40000 ALTER TABLE `is_mapel` DISABLE KEYS */;
INSERT INTO `is_mapel` VALUES (1,1,'Pendidikan Agama & Budi Pekerti',1,1,1),(2,1,'Bahasa Indonesia',1,1,1),(3,1,'Matematika',1,1,1),(4,2,'Dasar Akuntansi',1,0,0),(5,2,'Pendidikan Agama & Budi Pekerti',1,1,1),(6,4,'Dasar Pemasaran',1,1,0);
/*!40000 ALTER TABLE `is_mapel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `is_mapel_gurus`
--

DROP TABLE IF EXISTS `is_mapel_gurus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `is_mapel_gurus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `rombel_id` int(11) DEFAULT NULL,
  `mapel_id` int(11) DEFAULT NULL,
  `guru_id` int(11) DEFAULT NULL,
  `jurusan_id` int(11) DEFAULT NULL,
  `periode_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `periode_id` (`periode_id`),
  CONSTRAINT `is_mapel_gurus_ibfk_1` FOREIGN KEY (`periode_id`) REFERENCES `is_periode` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `is_mapel_gurus`
--

LOCK TABLES `is_mapel_gurus` WRITE;
/*!40000 ALTER TABLE `is_mapel_gurus` DISABLE KEYS */;
INSERT INTO `is_mapel_gurus` VALUES (3,1,1,14,1,3),(4,2,2,17,1,3),(5,1,3,15,1,3),(12,8,4,37,2,3),(13,8,5,1,2,3),(14,2,1,37,1,3),(15,5,1,37,1,NULL);
/*!40000 ALTER TABLE `is_mapel_gurus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `is_nilai`
--

DROP TABLE IF EXISTS `is_nilai`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `is_nilai` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `periode_id` int(11) NOT NULL,
  `aspek` enum('K','P') COLLATE utf8mb4_unicode_ci NOT NULL,
  `rombel_id` int(10) unsigned NOT NULL,
  `mapel_id` int(10) unsigned NOT NULL,
  `siswa_nis` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai` varchar(90) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kd_id` varchar(90) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `mapel_id` (`mapel_id`),
  KEY `rombel_id` (`rombel_id`),
  KEY `siswa_nis` (`siswa_nis`),
  CONSTRAINT `is_nilai_ibfk_1` FOREIGN KEY (`mapel_id`) REFERENCES `is_mapel` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `is_nilai_ibfk_2` FOREIGN KEY (`rombel_id`) REFERENCES `is_rombel` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `is_nilai_ibfk_3` FOREIGN KEY (`siswa_nis`) REFERENCES `is_siswa` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `is_nilai`
--

LOCK TABLES `is_nilai` WRITE;
/*!40000 ALTER TABLE `is_nilai` DISABLE KEYS */;
INSERT INTO `is_nilai` VALUES (84,3,'P',2,1,'12546','100','1','','2019-07-22 18:55:40','2019-07-22 18:58:42'),(85,3,'P',2,1,'12546','100','2','','2019-07-22 18:55:40','2019-07-22 18:58:42'),(86,3,'P',2,1,'12546','100','3','','2019-07-22 18:55:40','2019-07-22 18:58:42'),(87,3,'P',2,1,'21141','80','1','','2019-07-22 18:56:05','2019-07-22 18:58:42'),(88,3,'P',2,1,'21141','60','2','','2019-07-22 18:56:05','2019-07-22 18:58:42'),(89,3,'P',2,1,'21141','60','3','','2019-07-22 18:56:05','2019-07-22 18:58:42');
/*!40000 ALTER TABLE `is_nilai` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `is_nilaiakhir`
--

DROP TABLE IF EXISTS `is_nilaiakhir`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `is_nilaiakhir` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aspek` enum('P','K') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `siswa_nis` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nts` int(11) NOT NULL,
  `nas` int(11) NOT NULL,
  `rerata_nilai` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `siswa_nis` (`siswa_nis`),
  CONSTRAINT `is_nilaiakhir_ibfk_1` FOREIGN KEY (`siswa_nis`) REFERENCES `is_siswa` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `is_nilaiakhir`
--

LOCK TABLES `is_nilaiakhir` WRITE;
/*!40000 ALTER TABLE `is_nilaiakhir` DISABLE KEYS */;
INSERT INTO `is_nilaiakhir` VALUES (77,'P','12546',100,100,100),(78,'P','12546',100,100,100),(79,'P','12546',100,100,100),(80,'P','21141',60,100,72),(81,'P','21141',60,100,72),(82,'P','21141',60,100,72);
/*!40000 ALTER TABLE `is_nilaiakhir` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `is_periode`
--

DROP TABLE IF EXISTS `is_periode`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `is_periode` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `mulai` int(11) NOT NULL,
  `selesai` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `aktif` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `is_periode`
--

LOCK TABLES `is_periode` WRITE;
/*!40000 ALTER TABLE `is_periode` DISABLE KEYS */;
INSERT INTO `is_periode` VALUES (1,2018,2019,1,0),(2,2018,2019,2,0),(3,2019,2020,1,1),(4,2019,2020,2,0),(5,2017,2018,2,0);
/*!40000 ALTER TABLE `is_periode` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `is_rombel`
--

DROP TABLE IF EXISTS `is_rombel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `is_rombel` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `namaRombel` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan_id` int(11) NOT NULL,
  `tingkat` enum('10','11','12') COLLATE utf8mb4_unicode_ci NOT NULL,
  `periode_id` int(11) NOT NULL,
  `guru_id` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `is_rombel`
--

LOCK TABLES `is_rombel` WRITE;
/*!40000 ALTER TABLE `is_rombel` DISABLE KEYS */;
INSERT INTO `is_rombel` VALUES (1,'TKJ 1',1,'10',3,'21'),(2,'TKJ 2',1,'10',3,'15'),(3,'TKJ 1',1,'11',3,'25'),(4,'TKJ 2',1,'11',3,'32'),(5,'TKJ 1',1,'12',3,'18'),(6,'TKJ 2',1,'12',3,'19'),(7,'AK 1',2,'10',3,'20'),(8,'AK 2',2,'10',3,'21'),(9,'AK 3',2,'10',3,'31'),(10,'AK 1',2,'11',3,'28'),(12,'AK 2',2,'11',3,'37');
/*!40000 ALTER TABLE `is_rombel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `is_siswa`
--

DROP TABLE IF EXISTS `is_siswa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `is_siswa` (
  `nis` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nisn` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rombel_id` int(11) NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('L','P') COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`nis`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `is_siswa`
--

LOCK TABLES `is_siswa` WRITE;
/*!40000 ALTER TABLE `is_siswa` DISABLE KEYS */;
INSERT INTO `is_siswa` VALUES ('10233','9391546804',8,'Galar Irnanto Pranowo','Bima','1932-05-13','L','Hindu','Jr. Gambang No. 11, Pematangsiantar 11739, KalTim','2019-07-07 15:19:07','2019-07-21 06:02:43'),('12546','9545358715',2,'Ilham Saputra','Jambi','1998-09-22','L','Islam','Jambi','2019-06-27 11:41:36','2019-07-07 15:11:20'),('14560','9531638126',3,'Kasiyah Nabila Mayasari','Bitung','1935-12-18','P','Hindu','Dk. Sadang Serang No. 136, Banda Aceh 74917, DKI','2019-07-07 15:19:11','2019-07-07 15:19:11'),('14592','9742538683',3,'Jumadi Saputra','Bitung','1969-07-16','P','Kristen Katolik','Ki. Supomo No. 923, Banjarmasin 95690, SulSel','2019-07-07 15:19:05','2019-07-07 15:19:05'),('15468','9087420200',3,'Gilda Nabila Wahyuni','Semarang','1961-07-20','P','Islam','Jr. Sumpah Pemuda No. 281, Bontang 64758, KalTim','2019-07-07 15:19:08','2019-07-07 15:19:08'),('17147','9509233253',1,'Mustika Firgantoro','Ternate','1961-02-26','L','Kristen Protestan','Jln. Dipatiukur No. 599, Yogyakarta 26707, JaBar','2019-07-07 15:19:07','2019-07-07 15:19:07'),('19864','9973084387',1,'Tami Ella Wijayanti S.IP','Pasuruan','1947-07-21','P','Islam','Kpg. Dipatiukur No. 764, Sibolga 66206, Aceh','2019-07-07 15:19:07','2019-07-07 15:19:07'),('20721','9221487445',3,'Gamanto Permadi','Pontianak','2006-01-25','L','Buddha','Dk. Babadan No. 655, Cilegon 72526, NTB','2019-07-07 15:19:07','2019-07-07 15:19:07'),('21141','9750148307',2,'Patricia Rahayu','Padang','1991-12-05','L','Buddha','Jln. Basmol Raya No. 285, Depok 62257, Lampung','2019-07-07 15:19:07','2019-07-07 15:19:07'),('22049','9685352078',3,'Respati Samosir','Lubuklinggau','1984-03-01','L','Buddha','Dk. Bayan No. 151, Bogor 52257, SumSel','2019-07-07 15:19:08','2019-07-07 15:19:08'),('22351','9477486202',2,'Jaswadi Megantara','Pagar Alam','1938-10-26','L','Buddha','Jln. Suryo No. 939, Madiun 28153, Banten','2019-07-07 15:19:11','2019-07-07 15:19:11'),('24406','9755570663',2,'Umaya Umaya Sihombing','Subulussalam','1975-12-26','L','Islam','Jln. Samanhudi No. 202, Bima 90535, NTT','2019-07-07 15:19:05','2019-07-07 15:19:05'),('32244','9930360854',2,'Yunita Yolanda','Denpasar','1980-03-05','L','Kristen Katolik','Kpg. Abdullah No. 838, Makassar 70757, KalTim','2019-07-07 15:19:07','2019-07-07 15:19:07'),('40229','9033569776',2,'Eva Rahayu Puspita','Padang','2006-06-23','P','Kristen Protestan','Ds. Sukabumi No. 781, Lhokseumawe 24666, Bengkulu','2019-07-07 15:19:10','2019-07-07 15:19:10'),('46612','9090883185',2,'Jono Damanik S.Pt','Kendari','1957-07-17','L','Hindu','Dk. Bakau Griya Utama No. 546, Bukittinggi 32454, Aceh','2019-07-07 15:19:09','2019-07-07 15:19:09'),('47499','9982617209',2,'Nova Dewi Suryatmi','Pagar Alam','1965-03-21','L','Kristen Katolik','Ds. Karel S. Tubun No. 783, Bontang 21603, SulTeng','2019-07-07 15:19:09','2019-07-07 15:19:09'),('47829','9964444422',4,'Ulya Cici Usamah','Administrasi Jakarta Timur','2013-11-10','L','Kristen Katolik','Jr. Tambun No. 143, Parepare 95930, MalUt','2019-07-07 15:19:05','2019-07-07 15:19:05'),('47951','9910577070',2,'Bancar Elon Samosir','Tarakan','1970-12-24','L','Hindu','Jr. Pasirkoja No. 755, Tual 35908, Riau','2019-07-07 15:19:07','2019-07-07 15:19:07'),('48867','9484038524',3,'Gadang Saputra','Depok','1997-09-28','P','Buddha','Psr. Gremet No. 29, Ternate 67058, SumUt','2019-07-07 15:19:07','2019-07-07 15:19:07'),('49773','9369796898',2,'Danu Putra','Gunungsitoli','2009-11-19','P','Kristen Protestan','Jln. Villa No. 494, Cimahi 71666, JaBar','2019-07-07 15:19:10','2019-07-07 15:19:10'),('51174','9693609735',3,'Vanesa Almira Palastri M.Kom.','Bandung','1951-01-15','P','Kristen Protestan','Jr. Bank Dagang Negara No. 715, Malang 25518, Papua','2019-07-07 15:19:11','2019-07-07 15:19:11'),('52529','9988399359',2,'Elisa Padma Farida','Pekalongan','1999-02-26','L','Hindu','Gg. Suryo Pranoto No. 861, Makassar 20632, JaTim','2019-07-07 15:19:09','2019-07-07 15:19:09'),('57572','9069559054',1,'Adikara Putra','Bau-Bau','1939-08-21','L','Buddha','Gg. Merdeka No. 970, Administrasi Jakarta Utara 24797, SulBar','2019-07-07 15:19:07','2019-07-07 15:19:07'),('57946','9848890122',2,'Daliman Iswahyudi S.E.','Surakarta','2012-06-20','P','Kristen Protestan','Jr. Pelajar Pejuang 45 No. 510, Sungai Penuh 41994, Lampung','2019-07-07 15:19:10','2019-07-07 15:19:10'),('60461','9809814921',1,'Uda Dasa Wasita','Kediri','1991-04-25','P','Islam','Dk. Tambak No. 100, Sabang 66472, Lampung','2019-07-07 15:19:05','2019-07-07 15:19:05'),('61134','9221300671',2,'Maya Safitri','Metro','1967-12-02','L','Hindu','Psr. B.Agam 1 No. 224, Bekasi 87477, KalUt','2019-07-07 15:19:11','2019-07-07 15:19:11'),('61135','9095439069',4,'Queen Widya Yolanda S.Sos','Bukittinggi','2006-09-13','L','Buddha','Kpg. Reksoninten No. 400, Dumai 95281, MalUt','2019-07-07 15:19:07','2019-07-07 15:19:07'),('63785','9522043020',8,'Budi Hairyanto Ardianto','Bandar Lampung','1961-09-14','L','Kristen Protestan','Dk. Kebangkitan Nasional No. 661, Sukabumi 89955, KepR','2019-07-07 15:19:11','2019-07-07 15:19:11'),('67132','9031212766',3,'Sarah Puspita','Tebing Tinggi','1991-10-04','P','Kristen Protestan','Jln. Baung No. 240, Banjarbaru 99597, NTB','2019-07-07 15:19:08','2019-07-07 15:19:08'),('69124','9101526640',4,'Salsabila Zalindra Hassanah','Bukittinggi','1986-12-01','L','Hindu','Kpg. Labu No. 354, Pariaman 99764, SulTra','2019-07-07 15:19:08','2019-07-07 15:19:08'),('69584','9753816722',2,'Jati Emong Rajasa','Bogor','1992-08-17','P','Hindu','Jr. Nakula No. 517, Binjai 36345, KalSel','2019-07-07 15:19:09','2019-07-07 15:19:09'),('71089','9396557533',4,'Dipa Lasmanto Marbun','Tanjungbalai','1960-07-08','L','Islam','Jr. Sudiarto No. 772, Payakumbuh 91605, MalUt','2019-07-07 15:19:05','2019-07-07 15:19:05'),('73717','9498751106',4,'Mahesa Wahyu Latupono M.TI.','Payakumbuh','1925-01-19','P','Islam','Dk. Banda No. 848, Binjai 78211, KalTeng','2019-07-07 15:19:09','2019-07-07 15:19:09'),('74758','9698786270',4,'Lurhur Lasmanto Prasasta M.Kom.','Gunungsitoli','1958-03-04','L','Islam','Ds. Yosodipuro No. 333, Tegal 23795, KalUt','2019-07-07 15:19:08','2019-07-07 15:19:08'),('74952','9665466140',3,'Mujur Dagel Sinaga S.Gz','Surakarta','2018-03-31','L','Islam','Ds. Basuki Rahmat  No. 467, Medan 24548, KalTim','2019-07-07 15:19:05','2019-07-07 15:19:05'),('76659','9333350530',1,'Septi Siti Permata S.Sos','Manado','2003-03-31','P','Kristen Protestan','Jr. Honggowongso No. 576, Makassar 49331, SulTra','2019-07-07 15:19:09','2019-07-07 15:19:09'),('83217','9048422517',2,'Karen Nabila Lailasari M.Farm','Bitung','1956-12-22','P','Buddha','Dk. Padma No. 609, Bukittinggi 82544, SumBar','2019-07-07 15:19:05','2019-07-07 15:19:05'),('83860','9972627904',1,'Farah Wijayanti S.H.','Cirebon','1980-11-27','P','Kristen Protestan','Ds. Bahagia No. 985, Banda Aceh 97369, KalTeng','2019-07-07 15:19:08','2019-07-07 15:19:08'),('89597','9608039001',3,'Clara Iriana Wastuti','Sabang','1951-11-11','L','Islam','Jln. Dahlia No. 809, Palembang 56386, KalSel','2019-07-07 15:19:08','2019-07-07 15:19:08'),('89872','9210945693',3,'Ajimin Rajata S.E.I','Solok','1969-02-28','L','Hindu','Psr. Urip Sumoharjo No. 623, Sibolga 80874, PapBar','2019-07-07 15:19:05','2019-07-07 15:19:05'),('89927','9328010097',4,'Ilyas Gunawan','Tarakan','1931-11-10','P','Islam','Kpg. Astana Anyar No. 313, Pangkal Pinang 48741, Jambi','2019-07-07 15:19:11','2019-07-07 15:19:11'),('91280','9748537842',1,'Lanjar Kemba Latupono M.M.','Padangsidempuan','1946-11-16','L','Islam','Dk. Rajawali Timur No. 725, Pekanbaru 67391, KalBar','2019-07-07 15:19:08','2019-07-07 15:19:08'),('91482','9821753361',1,'Farhunnisa Ifa Suryatmi S.Gz','Pasuruan','2016-04-18','P','Kristen Katolik','Gg. Peta No. 635, Binjai 40170, MalUt','2019-07-07 15:19:11','2019-07-07 15:19:11'),('92415','9545358711',1,'Joko Saputro','Jambi','1998-02-25','L','Islam','Jambi','2019-07-07 14:44:58','2019-07-07 14:44:58'),('93330','9237948107',2,'Sari Laksmiwati','Gorontalo','2007-05-06','L','Islam','Dk. Gajah Mada No. 91, Binjai 67661, Bengkulu','2019-07-07 15:19:11','2019-07-07 15:19:11');
/*!40000 ALTER TABLE `is_siswa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'0000_00_00_000000_create_taggable_table',1),(2,'2014_07_02_230147_migration_cartalyst_sentinel',1),(3,'2014_10_04_174350_soft_delete_users',1),(4,'2014_12_10_011106_add_fields_to_user_table',1),(5,'2015_08_09_200015_create_blog_module_table',1),(6,'2015_08_11_064636_add_slug_to_blogs_table',1),(36,'2015_11_10_140011_create_files_table',2),(37,'2016_01_02_062647_create_tasks_table',2),(38,'2016_04_26_054601_create_datatables_table',2),(39,'2016_10_04_103149_add_fields_datatables_table',2),(40,'2017_09_29_113930_create_activity_log_table',2),(41,'2017_10_07_070138_create_countries_table',2),(42,'2017_10_24_130059_add_country_field',2),(43,'2018_03_06_063201_rename_user_state',2),(44,'2019_06_23_104016_create_gurus_table',2),(45,'2019_06_24_112406_create_siswas_table',3),(50,'2019_06_24_114359_create_rombels_table',4),(51,'2019_06_24_114811_create_jurusans_table',4),(52,'2019_06_24_114912_create_periodes_table',4),(53,'2019_06_24_114942_create_mapels_table',4),(54,'2019_06_26_075506_create_mapel_gurus_table',5),(56,'2019_07_08_000845_create_kompetensis_table',6);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `persistences`
--

DROP TABLE IF EXISTS `persistences`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `persistences` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `persistences_code_unique` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=177 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `persistences`
--

LOCK TABLES `persistences` WRITE;
/*!40000 ALTER TABLE `persistences` DISABLE KEYS */;
INSERT INTO `persistences` VALUES (4,1,'IObck6NCFeo0qaW59SvebXyOP72SKSSz','2019-06-23 03:30:14','2019-06-23 03:30:14'),(5,5,'18ziLgPBeOUiFvk6zxlS4E35dNRZOd9u','2019-06-23 10:27:39','2019-06-23 10:27:39'),(6,1,'1qHuqkLchb0Pn2QbPmT5plXzUBUyZk3Q','2019-06-23 10:28:16','2019-06-23 10:28:16'),(7,1,'znG433kMC0LA9cITdH5Sdz2I9J0Kf0hZ','2019-06-23 12:30:53','2019-06-23 12:30:53'),(8,1,'Wo56EiRo8uib0kpWbG5BuRbNprxKrFs4','2019-06-23 14:48:22','2019-06-23 14:48:22'),(9,1,'1BzTA3wKzp6k91uREi8ydJJhKDq6AYIN','2019-06-23 15:00:03','2019-06-23 15:00:03'),(10,1,'OIEmFIq1Yq1064OjRUUzNa90KyvISX5F','2019-06-23 18:43:43','2019-06-23 18:43:43'),(12,1,'1Z2HRsrUOkJIlQMZXWEjFHtwhOJKL6jv','2019-06-23 19:54:54','2019-06-23 19:54:54'),(13,1,'Yq4GUT23uscRxBqbRFvtA2QOktJXhXR3','2019-06-24 03:09:32','2019-06-24 03:09:32'),(14,1,'bStyJCrikvsoALRSGdiLs07hA4UWT1rc','2019-06-24 03:25:10','2019-06-24 03:25:10'),(15,1,'pBs3uiMNfXBmLWPwuYu81l01YYm51gVJ','2019-06-25 09:41:51','2019-06-25 09:41:51'),(16,1,'YvL5DIBTRzgJbdIAVNNiBfazzxw649Y1','2019-06-25 09:50:56','2019-06-25 09:50:56'),(17,1,'0Axlj4VpVug7zCKOhz55KNQSTwxs8EWA','2019-06-25 09:57:25','2019-06-25 09:57:25'),(18,1,'SSPB7PAAQPuzjYxYJ0EU2iNCsBJhBjxW','2019-06-25 12:22:25','2019-06-25 12:22:25'),(19,1,'C1iAmqsY6ClRlwU1stoSYdohUFX3XLSq','2019-06-25 13:17:09','2019-06-25 13:17:09'),(20,1,'pgtU6bAzR9MdEK2pvqbjJ4wRkWElo9RY','2019-06-25 16:58:20','2019-06-25 16:58:20'),(25,1,'JtFTeVLSYx32FJNsJJewxl11dHjA9RES','2019-06-25 18:28:21','2019-06-25 18:28:21'),(31,1,'rTHRxQPFl4CJk5XFElvqbR4SLwECNV91','2019-06-25 19:27:49','2019-06-25 19:27:49'),(32,1,'5Kw1vxqc9pGr0fDGG1QkVQH1hUkNhRHC','2019-06-25 22:58:18','2019-06-25 22:58:18'),(33,1,'TskCiNuKYb1LqcUkSRZVjfdFYQIzWYtS','2019-06-26 19:38:57','2019-06-26 19:38:57'),(34,1,'GYF8u7rdj2ij8doA9aXg2teUkGcXXwr5','2019-06-26 23:27:11','2019-06-26 23:27:11'),(37,1,'2SdIVaU4hgPE4UrPi5yBupuXR6bj0EjQ','2019-06-27 06:50:39','2019-06-27 06:50:39'),(38,1,'mAur8akzjbyk5RVefGk3X8AylJSzuREf','2019-06-27 10:04:51','2019-06-27 10:04:51'),(41,1,'yjZChYq9Sf2cHxE0mPrepUTngbbBANKK','2019-06-27 16:19:24','2019-06-27 16:19:24'),(42,1,'8YNn8i0R7r7pdXLREmKUxUKHUF8a8Ful','2019-06-27 20:04:00','2019-06-27 20:04:00'),(43,1,'stjfXBs71wwXe90JVp7uj7DOmsVMPLxC','2019-06-27 22:20:11','2019-06-27 22:20:11'),(45,1,'Wbb5qWLUuoQBvsiq6zYQpSIcjeercih3','2019-06-27 22:57:24','2019-06-27 22:57:24'),(49,1,'7GX4mHOZBSJAOX33geLPyz7MVus2mG5q','2019-06-27 23:19:19','2019-06-27 23:19:19'),(54,1,'hJ0UiF7jnAJkFg2JGP6G8p2Ng6v5tDyi','2019-06-27 23:27:46','2019-06-27 23:27:46'),(55,1,'NLggw0a0DwjAv5ACbEuYvr2RkHxo9EFO','2019-06-28 12:23:09','2019-06-28 12:23:09'),(59,1,'ccYgu38OsUqziCPVk57j4aEAtTrduyym','2019-06-28 13:00:53','2019-06-28 13:00:53'),(60,1,'he66vl5TF6DhwJ141bwiNVivpCBUwjnA','2019-06-28 17:50:57','2019-06-28 17:50:57'),(61,1,'X4fT1mwgpAdIuUoj8fGc89P4StFIzsEN','2019-06-30 14:04:07','2019-06-30 14:04:07'),(62,1,'bygx0Oi3kWf9eH29HmYfGm6YfVPA3tNf','2019-06-30 19:57:06','2019-06-30 19:57:06'),(63,1,'D8kEtoc5ZkdF631CfPrcOGzJ7IOIO242','2019-06-30 19:57:08','2019-06-30 19:57:08'),(64,1,'bI1b2WEt5MlXcDwY46fRDaRjHkN7Eifj','2019-07-01 05:17:32','2019-07-01 05:17:32'),(65,1,'YLUmf82Lce4RusaPYETJF4P91eQjMuUU','2019-07-01 16:14:10','2019-07-01 16:14:10'),(66,1,'WxX24qEuUgfDACQCliwBjUieIsE7syYy','2019-07-02 00:24:34','2019-07-02 00:24:34'),(67,1,'BdIJWhrh4FmYuRz10ARgbL3PS7hIXc9s','2019-07-02 06:48:34','2019-07-02 06:48:34'),(68,1,'75wOLKOda7jY2wbgnPrkWsPx1Hjlt9t0','2019-07-03 02:44:30','2019-07-03 02:44:30'),(69,1,'ki3l5IFfoTIbWnsEiHYr8L0TF8EBCCbh','2019-07-03 17:40:32','2019-07-03 17:40:32'),(70,1,'8oCfVRCuit6mloJ6MWALGoL8a5OEcnqv','2019-07-04 16:21:28','2019-07-04 16:21:28'),(71,1,'uPX9FUpSDR16LHHjbc0G2v6E9qui1m5n','2019-07-04 16:25:49','2019-07-04 16:25:49'),(72,1,'Rc4GLIeChAbfZ7p4t6U66sAVxPTaiBVI','2019-07-04 16:31:52','2019-07-04 16:31:52'),(74,1,'dmgKLbqnvV75obk5FiSWS6bffvZIxEXR','2019-07-06 01:35:57','2019-07-06 01:35:57'),(75,1,'FdBpqTXRlnPz40Y1dPE9cEVMPlhRWeCg','2019-07-06 01:38:20','2019-07-06 01:38:20'),(77,1,'HAfZZmopixkjzJ6zTnGBzTxq8IYXm8HZ','2019-07-06 02:40:15','2019-07-06 02:40:15'),(80,1,'XVM24niNmGwWHSVYe1IAEnnxWC7BK6uv','2019-07-06 03:34:31','2019-07-06 03:34:31'),(85,1,'cHFpsG5PISAKUnHbLeoPcmF1tdUzLnQp','2019-07-06 07:51:55','2019-07-06 07:51:55'),(88,2,'3Rie9wDmSPKySia6KjaYSmnmbZIaRPcw','2019-07-06 23:04:01','2019-07-06 23:04:01'),(89,2,'6GjOkZQeENt4XZ3AfJD5osVY4NapT62K','2019-07-07 00:34:18','2019-07-07 00:34:18'),(93,2,'RGCxrLBGOYNA42f1eGB7iam45HVMFk7j','2019-07-07 14:00:27','2019-07-07 14:00:27'),(97,2,'mcqdAXgqg6MkU6N0EGxrLexux4W5LXbR','2019-07-07 18:05:21','2019-07-07 18:05:21'),(99,1,'2UEmr2HAeVyKMGklVq53snIE3gowwHI2','2019-07-08 01:54:12','2019-07-08 01:54:12'),(100,1,'X6d8Wa9u75sqjs0R5OXaQQ3SRFQPBvMS','2019-07-08 02:25:37','2019-07-08 02:25:37'),(103,24,'VuXDmXjMp0JOwFVZrVPt3u8cX0kChw0S','2019-07-08 04:18:55','2019-07-08 04:18:55'),(104,2,'8dmR8CKSIR7JTICt70nlSODiw6JAM7Ui','2019-07-08 07:28:59','2019-07-08 07:28:59'),(105,1,'qtZw3o2FcUWuu89ene8JIrCKNRu7TMBY','2019-07-11 02:07:02','2019-07-11 02:07:02'),(108,1,'ioPc80aAFUP1Dy704fcOnGdmXuIHkgm8','2019-07-11 07:37:10','2019-07-11 07:37:10'),(112,1,'QGNC0weTnjLY7fRg8DyZbCcUoFa1BZi8','2019-07-12 09:22:51','2019-07-12 09:22:51'),(121,2,'tvxBiFNFPITWOupeVzFvXWOe1JNQCpv5','2019-07-13 11:14:54','2019-07-13 11:14:54'),(122,2,'v5rhaX9QOIqT91OzN6sIpi32cxPDZvkb','2019-07-15 01:14:48','2019-07-15 01:14:48'),(126,8,'g7JWbXrLBiGTwgFF6FXCuqhQig0BWfKs','2019-07-15 03:49:12','2019-07-15 03:49:12'),(129,8,'qiUK7hVCJocvEv9KK2ZbRCLIkn3ww8X1','2019-07-15 07:36:45','2019-07-15 07:36:45'),(133,8,'b7TqbQ4cDqA85GMbcaH7M5fWfmCgqxnD','2019-07-15 12:33:26','2019-07-15 12:33:26'),(140,8,'h88VSHqeH8ck1TrL8aP2LXcLqr9EVPgJ','2019-07-16 04:39:53','2019-07-16 04:39:53'),(142,8,'9KwXVy5mv54RQFnIMKNo77kzVA3xZn4W','2019-07-16 08:03:26','2019-07-16 08:03:26'),(145,8,'MB7v6B9wRh4TiPIFWYiidGqsqC79Y14R','2019-07-16 09:47:46','2019-07-16 09:47:46'),(149,8,'Hi5TNaLhmXtALhuXSynlWG6STTTlDeDr','2019-07-18 16:19:50','2019-07-18 16:19:50'),(150,8,'aogrYELxobsQlyX5DpALZn1hqTOnFClV','2019-07-19 19:14:01','2019-07-19 19:14:01'),(151,8,'1zBgg61v3YzeGoqJA4AJBWbTreTzsqhZ','2019-07-19 23:35:57','2019-07-19 23:35:57'),(152,8,'LYChKTdyYnaU4OTcflSBreu6T1Br9IGZ','2019-07-20 02:17:38','2019-07-20 02:17:38'),(153,8,'BvJtkRAe2Eg4QbNMF9vYzSVXKOaspM79','2019-07-20 07:29:28','2019-07-20 07:29:28'),(154,8,'gzFGolEkCHwoNLUmSHAvseDaz8dzcmgW','2019-07-20 11:10:01','2019-07-20 11:10:01'),(155,8,'Nr0jbqeTavXmUaAUhPaZeC6YqKq1o3tv','2019-07-20 13:11:22','2019-07-20 13:11:22'),(156,8,'j0IdzoCpv2sJz28tFOfu532tsLak9ge3','2019-07-20 13:25:16','2019-07-20 13:25:16'),(158,1,'cDym78jDziOIDXnC85RKRLotMUnwghxx','2019-07-20 13:52:57','2019-07-20 13:52:57'),(160,1,'hI8Li3hbGzWnVOHhFDdh6TKGHr6q4K0D','2019-07-20 15:24:18','2019-07-20 15:24:18'),(161,1,'yBhDzkyB9NtFc67gJxpDsDbll4eQsyny','2019-07-20 15:36:28','2019-07-20 15:36:28'),(163,8,'qzsfiVoa96N9UoAPnPiMHVDnSmIT86J8','2019-07-20 15:46:58','2019-07-20 15:46:58'),(164,1,'PtsVtC1RtGhERvGXsEZjAwrSn4L2Pw4F','2019-07-20 16:15:57','2019-07-20 16:15:57'),(165,8,'v3SVjuACIhMnJPnWfCs8pjsUdlXRmgjk','2019-07-21 05:21:42','2019-07-21 05:21:42'),(166,1,'ZlFkI4rAfSxAq4aLaoH2Df7r3EwS6eMD','2019-07-21 05:43:06','2019-07-21 05:43:06'),(167,1,'fHA4H5ogaUQTJQxVNTCSpoD1EOMjbCbQ','2019-07-21 05:58:15','2019-07-21 05:58:15'),(168,1,'yJEFYNd3MU2EwO6RDKYAUvdNXRMwloEQ','2019-07-21 06:10:02','2019-07-21 06:10:02'),(170,8,'qroaaVtzoHO5wpM8qBix8dPGOJwgznKf','2019-07-21 11:42:09','2019-07-21 11:42:09'),(171,1,'dcZ94CIkIjyP4SIeRzTQrqm32CcTbHxB','2019-07-21 13:43:04','2019-07-21 13:43:04'),(172,8,'ibt6tn0IBXIigCDpmaYMI92iKUTxKvpV','2019-07-22 07:43:01','2019-07-22 07:43:01'),(173,8,'fLN2Rrq3N4hmljeA0hUbl0kwxdcznrzJ','2019-07-22 08:10:58','2019-07-22 08:10:58'),(174,8,'aFeWRkblww8oCLWdmxjQK6X2QOnazxIq','2019-07-22 10:47:02','2019-07-22 10:47:02'),(175,8,'2Fz5txNoLp1jnnynDkIYr3KViP0bkPLX','2019-07-22 15:03:33','2019-07-22 15:03:33'),(176,8,'qrCqaf5t2WAfH8Z2sbmYt6njZ49ZiKAu','2019-07-22 19:08:52','2019-07-22 19:08:52');
/*!40000 ALTER TABLE `persistences` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reminders`
--

DROP TABLE IF EXISTS `reminders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reminders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reminders`
--

LOCK TABLES `reminders` WRITE;
/*!40000 ALTER TABLE `reminders` DISABLE KEYS */;
/*!40000 ALTER TABLE `reminders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_users`
--

DROP TABLE IF EXISTS `role_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role_users` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  CONSTRAINT `role_users_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_users`
--

LOCK TABLES `role_users` WRITE;
/*!40000 ALTER TABLE `role_users` DISABLE KEYS */;
INSERT INTO `role_users` VALUES (1,1,'2019-06-23 03:29:43','2019-06-23 03:29:43'),(2,2,'2019-06-23 03:29:44','2019-06-23 03:29:44'),(5,2,'2019-07-13 08:48:44','2019-07-13 08:48:44'),(6,2,'2019-07-13 10:29:18','2019-07-13 10:29:18'),(8,2,'2019-07-13 10:44:19','2019-07-13 10:44:19'),(10,1,'2019-07-16 04:03:02','2019-07-16 04:03:02'),(14,2,'2019-07-21 07:05:37','2019-07-21 07:05:37');
/*!40000 ALTER TABLE `role_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'admin','Admin','{\"admin\":1}','2019-06-23 03:29:43','2019-06-23 03:29:43'),(2,'guru','Guru',NULL,'2019-06-23 03:29:43','2019-06-23 03:29:43');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tasks`
--

DROP TABLE IF EXISTS `tasks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tasks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `finished` tinyint(4) NOT NULL DEFAULT '0',
  `task_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `task_deadline` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tasks`
--

LOCK TABLES `tasks` WRITE;
/*!40000 ALTER TABLE `tasks` DISABLE KEYS */;
INSERT INTO `tasks` VALUES (1,1,0,'Belajar','2019-06-30','2019-06-25 18:39:13','2019-06-25 19:32:25');
/*!40000 ALTER TABLE `tasks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `throttle`
--

DROP TABLE IF EXISTS `throttle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `throttle` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `throttle_user_id_index` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `throttle`
--

LOCK TABLES `throttle` WRITE;
/*!40000 ALTER TABLE `throttle` DISABLE KEYS */;
INSERT INTO `throttle` VALUES (1,NULL,'global',NULL,'2019-06-22 19:03:58','2019-06-22 19:03:58'),(2,NULL,'ip','127.0.0.1','2019-06-22 19:03:58','2019-06-22 19:03:58'),(3,NULL,'global',NULL,'2019-06-23 03:27:23','2019-06-23 03:27:23'),(4,NULL,'ip','127.0.0.1','2019-06-23 03:27:23','2019-06-23 03:27:23'),(5,NULL,'global',NULL,'2019-06-23 03:27:27','2019-06-23 03:27:27'),(6,NULL,'ip','127.0.0.1','2019-06-23 03:27:27','2019-06-23 03:27:27'),(7,NULL,'global',NULL,'2019-06-23 19:47:36','2019-06-23 19:47:36'),(8,NULL,'ip','127.0.0.1','2019-06-23 19:47:36','2019-06-23 19:47:36'),(9,2,'user',NULL,'2019-06-23 19:47:36','2019-06-23 19:47:36'),(10,NULL,'global',NULL,'2019-06-25 17:19:32','2019-06-25 17:19:32'),(11,NULL,'ip','127.0.0.1','2019-06-25 17:19:33','2019-06-25 17:19:33'),(12,2,'user',NULL,'2019-06-25 17:19:33','2019-06-25 17:19:33'),(13,NULL,'global',NULL,'2019-06-27 06:45:50','2019-06-27 06:45:50'),(14,NULL,'ip','127.0.0.1','2019-06-27 06:45:50','2019-06-27 06:45:50'),(15,NULL,'global',NULL,'2019-06-27 06:45:58','2019-06-27 06:45:58'),(16,NULL,'ip','127.0.0.1','2019-06-27 06:45:58','2019-06-27 06:45:58'),(17,NULL,'global',NULL,'2019-06-27 06:46:12','2019-06-27 06:46:12'),(18,NULL,'ip','127.0.0.1','2019-06-27 06:46:12','2019-06-27 06:46:12'),(19,NULL,'global',NULL,'2019-06-27 06:46:17','2019-06-27 06:46:17'),(20,NULL,'ip','127.0.0.1','2019-06-27 06:46:17','2019-06-27 06:46:17'),(21,NULL,'global',NULL,'2019-07-06 03:36:04','2019-07-06 03:36:04'),(22,NULL,'ip','192.168.20.10','2019-07-06 03:36:04','2019-07-06 03:36:04'),(23,NULL,'global',NULL,'2019-07-06 03:36:12','2019-07-06 03:36:12'),(24,NULL,'ip','192.168.20.10','2019-07-06 03:36:12','2019-07-06 03:36:12'),(25,NULL,'global',NULL,'2019-07-06 03:36:27','2019-07-06 03:36:27'),(26,NULL,'ip','192.168.20.10','2019-07-06 03:36:27','2019-07-06 03:36:27'),(27,NULL,'global',NULL,'2019-07-07 14:00:11','2019-07-07 14:00:11'),(28,NULL,'ip','192.168.20.20','2019-07-07 14:00:11','2019-07-07 14:00:11'),(29,NULL,'global',NULL,'2019-07-12 08:51:16','2019-07-12 08:51:16'),(30,NULL,'ip','::1','2019-07-12 08:51:17','2019-07-12 08:51:17'),(31,NULL,'global',NULL,'2019-07-15 03:48:12','2019-07-15 03:48:12'),(32,NULL,'ip','::1','2019-07-15 03:48:12','2019-07-15 03:48:12'),(33,8,'user',NULL,'2019-07-15 03:48:12','2019-07-15 03:48:12'),(34,NULL,'global',NULL,'2019-07-15 03:48:23','2019-07-15 03:48:23'),(35,NULL,'ip','::1','2019-07-15 03:48:23','2019-07-15 03:48:23'),(36,8,'user',NULL,'2019-07-15 03:48:23','2019-07-15 03:48:23'),(37,NULL,'global',NULL,'2019-07-15 03:48:31','2019-07-15 03:48:31'),(38,NULL,'ip','::1','2019-07-15 03:48:31','2019-07-15 03:48:31'),(39,8,'user',NULL,'2019-07-15 03:48:31','2019-07-15 03:48:31'),(40,NULL,'global',NULL,'2019-07-15 03:48:53','2019-07-15 03:48:53'),(41,NULL,'ip','::1','2019-07-15 03:48:53','2019-07-15 03:48:53'),(42,8,'user',NULL,'2019-07-15 03:48:53','2019-07-15 03:48:53'),(43,NULL,'global',NULL,'2019-07-15 03:49:02','2019-07-15 03:49:02'),(44,NULL,'ip','::1','2019-07-15 03:49:02','2019-07-15 03:49:02'),(45,8,'user',NULL,'2019-07-15 03:49:02','2019-07-15 03:49:02'),(46,NULL,'global',NULL,'2019-07-16 04:36:35','2019-07-16 04:36:35'),(47,NULL,'ip','::1','2019-07-16 04:36:35','2019-07-16 04:36:35'),(48,NULL,'global',NULL,'2019-07-16 04:36:46','2019-07-16 04:36:46'),(49,NULL,'ip','::1','2019-07-16 04:36:46','2019-07-16 04:36:46'),(50,1,'user',NULL,'2019-07-16 04:36:46','2019-07-16 04:36:46'),(51,NULL,'global',NULL,'2019-07-16 04:37:04','2019-07-16 04:37:04'),(52,NULL,'ip','::1','2019-07-16 04:37:04','2019-07-16 04:37:04'),(53,1,'user',NULL,'2019-07-16 04:37:04','2019-07-16 04:37:04'),(54,NULL,'global',NULL,'2019-07-16 04:37:11','2019-07-16 04:37:11'),(55,NULL,'ip','::1','2019-07-16 04:37:11','2019-07-16 04:37:11'),(56,1,'user',NULL,'2019-07-16 04:37:11','2019-07-16 04:37:11'),(57,NULL,'global',NULL,'2019-07-16 04:37:19','2019-07-16 04:37:19'),(58,NULL,'ip','::1','2019-07-16 04:37:19','2019-07-16 04:37:19'),(59,1,'user',NULL,'2019-07-16 04:37:20','2019-07-16 04:37:20'),(60,NULL,'global',NULL,'2019-07-20 13:25:08','2019-07-20 13:25:08'),(61,NULL,'ip','10.13.165.239','2019-07-20 13:25:08','2019-07-20 13:25:08'),(62,NULL,'global',NULL,'2019-07-20 15:35:45','2019-07-20 15:35:45'),(63,NULL,'ip','115.178.192.244','2019-07-20 15:35:45','2019-07-20 15:35:45'),(64,NULL,'global',NULL,'2019-07-20 15:38:23','2019-07-20 15:38:23'),(65,NULL,'ip','::1','2019-07-20 15:38:23','2019-07-20 15:38:23'),(66,NULL,'global',NULL,'2019-07-20 15:38:32','2019-07-20 15:38:32'),(67,NULL,'ip','::1','2019-07-20 15:38:32','2019-07-20 15:38:32');
/*!40000 ALTER TABLE `throttle` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `guru_id` int(10) unsigned DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci,
  `last_login` timestamp NULL DEFAULT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `gender` enum('L','P') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pic` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `guru_id` (`guru_id`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`guru_id`) REFERENCES `is_guru` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,NULL,'admin@admin.com','admin','$2y$10$Bvnvz2AN/OnO6jVfcdn0VOUoHXYC45cT4euaWnCtP5.mCLG9wOZeO',NULL,'2019-07-21 13:43:04','Ilham','2019-06-23 03:29:43','2019-07-21 13:43:04','P','ebMfH2q1wO.jpeg'),(2,NULL,'user@user.com','user','$2y$10$NnVrNKJQ0ahjpNRGF1zgfuQG4mdh6HoF1JqHcgwYy90OKqLodiYim',NULL,'2019-07-20 15:38:42','Pengguna','2019-06-23 03:29:43','2019-07-20 15:38:42','L',NULL),(5,NULL,'joko@gmail.com','joko','$2y$10$LD2JGglSNDghzCs6jmS0LeS/A9pwA.3wTqW0XAwFJHYEUD0U.9Onu',NULL,'2019-07-13 09:56:53','joko','2019-07-13 08:48:44','2019-07-13 09:56:53','L',NULL),(6,NULL,'ramdan@yahoo.com','ramdan12','$2y$10$bKDN9iLn0RqShs/0s7UAU.oq.c4llHpaeIQNQnCzs0ikWdfZyBtv.',NULL,NULL,'Ramdan','2019-07-13 10:29:18','2019-07-13 10:29:18','P',NULL),(8,37,'riawan@gmail.com','riawan','$2y$10$3.P6GeDAJLM6LPe5GMuyq.uWdNENxpJ1Ty.U4RiJGzK7MvBCGV3pO',NULL,'2019-07-22 19:08:52','Riawan','2019-07-13 10:44:19','2019-07-22 19:08:52','P',NULL),(10,NULL,'admin2@admin.com','admin2','$2y$10$yNhFbCjYyPRUCFEMiOoLPOiTW4vejDtfCaN8gGq1ojSragS8ybGl6',NULL,'2019-07-16 04:03:38','Admin Kedua','2019-07-16 04:03:01','2019-07-16 04:03:38','L','4d1z3eoNfx.jpeg'),(14,NULL,'dini@gmail.com','dini123','$2y$10$Xcb07XyGUngKl5J1/9x76u0hnRUiXtPGaaxSxge2c8roBwy5KFJqy',NULL,NULL,'Dini','2019-07-21 07:05:37','2019-07-21 07:05:37','P',NULL);
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

-- Dump completed on 2019-07-23  2:31:56
