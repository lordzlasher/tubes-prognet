/*
SQLyog Ultimate v12.5.1 (32 bit)
MySQL - 10.4.21-MariaDB : Database - db_prognet_booking
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_prognet_booking` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `db_prognet_booking`;

/*Table structure for table `booking_details` */

DROP TABLE IF EXISTS `booking_details`;

CREATE TABLE `booking_details` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `booking_id` int(11) DEFAULT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_akhir` date NOT NULL,
  `quantity` int(11) NOT NULL,
  `kamar_id` int(11) NOT NULL,
  `status` enum('Belum Terbayar','Terbayar') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `booking_details` */

insert  into `booking_details`(`id`,`booking_id`,`tanggal_mulai`,`tanggal_akhir`,`quantity`,`kamar_id`,`status`,`created_at`,`updated_at`) values 
(1,1,'2021-12-05','2021-12-07',2,0,'Belum Terbayar','2021-12-04 11:32:17','2021-12-04 11:32:17'),
(2,2,'2021-12-06','2021-12-08',2,1,'Belum Terbayar','2021-12-04 11:42:27','2021-12-04 11:42:27'),
(3,3,'2021-12-04','2021-12-07',2,3,'Belum Terbayar','2021-12-04 11:43:14','2021-12-04 11:43:14'),
(4,4,'0000-00-00','0000-00-00',0,0,'Belum Terbayar',NULL,NULL);

/*Table structure for table `bookings` */

DROP TABLE IF EXISTS `bookings`;

CREATE TABLE `bookings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `kode_booking` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tamu_id` bigint(20) unsigned NOT NULL,
  `tanggal_booking` date NOT NULL,
  `total_transaksi` double NOT NULL,
  `total_terbayar` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tamu_id` (`tamu_id`),
  CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`tamu_id`) REFERENCES `tamus` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `bookings` */

insert  into `bookings`(`id`,`kode_booking`,`tamu_id`,`tanggal_booking`,`total_transaksi`,`total_terbayar`,`created_at`,`updated_at`) values 
(1,'281834',1,'2021-11-28',1000,2000,'2021-11-28 14:10:44','2021-11-28 14:10:44'),
(2,'2012313',1,'2021-12-04',100000,0,'2021-12-04 11:23:03','2021-12-04 11:23:03'),
(3,'2012313',1,'2021-12-04',100000,0,'2021-12-04 11:23:20','2021-12-04 11:23:20'),
(4,'2012313',1,'2021-12-04',100000,0,'2021-12-04 11:24:10','2021-12-04 11:24:10'),
(5,'2012313',2,'2021-12-04',100000,1,'2021-12-04 11:28:07','2021-12-04 11:28:07'),
(6,'2012313',2,'2021-12-04',100000,1,'2021-12-04 11:29:18','2021-12-04 11:29:18'),
(7,'2012313',2,'2021-12-04',100000,1,'2021-12-04 11:29:46','2021-12-04 11:29:46'),
(8,'2012313',2,'2021-12-04',100000,1,'2021-12-04 11:30:58','2021-12-04 11:30:58'),
(9,'2012313',2,'2021-12-04',100000,1,'2021-12-04 11:32:17','2021-12-04 11:32:17'),
(10,'2012313',1,'2021-12-04',100000,100000,'2021-12-04 11:35:30','2021-12-04 11:35:30'),
(11,'2012313',1,'2021-12-04',100000,100000,'2021-12-04 11:35:44','2021-12-04 11:35:44'),
(12,'2012313',1,'2021-12-04',100000,100000,'2021-12-04 11:42:27','2021-12-04 11:42:27'),
(13,'2012313',2,'2021-12-04',100000,100000,'2021-12-04 11:43:14','2021-12-04 11:43:14');

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `kamars` */

DROP TABLE IF EXISTS `kamars`;

CREATE TABLE `kamars` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tipe` enum('Standar','Deluxe','Suite') COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` double NOT NULL,
  `stok_tersedia` int(11) NOT NULL,
  `fasilitas` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_kamar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `kamars` */

insert  into `kamars`(`id`,`tipe`,`harga`,`stok_tersedia`,`fasilitas`,`foto_kamar`,`created_at`,`updated_at`) values 
(1,'Standar',1000000,1,'Ac','na','2021-11-28 12:07:13','2021-11-28 12:07:13'),
(3,'Standar',1000000,1,'a','imgs/yoQdCN1a2stfPG3wHbwPtuiClxZZ0YQRVY1mnDQX.jpg','2021-11-28 16:50:51','2021-11-28 16:50:51');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1),
(3,'2019_08_19_000000_create_failed_jobs_table',1),
(4,'2019_12_14_000001_create_personal_access_tokens_table',1),
(5,'2021_11_28_104808_create_kamars_table',2),
(6,'2021_11_28_124431_create_tamus_table',3),
(7,'2021_12_04_090713_create_booking_details_table',4);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `personal_access_tokens` */

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `personal_access_tokens` */

/*Table structure for table `tamus` */

DROP TABLE IF EXISTS `tamus`;

CREATE TABLE `tamus` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_pengenal` enum('KTP','Paspor') COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_pengenal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tamus` */

insert  into `tamus`(`id`,`id_pengenal`,`nomor_pengenal`,`nama`,`alamat`,`telepon`,`created_at`,`updated_at`) values 
(1,'KTP','32415341345','Yoga Pramana','Br. Sakah','0895342581529','2021-11-28 13:08:30','2021-11-28 13:08:30'),
(2,'KTP','32415341345','Kadek Indah Permata','Br. Medahan','082146817782','2021-11-28 13:13:55','2021-11-28 13:21:03');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
