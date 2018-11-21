-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 21, 2018 at 07:47 AM
-- Server version: 5.6.39-cll-lve
-- PHP Version: 5.6.30

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
  `core_rating` enum('Competent','Not Yet Competent','Failed','Withdraw') COLLATE utf8_unicode_ci NOT NULL,
  `core_skill` enum('1','2','3','4','5','6','7','8','9','10') COLLATE utf8_unicode_ci NOT NULL,
  `core_completed` date DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `core`
--

INSERT INTO `core` (`core_id`, `student_id`, `core_rating`, `core_skill`, `core_completed`, `updated_by`, `created`, `modified`) VALUES
(1, 2, 'Competent', '8', NULL, NULL, '2018-10-16 17:41:58', '2018-10-23 14:12:26'),
(2, 4, 'Competent', '9', NULL, 1, '2018-10-16 18:04:16', '2018-10-24 01:33:07'),
(3, 5, 'Competent', '9', NULL, 1, '2018-10-16 18:10:50', '2018-10-24 01:28:43'),
(4, 6, 'Not Yet Competent', '9', NULL, 1, '2018-10-16 22:00:33', '2018-10-24 01:34:33'),
(5, 7, 'Competent', '5', NULL, 1, '2018-10-18 15:08:27', '2018-10-23 16:09:14'),
(6, 7, 'Not Yet Competent', '1', NULL, 1, '2018-10-23 16:09:14', '2018-10-23 16:11:38'),
(7, 7, 'Not Yet Competent', '2', NULL, 1, '2018-10-23 16:11:38', '2018-10-23 16:13:11'),
(8, 8, 'Competent', '1', '2018-11-05', 1, '2018-10-23 16:34:42', '2018-11-07 12:56:21'),
(9, 8, 'Competent', '2', '2018-11-06', 1, '2018-10-23 16:34:42', '2018-11-07 12:56:21'),
(10, 8, 'Not Yet Competent', '3', NULL, 1, '2018-10-23 16:35:31', '2018-10-23 18:01:34'),
(11, 1, 'Competent', '1', '2018-10-08', 8, '2018-10-24 13:41:09', '2018-11-18 03:06:27'),
(12, 7, 'Not Yet Competent', '6', NULL, 1, '2018-10-24 00:54:14', '2018-11-08 00:03:05'),
(13, 1, 'Competent', '4', '2019-01-12', 8, '2018-10-25 05:18:19', '2018-11-18 03:06:27'),
(14, 1, 'Not Yet Competent', '3', '2018-11-14', 8, '2018-10-25 05:18:19', '2018-11-18 03:06:27'),
(15, 1, 'Competent', '5', '2019-04-17', 8, '2018-10-26 06:51:07', '2018-11-18 03:06:27'),
(16, 1, 'Competent', '6', '2019-02-10', 8, '2018-10-26 06:51:07', '2018-11-18 03:06:27'),
(17, 9, 'Competent', '1', NULL, 1, '2018-10-31 03:19:57', '2018-11-17 11:03:05'),
(18, 10, 'Not Yet Competent', '3', NULL, NULL, '2018-10-31 03:56:09', '2018-10-31 03:56:09'),
(19, 11, 'Not Yet Competent', '1', NULL, 1, '2018-11-10 13:46:05', '2018-11-10 18:18:48'),
(20, 12, 'Not Yet Competent', '1', NULL, 1, '2018-11-10 13:57:39', '2018-11-10 18:08:59'),
(21, 13, 'Not Yet Competent', '6', '2018-11-08', NULL, '2018-11-10 23:24:16', '2018-11-10 23:24:16'),
(22, 1, 'Competent', '2', '2019-05-12', 8, '2018-11-10 23:32:15', '2018-11-18 03:06:27'),
(23, 1, 'Competent', '7', '2019-05-12', 8, '2018-11-10 23:32:15', '2018-11-18 03:06:27'),
(24, 1, 'Competent', '8', '2019-05-12', 8, '2018-11-10 23:32:15', '2018-11-18 03:06:27'),
(25, 1, 'Competent', '9', '2019-02-12', 8, '2018-11-10 23:32:15', '2018-11-18 03:06:27'),
(26, 14, 'Not Yet Competent', '1', '2018-09-12', NULL, '2018-11-12 03:57:35', '2018-11-12 03:57:35');

-- --------------------------------------------------------

--
-- Table structure for table `craft`
--

