-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2021 at 10:16 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tutorials`
--

-- --------------------------------------------------------

--
-- Table structure for table `acos`
--

CREATE TABLE IF NOT EXISTS `acos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT '',
  `foreign_key` int(10) unsigned DEFAULT NULL,
  `alias` varchar(255) DEFAULT '',
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `aros`
--

CREATE TABLE IF NOT EXISTS `aros` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT '',
  `foreign_key` int(10) unsigned DEFAULT NULL,
  `alias` varchar(255) DEFAULT '',
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `aros`
--

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, 'SystemGroup', 1, '', 1, 2),
(2, NULL, 'SystemGroup', 2, '', 3, 4),
(3, NULL, 'SystemGroup', 3, '', 5, 6),
(4, NULL, 'SystemGroup', 4, '', 7, 8),
(5, NULL, 'SystemGroup', 5, '', 9, 10);

-- --------------------------------------------------------

--
-- Table structure for table `aros_acos`
--

CREATE TABLE IF NOT EXISTS `aros_acos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `aro_id` int(10) unsigned NOT NULL,
  `aco_id` int(10) unsigned NOT NULL,
  `_create` char(2) NOT NULL DEFAULT '0',
  `_read` char(2) NOT NULL DEFAULT '0',
  `_update` char(2) NOT NULL DEFAULT '0',
  `_delete` char(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `assignments`
--

CREATE TABLE IF NOT EXISTS `assignments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stud_id` varchar(50) NOT NULL,
  `downloaded` int(11) NOT NULL,
  `answered` int(11) NOT NULL,
  `due_date` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `file_name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `assignments`
--

INSERT INTO `assignments` (`id`, `stud_id`, `downloaded`, `answered`, `due_date`, `category`, `file_name`) VALUES
(3, '32-149564C25', 0, 0, '30-07-2020', 'ICT', 'javascript_tutorial.pdf'),
(4, '63-1434641A43', 0, 0, '20-07-2020', 'ICT', 'TAURAI_MUTERO_CV.pdf'),
(5, '32-149564C25', 0, 0, '20-08-2020', 'ICT', 'Application_Letter_Taurai.docx'),
(6, '32-149564C25', 0, 0, '12-11-2020', 'ICT', 'WEBSITE DEVELOPMENT AND IMPLEMENTATION.docx');

-- --------------------------------------------------------

--
-- Table structure for table `checkin_out_logs`
--

