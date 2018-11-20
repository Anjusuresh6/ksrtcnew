-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 20, 2018 at 06:35 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ksrtc`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `bookingid` varchar(20) NOT NULL,
  `name` char(50) NOT NULL,
  `address` char(50) NOT NULL,
  `source` char(20) NOT NULL,
  `destination` char(20) NOT NULL,
  `idproof` char(20) NOT NULL,
  `idproofno` varchar(50) NOT NULL,
  `payment` varchar(20) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `phno` int(11) NOT NULL,
  `amount` int(20) NOT NULL,
  `distance` int(20) NOT NULL,
  `gender` char(10) NOT NULL,
  `noofbookingseats` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `bookingcancellation`
--

DROP TABLE IF EXISTS `bookingcancellation`;
CREATE TABLE IF NOT EXISTS `bookingcancellation` (
  `bookingid` varchar(20) NOT NULL,
  `name` char(50) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`bookingid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bookingsearch`
--

DROP TABLE IF EXISTS `bookingsearch`;
CREATE TABLE IF NOT EXISTS `bookingsearch` (
  `bookingid` varchar(20) NOT NULL,
  `name` char(20) NOT NULL,
  `source` char(20) NOT NULL,
  `destination` char(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

DROP TABLE IF EXISTS `bus`;
CREATE TABLE IF NOT EXISTS `bus` (
  `busid` varchar(20) NOT NULL,
  `type` char(20) NOT NULL,
  `purchasedate` date NOT NULL,
  `noofseats` int(10) NOT NULL,
  `depot` varchar(30) NOT NULL,
  `producer` varchar(30) NOT NULL,
  `depoid` int(20) NOT NULL,
  PRIMARY KEY (`busid`),
  KEY `depoid` (`depoid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`busid`, `type`, `purchasedate`, `noofseats`, `depot`, `producer`, `depoid`) VALUES
('KL 1 345', 'ordinary', '2018-01-02', 50, 'Ponkunnam', 'Ashok Leyland', 2);

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

DROP TABLE IF EXISTS `complaints`;
CREATE TABLE IF NOT EXISTS `complaints` (
  `complaintid` varchar(20) NOT NULL,
  `type` char(10) NOT NULL,
  `name` char(50) NOT NULL,
  `address` char(20) NOT NULL,
  `complaints` char(100) NOT NULL,
  `phoneno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `conductor`
--

DROP TABLE IF EXISTS `conductor`;
CREATE TABLE IF NOT EXISTS `conductor` (
  `conductorid` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` char(30) NOT NULL,
  `phno` int(11) NOT NULL,
  `serviceyear` date NOT NULL,
  `depot` char(20) NOT NULL,
  `license` int(20) NOT NULL,
  `address` char(50) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `depot`
--

DROP TABLE IF EXISTS `depot`;
CREATE TABLE IF NOT EXISTS `depot` (
  `depoid` int(20) NOT NULL AUTO_INCREMENT,
  `depotname` char(20) NOT NULL,
  `contactno` bigint(20) NOT NULL,
  `depousername` varchar(20) CHARACTER SET utf8 NOT NULL,
  `depopswd` varchar(20) NOT NULL,
  `conformpswd` varchar(20) NOT NULL,
  PRIMARY KEY (`depoid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `depot`
--

INSERT INTO `depot` (`depoid`, `depotname`, `contactno`, `depousername`, `depopswd`, `conformpswd`) VALUES
(1, 'Mallappally', 9846578638, 'Dmlply', 'Dmlply', 'Dmlply'),
(2, 'Ponkunnam', 4582200201, 'Dpnknm', 'Dpnknm', 'Dpnknm'),
(3, 'Thiruvalla', 4692568412, 'Dtvla', 'Dtvla', 'Dtvla'),
(4, 'Erumely', 4586321200, 'Dermly', 'Dermly', 'Dermly');

-- --------------------------------------------------------

--
-- Table structure for table `depotbus`
--

DROP TABLE IF EXISTS `depotbus`;
CREATE TABLE IF NOT EXISTS `depotbus` (
  `busno` varchar(20) NOT NULL,
  `type` varchar(10) NOT NULL,
  `noofseats` int(10) NOT NULL,
  `purchasedate` date NOT NULL,
  `age` int(10) NOT NULL,
  `producer` char(20) NOT NULL,
  `route` varchar(50) NOT NULL,
  `deponame` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

DROP TABLE IF EXISTS `driver`;
CREATE TABLE IF NOT EXISTS `driver` (
  `driverid` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` char(50) NOT NULL,
  `phno` int(11) NOT NULL,
  `serviceyear` date NOT NULL,
  `depot` char(50) NOT NULL,
  `license` int(20) NOT NULL,
  `address` char(30) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `inspection`
--

DROP TABLE IF EXISTS `inspection`;
CREATE TABLE IF NOT EXISTS `inspection` (
  `busno` varchar(20) NOT NULL,
  `name` char(50) NOT NULL,
  `nooftickets` int(10) NOT NULL,
  `drivername` char(20) NOT NULL,
  `conductorname` char(20) NOT NULL,
  `amount` int(10) NOT NULL,
  `time` time(5) NOT NULL,
  `source` char(50) NOT NULL,
  `destination` char(50) NOT NULL,
  `remarks` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `inspector`
--

DROP TABLE IF EXISTS `inspector`;
CREATE TABLE IF NOT EXISTS `inspector` (
  `userid` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` char(50) NOT NULL,
  `depot` char(20) NOT NULL,
  `serviceyear` date NOT NULL,
  `phoneno` int(11) NOT NULL,
  `gender` char(10) NOT NULL,
  `dob` date NOT NULL,
  `address` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `userid` int(20) NOT NULL AUTO_INCREMENT,
  `username` char(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `usertype` varchar(20) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`userid`, `username`, `password`, `usertype`) VALUES
(1, 'admin@ksrtc.com', 'admin123', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `regid` varchar(20) NOT NULL,
  `name` char(50) NOT NULL,
  `user_type` char(20) NOT NULL,
  `joing_year` date NOT NULL,
  `contact_no` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`regid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `stationmaster`
--

DROP TABLE IF EXISTS `stationmaster`;
CREATE TABLE IF NOT EXISTS `stationmaster` (
  `stationmasterid` int(20) NOT NULL AUTO_INCREMENT,
  `name` char(50) NOT NULL,
  `type` char(50) NOT NULL,
  `joiningyear` date NOT NULL,
  `contactno` bigint(20) NOT NULL,
  `depotname` char(50) NOT NULL,
  `depotusename` varchar(20) NOT NULL,
  `depotpswd` varchar(20) NOT NULL,
  PRIMARY KEY (`stationmasterid`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stationmaster`
--

INSERT INTO `stationmaster` (`stationmasterid`, `name`, `type`, `joiningyear`, `contactno`, `depotname`, `depotusename`, `depotpswd`) VALUES
(10, 'Jeevan Jayan', 'Station Master', '2005-05-02', 9400472663, 'Mallappally', 'Mallappally', 'Dmlply'),
(16, 'Leya', 'Station Master', '2006-05-20', 9544139255, 'Erumely', 'Dermly', 'Dermly'),
(12, 'Anju Rajan', 'Station Master', '2005-03-02', 7034409806, 'Thiruvalla', 'Thiruvalla', 'Dtvla');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bus`
--
ALTER TABLE `bus`
  ADD CONSTRAINT `bus_ibfk_1` FOREIGN KEY (`depoid`) REFERENCES `depot` (`depoid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
