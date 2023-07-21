/*
SQLyog Professional v13.1.1 (64 bit)
MySQL - 8.0.30 : Database - test_velzon
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`test_velzon` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `test_velzon`;

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `jobs` */

DROP TABLE IF EXISTS `jobs`;

CREATE TABLE `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `jobs` */

/*Table structure for table `mail_templates` */

DROP TABLE IF EXISTS `mail_templates`;

CREATE TABLE `mail_templates` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `template_code` varchar(255) DEFAULT NULL,
  `template_name` varchar(255) DEFAULT NULL,
  `mailable` varchar(255) NOT NULL,
  `subject` text,
  `html_template` longtext NOT NULL,
  `text_template` longtext,
  `template_type` enum('SMS','EMAIL','WHATS_APP') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT 'EMAIL',
  `created_at` timestamp NULL DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `mail_templates` */

insert  into `mail_templates`(`id`,`template_code`,`template_name`,`mailable`,`subject`,`html_template`,`text_template`,`template_type`,`created_at`,`created_by`,`updated_at`,`updated_by`,`deleted_at`,`deleted_by`) values 
(19,'create_user_notification','Create user notification','App\\Mail\\UserCreateNotification','User Create Notification','<p>Hello {{NAME}}</p>\r\n\r\n<p>We have created your account in {{PRACTICE_NAME}} backen and below is the login details.</p>\r\n\r\n<p>Username: {{USER}}</p>\r\n\r\n<p>Password: {{PASSWORD}}</p>\r\n\r\n<p>{{LOGIN}}</p>\r\n\r\n<p>Regards,<br />\r\n{{PRACTICE_NAME}}</p>\r\n\r\n<p><span style=\"color:#e74c3c\"><strong>DO NOT REPLY TO THIS E-MAIL</strong></span><br />\r\nThis is an automated e-mail message sent from our support system.<br />\r\nDo not reply to this e-mail as we will not receive your reply!</p>','Hello \\n \\n I am inviting you to a video consultation session. Please click below to join the consultation (no account needed) \\n \\nVideo consultation time: {time} \\n \\nVideo consultation link: {URL} \\n \\nBest Regards,\\n{PRACTICE_NAME}','EMAIL',NULL,NULL,'2021-09-30 07:52:54',NULL,NULL,NULL),
(21,'reset_password_notification','Reset Password Notification','App\\Mail\\ResetPasswordMail','Reset Password Notification','<p>You are receiving this email because we received a password reset request for your account.</p>\r\n\r\n<p>{{RESET}}</p>\r\n\r\n<p>This password reset link will expire in 60 minutes.</p>\r\n\r\n<p>If you did not request a password reset, no further action is required.</p>\r\n\r\n<p>Regards,<br />\r\n{{PRACTICE_NAME}}</p>\r\n\r\n<p><span style=\"color:#e74c3c\"><strong>DO NOT REPLY TO THIS E-MAIL</strong></span><br />\r\nThis is an automated e-mail message sent from our support system.<br />\r\nDo not reply to this e-mail as we will not receive your reply!</p>','Hello \\n \\n I am inviting you to a video consultation session. Please click below to join the consultation (no account needed) \\n \\nVideo consultation time: {time} \\n \\nVideo consultation link: {URL} \\n \\nBest Regards,\\n{PRACTICE_NAME}','EMAIL',NULL,NULL,'2022-01-27 07:31:15',NULL,NULL,NULL),
(40,'templete_create_notification','Templete Create Notification','App\\Mail\\TempleteCreateNotification','Templete Create Notification','<p>Templete Create Notification</p>',NULL,'EMAIL',NULL,NULL,'2023-06-13 05:11:46',NULL,NULL,NULL);

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1),
(3,'2019_08_19_000000_create_failed_jobs_table',1),
(4,'2019_12_14_000001_create_personal_access_tokens_table',1),
(5,'2023_06_12_063403_create_permission_tables',2);

/*Table structure for table `model_has_permissions` */

DROP TABLE IF EXISTS `model_has_permissions`;

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `model_has_permissions` */

/*Table structure for table `model_has_roles` */

DROP TABLE IF EXISTS `model_has_roles`;

CREATE TABLE `model_has_roles` (
  `role_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `model_has_roles` */