CREATE TABLE IF NOT EXISTS `checkin_out_logs` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `entry_point_id` int(11) NOT NULL,
  `ecnumber` varchar(30) NOT NULL,
  `time_in` time NOT NULL,
  `date_in` varchar(100) NOT NULL,
  `checkin_user` varchar(100) NOT NULL,
  `time_out` time DEFAULT NULL,
  `date_out` varchar(100) NOT NULL,
  `check_in` int(5) NOT NULL DEFAULT '0',
  `checkout_user` varchar(100) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `checkout_ip_address` varchar(30) NOT NULL,
  `checkin_ip_address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `checkin_out_logs`
--

INSERT INTO `checkin_out_logs` (`id`, `entry_point_id`, `ecnumber`, `time_in`, `date_in`, `checkin_user`, `time_out`, `date_out`, `check_in`, `checkout_user`, `created`, `checkout_ip_address`, `checkin_ip_address`) VALUES
(1, 1, '2', '11:14:00', '18-10-23', 'admin', '16:14:00', '18-10-24', 0, 'admin', '2018-10-24 11:14:09', '10.50.219.99', '10.50.219.99'),
(2, 1, '2', '11:15:07', '18-10-24', 'admin', '11:31:25', '18-10-24', 0, 'admin', '2018-10-24 11:15:07', '10.50.219.99', '10.50.219.99'),
(3, 1, '2', '07:32:00', '18-10-22', 'admin', '15:41:00', '18-10-24', 0, 'admin', '2018-10-24 11:32:02', '10.50.101.67', '10.50.219.99'),
(4, 1, '2', '16:35:02', '18-10-30', 'admin', '12:41:43', '18-11-05', 0, 'admin', '2018-10-30 16:35:02', '10.50.219.96', '10.50.219.99'),
(5, 1, '2', '12:41:49', '18-11-05', 'admin', '12:41:53', '18-11-05', 0, 'admin', '2018-11-05 12:41:49', '10.50.219.96', '10.50.219.96'),
(6, 1, '2', '12:42:28', '18-11-05', 'admin', '12:42:55', '18-11-05', 0, 'admin', '2018-11-05 12:42:28', '10.50.219.96', '10.50.219.96'),
(7, 1, '2', '12:43:20', '18-11-05', 'admin', '12:43:32', '18-11-05', 0, 'admin', '2018-11-05 12:43:20', '10.50.219.96', '10.50.219.96'),
(8, 1, '2', '12:44:01', '18-11-05', 'admin', '12:44:04', '18-11-05', 0, 'admin', '2018-11-05 12:44:01', '10.50.219.96', '10.50.219.96'),
(9, 1, '2', '09:15:21', '18-11-06', 'tmutero', '09:28:18', '18-11-06', 0, 'tmutero', '2018-11-06 09:15:21', '10.50.219.96', '10.50.219.96'),
(10, 1, '2', '09:28:24', '18-11-06', 'tmutero', '09:28:29', '18-11-06', 0, 'tmutero', '2018-11-06 09:28:24', '10.50.219.96', '10.50.219.96'),
(11, 1, '2', '09:28:50', '18-11-06', 'tmutero', '09:29:03', '18-11-06', 0, 'tmutero', '2018-11-06 09:28:50', '10.50.219.96', '10.50.219.96'),
(12, 1, '2', '09:29:11', '18-11-06', 'tmutero', '09:42:21', '18-11-06', 0, 'tmutero', '2018-11-06 09:29:11', '10.50.219.96', '10.50.219.96'),
(13, 1, '2', '09:43:09', '18-11-06', 'tmutero', '09:43:40', '18-11-06', 0, 'tmutero', '2018-11-06 09:43:09', '10.50.219.96', '10.50.219.96'),
(14, 1, '2', '15:06:45', '18-11-06', 'tmutero', '16:35:45', '18-11-06', 0, 'tmutero', '2018-11-06 15:06:45', '10.50.219.96', '10.50.219.96'),
(15, 1, '9509992', '17:22:03', '18-11-19', 'tmutero', '17:22:17', '18-11-19', 0, 'tmutero', '2018-11-19 17:22:03', '10.50.219.96', '10.50.219.96'),
(16, 1, '2', '10:29:20', '18-11-20', 'tmutero', '13:55:47', '19-04-09', 0, 'tmutero', '2018-11-20 10:29:20', '10.50.219.90', '10.50.219.96'),
(17, 1, '9509992', '10:50:47', '18-11-20', 'tmutero', '10:52:18', '18-11-20', 0, 'tmutero', '2018-11-20 10:50:47', '10.50.219.96', '10.50.219.96'),
(18, 1, '2', '13:55:53', '19-04-09', 'tmutero', '00:00:00', '0', 1, '0', '2019-04-09 13:55:53', '', '10.50.219.90');

-- --------------------------------------------------------

--
-- Table structure for table `current_log_in_users`
--

CREATE TABLE IF NOT EXISTS `current_log_in_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ecnumber` int(11) NOT NULL,
  `time_logged` varchar(50) NOT NULL,
  `entry_point` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=77 ;

--
-- Dumping data for table `current_log_in_users`
--

INSERT INTO `current_log_in_users` (`id`, `ecnumber`, `time_logged`, `entry_point`) VALUES
(32, 12345678, '11:49:40', 4),
(72, 2, '14:35:57', 1),
(76, 9506474, '13:48:50', 1);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE IF NOT EXISTS `departments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `faculty_code` varchar(255) NOT NULL,
  `employee_turnover` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `code` (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `code`, `name`, `faculty_code`, `employee_turnover`) VALUES
(1, 'ICT', 'INFORMATION TECHNOLOGY', 'K', 0),
(2, 'MKT', 'MARKETING', 'test', 34),
(3, 'NEWS', 'NEWS', 'test', 100),
(4, 'RADIO', 'RADIO', 'test', 0),
(5, 'DBMGT', 'DIGITAL MEDIA AND TECHNOLOGY', 'test', 0);

-- --------------------------------------------------------

--
-- Table structure for table `employment_job_categories`
--

CREATE TABLE IF NOT EXISTS `employment_job_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `employment_job_tittles`
--

CREATE TABLE IF NOT EXISTS `employment_job_tittles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `employment_titles`
--

CREATE TABLE IF NOT EXISTS `employment_titles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `entry_points`
--

CREATE TABLE IF NOT EXISTS `entry_points` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `check_in` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `entry_points`
--

INSERT INTO `entry_points` (`id`, `name`, `check_in`) VALUES
(1, 'COMPUTER CENTRE', 1),
(2, 'MAIN LIBRARY', 1),
(3, 'SCIENCE CENTRE', 1),
(4, 'ADMIN', 1),
(5, 'VETERINARY ', 0),
(6, 'ANSTEAD', 0);

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

CREATE TABLE IF NOT EXISTS `faculties` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `faculty_sub_category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`id`, `code`, `name`, `faculty_sub_category_id`) VALUES
(1, 'K', 'SCIENCE', 0),
(2, 'test', 'test', 0);

