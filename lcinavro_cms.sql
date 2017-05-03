-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 03, 2017 at 02:51 PM
-- Server version: 10.0.28-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lcinavro_cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `accountid` int(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `realpass` varchar(255) NOT NULL,
  `account_type` int(255) NOT NULL,
  `memberid` int(255) NOT NULL,
  `administrator` int(255) NOT NULL,
  `ministry_head` int(255) NOT NULL,
  `shepherd` int(255) NOT NULL,
  `data_entry` int(255) NOT NULL,
  `follow_up` int(255) NOT NULL,
  `account` int(255) NOT NULL,
  `information` int(255) NOT NULL,
  `date` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`accountid`, `username`, `password`, `realpass`, `account_type`, `memberid`, `administrator`, `ministry_head`, `shepherd`, `data_entry`, `follow_up`, `account`, `information`, `date`) VALUES
(20, 'Dennis', 'dba4c1a117472f6aca95211285d0587e', '6966', 1, 38, 1, 1, 1, 1, 1, 1, 1, 'Mon, 02 Jan 2017 18:02:35 +0000'),
(21, 'Emmanuel', 'f7f628ce8248cbeea6b121d05f17eae0', 'lcie7Uh', 1, 39, 1, 1, 1, 1, 1, 1, 1, 'Mon, 02 Jan 2017 18:14:17 +0000'),
(22, 'Daniel', '4adf7c1c1abea3b76f54e3428abffa67', 'dokttt99', 1, 42, 1, 1, 1, 1, 1, 1, 1, 'Mon, 02 Jan 2017 18:29:28 +0000'),
(24, 'Lois', '28fc849b5b645e10bd43a74f46786a95', 'lcieHU/', 1, 57, 0, 0, 1, 1, 1, 0, 1, 'Sat, 25 Feb 2017 20:43:19 +0000'),
(25, 'Evangeline', 'e27daedd9277747eccdb84f357fb652a', 'lcin62U', 0, 49, 0, 0, 0, 0, 0, 0, 0, 'Thu, 13 Apr 2017 15:26:38 +0000'),
(26, 'Barbara', 'd07235cee78aecd093c5aab5cb108b62', 'helsa15516', 1, 47, 1, 1, 1, 1, 1, 0, 1, 'Thu, 23 Feb 2017 22:23:41 +0000'),
(32, 'Akundaare', 'ef7d0a92cd5a4dcac86c34e85e0d1dbc', 'lciadEz', 0, 226, 0, 0, 0, 0, 0, 0, 0, 'Thu, 13 Apr 2017 16:01:14 +0000'),
(33, 'Patrick', '512f4f682c2ba6c4f7bd99b05c161870', 'lciAgev', 1, 289, 1, 1, 1, 1, 1, 1, 1, 'Sun, 23 Apr 2017 18:24:40 +0000'),
(36, 'Richard', 'e63edfad9ebdae5edf9385292a679594', 'lciEPAB', 0, 231, 0, 0, 0, 0, 0, 0, 0, 'Thu, 13 Apr 2017 16:00:02 +0000'),
(38, 'Mathilda', '41acff7a09a481b8f93715163779658e', 'lci9AbE', 1, 157, 0, 1, 1, 1, 1, 0, 1, 'Sun, 23 Apr 2017 17:23:10 +0000'),
(39, 'Phillip', '2200eee552c17cea5931407394863940', 'lciud6h', 0, 61, 0, 0, 0, 0, 0, 0, 0, 'Thu, 13 Apr 2017 16:53:58 +0000'),
(40, 'Felix', '1f4acb4a101e42635c53a1b979403187', 'lcipesu', 0, 174, 0, 0, 0, 0, 0, 0, 0, 'Thu, 13 Apr 2017 16:57:27 +0000'),
(41, 'Regina', '5fcb20783116eb0a1c4f6f67a52a812e', 'lcipU%y', 0, 202, 0, 0, 0, 0, 0, 0, 0, 'Thu, 13 Apr 2017 17:00:09 +0000'),
(42, 'Nana', '0ebd0f7a183e465f6dc01359d538da4c', 'lcizENY', 0, 205, 0, 0, 0, 0, 0, 0, 0, 'Thu, 13 Apr 2017 17:01:01 +0000'),
(43, 'Apke', 'a6b352c95cb482f356027e02eec1a8e1', 'lci9Age', 0, 234, 0, 0, 0, 0, 0, 0, 0, 'Thu, 13 Apr 2017 17:03:39 +0000'),
(44, 'Paul', '73523646e50d79cdb116acee70662116', 'lci2yj6', 0, 236, 0, 0, 0, 0, 0, 0, 0, 'Thu, 13 Apr 2017 17:05:05 +0000'),
(45, 'Evelyn', 'a2e62f0ce14eb68d4d264b69145e946a', 'lci3y8E', 1, 237, 0, 0, 1, 1, 1, 0, 1, 'Sun, 23 Apr 2017 16:46:37 +0000'),
(46, 'Nipuna', '7efde87e7f74fc2d501468b101edcf40', 'lciNa7u', 0, 242, 0, 0, 0, 0, 0, 0, 0, 'Thu, 13 Apr 2017 17:08:41 +0000'),
(47, 'Adagyine', 'e1893c07e11cf3a03acdf6406fd2d361', 'lci6zaQ', 0, 243, 0, 0, 0, 0, 0, 0, 0, 'Thu, 13 Apr 2017 17:12:04 +0000'),
(48, 'Patrick', '193d9f74d8022fcc6e4509480fc83a61', 'lcibahE', 0, 253, 0, 0, 0, 0, 0, 0, 0, 'Thu, 13 Apr 2017 17:14:11 +0000'),
(49, 'Theresa', '182f793e5fa251d75ffcb45d0b9c5944', 'lciEV6/', 0, 254, 0, 0, 0, 0, 0, 0, 0, 'Thu, 13 Apr 2017 17:15:28 +0000'),
(50, 'Sampson ', 'a6f2e201204ff92d0fedb32df40209ed', 'lciU1eT', 0, 255, 0, 0, 0, 0, 0, 0, 0, 'Thu, 13 Apr 2017 17:16:54 +0000'),
(51, 'Wilberforce', '60577a0fedee2f3eff034bc7191fab05', 'lciha8U', 1, 245, 0, 1, 1, 1, 1, 1, 1, 'Sun, 23 Apr 2017 16:43:31 +0000'),
(52, 'Isaac', '074d19dd954f18e5e91c414223edf05c', 'lciE1u7', 1, 264, 0, 0, 1, 1, 1, 0, 1, 'Sun, 23 Apr 2017 17:49:04 +0000'),
(53, 'Evans', 'dac4d26f4ddae0562b068de569a88446', 'lciEmEr', 0, 258, 0, 0, 0, 0, 0, 0, 0, 'Thu, 13 Apr 2017 17:36:30 +0000');

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `assignment_id` int(255) NOT NULL,
  `shepherd` int(255) NOT NULL,
  `sheep` int(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`assignment_id`, `shepherd`, `sheep`, `date`) VALUES
(30, 38, 43, 'Mon, 02 Jan 2017 23:19:48 +0000'),
(31, 38, 44, 'Mon, 02 Jan 2017 23:19:51 +0000'),
(32, 38, 45, 'Mon, 02 Jan 2017 23:19:54 +0000'),
(33, 38, 46, 'Mon, 02 Jan 2017 23:19:56 +0000'),
(34, 38, 47, 'Mon, 02 Jan 2017 23:19:59 +0000'),
(35, 38, 49, 'Mon, 02 Jan 2017 23:20:02 +0000'),
(36, 38, 50, 'Mon, 02 Jan 2017 23:20:04 +0000'),
(37, 38, 51, 'Mon, 02 Jan 2017 23:20:06 +0000'),
(39, 38, 53, 'Mon, 02 Jan 2017 23:20:10 +0000'),
(40, 38, 54, 'Mon, 02 Jan 2017 23:20:12 +0000'),
(41, 38, 55, 'Mon, 02 Jan 2017 23:20:14 +0000'),
(42, 38, 56, 'Mon, 02 Jan 2017 23:20:15 +0000'),
(43, 38, 57, 'Mon, 02 Jan 2017 23:20:18 +0000'),
(44, 38, 58, 'Mon, 02 Jan 2017 23:20:19 +0000'),
(45, 38, 59, 'Mon, 02 Jan 2017 23:20:21 +0000'),
(46, 38, 60, 'Mon, 02 Jan 2017 23:20:23 +0000'),
(47, 38, 61, 'Mon, 02 Jan 2017 23:20:25 +0000'),
(48, 38, 62, 'Mon, 02 Jan 2017 23:20:30 +0000'),
(49, 38, 63, 'Mon, 02 Jan 2017 23:20:32 +0000'),
(61, 57, 45, 'Sun, 19 Feb 2017 14:42:06 +0000'),
(62, 57, 279, 'Sun, 19 Feb 2017 14:55:15 +0000'),
(63, 42, 247, 'Sun, 02 Apr 2017 06:28:04 +0000'),
(64, 47, 247, 'Sun, 02 Apr 2017 10:02:14 +0000'),
(65, 47, 43, 'Mon, 03 Apr 2017 18:21:26 +0000'),
(66, 245, 342, 'Sun, 23 Apr 2017 16:44:08 +0000'),
(67, 237, 338, 'Sun, 23 Apr 2017 16:47:07 +0000'),
(69, 289, 319, 'Sun, 23 Apr 2017 17:09:16 +0000'),
(70, 289, 318, 'Sun, 23 Apr 2017 17:09:47 +0000'),
(71, 38, 319, 'Sun, 23 Apr 2017 17:21:39 +0000'),
(72, 38, 312, 'Sun, 23 Apr 2017 17:22:13 +0000'),
(73, 157, 311, 'Sun, 23 Apr 2017 17:23:57 +0000'),
(74, 38, 310, 'Sun, 23 Apr 2017 17:28:00 +0000'),
(75, 38, 309, 'Sun, 23 Apr 2017 17:30:21 +0000'),
(76, 38, 307, 'Sun, 23 Apr 2017 17:33:41 +0000'),
(77, 237, 306, 'Sun, 23 Apr 2017 17:40:34 +0000'),
(78, 237, 337, 'Sun, 23 Apr 2017 17:41:58 +0000'),
(79, 245, 183, 'Sun, 23 Apr 2017 17:44:52 +0000'),
(80, 57, 304, 'Sun, 23 Apr 2017 17:46:59 +0000'),
(81, 289, 304, 'Sun, 23 Apr 2017 17:47:38 +0000'),
(82, 264, 301, 'Sun, 23 Apr 2017 17:49:32 +0000'),
(83, 289, 300, 'Sun, 23 Apr 2017 17:53:23 +0000'),
(84, 289, 298, 'Sun, 23 Apr 2017 17:53:35 +0000'),
(85, 264, 294, 'Sun, 23 Apr 2017 17:58:40 +0000'),
(86, 57, 293, 'Sun, 23 Apr 2017 17:59:50 +0000'),
(87, 38, 290, 'Sun, 23 Apr 2017 18:00:42 +0000'),
(88, 47, 279, 'Sun, 23 Apr 2017 18:02:33 +0000'),
(89, 47, 316, 'Sun, 23 Apr 2017 18:02:57 +0000'),
(90, 47, 314, 'Sun, 23 Apr 2017 18:03:24 +0000'),
(91, 157, 277, 'Sun, 23 Apr 2017 18:04:56 +0000'),
(92, 47, 276, 'Sun, 23 Apr 2017 18:05:39 +0000'),
(93, 245, 274, 'Sun, 23 Apr 2017 18:06:35 +0000'),
(94, 38, 273, 'Sun, 23 Apr 2017 18:07:34 +0000'),
(95, 47, 271, 'Sun, 23 Apr 2017 18:09:45 +0000'),
(96, 57, 271, 'Sun, 23 Apr 2017 18:10:28 +0000'),
(97, 38, 270, 'Sun, 23 Apr 2017 18:11:04 +0000'),
(98, 264, 269, 'Sun, 23 Apr 2017 18:12:15 +0000'),
(99, 289, 268, 'Sun, 23 Apr 2017 18:13:45 +0000'),
(100, 57, 268, 'Sun, 23 Apr 2017 18:14:24 +0000'),
(101, 289, 267, 'Sun, 23 Apr 2017 18:15:17 +0000'),
(102, 157, 267, 'Sun, 23 Apr 2017 18:16:16 +0000'),
(103, 237, 266, 'Sun, 23 Apr 2017 18:16:50 +0000'),
(104, 42, 275, 'Sun, 23 Apr 2017 18:18:26 +0000'),
(105, 42, 265, 'Sun, 23 Apr 2017 18:18:37 +0000'),
(106, 245, 264, 'Sun, 23 Apr 2017 18:19:33 +0000'),
(107, 289, 263, 'Sun, 23 Apr 2017 18:25:30 +0000'),
(108, 38, 262, 'Sun, 23 Apr 2017 18:27:16 +0000'),
(109, 157, 261, 'Sun, 23 Apr 2017 18:29:46 +0000'),
(110, 237, 257, 'Sun, 23 Apr 2017 18:31:44 +0000'),
(111, 38, 251, 'Sun, 23 Apr 2017 18:32:25 +0000'),
(112, 38, 254, 'Sun, 23 Apr 2017 18:32:44 +0000'),
(113, 42, 250, 'Sun, 23 Apr 2017 18:33:39 +0000'),
(114, 245, 249, 'Sun, 23 Apr 2017 18:35:03 +0000'),
(115, 245, 249, 'Sun, 23 Apr 2017 18:35:44 +0000'),
(116, 264, 248, 'Sun, 23 Apr 2017 18:36:54 +0000'),
(117, 289, 244, 'Sun, 23 Apr 2017 18:37:58 +0000'),
(118, 157, 241, 'Sun, 23 Apr 2017 18:38:52 +0000'),
(119, 289, 239, 'Sun, 23 Apr 2017 18:39:35 +0000'),
(120, 38, 238, 'Sun, 23 Apr 2017 18:40:39 +0000'),
(121, 42, 235, 'Sun, 23 Apr 2017 18:41:28 +0000'),
(122, 157, 233, 'Sun, 23 Apr 2017 18:42:34 +0000'),
(123, 38, 230, 'Sun, 23 Apr 2017 18:43:27 +0000'),
(124, 245, 229, 'Sun, 23 Apr 2017 18:46:01 +0000'),
(125, 289, 227, 'Sun, 23 Apr 2017 18:47:55 +0000'),
(126, 289, 226, 'Sun, 23 Apr 2017 18:48:38 +0000'),
(127, 289, 225, 'Sun, 23 Apr 2017 18:49:05 +0000'),
(128, 38, 224, 'Sun, 23 Apr 2017 18:50:34 +0000'),
(129, 57, 221, 'Sun, 23 Apr 2017 18:52:51 +0000'),
(130, 42, 55, 'Wed, 03 May 2017 14:00:53 +0000'),
(131, 42, 43, 'Wed, 03 May 2017 14:00:57 +0000'),
(132, 42, 44, 'Wed, 03 May 2017 14:01:03 +0000');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `branch_id` int(250) NOT NULL,
  `branch_name` varchar(250) NOT NULL,
  `branch_location` varchar(250) NOT NULL,
  `branch_head` int(250) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branch_id`, `branch_name`, `branch_location`, `branch_head`, `date`) VALUES
(1, 'Apache', 'Navrongo', 38, 'Sun, 30 Apr 2017 00:25:53 +0000'),
(5, 'SABORO', 'opposite Saboro Dam', 253, 'Tue, 02 May 2017 13:39:56 +0000'),
(6, 'CHUCHULIGA', 'Chuchuliga', 236, 'Tue, 02 May 2017 13:43:09 +0000'),
(7, 'CHUCHULIGA', 'Chuchuliga', 0, 'Tue, 02 May 2017 13:43:09 +0000'),
(8, 'BONIA', 'Bonia', 255, 'Tue, 02 May 2017 13:44:20 +0000'),
(9, 'TONO', 'WURU CHPS COMPOUND', 242, 'Tue, 02 May 2017 13:46:39 +0000'),
(10, 'GUONIA', 'GUONIA', 258, 'Tue, 02 May 2017 13:49:25 +0000'),
(11, 'VONANIA', 'Vonania', 234, 'Tue, 02 May 2017 13:51:14 +0000'),
(12, 'VONANIA', 'Vonania', 234, 'Tue, 02 May 2017 13:51:16 +0000'),
(13, 'TANKUNA', 'Tankuna', 231, 'Tue, 02 May 2017 13:52:35 +0000'),
(14, 'NAYAGNIA', 'Nayagnia', 61, 'Tue, 02 May 2017 13:55:51 +0000'),
(15, 'DOBA', 'Doba', 238, 'Tue, 02 May 2017 13:56:51 +0000'),
(16, 'DOBA', 'Doba', 238, 'Tue, 02 May 2017 13:56:53 +0000');

-- --------------------------------------------------------

--
-- Table structure for table `inventory_item`
--

CREATE TABLE `inventory_item` (
  `inventory_item_id` int(255) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_desc` varchar(255) NOT NULL,
  `item_qty` varchar(255) NOT NULL,
  `item_location` varchar(255) NOT NULL,
  `item_condition` varchar(255) NOT NULL,
  `inventory_type_id` int(255) NOT NULL,
  `inventory_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inventory_type`
