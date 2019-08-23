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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `fields` */

insert  into `fields`(`id`,`type`,`name`,`required`,`values`,`created_at`,`updated_at`) values 
(1,1,'Age',1,NULL,'2019-08-23 04:43:35','2019-08-23 04:43:38'),
(2,1,'Height',1,NULL,'2019-08-23 04:43:59','2019-08-23 04:44:01'),
(3,2,'Language',1,NULL,'2019-08-23 21:25:39','2019-08-23 21:25:41'),
(4,2,'Skills',0,NULL,'2019-08-24 00:27:24','2019-08-24 00:27:26');

/*Table structure for table `profile` */

DROP TABLE IF EXISTS `profile`;

CREATE TABLE `profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `field_id` int(5) DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `profile` */

insert  into `profile`(`id`,`user_id`,`field_id`,`value`,`created_at`,`updated_at`) values 
(1,7,1,'20-28','2019-08-23 03:45:31','2019-08-23 03:45:32');

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `reviews` */

insert  into `reviews`(`id`,`username`,`notes`,`parent`,`depth`,`receiver_id`,`type`,`created_at`,`updated_at`) values 
(1,'laguna','Very good.',0,0,7,1,'2019-08-21 13:13:51','2019-08-21 13:13:53'),
(2,'harry','Very bad',0,0,8,2,'2019-08-22 03:59:39','2019-08-22 03:59:41');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `usertype` int(1) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id`,`email`,`password`,`firstname`,`lastname`,`usertype`,`updated_at`,`created_at`) values 
(7,'jupiter9381@gmail.com','$2y$10$yFHgwgd4558Lk/41Xx4MRuWUF.iGHzifOEUIoQRgER1vLrWQtRj1C','jupiter','Pavel',1,'2019-08-18 17:13:59','2019-08-18 17:13:59'),
(8,'ferenc9381@gmail.com','$2y$10$WPxbOp2K7nO90.OdblwG2OUAgfHD/sYKTKS.L1qXD6pxz/sdFk70S','jupiter','Anton',0,'2019-08-18 17:41:26','2019-08-18 17:41:26');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
