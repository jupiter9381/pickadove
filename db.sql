/*
SQLyog Community v13.1.5  (64 bit)
MySQL - 10.3.16-MariaDB : Database - pickadove
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`pickadove` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `pickadove`;

/*Table structure for table `fields` */

DROP TABLE IF EXISTS `fields`;

CREATE TABLE `fields` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` int(2) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `required` int(1) DEFAULT NULL,
  `values` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `fields` */

insert  into `fields`(`id`,`type`,`name`,`required`,`values`,`created_at`,`updated_at`) values 
(1,1,'Age',1,NULL,'2019-08-23 04:43:35','2019-08-23 04:43:38'),
(2,1,'Height',1,NULL,'2019-08-23 04:43:59','2019-08-23 04:44:01'),
(4,2,'Skills',0,'[\"Tennis\",\"Music\"]','2019-08-24 00:27:24','2019-08-24 00:27:26'),
(6,1,'Eye',0,NULL,'2019-08-23 08:32:27','2019-08-23 08:32:27'),
(7,2,'Language',1,'[\"English\",\"Chinese\",\"Russian\",\"Hungarian\"]','2019-08-23 09:00:14','2019-08-23 09:00:14'),
(8,3,'Whatsapp',0,'http://pickadove.admin.com/uploads/phone1.png','2019-08-23 09:45:36','2019-08-23 09:45:36'),
(9,3,'Wechat',0,'http://pickadove.admin.com/uploads/message.png','2019-08-24 07:01:00','2019-08-24 07:01:00');

/*Table structure for table `profiles` */

DROP TABLE IF EXISTS `profiles`;

CREATE TABLE `profiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `field_id` int(5) DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

/*Data for the table `profiles` */

insert  into `profiles`(`id`,`user_id`,`field_id`,`value`,`created_at`,`updated_at`) values 
(10,7,1,'27','2019-08-29 06:01:35','2019-08-29 06:01:35'),
(11,7,2,'173','2019-08-29 06:01:35','2019-08-29 06:01:35'),
(12,7,6,'black','2019-08-29 06:01:35','2019-08-29 06:01:35'),
(13,7,8,'123','2019-08-29 06:01:35','2019-08-29 06:01:35'),
(14,7,9,'141','2019-08-29 06:01:35','2019-08-29 06:01:35'),
(15,7,4,'[\"Tennis\"]','2019-08-29 06:01:35','2019-08-29 06:01:35'),
(16,7,7,'[\"Chinese\"]','2019-08-29 06:01:35','2019-08-29 06:01:35');

/*Table structure for table `reviews` */

DROP TABLE IF EXISTS `reviews`;

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `parent` int(11) DEFAULT NULL,
  `depth` int(11) DEFAULT NULL,
  `receiver_id` int(11) DEFAULT NULL,
  `type` int(2) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `reviews` */

insert  into `reviews`(`id`,`username`,`notes`,`parent`,`depth`,`receiver_id`,`type`,`created_at`,`updated_at`) values 
(1,'laguna','Very good.',0,0,18,1,'2019-08-21 13:13:51','2019-08-21 13:13:53'),
(2,'harry','Very bad',0,0,18,2,'2019-08-22 03:59:39','2019-08-22 03:59:41'),
(7,'asdfasdf','ssdfdfdf',0,0,18,1,'2019-09-01 13:30:03','2019-09-01 13:30:03'),
(8,'asdf','dfdf',0,0,18,1,'2019-09-01 13:34:50','2019-09-01 13:34:50'),
(9,'sss','dfdfdfdfdfdf',0,0,18,1,'2019-09-01 13:35:08','2019-09-01 13:35:08'),
(10,'sdfsd','asdfasdf',0,0,18,1,'2019-09-01 13:40:44','2019-09-01 13:40:44'),
(11,'sdfa','sssdf',0,0,18,2,'2019-09-01 13:40:52','2019-09-01 13:40:52');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `usertype` int(1) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `suburb` varchar(255) DEFAULT NULL,
  `verification_code` varchar(10) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id`,`email`,`password`,`firstname`,`lastname`,`usertype`,`state`,`suburb`,`verification_code`,`updated_at`,`created_at`) values 
(18,'jupiter9381@gmail.com','$2y$10$D5Ck23Wk7d74WF9/e.0ZoOK7.tSZnv8TWNWfMAFe10QaxJuYk4cEa','Pavel','Yezhov',1,NULL,NULL,'220551','2019-08-31 06:10:43','2019-08-31 06:10:43');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
