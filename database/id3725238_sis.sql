-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2018 at 03:43 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id3725238_sis`
--

-- --------------------------------------------------------

--
-- Table structure for table `core`
--

CREATE TABLE `core` (
  `core_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `core_rating` enum('Competent','Not Yet Competent') COLLATE utf8_unicode_ci NOT NULL,
  `core_skill` int(11) NOT NULL,
  `core_completed` date DEFAULT NULL,
  `grade` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `core`
--

INSERT INTO `core` (`core_id`, `student_id`, `core_rating`, `core_skill`, `core_completed`, `grade`, `updated_by`, `created`, `modified`) VALUES
(1, 2, 'Competent', 8, NULL, NULL, NULL, '2018-10-16 17:41:58', '2018-10-23 14:12:26'),
(2, 4, 'Competent', 9, NULL, NULL, NULL, '2018-10-16 18:04:16', '2018-10-23 14:12:29'),
(3, 5, 'Competent', 9, NULL, NULL, NULL, '2018-10-16 18:10:50', '2018-10-23 14:12:33'),
(4, 6, 'Competent', 9, '2018-11-20', 100, 1, '2018-10-16 22:00:33', '2018-11-21 17:52:16'),
(5, 7, 'Competent', 5, '2018-11-07', NULL, 1, '2018-10-18 15:08:27', '2018-11-07 20:55:38'),
(6, 7, 'Competent', 1, '2018-11-04', NULL, 1, '2018-10-23 16:09:14', '2018-11-08 12:25:03'),
(7, 7, 'Competent', 2, '2018-11-06', NULL, 1, '2018-10-23 16:11:38', '2018-11-07 21:15:52'),
(8, 8, 'Competent', 1, NULL, NULL, 1, '2018-10-23 16:34:42', '2018-10-23 16:35:30'),
(9, 8, 'Competent', 2, NULL, NULL, 1, '2018-10-23 16:34:42', '2018-10-23 16:35:31'),
(10, 8, 'Not Yet Competent', 3, NULL, NULL, 1, '2018-10-23 16:35:31', '2018-10-23 18:01:34'),
(11, 1, 'Competent', 1, NULL, NULL, NULL, '2018-10-24 13:41:09', '2018-10-24 13:41:09'),
(12, 7, 'Competent', 3, '2018-11-05', NULL, 1, '2018-11-07 21:21:32', '2018-11-08 14:32:22'),
(13, 7, 'Competent', 4, '2018-11-08', NULL, 1, '2018-11-07 21:21:32', '2018-11-07 21:26:33'),
(14, 7, 'Not Yet Competent', 6, NULL, NULL, 1, '2018-11-07 21:28:40', '2018-11-07 21:30:22'),
(15, 7, 'Competent', 7, '2018-11-09', NULL, 1, '2018-11-07 21:30:22', '2018-11-07 22:41:38'),
(16, 7, 'Not Yet Competent', 8, NULL, NULL, 1, '2018-11-07 22:46:54', '2018-11-07 22:56:38'),
(17, 7, 'Not Yet Competent', 9, NULL, NULL, 1, '2018-11-07 22:46:54', '2018-11-07 22:56:38'),
(18, 9, 'Competent', 1, '2018-11-08', NULL, 1, '2018-11-07 23:14:27', '2018-11-07 23:16:12'),
(19, 9, 'Competent', 2, '2018-11-11', NULL, 1, '2018-11-07 23:16:12', '2018-11-08 03:23:02'),
(20, 9, 'Competent', 4, '2018-11-11', NULL, 1, '2018-11-08 03:22:21', '2018-11-08 03:23:02'),
(21, 10, 'Competent', 2, '2018-11-06', NULL, NULL, '2018-11-08 03:46:25', '2018-11-08 03:46:25'),
(22, 6, 'Competent', 1, '2018-11-20', 100, 1, '2018-11-08 21:41:49', '2018-11-21 17:52:16'),
(23, 6, 'Not Yet Competent', 3, NULL, NULL, 1, '2018-11-09 18:20:46', '2018-11-21 19:57:40'),
(24, 6, 'Not Yet Competent', 10, '2018-11-20', 75, 1, '2018-11-09 18:32:28', '2018-11-21 20:01:07'),
(25, 6, 'Competent', 2, '2018-11-21', 85, NULL, '2018-11-21 20:03:41', '2018-11-21 20:03:41'),
(26, 11, 'Competent', 1, '2018-11-07', 90, NULL, '2018-11-21 20:30:35', '2018-11-21 20:30:35'),
(27, 11, 'Competent', 2, '2018-11-07', 90, NULL, '2018-11-21 20:30:35', '2018-11-21 20:30:35'),
(28, 11, 'Not Yet Competent', 3, NULL, NULL, NULL, '2018-11-21 20:30:35', '2018-11-21 20:30:35'),
(29, 11, 'Competent', 4, '2018-11-07', 85, NULL, '2018-11-21 20:30:35', '2018-11-21 20:30:35'),
(30, 12, 'Competent', 1, '2018-11-20', 90, 1, '2018-11-21 20:39:07', '2018-11-21 20:39:50');

-- --------------------------------------------------------

--
-- Table structure for table `core_item`
--

