-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2019 at 10:52 AM
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
(17, 2, 2, 15, 'YES', '2019-03-17 18:44:36'),
(18, 2, 2, 17, 'YES', '2019-03-17 18:44:36'),
(19, 2, 2, 16, 'YES', '2019-03-17 18:44:36'),
(20, 2, 2, 19, 'YES', '2019-03-17 18:48:13'),
(21, 2, 2, 20, 'YES', '2019-03-17 18:48:13');

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
(12, 'Add Collection', 'co_entry_record.php', 'has-sub', 'fa fa-plus bg-gradient-green', NULL, 'Active', '2019-03-17 01:11:27'),
(13, 'Add Collection (sub)', 'co_entry_record.php', 'sub-menu', '', 12, 'Active', '2019-03-17 01:08:15'),
(14, 'View Records', '', 'has-sub', 'fa fa-copy bg-gradient-blue', NULL, 'Active', '2019-03-17 11:37:31'),
(15, 'Cash Receipt Register', 'co_cash_receipt.php', 'sub-menu', '', 14, 'Active', '2019-03-17 11:31:05'),
(16, 'Certification', 'co_certification.php', 'sub-menu', '', 14, 'Active', '2019-03-17 11:31:41'),
(17, 'Accountable Forms', 'co_accountable_forms.php', 'sub-menu', '', 14, 'Active', '2019-03-17 11:32:45'),
(18, 'Collection Report', '', 'has-sub', 'fa fa-tasks bg-gradient-purple', NULL, 'Active', '2019-03-17 11:35:59'),
(19, 'Monthly Collection', 'co_monthly_collection.php', 'sub-menu', '', 18, 'Active', '2019-03-17 11:47:22'),
(20, 'Summary of Collection', 'co_summary_collection.php', 'sub-menu', '', 18, 'Active', '2019-03-17 11:47:49'),
(21, 'Cash Receipt Report', 'co_cash_report_collection.php', 'sub-menu', '', 18, 'Active', '2019-03-17 11:54:13');

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
(24, 2, 2, '2019-04-08', '13:39:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `f_user_permission`
--
ALTER TABLE `f_user_permission`
  ADD PRIMARY KEY (`per_ID`),
  ADD KEY `FK_userID` (`per_user_ID`),
  ADD KEY `FK_roleID` (`per_user_role`),
  ADD KEY `FK_navID` (`per_nav_ID`);

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
  ADD UNIQUE KEY `cr_or_num` (`cr_or_num`);

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
-- AUTO_INCREMENT for table `f_user_permission`
--
ALTER TABLE `f_user_permission`
  MODIFY `per_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `r_fund_cluster`
--
ALTER TABLE `r_fund_cluster`
  MODIFY `fc_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `r_navigation`
--
ALTER TABLE `r_navigation`
  MODIFY `nav_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

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
-- AUTO_INCREMENT for table `t_accounts`
--
ALTER TABLE `t_accounts`
  MODIFY `acc_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_cr_register_income_references`
--
ALTER TABLE `t_cr_register_income_references`
  MODIFY `cr_ir_ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_cr_register_master`
--
ALTER TABLE `t_cr_register_master`
  MODIFY `cr_ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_employees`
--
ALTER TABLE `t_employees`
  MODIFY `emp_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_users_log`
--
ALTER TABLE `t_users_log`
  MODIFY `log_No` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

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
-- Constraints for table `t_users_log`
--
ALTER TABLE `t_users_log`
  ADD CONSTRAINT `FK_loguserID` FOREIGN KEY (`log_userID`) REFERENCES `t_accounts` (`acc_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
