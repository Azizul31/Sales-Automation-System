-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2019 at 03:10 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `salesforce_automation_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE `areas` (
  `Area Code` varchar(15) NOT NULL,
  `Thana` varchar(20) NOT NULL,
  `District` varchar(20) NOT NULL,
  `Division` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `distributors_areas`
--

CREATE TABLE `distributors_areas` (
  `Distributor_Name` varchar(30) NOT NULL COMMENT 'Distributor''s name',
  `Area Code` varchar(20) NOT NULL COMMENT 'Area in which distributor operates',
  `Distributor_ID` varchar(15) NOT NULL COMMENT 'ID of distributor',
  `District` varchar(20) NOT NULL COMMENT 'District of the area',
  `Division` varchar(20) NOT NULL COMMENT 'Division of the area',
  `Territory_Manager` varchar(30) NOT NULL COMMENT 'Territory manager in charge',
  `Regional_Manager` varchar(30) NOT NULL COMMENT 'Regional manager in charge'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `executives`
--

CREATE TABLE `executives` (
  `Name` varchar(30) NOT NULL,
  `ID` varchar(15) NOT NULL,
  `Password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `executives`
--

INSERT INTO `executives` (`Name`, `ID`, `Password`) VALUES
('Abdul Halim', 'EX_01', 'e80a0702d314d055d05af996fe60cff9');

-- --------------------------------------------------------

--
-- Table structure for table `regional managers`
--

CREATE TABLE `regional managers` (
  `Name` varchar(30) NOT NULL,
  `ID` varchar(15) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `Division` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regional managers`
--

INSERT INTO `regional managers` (`Name`, `ID`, `Password`, `Division`) VALUES
('Yamin Iqbal', 'REG_01', 'fdcc5f80661c0b33e24166b6deb58446', 'Chattagram'),
('Aman Ullah', 'REG_02', '95a6080a7a999364880885c180d92bb5', 'Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `sales details`
--

CREATE TABLE `sales details` (
  `Bill no.` varchar(15) NOT NULL,
  `Date` varchar(2) NOT NULL,
  `Month` varchar(10) NOT NULL,
  `Year` varchar(4) NOT NULL,
  `Day` varchar(10) NOT NULL,
  `Shop ID` varchar(15) NOT NULL,
  `Item 1` int(11) NOT NULL,
  `Item 2` int(11) NOT NULL,
  `Item 3` int(11) NOT NULL,
  `Item 1 p` int(11) NOT NULL,
  `Item 2 p` int(11) NOT NULL,
  `Item 3 p` int(11) NOT NULL,
  `Total sale` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `salesmen`
--

CREATE TABLE `salesmen` (
  `Name` varchar(30) NOT NULL,
  `ID` varchar(15) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `Area Code` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salesmen`
--

INSERT INTO `salesmen` (`Name`, `ID`, `Password`, `Area Code`) VALUES
('Shahriar Ahmed', 'SM_001', '21d1ce58f85b11a469ac9016ed2cdda1', 'CTG_1'),
('Ratul Roy', 'SM_002', '64c08ca6b03ea1e208c7c5bc136a1005', 'CTG_2'),
('Towhidur Alam', 'SM_003', '7fc0f76161f970f34946ceda55d1f0e7', 'CTG_3'),
('Labib Wahid', 'SM_004', '3eb75163c1643c33b3f6d4f24fd80030', 'FENI_1'),
('Souharda Biswas', 'SM_005', 'aeee3683f994e22130d378341c7a687c', 'FENI_2'),
('Yasir Mahbub', 'SM_006', '0eff6ab7e20aa809eaa7cc8ba86c31a0', 'FENI_3'),
('Mahbub Alam', 'SM_007', 'f6ed80ffcb960b7f31ff62da898bbfc0', 'DHK_1'),
('Abdullah Mamun', 'SM_008', '1cbc455c31531a6b16435a0ef32faaf4', 'DHK_2'),
('Iqbal Hossain', 'SM_009', 'b160f903928e387b5f017038d5246db8', 'DHK_3'),
('Kamrul Islam', 'SM_010', '7f69ba1ad3a61c1cd04d16e7bba988d8', 'GP_1'),
('Ashef Habib', 'SM_011', '3305fe548fe60087aa1042e98e16fb4e', 'GP_2'),
('Mahidul Zihan', 'SM_012', 'b8dc54a29df71401c8ee566371859da5', 'GP_3');

-- --------------------------------------------------------

--
-- Table structure for table `salesmen_tour_programme`
--

CREATE TABLE `salesmen_tour_programme` (
  `Salesman ID` varchar(15) NOT NULL,
  `Date` varchar(2) NOT NULL,
  `Month` varchar(2) NOT NULL,
  `Day` varchar(10) NOT NULL,
  `Market ID` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE `shops` (
  `Name` varchar(40) NOT NULL,
  `Shop ID` varchar(15) NOT NULL,
  `Market` varchar(30) NOT NULL,
  `Area Code` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `territory managers`
--

CREATE TABLE `territory managers` (
  `Name` varchar(30) NOT NULL,
  `ID` varchar(15) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `District` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `territory managers`
--

INSERT INTO `territory managers` (`Name`, `ID`, `Password`, `District`) VALUES
('Iqbal Hafiz', 'TM_01', 'b160f903928e387b5f017038d5246db8', 'Chattagram'),
('Durjoy Chowdhury', 'TM_02', '8cf5c9d9fdf1289aa6a8a70fd60dd559', 'Feni'),
('Sumnoon Ahmad', 'TM_03', '650658be73bd58554bae4471239d5b19', 'Dhaka'),
('Raju Ahmed', 'TM_04', '0de99dbac6f301dcadeb24ae57d976c7', 'Gazipur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `executives`
--
ALTER TABLE `executives`
  ADD PRIMARY KEY (`Name`);

--
-- Indexes for table `regional managers`
--
ALTER TABLE `regional managers`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `salesmen`
--
ALTER TABLE `salesmen`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `territory managers`
--
ALTER TABLE `territory managers`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