--

CREATE TABLE `inventory_type` (
  `inventory_type_id` int(255) NOT NULL,
  `inventory_type` varchar(255) NOT NULL,
  `inventory_desc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `memberid` int(250) NOT NULL,
  `salutation` varchar(50) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `maritalstatus` varchar(250) NOT NULL,
  `occupation` varchar(250) NOT NULL,
  `nationality` varchar(250) NOT NULL,
  `residence` varchar(255) NOT NULL,
  `post_address` varchar(255) NOT NULL,
  `directiontohse` text NOT NULL,
  `mobile1` varchar(250) NOT NULL,
  `mobile2` varchar(255) NOT NULL,
  `email` varchar(250) NOT NULL,
  `branch_id` int(250) NOT NULL,
  `cp` int(250) NOT NULL,
  `cp_rel` varchar(255) NOT NULL,
  `cp_mobile` varchar(255) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `picture` text NOT NULL,
  `lng` double NOT NULL,
  `lat` double NOT NULL,
  `bday` varchar(255) NOT NULL,
  `yearjoin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`memberid`, `salutation`, `firstname`, `lastname`, `dob`, `gender`, `maritalstatus`, `occupation`, `nationality`, `residence`, `post_address`, `directiontohse`, `mobile1`, `mobile2`, `email`, `branch_id`, `cp`, `cp_rel`, `cp_mobile`, `date`, `picture`, `lng`, `lat`, `bday`, `yearjoin`) VALUES
