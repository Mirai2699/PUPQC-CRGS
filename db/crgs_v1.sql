-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2019 at 11:44 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crgs_v1`
--

-- --------------------------------------------------------

--
-- Table structure for table `f_lock_screen_log`
--

CREATE TABLE `f_lock_screen_log` (
  `ls_ID` int(10) NOT NULL,
  `ls_page` varchar(200) NOT NULL,
  `ls_acc_ID` int(10) NOT NULL,
  `ls_timestamp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `f_lock_screen_log`
--

INSERT INTO `f_lock_screen_log` (`ls_ID`, `ls_page`, `ls_acc_ID`, `ls_timestamp`) VALUES
(1, 'co_entry_record.php', 2, '2019-04-26 11:47:31');

-- --------------------------------------------------------

--
-- Table structure for table `f_user_permission`
--

CREATE TABLE `f_user_permission` (
  `per_ID` int(10) NOT NULL,
  `per_user_ID` int(10) NOT NULL,
  `per_user_role` int(10) NOT NULL,
  `per_nav_ID` int(10) NOT NULL,
  `per_verdict` varchar(5) NOT NULL,
  `per_timestamp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `f_user_permission`
--

INSERT INTO `f_user_permission` (`per_ID`, `per_user_ID`, `per_user_role`, `per_nav_ID`, `per_verdict`, `per_timestamp`) VALUES
(1, 1, 1, 1, 'YES', '2019-03-10 19:40:42'),
(2, 1, 1, 2, 'YES', '2019-03-10 20:11:00'),
(3, 1, 1, 3, 'YES', '2019-03-10 20:13:00'),
(4, 1, 1, 4, 'YES', '2019-03-10 20:13:00'),
(5, 1, 1, 5, 'YES', '2019-03-10 20:13:00'),
(6, 1, 1, 6, 'YES', '2019-03-10 20:13:00'),
(7, 1, 1, 7, 'YES', '2019-03-10 20:13:00'),
(8, 1, 1, 8, 'YES', '2019-03-10 20:13:00'),
(9, 1, 1, 9, 'YES', '2019-03-16 07:01:47'),
(10, 1, 1, 10, 'YES', '2019-03-16 14:45:35'),
(11, 1, 1, 11, 'YES', '2019-03-16 14:46:42'),
(12, 2, 2, 1, 'YES', '2019-03-17 13:03:39'),
(13, 2, 2, 12, 'YES', '2019-03-17 01:10:23'),
(14, 2, 2, 13, 'NO', '2019-03-17 01:10:17'),
(15, 2, 2, 14, 'YES', '2019-03-17 18:24:25'),
(16, 2, 2, 18, 'YES', '2019-03-17 18:36:19'),
(17, 2, 2, 15, 'NO', '2019-04-17 05:02:18'),
(18, 2, 2, 17, 'YES', '2019-03-17 18:44:36'),
(19, 2, 2, 16, 'YES', '2019-03-17 18:44:36'),
(20, 2, 2, 19, 'YES', '2019-03-17 18:48:13'),
(21, 2, 2, 20, 'YES', '2019-03-17 18:48:13'),
(22, 2, 2, 22, 'YES', '2019-04-09 15:38:36'),
(24, 2, 2, 24, 'YES', '2019-04-09 16:55:17'),
(25, 2, 2, 25, 'YES', '2019-04-15 12:54:48'),
(26, 2, 2, 26, 'YES', '2019-04-15 13:29:54'),
(27, 2, 2, 27, 'YES', '2019-04-16 19:22:14'),
(28, 2, 2, 28, 'YES', '2019-04-16 19:22:14'),
(29, 2, 2, 29, 'YES', '2019-04-20 10:28:38'),
(30, 2, 2, 30, 'YES', '2019-04-21 09:05:20'),
(31, 2, 2, 13, 'YES', '2019-04-23 14:10:16'),
(32, 2, 2, 31, 'YES', '2019-04-23 14:12:10'),
(33, 2, 2, 15, 'YES', '2019-04-24 10:41:34');

-- --------------------------------------------------------

--
-- Table structure for table `r_deposit_account`
--

CREATE TABLE `r_deposit_account` (
  `dpac_ID` int(10) NOT NULL,
  `dpac_acc_no` varchar(20) NOT NULL,
  `dpac_bank` varchar(255) NOT NULL,
  `dpac_starting_count` int(10) NOT NULL,
  `dpac_mod_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `r_deposit_account`
--

INSERT INTO `r_deposit_account` (`dpac_ID`, `dpac_acc_no`, `dpac_bank`, `dpac_starting_count`, `dpac_mod_date`) VALUES
(1, '0682102047', 'LBP', 3, '2019-04-16');

-- --------------------------------------------------------

--
-- Table structure for table `r_fund_cluster`
--

CREATE TABLE `r_fund_cluster` (
  `fc_ID` int(10) NOT NULL,
  `fc_desc` varchar(100) NOT NULL,
  `fc_code` varchar(100) NOT NULL,
  `fc_stat` varchar(10) NOT NULL DEFAULT 'Active',
  `fc_timestamp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `r_fund_cluster`
--

INSERT INTO `r_fund_cluster` (`fc_ID`, `fc_desc`, `fc_code`, `fc_stat`, `fc_timestamp`) VALUES
(1, 'Special Trust Fund', '05 2 06 441 (164)', 'Active', '2019-03-17 09:32:08'),
(2, 'Regular Trust Fund', '5 02 06 441 (164)', 'Active', '2019-03-17 03:01:04');

-- --------------------------------------------------------

--
-- Table structure for table `r_navigation`
--

CREATE TABLE `r_navigation` (
  `nav_ID` int(10) NOT NULL,
  `nav_desc` varchar(100) NOT NULL,
  `nav_link` varchar(100) NOT NULL,
  `nav_class` varchar(50) NOT NULL,
  `nav_icon_class` varchar(100) DEFAULT NULL,
  `nav_parent` int(10) DEFAULT NULL,
  `nav_active_stat` varchar(10) NOT NULL DEFAULT 'Active',
  `nav_timestamp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `r_navigation`
--

INSERT INTO `r_navigation` (`nav_ID`, `nav_desc`, `nav_link`, `nav_class`, `nav_icon_class`, `nav_parent`, `nav_active_stat`, `nav_timestamp`) VALUES
(1, 'Dashboard', 'index.php', '', 'ion-speedometer bg-gradient-gray', NULL, 'Active', '2019-03-17 11:51:36'),
(2, 'User Management', '', 'has-sub', 'ion-person-add bg-blue', NULL, 'Active', '2019-03-10 19:55:00'),
(3, 'Create User', 'admin_user_create.php', 'sub-menu', NULL, 2, 'Active', '2019-03-10 19:57:00'),
(4, '', '', '', '', 0, 'Active', '2019-03-16 07:00:37'),
(5, 'Manage Accounts', 'admin_account_manage.php', 'sub-menu', NULL, 2, 'Active', '2019-03-10 20:02:00'),
(6, 'System Configurations', '', 'has-sub', 'ion-ios-gear  bg-gradient-aqua', NULL, 'Active', '2019-03-10 20:09:00'),
(7, 'Setup Navigation', 'admin_setup_nav.php', 'sub-menu', NULL, 6, 'Active', '2019-03-10 20:06:00'),
(8, 'Configure Permissions', 'admin_setup_permission.php', 'sub-menu', NULL, 6, 'Active', '2019-03-10 20:09:00'),
(9, 'Setup UACS', 'admin_setup_uacs.php', 'sub-menu', '', 6, 'Active', '2019-03-16 07:43:53'),
(10, 'Setup Fund Cluster', 'admin_setup_fund_cluster.php', 'sub-menu', '', 6, 'Active', '2019-03-16 07:44:21'),
(11, 'Setup UACS Type', 'admin_setup_uacs_type.php', 'sub-menu', '', 6, 'Active', '2019-03-16 07:43:31'),
(12, 'Add Collection', '', 'has-sub', 'fa fa-plus bg-gradient-green', NULL, 'Active', '2019-03-17 01:11:27'),
(13, 'Add Collection (Manual)', 'co_entry_record.php', 'sub-menu', '', 12, 'Active', '2019-03-17 01:08:15'),
(14, 'View Records', '', 'has-sub', 'fa fa-copy bg-gradient-blue', NULL, 'Active', '2019-03-17 11:37:31'),
(15, 'Cash Receipt Record', 'co_cash_receipt.php', 'sub-menu', '', 18, 'Active', '2019-04-24 04:47:07'),
(16, 'Certification', 'co_certification.php', 'sub-menu', '', 18, 'Active', '2019-03-17 11:31:41'),
(17, 'Accountable Forms', 'co_accountable_forms.php', 'sub-menu', '', 18, 'Active', '2019-04-15 10:11:30'),
(18, 'Collection Report', '', 'has-sub', 'fa fa-tasks bg-gradient-purple', NULL, 'Active', '2019-03-17 11:35:59'),
(19, 'Monthly Collection', 'co_monthly_collection.php', 'sub-menu', '', 18, 'Active', '2019-03-17 11:47:22'),
(20, 'Summary of Collection', 'co_summary_collection.php', 'sub-menu', '', 18, 'Active', '2019-03-17 11:47:49'),
(21, 'Cash Receipt Report', 'co_cash_report_collection.php', 'sub-menu', '', 18, 'Active', '2019-03-17 11:54:13'),
(22, 'View Receipts', 'co_view_receipt.php', 'sub-menu', '', 14, 'Active', '2019-04-09 09:38:07'),
(24, 'Review Receipts', 'co_review_receipt.php', 'none', '', 14, 'Active', '2019-04-09 10:55:06'),
(25, 'Deposits', '', 'has-sub', 'ion-archive bg-gradient-red', NULL, 'Active', '2019-04-15 06:54:27'),
(26, 'OR Setup', 'co_setup_or.php', 'has-sub', 'ion-ios-list bg-gradient-aqua', NULL, 'Active', '2019-04-15 07:31:50'),
(27, 'Pending', 'co_deposit_pending.php', 'sub-menu', '', 25, 'Active', '2019-04-16 01:20:16'),
(28, 'Deposited', 'co_deposit_done.php', 'sub-menu', '', 25, 'Active', '2019-04-16 01:20:48'),
(29, 'Create Accountable Form', 'co_create_accountable_form.php', 'none', NULL, 18, 'Active', '2019-04-20 04:28:23'),
(30, 'View Accountable Form', 'co_view_accountable_form.php', 'none', '', 18, 'Active', '2019-04-21 03:05:08'),
(31, 'Add Collection (Student)', 'co_entry_record_student.php', 'sub-menu', '', 12, 'Active', '2019-04-23 08:11:57');

-- --------------------------------------------------------

--
-- Table structure for table `r_official_receipt`
--

CREATE TABLE `r_official_receipt` (
  `or_ID` int(10) NOT NULL,
  `or_no` varchar(20) NOT NULL,
  `or_status` varchar(20) NOT NULL DEFAULT 'PENDING',
  `or_create_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `r_official_receipt`
--

INSERT INTO `r_official_receipt` (`or_ID`, `or_no`, `or_status`, `or_create_date`) VALUES
(1, '0306124', 'PAID', '2019-04-01'),
(2, '0306125', 'PAID', '2019-04-01'),
(3, '0306126', 'PAID', '2019-04-01'),
(4, '0306127', 'PAID', '2019-04-01'),
(5, '0306128', 'PAID', '2019-04-01'),
(6, '0306129', 'PAID', '2019-04-01'),
(7, '0306130', 'PAID', '2019-04-01'),
(8, '0306131', 'PENDING', '2019-04-01'),
(9, '0306132', 'PENDING', '2019-04-01'),
(10, '0306133', 'PENDING', '2019-04-01'),
(11, '0306134', 'PENDING', '2019-04-01'),
(12, '0306135', 'PENDING', '2019-04-01'),
(13, '0306136', 'PENDING', '2019-04-01'),
(14, '0306137', 'PENDING', '2019-04-01'),
(15, '0306138', 'PENDING', '2019-04-01'),
(16, '0306139', 'PENDING', '2019-04-01'),
(17, '0306140', 'PENDING', '2019-04-01'),
(18, '0306141', 'PENDING', '2019-04-01'),
(19, '0306142', 'PENDING', '2019-04-01'),
(20, '0306143', 'PENDING', '2019-04-01'),
(21, '0306144', 'PENDING', '2019-04-01'),
(22, '0306145', 'PENDING', '2019-04-01'),
(23, '0306146', 'PENDING', '2019-04-01'),
(24, '0306147', 'PENDING', '2019-04-01'),
(25, '0306148', 'PENDING', '2019-04-01'),
(26, '0306149', 'PENDING', '2019-04-01'),
(27, '0306150', 'PENDING', '2019-04-01'),
(28, '0306151', 'PENDING', '2019-04-01'),
(29, '0306152', 'PENDING', '2019-04-01'),
(30, '0306153', 'PENDING', '2019-04-01'),
(31, '0306154', 'PENDING', '2019-04-01'),
(32, '0306155', 'PENDING', '2019-04-01'),
(33, '0306156', 'PENDING', '2019-04-01'),
(34, '0306157', 'PENDING', '2019-04-01'),
(35, '0306158', 'PENDING', '2019-04-01'),
(36, '0306159', 'PENDING', '2019-04-01'),
(37, '0306160', 'PENDING', '2019-04-01'),
(38, '0306161', 'PENDING', '2019-04-01'),
(39, '0306162', 'PENDING', '2019-04-01'),
(40, '0306163', 'PENDING', '2019-04-01'),
(41, '0306164', 'PENDING', '2019-04-01'),
(42, '0306165', 'PENDING', '2019-04-01'),
(43, '0306166', 'PENDING', '2019-04-01'),
(44, '0306167', 'PENDING', '2019-04-01'),
(45, '0306168', 'PENDING', '2019-04-01'),
(46, '0306169', 'PENDING', '2019-04-01'),
(47, '0306170', 'PENDING', '2019-04-01'),
(48, '0306171', 'PENDING', '2019-04-01'),
(49, '0306172', 'PENDING', '2019-04-01'),
(50, '0306173', 'PENDING', '2019-04-01'),
(51, '0306174', 'PENDING', '2019-04-01'),
(52, '0306175', 'PENDING', '2019-04-01'),
(53, '0306176', 'PENDING', '2019-04-01'),
(54, '0306177', 'PENDING', '2019-04-01'),
(55, '0306178', 'PENDING', '2019-04-01'),
(56, '0306179', 'PENDING', '2019-04-01'),
(57, '0306180', 'PENDING', '2019-04-01'),
(58, '0306181', 'PENDING', '2019-04-01'),
(59, '0306182', 'PENDING', '2019-04-01'),
(60, '0306183', 'PENDING', '2019-04-01'),
(61, '0306184', 'PENDING', '2019-04-01'),
(62, '0306185', 'PENDING', '2019-04-01'),
(63, '0306186', 'PENDING', '2019-04-01'),
(64, '0306187', 'PENDING', '2019-04-01'),
(65, '0306188', 'PENDING', '2019-04-01'),
(66, '0306189', 'PENDING', '2019-04-01'),
(67, '0306190', 'PENDING', '2019-04-01'),
(68, '0306191', 'PENDING', '2019-04-01'),
(69, '0306192', 'PENDING', '2019-04-01'),
(70, '0306193', 'PENDING', '2019-04-01'),
(71, '0306194', 'PENDING', '2019-04-01'),
(72, '0306195', 'PENDING', '2019-04-01'),
(73, '0306196', 'PENDING', '2019-04-01'),
(74, '0306197', 'PENDING', '2019-04-01'),
(75, '0306198', 'PENDING', '2019-04-01'),
(76, '0306199', 'PENDING', '2019-04-01'),
(77, '0306200', 'PENDING', '2019-04-01'),
(78, '0306201', 'PENDING', '2019-04-01'),
(79, '0306202', 'PENDING', '2019-04-01'),
(80, '0306203', 'PENDING', '2019-04-01'),
(81, '0306204', 'PENDING', '2019-04-01'),
(82, '0306205', 'PENDING', '2019-04-01'),
(83, '0306206', 'PENDING', '2019-04-01'),
(84, '0306207', 'PENDING', '2019-04-01'),
(85, '0306208', 'PENDING', '2019-04-01'),
(86, '0306209', 'PENDING', '2019-04-01'),
(87, '0306210', 'PENDING', '2019-04-01'),
(88, '0306211', 'PENDING', '2019-04-01'),
(89, '0306212', 'PENDING', '2019-04-01'),
(90, '0306213', 'PENDING', '2019-04-01'),
(91, '0306214', 'PENDING', '2019-04-01'),
(92, '0306215', 'PENDING', '2019-04-01'),
(93, '0306216', 'PENDING', '2019-04-01'),
(94, '0306217', 'PENDING', '2019-04-01'),
(95, '0306218', 'PENDING', '2019-04-01'),
(96, '0306219', 'PENDING', '2019-04-01'),
(97, '0306220', 'PENDING', '2019-04-01'),
(98, '0306221', 'PENDING', '2019-04-01'),
(99, '0306222', 'PENDING', '2019-04-01'),
(100, '0306223', 'PENDING', '2019-04-01'),
(101, '0306224', 'PENDING', '2019-04-01'),
(102, '0306225', 'PENDING', '2019-04-01'),
(103, '0306226', 'PENDING', '2019-04-01'),
(104, '0306227', 'PENDING', '2019-04-01'),
(105, '0306228', 'PENDING', '2019-04-01'),
(106, '0306229', 'PENDING', '2019-04-01'),
(107, '0306230', 'PENDING', '2019-04-01'),
(108, '0306231', 'PENDING', '2019-04-01'),
(109, '0306232', 'PENDING', '2019-04-01'),
(110, '0306233', 'PENDING', '2019-04-01'),
(111, '0306234', 'PENDING', '2019-04-01'),
(112, '0306235', 'PENDING', '2019-04-01'),
(113, '0306236', 'PENDING', '2019-04-01'),
(114, '0306237', 'PENDING', '2019-04-01'),
(115, '0306238', 'PENDING', '2019-04-01'),
(116, '0306239', 'PENDING', '2019-04-01'),
(117, '0306240', 'PENDING', '2019-04-01'),
(118, '0306241', 'PENDING', '2019-04-01'),
(119, '0306242', 'PENDING', '2019-04-01'),
(120, '0306243', 'PENDING', '2019-04-01'),
(121, '0306244', 'PENDING', '2019-04-01'),
(122, '0306245', 'PENDING', '2019-04-01'),
(123, '0306246', 'PENDING', '2019-04-01'),
(124, '0306247', 'PENDING', '2019-04-01'),
(125, '0306248', 'PENDING', '2019-04-01'),
(126, '0306249', 'PENDING', '2019-04-01'),
(127, '0306250', 'PENDING', '2019-04-01'),
(128, '0306251', 'PENDING', '2019-04-01'),
(129, '0306252', 'PENDING', '2019-04-01'),
(130, '0306253', 'PENDING', '2019-04-01'),
(131, '0306254', 'PENDING', '2019-04-01'),
(132, '0306255', 'PENDING', '2019-04-01'),
(133, '0306256', 'PENDING', '2019-04-01'),
(134, '0306257', 'PENDING', '2019-04-01'),
(135, '0306258', 'PENDING', '2019-04-01'),
(136, '0306259', 'PENDING', '2019-04-01'),
(137, '0306260', 'PENDING', '2019-04-01'),
(138, '0306261', 'PENDING', '2019-04-01'),
(139, '0306262', 'PENDING', '2019-04-01'),
(140, '0306263', 'PENDING', '2019-04-01'),
(141, '0306264', 'PENDING', '2019-04-01'),
(142, '0306265', 'PENDING', '2019-04-01'),
(143, '0306266', 'PENDING', '2019-04-01'),
(144, '0306267', 'PENDING', '2019-04-01'),
(145, '0306268', 'PENDING', '2019-04-01'),
(146, '0306269', 'PENDING', '2019-04-01'),
(147, '0306270', 'PENDING', '2019-04-01'),
(148, '0306271', 'PENDING', '2019-04-01'),
(149, '0306272', 'PENDING', '2019-04-01'),
(150, '0306273', 'PENDING', '2019-04-01'),
(151, '0306274', 'PENDING', '2019-04-01'),
(152, '0306275', 'PENDING', '2019-04-01'),
(153, '0306276', 'PENDING', '2019-04-01'),
(154, '0306277', 'PENDING', '2019-04-01'),
(155, '0306278', 'PENDING', '2019-04-01'),
(156, '0306279', 'PENDING', '2019-04-01'),
(157, '0306280', 'PENDING', '2019-04-01'),
(158, '0306281', 'PENDING', '2019-04-01'),
(159, '0306282', 'PENDING', '2019-04-01'),
(160, '0306283', 'PENDING', '2019-04-01'),
(161, '0306284', 'PENDING', '2019-04-01'),
(162, '0306285', 'PENDING', '2019-04-01'),
(163, '0306286', 'PENDING', '2019-04-01'),
(164, '0306287', 'PENDING', '2019-04-01'),
(165, '0306288', 'PENDING', '2019-04-01'),
(166, '0306289', 'PENDING', '2019-04-01'),
(167, '0306290', 'PENDING', '2019-04-01'),
(168, '0306291', 'PENDING', '2019-04-01'),
(169, '0306292', 'PENDING', '2019-04-01'),
(170, '0306293', 'PENDING', '2019-04-01'),
(171, '0306294', 'PENDING', '2019-04-01'),
(172, '0306295', 'PENDING', '2019-04-01'),
(173, '0306296', 'PENDING', '2019-04-01'),
(174, '0306297', 'PENDING', '2019-04-01'),
(175, '0306298', 'PENDING', '2019-04-01'),
(176, '0306299', 'PENDING', '2019-04-01'),
(177, '0306300', 'PENDING', '2019-04-01'),
(178, '0306301', 'PENDING', '2019-04-01'),
(179, '0306302', 'PENDING', '2019-04-01'),
(180, '0306303', 'PENDING', '2019-04-01'),
(181, '0306304', 'PENDING', '2019-04-01'),
(182, '0306305', 'PENDING', '2019-04-01'),
(183, '0306306', 'PENDING', '2019-04-01'),
(184, '0306307', 'PENDING', '2019-04-01'),
(185, '0306308', 'PENDING', '2019-04-01'),
(186, '0306309', 'PENDING', '2019-04-01'),
(187, '0306310', 'PENDING', '2019-04-01'),
(188, '0306311', 'PENDING', '2019-04-01'),
(189, '0306312', 'PENDING', '2019-04-01'),
(190, '0306313', 'PENDING', '2019-04-01'),
(191, '0306314', 'PENDING', '2019-04-01'),
(192, '0306315', 'PENDING', '2019-04-01'),
(193, '0306316', 'PENDING', '2019-04-01'),
(194, '0306317', 'PENDING', '2019-04-01'),
(195, '0306318', 'PENDING', '2019-04-01'),
(196, '0306319', 'PENDING', '2019-04-01'),
(197, '0306320', 'PENDING', '2019-04-01'),
(198, '0306321', 'PENDING', '2019-04-01'),
(199, '0306322', 'PENDING', '2019-04-01'),
(200, '0306323', 'PENDING', '2019-04-01'),
(201, '0306324', 'PENDING', '2019-04-01'),
(202, '0306325', 'PENDING', '2019-04-01'),
(203, '0306326', 'PENDING', '2019-04-01'),
(204, '0306327', 'PENDING', '2019-04-01'),
(205, '0306328', 'PENDING', '2019-04-01'),
(206, '0306329', 'PENDING', '2019-04-01'),
(207, '0306330', 'PENDING', '2019-04-01'),
(208, '0306331', 'PENDING', '2019-04-01'),
(209, '0306332', 'PENDING', '2019-04-01'),
(210, '0306333', 'PENDING', '2019-04-01'),
(211, '0306334', 'PENDING', '2019-04-01'),
(212, '0306335', 'PENDING', '2019-04-01'),
(213, '0306336', 'PENDING', '2019-04-01'),
(214, '0306337', 'PENDING', '2019-04-01'),
(215, '0306338', 'PENDING', '2019-04-01'),
(216, '0306339', 'PENDING', '2019-04-01'),
(217, '0306340', 'PENDING', '2019-04-01'),
(218, '0306341', 'PENDING', '2019-04-01'),
(219, '0306342', 'PENDING', '2019-04-01'),
(220, '0306343', 'PENDING', '2019-04-01'),
(221, '0306344', 'PENDING', '2019-04-01'),
(222, '0306345', 'PENDING', '2019-04-01'),
(223, '0306346', 'PENDING', '2019-04-01'),
(224, '0306347', 'PENDING', '2019-04-01'),
(225, '0306348', 'PENDING', '2019-04-01'),
(226, '0306349', 'PENDING', '2019-04-01'),
(227, '0306350', 'PENDING', '2019-04-01'),
(228, '0306351', 'PENDING', '2019-04-01'),
(229, '0306352', 'PENDING', '2019-04-01'),
(230, '0306353', 'PENDING', '2019-04-01'),
(231, '0306354', 'PENDING', '2019-04-01'),
(232, '0306355', 'PENDING', '2019-04-01'),
(233, '0306356', 'PENDING', '2019-04-01'),
(234, '0306357', 'PENDING', '2019-04-01'),
(235, '0306358', 'PENDING', '2019-04-01'),
(236, '0306359', 'PENDING', '2019-04-01'),
(237, '0306360', 'PENDING', '2019-04-01'),
(238, '0306361', 'PENDING', '2019-04-01'),
(239, '0306362', 'PENDING', '2019-04-01'),
(240, '0306363', 'PENDING', '2019-04-01'),
(241, '0306364', 'PENDING', '2019-04-01'),
(242, '0306365', 'PENDING', '2019-04-01'),
(243, '0306366', 'PENDING', '2019-04-01'),
(244, '0306367', 'PENDING', '2019-04-01'),
(245, '0306368', 'PENDING', '2019-04-01'),
(246, '0306369', 'PENDING', '2019-04-01'),
(247, '0306370', 'PENDING', '2019-04-01'),
(248, '0306371', 'PENDING', '2019-04-01'),
(249, '0306372', 'PENDING', '2019-04-01'),
(250, '0306373', 'PENDING', '2019-04-01'),
(251, '0306374', 'PENDING', '2019-04-01'),
(252, '0306375', 'PENDING', '2019-04-01'),
(253, '0306376', 'PENDING', '2019-04-01'),
(254, '0306377', 'PENDING', '2019-04-01'),
(255, '0306378', 'PENDING', '2019-04-01'),
(256, '0306379', 'PENDING', '2019-04-01'),
(257, '0306380', 'PENDING', '2019-04-01'),
(258, '0306381', 'PENDING', '2019-04-01'),
(259, '0306382', 'PENDING', '2019-04-01'),
(260, '0306383', 'PENDING', '2019-04-01'),
(261, '0306384', 'PENDING', '2019-04-01'),
(262, '0306385', 'PENDING', '2019-04-01'),
(263, '0306386', 'PENDING', '2019-04-01'),
(264, '0306387', 'PENDING', '2019-04-01'),
(265, '0306388', 'PENDING', '2019-04-01'),
(266, '0306389', 'PENDING', '2019-04-01'),
(267, '0306390', 'PENDING', '2019-04-01'),
(268, '0306391', 'PENDING', '2019-04-01'),
(269, '0306392', 'PENDING', '2019-04-01'),
(270, '0306393', 'PENDING', '2019-04-01'),
(271, '0306394', 'PENDING', '2019-04-01'),
(272, '0306395', 'PENDING', '2019-04-01'),
(273, '0306396', 'PENDING', '2019-04-01'),
(274, '0306397', 'PENDING', '2019-04-01'),
(275, '0306398', 'PENDING', '2019-04-01'),
(276, '0306399', 'PENDING', '2019-04-01'),
(277, '0306400', 'PENDING', '2019-04-01'),
(278, '0306401', 'PENDING', '2019-04-01'),
(279, '0306402', 'PENDING', '2019-04-01'),
(280, '0306403', 'PENDING', '2019-04-01'),
(281, '0306404', 'PENDING', '2019-04-01'),
(282, '0306405', 'PENDING', '2019-04-01'),
(283, '0306406', 'PENDING', '2019-04-01'),
(284, '0306407', 'PENDING', '2019-04-01'),
(285, '0306408', 'PENDING', '2019-04-01'),
(286, '0306409', 'PENDING', '2019-04-01'),
(287, '0306410', 'PENDING', '2019-04-01'),
(288, '0306411', 'PENDING', '2019-04-01'),
(289, '0306412', 'PENDING', '2019-04-01'),
(290, '0306413', 'PENDING', '2019-04-01'),
(291, '0306414', 'PENDING', '2019-04-01'),
(292, '0306415', 'PENDING', '2019-04-01'),
(293, '0306416', 'PENDING', '2019-04-01'),
(294, '0306417', 'PENDING', '2019-04-01'),
(295, '0306418', 'PENDING', '2019-04-01'),
(296, '0306419', 'PENDING', '2019-04-01'),
(297, '0306420', 'PENDING', '2019-04-01'),
(298, '0306421', 'PENDING', '2019-04-01'),
(299, '0306422', 'PENDING', '2019-04-01'),
(300, '0306423', 'PENDING', '2019-04-01'),
(301, '0306424', 'PENDING', '2019-04-01'),
(302, '0306425', 'PENDING', '2019-04-01'),
(303, '0306426', 'PENDING', '2019-04-01'),
(304, '0306427', 'PENDING', '2019-04-01'),
(305, '0306428', 'PENDING', '2019-04-01'),
(306, '0306429', 'PENDING', '2019-04-01'),
(307, '0306430', 'PENDING', '2019-04-01'),
(308, '0306431', 'PENDING', '2019-04-01'),
(309, '0306432', 'PENDING', '2019-04-01'),
(310, '0306433', 'PENDING', '2019-04-01'),
(311, '0306434', 'PENDING', '2019-04-01'),
(312, '0306435', 'PENDING', '2019-04-01'),
(313, '0306436', 'PENDING', '2019-04-01'),
(314, '0306437', 'PENDING', '2019-04-01'),
(315, '0306438', 'PENDING', '2019-04-01'),
(316, '0306439', 'PENDING', '2019-04-01'),
(317, '0306440', 'PENDING', '2019-04-01'),
(318, '0306441', 'PENDING', '2019-04-01'),
(319, '0306442', 'PENDING', '2019-04-01'),
(320, '0306443', 'PENDING', '2019-04-01'),
(321, '0306444', 'PENDING', '2019-04-01'),
(322, '0306445', 'PENDING', '2019-04-01'),
(323, '0306446', 'PENDING', '2019-04-01'),
(324, '0306447', 'PENDING', '2019-04-01'),
(325, '0306448', 'PENDING', '2019-04-01'),
(326, '0306449', 'PENDING', '2019-04-01'),
(327, '0306450', 'PENDING', '2019-04-01'),
(328, '0306451', 'PENDING', '2019-04-01'),
(329, '0306452', 'PENDING', '2019-04-01'),
(330, '0306453', 'PENDING', '2019-04-01'),
(331, '0306454', 'PENDING', '2019-04-01'),
(332, '0306455', 'PENDING', '2019-04-01'),
(333, '0306456', 'PENDING', '2019-04-01'),
(334, '0306457', 'PENDING', '2019-04-01'),
(335, '0306458', 'PENDING', '2019-04-01'),
(336, '0306459', 'PENDING', '2019-04-01'),
(337, '0306460', 'PENDING', '2019-04-01'),
(338, '0306461', 'PENDING', '2019-04-01'),
(339, '0306462', 'PENDING', '2019-04-01'),
(340, '0306463', 'PENDING', '2019-04-01'),
(341, '0306464', 'PENDING', '2019-04-01'),
(342, '0306465', 'PENDING', '2019-04-01'),
(343, '0306466', 'PENDING', '2019-04-01'),
(344, '0306467', 'PENDING', '2019-04-01'),
(345, '0306468', 'PENDING', '2019-04-01'),
(346, '0306469', 'PENDING', '2019-04-01'),
(347, '0306470', 'PENDING', '2019-04-01'),
(348, '0306471', 'PENDING', '2019-04-01'),
(349, '0306472', 'PENDING', '2019-04-01'),
(350, '0306473', 'PENDING', '2019-04-01'),
(351, '0306474', 'PENDING', '2019-04-01'),
(352, '0306475', 'PENDING', '2019-04-01'),
(353, '0306476', 'PENDING', '2019-04-01'),
(354, '0306477', 'PENDING', '2019-04-01'),
(355, '0306478', 'PENDING', '2019-04-01'),
(356, '0306479', 'PENDING', '2019-04-01'),
(357, '0306480', 'PENDING', '2019-04-01'),
(358, '0306481', 'PENDING', '2019-04-01'),
(359, '0306482', 'PENDING', '2019-04-01'),
(360, '0306483', 'PENDING', '2019-04-01'),
(361, '0306484', 'PENDING', '2019-04-01'),
(362, '0306485', 'PENDING', '2019-04-01'),
(363, '0306486', 'PENDING', '2019-04-01'),
(364, '0306487', 'PENDING', '2019-04-01'),
(365, '0306488', 'PENDING', '2019-04-01'),
(366, '0306489', 'PENDING', '2019-04-01'),
(367, '0306490', 'PENDING', '2019-04-01'),
(368, '0306491', 'PENDING', '2019-04-01'),
(369, '0306492', 'PENDING', '2019-04-01'),
(370, '0306493', 'PENDING', '2019-04-01'),
(371, '0306494', 'PENDING', '2019-04-01'),
(372, '0306495', 'PENDING', '2019-04-01'),
(373, '0306496', 'PENDING', '2019-04-01'),
(374, '0306497', 'PENDING', '2019-04-01'),
(375, '0306498', 'PENDING', '2019-04-01'),
(376, '0306499', 'PENDING', '2019-04-01'),
(377, '0306500', 'PENDING', '2019-04-01');

-- --------------------------------------------------------

--
-- Table structure for table `r_payor_type`
--

CREATE TABLE `r_payor_type` (
  `pyt_ID` int(10) NOT NULL,
  `pyt_desc` varchar(30) NOT NULL,
  `pyt_timestamp` datetime NOT NULL,
  `pyt_active_stat` varchar(10) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `r_payor_type`
--

INSERT INTO `r_payor_type` (`pyt_ID`, `pyt_desc`, `pyt_timestamp`, `pyt_active_stat`) VALUES
(1, 'Individual', '2019-04-26 10:00:00', 'Active'),
(2, 'Company', '2019-04-26 10:00:00', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `r_uacs`
--

CREATE TABLE `r_uacs` (
  `uacs_ID` int(10) NOT NULL,
  `uacs_acc_title` varchar(100) NOT NULL,
  `uacs_type` int(10) NOT NULL,
  `uacs_acc_code_old` varchar(255) NOT NULL,
  `uacs_acc_code_new` varchar(255) NOT NULL,
  `uacs_fund_cluster` int(10) NOT NULL,
  `uac_amount` decimal(10,0) DEFAULT NULL,
  `uacs_acc_stat` varchar(10) NOT NULL DEFAULT 'Active',
  `uacs_acc_timestamp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `r_uacs`
--

INSERT INTO `r_uacs` (`uacs_ID`, `uacs_acc_title`, `uacs_type`, `uacs_acc_code_old`, `uacs_acc_code_new`, `uacs_fund_cluster`, `uac_amount`, `uacs_acc_stat`, `uacs_acc_timestamp`) VALUES
(1, 'Clearance and Certification Fee', 1, '613', '4 02 01 040 00 00000', 1, '150', 'Active', '2019-03-18 15:46:55'),
(2, 'Fines and Penalties-Service In', 1, '629', '4 02 01 140 00 00000', 1, '300', 'Active', '2019-03-18 15:46:56'),
(3, 'ID', 3, '628A', '4 02 01 990 99 00001', 1, NULL, 'Active', '2019-03-18 15:46:56'),
(4, 'Entrance Fees', 3, '628B', '4 02 01 990 99 00002', 1, NULL, 'Active', '2019-03-18 15:46:56'),
(5, 'English Test', 3, '628b1', '4 02 01 990 99 00003', 1, NULL, 'Active', '2019-03-18 15:46:56'),
(6, 'Module', 3, '628C', '4 02 01 990 99 00004', 1, NULL, 'Active', '2019-03-18 15:46:56'),
(7, 'NSTP Module', 3, '628C1', '4 02 01 990 99 00005', 1, NULL, 'Active', '2019-03-18 15:46:56'),
(8, 'Graduate Forum', 3, '628C2', '4 02 01 990 99 00006', 1, NULL, 'Active', '2019-03-18 15:46:56'),
(9, 'Publication', 3, '628C5', '4 02 01 990 99 00007', 1, NULL, 'Active', '2019-03-18 15:46:56'),
(10, 'Income from IT', 3, '628D', '4 02 01 990 99 00008', 1, NULL, 'Active', '2019-03-18 15:53:16'),
(11, 'Registration', 3, '628E', '4 02 01 990 99 00009', 1, NULL, 'Active', '2019-03-18 15:53:16'),
(12, 'Permit fee', 3, '628J', '4 02 01 990 99 00020', 1, NULL, 'Active', '2019-03-18 15:53:16'),
(13, 'Duplicate', 3, '628K1', '4 02 01 990 99 00021', 1, NULL, 'Active', '2019-03-18 15:53:16'),
(14, 'HD', 3, '628K2', '4 02 01 990 99 00022', 1, NULL, 'Active', '2019-03-18 15:53:16'),
(15, 'Completion', 3, '628K3', '4 02 01 990 99 00023', 1, NULL, 'Active', '2019-03-18 15:53:16'),
(16, 'Readmission', 3, '628K4', '4 02 01 990 99 00024', 1, NULL, 'Active', '2019-03-18 15:53:16'),
(17, 'Retrieval', 3, '628K5', '4 02 01 990 99 00025', 1, NULL, 'Active', '2019-03-18 15:53:16'),
(18, 'Handbook', 3, '628K6', '4 02 01 990 99 00026', 1, NULL, 'Active', '2019-03-18 15:53:16'),
(19, 'Scannable', 3, '628K7', '4 02 01 990 99 00027', 1, NULL, 'Active', '2019-03-18 15:53:16'),
(20, 'Change Subject ', 3, '628K8', '4 02 01 990 99 00028', 1, NULL, 'Active', '2019-03-18 15:53:16'),
(21, 'Accreditation', 3, '628K9', '4 02 01 990 99 00029', 1, NULL, 'Active', '2019-03-18 15:53:16'),
(22, 'Evaluation', 3, '628K10', '4 02 01 990 99 00030', 1, NULL, 'Active', '2019-03-18 15:53:16'),
(23, 'Guidance fee', 3, '628K11', '4 02 01 990 99 00031', 1, NULL, 'Active', '2019-03-18 15:53:16'),
(24, 'Psychological Exam', 3, '628K12', '4 02 01 990 99 00032', 1, NULL, 'Active', '2019-03-18 15:53:16'),
(25, 'Developmental Fee', 3, '628L', '4 02 01 990 99 00033', 1, NULL, 'Active', '2019-03-18 16:06:11'),
(26, 'SIS', 3, '628L1', '4 02 01 990 99 00034', 1, NULL, 'Active', '2019-03-18 16:06:11'),
(27, 'ITD', 3, '628L2', '4 02 01 990 99 00035', 1, NULL, 'Active', '2019-03-18 16:06:11'),
(28, 'Authentication Fee', 3, '628M', '4 02 01 990 99 00036', 1, NULL, 'Active', '2019-03-18 16:06:11'),
(29, 'Sports Development', 3, '628N', '4 02 01 990 99 00037', 1, NULL, 'Active', '2019-03-18 16:06:11'),
(30, 'Deposit', 3, '628P', '4 02 01 990 99 00038', 1, NULL, 'Active', '2019-03-18 16:06:11'),
(31, 'PUP Sponsor Seminar', 3, '628O', '4 02 01 990 99 00039', 1, NULL, 'Active', '2019-03-18 16:06:12'),
(32, 'Energy Fee', 3, '628S', '4 02 01 990 99 00041', 1, NULL, 'Active', '2019-03-18 16:06:12'),
(33, 'Tutorial', 3, '628T', '4 02 01 990 99 00042', 1, NULL, 'Active', '2019-03-18 16:06:12'),
(34, 'Memorabilia', 3, '628U', '4 02 01 990 99 00043', 1, NULL, 'Active', '2019-03-18 16:06:12'),
(35, 'Verification', 3, '628V', '4 02 01 990 99 00044', 1, NULL, 'Active', '2019-03-18 16:06:12'),
(36, 'Statistical Consultancy', 3, '628D2', '4 02 01 990 99 00048', 1, NULL, 'Active', '2019-03-18 16:06:12'),
(37, 'Master Statistical consultancy', 3, '628D1', '4 02 01 990 99 00049', 1, NULL, 'Active', '2019-03-18 16:06:12'),
(38, 'Research Journal', 3, '628C3', '4 02 01 990 99 00050', 1, NULL, 'Active', '2019-03-18 16:06:12'),
(39, 'NSTP Program', 3, '628X', '4 02 01 990 99 00051', 1, NULL, 'Active', '2019-03-18 16:06:12'),
(40, 'Cultural Fees', 3, '612', '4 02 02 010 99 00001', 1, NULL, 'Active', '2019-03-18 16:15:17'),
(41, 'Athletic fees', 3, '612A', '4 02 02 010 99 00002', 1, NULL, 'Active', '2019-03-18 16:15:17'),
(42, 'Athletic Development fees', 3, '612B', '4 02 02 010 99 00003', 1, NULL, 'Active', '2019-03-18 16:15:18'),
(43, 'Diploma', 3, '615', '4 02 02 010 99 00004', 1, NULL, 'Active', '2019-03-18 16:15:18'),
(44, 'Graduation Fee', 3, '615A', '4 02 02 010 99 00005', 1, NULL, 'Active', '2019-03-18 16:15:18'),
(45, 'Library Fees', 3, '618', '4 02 02 010 99 00006', 1, NULL, 'Active', '2019-03-18 16:15:18'),
(46, 'Medical, Dental', 3, '619A', '4 02 02 010 99 00007', 1, NULL, 'Active', '2019-03-18 16:15:18'),
(47, 'Laboratory Fee', 3, '619', '4 02 02 010 99 00008', 1, NULL, 'Active', '2019-03-18 16:15:18'),
(48, 'Transcript of Records Fee', 3, '624', '4 02 02 010 99 00009', 1, NULL, 'Active', '2019-03-18 16:15:18'),
(49, 'Transcript of Records Fee (Scanned Photo)', 3, '624A', '4 02 02 010 99 00010', 1, NULL, 'Active', '2019-03-18 16:15:18'),
(50, 'Tuition Fees', 2, '644', '4 02 02 010 01 00000', 1, NULL, 'Active', '2019-03-18 16:23:40'),
(51, 'Tuition Fees NSTP', 2, '644A', '4 02 02 010 01 00001', 1, NULL, 'Active', '2019-03-18 16:23:40'),
(52, 'Tuition Fees Dollar', 2, '644C', '4 02 02 010 01 00002', 1, NULL, 'Active', '2019-03-18 16:23:40'),
(53, 'Comprehensive Examination Fee', 2, '614', '4 02 02 030 00 00000', 1, NULL, 'Active', '2019-03-18 16:23:40'),
(54, 'Rent Income/Canteen', 2, '642', '4 02 02 050 00 00000', 1, NULL, 'Active', '2019-03-18 16:23:40'),
(55, 'Rental', 2, '642', '4 02 02 050 00 00001', 1, NULL, 'Active', '2019-03-18 16:23:40'),
(56, 'Electricity', 2, '642B3', '4 02 02 050 00 00005', 1, NULL, 'Active', '2019-03-18 16:23:40'),
(57, 'Facilities', 2, '642C', '4 02 02 050 00 00006', 1, NULL, 'Active', '2019-03-18 16:23:40'),
(58, 'Book Rental', 2, '642D', '4 02 02 050 00 00007', 1, NULL, 'Active', '2019-03-18 16:23:40'),
(59, 'Miscellaneous', 2, '642G', '4 02 02 050 00 00007', 1, NULL, 'Active', '2019-03-18 16:23:40'),
(60, 'Communication Income', 2, '634', '4 02 02 060 00 00000', 1, NULL, 'Active', '2019-03-18 16:23:41'),
(61, 'Interest Income', 2, '634', '4 02 02 210 99 00000', 1, NULL, 'Active', '2019-03-18 16:23:41'),
(62, 'Fines and Penalties-Bus. Inc.', 2, '649', '4 02 02 230 00 00000', 1, NULL, 'Active', '2019-03-18 16:23:41'),
(63, 'Photo', 4, '648A', '4 02 02 990 99 00001', 1, NULL, 'Active', '2019-03-18 16:28:36'),
(64, 'Sticker', 4, '648C', '4 02 02 990 99 00002', 1, NULL, 'Active', '2019-03-18 16:28:36'),
(65, 'Toga', 4, '648D', '4 02 02 990 99 00003', 1, NULL, 'Active', '2019-03-18 16:28:36'),
(66, 'Books', 4, '648k', '4 02 02 990 99 00004', 1, NULL, 'Active', '2019-03-18 16:28:36'),
(67, 'Medical Exam', 4, '628D1', '4 02 02 990 99 00005', 1, NULL, 'Active', '2019-03-18 16:28:36'),
(68, 'PE Uniform', 4, '648E', '4 02 02 990 99 00006', 1, NULL, 'Active', '2019-03-18 16:28:36'),
(69, 'School Uniform', 4, '648E4', '4 02 02 990 99 00007', 1, NULL, 'Active', '2019-03-18 16:28:36'),
(70, 'School Uniform Senior High', 4, '648E4', '4 02 02 990 99 00008', 1, NULL, 'Active', '2019-03-18 16:28:36'),
(71, 'Other Payable', 4, '439', '2 99 99 990 00 00000', 2, NULL, 'Active', '2019-03-18 16:28:36');

-- --------------------------------------------------------

--
-- Table structure for table `r_uacs_type`
--

CREATE TABLE `r_uacs_type` (
  `uacs_type_ID` int(10) NOT NULL,
  `uacs_type_name` varchar(100) NOT NULL,
  `uacs_stat` varchar(10) NOT NULL DEFAULT 'Active',
  `uacs_timestamp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `r_uacs_type`
--

INSERT INTO `r_uacs_type` (`uacs_type_ID`, `uacs_type_name`, `uacs_stat`, `uacs_timestamp`) VALUES
(1, 'Service Income', 'Active', '2019-03-17 03:23:22'),
(2, 'Business Income', 'Active', '2019-03-18 08:40:05'),
(3, 'Other Service Income', 'Active', '2019-03-18 08:40:13'),
(4, 'Other Business Income', 'Active', '2019-03-18 08:40:21');

-- --------------------------------------------------------

--
-- Table structure for table `r_user_role`
--

CREATE TABLE `r_user_role` (
  `usr_ID` int(10) NOT NULL,
  `usr_desc` varchar(50) NOT NULL,
  `usr_stat` bit(1) NOT NULL,
  `usr_timestamp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `r_user_role`
--

INSERT INTO `r_user_role` (`usr_ID`, `usr_desc`, `usr_stat`, `usr_timestamp`) VALUES
(1, 'Administrator', b'1', '2019-03-10 19:37:31'),
(2, 'Collection Officer', b'1', '2019-03-16 12:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `t_accountable_forms_fv`
--

CREATE TABLE `t_accountable_forms_fv` (
  `af_fv_ID` int(10) NOT NULL,
  `af_fv_no` varchar(10) NOT NULL,
  `af_fv_face_value` int(10) NOT NULL,
  `af_fv_bb_qty` int(10) NOT NULL,
  `af_fv_bb_from` varchar(20) NOT NULL,
  `af_fv_bb_to` varchar(20) NOT NULL,
  `af_fv_rec_qty` int(10) DEFAULT NULL,
  `af_fv_rec_from` varchar(20) DEFAULT NULL,
  `af_fv_rec_to` varchar(20) DEFAULT NULL,
  `af_fv_iss_qty` int(10) NOT NULL,
  `af_fv_iss_from` varchar(20) NOT NULL,
  `af_fv_iss_to` varchar(20) NOT NULL,
  `af_fv_eb_qty` int(10) DEFAULT NULL,
  `af_fv_eb_from` varchar(20) NOT NULL,
  `af_fv_eb_to` varchar(20) NOT NULL,
  `af_fv_person_in_charge` int(10) NOT NULL,
  `af_fv_datestamp` date NOT NULL,
  `af_fv_active_stat` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_accountable_forms_wfv`
--

CREATE TABLE `t_accountable_forms_wfv` (
  `af_wfv_ID` int(10) NOT NULL,
  `af_wfv_no` varchar(10) NOT NULL,
  `af_wfv_bb_qty` int(10) NOT NULL,
  `af_wfv_bb_from` varchar(20) NOT NULL,
  `af_wfv_bb_to` varchar(20) NOT NULL,
  `af_wfv_rec_qty` int(10) DEFAULT NULL,
  `af_wfv_rec_from` varchar(20) DEFAULT NULL,
  `af_wfv_rec_to` varchar(20) DEFAULT NULL,
  `af_wfv_iss_qty` int(10) NOT NULL,
  `af_wfv_iss_from` varchar(20) NOT NULL,
  `af_wfv_iss_to` varchar(20) NOT NULL,
  `af_wfv_eb_qty` int(10) DEFAULT NULL,
  `af_wfv_eb_from` varchar(20) NOT NULL,
  `af_wfv_eb_to` varchar(20) NOT NULL,
  `af_wfv_person_in_charge` int(10) NOT NULL,
  `af_wfv_datestamp` date NOT NULL,
  `af_wfv_active_stat` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_accounts`
--

CREATE TABLE `t_accounts` (
  `acc_ID` int(10) NOT NULL,
  `acc_empID` int(10) NOT NULL,
  `acc_username` varchar(100) NOT NULL,
  `acc_password` varchar(100) NOT NULL,
  `acc_user_role` int(10) NOT NULL,
  `acc_email` varchar(100) NOT NULL,
  `acc_picture` varchar(255) NOT NULL DEFAULT 'default.png',
  `acc_active_flag` varchar(10) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_accounts`
--

INSERT INTO `t_accounts` (`acc_ID`, `acc_empID`, `acc_username`, `acc_password`, `acc_user_role`, `acc_email`, `acc_picture`, `acc_active_flag`) VALUES
(1, 1, 'admin', 'admin', 1, 'cristianbalatbat@yahoo.com', 'default.png', 'Active'),
(2, 2, 'merly_gonzalbo', 'meg', 2, 'merly_gonzalbo@gmail.com', 'default.png', 'Active'),
(3, 3, 'irynne_gatchalian', 'irynne_gatchalian', 2, 'irynne_gatchalian@gmail.com', 'default.png', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `t_cash_receipt_record`
--

CREATE TABLE `t_cash_receipt_record` (
  `crt_ID` int(10) NOT NULL,
  `crt_date` datetime NOT NULL,
  `crt_reference_no` varchar(10) NOT NULL,
  `crt_payor` varchar(225) NOT NULL,
  `crt_mfm_pap` varchar(10) DEFAULT NULL,
  `crt_object_code` varchar(10) DEFAULT NULL,
  `crt_nat_col` varchar(255) DEFAULT NULL,
  `crt_collection` decimal(10,2) DEFAULT NULL,
  `crt_deposit` decimal(10,2) DEFAULT NULL,
  `crt_un_deposit` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_cash_receipt_record`
--

INSERT INTO `t_cash_receipt_record` (`crt_ID`, `crt_date`, `crt_reference_no`, `crt_payor`, `crt_mfm_pap`, `crt_object_code`, `crt_nat_col`, `crt_collection`, `crt_deposit`, `crt_un_deposit`) VALUES
(1, '2019-04-26 05:35:41', '0306126', '', NULL, NULL, 'Tuition Fees,Completion,', '700.00', NULL, '700.00'),
(2, '2019-04-26 05:40:30', '0306127', '', NULL, NULL, 'Clearance and Certification Fee,Fines and Penalties-Service In,Transcript of Records Fee,Readmission,ID,Diploma,Graduation Fee,Toga,School Uniform,', '2260.00', NULL, '2260.00'),
(3, '2019-04-26 12:38:51', '0306129', 'Resnera, Julie Ann', NULL, NULL, 'ID,Change Subject ,', '120.00', NULL, '120.00'),
(4, '2019-04-27 00:00:00', '0682102047', 'LBP Acct. No. 0682102047', NULL, NULL, NULL, NULL, '5130.00', NULL),
(5, '2019-04-27 15:35:22', '0306130', 'Magtibay, Joshua Miguel', NULL, NULL, 'Clearance and Certification Fee,Fines and Penalties-Service In,', '450.00', NULL, '450.00'),
(6, '2019-04-27 00:00:00', '2019-002', 'LBP Acct. No. 0682102047', NULL, NULL, NULL, NULL, '450.00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_cr_register_income_references`
--

CREATE TABLE `t_cr_register_income_references` (
  `cr_ir_ID` int(10) NOT NULL,
  `cr_ir_ornum_ref` varchar(20) NOT NULL,
  `cr_ir_date_payment` date NOT NULL,
  `cr_ir_uac_type_ref` int(10) NOT NULL,
  `cr_ir_uac_ID_ref` int(10) NOT NULL,
  `cr_ir_amount` decimal(10,2) NOT NULL,
  `cr_ir_stat` varchar(10) NOT NULL DEFAULT 'Active',
  `cr_ir_timestamp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_cr_register_income_references`
--

INSERT INTO `t_cr_register_income_references` (`cr_ir_ID`, `cr_ir_ornum_ref`, `cr_ir_date_payment`, `cr_ir_uac_type_ref`, `cr_ir_uac_ID_ref`, `cr_ir_amount`, `cr_ir_stat`, `cr_ir_timestamp`) VALUES
(11, '0306124', '2019-04-26', 2, 50, '650.00', 'Active', '2019-04-26 11:05:39'),
(12, '0306124', '2019-04-26', 3, 48, '350.00', 'Active', '2019-04-26 11:05:39'),
(13, '0306125', '2019-04-26', 3, 48, '350.00', 'Active', '2019-04-26 11:11:03'),
(14, '0306125', '2019-04-26', 3, 44, '600.00', 'Active', '2019-04-26 11:11:03'),
(15, '0306126', '2019-04-26', 2, 50, '500.00', 'Active', '2019-04-26 11:35:41'),
(16, '0306126', '2019-04-26', 3, 15, '200.00', 'Active', '2019-04-26 11:35:41'),
(17, '0306127', '2019-04-26', 1, 1, '150.00', 'Active', '2019-04-26 11:40:30'),
(18, '0306127', '2019-04-26', 1, 2, '300.00', 'Active', '2019-04-26 11:40:30'),
(19, '0306127', '2019-04-26', 3, 48, '350.00', 'Active', '2019-04-26 11:40:30'),
(20, '0306127', '2019-04-26', 3, 16, '100.00', 'Active', '2019-04-26 11:40:30'),
(21, '0306127', '2019-04-26', 3, 3, '60.00', 'Active', '2019-04-26 11:40:30'),
(22, '0306127', '2019-04-26', 3, 43, '350.00', 'Active', '2019-04-26 11:40:30'),
(23, '0306127', '2019-04-26', 3, 44, '150.00', 'Active', '2019-04-26 11:40:30'),
(24, '0306127', '2019-04-26', 4, 65, '100.00', 'Active', '2019-04-26 11:40:30'),
(25, '0306127', '2019-04-26', 4, 69, '700.00', 'Active', '2019-04-26 11:40:30'),
(26, '0306128', '2019-04-26', 3, 40, '30.00', 'Active', '2019-04-26 11:49:56'),
(27, '0306128', '2019-04-26', 3, 45, '70.00', 'Active', '2019-04-26 11:49:56'),
(28, '0306129', '2019-04-26', 3, 3, '60.00', 'Active', '2019-04-26 12:38:51'),
(29, '0306129', '2019-04-26', 3, 20, '60.00', 'Active', '2019-04-26 12:38:51'),
(30, '0306130', '2019-04-27', 1, 1, '150.00', 'Active', '2019-04-27 15:35:20'),
(31, '0306130', '2019-04-27', 1, 2, '300.00', 'Active', '2019-04-27 15:35:21');

-- --------------------------------------------------------

--
-- Table structure for table `t_cr_register_master`
--

CREATE TABLE `t_cr_register_master` (
  `cr_ID` int(10) NOT NULL,
  `cr_date_payment` date NOT NULL,
  `cr_or_num` varchar(20) NOT NULL,
  `cr_payor_type` varchar(30) NOT NULL,
  `cr_payor` varchar(200) NOT NULL,
  `cr_receipt` decimal(10,2) NOT NULL,
  `cr_dep_nat_treasure` decimal(10,2) DEFAULT NULL,
  `cr_dep_agdb` decimal(10,2) DEFAULT NULL,
  `cr_balance` decimal(10,2) DEFAULT NULL,
  `cr_total_payment` decimal(10,2) NOT NULL,
  `cr_stat` varchar(10) NOT NULL DEFAULT 'Active',
  `cr_timestamp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_cr_register_master`
--

INSERT INTO `t_cr_register_master` (`cr_ID`, `cr_date_payment`, `cr_or_num`, `cr_payor_type`, `cr_payor`, `cr_receipt`, `cr_dep_nat_treasure`, `cr_dep_agdb`, `cr_balance`, `cr_total_payment`, `cr_stat`, `cr_timestamp`) VALUES
(2, '2019-04-26', '0306124', 'Individual', 'Balatbat, Cristian', '1000.00', '0.00', '0.00', '0.00', '1000.00', 'Active', '2019-04-26 11:05:39'),
(3, '2019-04-26', '0306125', 'Individual', 'Agnir, Lowell Dave', '950.00', '0.00', '0.00', '0.00', '950.00', 'Active', '2019-04-26 11:11:03'),
(4, '2019-04-26', '0306126', 'Individual', 'Maglaque, Gerard', '700.00', '0.00', '0.00', '0.00', '700.00', 'Active', '2019-04-26 00:00:00'),
(5, '2019-04-26', '0306127', 'Company', 'Beezgeek ', '2260.00', '0.00', '0.00', '0.00', '2260.00', 'Active', '2019-04-26 00:00:00'),
(6, '2019-04-26', '0306128', 'Individual', 'Dizon, Malene', '100.00', '0.00', '0.00', '0.00', '100.00', 'Active', '2019-04-26 11:49:56'),
(7, '2019-04-26', '0306129', 'Individual', 'Resnera, Julie Ann', '120.00', '0.00', '0.00', '0.00', '120.00', 'Active', '2019-04-26 12:38:51'),
(8, '2019-04-27', '0306130', 'Individual', 'Magtibay, Joshua Miguel', '450.00', '0.00', '0.00', '0.00', '450.00', 'Active', '2019-04-27 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `t_deposits`
--

CREATE TABLE `t_deposits` (
  `dep_ID` int(10) NOT NULL,
  `dep_acc_no` varchar(20) NOT NULL,
  `dep_slip_no` varchar(20) NOT NULL,
  `dep_amount` decimal(10,2) NOT NULL,
  `dep_status` varchar(20) NOT NULL,
  `dep_date_for` date NOT NULL,
  `dep_date_actual` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_deposits`
--

INSERT INTO `t_deposits` (`dep_ID`, `dep_acc_no`, `dep_slip_no`, `dep_amount`, `dep_status`, `dep_date_for`, `dep_date_actual`) VALUES
(1, '0682102047', '2019-001', '5130.00', 'DEPOSITED', '2019-04-26', '2019-04-27'),
(2, '0682102047', '2019-002', '450.00', 'DEPOSITED', '2019-04-27', '2019-04-27');

-- --------------------------------------------------------

--
-- Table structure for table `t_employees`
--

CREATE TABLE `t_employees` (
  `emp_ID` int(10) NOT NULL,
  `emp_lastname` varchar(100) NOT NULL,
  `emp_middlename` varchar(100) DEFAULT NULL,
  `emp_firstname` varchar(100) NOT NULL,
  `emp_position` varchar(50) NOT NULL,
  `emp_picture` varchar(255) NOT NULL DEFAULT 'default.png',
  `emp_active_flag` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_employees`
--

INSERT INTO `t_employees` (`emp_ID`, `emp_lastname`, `emp_middlename`, `emp_firstname`, `emp_position`, `emp_picture`, `emp_active_flag`) VALUES
(1, 'Balatbat', 'O', 'Cristian', 'Administrator', 'default.png', b'1'),
(2, 'Gonzalbo', 'B.', 'Merly', 'Collection Officer', 'default.png', b'1'),
(3, 'Gatchalian', 'P', 'Irynne', 'Collection and Disbursing Officer', '', b'1');

-- --------------------------------------------------------

--
-- Table structure for table `t_users_log`
--

CREATE TABLE `t_users_log` (
  `log_No` int(200) NOT NULL,
  `log_userID` int(10) NOT NULL,
  `log_usertype` int(10) NOT NULL,
  `log_datestamp` date NOT NULL,
  `log_timestamp` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_users_log`
--

INSERT INTO `t_users_log` (`log_No`, `log_userID`, `log_usertype`, `log_datestamp`, `log_timestamp`) VALUES
(1, 2, 2, '2019-04-26', '10:56:20'),
(2, 2, 2, '2019-04-26', '11:49:45'),
(3, 2, 2, '2019-04-26', '12:39:27'),
(4, 2, 2, '2019-04-27', '15:35:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `f_lock_screen_log`
--
ALTER TABLE `f_lock_screen_log`
  ADD PRIMARY KEY (`ls_ID`),
  ADD KEY `FK_lsuserID` (`ls_acc_ID`);

--
-- Indexes for table `f_user_permission`
--
ALTER TABLE `f_user_permission`
  ADD PRIMARY KEY (`per_ID`),
  ADD KEY `FK_userID` (`per_user_ID`),
  ADD KEY `FK_roleID` (`per_user_role`),
  ADD KEY `FK_navID` (`per_nav_ID`);

--
-- Indexes for table `r_deposit_account`
--
ALTER TABLE `r_deposit_account`
  ADD PRIMARY KEY (`dpac_ID`),
  ADD UNIQUE KEY `dpac_acc_no` (`dpac_acc_no`);

--
-- Indexes for table `r_fund_cluster`
--
ALTER TABLE `r_fund_cluster`
  ADD PRIMARY KEY (`fc_ID`);

--
-- Indexes for table `r_navigation`
--
ALTER TABLE `r_navigation`
  ADD PRIMARY KEY (`nav_ID`);

--
-- Indexes for table `r_official_receipt`
--
ALTER TABLE `r_official_receipt`
  ADD PRIMARY KEY (`or_ID`),
  ADD UNIQUE KEY `or_no` (`or_no`);

--
-- Indexes for table `r_payor_type`
--
ALTER TABLE `r_payor_type`
  ADD PRIMARY KEY (`pyt_ID`);

--
-- Indexes for table `r_uacs`
--
ALTER TABLE `r_uacs`
  ADD PRIMARY KEY (`uacs_ID`),
  ADD KEY `FK_uacs_type` (`uacs_type`),
  ADD KEY `FK_uacs_fund_cluster` (`uacs_fund_cluster`);

--
-- Indexes for table `r_uacs_type`
--
ALTER TABLE `r_uacs_type`
  ADD PRIMARY KEY (`uacs_type_ID`);

--
-- Indexes for table `r_user_role`
--
ALTER TABLE `r_user_role`
  ADD PRIMARY KEY (`usr_ID`);

--
-- Indexes for table `t_accountable_forms_fv`
--
ALTER TABLE `t_accountable_forms_fv`
  ADD PRIMARY KEY (`af_fv_ID`),
  ADD UNIQUE KEY `af_fv_no` (`af_fv_no`),
  ADD KEY `FK_fv_acC_ID` (`af_fv_person_in_charge`);

--
-- Indexes for table `t_accountable_forms_wfv`
--
ALTER TABLE `t_accountable_forms_wfv`
  ADD PRIMARY KEY (`af_wfv_ID`),
  ADD UNIQUE KEY `af_wfv_no` (`af_wfv_no`),
  ADD KEY `FK_acC_ID` (`af_wfv_person_in_charge`);

--
-- Indexes for table `t_accounts`
--
ALTER TABLE `t_accounts`
  ADD PRIMARY KEY (`acc_ID`),
  ADD KEY `FK_acc_role` (`acc_user_role`),
  ADD KEY `FK_acc_emp` (`acc_empID`);

--
-- Indexes for table `t_cash_receipt_record`
--
ALTER TABLE `t_cash_receipt_record`
  ADD PRIMARY KEY (`crt_ID`);

--
-- Indexes for table `t_cr_register_income_references`
--
ALTER TABLE `t_cr_register_income_references`
  ADD PRIMARY KEY (`cr_ir_ID`),
  ADD KEY `FK_ornum` (`cr_ir_ornum_ref`),
  ADD KEY `FK_uacs_typeref` (`cr_ir_uac_type_ref`),
  ADD KEY `FK_uacs_ID_ref` (`cr_ir_uac_ID_ref`);

--
-- Indexes for table `t_cr_register_master`
--
ALTER TABLE `t_cr_register_master`
  ADD PRIMARY KEY (`cr_ID`),
  ADD KEY `FK_or_number` (`cr_or_num`);

--
-- Indexes for table `t_deposits`
--
ALTER TABLE `t_deposits`
  ADD PRIMARY KEY (`dep_ID`),
  ADD KEY `FK_acc_no` (`dep_acc_no`);

--
-- Indexes for table `t_employees`
--
ALTER TABLE `t_employees`
  ADD PRIMARY KEY (`emp_ID`);

--
-- Indexes for table `t_users_log`
--
ALTER TABLE `t_users_log`
  ADD PRIMARY KEY (`log_No`),
  ADD KEY `FK_loguserID` (`log_userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `f_lock_screen_log`
--
ALTER TABLE `f_lock_screen_log`
  MODIFY `ls_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `f_user_permission`
--
ALTER TABLE `f_user_permission`
  MODIFY `per_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `r_deposit_account`
--
ALTER TABLE `r_deposit_account`
  MODIFY `dpac_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `r_fund_cluster`
--
ALTER TABLE `r_fund_cluster`
  MODIFY `fc_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `r_navigation`
--
ALTER TABLE `r_navigation`
  MODIFY `nav_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `r_official_receipt`
--
ALTER TABLE `r_official_receipt`
  MODIFY `or_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=378;

--
-- AUTO_INCREMENT for table `r_payor_type`
--
ALTER TABLE `r_payor_type`
  MODIFY `pyt_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `r_uacs`
--
ALTER TABLE `r_uacs`
  MODIFY `uacs_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `r_uacs_type`
--
ALTER TABLE `r_uacs_type`
  MODIFY `uacs_type_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `r_user_role`
--
ALTER TABLE `r_user_role`
  MODIFY `usr_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t_accountable_forms_fv`
--
ALTER TABLE `t_accountable_forms_fv`
  MODIFY `af_fv_ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_accountable_forms_wfv`
--
ALTER TABLE `t_accountable_forms_wfv`
  MODIFY `af_wfv_ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_accounts`
--
ALTER TABLE `t_accounts`
  MODIFY `acc_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_cash_receipt_record`
--
ALTER TABLE `t_cash_receipt_record`
  MODIFY `crt_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `t_cr_register_income_references`
--
ALTER TABLE `t_cr_register_income_references`
  MODIFY `cr_ir_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `t_cr_register_master`
--
ALTER TABLE `t_cr_register_master`
  MODIFY `cr_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `t_deposits`
--
ALTER TABLE `t_deposits`
  MODIFY `dep_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t_employees`
--
ALTER TABLE `t_employees`
  MODIFY `emp_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_users_log`
--
ALTER TABLE `t_users_log`
  MODIFY `log_No` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `f_lock_screen_log`
--
ALTER TABLE `f_lock_screen_log`
  ADD CONSTRAINT `FK_lsuserID` FOREIGN KEY (`ls_acc_ID`) REFERENCES `t_accounts` (`acc_ID`);

--
-- Constraints for table `f_user_permission`
--
ALTER TABLE `f_user_permission`
  ADD CONSTRAINT `FK_navID` FOREIGN KEY (`per_nav_ID`) REFERENCES `r_navigation` (`nav_ID`),
  ADD CONSTRAINT `FK_roleID` FOREIGN KEY (`per_user_role`) REFERENCES `r_user_role` (`usr_ID`),
  ADD CONSTRAINT `FK_userID` FOREIGN KEY (`per_user_ID`) REFERENCES `t_accounts` (`acc_ID`);

--
-- Constraints for table `r_uacs`
--
ALTER TABLE `r_uacs`
  ADD CONSTRAINT `FK_uacs_fund_cluster` FOREIGN KEY (`uacs_fund_cluster`) REFERENCES `r_fund_cluster` (`fc_ID`),
  ADD CONSTRAINT `FK_uacs_type` FOREIGN KEY (`uacs_type`) REFERENCES `r_uacs_type` (`uacs_type_ID`);

--
-- Constraints for table `t_accountable_forms_fv`
--
ALTER TABLE `t_accountable_forms_fv`
  ADD CONSTRAINT `FK_fv_acC_ID` FOREIGN KEY (`af_fv_person_in_charge`) REFERENCES `t_accounts` (`acc_ID`);

--
-- Constraints for table `t_accountable_forms_wfv`
--
ALTER TABLE `t_accountable_forms_wfv`
  ADD CONSTRAINT `FK_acC_ID` FOREIGN KEY (`af_wfv_person_in_charge`) REFERENCES `t_accounts` (`acc_ID`);

--
-- Constraints for table `t_accounts`
--
ALTER TABLE `t_accounts`
  ADD CONSTRAINT `FK_acc_emp` FOREIGN KEY (`acc_empID`) REFERENCES `t_employees` (`emp_ID`),
  ADD CONSTRAINT `FK_acc_role` FOREIGN KEY (`acc_user_role`) REFERENCES `r_user_role` (`usr_ID`);

--
-- Constraints for table `t_cr_register_income_references`
--
ALTER TABLE `t_cr_register_income_references`
  ADD CONSTRAINT `FK_ornum` FOREIGN KEY (`cr_ir_ornum_ref`) REFERENCES `t_cr_register_master` (`cr_or_num`),
  ADD CONSTRAINT `FK_uacs_ID_ref` FOREIGN KEY (`cr_ir_uac_ID_ref`) REFERENCES `r_uacs` (`uacs_ID`),
  ADD CONSTRAINT `FK_uacs_typeref` FOREIGN KEY (`cr_ir_uac_type_ref`) REFERENCES `r_uacs_type` (`uacs_type_ID`);

--
-- Constraints for table `t_cr_register_master`
--
ALTER TABLE `t_cr_register_master`
  ADD CONSTRAINT `FK_or_number` FOREIGN KEY (`cr_or_num`) REFERENCES `r_official_receipt` (`or_no`);

--
-- Constraints for table `t_deposits`
--
ALTER TABLE `t_deposits`
  ADD CONSTRAINT `FK_acc_no` FOREIGN KEY (`dep_acc_no`) REFERENCES `r_deposit_account` (`dpac_acc_no`);

--
-- Constraints for table `t_users_log`
--
ALTER TABLE `t_users_log`
  ADD CONSTRAINT `FK_loguserID` FOREIGN KEY (`log_userID`) REFERENCES `t_accounts` (`acc_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
