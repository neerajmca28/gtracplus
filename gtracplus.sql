-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.21-MariaDB - Source distribution
-- Server OS:                    Linux
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for gtracplus
CREATE DATABASE IF NOT EXISTS `gtracplus` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `gtracplus`;

-- Dumping structure for table gtracplus.car_vendor_master
CREATE TABLE IF NOT EXISTS `car_vendor_master` (
  `vendor_id` int(11) NOT NULL AUTO_INCREMENT,
  `vendor_name` varchar(255) DEFAULT NULL,
  `vechile_no` varchar(255) DEFAULT NULL,
  `vendor_capacity` varchar(255) DEFAULT NULL,
  `vendor_mno` varchar(255) DEFAULT NULL,
  `login_id` int(11) DEFAULT NULL,
  `update_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`vendor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

-- Dumping data for table gtracplus.car_vendor_master: ~11 rows (approximately)
/*!40000 ALTER TABLE `car_vendor_master` DISABLE KEYS */;
INSERT INTO `car_vendor_master` (`vendor_id`, `vendor_name`, `vechile_no`, `vendor_capacity`, `vendor_mno`, `login_id`, `update_time`) VALUES
	(43, 'Ashish', '475843657844443333', 'jhdhff', '7863785438', 2, '2018-03-22 12:42:26'),
	(44, 'Ashish', '475843657844443333', 'jhdhff', '7863785438', 2, '2018-03-22 12:42:26'),
	(45, 'Ashish', '475843657844443333', 'jhdhff', '7863785438', 2, '2018-03-22 12:42:26'),
	(46, 'Ashish', '475843657844443333', 'jhdhff', '7863785438', 2, '2018-03-22 12:42:26'),
	(47, 'Ashish', '475843657844443333', 'jhdhff', '7863785438', 2, '2018-03-22 12:42:26'),
	(48, 'Ashish', '475843657844443333', 'jhdhff', '7863785438', 2, '2018-03-22 12:42:26'),
	(49, 'Ashish', '475843657844443333', 'jhdhff', '7863785438', 2, '2018-03-22 12:42:26'),
	(50, 'Ashish', '475843657844443333', 'jhdhff', '7863785438', 2, '2018-03-22 12:42:26'),
	(51, 'Ashish', '475843657844443333', 'jhdhff', '7863785438', 2, '2018-03-22 12:42:26'),
	(52, 'Ashish', '475843657844443333', 'jhdhff', '7863785438', 2, '2018-03-22 12:42:26'),
	(53, 'Ashish', '4758436578', 'jhdhff', '7863785438', 1, '2018-03-22 12:42:26');
/*!40000 ALTER TABLE `car_vendor_master` ENABLE KEYS */;

-- Dumping structure for table gtracplus.ci_sessions
CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table gtracplus.ci_sessions: ~0 rows (approximately)
/*!40000 ALTER TABLE `ci_sessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `ci_sessions` ENABLE KEYS */;

-- Dumping structure for table gtracplus.daily_roaster_lat_lng
CREATE TABLE IF NOT EXISTS `daily_roaster_lat_lng` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `person_id` int(11) DEFAULT NULL,
  `latitude` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `login_id` varchar(255) DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table gtracplus.daily_roaster_lat_lng: ~0 rows (approximately)
/*!40000 ALTER TABLE `daily_roaster_lat_lng` DISABLE KEYS */;
INSERT INTO `daily_roaster_lat_lng` (`id`, `person_id`, `latitude`, `longitude`, `login_id`, `create_time`) VALUES
	(1, 23, 'NULL', 'NULL', '2', '2018-03-25 16:13:54'),
	(2, 24, '26.449923', '80.3318736', '2', '2018-03-25 16:13:54'),
	(3, 25, '26.4679211', '80.2473521', '2', '2018-03-25 16:13:55'),
	(4, 26, '26.4393079', '80.2697653', '2', '2018-03-25 16:13:56'),
	(5, 27, 'NULL', 'NULL', '2', '2018-03-25 16:13:56'),
	(6, 29, '26.4801643', '80.2906659', '2', '2018-03-25 16:13:57'),
	(7, 30, '26.4852106', '80.3004177', '2', '2018-03-25 16:13:57');
/*!40000 ALTER TABLE `daily_roaster_lat_lng` ENABLE KEYS */;

-- Dumping structure for table gtracplus.driver_master
CREATE TABLE IF NOT EXISTS `driver_master` (
  `driver_id` int(11) NOT NULL AUTO_INCREMENT,
  `driver_name` varchar(255) DEFAULT NULL,
  `driver_mno` varchar(255) DEFAULT NULL,
  `login_id` int(11) DEFAULT NULL,
  `update_time` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`driver_id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

-- Dumping data for table gtracplus.driver_master: ~9 rows (approximately)
/*!40000 ALTER TABLE `driver_master` DISABLE KEYS */;
INSERT INTO `driver_master` (`driver_id`, `driver_name`, `driver_mno`, `login_id`, `update_time`) VALUES
	(20, 'Neeraj', '90575495478', 2, '2018-03-22 12:43:07'),
	(21, 'Neeraj', '90575495478', 2, '2018-03-22 12:43:07'),
	(22, 'Neeraj', '90575495478', 2, '2018-03-22 12:43:07'),
	(23, 'Neeraj', '90575495478', 2, '2018-03-22 12:43:07'),
	(25, 'Neeraj', '90575495478', 2, '2018-03-22 12:43:07'),
	(26, 'Neeraj', '90575495478', 2, '2018-03-22 12:43:07'),
	(27, 'Neeraj', '90575495478', 2, '2018-03-22 12:43:07'),
	(28, 'Neeraj', '90575495478', 2, '2018-03-22 12:43:07'),
	(29, 'Neeraj', '90575495478732', 1, '2018-03-22 12:43:07');
/*!40000 ALTER TABLE `driver_master` ENABLE KEYS */;

-- Dumping structure for table gtracplus.import
CREATE TABLE IF NOT EXISTS `import` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `first_name` varchar(100) NOT NULL COMMENT 'First Name',
  `last_name` varchar(100) NOT NULL COMMENT 'Last Name',
  `email` varchar(255) NOT NULL COMMENT 'Email Address',
  `dob` varchar(20) NOT NULL COMMENT 'Date of Birth',
  `contact_no` int(11) NOT NULL COMMENT 'Contact No',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='datatable demo table';

-- Dumping data for table gtracplus.import: ~0 rows (approximately)
/*!40000 ALTER TABLE `import` DISABLE KEYS */;
/*!40000 ALTER TABLE `import` ENABLE KEYS */;

-- Dumping structure for table gtracplus.login_user
CREATE TABLE IF NOT EXISTS `login_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email_id` varchar(255) NOT NULL DEFAULT '0',
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table gtracplus.login_user: ~1 rows (approximately)
/*!40000 ALTER TABLE `login_user` DISABLE KEYS */;
INSERT INTO `login_user` (`id`, `username`, `password`, `email_id`, `create_time`) VALUES
	(1, 'gtrac', 'gtrac123', 'gtrac@gtrac.in', '2018-02-27 16:14:59'),
	(2, 'tarun', 'tarun123', 'tarun@gtrac.in', '2018-03-16 11:29:43');
/*!40000 ALTER TABLE `login_user` ENABLE KEYS */;

-- Dumping structure for table gtracplus.person_daily_roaster
CREATE TABLE IF NOT EXISTS `person_daily_roaster` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `person_id` varchar(50) NOT NULL DEFAULT '0',
  `person_address` varchar(50) NOT NULL DEFAULT '0',
  `login_id` varchar(50) NOT NULL DEFAULT '0',
  `created_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Dumping data for table gtracplus.person_daily_roaster: ~7 rows (approximately)
/*!40000 ALTER TABLE `person_daily_roaster` DISABLE KEYS */;
INSERT INTO `person_daily_roaster` (`id`, `person_id`, `person_address`, `login_id`, `created_time`) VALUES
	(8, '23', 'naraina vihar , new delhi', '2', '2018-03-25 12:43:53'),
	(9, '24', 'kanpur, uttar pradesh', '2', '2018-03-25 12:43:54'),
	(10, '25', 'panki, kanpur, uttar pradesh', '2', '2018-03-25 12:43:54'),
	(11, '26', 'gujaini, kanpur, uttar pradesh', '2', '2018-03-25 12:43:55'),
	(12, '27', 'vijay nagar, kanpur, uttar pradesh', '2', '2018-03-25 12:43:56'),
	(13, '29', 'kakadev, kanpur, uttar pradesh', '2', '2018-03-25 12:43:56'),
	(14, '30', 'rawatpur , kanpur, uttar pradesh', '2', '2018-03-25 12:43:57');
/*!40000 ALTER TABLE `person_daily_roaster` ENABLE KEYS */;

-- Dumping structure for table gtracplus.person_roster
CREATE TABLE IF NOT EXISTS `person_roster` (
  `person_id` int(11) NOT NULL AUTO_INCREMENT,
  `person_name` varchar(255) DEFAULT NULL,
  `person_address` varchar(255) DEFAULT NULL,
  `person_designation` varchar(255) DEFAULT NULL,
  `person_department` varchar(255) DEFAULT NULL,
  `person_reporting_head` varchar(255) DEFAULT NULL,
  `person_repoting_head_mno` varchar(255) DEFAULT NULL,
  `person_gender` varchar(255) DEFAULT NULL,
  `person_mno` varchar(255) DEFAULT NULL,
  `login_id` int(11) DEFAULT NULL,
  `update_time` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`person_id`)
) ENGINE=InnoDB AUTO_INCREMENT=184 DEFAULT CHARSET=latin1;

-- Dumping data for table gtracplus.person_roster: ~31 rows (approximately)
/*!40000 ALTER TABLE `person_roster` DISABLE KEYS */;
INSERT INTO `person_roster` (`person_id`, `person_name`, `person_address`, `person_designation`, `person_department`, `person_reporting_head`, `person_repoting_head_mno`, `person_gender`, `person_mno`, `login_id`, `update_time`) VALUES
	(152, 'Neeraj', '123', 'CS', 'asd', 'asd', 'asd', 'asd', 'qasd', 2, '2018-03-22 12:43:44'),
	(153, 'Neeraj', '123', 'CS', 'asd', 'asd', 'asd', 'asd', 'qasd', 2, '2018-03-22 12:43:44'),
	(154, 'Neeraj', '123', 'CS', 'asd', 'asd', 'asd', 'asd', 'qasd', 2, '2018-03-22 12:43:44'),
	(155, 'Neeraj', '123', 'CS', 'asd', 'asd', 'asd', 'asd', 'qasd', 2, '2018-03-22 12:43:44'),
	(157, 'Neeraj', '123', 'CS', 'asd', 'asd', 'asd', 'asd', 'qasd', 2, '2018-03-22 12:43:44'),
	(158, 'Neeraj', '123', 'CS', 'asd', 'asd', 'asd', 'asd', 'qasd', 2, '2018-03-22 12:43:44'),
	(159, 'Neeraj', '123', 'CS', 'asd', 'asd', 'asd', 'asd', 'qasd', 2, '2018-03-22 12:43:44'),
	(160, 'Neeraj', '123', 'CS', 'asd', 'asd', 'asd', 'asd', 'qasd', 2, '2018-03-22 12:43:44'),
	(161, 'Neeraj', '123', 'CS', 'asd', 'asd', 'asd', 'asd', 'qasd', 2, '2018-03-22 12:43:44'),
	(162, 'Neeraj', '123', 'CS', 'asd', 'asd', 'asd', 'asd', 'qasd', 2, '2018-03-22 12:43:44'),
	(163, 'Neeraj', '123', 'CS', 'asd', 'asd', 'asd', 'asd', 'qasd', 2, '2018-03-22 12:43:44'),
	(164, 'Neeraj', '123', 'CS', 'asd', 'asd', 'asd', 'asd', 'qasd', 2, '2018-03-22 12:43:44'),
	(165, 'asd', 'sadas', 'dsad', 'sad', 'saadsad', 'sad', 'Male', 'sdasa', 0, '2018-03-22 12:43:44'),
	(166, 'ffgdfgjfhfssdsadsa', 'sadasdsadsa', 'saddsad', 'sadssadsad', 'adsasadsad', 'dsadssadsadsadsadsad', 'Female', 'sadsads', 2, '2018-03-24 12:40:17'),
	(167, 'asa', 'SA', 'SaS', 'AS', 'aS', 'AS', 'Male', 'aSA', 2, '2018-03-22 12:43:44'),
	(168, 'Neeraj', '123', 'CS', 'asd', 'asd', 'asd', 'asd', 'qasd', 1, '2018-03-22 12:43:44'),
	(169, 'Neeraj', '123', 'CS', 'asd', 'asd', 'asd', 'asd', 'qasd', 1, '2018-03-22 12:43:44'),
	(170, 'Neeraj', '123', 'CS', 'asd', 'asd', 'asd', 'asd', 'qasd', 1, '2018-03-22 12:43:44'),
	(171, 'Neeraj', '123', 'CS', 'asd', 'asd', 'asd', 'asd', 'qasd', 1, '2018-03-22 12:43:44'),
	(172, 'Neeraj', '123', 'CS', 'asd', 'asd', 'asd', 'asd', 'qasd', 1, '2018-03-22 12:43:44'),
	(173, 'Neeraj', '123', 'CS', 'asd', 'asd', 'asd', 'asd', 'qasd', 1, '2018-03-22 12:43:44'),
	(174, 'Neeraj', '123', 'CS', 'asd', 'asd', 'asd', 'asd', 'qasd', 1, '2018-03-22 12:43:44'),
	(175, 'Neeraj', '123', 'CS', 'asd', 'asd', 'asd', 'asd', 'qasd', 1, '2018-03-22 12:43:44'),
	(176, 'Neeraj', '123', 'CS', 'asd', 'asd', 'asd', 'asd', 'qasd', 1, '2018-03-22 12:43:44'),
	(177, 'Neeraj', '123', 'CS', 'asd', 'asd', 'asd', 'asd', 'qasd', 1, '2018-03-22 12:43:44'),
	(178, 'Neeraj', '123', 'CS', 'asd', 'asd', 'asd', 'asd', 'qasd', 1, '2018-03-22 12:43:44'),
	(179, 'Neeraj', '123', 'CS', 'asd', 'asd', 'asd', 'asd', 'qasd', 1, '2018-03-22 12:43:44'),
	(180, 'Neeraj', '123', 'CS', 'asd', 'asd', 'asd', 'asd', 'qasd', 1, '2018-03-22 12:43:44'),
	(181, 'Neeraj', '123', 'CS', 'asd', 'asd', 'asd', 'asd', 'qasd', 1, '2018-03-22 12:43:44'),
	(182, 'Neeraj', '123', 'CS', 'asd', 'asd', 'asd', 'asd', 'qasd', 1, '2018-03-22 12:43:44'),
	(183, 'Neeraj', '123', 'CS', 'asd', 'asd', 'asd', 'asd', 'qasd', 1, '2018-03-22 12:43:44');
/*!40000 ALTER TABLE `person_roster` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
