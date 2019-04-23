-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2019 at 02:39 PM
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
(2, 'index.php', 2, '2019-04-17 13:14:05'),
(3, 'co_deposit_done.php', 2, '2019-04-17 13:32:02'),
(4, 'co_deposit_done.php', 2, '2019-04-17 13:33:22'),
(5, 'co_review_receipt.php', 2, '2019-04-17 13:33:51'),
(6, 'co_entry_record.php', 2, '2019-04-17 13:37:57'),
(7, 'co_review_receipt.php', 2, '2019-04-17 16:43:50'),
(8, 'index.php', 2, '2019-04-17 17:13:43'),
(9, 'co_summary_collection.php', 2, '2019-04-17 17:16:54'),
(10, 'co_summary_collection.php', 2, '2019-04-17 17:17:13'),
(11, 'index.php', 1, '2019-04-17 17:28:39'),
(12, 'admin_setup_uacs_type.php', 1, '2019-04-17 17:29:50'),
(13, 'admin_setup_uacs_type.php', 1, '2019-04-17 17:31:04'),
(14, 'co_view_receipt.php', 2, '2019-04-17 17:31:32'),
(15, 'co_review_receipt.php', 2, '2019-04-17 18:46:23'),
(16, 'co_deposit_pending.php', 2, '2019-04-17 18:46:33'),
(17, 'co_certification.php', 2, '2019-04-20 09:45:14'),
(18, 'co_certification.php', 2, '2019-04-20 09:54:55'),
(19, 'index.php', 2, '2019-04-23 13:48:10'),
(20, 'co_review_receipt.php', 2, '2019-04-23 14:09:55'),
(21, 'co_entry_record.php', 2, '2019-04-23 14:10:50'),
(22, 'co_entry_record.php', 2, '2019-04-23 20:38:29');

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
(32, 2, 2, 31, 'YES', '2019-04-23 14:12:10');

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
(1, '0682102047', 'LBP', 8, '2019-04-16');

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
(15, 'Cash Receipt Register', 'co_cash_receipt.php', 'sub-menu', '', 14, 'Active', '2019-03-17 11:31:05'),
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
(1, '062701', 'PAID', '2019-04-01'),
(2, '062702', 'CANCELLED', '2019-04-01'),
(3, '062703', 'PAID', '2019-04-01'),
(4, '062704', 'PAID', '2019-04-01'),
(5, '062705', 'PAID', '2019-04-01'),
(6, '062706', 'PAID', '2019-04-01'),
(7, '062707', 'PAID', '2019-04-01'),
(8, '062708', 'PAID', '2019-04-01'),
(9, '062709', 'PAID', '2019-04-01'),
(10, '0627010', 'PAID', '2019-04-01'),
(11, '0627011', 'PAID', '2019-04-01'),
(12, '0627012', 'PAID', '2019-04-01'),
(13, '0627013', 'PAID', '2019-04-01'),
(14, '0627014', 'PAID', '2019-04-01'),
(15, '0627015', 'PAID', '2019-04-01'),
(16, '0627016', 'PENDING', '2019-04-01'),
(17, '0627017', 'PENDING', '2019-04-01'),
(18, '0627018', 'PENDING', '2019-04-01'),
(19, '0627019', 'PENDING', '2019-04-01'),
(20, '0627020', 'PENDING', '2019-04-01'),
(21, '0627050', 'PENDING', '2019-04-01'),
(22, '0627051', 'PENDING', '2019-04-01'),
(23, '0627052', 'PENDING', '2019-04-01'),
(24, '0627053', 'PENDING', '2019-04-01'),
(25, '0627054', 'PENDING', '2019-04-01'),
(26, '0627055', 'PENDING', '2019-04-01'),
(27, '0627056', 'PENDING', '2019-04-01'),
(28, '0627057', 'PENDING', '2019-04-01'),
(29, '0627058', 'PENDING', '2019-04-01'),
(30, '0627059', 'PENDING', '2019-04-01'),
(31, '0627060', 'PENDING', '2019-04-01'),
(32, '0627061', 'PENDING', '2019-04-01'),
(33, '0627062', 'PENDING', '2019-04-01'),
(34, '0627063', 'PENDING', '2019-04-01'),
(35, '0627064', 'PENDING', '2019-04-01'),
(36, '0627065', 'PENDING', '2019-04-01'),
(37, '0627066', 'PENDING', '2019-04-01'),
(38, '0627067', 'PENDING', '2019-04-01'),
(39, '0627068', 'PENDING', '2019-04-01'),
(40, '0627069', 'PENDING', '2019-04-01'),
(41, '0627070', 'PENDING', '2019-04-01'),
(42, '0627071', 'PENDING', '2019-04-01'),
(43, '0627072', 'PENDING', '2019-04-01'),
(44, '0627073', 'PENDING', '2019-04-01'),
(45, '0627074', 'PENDING', '2019-04-01'),
(46, '0627075', 'PENDING', '2019-04-01'),
(47, '0627076', 'PENDING', '2019-04-01'),
(48, '0627077', 'PENDING', '2019-04-01'),
(49, '0627078', 'PENDING', '2019-04-01'),
(50, '0627079', 'PENDING', '2019-04-01'),
(51, '0627080', 'PENDING', '2019-04-01'),
(52, '0627081', 'PENDING', '2019-04-01'),
(53, '0627082', 'PENDING', '2019-04-01'),
(54, '0627083', 'PENDING', '2019-04-01'),
(55, '0627084', 'PENDING', '2019-04-01'),
(56, '0627085', 'PENDING', '2019-04-01'),
(57, '0627086', 'PENDING', '2019-04-01'),
(58, '0627087', 'PENDING', '2019-04-01'),
(59, '0627088', 'PENDING', '2019-04-01');

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
(1, '2019-04', 88, '062701', '0627088', NULL, NULL, NULL, 9, '062701', '062709', 79, '0627010', '0627088', 2, '2019-04-20', 'Active');

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
(1, '062703', '2019-04-15', 1, 1, '150.00', 'Active', '2019-04-15 15:00:34'),
(2, '062703', '2019-04-15', 2, 50, '5000.00', 'Active', '2019-04-15 15:00:34'),
(3, '062704', '2019-04-15', 1, 2, '300.00', 'Active', '2019-04-15 15:05:39'),
(4, '062704', '2019-04-15', 3, 3, '60.00', 'Active', '2019-04-15 15:05:39'),
(5, '062704', '2019-04-15', 3, 4, '50.00', 'Active', '2019-04-15 15:05:39'),
(6, '062705', '2019-04-15', 1, 1, '150.00', 'Active', '2019-04-15 15:12:50'),
(7, '062706', '2019-04-16', 1, 1, '150.00', 'Active', '2019-04-16 13:43:32'),
(8, '062706', '2019-04-16', 4, 67, '240.00', 'Active', '2019-04-16 13:43:32'),
(9, '062707', '2019-04-16', 2, 50, '620.75', 'Active', '2019-04-16 13:46:07'),
(10, '062707', '2019-04-16', 3, 48, '350.00', 'Active', '2019-04-16 13:46:07'),
(11, '062708', '2019-03-17', 2, 53, '500.00', 'Active', '2019-03-17 10:44:05'),
(12, '062709', '2019-04-17', 1, 1, '150.00', 'Active', '2019-04-17 18:41:59'),
(13, '062709', '2019-04-17', 2, 50, '500.00', 'Active', '2019-04-17 18:42:00'),
(14, '0627010', '2019-04-21', 2, 50, '300.00', 'Active', '2019-04-21 09:31:36'),
(15, '0627011', '2019-04-21', 1, 1, '150.00', 'Active', '2019-04-21 09:32:14'),
(16, '0627012', '2019-03-30', 3, 23, '250.00', 'Active', '2019-03-30 18:19:56'),
(17, '0627013', '2019-04-23', 1, 1, '150.00', 'Active', '2019-04-23 19:58:36'),
(18, '0627013', '2019-04-23', 3, 20, '40.00', 'Active', '2019-04-23 19:58:36'),
(19, '0627013', '2019-04-23', 3, 16, '0.00', 'Active', '2019-04-23 20:02:49'),
(20, '0627013', '2019-04-23', 2, 50, '0.00', 'Active', '2019-04-23 20:02:49'),
(21, '0627014', '2019-04-23', 3, 18, '50.00', 'Active', '2019-04-23 20:27:43'),
(22, '0627014', '2019-04-23', 3, 48, '70.00', 'Active', '2019-04-23 20:27:43'),
(23, '0627015', '2019-04-23', 3, 44, '150.01', 'Active', '2019-04-23 20:32:10');