-- --------------------------------------------------------

--
-- Table structure for table `faculty_sub_categories`
--

CREATE TABLE IF NOT EXISTS `faculty_sub_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `faculty_sub_categories`
--

INSERT INTO `faculty_sub_categories` (`id`, `category`, `description`) VALUES
(1, 'TEST CATEGORY 1', 'TEST CATEGORY 1'),
(2, 'TEST CATEGORY 2', 'TEST CATEGORY 2');

-- --------------------------------------------------------

--
-- Table structure for table `force_checkout_logs`
--

CREATE TABLE IF NOT EXISTS `force_checkout_logs` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `ecnumber` int(11) NOT NULL,
  `entry_point_id` int(11) NOT NULL,
  `check_in_id` int(11) NOT NULL,
  `forced_date` datetime NOT NULL,
  `forced_reason` varchar(255) NOT NULL,
  `forced_by` varchar(255) NOT NULL,
  `reason_type` varchar(10) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `force_checkout_logs`
--

INSERT INTO `force_checkout_logs` (`id`, `ecnumber`, `entry_point_id`, `check_in_id`, `forced_date`, `forced_reason`, `forced_by`, `reason_type`, `ip_address`) VALUES
(1, 2, 1, 0, '2018-11-06 00:00:00', 'am sick', 'tmutero', 'E', '10.50.219.96'),
(2, 9509992, 1, 0, '2018-11-20 00:00:00', 't', 'tmutero', 'E', '10.50.219.96');

-- --------------------------------------------------------

--
-- Table structure for table `password_parameters`
--

CREATE TABLE IF NOT EXISTS `password_parameters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `min_length` int(5) NOT NULL DEFAULT '8',
  `max_lifespan` int(5) NOT NULL DEFAULT '90',
  `rqr_special_chars` tinyint(1) NOT NULL DEFAULT '1',
  `rqr_numbers` tinyint(1) NOT NULL DEFAULT '1',
  `rqr_uppercase_letter` tinyint(1) NOT NULL DEFAULT '1',
  `password_expires` tinyint(1) NOT NULL DEFAULT '1',
  `lookback_period` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `create_ip` varchar(50) NOT NULL,
  `modified` datetime DEFAULT NULL,
  `modified_by` varchar(50) DEFAULT NULL,
  `modify_ip` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `programmes`
--

CREATE TABLE IF NOT EXISTS `programmes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `code` varchar(10) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `programmes`
--

INSERT INTO `programmes` (`id`, `name`, `code`, `description`) VALUES
(1, 'Marketing', 'MKT', 'marketing '),
(2, 'Media and Journalism', 'MJ', 'media and jounalism'),
(3, 'ACCOUNTING', 'AC', 'accounting'),
(4, 'COMPUTER SCIENCE', 'CS', '');

-- --------------------------------------------------------

--
-- Table structure for table `staff_details`
--

CREATE TABLE IF NOT EXISTS `staff_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `title` varchar(10) NOT NULL,
  `ecnumber` int(11) NOT NULL,
  `barcode` bigint(20) NOT NULL,
  `department_code` varchar(255) NOT NULL,
  `physical_address` varchar(255) NOT NULL,
  `contact_address` varchar(255) NOT NULL,
  `mobile` int(20) NOT NULL,
  `work_phone` int(11) NOT NULL,
  `home_phone` int(11) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `employment_title_id` int(11) NOT NULL,
  `designation` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `staff_details`
--

