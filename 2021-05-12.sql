/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 10.4.8-MariaDB : Database - bus
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`bus` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `bus`;

/*Table structure for table `companies` */

DROP TABLE IF EXISTS `companies`;

CREATE TABLE `companies` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `user_id` int(255) DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `companies` */

insert  into `companies`(`id`,`name`,`user_id`,`user_name`) values 
(1,'company1',NULL,NULL),
(2,'company2',NULL,NULL);

/*Table structure for table `menus` */

DROP TABLE IF EXISTS `menus`;

CREATE TABLE `menus` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `url` varchar(255) NOT NULL,
  `pid` int(255) DEFAULT NULL,
  `order_num` int(255) NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

/*Data for the table `menus` */

insert  into `menus`(`id`,`name`,`title`,`url`,`pid`,`order_num`,`icon`) values 
(1,'Super Admin',NULL,'',0,0,NULL),
(3,'Administrators',NULL,'admin_manage',1,1,'icon-users'),
(4,'Create & Edit',NULL,'edit',3,0,'fa fa-edit'),
(5,'Administrator List',NULL,'view',3,1,'fa fa-list'),
(6,'Companies',NULL,'company_manage',1,2,'icon-diamond'),
(7,'Create & Edit',NULL,'edit',6,0,'fa fa-edit'),
(8,'Company List',NULL,'list',6,1,'fa fa-list'),
(9,'Dashboard','Report & Statistics','dashboard',1,0,'icon-home'),
(2,'Company Admin',NULL,'',0,0,NULL),
(10,'Dashboard','Report & Statistics','dashboard',2,0,'icon-home');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1),
(3,'2017_08_15_033426_create_posts_table',1),
(4,'2017_08_15_033804_add_user_id_to_posts',1),
(5,'2017_08_15_034032_add_file_field_to_posts',1);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `posts` */

DROP TABLE IF EXISTS `posts`;

CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `cover_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `posts` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_id` int(255) DEFAULT NULL,
  `photo_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permission` int(1) NOT NULL DEFAULT 2 COMMENT '1: Super Admin, 2: Company Admin',
  `status` int(1) NOT NULL DEFAULT 0 COMMENT '1: Allow, 0: Prohibition',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`password`,`remember_token`,`company_id`,`photo_url`,`permission`,`status`,`created_at`,`updated_at`) values 
(1,'HRM','hrm.2021@outlook.com','$2y$10$yCUTtYoVUhcZCD2YGpWwwuzEPf2hHnYPxh4LKu4ki3xW15YRBjTnm','IGkZZeiq2U2bGLe323LcuOGZOuOJFwqKGGDr8dPd6paySn7i9AsHuPL0auX9',NULL,NULL,1,0,'2021-05-11 23:54:31','2021-05-11 23:54:31'),
(2,'Aleksey Leha','aleksey.leha@mail.ru','$2y$10$Pije4zlvvtBfsitPnr/8se4WsEibSxe3P.18LkDaPsLu7RGTXMaSS','u5HF3gPH2ol6lUounl9CErPQMEbCZ5BiHAFBJqEfX5gVkh7GMdqqj8SD6VUe',1,'upload/users/Aleksey Leha.jpg',2,0,'2021-05-12 00:49:11','2021-05-12 03:46:08');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
