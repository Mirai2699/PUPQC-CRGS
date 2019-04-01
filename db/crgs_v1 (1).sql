-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2019 at 02:33 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

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
(1, '0682102047', 'LBP', 4, '2019-04-16');

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
(1, '036201', 'PAID', '2019-03-01'),
(2, '036202', 'PAID', '2019-03-01'),
(3, '036203', 'PAID', '2019-03-01'),
(4, '036204', 'PAID', '2019-03-01'),
(5, '036205', 'PAID', '2019-03-01'),
(6, '036206', 'PAID', '2019-04-01'),
(7, '036207', 'PAID', '2019-04-01'),
(8, '036208', 'PENDING', '2019-04-01'),
(9, '036209', 'PENDING', '2019-04-01'),
(10, '0362010', 'PENDING', '2019-04-01'),
(11, '0362011', 'PENDING', '2019-04-01'),
(12, '0362012', 'PENDING', '2019-04-01'),
(13, '0362013', 'PENDING', '2019-04-01'),
(14, '0362014', 'PENDING', '2019-04-01'),
(15, '0362015', 'PENDING', '2019-04-01'),
(16, '0362016', 'PENDING', '2019-04-01'),
(17, '0362017', 'PENDING', '2019-04-01'),
(18, '0362018', 'PENDING', '2019-04-01'),
(19, '0362019', 'PENDING', '2019-04-01'),
(20, '0362020', 'PENDING', '2019-04-01'),
(21, '0362021', 'PENDING', '2019-04-01'),
(22, '0362022', 'PENDING', '2019-04-01'),
(23, '0362023', 'PENDING', '2019-04-01'),
(24, '0362024', 'PENDING', '2019-04-01'),
(25, '0362025', 'PENDING', '2019-04-01'),
(26, '0362026', 'PENDING', '2019-04-01'),
(27, '0362027', 'PENDING', '2019-04-01'),
(28, '0362028', 'PENDING', '2019-04-01'),
(29, '0362029', 'PENDING', '2019-04-01'),
(30, '0362030', 'PENDING', '2019-04-01'),
(31, '0362031', 'PENDING', '2019-04-01'),
(32, '0362032', 'PENDING', '2019-04-01'),
(33, '0362033', 'PENDING', '2019-04-01'),
(34, '0362034', 'PENDING', '2019-04-01'),
(35, '0362035', 'PENDING', '2019-04-01'),
(36, '0362036', 'PENDING', '2019-04-01'),
(37, '0362037', 'PENDING', '2019-04-01'),
(38, '0362038', 'PENDING', '2019-04-01'),
(39, '0362039', 'PENDING', '2019-04-01'),
(40, '0362040', 'PENDING', '2019-04-01'),
(41, '0362041', 'PENDING', '2019-04-01'),
(42, '0362042', 'PENDING', '2019-04-01'),
(43, '0362043', 'PENDING', '2019-04-01'),
(44, '0362044', 'PENDING', '2019-04-01'),
(45, '0362045', 'PENDING', '2019-04-01'),
(46, '0362046', 'PENDING', '2019-04-01'),
(47, '0362047', 'PENDING', '2019-04-01'),
(48, '0362048', 'PENDING', '2019-04-01'),
(49, '0362049', 'PENDING', '2019-04-01'),
(50, '0362050', 'PENDING', '2019-04-01'),
(51, '0362051', 'PENDING', '2019-04-01'),
(52, '0362052', 'PENDING', '2019-04-01'),
(53, '0362053', 'PENDING', '2019-04-01'),
(54, '0362054', 'PENDING', '2019-04-01'),
(55, '0362055', 'PENDING', '2019-04-01'),
(56, '0362056', 'PENDING', '2019-04-01'),
(57, '0362057', 'PENDING', '2019-04-01'),
(58, '0362058', 'PENDING', '2019-04-01'),
(59, '0362059', 'PENDING', '2019-04-01'),
(60, '0362060', 'PENDING', '2019-04-01'),
(61, '0362061', 'PENDING', '2019-04-01'),
(62, '0362062', 'PENDING', '2019-04-01'),
(63, '0362063', 'PENDING', '2019-04-01'),
(64, '0362064', 'PENDING', '2019-04-01'),
(65, '0362065', 'PENDING', '2019-04-01'),
(66, '0362066', 'PENDING', '2019-04-01'),
(67, '0362067', 'PENDING', '2019-04-01'),
(68, '0362068', 'PENDING', '2019-04-01'),
(69, '0362069', 'PENDING', '2019-04-01'),
(70, '0362070', 'PENDING', '2019-04-01'),
(71, '0362071', 'PENDING', '2019-04-01'),
(72, '0362072', 'PENDING', '2019-04-01'),
(73, '0362073', 'PENDING', '2019-04-01'),
(74, '0362074', 'PENDING', '2019-04-01'),
(75, '0362075', 'PENDING', '2019-04-01'),
(76, '0362076', 'PENDING', '2019-04-01'),
(77, '0362077', 'PENDING', '2019-04-01'),
(78, '0362078', 'PENDING', '2019-04-01'),
(79, '0362079', 'PENDING', '2019-04-01'),
(80, '0362080', 'PENDING', '2019-04-01'),
(81, '0362081', 'PENDING', '2019-04-01'),
(82, '0362082', 'PENDING', '2019-04-01'),
(83, '0362083', 'PENDING', '2019-04-01'),
(84, '0362084', 'PENDING', '2019-04-01'),
(85, '0362085', 'PENDING', '2019-04-01'),
(86, '0362086', 'PENDING', '2019-04-01'),
(87, '0362087', 'PENDING', '2019-04-01'),
(88, '0362088', 'PENDING', '2019-04-01'),
(89, '0362089', 'PENDING', '2019-04-01'),
(90, '0362090', 'PENDING', '2019-04-01'),
(91, '0362091', 'PENDING', '2019-04-01'),
(92, '0362092', 'PENDING', '2019-04-01'),
(93, '0362093', 'PENDING', '2019-04-01'),
(94, '0362094', 'PENDING', '2019-04-01'),
(95, '0362095', 'PENDING', '2019-04-01'),
(96, '0362096', 'PENDING', '2019-04-01'),
(97, '0362097', 'PENDING', '2019-04-01'),
(98, '0362098', 'PENDING', '2019-04-01'),
(99, '0362099', 'PENDING', '2019-04-01'),
(100, '03620100', 'PENDING', '2019-04-01'),
(101, '03620101', 'PENDING', '2019-04-01'),
(102, '03620102', 'PENDING', '2019-04-01'),
(103, '03620103', 'PENDING', '2019-04-01'),
(104, '03620104', 'PENDING', '2019-04-01'),
(105, '03620105', 'PENDING', '2019-04-01'),
(106, '03620106', 'PENDING', '2019-04-01'),
(107, '03620107', 'PENDING', '2019-04-01'),
(108, '03620108', 'PENDING', '2019-04-01'),
(109, '03620109', 'PENDING', '2019-04-01'),
(110, '03620110', 'PENDING', '2019-04-01'),
(111, '03620111', 'PENDING', '2019-04-01'),
(112, '03620112', 'PENDING', '2019-04-01'),
(113, '03620113', 'PENDING', '2019-04-01'),
(114, '03620114', 'PENDING', '2019-04-01'),
(115, '03620115', 'PENDING', '2019-04-01'),
(116, '03620116', 'PENDING', '2019-04-01'),
(117, '03620117', 'PENDING', '2019-04-01'),
(118, '03620118', 'PENDING', '2019-04-01'),
(119, '03620119', 'PENDING', '2019-04-01'),
(120, '03620120', 'PENDING', '2019-04-01'),
(121, '03620121', 'PENDING', '2019-04-01'),
(122, '03620122', 'PENDING', '2019-04-01'),
(123, '03620123', 'PENDING', '2019-04-01'),
(124, '03620124', 'PENDING', '2019-04-01'),
(125, '03620125', 'PENDING', '2019-04-01'),
(126, '03620126', 'PENDING', '2019-04-01'),
(127, '03620127', 'PENDING', '2019-04-01'),
(128, '03620128', 'PENDING', '2019-04-01'),
(129, '03620129', 'PENDING', '2019-04-01'),
(130, '03620130', 'PENDING', '2019-04-01'),
(131, '03620131', 'PENDING', '2019-04-01'),
(132, '03620132', 'PENDING', '2019-04-01'),
(133, '03620133', 'PENDING', '2019-04-01'),
(134, '03620134', 'PENDING', '2019-04-01'),
(135, '03620135', 'PENDING', '2019-04-01'),
(136, '03620136', 'PENDING', '2019-04-01'),
(137, '03620137', 'PENDING', '2019-04-01'),
(138, '03620138', 'PENDING', '2019-04-01'),
(139, '03620139', 'PENDING', '2019-04-01'),
(140, '03620140', 'PENDING', '2019-04-01'),
(141, '03620141', 'PENDING', '2019-04-01'),
(142, '03620142', 'PENDING', '2019-04-01'),
(143, '03620143', 'PENDING', '2019-04-01'),
(144, '03620144', 'PENDING', '2019-04-01'),
(145, '03620145', 'PENDING', '2019-04-01'),
(146, '03620146', 'PENDING', '2019-04-01'),
(147, '03620147', 'PENDING', '2019-04-01'),
(148, '03620148', 'PENDING', '2019-04-01'),
(149, '03620149', 'PENDING', '2019-04-01'),
(150, '03620150', 'PENDING', '2019-04-01'),
(151, '03620151', 'PENDING', '2019-04-01'),
(152, '03620152', 'PENDING', '2019-04-01'),
(153, '03620153', 'PENDING', '2019-04-01'),
(154, '03620154', 'PENDING', '2019-04-01'),
(155, '03620155', 'PENDING', '2019-04-01'),
(156, '03620156', 'PENDING', '2019-04-01'),
(157, '03620157', 'PENDING', '2019-04-01'),
(158, '03620158', 'PENDING', '2019-04-01'),
(159, '03620159', 'PENDING', '2019-04-01'),
(160, '03620160', 'PENDING', '2019-04-01'),
(161, '03620161', 'PENDING', '2019-04-01'),
(162, '03620162', 'PENDING', '2019-04-01'),
(163, '03620163', 'PENDING', '2019-04-01'),
(164, '03620164', 'PENDING', '2019-04-01'),
(165, '03620165', 'PENDING', '2019-04-01'),
(166, '03620166', 'PENDING', '2019-04-01'),
(167, '03620167', 'PENDING', '2019-04-01'),
(168, '03620168', 'PENDING', '2019-04-01'),
(169, '03620169', 'PENDING', '2019-04-01'),
(170, '03620170', 'PENDING', '2019-04-01'),
(171, '03620171', 'PENDING', '2019-04-01'),
(172, '03620172', 'PENDING', '2019-04-01'),
(173, '03620173', 'PENDING', '2019-04-01'),
(174, '03620174', 'PENDING', '2019-04-01'),
(175, '03620175', 'PENDING', '2019-04-01'),
(176, '03620176', 'PENDING', '2019-04-01'),
(177, '03620177', 'PENDING', '2019-04-01'),
(178, '03620178', 'PENDING', '2019-04-01'),
(179, '03620179', 'PENDING', '2019-04-01'),
(180, '03620180', 'PENDING', '2019-04-01'),
(181, '03620181', 'PENDING', '2019-04-01'),
(182, '03620182', 'PENDING', '2019-04-01'),
(183, '03620183', 'PENDING', '2019-04-01'),
(184, '03620184', 'PENDING', '2019-04-01'),
(185, '03620185', 'PENDING', '2019-04-01'),
(186, '03620186', 'PENDING', '2019-04-01'),
(187, '03620187', 'PENDING', '2019-04-01'),
(188, '03620188', 'PENDING', '2019-04-01'),
(189, '03620189', 'PENDING', '2019-04-01'),
(190, '03620190', 'PENDING', '2019-04-01'),
(191, '03620191', 'PENDING', '2019-04-01'),
(192, '03620192', 'PENDING', '2019-04-01'),
(193, '03620193', 'PENDING', '2019-04-01'),
(194, '03620194', 'PENDING', '2019-04-01'),
(195, '03620195', 'PENDING', '2019-04-01'),
(196, '03620196', 'PENDING', '2019-04-01'),
(197, '03620197', 'PENDING', '2019-04-01'),
(198, '03620198', 'PENDING', '2019-04-01'),
(199, '03620199', 'PENDING', '2019-04-01'),
(200, '03620200', 'PENDING', '2019-04-01');

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

