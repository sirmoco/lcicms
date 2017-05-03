-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2016 at 03:45 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lcinavrongo`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE IF NOT EXISTS `accounts` (
  `accountid` int(250) NOT NULL AUTO_INCREMENT,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `date` varchar(250) NOT NULL,
  PRIMARY KEY (`accountid`),
  KEY `gender` (`username`,`password`),
  KEY `date` (`date`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `memberid` int(250) NOT NULL AUTO_INCREMENT,
  `salutation` varchar(50) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `othername` varchar(250) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `gender` int(50) NOT NULL,
  `pob` varchar(50) NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `maritalstatus` varchar(250) NOT NULL,
  `occupation` varchar(250) NOT NULL,
  `directiontohse` text NOT NULL,
  `street` varchar(250) NOT NULL,
  `area` text NOT NULL,
  `subarea` text NOT NULL,
  `landmark` text NOT NULL,
  `hsedescription` text NOT NULL,
  `city` varchar(250) NOT NULL,
  `postalbox` varchar(250) NOT NULL,
  `homephone` varchar(250) NOT NULL,
  `mobile1` varchar(250) NOT NULL,
  `mobile2` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `reszone` varchar(250) NOT NULL,
  `joinedlci` varchar(250) NOT NULL,
  `designation` varchar(250) NOT NULL,
  `cp` varchar(250) NOT NULL,
  `cpmobile` varchar(250) NOT NULL,
  `reltocp` varchar(250) NOT NULL,
  `branch` varchar(250) NOT NULL,
  `bussel` varchar(250) NOT NULL,
  `service` varchar(250) NOT NULL,
  `dioces` varchar(250) NOT NULL,
  `date` varchar(250) NOT NULL,
  PRIMARY KEY (`memberid`),
  KEY `salutation` (`salutation`,`firstname`,`lastname`,`dob`,`gender`,`pob`,`nationality`,`maritalstatus`,`occupation`,`city`,`mobile1`,`mobile2`,`joinedlci`,`designation`,`cp`,`date`),
  KEY `branch` (`branch`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`memberid`, `salutation`, `firstname`, `lastname`, `othername`, `dob`, `gender`, `pob`, `nationality`, `maritalstatus`, `occupation`, `directiontohse`, `street`, `area`, `subarea`, `landmark`, `hsedescription`, `city`, `postalbox`, `homephone`, `mobile1`, `mobile2`, `email`, `reszone`, `joinedlci`, `designation`, `cp`, `cpmobile`, `reltocp`, `branch`, `bussel`, `service`, `dioces`, `date`) VALUES
(1, 'Miss', 'Martha', 'Kumordji', 'Efya', '12/12/12', 2, 'Labadi', 'Ghanaian', 'single', 'Student', 'pass left to the adenta station,yellow house on right...', 'fd', 'agd', 'df', 'fd', 'dfg', 'fd', 'df', 'fdg', 'fdsd', 'sdg', 'df', 'dfgdfg', 'gd', 'df', 'df', 'fd', 'fd', 'fdgsd', 'dfgg', 'gdf', 'dfd', 'df');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
