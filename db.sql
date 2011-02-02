/*
SQLyog Enterprise - MySQL GUI v7.02 
MySQL - 5.1.36-community-log : Database - shutkizator
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`shutkizator` /*!40100 DEFAULT CHARACTER SET utf8 */;

/*Table structure for table `sh_shutk_categories` */

DROP TABLE IF EXISTS `sh_shutk_categories`;

CREATE TABLE `sh_shutk_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `visible` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `sh_shutk_categories` */

/*Table structure for table `sh_shutks` */

DROP TABLE IF EXISTS `sh_shutks`;

CREATE TABLE `sh_shutks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `shutk_category_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `visible` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `sh_shutks` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;