insert  into `model_has_roles`(`role_id`,`model_type`,`model_id`) values 
(1,'App\\Models\\User',1),
(6,'App\\Models\\User',4),
(2,'App\\Models\\User',6),
(2,'App\\Models\\User',7),
(1,'App\\Models\\User',8),
(2,'App\\Models\\User',8),
(6,'App\\Models\\User',9),
(2,'App\\Models\\User',10),
(6,'App\\Models\\User',12),
(2,'App\\Models\\User',15),
(6,'App\\Models\\User',16),
(6,'App\\Models\\User',18),
(2,'App\\Models\\User',19),
(2,'App\\Models\\User',20),
(2,'App\\Models\\User',21),
(6,'App\\Models\\User',22),
(6,'App\\Models\\User',23),
(2,'App\\Models\\User',24),
(6,'App\\Models\\User',25),
(6,'App\\Models\\User',26),
(6,'App\\Models\\User',31),
(6,'App\\Models\\User',33);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `permissions` */

DROP TABLE IF EXISTS `permissions`;

CREATE TABLE `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `permission_label` varchar(255) DEFAULT NULL,
  `guard_name` varchar(255) NOT NULL,
  `is_active` enum('Y','N') DEFAULT 'Y',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `permissions` */

insert  into `permissions`(`id`,`title`,`name`,`permission_label`,`guard_name`,`is_active`,`created_at`,`updated_at`) values 
(1,'Dashboard','home','Dashboard','web','Y','2021-09-30 06:06:57','2023-06-12 11:58:16'),
(2,'Settings','setting.index','Site configuration show','web','Y','2021-09-30 06:06:57','2021-09-30 06:06:57'),
(3,'Settings','emailtemplate.index','Email template show','web','Y','2021-09-30 06:06:57','2021-09-30 06:06:57'),
(4,'Settings','emailtemplates.create','Email edit','web','Y','2021-09-30 06:06:57','2021-09-30 06:06:57'),
(5,'User and role management','usermanagements.index','User show','web','Y','2021-09-30 06:06:57','2021-09-30 06:06:57'),
(6,'User and role management','usermanagements.create','User create','web','Y','2021-09-30 06:06:57','2021-09-30 06:06:57'),
(7,'User and role management','usermanagements.edit','User edit','web','Y','2021-09-30 06:06:57','2021-09-30 06:06:57'),
(8,'User and role management','usermanagements.destroy','User delete','web','Y','2021-09-30 06:06:57','2021-09-30 06:06:57'),
(9,'User and role management','roles.index','Role show','web','Y','2021-09-30 06:06:57','2021-09-30 06:06:57'),
(10,'User and role management','roles.create','Role create','web','Y','2021-09-30 06:06:57','2021-09-30 06:06:57'),
(11,'User and role management','roles.edit','Role edit','web','Y','2021-09-30 06:06:57','2021-09-30 06:06:57'),
(12,'User and role management','roles.destroy','Role delete','web','Y','2021-09-30 06:06:57','2021-09-30 06:06:57');

/*Table structure for table `personal_access_tokens` */

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `personal_access_tokens` */

/*Table structure for table `role_has_permissions` */

DROP TABLE IF EXISTS `role_has_permissions`;

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `role_has_permissions` */

insert  into `role_has_permissions`(`permission_id`,`role_id`) values 
(1,1),
(2,1),
(3,1),
(4,1),
(5,1),
(6,1),
(7,1),
(8,1),
(9,1),
(10,1),
(11,1),
(12,1),
(1,2),
(2,2),
(3,2),
(4,2),
(5,2),
(6,2),
(7,2),
(9,2),
(10,2),
(11,2),
(1,6),
(2,6),
(3,6),
(4,6),
(5,6),
(7,6),
(8,6),
(9,6),
(11,6),
(12,6),
(1,8),
(2,8),
(9,8);

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `show_while_creating_user` enum('YES','NO') DEFAULT 'YES',
  `created_at` timestamp NULL DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `roles` */

insert  into `roles`(`id`,`name`,`guard_name`,`show_while_creating_user`,`created_at`,`created_by`,`updated_at`,`updated_by`,`deleted_at`,`deleted_by`) values 
(1,'Super Admin','web','YES','2021-09-30 06:02:37',NULL,'2021-09-30 06:02:37',NULL,NULL,NULL),
(2,'Admin','web','YES','2021-09-30 06:02:38',NULL,'2021-09-30 06:02:38',NULL,NULL,NULL),
(6,'Demo 1','web','YES','2022-01-27 07:16:05',NULL,'2023-06-12 11:57:20',1,NULL,NULL),
(8,'demo 1 role create','web','YES','2023-06-12 11:49:14',1,'2023-06-12 11:50:01',NULL,'2023-06-12 11:50:01',NULL);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_code` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_expires_at` datetime DEFAULT NULL,
  `is_account_locked` enum('Y','N') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'Y',
  `logins` int DEFAULT NULL,
  `last_login_ip` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_login_at` datetime DEFAULT NULL,
  `account_locked_at` datetime DEFAULT NULL,
  `login_attempt` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `deleted_at` int DEFAULT NULL,
  `deleted_by` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`mobile`,`email`,`email_verified_at`,`password`,`avatar`,`remember_token`,`two_factor_code`,`two_factor_expires_at`,`is_account_locked`,`logins`,`last_login_ip`,`last_login_at`,`account_locked_at`,`login_attempt`,`created_at`,`created_by`,`updated_at`,`updated_by`,`deleted_at`,`deleted_by`) values 