INSERT INTO `staff_details` (`id`, `firstname`, `lastname`, `title`, `ecnumber`, `barcode`, `department_code`, `physical_address`, `contact_address`, `mobile`, `work_phone`, `home_phone`, `email_address`, `employment_title_id`, `designation`) VALUES
(8, 'taurai', 'mutero', 'Mr', 9506474, 0, 'CC', 'UZ Test Address', 'TEST CONTACT', 465645645, 654645, 45645654, 'tmutero@compcentre.uz.ac.zw', 0, 'Systems Analyst');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE IF NOT EXISTS `student_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `title` varchar(5) NOT NULL,
  `home_address` varchar(100) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `programme` varchar(100) NOT NULL,
  `programme_code` varchar(100) NOT NULL,
  `department_code` varchar(100) NOT NULL,
  `id_number` varchar(100) NOT NULL,
  `from_date` varchar(50) NOT NULL,
  `to_date` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`id`, `firstname`, `surname`, `title`, `home_address`, `mobile`, `email_address`, `programme`, `programme_code`, `department_code`, `id_number`, `from_date`, `to_date`) VALUES
(10, 'irvin', 'tsamba', 'Dr', '', '0772744900', 'itsamba@gmail.com', '', '', 'ICT', '32-149564C25', '30-06-2020', '30-07-2020'),
(11, 'Liam', 'Mutero', 'Eng', '', '0784318572', 'liam.mutero@gmail.com', '', '', 'ICT', '63-1434641A43', '01-07-2020', '19-07-2020'),
(12, 'taurai', 'mutero', 'Mr', '', '0784318572', 'tanaka@gmail.com', '', '', 'ICT', '1234', '15-11-2020', '20-11-2020'),
(13, 'chiedza', 'jaison', 'Mrs', '', '1992', 'chiedzar@gmail.com', '', '', 'ICT', '1992', '17-11-2020', '20-11-2020');

-- --------------------------------------------------------

--
-- Table structure for table `system_groups`
--

CREATE TABLE IF NOT EXISTS `system_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `account_type_name` varchar(200) NOT NULL,
  `internal_account` tinyint(1) NOT NULL DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `created_by` varchar(100) NOT NULL,
  `modified_by` varchar(100) NOT NULL,
  `create_ip` varchar(60) NOT NULL,
  `modify_ip` varchar(60) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `account_type_name` (`account_type_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `system_groups`
--

INSERT INTO `system_groups` (`id`, `account_type_name`, `internal_account`, `created`, `modified`, `created_by`, `modified_by`, `create_ip`, `modify_ip`) VALUES
(1, 'Super User', 1, '2018-05-30 14:32:14', '2018-05-30 14:32:14', 'admin', '', '::1', ''),
(2, 'HR Admin', 1, '2018-05-30 14:32:20', '2018-05-30 14:32:20', 'admin', '', '::1', ''),
(3, 'HR Assistant', 1, '2018-05-30 14:32:27', '2018-05-30 14:32:27', 'admin', '', '::1', ''),
(4, 'Check In and Out User', 1, '2018-05-30 14:37:47', '2018-05-30 14:37:47', 'admin', '', '::1', ''),
(5, 'Ordinary Staff', 1, '2018-05-30 14:32:42', '2018-05-30 14:32:42', 'admin', '', '::1', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ecnumber` varchar(50) NOT NULL DEFAULT '0',
  `email_address` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `account_status` tinyint(4) NOT NULL DEFAULT '0',
  `system_group_id` int(3) NOT NULL,
  `password_expiry_date` date NOT NULL,
  `expiry_warning_date` date NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `modified_by` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `create_ip` varchar(255) NOT NULL,
  `modify_ip` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ecnumber` (`ecnumber`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=90 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ecnumber`, `email_address`, `password`, `account_status`, `system_group_id`, `password_expiry_date`, `expiry_warning_date`, `created_by`, `modified_by`, `created`, `modified`, `username`, `create_ip`, `modify_ip`) VALUES
(5, '9509992', 'tmutero@tutorials.co.zw', '50c52b3502b8577cc5520792043fd32cd239951a', 1, 1, '0000-00-00', '0000-00-00', '', '', '2017-05-04 10:55:04', '2018-03-08 14:45:00', 'admin', '', ''),
(89, '1992', 'chiedzar@gmail.com', '44692b15fbcd2b88cb905653f70a7e8058366e09', 1, 3, '0000-00-00', '0000-00-00', '', '', '2020-11-17 15:08:15', '2020-11-17 15:08:15', 'cjaison', '', ''),
(86, '32-149564C25', 'itsamba@gmail.com', 'd107b86be011d30269845ce3055c4683c01efc23', 1, 3, '0000-00-00', '0000-00-00', '', '', '2020-06-30 11:16:49', '2020-06-30 11:16:49', 'itsamba', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_password_histories`
--

CREATE TABLE IF NOT EXISTS `user_password_histories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email_address` varchar(100) NOT NULL,
  `password_hash` varchar(200) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `email_address` (`email_address`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_password_resets`
--

CREATE TABLE IF NOT EXISTS `user_password_resets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email_address` varchar(100) NOT NULL,
  `reset_token_hash` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `token_expiry_date` datetime NOT NULL,
  `token_used` tinyint(1) NOT NULL DEFAULT '0',
  `token_overriden` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Value set to 1 if a new request for password reset is made before a previous one has expired',
  PRIMARY KEY (`id`),
  KEY `fk_users` (`email_address`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