CREATE TABLE `craft` (
  `craft_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `craft_rating` enum('Competent','Not Yet Competent','Failed','Withdraw') COLLATE utf8_unicode_ci NOT NULL,
  `craft_skill` enum('1','2','3','4','5','6','7','8','9','10','11','12') COLLATE utf8_unicode_ci NOT NULL,
  `craft_completed` date DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `craft`
--

INSERT INTO `craft` (`craft_id`, `student_id`, `craft_rating`, `craft_skill`, `craft_completed`, `updated_by`, `created`, `modified`) VALUES
(1, 2, 'Competent', '3', NULL, NULL, '2018-10-16 17:41:58', '2018-10-23 14:11:02'),
(2, 4, 'Competent', '5', NULL, 1, '2018-10-16 18:04:16', '2018-10-24 01:33:07'),
(3, 5, 'Competent', '7', NULL, 1, '2018-10-16 18:10:50', '2018-10-24 01:28:43'),
(4, 6, 'Competent', '9', NULL, 1, '2018-10-16 22:00:33', '2018-10-24 01:34:33'),
(5, 7, 'Competent', '7', NULL, 1, '2018-10-18 15:08:27', '2018-10-24 00:54:14'),
(6, 7, 'Competent', '1', NULL, 1, '2018-10-23 16:09:14', '2018-10-23 16:11:38'),
(7, 7, 'Competent', '2', NULL, 1, '2018-10-23 16:11:38', '2018-10-23 16:12:57'),
(8, 8, 'Competent', '1', '2018-11-05', 1, '2018-10-23 16:34:42', '2018-11-07 12:56:21'),
(9, 8, 'Competent', '2', '2018-11-06', 1, '2018-10-23 16:34:42', '2018-11-07 12:56:21'),
(10, 8, 'Not Yet Competent', '3', NULL, 1, '2018-10-23 16:35:30', '2018-10-23 18:01:34'),
(11, 1, 'Competent', '1', '2019-02-28', 8, '2018-10-24 13:41:09', '2018-11-18 03:06:27'),
(12, 7, 'Not Yet Competent', '8', NULL, 1, '2018-10-24 00:54:14', '2018-11-08 00:03:05'),
(13, 7, 'Competent', '9', NULL, 1, '2018-10-24 00:54:14', '2018-11-08 00:03:05'),
(14, 1, 'Competent', '2', '2018-06-06', 8, '2018-10-25 05:18:19', '2018-11-18 03:06:27'),
(15, 1, 'Not Yet Competent', '3', '2019-02-11', 8, '2018-10-25 05:18:19', '2018-11-18 03:06:27'),
(16, 1, 'Competent', '4', NULL, 8, '2018-10-25 05:18:19', '2018-11-18 03:06:27'),
(17, 1, 'Not Yet Competent', '5', NULL, 8, '2018-10-26 06:51:07', '2018-11-18 03:06:27'),
(18, 1, 'Competent', '3', '2019-05-08', 8, '2018-10-26 06:51:07', '2018-11-18 03:06:27'),
(19, 1, 'Competent', '5', '2019-07-23', 8, '2018-10-26 06:51:07', '2018-11-18 03:06:27'),
(20, 9, 'Competent', '1', NULL, 1, '2018-10-31 03:19:57', '2018-11-17 11:03:05'),
(21, 10, 'Not Yet Competent', '3', NULL, NULL, '2018-10-31 03:56:09', '2018-10-31 03:56:09'),
(22, 11, 'Not Yet Competent', '1', NULL, 1, '2018-11-10 13:46:05', '2018-11-10 18:18:48'),
(23, 12, 'Competent', '2', '2018-11-05', 1, '2018-11-10 13:57:39', '2018-11-10 18:08:59'),
(24, 13, 'Not Yet Competent', '6', '2018-11-13', NULL, '2018-11-10 23:24:16', '2018-11-10 23:24:16'),
(25, 1, 'Competent', '6', '2020-03-15', 8, '2018-11-10 23:29:38', '2018-11-18 03:06:27'),
(26, 1, 'Competent', '7', '2019-12-12', 8, '2018-11-10 23:29:38', '2018-11-18 03:06:27'),
(27, 1, 'Competent', '8', '2019-05-04', 8, '2018-11-10 23:29:38', '2018-11-18 03:06:27'),
(28, 1, 'Competent', '9', '2019-12-05', 8, '2018-11-10 23:29:38', '2018-11-18 03:06:27'),
(29, 14, 'Not Yet Competent', '1', NULL, NULL, '2018-11-12 03:57:35', '2018-11-12 03:57:35');

-- --------------------------------------------------------

--
-- Table structure for table `diploma_course`
--

CREATE TABLE `diploma_course` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `course_acronym` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `diploma_course`
--

INSERT INTO `diploma_course` (`course_id`, `course_name`, `course_acronym`, `status`, `created_by`, `updated_by`, `created`, `modified`) VALUES
(1, 'Civil Technology Management', 'CTM', '1', 1, 1, '2018-09-07 00:37:45', '2018-11-18 05:50:11'),
(2, 'NON-DESTRUCTIVE TESTING TECHNOLOGY', 'NDT', '1', 1, 1, '2018-09-07 00:37:45', '2018-10-24 01:21:59'),
(3, 'MECHANICAL TECHNOLOGY', 'MECHANICAL TECHNOLOGY', '1', 1, 1, '2018-09-07 00:57:01', '2018-10-24 01:22:56'),
(4, 'ELECTRICAL TECHNOLOGY', 'ET', '1', 3, 1, '2018-10-18 09:37:48', '2018-10-24 01:22:32'),
(5, 'Surveying', 'S1', '1', 1, 0, '2018-11-11 01:01:06', '2018-11-11 01:01:06');

-- --------------------------------------------------------

--
-- Table structure for table `english_proficiency`
--

CREATE TABLE `english_proficiency` (
  `eng_pro_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `eng_rating` enum('Competent','Not Yet Competent','Failed','Withdraw') COLLATE utf8_unicode_ci NOT NULL,
  `eng_completed` date DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `english_proficiency`
--

INSERT INTO `english_proficiency` (`eng_pro_id`, `student_id`, `eng_rating`, `eng_completed`, `updated_by`, `created`, `modified`) VALUES
(1, 2, 'Competent', NULL, NULL, '2018-10-16 17:41:58', '2018-10-23 14:12:49'),
(2, 4, 'Competent', NULL, NULL, '2018-10-16 18:04:16', '2018-10-24 01:33:07'),
(3, 5, 'Competent', NULL, NULL, '2018-10-16 18:10:50', '2018-10-24 01:28:43'),
(4, 6, 'Competent', NULL, NULL, '2018-10-16 22:00:33', '2018-10-23 14:13:00'),
(5, 7, 'Competent', '0000-00-00', NULL, '2018-10-18 15:08:27', '2018-11-08 00:03:05'),
(6, 8, 'Competent', '2018-11-06', NULL, '2018-10-23 16:34:42', '2018-11-07 12:56:21'),
(7, 9, 'Competent', '0000-00-00', NULL, '2018-10-31 03:19:57', '2018-11-17 11:03:05'),
(8, 10, 'Not Yet Competent', NULL, NULL, '2018-10-31 03:56:09', '2018-10-31 03:56:09'),
(9, 11, 'Not Yet Competent', '2018-11-02', NULL, '2018-11-10 13:46:05', '2018-11-10 18:18:48'),
(10, 12, 'Not Yet Competent', '2019-01-10', NULL, '2018-11-10 13:57:39', '2018-11-10 13:57:39'),
(11, 13, 'Competent', '2018-11-07', NULL, '2018-11-10 23:24:16', '2018-11-10 23:24:16'),
(12, 14, 'Not Yet Competent', '0000-00-00', NULL, '2018-11-12 03:57:35', '2018-11-12 03:57:35');

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
(1, 'Login user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-04 12:47:44'),
(2, 'Logout user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-04 12:59:08'),
(3, 'Login user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-04 13:00:28'),
(4, 'Login user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-04 20:02:10'),
(5, 'Logout user', 2, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-04 21:40:22'),
(6, 'Login user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-04 21:40:39'),
(7, 'Logout user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-05 01:14:05'),
(8, 'Logout user', 2, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-05 01:18:04'),
(9, 'Login user', 1, 'Mobile Device', 'Joey PC', '::1', '2018-09-05 01:21:55'),
(10, 'Login user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-05 12:36:27'),
(11, 'Register users', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-05 13:33:36'),
(12, 'Register users', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-05 13:35:31'),
(13, 'Deactivate users', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-05 13:38:40'),
(14, 'Activate users', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-05 13:39:10'),
(15, 'Logout user', 2, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-05 14:33:20'),
(16, 'Login user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-05 14:33:34'),
(17, 'Update user information', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-05 15:18:23'),
(18, 'Update user information', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-05 15:22:43'),
(19, 'Update user information', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-05 15:22:54'),
(20, 'Update user information', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-05 15:23:02'),
(21, 'Update user information', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-05 15:24:44'),
(22, 'Update user information', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-05 15:26:54'),
(23, 'Update user information', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-05 15:27:34'),
(24, 'Update user information', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-05 15:27:46'),
(25, 'Update user information', 1, 'Mobile Device', 'Joey PC', '::1', '2018-09-05 15:28:04'),
(26, 'Update user information', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-05 15:32:59'),
(27, 'Update user information', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-05 15:33:41'),
(28, 'Update user information', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-05 15:35:27'),
(29, 'Update user information', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-05 15:41:35'),
(30, 'Update user information', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-05 15:47:45'),
(31, 'Deactivate users', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-05 15:48:26'),
(32, 'Activate users', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-05 15:48:37'),
(33, 'Update user information', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-05 15:48:47'),
(34, 'Update user information', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-05 15:51:43'),
(35, 'Login user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-05 16:29:23'),
(36, 'Update user information', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-05 16:31:09'),
(37, 'Update user information', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-05 16:31:13'),
(38, 'Login user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-05 18:52:39'),
(39, 'Update user information', 1, 'Mobile Device', 'Joey PC', '::1', '2018-09-05 18:53:22'),
(40, 'Logout user', 2, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-05 19:02:43'),
(41, 'Login user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-05 19:04:41'),
(42, 'Update user information', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-05 19:06:08'),
(43, 'Login user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-05 23:53:14'),
(44, 'Update user information', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-05 23:53:24'),
(45, 'Update user information', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-05 23:53:29'),
(46, 'Update user information', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-05 23:53:43'),
(47, 'Update user information', 1, 'Mobile Device', 'JUN-PC', '::1', '2018-09-06 00:04:29'),
(48, 'Login user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-06 16:44:39'),
(49, 'Update user information', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-06 16:44:52'),
(50, 'Update Security Configuration', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-06 16:55:03'),
(51, 'Update Security Configuration', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-06 16:55:13'),
(52, 'Update Security Configuration', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-06 16:55:27'),
(53, 'Update Security Configuration', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-06 16:55:32'),
(54, 'Update Security Configuration', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-06 16:55:36'),
(55, 'Update Security Configuration', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-06 16:55:41'),
(56, 'Login user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-06 20:05:31'),
(57, 'Logout user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-06 20:32:24'),
(58, 'Login user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-06 20:32:40'),
(59, 'Create new Vocatonal Program(s)', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-06 21:15:43'),
(60, 'Deactivate Vocatonal Program(s)', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-06 21:20:23'),
(61, 'Activate Vocatonal Program(s)', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-06 21:20:30'),
(62, 'Update Vocatonal Program', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-06 21:28:28'),
(63, 'Update Vocatonal Program', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-06 21:30:59'),
(64, 'Deactivate Vocatonal Program(s)', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-06 21:31:10'),
(65, 'Activate Vocatonal Program(s)', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-06 21:31:22'),
(66, 'Update Vocatonal Program', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-06 21:33:05'),
(67, 'Update Vocatonal Program', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-06 21:38:21'),
(68, 'Update subject title', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-06 22:54:14'),
(69, 'Update subject title', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-06 22:54:23'),
(70, 'Deactivate subjects', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-06 22:56:48'),
(71, 'Deactivate subjects', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-06 22:56:52'),
(72, 'Activate subjects', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-06 22:56:56'),
(73, 'Update subject title', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-06 22:57:46'),
(74, 'Create new subject(s)', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-06 23:09:18'),
(75, 'Deactivate subjects', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-06 23:09:52'),
(76, 'Activate subjects', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-06 23:09:59'),
(77, 'Deactivate subjects', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-06 23:15:28'),
(78, 'Activate subjects', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-06 23:15:34'),
(79, 'Update subject title', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-06 23:22:59'),
(80, 'Update subject title', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-06 23:23:07'),
(81, 'Create new room(s)', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-06 23:49:24'),
(82, 'Deactivate rooms', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-06 23:49:39'),
(83, 'Activate rooms', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-06 23:49:59'),
(84, 'Update room name', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-06 23:53:35'),
(85, 'Deactivate rooms', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-06 23:56:58'),
(86, 'Deactivate users', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-06 23:58:34'),
(87, 'Activate users', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-06 23:58:39'),
(88, 'Create new Diploma Course(s)', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-07 00:37:45'),
(89, 'Deactivate Diploma Course(s)', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-07 00:44:50'),
(90, 'Activate Diploma Course(s)', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-07 00:44:54'),
(91, 'Update Diploma Course', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-07 00:56:08'),
(92, 'Create New Diploma Course(s)', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-07 00:57:01'),
(93, 'Login user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-07 01:33:48'),
(94, 'Update Diploma Course', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-07 01:34:32'),
(95, 'Deactivate Diploma Course(s)', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-07 01:34:44'),
(96, 'Activate Diploma Course(s)', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-07 01:34:49'),
(97, 'Login user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-07 11:07:50'),
(98, 'Update user information', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-07 11:08:28'),
(99, 'Activate rooms', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-07 11:10:19'),
(100, 'Update user profile', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-07 11:43:01'),
(101, 'Update user profile', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-07 11:43:15'),
(102, 'Update user information', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-07 11:43:25'),
(103, 'Logout user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-07 11:57:54'),
(104, 'Login user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-07 11:58:06'),
(105, 'Logout user', 1, 'Mobile Device', 'Joey PC', '::1', '2018-09-07 12:02:09'),
(106, 'Login user', 1, 'Mobile Device', 'Joey PC', '::1', '2018-09-07 12:02:16'),
(107, 'Logout user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-07 12:18:43'),
(108, 'Login user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-07 12:18:49'),
(109, 'Logout user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-07 12:27:13'),
(110, 'Login user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-07 12:27:18'),
(111, 'Login user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-07 12:34:57'),
(112, 'Logout user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-07 12:35:23'),
(113, 'Logout user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-07 12:42:05'),
(114, 'Login user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-07 12:42:10'),
(115, 'User change password', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-07 12:44:12'),
(116, 'Logout user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-07 12:44:12'),
(117, 'Login user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-07 12:44:54'),
(118, 'User change password', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-07 12:46:24'),
(119, 'Logout user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-07 12:46:24'),
(120, 'Login user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-07 12:46:38'),
(121, 'Update user information', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-07 13:37:26'),
(122, 'Logout user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-07 15:02:37'),
(123, 'Login user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-07 15:03:11'),
(124, 'Logout user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-07 15:04:28'),
(125, 'Login user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-07 15:05:31'),
(126, 'Login user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-07 20:24:30'),
(127, 'Login user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-08 20:07:36'),
(128, 'Logout user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-09 00:00:40'),
(129, 'Login user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-09 00:00:48'),
(130, 'Login user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-09 15:25:27'),
(131, 'Logout user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-09 19:46:54'),
(132, 'Login user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-09 19:47:02'),
(133, 'Login user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-12 12:38:41'),
(134, 'Update user information', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-12 12:38:59'),
(135, 'Login user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-12 16:11:41'),
(136, 'Update user information', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-12 16:11:52'),
(137, 'Login user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-13 10:30:49'),
(138, 'Login user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-19 13:18:45'),
(139, 'Login user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-19 22:26:28'),
(140, 'Update user information', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-19 22:31:21'),
(141, 'Deactivate users', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-19 22:31:37'),
(142, 'Activate users', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-19 22:31:44'),
(143, 'Logout user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-20 00:23:00'),
(144, 'Login user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-21 11:39:53'),
(145, 'Login user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-25 11:20:49'),
(146, 'Login user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-26 12:49:40'),
(147, 'Logout user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-09-26 16:11:01'),
(148, 'Login user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-15 11:51:19'),
(149, 'Update subject title', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-15 14:57:58'),
(150, 'Update subject title', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-15 14:58:05'),
(151, 'Login user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-15 20:32:08'),
(152, 'Login user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-16 10:13:37'),
(153, 'Login user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-16 13:59:51'),
(154, 'Joey Minguillan Register student', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-16 17:33:53'),
(155, 'Joey Minguillan Register student', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-16 17:41:58'),
(156, 'Joey Minguillan Created subjects for 14232', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-16 17:41:58'),
(157, 'Joey Minguillan Created english proficiency rating for 14232', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-16 17:41:58'),
(158, 'Joey Minguillan Created craft rating and skill for 14232', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-16 17:41:58'),
(159, 'Joey Minguillan Created core rating and skill for 14232', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-16 17:41:58'),
(160, 'Joey Minguillan Register student', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-16 17:57:54'),
(161, 'Joey Minguillan Created subjects for 15632', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-16 17:57:54'),
(162, 'Joey Minguillan Created english proficiency rating for 15632', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-16 17:57:54'),
(163, 'Joey Minguillan Created craft rating and skill for 15632', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-16 17:57:54'),
(164, 'Joey Minguillan Created core rating and skill for 15632', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-16 17:57:54'),
(165, 'Joey Minguillan Register student', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-16 18:04:16'),
(166, 'Joey Minguillan Created subjects for 14143', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-16 18:04:16'),
(167, 'Joey Minguillan Created english proficiency rating for 14143', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-16 18:04:16'),
(168, 'Joey Minguillan Created craft rating and skill for 14143', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-16 18:04:16'),
(169, 'Joey Minguillan Created core rating and skill for 14143', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-16 18:04:16'),
(170, 'Joey Minguillan Register student', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-16 18:10:50'),
(171, 'Joey Minguillan Created subjects for 23463', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-16 18:10:50'),
(172, 'Joey Minguillan Created english proficiency rating for 23463', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-16 18:10:50'),
(173, 'Joey Minguillan Created craft rating and skill for 23463', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-16 18:10:50'),
(174, 'Joey Minguillan Created core rating and skill for 23463', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-16 18:10:50'),
(175, 'Joey Minguillan Register student', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-16 22:00:32'),
(176, 'Joey Minguillan Created subjects for 15657', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-16 22:00:33'),
(177, 'Joey Minguillan Created english proficiency rating for 15657', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-16 22:00:33'),
(178, 'Joey Minguillan Created craft rating and skill for 15657', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-16 22:00:33'),
(179, 'Joey Minguillan Created core rating and skill for 15657', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-16 22:00:33'),
(180, 'Logout user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-16 22:57:14'),
(181, 'Login user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-16 22:57:55'),
(182, 'Update user profile', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-16 22:58:39'),
(183, 'Update user profile', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-16 22:58:53'),
(184, 'Update user profile', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-16 22:59:36'),
(185, 'Logout user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-16 23:00:11'),
(186, 'Login user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-16 23:00:29'),
(187, 'Update user profile', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-16 23:04:17'),
(188, 'Update user profile', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-16 23:04:58'),
(189, 'Logout user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-16 23:05:16'),
(190, 'Login user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-16 23:05:24'),
(191, 'Update user profile', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-16 23:07:19'),
(192, 'Logout user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-16 23:07:55'),
(193, 'Login user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-16 23:08:02'),
(194, 'Login user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-17 10:56:15'),
(195, 'Logout user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-17 11:02:07'),
(196, 'Login user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-17 12:11:43'),
(197, 'Logout user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-17 12:28:24'),
(198, 'Login user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-17 12:31:49'),
(199, 'Logout user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-17 12:34:02'),
(200, 'Login user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-17 12:34:13'),
(201, 'Logout user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-17 12:57:20'),
(202, 'Login user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-17 12:57:38'),
(203, 'Update user profile', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-17 13:27:16'),
(204, 'Update user profile', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-17 13:31:42'),
(205, 'Logout user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-17 13:31:48'),
(206, 'Login user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-17 13:31:59'),
(207, 'Update user profile', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-17 13:37:29'),
(208, 'Logout user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-17 13:37:34'),
(209, 'Login user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-17 13:37:42'),
(210, 'Logout user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-17 13:40:24'),
(211, 'Login user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-17 14:02:20'),
(212, 'Login user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-17 19:00:30'),
(213, 'Update Diploma Course', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-17 22:45:03'),
(214, 'Joey Minguillan Deactivate Students', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-17 23:15:57'),
(215, 'Joey Minguillan Activate Students', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-17 23:16:07'),
(216, 'Login user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 08:49:13'),
(217, 'Deactivate Diploma Course(s)', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 08:49:27'),
(218, 'Activate Diploma Course(s)', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 08:49:31'),
(219, 'Logout user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 09:23:58'),
(220, 'Login user', 3, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 09:24:02'),
(221, 'Update user profile', 3, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 09:31:59'),
(222, 'Logout user', 3, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 09:32:07'),
(223, 'Login user', 3, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 09:32:11'),
(224, 'Create New Diploma Course(s)', 3, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 09:37:48'),
(225, 'Create new Vocatonal Program(s)', 3, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 09:44:31'),
(226, 'Create new room(s)', 3, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 09:50:48'),
(227, 'Update room name', 3, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 09:51:36'),
(228, 'Logout user', 3, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 10:16:05'),
(229, 'Login user', 3, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 10:18:13'),
(230, 'Logout user', 3, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 10:24:31'),
(231, 'Login user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 10:25:52'),
(232, 'Register users', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 10:26:21'),
(233, 'Logout user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 10:26:46'),
(234, 'Login user', 4, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 10:26:51'),
(235, 'Update user profile', 4, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 10:35:34'),
(236, 'Logout user', 4, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 10:35:44'),
(237, 'Login user', 4, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 10:35:48'),
(238, 'Logout user', 4, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 10:45:58'),
(239, 'Login user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 10:46:08'),
(240, 'Update user profile', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 12:49:52'),
(241, 'Logout user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 12:50:28'),
(242, 'Login user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 12:50:35'),
(243, 'Login user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 14:51:12'),
(244, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 14:54:42'),
(245, 'Joey Minguillan Updated subjects for 15657', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 14:54:42'),
(246, 'Joey Minguillan Updated eng. pro. rating for 15657', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 14:54:42'),
(247, 'Joey Minguillan Updated craft rating and skill for 15657', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 14:54:42'),
(248, 'Joey Minguillan Updated core rating and skill for 15657', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 14:54:42'),
(249, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 14:56:31'),
(250, 'Joey Minguillan Updated subjects for 15657', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 14:56:31'),
(251, 'Joey Minguillan Created subjects for 15657', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 14:56:31'),
(252, 'Joey Minguillan Updated eng. pro. rating for 15657', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 14:56:31'),
(253, 'Joey Minguillan Updated craft rating and skill for 15657', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 14:56:31'),
(254, 'Joey Minguillan Updated core rating and skill for 15657', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 14:56:31'),
(255, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 14:57:41'),
(256, 'Joey Minguillan Updated subjects for 15657', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 14:57:41'),
(257, 'Joey Minguillan Updated subjects for 15657', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 14:57:41'),
(258, 'Joey Minguillan Updated eng. pro. rating for 15657', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 14:57:41'),
(259, 'Joey Minguillan Updated craft rating and skill for 15657', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 14:57:41'),
(260, 'Joey Minguillan Updated core rating and skill for 15657', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 14:57:41'),
(261, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 15:03:11'),
(262, 'Joey Minguillan Updated subjects for 15657', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 15:03:11'),
(263, 'Joey Minguillan Updated subjects for 15657', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 15:03:11'),
(264, 'Joey Minguillan Updated eng. pro. rating for 15657', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 15:03:11'),
(265, 'Joey Minguillan Updated craft rating and skill for 15657', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 15:03:11'),
(266, 'Joey Minguillan Updated core rating and skill for 15657', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 15:03:11'),
(267, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 15:03:35'),
(268, 'Joey Minguillan Updated subjects for 15657', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 15:03:35'),
(269, 'Joey Minguillan Updated subjects for 15657', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 15:03:35'),
(270, 'Joey Minguillan Updated eng. pro. rating for 15657', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 15:03:35'),
(271, 'Joey Minguillan Updated craft rating and skill for 15657', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 15:03:35'),
(272, 'Joey Minguillan Updated core rating and skill for 15657', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 15:03:35'),
(273, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 15:05:40'),
(274, 'Joey Minguillan Updated subjects for 15657', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 15:05:40'),
(275, 'Joey Minguillan Updated subjects for 15657', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 15:05:40'),
(276, 'Joey Minguillan Updated eng. pro. rating for 15657', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 15:05:40'),
(277, 'Joey Minguillan Updated craft rating and skill for 15657', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 15:05:40'),
(278, 'Joey Minguillan Updated core rating and skill for 15657', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 15:05:40'),
(279, 'Joey Minguillan Register student', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 15:08:27'),
(280, 'Joey Minguillan Created subjects for 69678', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 15:08:27'),
(281, 'Joey Minguillan Created english proficiency rating for 69678', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 15:08:27'),
(282, 'Joey Minguillan Created craft rating and skill for 69678', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 15:08:27'),
(283, 'Joey Minguillan Created core rating and skill for 69678', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 15:08:27'),
(284, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 15:16:37'),
(285, 'Joey Minguillan Updated subjects for 69678', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 15:16:37'),
(286, 'Joey Minguillan Updated eng. pro. rating for 69678', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 15:16:37'),
(287, 'Joey Minguillan Updated craft rating and skill for 69678', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 15:16:37'),
(288, 'Joey Minguillan Updated core rating and skill for 69678', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 15:16:37'),
(289, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 15:18:45'),
(290, 'Joey Minguillan Updated subjects for 69678', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 15:18:45'),
(291, 'Joey Minguillan Updated eng. pro. rating for 69678', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 15:18:45'),
(292, 'Joey Minguillan Updated craft rating and skill for 69678', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 15:18:45'),
(293, 'Joey Minguillan Updated core rating and skill for 69678', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 15:18:45'),
(294, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 15:24:18'),
(295, 'Joey Minguillan Updated subjects for 69678', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 15:24:18'),
(296, 'Joey Minguillan Updated eng. pro. rating for 69678', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 15:24:18'),
(297, 'Joey Minguillan Updated craft rating and skill for 69678', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 15:24:18'),
(298, 'Joey Minguillan Updated core rating and skill for 69678', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 15:24:18'),
(299, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 15:24:33'),
(300, 'Joey Minguillan Updated subjects for 69678', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 15:24:33'),
(301, 'Joey Minguillan Updated eng. pro. rating for 69678', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 15:24:33'),
(302, 'Joey Minguillan Updated craft rating and skill for 69678', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 15:24:33'),
(303, 'Joey Minguillan Updated core rating and skill for 69678', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 15:24:33'),
(304, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 15:25:19'),
(305, 'Joey Minguillan Updated subjects for 15657', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 15:25:19'),
(306, 'Joey Minguillan Updated subjects for 15657', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 15:25:19'),
(307, 'Joey Minguillan Updated eng. pro. rating for 15657', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 15:25:19'),
(308, 'Joey Minguillan Updated craft rating and skill for 15657', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 15:25:19'),
(309, 'Joey Minguillan Updated core rating and skill for 15657', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 15:25:19'),
(310, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 15:25:53'),
(311, 'Joey Minguillan Updated subjects for 69678', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 15:25:53'),
(312, 'Joey Minguillan Updated eng. pro. rating for 69678', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 15:25:53'),
(313, 'Joey Minguillan Updated craft rating and skill for 69678', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 15:25:53'),
(314, 'Joey Minguillan Updated core rating and skill for 69678', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 15:25:53'),
(315, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 15:28:38'),
(316, 'Joey Minguillan Updated subjects for 69678', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 15:28:39'),
(317, 'Joey Minguillan Updated eng. pro. rating for 69678', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 15:28:39'),
(318, 'Joey Minguillan Updated craft rating and skill for 69678', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 15:28:39'),
(319, 'Joey Minguillan Updated core rating and skill for 69678', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 15:28:39'),
(320, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 15:30:34'),
(321, 'Joey Minguillan Updated subjects for 69678', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 15:30:34'),
(322, 'Joey Minguillan Updated eng. pro. rating for 69678', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 15:30:34'),
(323, 'Joey Minguillan Updated craft rating and skill for 69678', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 15:30:34'),
(324, 'Joey Minguillan Updated core rating and skill for 69678', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 15:30:34'),
(325, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 15:31:35'),
(326, 'Joey Minguillan Updated subjects for 15657', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 15:31:35'),
(327, 'Joey Minguillan Updated subjects for 15657', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 15:31:35'),
(328, 'Joey Minguillan Updated eng. pro. rating for 15657', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 15:31:35'),
(329, 'Joey Minguillan Updated craft rating and skill for 15657', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 15:31:35'),
(330, 'Joey Minguillan Updated core rating and skill for 15657', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-18 15:31:35'),
(331, 'Login user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-19 12:00:43'),
(332, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-19 12:02:26'),
(333, 'Joey Minguillan Created subjects for 12345', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-19 12:02:26'),
(334, 'Joey Minguillan Updated eng. pro. rating for 12345', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-19 12:02:26'),
(335, 'Joey Minguillan Updated craft rating and skill for 12345', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-19 12:02:26'),
(336, 'Joey Minguillan Updated core rating and skill for 12345', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-19 12:02:27'),
(337, 'Logout user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-19 13:43:18'),
(338, 'Login user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-19 13:43:25'),
(339, 'Login user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-23 12:54:34'),
(340, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-23 13:11:35'),
(341, 'Joey Minguillan Updated subjects for 69678', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-23 13:11:35'),
(342, 'Joey Minguillan Updated eng. pro. rating for 69678', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-23 13:11:35'),
(343, 'Joey Minguillan Updated craft rating and skill for 69678', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-23 13:11:35'),
(344, 'Joey Minguillan Updated core rating and skill for 69678', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-23 13:11:35'),
(345, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-23 13:56:50'),
(346, 'Joey Minguillan Updated subjects for 69678', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-23 13:56:50'),
(347, 'Joey Minguillan Updated eng. pro. rating for 69678', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-23 13:56:51'),
(348, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-23 16:09:14'),
(349, 'Joey Minguillan Updated subjects for 69678', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-23 16:09:14'),
(350, 'Joey Minguillan Updated eng. pro. rating for 69678', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-23 16:09:14'),
(351, 'Joey Minguillan Updated craft rating and skill for 69678', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-23 16:09:14'),
(352, 'Joey Minguillan Updated core rating and skill for 69678', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-23 16:09:14'),
(353, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-23 16:11:38'),
(354, 'Joey Minguillan Updated subjects for 69678', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-23 16:11:38'),
(355, 'Joey Minguillan Updated eng. pro. rating for 69678', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-23 16:11:38'),
(356, 'Joey Minguillan Updated craft rating and skill for 69678', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-23 16:11:38'),
(357, 'Joey Minguillan Updated core rating and skill for 69678', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-23 16:11:38'),
(358, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-23 16:12:57'),
(359, 'Joey Minguillan Updated subjects for 69678', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-23 16:12:57'),
(360, 'Joey Minguillan Updated eng. pro. rating for 69678', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-23 16:12:57'),
(361, 'Joey Minguillan Updated craft rating and skill for 69678', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-23 16:12:57'),
(362, 'Joey Minguillan Updated core rating and skill for 69678', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-23 16:12:58'),
(363, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-23 16:13:11'),
(364, 'Joey Minguillan Updated subjects for 69678', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-23 16:13:11'),
(365, 'Joey Minguillan Updated eng. pro. rating for 69678', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-23 16:13:11'),
(366, 'Joey Minguillan Updated craft rating and skill for 69678', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-23 16:13:11'),
(367, 'Joey Minguillan Updated core rating and skill for 69678', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-23 16:13:11'),
(368, 'Joey Minguillan Register student', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-23 16:34:42'),
(369, 'Joey Minguillan Created subjects for 67857', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-23 16:34:42'),
(370, 'Joey Minguillan Created english proficiency rating for 67857', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-23 16:34:42'),
(371, 'Joey Minguillan Created craft rating and skill for 67857', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-23 16:34:42'),
(372, 'Joey Minguillan Created core rating and skill for 67857', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-23 16:34:42'),
(373, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-23 16:35:30'),
(374, 'Joey Minguillan Updated subjects for 67857', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-23 16:35:30'),
(375, 'Joey Minguillan Updated subjects for 67857', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-23 16:35:30'),
(376, 'Joey Minguillan Updated eng. pro. rating for 67857', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-23 16:35:30'),
(377, 'Joey Minguillan Updated craft rating and skill for 67857', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-23 16:35:30'),
(378, 'Joey Minguillan Updated core rating and skill for 67857', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-23 16:35:31'),
(379, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-23 18:01:34'),
(380, 'Joey Minguillan Updated subjects for 67857', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-23 18:01:34'),
(381, 'Joey Minguillan Updated subjects for 67857', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-23 18:01:34'),
(382, 'Joey Minguillan Updated eng. pro. rating for 67857', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-23 18:01:34'),
(383, 'Joey Minguillan Updated craft rating and skill for 67857', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-23 18:01:34'),
(384, 'Joey Minguillan Updated core rating and skill for 67857', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-23 18:01:34'),
(385, 'Login user', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-24 13:36:06'),
(386, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-24 13:36:33'),
(387, 'Joey Minguillan Updated subjects for 69678', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-24 13:36:33'),
(388, 'Joey Minguillan Updated eng. pro. rating for 69678', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-24 13:36:33'),
(389, 'Joey Minguillan Updated craft rating and skill for 69678', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-24 13:36:33'),
(390, 'Joey Minguillan Updated core rating and skill for 69678', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-24 13:36:33'),
(391, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-24 13:41:08'),
(392, 'Joey Minguillan Updated subjects for 12345', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-24 13:41:09'),
(393, 'Joey Minguillan Updated eng. pro. rating for 12345', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-24 13:41:09'),
(394, 'Joey Minguillan Updated craft rating and skill for 12345', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-24 13:41:09'),
(395, 'Joey Minguillan Updated core rating and skill for 12345', 1, 'Desktop/Workstation', 'Joey PC', '::1', '2018-10-24 13:41:09'),
(396, 'Login user', 1, 'Mobile Device', 'a2plcpnl0081.prod.iad2.secureserver.net', '51.223.85.1', '2018-10-23 23:45:45'),
(397, 'Login user', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '51.223.85.1', '2018-10-24 00:51:04'),
(398, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '51.223.85.1', '2018-10-24 00:54:14'),
(399, 'Joey Minguillan Updated subjects for 69678', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '51.223.85.1', '2018-10-24 00:54:14'),
(400, 'Joey Minguillan Updated eng. pro. rating for 69678', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '51.223.85.1', '2018-10-24 00:54:14'),
(401, 'Joey Minguillan Updated craft rating and skill for 69678', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '51.223.85.1', '2018-10-24 00:54:14'),
(402, 'Joey Minguillan Updated core rating and skill for 69678', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '51.223.85.1', '2018-10-24 00:54:14'),
(403, 'Login user', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '110.54.243.118', '2018-10-24 01:17:20'),
(404, 'Update Diploma Course', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '51.223.85.1', '2018-10-24 01:21:59'),
(405, 'Update Diploma Course', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '51.223.85.1', '2018-10-24 01:22:32'),
(406, 'Update Diploma Course', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '51.223.85.1', '2018-10-24 01:22:56'),
(407, 'Update user information', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '51.223.85.1', '2018-10-24 01:23:35'),
(408, 'Update user information', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '51.223.85.1', '2018-10-24 01:24:13'),
(409, 'Update user information', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '51.223.85.1', '2018-10-24 01:24:49'),
(410, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '51.223.85.1', '2018-10-24 01:28:43'),
(411, 'Joey Minguillan Updated subjects for 23463', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '51.223.85.1', '2018-10-24 01:28:43'),
(412, 'Joey Minguillan Updated eng. pro. rating for 23463', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '51.223.85.1', '2018-10-24 01:28:43'),
(413, 'Joey Minguillan Updated craft rating and skill for 23463', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '51.223.85.1', '2018-10-24 01:28:43'),
(414, 'Joey Minguillan Updated core rating and skill for 23463', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '51.223.85.1', '2018-10-24 01:28:43'),
(415, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '51.223.85.1', '2018-10-24 01:32:03'),
(416, 'Joey Minguillan Updated subjects for 67857', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '51.223.85.1', '2018-10-24 01:32:03'),
(417, 'Joey Minguillan Updated subjects for 67857', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '51.223.85.1', '2018-10-24 01:32:03'),
(418, 'Joey Minguillan Updated eng. pro. rating for 67857', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '51.223.85.1', '2018-10-24 01:32:03'),
(419, 'Joey Minguillan Updated craft rating and skill for 67857', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '51.223.85.1', '2018-10-24 01:32:03'),
(420, 'Joey Minguillan Updated core rating and skill for 67857', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '51.223.85.1', '2018-10-24 01:32:03'),
(421, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '51.223.85.1', '2018-10-24 01:33:07'),
(422, 'Joey Minguillan Updated subjects for 14143', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '51.223.85.1', '2018-10-24 01:33:07'),
(423, 'Joey Minguillan Updated eng. pro. rating for 14143', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '51.223.85.1', '2018-10-24 01:33:07'),
(424, 'Joey Minguillan Updated craft rating and skill for 14143', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '51.223.85.1', '2018-10-24 01:33:07'),
(425, 'Joey Minguillan Updated core rating and skill for 14143', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '51.223.85.1', '2018-10-24 01:33:07'),
(426, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '51.223.85.1', '2018-10-24 01:34:33'),
(427, 'Joey Minguillan Updated subjects for 15657', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '51.223.85.1', '2018-10-24 01:34:33'),
(428, 'Joey Minguillan Updated subjects for 15657', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '51.223.85.1', '2018-10-24 01:34:33'),
(429, 'Joey Minguillan Updated eng. pro. rating for 15657', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '51.223.85.1', '2018-10-24 01:34:33'),
(430, 'Joey Minguillan Updated craft rating and skill for 15657', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '51.223.85.1', '2018-10-24 01:34:33'),
(431, 'Joey Minguillan Updated core rating and skill for 15657', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '51.223.85.1', '2018-10-24 01:34:33'),
(432, 'Logout user', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '51.223.85.1', '2018-10-24 01:35:33'),
(433, 'Login user', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '51.223.85.1', '2018-10-24 03:20:07'),
(434, 'Update Vocatonal Program', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '51.223.85.1', '2018-10-24 03:21:34'),
(435, 'Login user', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '51.223.85.1', '2018-10-24 04:23:28'),
(436, 'Update user profile', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '51.223.85.1', '2018-10-24 04:51:00'),
(437, 'Logout user', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '51.223.85.1', '2018-10-24 04:51:10'),
(438, 'Login user', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '51.223.85.1', '2018-10-24 04:51:31'),
(439, 'Logout user', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '51.223.85.1', '2018-10-24 04:56:21'),
(440, 'Login user', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '51.223.85.1', '2018-10-24 05:08:57'),
(441, 'Logout user', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '51.223.85.1', '2018-10-24 05:11:24'),
(442, 'Login user', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '110.54.243.118', '2018-10-24 05:19:49'),
(443, 'Update Diploma Course', 1, 'Mobile Device', 'a2plcpnl0081.prod.iad2.secureserver.net', '110.54.243.118', '2018-10-24 06:05:10'),
(444, 'Login user', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '51.223.146.239', '2018-10-25 05:15:04'),
(445, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '51.223.146.239', '2018-10-25 05:18:19'),
(446, 'Joey Minguillan Updated subjects for 12345', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '51.223.146.239', '2018-10-25 05:18:19'),
(447, 'Joey Minguillan Updated eng. pro. rating for 12345', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '51.223.146.239', '2018-10-25 05:18:19'),
(448, 'Joey Minguillan Updated craft rating and skill for 12345', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '51.223.146.239', '2018-10-25 05:18:19');
INSERT INTO `history_logs` (`tbl_id`, `activity`, `created_by`, `device_use`, `device_name`, `device_ip_address`, `created`) VALUES
(449, 'Joey Minguillan Updated core rating and skill for 12345', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '51.223.146.239', '2018-10-25 05:18:19'),
(450, 'Login user', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '78.95.115.243', '2018-10-26 06:41:04'),
(451, 'Joey Minguillan Update Student Information', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '78.95.115.243', '2018-10-26 06:51:07'),
(452, 'Joey Minguillan Updated subjects for 12345', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '78.95.115.243', '2018-10-26 06:51:07'),
(453, 'Joey Minguillan Updated eng. pro. rating for 12345', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '78.95.115.243', '2018-10-26 06:51:07'),
(454, 'Joey Minguillan Updated craft rating and skill for 12345', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '78.95.115.243', '2018-10-26 06:51:07'),
(455, 'Joey Minguillan Updated core rating and skill for 12345', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '78.95.115.243', '2018-10-26 06:51:07'),
(456, 'Logout user', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '78.95.115.243', '2018-10-26 07:36:17'),
(457, 'Login user', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '110.54.237.174', '2018-10-26 23:28:24'),
(458, 'Login user', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '5.156.213.172', '2018-10-27 08:49:53'),
(459, 'Logout user', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '5.156.213.172', '2018-10-27 08:53:00'),
(460, 'Login user', 1, 'Mobile Device', 'a2plcpnl0081.prod.iad2.secureserver.net', '5.156.213.172', '2018-10-27 09:53:11'),
(461, 'Logout user', 1, 'Mobile Device', 'a2plcpnl0081.prod.iad2.secureserver.net', '5.156.213.172', '2018-10-27 09:53:55'),
(462, 'Login user', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '178.87.26.193', '2018-10-27 23:24:50'),
(463, 'Update user profile', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '178.87.26.193', '2018-10-28 00:26:15'),
(464, 'Logout user', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '178.87.26.193', '2018-10-28 00:26:22'),
(465, 'Login user', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '178.87.26.193', '2018-10-28 00:26:38'),
(466, 'Update user profile', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '178.87.26.193', '2018-10-28 00:27:37'),
(467, 'Logout user', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '178.87.26.193', '2018-10-28 00:27:44'),
(468, 'Login user', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '178.87.26.193', '2018-10-28 00:28:03'),
(469, 'Update Security Configuration', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '178.87.26.193', '2018-10-28 00:29:19'),
(470, 'Update room name', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '178.87.26.193', '2018-10-28 00:30:26'),
(471, 'Update room name', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '178.87.26.193', '2018-10-28 00:30:38'),
(472, 'Update room name', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '178.87.26.193', '2018-10-28 00:30:54'),
(473, 'Update room name', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '178.87.26.193', '2018-10-28 00:31:09'),
(474, 'Update room name', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '178.87.26.193', '2018-10-28 00:31:29'),
(475, 'Update room name', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '178.87.26.193', '2018-10-28 00:31:52'),
(476, 'Update room name', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '178.87.26.193', '2018-10-28 00:32:07'),
(477, 'Update room name', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '178.87.26.193', '2018-10-28 00:32:21'),
(478, 'Logout user', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '178.87.26.193', '2018-10-28 00:43:56'),
(479, 'Login user', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '178.87.26.193', '2018-10-28 00:45:03'),
(480, 'Login user', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '78.95.3.114', '2018-10-30 10:29:33'),
(481, 'Login user', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '78.95.3.114', '2018-10-30 13:04:17'),
(482, 'Joey Miller D. Minguillan Update Student Information', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '78.95.3.114', '2018-10-30 13:07:47'),
(483, 'Joey Miller D. Minguillan Updated subjects for 12345', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '78.95.3.114', '2018-10-30 13:07:47'),
(484, 'Joey Miller D. Minguillan Updated eng. pro. rating for 12345', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '78.95.3.114', '2018-10-30 13:07:47'),
(485, 'Joey Miller D. Minguillan Updated craft rating and skill for 12345', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '78.95.3.114', '2018-10-30 13:07:47'),
(486, 'Joey Miller D. Minguillan Updated core rating and skill for 12345', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '78.95.3.114', '2018-10-30 13:07:47'),
(487, 'Joey Miller D. Minguillan Update Student Information', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '78.95.3.114', '2018-10-30 13:12:42'),
(488, 'Joey Miller D. Minguillan Updated subjects for 12345', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '78.95.3.114', '2018-10-30 13:12:42'),
(489, 'Joey Miller D. Minguillan Updated eng. pro. rating for 12345', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '78.95.3.114', '2018-10-30 13:12:42'),
(490, 'Joey Miller D. Minguillan Updated craft rating and skill for 12345', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '78.95.3.114', '2018-10-30 13:12:42'),
(491, 'Joey Miller D. Minguillan Updated core rating and skill for 12345', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '78.95.3.114', '2018-10-30 13:12:42'),
(492, 'Joey Miller D. Minguillan Update Student Information', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '78.95.3.114', '2018-10-30 13:16:25'),
(493, 'Joey Miller D. Minguillan Updated subjects for 12345', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '78.95.3.114', '2018-10-30 13:16:25'),
(494, 'Joey Miller D. Minguillan Created subjects for 12345', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '78.95.3.114', '2018-10-30 13:16:25'),
(495, 'Joey Miller D. Minguillan Created subjects for 12345', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '78.95.3.114', '2018-10-30 13:16:25'),
(496, 'Joey Miller D. Minguillan Updated eng. pro. rating for 12345', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '78.95.3.114', '2018-10-30 13:16:25'),
(497, 'Joey Miller D. Minguillan Updated craft rating and skill for 12345', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '78.95.3.114', '2018-10-30 13:16:25'),
(498, 'Joey Miller D. Minguillan Updated core rating and skill for 12345', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '78.95.3.114', '2018-10-30 13:16:25'),
(499, 'Login user', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '78.95.20.175', '2018-10-31 01:50:31'),
(500, 'Logout user', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '78.95.20.175', '2018-10-31 02:39:26'),
(501, 'Login user', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.66.230', '2018-10-31 03:07:21'),
(502, 'Login user', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.66.230', '2018-10-31 03:07:28'),
(503, 'Login user', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.66.230', '2018-10-31 03:07:28'),
(504, 'Joey Miller D. Minguillan Register student', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '78.95.20.175', '2018-10-31 03:19:57'),
(505, 'Joey Miller D. Minguillan Created subjects for 22333', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '78.95.20.175', '2018-10-31 03:19:57'),
(506, 'Joey Miller D. Minguillan Created english proficiency rating for 22333', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '78.95.20.175', '2018-10-31 03:19:57'),
(507, 'Joey Miller D. Minguillan Created craft rating and skill for 22333', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '78.95.20.175', '2018-10-31 03:19:57'),
(508, 'Joey Miller D. Minguillan Created core rating and skill for 22333', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '78.95.20.175', '2018-10-31 03:19:57'),
(509, 'Joey Miller D. Minguillan Register student', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '78.95.20.175', '2018-10-31 03:56:09'),
(510, 'Joey Miller D. Minguillan Created subjects for 78577', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '78.95.20.175', '2018-10-31 03:56:09'),
(511, 'Joey Miller D. Minguillan Created english proficiency rating for 78577', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '78.95.20.175', '2018-10-31 03:56:09'),
(512, 'Joey Miller D. Minguillan Created craft rating and skill for 78577', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '78.95.20.175', '2018-10-31 03:56:09'),
(513, 'Joey Miller D. Minguillan Created core rating and skill for 78577', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '78.95.20.175', '2018-10-31 03:56:09'),
(514, 'Logout user', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '78.95.20.175', '2018-10-31 04:43:37'),
(515, 'Login user', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.66.230', '2018-11-01 03:02:06'),
(516, 'Logout user', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.66.230', '2018-11-01 03:03:01'),
(517, 'Login user', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '78.95.20.175', '2018-11-02 02:09:11'),
(518, 'Login user', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '110.54.232.163', '2018-11-02 23:29:47'),
(519, 'Login user', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '93.168.140.230', '2018-11-03 10:36:55'),
(520, 'Login user', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '110.54.243.32', '2018-11-07 12:38:43'),
(521, 'Joey Miller D. Minguillan Update Student Information', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '110.54.243.32', '2018-11-07 12:56:21'),
(522, 'Joey Miller D. Minguillan Updated subjects for 67857', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '110.54.243.32', '2018-11-07 12:56:21'),
(523, 'Joey Miller D. Minguillan Updated subjects for 67857', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '110.54.243.32', '2018-11-07 12:56:21'),
(524, 'Joey Miller D. Minguillan Updated eng. pro. rating for 67857', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '110.54.243.32', '2018-11-07 12:56:21'),
(525, 'Joey Miller D. Minguillan Updated craft rating and skill for 67857', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '110.54.243.32', '2018-11-07 12:56:21'),
(526, 'Joey Miller D. Minguillan Updated core rating and skill for 67857', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '110.54.243.32', '2018-11-07 12:56:21'),
(527, 'Login user', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.121.212', '2018-11-07 22:33:46'),
(528, 'Joey Miller D. Minguillan Update Student Information', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.121.212', '2018-11-07 22:36:36'),
(529, 'Joey Miller D. Minguillan Updated subjects for 12345', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.121.212', '2018-11-07 22:36:36'),
(530, 'Joey Miller D. Minguillan Updated subjects for 12345', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.121.212', '2018-11-07 22:36:36'),
(531, 'Joey Miller D. Minguillan Updated subjects for 12345', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.121.212', '2018-11-07 22:36:36'),
(532, 'Joey Miller D. Minguillan Updated eng. pro. rating for 12345', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.121.212', '2018-11-07 22:36:36'),
(533, 'Joey Miller D. Minguillan Updated craft rating and skill for 12345', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.121.212', '2018-11-07 22:36:36'),
(534, 'Joey Miller D. Minguillan Updated core rating and skill for 12345', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.121.212', '2018-11-07 22:36:36'),
(535, 'Joey Miller D. Minguillan Update Student Information', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.121.212', '2018-11-07 22:42:23'),
(536, 'Joey Miller D. Minguillan Updated subjects for 12345', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.121.212', '2018-11-07 22:42:23'),
(537, 'Joey Miller D. Minguillan Updated subjects for 12345', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.121.212', '2018-11-07 22:42:23'),
(538, 'Joey Miller D. Minguillan Updated subjects for 12345', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.121.212', '2018-11-07 22:42:23'),
(539, 'Joey Miller D. Minguillan Updated eng. pro. rating for 12345', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.121.212', '2018-11-07 22:42:23'),
(540, 'Joey Miller D. Minguillan Updated craft rating and skill for 12345', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.121.212', '2018-11-07 22:42:23'),
(541, 'Joey Miller D. Minguillan Updated core rating and skill for 12345', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.121.212', '2018-11-07 22:42:23'),
(542, 'Login user', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '110.54.243.32', '2018-11-08 00:01:51'),
(543, 'Joey Miller D. Minguillan Update Student Information', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '110.54.243.32', '2018-11-08 00:03:05'),
(544, 'Joey Miller D. Minguillan Updated subjects for 69678', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '110.54.243.32', '2018-11-08 00:03:05'),
(545, 'Joey Miller D. Minguillan Updated eng. pro. rating for 69678', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '110.54.243.32', '2018-11-08 00:03:05'),
(546, 'Joey Miller D. Minguillan Updated craft rating and skill for 69678', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '110.54.243.32', '2018-11-08 00:03:05'),
(547, 'Joey Miller D. Minguillan Updated core rating and skill for 69678', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '110.54.243.32', '2018-11-08 00:03:05'),
(548, 'Login user', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '110.54.243.32', '2018-11-08 05:44:04'),
(549, 'Joey Miller D. Minguillan Update Student Information', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '110.54.243.32', '2018-11-08 06:49:03'),
(550, 'Joey Miller D. Minguillan Updated subjects for 67857', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '110.54.243.32', '2018-11-08 06:49:03'),
(551, 'Joey Miller D. Minguillan Updated subjects for 67857', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '110.54.243.32', '2018-11-08 06:49:03'),
(552, 'Joey Miller D. Minguillan Updated eng. pro. rating for 67857', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '110.54.243.32', '2018-11-08 06:49:03'),
(553, 'Joey Miller D. Minguillan Updated craft rating and skill for 67857', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '110.54.243.32', '2018-11-08 06:49:03'),
(554, 'Joey Miller D. Minguillan Updated core rating and skill for 67857', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '110.54.243.32', '2018-11-08 06:49:03'),
(555, 'Login user', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '93.168.151.223', '2018-11-09 03:01:23'),
(556, 'Login user', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '93.168.203.167', '2018-11-10 03:38:01'),
(557, 'Login user', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '93.168.203.167', '2018-11-10 12:23:41'),
(558, 'Login user', 1, 'Mobile Device', 'a2plcpnl0081.prod.iad2.secureserver.net', '93.168.203.167', '2018-11-10 13:26:33'),
(559, 'Joey Miller D. Minguillan Update Student Information', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '93.168.203.167', '2018-11-10 13:32:29'),
(560, 'Joey Miller D. Minguillan Updated subjects for 12345', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '93.168.203.167', '2018-11-10 13:32:29'),
(561, 'Joey Miller D. Minguillan Updated subjects for 12345', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '93.168.203.167', '2018-11-10 13:32:29'),
(562, 'Joey Miller D. Minguillan Updated subjects for 12345', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '93.168.203.167', '2018-11-10 13:32:29'),
(563, 'Joey Miller D. Minguillan Updated eng. pro. rating for 12345', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '93.168.203.167', '2018-11-10 13:32:29'),
(564, 'Joey Miller D. Minguillan Updated craft rating and skill for 12345', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '93.168.203.167', '2018-11-10 13:32:29'),
(565, 'Joey Miller D. Minguillan Updated core rating and skill for 12345', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '93.168.203.167', '2018-11-10 13:32:29'),
(566, 'Joey Miller D. Minguillan Update Student Information', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '93.168.203.167', '2018-11-10 13:34:43'),
(567, 'Joey Miller D. Minguillan Updated subjects for 12345', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '93.168.203.167', '2018-11-10 13:34:43'),
(568, 'Joey Miller D. Minguillan Updated subjects for 12345', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '93.168.203.167', '2018-11-10 13:34:43'),
(569, 'Joey Miller D. Minguillan Updated subjects for 12345', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '93.168.203.167', '2018-11-10 13:34:43'),
(570, 'Joey Miller D. Minguillan Updated eng. pro. rating for 12345', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '93.168.203.167', '2018-11-10 13:34:43'),
(571, 'Joey Miller D. Minguillan Updated craft rating and skill for 12345', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '93.168.203.167', '2018-11-10 13:34:43'),
(572, 'Joey Miller D. Minguillan Updated core rating and skill for 12345', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '93.168.203.167', '2018-11-10 13:34:43'),
(573, 'Joey Miller D. Minguillan Register student', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '93.168.203.167', '2018-11-10 13:46:05'),
(574, 'Joey Miller D. Minguillan Created subjects for 12335', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '93.168.203.167', '2018-11-10 13:46:05'),
(575, 'Joey Miller D. Minguillan Created english proficiency rating for 12335', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '93.168.203.167', '2018-11-10 13:46:05'),
(576, 'Joey Miller D. Minguillan Created craft rating and skill for 12335', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '93.168.203.167', '2018-11-10 13:46:05'),
(577, 'Joey Miller D. Minguillan Created core rating and skill for 12335', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '93.168.203.167', '2018-11-10 13:46:05'),
(578, 'Joey Miller D. Minguillan Register student', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '93.168.203.167', '2018-11-10 13:57:39'),
(579, 'Joey Miller D. Minguillan Created subjects for 31234', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '93.168.203.167', '2018-11-10 13:57:39'),
(580, 'Joey Miller D. Minguillan Created english proficiency rating for 31234', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '93.168.203.167', '2018-11-10 13:57:39'),
(581, 'Joey Miller D. Minguillan Created craft rating and skill for 31234', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '93.168.203.167', '2018-11-10 13:57:39'),
(582, 'Joey Miller D. Minguillan Created core rating and skill for 31234', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '93.168.203.167', '2018-11-10 13:57:39'),
(583, 'Login user', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '110.54.239.60', '2018-11-10 17:39:45'),
(584, 'Joey Miller D. Minguillan Update Student Information', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '110.54.239.60', '2018-11-10 18:08:59'),
(585, 'Joey Miller D. Minguillan Updated subjects for 31234', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '110.54.239.60', '2018-11-10 18:08:59'),
(586, 'Joey Miller D. Minguillan Updated eng. pro. rating for 31234', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '110.54.239.60', '2018-11-10 18:08:59'),
(587, 'Joey Miller D. Minguillan Updated craft rating and skill for 31234', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '110.54.239.60', '2018-11-10 18:08:59'),
(588, 'Joey Miller D. Minguillan Updated core rating and skill for 31234', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '110.54.239.60', '2018-11-10 18:08:59'),
(589, 'Joey Miller D. Minguillan Update Student Information', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '110.54.239.60', '2018-11-10 18:18:48'),
(590, 'Joey Miller D. Minguillan Updated subjects for 12335', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '110.54.239.60', '2018-11-10 18:18:48'),
(591, 'Joey Miller D. Minguillan Updated eng. pro. rating for 12335', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '110.54.239.60', '2018-11-10 18:18:48'),
(592, 'Joey Miller D. Minguillan Updated craft rating and skill for 12335', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '110.54.239.60', '2018-11-10 18:18:48'),
(593, 'Joey Miller D. Minguillan Updated core rating and skill for 12335', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '110.54.239.60', '2018-11-10 18:18:48'),
(594, 'Login user', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '93.168.203.167', '2018-11-10 20:03:50'),
(595, 'Login user', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.121.212', '2018-11-10 21:57:05'),
(596, 'Login user', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.121.212', '2018-11-10 22:05:36'),
(597, 'Joey Miller D. Minguillan Register student', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.121.212', '2018-11-10 23:24:16'),
(598, 'Joey Miller D. Minguillan Created subjects for 32634', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.121.212', '2018-11-10 23:24:16'),
(599, 'Joey Miller D. Minguillan Created english proficiency rating for 32634', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.121.212', '2018-11-10 23:24:16'),
(600, 'Joey Miller D. Minguillan Created craft rating and skill for 32634', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.121.212', '2018-11-10 23:24:16'),
(601, 'Joey Miller D. Minguillan Created core rating and skill for 32634', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.121.212', '2018-11-10 23:24:16'),
(602, 'Joey Miller D. Minguillan Update Student Information', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.121.212', '2018-11-10 23:29:38'),
(603, 'Joey Miller D. Minguillan Updated subjects for 12345', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.121.212', '2018-11-10 23:29:38'),
(604, 'Joey Miller D. Minguillan Updated subjects for 12345', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.121.212', '2018-11-10 23:29:38'),
(605, 'Joey Miller D. Minguillan Updated subjects for 12345', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.121.212', '2018-11-10 23:29:38'),
(606, 'Joey Miller D. Minguillan Updated eng. pro. rating for 12345', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.121.212', '2018-11-10 23:29:38'),
(607, 'Joey Miller D. Minguillan Updated craft rating and skill for 12345', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.121.212', '2018-11-10 23:29:38'),
(608, 'Joey Miller D. Minguillan Updated core rating and skill for 12345', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.121.212', '2018-11-10 23:29:38'),
(609, 'Joey Miller D. Minguillan Update Student Information', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.121.212', '2018-11-10 23:32:15'),
(610, 'Joey Miller D. Minguillan Updated subjects for 12345', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.121.212', '2018-11-10 23:32:15'),
(611, 'Joey Miller D. Minguillan Updated subjects for 12345', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.121.212', '2018-11-10 23:32:15'),
(612, 'Joey Miller D. Minguillan Updated subjects for 12345', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.121.212', '2018-11-10 23:32:15'),
(613, 'Joey Miller D. Minguillan Updated eng. pro. rating for 12345', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.121.212', '2018-11-10 23:32:15'),
(614, 'Joey Miller D. Minguillan Updated craft rating and skill for 12345', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.121.212', '2018-11-10 23:32:15'),
(615, 'Joey Miller D. Minguillan Updated core rating and skill for 12345', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.121.212', '2018-11-10 23:32:15'),
(616, 'Logout user', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.121.212', '2018-11-11 00:20:40'),
(617, 'Login user', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.121.212', '2018-11-11 00:20:59'),
(618, 'Update user information', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.121.212', '2018-11-11 00:21:39'),
(619, 'Register users', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.121.212', '2018-11-11 00:22:20'),
(620, 'Register users', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.121.212', '2018-11-11 00:22:40'),
(621, 'Activate users', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.121.212', '2018-11-11 00:22:51'),
(622, 'Logout user', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.121.212', '2018-11-11 00:23:01'),
(623, 'Login user', 6, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.121.212', '2018-11-11 00:23:13'),
(624, 'Dummy1 Update Student Information', 6, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.121.212', '2018-11-11 00:23:42'),
(625, 'Dummy1 Updated subjects for 12345', 6, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.121.212', '2018-11-11 00:23:42'),
(626, 'Dummy1 Updated subjects for 12345', 6, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.121.212', '2018-11-11 00:23:42'),
(627, 'Dummy1 Updated subjects for 12345', 6, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.121.212', '2018-11-11 00:23:42'),
(628, 'Dummy1 Updated eng. pro. rating for 12345', 6, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.121.212', '2018-11-11 00:23:42'),
(629, 'Dummy1 Updated craft rating and skill for 12345', 6, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.121.212', '2018-11-11 00:23:42'),
(630, 'Dummy1 Updated core rating and skill for 12345', 6, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.121.212', '2018-11-11 00:23:42'),
(631, 'Logout user', 6, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.121.212', '2018-11-11 00:24:04'),
(632, 'Login user', 5, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.121.212', '2018-11-11 00:24:18'),
(633, 'Logout user', 5, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.121.212', '2018-11-11 00:24:31'),
(634, 'Login user', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.121.212', '2018-11-11 00:24:46'),
(635, 'Update user information', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.121.212', '2018-11-11 00:24:59'),
(636, 'Logout user', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.121.212', '2018-11-11 00:25:07'),
(637, 'Login user', 6, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.121.212', '2018-11-11 00:25:37'),
(638, 'Logout user', 6, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.121.212', '2018-11-11 00:27:19'),
(639, 'Login user', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.121.212', '2018-11-11 00:27:42'),
(640, 'Login user', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '5.156.152.64', '2018-11-11 00:31:41'),
(641, 'Register users', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.121.212', '2018-11-11 00:47:08'),
(642, 'Activate users', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.121.212', '2018-11-11 00:47:23'),
(643, 'Logout user', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.121.212', '2018-11-11 00:47:40'),
(644, 'Login user', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.121.212', '2018-11-11 00:57:53'),
(645, 'Update Security Configuration', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.121.212', '2018-11-11 00:59:44'),
(646, 'Create New Diploma Course(s)', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.121.212', '2018-11-11 01:01:06'),
(647, 'Logout user', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.121.212', '2018-11-11 02:44:44'),
(648, 'Login user', 7, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '5.156.152.64', '2018-11-11 07:19:02'),
(649, 'Logout user', 7, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '5.156.152.64', '2018-11-11 07:19:58'),
(650, 'Login user', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.121.212', '2018-11-11 23:42:44'),
(651, 'Register users', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.121.212', '2018-11-11 23:43:33'),
(652, 'Activate users', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.121.212', '2018-11-11 23:44:00'),
(653, 'Logout user', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.121.212', '2018-11-11 23:44:14'),
(654, 'Login user', 8, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.121.212', '2018-11-11 23:44:34'),
(655, 'Login user', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '5.156.152.64', '2018-11-12 03:11:44'),
(656, 'Joey Miller D. Minguillan Register student', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '5.156.152.64', '2018-11-12 03:57:35'),
(657, 'Joey Miller D. Minguillan Created subjects for 45555', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '5.156.152.64', '2018-11-12 03:57:35'),
(658, 'Joey Miller D. Minguillan Created english proficiency rating for 45555', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '5.156.152.64', '2018-11-12 03:57:35'),
(659, 'Joey Miller D. Minguillan Created craft rating and skill for 45555', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '5.156.152.64', '2018-11-12 03:57:35'),
(660, 'Joey Miller D. Minguillan Created core rating and skill for 45555', 1, 'Desktop/Workstation', 'a2plcpnl0081.prod.iad2.secureserver.net', '5.156.152.64', '2018-11-12 03:57:35'),
(661, 'Login user', 1, 'Desktop/Workstation', 'a2plvcpnl122567.prod.iad2.secureserver.net', '110.54.236.228', '2018-11-17 10:41:46'),
(662, 'Joey Miller D. Minguillan Update Student Information', 1, 'Desktop/Workstation', 'a2plvcpnl122567.prod.iad2.secureserver.net', '110.54.236.228', '2018-11-17 10:45:38'),
(663, 'Joey Miller D. Minguillan Updated subjects for 31234', 1, 'Desktop/Workstation', 'a2plvcpnl122567.prod.iad2.secureserver.net', '110.54.236.228', '2018-11-17 10:45:38'),
(664, 'Joey Miller D. Minguillan Updated eng. pro. rating for 31234', 1, 'Desktop/Workstation', 'a2plvcpnl122567.prod.iad2.secureserver.net', '110.54.236.228', '2018-11-17 10:45:38'),
(665, 'Joey Miller D. Minguillan Updated craft rating and skill for 31234', 1, 'Desktop/Workstation', 'a2plvcpnl122567.prod.iad2.secureserver.net', '110.54.236.228', '2018-11-17 10:45:38'),
(666, 'Joey Miller D. Minguillan Updated core rating and skill for 31234', 1, 'Desktop/Workstation', 'a2plvcpnl122567.prod.iad2.secureserver.net', '110.54.236.228', '2018-11-17 10:45:38'),
(667, 'Update user profile', 1, 'Desktop/Workstation', 'a2plvcpnl122567.prod.iad2.secureserver.net', '110.54.236.228', '2018-11-17 11:00:19'),
(668, 'Logout user', 1, 'Desktop/Workstation', 'a2plvcpnl122567.prod.iad2.secureserver.net', '110.54.236.228', '2018-11-17 11:00:22'),
(669, 'Login user', 1, 'Desktop/Workstation', 'a2plvcpnl122567.prod.iad2.secureserver.net', '110.54.236.228', '2018-11-17 11:00:29'),
(670, 'Joey Miller D. Minguillan Update Student Information', 1, 'Desktop/Workstation', 'a2plvcpnl122567.prod.iad2.secureserver.net', '110.54.236.228', '2018-11-17 11:01:24'),
(671, 'Joey Miller D. Minguillan Updated subjects for 69678', 1, 'Desktop/Workstation', 'a2plvcpnl122567.prod.iad2.secureserver.net', '110.54.236.228', '2018-11-17 11:01:24'),
(672, 'Joey Miller D. Minguillan Updated eng. pro. rating for 69678', 1, 'Desktop/Workstation', 'a2plvcpnl122567.prod.iad2.secureserver.net', '110.54.236.228', '2018-11-17 11:01:24'),
(673, 'Joey Miller D. Minguillan Updated craft rating and skill for 69678', 1, 'Desktop/Workstation', 'a2plvcpnl122567.prod.iad2.secureserver.net', '110.54.236.228', '2018-11-17 11:01:24'),
(674, 'Joey Miller D. Minguillan Updated core rating and skill for 69678', 1, 'Desktop/Workstation', 'a2plvcpnl122567.prod.iad2.secureserver.net', '110.54.236.228', '2018-11-17 11:01:24'),
(675, 'Joey Miller D. Minguillan Update Student Information', 1, 'Desktop/Workstation', 'a2plvcpnl122567.prod.iad2.secureserver.net', '110.54.236.228', '2018-11-17 11:02:01'),
(676, 'Joey Miller D. Minguillan Updated subjects for 69678', 1, 'Desktop/Workstation', 'a2plvcpnl122567.prod.iad2.secureserver.net', '110.54.236.228', '2018-11-17 11:02:01'),
(677, 'Joey Miller D. Minguillan Updated eng. pro. rating for 69678', 1, 'Desktop/Workstation', 'a2plvcpnl122567.prod.iad2.secureserver.net', '110.54.236.228', '2018-11-17 11:02:01'),
(678, 'Joey Miller D. Minguillan Updated craft rating and skill for 69678', 1, 'Desktop/Workstation', 'a2plvcpnl122567.prod.iad2.secureserver.net', '110.54.236.228', '2018-11-17 11:02:01'),
(679, 'Joey Miller D. Minguillan Updated core rating and skill for 69678', 1, 'Desktop/Workstation', 'a2plvcpnl122567.prod.iad2.secureserver.net', '110.54.236.228', '2018-11-17 11:02:01'),
(680, 'Joey Miller D. Minguillan Update Student Information', 1, 'Desktop/Workstation', 'a2plvcpnl122567.prod.iad2.secureserver.net', '110.54.236.228', '2018-11-17 11:03:05'),
(681, 'Joey Miller D. Minguillan Updated subjects for 22333', 1, 'Desktop/Workstation', 'a2plvcpnl122567.prod.iad2.secureserver.net', '110.54.236.228', '2018-11-17 11:03:05'),
(682, 'Joey Miller D. Minguillan Updated eng. pro. rating for 22333', 1, 'Desktop/Workstation', 'a2plvcpnl122567.prod.iad2.secureserver.net', '110.54.236.228', '2018-11-17 11:03:05'),
(683, 'Joey Miller D. Minguillan Updated craft rating and skill for 22333', 1, 'Desktop/Workstation', 'a2plvcpnl122567.prod.iad2.secureserver.net', '110.54.236.228', '2018-11-17 11:03:05'),
(684, 'Joey Miller D. Minguillan Updated core rating and skill for 22333', 1, 'Desktop/Workstation', 'a2plvcpnl122567.prod.iad2.secureserver.net', '110.54.236.228', '2018-11-17 11:03:05'),
(685, 'Login user', 1, 'Desktop/Workstation', 'a2plvcpnl122567.prod.iad2.secureserver.net', '78.95.168.74', '2018-11-17 11:11:45'),
(686, 'Logout user', 1, 'Desktop/Workstation', 'a2plvcpnl122567.prod.iad2.secureserver.net', '78.95.168.74', '2018-11-17 11:38:02'),
(687, 'Login user', 1, 'Desktop/Workstation', 'a2plvcpnl122567.prod.iad2.secureserver.net', '51.223.110.207', '2018-11-18 01:47:35'),
(688, 'Login user', 8, 'Desktop/Workstation', 'a2plvcpnl122567.prod.iad2.secureserver.net', '51.223.110.207', '2018-11-18 03:04:03'),
(689, 'Dr. Firas Kassem Update Student Information', 8, 'Desktop/Workstation', 'a2plvcpnl122567.prod.iad2.secureserver.net', '51.223.110.207', '2018-11-18 03:06:27'),
(690, 'Dr. Firas Kassem Updated subjects for 12345', 8, 'Desktop/Workstation', 'a2plvcpnl122567.prod.iad2.secureserver.net', '51.223.110.207', '2018-11-18 03:06:27'),
(691, 'Dr. Firas Kassem Updated subjects for 12345', 8, 'Desktop/Workstation', 'a2plvcpnl122567.prod.iad2.secureserver.net', '51.223.110.207', '2018-11-18 03:06:27'),
(692, 'Dr. Firas Kassem Updated subjects for 12345', 8, 'Desktop/Workstation', 'a2plvcpnl122567.prod.iad2.secureserver.net', '51.223.110.207', '2018-11-18 03:06:27'),
(693, 'Dr. Firas Kassem Updated eng. pro. rating for 12345', 8, 'Desktop/Workstation', 'a2plvcpnl122567.prod.iad2.secureserver.net', '51.223.110.207', '2018-11-18 03:06:27'),
(694, 'Dr. Firas Kassem Updated craft rating and skill for 12345', 8, 'Desktop/Workstation', 'a2plvcpnl122567.prod.iad2.secureserver.net', '51.223.110.207', '2018-11-18 03:06:27'),
(695, 'Dr. Firas Kassem Updated core rating and skill for 12345', 8, 'Desktop/Workstation', 'a2plvcpnl122567.prod.iad2.secureserver.net', '51.223.110.207', '2018-11-18 03:06:27'),
(696, 'Login user', 1, 'Desktop/Workstation', 'a2plvcpnl122567.prod.iad2.secureserver.net', '110.54.236.239', '2018-11-18 05:37:39'),
(697, 'Update Diploma Course', 1, 'Desktop/Workstation', 'a2plvcpnl122567.prod.iad2.secureserver.net', '110.54.236.239', '2018-11-18 05:50:00'),
(698, 'Update Diploma Course', 1, 'Desktop/Workstation', 'a2plvcpnl122567.prod.iad2.secureserver.net', '110.54.236.239', '2018-11-18 05:50:11'),
(699, 'Login user', 1, 'Desktop/Workstation', 'a2plvcpnl122567.prod.iad2.secureserver.net', '51.223.110.207', '2018-11-19 02:37:23'),
(700, 'Login user', 1, 'Desktop/Workstation', 'a2plvcpnl122567.prod.iad2.secureserver.net', '110.54.249.223', '2018-11-19 03:01:31'),
(701, 'Login user', 1, 'Desktop/Workstation', 'a2plvcpnl122567.prod.iad2.secureserver.net', '51.223.53.133', '2018-11-21 05:18:36'),
(702, 'Logout user', 1, 'Desktop/Workstation', 'a2plvcpnl122567.prod.iad2.secureserver.net', '51.223.53.133', '2018-11-21 05:19:11'),
(703, 'Login user', 1, 'Desktop/Workstation', 'a2plvcpnl122567.prod.iad2.secureserver.net', '110.54.236.20', '2018-11-21 07:46:11');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_id` int(11) NOT NULL,
  `room_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `room_name`, `status`, `created_by`, `updated_by`, `created`, `modified`) VALUES
(1, 'Room 1', '1', 2, 1, '2018-08-22 11:12:06', '2018-10-28 00:30:26'),
(2, 'Room 2', '1', 2, 1, '2018-08-22 11:14:01', '2018-10-28 00:30:38'),
(3, 'Room 3', '1', 2, 1, '2018-08-22 11:14:01', '2018-10-28 00:30:54'),
(4, 'Room 4', '1', 2, 1, '2018-08-22 11:14:01', '2018-10-28 00:31:09'),
(5, 'Room 5', '1', 2, 1, '2018-08-22 12:23:55', '2018-10-28 00:31:29'),
(6, 'Room 6', '1', 2, 1, '2018-08-22 15:51:13', '2018-10-28 00:31:52'),
(7, 'Room 7', '1', 1, 1, '2018-09-06 23:49:24', '2018-10-28 00:32:07'),
(8, 'Room 8', '1', 1, 1, '2018-09-06 23:49:24', '2018-10-28 00:32:21'),
(9, 'Computer Laboratory', '1', 3, 3, '2018-10-18 09:50:48', '2018-10-18 09:51:36');

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
(9, 3600, 120, 1, '2018-11-11 00:59:44');

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
  `ramarks` enum('Ongoing','Graduated','Terminated','Expulsion','Resigned','Withdraw') COLLATE utf8_unicode_ci NOT NULL,
  `date_graduated` date DEFAULT NULL,
  `comments` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `civil_status` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `student_status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL,
  `student_created_by` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `student_updated_by` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `student_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `student_modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student_no`, `national_id`, `email_address`, `mobile_no`, `english_name`, `arabic_name`, `nationality`, `company`, `type_of_course`, `training_start`, `training_end`, `diploma_course`, `vocational_course`, `address`, `date_of_birth`, `guardian_name`, `guardian_contact`, `id_picture`, `ramarks`, `date_graduated`, `comments`, `civil_status`, `student_status`, `student_created_by`, `student_updated_by`, `student_created`, `student_modified`) VALUES
(1, 12345, '1235123154', 'james@gmail.com', '(977) 474-5044', 'James Reid', 'Abdul Jamilla', 'Arabian', 'Technical Higher Institute for Engineering and Petroleum', 'Diploma', '2018-10-16', '2019-06-16', 3, NULL, '123 Habdulla Kabul', '2018-07-02', 'Meshkatic Jamila', '(977) 474-5044', '123452.jpg', 'Graduated', '0000-00-00', 'the student is out', '', '1', 'Joey Minguillan', 'Dr. Firas Kassem', '2018-10-16 17:33:53', '2018-11-18 03:06:27'),
(2, 14232, '1231234132', 'jericho@yahoo.com', '(977) 474-5044', 'Jericho Rosales', 'Jamidalla Habdullah', 'Arabian', 'Technical Higher Institute for Engineering and Petroleum', 'Vocational', '2018-10-16', '2019-01-16', NULL, 1, '143 Rina Kabul', '2018-10-03', 'Jamidalla Habdullah Sr.', '(977) 474-5044', '', 'Graduated', NULL, NULL, NULL, '1', 'Joey Minguillan', NULL, '2018-10-16 17:41:58', '2018-10-16 17:44:26'),
(4, 14143, '1245412643', 'rayber@gmail.com', '(926) 451-6464', 'Saud Al Qanbar', 'Saud Al Qanbar', 'Arabian', 'Technical Higher Institute for Engineering and Petroleum', 'Diploma', '2018-10-15', '2019-04-12', 2, NULL, 'Al khobar', '2018-10-11', 'Saud Al Qanbar', '(921) 465-4566', '', 'Graduated', NULL, NULL, NULL, '1', 'Joey Minguillan', 'Joey Minguillan', '2018-10-16 18:04:16', '2018-10-24 01:33:07'),
(5, 23463, '1256235575', 'mustafa@yahoo.com', '(921) 564-1214', 'Mustafa Al Khamis', 'Mustafa Al Khamis', 'Arabian', 'Al Hajri', 'Diploma', '2018-10-15', '2019-05-10', 2, NULL, 'Dammam', '2018-10-19', 'Mustafa Al Kwaher', '(925) 165-4654', '', 'Graduated', NULL, NULL, NULL, '1', 'Joey Minguillan', 'Joey Minguillan', '2018-10-16 18:10:50', '2018-10-24 01:28:43'),
(6, 15657, '9966322558', 'hussein@gmail.com', '(971) 541-6546', 'Hussain Ahamed', 'Hussain Ahamed', 'Arabian', 'Technical Higher Institute for Engineering and Petroleum', 'Diploma', '2018-10-15', '2018-10-15', 1, NULL, 'Istanbul', '2018-10-16', 'Hussain Ahamed', '(985) 764-6546', '156572.jpg', 'Graduated', NULL, NULL, NULL, '1', 'Joey Minguillan', 'Joey Minguillan', '2018-10-16 22:00:32', '2018-10-24 01:34:33'),
(7, 69678, '3216549874', 'yousuf@yahoo.com', '(923) 164-5165', 'Yousuf Al Sullaiman', 'Yousuf Al Sullaiman', 'Arabian', 'Technical Higher Institute for Engineering and Petroleum', 'Vocational', '2018-10-18', '2019-01-18', NULL, 4, 'Al Hasa', '2018-10-25', 'Yousuf Abullrahman', '(095) 683-8383', '696781.jpg', 'Graduated', '2018-11-07', '', '', '1', 'Joey Minguillan', 'Joey Miller D. Minguillan', '2018-10-18 15:08:27', '2018-11-17 11:02:01'),
(8, 67857, '4785786754', 'wazam@gmail.com', '(932) 154-1651', 'Wazam Al Shula', 'Wazam Al Shula', 'Arabian', 'Nebosh', 'Diploma', '2018-10-22', '2018-10-22', 1, NULL, 'Rasta Nura', '1997-08-05', 'Mactumah Al Khamish', '(921) 634-6546', '678571.jpg', 'Withdraw', NULL, NULL, 'Single', '1', 'Joey Minguillan', 'Joey Miller D. Minguillan', '2018-10-23 16:34:42', '2018-11-08 06:49:03'),
(9, 22333, '3345555666', 'joey@hajrgroup.com', '(566) 778-8889', 'Mr. Jammal', 'Shungaers', 'American', 'Hajrgroup', 'Vocational', '2018-05-12', '2019-05-12', NULL, 4, 'Qatif', '2018-10-01', 'Engr. Justin', '(223) 345-5555', '22333.jpg', 'Graduated', '2018-11-14', '', 'Single', '1', 'Joey Miller D. Minguillan', 'Joey Miller D. Minguillan', '2018-10-31 03:19:57', '2018-11-17 11:03:05'),
(10, 78577, '', 'joey@gmail.com', '', '', 'oknjojnkjkljkl', '', 'nkkjkjk', 'Diploma', '0000-00-00', '1111-11-11', 1, NULL, '', '0000-00-00', '', '', '', 'Graduated', NULL, NULL, NULL, '1', 'Joey Miller D. Minguillan', NULL, '2018-10-31 03:56:09', '2018-10-31 03:56:09'),
(11, 12335, '2222222222', 'G@y.com', '', 'HASSAN', 'صثيلاةحتالبىمجحخ', 'saudi', 'ffffff', 'Vocational', '2018-05-21', '2019-12-21', NULL, 5, 'hhhhhh', '2018-11-08', 'dddddd', '', '12335.jpg', 'Resigned', NULL, NULL, 'single', '1', 'Joey Miller D. Minguillan', 'Joey Miller D. Minguillan', '2018-11-10 13:46:05', '2018-11-10 18:18:48'),
(12, 31234, '2523325234', 'j@yahoo.com', '(213) 534-4564', 'Jonathan Elias', 'سيبببشسضقىةا ببلا  الللسيي', 'arabian', 'Technical Higher Institute for Engineering and Petroleum', 'Vocational', '2018-05-21', '2019-12-21', NULL, 1, 'Dammam Saudi', '2018-11-12', 'Abdul Maasim', '(552) 674-5541', '31234.jpg', 'Ongoing', '0000-00-00', 'Very noisy in class', 'Single', '1', 'Joey Miller D. Minguillan', 'Joey Miller D. Minguillan', '2018-11-10 13:57:39', '2018-11-17 10:45:38'),
(13, 32634, '1255544444', 'j.mingui@yahoo.com', '(221) 545-4555', 'dsfgsdfg', 'يببب', 'Arabian', 'asldkjalsdf', 'Vocational', '2018-12-18', '2019-12-20', NULL, 1, 'asdfasdf', '1956-11-05', 'asdfasdf', '(222) 222-2222', '32634.jpg', 'Ongoing', NULL, NULL, 'Single', '1', 'Joey Miller D. Minguillan', NULL, '2018-11-10 23:24:16', '2018-11-10 23:24:16'),
(14, 45555, '2222222554', 'abdullah@hajrgroup.com', '(056) 565-3457', 'James Reid', 'مسنيبتشكسيببنتي تاتات', 'Saudi', 'Nasser Al Hajri', 'Vocational', '2018-05-25', '2019-05-25', NULL, 4, 'Qatif', '0000-00-00', 'Abdullah Idrees', '(025) 455-5544', '45555.jpg', 'Ongoing', NULL, NULL, 'Single', '1', 'Joey Miller D. Minguillan', NULL, '2018-11-12 03:57:35', '2018-11-12 03:57:35');

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
(1, 2, 1, '', '10:00:00', 2, 'MONDAY', 'Joey Minguillan', NULL, '2018-10-16 17:41:58', '2018-10-16 17:41:58'),
(2, 4, 1, '', '12:30:00', 2, 'TUESDAY', 'Joey Minguillan', 'Joey Minguillan', '2018-10-16 18:04:16', '2018-10-24 01:33:07'),
(3, 5, 1, '', '08:00:00', 3, 'MONDAY', 'Joey Minguillan', 'Joey Minguillan', '2018-10-16 18:10:50', '2018-10-24 01:28:43'),
(4, 6, 4, '', '14:30:00', 1, 'TUESDAY', 'Joey Minguillan', 'Joey Minguillan', '2018-10-16 22:00:33', '2018-10-18 15:03:11'),
(5, 6, 1, '', '08:00:00', 3, 'WEDNESDAY', 'Joey Minguillan', 'Joey Minguillan', '2018-10-18 14:56:31', '2018-10-18 14:57:41'),
(6, 7, 1, '', '14:30:00', 3, 'MONDAY', 'Joey Minguillan', 'Joey Miller D. Minguillan', '2018-10-18 15:08:27', '2018-11-08 00:03:05'),
(7, 1, 4, '', '12:30:00', 4, 'SATURDAY', 'Joey Minguillan', 'Dr. Firas Kassem', '2018-10-19 12:02:26', '2018-11-18 03:06:27'),
(8, 8, 2, '', '10:00:00', 2, 'THURSDAY', 'Joey Minguillan', 'Joey Miller D. Minguillan', '2018-10-23 16:34:42', '2018-11-07 12:56:21'),
(9, 8, 1, '', '10:00:00', 2, 'TUESDAY', 'Joey Minguillan', 'Joey Miller D. Minguillan', '2018-10-23 16:34:42', '2018-11-07 12:56:21'),
(10, 1, 1, '', '18:30:00', 4, 'TUESDAY', 'Joey Miller D. Minguillan', 'Dr. Firas Kassem', '2018-10-30 13:16:25', '2018-11-18 03:06:27'),
(11, 1, 3, '', '16:30:00', 8, 'THURSDAY', 'Joey Miller D. Minguillan', 'Dr. Firas Kassem', '2018-10-30 13:16:25', '2018-11-18 03:06:27'),
(12, 9, 1, '', '08:00:00', 1, 'SUNDAY', 'Joey Miller D. Minguillan', 'Joey Miller D. Minguillan', '2018-10-31 03:19:57', '2018-11-17 11:03:05'),
(13, 10, 1, '', '12:30:00', 2, 'MONDAY', 'Joey Miller D. Minguillan', NULL, '2018-10-31 03:56:09', '2018-10-31 03:56:09'),
(14, 11, 2, '', '08:00:00', 1, 'MONDAY', 'Joey Miller D. Minguillan', 'Joey Miller D. Minguillan', '2018-11-10 13:46:05', '2018-11-10 18:18:48'),
(15, 12, 1, '', '08:00:00', 1, 'TUESDAY', 'Joey Miller D. Minguillan', 'Joey Miller D. Minguillan', '2018-11-10 13:57:39', '2018-11-10 18:08:59'),
(16, 13, 3, '', '10:00:00', 2, 'MONDAY', 'Joey Miller D. Minguillan', NULL, '2018-11-10 23:24:16', '2018-11-10 23:24:16'),
(17, 13, 1, '', '08:00:00', 1, 'WEDNESDAY', 'Joey Miller D. Minguillan', NULL, '2018-11-10 23:24:16', '2018-11-10 23:24:16'),
(18, 13, 4, '', '18:30:00', 3, 'TUESDAY', 'Joey Miller D. Minguillan', NULL, '2018-11-10 23:24:16', '2018-11-10 23:24:16'),
(19, 14, 3, '', '08:00:00', 1, 'SUNDAY', 'Joey Miller D. Minguillan', NULL, '2018-11-12 03:57:35', '2018-11-12 03:57:35'),
(20, 14, 2, '', '10:00:00', 2, 'MONDAY', 'Joey Miller D. Minguillan', NULL, '2018-11-12 03:57:35', '2018-11-12 03:57:35'),
(21, 14, 1, '', '12:30:00', 3, 'THURSDAY', 'Joey Miller D. Minguillan', NULL, '2018-11-12 03:57:35', '2018-11-12 03:57:35');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(11) NOT NULL,
  `subject_title` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `subject_title`, `status`, `created_by`, `updated_by`, `created`, `modified`) VALUES
(1, 'ENGLISH', '1', 2, 1, '2018-08-22 16:02:19', '2018-09-06 23:15:34'),
(2, 'SCIENCE', '1', 2, 1, '2018-08-22 16:02:19', '2018-10-15 14:58:05'),
(3, 'ENGINEERING', '1', 2, 1, '2018-08-24 00:25:46', '2018-09-06 23:15:34'),
(4, 'MATHEMATICS', '1', 1, 1, '2018-09-06 23:09:18', '2018-09-06 23:15:34'),
(5, 'LOGIC', '1', 1, 1, '2018-09-06 23:09:18', '2018-09-06 23:23:07');

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
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_credential`
--

INSERT INTO `user_credential` (`user_id`, `u_full_name`, `u_email_address`, `u_password`, `designation`, `password_reset_date`, `login_attempt`, `locked_time`, `profile_pic`, `status`, `recent_login`, `device_name`, `device_ip_address`, `created_by`, `updated_by`, `created`, `modified`) VALUES
(1, 'Joey Miller D. Minguillan', 'jaded_miller@yahoo.com', '$2y$10$sr9D4L8BMPTuUQ6XjTWP0OVbdZ9SyuTHy/xfHdtGbeJWGP5KhWSoy', 'Administrator', '2018-12-06 12:46:24', NULL, NULL, 'avatar-41.jpg', '1', '2018-11-21 17:46:11', 'a2plvcpnl122567.prod.iad2.secureserver.net', '110.54.236.20', 1, 1, '2018-09-04 12:28:46', '2018-11-21 07:46:11'),
(2, 'Administrator', 'admin@gmail.com', '$2y$10$81uoJHMTpPr7h31Wfcugve2rWwUQXO2Fh3Q4kjuFDuZU/nfcmrB8S', 'Administrator', '2018-12-04 13:33:35', NULL, NULL, '', '1', NULL, NULL, NULL, 1, 1, '2018-09-05 13:33:35', '2018-10-24 01:23:35'),
(3, 'Abdullah Mastour', 'abdullah@gmail.com', '$2y$10$lWYsyDuWhTtR4TL3tF8y/e/eUMO8TstSc.e0ouC9.McM4o.r09Jyi', 'Registrar', '2018-12-04 13:35:31', NULL, NULL, 'vince.png', '1', '2018-10-18 10:18:13', 'JUN-PC', '::1', 1, 1, '2018-09-05 13:35:31', '2018-11-11 00:21:39'),
(4, 'Hassan Kuaish', 'hassan@gmail.com', '$2y$10$Avxj/AmYe59ypXLTdQFYbu8zWa4Jqd4us0K4IK3LUGBMmGjUWBA2C', 'Program Head', '2019-01-16 10:26:21', NULL, NULL, 'avatar-1.jpg', '1', '2018-10-18 10:35:48', 'JUN-PC', '::1', 1, 1, '2018-10-18 10:26:21', '2018-10-24 01:24:49'),
(5, 'Dummy', 'dummy@yahoo.com', '$2y$10$F2e9e0Q3/5rgrlxOdhafOOv8wOj5BcYy8MzVJFSfk6HcIP/OAIipS', 'Registrar', '2019-03-01 10:22:20', NULL, NULL, '', '1', '2018-11-11 10:24:18', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.121.212', 1, 1, '2018-11-11 00:22:20', '2018-11-11 00:24:18'),
(6, 'Dummy1', 'dummy1@yahoo.com', '$2y$10$e47oFQavtlk8QtHU2t/wLeGlDNzOO.Dj043DAimi9E7u6Vrg.alhW', 'Program Head', '2019-03-01 10:22:40', NULL, NULL, '', '1', '2018-11-11 10:25:37', 'a2plcpnl0081.prod.iad2.secureserver.net', '159.0.121.212', 1, 1, '2018-11-11 00:22:40', '2018-11-11 00:25:37'),
(7, 'Engr. Mustafa T. Alghazal', 'mustafa@yahoo.com', '$2y$10$2v0n1YedeX8uaMMXe1oXzuk8H6abA92FCjb2FLXA48CfD7hWFkVGS', 'Administrator', '2019-03-01 10:47:08', NULL, NULL, '', '1', '2018-11-11 17:19:02', 'a2plcpnl0081.prod.iad2.secureserver.net', '5.156.152.64', 1, 1, '2018-11-11 00:47:08', '2018-11-11 07:19:02'),
(8, 'Dr. Firas Kassem', 'kassem@yahoo.com', '$2y$10$Vc2QvHYTVbdoxZUMhdG5x.riNSfMkXKKnmfIQqe8tL9m1CobxukXK', 'Administrator', '2019-03-12 09:43:33', NULL, NULL, '', '1', '2018-11-18 13:04:03', 'a2plvcpnl122567.prod.iad2.secureserver.net', '51.223.110.207', 1, 1, '2018-11-11 23:43:33', '2018-11-18 03:04:03');

-- --------------------------------------------------------

--
-- Table structure for table `vocational_program`
--

CREATE TABLE `vocational_program` (
  `voc_program_id` int(11) NOT NULL,
  `voc_program` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `voc_program_acronym` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vocational_program`
--

INSERT INTO `vocational_program` (`voc_program_id`, `voc_program`, `voc_program_acronym`, `status`, `created_by`, `updated_by`, `created`, `modified`) VALUES
(1, 'Preparatory G1', 'PREPG1', '1', 2, 1, '2018-08-22 13:30:45', '2018-09-06 21:31:22'),
(2, 'Preparatory G2', 'PREPG2', '1', 2, 1, '2018-08-22 13:32:02', '2018-09-06 21:31:22'),
(3, 'Preparatory G3', 'PREPG3', '1', 2, 1, '2018-08-22 13:32:02', '2018-09-06 21:31:22'),
(4, 'Welding G1', 'WG1', '1', 2, 1, '2018-08-22 15:36:07', '2018-09-06 21:31:22'),
(5, 'Welding G2', 'WG2', '1', 2, 1, '2018-08-22 15:36:07', '2018-09-06 21:31:22'),
(6, 'Scaffolding', 'SCAFF', '1', 1, 1, '2018-09-06 21:15:43', '2018-09-06 21:31:22'),
(7, 'Welding G3', 'WG3', '1', 1, 1, '2018-09-06 21:15:43', '2018-09-06 21:38:21'),
(8, 'SAFETY', 'SAFETY', '1', 3, 1, '2018-10-18 09:44:31', '2018-10-24 03:21:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `core`
--
ALTER TABLE `core`
  ADD PRIMARY KEY (`core_id`);

--
-- Indexes for table `craft`
--
ALTER TABLE `craft`
  ADD PRIMARY KEY (`craft_id`);

--
-- Indexes for table `diploma_course`
--
ALTER TABLE `diploma_course`
  ADD PRIMARY KEY (`course_id`);

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
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`),
  ADD UNIQUE KEY `student_no` (`student_no`);

--
-- Indexes for table `student_subject`
--
ALTER TABLE `student_subject`
  ADD PRIMARY KEY (`tbl_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `user_credential`
--
ALTER TABLE `user_credential`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `vocational_program`
--
ALTER TABLE `vocational_program`
  ADD PRIMARY KEY (`voc_program_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `core`
--
ALTER TABLE `core`
  MODIFY `core_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `craft`
--
ALTER TABLE `craft`
  MODIFY `craft_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `diploma_course`
--
ALTER TABLE `diploma_course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `english_proficiency`
--
ALTER TABLE `english_proficiency`
  MODIFY `eng_pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `history_logs`
--
ALTER TABLE `history_logs`
  MODIFY `tbl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=704;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `student_subject`
--
ALTER TABLE `student_subject`
  MODIFY `tbl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_credential`
--
ALTER TABLE `user_credential`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `vocational_program`
--
ALTER TABLE `vocational_program`
  MODIFY `voc_program_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
