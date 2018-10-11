/*
SQLyog - Free MySQL GUI v5.15
Host - 5.6.22 : Database - console
*********************************************************************
Server version : 5.6.22
*/

SET NAMES utf8;

SET SQL_MODE='';

create database if not exists `console`;

USE `console`;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO';

/*Table structure for table `business_unit` */

DROP TABLE IF EXISTS `business_unit`;

CREATE TABLE `business_unit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bu_name` varchar(50) DEFAULT NULL,
  `bu_desc` text,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `business_unit` */

insert into `business_unit` (`id`,`bu_name`,`bu_desc`,`status`) values (1,'Bu1','this is bu1',1);
insert into `business_unit` (`id`,`bu_name`,`bu_desc`,`status`) values (3,'bu2','this is bu2',1);

/*Table structure for table `client_service` */

DROP TABLE IF EXISTS `client_service`;

CREATE TABLE `client_service` (
  `id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `client_service` */

/*Table structure for table `clientmaster` */

DROP TABLE IF EXISTS `clientmaster`;

CREATE TABLE `clientmaster` (
  `client_id` int(11) NOT NULL AUTO_INCREMENT,
  `client_type` varchar(50) DEFAULT NULL,
  `bu` int(4) DEFAULT NULL,
  `industry_name` int(11) DEFAULT NULL,
  `client_code` varchar(255) DEFAULT NULL,
  `client_name` varchar(100) DEFAULT NULL,
  `address1` varchar(255) DEFAULT NULL,
  `address2` varchar(255) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `zip` int(6) DEFAULT NULL,
  `email_id` varchar(100) DEFAULT NULL,
  `phone` varchar(16) DEFAULT NULL,
  `mobile` varchar(16) DEFAULT NULL,
  `fax` varchar(16) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `cp_name` varchar(100) DEFAULT NULL,
  `cp_email_id` varchar(100) DEFAULT NULL,
  `cp_mobile` varchar(16) DEFAULT NULL,
  `created_by` int(4) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `activation_date` datetime DEFAULT NULL,
  `deactivation_date` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `service_needed` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

/*Data for the table `clientmaster` */

insert into `clientmaster` (`client_id`,`client_type`,`bu`,`industry_name`,`client_code`,`client_name`,`address1`,`address2`,`city`,`state`,`country`,`zip`,`email_id`,`phone`,`mobile`,`fax`,`website`,`description`,`logo`,`cp_name`,`cp_email_id`,`cp_mobile`,`created_by`,`created_on`,`activation_date`,`deactivation_date`,`status`,`service_needed`) values (1,'External',0,1,'vcx','wipro','Gurgaon','vcxv','Gurgaon','Haryana','vxx',0,'wipro@gmail.com','vcxcv','9685741235','vx','www.x.com','vx','1538725005_second.png','vxxvc','xvx@m.com','vxc',0,'2018-10-01 16:04:02','2018-10-10 00:00:00','2018-10-22 00:00:00',0,'2');
insert into `clientmaster` (`client_id`,`client_type`,`bu`,`industry_name`,`client_code`,`client_name`,`address1`,`address2`,`city`,`state`,`country`,`zip`,`email_id`,`phone`,`mobile`,`fax`,`website`,`description`,`logo`,`cp_name`,`cp_email_id`,`cp_mobile`,`created_by`,`created_on`,`activation_date`,`deactivation_date`,`status`,`service_needed`) values (2,'External',0,2,'fdsa','ADas','dsaa','fs','fwsa','fws','fws',0,'a@m.com','fwsadf',NULL,'dsadf','dsad','afwsa','1538725005_second.png','fsdd','a@mail.com','fs',0,'2018-10-04 19:04:50','0000-00-00 00:00:00','0000-00-00 00:00:00',0,'1');
insert into `clientmaster` (`client_id`,`client_type`,`bu`,`industry_name`,`client_code`,`client_name`,`address1`,`address2`,`city`,`state`,`country`,`zip`,`email_id`,`phone`,`mobile`,`fax`,`website`,`description`,`logo`,`cp_name`,`cp_email_id`,`cp_mobile`,`created_by`,`created_on`,`activation_date`,`deactivation_date`,`status`,`service_needed`) values (3,'External',0,3,'FDSDAF','zsdAF','DSADF','sdAS','DFASF','SDFADF','FDASF',0,'a@gmail.com','142413',NULL,'ASDASDF','DFSAF','FWESDG','','FDDSF','a@mail.com','FDS',0,'2018-10-05 13:06:45','2018-11-01 00:00:00','2018-10-10 00:00:00',1,'1');
insert into `clientmaster` (`client_id`,`client_type`,`bu`,`industry_name`,`client_code`,`client_name`,`address1`,`address2`,`city`,`state`,`country`,`zip`,`email_id`,`phone`,`mobile`,`fax`,`website`,`description`,`logo`,`cp_name`,`cp_email_id`,`cp_mobile`,`created_by`,`created_on`,`activation_date`,`deactivation_date`,`status`,`service_needed`) values (4,'External',0,2,'FDSDAF','zsdAF','DSADF','sdAS','DFASF','SDFADF','FDASF',0,'a@gmail.com','142413',NULL,'ASDASDF','DFSAF','FWESDG','1538725071_second.png','FDDSF','a@mail.com','FDS',0,'2018-10-05 13:07:51','2018-11-01 00:00:00','2018-10-10 00:00:00',0,'1');
insert into `clientmaster` (`client_id`,`client_type`,`bu`,`industry_name`,`client_code`,`client_name`,`address1`,`address2`,`city`,`state`,`country`,`zip`,`email_id`,`phone`,`mobile`,`fax`,`website`,`description`,`logo`,`cp_name`,`cp_email_id`,`cp_mobile`,`created_by`,`created_on`,`activation_date`,`deactivation_date`,`status`,`service_needed`) values (13,'External',0,1,'sfs','sfdadf','fds','safs','sdf','sadfs','fsd',0,'a@m.com','1242345235',NULL,'arfasfd','safda','asfwfs','1538737492_second.png','sgf','a@mail.com','23154534',0,'2018-10-05 16:34:52','2018-10-02 00:00:00','2018-10-02 00:00:00',1,NULL);
insert into `clientmaster` (`client_id`,`client_type`,`bu`,`industry_name`,`client_code`,`client_name`,`address1`,`address2`,`city`,`state`,`country`,`zip`,`email_id`,`phone`,`mobile`,`fax`,`website`,`description`,`logo`,`cp_name`,`cp_email_id`,`cp_mobile`,`created_by`,`created_on`,`activation_date`,`deactivation_date`,`status`,`service_needed`) values (18,'External',0,2,'sfs','sfdadf','fds','safs','sdf','sadfs','fsd',0,'a@m.com','1242345235',NULL,'arfasfd','safda','asfwfs','','sgf','a@mail.com','23154534',0,'2018-10-05 17:17:10','2018-10-02 00:00:00','2018-10-02 00:00:00',1,'1,2');
insert into `clientmaster` (`client_id`,`client_type`,`bu`,`industry_name`,`client_code`,`client_name`,`address1`,`address2`,`city`,`state`,`country`,`zip`,`email_id`,`phone`,`mobile`,`fax`,`website`,`description`,`logo`,`cp_name`,`cp_email_id`,`cp_mobile`,`created_by`,`created_on`,`activation_date`,`deactivation_date`,`status`,`service_needed`) values (19,'External',0,0,'sfs','sfdadf','fds','safs','sdf','sadfs','fsd',0,'a@m.com','1242345235',NULL,'arfasfd','safda','asfwfs','1538740287_second.png','sgf','a@mail.com','23154534',0,'2018-10-05 17:21:27','2018-10-02 00:00:00','2018-10-02 00:00:00',0,'1,2');
insert into `clientmaster` (`client_id`,`client_type`,`bu`,`industry_name`,`client_code`,`client_name`,`address1`,`address2`,`city`,`state`,`country`,`zip`,`email_id`,`phone`,`mobile`,`fax`,`website`,`description`,`logo`,`cp_name`,`cp_email_id`,`cp_mobile`,`created_by`,`created_on`,`activation_date`,`deactivation_date`,`status`,`service_needed`) values (40,'External',NULL,0,'p-ni002','Abhi','','','','','',NULL,'','y68t89y9e',NULL,'we1','','testing',NULL,'Abhishek','','7503275011',NULL,'2018-10-08 15:23:36','0000-00-00 00:00:00','0000-00-00 00:00:00',0,NULL);
insert into `clientmaster` (`client_id`,`client_type`,`bu`,`industry_name`,`client_code`,`client_name`,`address1`,`address2`,`city`,`state`,`country`,`zip`,`email_id`,`phone`,`mobile`,`fax`,`website`,`description`,`logo`,`cp_name`,`cp_email_id`,`cp_mobile`,`created_by`,`created_on`,`activation_date`,`deactivation_date`,`status`,`service_needed`) values (41,'External',0,0,'bu-783','Abhi','cdas','','newdelhi','delhi','ibdia',110070,'A@H.COM','7503275011',NULL,'Sda','adASF','it ','1538993589_consoledb.PNG','Abhishek','abhi@n.com','7503275011',0,'2018-10-08 15:43:09','0000-00-00 00:00:00','0000-00-00 00:00:00',1,NULL);
insert into `clientmaster` (`client_id`,`client_type`,`bu`,`industry_name`,`client_code`,`client_name`,`address1`,`address2`,`city`,`state`,`country`,`zip`,`email_id`,`phone`,`mobile`,`fax`,`website`,`description`,`logo`,`cp_name`,`cp_email_id`,`cp_mobile`,`created_by`,`created_on`,`activation_date`,`deactivation_date`,`status`,`service_needed`) values (43,'Internal',0,0,'p-ni002','Quatrro gbolbal services','119 , udhyog vihar phase1','','GUrgaon','Haryana','india',110070,'abhishek@gmail.com','7503275011',NULL,'we','quatrro.com','it is nice','1539079789_systemip.PNG','Abhi','abhishek@g.com','7503275011',0,'2018-10-09 15:39:49','2018-10-24 00:00:00','2018-10-15 00:00:00',1,'1,2');
insert into `clientmaster` (`client_id`,`client_type`,`bu`,`industry_name`,`client_code`,`client_name`,`address1`,`address2`,`city`,`state`,`country`,`zip`,`email_id`,`phone`,`mobile`,`fax`,`website`,`description`,`logo`,`cp_name`,`cp_email_id`,`cp_mobile`,`created_by`,`created_on`,`activation_date`,`deactivation_date`,`status`,`service_needed`) values (44,'Internal',0,0,'p-ni002','Quatrro gbolbal services','119 , udhyog vihar phase1','','GUrgaon','Haryana','india',110070,'abhishek@gmail.com','7503275011',NULL,'we','quatrro.com','it is nice','1539080924_systemip.PNG','Abhi','abhishek@g.com','7503275011',0,'2018-10-09 15:58:44','2018-10-24 00:00:00','2018-10-15 00:00:00',1,'1,2');
insert into `clientmaster` (`client_id`,`client_type`,`bu`,`industry_name`,`client_code`,`client_name`,`address1`,`address2`,`city`,`state`,`country`,`zip`,`email_id`,`phone`,`mobile`,`fax`,`website`,`description`,`logo`,`cp_name`,`cp_email_id`,`cp_mobile`,`created_by`,`created_on`,`activation_date`,`deactivation_date`,`status`,`service_needed`) values (45,'Internal',0,0,'p-ni002','Quatrro gbolbal services','119 , udhyog vihar phase1','','GUrgaon','Haryana','india',110070,'abhishek@gmail.com','7503275011',NULL,'we','quatrro.com','it is nice','1539081394_systemip.PNG','Abhi','abhishek@g.com','7503275011',0,'2018-10-09 16:06:34','2018-10-24 00:00:00','2018-10-15 00:00:00',1,'1,2');
insert into `clientmaster` (`client_id`,`client_type`,`bu`,`industry_name`,`client_code`,`client_name`,`address1`,`address2`,`city`,`state`,`country`,`zip`,`email_id`,`phone`,`mobile`,`fax`,`website`,`description`,`logo`,`cp_name`,`cp_email_id`,`cp_mobile`,`created_by`,`created_on`,`activation_date`,`deactivation_date`,`status`,`service_needed`) values (46,'Internal',0,0,'p-ni002','Quatrro gbolbal services','119 , udhyog vihar phase1','','GUrgaon','Haryana','india',110070,'abhishek@gmail.com','7503275011',NULL,'we','quatrro.com','it is nice','1539081455_systemip.PNG','Abhi','abhishek@g.com','7503275011',0,'2018-10-09 16:07:35','2018-10-24 00:00:00','2018-10-15 00:00:00',1,'1,2');
insert into `clientmaster` (`client_id`,`client_type`,`bu`,`industry_name`,`client_code`,`client_name`,`address1`,`address2`,`city`,`state`,`country`,`zip`,`email_id`,`phone`,`mobile`,`fax`,`website`,`description`,`logo`,`cp_name`,`cp_email_id`,`cp_mobile`,`created_by`,`created_on`,`activation_date`,`deactivation_date`,`status`,`service_needed`) values (47,'Internal',0,0,'p-ni002','Quatrro gbolbal services','119 , udhyog vihar phase1','','GUrgaon','Haryana','india',110070,'abhishek@gmail.com','7503275011',NULL,'we','quatrro.com','it is nice','1539081474_systemip.PNG','Abhi','abhishek@g.com','7503275011',0,'2018-10-09 16:07:54','2018-10-24 00:00:00','2018-10-15 00:00:00',1,'1,2');
insert into `clientmaster` (`client_id`,`client_type`,`bu`,`industry_name`,`client_code`,`client_name`,`address1`,`address2`,`city`,`state`,`country`,`zip`,`email_id`,`phone`,`mobile`,`fax`,`website`,`description`,`logo`,`cp_name`,`cp_email_id`,`cp_mobile`,`created_by`,`created_on`,`activation_date`,`deactivation_date`,`status`,`service_needed`) values (48,'Internal',0,0,'p-ni002','Quatrro gbolbal services','119 , udhyog vihar phase1','','GUrgaon','Haryana','india',110070,'abhishek@gmail.com','7503275011',NULL,'we','quatrro.com','it is nice','1539081489_systemip.PNG','Abhi','abhishek@g.com','7503275011',0,'2018-10-09 16:08:09','2018-10-24 00:00:00','2018-10-15 00:00:00',1,'1,2');

/*Table structure for table `dbconfiguration` */

DROP TABLE IF EXISTS `dbconfiguration`;

CREATE TABLE `dbconfiguration` (
  `db_id` int(11) NOT NULL AUTO_INCREMENT,
  `service_id` varchar(50) NOT NULL,
  `client_id` int(11) NOT NULL,
  `host_name` varchar(150) CHARACTER SET utf8 NOT NULL,
  `db_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `username` varchar(50) CHARACTER SET utf8 NOT NULL,
  `db_auth` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`db_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `dbconfiguration` */

insert into `dbconfiguration` (`db_id`,`service_id`,`client_id`,`host_name`,`db_name`,`username`,`db_auth`) values (1,'MV236',1,'127.0.0.127','myvoice412','pappuser123','1234563215');
insert into `dbconfiguration` (`db_id`,`service_id`,`client_id`,`host_name`,`db_name`,`username`,`db_auth`) values (2,'SB598',43,'10.100.8.61','sb_db_2','futuresoft_sb','987564');
insert into `dbconfiguration` (`db_id`,`service_id`,`client_id`,`host_name`,`db_name`,`username`,`db_auth`) values (7,'Select',0,'','swati.menon@quatrro.com','','Myvoice@007');

/*Table structure for table `industry` */

DROP TABLE IF EXISTS `industry`;

CREATE TABLE `industry` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bu_id` int(4) NOT NULL,
  `industry_name` varchar(50) DEFAULT NULL,
  `status` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `industry` */

insert into `industry` (`id`,`bu_id`,`industry_name`,`status`) values (1,1,'ITES Bpo',1);
insert into `industry` (`id`,`bu_id`,`industry_name`,`status`) values (2,1,'Technology',1);
insert into `industry` (`id`,`bu_id`,`industry_name`,`status`) values (3,3,'It',0);

/*Table structure for table `services` */

DROP TABLE IF EXISTS `services`;

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `product_id` varchar(50) CHARACTER SET utf8 NOT NULL,
  `product_name` varchar(150) CHARACTER SET utf8 NOT NULL,
  `status` int(1) NOT NULL COMMENT '0 = Inactive  1= Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `services` */

insert into `services` (`id`,`product_id`,`product_name`,`status`) values (1,'AMS365','Attendance Management System',1);
insert into `services` (`id`,`product_id`,`product_name`,`status`) values (2,'HRMS587','Human Resource Management System',1);
insert into `services` (`id`,`product_id`,`product_name`,`status`) values (3,'MV254','MyVoice',1);
insert into `services` (`id`,`product_id`,`product_name`,`status`) values (4,'PM698','Payroll Management Sytem',1);
insert into `services` (`id`,`product_id`,`product_name`,`status`) values (5,'SB658','Spring Board',1);

SET SQL_MODE=@OLD_SQL_MODE;