(38, 'Rev', 'Dennis', 'Djagbletey', '1973-09-06', 'Male', 'Maried', 'Pastor', 'Ghana', 'Mayaga', 'Box 71', 'Adjacent Mayaga Hotel', '0504406018', '0244204404', 'ddjagbletey@gmail.com', 0, 0, '', '', '2017-01-18 20:18:23.615393', '10959640_4947720387661_5888005643964560383_n.jpg', 0, 0, '09-06', ''),
(39, 'Mr', 'Emmanuel', 'Kpabitey', '1994-12-14', 'Male', 'Single', 'Student', 'Ghana', 'Yikene', '', 'Behind ideal college', '0574734705', '0505385663', 'sirmoco.sm@gmail.com', 1, 38, 'Friend', '0504406018', '2017-04-30 05:51:47.173421', 'kj.jpg', 0, 0, '12-14', ''),
(42, 'Mr', 'Daniel', 'Kpabitey', '1984-07-12', 'Male', 'Maried', 'Teacher', 'Ghana', 'Yikene', 'Box 166,Bolgatanga', 'Behind Ideal College School', '0201397490', '', 'kpabiteyd@gmail.com', 1, 47, 'Wife', '0244165978', '2017-04-30 06:06:43.172566', 'Daniel Kpabitey-Passport Photograph.jpg', 0, 0, '07-12', ''),
(43, 'Mr', 'Aryee', 'Teddy Atikwei', '1956-11-06', 'Male', 'Maried', '', 'Ghana', 'Paga', '', 'Paga', '0540447362', '', '', 0, 0, '', '', '2017-01-02 18:59:47.997656', '', 0, 0, '11-06', ''),
(44, 'Mrs', 'Aryee', 'Josephine Ahkjah', '1982-04-20', '', 'Maried', '', 'Ghana', 'None', '', 'None', '0000000000', '', '', 0, 0, '', '', '2017-01-02 19:04:48.098198', '', 0, 0, '04-20', ''),
(45, 'Mr', 'James', 'Kaujawine', '1985-06-22', '', 'Single', '', 'Ghana', 'Namolo', 'P.O.Box 34,Navrongo', 'Namolo Paga Road', '0249311532', '0202788299', '', 0, 38, 'Friend', '0504406018', '2017-01-02 19:12:51.113428', '', 0, 0, '06-22', ''),
(46, 'Miss', 'Grace', 'Amadu', '1999-08-01', '', 'Single', 'Student', 'Ghana', 'Bolga-Soe', '', 'Bolga-Soe', '0502391833', '', '', 0, 0, '', '', '2017-01-02 19:17:02.964087', '', 0, 0, '08-01', ''),
(47, 'Mrs', 'Barbara', 'Helsa Kpabitey', '1984-10-05', 'Female', 'Maried', 'Teacher', 'Ghana', 'Yikene', '', 'Behind Ideal College', '0244165978', '', 'baarbaradarko@gmail.com', 0, 42, 'Friend', '0201397490', '2017-01-21 22:35:58.425456', 'IMG_20170115_154252.jpg', 0, 0, '10-05', ''),
(49, 'Mrs', 'Evangeline', 'Afia Goodman', '', 'Female', 'Maried', '', 'Ghana', 'Mayaga', '', 'Behind Mayaga Hotel', '0206441122', '', '', 0, 0, '', '', '2017-01-21 21:47:53.468671', 'IMG_20170115_153632.jpg', 0, 0, '', ''),
(50, 'Mr', 'Edward', 'Abu', '', '', '', '', '', 'LCI Campus Branch Navrongo', '', '', '0205586495', '', 'abuedward@gmail.com', 0, 0, '', '', '2017-01-02 20:53:17.723310', '', 0, 0, '', ''),
(51, '', 'Richard', 'Adagfi', '', '', '', '', '', 'Namolo', '', '', '0506842201', '', '', 0, 0, '', '', '2017-01-02 21:32:31.831081', '', 0, 0, '', ''),
(53, '', 'Loguer', 'Achana', '', 'Female', '', '', 'Ghana', 'Mayaga', '', '', '', '', '', 0, 49, 'Friend', '0206441122', '2017-01-02 21:44:38.928242', '', 0, 0, '', ''),
(54, '', 'Webana', 'Adagfi', '', '', '', '', '', '', '', '', '', '', '', 0, 52, 'Friend', '0507465793', '2017-01-02 21:45:48.809177', '', 0, 0, '', ''),
(55, '', 'Alice', 'Adarapaba', '', '', '', '', '', 'Pungu-Taratee, Navrongo', '', '', '	0209147208', '', '', 0, 0, '', '', '2017-01-02 21:48:05.541915', '', 0, 0, '', ''),
(56, '', 'Mercy', 'Adarapaba', '', '', '', '', '', 'Pungu-Bawiu', '', '', '020 0760421', '', '', 0, 0, '', '', '2017-01-02 21:51:01.487016', '', 0, 0, '', ''),
(57, 'Mrs', 'Lois', 'Frimpong', '', 'Female', 'Maried', 'Teacher', 'Ghana', 'Saboro', '', 'Saboro Fast Link', '0203843554', '', '', 0, 174, '', '', '2017-01-21 21:44:24.055107', 'IMG_20170115_153701.jpg', 0, 0, '', ''),
(58, '', 'Ernestina', 'Adda', '', 'Female', '', '', 'Ghana', 'Namolo  Fast-Link', '', '', '', '', '', 0, 57, 'Friend', '0203843554', '2017-01-02 22:04:12.969851', '', 0, 0, '', ''),
(59, '', 'Vivian', 'Adda', '', '', '', '', '', 'Namolo Fast-Link', '', '', '', '', '', 0, 57, 'Friend', '0203843554', '2017-01-02 22:07:35.812897', '', 0, 0, '', ''),
(60, 'Miss', 'Gloria', 'Awupale', '1996/11/19', 'Female', 'Single', 'Student', 'Ghana', 'B-Poly Campus', '', 'Opposite CEDEC', '0207789389', '', '', 0, 47, 'Friend', '0244165978', '2017-01-21 23:07:44.868722', 'IMG_20161008_141540_1.jpg', 0, 0, '11/19', ''),
(61, 'Mr', 'Phillip', 'Dabrah', '1990/05/21', 'Male', 'Maried', '', 'Ghana', '', '', 'Namolo', '0501085556', '', '', 0, 0, '', '', '2017-01-21 21:35:35.401376', 'IMG_20170115_153608.jpg', 0, 0, '05/21', ''),
(62, '', 'Juliana', 'Adoliba', '', '', '', '', '', 'Mosegnia - Hospital Area', '', 'Mosegnia - Hospital Area', '020745-8335', '', '', 0, 0, '', '', '2017-01-02 22:19:05.760552', '', 0, 0, '', ''),
(63, '', 'Emmanuel', 'Adongo', '', 'Male', '', '', 'Ghana', '', '', 'Kanjiga JHS', '0245814466', '', '', 0, 0, '', '', '2017-01-02 22:21:49.167242', '', 0, 0, '', ''),
(157, 'Mrs.', 'Mathilda', 'Aku Ampradu', '1989/07/19', 'Female', 'Married', 'Research Assistant', 'ghanaina', 'Namolo', 'NHRC, Box 114, Navrongo', 'Namolo', '233507465793', '233540982124', 'makudze1@yahoo.com', 0, 0, '', '2.33E+11', '2017-01-21 20:27:41.184827', 'IMG_20170115_153212.jpg', 0, 0, '07/19', '2014'),
(158, 'Miss.', 'Diana', 'Achana ', '15/06/1987', 'Female', 'Single', 'Teaching', 'ghanaian', 'Nogesinia', '', '', '233246013515', '233201238657', '', 0, 0, '', '2.33E+11', '0000-00-00 00:00:00.000000', '', 0, 0, '', '2010'),
(159, 'Mr.', 'Daniel', 'Mohammed Sandow', '03/01/1989', 'Male', 'Single', 'Businessman', 'ghanaian', 'Nogesinia', '', 'Prison Sandema Road, immediately after the Granding mail', '233506232062', '233543237141', 'sandowmohammed@yahoo.com', 0, 0, '', '2.34E+11', '0000-00-00 00:00:00.000000', '', 0, 0, '', '2012'),
(161, 'Miss.', 'Vida', 'Mawusi Tsekpoe', '20/01/1995', 'Female', 'Single', 'Student', 'ghanaian', 'Gognia', '', 'U.D.S Quaters, close to the Library side. Block house painted wtih brown colour', '233502194083', '233543157354', 'tsekpoemawusi@yahoo.com', 0, 0, '', '2.34E+11', '0000-00-00 00:00:00.000000', '', 0, 0, '', '2013'),
(162, 'Miss.', 'Daniella', 'Abasuwe ', '12/08/2011', 'Female', 'Single', 'Student', 'ghanaian', 'Pungu Central', '', 'Pungu Central, Behind Pungu Primary School \r\nGEC 57', '233541591803', '', '', 0, 0, '', '2.34E+11', '0000-00-00 00:00:00.000000', '', 0, 0, '', '2012'),
(163, 'Mr.', 'Clement', 'Emeka ', '07/07/1982', 'Male', 'Married', 'Businessman', 'nigerian', 'Namolo', '', 'Close to Namolo Pentcost Church, the house is painted Yellow by the Namolo junction', '233540222340', '233267528793', '', 0, 0, '', '2.34E+11', '0000-00-00 00:00:00.000000', '', 0, 0, '', '2013'),
(164, 'Miss.', 'Rose', 'Grace Achubure', '', 'Female', 'Single', '', 'ghanaian', 'Balobia', '', 'Around the Total Filling Station. Two bakeries around the house.', '##########', '', '', 0, 0, '', '2.33E+11', '2017-02-23 15:21:04.370326', 'IMG_20170219_101350.jpg', 0, 0, '', '2009'),
(165, 'Miss.', 'Racheal', 'Zakari ', '12/10/2007', 'Female', 'Single', 'Pupil', 'ghanaian', 'Nogesinia', '', 'CAM 145, Close to Alice Bar', '233243256414', '', '', 0, 0, '', '2.33E+11', '0000-00-00 00:00:00.000000', '', 0, 0, '', '2010'),
(166, 'Mr.', 'Jeffery', 'Zakari ', '25/09/2000', 'Male', 'Single', 'Pupil', 'ghanaian', 'Nogsenia', '', 'CAM 145, Close to Alice Bar', '233243256414', '', '', 0, 0, '', '2.33E+11', '0000-00-00 00:00:00.000000', '', 0, 0, '', '2010'),
(167, 'Miss.', 'Adelaide', 'Aklade ', '03/05/2000', 'Female', 'Single', 'Pupil', 'ghanaian', 'Nogsenia', '', 'CAF 88, Behind Patience to All', '233245160740', '', '', 0, 0, '', '2.33E+11', '0000-00-00 00:00:00.000000', '', 0, 0, '', '2005'),
(168, 'Miss.', 'Mary', 'Asaliwe Adatekey', '07/04/2001', 'Female', 'Single', 'Student', 'ghanaian', 'Balobia', 'CAI 38', 'close to Balobia JHS, CAI 38', '', '', '', 0, 0, '', '', '0000-00-00 00:00:00.000000', '', 0, 0, '', '2012'),
(169, 'Mr.', 'Moses', 'Ajoure Tanti', '13/10/2004', 'Male', 'Single', 'Student', 'ghanaian', 'Mission Junction', '', 'Mission Junction CAK 70', '', '', '', 0, 0, '', '2.34E+11', '0000-00-00 00:00:00.000000', '', 0, 0, '', '2014'),
(170, 'Mr.', 'Jesse', 'Kolley ', '08/11/2003', 'Male', 'Single', 'Pupil', 'ghanaian', 'UDS Common Market', '', '', '233244707408', '', '', 0, 0, '', '2.33E+11', '0000-00-00 00:00:00.000000', '', 0, 0, '', '2006'),
(171, 'Mr.', 'Joel', 'Kolley ', '08/11/2003', 'Male', 'Single', 'Pupil', 'ghanaian', 'U.D.S Common Market', '', '', '233244707408', '', '', 0, 0, '', '2.33E+12', '0000-00-00 00:00:00.000000', '', 0, 0, '', '2006'),
(172, 'Miss.', 'Aduni', 'Theresa ', '04/09/2001', 'Female', 'Single', 'Pupil', 'ghanaian', 'Mission Road', '', 'Mission road, Adjecent Ama\'s container\r\nCAS 52', '', '', '', 0, 0, '', '2.34E+11', '0000-00-00 00:00:00.000000', '', 0, 0, '', '2015'),
(173, 'Miss.', 'Nancy', 'Bedeley ', '24/05/2004', 'Female', 'Single', 'Pupil', 'ghanaian', 'UDS Common Market', '', 'UDS Common Market\r\nChefs Secrets', '233244707408', '', '', 0, 0, '', '2.33E+11', '0000-00-00 00:00:00.000000', '', 0, 0, '', '2006'),
(174, 'Mr.', 'Felix', 'Batasiah Ajongbah', '1989/03/29', 'Male', 'Married', 'Teacher', 'ghanaian', 'Balobia', '', 'Balobia, Madam Mary house. Adjecent the New mosque\r\nCAK 65. The house is paimted with colour Ash', '233203483554', '233245276799', 'abatasiah@yahoo.com', 0, 0, '', '2.34E+11', '2017-01-21 23:05:52.459805', 'IMG_20170115_152327.jpg', 0, 0, '03/29', '2013'),
(175, 'Mr.', 'Ernest', 'Seyimang ', '04/10/1997', 'Male', 'Single', 'Student', 'ghanaian', 'Pungu', '', 'Pungu- Eloma', '233500175751', '', 'ernestseyimany@yahoo.com', 0, 0, '', '2.33E+11', '0000-00-00 00:00:00.000000', '', 0, 0, '', '2015'),
(176, 'Miss.', 'Mary-Magdalene', 'Efyia Anusongo', '22/03/1985', 'Female', 'Single', 'Hairdress', 'ghanaian', 'Namolo', '', '', '233240425225', '233505182318', '', 0, 0, '', '2.33E+11', '0000-00-00 00:00:00.000000', '', 0, 0, '', '2011'),
(177, 'Miss.', 'Modesta', 'Tantera ', '14/07/1989', 'Female', 'Single', 'Nurse', 'ghanaian', 'Nogsenia', '', 'Balobia, behind the Goil Filling Station.', '233249672845', '', 'tanteramodesta@yahoo.com', 0, 0, '', '2.33E+11', '0000-00-00 00:00:00.000000', '', 0, 0, '', '2015'),
(178, 'Mrs.', 'Afua', 'Agambowe ', '05/07/1962', 'Female', 'Married', 'Trader', 'ghanaian', 'Balobia', '', '', '233246818650', '', '', 0, 0, '', '2.33E+11', '0000-00-00 00:00:00.000000', '', 0, 0, '', '2004'),
(179, 'Mr.', 'Prince', 'Nyamekye ', '1999/08/05', 'Male', 'Single', 'Pupil', 'ghanaian', 'Nogesinia', '', 'Nogesinia', '233240276597', '', '', 0, 0, '', '2.33E+11', '2017-01-21 20:38:18.745328', 'IMG_20170115_153303.jpg', 0, 0, '08/05', '2014'),
(180, 'Mr.', 'Anthony', 'Apalazoya ', '05/06/2005', 'Male', 'Single', 'Pupil', 'ghanaian', 'Nogesenia', '', 'Opposite the Fountain Gate Chapel \r\nCAF 74', '', '', '', 0, 0, '', '2.34E+11', '0000-00-00 00:00:00.000000', '', 0, 0, '', '2015'),
(181, 'Mr.', 'Victor', 'Bamomwo Suliah', '1997/02/03', 'Male', 'Single', 'Student', 'ghanaian', 'Namolo', '', 'Namolo, close to the Church of Pentcost, Centrao Assembly. the house is painted light yellow', '233504108553', '', 'victorsuliah@yahoo.com', 0, 0, '', '2.34E+11', '2017-01-21 22:25:39.397535', 'IMG_20170115_154038.jpg', 0, 0, '02/03', '2015'),
(182, 'Mrs.', 'Monica', 'Kukuli ', '28/11/1990', 'Female', 'Married', 'Trader', 'ghanaian', 'Nogesenia', '', '', '233246941871', '', '', 0, 0, '', '', '0000-00-00 00:00:00.000000', '', 0, 0, '', '2013'),
(183, 'Mrs.', 'Faustina', 'Kwara ', '18/03/1986', 'Female', 'Married', 'Trader', 'ghanaian', 'Namolo', '', 'Behind the Total Filling Station \r\nWEE 36', '233244824056', '', '', 0, 0, '', '', '0000-00-00 00:00:00.000000', '', 0, 0, '', '2014'),
(184, 'Mrs.', 'Nasara', 'Nkopalao ', '', 'Female', 'Widowed', 'Trader', 'ghanaian', 'Namolo', '', 'Near Namolo Primary School', '233244663112', '', '', 0, 0, '', '', '2017-02-21 09:29:45.228137', 'IMG_20170219_101142.jpg', 0, 0, '', '2013'),
(185, 'Mrs.', 'Rita', 'Ayintole ', '01/01/1966', 'Female', 'Married', 'Trader', 'ghanaian', 'Mission Junction', '', '', '233241145711', '', '', 0, 0, '', '2.33E+11', '0000-00-00 00:00:00.000000', '', 0, 0, '', '2015'),
(186, 'Mrs.', 'Rita', 'Ageba Naaba', '01/01/1977', 'Female', 'Married', 'Trader', 'ghanaian', 'Nayagania', '', '', '', '', '', 0, 0, '', '', '0000-00-00 00:00:00.000000', '', 0, 0, '', '2005'),
(187, 'Mrs.', 'Justina', 'Asumboya ', '', 'Female', 'Married', 'Senior Officer', 'ghanaian', 'Nogesinia', '', 'CAM 145', '233243256414', '', '', 0, 0, '', '2.33E+11', '2017-02-21 08:46:49.752326', 'IMG_20170219_101210.jpg', 0, 0, '', '2010'),
(188, 'Mr.', 'Daniel', 'Abasuwe ', '12/08/2011', 'Male', 'Single', 'Student', 'ghanaian', 'Pungu Central', '', 'Pungu Road,\r\nGEC 57\r\nPungu Primary School', '233541591803', '', '', 0, 0, '', '2.34E+11', '0000-00-00 00:00:00.000000', '', 0, 0, '', '2012'),
(189, 'Mrs.', 'Gifty', 'Abasuwe ', '08/06/1982', 'Female', 'Married', 'Hairdress', 'ghanaian', 'Pungu Central', '', 'Pungu Central\r\nGEC 57\r\nPungu Primary School', '233541591803', '', '', 0, 0, '', '2.33E+11', '0000-00-00 00:00:00.000000', '', 0, 0, '', '2012'),
(190, 'Mrs.', 'Juliana', 'Akiya ', '01/01/1980', 'Female', 'Widowed', 'Trader', 'ghanaian', 'Namolo', '', '', '233507116923', '', '', 0, 0, '', '2.33E+11', '0000-00-00 00:00:00.000000', '', 0, 0, '', '2004'),
(191, 'Miss.', 'Christine', 'Owusu-Frimpong ', '30/12/1993', 'Female', 'Single', 'Student', 'ghanaian', 'Tono', 'Box 24, Navrongo', 'Tono Bungalows \r\nICOUR Guest Hosue in Tono', '233278121246', '233501384265', 'krissteneowusu@gmail.com', 0, 0, '', '2.34E+11', '0000-00-00 00:00:00.000000', '', 0, 0, '', '2006'),
(192, 'Mr.', 'Jonas', 'Fomjegeba ', '27/02/1995', 'Male', 'Single', 'Student', 'ghanaian', 'Mission Junction', '', 'Mission Junction \r\nCAK 35', '233500174199', '', '', 0, 0, '', '2.33E+11', '0000-00-00 00:00:00.000000', '', 0, 0, '', '2015'),
(193, 'Mr.', 'Emmanuel', 'Adjei-Asamoah ', '01/01/1989', 'Male', 'Single', 'Service Personnel', 'ghanaian', 'Namolo', '', '', '233546798877', '233501347292', 'adjeiasamoahemmanuel53@gmail.com', 0, 0, '', '', '0000-00-00 00:00:00.000000', '', 0, 0, '', '2011'),
(194, 'Mr.', 'Agyemang', 'Kwadwo Sapakp', '27/04/1987', 'Male', 'Single', 'Service Personnel', 'ghanaina', 'Namolo', '', '', '233243049050', '233504393005', '', 0, 0, '', '2.33E+11', '0000-00-00 00:00:00.000000', '', 0, 0, '', '2014'),
(195, 'Mr.', 'Aniah', 'Rera ', '01/01/2003', 'Female', 'Single', 'Pupil', 'ghanaian', 'Namolo Zongo', '', 'Namolo Primary School\r\nWEF 60', '', '', '', 0, 0, '', '2.33E+11', '0000-00-00 00:00:00.000000', '', 0, 0, '', '2005'),
(196, 'Mrs.', 'Belinda', 'Danke', '12/05/1989', 'Female', 'Married', 'Trader', 'ghanaian', 'Namolo', '', 'Namolo Boanio\r\nCAI 62', '233206304403', '233554290007', '', 0, 0, '', '2.34E+11', '0000-00-00 00:00:00.000000', '', 0, 0, '', '2013'),
(197, 'Mrs.', 'Afia', 'Taluah ', '01/01/1981', 'Female', 'Married', 'Trader', 'ghanaian', 'Balobia', '', '', '233240249584', '', '', 0, 0, '', '2.33E+11', '0000-00-00 00:00:00.000000', '', 0, 0, '', '2013'),
(198, 'Miss.', 'Rosemary', 'Assorow ', '30/10/1992', 'Female', 'Married', 'Musician', 'ghanaian', 'Balobia', '', 'Balobia \r\nMadam Mary\'s house\r\nAdhacent the new mosque\r\nCAK 65\r\nThe house is painted Ash', '233547176420', '233504202716', '', 0, 0, '', '2.33E+11', '0000-00-00 00:00:00.000000', '', 0, 0, '', '2013'),
(199, 'Miss.', 'Amidu', 'Hikematu ', '02/03/2002', 'Female', 'Single', 'Pupil', 'ghanaian', 'Nogesinia', '', 'Nogesinia \r\nCAF 85', '', '', '', 0, 0, '', '2.33E+11', '0000-00-00 00:00:00.000000', '', 0, 0, '', '2014'),
(200, 'Mr.', 'Elijah', 'Kwarah ', '12/05/1999', 'Male', 'Single', 'Pupil', 'ghanaian', 'Nogesinia', '', 'Nogesinia\r\nCAV 11', '', '', '', 0, 0, '', '2.34E+11', '0000-00-00 00:00:00.000000', '', 0, 0, '', '2015'),
(201, 'Mr.', 'Francis', 'Achana ', '12/12/2000', 'Male', 'Single', 'Pupil', 'ghanaian', 'Nogesinia', '', 'Nogesinia \r\nCAD 37', '', '', '', 0, 0, '', '2.34E+11', '0000-00-00 00:00:00.000000', '', 0, 0, '', '2010'),
(202, 'Miss.', 'Regina', 'Sadungo ', '1986/02/13', 'Female', 'Single', 'Secretary', 'ghanaian', 'Bolobia', 'Paga SHS, Box 46, Paga', 'Nogesinia \r\nCAF 27', '233245701066', '233206094746', 'reginasadungo@yahoo.com', 0, 0, '', '2.33E+11', '2017-01-21 20:23:18.940744', 'IMG_20170115_153121.jpg', 0, 0, '02/13', '2000'),
(203, 'Mr.', 'Awuri', 'Simon ', '01/11/2000', 'Male', 'Single', 'Student', 'ghanaian', 'Nogsenia', '', 'Nogsenia\r\nCAF 88', '', '', '', 0, 0, '', '2.34E+11', '0000-00-00 00:00:00.000000', '', 0, 0, '', '2014'),
(204, 'Mr.', 'Abiro', 'Christian ', '19/09/1983', 'Male', 'Single', 'Sale Executive', 'ghanaian', 'Namolo', '', 'Namolo \r\nAdjacent the Pentcost Church\r\nThe house painted green', '233208261944', '233503955889', '', 0, 0, '', '2.34E+11', '0000-00-00 00:00:00.000000', '', 0, 0, '', '2004'),
(205, 'Dr.', 'Nana', 'Akosua Ansah', '22/09/1974', 'Female', 'Married', 'Medical Doctor', 'ghanaian', 'Bosco', 'Box 114', 'Bosco \r\nSAK 90', '233246729726', '', 'aansah@hotmail.com', 0, 0, '', '2.33E+11', '0000-00-00 00:00:00.000000', '', 0, 0, '', '2000'),
(206, 'Mr.', 'Felix', 'Awupale ', '23/02/1992', 'Male', 'Single', 'Student', 'ghanaian', 'Nogsinia', '', 'Nogesinia', '233241870052', '', 'awupalefelix@gmail.com', 0, 0, '', '2.33E+11', '0000-00-00 00:00:00.000000', '', 0, 0, '', '2014'),
(207, 'Mr.', 'Andrews', 'Bedeley ', '24/05/2002', 'Male', 'Single', 'Student', 'ghanaian', 'UDS', '', 'UDS\r\nChefs secrets', '', '', '', 0, 0, '', '2.33E+11', '0000-00-00 00:00:00.000000', '', 0, 0, '', '2006'),
(208, 'Mr.', 'Mark', 'Macmillan Kolley', '12/12/1966', 'Male', 'Married', 'Cook', 'ghanaian', 'UDS', '', 'UDS\r\nChefs Secret', '233244707408', '', '', 0, 0, '', '2.34E+11', '0000-00-00 00:00:00.000000', '', 0, 0, '', '2006'),
(209, 'Mrs.', 'Catherine', 'Kolley ', '13/06/1965', 'Female', 'Married', 'Health Worker', 'ghanaian', 'UDS', '', '', '233249158680', '', '', 0, 0, '', '2.34E+11', '0000-00-00 00:00:00.000000', '', 0, 0, '', '2006'),
(210, 'Miss.', 'Amanda', 'Ansah ', '23/06/2008', 'Female', 'Single', 'Pupil', 'ghanaian', 'Bosco', '', 'Bosco \r\nSAK 90', '233245279984', '', '', 0, 0, '', '2.33E+11', '0000-00-00 00:00:00.000000', '', 0, 0, '', '2008'),
(211, 'Mr.', 'Alphonse', 'Ansah ', '03/02/2003', 'Male', 'Single', 'Pupil', 'ghanaian', 'Bosco', '', 'Bosco \r\nSAK 90', '233245279984', '', '', 0, 0, '', '2.33E+11', '0000-00-00 00:00:00.000000', '', 0, 0, '', '2003'),
(212, 'Mr.', 'Andrew', 'Ansah ', '28/10/2004', 'Male', 'Single', 'Pupil', 'ghanaian', 'Bosco', '', 'Bosco \r\nSAK 90', '233245279984', '', '', 0, 0, '', '2.33E+11', '0000-00-00 00:00:00.000000', '', 0, 0, '', '2004'),
(213, 'Mr.', 'Samuel', 'Ansah ', '03/12/1996', 'Male', 'Single', 'Student', 'ghanaian', 'Bosco', '', 'Bosco\r\nSAK 90', '233209904260', '233275822013', 'samuelansah40@gmail.com', 0, 0, '', '2.33E+11', '0000-00-00 00:00:00.000000', '', 0, 0, '', '2011'),
(214, 'Miss.', 'Apalazoya', 'Eunice ', '16/02/1997', 'Female', 'Single', 'Pupil', 'ghanaian', 'Balobia', '', 'Bolobia \r\nSpecial School Quarters', '', '', '', 0, 0, '', '2.34E+11', '0000-00-00 00:00:00.000000', '', 0, 0, '', '2014'),
(215, 'Miss.', 'Helina', 'Boampong ', '08/06/1989', 'Female', 'Single', 'Student', 'ghanaian', 'Pungu', 'Box 6620, Adum-Kumasi', 'Pungu Avenue\r\nVeronica Memorial House', '233249921285', '233504821988', 'helinaboampong@yahoo.com', 0, 0, '', '', '0000-00-00 00:00:00.000000', '', 0, 0, '', '2014'),
(216, 'Miss.', 'Apalazoya', 'Grace ', '04/02/2000', 'Female', 'Single', 'Student', 'ghanaian', 'Balobia', '', 'Balobia\r\nOpposite Fountain Gate Chapel\r\nCAF 74', '', '', '', 0, 0, '', '2.34E+11', '0000-00-00 00:00:00.000000', '', 0, 0, '', '2014'),
(217, 'Mr.', 'Boaz', 'Tenkorang Boadi', '24/07/2012', 'Male', 'Single', 'Pupil', 'ghanaian', 'Balobia', '', 'Balobia \r\nBehind the Goil filling station', '233249672845', '', '', 0, 0, '', '2.34E+11', '0000-00-00 00:00:00.000000', '', 0, 0, '', '2015'),
(218, 'Mr.', 'Stephen', 'Abasue ', '26/10/2006', 'Male', 'Single', 'Student', 'ghanaian', 'Pungu', '', 'Pungu \r\nBehind Pungu Primary School\r\nMEC 57', '233541591803', '', '', 0, 0, '', '2.34E+11', '0000-00-00 00:00:00.000000', '', 0, 0, '', '2012'),
(219, 'Mrs.', 'Justina', 'Kokem ', '01/01/1971', 'Female', 'Married', 'Trader', 'ghanaian', 'Yutongnia', '', 'Yutongnia \r\nFew metres away from LCI Navrongo Aparache\r\nThe house is a mud house by a mango tree\r\nThe house is called Adua house', '233541596835', '', '', 0, 0, '', '2.34E+11', '0000-00-00 00:00:00.000000', '', 0, 0, '', '2014'),
(220, 'Mrs.', 'Ernestina', 'Awope ', '01/01/1976', 'Female', 'Widowed', 'Trader', 'ghanaian', 'Utognia', '', 'Utognia\r\nUse the Balobia road leading to Utonia, \r\nAsk of Awope house. \r\nYou will find a tree infront of the house', '', '', '', 0, 0, '', '2.33E+11', '0000-00-00 00:00:00.000000', '', 0, 0, '', '2012'),
(221, 'Mrs.', 'Kenia', 'Rose ', '01/01/1969', 'Female', 'Married', '', 'ghanaian', 'Mission Road', '', 'Mission Junction\r\nKwasenu\r\nBehind LCI Navrongo Aparache\r\nA baobab and two mango trees infront of the house.', '233248992759', '', '', 0, 0, '', '2.33E+11', '0000-00-00 00:00:00.000000', '', 0, 0, '', '2011'),
(223, 'Miss.', 'Emmanuella', 'Djagbletey ', '17/08/1998', 'Female', 'Single', 'Student', 'ghanaian', 'Nogsenia', 'Box 99, Walewale', 'Nogesenia \r\nAround Mayaga Hotel\r\nMadam Asibi\'s house', '233244204404', '', '', 0, 0, '', '2.33E+11', '0000-00-00 00:00:00.000000', '', 0, 0, '', '2008'),
(224, 'Miss.', 'Ivy', 'Azagenia ', '13/11/1986', 'Female', 'Single', 'Student', 'ghanaian', 'Tankuna', '', '', '233248992751', '', '', 0, 0, '', '2.33E+11', '0000-00-00 00:00:00.000000', '', 0, 0, '', '2012'),
(225, 'Miss.', 'Abisiba', 'Faustina ', '10/06/1996', 'Female', 'Single', 'Student', 'ghanaian', 'Nangalkinia', '', 'Nangalkinia\r\nWisdom Gate International\r\nBehind Navrongo Research', '233507465792', '', 'abisibafaustina@gmail.com', 0, 0, '', '2.34E+11', '0000-00-00 00:00:00.000000', '', 0, 0, '', '2010'),
(226, 'Miss', 'Akundaare', 'Ancilla ', '1998/02/24', 'Female', 'Single', 'Student', 'ghanaian', 'Nangalkinia', '', 'Nangalkinia\r\nWisdom Gate International\r\nBehind Navrongo Research', '233507465792', '', 'akundaareancilla@yahoo.com', 0, 253, 'Shepherd', '0245279984', '2017-01-21 23:55:07.310588', 'IMG_20170115_153043.jpg', 0, 0, '02/24', '2010'),
(227, 'Mr.', 'Lamptey', 'Lawson ', '24/04/1992', 'Male', 'Single', 'Student', 'ghanaian', 'Nogesinia', '', 'Nogesinia \r\nBehind the Basina JHS\r\nPost office strret', '233244588807', '233507845835', '', 0, 0, '', '2.34E+11', '0000-00-00 00:00:00.000000', '', 0, 0, '', '2014'),
(228, 'Miss.', 'Awula', 'Doris ', '11/11/1996', 'Female', 'Single', 'Student', 'ghanaian', 'Mission Junction', '', 'Mission junction \r\nBehind LCI Navrong Aparache', '233206687681', '233244386025', '', 0, 0, '', '2.34E+11', '0000-00-00 00:00:00.000000', '', 0, 0, '', '2015'),
(229, 'Mr.', 'Rogger', 'Aziriya ', '18/02/1992', 'Male', 'Single', 'Student', 'ghanaian', 'Nayagenia', '', 'Nayagenia\r\nNear the Club house\r\nThere is a borehole infront of the house', '233545156803', '', '', 0, 0, '', '2.34E+11', '0000-00-00 00:00:00.000000', '', 0, 0, '', '2014'),
(230, 'Mr.', 'Awuni', 'Denis Azabra', '07/02/1982', 'Male', 'Married', 'Clinical Researcher', 'ghanaian', 'Nogsenia', '', 'Hospital Quarters \r\nCAV 17', '233244170007', '', 'denisazabra@gmail.com', 0, 0, '', '2.33E+11', '0000-00-00 00:00:00.000000', '', 0, 0, '', '2014'),
(231, 'Mr.', 'Richard', 'Ampredu', '1988/11/17', 'Male', 'Married', 'Pastor', 'ghanaian', 'Namolo', '', 'Namolo', '233507465792', '233245829848', 'richardampradu@yahoo.com', 0, 0, '', '2.33E+11', '2017-01-22 00:05:46.042269', 'IMG_20170115_154103.jpg', 0, 0, '11/17', '1998'),
(233, 'Mrs.', 'Francisca', 'Risch ', '', 'Female', 'Married', 'Teacher', 'ghanaian', 'Nogsenia', '', 'Nogsenia \r\nResearch area\r\nTake the path directly after the research gate and in 2 minutes you will get to a yellow builing', '233240276597', '', '', 0, 0, '', '2.33E+11', '2017-04-24 12:10:04.978232', 'IMG_20170424_110134.jpg', 0, 0, '', '2014'),
(234, 'Mr.', 'Apke', 'Borbi ', '', 'Male', 'Married', 'Teacher', 'ghanaian', 'Nogsenia', '', 'Nogsenia\r\nYellow self container adjecent NHRC', '233242381193', '233200609897', 'byakpe@yahoo.com', 0, 0, '', '2.33E+11', '2017-04-24 12:07:19.064694', 'IMG_20170424_105939.jpg', 0, 0, '', '2009'),
(235, 'Mr.', 'Lawson', 'Ashorm ', '1978/11/07', 'Male', 'Married', 'Civil Servant', 'ghanaian', 'Nogsenia', '', 'Mission Road \r\nLCH 3A', '233205226922', '233266377250', '', 0, 0, '', '2.33E+11', '2017-01-18 21:24:03.306459', 'IMG_20170115_152322.jpg', 0, 0, '11/07', '2011'),
(236, 'Mr.', 'Paul', 'Kutonge Kaba', '1982/06/29', 'Male', 'Single', 'Teacher', 'ghanaian', 'Nogsenia', 'Box 2, Paga Primary School', 'Nogsenia \r\nMayaga area\r\nCAM 39', '233208964662', '233246703242', 'paulkutongekaba@yahoo.com', 0, 0, '', '2.34E+11', '2017-01-21 22:22:48.611807', 'IMG_20170115_154011.jpg', 0, 0, '06/29', '2002'),
(237, 'Miss.', 'Evelyn', 'Batuuro Zori', '1989/10/18', 'Female', 'Single', 'Teacher', 'ghanaian', 'Bosco', 'LCMSN BOX 71', 'Bosco\r\nUncle Patricks house', '233244071507', '233208567601', 'zorievelyn@yahoo.com', 0, 0, '', '2.34E+11', '2017-01-25 11:46:09.812557', 'IMG_20170115_153006.jpg', 0, 0, '10/18', '2007'),
(238, 'Mrs.', 'Eunice', 'Elizabeth Djagbletey', '1963/07/07', 'Female', 'Married', 'Teacher', 'ghanaian', 'Nogsenia', '', 'Nogsenia \r\nAround Mayaga Hotel\r\nMadam Asibis house', '233246179949', '233509880901', 'eunicedjagbletey@gmail.com', 0, 38, 'Husband', '0504406018', '2017-01-21 23:49:45.077817', 'IMG_20170115_153101.jpg', 0, 0, '07/07', '1997'),
(239, 'Miss.', 'Francisca', 'Teni Nabareseh', '1992/10/18', 'Female', 'Single', 'Student', 'ghanaian', 'Namolo', '', 'Namolo \r\nPaga road \r\nBehind Standard School', '233541988811', '', '', 0, 0, '', '2.33E+11', '2017-01-21 22:37:52.119580', 'IMG_20170115_160650.jpg', 0, 0, '10/18', '2005'),
(240, 'Miss.', 'Achana', 'Christiana ', '03/01/1991', 'Female', 'Single', 'Student Nurse', 'ghanaian', 'Nogsenia', 'Box 185, Navrongo', 'Nogsenia \r\nOpposite War Memorial Hospital', '233542570553', '233507812146', 'achanachristiana@yahoo.com', 0, 0, '', '2.33E+11', '0000-00-00 00:00:00.000000', '', 0, 0, '', '2005'),
(241, 'Miss.', 'Catherine', 'Attoh ', '', 'Female', 'Single', 'Teacher', 'ghanaian', 'Pungu', '', 'Pungu', '233248732562', '', 'hottakate@gmail.com', 0, 0, '', '2.33E+11', '2017-02-25 15:57:39.045116', 'IMG-20170225-WA0011.jpg', 0, 0, '', '2013'),
(242, 'Mr.', 'Nipuna', 'Kennedy ', '1986/11/15', 'Male', 'Single', 'Trader', 'ghanaian', 'Nayagenia', '', 'Navrongo', '233248992707', '233508163073', '', 0, 0, '', '2.33E+11', '2017-01-18 21:36:36.809137', 'IMG_20170115_152416.jpg', 0, 0, '11/15', '2012'),
(243, 'Mr.', 'Adagyine', 'Alex ', '1977/07/26', 'Male', 'Married', 'Trader/Carpenter', 'ghanaian', 'Bolga-Soe', '', 'Bolgatanga', '233249213262', '', '', 0, 0, '', '2.33E+11', '2017-01-18 22:20:45.641239', 'IMG_20170115_152752.jpg', 0, 0, '07/26', '2007'),
(244, 'Mr.', 'Micheal', 'Djagbletey ', '1996/01/30', 'Male', 'Single', 'Student', 'ghanaian', 'Nogsenia', 'Box 99, Walewale', 'Nogsenia \r\nMayaga Area\r\nMadam Asibis house', '233241132090', '233261138080', 'mdjagbletey1@gmail.com', 0, 38, 'Pastor', '0504406018', '2017-01-21 23:20:10.815076', 'IMG_20170115_152457.jpg', 0, 0, '01/30', '2007'),
(245, 'Mr.', 'Wilberforce', 'Tonyli Bedzrah', '1982/10/26', 'Male', 'Single', 'Self Employed', 'ghanaian', 'Namolo', '', 'Namolo', '233542021434', '233204513161', 'wilberforcebedzrah@gmail.com', 0, 0, '', '2.34E+11', '2017-01-21 19:58:33.166175', 'IMG_20170115_152839.jpg', 0, 0, '10/26', '2007'),
(247, 'Mr', 'Emmanuel', 'Kpabitey', '2017-01-20', 'Male', 'Single', 'Teacher', 'Ghana', 'Yikene', '', 'Behind ideal college', '0574555558', '', 'sirmoco.sm@gmail.com', 2, 39, 'Mother', '0574734705', '2017-04-30 05:08:01.734682', 'lcinavrongo_org_kj.jpg', 0, 0, '01-20', ''),
(248, 'Mr', 'Louis', 'Ivan Ofori-Nuamah', '', 'Male', 'Single', 'Student', 'Ghana', 'UDS', '', '', '0241319008', '', '', 0, 0, '', '', '2017-01-18 21:08:08.881674', 'lcinavrongo_org_IMG_20170115_152043.jpg', 0, 0, '', ''),
(249, 'Mr', 'Raphael', 'Aniwo', '', '', 'Single', 'Student', 'Ghana', 'Nayagnia', '', '', '0241319008', '', '', 0, 0, '', '', '2017-01-18 21:10:20.685808', 'lcinavrongo_org_IMG_20170115_152153.jpg', 0, 0, '', ''),
(250, 'Mr', 'Sampson', 'Tsey', '', '', 'Maried', 'Student', '', 'Bolgatanga', '', '', '0202779625', '', '', 0, 0, '', '', '2017-01-18 21:12:57.628086', 'lcinavrongo_org_IMG_20170115_152220.jpg', 0, 0, '', ''),
(251, 'Mr', 'Simon', 'Atanga', '', '', 'Single', 'Student', '', '', '', '', '0549603072', '', '', 0, 0, '', '', '2017-01-18 21:29:40.385210', 'lcinavrongo_org_IMG_20170115_152248.jpg', 0, 0, '', ''),
(253, 'Dr.', 'Patrick', 'Ansah', '', '', 'Maried', 'Dr', 'Ghana', 'John Bosco', '', 'Behind John Bosco', '0245279984', '', 'patansah@hotmail.com', 0, 205, '', '233246729726', '2017-01-18 21:44:00.322444', 'lcinavrongo_org_IMG_20170115_152430.jpg', 0, 0, '', ''),
(254, 'Mrs', 'Theresa', 'Awuri', '', '', 'Maried', '', 'Ghana', '', '', '', '0245160740', '', '', 0, 0, '', '', '2017-01-18 21:49:09.566793', 'lcinavrongo_org_IMG_20170115_152512.jpg', 0, 0, '', ''),
(255, 'Mr', 'Sampson ', 'Dua Frimpong', '', '', 'Maried', '', 'Ghana', '', '', '', '0542089950', '', '', 0, 57, '', '', '2017-01-18 21:54:56.510017', 'lcinavrongo_org_IMG_20170115_152538.jpg', 0, 0, '', ''),
(257, 'Miss', 'Elizabeth ', 'Nuhu', '', '', 'Single', '', '', '', '', '', '0503617003', '', '', 0, 0, '', '', '2017-01-18 22:03:31.012832', 'lcinavrongo_org_IMG_20170115_152640.jpg', 0, 0, '', ''),
(258, 'Mr', 'Evans', 'Awo Wepia', '', 'Male', 'Single', 'Student', 'Ghana', '', '', '', '0245541373', '', '', 0, 0, '', '', '2017-01-21 20:20:39.907443', 'lcinavrongo_org_IMG_20170115_153049.jpg', 0, 0, '', ''),
(261, 'Mrs', 'Rosemary', 'Assorow', '', 'Female', 'Married', 'Trader', 'Ghana', 'Balobia', '', 'Madam Marys house Adjacent the new Mosque , CAK 65', '233547176420', '', '', 0, 174, '', '233203483554', '2017-01-21 22:23:12.807765', 'lcinavrongo_org_IMG_20170115_152728.jpg', 0, 0, '', ''),
(262, 'Mr', 'Cyrus', 'Nii Aryee', '', 'Male', 'Single', 'Teacher', 'Ghana', 'Behind Boscos', '', '', '0269749285', '', '', 0, 253, 'Friend', '0245279984', '2017-01-21 21:20:07.319726', 'lcinavrongo_org_IMG_20170115_153326.jpg', 0, 0, '', ''),
(263, 'Miss', 'Patience', 'Kolley', '', '', 'Single', '', 'Ghana', '', '', '', '0505002162', '', '', 0, 208, '', '233244707408', '2017-01-21 21:23:41.305354', 'lcinavrongo_org_IMG_20170115_153505.jpg', 0, 0, '', ''),
(264, 'Mr', 'Isaac', 'Opei', '', '', 'Married', 'Teacher', '', '', '', '', '0540307609', '', '', 0, 0, '', '', '2017-01-21 22:18:03.244238', 'lcinavrongo_org_IMG_20170115_153728.jpg', 0, 0, '', ''),
(265, 'Mr', 'Delali', 'Polycarp', '', '', 'Married', 'Teacher', '', 'Bolgatanga', '', 'Bolgatanga - Yikene Opposite Total Filling Station', '0244185530', '', '', 0, 0, '', '', '2017-01-21 22:21:16.828995', 'lcinavrongo_org_IMG_20170115_153747.jpg', 0, 0, '', ''),
(266, 'Miss', 'Christina', 'Quagraine', '', '', 'Single', 'Student', '', '', '', '', '0200751230', '', '', 0, 0, '', '', '2017-01-21 22:32:28.838289', 'lcinavrongo_org_IMG_20170115_154225.jpg', 0, 0, '', ''),
(267, 'Miss', 'Rose', 'Tapani', '', '', 'Single', 'Health Worker', '', '', '', '', '0242624656', '', '', 0, 0, '', '', '2017-01-21 22:45:04.098159', 'lcinavrongo_org_IMG_20170115_152002.jpg', 0, 0, '', ''),
(268, 'Mrs', 'Modesta', 'Asukanyoge', '', '', 'Single', 'Student', '', '', '', '', '0547549507', '', '', 0, 0, '', '', '2017-01-21 22:47:56.842461', 'lcinavrongo_org_IMG_20170115_152137.jpg', 0, 0, '', ''),
(269, 'Mr', 'Cletus', 'Ajadewo', '', '', 'Married', 'Other', '', '', '', '', '0553355215', '', '', 0, 49, 'Friend', '0206441122', '2017-01-21 22:52:53.938156', 'lcinavrongo_org_IMG_20170115_152210.jpg', 0, 0, '', ''),
(270, 'Mr', 'Prince', 'Evans', '', 'Male', '', '', 'Ghana', '', '', '', '0546714810', '', '', 0, 0, '', '', '2017-01-21 22:56:15.974305', 'lcinavrongo_org_IMG_20170115_152228.jpg', 0, 0, '', ''),
(271, 'Miss', 'Cynthia', 'Aperh', '', '', 'Single', 'Security Personnel ', '', '', '', '', '0208151251', '', '', 0, 0, '', '', '2017-01-21 22:58:15.344324', 'lcinavrongo_org_IMG_20170115_152253.jpg', 0, 0, '', ''),
(273, 'Mrs', 'Lawrencia', 'Awanu', '', '', 'Married', 'Teacher', 'Ghana', '', '', '', '0540695391', '', '', 0, 61, 'Husband', '0501085556', '2017-01-21 23:30:34.504917', 'lcinavrongo_org_IMG_20170115_152711 (1).jpg', 0, 0, '', ''),
(274, 'Miss', 'Mary', 'Adatekey', '', '', 'Single', 'Student', '', '', '', '', '', '', '', 0, 254, 'Shepherd', '0245160740', '2017-01-21 23:37:08.296759', 'lcinavrongo_org_IMG_20170115_152733.jpg', 0, 0, '', ''),
(275, 'Mrs', 'Gifty ', 'Polycarp', '', '', 'Married', 'Health Worker', '', '', '', '', '0202024615', '', '', 0, 265, 'Husband', '0244185530', '2017-01-21 23:45:20.232049', 'lcinavrongo_org_IMG_20170115_152800 (1).jpg', 0, 0, '', ''),
(276, 'Miss', 'Bashiratu', 'Kambasi', '', '', 'Single', 'Student', '', '', '', '', '0554264259', '', '', 0, 231, 'Shepherd', '233507465792', '2017-01-22 00:03:22.977268', 'lcinavrongo_org_IMG_20170115_153147.jpg', 0, 0, '', ''),
(277, 'Miss', 'Rachael', 'Adwoa Ampradu', '', 'Female', 'Single', 'Student', '', '', '', 'Pungu road behind Methodist', '0209150643', '', '', 0, 231, 'Sibling', '', '2017-03-19 18:20:41.609879', 'lcinavrongo_org_IMG_20170115_153338 (1).jpg', 0, 0, '', ''),
(279, 'Miss', 'Bankpiabu', 'Sheila', '', 'Female', 'Single', '', 'Ghana', 'Agric Office', '', 'Close to Agric Office', '0243779000', '', '', 0, 57, 'Shepherd', '0203843554', '2017-03-23 18:18:56.834931', 'IMG-20170319-WA0006.jpg', 0, 0, '', ''),
(289, 'Mr', 'Patrick', 'Teye', '', 'Male', 'Single', '', 'Ghana', 'Mayaga', '', 'mayaga', '', '', '', 0, 0, '', '', '2017-02-19 15:41:39.783036', 'lcinavrongo_org_IMG_20170219_150942_526.JPG', 0, 0, '', ''),
(290, 'Mr', 'Robert ', 'Asori', '', 'Male', 'Married', 'Self Employed', 'Ghana', 'Doba', '', 'Walenkaki junction,  Doba ', '0248233372', '', '', 0, 38, 'Friend', '0504406018', '2017-04-24 16:17:51.137610', 'IMG_20170424_160925.jpg', 0, 0, '', ''),
(293, 'Mrs', 'Lydia', 'Ayawah', '', 'Female', 'Married', 'Teacher', 'Ghana', 'Balobia CAF 71', '', 'Behind Kwaku Washing Bay', '0201238017', '0242214641', '', 0, 254, '', '0245160740', '2017-02-24 23:44:05.723502', 'lcinavrongo_org_IMG-20170219-WA0005.jpg', 0, 0, '', ''),
(294, '', 'Isaac', 'Bila', '', 'Male', '', '', 'Ghana', 'Nogsenia', '', 'He stays behind Anebola house. Around Think Tech cafe.', '0201246983', '', '', 0, 0, '', '', '2017-02-25 14:42:14.637291', 'lcinavrongo_org_IMG-20170205-WA0001.jpg', 0, 0, '', ''),
(298, '', 'Emmanuel', 'Tagoe', '', 'Male', '', '', 'Ghana', 'St. Benedict Technical Institute', '', '', '0506900390', '', '', 0, 0, '', '', '2017-02-25 14:49:15.987164', 'lcinavrongo_org_IMG-20170129-WA0001.jpg', 0, 0, '', ''),
(300, '', 'Christopher', 'Moot', '', 'Male', 'Single', 'Student', 'Ghana', 'St. Benedict Institute', '', '', '0246127598', '', '', 0, 0, '', '', '2017-02-25 15:00:02.560771', 'lcinavrongo_org_IMG-20170122-WA0000.jpg', 0, 0, '', ''),
(301, 'Mr', 'John', 'Adulo', '', 'Male', 'Married', '', 'Ghana', 'Nayagnia', '', '', '0540342755', '', '', 0, 0, '', '', '2017-02-25 15:32:30.732814', 'lcinavrongo_org_IMG-20170225-WA0010.jpg', 0, 0, '', ''),
(304, '', 'Augustina', 'Anaman', '', 'Female', 'Single', 'Health Worker', 'Ghana', '', '', '', '0206504829', '', '', 0, 0, '', '', '2017-02-26 14:40:20.518157', 'user.png', 0, 0, '', ''),
(305, 'Mrs', 'Faustina', 'Kwara', '', '', 'Married', '', 'Ghana', '', '', '', '0244824036', '', '', 0, 0, '', '', '2017-02-26 14:42:23.811298', 'user.png', 0, 0, '', ''),
(306, 'Miss', 'Esther', 'Atanga', '', 'Female', 'Single', '', '', 'Pungu Road', '', 'Pungu Road', '0247808848', '', '', 0, 237, '', '233244071507', '2017-04-23 17:40:01.431459', 'user.png', 0, 0, '', ''),
(307, 'Mrs', 'Juliana', 'Kapono', '', 'Female', 'Married', '', 'Ghana', '', '', 'Navrongo', '0507116923', '', '', 0, 0, '', '', '2017-02-26 15:04:14.418262', 'IMG_20170129_124320-2.jpg', 0, 0, '', ''),
(309, 'Miss', 'Adowa', 'Charlotte', '', 'Female', 'Single', '', 'Ghana', 'Behind Goil filling station, Modesta House', '', 'Behind Goil filling station, Modesta House', '0547007544', '', '', 0, 0, '', 'Modesta Tantra', '2017-04-23 17:33:26.434671', 'user.png', 0, 0, '', ''),
(310, 'Mrs', 'Mary', 'Kansaki', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '2017-02-26 15:10:34.181817', 'user.png', 0, 0, '', ''),
(311, 'Mrs', 'Mary', 'Akolgo', '', '', 'Single', '', '', '', '', '', '0508893409', '', '', 0, 0, '', '', '2017-02-26 16:00:20.654519', 'user.png', 0, 0, '', ''),
(312, 'Mr', 'Stephen', 'Salia', '', 'Male', 'Married', '', '', '', '', 'Navrongo', '0204533820', '', '', 1, 0, '', '', '2017-04-30 08:23:09.613673', 'IMG_20170129_124533-2.jpg', 0, 0, '', ''),
(314, '', 'Patience', 'Akologo', '', 'Female', 'Single', 'Student', 'Ghana', 'Bolga', '', 'Ideal college campus', '0246084458', '', '', 0, 47, 'Shepherd', '0244165978', '2017-02-26 22:15:31.421083', 'user.png', 0, 0, '', ''),
(316, '', 'Grace ', 'Lambon', '', 'Female', 'Single', 'Student', 'Ghana', 'Bolga', '', 'Ideal college campus', '0556869048', '', '', 0, 47, 'Shepherd', '0244165978', '2017-02-26 22:17:35.767110', 'user.png', 0, 0, '', ''),
(318, 'Miss', 'Paulina', 'Anaaba', '', 'Female', 'Single', 'Student', 'Ghana', 'St. Benedict Institute', '', 'Bolga road', '055 428 5328', '', '', 0, 0, '', '', '2017-04-23 17:05:04.850496', 'IMG_20170423_180301.jpg', 0, 0, '', ''),
(319, 'Miss', 'Freda', 'Ayaga', '', 'Female', 'Single', '', 'Ghana', 'Vonania', '', 'Mayaga', '020 414 1331', '', '', 0, 38, 'Shepherd', '0504406018', '2017-04-30 16:17:50.400612', '20170423_170805.jpg', 0, 0, '', ''),
(337, 'Miss', 'Aboko', 'Sandra', '2000-06-14', 'Female', 'Single', 'Student', 'Ghana', '', '', 'Mayaga', '0207611121', '', '', 0, 189, 'Friend', '233541591803', '2017-04-23 16:59:49.432385', '20170423_165818.jpg', 0, 0, '06-14', ''),
(338, 'Miss', 'Lamisi', 'Apeakwo', '', 'Female', 'Single', 'Student', 'Ghana', 'Mayaga', '', 'Behind Abigail house. Close to the borehole', '1111111111', '', '', 0, 237, '', '233244071507', '2017-04-23 16:56:41.439110', '20170423_165515.jpg', 0, 0, '', ''),
(342, 'Miss', 'Aseima', 'Angela', '2003-04-09', 'Female', 'Single', 'Student', 'Ghana', 'Addah primary ', '', 'Addah primary school\r\n', '1111111111', '', '', 0, 0, '', '', '2017-04-23 16:42:47.765741', 'user.png', 0, 0, '04-09', ''),
(343, 'Miss', 'Racheal', 'Akateng', '1994-12-10', 'Female', 'Single', 'Student', 'Ghana', 'Bolga', '', 'Bolga', '0561586400', '', 'akatengracheal@gmail.com', 1, 47, '', '0244165978', '2017-04-30 15:58:26.072994', 'user.png', 0, 0, '12-10', '');

