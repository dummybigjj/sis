-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2018 at 02:27 PM
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
  `student_id` int(11) NOT NULL,
  `rating` enum('Poor','Below Average','Average','Good','Very Good','Excellent') COLLATE utf8_unicode_ci NOT NULL,
  `skill` enum('1','2','3','4','5','6','7','8','9') COLLATE utf8_unicode_ci NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `craft`
--

CREATE TABLE `craft` (
  `student_id` int(11) NOT NULL,
  `rating` enum('Poor','Below Average','Average','Good','Very Good','Excellent') COLLATE utf8_unicode_ci NOT NULL,
  `skill` enum('1','2','3','4','5','6','7','8','9') COLLATE utf8_unicode_ci NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(1, 'Civil Technology Management', 'CTM', '1', 1, 1, '2018-09-07 00:37:45', '2018-09-07 01:34:48'),
(2, 'Native Drug Testing', 'NDT', '1', 1, 1, '2018-09-07 00:37:45', '2018-09-07 01:34:48'),
(3, 'Automotive', 'AU', '1', 1, 1, '2018-09-07 00:57:01', '2018-09-07 01:34:48');

-- --------------------------------------------------------

--
-- Table structure for table `english_proficiency`
--

CREATE TABLE `english_proficiency` (
  `student_id` int(11) NOT NULL,
  `eng_rating` enum('Poor','Below Average','Average','Good','Very Good','Excellent') COLLATE utf8_unicode_ci NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(144, 'Login user', 1, 'Desktop/Workstation', 'JUN-PC', '::1', '2018-09-21 11:39:53');

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
(1, 'Hall 1', '1', 2, 1, '2018-08-22 11:12:06', '2018-09-07 11:10:19'),
(2, 'Hall 2', '1', 2, 1, '2018-08-22 11:14:01', '2018-09-06 23:49:59'),
(3, 'Hall 3', '1', 2, 1, '2018-08-22 11:14:01', '2018-09-06 23:49:59'),
(4, 'Hall 4', '1', 2, 1, '2018-08-22 11:14:01', '2018-09-06 23:49:59'),
(5, 'Hall 5', '1', 2, 1, '2018-08-22 12:23:55', '2018-09-06 23:49:59'),
(6, 'Hall 6', '1', 2, 1, '2018-08-22 15:51:13', '2018-09-06 23:49:59'),
(7, 'Hall 7', '1', 1, 1, '2018-09-06 23:49:24', '2018-09-06 23:49:59'),
(8, 'Hall 8', '1', 1, 1, '2018-09-06 23:49:24', '2018-09-06 23:49:59');

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
  `national_id` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
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
  `guardian_contact` int(11) NOT NULL,
  `id_picture` longtext COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(2, 'SCIENCE', '1', 2, 1, '2018-08-22 16:02:19', '2018-09-06 23:15:34'),
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

INSERT INTO `user_credential` (`user_id`, `u_full_name`, `u_email_address`, `u_password`, `designation`, `password_reset_date`, `login_attempt`, `locked_time`, `status`, `recent_login`, `device_name`, `device_ip_address`, `created_by`, `updated_by`, `created`, `modified`) VALUES
(1, 'Joey Minguillan', 'joey@gmail.com', '$2y$10$repRu8TaYEzOmDxtB95kzuMXsUQvQTV1iR3SCQgZ9foNzi6.QO7X6', 'Administrator', '2018-12-06 12:46:24', NULL, NULL, '1', '2018-09-21 11:39:53', 'JUN-PC', '::1', NULL, 1, '2018-09-04 12:28:46', '2018-09-21 11:39:53'),
(2, 'Administrator Ako', 'admin@gmail.com', '$2y$10$81uoJHMTpPr7h31Wfcugve2rWwUQXO2Fh3Q4kjuFDuZU/nfcmrB8S', 'Administrator', '2018-12-04 13:33:35', NULL, NULL, '1', NULL, NULL, NULL, 1, 1, '2018-09-05 13:33:35', '2018-09-19 22:31:44'),
(3, 'Reynan Sho', 'reynan@gmail.com', '$2y$10$lWYsyDuWhTtR4TL3tF8y/e/eUMO8TstSc.e0ouC9.McM4o.r09Jyi', 'Registrar', '2018-12-04 13:35:31', NULL, NULL, '1', NULL, NULL, NULL, 1, 1, '2018-09-05 13:35:31', '2018-09-19 22:31:44');

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
(7, 'Welding G3', 'WG3', '1', 1, 1, '2018-09-06 21:15:43', '2018-09-06 21:38:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diploma_course`
--
ALTER TABLE `diploma_course`
  ADD PRIMARY KEY (`course_id`);

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
-- AUTO_INCREMENT for table `diploma_course`
--
ALTER TABLE `diploma_course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `history_logs`
--
ALTER TABLE `history_logs`
  MODIFY `tbl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_subject`
--
ALTER TABLE `student_subject`
  MODIFY `tbl_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_credential`
--
ALTER TABLE `user_credential`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vocational_program`
--
ALTER TABLE `vocational_program`
  MODIFY `voc_program_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