CREATE TABLE `core_item` (
  `core_item_id` int(11) NOT NULL,
  `core_code` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL,
  `created_by` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `updated_by` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Core item table';

--
-- Dumping data for table `core_item`
--

INSERT INTO `core_item` (`core_item_id`, `core_code`, `description`, `status`, `created_by`, `updated_by`, `created`, `modified`) VALUES
(1, 'Core 101', 'Basic Safety', '1', 'joey@gmail.com', 'joey@gmail.com', '2018-11-20 12:06:36', '2018-11-21 17:05:26'),
(2, 'Core 102', 'Introduction to Construction Math', '1', 'joey@gmail.com', 'joey@gmail.com', '2018-11-21 13:09:53', '2018-11-21 17:05:43'),
(3, 'Core 103', 'Introduction to Hand Tools', '1', 'joey@gmail.com', 'joey@gmail.com', '2018-11-21 13:33:10', '2018-11-21 17:05:57'),
(4, 'Core 104', 'Introduction to Power Tools', '1', 'joey@gmail.com', 'joey@gmail.com', '2018-11-21 16:16:11', '2018-11-21 17:06:14'),
(5, 'Core 105', 'Introduction to Construction Drawings', '1', 'joey@gmail.com', 'joey@gmail.com', '2018-11-21 16:16:11', '2018-11-21 17:06:29'),
(6, 'Core 106', 'This is Core 106', '1', 'joey@gmail.com', NULL, '2018-11-21 16:16:11', '2018-11-21 16:17:53'),
(7, 'Core 107', 'Basic Communication Skills', '1', 'admin@gmail.com', 'joey@gmail.com', '2018-11-21 16:16:11', '2018-11-21 17:06:44'),
(8, 'Core 108', 'Basic Employability Skills', '1', 'joey@gmail.com', 'joey@gmail.com', '2018-11-21 16:16:11', '2018-11-21 17:06:52'),
(9, 'Core 109', 'Introduction to Materials Handling', '1', 'joey@gmail.com', 'joey@gmail.com', '2018-11-21 16:16:11', '2018-11-21 17:07:03'),
(10, 'Core 110', 'This is Core 110', '1', 'joey@gmail.com', NULL, '2018-11-21 16:17:29', '2018-11-21 16:18:20');

-- --------------------------------------------------------

--
-- Table structure for table `craft`
--

CREATE TABLE `craft` (
  `craft_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `craft_rating` enum('Competent','Not Yet Competent') COLLATE utf8_unicode_ci NOT NULL,
  `craft_skill` int(11) NOT NULL,
  `craft_completed` date DEFAULT NULL,
  `grade` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `craft`
--

INSERT INTO `craft` (`craft_id`, `student_id`, `craft_rating`, `craft_skill`, `craft_completed`, `grade`, `updated_by`, `created`, `modified`) VALUES
(1, 2, 'Competent', 3, NULL, NULL, NULL, '2018-10-16 17:41:58', '2018-10-23 14:11:02'),
(2, 4, 'Competent', 5, NULL, NULL, NULL, '2018-10-16 18:04:16', '2018-10-23 14:11:06'),
(3, 5, 'Competent', 7, NULL, NULL, NULL, '2018-10-16 18:10:50', '2018-10-23 14:11:10'),
(4, 6, 'Competent', 9, '2018-11-06', 100, 1, '2018-10-16 22:00:33', '2018-11-21 17:52:16'),
(5, 7, 'Competent', 5, '2018-11-09', NULL, 1, '2018-10-18 15:08:27', '2018-11-07 20:56:32'),
(6, 7, 'Competent', 1, '2018-08-07', NULL, 1, '2018-10-23 16:09:14', '2018-11-07 22:46:54'),
(7, 7, 'Competent', 2, '2018-11-08', NULL, 1, '2018-10-23 16:11:38', '2018-11-07 20:55:55'),
(8, 8, 'Competent', 1, NULL, NULL, 1, '2018-10-23 16:34:42', '2018-10-23 16:35:30'),
(9, 8, 'Competent', 2, NULL, NULL, 1, '2018-10-23 16:34:42', '2018-10-23 16:35:30'),
(10, 8, 'Not Yet Competent', 3, NULL, NULL, 1, '2018-10-23 16:35:30', '2018-10-23 18:01:34'),
(11, 1, 'Competent', 1, NULL, NULL, NULL, '2018-10-24 13:41:09', '2018-10-24 13:41:09'),
(12, 7, 'Not Yet Competent', 3, NULL, NULL, 1, '2018-11-07 21:26:33', '2018-11-07 21:28:39'),
(13, 7, 'Competent', 4, '2018-11-10', NULL, 1, '2018-11-07 21:26:33', '2018-11-07 21:28:39'),
(14, 9, 'Competent', 1, '2018-11-07', NULL, 1, '2018-11-07 23:14:27', '2018-11-07 23:16:12'),
(15, 9, 'Competent', 2, '2018-11-11', NULL, 1, '2018-11-07 23:16:12', '2018-11-08 03:23:02'),
(16, 9, 'Competent', 4, '2018-11-11', NULL, 1, '2018-11-08 03:22:21', '2018-11-08 03:23:02'),
(17, 10, 'Not Yet Competent', 2, NULL, NULL, NULL, '2018-11-08 03:46:25', '2018-11-08 03:46:25'),
(18, 6, 'Competent', 1, '2018-11-20', NULL, 1, '2018-11-08 21:41:49', '2018-11-21 19:57:54'),
(19, 6, 'Competent', 12, '2018-11-20', 100, 1, '2018-11-09 18:32:28', '2018-11-21 17:52:16'),
(20, 6, 'Competent', 2, '2018-11-21', 90, 1, '2018-11-21 20:02:20', '2018-11-21 20:03:41'),
(21, 11, 'Not Yet Competent', 1, NULL, NULL, NULL, '2018-11-21 20:30:35', '2018-11-21 20:30:35'),
(22, 11, 'Competent', 2, '2018-11-07', 90, NULL, '2018-11-21 20:30:35', '2018-11-21 20:30:35'),
(23, 12, 'Competent', 1, '2018-11-12', 85, 1, '2018-11-21 20:39:07', '2018-11-21 20:39:49'),
(24, 12, 'Competent', 2, '2018-11-12', 90, 1, '2018-11-21 20:39:07', '2018-11-21 20:39:49'),
(25, 12, 'Not Yet Competent', 3, NULL, NULL, 1, '2018-11-21 20:39:07', '2018-11-21 20:39:49'),
(26, 12, 'Competent', 5, '2018-11-12', 90, 1, '2018-11-21 20:39:07', '2018-11-21 20:39:49');

-- --------------------------------------------------------

--
-- Table structure for table `craft_item`
--

CREATE TABLE `craft_item` (
  `craft_item_id` int(11) NOT NULL,
  `craft_code` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL,
  `created_by` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Reference table is "user_credential"',
  `updated_by` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Reference table is "user_credential"',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Craft items table';

--
-- Dumping data for table `craft_item`
--

INSERT INTO `craft_item` (`craft_item_id`, `craft_code`, `description`, `status`, `created_by`, `updated_by`, `created`, `modified`) VALUES
(1, 'PF 101', 'Orientation to the Trade', '1', 'joey@gmail.com', 'joey@gmail.com', '2018-11-21 09:07:03', '2018-11-21 17:07:41'),
(2, 'PF 102', 'Pipefitting Hand Tools', '1', 'joey@gmail.com', 'joey@gmail.com', '2018-11-21 11:49:56', '2018-11-21 17:07:48'),
(3, 'PF 103', 'Pipefitting Power Tools', '1', 'joey@gmail.com', 'joey@gmail.com', '2018-11-21 12:06:34', '2018-11-21 17:07:57'),
(4, 'PF 201', 'Piping System', '1', 'joey@gmail.com', 'joey@gmail.com', '2018-11-21 12:48:55', '2018-11-21 17:08:10'),
(5, 'PF 202', 'Drawing and Detail Sheets', '1', 'joey@gmail.com', NULL, '2018-11-21 17:09:31', '2018-11-21 17:10:50'),
(6, 'PF 203', 'Identifying and Installing Valves', '1', 'joey@gmail.com', NULL, '2018-11-21 17:09:31', '2018-11-21 17:10:53'),
(7, 'PF 204', 'Pipefitting Trade Math', '1', 'joey@gmail.com', NULL, '2018-11-21 17:09:31', '2018-11-21 17:10:57'),
(8, 'PF 205', 'Threaded Pipe Fabrication', '1', 'joey@gmail.com', NULL, '2018-11-21 17:09:31', '2018-11-21 17:11:00'),
(9, 'PF 206', 'Socket Pipe Fabrication', '1', 'joey@gmail.com', NULL, '2018-11-21 17:09:31', '2018-11-21 17:11:02'),
(10, 'PF 207', 'Butt Weld Pipe Fabrication', '1', 'joey@gmail.com', NULL, '2018-11-21 17:09:31', '2018-11-21 17:11:06'),
(11, 'PF 303', 'Standards and Specifications', '1', 'joey@gmail.com', NULL, '2018-11-21 17:09:31', '2018-11-21 17:11:10'),
(12, 'PF 306', 'Introduction to above ground pipe installation', '1', 'joey@gmail.com', NULL, '2018-11-21 17:09:31', '2018-11-21 17:11:13');

-- --------------------------------------------------------

--
-- Table structure for table `diploma_course`
--

CREATE TABLE `diploma_course` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `course_acronym` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL,
  `created_by` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `updated_by` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `diploma_course`
--

INSERT INTO `diploma_course` (`course_id`, `course_name`, `course_acronym`, `status`, `created_by`, `updated_by`, `created`, `modified`) VALUES
(1, 'Civil Technology Managements', 'CTM', '1', 'joey@gmail.com', 'joey@gmail.com', '2018-09-07 00:37:45', '2018-11-21 21:37:37'),
(2, 'Native Drug Testings', 'NDT', '1', 'joey@gmail.com', 'joey@gmail.com', '2018-09-07 00:37:45', '2018-11-21 21:36:51'),
(3, 'Automotive', 'AU', '1', 'joey@gmail.com', 'joey@gmail.com', '2018-09-07 00:57:01', '2018-11-21 21:36:43'),
(4, 'Electrician', 'EE', '1', 'joey@gmail.com', 'joey@gmail.com', '2018-10-18 09:37:48', '2018-11-21 21:36:43');

-- --------------------------------------------------------

--
-- Table structure for table `english_proficiency`
--

CREATE TABLE `english_proficiency` (
  `eng_pro_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `eng_rating` enum('Competent','Not Yet Competent') COLLATE utf8_unicode_ci NOT NULL,
  `eng_completed` date DEFAULT NULL,
  `grade` int(11) DEFAULT NULL,
  `updated_by` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `english_proficiency`
--

INSERT INTO `english_proficiency` (`eng_pro_id`, `student_id`, `eng_rating`, `eng_completed`, `grade`, `updated_by`, `created`, `modified`) VALUES
(1, 2, 'Competent', NULL, NULL, NULL, '2018-10-16 17:41:58', '2018-10-23 14:12:49'),
(2, 4, 'Not Yet Competent', NULL, NULL, NULL, '2018-10-16 18:04:16', '2018-10-23 14:12:53'),
(3, 5, 'Not Yet Competent', NULL, NULL, NULL, '2018-10-16 18:10:50', '2018-11-07 20:21:06'),
(4, 6, 'Competent', '2018-11-01', 90, NULL, '2018-10-16 22:00:33', '2018-11-21 20:03:41'),
(5, 7, 'Competent', '2018-11-01', NULL, NULL, '2018-10-18 15:08:27', '2018-11-07 20:57:21'),
(6, 8, 'Competent', NULL, NULL, NULL, '2018-10-23 16:34:42', '2018-10-23 16:34:42'),
(7, 9, 'Competent', '2018-11-07', NULL, NULL, '2018-11-07 23:14:26', '2018-11-07 23:16:25'),
(8, 10, 'Competent', '2018-11-13', NULL, NULL, '2018-11-08 03:46:25', '2018-11-08 03:46:25'),
(9, 11, 'Competent', '2018-11-19', 85, NULL, '2018-11-21 20:30:35', '2018-11-21 20:30:35'),
(10, 12, 'Competent', '2018-11-11', 85, NULL, '2018-11-21 20:39:06', '2018-11-21 20:39:49');

-- --------------------------------------------------------

--
-- Table structure for table `history_logs`
--

CREATE TABLE `history_logs` (
  `tbl_id` int(11) NOT NULL,
  `activity` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_by` int(11) NOT NULL,
  `device_use` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `device_name` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `device_ip_address` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `history_logs`
--

INSERT INTO `history_logs` (`tbl_id`, `activity`, `created_by`, `device_use`, `device_name`, `device_ip_address`, `created`) VALUES
(1, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-04 12:47:44'),
(2, 'Logout user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-04 12:59:08'),
(3, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-04 13:00:28'),
(4, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-04 20:02:10'),
(5, 'Logout user', 2, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-04 21:40:22'),
(6, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-04 21:40:39'),
(7, 'Logout user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-05 01:14:05'),
(8, 'Logout user', 2, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-05 01:18:04'),
(9, 'Login user', 1, 'Mobile Device', 'JUN-PC', '::1', '2018-09-05 01:21:55'),
(10, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-05 12:36:27'),
(11, 'Register users', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-05 13:33:36'),
(12, 'Register users', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-05 13:35:31'),
(13, 'Deactivate users', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-05 13:38:40'),
(14, 'Activate users', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-05 13:39:10'),
(15, 'Logout user', 2, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-05 14:33:20'),
(16, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-05 14:33:34'),
(17, 'Update user information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-05 15:18:23'),
(18, 'Update user information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-05 15:22:43'),
(19, 'Update user information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-05 15:22:54'),
(20, 'Update user information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-05 15:23:02'),
(21, 'Update user information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-05 15:24:44'),
(22, 'Update user information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-05 15:26:54'),
(23, 'Update user information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-05 15:27:34'),
(24, 'Update user information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-05 15:27:46'),
(25, 'Update user information', 1, 'Mobile Device', 'JUN-PC', '::1', '2018-09-05 15:28:04'),
(26, 'Update user information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-05 15:32:59'),
(27, 'Update user information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-05 15:33:41'),
(28, 'Update user information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-05 15:35:27'),
(29, 'Update user information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-05 15:41:35'),
(30, 'Update user information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-05 15:47:45'),
(31, 'Deactivate users', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-05 15:48:26'),
(32, 'Activate users', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-05 15:48:37'),
(33, 'Update user information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-05 15:48:47'),
(34, 'Update user information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-05 15:51:43'),
(35, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-05 16:29:23'),
(36, 'Update user information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-05 16:31:09'),
(37, 'Update user information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-05 16:31:13'),
(38, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-05 18:52:39'),
(39, 'Update user information', 1, 'Mobile Device', 'JUN-PC', '::1', '2018-09-05 18:53:22'),
(40, 'Logout user', 2, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-05 19:02:43'),
(41, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-05 19:04:41'),
(42, 'Update user information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-05 19:06:08'),
(43, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-05 23:53:14'),
(44, 'Update user information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-05 23:53:24'),
(45, 'Update user information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-05 23:53:29'),
(46, 'Update user information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-05 23:53:43'),
(47, 'Update user information', 1, 'Mobile Device', 'JUN-PC', '::1', '2018-09-06 00:04:29'),
(48, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-06 16:44:39'),
(49, 'Update user information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-06 16:44:52'),
(50, 'Update Security Configuration', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-06 16:55:03'),
(51, 'Update Security Configuration', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-06 16:55:13'),
(52, 'Update Security Configuration', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-06 16:55:27'),
(53, 'Update Security Configuration', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-06 16:55:32'),
(54, 'Update Security Configuration', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-06 16:55:36'),
(55, 'Update Security Configuration', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-06 16:55:41'),
(56, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-06 20:05:31'),
(57, 'Logout user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-06 20:32:24'),
(58, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-06 20:32:40'),
(59, 'Create new Vocatonal Program(s)', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-06 21:15:43'),
(60, 'Deactivate Vocatonal Program(s)', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-06 21:20:23'),
(61, 'Activate Vocatonal Program(s)', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-06 21:20:30'),
(62, 'Update Vocatonal Program', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-06 21:28:28'),
(63, 'Update Vocatonal Program', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-06 21:30:59'),
(64, 'Deactivate Vocatonal Program(s)', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-06 21:31:10'),
(65, 'Activate Vocatonal Program(s)', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-06 21:31:22'),
(66, 'Update Vocatonal Program', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-06 21:33:05'),
(67, 'Update Vocatonal Program', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-06 21:38:21'),
(68, 'Update subject title', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-06 22:54:14'),
(69, 'Update subject title', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-06 22:54:23'),
(70, 'Deactivate subjects', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-06 22:56:48'),
(71, 'Deactivate subjects', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-06 22:56:52'),
(72, 'Activate subjects', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-06 22:56:56'),
(73, 'Update subject title', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-06 22:57:46'),
(74, 'Create new subject(s)', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-06 23:09:18'),
(75, 'Deactivate subjects', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-06 23:09:52'),
(76, 'Activate subjects', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-06 23:09:59'),
(77, 'Deactivate subjects', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-06 23:15:28'),
(78, 'Activate subjects', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-06 23:15:34'),
(79, 'Update subject title', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-06 23:22:59'),
(80, 'Update subject title', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-06 23:23:07'),
(81, 'Create new room(s)', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-06 23:49:24'),
(82, 'Deactivate rooms', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-06 23:49:39'),
(83, 'Activate rooms', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-06 23:49:59'),
(84, 'Update room name', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-06 23:53:35'),
(85, 'Deactivate rooms', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-06 23:56:58'),
(86, 'Deactivate users', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-06 23:58:34'),
(87, 'Activate users', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-06 23:58:39'),
(88, 'Create new Diploma Course(s)', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-07 00:37:45'),
(89, 'Deactivate Diploma Course(s)', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-07 00:44:50'),
(90, 'Activate Diploma Course(s)', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-07 00:44:54'),
(91, 'Update Diploma Course', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-07 00:56:08'),
(92, 'Create New Diploma Course(s)', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-07 00:57:01'),
(93, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-07 01:33:48'),
(94, 'Update Diploma Course', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-07 01:34:32'),
(95, 'Deactivate Diploma Course(s)', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-07 01:34:44'),
(96, 'Activate Diploma Course(s)', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-07 01:34:49'),
(97, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-07 11:07:50'),
(98, 'Update user information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-07 11:08:28'),
(99, 'Activate rooms', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-07 11:10:19'),
(100, 'Update user profile', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-07 11:43:01'),
(101, 'Update user profile', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-07 11:43:15'),
(102, 'Update user information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-07 11:43:25'),
(103, 'Logout user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-07 11:57:54'),
(104, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-07 11:58:06'),
(105, 'Logout user', 1, 'Mobile Device', 'JUN-PC', '::1', '2018-09-07 12:02:09'),
(106, 'Login user', 1, 'Mobile Device', 'JUN-PC', '::1', '2018-09-07 12:02:16'),
(107, 'Logout user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-07 12:18:43'),
(108, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-07 12:18:49'),
(109, 'Logout user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-07 12:27:13'),
(110, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-07 12:27:18'),
(111, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-07 12:34:57'),
(112, 'Logout user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-07 12:35:23'),
(113, 'Logout user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-07 12:42:05'),
(114, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-07 12:42:10'),
(115, 'User change password', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-07 12:44:12'),
(116, 'Logout user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-07 12:44:12'),
(117, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-07 12:44:54'),
(118, 'User change password', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-07 12:46:24'),
(119, 'Logout user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-07 12:46:24'),
(120, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-07 12:46:38'),
(121, 'Update user information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-07 13:37:26'),
(122, 'Logout user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-07 15:02:37'),
(123, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-07 15:03:11'),
(124, 'Logout user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-07 15:04:28'),
(125, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-07 15:05:31'),
(126, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-07 20:24:30'),
(127, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-08 20:07:36'),
(128, 'Logout user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-09 00:00:40'),
(129, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-09 00:00:48'),
(130, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-09 15:25:27'),
(131, 'Logout user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-09 19:46:54'),
(132, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-09 19:47:02'),
(133, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-12 12:38:41'),
(134, 'Update user information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-12 12:38:59'),
(135, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-12 16:11:41'),
(136, 'Update user information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-12 16:11:52'),
(137, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-13 10:30:49'),
(138, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-19 13:18:45'),
(139, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-19 22:26:28'),
(140, 'Update user information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-19 22:31:21'),
(141, 'Deactivate users', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-19 22:31:37'),
(142, 'Activate users', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-19 22:31:44'),
(143, 'Logout user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-20 00:23:00'),
(144, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-21 11:39:53'),
(145, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-25 11:20:49'),
(146, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-26 12:49:40'),
(147, 'Logout user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-26 16:11:01'),
(148, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-15 11:51:19'),
(149, 'Update subject title', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-15 14:57:58'),
(150, 'Update subject title', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-15 14:58:05'),
(151, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-15 20:32:08'),
(152, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-16 10:13:37'),
(153, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-16 13:59:51'),
(154, 'Joey Minguillan Register student', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-16 17:33:53'),
(155, 'Joey Minguillan Register student', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-16 17:41:58'),
(156, 'Joey Minguillan Created subjects for 14232', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-16 17:41:58'),
(157, 'Joey Minguillan Created english proficiency rating for 14232', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-16 17:41:58'),
(158, 'Joey Minguillan Created craft rating and skill for 14232', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-16 17:41:58'),
(159, 'Joey Minguillan Created core rating and skill for 14232', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-16 17:41:58'),
(160, 'Joey Minguillan Register student', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-16 17:57:54'),
(161, 'Joey Minguillan Created subjects for 15632', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-16 17:57:54'),
(162, 'Joey Minguillan Created english proficiency rating for 15632', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-16 17:57:54'),
(163, 'Joey Minguillan Created craft rating and skill for 15632', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-16 17:57:54'),
(164, 'Joey Minguillan Created core rating and skill for 15632', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-16 17:57:54'),
(165, 'Joey Minguillan Register student', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-16 18:04:16'),
(166, 'Joey Minguillan Created subjects for 14143', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-16 18:04:16'),
(167, 'Joey Minguillan Created english proficiency rating for 14143', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-16 18:04:16'),
(168, 'Joey Minguillan Created craft rating and skill for 14143', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-16 18:04:16'),
(169, 'Joey Minguillan Created core rating and skill for 14143', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-16 18:04:16'),
(170, 'Joey Minguillan Register student', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-16 18:10:50'),
(171, 'Joey Minguillan Created subjects for 23463', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-16 18:10:50'),
(172, 'Joey Minguillan Created english proficiency rating for 23463', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-16 18:10:50'),
(173, 'Joey Minguillan Created craft rating and skill for 23463', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-16 18:10:50'),
(174, 'Joey Minguillan Created core rating and skill for 23463', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-16 18:10:50'),
(175, 'Joey Minguillan Register student', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-16 22:00:32'),
(176, 'Joey Minguillan Created subjects for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-16 22:00:33'),
(177, 'Joey Minguillan Created english proficiency rating for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-16 22:00:33'),
(178, 'Joey Minguillan Created craft rating and skill for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-16 22:00:33'),
(179, 'Joey Minguillan Created core rating and skill for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-16 22:00:33'),
(180, 'Logout user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-16 22:57:14'),
(181, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-16 22:57:55'),
(182, 'Update user profile', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-16 22:58:39'),
(183, 'Update user profile', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-16 22:58:53'),
(184, 'Update user profile', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-16 22:59:36'),
(185, 'Logout user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-16 23:00:11'),
(186, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-16 23:00:29'),
(187, 'Update user profile', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-16 23:04:17'),
(188, 'Update user profile', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-16 23:04:58'),
(189, 'Logout user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-16 23:05:16'),
(190, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-16 23:05:24'),
(191, 'Update user profile', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-16 23:07:19'),
(192, 'Logout user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-16 23:07:55'),
(193, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-16 23:08:02'),
(194, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-17 10:56:15'),
(195, 'Logout user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-17 11:02:07'),
(196, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-17 12:11:43'),
(197, 'Logout user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-17 12:28:24'),
(198, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-17 12:31:49'),
(199, 'Logout user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-17 12:34:02'),
(200, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-17 12:34:13'),
(201, 'Logout user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-17 12:57:20'),
(202, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-17 12:57:38'),
(203, 'Update user profile', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-17 13:27:16'),
(204, 'Update user profile', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-17 13:31:42'),
(205, 'Logout user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-17 13:31:48'),
(206, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-17 13:31:59'),
(207, 'Update user profile', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-17 13:37:29'),
(208, 'Logout user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-17 13:37:34'),
(209, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-17 13:37:42'),
(210, 'Logout user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-17 13:40:24'),
(211, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-17 14:02:20'),
(212, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-17 19:00:30'),
(213, 'Update Diploma Course', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-17 22:45:03'),
(214, 'Joey Minguillan Deactivate Students', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-17 23:15:57'),
(215, 'Joey Minguillan Activate Students', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-17 23:16:07'),
(216, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 08:49:13'),
(217, 'Deactivate Diploma Course(s)', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 08:49:27'),
(218, 'Activate Diploma Course(s)', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 08:49:31'),
(219, 'Logout user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 09:23:58'),
(220, 'Login user', 3, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 09:24:02'),
(221, 'Update user profile', 3, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 09:31:59'),
(222, 'Logout user', 3, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 09:32:07'),
(223, 'Login user', 3, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 09:32:11'),
(224, 'Create New Diploma Course(s)', 3, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 09:37:48'),
(225, 'Create new Vocatonal Program(s)', 3, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 09:44:31'),
(226, 'Create new room(s)', 3, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 09:50:48'),
(227, 'Update room name', 3, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 09:51:36'),
(228, 'Logout user', 3, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 10:16:05'),
(229, 'Login user', 3, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 10:18:13'),
(230, 'Logout user', 3, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 10:24:31'),
(231, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 10:25:52'),
(232, 'Register users', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 10:26:21'),
(233, 'Logout user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 10:26:46'),
(234, 'Login user', 4, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 10:26:51'),
(235, 'Update user profile', 4, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 10:35:34'),
(236, 'Logout user', 4, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 10:35:44'),
(237, 'Login user', 4, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 10:35:48'),
(238, 'Logout user', 4, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 10:45:58'),
(239, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 10:46:08'),
(240, 'Update user profile', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 12:49:52'),
(241, 'Logout user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 12:50:28'),
(242, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 12:50:35'),
(243, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 14:51:12'),
(244, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 14:54:42'),
(245, 'Joey Minguillan Updated subjects for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 14:54:42'),
(246, 'Joey Minguillan Updated eng. pro. rating for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 14:54:42'),
(247, 'Joey Minguillan Updated craft rating and skill for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 14:54:42'),
(248, 'Joey Minguillan Updated core rating and skill for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 14:54:42'),
(249, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 14:56:31'),
(250, 'Joey Minguillan Updated subjects for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 14:56:31'),
(251, 'Joey Minguillan Created subjects for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 14:56:31'),
(252, 'Joey Minguillan Updated eng. pro. rating for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 14:56:31'),
(253, 'Joey Minguillan Updated craft rating and skill for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 14:56:31'),
(254, 'Joey Minguillan Updated core rating and skill for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 14:56:31'),
(255, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 14:57:41'),
(256, 'Joey Minguillan Updated subjects for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 14:57:41'),
(257, 'Joey Minguillan Updated subjects for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 14:57:41'),
(258, 'Joey Minguillan Updated eng. pro. rating for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 14:57:41'),
(259, 'Joey Minguillan Updated craft rating and skill for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 14:57:41'),
(260, 'Joey Minguillan Updated core rating and skill for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 14:57:41'),
(261, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 15:03:11'),
(262, 'Joey Minguillan Updated subjects for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 15:03:11'),
(263, 'Joey Minguillan Updated subjects for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 15:03:11'),
(264, 'Joey Minguillan Updated eng. pro. rating for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 15:03:11'),
(265, 'Joey Minguillan Updated craft rating and skill for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 15:03:11'),
(266, 'Joey Minguillan Updated core rating and skill for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 15:03:11'),
(267, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 15:03:35'),
(268, 'Joey Minguillan Updated subjects for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 15:03:35'),
(269, 'Joey Minguillan Updated subjects for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 15:03:35'),
(270, 'Joey Minguillan Updated eng. pro. rating for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 15:03:35'),
(271, 'Joey Minguillan Updated craft rating and skill for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 15:03:35'),
(272, 'Joey Minguillan Updated core rating and skill for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 15:03:35'),
(273, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 15:05:40'),
(274, 'Joey Minguillan Updated subjects for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 15:05:40'),
(275, 'Joey Minguillan Updated subjects for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 15:05:40'),
(276, 'Joey Minguillan Updated eng. pro. rating for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 15:05:40'),
(277, 'Joey Minguillan Updated craft rating and skill for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 15:05:40'),
(278, 'Joey Minguillan Updated core rating and skill for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 15:05:40'),
(279, 'Joey Minguillan Register student', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 15:08:27'),
(280, 'Joey Minguillan Created subjects for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 15:08:27'),
(281, 'Joey Minguillan Created english proficiency rating for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 15:08:27'),
(282, 'Joey Minguillan Created craft rating and skill for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 15:08:27'),
(283, 'Joey Minguillan Created core rating and skill for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 15:08:27'),
(284, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 15:16:37'),
(285, 'Joey Minguillan Updated subjects for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 15:16:37'),
(286, 'Joey Minguillan Updated eng. pro. rating for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 15:16:37'),
(287, 'Joey Minguillan Updated craft rating and skill for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 15:16:37'),
(288, 'Joey Minguillan Updated core rating and skill for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 15:16:37'),
(289, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 15:18:45'),
(290, 'Joey Minguillan Updated subjects for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 15:18:45'),
(291, 'Joey Minguillan Updated eng. pro. rating for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 15:18:45'),
(292, 'Joey Minguillan Updated craft rating and skill for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 15:18:45'),
(293, 'Joey Minguillan Updated core rating and skill for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 15:18:45'),
(294, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 15:24:18'),
(295, 'Joey Minguillan Updated subjects for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 15:24:18'),
(296, 'Joey Minguillan Updated eng. pro. rating for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 15:24:18'),
(297, 'Joey Minguillan Updated craft rating and skill for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 15:24:18'),
(298, 'Joey Minguillan Updated core rating and skill for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 15:24:18'),
(299, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 15:24:33'),
(300, 'Joey Minguillan Updated subjects for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 15:24:33'),
(301, 'Joey Minguillan Updated eng. pro. rating for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 15:24:33'),
(302, 'Joey Minguillan Updated craft rating and skill for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 15:24:33'),
(303, 'Joey Minguillan Updated core rating and skill for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 15:24:33'),
(304, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 15:25:19'),
(305, 'Joey Minguillan Updated subjects for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 15:25:19'),
(306, 'Joey Minguillan Updated subjects for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 15:25:19'),
(307, 'Joey Minguillan Updated eng. pro. rating for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 15:25:19'),
(308, 'Joey Minguillan Updated craft rating and skill for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 15:25:19'),
(309, 'Joey Minguillan Updated core rating and skill for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 15:25:19'),
(310, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 15:25:53'),
(311, 'Joey Minguillan Updated subjects for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 15:25:53'),
(312, 'Joey Minguillan Updated eng. pro. rating for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 15:25:53'),
(313, 'Joey Minguillan Updated craft rating and skill for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 15:25:53'),
(314, 'Joey Minguillan Updated core rating and skill for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 15:25:53'),
(315, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 15:28:38'),
(316, 'Joey Minguillan Updated subjects for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 15:28:39'),
(317, 'Joey Minguillan Updated eng. pro. rating for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 15:28:39'),
(318, 'Joey Minguillan Updated craft rating and skill for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 15:28:39'),
(319, 'Joey Minguillan Updated core rating and skill for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 15:28:39'),
(320, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 15:30:34'),
(321, 'Joey Minguillan Updated subjects for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 15:30:34'),
(322, 'Joey Minguillan Updated eng. pro. rating for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 15:30:34'),
(323, 'Joey Minguillan Updated craft rating and skill for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 15:30:34'),
(324, 'Joey Minguillan Updated core rating and skill for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 15:30:34'),
(325, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 15:31:35'),
(326, 'Joey Minguillan Updated subjects for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 15:31:35'),
(327, 'Joey Minguillan Updated subjects for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 15:31:35'),
(328, 'Joey Minguillan Updated eng. pro. rating for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 15:31:35'),
(329, 'Joey Minguillan Updated craft rating and skill for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 15:31:35'),
(330, 'Joey Minguillan Updated core rating and skill for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-18 15:31:35'),
(331, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-19 12:00:43'),
(332, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-19 12:02:26'),
(333, 'Joey Minguillan Created subjects for 12345', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-19 12:02:26'),
(334, 'Joey Minguillan Updated eng. pro. rating for 12345', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-19 12:02:26'),
(335, 'Joey Minguillan Updated craft rating and skill for 12345', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-19 12:02:26'),
(336, 'Joey Minguillan Updated core rating and skill for 12345', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-19 12:02:27'),
(337, 'Logout user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-19 13:43:18'),
(338, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-19 13:43:25'),
(339, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-23 12:54:34'),
(340, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-23 13:11:35'),
(341, 'Joey Minguillan Updated subjects for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-23 13:11:35'),
(342, 'Joey Minguillan Updated eng. pro. rating for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-23 13:11:35'),
(343, 'Joey Minguillan Updated craft rating and skill for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-23 13:11:35'),
(344, 'Joey Minguillan Updated core rating and skill for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-23 13:11:35'),
(345, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-23 13:56:50'),
(346, 'Joey Minguillan Updated subjects for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-23 13:56:50'),
(347, 'Joey Minguillan Updated eng. pro. rating for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-23 13:56:51'),
(348, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-23 16:09:14'),
(349, 'Joey Minguillan Updated subjects for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-23 16:09:14'),
(350, 'Joey Minguillan Updated eng. pro. rating for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-23 16:09:14'),
(351, 'Joey Minguillan Updated craft rating and skill for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-23 16:09:14'),
(352, 'Joey Minguillan Updated core rating and skill for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-23 16:09:14'),
(353, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-23 16:11:38'),
(354, 'Joey Minguillan Updated subjects for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-23 16:11:38'),
(355, 'Joey Minguillan Updated eng. pro. rating for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-23 16:11:38'),
(356, 'Joey Minguillan Updated craft rating and skill for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-23 16:11:38'),
(357, 'Joey Minguillan Updated core rating and skill for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-23 16:11:38'),
(358, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-23 16:12:57'),
(359, 'Joey Minguillan Updated subjects for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-23 16:12:57'),
(360, 'Joey Minguillan Updated eng. pro. rating for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-23 16:12:57'),
(361, 'Joey Minguillan Updated craft rating and skill for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-23 16:12:57'),
(362, 'Joey Minguillan Updated core rating and skill for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-23 16:12:58'),
(363, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-23 16:13:11'),
(364, 'Joey Minguillan Updated subjects for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-23 16:13:11'),
(365, 'Joey Minguillan Updated eng. pro. rating for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-23 16:13:11'),
(366, 'Joey Minguillan Updated craft rating and skill for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-23 16:13:11'),
(367, 'Joey Minguillan Updated core rating and skill for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-23 16:13:11'),
(368, 'Joey Minguillan Register student', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-23 16:34:42'),
(369, 'Joey Minguillan Created subjects for 67857', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-23 16:34:42'),
(370, 'Joey Minguillan Created english proficiency rating for 67857', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-23 16:34:42'),
(371, 'Joey Minguillan Created craft rating and skill for 67857', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-23 16:34:42'),
(372, 'Joey Minguillan Created core rating and skill for 67857', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-23 16:34:42'),
(373, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-23 16:35:30'),
(374, 'Joey Minguillan Updated subjects for 67857', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-23 16:35:30'),
(375, 'Joey Minguillan Updated subjects for 67857', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-23 16:35:30'),
(376, 'Joey Minguillan Updated eng. pro. rating for 67857', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-23 16:35:30'),
(377, 'Joey Minguillan Updated craft rating and skill for 67857', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-23 16:35:30'),
(378, 'Joey Minguillan Updated core rating and skill for 67857', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-23 16:35:31'),
(379, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-23 18:01:34'),
(380, 'Joey Minguillan Updated subjects for 67857', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-23 18:01:34'),
(381, 'Joey Minguillan Updated subjects for 67857', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-23 18:01:34'),
(382, 'Joey Minguillan Updated eng. pro. rating for 67857', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-23 18:01:34'),
(383, 'Joey Minguillan Updated craft rating and skill for 67857', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-23 18:01:34'),
(384, 'Joey Minguillan Updated core rating and skill for 67857', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-23 18:01:34'),
(385, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-24 13:36:06'),
(386, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-24 13:36:33'),
(387, 'Joey Minguillan Updated subjects for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-24 13:36:33'),
(388, 'Joey Minguillan Updated eng. pro. rating for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-24 13:36:33'),
(389, 'Joey Minguillan Updated craft rating and skill for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-24 13:36:33'),
(390, 'Joey Minguillan Updated core rating and skill for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-24 13:36:33'),
(391, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-24 13:41:08'),
(392, 'Joey Minguillan Updated subjects for 12345', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-24 13:41:09'),
(393, 'Joey Minguillan Updated eng. pro. rating for 12345', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-24 13:41:09'),
(394, 'Joey Minguillan Updated craft rating and skill for 12345', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-24 13:41:09'),
(395, 'Joey Minguillan Updated core rating and skill for 12345', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-10-24 13:41:09'),
(396, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-01 20:45:38'),
(397, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-03 17:22:55'),
(398, 'Joey Minguillan Deactivate Students', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-03 17:23:38'),
(399, 'Joey Minguillan Activate Students', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-03 17:23:42'),
(400, 'Joey Minguillan Deactivate Students', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-03 17:23:54'),
(401, 'Joey Minguillan Activate Students', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-03 17:23:58'),
(402, 'Joey Minguillan Deactivate Students', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-03 17:24:05'),
(403, 'Joey Minguillan Activate Students', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-03 17:24:11'),
(404, 'Joey Minguillan Deactivate Students', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-03 17:24:17'),
(405, 'Joey Minguillan Activate Students', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-03 17:24:22'),
(406, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-04 19:58:02'),
(407, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 20:11:10'),
(408, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 20:50:59'),
(409, 'Joey Minguillan Updated subjects for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 20:50:59'),
(410, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 20:51:41'),
(411, 'Joey Minguillan Updated subjects for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 20:51:41'),
(412, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 20:52:19'),
(413, 'Joey Minguillan Updated subjects for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 20:52:19'),
(414, 'Joey Minguillan Updated eng. pro. rating for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 20:52:19'),
(415, 'Joey Minguillan Updated craft rating and skill for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 20:52:19'),
(416, 'Joey Minguillan Updated core rating and skill for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 20:52:19'),
(417, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 20:52:56'),
(418, 'Joey Minguillan Updated subjects for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 20:52:56'),
(419, 'Joey Minguillan Updated eng. pro. rating for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 20:52:56'),
(420, 'Joey Minguillan Updated craft rating and skill for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 20:52:56'),
(421, 'Joey Minguillan Updated core rating and skill for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 20:52:56'),
(422, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 20:55:38'),
(423, 'Joey Minguillan Updated subjects for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 20:55:38'),
(424, 'Joey Minguillan Updated eng. pro. rating for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 20:55:38'),
(425, 'Joey Minguillan Updated craft rating and skill for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 20:55:38'),
(426, 'Joey Minguillan Updated core rating and skill for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 20:55:38'),
(427, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 20:55:55'),
(428, 'Joey Minguillan Updated subjects for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 20:55:55'),
(429, 'Joey Minguillan Updated eng. pro. rating for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 20:55:55'),
(430, 'Joey Minguillan Updated craft rating and skill for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 20:55:55'),
(431, 'Joey Minguillan Updated core rating and skill for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 20:55:55'),
(432, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 20:56:16'),
(433, 'Joey Minguillan Updated subjects for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 20:56:16'),
(434, 'Joey Minguillan Updated eng. pro. rating for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 20:56:16'),
(435, 'Joey Minguillan Updated craft rating and skill for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 20:56:16'),
(436, 'Joey Minguillan Updated core rating and skill for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 20:56:17'),
(437, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 20:56:32'),
(438, 'Joey Minguillan Updated subjects for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 20:56:32'),
(439, 'Joey Minguillan Updated eng. pro. rating for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 20:56:32'),
(440, 'Joey Minguillan Updated craft rating and skill for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 20:56:32'),
(441, 'Joey Minguillan Updated core rating and skill for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 20:56:33'),
(442, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 20:57:21'),
(443, 'Joey Minguillan Updated subjects for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 20:57:21'),
(444, 'Joey Minguillan Updated eng. pro. rating for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 20:57:21'),
(445, 'Joey Minguillan Updated craft rating and skill for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 20:57:21'),
(446, 'Joey Minguillan Updated core rating and skill for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 20:57:21'),
(447, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 20:58:00'),
(448, 'Joey Minguillan Updated subjects for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 20:58:00'),
(449, 'Joey Minguillan Updated eng. pro. rating for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 20:58:00'),
(450, 'Joey Minguillan Updated craft rating and skill for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 20:58:00'),
(451, 'Joey Minguillan Updated core rating and skill for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 20:58:01'),
(452, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 21:14:20'),
(453, 'Joey Minguillan Updated subjects for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 21:14:20'),
(454, 'Joey Minguillan Updated eng. pro. rating for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 21:14:20'),
(455, 'Joey Minguillan Updated craft rating and skill for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 21:14:20'),
(456, 'Joey Minguillan Updated core rating and skill for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 21:14:20'),
(457, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 21:15:41'),
(458, 'Joey Minguillan Updated subjects for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 21:15:41'),
(459, 'Joey Minguillan Updated eng. pro. rating for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 21:15:41'),
(460, 'Joey Minguillan Updated craft rating and skill for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 21:15:41'),
(461, 'Joey Minguillan Updated core rating and skill for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 21:15:41'),
(462, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 21:15:52'),
(463, 'Joey Minguillan Updated subjects for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 21:15:52'),
(464, 'Joey Minguillan Updated eng. pro. rating for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 21:15:52'),
(465, 'Joey Minguillan Updated craft rating and skill for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 21:15:52');
INSERT INTO `history_logs` (`tbl_id`, `activity`, `created_by`, `device_use`, `device_name`, `device_ip_address`, `created`) VALUES
(466, 'Joey Minguillan Updated core rating and skill for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 21:15:52'),
(467, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 21:21:32'),
(468, 'Joey Minguillan Updated subjects for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 21:21:32'),
(469, 'Joey Minguillan Updated eng. pro. rating for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 21:21:32'),
(470, 'Joey Minguillan Updated craft rating and skill for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 21:21:32'),
(471, 'Joey Minguillan Updated core rating and skill for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 21:21:32'),
(472, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 21:26:33'),
(473, 'Joey Minguillan Updated subjects for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 21:26:33'),
(474, 'Joey Minguillan Updated eng. pro. rating for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 21:26:33'),
(475, 'Joey Minguillan Updated craft rating and skill for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 21:26:33'),
(476, 'Joey Minguillan Updated core rating and skill for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 21:26:33'),
(477, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 21:28:39'),
(478, 'Joey Minguillan Updated subjects for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 21:28:39'),
(479, 'Joey Minguillan Updated eng. pro. rating for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 21:28:39'),
(480, 'Joey Minguillan Updated craft rating and skill for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 21:28:40'),
(481, 'Joey Minguillan Updated core rating and skill for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 21:28:40'),
(482, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 21:30:22'),
(483, 'Joey Minguillan Updated subjects for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 21:30:22'),
(484, 'Joey Minguillan Updated eng. pro. rating for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 21:30:22'),
(485, 'Joey Minguillan Updated craft rating and skill for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 21:30:22'),
(486, 'Joey Minguillan Updated core rating and skill for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 21:30:22'),
(487, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 22:41:12'),
(488, 'Joey Minguillan Updated subjects for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 22:41:13'),
(489, 'Joey Minguillan Updated eng. pro. rating for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 22:41:13'),
(490, 'Joey Minguillan Updated craft rating and skill for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 22:41:13'),
(491, 'Joey Minguillan Updated core rating and skill for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 22:41:13'),
(492, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 22:41:38'),
(493, 'Joey Minguillan Updated subjects for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 22:41:38'),
(494, 'Joey Minguillan Updated eng. pro. rating for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 22:41:38'),
(495, 'Joey Minguillan Updated craft rating and skill for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 22:41:38'),
(496, 'Joey Minguillan Updated core rating and skill for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 22:41:38'),
(497, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 22:46:53'),
(498, 'Joey Minguillan Updated subjects for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 22:46:53'),
(499, 'Joey Minguillan Updated eng. pro. rating for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 22:46:54'),
(500, 'Joey Minguillan Updated craft rating and skill for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 22:46:54'),
(501, 'Joey Minguillan Updated core rating and skill for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 22:46:54'),
(502, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 22:56:38'),
(503, 'Joey Minguillan Updated subjects for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 22:56:38'),
(504, 'Joey Minguillan Updated eng. pro. rating for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 22:56:38'),
(505, 'Joey Minguillan Updated craft rating and skill for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 22:56:38'),
(506, 'Joey Minguillan Updated core rating and skill for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 22:56:38'),
(507, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 22:58:27'),
(508, 'Joey Minguillan Updated subjects for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 22:58:27'),
(509, 'Joey Minguillan Updated eng. pro. rating for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 22:58:27'),
(510, 'Joey Minguillan Updated craft rating and skill for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 22:58:27'),
(511, 'Joey Minguillan Updated core rating and skill for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 22:58:27'),
(512, 'Joey Minguillan Register student', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 23:14:26'),
(513, 'Joey Minguillan Created subjects for 98778', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 23:14:26'),
(514, 'Joey Minguillan Created english proficiency rating for 98778', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 23:14:26'),
(515, 'Joey Minguillan Created craft rating and skill for 98778', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 23:14:27'),
(516, 'Joey Minguillan Created core rating and skill for 98778', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 23:14:27'),
(517, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 23:16:12'),
(518, 'Joey Minguillan Updated subjects for 98778', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 23:16:12'),
(519, 'Joey Minguillan Updated eng. pro. rating for 98778', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 23:16:12'),
(520, 'Joey Minguillan Updated craft rating and skill for 98778', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 23:16:12'),
(521, 'Joey Minguillan Updated core rating and skill for 98778', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 23:16:12'),
(522, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 23:16:25'),
(523, 'Joey Minguillan Updated subjects for 98778', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 23:16:25'),
(524, 'Joey Minguillan Updated eng. pro. rating for 98778', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 23:16:25'),
(525, 'Joey Minguillan Updated craft rating and skill for 98778', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 23:16:25'),
(526, 'Joey Minguillan Updated core rating and skill for 98778', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-07 23:16:25'),
(527, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-08 00:23:02'),
(528, 'Joey Minguillan Updated subjects for 98778', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-08 00:23:02'),
(529, 'Joey Minguillan Updated eng. pro. rating for 98778', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-08 00:23:02'),
(530, 'Joey Minguillan Updated craft rating and skill for 98778', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-08 00:23:02'),
(531, 'Joey Minguillan Updated core rating and skill for 98778', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-08 00:23:02'),
(532, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-08 00:23:11'),
(533, 'Joey Minguillan Updated subjects for 98778', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-08 00:23:12'),
(534, 'Joey Minguillan Updated eng. pro. rating for 98778', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-08 00:23:12'),
(535, 'Joey Minguillan Updated craft rating and skill for 98778', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-08 00:23:12'),
(536, 'Joey Minguillan Updated core rating and skill for 98778', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-08 00:23:12'),
(537, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-08 00:30:19'),
(538, 'Joey Minguillan Updated subjects for 98778', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-08 00:30:19'),
(539, 'Joey Minguillan Updated eng. pro. rating for 98778', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-08 00:30:19'),
(540, 'Joey Minguillan Updated craft rating and skill for 98778', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-08 00:30:19'),
(541, 'Joey Minguillan Updated core rating and skill for 98778', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-08 00:30:19'),
(542, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-08 03:22:20'),
(543, 'Joey Minguillan Updated subjects for 98778', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-08 03:22:20'),
(544, 'Joey Minguillan Created subjects for 98778', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-08 03:22:21'),
(545, 'Joey Minguillan Created subjects for 98778', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-08 03:22:21'),
(546, 'Joey Minguillan Created subjects for 98778', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-08 03:22:21'),
(547, 'Joey Minguillan Updated eng. pro. rating for 98778', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-08 03:22:21'),
(548, 'Joey Minguillan Updated craft rating and skill for 98778', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-08 03:22:21'),
(549, 'Joey Minguillan Updated core rating and skill for 98778', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-08 03:22:21'),
(550, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-08 03:23:02'),
(551, 'Joey Minguillan Updated subjects for 98778', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-08 03:23:02'),
(552, 'Joey Minguillan Updated subjects for 98778', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-08 03:23:02'),
(553, 'Joey Minguillan Updated subjects for 98778', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-08 03:23:02'),
(554, 'Joey Minguillan Updated subjects for 98778', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-08 03:23:02'),
(555, 'Joey Minguillan Updated eng. pro. rating for 98778', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-08 03:23:02'),
(556, 'Joey Minguillan Updated craft rating and skill for 98778', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-08 03:23:02'),
(557, 'Joey Minguillan Updated core rating and skill for 98778', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-08 03:23:02'),
(558, 'Joey Minguillan Register student', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-08 03:46:25'),
(559, 'Joey Minguillan Created subjects for 83456', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-08 03:46:25'),
(560, 'Joey Minguillan Created english proficiency rating for 83456', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-08 03:46:25'),
(561, 'Joey Minguillan Created craft rating and skill for 83456', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-08 03:46:25'),
(562, 'Joey Minguillan Created core rating and skill for 83456', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-08 03:46:25'),
(563, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-08 12:23:24'),
(564, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-08 12:25:03'),
(565, 'Joey Minguillan Updated subjects for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-08 12:25:03'),
(566, 'Joey Minguillan Updated eng. pro. rating for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-08 12:25:03'),
(567, 'Joey Minguillan Updated craft rating and skill for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-08 12:25:03'),
(568, 'Joey Minguillan Updated core rating and skill for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-08 12:25:03'),
(569, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-08 14:32:22'),
(570, 'Joey Minguillan Updated subjects for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-08 14:32:22'),
(571, 'Joey Minguillan Updated eng. pro. rating for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-08 14:32:22'),
(572, 'Joey Minguillan Updated craft rating and skill for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-08 14:32:22'),
(573, 'Joey Minguillan Updated core rating and skill for 69678', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-08 14:32:22'),
(574, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-08 21:40:06'),
(575, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-08 21:41:48'),
(576, 'Joey Minguillan Updated subjects for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-08 21:41:48'),
(577, 'Joey Minguillan Updated subjects for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-08 21:41:49'),
(578, 'Joey Minguillan Updated eng. pro. rating for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-08 21:41:49'),
(579, 'Joey Minguillan Updated craft rating and skill for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-08 21:41:49'),
(580, 'Joey Minguillan Updated core rating and skill for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-08 21:41:49'),
(581, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-08 21:42:43'),
(582, 'Joey Minguillan Updated subjects for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-08 21:42:44'),
(583, 'Joey Minguillan Updated subjects for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-08 21:42:44'),
(584, 'Joey Minguillan Updated eng. pro. rating for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-08 21:42:44'),
(585, 'Joey Minguillan Updated craft rating and skill for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-08 21:42:44'),
(586, 'Joey Minguillan Updated core rating and skill for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-08 21:42:44'),
(587, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-09 15:47:41'),
(588, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-09 18:04:57'),
(589, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-09 18:20:45'),
(590, 'Joey Minguillan Updated subjects for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-09 18:20:45'),
(591, 'Joey Minguillan Updated subjects for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-09 18:20:45'),
(592, 'Joey Minguillan Updated eng. pro. rating for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-09 18:20:45'),
(593, 'Joey Minguillan Updated craft rating and skill for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-09 18:20:45'),
(594, 'Joey Minguillan Updated core rating and skill for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-09 18:20:46'),
(595, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-09 18:32:28'),
(596, 'Joey Minguillan Updated subjects for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-09 18:32:28'),
(597, 'Joey Minguillan Updated subjects for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-09 18:32:28'),
(598, 'Joey Minguillan Updated eng. pro. rating for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-09 18:32:28'),
(599, 'Joey Minguillan Updated craft rating and skill for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-09 18:32:28'),
(600, 'Joey Minguillan Updated core rating and skill for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-09 18:32:28'),
(601, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-09 19:26:48'),
(602, 'Joey Minguillan Updated subjects for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-09 19:26:48'),
(603, 'Joey Minguillan Updated subjects for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-09 19:26:48'),
(604, 'Joey Minguillan Updated eng. pro. rating for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-09 19:26:48'),
(605, 'Joey Minguillan Updated craft rating and skill for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-09 19:26:48'),
(606, 'Joey Minguillan Updated core rating and skill for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-09 19:26:48'),
(607, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-09 20:17:30'),
(608, 'Joey Minguillan Updated subjects for 98778', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-09 20:17:30'),
(609, 'Joey Minguillan Updated subjects for 98778', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-09 20:17:30'),
(610, 'Joey Minguillan Updated subjects for 98778', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-09 20:17:30'),
(611, 'Joey Minguillan Updated subjects for 98778', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-09 20:17:30'),
(612, 'Joey Minguillan Updated eng. pro. rating for 98778', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-09 20:17:30'),
(613, 'Joey Minguillan Updated craft rating and skill for 98778', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-09 20:17:30'),
(614, 'Joey Minguillan Updated core rating and skill for 98778', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-09 20:17:30'),
(615, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-11 08:30:27'),
(616, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-11 08:47:42'),
(617, 'Joey Minguillan Updated subjects for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-11 08:47:42'),
(618, 'Joey Minguillan Updated subjects for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-11 08:47:42'),
(619, 'Joey Minguillan Updated eng. pro. rating for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-11 08:47:42'),
(620, 'Joey Minguillan Updated craft rating and skill for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-11 08:47:42'),
(621, 'Joey Minguillan Updated core rating and skill for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-11 08:47:42'),
(622, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-17 14:53:41'),
(623, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-17 23:53:59'),
(624, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-18 00:53:52'),
(625, 'Joey Minguillan Updated subjects for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-18 00:53:53'),
(626, 'Joey Minguillan Updated subjects for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-18 00:53:53'),
(627, 'Joey Minguillan Updated eng. pro. rating for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-18 00:53:53'),
(628, 'Joey Minguillan Updated craft rating and skill for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-18 00:53:53'),
(629, 'Joey Minguillan Updated core rating and skill for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-18 00:53:53'),
(630, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-18 00:57:05'),
(631, 'Joey Minguillan Updated subjects for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-18 00:57:05'),
(632, 'Joey Minguillan Updated subjects for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-18 00:57:05'),
(633, 'Joey Minguillan Updated eng. pro. rating for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-18 00:57:05'),
(634, 'Joey Minguillan Updated craft rating and skill for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-18 00:57:05'),
(635, 'Joey Minguillan Updated core rating and skill for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-18 00:57:05'),
(636, 'Logout user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-18 01:50:27'),
(637, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-18 01:50:34'),
(638, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-18 19:42:15'),
(639, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-18 20:09:04'),
(640, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-20 10:30:26'),
(641, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 08:47:24'),
(642, 'Create new craft(s)', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 12:06:34'),
(643, 'Deactivate subjects', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 12:17:27'),
(644, 'Deactivate Craft', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 12:20:43'),
(645, 'Activate Craft', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 12:20:48'),
(646, 'Update Craft', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 12:43:25'),
(647, 'Update Craft', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 12:43:42'),
(648, 'Update Craft', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 12:43:52'),
(649, 'Update Craft', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 12:43:57'),
(650, 'Update Craft', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 12:44:03'),
(651, 'Create new craft(s)', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 12:44:36'),
(652, 'Update Craft', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 12:45:07'),
(653, 'Update Craft', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 12:45:15'),
(654, 'Deactivate Craft', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 12:46:49'),
(655, 'Activate Craft', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 12:46:52'),
(656, 'Create new craft(s)', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 12:48:55'),
(657, 'Update user information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 12:49:23'),
(658, 'Update user information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 12:49:37'),
(659, 'Create new core(s)', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 13:09:53'),
(660, 'Create new core(s)', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 13:10:31'),
(661, 'Deactivate Core', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 13:13:00'),
(662, 'Activate Core', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 13:13:07'),
(663, 'Update Core', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 13:15:21'),
(664, 'Update Core', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 13:15:26'),
(665, 'Update Core', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 13:15:31'),
(666, 'Update Core', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 13:25:43'),
(667, 'Update Core', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 13:25:55'),
(668, 'Update Core', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 13:26:08'),
(669, 'Update Core', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 13:27:36'),
(670, 'Update Core', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 13:28:17'),
(671, 'Update Core', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 13:28:26'),
(672, 'Create new core(s)', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 13:33:10'),
(673, 'Update Core', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 13:33:23'),
(674, 'Deactivate Core', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 13:34:46'),
(675, 'Deactivate Core', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 13:35:02'),
(676, 'Activate Core', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 13:35:06'),
(677, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 14:18:04'),
(678, 'Joey Minguillan Updated subjects for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 14:18:04'),
(679, 'Joey Minguillan Updated subjects for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 14:18:04'),
(680, 'Joey Minguillan Updated eng. pro. rating for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 14:18:04'),
(681, 'Joey Minguillan Updated craft rating and skill for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 14:18:04'),
(682, 'Joey Minguillan Updated core rating and skill for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 14:18:04'),
(683, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 16:22:18'),
(684, 'Update Core', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 17:05:26'),
(685, 'Update Core', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 17:05:43'),
(686, 'Update Core', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 17:05:57'),
(687, 'Update Core', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 17:06:14'),
(688, 'Update Core', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 17:06:29'),
(689, 'Update Core', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 17:06:44'),
(690, 'Update Core', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 17:06:53'),
(691, 'Update Core', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 17:07:03'),
(692, 'Update Craft', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 17:07:41'),
(693, 'Update Craft', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 17:07:48'),
(694, 'Update Craft', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 17:07:57'),
(695, 'Update Craft', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 17:08:10'),
(696, 'Create new craft(s)', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 17:09:31'),
(697, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 17:52:15'),
(698, 'Joey Minguillan Updated subjects for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 17:52:15'),
(699, 'Joey Minguillan Updated subjects for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 17:52:15'),
(700, 'Joey Minguillan Updated eng. pro. rating for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 17:52:16'),
(701, 'Joey Minguillan Updated craft rating and skill for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 17:52:16'),
(702, 'Joey Minguillan Updated core rating and skill for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 17:52:16'),
(703, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 20:01:07'),
(704, 'Joey Minguillan Updated subjects for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 20:01:07'),
(705, 'Joey Minguillan Updated subjects for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 20:01:07'),
(706, 'Joey Minguillan Updated eng. pro. rating for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 20:01:07'),
(707, 'Joey Minguillan Updated craft rating and skill for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 20:01:07'),
(708, 'Joey Minguillan Updated core rating and skill for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 20:01:07'),
(709, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 20:01:35'),
(710, 'Joey Minguillan Updated subjects for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 20:01:35'),
(711, 'Joey Minguillan Updated subjects for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 20:01:35'),
(712, 'Joey Minguillan Updated eng. pro. rating for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 20:01:35'),
(713, 'Joey Minguillan Updated craft rating and skill for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 20:01:35'),
(714, 'Joey Minguillan Updated core rating and skill for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 20:01:35'),
(715, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 20:02:20'),
(716, 'Joey Minguillan Updated subjects for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 20:02:20'),
(717, 'Joey Minguillan Updated subjects for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 20:02:20'),
(718, 'Joey Minguillan Updated eng. pro. rating for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 20:02:20'),
(719, 'Joey Minguillan Updated craft rating and skill for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 20:02:20'),
(720, 'Joey Minguillan Updated core rating and skill for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 20:02:20'),
(721, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 20:03:41'),
(722, 'Joey Minguillan Updated subjects for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 20:03:41'),
(723, 'Joey Minguillan Updated subjects for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 20:03:41'),
(724, 'Joey Minguillan Updated eng. pro. rating for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 20:03:41'),
(725, 'Joey Minguillan Updated craft rating and skill for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 20:03:41'),
(726, 'Joey Minguillan Updated core rating and skill for 15657', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 20:03:41'),
(727, 'Joey Minguillan Register student', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 20:30:35'),
(728, 'Joey Minguillan Created subjects for 65234', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 20:30:35'),
(729, 'Joey Minguillan Created english proficiency rating for 65234', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 20:30:35'),
(730, 'Joey Minguillan Created craft rating and skill for 65234', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 20:30:35'),
(731, 'Joey Minguillan Created core rating and skill for 65234', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 20:30:36'),
(732, 'Joey Minguillan Register student', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 20:39:06'),
(733, 'Joey Minguillan Created subjects for 65421', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 20:39:06'),
(734, 'Joey Minguillan Created english proficiency rating for 65421', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 20:39:07'),
(735, 'Joey Minguillan Created craft rating and skill for 65421', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 20:39:07'),
(736, 'Joey Minguillan Created core rating and skill for 65421', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 20:39:07'),
(737, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 20:39:49'),
(738, 'Joey Minguillan Updated subjects for 65421', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 20:39:49'),
(739, 'Joey Minguillan Updated subjects for 65421', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 20:39:49'),
(740, 'Joey Minguillan Updated subjects for 65421', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 20:39:49'),
(741, 'Joey Minguillan Updated eng. pro. rating for 65421', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 20:39:49'),
(742, 'Joey Minguillan Updated craft rating and skill for 65421', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 20:39:50'),
(743, 'Joey Minguillan Updated core rating and skill for 65421', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 20:39:50'),
(744, 'Deactivate Diploma Course(s)', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 21:35:49'),
(745, 'Activate Diploma Course(s)', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 21:35:54'),
(746, 'Update Diploma Course', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 21:35:59'),
(747, 'Update Diploma Course', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 21:36:31'),
(748, 'Deactivate Diploma Course(s)', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 21:36:39'),
(749, 'Activate Diploma Course(s)', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 21:36:43'),
(750, 'Update Diploma Course', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 21:36:51'),
(751, 'Create New Diploma Course(s)', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 21:37:37'),
(752, 'Update Vocatonal Program', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 21:50:35'),
(753, 'Update Vocatonal Program', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 21:50:42'),
(754, 'Update Vocatonal Program', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 21:50:50'),
(755, 'Update Vocatonal Program', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 21:50:56'),
(756, 'Deactivate Vocatonal Program(s)', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 21:51:04'),
(757, 'Activate Vocatonal Program(s)', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 21:51:07'),
(758, 'Create new Vocatonal Program(s)', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 21:51:30'),
(759, 'Update Vocatonal Program', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 21:51:46'),
(760, 'Deactivate subjects', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 22:01:25'),
(761, 'Activate subjects', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 22:01:30'),
(762, 'Update subject title', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 22:01:40'),
(763, 'Update subject title', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 22:01:51'),
(764, 'Create new subject(s)', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 22:02:10'),
(765, 'Update subject title', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 22:02:30'),
(766, 'Update subject title', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 22:02:35'),
(767, 'Deactivate rooms', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 22:09:24'),
(768, 'Activate rooms', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 22:09:28'),
(769, 'Create new room(s)', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 22:10:33'),
(770, 'Deactivate rooms', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 22:10:54'),
(771, 'Activate rooms', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 22:10:59'),
(772, 'Update user information', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 22:20:57'),
(773, 'Deactivate users', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 22:21:12'),
(774, 'Activate users', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 22:21:16'),
(775, 'Register users', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-11-21 22:22:13');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_id` int(11) NOT NULL,
  `room_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL,
  `created_by` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `updated_by` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `room_name`, `status`, `created_by`, `updated_by`, `created`, `modified`) VALUES
(1, 'Hall 1', '1', 'joey@gmail.com', 'joey@gmail.com', '2018-08-22 11:12:06', '2018-11-21 22:10:33'),
(2, 'Hall 2', '1', 'joey@gmail.com', NULL, '2018-08-22 11:14:01', '2018-11-21 22:07:23'),
(3, 'Hall 3', '1', 'joey@gmail.com', NULL, '2018-08-22 11:14:01', '2018-11-21 22:07:25'),
(4, 'Hall 4', '1', 'joey@gmail.com', NULL, '2018-08-22 11:14:01', '2018-11-21 22:07:27'),
(5, 'Hall 5', '1', 'joey@gmail.com', NULL, '2018-08-22 12:23:55', '2018-11-21 22:07:30'),
(6, 'Hall 6', '1', 'joey@gmail.com', NULL, '2018-08-22 15:51:13', '2018-11-21 22:07:32'),
(7, 'Hall 7', '1', 'joey@gmail.com', 'joey@gmail.com', '2018-09-06 23:49:24', '2018-11-21 22:10:58'),
(8, 'Hall 8', '1', 'joey@gmail.com', NULL, '2018-09-06 23:49:24', '2018-11-21 22:07:38'),
(9, 'Computer Laboratory', '1', 'joey@gmail.com', NULL, '2018-10-18 09:50:48', '2018-11-21 22:07:41');

-- --------------------------------------------------------

--
-- Table structure for table `security_config`
--

CREATE TABLE `security_config` (
  `max_login_attempt` int(11) NOT NULL,
  `soft_lock` int(11) NOT NULL,
  `max_password_age` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `security_config`
--

INSERT INTO `security_config` (`max_login_attempt`, `soft_lock`, `max_password_age`, `updated_by`, `modified`) VALUES
(5, 120, 90, 1, '2018-09-06 16:55:41');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `student_no` int(11) NOT NULL,
  `national_id` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_address` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile_no` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `english_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `arabic_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nationality` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type_of_course` enum('Vocational','Diploma') COLLATE utf8_unicode_ci NOT NULL,
  `training_start` date NOT NULL,
  `training_end` date NOT NULL,
  `diploma_course` int(11) DEFAULT NULL,
  `vocational_course` int(11) DEFAULT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `guardian_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `guardian_contact` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `id_picture` longtext COLLATE utf8_unicode_ci NOT NULL,
  `civil_status` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ramarks` enum('Ongoing','Graduated','Terminated','Expulsion','Resigned','Withdraw') COLLATE utf8_unicode_ci NOT NULL,
  `date_graduated` date DEFAULT NULL,
  `comments` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `student_status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL,
  `student_created_by` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `student_updated_by` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `student_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `student_modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student_no`, `national_id`, `email_address`, `mobile_no`, `english_name`, `arabic_name`, `nationality`, `company`, `type_of_course`, `training_start`, `training_end`, `diploma_course`, `vocational_course`, `address`, `date_of_birth`, `guardian_name`, `guardian_contact`, `id_picture`, `civil_status`, `ramarks`, `date_graduated`, `comments`, `student_status`, `student_created_by`, `student_updated_by`, `student_created`, `student_modified`) VALUES
(1, 12345, '1235123154', 'james@gmail.com', '(977) 474-5044', 'James Reid', 'Abdul Jamilla', 'Arabian', 'Technical Higher Institute for Engineering and Petroleum', 'Diploma', '2018-10-16', '2019-06-16', 3, NULL, '123 Habdulla Kabul', '2018-10-02', 'Meshkatic Jamila', '(977) 474-5044', '', NULL, 'Graduated', NULL, NULL, '1', 'joey@gmail.com', NULL, '2018-10-16 17:33:53', '2018-11-21 22:40:52'),
(2, 14232, '1231234132', 'jericho@yahoo.com', '(977) 474-5044', 'Jericho Rosales', 'Jamidalla Habdullah', 'Arabian', 'Technical Higher Institute for Engineering and Petroleum', 'Vocational', '2018-10-16', '2019-01-16', NULL, 1, '143 Rina Kabul', '2018-10-03', 'Jamidalla Habdullah Sr.', '(977) 474-5044', '', NULL, 'Graduated', NULL, NULL, '1', 'joey@gmail.com', NULL, '2018-10-16 17:41:58', '2018-11-21 22:40:52'),
(4, 14143, '1245412643', 'rayber@gmail.com', '(926) 451-6464', 'Rayber Crusz', 'Rayber Crusz', 'Arabian', 'Technical Higher Institute for Engineering and Petroleum', 'Diploma', '2018-10-15', '2019-04-12', 2, NULL, 'Istanbuul', '2018-10-11', 'Rayber Crusz Sr.', '(921) 465-4566', '', NULL, 'Graduated', NULL, NULL, '1', 'joey@gmail.com', NULL, '2018-10-16 18:04:16', '2018-11-21 22:40:52'),
(5, 23463, '1256235575', 'jay@yahoo.com', '(921) 564-1214', 'Jay-r Cruz', 'Jay-r Cruz', 'Arabian', 'Meshkatic Assoc for Engineering and Petroleum', 'Diploma', '2018-10-15', '2019-05-10', 2, NULL, 'Istanbul', '2018-10-19', 'Jay-r Cruz Sr.', '(925) 165-4654', '', NULL, 'Graduated', NULL, NULL, '1', 'joey@gmail.com', NULL, '2018-10-16 18:10:50', '2018-11-21 22:40:52'),
(6, 15657, '9966322558', 'shamcy@gmail.com', '(971) 541-6546', 'Shamcy Supsup', 'سيبببشسضقىةا ببلا  الللسيي', 'Arabian', 'Technical Higher Institute for Engineering and Petroleum', 'Diploma', '2018-10-15', '2018-10-15', 1, NULL, 'Istanbul', '2018-10-16', 'Shamie Supsup', '(985) 764-6546', '156571.jpg', 'Single', 'Ongoing', '0000-00-00', 'Madaldal', '1', 'joey@gmail.com', NULL, '2018-10-16 22:00:32', '2018-11-21 22:40:52'),
(7, 69678, '3216549874', 'gellal@gmail.com', '(923) 164-5165', 'Gellal Mystogan', 'Gellal Mystogan', 'Arabian', 'Technical Higher Institute for Engineering and Petroleum', 'Vocational', '2018-10-18', '2019-01-18', NULL, 4, 'Jones Bridge', '2018-10-25', 'Gellal Mystogan Sr.', '(951) 265-4645', '69678.jpg', 'Single', 'Graduated', NULL, NULL, '1', 'joey@gmail.com', NULL, '2018-10-18 15:08:27', '2018-11-21 22:40:52'),
(8, 67857, '4785786754', 'jun.magayanes@gmail.com', '(932) 154-1651', 'Jun-Jun Magayanes', 'Jun-Jun Magayanes', 'Arabian', 'Global Reciprocal Colleges', 'Diploma', '2018-10-22', '2018-10-22', 1, NULL, 'Gulayan', '1997-08-05', 'Merlita Magayanes', '(921) 634-6546', '678571.jpg', NULL, 'Graduated', NULL, NULL, '1', 'joey@gmail.com', NULL, '2018-10-23 16:34:42', '2018-11-21 22:40:52'),
(9, 98778, '9878973434', 'natsu@gmail.com', '(921) 634-3212', 'Natsu Dragneel', 'Natsu Dragneel', 'Fairy tale', 'THIEP', 'Diploma', '2018-11-11', '2018-11-11', 3, NULL, 'Absaida', '2018-11-13', 'Dragneel the Dragon', '(934) 731-2561', '98778.png', 'Single', 'Withdraw', NULL, NULL, '1', 'joey@gmail.com', NULL, '2018-11-07 23:14:26', '2018-11-21 22:40:52'),
(10, 83456, '3564165564', 'rio@gmail.com', '(923) 145-4106', 'Rio Delrio', 'Rio Delrio', 'Fuertorican', 'China Bank', 'Diploma', '2018-11-11', '2018-11-11', 4, NULL, 'Fuertorico Absol', '2018-11-20', 'Rio Delrio Sr.', '(936) 216-5451', '83456.png', 'Single', 'Graduated', NULL, NULL, '1', 'joey@gmail.com', NULL, '2018-11-08 03:46:25', '2018-11-21 22:40:29'),
(11, 65234, '3512341635', 'jacki@gmail.com', '(965) 246-5415', 'Jacki Chen', 'Jacki Chen', 'Chinese', 'Kitetsu Corp', 'Diploma', '2018-11-21', '2019-04-23', 2, NULL, '#561 Shanghai with egg', '2018-11-07', 'Jacki Chen Sr.', '(925) 165-4516', '65234.jpg', 'Single', 'Ongoing', '0000-00-00', 'Smart girl', '1', 'joey@gmail.com', NULL, '2018-11-21 20:30:35', '2018-11-21 22:40:29'),
(12, 65421, '6524345543', 'richard@gmail.com', '(923) 463-4165', 'Richard Dy', 'Richard Dy', 'Filipino', 'Global Reciprocal Colleges', 'Diploma', '2018-11-20', '2019-05-11', 3, NULL, '#512 Amorsolo Caloocan', '2018-11-14', 'Richard Dy Sr.', '(923) 451-6615', '65421.jpg', 'Single', 'Ongoing', '0000-00-00', 'Very noisy and lack of attention', '1', 'joey@gmail.com', NULL, '2018-11-21 20:39:06', '2018-11-21 22:40:52');

-- --------------------------------------------------------

--
-- Table structure for table `student_subject`
--

CREATE TABLE `student_subject` (
  `tbl_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `subject` int(11) NOT NULL,
  `subject_code` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `time` time NOT NULL,
  `room` int(11) NOT NULL,
  `day` enum('MONDAY','TUESDAY','WEDNESDAY','THURSDAY','FRIDAY','SATURDAY','SUNDAY') COLLATE utf8_unicode_ci NOT NULL,
  `created_by` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `updated_by` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `student_subject`
--

INSERT INTO `student_subject` (`tbl_id`, `student_id`, `subject`, `subject_code`, `time`, `room`, `day`, `created_by`, `updated_by`, `created`, `modified`) VALUES
(1, 2, 1, '', '10:00:00', 2, 'MONDAY', 'joey@gmail.com', NULL, '2018-10-16 17:41:58', '2018-11-21 22:35:39'),
(2, 4, 1, '', '12:30:00', 2, 'TUESDAY', 'joey@gmail.com', NULL, '2018-10-16 18:04:16', '2018-11-21 22:35:39'),
(4, 6, 4, '', '14:30:00', 1, 'TUESDAY', 'joey@gmail.com', NULL, '2018-10-16 22:00:33', '2018-11-21 22:36:14'),
(5, 6, 1, '', '08:00:00', 3, 'WEDNESDAY', 'joey@gmail.com', NULL, '2018-10-18 14:56:31', '2018-11-21 22:36:14'),
(6, 7, 2, '', '14:30:00', 3, 'FRIDAY', 'joey@gmail.com', NULL, '2018-10-18 15:08:27', '2018-11-21 22:36:14'),
(7, 1, 4, '', '12:30:00', 4, 'SATURDAY', 'joey@gmail.com', NULL, '2018-10-19 12:02:26', '2018-11-21 22:36:14'),
(8, 8, 2, '', '10:00:00', 2, 'THURSDAY', 'joey@gmail.com', NULL, '2018-10-23 16:34:42', '2018-11-21 22:36:14'),
(9, 8, 1, '', '10:00:00', 2, 'TUESDAY', 'joey@gmail.com', NULL, '2018-10-23 16:34:42', '2018-11-21 22:36:14'),
(10, 9, 3, '', '12:30:00', 4, 'THURSDAY', 'joey@gmail.com', NULL, '2018-11-07 23:14:26', '2018-11-21 22:36:14'),
(11, 9, 1, '', '08:00:00', 2, 'THURSDAY', 'joey@gmail.com', NULL, '2018-11-08 03:22:21', '2018-11-21 22:36:14'),
(12, 9, 4, '', '08:00:00', 2, 'TUESDAY', 'joey@gmail.com', NULL, '2018-11-08 03:22:21', '2018-11-21 22:36:14'),
(13, 9, 5, '', '14:30:00', 5, 'FRIDAY', 'joey@gmail.com', NULL, '2018-11-08 03:22:21', '2018-11-21 22:36:14'),
(14, 10, 2, '', '12:30:00', 1, 'WEDNESDAY', 'joey@gmail.com', NULL, '2018-11-08 03:46:25', '2018-11-21 22:35:39'),
(15, 10, 4, '', '16:30:00', 3, 'FRIDAY', 'joey@gmail.com', NULL, '2018-11-08 03:46:25', '2018-11-21 22:35:39'),
(16, 10, 2, '', '10:00:00', 3, 'THURSDAY', 'joey@gmail.com', NULL, '2018-11-08 03:46:25', '2018-11-21 22:35:39'),
(17, 11, 2, '', '10:00:00', 1, 'TUESDAY', 'joey@gmail.com', NULL, '2018-11-21 20:30:35', '2018-11-21 22:35:39'),
(18, 11, 4, '', '14:30:00', 7, 'FRIDAY', 'joey@gmail.com', NULL, '2018-11-21 20:30:35', '2018-11-21 22:35:39'),
(19, 11, 3, '', '12:30:00', 3, 'WEDNESDAY', 'joey@gmail.com', NULL, '2018-11-21 20:30:35', '2018-11-21 22:35:39'),
(20, 12, 1, '', '08:00:00', 1, 'MONDAY', 'joey@gmail.com', NULL, '2018-11-21 20:39:06', '2018-11-21 22:36:14'),
(21, 12, 3, '', '08:00:00', 1, 'WEDNESDAY', 'joey@gmail.com', NULL, '2018-11-21 20:39:06', '2018-11-21 22:36:14'),
(22, 12, 3, '', '10:00:00', 2, 'FRIDAY', 'joey@gmail.com', NULL, '2018-11-21 20:39:06', '2018-11-21 22:36:14');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(11) NOT NULL,
  `subject_title` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL,
  `created_by` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `updated_by` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `subject_title`, `status`, `created_by`, `updated_by`, `created`, `modified`) VALUES
(1, 'ENGLISH', '1', 'joey@gmail.com', 'joey@gmail.com', '2018-08-22 16:02:19', '2018-11-21 22:02:10'),
(2, 'SCIENCE', '1', 'joey@gmail.com', 'joey@gmail.com', '2018-08-22 16:02:19', '2018-11-21 22:01:51'),
(3, 'ENGINEERING', '1', 'joey@gmail.com', NULL, '2018-08-24 00:25:46', '2018-11-21 21:56:35'),
(4, 'MATHEMATICS', '1', 'joey@gmail.com', NULL, '2018-09-06 23:09:18', '2018-11-21 21:56:37'),
(5, 'LOGIC', '1', 'joey@gmail.com', NULL, '2018-09-06 23:09:18', '2018-11-21 21:56:40'),
(6, 'COLLEGE ALGEBRA', '1', 'joey@gmail.com', 'joey@gmail.com', '2018-11-21 22:02:10', '2018-11-21 22:02:35');

-- --------------------------------------------------------

--
-- Table structure for table `user_credential`
--

CREATE TABLE `user_credential` (
  `user_id` int(11) NOT NULL,
  `u_full_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `u_email_address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `u_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `designation` enum('Registrar','Administrator','Faculty','Program Head') COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_date` datetime NOT NULL,
  `login_attempt` int(11) DEFAULT NULL,
  `locked_time` time DEFAULT NULL,
  `profile_pic` longtext COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL COMMENT '''1'' is active, ''0'' is inactive',
  `recent_login` datetime DEFAULT NULL,
  `device_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `device_ip_address` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_by` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_by` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_credential`
--

INSERT INTO `user_credential` (`user_id`, `u_full_name`, `u_email_address`, `u_password`, `designation`, `password_reset_date`, `login_attempt`, `locked_time`, `profile_pic`, `status`, `recent_login`, `device_name`, `device_ip_address`, `created_by`, `updated_by`, `created`, `modified`) VALUES
(1, 'Joey Minguillan', 'joey@gmail.com', '$2y$10$RBJH19w7dxfH1I47eC7Hce6uorVzuzUsvRFDQ9L/iof1h9tC0.mt.', 'Administrator', '2018-12-06 12:46:24', NULL, NULL, '0611.jpg', '1', '2018-11-21 16:22:18', 'JUN-PC', '::1', NULL, 'joey@gmail.com', '2018-09-04 12:28:46', '2018-11-21 22:21:16'),
(2, 'Administrator Akows', 'admin@gmail.com', '$2y$10$81uoJHMTpPr7h31Wfcugve2rWwUQXO2Fh3Q4kjuFDuZU/nfcmrB8S', 'Administrator', '2018-12-04 13:33:35', NULL, NULL, '', '1', NULL, NULL, NULL, 'joey@gmail.com', 'joey@gmail.com', '2018-09-05 13:33:35', '2018-11-21 22:20:57'),
(3, 'Reynans Shows', 'reynan@gmail.com', '$2y$10$KqNV72nIaj.WfXH8odKm5egpP6AnSH3cNfkCsQUnUBsAweUcAbeLK', 'Registrar', '2018-12-04 13:35:31', NULL, NULL, 'vince.png', '1', '2018-10-18 10:18:13', 'JUN-PC', '::1', 'joey@gmail.com', NULL, '2018-09-05 13:35:31', '2018-11-21 22:22:13'),
(4, 'Ricky Rivera', 'ricky@gmail.com', '$2y$10$Avxj/AmYe59ypXLTdQFYbu8zWa4Jqd4us0K4IK3LUGBMmGjUWBA2C', 'Program Head', '2019-01-16 10:26:21', NULL, NULL, 'avatar-1.jpg', '1', '2018-10-18 10:35:48', 'JUN-PC', '::1', 'joey@gmail.com', NULL, '2018-10-18 10:26:21', '2018-11-21 22:14:23');

-- --------------------------------------------------------

--
-- Table structure for table `vocational_program`
--

CREATE TABLE `vocational_program` (
  `voc_program_id` int(11) NOT NULL,
  `voc_program` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `voc_program_acronym` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL,
  `created_by` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `updated_by` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vocational_program`
--

INSERT INTO `vocational_program` (`voc_program_id`, `voc_program`, `voc_program_acronym`, `status`, `created_by`, `updated_by`, `created`, `modified`) VALUES
(1, 'Preparatory G1', 'PREPG1', '1', 'joey@gmail.com', 'joey@gmail.com', '2018-08-22 13:30:45', '2018-11-21 21:51:46'),
(2, 'Preparatory G2', 'PREPG2', '1', 'joey@gmail.com', 'joey@gmail.com', '2018-08-22 13:32:02', '2018-11-21 21:51:07'),
(3, 'Preparatory G3', 'PREPG3', '1', 'joey@gmail.com', 'joey@gmail.com', '2018-08-22 13:32:02', '2018-11-21 21:51:07'),
(4, 'Welding G1', 'WG1', '1', 'joey@gmail.com', 'joey@gmail.com', '2018-08-22 15:36:07', '2018-11-21 21:51:07'),
(5, 'Welding G2', 'WG2', '1', 'joey@gmail.com', 'joey@gmail.com', '2018-08-22 15:36:07', '2018-11-21 21:51:07'),
(6, 'Scaffolding', 'SCAFF', '1', 'joey@gmail.com', 'joey@gmail.com', '2018-09-06 21:15:43', '2018-11-21 21:51:07'),
(7, 'Welding G3', 'WG3', '1', 'joey@gmail.com', 'joey@gmail.com', '2018-09-06 21:15:43', '2018-11-21 21:51:07'),
(8, 'BS Tire Vulcanizing', 'BSTV', '1', 'joey@gmail.com', 'joey@gmail.com', '2018-10-18 09:44:31', '2018-11-21 21:51:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `core`
--
ALTER TABLE `core`
  ADD PRIMARY KEY (`core_id`),
  ADD KEY `Core on delete/update "student_id"` (`student_id`),
  ADD KEY `On delete/update "core_skill"` (`core_skill`),
  ADD KEY `Core on update "updated_by"` (`updated_by`);

--
-- Indexes for table `core_item`
--
ALTER TABLE `core_item`
  ADD PRIMARY KEY (`core_item_id`),
  ADD UNIQUE KEY `core_code` (`core_code`),
  ADD KEY `Core on update "created_by" FK` (`created_by`),
  ADD KEY `Core on update "updated_by" FK` (`updated_by`);

--
-- Indexes for table `craft`
--
ALTER TABLE `craft`
  ADD PRIMARY KEY (`craft_id`),
  ADD KEY `On delete/update "craft_skills"` (`craft_skill`),
  ADD KEY `Craft on delete/update "student_id"` (`student_id`),
  ADD KEY `Craft on update "updated_by"` (`updated_by`);

--
-- Indexes for table `craft_item`
--
ALTER TABLE `craft_item`
  ADD PRIMARY KEY (`craft_item_id`),
  ADD UNIQUE KEY `craft_code` (`craft_code`),
  ADD KEY `Craft On update "created_by" FK` (`created_by`),
  ADD KEY `Craft On update "updated_by" FK` (`updated_by`);

--
-- Indexes for table `diploma_course`
--
ALTER TABLE `diploma_course`
  ADD PRIMARY KEY (`course_id`),
  ADD UNIQUE KEY `course_acronym` (`course_acronym`),
  ADD KEY `Diploma on update "created_by" FK` (`created_by`),
  ADD KEY `Diploma on update "updated_by" FK` (`updated_by`);

--
-- Indexes for table `english_proficiency`
--
ALTER TABLE `english_proficiency`
  ADD PRIMARY KEY (`eng_pro_id`);

--
-- Indexes for table `history_logs`
--
ALTER TABLE `history_logs`
  ADD PRIMARY KEY (`tbl_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`),
  ADD UNIQUE KEY `room_name` (`room_name`),
  ADD KEY `Room on update "created_by" FK` (`created_by`),
  ADD KEY `Room on update "updated_by" FK` (`updated_by`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`),
  ADD UNIQUE KEY `student_no` (`student_no`),
  ADD KEY `Student on update "student_created_by" FK` (`student_created_by`),
  ADD KEY `Student on update "student_updated_by" FK` (`student_updated_by`);

--
-- Indexes for table `student_subject`
--
ALTER TABLE `student_subject`
  ADD PRIMARY KEY (`tbl_id`),
  ADD KEY `Student subject on update "created_by" FK` (`created_by`),
  ADD KEY `Student subject on update "updated_by" FK` (`updated_by`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`),
  ADD UNIQUE KEY `subject_title` (`subject_title`),
  ADD KEY `Subject on update "created_by" FK` (`created_by`),
  ADD KEY `Subject on update "updated_by" FK` (`updated_by`);

--
-- Indexes for table `user_credential`
--
ALTER TABLE `user_credential`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `u_email_address` (`u_email_address`),
  ADD KEY `User on update "created_by" FK` (`created_by`),
  ADD KEY `User on update "updated_by" FK` (`updated_by`);

--
-- Indexes for table `vocational_program`
--
ALTER TABLE `vocational_program`
  ADD PRIMARY KEY (`voc_program_id`),
  ADD UNIQUE KEY `voc_program_acronym` (`voc_program_acronym`),
  ADD UNIQUE KEY `voc_program_acronym_2` (`voc_program_acronym`),
  ADD KEY `Vocational on update "created_by" FK` (`created_by`),
  ADD KEY `Vocational on update "updated_by" FK` (`updated_by`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `core`
--
ALTER TABLE `core`
  MODIFY `core_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `core_item`
--
ALTER TABLE `core_item`
  MODIFY `core_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `craft`
--
ALTER TABLE `craft`
  MODIFY `craft_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `craft_item`
--
ALTER TABLE `craft_item`
  MODIFY `craft_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `diploma_course`
--
ALTER TABLE `diploma_course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `english_proficiency`
--
ALTER TABLE `english_proficiency`
  MODIFY `eng_pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `history_logs`
--
ALTER TABLE `history_logs`
  MODIFY `tbl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=776;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `student_subject`
--
ALTER TABLE `student_subject`
  MODIFY `tbl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_credential`
--
ALTER TABLE `user_credential`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vocational_program`
--
ALTER TABLE `vocational_program`
  MODIFY `voc_program_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `core`
--
ALTER TABLE `core`
  ADD CONSTRAINT `Core on delete/update "student_id"` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Core on update "updated_by"` FOREIGN KEY (`updated_by`) REFERENCES `user_credential` (`user_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `On delete/update "core_skill"` FOREIGN KEY (`core_skill`) REFERENCES `core_item` (`core_item_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `core_item`
--
ALTER TABLE `core_item`
  ADD CONSTRAINT `Core on update "created_by" FK` FOREIGN KEY (`created_by`) REFERENCES `user_credential` (`u_email_address`) ON UPDATE CASCADE,
  ADD CONSTRAINT `Core on update "updated_by" FK` FOREIGN KEY (`updated_by`) REFERENCES `user_credential` (`u_email_address`) ON UPDATE CASCADE;

--
-- Constraints for table `craft`
--
ALTER TABLE `craft`
  ADD CONSTRAINT `Craft on delete/update "student_id"` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Craft on update "updated_by"` FOREIGN KEY (`updated_by`) REFERENCES `user_credential` (`user_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `On delete/update "craft_skills"` FOREIGN KEY (`craft_skill`) REFERENCES `craft_item` (`craft_item_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `craft_item`
--
ALTER TABLE `craft_item`
  ADD CONSTRAINT `Craft On update "created_by" FK` FOREIGN KEY (`created_by`) REFERENCES `user_credential` (`u_email_address`) ON UPDATE CASCADE,
  ADD CONSTRAINT `Craft On update "updated_by" FK` FOREIGN KEY (`updated_by`) REFERENCES `user_credential` (`u_email_address`) ON UPDATE CASCADE;

--
-- Constraints for table `diploma_course`
--
ALTER TABLE `diploma_course`
  ADD CONSTRAINT `Diploma on update "created_by" FK` FOREIGN KEY (`created_by`) REFERENCES `user_credential` (`u_email_address`) ON UPDATE CASCADE,
  ADD CONSTRAINT `Diploma on update "updated_by" FK` FOREIGN KEY (`updated_by`) REFERENCES `user_credential` (`u_email_address`) ON UPDATE CASCADE;

--
-- Constraints for table `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `Room on update "created_by" FK` FOREIGN KEY (`created_by`) REFERENCES `user_credential` (`u_email_address`) ON UPDATE CASCADE,
  ADD CONSTRAINT `Room on update "updated_by" FK` FOREIGN KEY (`updated_by`) REFERENCES `user_credential` (`u_email_address`) ON UPDATE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `Student on update "student_created_by" FK` FOREIGN KEY (`student_created_by`) REFERENCES `user_credential` (`u_email_address`) ON UPDATE CASCADE,
  ADD CONSTRAINT `Student on update "student_updated_by" FK` FOREIGN KEY (`student_updated_by`) REFERENCES `user_credential` (`u_email_address`) ON UPDATE CASCADE;

--
-- Constraints for table `student_subject`
--
ALTER TABLE `student_subject`
  ADD CONSTRAINT `Student subject on update "created_by" FK` FOREIGN KEY (`created_by`) REFERENCES `user_credential` (`u_email_address`) ON UPDATE CASCADE,
  ADD CONSTRAINT `Student subject on update "updated_by" FK` FOREIGN KEY (`updated_by`) REFERENCES `user_credential` (`u_email_address`) ON UPDATE CASCADE;

--
-- Constraints for table `subject`
--
ALTER TABLE `subject`
  ADD CONSTRAINT `Subject on update "created_by" FK` FOREIGN KEY (`created_by`) REFERENCES `user_credential` (`u_email_address`) ON UPDATE CASCADE,
  ADD CONSTRAINT `Subject on update "updated_by" FK` FOREIGN KEY (`updated_by`) REFERENCES `user_credential` (`u_email_address`) ON UPDATE CASCADE;

--
-- Constraints for table `user_credential`
--
ALTER TABLE `user_credential`
  ADD CONSTRAINT `User on update "created_by" FK` FOREIGN KEY (`created_by`) REFERENCES `user_credential` (`u_email_address`) ON UPDATE CASCADE,
  ADD CONSTRAINT `User on update "updated_by" FK` FOREIGN KEY (`updated_by`) REFERENCES `user_credential` (`u_email_address`) ON UPDATE CASCADE;

--
-- Constraints for table `vocational_program`
--
ALTER TABLE `vocational_program`
  ADD CONSTRAINT `Vocational on update "created_by" FK` FOREIGN KEY (`created_by`) REFERENCES `user_credential` (`u_email_address`) ON UPDATE CASCADE,
  ADD CONSTRAINT `Vocational on update "updated_by" FK` FOREIGN KEY (`updated_by`) REFERENCES `user_credential` (`u_email_address`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
