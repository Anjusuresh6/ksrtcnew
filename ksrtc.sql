-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 08, 2018 at 01:17 AM
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
-- Database: `ksrtc`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
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

CREATE TABLE `bookingcancellation` (
  `bookingid` varchar(20) NOT NULL,
  `name` char(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bookingsearch`
--

CREATE TABLE `bookingsearch` (
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

CREATE TABLE `bus` (
  `busid` varchar(20) NOT NULL,
  `type` char(20) NOT NULL,
  `purchasedate` date NOT NULL,
  `noofseats` int(10) NOT NULL,
  `depot` varchar(30) NOT NULL,
  `producer` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`busid`, `type`, `purchasedate`, `noofseats`, `depot`, `producer`) VALUES
('KL 1 345', 'ordinary', '2018-01-02', 50, 'Ponkunnam', 'Ashok Leyland');

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
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

CREATE TABLE `conductor` (
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

CREATE TABLE `depot` (
  `depoid` int(20) NOT NULL,
  `deponame` char(20) NOT NULL,
  `contactno` bigint(20) NOT NULL,
  `depousername` varchar(20) CHARACTER SET utf8 NOT NULL,
  `depopswd` varchar(20) NOT NULL,
  `conformpswd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `depot`
--

INSERT INTO `depot` (`depoid`, `deponame`, `contactno`, `depousername`, `depopswd`, `conformpswd`) VALUES
(1, 'Mallappally', 9846578638, 'Dmlply', 'Dmlply', 'Dmlply'),
(2, 'Ponkunnam', 4582200201, 'Dpnknm', 'Dpnknm', 'Dpnknm'),
(3, 'Thiruvalla', 4692568412, 'Dtvla', 'Dtvla', 'Dtvla'),
(4, 'Erumely', 4586321200, 'Dermly', 'Dermly', 'Dermly');

-- --------------------------------------------------------

--
-- Table structure for table `depotbus`
--

CREATE TABLE `depotbus` (
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

CREATE TABLE `driver` (
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

CREATE TABLE `inspection` (
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

CREATE TABLE `inspector` (
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

CREATE TABLE `login` (
  `userid` int(20) NOT NULL,
  `username` char(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `usertype` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`userid`, `username`, `password`, `usertype`) VALUES
(1, 'admin@ksrtc.com', 'admin123', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `regid` varchar(20) NOT NULL,
  `name` char(50) NOT NULL,
  `user_type` char(20) NOT NULL,
  `joing_year` date NOT NULL,
  `contact_no` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `stationmaster`
--

CREATE TABLE `stationmaster` (
  `stationmasterid` int(20) NOT NULL,
  `name` char(50) NOT NULL,
  `type` char(50) NOT NULL,
  `joiningyear` date NOT NULL,
  `contactno` bigint(20) NOT NULL,
  `depotname` char(50) NOT NULL,
  `depotusename` varchar(20) NOT NULL,
  `depotpswd` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stationmaster`
--

INSERT INTO `stationmaster` (`stationmasterid`, `name`, `type`, `joiningyear`, `contactno`, `depotname`, `depotusename`, `depotpswd`) VALUES
(8, 'Jeevan', 'Station Master', '2005-05-02', 9400472663, 'Mallappally', 'Dmlply', 'Dmlply');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookingcancellation`
--
ALTER TABLE `bookingcancellation`
  ADD PRIMARY KEY (`bookingid`);

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`busid`);

--
-- Indexes for table `depot`
--
ALTER TABLE `depot`
  ADD PRIMARY KEY (`depoid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`regid`);

--
-- Indexes for table `stationmaster`
--
ALTER TABLE `stationmaster`
  ADD PRIMARY KEY (`stationmasterid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `depot`
--
ALTER TABLE `depot`
  MODIFY `depoid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `userid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stationmaster`
--
ALTER TABLE `stationmaster`
  MODIFY `stationmasterid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
