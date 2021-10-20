-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2020 at 07:41 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `house`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `No` int(200) NOT NULL,
  `AID` varchar(200) NOT NULL,
  `FName` varchar(200) NOT NULL,
  `LName` varchar(200) NOT NULL,
  `User` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`No`, `AID`, `FName`, `LName`, `User`, `Password`, `Email`, `Address`, `Image`) VALUES
(0, 'AID100', 'sdf', 'dsf', 'dsf', 'sdf', 'sf@sdsf', 'sdf', ''),
(0, 'AID101', 'sa', 'as', 'fahath', 'sad', 'sd@x', 'v', '');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `No` int(200) NOT NULL,
  `CID` varchar(200) NOT NULL,
  `CityName` varchar(200) NOT NULL,
  `DistrictCode` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `Numbers` int(200) NOT NULL,
  `clientid` varchar(20) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Mnumber` int(10) NOT NULL,
  `Tnumber` int(10) NOT NULL,
  `District` varchar(200) NOT NULL,
  `City` varchar(200) NOT NULL,
  `Zip` int(6) NOT NULL,
  `Date` varchar(200) NOT NULL,
  `Imglocation` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`Numbers`, `clientid`, `Name`, `Password`, `Address`, `Email`, `Mnumber`, `Tnumber`, `District`, `City`, `Zip`, `Date`, `Imglocation`) VALUES
(1, 'CLN1000', 'fahath', 'sad', 'sainthmaruthu', 'f@f', 771347923, 752388923, 'ampare', 'sammanthurai', 3303, '', '88217504_3160408367324036_3896975448596283392_n.jpg'),
(2, 'CLN101', 'gaj', 'dsf', '34', 'sad@dsf', 45, 435, 'Dsf', 'Fdx', 435, '', '8913671633_b3713e489b_b.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `No` int(200) NOT NULL,
  `DCode` varchar(200) NOT NULL,
  `DName` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`No`, `DCode`, `DName`) VALUES
(37, 'DISC119', ' Wedas'),
(38, 'DISC120', ' Ggg');

-- --------------------------------------------------------

--
-- Table structure for table `housedet`
--

CREATE TABLE `housedet` (
  `No` int(200) NOT NULL,
  `houseid` varchar(200) NOT NULL,
  `clientid` varchar(200) NOT NULL,
  `housename` varchar(200) NOT NULL,
  `houseaddress` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `distric` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `zip` varchar(200) NOT NULL,
  `livingroom` varchar(200) NOT NULL,
  `bedroom` varchar(200) NOT NULL,
  `kitchen` varchar(200) NOT NULL,
  `bathroom` varchar(200) NOT NULL,
  `housetype` varchar(200) NOT NULL,
  `period` varchar(200) NOT NULL,
  `pmethod` varchar(200) NOT NULL,
  `price` int(200) NOT NULL,
  `imglocation` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `housedet`
--

INSERT INTO `housedet` (`No`, `houseid`, `clientid`, `housename`, `houseaddress`, `date`, `distric`, `city`, `zip`, `livingroom`, `bedroom`, `kitchen`, `bathroom`, `housetype`, `period`, `pmethod`, `price`, `imglocation`, `status`) VALUES
(1, 'HOUSEID101', '678', 'moon', 'sainthamaruthu', '2020-07-07', 'Choose...', 'kal', '32300', 'Choose...', 'Choose...', 'Choose...', 'Choose...', 'Choose...', 'Choose...', 'Choose...', 0, '1110cwrk.png', 'active'),
(3, 'HOUSEID103', 'CLN1000', 'sea', 'sam', '2020-07-09', 'Choose...', 'Choose...', '', 'Choose...', 'Choose...', 'Choose...', 'Choose...', 'Choose...', 'Choose...', 'Choose...', 0, '914c84aa3bc8a920c9ac0f467b6159f8.jpg', 'sale');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `MID` int(200) NOT NULL,
  `Sname` varchar(200) NOT NULL,
  `Mnumber` varchar(200) NOT NULL,
  `Tnumber` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Message` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AID`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`CID`),
  ADD KEY `DistrictCode` (`DistrictCode`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`clientid`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`DCode`),
  ADD UNIQUE KEY `No` (`No`);

--
-- Indexes for table `housedet`
--
ALTER TABLE `housedet`
  ADD PRIMARY KEY (`houseid`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`MID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `No` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `MID` int(200) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
