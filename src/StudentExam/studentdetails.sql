-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2018 at 07:45 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `studentexams`
--

-- --------------------------------------------------------

--
-- Table structure for table `studentdetails`
--

CREATE TABLE IF NOT EXISTS `studentdetails` (
  `databaseId` int(15) NOT NULL AUTO_INCREMENT,
  `studentRegNum` varchar(200) NOT NULL,
  `studentName` varchar(200) NOT NULL,
  `studentBranch` varchar(200) NOT NULL,
  `studentPassword` varchar(200) NOT NULL,
  `studentImage` varchar(250) NOT NULL,
  `studentStatus` varchar(200) NOT NULL DEFAULT 'Active',
  `studentScore` varchar(100) NOT NULL,
  `studentEmail` varchar(100) NOT NULL,
  PRIMARY KEY (`databaseId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `studentdetails`
--

INSERT INTO `studentdetails` (`databaseId`, `studentRegNum`, `studentName`, `studentBranch`, `studentPassword`, `studentImage`, `studentStatus`, `studentScore`, `studentEmail`) VALUES
(1, 'CSE501', 'Rajeswari', 'Computer Science and Engineering', 'GRR@1964', 'Profile_b87ba7089f0c2dc4511e786fc36a4f84.jpg', 'active', '2', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
