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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `fields` */

insert  into `fields`(`id`,`type`,`name`,`required`,`values`,`created_at`,`updated_at`) values 
(1,1,'Age',1,NULL,'2019-08-23 04:43:35','2019-08-23 04:43:38'),
(2,1,'Height',1,NULL,'2019-08-23 04:43:59','2019-08-23 04:44:01'),
(4,2,'Skills',0,'[\"Tennis\",\"Music\"]','2019-08-24 00:27:24','2019-08-24 00:27:26'),
(6,1,'Eye',0,NULL,'2019-08-23 08:32:27','2019-08-23 08:32:27'),
(7,2,'Language',1,'[\"English\",\"Chinese\",\"Russian\",\"Hungarian\"]','2019-08-23 09:00:14','2019-08-23 09:00:14'),
(8,3,'Whatsapp',0,'http://pickadove.admin.com/uploads/phone1.png','2019-08-23 09:45:36','2019-08-23 09:45:36'),
(9,3,'Wechat',0,'http://pickadove.admin.com/uploads/message.png','2019-08-24 07:01:00','2019-08-24 07:01:00'),
(10,4,'Service 1',0,NULL,'2019-09-02 11:05:47','2019-09-02 11:05:50'),
(11,4,'Service 2',0,NULL,'2019-09-02 11:06:46','2019-09-02 11:06:48'),
(12,4,'Service 3',0,'','2019-09-03 15:53:57','2019-09-03 15:54:00');

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
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

/*Data for the table `profiles` */

insert  into `profiles`(`id`,`user_id`,`field_id`,`value`,`created_at`,`updated_at`) values 
(10,18,1,'275','2019-08-29 06:01:35','2019-09-03 02:02:48'),
(11,18,2,'173','2019-08-29 06:01:35','2019-09-03 02:02:48'),
(12,18,6,'black','2019-08-29 06:01:35','2019-09-03 02:02:48'),
(13,18,8,'1235','2019-08-29 06:01:35','2019-09-03 02:02:48'),
(14,18,9,'141','2019-08-29 06:01:35','2019-09-03 02:02:48'),
(15,18,4,'[\"Tennis\",\"Music\"]','2019-08-29 06:01:35','2019-09-03 02:02:48'),
(16,18,7,'[\"Chinese\",\"Russian\"]','2019-08-29 06:01:35','2019-09-03 02:02:48'),
(17,18,10,'1','2019-09-02 04:44:12','2019-09-02 04:44:12'),
(18,18,11,'1','2019-09-03 01:42:05','2019-09-03 01:42:05');

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
(1,'laguna','Very good.',0,0,19,1,'2019-08-21 13:13:51','2019-08-21 13:13:53'),
(2,'harry','Very bad',0,0,19,2,'2019-08-22 03:59:39','2019-08-22 03:59:41'),
(7,'asdfasdf','ssdfdfdf',0,0,19,1,'2019-09-01 13:30:03','2019-09-01 13:30:03'),
(8,'asdf','dfdf',0,0,19,1,'2019-09-01 13:34:50','2019-09-01 13:34:50'),
(9,'sss','dfdfdfdfdfdf',0,0,19,1,'2019-09-01 13:35:08','2019-09-01 13:35:08'),
(10,'sdfsd','asdfasdf',0,0,19,1,'2019-09-01 13:40:44','2019-09-01 13:40:44'),
(11,'sdfa','sssdf',0,0,19,2,'2019-09-01 13:40:52','2019-09-01 13:40:52');

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
  `country` varchar(255) DEFAULT NULL,
  `verification_code` varchar(10) DEFAULT NULL,
  `visible` varchar(1) DEFAULT '0',
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id`,`email`,`password`,`firstname`,`lastname`,`usertype`,`state`,`suburb`,`country`,`verification_code`,`visible`,`updated_at`,`created_at`) values 
(18,'jupiter9381@gmail.com','$2y$10$uB/.YxCVnbpKuWHF2weQLOcdRE9jUelQEN2Q0RoAo2r/lLTVD4eUm','Pavel','Yezhov',1,'SA','Sydney','Australia','220551',NULL,'2019-09-04 02:45:49','2019-08-31 06:10:43'),
(19,'peterjackson0120@gmail.com','$2y$10$Dk3xoEz0ccemQYdfnYyO1u1rZ8lFrkpBAIewU/JzqoUMZwuZHE6LC','peter','jackson',1,'NSW','Sydney','Australia','402669','0','2019-09-01 16:53:34','2019-09-01 16:53:34'),
(20,'spasov0120@yandex.com','$2y$10$Tae/pCC8mCV/cy.DF2ynPuZwU63SFoZctNRCXuSBZHP5GqTb1HSGa','peter','spasov',1,'NSW','Sydney','Australia','100695','0','2019-09-01 16:55:42','2019-09-01 16:55:42'),
(21,'nineheadfox@outlook.com','$2y$10$UftHJgK9qcjvTtgYnmMz4OPNGOYhlrBQgRmos/gQZBBxaRkptWiBy','nine','headfox',1,'NSW','Sydney','Australia','841163','0','2019-09-01 16:57:54','2019-09-01 16:57:54'),
(22,'kovacsferi.freelance@outlook.com','$2y$10$mZp7co8GQmduLgTOUr/ytuX4bcXjtD9eh6RTJiVA93ms4Dgvfw1Su','kovacs','feri',1,'NSW','Sydney','Australia','921387','0','2019-09-01 17:00:58','2019-09-01 17:00:58'),
(23,'maureenjalbert@outlook.com','$2y$10$.n/O/eDwqXmIxuj4oNH2tu8XDNkY6wqrjTK6ruQLFo4EaqbE3XAUi','asdfa','sdss',1,'NSW','Sydney','Australia','932184','0','2019-09-01 17:03:26','2019-09-01 17:03:26');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