(1,'admin','7777777777','admin@mailinator.com',NULL,'$2y$10$N7kd/MtjMQXxqPUHGpPKm.2rTMnKRke.gKXo05uOnFdxpKAORiAJS','avatar-1.jpg','6U3EaAqemRT9M0Jx8QX2CBhZhGXl2S02JOkOTh18Ab3s6tycXJrY4pEjGPGM','263459','2023-06-13 06:44:13','Y',48,'127.0.0.1','2023-06-13 06:34:13','2023-06-13 06:36:16',5,'2023-06-07 09:35:31',NULL,'2023-06-13 06:36:16',NULL,NULL,NULL),
(6,'Belle Vaughan',NULL,'rycir@mailinator.com',NULL,'$2y$10$MAL0i/kM7T5JjcR23IHPbOkLPEu3RQI9NAuMIOFFg2o7cmsMH6t4y',NULL,NULL,NULL,NULL,'Y',NULL,NULL,NULL,NULL,NULL,'2023-06-12 08:34:36',NULL,'2023-06-12 08:34:36',NULL,NULL,NULL),
(7,'Liberty Day','9898989898','sete@mailinator.com',NULL,'$2y$10$N7kd/MtjMQXxqPUHGpPKm.2rTMnKRke.gKXo05uOnFdxpKAORiAJS',NULL,NULL,'152326','2023-06-13 06:47:30','N',1,'127.0.0.1','2023-06-13 06:37:30',NULL,0,'2023-06-12 09:01:04',NULL,'2023-06-13 06:37:30',NULL,NULL,NULL),
(8,'Ocean Pate',NULL,'xydy@mailinator.com',NULL,'$2y$10$v2MhofTIYMC1Ln0o/WLYDecEyFYRTBDD.QjJKLp0wRcL7jfFJfY2m',NULL,NULL,NULL,NULL,'Y',NULL,NULL,NULL,NULL,NULL,'2023-06-12 09:02:30',NULL,'2023-06-12 09:02:30',NULL,NULL,NULL),
(9,'Jade Curry',NULL,'vycoril@mailinator.com',NULL,'$2y$10$.AkB7baKq.PAlZm9GLy.1uX2EMKIgdBAwd8ljLkQH4qMAHv1bC64a',NULL,NULL,NULL,NULL,'Y',NULL,NULL,NULL,NULL,NULL,'2023-06-12 09:04:04',NULL,'2023-06-12 09:04:04',NULL,NULL,NULL),
(10,'Xena Miles',NULL,'cirexapoza@mailinator.com',NULL,'$2y$10$kwd0W1bBkuFI7KiUc2GVm.FknLh9EKp9oS.aesBbYTylGNhaXUAsG',NULL,NULL,NULL,NULL,'Y',NULL,NULL,NULL,NULL,NULL,'2023-06-12 09:19:01',NULL,'2023-06-12 09:19:01',NULL,NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