-- --------------------------------------------------------

--
-- Table structure for table `member_bin`
--

CREATE TABLE `member_bin` (
  `bin_id` int(250) NOT NULL,
  `salutation` varchar(50) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `othername` varchar(250) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `maritalstatus` varchar(250) NOT NULL,
  `occupation` varchar(250) NOT NULL,
  `nationality` varchar(250) NOT NULL,
  `residence` varchar(255) NOT NULL,
  `post_address` varchar(255) NOT NULL,
  `directiontohse` text NOT NULL,
  `mobile1` varchar(250) NOT NULL,
  `mobile2` varchar(255) NOT NULL,
  `email` varchar(250) NOT NULL,
  `cp` int(250) NOT NULL,
  `cp_rel` varchar(255) NOT NULL,
  `cp_mobile` varchar(255) NOT NULL,
  `picture` text NOT NULL,
  `lng` varchar(255) NOT NULL,
  `lat` varchar(255) NOT NULL,
  `bday` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member_bin`
--

INSERT INTO `member_bin` (`bin_id`, `salutation`, `firstname`, `lastname`, `othername`, `dob`, `gender`, `maritalstatus`, `occupation`, `nationality`, `residence`, `post_address`, `directiontohse`, `mobile1`, `mobile2`, `email`, `cp`, `cp_rel`, `cp_mobile`, `picture`, `lng`, `lat`, `bday`) VALUES
(60, 'Mr', 'Kwabena', 'Nimo', '', '1994-06-08', 'Female', 'Maried', 'Pastor', '', '', '', 'Opposite Ideal College', '234235235', 'Yikene', 'kpabiteyd@gmail.com', 19, '', '0574664774', 'data:image/jpeg;base64,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', '-0.1869644', '5.6037168', '06-08'),
(61, 'Mrs.', 'Evelyn', 'Sakeah Salem', '', '13/02/1971', 'Female', 'Married', 'Reseach Fellow', 'ghanaian', 'Nogsenia', 'Box 114, Navrongo', 'Near Catholic Mission, CAQ 157', '233206094768', '', 'esakeah@yahoo.co.uk', 0, '', '2.33E+11', '', '', '', '/1971'),
(62, '', 'Michael', 'Djagbletey', '', '', 'Male', 'Single', 'Student', 'Ghana', '', '', 'malaga hotel', '', '', '', 38, '', '0504406018', '', '', '', ''),
(63, 'Mr', 'Sampson ', 'Dua Frimpong', '', '', '', 'Maried', '', 'Ghana', '', '', '', '0542089950', '', '', 57, '', '0203843554', 'lcinavrongo_org_IMG_20170115_152538.jpg', '', '', ''),
(64, 'Mr', 'Prince', 'Nyamekye', '', '', '', 'Single', 'Student', '', '', '', '', '', '', '', 233, 'Sibling', '233240276597', 'lcinavrongo_org_IMG_20170115_153244.jpg', '', '', ''),
(65, 'Mrs', 'Mathilda', 'Ampradu', '', '', '', '', '', '', '', '', '', '0507465793', '', '', 0, '', '', '', '', '', ''),
(66, 'Pastor', 'Richard', 'Ampradu', '', '', 'Male', 'Maried', 'Pastor', 'Ghana', 'Namolo', '', 'Around Methodist Church', '0209150643', '0245829848', 'richardampradu@yahoo.com', 0, '', '', '', '', '', ''),
(67, 'Mr', 'Michael', 'Djagbletey', '', '1996/01/30', 'Male', 'Single', 'Student', 'Ghana', '', '', 'malaga hotel', '0208511760', '', 'mdjagbletey@gmail.com', 38, '', '0504406018', '', '', '', '01/30'),
(68, 'Miss', 'Bashiratu', 'Kambasi', '', '', '', 'Single', 'Student', '', '', '', '', '0554264259', '', '', 231, 'Shepherd', '233507465792', 'lcinavrongo_org_IMG_20170115_153147.jpg', '', '', ''),
(69, 'Mr', 'Simon', 'Atanga', '', '', '', 'Single', 'Student', '', '', '', '', '0549603072', '', '', 0, '', '', 'lcinavrongo_org_IMG_20170115_152248.jpg', '', '', ''),
(70, 'Miss', 'Bankpiabu', 'Sheila', '', '', 'Female', 'Single', '', 'Ghana', 'Agric Office', '', 'Close to Agric Office', '0243779000', '', '', 57, 'Shepherd', '0203843554', 'lcinavrongo_org_IMG-20170219-WA0003.jpg', '', '', ''),
(71, 'Miss', 'Bankpiabu', 'Sheila', '', '', 'Female', 'Single', '', 'Ghana', 'Agric Office', '', 'Close to Agric Office', '0243779000', '', '', 57, 'Shepherd', '0203843554', 'lcinavrongo_org_IMG-20170219-WA0003.jpg', '', '', ''),
(72, 'Miss', 'Bankpiabu', 'Sheila', '', '', 'Female', 'Single', '', 'Ghana', 'Agric Office', '', 'Close to Agric Office', '0243779000', '', '', 57, 'Shepherd', '0203843554', 'lcinavrongo_org_IMG-20170219-WA0003.jpg', '', '', ''),
(73, '', 'Test', 'Test name', '', '2017-02-01', 'Male', 'Married', 'Student', 'Ghana', '', '', '', '', '', '', 0, '', '', 'lcinavrongo_org_IMG-20170216-WA0010.jpg', '', '', '02-01'),
(74, '', 'Test', 'Test name', '', '2017-02-01', 'Male', 'Married', 'Student', 'Ghana', '', '', '', '', '', '', 0, '', '', 'lcinavrongo_org_IMG-20170216-WA0010.jpg', '', '', '02-01'),
(75, '', 'Atest', 'Latest ', '', '2017-02-01', 'Female', 'Single', 'Health Worker', 'Ghana', '', '', 'Gghjh ghjjjh', '', '', '', 0, '', '', 'lcinavrongo_org_IMG-20170215-WA0008.jpg', '', '', '02-01'),
(76, '', 'Atest', 'Latest ', '', '2017-02-01', 'Female', 'Single', 'Health Worker', 'Ghana', '', '', 'Gghjh ghjjjh', '', '', '', 0, '', '', 'lcinavrongo_org_IMG-20170215-WA0008.jpg', '', '', '02-01'),
(77, '', 'Test', 'Test name', '', '2017-02-01', 'Male', 'Married', 'Student', 'Ghana', '', '', '', '', '', '', 0, '', '', 'lcinavrongo_org_IMG-20170216-WA0010.jpg', '', '', '02-01'),
(78, '', 'Test', 'Test name', '', '2017-02-01', 'Male', 'Married', 'Student', 'Ghana', '', '', '', '', '', '', 0, '', '', 'lcinavrongo_org_IMG-20170216-WA0010.jpg', '', '', '02-01'),
(79, 'Mr', 'aaaa', 'aaaaaaa', '', '2017-02-10', '', 'Single', 'Teacher', 'Ghana', 'home', '', 'near home', '', '', '', 39, '', '0574734705', 'lcinavrongo_org_741_kj.jpg', '', '', '02-10'),
(80, 'Mr', 'helloo', 'hellooo', '', '2017-02-10', 'Male', 'Single', 'Teacher', 'Ghana', 'sdfsedf', '', 'sdfsdfsdf', '', '', '', 39, '', '0574734705', 'user.png', '', '', '02-10'),
(81, 'Mrs', 'Juliana', 'Kapono', '', '', '', 'Married', '', 'Ghana', '', '', '', '0507116923', '', '', 0, '', '', 'user.png', '', '', ''),
(82, '', 'Patience', 'Akologo', '', '', 'Female', 'Single', 'Student', 'Ghana', 'Bolga', '', 'Ideal college campus', '0246084458', '', '', 47, 'Shepherd', '0244165978', 'user.png', '', '', ''),
(83, '', 'Emmanuel', 'Tagoe', '', '', 'Male', '', '', 'Ghana', 'St. Benedict Technical Institute', '', '', '0506900390', '', '', 0, '', '', 'lcinavrongo_org_IMG-20170129-WA0001.jpg', '', '', ''),
(84, '', 'Isaac', 'Bila', '', '', 'Male', '', '', 'Ghana', 'Nogsenia', '', 'He stays behind Anebola house. Around Think Tech cafe.', '0201246983', '', '', 0, '', '', 'lcinavrongo_org_IMG-20170205-WA0001.jpg', '', '', ''),
(85, '', 'Mohammed ', 'Hair Arafat', '', '', 'Male', '', '', 'Ghana', 'Namolo CAN 22', '', 'Around the Prison', '0502391998', '0501465813', '', 0, '', '', 'lcinavrongo_org_IMG-20170129-WA0000.jpg', '', '', ''),
(86, '', 'Robert ', 'Asori', '', '', 'Male', '', '', 'Ghana', 'Doba', '', '', '0248233372', '', '', 0, '', '', 'lcinavrongo_org_IMG-20170219-WA0003.jpg', '', '', ''),
(87, '', 'Robert ', 'Asori', '', '', 'Male', '', '', 'Ghana', 'Doba', '', '', '0248233372', '', '', 0, '', '', 'lcinavrongo_org_IMG-20170219-WA0003.jpg', '', '', ''),
(88, 'Mr.', 'Randy', 'Opoku ', '', '01/12/1988', 'Male', 'Single', 'Decorator', 'ghanaian', 'Namolo', '', 'Namolo\r\nBehind the old larry station \r\nAdjecent The Church of Pentecost, Central Assembly', '233245361717', '233200325244', 'randy.opoku.58@facebook.com', 0, '', '2.34E+11', '', '', '', '/1988'),
(89, '', 'Lamisi', 'Apeakwo', '', '', 'Female', 'Single', 'Student', 'Ghana', 'Mayaga', 'Behind Abigail house. Close to the borehole', '', '', '', '', 237, '', '233244071507', 'user.png', '', '', ''),
(90, '', 'Lamisi', 'Apeakwo', '', '', 'Female', 'Single', 'Student', 'Ghana', 'Mayaga', 'Behind Abigail house. Close to the borehole', '', '', '', '', 237, '', '233244071507', 'user.png', '', '', ''),
(91, 'Mrs', 'Felicia', 'Aloritiga', '', '1986-11-29', 'Female', 'Married', 'Trader', 'Ghana', 'Nogenia', 'CAB 59', 'Behind Bencyn Pharmacy', '0248677757', '', '', 0, '', '', 'user.png', '0', '0', '11-29'),
(92, '', 'Felicia', 'Aloritiga', '', '', 'Female', 'Married', 'Trader', 'Ghana', 'Nogenia', 'CAB 59', 'Behind Bencyn Pharmacy', '0248677757', '', '', 0, '', '', 'user.png', '0', '0', ''),
(93, '', 'Felicia', 'Aloritiga', '', '', 'Female', 'Married', 'Trader', 'Ghana', 'Nogenia', 'CAB 59', 'Behind Bencyn Pharmacy', '0248677757', '', '', 0, '', '', 'user.png', '0', '0', ''),
(94, '', 'Felicia', 'Aloritiga', '', '', 'Female', 'Married', 'Trader', 'Ghana', 'Nogenia', 'CAB 59', 'Behind Bencyn Pharmacy', '0248677757', '', '', 0, '', '', 'user.png', '0', '0', ''),
(95, '', 'Felicia', 'Aloritiga', '', '', 'Female', 'Married', 'Trader', 'Ghana', 'Nogenia', 'CAB 59', 'Behind Bencyn Pharmacy', '0248677757', '', '', 0, '', '', 'user.png', '0', '0', ''),
(96, '', 'Felicia', 'Aloritiga', '', '', 'Female', 'Married', 'Trader', 'Ghana', 'Nogenia', 'CAB 59', 'Behind Bencyn Pharmacy', '0248677757', '', '', 0, '', '', 'user.png', '0', '0', ''),
(97, '', 'Felicia', 'Aloritiga', '', '', 'Female', 'Married', 'Trader', 'Ghana', 'Nogenia', 'CAB 59', 'Behind Bencyn Pharmacy', '0248677757', '', '', 0, '', '', 'user.png', '0', '0', ''),
(98, '', 'Felicia', 'Aloritiga', '', '', 'Female', 'Married', 'Trader', 'Ghana', 'Nogenia', 'CAB 59', 'Behind Bencyn Pharmacy', '0248677757', '', '', 0, '', '', 'user.png', '0', '0', ''),
(99, '', 'Felicia', 'Aloritiga', '', '', 'Female', 'Married', 'Trader', 'Ghana', 'Nogenia', 'CAB 59', 'Behind Bencyn Pharmacy', '0248677757', '', '', 0, '', '', 'user.png', '0', '0', ''),
(100, '', 'Felicia', 'Aloritiga', '', '2017-03-26', 'Female', 'Married', 'Trader', 'Ghana', 'Nogenia', 'CAB 59', 'Behind Bencyn Pharmacy', '0248677757', '', '', 0, '', '', 'user.png', '0', '0', '03-26'),
(101, '', 'Felicia', 'Aloritiga', '', '2017-03-26', 'Female', 'Married', 'Trader', 'Ghana', 'Nogenia', 'CAB 59', 'Behind Bencyn Pharmacy', '0248677757', '', '', 0, '', '', 'user.png', '0', '0', '03-26'),
(102, '', 'Felicia', 'Aloritiga', '', '2017-03-26', 'Female', 'Married', 'Trader', 'Ghana', 'Nogenia', 'CAB 59', 'Behind Bencyn Pharmacy', '0248677757', '', '', 0, '', '', 'user.png', '0', '0', '03-26'),
(103, '', 'Felicia', 'Aloritiga', '', '2017-03-26', 'Female', 'Married', 'Trader', 'Ghana', 'Nogenia', 'CAB 59', 'Behind Bencyn Pharmacy', '0248677757', '', '', 0, '', '', 'user.png', '0', '0', '03-26'),
(104, '', 'Felicia', 'Aloritiga', '', '2017-03-26', 'Female', 'Married', 'Trader', 'Ghana', 'Nogenia', 'CAB 59', 'Behind Bencyn Pharmacy', '0248677757', '', '', 0, '', '', 'user.png', '0', '0', '03-26'),
(105, '', 'Aseima', 'Angela', '', '2003-04-09', 'Female', 'Single', 'Student', 'Ghana', '', '', 'Balobia primary school\r\n', '', '', '', 0, '', '', 'user.png', '0', '0', '04-09'),
(106, '', 'Felicia', 'Aloritiga', '', '2017-03-26', 'Female', 'Married', 'Trader', 'Ghana', 'Nogenia', 'CAB 59', 'Behind Bencyn Pharmacy', '0248677757', '', '', 0, '', '', 'user.png', '0', '0', '03-26'),
(107, '', 'Felicia', 'Aloritiga', '', '2017-03-26', 'Female', 'Married', 'Trader', 'Ghana', 'Nogenia', 'CAB 59', 'Behind Bencyn Pharmacy', '0248677757', '', '', 0, '', '', 'user.png', '0', '0', '03-26'),
(108, '', 'Paulina', 'Anaaba', '', '', 'Female', 'Single', 'Student', 'Ghana', 'St. Benedict Institute', '', '', '055 428 5328', '', '', 0, '', '', 'user.png', '0', '0', '');
INSERT INTO `member_bin` (`bin_id`, `salutation`, `firstname`, `lastname`, `othername`, `dob`, `gender`, `maritalstatus`, `occupation`, `nationality`, `residence`, `post_address`, `directiontohse`, `mobile1`, `mobile2`, `email`, `cp`, `cp_rel`, `cp_mobile`, `picture`, `lng`, `lat`, `bday`) VALUES
(109, '', 'Felicia', 'Aloritiga', '', '', 'Female', 'Married', 'Trader', 'Ghana', 'Nogenia', 'CAB 59', 'Behind Bencyn Pharmacy', '0248677757', '', '', 0, '', '', 'user.png', '0', '0', ''),
(110, 'Mr', 'Paul', 'Elisa', '', '', 'Male', 'Single', 'Student', 'Ghana', '', '', 'Navrongo', '1111111111', '', '', 0, '', '', 'user.png', '0', '0', ''),
(111, '', 'Mohammed ', 'Hair Arafat', '', '', 'Male', '', '', 'Ghana', 'Namolo CAN 22', '', 'Around the Prison', '0502391998', '0501465813', '', 0, '', '', 'lcinavrongo_org_IMG-20170129-WA0000.jpg', '0', '0', ''),
(112, 'Miss', 'Diana', 'Aba Aotori', '', '', '', 'Single', 'Teacher', '', '', '', '', '0245174770', '', '', 253, 'Shepherd', '0245279984', 'lcinavrongo_org_IMG_20170115_152620.jpg', '0', '0', ''),
(113, 'Miss', 'Philomena', 'Denteh', '', '', 'Female', 'Single', 'Student', 'Ghana', 'Mayaga', '', 'Behind Mayaga Hotel', '0248039611', '', '', 49, 'Sibling', '0206441122', 'lcinavrongo_org_IMG_20170115_153244.jpg', '0', '0', ''),
(114, 'Rev', 'Daniel', 'Hafiz Goodman', '', '1981/07/06', 'Male', 'Married', 'Pastor/Banker', 'ghanaian', 'Nogsenia', '', 'Sandema Link \r\nBehind Mayaga Hotel \r\nThe house is painted Green and White', '233273478872', '233206441155', 'hafdeseer@yahoo.com', 49, '', '2.33E+11', 'IMG_20170115_152601.jpg', '0', '0', '07/06'),
(115, 'Miss', 'Racheal', 'Akateng', '', '1994-12-10', 'Female', 'Single', 'Student', 'Ghana', 'Bolga', '', 'Bolga', '0561586400', '', 'akatengracheal@gmail.com', 47, '', '0244165978', 'user.png', '0', '0', '12-10');

-- --------------------------------------------------------

--
-- Table structure for table `ministry`
--

CREATE TABLE `ministry` (
  `ministry_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `head` int(255) NOT NULL,
  `assistant` int(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ministry`
--

INSERT INTO `ministry` (`ministry_id`, `name`, `head`, `assistant`, `date`) VALUES
(14, 'USHERING', 0, 245, 'Sun, 22 Jan 2017 00:39:17 +0000'),
(15, 'CHOIR', 49, 244, 'Sun, 08 Jan 2017 17:49:34 +0000'),
(16, 'DANCING STARS', 42, 42, 'Sun, 22 Jan 2017 17:07:21 +0000');

-- --------------------------------------------------------

--
-- Table structure for table `ministry_member`
--

CREATE TABLE `ministry_member` (
  `ministrymember_id` int(255) NOT NULL,
  `ministry_id` int(255) NOT NULL,
  `head` int(255) NOT NULL,
  `assistant` int(255) NOT NULL,
  `memberid` int(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ministry_member`
--

INSERT INTO `ministry_member` (`ministrymember_id`, `ministry_id`, `head`, `assistant`, `memberid`, `date`) VALUES
(37, 14, 0, 245, 163, 'Sun, 22 Jan 2017 00:39:17 +0000'),
(38, 14, 0, 245, 159, 'Sun, 22 Jan 2017 00:39:17 +0000'),
(39, 14, 0, 245, 174, 'Sun, 22 Jan 2017 00:39:17 +0000'),
(40, 14, 0, 245, 245, 'Sun, 22 Jan 2017 00:39:17 +0000'),
(41, 14, 0, 245, 243, 'Sun, 22 Jan 2017 00:39:17 +0000'),
(42, 14, 0, 245, 242, 'Sun, 22 Jan 2017 00:39:17 +0000'),
(43, 14, 0, 245, 235, 'Sun, 22 Jan 2017 00:39:17 +0000'),
(45, 14, 0, 245, 229, 'Sun, 22 Jan 2017 00:39:17 +0000'),
(46, 14, 0, 245, 208, 'Sun, 22 Jan 2017 00:39:17 +0000'),
(48, 15, 49, 244, 49, 'Sun, 08 Jan 2017 17:49:34 +0000'),
(49, 14, 0, 245, 42, 'Sun, 22 Jan 2017 00:39:17 +0000'),
(50, 15, 0, 244, 47, 'Sun, 08 Jan 2017 17:49:34 +0000'),
(52, 15, 0, 244, 57, 'Sun, 08 Jan 2017 17:49:34 +0000'),
(53, 15, 0, 244, 61, 'Sun, 08 Jan 2017 17:49:34 +0000'),
(54, 15, 0, 244, 157, 'Sun, 08 Jan 2017 17:49:34 +0000'),
(55, 16, 42, 42, 42, 'Sun, 22 Jan 2017 17:07:21 +0000'),
(57, 16, 42, 42, 223, 'Sun, 22 Jan 2017 17:07:21 +0000'),
(58, 15, 0, 244, 244, 'Sun, 08 Jan 2017 17:49:34 +0000'),
(59, 15, 0, 244, 244, 'Sun, 08 Jan 2017 17:49:34 +0000'),
(60, 15, 0, 0, 60, 'Sun, 22 Jan 2017 00:26:55 +0000'),
(61, 15, 0, 0, 161, 'Sun, 22 Jan 2017 00:27:19 +0000'),
(63, 15, 0, 0, 168, 'Sun, 22 Jan 2017 00:28:17 +0000'),
(64, 15, 0, 0, 202, 'Sun, 22 Jan 2017 00:29:19 +0000'),
(65, 14, 0, 0, 179, 'Sun, 22 Jan 2017 00:40:07 +0000'),
(66, 14, 0, 0, 249, 'Sun, 22 Jan 2017 00:40:49 +0000'),
(67, 14, 0, 0, 265, 'Sun, 22 Jan 2017 00:41:19 +0000'),
(68, 14, 0, 0, 264, 'Sun, 22 Jan 2017 00:41:30 +0000'),
(71, 16, 0, 0, 39, 'Sun, 22 Jan 2017 17:16:12 +0000');

-- --------------------------------------------------------

--
-- Table structure for table `service_attendance`
--

CREATE TABLE `service_attendance` (
  `attid` int(255) NOT NULL,
  `memberid` int(255) NOT NULL,
  `date` varchar(50) NOT NULL,
  `accountid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_attendance`
--

INSERT INTO `service_attendance` (`attid`, `memberid`, `date`, `accountid`) VALUES
(2, 47, '2017-01-08', 20),
(3, 49, '2017-01-08', 20),
(4, 57, '2017-01-08', 20),
(5, 61, '2017-01-08', 20),
(6, 45, '2017-02-26', 24),
(7, 265, '2017-04-30', 22),
(8, 275, '2017-04-30', 22),
(9, 250, '2017-04-30', 22),
(10, 276, '2017-04-30', 26),
(11, 319, '2017-04-30', 33),
(12, 268, '2017-04-30', 33),
(13, 267, '2017-04-30', 33),
(14, 263, '2017-04-30', 33),
(15, 239, '2017-04-30', 33),
(16, 239, '2017-04-30', 33),
(17, 227, '2017-04-30', 33),
(18, 226, '2017-04-30', 33),
(19, 225, '2017-04-30', 33),
(20, 226, '2017-04-30', 33),
(21, 274, '2017-04-30', 51),
(22, 274, '2017-04-30', 51),
(23, 264, '2017-04-30', 51),
(24, 264, '2017-04-30', 51),
(25, 269, '2017-04-30', 52),
(26, 248, '2017-04-30', 52);

-- --------------------------------------------------------

--
-- Table structure for table `timelinepost`
--

CREATE TABLE `timelinepost` (
  `timelinepostid` int(255) NOT NULL,
  `timelinepost` text NOT NULL,
  `memberid` int(255) NOT NULL,
  `accountid` int(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timelinepost`
--

INSERT INTO `timelinepost` (`timelinepostid`, `timelinepost`, `memberid`, `accountid`, `date`) VALUES
(15, 'Greatness is my destiny\r\n', 38, 20, 'Thu, 05 Jan 2017 14:56:18 +0000'),
(16, 'Lord ,You are Great', 42, 22, 'Fri, 06 Jan 2017 11:34:23 +0000');

-- --------------------------------------------------------

--
-- Table structure for table `visitation`
--

CREATE TABLE `visitation` (
  `visit_id` int(255) NOT NULL,
  `memberid` int(255) NOT NULL,
  `accountid` int(255) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `visited`
--

CREATE TABLE `visited` (
  `visited_id` int(255) NOT NULL,
  `memberid` int(255) NOT NULL,
  `accountid` int(255) NOT NULL,
  `comments` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `visitresponse`
--

CREATE TABLE `visitresponse` (
  `visitid` int(255) NOT NULL,
  `visitorid` int(255) NOT NULL,
  `visitedid` int(255) NOT NULL,
  `response` text NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitresponse`
--

INSERT INTO `visitresponse` (`visitid`, `visitorid`, `visitedid`, `response`, `date`) VALUES
(1, 38, 43, 'Had a good visit. Promised to come to church next week', 'Sun, 08 Jan 2017 17:12:55 +0000'),
(2, 57, 45, 'Testing', 'Sat, 25 Feb 2017 22:45:02 +0000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`accountid`),
  ADD KEY `gender` (`username`,`password`),
  ADD KEY `date` (`date`);

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`assignment_id`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`branch_id`);

--
-- Indexes for table `inventory_item`
--
ALTER TABLE `inventory_item`
  ADD PRIMARY KEY (`inventory_item_id`);

--
-- Indexes for table `inventory_type`
--
ALTER TABLE `inventory_type`
  ADD PRIMARY KEY (`inventory_type_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`memberid`),
  ADD KEY `salutation` (`salutation`,`firstname`,`lastname`,`dob`,`gender`,`maritalstatus`,`occupation`,`mobile1`,`cp`,`date`);

--
-- Indexes for table `member_bin`
--
ALTER TABLE `member_bin`
  ADD PRIMARY KEY (`bin_id`),
  ADD KEY `salutation` (`salutation`,`firstname`,`lastname`,`dob`,`gender`,`maritalstatus`,`occupation`,`mobile1`,`cp`);

--
-- Indexes for table `ministry`
--
ALTER TABLE `ministry`
  ADD PRIMARY KEY (`ministry_id`);

--
-- Indexes for table `ministry_member`
--
ALTER TABLE `ministry_member`
  ADD PRIMARY KEY (`ministrymember_id`);

--
-- Indexes for table `service_attendance`
--
ALTER TABLE `service_attendance`
  ADD PRIMARY KEY (`attid`);

--
-- Indexes for table `timelinepost`
--
ALTER TABLE `timelinepost`
  ADD PRIMARY KEY (`timelinepostid`);

--
-- Indexes for table `visitation`
--
ALTER TABLE `visitation`
  ADD PRIMARY KEY (`visit_id`);

--
-- Indexes for table `visited`
--
ALTER TABLE `visited`
  ADD PRIMARY KEY (`visited_id`);

--
-- Indexes for table `visitresponse`
--
ALTER TABLE `visitresponse`
  ADD PRIMARY KEY (`visitid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `accountid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `assignment_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;
--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `branch_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `inventory_item`
--
ALTER TABLE `inventory_item`
  MODIFY `inventory_item_id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `inventory_type`
--
ALTER TABLE `inventory_type`
  MODIFY `inventory_type_id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `memberid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=345;
--
-- AUTO_INCREMENT for table `member_bin`
--
ALTER TABLE `member_bin`
  MODIFY `bin_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;
--
-- AUTO_INCREMENT for table `ministry`
--
ALTER TABLE `ministry`
  MODIFY `ministry_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `ministry_member`
--
ALTER TABLE `ministry_member`
  MODIFY `ministrymember_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
--
-- AUTO_INCREMENT for table `service_attendance`
--
ALTER TABLE `service_attendance`
  MODIFY `attid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `timelinepost`
--
ALTER TABLE `timelinepost`
  MODIFY `timelinepostid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `visitation`
--
ALTER TABLE `visitation`
  MODIFY `visit_id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `visited`
--
ALTER TABLE `visited`
  MODIFY `visited_id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `visitresponse`
--
ALTER TABLE `visitresponse`
  MODIFY `visitid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
