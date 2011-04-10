/*
SQLyog Ultimate v8.71 
MySQL - 5.0.45-community-nt : Database - shutkizator
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`shutkizator` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `shutkizator`;

/*Table structure for table `ratings` */

DROP TABLE IF EXISTS `ratings`;

CREATE TABLE `ratings` (
  `id` int(11) NOT NULL auto_increment,
  `shutk_id` int(11) NOT NULL,
  `rate` int(2) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ratings` */

/*Table structure for table `sh_acos` */

DROP TABLE IF EXISTS `sh_acos`;

CREATE TABLE `sh_acos` (
  `id` int(10) NOT NULL auto_increment,
  `parent_id` int(10) default NULL,
  `model` varchar(255) default NULL,
  `foreign_key` int(10) default NULL,
  `alias` varchar(255) default NULL,
  `lft` int(10) default NULL,
  `rght` int(10) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8;

/*Data for the table `sh_acos` */

insert  into `sh_acos`(`id`,`parent_id`,`model`,`foreign_key`,`alias`,`lft`,`rght`) values (1,NULL,NULL,NULL,'controllers',1,132),(2,1,NULL,NULL,'Pages',2,19),(3,2,NULL,NULL,'display',3,4),(4,2,NULL,NULL,'fbInit',5,6),(5,2,NULL,NULL,'auth',7,8),(6,2,NULL,NULL,'add',9,10),(7,2,NULL,NULL,'edit',11,12),(8,2,NULL,NULL,'index',13,14),(9,2,NULL,NULL,'view',15,16),(10,2,NULL,NULL,'delete',17,18),(11,1,NULL,NULL,'Shutks',20,49),(12,11,NULL,NULL,'view',21,22),(13,11,NULL,NULL,'feed',23,24),(14,11,NULL,NULL,'contribute',25,26),(15,11,NULL,NULL,'admin_index',27,28),(16,11,NULL,NULL,'admin_view',29,30),(17,11,NULL,NULL,'admin_add',31,32),(18,11,NULL,NULL,'admin_edit',33,34),(19,11,NULL,NULL,'admin_delete',35,36),(20,11,NULL,NULL,'fbInit',37,38),(21,11,NULL,NULL,'auth',39,40),(22,11,NULL,NULL,'add',41,42),(23,11,NULL,NULL,'edit',43,44),(24,11,NULL,NULL,'index',45,46),(25,11,NULL,NULL,'delete',47,48),(26,1,NULL,NULL,'ShutkCategories',50,75),(27,26,NULL,NULL,'index',51,52),(28,26,NULL,NULL,'view',53,54),(29,26,NULL,NULL,'add',55,56),(30,26,NULL,NULL,'edit',57,58),(31,26,NULL,NULL,'delete',59,60),(32,26,NULL,NULL,'admin_index',61,62),(33,26,NULL,NULL,'admin_view',63,64),(34,26,NULL,NULL,'admin_add',65,66),(35,26,NULL,NULL,'admin_edit',67,68),(36,26,NULL,NULL,'admin_delete',69,70),(37,26,NULL,NULL,'fbInit',71,72),(38,26,NULL,NULL,'auth',73,74),(39,1,NULL,NULL,'Users',76,105),(40,39,NULL,NULL,'admin_index',77,78),(41,39,NULL,NULL,'admin_view',79,80),(42,39,NULL,NULL,'admin_add',81,82),(43,39,NULL,NULL,'admin_edit',83,84),(44,39,NULL,NULL,'admin_delete',85,86),(45,39,NULL,NULL,'admin_login',87,88),(46,39,NULL,NULL,'admin_logout',89,90),(47,39,NULL,NULL,'fbInit',91,92),(48,39,NULL,NULL,'auth',93,94),(49,39,NULL,NULL,'add',95,96),(50,39,NULL,NULL,'edit',97,98),(51,39,NULL,NULL,'index',99,100),(52,39,NULL,NULL,'view',101,102),(53,39,NULL,NULL,'delete',103,104),(54,1,NULL,NULL,'UserGroups',106,131),(55,54,NULL,NULL,'index',107,108),(56,54,NULL,NULL,'view',109,110),(57,54,NULL,NULL,'add',111,112),(58,54,NULL,NULL,'edit',113,114),(59,54,NULL,NULL,'delete',115,116),(60,54,NULL,NULL,'admin_index',117,118),(61,54,NULL,NULL,'admin_view',119,120),(62,54,NULL,NULL,'admin_add',121,122),(63,54,NULL,NULL,'admin_edit',123,124),(64,54,NULL,NULL,'admin_delete',125,126),(65,54,NULL,NULL,'fbInit',127,128),(66,54,NULL,NULL,'auth',129,130);

/*Table structure for table `sh_aros` */

DROP TABLE IF EXISTS `sh_aros`;

CREATE TABLE `sh_aros` (
  `id` int(10) NOT NULL auto_increment,
  `parent_id` int(10) default NULL,
  `model` varchar(255) default NULL,
  `foreign_key` int(10) default NULL,
  `alias` varchar(255) default NULL,
  `lft` int(10) default NULL,
  `rght` int(10) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

/*Data for the table `sh_aros` */

insert  into `sh_aros`(`id`,`parent_id`,`model`,`foreign_key`,`alias`,`lft`,`rght`) values (3,NULL,'UserGroup',4,'super_administrators',1,6),(4,3,'User',8,'admin',2,3),(5,NULL,'UserGroup',5,'contributors',7,10),(6,5,'User',9,'cont',8,9),(7,3,'User',11,'cont',4,5);

/*Table structure for table `sh_aros_acos` */

DROP TABLE IF EXISTS `sh_aros_acos`;

CREATE TABLE `sh_aros_acos` (
  `id` int(10) NOT NULL auto_increment,
  `aro_id` int(10) NOT NULL,
  `aco_id` int(10) NOT NULL,
  `_create` varchar(2) NOT NULL default '0',
  `_read` varchar(2) NOT NULL default '0',
  `_update` varchar(2) NOT NULL default '0',
  `_delete` varchar(2) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `ARO_ACO_KEY` (`aro_id`,`aco_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `sh_aros_acos` */

insert  into `sh_aros_acos`(`id`,`aro_id`,`aco_id`,`_create`,`_read`,`_update`,`_delete`) values (1,5,1,'1','1','1','1'),(2,3,1,'1','1','1','1'),(3,5,39,'-1','-1','-1','-1'),(4,5,40,'1','1','1','1'),(5,5,41,'1','1','1','1');

/*Table structure for table `sh_shutk_categories` */

DROP TABLE IF EXISTS `sh_shutk_categories`;

CREATE TABLE `sh_shutk_categories` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  `visible` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `sh_shutk_categories` */

insert  into `sh_shutk_categories`(`id`,`name`,`visible`,`created`,`modified`) values (1,'General',1,'2011-02-06 13:35:13','2011-02-06 13:35:13');

/*Table structure for table `sh_shutks` */

DROP TABLE IF EXISTS `sh_shutks`;

CREATE TABLE `sh_shutks` (
  `id` int(11) NOT NULL auto_increment,
  `shutk_category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `visible` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `sh_shutks` */

insert  into `sh_shutks`(`id`,`shutk_category_id`,`user_id`,`name`,`text`,`visible`,`created`,`modified`) values (1,1,8,'შუტკა ხინკალზე','ხოოოდა, კაცი შედის რესოტორანში, და მზარეულს ეუბნება<br />\r\n- 99 ხინკალი მომეცით<br />\r\n- ბარემ 100-ი აიღე რაღა 99<br />\r\nეს კი ეუბნება<br />\r\n- 100 რა ღორი კიარ ვარო!',1,'2011-02-06 13:35:55','2011-03-14 18:43:28'),(2,1,8,'asdasdasd','ხოოოდა, asdasd\'s',1,'2011-02-13 12:00:17','2011-03-14 18:07:23'),(3,1,9,'asd','ხოოოდა, ასდად',1,'2011-03-13 14:12:48','2011-03-13 14:12:48'),(4,1,8,'Testshutk 2','ხოოოდა, ასდა',1,'2011-03-20 14:34:15','2011-03-20 14:34:15');

/*Table structure for table `sh_user_groups` */

DROP TABLE IF EXISTS `sh_user_groups`;

CREATE TABLE `sh_user_groups` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` date NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `sh_user_groups` */

insert  into `sh_user_groups`(`id`,`name`,`description`,`created`,`modified`) values (4,'Super Administrators','Cool Guys','2011-03-03 17:37:26','2011-03-03'),(5,'Contributors','People who provide shutks, these are people with some decent sense of humor and have earned respect among the administration.','2011-03-13 09:02:26','2011-03-13');

/*Table structure for table `sh_users` */

DROP TABLE IF EXISTS `sh_users`;

CREATE TABLE `sh_users` (
  `id` int(11) NOT NULL auto_increment,
  `user_group_id` int(11) NOT NULL,
  `username` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL default '',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

/*Data for the table `sh_users` */

insert  into `sh_users`(`id`,`user_group_id`,`username`,`password`,`created`,`modified`) values (8,4,'admin','f9ebd14382ab06b401a0d2f62dcb9ed3a38e0bd6','2011-03-03 17:37:39','2011-03-13 10:05:36');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