--
-- Dumping data for table `t_accountable_forms_wfv`
--

INSERT INTO `t_accountable_forms_wfv` (`af_wfv_ID`, `af_wfv_no`, `af_wfv_bb_qty`, `af_wfv_bb_from`, `af_wfv_bb_to`, `af_wfv_rec_qty`, `af_wfv_rec_from`, `af_wfv_rec_to`, `af_wfv_iss_qty`, `af_wfv_iss_from`, `af_wfv_iss_to`, `af_wfv_eb_qty`, `af_wfv_eb_from`, `af_wfv_eb_to`, `af_wfv_person_in_charge`, `af_wfv_datestamp`, `af_wfv_active_stat`) VALUES
(1, '2019-03', 200, '036201', '03620200', NULL, NULL, NULL, 3, '036201', '036203', 197, '036204', '03620200', 2, '2019-03-29', 'Active');

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
(1, '2019-03-29 14:47:29', '036201', 'Balatbat, Cristian', NULL, NULL, 'Clearance and Certification Fee,Tuition Fees,', '650.00', NULL, '650.00'),
(2, '2019-03-29 14:49:45', '036202', 'Software Research Group', NULL, NULL, 'School Uniform,Books,', '670.00', NULL, '670.00'),
(3, '2019-03-29 14:50:37', '036203', 'Ramos, Jean Ann', NULL, NULL, 'ID,Tuition Fees,', '120.00', NULL, '120.00'),
(4, '2019-03-30 00:00:00', '2019-001', 'LBP Acct. No. 0682102047', NULL, NULL, NULL, NULL, '1440.00', NULL),
(5, '2019-03-30 14:55:45', '036204', 'Maglaque, Gerard', NULL, NULL, 'Tuition Fees NSTP,Miscellaneous,NSTP Module,', '990.00', NULL, '990.00'),
(6, '2019-03-30 14:56:39', '036205', 'SimpleX', NULL, NULL, 'Electricity,Rental,', '500.00', NULL, '500.00'),
(7, '2019-04-01 15:00:47', '036206', 'Agnir, Lowell Dave', NULL, NULL, 'Transcript of Records Fee,Diploma,', '500.00', NULL, '500.00'),
(8, '2019-04-01 15:03:15', '036207', 'Woods, Clark Ian', NULL, NULL, 'Transcript of Records Fee,Diploma,Graduation Fee,', '650.00', NULL, '650.00'),
(9, '2019-04-01 00:00:00', '2019-002', 'LBP Acct. No. 0682102047', NULL, NULL, NULL, NULL, '1490.00', NULL),
(10, '2019-04-01 00:00:00', '2019-003', 'LBP Acct. No. 0682102047', NULL, NULL, NULL, NULL, '1150.00', NULL);

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
(1, '036201', '2019-03-29', 1, 1, '150.00', 'Active', '2019-03-29 14:47:29'),
(2, '036201', '2019-03-29', 2, 50, '500.00', 'Active', '2019-03-29 14:47:29'),
(3, '036202', '2019-03-29', 4, 69, '540.00', 'Active', '2019-03-29 14:49:44'),
(4, '036202', '2019-03-29', 4, 66, '130.00', 'Active', '2019-03-29 14:49:44'),
(5, '036203', '2019-03-29', 3, 3, '60.00', 'Active', '2019-03-29 14:50:37'),
(6, '036203', '2019-03-29', 2, 50, '60.00', 'Active', '2019-03-29 14:50:37'),
(7, '036204', '2019-03-30', 2, 51, '140.00', 'Active', '2019-03-30 14:55:45'),
(8, '036204', '2019-03-30', 2, 59, '250.00', 'Active', '2019-03-30 14:55:45'),
(9, '036204', '2019-03-30', 3, 7, '600.00', 'Active', '2019-03-30 14:55:45'),
(10, '036205', '2019-03-30', 2, 56, '300.00', 'Active', '2019-03-30 14:56:38'),
(11, '036205', '2019-03-30', 2, 55, '200.00', 'Active', '2019-03-30 14:56:38'),
(12, '036206', '2019-04-01', 3, 48, '350.00', 'Active', '2019-04-01 15:00:47'),
(13, '036206', '2019-04-01', 3, 43, '150.00', 'Active', '2019-04-01 15:00:47'),
(14, '036207', '2019-04-01', 3, 48, '350.00', 'Active', '2019-04-01 15:03:15'),
(15, '036207', '2019-04-01', 3, 43, '150.00', 'Active', '2019-04-01 15:03:15'),
(16, '036207', '2019-04-01', 3, 44, '150.00', 'Active', '2019-04-01 15:03:15');

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
(1, '2019-03-29', '036201', 'Individual', 'Balatbat, Cristian', '650.00', '0.00', '0.00', '0.00', '650.00', 'Active', '2019-03-29 14:47:29'),
(2, '2019-03-29', '036202', 'Company', 'Software Research Group', '670.00', '0.00', '0.00', '0.00', '670.00', 'Active', '2019-03-29 14:49:44'),
(3, '2019-03-29', '036203', 'Individual', 'Ramos, Jean Ann', '120.00', '0.00', '0.00', '0.00', '120.00', 'Active', '2019-03-29 00:00:00'),
(4, '2019-03-30', '036204', 'Individual', 'Maglaque, Gerard', '990.00', '0.00', '0.00', '0.00', '990.00', 'Active', '2019-03-30 00:00:00'),
(5, '2019-03-30', '036205', 'Company', 'SimpleX', '500.00', '0.00', '0.00', '0.00', '500.00', 'Active', '2019-03-30 14:56:38'),
(6, '2019-04-01', '036206', 'Individual', 'Agnir, Lowell Dave', '500.00', '0.00', '0.00', '0.00', '500.00', 'Active', '2019-04-01 00:00:00'),
(7, '2019-04-01', '036207', 'Individual', 'Woods, Clark Ian', '650.00', '0.00', '0.00', '0.00', '650.00', 'Active', '2019-04-01 15:03:15');

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
(1, '0682102047', '2019-001', '1440.00', 'DEPOSITED', '2019-03-29', '2019-03-30'),
(2, '0682102047', '2019-002', '1490.00', 'DEPOSITED', '2019-03-30', '2019-04-01'),
(3, '0682102047', '2019-003', '1150.00', 'DEPOSITED', '2019-04-01', '2019-04-01');

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
(1, 2, 2, '2019-03-29', '14:38:24'),
(2, 2, 2, '2019-03-29', '14:52:03'),
(3, 2, 2, '2019-04-01', '14:57:22'),
(4, 2, 2, '2019-04-01', '15:07:50');

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
  MODIFY `or_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

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
  MODIFY `af_wfv_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_accounts`
--
ALTER TABLE `t_accounts`
  MODIFY `acc_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_cash_receipt_record`
--
ALTER TABLE `t_cash_receipt_record`
  MODIFY `crt_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `t_cr_register_income_references`
--
ALTER TABLE `t_cr_register_income_references`
  MODIFY `cr_ir_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `t_cr_register_master`
--
ALTER TABLE `t_cr_register_master`
  MODIFY `cr_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `t_deposits`
--
ALTER TABLE `t_deposits`
  MODIFY `dep_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
