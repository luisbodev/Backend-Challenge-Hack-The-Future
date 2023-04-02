# ************************************************************
# Sequel Ace SQL dump
# Version 20046
#
# https://sequel-ace.com/
# https://github.com/Sequel-Ace/Sequel-Ace
#
# Host: localhost (MySQL 8.0.31)
# Database: backend_challenge_hack_the_future
# Generation Time: 2023-04-02 7:41:25 AM +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE='NO_AUTO_VALUE_ON_ZERO', SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table carbon_footprint_data
# ------------------------------------------------------------

DROP TABLE IF EXISTS `carbon_footprint_data`;

CREATE TABLE `carbon_footprint_data` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `quantity` int NOT NULL,
  `frequency` enum('mensual','diario') COLLATE utf8mb4_unicode_ci NOT NULL,
  `material_id` bigint unsigned DEFAULT NULL,
  `type_id` bigint unsigned NOT NULL,
  `segment_id` bigint unsigned NOT NULL,
  `location_id` bigint unsigned DEFAULT NULL,
  `category_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `carbon_footprint_data_material_id_foreign` (`material_id`),
  KEY `carbon_footprint_data_type_id_foreign` (`type_id`),
  KEY `carbon_footprint_data_segment_id_foreign` (`segment_id`),
  KEY `carbon_footprint_data_location_id_foreign` (`location_id`),
  KEY `carbon_footprint_data_category_id_foreign` (`category_id`),
  CONSTRAINT `carbon_footprint_data_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  CONSTRAINT `carbon_footprint_data_location_id_foreign` FOREIGN KEY (`location_id`) REFERENCES `locations` (`id`),
  CONSTRAINT `carbon_footprint_data_material_id_foreign` FOREIGN KEY (`material_id`) REFERENCES `materials` (`id`),
  CONSTRAINT `carbon_footprint_data_segment_id_foreign` FOREIGN KEY (`segment_id`) REFERENCES `segments` (`id`),
  CONSTRAINT `carbon_footprint_data_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `types` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `carbon_footprint_data` WRITE;
/*!40000 ALTER TABLE `carbon_footprint_data` DISABLE KEYS */;

INSERT INTO `carbon_footprint_data` (`id`, `date`, `quantity`, `frequency`, `material_id`, `type_id`, `segment_id`, `location_id`, `category_id`, `created_at`, `updated_at`)
VALUES
	(1,'2022-01-01',750,'mensual',1,1,1,NULL,1,'2023-04-01 22:20:57','2023-04-01 22:20:57'),
	(2,'2022-01-01',3,'mensual',2,2,1,NULL,5,'2023-04-01 22:20:57','2023-04-01 22:20:57'),
	(3,'2022-01-01',300,'mensual',3,1,2,1,1,'2023-04-01 22:20:57','2023-04-01 22:20:57'),
	(4,'2022-01-01',1250,'mensual',1,1,1,NULL,4,'2023-04-01 22:20:57','2023-04-01 22:20:57'),
	(5,'2022-01-01',500,'mensual',1,1,3,NULL,2,'2023-04-01 22:20:57','2023-04-01 22:20:57'),
	(6,'2022-01-01',3,'mensual',NULL,3,3,NULL,2,'2023-04-01 22:20:57','2023-04-01 22:20:57'),
	(7,'2022-01-01',900,'mensual',4,1,1,NULL,5,'2023-04-01 22:20:57','2023-04-01 22:20:57'),
	(8,'2022-01-01',900,'mensual',3,1,2,2,5,'2023-04-01 22:20:57','2023-04-01 22:20:57'),
	(9,'2022-01-01',1,'diario',4,1,1,NULL,4,'2023-04-01 22:20:57','2023-04-01 22:20:57'),
	(10,'2022-01-01',300,'diario',5,1,1,NULL,1,'2023-04-01 22:20:57','2023-04-01 22:20:57'),
	(11,'2022-01-01',2,'mensual',NULL,3,3,NULL,3,'2023-04-01 22:20:57','2023-04-01 22:20:57'),
	(12,'2022-02-01',750,'mensual',1,1,1,NULL,1,'2023-04-01 22:20:57','2023-04-01 22:20:57'),
	(13,'2022-02-01',3,'mensual',2,2,1,NULL,5,'2023-04-01 22:20:57','2023-04-01 22:20:57'),
	(14,'2022-02-01',300,'mensual',3,1,2,1,1,'2023-04-01 22:20:57','2023-04-01 22:20:57'),
	(15,'2022-02-01',1250,'mensual',1,1,1,NULL,4,'2023-04-01 22:20:57','2023-04-01 22:20:57'),
	(16,'2022-02-01',500,'mensual',1,1,3,NULL,2,'2023-04-01 22:20:57','2023-04-01 22:20:57'),
	(17,'2022-02-01',3,'mensual',NULL,3,3,NULL,2,'2023-04-01 22:20:57','2023-04-01 22:20:57'),
	(18,'2022-02-01',900,'mensual',4,1,1,NULL,5,'2023-04-01 22:20:57','2023-04-01 22:20:57'),
	(19,'2022-02-01',900,'mensual',3,1,2,2,5,'2023-04-01 22:20:57','2023-04-01 22:20:57'),
	(20,'2022-02-01',1,'diario',4,1,1,NULL,4,'2023-04-01 22:20:57','2023-04-01 22:20:57'),
	(21,'2022-02-01',300,'diario',5,1,1,NULL,1,'2023-04-01 22:20:57','2023-04-01 22:20:57'),
	(22,'2022-02-01',2,'mensual',NULL,3,3,NULL,3,'2023-04-01 22:20:57','2023-04-01 22:20:57'),
	(23,'2022-03-01',750,'mensual',1,1,1,NULL,1,'2023-04-01 22:20:57','2023-04-01 22:20:57'),
	(24,'2022-03-01',3,'mensual',2,2,1,NULL,5,'2023-04-01 22:20:57','2023-04-01 22:20:57'),
	(25,'2022-03-01',300,'mensual',3,1,2,1,1,'2023-04-01 22:20:57','2023-04-01 22:20:57'),
	(26,'2022-03-01',1250,'mensual',1,1,1,NULL,4,'2023-04-01 22:20:57','2023-04-01 22:20:57'),
	(27,'2022-03-01',500,'mensual',1,1,3,NULL,2,'2023-04-01 22:20:57','2023-04-01 22:20:57'),
	(28,'2022-03-01',3,'mensual',NULL,3,3,NULL,2,'2023-04-01 22:20:57','2023-04-01 22:20:57'),
	(29,'2022-03-01',900,'mensual',4,1,1,NULL,5,'2023-04-01 22:20:57','2023-04-01 22:20:57'),
	(30,'2022-03-01',900,'mensual',3,1,2,2,5,'2023-04-01 22:20:57','2023-04-01 22:20:57'),
	(31,'2022-03-01',1,'diario',4,1,1,NULL,4,'2023-04-01 22:20:57','2023-04-01 22:20:57'),
	(32,'2022-03-01',300,'diario',5,1,1,NULL,1,'2023-04-01 22:20:57','2023-04-01 22:20:57'),
	(33,'2022-03-01',2,'mensual',NULL,3,3,NULL,3,'2023-04-01 22:20:57','2023-04-01 22:20:57'),
	(34,'2022-01-01',1,'mensual',1,1,3,NULL,2,'2023-04-01 22:38:01','2023-04-02 05:28:01'),
	(35,'2022-01-01',100,'mensual',1,1,3,NULL,2,'2023-04-02 04:19:26','2023-04-02 04:19:26'),
	(36,'2022-01-01',100,'mensual',3,1,2,NULL,3,'2023-04-02 04:30:22','2023-04-02 04:30:22'),
	(37,'2022-01-01',100,'mensual',2,1,1,NULL,3,'2023-04-02 04:52:53','2023-04-02 04:52:53'),
	(38,'2022-01-01',100,'mensual',2,1,1,NULL,3,'2023-04-02 04:53:02','2023-04-02 04:53:02'),
	(39,'2022-01-01',100,'mensual',NULL,3,3,NULL,1,'2023-04-02 05:09:00','2023-04-02 05:09:00'),
	(40,'2022-01-01',100,'mensual',NULL,3,3,NULL,1,'2023-04-02 05:17:32','2023-04-02 05:17:32'),
	(41,'2022-01-01',100,'mensual',1,1,1,NULL,2,'2023-04-02 06:00:09','2023-04-02 06:00:09');

/*!40000 ALTER TABLE `carbon_footprint_data` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