-- --------------------------------------------------------

--
-- Table structure for table `t_cr_register_master`
--

CREATE TABLE `t_cr_register_master` (
  `cr_ID` int(10) NOT NULL,
  `cr_date_payment` date NOT NULL,
  `cr_or_num` varchar(20) NOT NULL,
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

INSERT INTO `t_cr_register_master` (`cr_ID`, `cr_date_payment`, `cr_or_num`, `cr_payor`, `cr_receipt`, `cr_dep_nat_treasure`, `cr_dep_agdb`, `cr_balance`, `cr_total_payment`, `cr_stat`, `cr_timestamp`) VALUES
(1, '2019-04-15', '062703', 'Cristian Balatbat', '5150.00', '0.00', '0.00', '0.00', '5150.00', 'Active', '2019-04-15 00:00:00'),
(2, '2019-04-15', '062704', 'Clark Ian Woods', '410.00', '0.00', '0.00', '0.00', '410.00', 'Active', '2019-04-15 00:00:00'),
(3, '2019-04-15', '062705', 'Lowell Dave Agnir', '150.00', '0.00', '0.00', '0.00', '150.00', 'Active', '2019-04-15 00:00:00'),
(4, '2019-04-16', '062706', 'Mirai Kuriyama', '390.00', '0.00', '0.00', '0.00', '390.00', 'Active', '2019-04-16 00:00:00'),
(5, '2019-04-16', '062707', 'Vince Martin', '970.75', '0.00', '0.00', '0.00', '970.75', 'Active', '2019-04-16 00:00:00'),
(6, '2019-03-17', '062708', 'Mirai Kuriyama', '500.00', '0.00', '0.00', '0.00', '500.00', 'Active', '2019-03-17 00:00:00'),
(7, '2019-04-17', '062709', 'Keith Eyvan', '650.00', '0.00', '0.00', '0.00', '650.00', 'Active', '2019-04-17 00:00:00'),
(8, '2019-04-21', '0627010', 'Mirai Kuriyama', '300.00', '0.00', '0.00', '0.00', '300.00', 'Active', '2019-04-21 00:00:00'),
(9, '2019-04-21', '0627011', 'Cristian Balatbat', '150.00', '0.00', '0.00', '0.00', '150.00', 'Active', '2019-04-21 00:00:00'),
(10, '2019-03-30', '0627012', 'John Patrick Loyola', '250.00', '0.00', '0.00', '0.00', '250.00', 'Active', '2019-03-30 00:00:00'),
(11, '2019-04-23', '0627013', 'Ma. Michaela Alejandria', '190.00', '0.00', '0.00', '0.00', '190.00', 'Active', '2019-04-23 19:58:36'),
(12, '2019-04-23', '0627013', 'Keith Eyvan Alvior', '0.00', '0.00', '0.00', '0.00', '0.00', 'Active', '2019-04-23 00:00:00'),
(13, '2019-04-23', '0627014', 'Mirai Kuriyama', '120.00', '0.00', '0.00', '0.00', '120.00', 'Active', '2019-04-23 20:27:43'),
(14, '2019-04-23', '0627015', 'Julie Ann Resnera', '150.01', '0.00', '0.00', '0.00', '150.01', 'Active', '2019-04-23 20:32:10');

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
(1, '0682102047', '2019-001', '1360.75', 'DEPOSITED', '2019-04-16', '2019-04-17'),
(3, '0682102047', '2019-003', '5710.00', 'DEPOSITED', '2019-04-15', '2019-04-16'),
(4, '0682102047', '2019-004', '500.00', 'DEPOSITED', '2019-03-17', '2019-04-01'),
(6, '0682102047', '2019-006', '650.00', 'DEPOSITED', '2019-04-17', '2019-04-17'),
(7, '0682102047', '2019-007', '250.00', 'DEPOSITED', '2019-03-30', '2019-04-01');

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
(1, 1, 1, '2019-03-10', '19:39:41'),
(2, 1, 1, '2019-03-10', '20:27:10'),
(3, 1, 1, '2019-03-10', '20:27:17'),
(4, 1, 1, '2019-03-16', '12:37:45'),
(5, 2, 2, '2019-03-17', '13:02:19'),
(6, 1, 1, '2019-03-17', '13:03:17'),
(7, 2, 2, '2019-03-17', '13:03:50'),
(8, 1, 1, '2019-03-17', '18:09:03'),
(9, 2, 2, '2019-03-17', '18:13:14'),
(10, 2, 2, '2019-03-17', '19:03:20'),
(11, 1, 1, '2019-03-17', '20:06:00'),
(12, 2, 2, '2019-03-17', '20:07:16'),
(13, 1, 1, '2019-03-17', '20:07:29'),
(14, 2, 2, '2019-03-17', '20:08:26'),
(15, 1, 1, '2019-03-17', '20:10:05'),
(16, 2, 2, '2019-03-17', '20:10:38'),
(17, 1, 1, '2019-03-17', '20:11:02'),
(18, 2, 2, '2019-03-17', '10:19:54'),
(19, 1, 1, '2019-03-18', '15:39:08'),
(20, 1, 1, '2019-03-18', '16:49:16'),
(21, 2, 2, '2019-03-18', '16:59:01'),
(22, 2, 2, '2019-03-23', '16:58:22'),
(23, 1, 1, '2019-04-08', '13:18:48'),
(24, 2, 2, '2019-04-08', '13:39:37'),
(25, 1, 1, '2019-04-09', '15:37:14'),
(26, 1, 1, '2019-04-09', '16:46:30'),
(27, 2, 2, '2019-04-12', '10:09:17'),
(28, 2, 2, '2019-04-13', '10:06:21'),
(29, 1, 1, '2019-04-15', '09:51:24'),
(30, 2, 2, '2019-04-15', '09:51:48'),
(31, 2, 2, '2019-04-15', '11:22:02'),
(32, 1, 1, '2019-04-15', '11:22:46'),
(33, 2, 2, '2019-04-15', '12:55:03'),
(34, 1, 1, '2019-04-15', '13:27:25'),
(35, 1, 1, '2019-04-15', '13:30:19'),
(36, 2, 2, '2019-04-15', '13:32:12'),
(37, 1, 1, '2019-04-15', '16:11:09'),
(38, 2, 2, '2019-04-15', '16:11:41'),
(39, 2, 2, '2019-04-15', '16:14:31'),
(40, 2, 2, '2019-04-16', '13:13:10'),
(41, 1, 1, '2019-04-16', '19:17:54'),
(42, 2, 2, '2019-04-16', '21:01:02'),
(43, 1, 1, '2019-04-17', '11:01:49'),
(44, 2, 2, '2019-04-17', '13:11:04'),
(45, 2, 2, '2019-04-17', '13:33:16'),
(46, 2, 2, '2019-04-17', '17:13:31'),
(47, 2, 2, '2019-04-17', '17:16:02'),
(48, 3, 2, '2019-04-17', '17:28:18'),
(49, 1, 1, '2019-04-17', '17:28:36'),
(50, 2, 2, '2019-04-17', '17:31:17'),
(51, 2, 2, '2019-04-17', '17:31:27'),
(52, 1, 1, '2019-04-20', '09:55:02'),
(53, 2, 2, '2019-04-20', '09:55:10'),
(54, 1, 1, '2019-04-20', '10:26:33'),
(55, 2, 2, '2019-04-20', '10:29:37'),
(56, 1, 1, '2019-04-21', '09:04:17'),
(57, 2, 2, '2019-04-21', '09:16:59'),
(58, 2, 2, '2019-03-30', '18:20:16'),
(59, 2, 2, '2019-04-23', '14:04:29'),
(60, 1, 1, '2019-04-23', '14:10:01'),
(61, 2, 2, '2019-04-23', '14:10:36'),
(62, 1, 1, '2019-04-23', '14:10:56'),
(63, 2, 2, '2019-04-23', '14:12:20');

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
  MODIFY `ls_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `f_user_permission`
--
ALTER TABLE `f_user_permission`
  MODIFY `per_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

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
  MODIFY `or_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

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
-- AUTO_INCREMENT for table `t_cr_register_income_references`
--
ALTER TABLE `t_cr_register_income_references`
  MODIFY `cr_ir_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `t_cr_register_master`
--
ALTER TABLE `t_cr_register_master`
  MODIFY `cr_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `t_deposits`
--
ALTER TABLE `t_deposits`
  MODIFY `dep_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `t_employees`
--
ALTER TABLE `t_employees`
  MODIFY `emp_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_users_log`
--
ALTER TABLE `t_users_log`
  MODIFY `log_No` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

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
