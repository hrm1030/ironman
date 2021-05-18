/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 10.4.8-MariaDB : Database - recruiter
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`recruiter` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `recruiter`;

/*Table structure for table `categories` */

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `pid` int(255) DEFAULT NULL,
  `order_num` int(255) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

/*Data for the table `categories` */

insert  into `categories`(`id`,`name`,`pid`,`order_num`) values 
(1,'All Categories',0,1),
(2,'Animals & Pets',1,1),
(3,'Animal Health',2,1),
(4,'Animal Parks & Zoo',2,2),
(5,'Cats & Dogs',2,3),
(6,'Horses & Riding',2,4),
(7,'Pet Services',2,5),
(8,'Pet Sotres',2,6),
(9,'Beauty & Well-Being',1,2),
(10,'Business Services',1,3),
(11,'Construction & Manufacturing',1,4),
(12,'Education & Training',1,5),
(13,'Electronics & Technology',1,6),
(14,'Events & Entertainment',1,7),
(15,'Food, Beverages & Tobacco',1,8),
(16,'Health & Medical',1,9),
(17,'Hobbies & Craft',1,10),
(18,'Beauty',9,1);

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

/*Table structure for table `menus` */

DROP TABLE IF EXISTS `menus`;

CREATE TABLE `menus` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `pid` int(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `order_num` int(255) NOT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

/*Data for the table `menus` */

insert  into `menus`(`id`,`name`,`url`,`pid`,`icon`,`order_num`) values 
(1,'Admin','',NULL,NULL,1),
(2,'User','',NULL,NULL,2),
(3,'Leave a review','feedback',2,NULL,1),
(4,'Categories','category',2,NULL,2),
(5,'About','about',2,NULL,3),
(6,'Contact us','contact_us',2,NULL,4);

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(7,'2014_10_12_000000_create_users_table',1),
(8,'2014_10_12_100000_create_password_resets_table',1),
(9,'2019_08_19_000000_create_failed_jobs_table',1);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `reviews` */

DROP TABLE IF EXISTS `reviews`;

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) DEFAULT NULL,
  `team` varchar(50) DEFAULT NULL,
  `firm` varchar(50) DEFAULT NULL,
  `employer` varchar(50) DEFAULT NULL,
  `successful` varchar(50) DEFAULT NULL,
  `recruitment` varchar(50) DEFAULT NULL,
  `regarding` date DEFAULT NULL,
  `stars` varchar(50) DEFAULT NULL,
  `recomend` varchar(50) DEFAULT NULL,
  `recomend1` varchar(50) DEFAULT NULL,
  `reviewTitle` varchar(200) NOT NULL,
  `stars1` varchar(50) DEFAULT NULL,
  `stars2` varchar(50) DEFAULT NULL,
  `stars3` varchar(50) DEFAULT NULL,
  `stars4` varchar(50) DEFAULT NULL,
  `reviewtext` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `stars5` varchar(50) DEFAULT NULL,
  `stars6` varchar(50) DEFAULT NULL,
  `added_value` varchar(50) DEFAULT NULL,
  `interview_preparation` varchar(50) DEFAULT NULL,
  `have_gone_better` varchar(50) DEFAULT NULL,
  `reviewRating` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `reviews` */

insert  into `reviews`(`id`,`userid`,`team`,`firm`,`employer`,`successful`,`recruitment`,`regarding`,`stars`,`recomend`,`recomend1`,`reviewTitle`,`stars1`,`stars2`,`stars3`,`stars4`,`reviewtext`,`status`,`stars5`,`stars6`,`added_value`,`interview_preparation`,`have_gone_better`,`reviewRating`,`created_at`,`updated_at`) values 
(1,NULL,'recruiter','fdsafsa','asdfasf','on','sdfsaf','2021-05-06',NULL,'5','5','adfadfsadf','4','5','5','5','asdfasdfsa',1,'4','5','on','on','on','sdfsdfas',NULL,NULL),
(2,NULL,NULL,'sdfsdf','sadfasf','on','sdfsafa','2021-05-13','5','5','5','asdfsa','5','5','5','5','asdfsaf',1,'5','5','on','on','on','dfsadfsaf',NULL,NULL);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username_instead` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `recieve_news` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`surname`,`username_instead`,`recieve_news`,`email`,`user_type`,`email_verified_at`,`password`,`remember_token`,`language`,`country`,`photo_url`,`created_at`,`updated_at`) values 
(9,'suraj kumar','sss@gmail.com',NULL,NULL,'sk30682345642@gmail.com','',NULL,'$2y$10$XXJ4d8y6te346RSWXr/YAOJtgUuQrPE/KlYsT8zn68eeLoJ90qZcq',NULL,NULL,NULL,NULL,'2021-05-09 05:24:36','2021-05-09 05:24:36'),
(10,'sk306842@gmail.com','suraj',NULL,NULL,'skmmmm42@gmail.com','individual',NULL,'$2y$10$X8IuyYCDoyhDYUycydMumO1e/1anc6r8k6jS4TiMZp9LfM4ibSS6S',NULL,NULL,NULL,NULL,'2021-05-09 17:03:08','2021-05-09 17:03:08'),
(11,'sk306842@gmail.com','AXXA',NULL,NULL,'skmmmfwrfm42@gmail.com','individual',NULL,'$2y$10$O.Mwbl.3l8vB1FbSEfhLSeMKWf/vjYlvX8yoZWmgZFwbEaM0GX49m',NULL,NULL,NULL,NULL,'2021-05-09 21:15:00','2021-05-09 21:15:00'),
(12,'sk306842@gmail.com','suraj',NULL,NULL,'sk5542@gmail.com','individual',NULL,'$2y$10$cO7OPiTg2rbNJgiJGr8zAeoQsL25gyi9/BlS.nUhR7jdQp0ZKbMq6',NULL,NULL,NULL,NULL,'2021-05-09 22:25:10','2021-05-09 22:25:10'),
(13,'sk306842@gmail.com','suraj',NULL,NULL,'sk306842@gmail.com','individual',NULL,'$2y$10$4UdTjqCid9Mz1fOy.HsIdumqCb/fDOkV1Xq5DqflqeYb73qJwnLZq',NULL,NULL,NULL,NULL,'2021-05-09 22:27:44','2021-05-09 22:27:44'),
(16,'HRM hrm','HRM','hrm',NULL,'hrm.2021@outlook.com','individual',NULL,'$2y$10$fPbmcx5c2mb1V0C18wPx5uKmTHwuM50SeMTih0/A14/8xbYKZZjBC','0qCbb8CZ88MlUbUlD8PAFeQC0ezXfdsDXHl2wHgJ8mWkVwaYqFcQfBcJU9QK','us','AI','upload/users/HRM hrm.jpg','2021-05-16 18:25:05','2021-05-18 03:45:37'),
(17,'proedu2009@gmail.com',NULL,NULL,NULL,'aleksey.leha@mail.ru','business',NULL,'$2y$10$3OwePHOSP8DcAQ80OjtMeelNxh2Vdm6k7xxoYPHOh6o/ld8E0GzHS','ghD0HtcWOmvCWyOQwzztsx11RySIemMNxd0rW1JoreMqsO7kzbNkZyd2Vdft',NULL,NULL,NULL,'2021-05-17 09:52:19','2021-05-17 09:56:44');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
