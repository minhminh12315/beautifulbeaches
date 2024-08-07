-- MySQL dump 10.13  Distrib 8.0.36, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: beautifulbeaches
-- ------------------------------------------------------
-- Server version	8.0.36

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `beach_images`
--

DROP TABLE IF EXISTS `beach_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `beach_images` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `beach_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `beach_images_beach_id_foreign` (`beach_id`),
  CONSTRAINT `beach_images_beach_id_foreign` FOREIGN KEY (`beach_id`) REFERENCES `beaches` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=377 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `beach_images`
--

LOCK TABLES `beach_images` WRITE;
/*!40000 ALTER TABLE `beach_images` DISABLE KEYS */;
INSERT INTO `beach_images` VALUES (1,'assets/images/beachesNorth_1.jpg',1,'2024-08-04 15:24:00','2024-08-04 15:24:00'),(2,'assets/images/beachesNorth_2.jpg',1,'2024-08-04 15:24:00','2024-08-04 15:24:00'),(3,'assets/images/beachesNorth_3.jpg',1,'2024-08-04 15:24:00','2024-08-04 15:24:00'),(4,'assets/images/beachesNorth_4.jpg',1,'2024-08-04 15:24:00','2024-08-04 15:24:00'),(5,'assets/images/beachesNorth_5.jpg',2,'2024-08-04 15:24:00','2024-08-04 15:24:00'),(6,'assets/images/beachesNorth_6.jpg',2,'2024-08-04 15:24:00','2024-08-04 15:24:00'),(7,'assets/images/beachesNorth_7.jpg',2,'2024-08-04 15:24:00','2024-08-04 15:24:00'),(8,'assets/images/beachesNorth_8.jpg',2,'2024-08-04 15:24:00','2024-08-04 15:24:00'),(9,'assets/images/beachesNorth_9.jpg',3,'2024-08-04 15:24:00','2024-08-04 15:24:00'),(10,'assets/images/beachesNorth_10.jpg',3,'2024-08-04 15:24:00','2024-08-04 15:24:00'),(11,'assets/images/beachesNorth_11.jpg',3,'2024-08-04 15:24:00','2024-08-04 15:24:00'),(12,'assets/images/beachesNorth_12.jpg',3,'2024-08-04 15:24:00','2024-08-04 15:24:00'),(13,'assets/images/beachesNorth_13.jpg',4,'2024-08-04 15:24:00','2024-08-04 15:24:00'),(14,'assets/images/beachesNorth_14.jpg',4,'2024-08-04 15:24:00','2024-08-04 15:24:00'),(15,'assets/images/beachesNorth_15.jpg',4,'2024-08-04 15:24:00','2024-08-04 15:24:00'),(16,'assets/images/beachesNorth_16.jpg',4,'2024-08-04 15:24:00','2024-08-04 15:24:00'),(17,'assets/images/beachesNorth_17.jpg',5,'2024-08-04 15:24:00','2024-08-04 15:24:00'),(18,'assets/images/beachesNorth_18.jpg',5,'2024-08-04 15:24:00','2024-08-04 15:24:00'),(19,'assets/images/beachesNorth_19.jpg',5,'2024-08-04 15:24:00','2024-08-04 15:24:00'),(20,'assets/images/beachesNorth_20.jpg',5,'2024-08-04 15:24:00','2024-08-04 15:24:00'),(21,'assets/images/beachesNorth_21.jpg',6,'2024-08-04 15:24:00','2024-08-04 15:24:00'),(22,'assets/images/beachesNorth_22.jpg',6,'2024-08-04 15:24:00','2024-08-04 15:24:00'),(23,'assets/images/beachesNorth_23.jpg',6,'2024-08-04 15:24:00','2024-08-04 15:24:00'),(24,'assets/images/beachesNorth_24.jpg',6,'2024-08-04 15:24:00','2024-08-04 15:24:00'),(25,'assets/images/beachesNorth_25.jpg',7,'2024-08-04 15:24:00','2024-08-04 15:24:00'),(26,'assets/images/beachesNorth_26.jpg',7,'2024-08-04 15:24:00','2024-08-04 15:24:00'),(27,'assets/images/beachesNorth_27.jpg',7,'2024-08-04 15:24:00','2024-08-04 15:24:00'),(28,'assets/images/beachesNorth_28.jpg',7,'2024-08-04 15:24:00','2024-08-04 15:24:00'),(29,'assets/images/beachesNorth_29.jpg',8,'2024-08-04 15:24:00','2024-08-04 15:24:00'),(30,'assets/images/beachesNorth_30.jpg',8,'2024-08-04 15:24:00','2024-08-04 15:24:00'),(31,'assets/images/beachesNorth_31.jpg',8,'2024-08-04 15:24:00','2024-08-04 15:24:00'),(32,'assets/images/beachesNorth_32.jpg',8,'2024-08-04 15:24:00','2024-08-04 15:24:00'),(33,'assets/images/beachesNorth_33.jpg',9,'2024-08-04 15:24:00','2024-08-04 15:24:00'),(34,'assets/images/beachesNorth_34.jpg',9,'2024-08-04 15:24:00','2024-08-04 15:24:00'),(35,'assets/images/beachesNorth_35.jpg',9,'2024-08-04 15:24:00','2024-08-04 15:24:00'),(36,'assets/images/beachesNorth_36.jpg',9,'2024-08-04 15:24:00','2024-08-04 15:24:00'),(37,'assets/images/beachesNorth_37.jpg',10,'2024-08-04 15:24:00','2024-08-04 15:24:00'),(38,'assets/images/beachesNorth_38.jpg',10,'2024-08-04 15:24:00','2024-08-04 15:24:00'),(39,'assets/images/beachesNorth_39.jpg',10,'2024-08-04 15:24:00','2024-08-04 15:24:00'),(40,'assets/images/beachesNorth_40.jpg',10,'2024-08-04 15:24:00','2024-08-04 15:24:00'),(41,'assets/images/beachesNorth_41.jpg',11,'2024-08-04 15:24:00','2024-08-04 15:24:00'),(42,'assets/images/beachesNorth_42.jpg',11,'2024-08-04 15:24:00','2024-08-04 15:24:00'),(43,'assets/images/beachesNorth_43.jpg',11,'2024-08-04 15:24:00','2024-08-04 15:24:00'),(44,'assets/images/beachesNorth_44.jpg',11,'2024-08-04 15:24:00','2024-08-04 15:24:00'),(45,'assets/images/beachesNorth_45.jpg',12,'2024-08-04 15:24:00','2024-08-04 15:24:00'),(46,'assets/images/beachesNorth_46.jpg',12,'2024-08-04 15:24:00','2024-08-04 15:24:00'),(47,'assets/images/beachesNorth_47.jpg',12,'2024-08-04 15:24:00','2024-08-04 15:24:00'),(48,'assets/images/beachesNorth_48.jpg',12,'2024-08-04 15:24:00','2024-08-04 15:24:00'),(49,'assets/images/beachesCentral_1.jpg',13,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(50,'assets/images/beachesCentral_2.jpg',13,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(51,'assets/images/beachesCentral_3.jpg',13,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(52,'assets/images/beachesCentral_4.jpg',13,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(53,'assets/images/beachesCentral_5.jpg',14,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(54,'assets/images/beachesCentral_6.jpg',14,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(55,'assets/images/beachesCentral_7.jpg',14,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(56,'assets/images/beachesCentral_8.jpg',14,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(57,'assets/images/beachesCentral_9.jpg',15,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(58,'assets/images/beachesCentral_10.jpg',15,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(59,'assets/images/beachesCentral_11.jpg',15,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(60,'assets/images/beachesCentral_12.jpg',15,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(61,'assets/images/beachesCentral_13.jpg',16,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(62,'assets/images/beachesCentral_14.jpg',16,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(63,'assets/images/beachesCentral_15.jpg',16,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(64,'assets/images/beachesCentral_16.jpg',16,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(65,'assets/images/beachesCentral_17.jpg',17,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(66,'assets/images/beachesCentral_18.jpg',17,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(67,'assets/images/beachesCentral_19.jpg',17,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(68,'assets/images/beachesCentral_20.jpg',17,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(69,'assets/images/beachesCentral_21.jpg',18,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(70,'assets/images/beachesCentral_22.jpg',18,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(71,'assets/images/beachesCentral_23.jpg',18,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(72,'assets/images/beachesCentral_24.jpg',18,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(73,'assets/images/beachesCentral_25.jpg',19,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(74,'assets/images/beachesCentral_26.jpg',19,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(75,'assets/images/beachesCentral_27.jpg',19,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(76,'assets/images/beachesCentral_28.jpg',19,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(77,'assets/images/beachesCentral_29.jpg',20,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(78,'assets/images/beachesCentral_30.jpg',20,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(79,'assets/images/beachesCentral_31.jpg',20,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(80,'assets/images/beachesCentral_32.jpg',20,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(81,'assets/images/beachesCentral_33.jpg',21,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(82,'assets/images/beachesCentral_34.jpg',21,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(83,'assets/images/beachesCentral_35.jpg',21,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(84,'assets/images/beachesCentral_36.jpg',21,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(85,'assets/images/beachesCentral_37.jpg',22,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(86,'assets/images/beachesCentral_38.jpg',22,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(87,'assets/images/beachesCentral_39.jpg',22,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(88,'assets/images/beachesCentral_40.jpg',22,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(89,'assets/images/beachesCentral_41.jpg',23,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(90,'assets/images/beachesCentral_42.jpg',23,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(91,'assets/images/beachesCentral_43.jpg',23,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(92,'assets/images/beachesCentral_44.jpg',23,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(93,'assets/images/beachesCentral_45.jpg',24,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(94,'assets/images/beachesCentral_46.jpg',24,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(95,'assets/images/beachesCentral_47.jpg',24,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(96,'assets/images/beachesCentral_48.jpg',24,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(97,'assets/images/beachesCentral_49.jpg',25,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(98,'assets/images/beachesCentral_50.jpg',25,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(99,'assets/images/beachesCentral_51.jpg',25,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(100,'assets/images/beachesCentral_52.jpg',25,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(101,'assets/images/beachesCentral_53.jpg',26,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(102,'assets/images/beachesCentral_54.jpg',26,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(103,'assets/images/beachesCentral_55.jpg',26,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(104,'assets/images/beachesCentral_56.jpg',26,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(105,'assets/images/beachesCentral_57.jpg',27,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(106,'assets/images/beachesCentral_58.jpg',27,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(107,'assets/images/beachesCentral_59.jpg',27,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(108,'assets/images/beachesCentral_60.jpg',27,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(109,'assets/images/beachesCentral_61.jpg',28,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(110,'assets/images/beachesCentral_62.jpg',28,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(111,'assets/images/beachesCentral_63.jpg',28,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(112,'assets/images/beachesCentral_64.jpg',28,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(113,'assets/images/beachesCentral_65.jpg',29,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(114,'assets/images/beachesCentral_66.jpg',29,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(115,'assets/images/beachesCentral_67.jpg',29,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(116,'assets/images/beachesCentral_68.jpg',29,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(117,'assets/images/beachesCentral_69.jpg',30,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(118,'assets/images/beachesCentral_70.jpg',30,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(119,'assets/images/beachesCentral_71.jpg',30,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(120,'assets/images/beachesCentral_72.jpg',30,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(121,'assets/images/beachesCentral_73.jpg',31,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(122,'assets/images/beachesCentral_74.jpg',31,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(123,'assets/images/beachesCentral_75.jpg',31,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(124,'assets/images/beachesCentral_76.jpg',31,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(125,'assets/images/beachesCentral_77.jpg',32,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(126,'assets/images/beachesCentral_78.jpg',32,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(127,'assets/images/beachesCentral_79.jpg',32,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(128,'assets/images/beachesCentral_80.jpg',32,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(129,'assets/images/beachesCentral_81.jpg',33,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(130,'assets/images/beachesCentral_82.jpg',33,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(131,'assets/images/beachesCentral_83.jpg',33,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(132,'assets/images/beachesCentral_84.jpg',33,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(133,'assets/images/beachesCentral_85.jpg',34,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(134,'assets/images/beachesCentral_86.jpg',34,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(135,'assets/images/beachesCentral_87.jpg',34,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(136,'assets/images/beachesCentral_88.jpg',34,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(137,'assets/images/beachesCentral_89.jpg',35,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(138,'assets/images/beachesCentral_90.jpg',35,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(139,'assets/images/beachesCentral_91.jpg',35,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(140,'assets/images/beachesCentral_92.jpg',35,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(141,'assets/images/beachesCentral_93.jpg',36,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(142,'assets/images/beachesCentral_94.jpg',36,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(143,'assets/images/beachesCentral_95.jpg',36,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(144,'assets/images/beachesCentral_96.jpg',36,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(145,'assets/images/beachesCentral_97.jpg',37,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(146,'assets/images/beachesCentral_98.jpg',37,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(147,'assets/images/beachesCentral_99.jpg',37,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(148,'assets/images/beachesCentral_100.jpg',37,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(149,'assets/images/beachesCentral_101.jpg',38,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(150,'assets/images/beachesCentral_102.jpg',38,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(151,'assets/images/beachesCentral_103.jpg',38,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(152,'assets/images/beachesCentral_104.jpg',38,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(153,'assets/images/beachesCentral_105.jpg',39,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(154,'assets/images/beachesCentral_106.jpg',39,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(155,'assets/images/beachesCentral_107.jpg',39,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(156,'assets/images/beachesCentral_108.jpg',39,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(157,'assets/images/beachesCentral_109.jpg',40,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(158,'assets/images/beachesCentral_110.jpg',40,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(159,'assets/images/beachesCentral_111.jpg',40,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(160,'assets/images/beachesCentral_112.jpg',40,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(161,'assets/images/beachesCentral_113.jpg',41,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(162,'assets/images/beachesCentral_114.jpg',41,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(163,'assets/images/beachesCentral_115.jpg',41,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(164,'assets/images/beachesCentral_116.jpg',41,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(165,'assets/images/beachesCentral_117.jpg',42,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(166,'assets/images/beachesCentral_118.jpg',42,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(167,'assets/images/beachesCentral_119.jpg',42,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(168,'assets/images/beachesCentral_120.jpg',42,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(169,'assets/images/beachesCentral_121.jpg',43,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(170,'assets/images/beachesCentral_122.jpg',43,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(171,'assets/images/beachesCentral_123.jpg',43,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(172,'assets/images/beachesCentral_124.jpg',43,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(173,'assets/images/beachesCentral_125.jpg',44,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(174,'assets/images/beachesCentral_126.jpg',44,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(175,'assets/images/beachesCentral_127.jpg',44,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(176,'assets/images/beachesCentral_128.jpg',44,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(177,'assets/images/beachesCentral_129.jpg',45,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(178,'assets/images/beachesCentral_130.jpg',45,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(179,'assets/images/beachesCentral_131.jpg',45,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(180,'assets/images/beachesCentral_132.jpg',45,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(181,'assets/images/beachesCentral_133.jpg',46,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(182,'assets/images/beachesCentral_134.jpg',46,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(183,'assets/images/beachesCentral_135.jpg',46,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(184,'assets/images/beachesCentral_136.jpg',46,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(185,'assets/images/beachesCentral_137.jpg',47,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(186,'assets/images/beachesCentral_138.jpg',47,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(187,'assets/images/beachesCentral_139.jpg',47,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(188,'assets/images/beachesCentral_140.jpg',47,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(189,'assets/images/beachesCentral_141.jpg',48,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(190,'assets/images/beachesCentral_142.jpg',48,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(191,'assets/images/beachesCentral_143.jpg',48,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(192,'assets/images/beachesCentral_144.jpg',48,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(193,'assets/images/beachesCentral_145.jpg',49,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(194,'assets/images/beachesCentral_146.jpg',49,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(195,'assets/images/beachesCentral_147.jpg',49,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(196,'assets/images/beachesCentral_148.jpg',49,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(197,'assets/images/beachesCentral_149.jpg',50,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(198,'assets/images/beachesCentral_150.jpg',50,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(199,'assets/images/beachesCentral_151.jpg',50,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(200,'assets/images/beachesCentral_152.jpg',50,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(201,'assets/images/beachesCentral_153.jpg',51,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(202,'assets/images/beachesCentral_154.jpg',51,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(203,'assets/images/beachesCentral_155.jpg',51,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(204,'assets/images/beachesCentral_156.jpg',51,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(205,'assets/images/beachesCentral_157.jpg',52,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(206,'assets/images/beachesCentral_158.jpg',52,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(207,'assets/images/beachesCentral_159.jpg',52,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(208,'assets/images/beachesCentral_160.jpg',52,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(209,'assets/images/beachesCentral_161.jpg',53,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(210,'assets/images/beachesCentral_162.jpg',53,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(211,'assets/images/beachesCentral_163.jpg',53,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(212,'assets/images/beachesCentral_164.jpg',53,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(213,'assets/images/beachesCentral_165.jpg',54,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(214,'assets/images/beachesCentral_166.jpg',54,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(215,'assets/images/beachesCentral_167.jpg',54,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(216,'assets/images/beachesCentral_168.jpg',54,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(217,'assets/images/beachesCentral_169.jpg',55,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(218,'assets/images/beachesCentral_170.jpg',55,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(219,'assets/images/beachesCentral_171.jpg',55,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(220,'assets/images/beachesCentral_172.jpg',55,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(221,'assets/images/beachesCentral_173.jpg',56,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(222,'assets/images/beachesCentral_174.jpg',56,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(223,'assets/images/beachesCentral_175.jpg',56,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(224,'assets/images/beachesCentral_176.jpg',56,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(225,'assets/images/beachesCentral_177.jpg',57,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(226,'assets/images/beachesCentral_178.jpg',57,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(227,'assets/images/beachesCentral_179.jpg',57,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(228,'assets/images/beachesCentral_180.jpg',57,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(229,'assets/images/beachesCentral_181.jpg',58,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(230,'assets/images/beachesCentral_182.jpg',58,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(231,'assets/images/beachesCentral_183.jpg',58,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(232,'assets/images/beachesCentral_184.jpg',58,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(233,'assets/images/beachesCentral_185.jpg',59,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(234,'assets/images/beachesCentral_186.jpg',59,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(235,'assets/images/beachesCentral_187.jpg',59,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(236,'assets/images/beachesCentral_188.jpg',59,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(237,'assets/images/beachesCentral_189.jpg',60,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(238,'assets/images/beachesCentral_190.jpg',60,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(239,'assets/images/beachesCentral_191.jpg',60,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(240,'assets/images/beachesCentral_192.jpg',60,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(241,'assets/images/beachesCentral_193.jpg',61,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(242,'assets/images/beachesCentral_194.jpg',61,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(243,'assets/images/beachesCentral_195.jpg',61,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(244,'assets/images/beachesCentral_196.jpg',61,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(245,'assets/images/beachesCentral_197.jpg',62,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(246,'assets/images/beachesCentral_198.jpg',62,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(247,'assets/images/beachesCentral_199.jpg',62,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(248,'assets/images/beachesCentral_200.jpg',62,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(249,'assets/images/beachesCentral_201.jpg',63,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(250,'assets/images/beachesCentral_202.jpg',63,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(251,'assets/images/beachesCentral_203.jpg',63,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(252,'assets/images/beachesCentral_204.jpg',63,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(253,'assets/images/beachesCentral_205.jpg',64,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(254,'assets/images/beachesCentral_206.jpg',64,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(255,'assets/images/beachesCentral_207.jpg',64,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(256,'assets/images/beachesCentral_208.jpg',64,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(257,'assets/images/beachesCentral_209.jpg',65,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(258,'assets/images/beachesCentral_210.jpg',65,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(259,'assets/images/beachesCentral_211.jpg',65,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(260,'assets/images/beachesCentral_212.jpg',65,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(261,'assets/images/beachesCentral_213.jpg',66,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(262,'assets/images/beachesCentral_214.jpg',66,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(263,'assets/images/beachesCentral_215.jpg',66,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(264,'assets/images/beachesCentral_216.jpg',66,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(265,'assets/images/beachesCentral_217.jpg',67,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(266,'assets/images/beachesCentral_218.jpg',67,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(267,'assets/images/beachesCentral_219.jpg',67,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(268,'assets/images/beachesCentral_220.jpg',67,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(269,'assets/images/beachesCentral_221.jpg',68,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(270,'assets/images/beachesCentral_222.jpg',68,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(271,'assets/images/beachesCentral_223.jpg',68,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(272,'assets/images/beachesCentral_224.jpg',68,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(273,'assets/images/beachesCentral_225.jpg',69,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(274,'assets/images/beachesCentral_226.jpg',69,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(275,'assets/images/beachesCentral_227.jpg',69,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(276,'assets/images/beachesCentral_228.jpg',69,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(277,'assets/images/beachesCentral_229.jpg',70,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(278,'assets/images/beachesCentral_230.jpg',70,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(279,'assets/images/beachesCentral_231.jpg',70,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(280,'assets/images/beachesCentral_232.jpg',70,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(281,'assets/images/beachesCentral_233.jpg',71,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(282,'assets/images/beachesCentral_234.jpg',71,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(283,'assets/images/beachesCentral_235.jpg',71,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(284,'assets/images/beachesCentral_236.jpg',71,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(285,'assets/images/beachesCentral_237.jpg',72,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(286,'assets/images/beachesCentral_238.jpg',72,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(287,'assets/images/beachesCentral_239.jpg',72,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(288,'assets/images/beachesCentral_240.jpg',72,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(289,'assets/images/beachesCentral_241.jpg',73,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(290,'assets/images/beachesCentral_242.jpg',73,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(291,'assets/images/beachesCentral_243.jpg',73,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(292,'assets/images/beachesCentral_244.jpg',73,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(293,'assets/images/beachesCentral_245.jpg',74,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(294,'assets/images/beachesCentral_246.jpg',74,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(295,'assets/images/beachesCentral_247.jpg',74,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(296,'assets/images/beachesCentral_248.jpg',74,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(297,'assets/images/beachesCentral_249.jpg',75,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(298,'assets/images/beachesCentral_250.jpg',75,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(299,'assets/images/beachesCentral_251.jpg',75,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(300,'assets/images/beachesCentral_252.jpg',75,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(301,'assets/images/beachesCentral_253.jpg',76,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(302,'assets/images/beachesCentral_254.jpg',76,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(303,'assets/images/beachesCentral_255.jpg',76,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(304,'assets/images/beachesCentral_256.jpg',76,'2024-08-04 15:34:12','2024-08-04 15:34:12'),(305,'assets/images/beachesSouth_1.jpg',77,'2024-08-04 16:08:30','2024-08-04 16:08:30'),(306,'assets/images/beachesSouth_2.jpg',77,'2024-08-04 16:08:30','2024-08-04 16:08:30'),(307,'assets/images/beachesSouth_3.jpg',77,'2024-08-04 16:08:30','2024-08-04 16:08:30'),(308,'assets/images/beachesSouth_4.jpg',77,'2024-08-04 16:08:30','2024-08-04 16:08:30'),(309,'assets/images/beachesSouth_5.jpg',78,'2024-08-04 16:08:30','2024-08-04 16:08:30'),(310,'assets/images/beachesSouth_6.jpg',78,'2024-08-04 16:08:30','2024-08-04 16:08:30'),(311,'assets/images/beachesSouth_7.jpg',78,'2024-08-04 16:08:30','2024-08-04 16:08:30'),(312,'assets/images/beachesSouth_8.jpg',78,'2024-08-04 16:08:30','2024-08-04 16:08:30'),(313,'assets/images/beachesSouth_9.jpg',79,'2024-08-04 16:08:30','2024-08-04 16:08:30'),(314,'assets/images/beachesSouth_10.jpg',79,'2024-08-04 16:08:30','2024-08-04 16:08:30'),(315,'assets/images/beachesSouth_11.jpg',79,'2024-08-04 16:08:30','2024-08-04 16:08:30'),(316,'assets/images/beachesSouth_12.jpg',79,'2024-08-04 16:08:30','2024-08-04 16:08:30'),(317,'assets/images/beachesSouth_13.jpg',80,'2024-08-04 16:08:30','2024-08-04 16:08:30'),(318,'assets/images/beachesSouth_14.jpg',80,'2024-08-04 16:08:30','2024-08-04 16:08:30'),(319,'assets/images/beachesSouth_15.jpg',80,'2024-08-04 16:08:30','2024-08-04 16:08:30'),(320,'assets/images/beachesSouth_16.jpg',80,'2024-08-04 16:08:30','2024-08-04 16:08:30'),(321,'assets/images/beachesSouth_17.jpg',81,'2024-08-04 16:08:30','2024-08-04 16:08:30'),(322,'assets/images/beachesSouth_18.jpg',81,'2024-08-04 16:08:30','2024-08-04 16:08:30'),(323,'assets/images/beachesSouth_19.jpg',81,'2024-08-04 16:08:30','2024-08-04 16:08:30'),(324,'assets/images/beachesSouth_20.jpg',81,'2024-08-04 16:08:30','2024-08-04 16:08:30'),(325,'assets/images/beachesSouth_21.jpg',82,'2024-08-04 16:08:30','2024-08-04 16:08:30'),(326,'assets/images/beachesSouth_22.jpg',82,'2024-08-04 16:08:30','2024-08-04 16:08:30'),(327,'assets/images/beachesSouth_23.jpg',82,'2024-08-04 16:08:30','2024-08-04 16:08:30'),(328,'assets/images/beachesSouth_24.jpg',82,'2024-08-04 16:08:30','2024-08-04 16:08:30'),(329,'assets/images/beachesSouth_25.jpg',83,'2024-08-04 16:08:30','2024-08-04 16:08:30'),(330,'assets/images/beachesSouth_26.jpg',83,'2024-08-04 16:08:30','2024-08-04 16:08:30'),(331,'assets/images/beachesSouth_27.jpg',83,'2024-08-04 16:08:30','2024-08-04 16:08:30'),(332,'assets/images/beachesSouth_28.jpg',83,'2024-08-04 16:08:30','2024-08-04 16:08:30'),(333,'assets/images/beachesSouth_29.jpg',84,'2024-08-04 16:08:30','2024-08-04 16:08:30'),(334,'assets/images/beachesSouth_30.jpg',84,'2024-08-04 16:08:30','2024-08-04 16:08:30'),(335,'assets/images/beachesSouth_31.jpg',84,'2024-08-04 16:08:30','2024-08-04 16:08:30'),(336,'assets/images/beachesSouth_32.jpg',84,'2024-08-04 16:08:30','2024-08-04 16:08:30'),(337,'assets/images/beachesSouth_33.jpg',85,'2024-08-04 16:08:30','2024-08-04 16:08:30'),(338,'assets/images/beachesSouth_34.jpg',85,'2024-08-04 16:08:30','2024-08-04 16:08:30'),(339,'assets/images/beachesSouth_35.jpg',85,'2024-08-04 16:08:30','2024-08-04 16:08:30'),(340,'assets/images/beachesSouth_36.jpg',85,'2024-08-04 16:08:30','2024-08-04 16:08:30'),(341,'assets/images/beachesSouth_37.jpg',86,'2024-08-04 16:08:30','2024-08-04 16:08:30'),(342,'assets/images/beachesSouth_38.jpg',86,'2024-08-04 16:08:30','2024-08-04 16:08:30'),(343,'assets/images/beachesSouth_39.jpg',86,'2024-08-04 16:08:30','2024-08-04 16:08:30'),(344,'assets/images/beachesSouth_40.jpg',86,'2024-08-04 16:08:30','2024-08-04 16:08:30'),(345,'assets/images/beachesSouth_41.jpg',87,'2024-08-04 16:08:30','2024-08-04 16:08:30'),(346,'assets/images/beachesSouth_42.jpg',87,'2024-08-04 16:08:30','2024-08-04 16:08:30'),(347,'assets/images/beachesSouth_43.jpg',87,'2024-08-04 16:08:30','2024-08-04 16:08:30'),(348,'assets/images/beachesSouth_44.jpg',87,'2024-08-04 16:08:30','2024-08-04 16:08:30'),(349,'assets/images/beachesSouth_45.jpg',88,'2024-08-04 16:08:30','2024-08-04 16:08:30'),(350,'assets/images/beachesSouth_46.jpg',88,'2024-08-04 16:08:30','2024-08-04 16:08:30'),(351,'assets/images/beachesSouth_47.jpg',88,'2024-08-04 16:08:30','2024-08-04 16:08:30'),(352,'assets/images/beachesSouth_48.jpg',88,'2024-08-04 16:08:30','2024-08-04 16:08:30'),(353,'assets/images/beachesSouth_49.jpg',89,'2024-08-04 16:08:30','2024-08-04 16:08:30'),(354,'assets/images/beachesSouth_50.jpg',89,'2024-08-04 16:08:30','2024-08-04 16:08:30'),(355,'assets/images/beachesSouth_51.jpg',89,'2024-08-04 16:08:30','2024-08-04 16:08:30'),(356,'assets/images/beachesSouth_52.jpg',89,'2024-08-04 16:08:30','2024-08-04 16:08:30'),(357,'assets/images/beachesSouth_53.jpg',90,'2024-08-04 16:08:30','2024-08-04 16:08:30'),(358,'assets/images/beachesSouth_54.jpg',90,'2024-08-04 16:08:30','2024-08-04 16:08:30'),(359,'assets/images/beachesSouth_55.jpg',90,'2024-08-04 16:08:30','2024-08-04 16:08:30'),(360,'assets/images/beachesSouth_56.jpg',90,'2024-08-04 16:08:30','2024-08-04 16:08:30'),(361,'assets/images/beachesSouth_57.jpg',91,'2024-08-04 16:08:30','2024-08-04 16:08:30'),(362,'assets/images/beachesSouth_58.jpg',91,'2024-08-04 16:08:30','2024-08-04 16:08:30'),(363,'assets/images/beachesSouth_59.jpg',91,'2024-08-04 16:08:30','2024-08-04 16:08:30'),(364,'assets/images/beachesSouth_60.jpg',91,'2024-08-04 16:08:30','2024-08-04 16:08:30'),(365,'assets/images/beachesSouth_61.jpg',92,'2024-08-04 16:08:30','2024-08-04 16:08:30'),(366,'assets/images/beachesSouth_62.jpg',92,'2024-08-04 16:08:30','2024-08-04 16:08:30'),(367,'assets/images/beachesSouth_63.jpg',92,'2024-08-04 16:08:30','2024-08-04 16:08:30'),(368,'assets/images/beachesSouth_64.jpg',92,'2024-08-04 16:08:30','2024-08-04 16:08:30'),(369,'assets/images/beachesSouth_65.jpg',93,'2024-08-04 16:08:30','2024-08-04 16:08:30'),(370,'assets/images/beachesSouth_66.jpg',93,'2024-08-04 16:08:30','2024-08-04 16:08:30'),(371,'assets/images/beachesSouth_67.jpg',93,'2024-08-04 16:08:30','2024-08-04 16:08:30'),(372,'assets/images/beachesSouth_68.jpg',93,'2024-08-04 16:08:30','2024-08-04 16:08:30'),(373,'assets/images/beachesSouth_69.jpg',94,'2024-08-04 16:08:30','2024-08-04 16:08:30'),(374,'assets/images/beachesSouth_70.jpg',94,'2024-08-04 16:08:30','2024-08-04 16:08:30'),(375,'assets/images/beachesSouth_71.jpg',94,'2024-08-04 16:08:30','2024-08-04 16:08:30'),(376,'assets/images/beachesSouth_72.jpg',94,'2024-08-04 16:08:30','2024-08-04 16:08:30');
/*!40000 ALTER TABLE `beach_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `beach_videos`
--

DROP TABLE IF EXISTS `beach_videos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `beach_videos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `beach_id` bigint unsigned NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `beach_videos_beach_id_foreign` (`beach_id`),
  CONSTRAINT `beach_videos_beach_id_foreign` FOREIGN KEY (`beach_id`) REFERENCES `beaches` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=95 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `beach_videos`
--

LOCK TABLES `beach_videos` WRITE;
/*!40000 ALTER TABLE `beach_videos` DISABLE KEYS */;
INSERT INTO `beach_videos` VALUES (1,'v1.mp4',1,'mp4','2024-08-04 15:24:07','2024-08-04 15:24:07'),(2,'v2.mp4',2,'mp4','2024-08-04 15:24:07','2024-08-04 15:24:07'),(3,'v3.mp4',3,'mp4','2024-08-04 15:24:07','2024-08-04 15:24:07'),(4,'v4.mp4',4,'mp4','2024-08-04 15:24:07','2024-08-04 15:24:07'),(5,'v5.mp4',5,'mp4','2024-08-04 15:24:07','2024-08-04 15:24:07'),(6,'v6.mp4',6,'mp4','2024-08-04 15:24:07','2024-08-04 15:24:07'),(7,'v7.mp4',7,'mp4','2024-08-04 15:24:07','2024-08-04 15:24:07'),(8,'v1.mp4',8,'mp4','2024-08-04 15:24:07','2024-08-04 15:24:07'),(9,'v2.mp4',9,'mp4','2024-08-04 15:24:07','2024-08-04 15:24:07'),(10,'v3.mp4',10,'mp4','2024-08-04 15:24:07','2024-08-04 15:24:07'),(11,'v4.mp4',11,'mp4','2024-08-04 15:24:07','2024-08-04 15:24:07'),(12,'v5.mp4',12,'mp4','2024-08-04 15:24:07','2024-08-04 15:24:07'),(13,'v6.mp4',13,'mp4','2024-08-04 15:34:52','2024-08-04 15:34:52'),(14,'v7.mp4',14,'mp4','2024-08-04 15:34:52','2024-08-04 15:34:52'),(15,'v1.mp4',15,'mp4','2024-08-04 15:34:52','2024-08-04 15:34:52'),(16,'v2.mp4',16,'mp4','2024-08-04 15:34:52','2024-08-04 15:34:52'),(17,'v3.mp4',17,'mp4','2024-08-04 15:34:52','2024-08-04 15:34:52'),(18,'v4.mp4',18,'mp4','2024-08-04 15:34:52','2024-08-04 15:34:52'),(19,'v5.mp4',19,'mp4','2024-08-04 15:34:52','2024-08-04 15:34:52'),(20,'v6.mp4',20,'mp4','2024-08-04 15:34:52','2024-08-04 15:34:52'),(21,'v7.mp4',21,'mp4','2024-08-04 15:34:52','2024-08-04 15:34:52'),(22,'v1.mp4',22,'mp4','2024-08-04 15:34:52','2024-08-04 15:34:52'),(23,'v2.mp4',23,'mp4','2024-08-04 15:34:52','2024-08-04 15:34:52'),(24,'v3.mp4',24,'mp4','2024-08-04 15:34:52','2024-08-04 15:34:52'),(25,'v4.mp4',25,'mp4','2024-08-04 15:34:52','2024-08-04 15:34:52'),(26,'v5.mp4',26,'mp4','2024-08-04 15:34:52','2024-08-04 15:34:52'),(27,'v6.mp4',27,'mp4','2024-08-04 15:34:52','2024-08-04 15:34:52'),(28,'v7.mp4',28,'mp4','2024-08-04 15:34:52','2024-08-04 15:34:52'),(29,'v1.mp4',29,'mp4','2024-08-04 15:34:52','2024-08-04 15:34:52'),(30,'v2.mp4',30,'mp4','2024-08-04 15:34:52','2024-08-04 15:34:52'),(31,'v3.mp4',31,'mp4','2024-08-04 15:34:52','2024-08-04 15:34:52'),(32,'v4.mp4',32,'mp4','2024-08-04 15:34:52','2024-08-04 15:34:52'),(33,'v5.mp4',33,'mp4','2024-08-04 15:34:52','2024-08-04 15:34:52'),(34,'v6.mp4',34,'mp4','2024-08-04 15:34:52','2024-08-04 15:34:52'),(35,'v7.mp4',35,'mp4','2024-08-04 15:34:52','2024-08-04 15:34:52'),(36,'v1.mp4',36,'mp4','2024-08-04 15:34:52','2024-08-04 15:34:52'),(37,'v2.mp4',37,'mp4','2024-08-04 15:34:52','2024-08-04 15:34:52'),(38,'v3.mp4',38,'mp4','2024-08-04 15:34:52','2024-08-04 15:34:52'),(39,'v4.mp4',39,'mp4','2024-08-04 15:34:52','2024-08-04 15:34:52'),(40,'v5.mp4',40,'mp4','2024-08-04 15:34:52','2024-08-04 15:34:52'),(41,'v6.mp4',41,'mp4','2024-08-04 15:34:52','2024-08-04 15:34:52'),(42,'v7.mp4',42,'mp4','2024-08-04 15:34:52','2024-08-04 15:34:52'),(43,'v1.mp4',43,'mp4','2024-08-04 15:34:52','2024-08-04 15:34:52'),(44,'v2.mp4',44,'mp4','2024-08-04 15:34:52','2024-08-04 15:34:52'),(45,'v3.mp4',45,'mp4','2024-08-04 15:34:52','2024-08-04 15:34:52'),(46,'v4.mp4',46,'mp4','2024-08-04 15:34:52','2024-08-04 15:34:52'),(47,'v5.mp4',47,'mp4','2024-08-04 15:34:52','2024-08-04 15:34:52'),(48,'v6.mp4',48,'mp4','2024-08-04 15:34:52','2024-08-04 15:34:52'),(49,'v7.mp4',49,'mp4','2024-08-04 15:34:52','2024-08-04 15:34:52'),(50,'v1.mp4',50,'mp4','2024-08-04 15:34:52','2024-08-04 15:34:52'),(51,'v2.mp4',51,'mp4','2024-08-04 15:34:52','2024-08-04 15:34:52'),(52,'v3.mp4',52,'mp4','2024-08-04 15:34:52','2024-08-04 15:34:52'),(53,'v4.mp4',53,'mp4','2024-08-04 15:34:52','2024-08-04 15:34:52'),(54,'v5.mp4',54,'mp4','2024-08-04 15:34:52','2024-08-04 15:34:52'),(55,'v6.mp4',55,'mp4','2024-08-04 15:34:52','2024-08-04 15:34:52'),(56,'v7.mp4',56,'mp4','2024-08-04 15:34:52','2024-08-04 15:34:52'),(57,'v1.mp4',57,'mp4','2024-08-04 15:34:52','2024-08-04 15:34:52'),(58,'v2.mp4',58,'mp4','2024-08-04 15:34:52','2024-08-04 15:34:52'),(59,'v3.mp4',59,'mp4','2024-08-04 15:34:52','2024-08-04 15:34:52'),(60,'v4.mp4',60,'mp4','2024-08-04 15:34:52','2024-08-04 15:34:52'),(61,'v5.mp4',61,'mp4','2024-08-04 15:34:52','2024-08-04 15:34:52'),(62,'v6.mp4',62,'mp4','2024-08-04 15:34:52','2024-08-04 15:34:52'),(63,'v7.mp4',63,'mp4','2024-08-04 15:34:52','2024-08-04 15:34:52'),(64,'v1.mp4',64,'mp4','2024-08-04 15:34:52','2024-08-04 15:34:52'),(65,'v2.mp4',65,'mp4','2024-08-04 15:34:52','2024-08-04 15:34:52'),(66,'v3.mp4',66,'mp4','2024-08-04 15:34:52','2024-08-04 15:34:52'),(67,'v4.mp4',67,'mp4','2024-08-04 15:34:52','2024-08-04 15:34:52'),(68,'v5.mp4',68,'mp4','2024-08-04 15:34:52','2024-08-04 15:34:52'),(69,'v6.mp4',69,'mp4','2024-08-04 15:34:52','2024-08-04 15:34:52'),(70,'v7.mp4',70,'mp4','2024-08-04 15:34:52','2024-08-04 15:34:52'),(71,'v1.mp4',71,'mp4','2024-08-04 15:34:52','2024-08-04 15:34:52'),(72,'v2.mp4',72,'mp4','2024-08-04 15:34:52','2024-08-04 15:34:52'),(73,'v3.mp4',73,'mp4','2024-08-04 15:34:52','2024-08-04 15:34:52'),(74,'v4.mp4',74,'mp4','2024-08-04 15:34:52','2024-08-04 15:34:52'),(75,'v5.mp4',75,'mp4','2024-08-04 15:34:52','2024-08-04 15:34:52'),(76,'v6.mp4',76,'mp4','2024-08-04 15:34:52','2024-08-04 15:34:52'),(77,'v7.mp4',77,'mp4','2024-08-04 16:08:42','2024-08-04 16:08:42'),(78,'v1.mp4',78,'mp4','2024-08-04 16:08:42','2024-08-04 16:08:42'),(79,'v2.mp4',79,'mp4','2024-08-04 16:08:42','2024-08-04 16:08:42'),(80,'v3.mp4',80,'mp4','2024-08-04 16:08:42','2024-08-04 16:08:42'),(81,'v4.mp4',81,'mp4','2024-08-04 16:08:42','2024-08-04 16:08:42'),(82,'v5.mp4',82,'mp4','2024-08-04 16:08:42','2024-08-04 16:08:42'),(83,'v6.mp4',83,'mp4','2024-08-04 16:08:42','2024-08-04 16:08:42'),(84,'v7.mp4',84,'mp4','2024-08-04 16:08:42','2024-08-04 16:08:42'),(85,'v1.mp4',85,'mp4','2024-08-04 16:08:42','2024-08-04 16:08:42'),(86,'v2.mp4',86,'mp4','2024-08-04 16:08:42','2024-08-04 16:08:42'),(87,'v3.mp4',87,'mp4','2024-08-04 16:08:42','2024-08-04 16:08:42'),(88,'v4.mp4',88,'mp4','2024-08-04 16:08:42','2024-08-04 16:08:42'),(89,'v5.mp4',89,'mp4','2024-08-04 16:08:42','2024-08-04 16:08:42'),(90,'v6.mp4',90,'mp4','2024-08-04 16:08:42','2024-08-04 16:08:42'),(91,'v7.mp4',91,'mp4','2024-08-04 16:08:42','2024-08-04 16:08:42'),(92,'v1.mp4',92,'mp4','2024-08-04 16:08:42','2024-08-04 16:08:42'),(93,'v2.mp4',93,'mp4','2024-08-04 16:08:42','2024-08-04 16:08:42'),(94,'v3.mp4',94,'mp4','2024-08-04 16:08:42','2024-08-04 16:08:42');
/*!40000 ALTER TABLE `beach_videos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `beaches`
--

DROP TABLE IF EXISTS `beaches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `beaches` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `beaches_city_id_foreign` (`city_id`),
  CONSTRAINT `beaches_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=95 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `beaches`
--

LOCK TABLES `beaches` WRITE;
/*!40000 ALTER TABLE `beaches` DISABLE KEYS */;
INSERT INTO `beaches` VALUES (1,'Trà Cổ','Beautiful beach in Quảng Ninh',1,'2024-08-04 15:23:14','2024-08-04 15:23:14'),(2,'Vân Đồn','Scenic beach in Quảng Ninh',1,'2024-08-04 15:23:14','2024-08-04 15:23:14'),(3,'Bãi Cháy','Popular beach in Quảng Ninh',1,'2024-08-04 15:23:14','2024-08-04 15:23:14'),(4,'Tuần Châu','Touristic beach in Quảng Ninh',1,'2024-08-04 15:23:14','2024-08-04 15:23:14'),(5,'Cát Bà','Beautiful beach in Hải Phòng',2,'2024-08-04 15:23:17','2024-08-04 15:23:17'),(6,'Đồ Sơn','Scenic beach in Hải Phòng',2,'2024-08-04 15:23:17','2024-08-04 15:23:17'),(7,'Hòn Dáu','Touristic beach in Hải Phòng',2,'2024-08-04 15:23:17','2024-08-04 15:23:17'),(8,'Đồng Châu','Beautiful beach in Thái Bình',3,'2024-08-04 15:23:20','2024-08-04 15:23:20'),(9,'Quất Lâm','Beautiful beach in Nam Định',4,'2024-08-04 15:23:22','2024-08-04 15:23:22'),(10,'Hải Thịnh','Scenic beach in Nam Định',4,'2024-08-04 15:23:22','2024-08-04 15:23:22'),(11,'Bãi Ngang','Beautiful beach in Ninh Bình',5,'2024-08-04 15:23:25','2024-08-04 15:23:25'),(12,'Cồn Nổi','Scenic beach in Ninh Bình',5,'2024-08-04 15:23:25','2024-08-04 15:23:25'),(13,'Hải Tiến','Beautiful beach in Thanh Hóa',6,'2024-08-04 15:28:53','2024-08-04 15:28:53'),(14,'Sầm Sơn','Scenic beach in Thanh Hóa',6,'2024-08-04 15:28:53','2024-08-04 15:28:53'),(15,'Tiên Trang','Popular beach in Thanh Hóa',6,'2024-08-04 15:28:53','2024-08-04 15:28:53'),(16,'Hải Hòa','Touristic beach in Thanh Hóa',6,'2024-08-04 15:28:53','2024-08-04 15:28:53'),(17,'Nghi Sơn','Beautiful beach in Thanh Hóa',6,'2024-08-04 15:28:53','2024-08-04 15:28:53'),(18,'Quỳnh','Beautiful beach in Nghệ An',7,'2024-08-04 15:28:57','2024-08-04 15:28:57'),(19,'Diễn Quỳnh','Scenic beach in Nghệ An',7,'2024-08-04 15:28:57','2024-08-04 15:28:57'),(20,'Diễn Thành','Popular beach in Nghệ An',7,'2024-08-04 15:28:57','2024-08-04 15:28:57'),(21,'Nghi Thiết','Touristic beach in Nghệ An',7,'2024-08-04 15:28:57','2024-08-04 15:28:57'),(22,'Cửa Lò','Beautiful beach in Nghệ An',7,'2024-08-04 15:28:57','2024-08-04 15:28:57'),(23,'Xuân Yên','Beautiful beach in Hà Tĩnh',8,'2024-08-04 15:29:00','2024-08-04 15:29:00'),(24,'Xuân Thành','Scenic beach in Hà Tĩnh',8,'2024-08-04 15:29:00','2024-08-04 15:29:00'),(25,'Cửa Sót','Popular beach in Hà Tĩnh',8,'2024-08-04 15:29:00','2024-08-04 15:29:00'),(26,'Thạch Bằng','Touristic beach in Hà Tĩnh',8,'2024-08-04 15:29:00','2024-08-04 15:29:00'),(27,'Thiên Cầm','Beautiful beach in Hà Tĩnh',8,'2024-08-04 15:29:00','2024-08-04 15:29:00'),(28,'Đèo Con','Beautiful beach in Hà Tĩnh',8,'2024-08-04 15:29:00','2024-08-04 15:29:00'),(29,'Đá Nhảy','Beautiful beach in Quảng Bình',9,'2024-08-04 15:29:03','2024-08-04 15:29:03'),(30,'Nhật Lệ','Scenic beach in Quảng Bình',9,'2024-08-04 15:29:03','2024-08-04 15:29:03'),(31,'Bảo Ninh','Popular beach in Quảng Bình',9,'2024-08-04 15:29:03','2024-08-04 15:29:03'),(32,'Cửa Tùng','Beautiful beach in Quảng Trị',10,'2024-08-04 15:29:07','2024-08-04 15:29:07'),(33,'Cửa Việt','Scenic beach in Quảng Trị',10,'2024-08-04 15:29:07','2024-08-04 15:29:07'),(34,'Cồn Cỏ','Touristic beach in Quảng Trị',10,'2024-08-04 15:29:07','2024-08-04 15:29:07'),(35,'Mỹ Thủy','Beautiful beach in Quảng Trị',10,'2024-08-04 15:29:07','2024-08-04 15:29:07'),(36,'Thuận An','Beautiful beach in Thừa Thiên Huế',11,'2024-08-04 15:29:12','2024-08-04 15:29:12'),(37,'Chân Mây','Scenic beach in Thừa Thiên Huế',11,'2024-08-04 15:29:12','2024-08-04 15:29:12'),(38,'Lăng Cô','Popular beach in Thừa Thiên Huế',11,'2024-08-04 15:29:12','2024-08-04 15:29:12'),(39,'Hải Vân','Beautiful beach in Đà Nẵng',12,'2024-08-04 15:29:15','2024-08-04 15:29:15'),(40,'Sơn Trà','Scenic beach in Đà Nẵng',12,'2024-08-04 15:29:15','2024-08-04 15:29:15'),(41,'Bãi Bụt','Popular beach in Đà Nẵng',12,'2024-08-04 15:29:15','2024-08-04 15:29:15'),(42,'Bãi Rạng','Touristic beach in Đà Nẵng',12,'2024-08-04 15:29:15','2024-08-04 15:29:15'),(43,'Mỹ Khê','Beautiful beach in Đà Nẵng',12,'2024-08-04 15:29:15','2024-08-04 15:29:15'),(44,'Hà My','Beautiful beach in Quảng Nam',13,'2024-08-04 15:29:17','2024-08-04 15:29:17'),(45,'Cửa Đại','Scenic beach in Quảng Nam',13,'2024-08-04 15:29:17','2024-08-04 15:29:17'),(46,'Cù Lao Chàm','Popular beach in Quảng Nam',13,'2024-08-04 15:29:17','2024-08-04 15:29:17'),(47,'Mỹ Khê','Beautiful beach in Quảng Ngãi',14,'2024-08-04 15:29:20','2024-08-04 15:29:20'),(48,'Sa Huỳnh','Scenic beach in Quảng Ngãi',14,'2024-08-04 15:29:20','2024-08-04 15:29:20'),(49,'Bãi Dài','Beautiful beach in Bình Định',15,'2024-08-04 15:29:23','2024-08-04 15:29:23'),(50,'Bãi Dại','Scenic beach in Bình Định',15,'2024-08-04 15:29:23','2024-08-04 15:29:23'),(51,'Bãi Xép','Popular beach in Bình Định',15,'2024-08-04 15:29:23','2024-08-04 15:29:23'),(52,'Nhơn Lý','Touristic beach in Bình Định',15,'2024-08-04 15:29:23','2024-08-04 15:29:23'),(53,'Bãi Môn - Mũi Điện','Beautiful beach in Phú Yên',16,'2024-08-04 15:29:25','2024-08-04 15:29:25'),(54,'Tuy Hòa','Scenic beach in Phú Yên',16,'2024-08-04 15:29:25','2024-08-04 15:29:25'),(55,'Bãi Dài (Vân Phong)','Beautiful beach in Khánh Hòa',17,'2024-08-04 15:29:28','2024-08-04 15:29:28'),(56,'Hòn Ông','Scenic beach in Khánh Hòa',17,'2024-08-04 15:29:28','2024-08-04 15:29:28'),(57,'Sơn Đừng','Popular beach in Khánh Hòa',17,'2024-08-04 15:29:28','2024-08-04 15:29:28'),(58,'Đại Lãnh','Touristic beach in Khánh Hòa',17,'2024-08-04 15:29:28','2024-08-04 15:29:28'),(59,'Dốc Lết','Beautiful beach in Khánh Hòa',17,'2024-08-04 15:29:28','2024-08-04 15:29:28'),(60,'Ninh Vân','Beautiful beach in Khánh Hòa',17,'2024-08-04 15:29:28','2024-08-04 15:29:28'),(61,'Hòn Chồng','Beautiful beach in Khánh Hòa',17,'2024-08-04 15:29:28','2024-08-04 15:29:28'),(62,'Nha Trang','Beautiful beach in Khánh Hòa',17,'2024-08-04 15:29:28','2024-08-04 15:29:28'),(63,'Bãi Dông (trên đèo Cù Hin)','Beautiful beach in Khánh Hòa',17,'2024-08-04 15:29:28','2024-08-04 15:29:28'),(64,'Bãi Dài (Cam Ranh)','Beautiful beach in Khánh Hòa',17,'2024-08-04 15:29:28','2024-08-04 15:29:28'),(65,'Bình Lập','Beautiful beach in Khánh Hòa',17,'2024-08-04 15:29:28','2024-08-04 15:29:28'),(66,'Hòn Tre','Beautiful beach in Khánh Hòa',17,'2024-08-04 15:29:28','2024-08-04 15:29:28'),(67,'Hòn Tằm','Beautiful beach in Khánh Hòa',17,'2024-08-04 15:29:28','2024-08-04 15:29:28'),(68,'Hòn Thị','Beautiful beach in Khánh Hòa',17,'2024-08-04 15:29:28','2024-08-04 15:29:28'),(69,'Cà Ná','Beautiful beach in Ninh Thuận',18,'2024-08-04 15:29:31','2024-08-04 15:29:31'),(70,'Ninh Hải','Scenic beach in Ninh Thuận',18,'2024-08-04 15:29:31','2024-08-04 15:29:31'),(71,'Thái Bình','Popular beach in Ninh Thuận',18,'2024-08-04 15:29:31','2024-08-04 15:29:31'),(72,'Mũi Né - Phan Thiết','Beautiful beach in Bình Thuận',19,'2024-08-04 15:29:33','2024-08-04 15:29:33'),(73,'Hòn Rơm - Phan Thiết','Scenic beach in Bình Thuận',19,'2024-08-04 15:29:33','2024-08-04 15:29:33'),(74,'Đồi Dương - Phan Thiết','Popular beach in Bình Thuận',19,'2024-08-04 15:29:33','2024-08-04 15:29:33'),(75,'Mũi Kê Gà - Hàm Thuận Nam','Touristic beach in Bình Thuận',19,'2024-08-04 15:29:33','2024-08-04 15:29:33'),(76,'Thuận Quý - Hàm Thuận Nam','Beautiful beach in Bình Thuận',19,'2024-08-04 15:29:33','2024-08-04 15:29:33'),(77,'Bãi Sau (Thùy Vân)','Beautiful beach in Bà Rịa - Vũng Tàu',20,'2024-08-04 16:05:54','2024-08-04 16:05:54'),(78,'Bãi Trước (Tầm Dương)','Scenic beach in Bà Rịa - Vũng Tàu',20,'2024-08-04 16:05:54','2024-08-04 16:05:54'),(79,'Bãi Dâu','Popular beach in Bà Rịa - Vũng Tàu',20,'2024-08-04 16:05:54','2024-08-04 16:05:54'),(80,'Bãi Dứa','Touristic beach in Bà Rịa - Vũng Tàu',20,'2024-08-04 16:05:54','2024-08-04 16:05:54'),(81,'Nghinh Phong (Vọng Nguyệt)','Beautiful beach in Bà Rịa - Vũng Tàu',20,'2024-08-04 16:05:54','2024-08-04 16:05:54'),(82,'Chí Linh','Scenic beach in Bà Rịa - Vũng Tàu',20,'2024-08-04 16:05:54','2024-08-04 16:05:54'),(83,'Lộc An','Popular beach in Bà Rịa - Vũng Tàu',20,'2024-08-04 16:05:54','2024-08-04 16:05:54'),(84,'Suối Ồ','Touristic beach in Bà Rịa - Vũng Tàu',20,'2024-08-04 16:05:54','2024-08-04 16:05:54'),(85,'Hồ Cốc','Beautiful beach in Bà Rịa - Vũng Tàu',20,'2024-08-04 16:05:54','2024-08-04 16:05:54'),(86,'Hồ Tràm (Thuận Biên)','Scenic beach in Bà Rịa - Vũng Tàu',20,'2024-08-04 16:05:54','2024-08-04 16:05:54'),(87,'Long Hải','Popular beach in Bà Rịa - Vũng Tàu',20,'2024-08-04 16:05:54','2024-08-04 16:05:54'),(88,'Cần Giờ','Beautiful beach in Thành phố Hồ Chí Minh',21,'2024-08-04 16:05:57','2024-08-04 16:05:57'),(89,'Ba Động','Beautiful beach in Trà Vinh',24,'2024-08-04 16:05:59','2024-08-04 16:05:59'),(90,'Khai Long','Beautiful beach in Cà Mau',27,'2024-08-04 16:06:01','2024-08-04 16:06:01'),(91,'Mũi Nai - Hà Tiên','Beautiful beach in Kiên Giang',28,'2024-08-04 16:06:04','2024-08-04 16:06:04'),(92,'Phú Quốc','Scenic beach in Kiên Giang',28,'2024-08-04 16:06:04','2024-08-04 16:06:04'),(93,'Hòn Chông - Bình An','Popular beach in Kiên Giang',28,'2024-08-04 16:06:04','2024-08-04 16:06:04'),(94,'Bãi Dương - Bình An','Touristic beach in Kiên Giang',28,'2024-08-04 16:06:04','2024-08-04 16:06:04');
/*!40000 ALTER TABLE `beaches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `blogs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `beach_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `blogs_user_id_foreign` (`user_id`),
  KEY `blogs_beach_id_foreign` (`beach_id`),
  CONSTRAINT `blogs_beach_id_foreign` FOREIGN KEY (`beach_id`) REFERENCES `beaches` (`id`),
  CONSTRAINT `blogs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blogs`
--

LOCK TABLES `blogs` WRITE;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache`
--

LOCK TABLES `cache` WRITE;
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache_locks`
--

LOCK TABLES `cache_locks` WRITE;
/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cities`
--

DROP TABLE IF EXISTS `cities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cities` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cities_name_unique` (`name`),
  KEY `cities_region_id_foreign` (`region_id`),
  CONSTRAINT `cities_region_id_foreign` FOREIGN KEY (`region_id`) REFERENCES `regions` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cities`
--

LOCK TABLES `cities` WRITE;
/*!40000 ALTER TABLE `cities` DISABLE KEYS */;
INSERT INTO `cities` VALUES (1,'Quảng Ninh',1,'2024-08-04 14:54:53','2024-08-04 14:54:53'),(2,'Hải Phòng',1,'2024-08-04 14:54:53','2024-08-04 14:54:53'),(3,'Thái Bình',1,'2024-08-04 14:54:53','2024-08-04 14:54:53'),(4,'Nam Định',1,'2024-08-04 14:54:53','2024-08-04 14:54:53'),(5,'Ninh Bình',1,'2024-08-04 14:54:53','2024-08-04 14:54:53'),(6,'Thanh Hóa',2,'2024-08-04 14:55:01','2024-08-04 14:55:01'),(7,'Nghệ An',2,'2024-08-04 14:55:01','2024-08-04 14:55:01'),(8,'Hà Tĩnh',2,'2024-08-04 14:55:01','2024-08-04 14:55:01'),(9,'Quảng Bình',2,'2024-08-04 14:55:01','2024-08-04 14:55:01'),(10,'Quảng Trị',2,'2024-08-04 14:55:01','2024-08-04 14:55:01'),(11,'Thừa Thiên Huế',2,'2024-08-04 14:55:01','2024-08-04 14:55:01'),(12,'Đà Nẵng',2,'2024-08-04 14:55:01','2024-08-04 14:55:01'),(13,'Quảng Nam',2,'2024-08-04 14:55:01','2024-08-04 14:55:01'),(14,'Quảng Ngãi',2,'2024-08-04 14:55:01','2024-08-04 14:55:01'),(15,'Bình Định',2,'2024-08-04 14:55:01','2024-08-04 14:55:01'),(16,'Phú Yên',2,'2024-08-04 14:55:01','2024-08-04 14:55:01'),(17,'Khánh Hòa',2,'2024-08-04 14:55:01','2024-08-04 14:55:01'),(18,'Ninh Thuận',2,'2024-08-04 14:55:01','2024-08-04 14:55:01'),(19,'Bình Thuận',2,'2024-08-04 14:55:01','2024-08-04 14:55:01'),(20,'Bà Rịa - Vũng Tàu',3,'2024-08-04 14:55:06','2024-08-04 14:55:06'),(21,'Thành phố Hồ Chí Minh',3,'2024-08-04 14:55:06','2024-08-04 14:55:06'),(22,'Tiền Giang',3,'2024-08-04 14:55:06','2024-08-04 14:55:06'),(23,'Bến Tre',3,'2024-08-04 14:55:06','2024-08-04 14:55:06'),(24,'Trà Vinh',3,'2024-08-04 14:55:06','2024-08-04 14:55:06'),(25,'Sóc Trăng',3,'2024-08-04 14:55:06','2024-08-04 14:55:06'),(26,'Bạc Liêu',3,'2024-08-04 14:55:06','2024-08-04 14:55:06'),(27,'Cà Mau',3,'2024-08-04 14:55:06','2024-08-04 14:55:06'),(28,'Kiên Giang',3,'2024-08-04 14:55:06','2024-08-04 14:55:06');
/*!40000 ALTER TABLE `cities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `comments` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `blog_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `comments_user_id_foreign` (`user_id`),
  KEY `comments_blog_id_foreign` (`blog_id`),
  CONSTRAINT `comments_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`),
  CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `feedback` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `feedback`
--

LOCK TABLES `feedback` WRITE;
/*!40000 ALTER TABLE `feedback` DISABLE KEYS */;
/*!40000 ALTER TABLE `feedback` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `images` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_batches`
--

LOCK TABLES `job_batches` WRITE;
/*!40000 ALTER TABLE `job_batches` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_batches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'0001_01_01_000001_create_cache_table',1),(2,'0001_01_01_000002_create_jobs_table',1),(3,'1_create_regions_table',1),(4,'2_create_cities_table',1),(5,'3_create_users_table',1),(6,'4_create_beaches_table',1),(7,'5_create_blogs_table',1),(8,'6_create_comments_table',1),(9,'7_create_texts_table',1),(10,'8_create_images_table',1),(11,'91_create_beach_images_table',1),(12,'92_create_beach_videos_table',1),(13,'93_create_feedback_table',1),(14,'9_create_videos_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `regions`
--

DROP TABLE IF EXISTS `regions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `regions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `regions_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `regions`
--

LOCK TABLES `regions` WRITE;
/*!40000 ALTER TABLE `regions` DISABLE KEYS */;
INSERT INTO `regions` VALUES (1,'Bắc','2024-08-04 14:51:38','2024-08-04 14:51:38'),(2,'Trung','2024-08-04 14:51:38','2024-08-04 14:51:38'),(3,'Nam','2024-08-04 14:51:38','2024-08-04 14:51:38');
/*!40000 ALTER TABLE `regions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `texts`
--

DROP TABLE IF EXISTS `texts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `texts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `texts`
--

LOCK TABLES `texts` WRITE;
/*!40000 ALTER TABLE `texts` DISABLE KEYS */;
/*!40000 ALTER TABLE `texts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'customer',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactive',
  `otp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `otp_expiration` timestamp NULL DEFAULT NULL,
  `city_id` bigint unsigned DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_city_id_foreign` (`city_id`),
  CONSTRAINT `users_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `videos`
--

DROP TABLE IF EXISTS `videos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `videos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `videos`
--

LOCK TABLES `videos` WRITE;
/*!40000 ALTER TABLE `videos` DISABLE KEYS */;
/*!40000 ALTER TABLE `videos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-08-07 13:24:55
